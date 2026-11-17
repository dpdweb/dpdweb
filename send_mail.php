<?php
/**
 * send_mail.php
 * Handles AJAX submission of the contact form in default.php.
 * Sends via raw SMTP (Hostinger) using a socket connection directly -
 * NO external libraries or Composer/PHPMailer install required.
 */

header('Content-Type: application/json; charset=utf-8');

/* ---- config ---- */
$MAIL_TO      = 'connect@dpdweb.com';
$MAIL_FROM    = 'noreply@dpdweb.com';        // must be a real Hostinger mailbox
$MAIL_FROM_NM = 'Digital Pendemic Website';
$SUBJECT_TAG  = 'New enquiry from dpdweb.com';

/* ---- Hostinger SMTP settings ---- */
const SMTP_HOST     = 'smtp.hostinger.com';
const SMTP_PORT     = 465;                    // SSL
const SMTP_USER     = 'noreply@dpdweb.com';   // full mailbox address
const SMTP_PASS     = 'g7ugS@#jpB2ueqx';

function respond($success, $message) {
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Invalid request method.');
}

/* honeypot */
if (!empty($_POST['website'])) {
    respond(true, 'Thanks! Your message has been sent.');
}

$name  = trim($_POST['name']  ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$msg   = trim($_POST['message'] ?? '');

$errors = [];
if ($name === '')  $errors[] = 'Name is required.';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
if ($phone === '') $errors[] = 'Phone number is required.';
if ($msg === '')   $errors[] = 'Message is required.';

if ($errors) {
    http_response_code(422);
    respond(false, implode(' ', $errors));
}

$clean = fn($v) => preg_replace('/[\r\n]+/', ' ', $v);
$name  = $clean($name);
$email = $clean($email);
$phone = $clean($phone);

$subject = $SUBJECT_TAG . ' - ' . $name;

$body  = "You have a new enquiry from the dpdweb.com contact form:\n\n";
$body .= "Name:    $name\n";
$body .= "Email:   $email\n";
$body .= "Phone:   $phone\n\n";
$body .= "Message:\n$msg\n";

/**
 * Minimal SMTP client. Talks SMTP over TLS directly via a socket.
 * Throws Exception with a descriptive message on any failure.
 */
function smtp_send(string $host, int $port, string $user, string $pass,
                    string $fromEmail, string $fromName,
                    string $toEmail, string $replyToEmail, string $replyToName,
                    string $subject, string $body): void
{
    $errno = 0; $errstr = '';
    // "ssl://" because port 465 is implicit SSL. For port 587 you'd connect
    // plain then issue STARTTLS instead - Hostinger's default is 465/SSL.
    $conn = @stream_socket_client(
        "ssl://{$host}:{$port}", $errno, $errstr, 15,
        STREAM_CLIENT_CONNECT,
        stream_context_create(['ssl' => ['verify_peer' => true, 'verify_peer_name' => true]])
    );
    if (!$conn) {
        throw new Exception("Connection failed: $errstr ($errno)");
    }
    stream_set_timeout($conn, 15);

    $read = function () use ($conn) {
        $data = '';
        while (($line = fgets($conn, 515)) !== false) {
            $data .= $line;
            // stop once we hit a line where the 4th char is a space (end of multi-line reply)
            if (isset($line[3]) && $line[3] === ' ') break;
        }
        return $data;
    };

    $write = function (string $cmd) use ($conn) {
        fwrite($conn, $cmd . "\r\n");
    };

    $expect = function (string $response, array $codes) {
        $code = (int) substr($response, 0, 3);
        if (!in_array($code, $codes, true)) {
            throw new Exception("Unexpected SMTP response: " . trim($response));
        }
    };

    $expect($read(), [220]);                                  // server greeting

    $write('EHLO ' . ($_SERVER['SERVER_NAME'] ?? 'localhost'));
    $expect($read(), [250]);

    $write('AUTH LOGIN');
    $expect($read(), [334]);

    $write(base64_encode($user));
    $expect($read(), [334]);

    $write(base64_encode($pass));
    $expect($read(), [235]);                                  // auth success

    $write('MAIL FROM:<' . $fromEmail . '>');
    $expect($read(), [250]);

    $write('RCPT TO:<' . $toEmail . '>');
    $expect($read(), [250, 251]);

    $write('DATA');
    $expect($read(), [354]);

    $headers = [];
    $headers[] = 'From: ' . $fromName . ' <' . $fromEmail . '>';
    $headers[] = 'To: <' . $toEmail . '>';
    $headers[] = 'Reply-To: ' . $replyToName . ' <' . $replyToEmail . '>';
    $headers[] = 'Subject: ' . $subject;
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: text/plain; charset=UTF-8';
    $headers[] = 'Date: ' . date('r');

    // Per SMTP spec, lines starting with '.' must be escaped by doubling it
    $escapedBody = preg_replace('/^\./m', '..', $body);

    $data = implode("\r\n", $headers) . "\r\n\r\n" . $escapedBody . "\r\n.";
    $write($data);
    $expect($read(), [250]);                                  // message accepted

    $write('QUIT');
    fclose($conn);
}

try {
    smtp_send(
        SMTP_HOST, SMTP_PORT, SMTP_USER, SMTP_PASS,
        $MAIL_FROM, $MAIL_FROM_NM,
        $MAIL_TO, $email, $name,
        $subject, $body
    );
    respond(true, "Thanks! Your message has been sent — we'll reply within 24 hours.");
} catch (Exception $e) {
    error_log('SMTP send failed: ' . $e->getMessage());
    http_response_code(500);
    respond(false, 'Sorry, something went wrong sending your message. Please email us directly at connect@dpdweb.com.');
}
