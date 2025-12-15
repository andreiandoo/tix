<?php
/**
 * Template Name: Pentru Teatre
 * Description: Landing page for theaters - complete ticketing solution for performing arts
 */

get_header();
?>

<style>
  ::selection { background: #9f1239; color: white; }

  .text-gradient {
    background: linear-gradient(135deg, #fbbf24 0%, #d97706 30%, #b45309 70%, #9f1239 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shimmer 4s linear infinite;
  }
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  @keyframes float { 0%, 100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-20px) rotate(2deg); } }
  @keyframes bounceSoft { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @keyframes curtainShimmer { 0%, 100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
  @keyframes spotlightMove { 0%, 100% { transform: translateX(-50%) rotate(-5deg); } 50% { transform: translateX(-50%) rotate(5deg); } }
  @keyframes seatHover { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.1); } }
  @keyframes goldShine { 0% { left: -100%; } 100% { left: 200%; } }
  @keyframes countUp { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

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
      radial-gradient(ellipse 80% 50% at 50% -20%, rgba(159, 18, 57, 0.25), transparent),
      radial-gradient(ellipse 60% 40% at 80% 60%, rgba(217, 119, 6, 0.15), transparent),
      radial-gradient(ellipse 50% 30% at 20% 80%, rgba(136, 19, 55, 0.15), transparent);
  }

  .curtain-bg {
    background: linear-gradient(180deg,
      rgba(159, 18, 57, 0.3) 0%,
      rgba(136, 19, 55, 0.2) 20%,
      transparent 40%);
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
    background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), var(--glow-color, rgba(159, 18, 57, 0.15)), transparent 40%);
    opacity: 0;
    transition: opacity 0.5s;
  }
  .glow-card:hover::before { opacity: 1; }
  .glow-card:hover { border-color: var(--border-color, rgba(159, 18, 57, 0.3)); transform: translateY(-8px); box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3); }

  .feature-icon { width: 64px; height: 64px; border-radius: 20px; display: flex; align-items: center; justify-content: center; position: relative; transition: transform 0.3s ease; }
  .feature-icon::after { content: ''; position: absolute; inset: 0; border-radius: inherit; background: inherit; filter: blur(20px); opacity: 0.4; z-index: -1; }
  .glow-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); }

  /* Theater Seats */
  .theater-seat {
    width: 24px;
    height: 20px;
    border-radius: 4px 4px 0 0;
    transition: all 0.2s ease;
    cursor: pointer;
    position: relative;
  }
  .theater-seat::after {
    content: '';
    position: absolute;
    bottom: -4px;
    left: 2px;
    right: 2px;
    height: 4px;
    background: inherit;
    filter: brightness(0.7);
    border-radius: 0 0 2px 2px;
  }
  .seat-available { background: rgba(16, 185, 129, 0.6); }
  .seat-sold { background: rgba(159, 18, 57, 0.7); }
  .seat-selected { background: rgba(217, 119, 6, 1); animation: seatHover 1s ease-in-out infinite; }
  .seat-vip { background: linear-gradient(135deg, #d97706, #b45309); }
  .seat-balcon { background: rgba(99, 102, 241, 0.6); }
  .theater-seat:hover { transform: scale(1.15); filter: brightness(1.2); }

  /* Stage */
  .theater-stage {
    background: linear-gradient(180deg, rgba(159, 18, 57, 0.4), rgba(159, 18, 57, 0.2));
    border-radius: 100% 100% 0 0 / 30% 30% 0 0;
    position: relative;
  }
  .theater-stage::before {
    content: '';
    position: absolute;
    top: 0;
    left: 10%;
    right: 10%;
    height: 100%;
    background: linear-gradient(180deg, rgba(255,255,255,0.1), transparent);
    border-radius: inherit;
  }

  /* Spotlight */
  .spotlight {
    position: absolute;
    width: 100px;
    height: 300px;
    background: conic-gradient(from 180deg, transparent 0deg, rgba(217, 119, 6, 0.15) 15deg, transparent 30deg);
    filter: blur(20px);
    transform-origin: top center;
    animation: spotlightMove 6s ease-in-out infinite;
  }

  /* Gold Shine Effect */
  .gold-shine {
    position: relative;
    overflow: hidden;
  }
  .gold-shine::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(217, 119, 6, 0.3), transparent);
    animation: goldShine 3s ease-in-out infinite;
  }

  /* Commission Comparison */
  .commission-bar {
    height: 40px;
    border-radius: 8px;
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

  /* Subscription Card */
  .subscription-card {
    background: linear-gradient(135deg, rgba(159, 18, 57, 0.1), rgba(217, 119, 6, 0.05));
    border: 1px solid rgba(217, 119, 6, 0.2);
    border-radius: 16px;
    padding: 20px;
    transition: all 0.3s ease;
  }
  .subscription-card:hover {
    border-color: rgba(217, 119, 6, 0.4);
    transform: translateY(-4px);
  }

  /* Cast Member */
  .cast-member {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px;
    border-radius: 12px;
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.05);
    transition: all 0.3s ease;
  }
  .cast-member:hover {
    background: rgba(159, 18, 57, 0.1);
    border-color: rgba(159, 18, 57, 0.2);
  }

  .dashboard-mockup { background: linear-gradient(135deg, rgba(19, 19, 28, 0.9), rgba(26, 26, 39, 0.9)); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; overflow: hidden; box-shadow: 0 40px 80px -20px rgba(0, 0, 0, 0.5); }

  .testimonial-card { background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01)); border: 1px solid rgba(255,255,255,0.08); border-radius: 24px; padding: 32px; position: relative; }
  .testimonial-card::before { content: '"'; position: absolute; top: 20px; left: 24px; font-size: 80px; font-family: Georgia, serif; color: rgba(159, 18, 57, 0.2); line-height: 1; }

  .float-element { position: absolute; pointer-events: none; z-index: 0; }

  .cta-primary { position: relative; overflow: hidden; background: linear-gradient(135deg, #9f1239, #881337); transition: all 0.3s ease; }
  .cta-primary::before { content: ''; position: absolute; inset: 0; background: linear-gradient(90deg, transparent, rgba(217, 119, 6, 0.3), transparent); transform: translateX(-100%); transition: transform 0.6s; }
  .cta-primary:hover::before { transform: translateX(100%); }
  .cta-primary:hover { transform: translateY(-2px); box-shadow: 0 20px 40px rgba(159, 18, 57, 0.4); }

  .counter-value { font-variant-numeric: tabular-nums; }

  /* SEO Preview Card */
  .seo-preview {
    background: white;
    border-radius: 12px;
    padding: 16px;
    max-width: 600px;
  }
  .seo-preview-title {
    color: #1a0dab;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 4px;
  }
  .seo-preview-url {
    color: #006621;
    font-size: 13px;
    margin-bottom: 4px;
  }
  .seo-preview-desc {
    color: #545454;
    font-size: 13px;
    line-height: 1.4;
  }

  /* Recurring Event Timeline */
  .timeline-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: linear-gradient(135deg, #d97706, #9f1239);
    position: relative;
  }
  .timeline-dot::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 100%;
    width: 40px;
    height: 2px;
    background: linear-gradient(90deg, rgba(217, 119, 6, 0.5), transparent);
  }
</style>

<!-- HERO -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden hero-gradient curtain-bg">
  <div class="spotlight -top-10 left-[25%]" style="animation-delay: 0s;"></div>
  <div class="spotlight -top-10 right-[25%]" style="animation-delay: 2s;"></div>

  <div class="float-element top-32 left-[8%] animate-float"><div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-burgundy/20 to-brand-wine/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-3xl">&#127917;</div></div>
  <div class="float-element top-48 right-[12%] animate-float-slow" style="animation-delay: 1s;"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-gold/20 to-brand-amber/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-2xl">&#127914;</div></div>
  <div class="float-element bottom-40 left-[15%] animate-float-fast" style="animation-delay: 0.5s;"><div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-wine/20 to-brand-burgundy/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-xl">&#128186;</div></div>
  <div class="float-element bottom-32 right-[8%] animate-float" style="animation-delay: 2s;"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-gold/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-2xl">&#128220;</div></div>

  <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 relative z-10">
    <div class="text-center">
      <div class="reveal inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-brand-burgundy/10 border border-brand-burgundy/20 mb-8">
        <span class="text-2xl">&#127917;</span>
        <span class="text-brand-gold text-sm font-medium">Solutie completa pentru teatre</span>
      </div>

      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-[1.05] reveal reveal-delay-1">
        Scena e a Ta.<br><span class="text-gradient">Noi Gestionam Restul.</span>
      </h1>

      <p class="text-xl md:text-2xl text-white/60 max-w-3xl mx-auto mb-8 leading-relaxed reveal reveal-delay-2">
        Harti de locuri perfecte, abonamente de stagiune, spectacole recurente si <strong class="text-brand-gold">doar 1% comision</strong> pentru ca fiecare leu sa ajunga unde trebuie: in arta.
      </p>

      <!-- Key Benefits Pills -->
      <div class="flex flex-wrap justify-center gap-2 mb-12 reveal reveal-delay-3">
        <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">&#128186; Selectie Locuri</span>
        <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">&#127915; Abonamente Stagiune</span>
        <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">&#128260; Spectacole Recurente</span>
        <span class="px-3 py-1.5 rounded-full bg-brand-gold/10 border border-brand-gold/20 text-brand-gold text-xs font-medium">&#128176; Doar 1% Comision</span>
        <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">&#128101; Distributie Automata</span>
        <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-white/60 text-xs">&#128269; SEO Automat</span>
      </div>

      <!-- Commission Highlight -->
      <div class="max-w-xl mx-auto mb-12 reveal reveal-delay-3">
        <div class="p-4 rounded-2xl bg-gradient-to-r from-brand-burgundy/10 to-brand-gold/10 border border-brand-gold/20">
          <div class="flex items-center justify-between gap-4">
            <div class="text-left">
              <div class="text-white/50 text-sm">Alte platforme</div>
              <div class="text-white font-display text-2xl"><span class="line-through text-white/40">8-10%</span></div>
            </div>
            <div class="text-3xl">&#8594;</div>
            <div class="text-right">
              <div class="text-brand-gold text-sm font-medium">Tixello</div>
              <div class="text-brand-gold font-display text-4xl font-bold">1%</div>
            </div>
          </div>
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

      <!-- Trust Badges -->
      <div class="flex flex-wrap justify-center gap-6 mt-12 reveal">
        <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Fara taxe lunare</span></div>
        <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Configurare in 24h</span></div>
        <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport dedicat</span></div>
      </div>
    </div>
  </div>

  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce-soft">
    <div class="w-6 h-10 rounded-full border-2 border-white/20 flex items-start justify-center p-2"><div class="w-1.5 h-3 rounded-full bg-white/40 animate-pulse"></div></div>
  </div>
</section>

<!-- COMMISSION IMPACT -->
<section class="py-32 relative overflow-hidden">
  <div class="max-w-5xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16 reveal">
      <span class="inline-block px-4 py-2 rounded-full bg-brand-gold/10 text-brand-gold text-sm font-medium mb-4">&#128176; Matematica Economiilor</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
        La 100.000 RON vanzari pe stagiune,<br><span class="text-gradient">economisesti 7.000-9.000 RON.</span>
      </h2>
      <p class="text-xl text-white/50 max-w-2xl mx-auto">Bani care pot merge in productii, in actori, in costume, in publicitate - nu in comisioane de platforma.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 items-center reveal">
      <!-- Commission Comparison Visual -->
      <div class="space-y-6">
        <div>
          <div class="flex items-center justify-between mb-2">
            <span class="text-white/70">Alte platforme (8-10%)</span>
            <span class="text-brand-rose font-bold">-9.000 RON</span>
          </div>
          <div class="commission-bar bg-dark-800">
            <div class="commission-fill bg-gradient-to-r from-brand-rose/80 to-brand-rose text-white" style="width: 90%;">
              9.000 RON comision
            </div>
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between mb-2">
            <span class="text-brand-gold font-medium">Tixello (1%)</span>
            <span class="text-brand-green font-bold">-1.000 RON</span>
          </div>
          <div class="commission-bar bg-dark-800">
            <div class="commission-fill bg-gradient-to-r from-brand-green/80 to-brand-green text-white" style="width: 10%;">
              1.000
            </div>
          </div>
        </div>

        <div class="p-4 rounded-xl bg-brand-green/10 border border-brand-green/20">
          <div class="flex items-center justify-between">
            <span class="text-white font-medium">Economii anuale</span>
            <span class="text-brand-green font-display text-3xl font-bold">+8.000 RON</span>
          </div>
        </div>
      </div>

      <!-- What You Can Do With Savings -->
      <div class="space-y-4">
        <h3 class="text-white font-semibold text-lg mb-4">Cu economiile poti:</h3>

        <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
          <div class="w-12 h-12 rounded-xl bg-brand-burgundy/20 flex items-center justify-center text-2xl">&#127917;</div>
          <div>
            <div class="text-white font-medium">O productie noua</div>
            <div class="text-white/50 text-sm">Investeste in arta, nu in comisioane</div>
          </div>
        </div>

        <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
          <div class="w-12 h-12 rounded-xl bg-brand-gold/20 flex items-center justify-center text-2xl">&#128226;</div>
          <div>
            <div class="text-white font-medium">Campanie de marketing</div>
            <div class="text-white/50 text-sm">Atrage public nou la spectacole</div>
          </div>
        </div>

        <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
          <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center text-2xl">&#128087;</div>
          <div>
            <div class="text-white font-medium">Costume si decor</div>
            <div class="text-white/50 text-sm">Productii mai spectaculoase</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES BENTO -->
<section class="py-32 relative overflow-hidden bg-dark-850">
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-gradient-to-b from-brand-burgundy/10 to-transparent rounded-full blur-[150px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
    <div class="text-center mb-20 reveal">
      <span class="inline-block px-4 py-2 rounded-full bg-brand-burgundy/10 text-brand-burgundy text-sm font-medium mb-4">&#127914; Functionalitati pentru Teatre</span>
      <h2 class="font-display text-4xl md:text-6xl font-bold text-white mb-6">Tot ce ai nevoie.<br><span class="text-gradient">Nimic in plus.</span></h2>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">

      <!-- Seat Selection -->
      <div class="glow-card p-8 lg:col-span-2" style="--glow-color: rgba(159, 18, 57, 0.15); --border-color: rgba(159, 18, 57, 0.3);">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div>
            <div class="feature-icon bg-gradient-to-br from-brand-burgundy to-brand-wine mb-6">
              <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
            </div>
            <h3 class="font-display text-2xl font-bold text-white mb-3">Harti de Locuri Perfecte</h3>
            <p class="text-white/50 mb-4">Parter, balcon, loja, galerie - orice configuratie. Spectatorii vad exact unde stau.</p>
            <ul class="space-y-2">
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-burgundy" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Zone de pret diferite</li>
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-burgundy" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Vizibilitate indicata</li>
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-burgundy" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Locuri accesibile marcate</li>
            </ul>
          </div>
          <div>
            <!-- Theater Seat Map -->
            <div class="dashboard-mockup p-4">
              <div class="theater-stage h-10 mb-6 flex items-center justify-center">
                <span class="text-white/40 text-xs uppercase tracking-widest">Scena</span>
              </div>

              <!-- Parter -->
              <div class="mb-4">
                <div class="text-white/30 text-[10px] uppercase tracking-wider mb-2 text-center">Parter</div>
                <div class="flex flex-col items-center gap-1">
                  <div class="flex gap-1 justify-center">
                    <div class="theater-seat seat-sold"></div>
                    <div class="theater-seat seat-sold"></div>
                    <div class="theater-seat seat-selected"></div>
                    <div class="theater-seat seat-selected"></div>
                    <div class="theater-seat seat-sold"></div>
                    <div class="theater-seat seat-sold"></div>
                  </div>
                  <div class="flex gap-1 justify-center">
                    <div class="theater-seat seat-sold"></div>
                    <div class="theater-seat seat-available"></div>
                    <div class="theater-seat seat-available"></div>
                    <div class="theater-seat seat-available"></div>
                    <div class="theater-seat seat-available"></div>
                    <div class="theater-seat seat-sold"></div>
                  </div>
                  <div class="flex gap-1 justify-center">
                    <div class="theater-seat seat-available"></div>
                    <div class="theater-seat seat-available"></div>
                    <div class="theater-seat seat-available"></div>
                    <div class="theater-seat seat-available"></div>
                    <div class="theater-seat seat-available"></div>
                    <div class="theater-seat seat-available"></div>
                  </div>
                </div>
              </div>

              <!-- Balcon -->
              <div class="pt-3 border-t border-white/10">
                <div class="text-white/30 text-[10px] uppercase tracking-wider mb-2 text-center">Balcon</div>
                <div class="flex gap-1 justify-center">
                  <div class="theater-seat seat-balcon"></div>
                  <div class="theater-seat seat-balcon"></div>
                  <div class="theater-seat seat-balcon"></div>
                  <div class="theater-seat seat-balcon"></div>
                  <div class="theater-seat seat-balcon"></div>
                  <div class="theater-seat seat-balcon"></div>
                  <div class="theater-seat seat-balcon"></div>
                  <div class="theater-seat seat-balcon"></div>
                </div>
              </div>

              <!-- Legend -->
              <div class="flex justify-center gap-4 mt-4 text-[10px]">
                <div class="flex items-center gap-1"><div class="w-3 h-3 rounded bg-brand-green/60"></div><span class="text-white/40">Liber</span></div>
                <div class="flex items-center gap-1"><div class="w-3 h-3 rounded bg-brand-burgundy/70"></div><span class="text-white/40">Ocupat</span></div>
                <div class="flex items-center gap-1"><div class="w-3 h-3 rounded bg-brand-gold"></div><span class="text-white/40">Selectat</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Season Subscriptions -->
      <div class="glow-card p-8" style="--glow-color: rgba(217, 119, 6, 0.15); --border-color: rgba(217, 119, 6, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-gold to-brand-amber mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">Abonamente de Stagiune</h3>
        <p class="text-white/50 mb-4">Vinde pachete pentru intreaga stagiune. Loc garantat, pret redus, public fidel.</p>

        <div class="space-y-3 mt-4">
          <div class="subscription-card">
            <div class="flex items-center justify-between mb-2">
              <span class="text-white font-medium">&#129351; Abonament Gold</span>
              <span class="text-brand-gold font-bold">599 RON</span>
            </div>
            <div class="text-white/40 text-xs">10 spectacole - Loc fix randul 3</div>
          </div>
          <div class="subscription-card">
            <div class="flex items-center justify-between mb-2">
              <span class="text-white font-medium">&#129352; Abonament Silver</span>
              <span class="text-white/70 font-bold">399 RON</span>
            </div>
            <div class="text-white/40 text-xs">10 spectacole - Parter zona B</div>
          </div>
        </div>
      </div>

      <!-- Recurring Events -->
      <div class="glow-card p-8" style="--glow-color: rgba(99, 102, 241, 0.15); --border-color: rgba(99, 102, 241, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-indigo to-brand-violet mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">Spectacole Recurente</h3>
        <p class="text-white/50 mb-4">Adaugi o data, ruleaza toata stagiunea. Modifici unul, se actualizeaza toate.</p>

        <!-- Recurring Timeline -->
        <div class="mt-4 p-4 rounded-xl bg-dark-900/50">
          <div class="text-white/50 text-xs mb-3">"Hamlet" - Stagiunea 2024/2025</div>
          <div class="flex items-center gap-2 overflow-x-auto pb-2">
            <div class="flex flex-col items-center gap-1 min-w-fit">
              <div class="timeline-dot"></div>
              <span class="text-white/40 text-[10px]">15 Oct</span>
            </div>
            <div class="flex flex-col items-center gap-1 min-w-fit">
              <div class="timeline-dot"></div>
              <span class="text-white/40 text-[10px]">22 Oct</span>
            </div>
            <div class="flex flex-col items-center gap-1 min-w-fit">
              <div class="timeline-dot"></div>
              <span class="text-white/40 text-[10px]">5 Nov</span>
            </div>
            <div class="flex flex-col items-center gap-1 min-w-fit">
              <div class="timeline-dot"></div>
              <span class="text-white/40 text-[10px]">19 Nov</span>
            </div>
            <div class="text-white/30 text-xs">+12</div>
          </div>
        </div>
      </div>

      <!-- Cast Display -->
      <div class="glow-card p-8 lg:col-span-2" style="--glow-color: rgba(16, 185, 129, 0.15); --border-color: rgba(16, 185, 129, 0.3);">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div>
            <div class="feature-icon bg-gradient-to-br from-brand-green to-brand-cyan mb-6">
              <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            </div>
            <h3 class="font-display text-2xl font-bold text-white mb-3">Distributie Automata</h3>
            <p class="text-white/50 mb-4">Adaugi distributia o singura data. Apare automat pe pagina spectacolului, in email-uri, pe bilete.</p>
            <ul class="space-y-2">
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Foto actori cu rol</li>
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Link catre biografie</li>
              <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Distributii alternative</li>
            </ul>
          </div>
          <div>
            <!-- Cast Display Mockup -->
            <div class="space-y-3">
              <div class="text-white/50 text-xs uppercase tracking-wider mb-2">Distributie "Hamlet"</div>
              <div class="cast-member">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-brand-burgundy to-brand-wine flex items-center justify-center text-white text-sm">MA</div>
                <div class="flex-1">
                  <div class="text-white font-medium text-sm">Marcel Antonescu</div>
                  <div class="text-brand-gold text-xs">Hamlet</div>
                </div>
              </div>
              <div class="cast-member">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-brand-indigo to-brand-violet flex items-center justify-center text-white text-sm">EP</div>
                <div class="flex-1">
                  <div class="text-white font-medium text-sm">Elena Popescu</div>
                  <div class="text-brand-gold text-xs">Ofelia</div>
                </div>
              </div>
              <div class="cast-member">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-brand-green to-brand-cyan flex items-center justify-center text-white text-sm">AI</div>
                <div class="flex-1">
                  <div class="text-white font-medium text-sm">Adrian Ionescu</div>
                  <div class="text-brand-gold text-xs">Claudius</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Automatic SEO -->
      <div class="glow-card p-8" style="--glow-color: rgba(59, 130, 246, 0.15); --border-color: rgba(59, 130, 246, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-blue to-brand-indigo mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">SEO Automat</h3>
        <p class="text-white/50 mb-4">Fiecare spectacol apare in Google optimizat. Titluri, descrieri, schema markup - toate automate.</p>

        <!-- SEO Preview -->
        <div class="mt-4 seo-preview">
          <div class="seo-preview-title">Hamlet - Teatrul National Bucuresti | Bilete</div>
          <div class="seo-preview-url">teatrul-national.ro > spectacole > hamlet</div>
          <div class="seo-preview-desc">Tragedie de William Shakespeare. Regia: Ion Caramitru. Cu Marcel Antonescu in rolul principal. &#9733;&#9733;&#9733;&#9733;&#9733; (127 recenzii). Cumpara bilete online.</div>
        </div>
      </div>

      <!-- Student & Pensioner Discounts -->
      <div class="glow-card p-8" style="--glow-color: rgba(236, 72, 153, 0.15); --border-color: rgba(236, 72, 153, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-rose to-brand-pink mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">Reduceri Automate</h3>
        <p class="text-white/50 mb-4">Elevi, studenti, pensionari - reducerile se aplica automat la checkout.</p>

        <div class="space-y-2 mt-4">
          <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50">
            <span class="text-white/70 text-sm">&#127891; Studenti</span>
            <span class="text-brand-green text-sm font-medium">-50%</span>
          </div>
          <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50">
            <span class="text-white/70 text-sm">&#128116; Pensionari</span>
            <span class="text-brand-green text-sm font-medium">-30%</span>
          </div>
          <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50">
            <span class="text-white/70 text-sm">&#128118; Copii sub 12 ani</span>
            <span class="text-brand-green text-sm font-medium">-40%</span>
          </div>
        </div>
      </div>

      <!-- Group Bookings -->
      <div class="glow-card p-8" style="--glow-color: rgba(249, 115, 22, 0.15); --border-color: rgba(249, 115, 22, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-orange to-brand-amber mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">Grupuri Scolare</h3>
        <p class="text-white/50 mb-4">Portal dedicat pentru profesori. Cerere, aprobare, plata - totul online, simplu.</p>

        <div class="mt-4 p-3 rounded-xl bg-dark-900/50">
          <div class="flex items-center gap-3 mb-2">
            <div class="w-8 h-8 rounded-lg bg-brand-orange/20 flex items-center justify-center text-sm">&#127979;</div>
            <div>
              <div class="text-white text-sm font-medium">Colegiul National "Mihai Viteazul"</div>
              <div class="text-white/40 text-xs">32 elevi - "Hamlet" - 15 Nov</div>
            </div>
          </div>
          <div class="flex gap-2">
            <span class="px-2 py-1 rounded-full bg-brand-amber/10 text-brand-amber text-xs">In asteptare</span>
          </div>
        </div>
      </div>

      <!-- Gift Vouchers -->
      <div class="glow-card p-8" style="--glow-color: rgba(168, 85, 247, 0.15); --border-color: rgba(168, 85, 247, 0.3);">
        <div class="feature-icon bg-gradient-to-br from-brand-purple to-brand-violet mb-6">
          <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/></svg>
        </div>
        <h3 class="font-display text-2xl font-bold text-white mb-3">Vouchere Cadou</h3>
        <p class="text-white/50 mb-4">Clientii cumpara vouchere pentru prieteni. Design elegant, livrare instant pe email.</p>

        <div class="mt-4 p-4 rounded-xl bg-gradient-to-br from-brand-purple/10 to-brand-violet/5 border border-brand-purple/20 text-center gold-shine">
          <div class="text-brand-purple text-xs uppercase tracking-wider mb-1">Voucher Cadou</div>
          <div class="text-white font-display text-2xl font-bold">100 RON</div>
          <div class="text-white/40 text-xs mt-1">Teatrul National Bucuresti</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MORE FEATURES -->
<section class="py-32 relative overflow-hidden">
  <div class="max-w-5xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16 reveal">
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-4">Si mai multe <span class="text-gradient">functionalitati</span></h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#128241;</div>
        <h3 class="text-white font-semibold mb-1">Bilet pe Telefon</h3>
        <p class="text-white/50 text-sm">Apple Wallet, Google Pay - biletul e mereu la indemana</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#128424;</div>
        <h3 class="text-white font-semibold mb-1">Print-at-Home</h3>
        <p class="text-white/50 text-sm">Spectatorii isi printeaza biletul cu QR cod valid</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#9855;</div>
        <h3 class="text-white font-semibold mb-1">Accesibilitate</h3>
        <p class="text-white/50 text-sm">Locuri pentru persoane cu dizabilitati marcate clar</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#9200;</div>
        <h3 class="text-white font-semibold mb-1">Last-Minute</h3>
        <p class="text-white/50 text-sm">Reduceri automate pentru ultimele locuri disponibile</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#11088;</div>
        <h3 class="text-white font-semibold mb-1">Recenzii</h3>
        <p class="text-white/50 text-sm">Spectatorii lasa recenzii dupa spectacol, cresc conversiile</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#128231;</div>
        <h3 class="text-white font-semibold mb-1">Reminder Spectacol</h3>
        <p class="text-white/50 text-sm">Email automat cu 24h inainte - mai putine no-show-uri</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#128202;</div>
        <h3 class="text-white font-semibold mb-1">Rapoarte Detaliate</h3>
        <p class="text-white/50 text-sm">Vanzari, prezenta, demografice - toate datele intr-un loc</p>
      </div>

      <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5">
        <div class="text-2xl mb-3">&#128179;</div>
        <h3 class="text-white font-semibold mb-1">Box Office Integrat</h3>
        <p class="text-white/50 text-sm">Vanzari la casa sincronizate cu online in timp real</p>
      </div>

      <div class="p-5 rounded-2xl bg-gradient-to-br from-brand-burgundy/10 to-brand-gold/5 border border-brand-gold/20">
        <div class="text-2xl mb-3">&#128196;</div>
        <h3 class="text-white font-semibold mb-1">eFactura Integrat</h3>
        <p class="text-brand-gold text-sm">Facturi automate catre ANAF pentru toate vanzarile</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-32 relative overflow-hidden bg-dark-850">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-16 reveal">
      <span class="inline-block px-4 py-2 rounded-full bg-brand-burgundy/10 text-brand-burgundy text-sm font-medium mb-4">&#128172; Testimoniale</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white">Ce spun teatrele</h2>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="testimonial-card reveal">
        <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Am economisit suficient in primul an cat sa finantam o productie noua. <strong class="text-white">Diferenta de comision chiar conteaza.</strong>"</p>
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-burgundy to-brand-wine flex items-center justify-center text-white text-lg">&#127917;</div>
          <div><div class="text-white font-medium">Maria D.</div><div class="text-white/40 text-sm">Director, Teatru Independent</div></div>
        </div>
      </div>

      <div class="testimonial-card reveal reveal-delay-1">
        <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Spectacolele recurente se adauga in 2 minute. <strong class="text-white">Inainte pierdeam ore cu fiecare reprezentatie.</strong>"</p>
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-gold to-brand-amber flex items-center justify-center text-white text-lg">&#128203;</div>
          <div><div class="text-white font-medium">Ion P.</div><div class="text-white/40 text-sm">Administrator, Teatru de Stat</div></div>
        </div>
      </div>

      <div class="testimonial-card reveal reveal-delay-2">
        <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Abonamentele de stagiune se vand singure acum. <strong class="text-white">Sistemul face tot - de la vanzare la reminder.</strong>"</p>
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-indigo to-brand-violet flex items-center justify-center text-white text-lg">&#127915;</div>
          <div><div class="text-white font-medium">Ana V.</div><div class="text-white/40 text-sm">Marketing, Teatru Municipal</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0">
    <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-brand-burgundy/20 rounded-full blur-[150px]"></div>
    <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-brand-gold/20 rounded-full blur-[150px]"></div>
  </div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
    <div class="reveal">
      <div class="text-6xl mb-6">&#127917;</div>
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6">Scena ta merita<br><span class="text-gradient">parteneri de incredere.</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto">Fiecare leu economisit din comisioane se intoarce in arta. <strong class="text-white">Hai sa vorbim despre teatrul tau.</strong></p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
        <a href="<?php echo esc_url(home_url('/demo')); ?>" class="group cta-primary inline-flex items-center justify-center gap-3 font-semibold text-lg px-10 py-5 rounded-full text-white">
          <span>Programeaza un Demo</span>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/calculator')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-5 rounded-full bg-white/10 text-white border border-white/20 hover:bg-white/20 transition-all">Calculeaza Economiile</a>
      </div>

      <div class="flex flex-wrap justify-center gap-6">
        <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Doar 1% comision</span></div>
        <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Configurare in 24h</span></div>
        <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport dedicat</span></div>
      </div>

      <p class="text-white/30 text-sm mt-12">Tixello lucreaza cu teatre de la studiouri intime de 50 de locuri<br>la institutii nationale cu sali multiple.</p>
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
