<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digital Pendemic — Brands & Tech That Refuse to Blend In</title>

<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
<link rel="icon" href="assets/favicon.ico">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,700;12..96,800&family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;1,6..72,300&family=Space+Mono:wght@400;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,700;12..96,800&family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;1,6..72,300&family=Space+Mono:wght@400;700&display=swap" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,700;12..96,800&family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;1,6..72,300&family=Space+Mono:wght@400;700&display=swap"></noscript>

<style>
  :root{
    --ox:#0c1a1c;          /* deep teal-tinted dark bg */
    --ox-2:#13282b;        /* lighter panel */
    --ox-deep:#081315;     /* darkest */
    --bone:#eaf2ef;        /* soft white text */
    --bone-dim:#9db5b0;    /* muted teal-gray */
    --molten:#1fd195;      /* emerald-teal green primary */
    --molten-soft:#5fe3bb;
    --ember:#3ec6e8;       /* cyan-blue secondary accent */
    --line:rgba(234,242,239,0.13);
    --line-2:rgba(234,242,239,0.06);
  }
  *{margin:0;padding:0;box-sizing:border-box}
  html{scroll-behavior:smooth}
  body{background:var(--ox);color:var(--bone);font-family:'Newsreader',serif;font-weight:300;line-height:1.55;overflow-x:hidden;-webkit-font-smoothing:antialiased}
  .wrap{max-width:1200px;margin:0 auto;padding:0 40px}
  .mono{font-family:'Space Mono',monospace}
  .ph{background:var(--molten);color:var(--ox-deep);padding:0 .3em;border-radius:2px;font-family:'Space Mono',monospace;font-weight:700;font-size:.85em;white-space:nowrap}

  body::before{content:"";position:fixed;inset:0;pointer-events:none;z-index:1;opacity:.05;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E")}
  .glow{position:fixed;border-radius:50%;filter:blur(140px);z-index:0;pointer-events:none}
  .glow.a{width:560px;height:560px;background:var(--molten);opacity:.13;top:-180px;right:-120px}
  .glow.b{width:480px;height:480px;background:var(--ember);opacity:.08;bottom:6%;left:-180px}

  .fillbar{position:relative;z-index:6;background:var(--molten);color:var(--ox-deep);font-family:'Space Mono',monospace;font-size:12.5px;letter-spacing:.03em;text-align:center;padding:11px 20px;font-weight:700}
  @media print{.fillbar,.glow{display:none}}

  /* TOP BAR */
  header.bar{position:sticky;top:0;z-index:40;display:flex;justify-content:space-between;align-items:center;padding:20px 40px;background:rgba(12,26,28,0.85);backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);border-bottom:1px solid var(--line-2)}
  .brand{display:flex;align-items:center;gap:10px;font-family:'Bricolage Grotesque';font-weight:800;font-size:20px;letter-spacing:-.02em}
  .brand-logo{height:30px;width:auto;display:block}
  .brand .dot{width:9px;height:9px;border-radius:50%;background:var(--molten)}
  header.bar nav{display:flex;gap:30px;align-items:center}
  header.bar nav a{color:var(--bone-dim);text-decoration:none;font-family:'Bricolage Grotesque';font-size:14px;font-weight:500;transition:color .2s}
  header.bar nav a:hover{color:var(--molten-soft)}
  .nav-cta{background:var(--molten);color:var(--ox-deep)!important;padding:10px 20px;border-radius:100px;font-weight:700!important}
  @media(max-width:820px){
    header.bar nav a:not(.nav-cta){display:none};
    header.bar nav a {font-size: 5px !important;}
    header.bar { padding: 20px 20px;}
    .brand { font-size: 16px;}
  }

  /* HERO */
  .hero{position:relative;z-index:5;padding:96px 0 70px;text-align:center}
  .eyebrow{font-family:'Space Mono',monospace;font-size:12px;letter-spacing:.3em;text-transform:uppercase;color:var(--molten-soft);margin-bottom:30px}
  .hero h1{font-family:'Bricolage Grotesque';font-weight:800;font-size:clamp(46px,8vw,104px);line-height:.94;letter-spacing:-.035em;max-width:16ch;margin:0 auto}
  .hero h1 em{font-family:'Newsreader';font-style:italic;font-weight:300;color:var(--ember)}
  .hero .sub{margin:34px auto 0;font-size:clamp(18px,1.9vw,23px);max-width:60ch;color:var(--bone-dim);font-weight:300}
  .hero-cta{margin-top:42px;display:flex;gap:16px;justify-content:center;flex-wrap:wrap}
  .btn-primary{background:var(--molten);color:var(--ox-deep);text-decoration:none;font-family:'Bricolage Grotesque';font-weight:700;font-size:15px;padding:17px 32px;border-radius:100px;transition:transform .2s,box-shadow .2s}
  .btn-primary:hover{transform:translateY(-2px);box-shadow:0 16px 40px rgba(31,209,149,.35)}
  .btn-ghost{border:1px solid var(--line);color:var(--bone);text-decoration:none;font-family:'Bricolage Grotesque';font-weight:500;font-size:15px;padding:17px 30px;border-radius:100px;transition:border-color .2s}
  .btn-ghost:hover{border-color:var(--molten)}

  /* LOGO MARQUEE */
  
  
  
  

  /* SECTION SCAFFOLD */
  section{position:relative;z-index:5}
  .kicker{font-family:'Space Mono',monospace;font-size:12px;letter-spacing:.26em;text-transform:uppercase;color:var(--molten-soft);display:flex;align-items:center;gap:14px;margin-bottom:22px}
  .kicker::before{content:"";width:40px;height:1px;background:var(--molten-soft)}
  .sec-h{font-family:'Bricolage Grotesque';font-weight:800;font-size:clamp(30px,4.6vw,60px);letter-spacing:-.03em;line-height:1.0;max-width:20ch}
  .sec-h em{font-family:'Newsreader';font-style:italic;font-weight:300;color:var(--molten-soft)}

  /* PAIN BLOCKS (Firesauce structure) */
  .pains{padding:96px 0 40px}
  .pain-head{text-align:center;margin-bottom:54px}
  .pain-head .sec-h{margin:0 auto}
  .pain-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1px;background:var(--line-2);border:1px solid var(--line-2)}
  .pain{background:var(--ox);padding:44px 40px;transition:background .3s}
  .pain:hover{background:var(--ox-2)}
  .pain h3{font-family:'Bricolage Grotesque';font-weight:700;font-size:26px;letter-spacing:-.01em;margin-bottom:16px;display:flex;align-items:baseline;gap:12px}
  .pain h3 .no{font-family:'Space Mono',monospace;font-size:14px;color:var(--molten);font-weight:700}
  .pain p{color:var(--bone-dim);font-size:16px;line-height:1.6;max-width:46ch}
  .pain a{display:inline-flex;align-items:center;gap:8px;margin-top:22px;color:var(--molten-soft);text-decoration:none;font-family:'Bricolage Grotesque';font-weight:700;font-size:14px;border-bottom:1px solid transparent;transition:border-color .2s}
  .pain a:hover{border-color:var(--molten-soft)}
  @media(max-width:820px){.pain-grid{grid-template-columns:1fr}}

  /* TABBED SERVICES (Firesauce structure) */
  .svc{padding:96px 0 40px}
  .svc-head{margin-bottom:44px}
  .tabs{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:40px;border-bottom:1px solid var(--line);padding-bottom:24px}
  .tab{font-family:'Bricolage Grotesque';font-weight:500;font-size:15px;color:var(--bone-dim);background:none;border:1px solid var(--line);padding:10px 20px;border-radius:100px;cursor:pointer;transition:all .2s}
  .tab:hover{color:var(--bone);border-color:var(--line)}
  .tab.active{background:var(--molten);color:var(--ox-deep);border-color:var(--molten);font-weight:700}
  .panel{display:none;grid-template-columns:1.1fr .9fr;gap:50px;align-items:center;animation:fade .4s ease}
  .panel.active{display:grid}
  @keyframes fade{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:none}}
  .panel .p-copy h3{font-family:'Bricolage Grotesque';font-weight:800;font-size:clamp(28px,3.6vw,42px);letter-spacing:-.02em;line-height:1.05;margin-bottom:18px}
  .panel .p-copy .tag{font-family:'Newsreader';font-style:italic;font-size:21px;color:var(--molten-soft);margin-bottom:18px;display:block}
  .panel .p-copy p{color:var(--bone-dim);font-size:17px;line-height:1.6;max-width:48ch}
  .panel .p-copy .who{margin-top:18px;font-family:'Space Mono',monospace;font-size:12px;letter-spacing:.04em;color:var(--bone-dim)}
  .panel .p-vis{aspect-ratio:4/3;border-radius:12px;background:linear-gradient(135deg,var(--ox-2),var(--ox-deep));border:1px solid var(--line);display:flex;align-items:center;justify-content:center;padding:60px}
  .panel .p-vis img{width:52%;max-width:220px;height:auto;opacity:.9;filter:drop-shadow(0 8px 24px rgba(0,0,0,0.4))}
  @media(max-width:820px){.panel.active{grid-template-columns:1fr;gap:30px}.panel .p-vis{aspect-ratio:16/9;padding:40px}}

  /* PROCESS (Firesauce numbered structure) */
  .proc{padding:96px 0 40px}
  .proc-head{text-align:center;margin-bottom:20px}
  .proc-head .sec-h{margin:0 auto}
  .proc-quote{text-align:center;font-family:'Newsreader';font-style:italic;font-size:21px;color:var(--bone-dim);margin:0 auto 56px;max-width:50ch}
  .proc-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:28px}
  .pstep{border-top:2px solid var(--molten);padding-top:24px}
  .pstep .pn{font-family:'Bricolage Grotesque';font-weight:800;font-size:44px;color:rgba(31,209,149,.4);letter-spacing:-.04em;line-height:1}
  .pstep h4{font-family:'Bricolage Grotesque';font-weight:700;font-size:19px;margin:14px 0 10px;letter-spacing:-.01em}
  .pstep p{color:var(--bone-dim);font-size:15px;line-height:1.55}
  @media(max-width:820px){.proc-grid{grid-template-columns:1fr 1fr;gap:36px}}
  @media(max-width:520px){.proc-grid{grid-template-columns:1fr}}

  /* WORK GRID (Firesauce structure) */
  .work{padding:96px 0 40px}
  .work-head{margin-bottom:44px}
  .work-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
  .wcard{border:1px solid var(--line);border-radius:10px;overflow:hidden;transition:transform .25s,border-color .25s;background:var(--ox-2)}
  .wcard:hover{transform:translateY(-4px);border-color:var(--molten)}
  .wcard .thumb{aspect-ratio:4/3;background:linear-gradient(135deg,var(--ox-2),var(--ox-deep));display:flex;align-items:center;justify-content:center;font-family:'Bricolage Grotesque';font-weight:800;font-size:30px;color:rgba(234,242,239,.18)}
  .wcard .winfo{padding:22px 24px}
  .wcard .winfo h4{font-family:'Bricolage Grotesque';font-weight:700;font-size:19px;margin-bottom:8px}
  .wcard .winfo .tags{font-family:'Space Mono',monospace;font-size:11px;letter-spacing:.06em;color:var(--molten-soft);text-transform:uppercase}
  @media(max-width:820px){.work-grid{grid-template-columns:1fr 1fr}}
  @media(max-width:520px){.work-grid{grid-template-columns:1fr}}

  /* TESTIMONIAL CARDS (in work grid) */
  .tcard{border:1px solid var(--line);border-radius:14px;padding:32px 30px;background:var(--ox-2);display:flex;flex-direction:column;transition:transform .25s,border-color .25s;position:relative}
  .tcard:hover{transform:translateY(-4px);border-color:var(--molten)}
  .tcard .qm{font-family:'Bricolage Grotesque';font-weight:800;font-size:56px;line-height:.5;color:var(--molten);opacity:.5;margin-bottom:14px}
  .tcard .quote{font-family:'Newsreader',serif;font-size:18px;line-height:1.5;color:var(--bone);flex:1;margin-bottom:24px}
  .tcard .who{display:flex;align-items:center;gap:13px;border-top:1px solid var(--line-2);padding-top:20px}
  .tcard .who .av{width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,var(--molten),var(--ember));display:flex;align-items:center;justify-content:center;font-family:'Bricolage Grotesque';font-weight:800;font-size:16px;color:var(--ox-deep);flex-shrink:0}
  .tcard .who .meta .nm{font-family:'Bricolage Grotesque';font-weight:700;font-size:15px;color:var(--bone)}
  .tcard .who .meta .rl{font-family:'Space Mono',monospace;font-size:11px;letter-spacing:.04em;color:var(--molten-soft);margin-top:3px}
  .tcard .ph-tag{position:absolute;top:14px;right:14px;font-family:'Space Mono',monospace;font-size:9px;letter-spacing:.08em;text-transform:uppercase;color:var(--ox-deep);background:var(--molten);padding:3px 8px;border-radius:100px;font-weight:700}
  @media(max-width:820px){.work-grid{grid-template-columns:1fr}}

  /* TESTIMONIAL */
  .testi{margin:96px 0;padding:70px 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line);background:linear-gradient(180deg,rgba(31,209,149,0.05),transparent);text-align:center}
  .testi blockquote{font-family:'Newsreader';font-weight:300;font-size:clamp(24px,1.5vw,38px);line-height:1.3;max-width:90ch;margin:0 auto;letter-spacing:-.01em}
  .testi blockquote em{font-style:italic;color:var(--ember)}
  .testi .attr{margin-top:28px;font-family:'Space Mono',monospace;font-size:13px;letter-spacing:.08em;color:var(--bone-dim);text-transform:uppercase}

  /* CTA */
  .cta{padding:90px 0 100px;text-align:center}
  .cta h2{font-family:'Bricolage Grotesque';font-weight:800;font-size:clamp(36px,5.6vw,76px);letter-spacing:-.035em;line-height:.98}
  .cta h2 em{font-family:'Newsreader';font-style:italic;font-weight:300;color:var(--molten-soft)}
  .cta p{margin-top:24px;color:var(--bone-dim);font-size:18px;max-width:48ch;margin-inline:auto}
  .cta .btn-primary{margin-top:38px;display:inline-block;border:none;cursor:pointer;font-family:'Bricolage Grotesque';font-weight:700;font-size:15px}

  /* CONTACT FORM */
  /* #dp-form-wrap{max-width:560px;margin:0 auto;overflow:hidden;max-height:0;opacity:0;transition:max-height .5s ease,opacity .4s ease,margin .4s ease;}
  #dp-form-wrap.open{max-height:760px;opacity:1;margin-top:34px} */
  #dp-form-wrap{
  max-width:560px;
  margin:0 auto;
  overflow:hidden;
  max-height:0;
  opacity:0;
  padding:0;              /* ensure no padding is reserving space */
  transition:max-height .5s ease, opacity .4s ease, margin .4s ease;
}
#dp-form-wrap .dp-form {display:none;}
#dp-form-wrap.open{
  max-height:760px;
  opacity:1;
  margin-top:34px;
}

/* kill margin-collapse leakage from children */
#dp-form-wrap.open .dp-form{
  display:block; /* creates a new block formatting context, stops child margins from escaping */
}
  .dp-form{background:var(--ox-2);border:1px solid var(--line);border-radius:16px;padding:32px 30px;text-align:left}
  .dp-form .fld{margin-bottom:18px}
  .dp-form label{display:block;font-family:'Space Mono',monospace;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:var(--bone-dim);margin-bottom:8px}
  .dp-form input,.dp-form textarea{width:100%;background:var(--ox-deep);border:1px solid var(--line);border-radius:10px;padding:13px 15px;color:var(--bone);font-family:'Newsreader',serif;font-size:15px;outline:none;transition:border-color .2s}
  .dp-form input:focus,.dp-form textarea:focus{border-color:var(--molten)}
  .dp-form textarea{resize:vertical;min-height:110px}
  .dp-form .submit{width:100%;background:var(--molten);color:var(--ox-deep);border:none;border-radius:100px;padding:16px;font-family:'Bricolage Grotesque';font-weight:700;font-size:15px;cursor:pointer;transition:transform .2s,box-shadow .2s;margin-top:4px}
  .dp-form .submit:hover{transform:translateY(-2px);box-shadow:0 14px 32px rgba(31,209,149,0.3)}
  .dp-form .err{color:var(--molten-soft);font-family:'Space Mono',monospace;font-size:12px;margin-top:6px;display:none}
  .dp-form .fld.invalid .err{display:block}
  .dp-form .fld.invalid input,.dp-form .fld.invalid textarea{border-color:var(--molten-soft)}
  .dp-form .form-note{text-align:center;font-family:'Space Mono',monospace;font-size:11px;color:var(--bone-dim);margin-top:16px;line-height:1.5}

  footer{padding:50px 40px 40px;border-top:1px solid var(--line);background:var(--ox-deep)}
  .foot-grid{max-width:1200px;margin:0 auto;display:flex;justify-content:space-between;flex-wrap:wrap;gap:30px}
  .foot-grid .fb{font-family:'Bricolage Grotesque';font-weight:800;font-size:22px;letter-spacing:-.02em}
  .foot-grid .fc{font-family:'Space Mono',monospace;font-size:13px;color:var(--bone-dim);line-height:1.9}
  .foot-grid .fc a{color:var(--molten-soft);text-decoration:none}
  .foot-bottom{max-width:1200px;margin:40px auto 0;padding-top:24px;border-top:1px solid var(--line-2);font-family:'Space Mono',monospace;font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:var(--bone-dim);display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px}

  .rv{opacity:0;transform:translateY(24px);transition:opacity .8s ease,transform .8s ease}
  .rv.in{opacity:1;transform:none}

  /* ===== ASK DP CHAT WIDGET ===== */
  #askdp-bubble{position:fixed;bottom:26px;right:26px;z-index:100;width:62px;height:62px;border-radius:50%;background:var(--molten);border:none;cursor:pointer;box-shadow:0 10px 30px rgba(31,209,149,0.4);display:flex;align-items:center;justify-content:center;transition:transform .2s}
  #askdp-bubble:hover{transform:scale(1.06)}
  #askdp-bubble svg{width:28px;height:28px;fill:var(--ox-deep)}
  #askdp-bubble .close-x{display:none;font-family:'Bricolage Grotesque';font-weight:800;font-size:26px;color:var(--ox-deep);line-height:1}
  #askdp-bubble.open svg{display:none}
  #askdp-bubble.open .close-x{display:block}

  #askdp-panel{position:fixed;bottom:100px;right:26px;z-index:100;width:380px;max-width:calc(100vw - 40px);height:540px;max-height:calc(100vh - 140px);background:var(--ox-2);border:1px solid var(--line);border-radius:18px;box-shadow:0 24px 60px rgba(0,0,0,0.5);display:none;flex-direction:column;overflow:hidden;animation:dpUp .3s ease}
  #askdp-panel.open{display:flex}
  @keyframes dpUp{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:none}}

  .dp-head{padding:20px 22px;background:linear-gradient(135deg,var(--molten),var(--ember));display:flex;align-items:center;gap:12px}
  .dp-head .dp-av{width:42px;height:42px;border-radius:50%;background:var(--ox-deep);display:flex;align-items:center;justify-content:center;font-family:'Bricolage Grotesque';font-weight:800;font-size:16px;color:var(--molten-soft)}
  .dp-head .dp-t{font-family:'Bricolage Grotesque';font-weight:800;font-size:17px;color:var(--ox-deep);letter-spacing:-.01em}
  .dp-head .dp-s{font-family:'Space Mono',monospace;font-size:10.5px;color:rgba(8,19,21,0.7);letter-spacing:.04em;margin-top:2px}

  .dp-body{flex:1;overflow-y:auto;padding:20px 18px;display:flex;flex-direction:column;gap:12px}
  .dp-msg{max-width:82%;padding:12px 15px;border-radius:14px;font-family:'Newsreader',serif;font-size:15px;line-height:1.5}
  .dp-msg.bot{background:var(--ox-deep);color:var(--bone);border-bottom-left-radius:4px;align-self:flex-start}
  .dp-msg.user{background:var(--molten);color:var(--ox-deep);border-bottom-right-radius:4px;align-self:flex-end;font-weight:400}
  .dp-msg.bot a{color:var(--molten-soft);text-decoration:underline}

  .dp-chips{padding:12px 18px 6px;display:flex;flex-wrap:wrap;gap:8px;border-top:1px solid var(--line-2)}
  .dp-chip{background:none;border:1px solid var(--line);color:var(--bone-dim);font-family:'Bricolage Grotesque';font-weight:500;font-size:13px;padding:8px 14px;border-radius:100px;cursor:pointer;transition:all .18s;text-align:left}
  .dp-chip:hover{border-color:var(--molten);color:var(--bone)}

  .dp-input{padding:12px 16px 16px;display:flex;gap:8px;border-top:1px solid var(--line-2)}
  .dp-input input{flex:1;background:var(--ox-deep);border:1px solid var(--line);border-radius:100px;padding:12px 16px;color:var(--bone);font-family:'Newsreader',serif;font-size:14px;outline:none}
  .dp-input input:focus{border-color:var(--molten)}
  .dp-input button{background:var(--molten);border:none;border-radius:50%;width:42px;height:42px;cursor:pointer;flex-shrink:0;display:flex;align-items:center;justify-content:center;transition:transform .15s}
  .dp-input button:hover{transform:scale(1.05)}
  .dp-input button svg{width:18px;height:18px;fill:var(--ox-deep)}
  .dp-note{text-align:center;font-family:'Space Mono',monospace;font-size:9.5px;color:var(--bone-dim);padding:0 0 10px;letter-spacing:.02em}
  @media(max-width:520px){#askdp-panel{bottom:92px;height:70vh}}

  /* CONSULTATIONS */
  .consult{padding:96px 0 40px}
  .consult-head{margin-bottom:44px}
  .c-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--line-2);border:1px solid var(--line-2)}
  .c-card{background:var(--ox);display:flex;flex-direction:column;transition:background .3s}
  .c-card:hover{background:var(--ox-2)}
  .c-top{padding:36px 32px 24px;border-bottom:1px solid var(--line-2)}
  .c-avatar{width:54px;height:54px;border-radius:50%;background:linear-gradient(135deg,var(--molten),var(--ember));display:flex;align-items:center;justify-content:center;font-family:'Bricolage Grotesque';font-weight:800;font-size:20px;color:var(--ox-deep);margin-bottom:20px}
  .c-name{font-family:'Bricolage Grotesque';font-weight:700;font-size:24px;letter-spacing:-.01em}
  .c-role{margin-top:6px;font-family:'Space Mono',monospace;font-size:12px;letter-spacing:.1em;text-transform:uppercase;color:var(--molten-soft)}
  .c-body{padding:24px 32px 0;flex:1}
  .c-body .what{font-size:15.5px;color:var(--bone-dim);line-height:1.55}
  .c-offers{list-style:none;margin:22px 0 0;padding:0}
  .c-offers li{display:flex;gap:11px;align-items:flex-start;padding:9px 0;font-size:14.5px;color:var(--bone);border-bottom:1px solid var(--line-2)}
  .c-offers li:last-child{border-bottom:none}
  .c-offers li::before{content:"→";color:var(--molten);font-family:'Space Mono',monospace;font-size:13px;margin-top:2px}
  .c-foot{padding:26px 32px 34px;margin-top:8px}
  
  
  
  
  
  
  
  
  
  
  
  .pay-note{margin-top:14px;font-family:'Space Mono',monospace;font-size:10.5px;line-height:1.5;color:var(--bone-dim);border-top:1px solid var(--line-2);padding-top:12px}
  .pay-note code{color:var(--molten-soft);background:rgba(31,209,149,0.12);padding:1px 5px;border-radius:3px;font-size:10px}
  .book-btn{display:block;text-align:center;background:var(--molten);color:var(--ox-deep);text-decoration:none;font-family:'Bricolage Grotesque';font-weight:700;font-size:14px;padding:15px 20px;border-radius:100px;transition:transform .2s,box-shadow .2s}
  .book-btn:hover{transform:translateY(-2px);box-shadow:0 14px 32px rgba(31,209,149,0.3)}
  @media(max-width:880px){.c-grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<div class="glow a"></div>
<div class="glow b"></div>

<header class="bar">
  <div class="brand"><picture><source srcset="assets/dp-logo.webp" type="image/webp"><img src="assets/dp-logo.png" alt="DP" class="brand-logo" width="164" height="128" loading="eager" fetchpriority="high" decoding="async"></picture><span>Digital Pendemic</span><span class="dot"></span></div>
  <nav>
    <a href="#pains">Why Us</a>
    <a href="#services">Services</a>
    <a href="#process">Process</a>
    <a href="#work">Work</a>
    <a href="#consultations">Consult</a>
    <a href="#contact" class="nav-cta">Get in Touch</a>
  </nav>
</header>

<div class="wrap">

  <!-- HERO -->
  <section class="hero">
    <div class="eyebrow rv in">Trusted by teams in the US · UK · UAE · Australia</div>
    <h1 class="rv in">We build brands that <em>refuse</em> to blend in.</h1>
    <p class="sub rv in">Digital Pendemic is a full-service digital agency — strategy, web, software, media, and marketing — for ambitious businesses that are tired of looking like everyone else. Sharp work, smart team, real results.</p>
    <div class="hero-cta rv in">
      <a href="#contact" class="btn-primary">Start a Project →</a>
      <a href="#services" class="btn-ghost">See What We Do</a>
    </div>
  </section>

</div>

<div class="wrap">

  <!-- PAIN BLOCKS -->
  <section class="pains" id="pains">
    <div class="pain-head">
      <div class="kicker rv" style="justify-content:center">Sound familiar?</div>
      <h2 class="sec-h rv">The problem isn't you. It's how you <em>show up</em>.</h2>
    </div>
    <div class="pain-grid rv">
      <div class="pain">
        <h3><span class="no">01</span> Brand not pulling its weight?</h3>
        <p>You deliver great work — but your branding looks dated next to competitors and quietly costs you the clients you actually want.</p>
        <a href="#contact">Fix my brand →</a>
      </div>
      <div class="pain">
        <h3><span class="no">02</span> Stuck and can't scale?</h3>
        <p>You're ready to grow, but you're buried working in the business instead of on it — with no reliable engine bringing in new leads.</p>
        <a href="#contact">Help me grow →</a>
      </div>
      <div class="pain">
        <h3><span class="no">03</span> Website that doesn't convert?</h3>
        <p>You know you've got something special — but your site is forgettable and lets visitors leave without ever becoming clients.</p>
        <a href="#contact">Make it convert →</a>
      </div>
      <div class="pain">
        <h3><span class="no">04</span> No idea where to start?</h3>
        <p>You're the expert at what you do. You know something has to change. You're just overwhelmed by where to begin — so let's start there.</p>
        <a href="#contact">Let's start →</a>
      </div>
    </div>
  </section>

  <!-- TABBED SERVICES -->
  <section class="svc" id="services">
    <div class="svc-head">
      <div class="kicker rv">What we do</div>
      <h2 class="sec-h rv">Seven capabilities. <em>One</em> team that ships.</h2>
    </div>
    <div class="tabs rv" id="tabs">
      <button class="tab active" data-p="0">Brand &amp; Strategy</button>
      <button class="tab" data-p="1">Web &amp; Software</button>
      <button class="tab" data-p="2">Project Management</button>
      <button class="tab" data-p="3">Graphic Design</button>
      <button class="tab" data-p="4">Digital Marketing</button>
      <button class="tab" data-p="5">Media &amp; Voice</button>
      <button class="tab" data-p="6">Training &amp; Collaboration</button>
    </div>
    <div class="panels rv">
      <div class="panel active" data-p="0">
        <div class="p-copy">
          <h3>Brand &amp; Strategy</h3>
          <span class="tag">Figure out who you actually are.</span>
          <p>Bespoke brand strategy that defines your position, your voice, and your edge — then scales it into everything you do. The foundation everything else sits on.</p>
          <div class="who">→ Positioning · Identity · Messaging</div>
        </div>
        <div class="p-vis"><picture><source srcset="assets/dp-logo.webp" type="image/webp"><img src="assets/dp-logo.png" alt="Digital Pendemic" width="164" height="128" loading="lazy" decoding="async"></picture></div>
      </div>
      <div class="panel" data-p="1">
        <div class="p-copy">
          <h3>Web &amp; Software</h3>
          <span class="tag">Your site is the centre of everything.</span>
          <p>From marketing sites to full web and mobile apps — built fast, built to scale, built to turn visitors into clients. Modern stack, no bloat.</p>
          <div class="who">→ React · Next · Full-stack · Mobile</div>
        </div>
        <div class="p-vis"><picture><source srcset="assets/dp-logo.webp" type="image/webp"><img src="assets/dp-logo.png" alt="Digital Pendemic" width="164" height="128" loading="lazy" decoding="async"></picture></div>
      </div>
      <div class="panel" data-p="2">
        <div class="p-copy">
          <h3>Project Management</h3>
          <span class="tag">Keep every moving piece on track.</span>
          <p>We run your projects end to end — clear timelines, tight coordination, and a single point of contact — so work ships on time without the chaos.</p>
          <div class="who">→ Planning · Coordination · Delivery</div>
        </div>
        <div class="p-vis"><picture><source srcset="assets/dp-logo.webp" type="image/webp"><img src="assets/dp-logo.png" alt="Digital Pendemic" width="164" height="128" loading="lazy" decoding="async"></picture></div>
      </div>
      <div class="panel" data-p="3">
        <div class="p-copy">
          <h3>Graphic Design</h3>
          <span class="tag">Make people do a double take.</span>
          <p>Design is art — but art that works. Eye-catching visuals that also function as real tools to market, sell, and brand every part of your business.</p>
          <div class="who">→ Brand systems · Collateral · Social</div>
        </div>
        <div class="p-vis"><picture><source srcset="assets/dp-logo.webp" type="image/webp"><img src="assets/dp-logo.png" alt="Digital Pendemic" width="164" height="128" loading="lazy" decoding="async"></picture></div>
      </div>
      <div class="panel" data-p="4">
        <div class="p-copy">
          <h3>Digital Marketing</h3>
          <span class="tag">Get in front of the right people.</span>
          <p>Targeted SEO, paid, email, and social strategies that put your brand where your dream clients are — turning traffic into leads and leads into sales.</p>
          <div class="who">→ SEO · Paid · Email · Social</div>
        </div>
        <div class="p-vis"><picture><source srcset="assets/dp-logo.webp" type="image/webp"><img src="assets/dp-logo.png" alt="Digital Pendemic" width="164" height="128" loading="lazy" decoding="async"></picture></div>
      </div>
      <div class="panel" data-p="5">
        <div class="p-copy">
          <h3>Media &amp; Voice</h3>
          <span class="tag">Sound and look the part.</span>
          <p>Professional voiceover, podcast production, and brand media that brings your story to life — multilingual, on-brand, and built to land.</p>
          <div class="who">→ Voiceover · Podcast · Video</div>
        </div>
        <div class="p-vis"><picture><source srcset="assets/dp-logo.webp" type="image/webp"><img src="assets/dp-logo.png" alt="Digital Pendemic" width="164" height="128" loading="lazy" decoding="async"></picture></div>
      </div>
      <div class="panel" data-p="6">
        <div class="p-copy">
          <h3>Training &amp; Collaboration</h3>
          <span class="tag">Upskill your team, or borrow ours.</span>
          <p>Hands-on workshops, expert guidance, and embedded collaboration — we help your team level up and work alongside you to get things done.</p>
          <div class="who">→ Workshops · Consulting · Partnership</div>
        </div>
        <div class="p-vis"><picture><source srcset="assets/dp-logo.webp" type="image/webp"><img src="assets/dp-logo.png" alt="Digital Pendemic" width="164" height="128" loading="lazy" decoding="async"></picture></div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="proc" id="process">
    <div class="proc-head">
      <div class="kicker rv" style="justify-content:center">How it works</div>
      <h2 class="sec-h rv">Everything you need to <em>stand out</em>.</h2>
    </div>
    <p class="proc-quote rv">Four steps from "we blend in" to "we're impossible to ignore."</p>
    <div class="proc-grid rv">
      <div class="pstep">
        <div class="pn">01</div>
        <h4>Discovery call</h4>
        <p>You tell us your goals, your blockers, and where you want to be. We figure out which services get you there fastest.</p>
      </div>
      <div class="pstep">
        <div class="pn">02</div>
        <h4>Scope &amp; sign</h4>
        <p>Clear plan, clear timeline, clear price. Sign off, pay your deposit, and we dive into what makes your brand different.</p>
      </div>
      <div class="pstep">
        <div class="pn">03</div>
        <h4>Bring the work</h4>
        <p>The magic happens. We turn strategy into a brand, a site, and content engineered to generate and convert leads.</p>
      </div>
      <div class="pstep">
        <div class="pn">04</div>
        <h4>Launch &amp; grow</h4>
        <p>You launch, turn heads, and reap the rewards — with ongoing support whenever you need to keep the momentum going.</p>
      </div>
    </div>
  </section>

  <!-- WORK -->
  <section class="work" id="work">
    <div class="work-head">
      <div class="kicker rv">What clients say</div>
      <h2 class="sec-h rv">Don't take our word — take <em>theirs</em>.</h2>
    </div>
    <!-- ============================================================
         TESTIMONIALS — IT TEAM: replace the 3 sample cards below.
         Each card needs:
           .quote  → the client's testimonial (1–3 sentences)
           .av     → their initials (2 letters)
           .nm     → full name
           .rl     → role, Company  (e.g. "CEO, Acme Ltd")
         Delete the <span class="ph-tag">SAMPLE</span> line once real.
         Keep 3 cards for the 3-column layout, or add more (they wrap).
         ============================================================ -->
    <div class="work-grid rv">

      <div class="tcard">
 
        <div class="qm">&ldquo;</div>
        <div class="quote">Team DP completely transformed our digital presence. From a stunning website rebuild to consistently sharp video and graphic content across our social media, their work has elevated how we connect with clients. Professional, creative, and always responsive, they understood our brand from day one. </div>
        <div class="who">
          <div class="av">ML</div>
          <div class="meta">
            <div class="nm">Manan Law</div>
            <div class="rl">Managing Director, Equifirst Capital Financing | UAE</div>
          </div>
        </div>
      </div>

      <div class="tcard">
 
        <div class="qm">&ldquo;</div>
        <div class="quote">We’ve partnered with Digital Pendemic on multiple projects, and their content work for Red Cubez’s e-learning and LMS platforms has consistently exceeded our expectations. Beyond their top-tier production quality and exceptional voice-over work, they are remarkably agile when we face tight deadlines. Digital Pendemic is a truly reliable partner, and I look forward to many more successful collaborations ahead.</div>
        <div class="who">
          <div class="av">SG</div>
          <div class="meta">
            <div class="nm">Salman Gilani</div>
            <div class="rl">CEO, Red Cubez | Canada</div>
          </div>
        </div>
      </div>

      <div class="tcard">
 
        <div class="qm">&ldquo;</div>
        <div class="quote">This team has been an invaluable creative partner. Digital Pendemic built my website from the ground up, edited my podcast, developed branding for two of my ventures, and produced compelling videos and graphics, all with exceptional care and professionalism. They understood that my work demands credibility and clarity, and every piece they delivered reflected that.</div>
        <div class="who">
          <div class="av">AI</div>
          <div class="meta">
            <div class="nm">Arsalan Iftikhar</div>
            <div class="rl">Human Rights Lawyer & Senior Advisor, Penny Appeal | USA</div>
          </div>
        </div>
      </div>

    </div>
  </section>

</div>

<!-- TESTIMONIAL -->
<section class="testi rv">
  <div class="wrap">
    <blockquote>"<em>CIRCLE Women Association nominated Zara and her business, Digital Pendemic,</em> to participate in the UN Women EmpowerHer Digital Tech Summit 2024 at Marriott Islamabad, where her team represented our shared commitment to creating opportunities for women in technology and digital entrepreneurship."</blockquote>
    <div class="attr">— Sadaffe Abid, Founder & CEO, Circle Women Association | Pakistan
</div>
  </div>
</section>

<div class="wrap">
  <!-- CONSULTATIONS -->
  <section class="consult" id="consultations">
    <div class="consult-head">
      <div class="kicker rv">Book a specialist</div>
      <h2 class="sec-h rv">Need just <em>one</em> expert? Book direct.</h2>
    </div>
    <div class="c-grid rv">

      <!-- ZARA -->
      <div class="c-card">
        <div class="c-top">
          <div class="c-avatar">Z</div>
          <div class="c-name">Zara</div>
          <div class="c-role">Sales &amp; Business Development</div>
        </div>
        <div class="c-body">
          <p class="what">For teams that need to win more deals and close them cleanly — from first pitch to signed proposal.</p>
          <ul class="c-offers">
            <li>Sales strategy &amp; outreach</li>
            <li>Bidding &amp; tender support</li>
            <li>Proposal writing that closes</li>
            <li>Client communication &amp; follow-up</li>
            <li>Travel &amp; logistics guidance</li>
          </ul>
        </div>
        <div class="c-foot">
          <a href="#contact" class="book-btn">Book with Zara →</a>
        </div>
      </div>

      <!-- AMER -->
      <div class="c-card">
        <div class="c-top">
          <div class="c-avatar">A</div>
          <div class="c-name">Amer</div>
          <div class="c-role">Voice Over Artist</div>
        </div>
        <div class="c-body">
          <p class="what">For brands and creators who need a professional voice that lands — clear, warm, and on-brand.</p>
          <ul class="c-offers">
            <li>Commercial &amp; ad voiceover</li>
            <li>Explainer &amp; corporate narration</li>
            <li>Multilingual voice work</li>
            <li>Script read-through &amp; tone advice</li>
          </ul>
        </div>
        <div class="c-foot">
          <a href="#contact" class="book-btn">Book with Amer →</a>
        </div>
      </div>

      <!-- HAROON -->
      <div class="c-card">
        <div class="c-top">
          <div class="c-avatar">H</div>
          <div class="c-name">Haroon</div>
          <div class="c-role">Podcast · Comms · Real Estate</div>
        </div>
        <div class="c-body">
          <p class="what">For founders and brands building authority — podcast growth, sharp communication, and property marketing that sells.</p>
          <ul class="c-offers">
            <li>Podcast strategy &amp; production</li>
            <li>Brand &amp; communications consulting</li>
            <li>Real estate marketing &amp; positioning</li>
            <li>Multilingual content (EN/AR/UR/RU)</li>
          </ul>
        </div>
        <div class="c-foot">
          <a href="#contact" class="book-btn">Book with Haroon →</a>
        </div>
      </div>

    </div>
  </section>
</div>

<div class="wrap">
  <!-- CTA -->
  <section class="cta" id="contact">
    <h2 class="rv">Ready to stop <em>blending in</em>?</h2>
    <p class="rv">Tell us what you're building. We'll show you how we'd make it impossible to ignore.</p>
    <button type="button" id="dp-form-toggle" class="btn-primary rv">Get in Touch Now →</button>

    <div id="dp-form-wrap">
      <div class="dp-form">
        <div class="fld">
          <label for="cf-name">Name</label>
          <input type="text" id="cf-name" placeholder="Your name">
          <span class="err">Please enter your name.</span>
        </div>
        <div class="fld">
          <label for="cf-email">Email</label>
          <input type="email" id="cf-email" placeholder="you@company.com">
          <span class="err">Please enter a valid email.</span>
        </div>
        <div class="fld">
          <label for="cf-phone">Phone Number</label>
          <input type="tel" id="cf-phone" placeholder="+92 ...">
          <span class="err">Please enter your phone number.</span>
        </div>
        <div class="fld">
          <label for="cf-msg">Message</label>
          <textarea id="cf-msg" placeholder="Tell us what you're working on..."></textarea>
          <span class="err">Please enter a short message.</span>
        </div>
        <button type="button" class="submit" id="cf-submit">Send Message →</button>
        <div class="form-note" id="cf-status">We'll reply within 24 hours.</div>
        <input type="text" id="cf-website" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0">
      </div>
    </div>
    
  </section>
</div>

<footer>
  <div class="foot-grid">
    <div class="fb">Digital Pendemic<span style="color:var(--molten)">.</span></div>
    <div class="fc">
      <a href="mailto:connect@dpdweb.com">connect@dpdweb.com</a><br>
      <a href="tel:+923320547418">+92 332 0547418</a><br>
      <a href="https://www.linkedin.com/company/digitalpendemic/">LinkedIn</a> &nbsp;/&nbsp;
      <a href="https://www.instagram.com/digitalpendemic/">Instagram</a>
    </div>
  </div>
  <div class="foot-bottom">
    <span>© Digital Pendemic 2025</span>
    <span>Innovation Beyond Boundaries</span>
  </div>
</footer>

<script>
  const obs=new IntersectionObserver((es)=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');obs.unobserve(e.target)}})},{threshold:.12});
  document.querySelectorAll('.rv:not(.in)').forEach(el=>obs.observe(el));

  const tabs=document.querySelectorAll('.tab');
  const panels=document.querySelectorAll('.panel');
  tabs.forEach(t=>t.addEventListener('click',()=>{
    const p=t.dataset.p;
    tabs.forEach(x=>x.classList.remove('active'));
    panels.forEach(x=>x.classList.remove('active'));
    t.classList.add('active');
    document.querySelector('.panel[data-p="'+p+'"]').classList.add('active');
  }));
</script>
<!-- ===== ASK DP CHAT WIDGET ===== -->
<button id="askdp-bubble" aria-label="Open Ask DP chat">
  <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.03 2 11c0 2.38 1.02 4.55 2.7 6.16-.12 1.3-.55 2.5-1.2 3.44-.14.2-.02.48.22.5 1.8.13 3.5-.4 4.86-1.36C10 20.72 11 20.9 12 20.9c5.52 0 10-4.03 10-9s-4.48-9.9-10-9.9z"/></svg>
  <span class="close-x">&times;</span>
</button>

<div id="askdp-panel" role="dialog" aria-label="Ask DP assistant">
  <div class="dp-head">
    <div class="dp-av">DP</div>
    <div>
      <div class="dp-t">Ask DP</div>
      <div class="dp-s">Digital Pendemic · usually replies instantly</div>
    </div>
  </div>
  <div class="dp-body" id="dp-body"></div>
  <div class="dp-chips" id="dp-chips"></div>
  <div class="dp-input">
    <input id="dp-input" type="text" placeholder="Ask about our services..." autocomplete="off">
    <button id="dp-send" aria-label="Send"><svg viewBox="0 0 24 24"><path d="M2 21l21-9L2 3v7l15 2-15 2z"/></svg></button>
  </div>
  <div class="dp-note">TEST AGENT · scripted answers · update the knowledge base to expand</div>
</div>

<script>
/* ============================================================
   ASK DP — SCRIPTED TEST AGENT
   HOW TO EDIT: each entry below has keywords[] and an answer.
   The bot matches a visitor's message against keywords and
   returns the answer. Add/edit entries freely. Not real AI —
   it only knows what's written here. Replace with a real
   backend later for free-form answers.
   ============================================================ */
const DP_KB = [
  {
    keywords:["service","services","what do you do","offer","offerings","help with","capabilities"],
    answer:"We're a full-service digital agency across 7 areas: <b>Brand & Strategy, Web & Software, Content & Copy, Graphic Design, Digital Marketing, Media & Voice, and UX/UI</b>. Which one are you curious about?"
  },
  {
    keywords:["brand","branding","strategy","identity","positioning"],
    answer:"Our <b>Brand & Strategy</b> work defines your position, voice, and edge — then scales it into everything you do. It's the foundation the rest of your marketing sits on. Want to book a session? Just say \"book\"."
  },
  {
    keywords:["web","website","software","app","development","build","site"],
    answer:"We build everything from marketing sites to full web & mobile apps — modern stack, fast, and built to convert visitors into clients. Curious what that'd cost for your project? Tell the team via the <a href='#contact'>contact form</a>."
  },
  {
    keywords:["content","copy","writing","podcast","editorial"],
    answer:"Our <b>Content & Copy</b> covers brand voice, editorial, and podcast production — words that make you the authority in your space. Haroon leads podcast & comms consulting (see the Consult section)."
  },
  {
    keywords:["design","graphic","logo","visual","ux","ui"],
    answer:"We do <b>Graphic Design</b> (brand systems, collateral, social) and <b>UX/UI</b> (product flows, design systems). Eye-catching, but built to actually work as sales tools."
  },
  {
    keywords:["marketing","seo","paid","ads","social","email","leads","growth"],
    answer:"Our <b>Digital Marketing</b> covers SEO, paid, email, and social — getting your brand in front of the right people and turning traffic into leads. Want to grow? Hit <a href='#contact'>Get in Touch</a>."
  },
  {
    keywords:["voice","voiceover","voice over","audio","narration","amer"],
    answer:"<b>Amer</b> handles voice work — commercial & ad voiceover, corporate narration, and multilingual voice. Book him in the <a href='#consultations'>Consult section</a>."
  },
  {
    keywords:["real estate","property","haroon"],
    answer:"<b>Haroon</b> offers real estate marketing & positioning, plus podcast and brand communications consulting. See the <a href='#consultations'>Consult section</a> to book."
  },
  {
    keywords:["sales","bidding","tender","proposal","zara"],
    answer:"<b>Zara</b> handles sales, bidding & tender support, and proposal writing that closes. Book her in the <a href='#consultations'>Consult section</a>."
  },
  {
    keywords:["consult","consultation","book","booking","expert","session","1-on-1","one on one"],
    answer:"You can book a 1-on-1 with any of our three specialists — Zara (sales), Amer (voice), or Haroon (podcast/comms/real estate). Scroll to the <a href='#consultations'>Consult section</a> and pick your expert."
  },
  {
    keywords:["price","cost","how much","pricing","rate","fee","budget"],
    answer:"Project and consultation pricing depends on scope — the fastest way to get a number is a quick <a href='#contact'>discovery call</a>. Tell us what you're building."
  },
  {
    keywords:["who","clients","work","portfolio","case","examples","brands"],
    answer:"We've delivered work for teams across the <b>US, UK, UAE, and Australia</b> — brand, web, media, and marketing projects. Check the <a href='#work'>Work section</a> for examples."
  },
  {
    keywords:["where","location","based","office","country","dubai","uae"],
    answer:"We work with clients across four continents — US, UK, UAE, and Australia. Wherever you are, we can help. Reach us via <a href='#contact'>Get in Touch</a>."
  },
  {
    keywords:["process","how it works","steps","start","begin","get started"],
    answer:"Four steps: <b>1)</b> Discovery call, <b>2)</b> Scope & sign, <b>3)</b> We build, <b>4)</b> Launch & grow. See the <a href='#process'>Process section</a>. Ready to start? Just say \"contact\"."
  },
  {
    keywords:["contact","email","phone","reach","talk","touch","call","get in touch"],
    answer:"Easiest way is the <a href='#contact'>Get in Touch</a> button — book a discovery call and we'll reply within 24 hours. Tell us what you're working on and we'll show you how we'd tackle it."
  },
  {
    keywords:["hello","hi","hey","yo","greetings"],
    answer:"Hey! I'm DP, your guide to Digital Pendemic. I can tell you about our services, our work, or help you book a specialist. What are you after?"
  },
  {
    keywords:["thanks","thank you","cheers","appreciate"],
    answer:"Anytime! If you're ready to talk to a human, the <a href='#contact'>contact form</a> is right there. 🙌"
  }
];

const DP_FALLBACK = "Good question — I'm a test assistant so I don't have that one yet. The team can answer directly: hit <a href='#contact'>Get in Touch</a> and we'll reply fast. In the meantime, ask me about our <b>services</b>, <b>pricing</b>, or <b>booking a specialist</b>.";

const DP_GREETING = "👋 Hi, I'm DP! Ask me about what Digital Pendemic does, the work we make, or who we help. Try a question below or type your own.";

const DP_CHIPS = ["What do you do?","What does it cost?","Book a specialist","Where are you based?"];

/* ---- engine ---- */
(function(){
  const bubble=document.getElementById('askdp-bubble');
  const panel=document.getElementById('askdp-panel');
  const body=document.getElementById('dp-body');
  const chipWrap=document.getElementById('dp-chips');
  const input=document.getElementById('dp-input');
  const send=document.getElementById('dp-send');
  let greeted=false;

  function addMsg(text,who){
    const m=document.createElement('div');
    m.className='dp-msg '+who;
    m.innerHTML=text;
    body.appendChild(m);
    body.scrollTop=body.scrollHeight;
  }
  function renderChips(){
    chipWrap.innerHTML='';
    DP_CHIPS.forEach(c=>{
      const b=document.createElement('button');
      b.className='dp-chip';b.textContent=c;
      b.onclick=()=>handle(c);
      chipWrap.appendChild(b);
    });
  }
  function matchAnswer(q){
    const s=q.toLowerCase();
    for(const entry of DP_KB){
      if(entry.keywords.some(k=>s.includes(k))) return entry.answer;
    }
    return DP_FALLBACK;
  }
  function handle(q){
    addMsg(q,'user');
    setTimeout(()=>addMsg(matchAnswer(q),'bot'),380);
  }
  function openPanel(){
    panel.classList.add('open');bubble.classList.add('open');
    if(!greeted){addMsg(DP_GREETING,'bot');renderChips();greeted=true;}
    setTimeout(()=>input.focus(),200);
  }
  function closePanel(){panel.classList.remove('open');bubble.classList.remove('open');}
  bubble.onclick=()=>panel.classList.contains('open')?closePanel():openPanel();
  send.onclick=()=>{const v=input.value.trim();if(v){handle(v);input.value='';}};
  input.addEventListener('keydown',e=>{if(e.key==='Enter'){const v=input.value.trim();if(v){handle(v);input.value='';}}});
})();
/* ---- CONTACT FORM ---- */
(function(){
  const toggle=document.getElementById('dp-form-toggle');
  const wrap=document.getElementById('dp-form-wrap');
  const submit=document.getElementById('cf-submit');
  const status=document.getElementById('cf-status');
  const statusDefault=status?status.textContent:'';
  if(!toggle) return;
  toggle.addEventListener('click',()=>{
    const open=wrap.classList.toggle('open');
    toggle.textContent=open?'Close ✕':'Get in Touch Now →';
    if(open) setTimeout(()=>document.getElementById('cf-name').focus(),300);
  });
  function fld(id){return document.getElementById(id).closest('.fld');}
  function val(id){return document.getElementById(id).value.trim();}
  function validEmail(e){return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e);}
  function setStatus(text,isError){
    status.textContent=text;
    status.style.color=isError?'var(--molten-soft)':'';
  }
  submit.addEventListener('click',()=>{
    let ok=true;
    const name=val('cf-name'),email=val('cf-email'),phone=val('cf-phone'),msg=val('cf-msg');
    [['cf-name',!!name],['cf-email',validEmail(email)],['cf-phone',!!phone],['cf-msg',!!msg]].forEach(([id,good])=>{
      fld(id).classList.toggle('invalid',!good); if(!good) ok=false;
    });
    if(!ok) return;

    submit.disabled=true;
    submit.textContent='Sending...';
    setStatus('Sending your message...',false);

    const fd=new FormData();
    fd.append('name',name);
    fd.append('email',email);
    fd.append('phone',phone);
    fd.append('message',msg);
    fd.append('website',val('cf-website')); // honeypot

    fetch('send_mail.php',{method:'POST',body:fd})
      .then(r=>r.json())
      .then(data=>{
        setStatus(data.message||(data.success?'Thanks! Your message has been sent.':'Something went wrong.'),!data.success);
        if(data.success){
          ['cf-name','cf-email','cf-phone','cf-msg'].forEach(id=>document.getElementById(id).value='');
        }
      })
      .catch(()=>{
        setStatus('Something went wrong sending your message. Please email us at connect@dpdweb.com.',true);
      })
      .finally(()=>{
        submit.disabled=false;
        submit.textContent='Send Message →';
      });
  });
  // clear invalid state as the user types
  ['cf-name','cf-email','cf-phone','cf-msg'].forEach(id=>{
    document.getElementById(id).addEventListener('input',()=>{fld(id).classList.remove('invalid');setStatus(statusDefault,false);});
  });
})();
</script>
</body>
</html>
