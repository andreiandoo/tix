<?php
/**
 * Template Name: Pentru Stadioane
 * Description: Landing page for stadium operators - simplified ticketing at scale
 */

get_header();
?>

<style>
  ::selection { background: #059669; color: white; }

  .text-gradient {
    background: linear-gradient(135deg, #6ee7b7 0%, #10b981 30%, #059669 70%, #047857 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shimmer 4s linear infinite;
  }
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  @keyframes float { 0%, 100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-20px) rotate(2deg); } }
  @keyframes bounceSoft { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @keyframes pulse-gate { 0%, 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); } 50% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); } }
  @keyframes scan-line { 0% { top: 0; } 100% { top: 100%; } }
  @keyframes money-flow { 0% { transform: translateY(0) scale(1); opacity: 1; } 100% { transform: translateY(-20px) scale(0.8); opacity: 0; } }
  @keyframes crowd-wave { 0%, 100% { transform: scaleY(1); } 50% { transform: scaleY(1.1); } }

  .animate-float { animation: float 6s ease-in-out infinite; }
  .animate-float-slow { animation: float 8s ease-in-out infinite; }
  .animate-float-fast { animation: float 4s ease-in-out infinite; }
  .animate-bounce-soft { animation: bounceSoft 2s ease-in-out infinite; }
  .animate-pulse-gate { animation: pulse-gate 2s ease-in-out infinite; }

  .reveal { opacity: 0; transform: translateY(50px); transition: all 0.9s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }

  .hero-gradient {
    background:
      radial-gradient(ellipse 80% 50% at 50% -20%, rgba(16, 185, 129, 0.25), transparent),
      radial-gradient(ellipse 60% 40% at 80% 60%, rgba(5, 150, 105, 0.15), transparent),
      radial-gradient(ellipse 50% 30% at 20% 80%, rgba(6, 182, 212, 0.15), transparent);
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
    background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), var(--glow-color, rgba(16, 185, 129, 0.15)), transparent 40%);
    opacity: 0;
    transition: opacity 0.5s;
  }
  .glow-card:hover::before { opacity: 1; }
  .glow-card:hover { border-color: var(--border-color, rgba(16, 185, 129, 0.3)); transform: translateY(-8px); box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3); }

  .feature-icon { width: 64px; height: 64px; border-radius: 20px; display: flex; align-items: center; justify-content: center; position: relative; transition: transform 0.3s ease; }
  .feature-icon::after { content: ''; position: absolute; inset: 0; border-radius: inherit; background: inherit; filter: blur(20px); opacity: 0.4; z-index: -1; }
  .glow-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); }

  /* Stadium Field */
  .stadium-field {
    background: linear-gradient(90deg,
      rgba(21, 128, 61, 0.3) 0%,
      rgba(21, 128, 61, 0.4) 10%,
      rgba(21, 128, 61, 0.3) 20%,
      rgba(21, 128, 61, 0.4) 30%,
      rgba(21, 128, 61, 0.3) 40%,
      rgba(21, 128, 61, 0.4) 50%,
      rgba(21, 128, 61, 0.3) 60%,
      rgba(21, 128, 61, 0.4) 70%,
      rgba(21, 128, 61, 0.3) 80%,
      rgba(21, 128, 61, 0.4) 90%,
      rgba(21, 128, 61, 0.3) 100%
    );
    border-radius: 8px;
    position: relative;
  }
  .stadium-field::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background: rgba(255,255,255,0.2);
  }
  .stadium-field::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px;
    border: 2px solid rgba(255,255,255,0.2);
    border-radius: 50%;
  }

  /* Gate Indicator */
  .gate-indicator {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    position: relative;
  }
  .gate-online { background: rgba(16, 185, 129, 0.2); border: 2px solid #10b981; color: #10b981; }
  .gate-offline { background: rgba(245, 158, 11, 0.2); border: 2px solid #f59e0b; color: #f59e0b; }
  .gate-indicator.gate-online::before {
    content: '';
    position: absolute;
    inset: -4px;
    border-radius: 50%;
    border: 2px solid #10b981;
    animation: pulse-gate 2s ease-out infinite;
  }

  /* Phone Mockup */
  .phone-mockup {
    width: 200px;
    height: 400px;
    background: linear-gradient(135deg, #1a1a27, #13131c);
    border-radius: 36px;
    border: 3px solid rgba(255,255,255,0.1);
    padding: 12px;
    position: relative;
    box-shadow: 0 40px 80px -20px rgba(0,0,0,0.5);
  }
  .phone-mockup::before {
    content: '';
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 6px;
    background: rgba(255,255,255,0.1);
    border-radius: 3px;
  }
  .phone-screen {
    width: 100%;
    height: 100%;
    background: #0a0a0f;
    border-radius: 24px;
    overflow: hidden;
    padding: 40px 12px 12px;
  }

  /* Scan Animation */
  .scan-effect {
    position: absolute;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, #10b981, transparent);
    animation: scan-line 2s ease-in-out infinite;
  }

  /* Equipment Comparison */
  .equipment-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    border-radius: 12px;
    background: rgba(244, 63, 94, 0.1);
    border: 1px solid rgba(244, 63, 94, 0.2);
  }
  .equipment-item.good {
    background: rgba(16, 185, 129, 0.1);
    border: 1px solid rgba(16, 185, 129, 0.2);
  }

  /* Commission Bar */
  .commission-bar {
    height: 48px;
    border-radius: 12px;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
  }
  .commission-fill {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 14px;
    transition: width 1s ease-out;
  }

  /* Capacity Meter */
  .capacity-ring {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: conic-gradient(#10b981 0deg, #10b981 var(--fill, 270deg), rgba(255,255,255,0.1) var(--fill, 270deg));
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }
  .capacity-ring::before {
    content: '';
    position: absolute;
    inset: 12px;
    background: #0a0a0f;
    border-radius: 50%;
  }

  .dashboard-mockup { background: linear-gradient(135deg, rgba(19, 19, 28, 0.9), rgba(26, 26, 39, 0.9)); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; overflow: hidden; box-shadow: 0 40px 80px -20px rgba(0, 0, 0, 0.5); }

  .testimonial-card { background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01)); border: 1px solid rgba(255,255,255,0.08); border-radius: 24px; padding: 32px; position: relative; }
  .testimonial-card::before { content: '"'; position: absolute; top: 20px; left: 24px; font-size: 80px; font-family: Georgia, serif; color: rgba(16, 185, 129, 0.2); line-height: 1; }

  .float-element { position: absolute; pointer-events: none; z-index: 0; }

  .cta-primary { position: relative; overflow: hidden; background: linear-gradient(135deg, #10b981, #059669); transition: all 0.3s ease; }
  .cta-primary::before { content: ''; position: absolute; inset: 0; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transform: translateX(-100%); transition: transform 0.6s; }
  .cta-primary:hover::before { transform: translateX(100%); }
  .cta-primary:hover { transform: translateY(-2px); box-shadow: 0 20px 40px rgba(16, 185, 129, 0.4); }

  .counter-value { font-variant-numeric: tabular-nums; }

  /* Tribune Sections */
  .tribune-section {
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
</style>

<!-- HERO -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden hero-gradient">
  <div class="float-element top-32 left-[8%] animate-float"><div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-emerald/20 to-brand-green/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-3xl">&#127967;</div></div>
  <div class="float-element top-48 right-[12%] animate-float-slow" style="animation-delay: 1s;"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-teal/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-2xl">&#9917;</div></div>
  <div class="float-element bottom-40 left-[15%] animate-float-fast" style="animation-delay: 0.5s;"><div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-green/20 to-brand-emerald/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-xl">&#128241;</div></div>
  <div class="float-element bottom-32 right-[8%] animate-float" style="animation-delay: 2s;"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-lime/20 to-brand-green/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-2xl">&#127915;</div></div>

  <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 relative z-10">
    <div class="text-center">
      <div class="reveal inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-brand-emerald/10 border border-brand-emerald/20 mb-8">
        <span class="text-2xl">&#127967;</span>
        <span class="text-brand-emerald text-sm font-medium">Ticketing pentru evenimente de masa</span>
      </div>

      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-[1.05] reveal reveal-delay-1">
        50.000 de Spectatori.<br><span class="text-gradient">Un Singur Telefon.</span>
      </h1>

      <p class="text-xl md:text-2xl text-white/60 max-w-3xl mx-auto mb-8 leading-relaxed reveal reveal-delay-2">
        Fara POS-uri, fara case de marcat, fara imprimante, fara scanere cu cablu. <strong class="text-white">Doar telefonul echipei tale si 1% comision.</strong>
      </p>

      <!-- Pain Points Crossed -->
      <div class="flex flex-wrap justify-center gap-3 mb-12 reveal reveal-delay-3">
        <span class="px-3 py-1.5 rounded-full bg-brand-rose/10 border border-brand-rose/20 text-brand-rose/60 text-xs line-through">&#128424; Imprimante</span>
        <span class="px-3 py-1.5 rounded-full bg-brand-rose/10 border border-brand-rose/20 text-brand-rose/60 text-xs line-through">&#128179; POS-uri</span>
        <span class="px-3 py-1.5 rounded-full bg-brand-rose/10 border border-brand-rose/20 text-brand-rose/60 text-xs line-through">&#129534; Case de Marcat</span>
        <span class="px-3 py-1.5 rounded-full bg-brand-rose/10 border border-brand-rose/20 text-brand-rose/60 text-xs line-through">&#128225; Scanere cu Cablu</span>
        <span class="px-3 py-1.5 rounded-full bg-brand-rose/10 border border-brand-rose/20 text-brand-rose/60 text-xs line-through">&#128101; Echipe Externe</span>
      </div>

      <!-- What You Get -->
      <div class="flex flex-wrap justify-center gap-2 mb-12 reveal reveal-delay-3">
        <span class="px-4 py-2 rounded-full bg-brand-emerald/10 border border-brand-emerald/20 text-brand-emerald text-sm font-medium">&#128241; Telefonul tau = Tot</span>
        <span class="px-4 py-2 rounded-full bg-brand-emerald/10 border border-brand-emerald/20 text-brand-emerald text-sm font-medium">&#128176; 1% Comision</span>
        <span class="px-4 py-2 rounded-full bg-brand-emerald/10 border border-brand-emerald/20 text-brand-emerald text-sm font-medium">&#128244; Functioneaza Offline</span>
      </div>

      <!-- Stats Row -->
      <div class="flex flex-wrap justify-center gap-8 md:gap-16 mb-12 reveal reveal-delay-3">
        <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 50) count++; else clearInterval(interval); }, 30) }, 500)">
          <div class="text-4xl md:text-5xl font-display font-bold text-gradient counter-value"><span x-text="count"></span>K+</div>
          <div class="text-white/50 text-sm">Capacitate suportata</div>
        </div>
        <div class="hidden sm:block w-px h-16 bg-white/10"></div>
        <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 20) count++; else clearInterval(interval); }, 75) }, 700)">
          <div class="text-4xl md:text-5xl font-display font-bold text-gradient counter-value"><span x-text="count"></span></div>
          <div class="text-white/50 text-sm">Puncte de acces simultan</div>
        </div>
        <div class="hidden sm:block w-px h-16 bg-white/10"></div>
        <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 100) count++; else clearInterval(interval); }, 15) }, 900)">
          <div class="text-4xl md:text-5xl font-display font-bold text-gradient counter-value"><span x-text="count"></span>%</div>
          <div class="text-white/50 text-sm">Offline capable</div>
        </div>
      </div>

      <!-- CTAs -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-4">
        <a href="<?php echo esc_url(home_url('/demo')); ?>" class="group cta-primary inline-flex items-center justify-center gap-3 font-semibold text-lg px-8 py-4 rounded-full text-white">
          <span>Programeaza un Demo</span>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/calculator')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-8 py-4 rounded-full bg-white/5 text-white border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
          <span>Calculeaza Economiile</span>
        </a>
      </div>

      <!-- Trust -->
      <div class="flex flex-wrap justify-center gap-6 mt-12 reveal">
        <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Setup in 48h</span></div>
        <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Training 2 ore</span></div>
        <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport in ziua meciului</span></div>
      </div>
    </div>
  </div>

  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce-soft">
    <div class="w-6 h-10 rounded-full border-2 border-white/20 flex items-start justify-center p-2"><div class="w-1.5 h-3 rounded-full bg-white/40 animate-pulse"></div></div>
  </div>
</section>

<!-- EQUIPMENT COMPARISON -->
<section class="py-32 relative overflow-hidden">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16 reveal">
      <span class="inline-block px-4 py-2 rounded-full bg-brand-rose/10 text-brand-rose text-sm font-medium mb-4">&#10060; Ce Nu Mai Ai Nevoie</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
        Concurenta iti cere un arsenal.<br><span class="text-gradient">Noi iti cerem un telefon.</span>
      </h2>
    </div>

    <div class="grid md:grid-cols-2 gap-8 items-start reveal">
      <!-- Old Way -->
      <div class="p-6 rounded-3xl bg-dark-800/50 border border-brand-rose/20">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 rounded-xl bg-brand-rose/20 flex items-center justify-center text-xl">&#128552;</div>
          <div>
            <div class="text-brand-rose font-semibold">Sistemul vechi</div>
            <div class="text-white/40 text-sm">Ce ti se cere in mod normal</div>
          </div>
        </div>

        <div class="space-y-3">
          <div class="equipment-item">
            <span class="text-xl">&#128424;</span>
            <div class="flex-1">
              <div class="text-white/70">Imprimante de bilete</div>
              <div class="text-white/40 text-xs">~2.000&#8364;/bucata x 10 porti</div>
            </div>
            <span class="text-brand-rose font-bold">20.000&#8364;</span>
          </div>

          <div class="equipment-item">
            <span class="text-xl">&#128179;</span>
            <div class="flex-1">
              <div class="text-white/70">Terminale POS</div>
              <div class="text-white/40 text-xs">~500&#8364;/bucata x 10 porti</div>
            </div>
            <span class="text-brand-rose font-bold">5.000&#8364;</span>
          </div>

          <div class="equipment-item">
            <span class="text-xl">&#129534;</span>
            <div class="flex-1">
              <div class="text-white/70">Case de marcat fiscale</div>
              <div class="text-white/40 text-xs">~1.500&#8364;/bucata x 10 porti</div>
            </div>
            <span class="text-brand-rose font-bold">15.000&#8364;</span>
          </div>

          <div class="equipment-item">
            <span class="text-xl">&#128225;</span>
            <div class="flex-1">
              <div class="text-white/70">Scanere profesionale</div>
              <div class="text-white/40 text-xs">~300&#8364;/bucata x 20 intrari</div>
            </div>
            <span class="text-brand-rose font-bold">6.000&#8364;</span>
          </div>

          <div class="equipment-item">
            <span class="text-xl">&#128101;</span>
            <div class="flex-1">
              <div class="text-white/70">Echipa externa ticketing</div>
              <div class="text-white/40 text-xs">~50&#8364;/om x 30 oameni x 20 meciuri</div>
            </div>
            <span class="text-brand-rose font-bold">30.000&#8364;</span>
          </div>

          <div class="equipment-item">
            <span class="text-xl">&#128218;</span>
            <div class="flex-1">
              <div class="text-white/70">Training & proceduri</div>
              <div class="text-white/40 text-xs">Zile intregi de invatat</div>
            </div>
            <span class="text-brand-rose font-bold">???</span>
          </div>

          <div class="mt-4 p-4 rounded-xl bg-brand-rose/10 border border-brand-rose/30">
            <div class="flex items-center justify-between">
              <span class="text-white font-medium">Total investitie</span>
              <span class="text-brand-rose font-display text-2xl font-bold">~76.000&#8364;+</span>
            </div>
          </div>
        </div>
      </div>

      <!-- New Way -->
      <div class="p-6 rounded-3xl bg-dark-800/50 border border-brand-emerald/20">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 rounded-xl bg-brand-emerald/20 flex items-center justify-center text-xl">&#128526;</div>
          <div>
            <div class="text-brand-emerald font-semibold">Sistemul Tixello</div>
            <div class="text-white/40 text-sm">Ce ai nevoie cu adevarat</div>
          </div>
        </div>

        <div class="space-y-3">
          <div class="equipment-item good">
            <span class="text-xl">&#128241;</span>
            <div class="flex-1">
              <div class="text-white/70">Telefoane/tablete existente</div>
              <div class="text-white/40 text-xs">Orice smartphone Android/iOS</div>
            </div>
            <span class="text-brand-emerald font-bold">0&#8364;</span>
          </div>

          <div class="equipment-item good">
            <span class="text-xl">&#128247;</span>
            <div class="flex-1">
              <div class="text-white/70">Camera telefonului = scanner</div>
              <div class="text-white/40 text-xs">Scanare QR instant</div>
            </div>
            <span class="text-brand-emerald font-bold">0&#8364;</span>
          </div>

          <div class="equipment-item good">
            <span class="text-xl">&#128179;</span>
            <div class="flex-1">
              <div class="text-white/70">Incasare cu telefonul</div>
              <div class="text-white/40 text-xs">Card, Apple Pay, Google Pay</div>
            </div>
            <span class="text-brand-emerald font-bold">0&#8364;</span>
          </div>

          <div class="equipment-item good">
            <span class="text-xl">&#129534;</span>
            <div class="flex-1">
              <div class="text-white/70">eFactura automat</div>
              <div class="text-white/40 text-xs">Fiscalizare integrata</div>
            </div>
            <span class="text-brand-emerald font-bold">0&#8364;</span>
          </div>

          <div class="equipment-item good">
            <span class="text-xl">&#128101;</span>
            <div class="flex-1">
              <div class="text-white/70">Staff-ul tau existent</div>
              <div class="text-white/40 text-xs">Training: 2 ore</div>
            </div>
            <span class="text-brand-emerald font-bold">0&#8364;</span>
          </div>

          <div class="equipment-item good">
            <span class="text-xl">&#128244;</span>
            <div class="flex-1">
              <div class="text-white/70">Mod offline inclus</div>
              <div class="text-white/40 text-xs">Functioneaza fara internet</div>
            </div>
            <span class="text-brand-emerald font-bold">0&#8364;</span>
          </div>

          <div class="mt-4 p-4 rounded-xl bg-brand-emerald/10 border border-brand-emerald/30">
            <div class="flex items-center justify-between">
              <span class="text-white font-medium">Total investitie</span>
              <span class="text-brand-emerald font-display text-2xl font-bold">0&#8364;</span>
            </div>
            <div class="text-white/50 text-sm mt-1">+ doar 1% comision per bilet</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COMMISSION IMPACT -->
<section class="py-32 relative overflow-hidden bg-dark-850">
  <div class="max-w-5xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16 reveal">
      <span class="inline-block px-4 py-2 rounded-full bg-brand-amber/10 text-brand-amber text-sm font-medium mb-4">&#128176; Diferenta de Comision</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
        La 1 milion RON vanzari pe sezon,<br><span class="text-gradient">economisesti 70.000-90.000 RON.</span>
      </h2>
    </div>

    <div class="grid md:grid-cols-2 gap-8 items-center reveal">
      <div class="space-y-6">
        <div>
          <div class="flex items-center justify-between mb-2">
            <span class="text-white/70">Alte platforme (8-10%)</span>
            <span class="text-brand-rose font-bold">-90.000 RON</span>
          </div>
          <div class="commission-bar bg-dark-800">
            <div class="commission-fill bg-gradient-to-r from-brand-rose/80 to-brand-rose text-white rounded-xl" style="width: 90%;">90.000 RON comision</div>
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between mb-2">
            <span class="text-brand-emerald font-medium">Tixello (1%)</span>
            <span class="text-brand-green font-bold">-10.000 RON</span>
          </div>
          <div class="commission-bar bg-dark-800">
            <div class="commission-fill bg-gradient-to-r from-brand-green/80 to-brand-green text-white rounded-l-xl" style="width: 10%;">10K</div>
          </div>
        </div>

        <div class="p-5 rounded-xl bg-brand-green/10 border border-brand-green/20">
          <div class="flex items-center justify-between">
            <span class="text-white font-medium">Economii per sezon</span>
            <span class="text-brand-green font-display text-4xl font-bold">+80.000 RON</span>
          </div>
        </div>
      </div>

      <div class="space-y-4">
        <h3 class="text-white font-semibold text-lg mb-4">80.000 RON inseamna:</h3>

        <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
          <div class="w-12 h-12 rounded-xl bg-brand-emerald/20 flex items-center justify-center text-2xl">&#127793;</div>
          <div>
            <div class="text-white font-medium">Gazon nou pentru teren</div>
            <div class="text-white/50 text-sm">Sau alte imbunatatiri la stadion</div>
          </div>
        </div>

        <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
          <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center text-2xl">&#128250;</div>
          <div>
            <div class="text-white font-medium">LED-uri pentru publicitate</div>
            <div class="text-white/50 text-sm">Venituri extra din sponsori</div>
          </div>
        </div>

        <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
          <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center text-2xl">&#9917;</div>
          <div>
            <div class="text-white font-medium">Academie de juniori</div>
            <div class="text-white/50 text-sm">Investitie in viitorul clubului</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES BENTO -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-gradient-to-b from-brand-emerald/10 to-transparent rounded-full blur-[150px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
    <div class="text-center mb-20 reveal">
      <span class="inline-block px-4 py-2 rounded-full bg-brand-emerald/10 text-brand-emerald text-sm font-medium mb-4">&#127967; Functionalitati pentru Stadioane</span>
      <h2 class="font-display text-4xl md:text-6xl font-bold text-white mb-6">Totul pe telefonul<br><span class="text-gradient">echipei tale.</span></h2>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">

      <!-- Multi-Gate Access -->
      <div class="glow-card p-8 lg:col-span-2" style="--glow-color: rgba(16, 185, 129, 0.15); --border-color: rgba(16, 185, 129, 0.3);">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div>
            <div class="feature-icon bg-gradient-to-br from-brand-emerald to-brand-green mb-6">
              <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
            </div>
            <h3 class="font-display text-2xl font-bold text-white mb-3">20 Porti Simultan</h3>
            <p class="text-white/50 mb-4">Fiecare poarta are propriul telefon. Toate sincronizate in timp real. Sau offline - sincronizare la reconectare.</p>
            <ul class="space-y-2">
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Sincronizare real-time</li>
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Mod offline complet</li>
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Anti-duplicare bilet</li>
            </ul>
          </div>
          <div>
            <!-- Stadium Gate Visualization -->
            <div class="dashboard-mockup p-4">
              <div class="stadium-field h-32 mb-4"></div>

              <div class="grid grid-cols-4 gap-2">
                <div class="flex flex-col items-center gap-1">
                  <div class="gate-indicator gate-online">A</div>
                  <span class="text-white/40 text-[10px]">2.847</span>
                </div>
                <div class="flex flex-col items-center gap-1">
                  <div class="gate-indicator gate-online">B</div>
                  <span class="text-white/40 text-[10px]">3.102</span>
                </div>
                <div class="flex flex-col items-center gap-1">
                  <div class="gate-indicator gate-offline">C</div>
                  <span class="text-white/40 text-[10px]">1.956</span>
                </div>
                <div class="flex flex-col items-center gap-1">
                  <div class="gate-indicator gate-online">D</div>
                  <span class="text-white/40 text-[10px]">2.415</span>
                </div>
              </div>

              <div class="flex justify-center gap-4 mt-3 text-[10px]">
                <div class="flex items-center gap-1"><div class="w-2 h-2 rounded-full bg-brand-emerald"></div><span class="text-white/40">Online</span></div>
                <div class="flex items-center gap-1"><div class="w-2 h-2 rounded-full bg-brand-amber"></div><span class="text-white/40">Offline</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Sales -->
      <div class="glow-card p-8" style="--glow-color: rgba(6, 182, 212, 0.15); --border-color: rgba(6, 182, 212, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-cyan to-brand-teal mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">Vanzare la Poarta</h3>
        <p class="text-white/50 mb-4">Vinzi bilet, incasezi cu cardul, spectator intra. Totul pe telefon, in 30 de secunde.</p>

        <!-- Phone Mini Mockup -->
        <div class="mt-4 p-4 rounded-xl bg-dark-900/50">
          <div class="flex items-center justify-between mb-3">
            <span class="text-white/70 text-sm">Vanzare rapida</span>
            <span class="text-brand-cyan text-sm font-medium">Tribuna I</span>
          </div>
          <div class="flex items-center justify-between p-3 rounded-lg bg-dark-800 mb-2">
            <span class="text-white text-sm">1x Bilet Adult</span>
            <span class="text-white font-bold">45 RON</span>
          </div>
          <div class="grid grid-cols-2 gap-2">
            <button class="p-2 rounded-lg bg-white/5 text-white/60 text-xs">&#128181; Cash</button>
            <button class="p-2 rounded-lg bg-brand-cyan text-white text-xs font-medium">&#128179; Card</button>
          </div>
        </div>
      </div>

      <!-- Offline Mode -->
      <div class="glow-card p-8" style="--glow-color: rgba(245, 158, 11, 0.15); --border-color: rgba(245, 158, 11, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-amber to-brand-orange mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">100% Offline</h3>
        <p class="text-white/50 mb-4">Cade internetul? Nicio problema. Scanezi, vinzi, totul local. Se sincronizeaza cand revine.</p>

        <div class="mt-4 space-y-2">
          <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50">
            <span class="text-white/70 text-sm">&#128244; Scanare offline</span>
            <span class="text-brand-green text-xs">&#10003;</span>
          </div>
          <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50">
            <span class="text-white/70 text-sm">&#128179; Incasare offline</span>
            <span class="text-brand-green text-xs">&#10003;</span>
          </div>
          <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50">
            <span class="text-white/70 text-sm">&#128260; Auto-sync</span>
            <span class="text-brand-green text-xs">&#10003;</span>
          </div>
        </div>
      </div>

      <!-- Live Dashboard -->
      <div class="glow-card p-8 lg:col-span-2" style="--glow-color: rgba(99, 102, 241, 0.15); --border-color: rgba(99, 102, 241, 0.3);">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div>
            <div class="feature-icon bg-gradient-to-br from-brand-indigo to-brand-violet mb-6">
              <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <h3 class="font-display text-2xl font-bold text-white mb-3">Dashboard Live</h3>
            <p class="text-white/50 mb-4">Vezi in timp real cati au intrat, pe ce poarta, din ce sector. Decizii informate instant.</p>
            <ul class="space-y-2">
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-indigo" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Prezenta per tribuna</li>
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-indigo" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Vanzari real-time</li>
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-indigo" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Alerte capacitate</li>
            </ul>
          </div>
          <div>
            <div class="dashboard-mockup p-4">
              <div class="flex items-center justify-between mb-4">
                <span class="text-white font-medium">FC Steaua vs Dinamo</span>
                <span class="px-2 py-1 rounded-full bg-brand-green/10 text-brand-green text-xs">LIVE</span>
              </div>

              <div class="grid grid-cols-2 gap-3 mb-4">
                <div class="p-3 rounded-xl bg-dark-800">
                  <div class="text-white/50 text-xs mb-1">Prezenta</div>
                  <div class="text-white font-display text-2xl font-bold">28.547</div>
                  <div class="text-brand-green text-xs">/ 30.000</div>
                </div>
                <div class="p-3 rounded-xl bg-dark-800">
                  <div class="text-white/50 text-xs mb-1">Vandute azi</div>
                  <div class="text-white font-display text-2xl font-bold">1.203</div>
                  <div class="text-brand-amber text-xs">la poarta</div>
                </div>
              </div>

              <!-- Tribune Breakdown -->
              <div class="space-y-2">
                <div class="flex items-center gap-2">
                  <span class="tribune-section bg-brand-emerald/20 text-brand-emerald">Nord</span>
                  <div class="flex-1 h-2 rounded-full bg-dark-800"><div class="h-full rounded-full bg-brand-emerald" style="width: 95%;"></div></div>
                  <span class="text-white/50 text-xs">95%</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="tribune-section bg-brand-cyan/20 text-brand-cyan">Sud</span>
                  <div class="flex-1 h-2 rounded-full bg-dark-800"><div class="h-full rounded-full bg-brand-cyan" style="width: 88%;"></div></div>
                  <span class="text-white/50 text-xs">88%</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="tribune-section bg-brand-amber/20 text-brand-amber">Est</span>
                  <div class="flex-1 h-2 rounded-full bg-dark-800"><div class="h-full rounded-full bg-brand-amber" style="width: 100%;"></div></div>
                  <span class="text-white/50 text-xs">FULL</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="tribune-section bg-brand-violet/20 text-brand-violet">Vest</span>
                  <div class="flex-1 h-2 rounded-full bg-dark-800"><div class="h-full rounded-full bg-brand-violet" style="width: 72%;"></div></div>
                  <span class="text-white/50 text-xs">72%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Season Tickets -->
      <div class="glow-card p-8" style="--glow-color: rgba(236, 72, 153, 0.15); --border-color: rgba(236, 72, 153, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-rose to-brand-pink mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">Abonamente Sezon</h3>
        <p class="text-white/50 mb-4">Loc garantat tot sezonul. Scanare rapida, fara bilet fizic la fiecare meci.</p>

        <div class="mt-4 p-4 rounded-xl bg-gradient-to-br from-brand-rose/10 to-brand-pink/5 border border-brand-rose/20">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-xl bg-brand-rose/20 flex items-center justify-center text-lg">&#127915;</div>
            <div>
              <div class="text-white font-medium">Abonament Gold</div>
              <div class="text-white/40 text-xs">Tribuna I - Loc 47</div>
            </div>
          </div>
          <div class="text-brand-rose font-display text-xl font-bold">799 RON/sezon</div>
        </div>
      </div>

      <!-- Away Allocation -->
      <div class="glow-card p-8" style="--glow-color: rgba(168, 85, 247, 0.15); --border-color: rgba(168, 85, 247, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-purple to-brand-violet mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">Alocare Oaspeti</h3>
        <p class="text-white/50 mb-4">Sectorul oaspetilor separat automat. Cota per meci, vanzare controlata.</p>

        <div class="mt-4 space-y-2">
          <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50">
            <span class="text-white/70 text-sm">Cota oaspeti</span>
            <span class="text-brand-purple text-sm font-medium">2.000 locuri</span>
          </div>
          <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50">
            <span class="text-white/70 text-sm">Vandute</span>
            <span class="text-brand-green text-sm font-medium">1.847</span>
          </div>
        </div>
      </div>

      <!-- Fan Club Integration -->
      <div class="glow-card p-8" style="--glow-color: rgba(249, 115, 22, 0.15); --border-color: rgba(249, 115, 22, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-orange to-brand-amber mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">Fan Club & Galerie</h3>
        <p class="text-white/50 mb-4">Presale pentru membri, sector dedicat galeriei, preturi speciale pentru fani fideli.</p>

        <div class="flex flex-wrap gap-2 mt-4">
          <span class="px-2 py-1 rounded-full bg-brand-orange/10 text-brand-orange text-xs">Presale membri</span>
          <span class="px-2 py-1 rounded-full bg-brand-amber/10 text-brand-amber text-xs">Discount fideli</span>
          <span class="px-2 py-1 rounded-full bg-brand-green/10 text-brand-green text-xs">Sector galerie</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MORE FEATURES -->
<section class="py-32 relative overflow-hidden bg-dark-850">
  <div class="max-w-5xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16 reveal">
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-4">Si mai multe <span class="text-gradient">functionalitati</span></h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#127359;&#65039;</div>
        <h3 class="text-white font-semibold mb-1">Permise Parcare</h3>
        <p class="text-white/50 text-sm">Vinde locuri de parcare odata cu biletul</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#127828;</div>
        <h3 class="text-white font-semibold mb-1">Pre-order F&B</h3>
        <p class="text-white/50 text-sm">Comanda de mancare din aplicatie, ridicare rapida</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#128085;</div>
        <h3 class="text-white font-semibold mb-1">Merchandise</h3>
        <p class="text-white/50 text-sm">Vinde tricouri si accesorii la checkout</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#127919;</div>
        <h3 class="text-white font-semibold mb-1">Preturi Dinamice</h3>
        <p class="text-white/50 text-sm">Pret diferit pentru derby vs meci obisnuit</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#128104;&#8205;&#128105;&#8205;&#128103;</div>
        <h3 class="text-white font-semibold mb-1">Sector Familie</h3>
        <p class="text-white/50 text-sm">Zone dedicate pentru familii cu copii</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#9855;</div>
        <h3 class="text-white font-semibold mb-1">Accesibilitate</h3>
        <p class="text-white/50 text-sm">Locuri pentru persoane cu dizabilitati</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#127970;</div>
        <h3 class="text-white font-semibold mb-1">Loji VIP</h3>
        <p class="text-white/50 text-sm">Pachete corporate cu catering inclus</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#127783;&#65039;</div>
        <h3 class="text-white font-semibold mb-1">Amanare Meci</h3>
        <p class="text-white/50 text-sm">Biletele raman valide automat pentru noua data</p>
      </div>

      <div class="p-5 rounded-2xl bg-gradient-to-br from-brand-emerald/10 to-brand-green/5 border border-brand-emerald/20">
        <div class="text-2xl mb-3">&#128196;</div>
        <h3 class="text-white font-semibold mb-1">eFactura Integrat</h3>
        <p class="text-brand-emerald text-sm">Toate vanzarile raportate automat la ANAF</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-32 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16 reveal">
      <span class="inline-block px-4 py-2 rounded-full bg-brand-emerald/10 text-brand-emerald text-sm font-medium mb-4">&#128172; Testimoniale</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white">Ce spun administratorii de stadioane</h2>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="testimonial-card reveal">
        <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Am scapat de echipa externa de ticketing. <strong class="text-white">Staff-ul nostru a invatat in 2 ore</strong> si acum gestionam totul intern."</p>
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-emerald to-brand-green flex items-center justify-center text-white text-lg">&#9917;</div>
          <div><div class="text-white font-medium">Mihai C.</div><div class="text-white/40 text-sm">Director Operatiuni, FC Liga 1</div></div>
        </div>
      </div>

      <div class="testimonial-card reveal reveal-delay-1">
        <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"La ultimul derby a cazut netul 20 de minute. <strong class="text-white">Am continuat scanarea offline fara probleme.</strong> Nimeni nu a observat."</p>
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-amber to-brand-orange flex items-center justify-center text-white text-lg">&#127967;</div>
          <div><div class="text-white font-medium">Andrei P.</div><div class="text-white/40 text-sm">Manager Stadion Municipal</div></div>
        </div>
      </div>

      <div class="testimonial-card reveal reveal-delay-2">
        <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Diferenta de comision ne-a permis sa renovam sectorul familiilor. <strong class="text-white">80.000 RON economisiti intr-un sezon.</strong>"</p>
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-cyan to-brand-teal flex items-center justify-center text-white text-lg">&#128176;</div>
          <div><div class="text-white font-medium">Elena R.</div><div class="text-white/40 text-sm">CFO, Club Sportiv</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0">
    <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-brand-emerald/20 rounded-full blur-[150px]"></div>
    <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-brand-cyan/20 rounded-full blur-[150px]"></div>
  </div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
    <div class="reveal">
      <div class="text-6xl mb-6">&#127967;</div>
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6">50.000 de fani.<br><span class="text-gradient">Un telefon. 1% comision.</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto">Scapa de echipamentele scumpe, de echipele externe, de procedurile complicate. <strong class="text-white">Hai sa iti aratam cum.</strong></p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
        <a href="<?php echo esc_url(home_url('/demo')); ?>" class="group cta-primary inline-flex items-center justify-center gap-3 font-semibold text-lg px-10 py-5 rounded-full text-white">
          <span>Programeaza un Demo</span>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/calculator')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-5 rounded-full bg-white/10 text-white border border-white/20 hover:bg-white/20 transition-all">Calculeaza Economiile</a>
      </div>

      <div class="flex flex-wrap justify-center gap-6">
        <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Doar 1% comision</span></div>
        <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Setup in 48h</span></div>
        <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport in ziua meciului</span></div>
      </div>

      <p class="text-white/30 text-sm mt-12">Tixello gestioneaza stadioane de la arene de 5.000 locuri<br>la complexuri sportive de 50.000+.</p>
    </div>
  </div>
</section>

<script>
  window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    if (header) {
      if (window.scrollY > 50) header.classList.add('bg-dark-900/95', 'backdrop-blur-xl', 'shadow-lg');
      else header.classList.remove('bg-dark-900/95', 'backdrop-blur-xl', 'shadow-lg');
    }
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('revealed'); });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  document.querySelectorAll('.glow-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mouse-x', e.clientX - rect.left + 'px');
      card.style.setProperty('--mouse-y', e.clientY - rect.top + 'px');
    });
  });

  document.addEventListener('mousemove', (e) => {
    document.querySelectorAll('.float-element').forEach((el, i) => {
      const speed = (i + 1) * 10;
      el.style.transform = `translate(${(e.clientX / window.innerWidth - 0.5) * speed}px, ${(e.clientY / window.innerHeight - 0.5) * speed}px)`;
    });
  });
</script>

<?php get_footer(); ?>
