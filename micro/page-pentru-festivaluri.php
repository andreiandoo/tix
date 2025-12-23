<?php
/**
 * Template Name: Pentru Festivaluri
 * Description: Landing page for festival organizers - scalability, payment plans, wristbands, check-in
 */

get_header();
?>

<style>
  ::selection { background: #d946ef; color: white; }

  .text-gradient {
    background: linear-gradient(135deg, #f0abfc 0%, #d946ef 30%, #a855f7 70%, #7c3aed 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shimmer 4s linear infinite;
  }
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  @keyframes float { 0%, 100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-20px) rotate(2deg); } }
  @keyframes bounceSoft { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @keyframes pulseRing { 0% { transform: scale(0.8); opacity: 1; } 100% { transform: scale(2); opacity: 0; } }
  @keyframes wristbandGlow { 0%, 100% { box-shadow: 0 0 10px rgba(217, 70, 239, 0.5); } 50% { box-shadow: 0 0 25px rgba(217, 70, 239, 0.8); } }
  @keyframes queuePulse { 0%, 100% { transform: scale(1); opacity: 0.5; } 50% { transform: scale(1.2); opacity: 1; } }
  @keyframes stageLight { 0%, 100% { opacity: 0.3; } 50% { opacity: 0.8; } }

  .animate-float { animation: float 6s ease-in-out infinite; }
  .animate-float-slow { animation: float 8s ease-in-out infinite; }
  .animate-float-fast { animation: float 4s ease-in-out infinite; }
  .animate-bounce-soft { animation: bounceSoft 2s ease-in-out infinite; }
  .animate-wristband-glow { animation: wristbandGlow 2s ease-in-out infinite; }

  .reveal { opacity: 0; transform: translateY(50px); transition: all 0.9s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }

  .hero-gradient {
    background:
      radial-gradient(ellipse 80% 50% at 50% -20%, rgba(217, 70, 239, 0.25), transparent),
      radial-gradient(ellipse 60% 40% at 80% 60%, rgba(168, 85, 247, 0.15), transparent),
      radial-gradient(ellipse 50% 30% at 20% 80%, rgba(236, 72, 153, 0.15), transparent);
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
    background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), var(--glow-color, rgba(217, 70, 239, 0.15)), transparent 40%);
    opacity: 0;
    transition: opacity 0.5s;
  }
  .glow-card:hover::before { opacity: 1; }
  .glow-card:hover { border-color: var(--border-color, rgba(217, 70, 239, 0.3)); transform: translateY(-8px); box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3); }

  .feature-icon { width: 64px; height: 64px; border-radius: 20px; display: flex; align-items: center; justify-content: center; position: relative; transition: transform 0.3s ease; }
  .feature-icon::after { content: ''; position: absolute; inset: 0; border-radius: inherit; background: inherit; filter: blur(20px); opacity: 0.4; z-index: -1; }
  .glow-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); }

  .wristband { width: 120px; height: 32px; border-radius: 16px; position: relative; display: flex; align-items: center; justify-content: center; font-size: 10px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
  .wristband::before { content: ''; position: absolute; inset: -2px; border-radius: inherit; background: inherit; filter: blur(8px); opacity: 0.5; z-index: -1; }

  .capacity-meter { height: 8px; border-radius: 4px; background: rgba(255,255,255,0.1); overflow: hidden; }
  .capacity-fill { height: 100%; border-radius: 4px; transition: width 1s ease-out; }

  .queue-dot { width: 8px; height: 8px; border-radius: 50%; animation: queuePulse 1.5s ease-in-out infinite; }

  .dashboard-mockup { background: linear-gradient(135deg, rgba(19, 19, 28, 0.9), rgba(26, 26, 39, 0.9)); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; overflow: hidden; box-shadow: 0 40px 80px -20px rgba(0, 0, 0, 0.5); }

  .testimonial-card { background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01)); border: 1px solid rgba(255,255,255,0.08); border-radius: 24px; padding: 32px; position: relative; }
  .testimonial-card::before { content: '"'; position: absolute; top: 20px; left: 24px; font-size: 80px; font-family: Georgia, serif; color: rgba(217, 70, 239, 0.2); line-height: 1; }

  .float-element { position: absolute; pointer-events: none; z-index: 0; }

  .cta-primary { position: relative; overflow: hidden; background: linear-gradient(135deg, #d946ef, #a855f7); transition: all 0.3s ease; }
  .cta-primary::before { content: ''; position: absolute; inset: 0; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transform: translateX(-100%); transition: transform 0.6s; }
  .cta-primary:hover::before { transform: translateX(100%); }
  .cta-primary:hover { transform: translateY(-2px); box-shadow: 0 20px 40px rgba(217, 70, 239, 0.4); }

  .live-indicator { position: relative; }
  .live-indicator::before { content: ''; position: absolute; inset: -4px; border-radius: 50%; background: currentColor; animation: pulseRing 2s ease-out infinite; }

  .stage-light { position: absolute; width: 60px; height: 200px; background: conic-gradient(from 180deg, transparent 0deg, var(--light-color, rgba(217, 70, 239, 0.3)) 20deg, transparent 40deg); filter: blur(10px); transform-origin: top center; animation: stageLight 4s ease-in-out infinite; }

  .counter-value { font-variant-numeric: tabular-nums; }
</style>

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">

  <!-- HERO -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden hero-gradient">
    <div class="stage-light -top-10 left-[15%] rotate-[25deg]" style="--light-color: rgba(217, 70, 239, 0.2);"></div>
    <div class="stage-light -top-10 right-[15%] -rotate-[25deg]" style="--light-color: rgba(168, 85, 247, 0.2); animation-delay: 1s;"></div>
    <div class="stage-light -top-10 left-[40%] rotate-[10deg]" style="--light-color: rgba(236, 72, 153, 0.15); animation-delay: 2s;"></div>

    <div class="float-element top-32 left-[8%] animate-float"><div class="flex items-center justify-center w-16 h-16 text-3xl border rounded-2xl bg-gradient-to-br from-brand-fuchsia/20 to-brand-purple/20 backdrop-blur-sm border-white/10">🎪</div></div>
    <div class="float-element top-48 right-[12%] animate-float-slow" style="animation-delay: 1s;"><div class="flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-pink/20 to-brand-fuchsia/20 backdrop-blur-sm border-white/10">🎸</div></div>
    <div class="float-element bottom-40 left-[15%] animate-float-fast" style="animation-delay: 0.5s;"><div class="flex items-center justify-center w-12 h-12 text-xl border rounded-xl bg-gradient-to-br from-brand-purple/20 to-brand-violet/20 backdrop-blur-sm border-white/10">⛺</div></div>
    <div class="float-element bottom-32 right-[8%] animate-float" style="animation-delay: 2s;"><div class="flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-orange/20 backdrop-blur-sm border-white/10">🎫</div></div>

    <div class="relative z-10 max-w-6xl px-6 py-20 mx-auto lg:px-8">
      <div class="text-center">
        <div class="reveal inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-brand-fuchsia/10 border border-brand-fuchsia/20 mb-8">
          <div class="flex items-center gap-1.5">
            <div class="w-2 h-2 rounded-full bg-brand-fuchsia live-indicator"></div>
            <span class="text-xs font-medium tracking-wider uppercase text-brand-fuchsia">Festival Ready</span>
          </div>
          <span class="text-brand-fuchsia/60">|</span>
          <span class="text-sm font-medium text-brand-fuchsia">100.000+ participanți</span>
        </div>

        <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-[1.05] reveal reveal-delay-1">
          Scalează Festivalul<br><span class="text-gradient">Fără Stresul.</span>
        </h1>

        <p class="max-w-3xl mx-auto mb-8 text-xl leading-relaxed md:text-2xl text-white/60 reveal reveal-delay-2">
          Zeci de mii de participanți. Scene multiple. Camping. VIP. Planuri de plată. <strong class="text-white">Platformele generice nu au fost construite pentru asta. Tixello a fost.</strong>
        </p>

        <div class="flex flex-wrap justify-center gap-2 mb-12 reveal reveal-delay-3">
          <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">🎫 Abonamente Multi-Day</span>
          <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">⛺ Add-on Camping</span>
          <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">⭐ Experiențe VIP</span>
          <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">💳 Planuri de Plată</span>
          <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">👥 Vânzări Grup</span>
          <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">🎪 Scene Multiple</span>
        </div>

        <div class="flex flex-wrap justify-center gap-8 mb-12 md:gap-16 reveal reveal-delay-3">
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 100) count++; else clearInterval(interval); }, 15) }, 500)">
            <div class="text-4xl font-bold md:text-5xl font-display text-gradient counter-value"><span x-text="count"></span>K+</div>
            <div class="text-sm text-white/50">Sesiuni procesate/minut</div>
          </div>
          <div class="hidden w-px h-16 sm:block bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 50) count++; else clearInterval(interval); }, 30) }, 700)">
            <div class="text-4xl font-bold md:text-5xl font-display text-gradient counter-value"><span x-text="count"></span>K</div>
            <div class="text-sm text-white/50">Check-in/oră</div>
          </div>
          <div class="hidden w-px h-16 sm:block bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 300) count += 3; else clearInterval(interval); }, 20) }, 900)">
            <div class="text-4xl font-bold md:text-5xl font-display text-gradient counter-value">+<span x-text="count"></span>%</div>
            <div class="text-sm text-white/50">VIP cu rate</div>
          </div>
        </div>

        <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-4">
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="inline-flex items-center justify-center gap-3 px-8 py-4 text-lg font-semibold text-white rounded-full group cta-primary">
            <span>Programează un Demo</span>
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/studii-caz')); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 text-lg font-semibold text-white transition-all border rounded-full bg-white/5 border-white/10 hover:bg-white/10 hover:border-white/20">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <span>Vezi Studii de Caz</span>
          </a>
        </div>

        <div class="flex flex-wrap justify-center gap-6 mt-12 reveal">
          <div class="flex items-center gap-2 text-sm text-white/40"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Auto-scaling infinit</span></div>
          <div class="flex items-center gap-2 text-sm text-white/40"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Zero downtime</span></div>
          <div class="flex items-center gap-2 text-sm text-white/40"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport dedicat festival</span></div>
        </div>
      </div>
    </div>

    <div class="absolute -translate-x-1/2 bottom-8 left-1/2 animate-bounce-soft">
      <div class="flex items-start justify-center w-6 h-10 p-2 border-2 rounded-full border-white/20"><div class="w-1.5 h-3 rounded-full bg-white/40 animate-pulse"></div></div>
    </div>
  </section>

  <!-- FEATURES BENTO -->
  <section class="relative py-32 overflow-hidden bg-dark-850">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-gradient-to-b from-brand-fuchsia/10 to-transparent rounded-full blur-[150px] pointer-events-none"></div>

    <div class="relative z-10 px-6 mx-auto max-w-7xl lg:px-8">
      <div class="mb-20 text-center reveal">
        <span class="inline-block px-4 py-2 mb-4 text-sm font-medium rounded-full bg-brand-fuchsia/10 text-brand-fuchsia">🎪 Funcționalități Festival</span>
        <h2 class="mb-6 text-4xl font-bold text-white font-display md:text-6xl">Tixello gestionează<br><span class="text-gradient">scala festivalurilor.</span></h2>
      </div>

      <div class="grid gap-6 lg:grid-cols-3">

        <!-- Sales at Scale -->
        <div class="p-8 glow-card lg:col-span-2" style="--glow-color: rgba(217, 70, 239, 0.15); --border-color: rgba(217, 70, 239, 0.3);">
          <div class="grid items-center gap-8 md:grid-cols-2">
            <div>
              <div class="mb-6 feature-icon bg-gradient-to-br from-brand-fuchsia to-brand-purple">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <h3 class="mb-3 text-2xl font-bold text-white font-display">Vânzări Care Nu Eșuează</h3>
              <p class="mb-4 text-white/50">Infrastructura elastică scalează automat. 100.000+ sesiuni în minute fără degradare.</p>
              <ul class="space-y-2">
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-fuchsia" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Auto-scaling infinit</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-fuchsia" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Management cozi echitabil</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-fuchsia" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Countdown-uri pre-vânzare</li>
              </ul>
            </div>
            <div>
              <div class="p-4 dashboard-mockup">
                <div class="flex items-center justify-between mb-4">
                  <span class="font-medium text-white">Vânzare Live</span>
                  <span class="flex items-center gap-1 px-2 py-1 text-xs rounded-full bg-brand-green/10 text-brand-green"><span class="w-1.5 h-1.5 rounded-full bg-brand-green animate-pulse"></span>În desfășurare</span>
                </div>
                <div class="mb-4">
                  <div class="flex items-center justify-between mb-2 text-sm"><span class="text-white/50">Procesare</span><span class="font-medium text-brand-fuchsia">12,847/min</span></div>
                  <div class="capacity-meter"><div class="capacity-fill bg-gradient-to-r from-brand-fuchsia to-brand-purple" style="width: 78%;"></div></div>
                </div>
                <div class="grid grid-cols-3 gap-2 mb-4">
                  <div class="p-2 text-center rounded-lg bg-dark-800"><div class="text-lg font-bold text-brand-green">23.4K</div><div class="text-xs text-white/40">Vândute</div></div>
                  <div class="p-2 text-center rounded-lg bg-dark-800"><div class="text-lg font-bold text-brand-amber">8.2K</div><div class="text-xs text-white/40">În coadă</div></div>
                  <div class="p-2 text-center rounded-lg bg-dark-800"><div class="text-lg font-bold text-white/70">~4m</div><div class="text-xs text-white/40">Timp așteptare</div></div>
                </div>
                <div class="flex items-center justify-center gap-2">
                  <div class="queue-dot bg-brand-fuchsia" style="animation-delay: 0s;"></div>
                  <div class="queue-dot bg-brand-purple" style="animation-delay: 0.2s;"></div>
                  <div class="queue-dot bg-brand-violet" style="animation-delay: 0.4s;"></div>
                  <div class="queue-dot bg-brand-fuchsia" style="animation-delay: 0.6s;"></div>
                  <div class="queue-dot bg-brand-purple" style="animation-delay: 0.8s;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Ticket Types -->
        <div class="p-8 glow-card" style="--glow-color: rgba(168, 85, 247, 0.15); --border-color: rgba(168, 85, 247, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-purple to-brand-violet">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Bilete Complexe</h3>
          <p class="mb-4 text-white/50">Categorii nelimitate, add-on-uri, bundling, upgrade-uri post-achiziție.</p>
          <div class="mt-4 space-y-2">
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-sm text-white/70">🎫 3-Day Pass</span><span class="text-sm font-medium text-brand-purple">249€</span></div>
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-sm text-white/70">⭐ VIP Upgrade</span><span class="text-sm font-medium text-brand-amber">+150€</span></div>
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-sm text-white/70">⛺ Camping</span><span class="text-sm font-medium text-brand-green">+45€</span></div>
          </div>
        </div>

        <!-- Payment Plans -->
        <div class="p-8 glow-card" style="--glow-color: rgba(245, 158, 11, 0.15); --border-color: rgba(245, 158, 11, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-amber to-brand-orange">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Planuri de Plată</h3>
          <p class="mb-4 text-white/50">500€ pare mult. 50€/lună timp de 10 luni? Accesibil pentru toți.</p>
          <div class="p-4 mt-4 rounded-xl bg-dark-900/50">
            <div class="mb-3 text-center"><div class="text-xs line-through text-white/40">500€</div><div class="text-xl font-bold text-brand-amber">50€/lună × 10</div></div>
            <div class="flex items-center justify-between gap-1">
              <div class="flex-1 h-2 rounded-full bg-brand-amber"></div>
              <div class="flex-1 h-2 rounded-full bg-brand-amber"></div>
              <div class="flex-1 h-2 rounded-full bg-brand-amber/50"></div>
              <div class="flex-1 h-2 rounded-full bg-white/10"></div>
              <div class="flex-1 h-2 rounded-full bg-white/10"></div>
            </div>
            <div class="mt-2 text-xs text-center text-white/40">3/10 plăți efectuate</div>
          </div>
        </div>

        <!-- Wristbands -->
        <div class="p-8 glow-card lg:col-span-2" style="--glow-color: rgba(16, 185, 129, 0.15); --border-color: rgba(16, 185, 129, 0.3);">
          <div class="grid items-center gap-8 md:grid-cols-2">
            <div>
              <div class="mb-6 feature-icon bg-gradient-to-br from-brand-green to-brand-cyan">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
              </div>
              <h3 class="mb-3 text-2xl font-bold text-white font-display">Brățări & Check-In la Scară</h3>
              <p class="mb-4 text-white/50">Suport multi-acreditare, integrare furnizori brățări, check-in la scară cu multiple benzi.</p>
              <ul class="mt-4 space-y-2">
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>RFID/NFC ready</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Multiple benzi de intrare</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Tracking reintrare camping</li>
              </ul>
            </div>
            <div class="space-y-4">
              <div class="text-white wristband bg-gradient-to-r from-brand-green to-brand-cyan animate-wristband-glow">GA • 3-DAY PASS</div>
              <div class="ml-4 text-white wristband bg-gradient-to-r from-brand-amber to-brand-orange" style="animation-delay: 0.5s;">VIP • ALL ACCESS</div>
              <div class="ml-8 text-white wristband bg-gradient-to-r from-brand-fuchsia to-brand-purple" style="animation-delay: 1s;">BACKSTAGE</div>
              <div class="ml-4 text-white wristband bg-gradient-to-r from-brand-cyan to-brand-blue" style="animation-delay: 1.5s;">⛺ CAMPING</div>
            </div>
          </div>
        </div>

        <!-- Group Sales -->
        <div class="p-8 glow-card" style="--glow-color: rgba(59, 130, 246, 0.15); --border-color: rgba(59, 130, 246, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-blue to-brand-cyan">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Vânzări Grup</h3>
          <p class="mb-4 text-white/50">Portal dedicat pentru agenții și superfani. Prețuri volum, alocare inventar.</p>
          <div class="p-3 mt-4 rounded-xl bg-dark-900/50">
            <div class="flex items-center justify-between mb-2"><span class="text-sm text-white/70">🚌 Festival Tours SRL</span><span class="text-xs font-medium text-brand-blue">50 bilete</span></div>
            <div class="flex items-center justify-between"><span class="text-sm text-white/70">🎉 Bachelor Party</span><span class="text-xs font-medium text-brand-blue">12 bilete</span></div>
          </div>
        </div>

        <!-- Real-Time Dashboard -->
        <div class="p-8 glow-card" style="--glow-color: rgba(236, 72, 153, 0.15); --border-color: rgba(236, 72, 153, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-pink to-brand-fuchsia">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Dashboard Live</h3>
          <p class="mb-4 text-white/50">Metrici în timp real pe teren. Prezență, capacitate, venituri.</p>
          <div class="mt-4 space-y-3">
            <div><div class="flex items-center justify-between mb-1 text-sm"><span class="text-white/70">Main Stage</span><span class="text-xs text-brand-green">78%</span></div><div class="capacity-meter"><div class="capacity-fill bg-brand-green" style="width: 78%;"></div></div></div>
            <div><div class="flex items-center justify-between mb-1 text-sm"><span class="text-white/70">Camping</span><span class="text-xs text-brand-amber">92%</span></div><div class="capacity-meter"><div class="capacity-fill bg-brand-amber" style="width: 92%;"></div></div></div>
            <div><div class="flex items-center justify-between mb-1 text-sm"><span class="text-white/70">VIP Area</span><span class="text-xs text-brand-rose">100%</span></div><div class="capacity-meter"><div class="capacity-fill bg-brand-rose" style="width: 100%;"></div></div></div>
          </div>
        </div>

        <!-- Marketing -->
        <div class="p-8 glow-card" style="--glow-color: rgba(249, 115, 22, 0.15); --border-color: rgba(249, 115, 22, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-orange to-brand-amber">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Marketing la Scară</h3>
          <p class="mb-4 text-white/50">Afiliați, presale-uri, retargeting server-side, waitlist conversion.</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="px-2 py-1 text-xs rounded-full bg-brand-orange/10 text-brand-orange">Afiliați</span>
            <span class="px-2 py-1 text-xs rounded-full bg-brand-pink/10 text-brand-pink">Presale</span>
            <span class="px-2 py-1 text-xs rounded-full bg-brand-blue/10 text-brand-blue">Retargeting</span>
            <span class="px-2 py-1 text-xs rounded-full bg-brand-green/10 text-brand-green">Waitlist</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="relative py-32 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="mb-16 text-center reveal">
        <span class="inline-block px-4 py-2 mb-4 text-sm font-medium rounded-full bg-brand-fuchsia/10 text-brand-fuchsia">💬 Povești de Succes</span>
        <h2 class="text-4xl font-bold text-white font-display md:text-5xl">Ce spun organizatorii de festivaluri</h2>
      </div>

      <div class="grid gap-6 md:grid-cols-3">
        <div class="testimonial-card reveal">
          <p class="relative z-10 mb-6 text-lg leading-relaxed text-white/70">"Am trecut de la 15.000 la 45.000 capacitate în trei ani. <strong class="text-white">Tixello a scalat cu noi fără să rateze un beat.</strong>"</p>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 text-lg text-white rounded-full bg-gradient-to-br from-brand-fuchsia to-brand-purple">🎧</div>
            <div><div class="font-medium text-white">Adrian S.</div><div class="text-sm text-white/40">Director, Festival Muzică Electronică</div></div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-1">
          <p class="relative z-10 mb-6 text-lg leading-relaxed text-white/70">"Planurile de plată ne-au schimbat afacerea. <strong class="text-white">Vânzările VIP au crescut cu 300%</strong> când am oferit rate."</p>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 text-lg text-white rounded-full bg-gradient-to-br from-brand-amber to-brand-orange">🎸</div>
            <div><div class="font-medium text-white">Ioana M.</div><div class="text-sm text-white/40">Director Comercial, Festival Rock</div></div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-2">
          <p class="relative z-10 mb-6 text-lg leading-relaxed text-white/70">"În primul an, vânzarea a prăbușit furnizorul anterior. Al doilea an cu Tixello, <strong class="text-white">20.000 bilete în prima oră, zero probleme.</strong>"</p>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 text-lg text-white rounded-full bg-gradient-to-br from-brand-cyan to-brand-blue">🎤</div>
            <div><div class="font-medium text-white">Radu P.</div><div class="text-sm text-white/40">Manager Operațiuni, Festival Urban</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY FESTIVALS CHOOSE -->
  <section class="relative py-32 overflow-hidden bg-dark-850">
    <div class="max-w-4xl px-6 mx-auto text-center lg:px-8">
      <div class="reveal">
        <span class="inline-block px-4 py-2 mb-4 text-sm font-medium rounded-full bg-brand-purple/10 text-brand-purple">🎪 De Ce Tixello</span>
        <h2 class="mb-12 text-4xl font-bold text-white font-display md:text-5xl">De ce festivalurile aleg Tixello</h2>

        <div class="grid gap-6 md:grid-cols-3">
          <div class="p-6 text-left border rounded-2xl bg-dark-800/50 border-white/10">
            <div class="mb-3 text-3xl">🧠</div>
            <h3 class="mb-2 font-semibold text-white">Înțelegem Festivalurile</h3>
            <p class="text-sm text-white/50">Nu doar vânzări de bilete—întregul ecosistem de abonamente, acreditări și experiențe.</p>
          </div>

          <div class="p-6 text-left border rounded-2xl bg-gradient-to-br from-brand-fuchsia/10 to-brand-purple/5 border-brand-fuchsia/20">
            <div class="mb-3 text-3xl">📈</div>
            <h3 class="mb-2 font-semibold text-white">Scalăm Cu Tine</h3>
            <p class="text-sm text-white/50">Prima ediție la 5.000 și a zecea la 100.000 rulează pe aceeași platformă.</p>
          </div>

          <div class="p-6 text-left border rounded-2xl bg-dark-800/50 border-white/10">
            <div class="mb-3 text-3xl">🤝</div>
            <h3 class="mb-2 font-semibold text-white">Suntem Acolo</h3>
            <p class="text-sm text-white/50">Suport dedicat în timpul vânzărilor și zilelor de eveniment. Oameni reali.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0">
      <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-brand-fuchsia/20 rounded-full blur-[150px]"></div>
      <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-brand-purple/20 rounded-full blur-[150px]"></div>
    </div>

    <div class="relative z-10 max-w-4xl px-6 mx-auto text-center lg:px-8">
      <div class="reveal">
        <div class="mb-6 text-6xl">🎪</div>
        <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl">Gata pentru cel mai bun<br><span class="text-gradient">festival al tău?</span></h2>
        <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60">Nu te mai lupta cu sistemul de ticketing. <strong class="text-white">Începe să te concentrezi pe crearea experiențelor de neuitat.</strong></p>

        <div class="flex flex-col justify-center gap-4 mb-8 sm:flex-row">
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="inline-flex items-center justify-center gap-3 px-10 py-5 text-lg font-semibold text-white rounded-full group cta-primary">
            <span>Programează un Demo</span>
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-5 text-lg font-semibold text-white transition-all border rounded-full bg-white/10 border-white/20 hover:bg-white/20">Contactează Vânzări</a>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Demo personalizat</span></div>
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Studii de caz</span></div>
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport dedicat</span></div>
        </div>

        <p class="mt-12 text-sm text-white/30">Tixello alimentează festivaluri de la adunări boutique de 2.000 de persoane<br>la evenimente majore de 100.000+.</p>
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
