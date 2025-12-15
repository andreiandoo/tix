<?php
/**
 * Template Name: Pentru Organizatori
 * Description: Landing page for event organizers - quick setup, checkout, analytics, marketing
 */

get_header();
?>

<style>
  ::selection { background: #f97316; color: white; }

  .text-gradient {
    background: linear-gradient(135deg, #fb923c 0%, #f97316 30%, #ea580c 70%, #c2410c 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shimmer 4s linear infinite;
  }
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  @keyframes float { 0%, 100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-20px) rotate(2deg); } }
  @keyframes bounceSoft { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @keyframes scanMove { 0%, 100% { top: 10%; } 50% { top: 90%; } }

  .animate-float { animation: float 6s ease-in-out infinite; }
  .animate-float-slow { animation: float 8s ease-in-out infinite; }
  .animate-float-fast { animation: float 4s ease-in-out infinite; }
  .animate-bounce-soft { animation: bounceSoft 2s ease-in-out infinite; }

  .reveal { opacity: 0; transform: translateY(50px); transition: all 0.9s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }

  .hero-gradient {
    background:
      radial-gradient(ellipse 80% 50% at 50% -20%, rgba(249, 115, 22, 0.2), transparent),
      radial-gradient(ellipse 60% 40% at 80% 60%, rgba(124, 58, 237, 0.15), transparent),
      radial-gradient(ellipse 50% 30% at 20% 80%, rgba(6, 182, 212, 0.1), transparent);
  }

  .noise-bg::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
    opacity: 0.03;
    pointer-events: none;
  }

  .glow-card {
    position: relative;
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 24px;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .glow-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), var(--glow-color, rgba(249, 115, 22, 0.15)), transparent 40%);
    opacity: 0;
    transition: opacity 0.5s;
  }
  .glow-card:hover::before { opacity: 1; }
  .glow-card:hover { border-color: var(--border-color, rgba(249, 115, 22, 0.3)); transform: translateY(-8px); box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3); }

  .feature-icon { width: 64px; height: 64px; border-radius: 20px; display: flex; align-items: center; justify-content: center; position: relative; transition: transform 0.3s ease; }
  .feature-icon::after { content: ''; position: absolute; inset: 0; border-radius: inherit; background: inherit; filter: blur(20px); opacity: 0.4; z-index: -1; }
  .glow-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); }

  .dashboard-mockup { background: linear-gradient(135deg, rgba(19, 19, 28, 0.9), rgba(26, 26, 39, 0.9)); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; overflow: hidden; box-shadow: 0 40px 80px -20px rgba(0, 0, 0, 0.5); }

  .chart-bar { transform-origin: bottom; transition: all 0.3s ease; }
  .chart-bar:hover { filter: brightness(1.2); transform: scaleY(1.05); }

  .counter-value { font-variant-numeric: tabular-nums; }

  .comparison-table { border-collapse: separate; border-spacing: 0; }
  .comparison-table th, .comparison-table td { border-bottom: 1px solid rgba(255,255,255,0.05); padding: 16px 20px; }
  .comparison-table tr:hover td { background: rgba(249, 115, 22, 0.05); }

  .testimonial-card { background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01)); border: 1px solid rgba(255,255,255,0.08); border-radius: 24px; padding: 32px; position: relative; }
  .testimonial-card::before { content: '"'; position: absolute; top: 20px; left: 24px; font-size: 80px; font-family: Georgia, serif; color: rgba(249, 115, 22, 0.2); line-height: 1; }

  .float-element { position: absolute; pointer-events: none; z-index: 0; }

  .cta-primary { position: relative; overflow: hidden; background: linear-gradient(135deg, #f97316, #ea580c); transition: all 0.3s ease; }
  .cta-primary::before { content: ''; position: absolute; inset: 0; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transform: translateX(-100%); transition: transform 0.6s; }
  .cta-primary:hover::before { transform: translateX(100%); }
  .cta-primary:hover { transform: translateY(-2px); box-shadow: 0 20px 40px rgba(249, 115, 22, 0.4); }

  .process-step { position: relative; }
  .process-step::after { content: ''; position: absolute; top: 32px; left: 100%; width: 100%; height: 2px; background: linear-gradient(90deg, rgba(249, 115, 22, 0.5), transparent); }
  .process-step:last-child::after { display: none; }

  .scanner-line { position: absolute; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent, #10b981, transparent); animation: scanMove 2s ease-in-out infinite; }

  .grid-pattern { background-image: linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px); background-size: 50px 50px; }
</style>

<div class="font-body bg-dark-900 text-zinc-200 overflow-x-hidden noise-bg">

  <!-- HERO -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden hero-gradient">
    <div class="absolute inset-0 grid-pattern opacity-50"></div>

    <div class="float-element top-32 left-[8%] animate-float"><div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-orange/20 to-brand-amber/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-3xl">🎪</div></div>
    <div class="float-element top-48 right-[12%] animate-float-slow" style="animation-delay: 1s;"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-indigo/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-2xl">🎭</div></div>
    <div class="float-element bottom-40 left-[15%] animate-float-fast" style="animation-delay: 0.5s;"><div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-cyan/20 to-brand-green/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-xl">🎫</div></div>
    <div class="float-element bottom-32 right-[8%] animate-float" style="animation-delay: 2s;"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-rose/20 to-brand-orange/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-2xl">📊</div></div>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 relative z-10">
      <div class="text-center">
        <div class="reveal inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-brand-orange/10 border border-brand-orange/20 mb-8">
          <div class="flex items-center gap-1">
            <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span>
            <span class="text-brand-green text-xs font-medium">LIVE</span>
          </div>
          <span class="text-brand-orange text-sm font-medium">Platforma completă pentru organizatori</span>
        </div>

        <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-[1.05] reveal reveal-delay-1">
          Vinde Tot<br><span class="text-gradient">la Fiecare Eveniment.</span>
        </h1>

        <p class="text-xl md:text-2xl text-white/60 max-w-3xl mx-auto mb-8 leading-relaxed reveal reveal-delay-2">
          Concerte, conferințe, workshop-uri, petreceri—orice aduce oamenii împreună. <strong class="text-white">Instrumentele de care ai nevoie pentru sold-out.</strong>
        </p>

        <div class="flex flex-wrap justify-center gap-3 mb-12 reveal reveal-delay-3">
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/60 text-sm hover:bg-brand-orange/10 hover:border-brand-orange/20 hover:text-white transition-all cursor-default">🎵 Concerte</span>
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/60 text-sm hover:bg-brand-violet/10 hover:border-brand-violet/20 hover:text-white transition-all cursor-default">🎤 Conferințe</span>
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/60 text-sm hover:bg-brand-cyan/10 hover:border-brand-cyan/20 hover:text-white transition-all cursor-default">📚 Workshop-uri</span>
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/60 text-sm hover:bg-brand-rose/10 hover:border-brand-rose/20 hover:text-white transition-all cursor-default">🎉 Petreceri</span>
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/60 text-sm hover:bg-brand-amber/10 hover:border-brand-amber/20 hover:text-white transition-all cursor-default">🏆 Gale</span>
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/60 text-sm hover:bg-brand-green/10 hover:border-brand-green/20 hover:text-white transition-all cursor-default">⚽ Sport</span>
        </div>

        <div class="flex flex-wrap justify-center gap-8 md:gap-16 mb-12 reveal reveal-delay-3">
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 5) count++; else clearInterval(interval); }, 300) }, 500)">
            <div class="text-4xl md:text-5xl font-display font-bold text-gradient counter-value"><span x-text="count"></span> min</div>
            <div class="text-white/50 text-sm">Configurare eveniment</div>
          </div>
          <div class="hidden sm:block w-px h-16 bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 60) count++; else clearInterval(interval); }, 25) }, 700)">
            <div class="text-4xl md:text-5xl font-display font-bold text-gradient counter-value"><span x-text="count"></span>s</div>
            <div class="text-white/50 text-sm">Checkout complet</div>
          </div>
          <div class="hidden sm:block w-px h-16 bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 25) count++; else clearInterval(interval); }, 60) }, 900)">
            <div class="text-4xl md:text-5xl font-display font-bold text-gradient counter-value">+<span x-text="count"></span>%</div>
            <div class="text-white/50 text-sm">Creștere venituri</div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-4">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group cta-primary inline-flex items-center justify-center gap-3 font-semibold text-lg px-8 py-4 rounded-full text-white">
            <span>Creează Primul Eveniment</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-8 py-4 rounded-full bg-white/5 text-white border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Vezi Demo</span>
          </a>
        </div>

        <div class="flex flex-wrap justify-center gap-6 mt-12 reveal">
          <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Fără taxe lunare</span></div>
          <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Evenimente gratuite = 0 costuri</span></div>
          <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport 24/7</span></div>
        </div>
      </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce-soft">
      <div class="w-6 h-10 rounded-full border-2 border-white/20 flex items-start justify-center p-2"><div class="w-1.5 h-3 rounded-full bg-white/40 animate-pulse"></div></div>
    </div>
  </section>

  <!-- THE JOURNEY -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-dark-900 via-dark-850 to-dark-900"></div>

    <div class="max-w-5xl mx-auto px-6 lg:px-8 relative z-10">
      <div class="text-center mb-16 reveal">
        <span class="inline-block px-4 py-2 rounded-full bg-brand-amber/10 text-brand-amber text-sm font-medium mb-4">🤔 Sună familiar?</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">Ai început să organizezi evenimente<br>din <span class="text-gradient">pasiune</span>.</h2>
        <p class="text-xl text-white/50 max-w-2xl mx-auto">Undeva pe parcurs, ai devenit expert în spreadsheet-uri, dispute de plată și email-uri de customer service.</p>
      </div>

      <div class="grid md:grid-cols-2 gap-6 mb-16">
        <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-rose/5 to-transparent border border-brand-rose/20 reveal">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center text-2xl flex-shrink-0">😩</div>
            <div><h3 class="text-white font-semibold mb-2">Ore pierdute pe setup tehnic</h3><p class="text-white/50 text-sm">În loc să te concentrezi pe experiență, lupți cu platforma de ticketing.</p></div>
          </div>
        </div>
        <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-rose/5 to-transparent border border-brand-rose/20 reveal reveal-delay-1">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center text-2xl flex-shrink-0">🤷</div>
            <div><h3 class="text-white font-semibold mb-2">Nu știi cine participă</h3><p class="text-white/50 text-sm">Datele clienților rămân ascunse în platforme care nu le partajează.</p></div>
          </div>
        </div>
        <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-rose/5 to-transparent border border-brand-rose/20 reveal">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center text-2xl flex-shrink-0">💸</div>
            <div><h3 class="text-white font-semibold mb-2">Vânzări pierdute la checkout</h3><p class="text-white/50 text-sm">Checkout-uri complicate fac clienții să abandoneze coșul.</p></div>
          </div>
        </div>
        <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-rose/5 to-transparent border border-brand-rose/20 reveal reveal-delay-1">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center text-2xl flex-shrink-0">📉</div>
            <div><h3 class="text-white font-semibold mb-2">Marketing fără direcție</h3><p class="text-white/50 text-sm">Nu știi ce canale funcționează și unde să investești bugetul.</p></div>
          </div>
        </div>
      </div>

      <div class="text-center reveal">
        <div class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-brand-green/10 border border-brand-green/20">
          <span class="text-3xl">✨</span>
          <span class="text-white font-medium">Dar dacă platforma ta de ticketing ar ajuta cu adevărat?</span>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES BENTO -->
  <section class="py-32 relative overflow-hidden bg-dark-850">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-gradient-to-b from-brand-orange/10 to-transparent rounded-full blur-[150px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
      <div class="text-center mb-20 reveal">
        <span class="inline-block px-4 py-2 rounded-full bg-brand-orange/10 text-brand-orange text-sm font-medium mb-4">🚀 Funcționalități</span>
        <h2 class="font-display text-4xl md:text-6xl font-bold text-white mb-6">Tot ce ai nevoie<br><span class="text-gradient">pentru sold-out.</span></h2>
      </div>

      <div class="grid lg:grid-cols-3 gap-6">
        <!-- Quick Setup -->
        <div class="glow-card p-8 lg:col-span-2" style="--glow-color: rgba(249, 115, 22, 0.15); --border-color: rgba(249, 115, 22, 0.3);">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <div class="feature-icon bg-gradient-to-br from-brand-orange to-brand-amber mb-6">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <h3 class="font-display text-2xl font-bold text-white mb-3">Lansează în Minute, Nu Ore</h3>
              <p class="text-white/50 mb-4">Constructorul intuitiv te duce de la idee la vânzări rapid. Adaugă detalii, setează prețuri, publică.</p>
              <ul class="space-y-2">
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Wizard pas cu pas</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Șabloane reutilizabile</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Previzualizare live</li>
              </ul>
            </div>
            <div>
              <div class="dashboard-mockup p-4">
                <div class="flex items-center gap-2 mb-4">
                  <div class="w-3 h-3 rounded-full bg-brand-rose"></div>
                  <div class="w-3 h-3 rounded-full bg-brand-amber"></div>
                  <div class="w-3 h-3 rounded-full bg-brand-green"></div>
                  <span class="text-white/30 text-xs ml-2">Creare Eveniment</span>
                </div>
                <div class="space-y-3">
                  <div class="h-3 w-24 rounded bg-white/10"></div>
                  <div class="h-10 rounded-lg bg-white/5 border border-white/10 flex items-center px-3"><span class="text-white/40 text-sm">Concert Aniversar 10 Ani</span></div>
                  <div class="grid grid-cols-2 gap-2">
                    <div class="h-10 rounded-lg bg-white/5 border border-white/10"></div>
                    <div class="h-10 rounded-lg bg-white/5 border border-white/10"></div>
                  </div>
                  <div class="h-20 rounded-lg bg-gradient-to-br from-brand-orange/20 to-brand-amber/10 border border-brand-orange/20 flex items-center justify-center"><span class="text-white/60 text-sm">📷 Drag & drop imagine</span></div>
                  <div class="flex justify-end"><div class="h-9 w-28 rounded-lg bg-brand-orange flex items-center justify-center text-white text-sm font-medium">Publică →</div></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Ticket Types -->
        <div class="glow-card p-8" style="--glow-color: rgba(124, 58, 237, 0.15); --border-color: rgba(124, 58, 237, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-violet to-brand-indigo mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Bilete Flexibile</h3>
          <p class="text-white/50 mb-4">Multiple categorii, prețuri dinamice, add-on-uri și coduri de reducere.</p>
          <div class="space-y-2 mt-4">
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-white/70 text-sm">🎫 Early Bird</span><span class="text-brand-green text-sm font-medium">-30%</span></div>
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-white/70 text-sm">⭐ VIP</span><span class="text-brand-violet text-sm font-medium">+150 RON</span></div>
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-white/70 text-sm">🎓 Student</span><span class="text-brand-cyan text-sm font-medium">-50%</span></div>
          </div>
        </div>

        <!-- Beautiful Pages -->
        <div class="glow-card p-8" style="--glow-color: rgba(6, 182, 212, 0.15); --border-color: rgba(6, 182, 212, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-cyan to-brand-green mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Pagini Care Convertesc</h3>
          <p class="text-white/50 mb-4">Design optimizat mobil, video, galerii, social proof. SEO inclus.</p>
          <div class="grid grid-cols-2 gap-3 mt-4">
            <div class="p-3 rounded-xl bg-dark-800/50 text-center"><div class="text-brand-cyan text-xl font-bold">70%+</div><div class="text-white/40 text-xs">Trafic mobil</div></div>
            <div class="p-3 rounded-xl bg-dark-800/50 text-center"><div class="text-brand-green text-xl font-bold">+35%</div><div class="text-white/40 text-xs">Conversie</div></div>
          </div>
        </div>

        <!-- Analytics -->
        <div class="glow-card p-8 lg:col-span-2" style="--glow-color: rgba(16, 185, 129, 0.15); --border-color: rgba(16, 185, 129, 0.3);">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <div class="feature-icon bg-gradient-to-br from-brand-green to-brand-cyan mb-6">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <h3 class="font-display text-2xl font-bold text-white mb-3">Înțelege-ți Audiența</h3>
              <p class="text-white/50 mb-4">Profile clienți automate, segmentare comportamentală, tracking achiziții și analize prezență.</p>
              <div class="flex flex-wrap gap-2 mt-4">
                <span class="px-3 py-1 rounded-full bg-brand-green/10 text-brand-green text-xs">CRM automat</span>
                <span class="px-3 py-1 rounded-full bg-brand-cyan/10 text-brand-cyan text-xs">Segmentare</span>
                <span class="px-3 py-1 rounded-full bg-brand-violet/10 text-brand-violet text-xs">Attribution</span>
              </div>
            </div>
            <div>
              <div class="bg-dark-900/50 rounded-xl p-4">
                <div class="flex items-center justify-between mb-4"><span class="text-white/60 text-sm">Vânzări Săptămânale</span><span class="text-brand-green text-sm font-medium">+24% ↑</span></div>
                <div class="flex items-end gap-2 h-32">
                  <div class="chart-bar flex-1 bg-gradient-to-t from-brand-green/40 to-brand-green rounded-t" style="height: 45%;"></div>
                  <div class="chart-bar flex-1 bg-gradient-to-t from-brand-green/40 to-brand-green rounded-t" style="height: 60%;"></div>
                  <div class="chart-bar flex-1 bg-gradient-to-t from-brand-green/40 to-brand-green rounded-t" style="height: 40%;"></div>
                  <div class="chart-bar flex-1 bg-gradient-to-t from-brand-green/40 to-brand-green rounded-t" style="height: 75%;"></div>
                  <div class="chart-bar flex-1 bg-gradient-to-t from-brand-green/40 to-brand-green rounded-t" style="height: 55%;"></div>
                  <div class="chart-bar flex-1 bg-gradient-to-t from-brand-green/40 to-brand-green rounded-t" style="height: 85%;"></div>
                  <div class="chart-bar flex-1 bg-gradient-to-t from-brand-cyan/40 to-brand-cyan rounded-t" style="height: 100%;"></div>
                </div>
                <div class="flex justify-between text-[10px] text-white/30 mt-2"><span>L</span><span>M</span><span>M</span><span>J</span><span>V</span><span>S</span><span>D</span></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Marketing -->
        <div class="glow-card p-8" style="--glow-color: rgba(244, 63, 94, 0.15); --border-color: rgba(244, 63, 94, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-rose to-brand-orange mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Marketing Integrat</h3>
          <p class="text-white/50 mb-4">Email campaigns, affiliate tracking, social pixels, retargeting.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <div class="w-10 h-10 rounded-lg bg-dark-800/50 flex items-center justify-center">📧</div>
            <div class="w-10 h-10 rounded-lg bg-dark-800/50 flex items-center justify-center">📘</div>
            <div class="w-10 h-10 rounded-lg bg-dark-800/50 flex items-center justify-center">📷</div>
            <div class="w-10 h-10 rounded-lg bg-dark-800/50 flex items-center justify-center">🔍</div>
            <div class="w-10 h-10 rounded-lg bg-dark-800/50 flex items-center justify-center">🎵</div>
          </div>
        </div>

        <!-- Checkout -->
        <div class="glow-card p-8" style="--glow-color: rgba(245, 158, 11, 0.15); --border-color: rgba(245, 158, 11, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-amber to-brand-orange mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Checkout Optimizat</h3>
          <p class="text-white/50 mb-4">Sub 60 secunde. Recuperare coșuri abandonate. Upselling inteligent.</p>
          <div class="p-4 rounded-xl bg-brand-amber/10 border border-brand-amber/20 mt-4">
            <div class="flex items-center gap-3"><div class="text-3xl">🛒</div><div><div class="text-brand-amber font-bold">+15%</div><div class="text-white/50 text-xs">Vânzări recuperate</div></div></div>
          </div>
        </div>

        <!-- Check-In -->
        <div class="glow-card p-8" style="--glow-color: rgba(99, 102, 241, 0.15); --border-color: rgba(99, 102, 241, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-indigo to-brand-violet mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Check-In Rapid</h3>
          <p class="text-white/50 mb-4">Aplicații gratuite de scanare. Validare sub o secundă. Funcționează offline.</p>
          <div class="relative mt-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="w-16 h-16 mx-auto rounded-lg bg-white/5 border-2 border-dashed border-white/20 flex items-center justify-center relative overflow-hidden">
              <div class="scanner-line"></div>
              <span class="text-2xl relative z-10">📱</span>
            </div>
            <div class="text-center mt-2"><span class="text-brand-green text-xs font-medium">✓ Bilet Valid</span></div>
          </div>
        </div>

        <!-- Finances -->
        <div class="glow-card p-8 lg:col-span-2" style="--glow-color: rgba(16, 185, 129, 0.15); --border-color: rgba(16, 185, 129, 0.3);">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <div class="feature-icon bg-gradient-to-br from-brand-green to-brand-cyan mb-6">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <h3 class="font-display text-2xl font-bold text-white mb-3">Finanțe Clare</h3>
              <p class="text-white/50 mb-4">Venituri în timp real, transparență comisioane, multiple procesatori, control plăți, facturare automată.</p>
              <ul class="space-y-2 mt-4">
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Stripe, PayU, Netopia</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>e-Factura România</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Plăți imediate sau programate</li>
              </ul>
            </div>
            <div>
              <div class="bg-dark-900/50 rounded-xl p-5">
                <div class="flex items-center justify-between mb-6"><span class="text-white font-medium">Venituri Totale</span><span class="px-2 py-1 rounded-full bg-brand-green/10 text-brand-green text-xs">Live</span></div>
                <div class="text-4xl font-display font-bold text-white mb-4" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 47850) count += 537; else { count = 47850; clearInterval(interval); } }, 30) }, 1000)"><span x-text="count.toLocaleString('ro-RO')"></span> <span class="text-lg text-white/50">RON</span></div>
                <div class="grid grid-cols-3 gap-3">
                  <div class="text-center p-2 rounded-lg bg-dark-800/50"><div class="text-brand-green text-sm font-bold">342</div><div class="text-white/40 text-xs">Bilete</div></div>
                  <div class="text-center p-2 rounded-lg bg-dark-800/50"><div class="text-brand-cyan text-sm font-bold">89%</div><div class="text-white/40 text-xs">Capacitate</div></div>
                  <div class="text-center p-2 rounded-lg bg-dark-800/50"><div class="text-brand-violet text-sm font-bold">140</div><div class="text-white/40 text-xs">Avg RON</div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="py-32 relative overflow-hidden bg-dark-850">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center mb-16 reveal">
        <span class="inline-block px-4 py-2 rounded-full bg-brand-orange/10 text-brand-orange text-sm font-medium mb-4">💬 Testimoniale</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white">Ce spun organizatorii</h2>
      </div>

      <div class="grid md:grid-cols-3 gap-6">
        <div class="testimonial-card reveal">
          <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Obișnuiam să petrec ore înainte de fiecare eveniment luptându-mă cu sistemul de ticketing. <strong class="text-white">Tixello pur și simplu funcționează.</strong> Configurez evenimente în minute."</p>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-orange to-brand-amber flex items-center justify-center text-white text-lg">🎵</div>
            <div><div class="text-white font-medium">Mihai D.</div><div class="text-white/40 text-sm">Promotor Independent Concerte</div></div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-1">
          <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Insight-urile despre clienți mi-au schimbat modul în care fac marketing. <strong class="text-white">În sfârșit știu cine vine efectiv</strong> la evenimentele mele."</p>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-violet to-brand-indigo flex items-center justify-center text-white text-lg">🎤</div>
            <div><div class="text-white font-medium">Elena R.</div><div class="text-white/40 text-sm">Organizator Conferințe</div></div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-2">
          <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Am crescut veniturile cu <strong class="text-white">25% doar din funcționalitățile de upselling.</strong> Add-on-urile și upgrade-urile sunt acum venituri semnificative."</p>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-cyan to-brand-green flex items-center justify-center text-white text-lg">📚</div>
            <div><div class="text-white font-medium">Andrei P.</div><div class="text-white/40 text-sm">Producător Workshop-uri</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="py-32 relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
      <div class="text-center mb-16 reveal">
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-4">Începerea durează <span class="text-gradient">minute</span></h2>
      </div>

      <div class="grid md:grid-cols-5 gap-4">
        <div class="process-step text-center reveal">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-orange to-brand-amber flex items-center justify-center text-white font-display font-bold text-2xl mx-auto mb-4">1</div>
          <h3 class="text-white font-semibold mb-1">Creează Cont</h3>
          <p class="text-white/50 text-sm">Gratuit, instant</p>
        </div>
        <div class="process-step text-center reveal reveal-delay-1">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-amber to-brand-green flex items-center justify-center text-white font-display font-bold text-2xl mx-auto mb-4">2</div>
          <h3 class="text-white font-semibold mb-1">Adaugă Eveniment</h3>
          <p class="text-white/50 text-sm">Wizard pas cu pas</p>
        </div>
        <div class="process-step text-center reveal reveal-delay-2">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-green to-brand-cyan flex items-center justify-center text-white font-display font-bold text-2xl mx-auto mb-4">3</div>
          <h3 class="text-white font-semibold mb-1">Personalizează</h3>
          <p class="text-white/50 text-sm">Brand, imagini, prețuri</p>
        </div>
        <div class="process-step text-center reveal reveal-delay-3">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-cyan to-brand-violet flex items-center justify-center text-white font-display font-bold text-2xl mx-auto mb-4">4</div>
          <h3 class="text-white font-semibold mb-1">Conectează Plăți</h3>
          <p class="text-white/50 text-sm">Stripe sau altele</p>
        </div>
        <div class="process-step text-center reveal reveal-delay-4">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-violet to-brand-rose flex items-center justify-center text-white font-display font-bold text-2xl mx-auto mb-4">5</div>
          <h3 class="text-white font-semibold mb-1">Mergi Live! 🚀</h3>
          <p class="text-white/50 text-sm">Vinde imediat</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0">
      <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-brand-orange/20 rounded-full blur-[150px]"></div>
      <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-brand-violet/20 rounded-full blur-[150px]"></div>
    </div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
      <div class="reveal">
        <div class="text-6xl mb-6">🎪</div>
        <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6">Următorul tău<br><span class="text-gradient">sold-out</span><br>începe aici.</h2>
        <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto">Nu te mai mulțumi cu platforme care nu înțeleg evenimentele. <strong class="text-white">Începe să folosești instrumente construite pentru organizatori.</strong></p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group cta-primary inline-flex items-center justify-center gap-3 font-semibold text-lg px-10 py-5 rounded-full text-white">
            <span>Creează Cont Gratuit</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-5 rounded-full bg-white/10 text-white border border-white/20 hover:bg-white/20 transition-all">Vezi Demo</a>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Fără card de credit</span></div>
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Configurare în 5 minute</span></div>
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport 24/7</span></div>
        </div>
      </div>
    </div>
  </section>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Scroll reveal
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('revealed'); });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // Glow card mouse tracking
    document.querySelectorAll('.glow-card').forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        card.style.setProperty('--mouse-x', e.clientX - rect.left + 'px');
        card.style.setProperty('--mouse-y', e.clientY - rect.top + 'px');
      });
    });

    // Floating elements parallax
    document.addEventListener('mousemove', (e) => {
      document.querySelectorAll('.float-element').forEach((el, i) => {
        const speed = (i + 1) * 10;
        el.style.transform = `translate(${(e.clientX / window.innerWidth - 0.5) * speed}px, ${(e.clientY / window.innerHeight - 0.5) * speed}px)`;
      });
    });
  });
</script>

<?php get_footer(); ?>
