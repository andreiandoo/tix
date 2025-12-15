<?php
/**
 * Template Name: Pentru Management
 * Description: Landing page for artist managers and agencies - multi-artist dashboard, white-label, direct payments
 */

get_header();
?>

<style>
  ::selection { background: #d4af37; color: #0a0a0f; }

  .text-gradient {
    background: linear-gradient(135deg, #fef3c7 0%, #d4af37 30%, #b8860b 70%, #8b6914 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shimmer 4s linear infinite;
  }
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  @keyframes float { 0%, 100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-20px) rotate(2deg); } }
  @keyframes bounceSoft { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @keyframes goldPulse { 0%, 100% { box-shadow: 0 0 20px rgba(212, 175, 55, 0.3); } 50% { box-shadow: 0 0 40px rgba(212, 175, 55, 0.6); } }
  @keyframes countMoney { 0% { transform: translateY(0); } 50% { transform: translateY(-5px); } 100% { transform: translateY(0); } }

  .animate-float { animation: float 6s ease-in-out infinite; }
  .animate-float-slow { animation: float 8s ease-in-out infinite; }
  .animate-float-fast { animation: float 4s ease-in-out infinite; }
  .animate-bounce-soft { animation: bounceSoft 2s ease-in-out infinite; }
  .animate-gold-pulse { animation: goldPulse 3s ease-in-out infinite; }

  .reveal { opacity: 0; transform: translateY(50px); transition: all 0.9s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }

  .hero-gradient {
    background:
      radial-gradient(ellipse 80% 50% at 50% -20%, rgba(212, 175, 55, 0.15), transparent),
      radial-gradient(ellipse 60% 40% at 80% 60%, rgba(71, 85, 105, 0.2), transparent),
      radial-gradient(ellipse 50% 30% at 20% 80%, rgba(30, 58, 95, 0.2), transparent);
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
    background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), var(--glow-color, rgba(212, 175, 55, 0.1)), transparent 40%);
    opacity: 0;
    transition: opacity 0.5s;
  }
  .glow-card:hover::before { opacity: 1; }
  .glow-card:hover { border-color: var(--border-color, rgba(212, 175, 55, 0.3)); transform: translateY(-8px); box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3); }

  .feature-icon { width: 64px; height: 64px; border-radius: 20px; display: flex; align-items: center; justify-content: center; position: relative; transition: transform 0.3s ease; }
  .feature-icon::after { content: ''; position: absolute; inset: 0; border-radius: inherit; background: inherit; filter: blur(20px); opacity: 0.4; z-index: -1; }
  .glow-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); }

  .artist-card {
    background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 16px;
    padding: 16px;
    transition: all 0.3s ease;
  }
  .artist-card:hover { border-color: rgba(212, 175, 55, 0.3); background: rgba(212, 175, 55, 0.05); }

  .premium-badge {
    background: linear-gradient(135deg, #d4af37, #b8860b);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #0a0a0f;
  }

  .split-bar { height: 12px; border-radius: 6px; overflow: hidden; display: flex; }
  .split-segment { height: 100%; display: flex; align-items: center; justify-content: center; font-size: 9px; font-weight: 600; color: white; }

  .tour-dot { width: 12px; height: 12px; border-radius: 50%; position: relative; }
  .tour-dot::before { content: ''; position: absolute; inset: -4px; border-radius: 50%; border: 2px solid currentColor; opacity: 0.3; }

  .stat-card {
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(212, 175, 55, 0.02));
    border: 1px solid rgba(212, 175, 55, 0.15);
    border-radius: 16px;
    padding: 20px;
  }

  .artist-page-preview {
    background: linear-gradient(135deg, #1a1a27, #13131c);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 16px;
    overflow: hidden;
  }
  .artist-cover {
    height: 80px;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.3), rgba(124, 58, 237, 0.3));
    position: relative;
  }
  .artist-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 3px solid #13131c;
    position: absolute;
    bottom: -30px;
    left: 20px;
    background: linear-gradient(135deg, #d4af37, #7c3aed);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
  }

  .dashboard-mockup { background: linear-gradient(135deg, rgba(19, 19, 28, 0.9), rgba(26, 26, 39, 0.9)); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; overflow: hidden; box-shadow: 0 40px 80px -20px rgba(0, 0, 0, 0.5); }

  .testimonial-card { background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01)); border: 1px solid rgba(255,255,255,0.08); border-radius: 24px; padding: 32px; position: relative; }
  .testimonial-card::before { content: '"'; position: absolute; top: 20px; left: 24px; font-size: 80px; font-family: Georgia, serif; color: rgba(212, 175, 55, 0.2); line-height: 1; }

  .float-element { position: absolute; pointer-events: none; z-index: 0; }

  .cta-primary { position: relative; overflow: hidden; background: linear-gradient(135deg, #d4af37, #b8860b); transition: all 0.3s ease; }
  .cta-primary::before { content: ''; position: absolute; inset: 0; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent); transform: translateX(-100%); transition: transform 0.6s; }
  .cta-primary:hover::before { transform: translateX(100%); }
  .cta-primary:hover { transform: translateY(-2px); box-shadow: 0 20px 40px rgba(212, 175, 55, 0.4); }

  .counter-value { font-variant-numeric: tabular-nums; }

  .roster-item {
    aspect-ratio: 1;
    border-radius: 16px;
    overflow: hidden;
    position: relative;
    background: linear-gradient(135deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));
    border: 1px solid rgba(255,255,255,0.08);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s ease;
  }
  .roster-item:hover { border-color: rgba(212, 175, 55, 0.4); transform: scale(1.05); }

  .money-icon { animation: countMoney 2s ease-in-out infinite; }

  .calendar-event {
    padding: 8px 12px;
    border-radius: 8px;
    border-left: 3px solid;
    background: rgba(255,255,255,0.02);
    font-size: 12px;
  }
</style>

<div class="font-body bg-dark-900 text-zinc-200 overflow-x-hidden noise-bg">

  <!-- HERO -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden hero-gradient">
    <div class="float-element top-32 left-[8%] animate-float"><div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-gold/20 to-brand-amber/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-3xl">👔</div></div>
    <div class="float-element top-48 right-[12%] animate-float-slow" style="animation-delay: 1s;"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-indigo/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-2xl">🎤</div></div>
    <div class="float-element bottom-40 left-[15%] animate-float-fast" style="animation-delay: 0.5s;"><div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-slate/20 to-brand-navy/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-xl">📊</div></div>
    <div class="float-element bottom-32 right-[8%] animate-float" style="animation-delay: 2s;"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-gold/20 to-brand-violet/20 backdrop-blur-sm border border-white/10 flex items-center justify-center text-2xl">💰</div></div>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 relative z-10">
      <div class="text-center">
        <div class="reveal inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-brand-gold/10 border border-brand-gold/20 mb-8">
          <span class="premium-badge">PRO</span>
          <span class="text-brand-gold text-sm font-medium">Pentru Manageri & Agenții de Artiști</span>
        </div>

        <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-[1.05] reveal reveal-delay-1">
          Roster-ul Tău.<br><span class="text-gradient">Regulile Tale.</span>
        </h1>

        <p class="text-xl md:text-2xl text-white/60 max-w-3xl mx-auto mb-8 leading-relaxed reveal reveal-delay-2">
          Gestionează toți artiștii dintr-un singur loc. White-label complet, încasări directe în contul tău, și <strong class="text-brand-gold">control total</strong> asupra fiecărei cariere.
        </p>

        <div class="flex flex-wrap justify-center gap-2 mb-12 reveal reveal-delay-3">
          <span class="px-4 py-2 rounded-full bg-brand-gold/10 border border-brand-gold/20 text-brand-gold text-sm font-medium">👔 Multi-Artist Dashboard</span>
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/70 text-sm">🎨 White-Label Complet</span>
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/70 text-sm">💳 Încasări Directe</span>
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/70 text-sm">🗺️ Management Turnee</span>
          <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/70 text-sm">📊 Analytics per Artist</span>
        </div>

        <div class="flex flex-wrap justify-center gap-8 md:gap-16 mb-12 reveal reveal-delay-3">
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 100) count++; else clearInterval(interval); }, 15) }, 500)">
            <div class="text-4xl md:text-5xl font-display font-bold text-gradient counter-value"><span x-text="count"></span>%</div>
            <div class="text-white/50 text-sm">Control asupra datelor</div>
          </div>
          <div class="hidden sm:block w-px h-16 bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 50) count++; else clearInterval(interval); }, 30) }, 700)">
            <div class="text-4xl md:text-5xl font-display font-bold text-gradient counter-value"><span x-text="count"></span>+</div>
            <div class="text-white/50 text-sm">Artiști per cont</div>
          </div>
          <div class="hidden sm:block w-px h-16 bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 24) count++; else clearInterval(interval); }, 60) }, 900)">
            <div class="text-4xl md:text-5xl font-display font-bold text-gradient counter-value"><span x-text="count"></span>h</div>
            <div class="text-white/50 text-sm">Virament către tine</div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-4">
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="group cta-primary inline-flex items-center justify-center gap-3 font-semibold text-lg px-8 py-4 rounded-full text-dark-900">
            <span>Programează un Demo</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/studii-caz')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-8 py-4 rounded-full bg-white/5 text-white border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <span>Vezi Studii de Caz</span>
          </a>
        </div>

        <div class="flex flex-wrap justify-center gap-6 mt-12 reveal">
          <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Doar 1% comision</span></div>
          <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Bani în contul TĂU</span></div>
          <div class="flex items-center gap-2 text-white/40 text-sm"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Fără intermediari</span></div>
        </div>
      </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce-soft">
      <div class="w-6 h-10 rounded-full border-2 border-white/20 flex items-start justify-center p-2"><div class="w-1.5 h-3 rounded-full bg-white/40 animate-pulse"></div></div>
    </div>
  </section>

  <!-- CONTROL & DIRECT PAYMENTS -->
  <section class="py-32 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
      <div class="text-center mb-16 reveal">
        <span class="inline-block px-4 py-2 rounded-full bg-brand-gold/10 text-brand-gold text-sm font-medium mb-4">💰 Banii Tăi, Direct</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
          Fără intermediari. Fără așteptare.<br><span class="text-gradient">Încasări direct în contul tău.</span>
        </h2>
      </div>

      <div class="grid md:grid-cols-2 gap-8 items-center reveal">
        <!-- Payment Flow Visual -->
        <div class="space-y-6">
          <div class="p-6 rounded-2xl bg-dark-800/50 border border-white/10">
            <div class="flex items-center gap-4 mb-4">
              <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center text-2xl">🎫</div>
              <div class="flex-1">
                <div class="text-white font-medium">Fan cumpără bilet</div>
                <div class="text-white/40 text-sm">Concert Alexandra Stan • 150 RON</div>
              </div>
            </div>

            <div class="flex items-center justify-center my-4">
              <svg class="w-6 h-6 text-brand-gold animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </div>

            <div class="flex items-center gap-4 mb-4">
              <div class="w-12 h-12 rounded-xl bg-brand-gold/20 flex items-center justify-center text-2xl money-icon">💳</div>
              <div class="flex-1">
                <div class="text-brand-gold font-medium">Banii ajung la TINE</div>
                <div class="text-white/40 text-sm">În contul agenției tale, în 24h</div>
              </div>
              <div class="text-brand-gold font-display text-xl font-bold">148.50 RON</div>
            </div>

            <div class="mt-4 p-3 rounded-xl bg-brand-gold/5 border border-brand-gold/10">
              <div class="flex items-center justify-between text-sm">
                <span class="text-white/50">Comision Tixello (1%)</span>
                <span class="text-white/70">-1.50 RON</span>
              </div>
            </div>
          </div>

          <!-- Split Distribution -->
          <div class="p-6 rounded-2xl bg-dark-800/50 border border-white/10">
            <div class="text-white font-medium mb-4">Tu decizi distribuția:</div>

            <div class="split-bar mb-3">
              <div class="split-segment bg-brand-gold" style="width: 15%;">15%</div>
              <div class="split-segment bg-brand-violet" style="width: 70%;">70%</div>
              <div class="split-segment bg-brand-slate" style="width: 15%;">15%</div>
            </div>

            <div class="flex justify-between text-xs text-white/50">
              <span>👔 Manager</span>
              <span>🎤 Artist</span>
              <span>🎫 Booking</span>
            </div>

            <p class="text-white/40 text-sm mt-4">Split-ul se aplică automat la fiecare vânzare. Fiecare primește în contul lui.</p>
          </div>
        </div>

        <!-- Benefits -->
        <div class="space-y-4">
          <div class="flex items-start gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
            <div class="w-10 h-10 rounded-lg bg-brand-gold/20 flex items-center justify-center text-xl flex-shrink-0">🏦</div>
            <div>
              <div class="text-white font-medium mb-1">Contul TĂU Stripe/Bancar</div>
              <div class="text-white/50 text-sm">Nu mai trec banii prin altcineva. Conectezi contul tău și încasezi direct.</div>
            </div>
          </div>

          <div class="flex items-start gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
            <div class="w-10 h-10 rounded-lg bg-brand-green/20 flex items-center justify-center text-xl flex-shrink-0">⚡</div>
            <div>
              <div class="text-white font-medium mb-1">Virament în 24h</div>
              <div class="text-white/50 text-sm">Nu mai aștepți 30-60 de zile după eveniment. Banii sunt la tine a doua zi.</div>
            </div>
          </div>

          <div class="flex items-start gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
            <div class="w-10 h-10 rounded-lg bg-brand-violet/20 flex items-center justify-center text-xl flex-shrink-0">📊</div>
            <div>
              <div class="text-white font-medium mb-1">Split Automat Multi-Party</div>
              <div class="text-white/50 text-sm">Manager, artist, booking agent—fiecare primește partea lui automat.</div>
            </div>
          </div>

          <div class="flex items-start gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/5">
            <div class="w-10 h-10 rounded-lg bg-brand-amber/20 flex items-center justify-center text-xl flex-shrink-0">🔒</div>
            <div>
              <div class="text-white font-medium mb-1">Zero Risc de Neplată</div>
              <div class="text-white/50 text-sm">Nu mai depinzi de organizatori să te plătească. Banii vin direct de la fani.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES BENTO -->
  <section class="py-32 relative overflow-hidden bg-dark-850">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-gradient-to-b from-brand-gold/10 to-transparent rounded-full blur-[150px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
      <div class="text-center mb-20 reveal">
        <span class="inline-block px-4 py-2 rounded-full bg-brand-gold/10 text-brand-gold text-sm font-medium mb-4">👔 Funcționalități Management</span>
        <h2 class="font-display text-4xl md:text-6xl font-bold text-white mb-6">Un dashboard pentru<br><span class="text-gradient">întregul roster.</span></h2>
      </div>

      <div class="grid lg:grid-cols-3 gap-6">

        <!-- Multi-Artist Dashboard -->
        <div class="glow-card p-8 lg:col-span-2" style="--glow-color: rgba(212, 175, 55, 0.15); --border-color: rgba(212, 175, 55, 0.3);">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <div class="feature-icon bg-gradient-to-br from-brand-gold to-brand-amber mb-6">
                <svg class="w-8 h-8 text-dark-900" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
              </div>
              <h3 class="font-display text-2xl font-bold text-white mb-3">Multi-Artist Dashboard</h3>
              <p class="text-white/50 mb-4">Toți artiștii tăi, toate evenimentele, toate veniturile—într-un singur loc. Switch între artiști cu un click.</p>
              <ul class="space-y-2">
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Roster complet vizibil</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Comparații între artiști</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Calendar unificat</li>
              </ul>
            </div>
            <div>
              <div class="dashboard-mockup p-4">
                <div class="flex items-center justify-between mb-4">
                  <span class="text-white font-medium">Roster</span>
                  <span class="premium-badge">8 Artiști</span>
                </div>

                <div class="grid grid-cols-4 gap-2 mb-4">
                  <div class="roster-item"><div class="text-2xl">🎤</div><div class="text-white/70 text-[10px] text-center">Alex P.</div></div>
                  <div class="roster-item border-brand-gold/40"><div class="text-2xl">🎸</div><div class="text-white/70 text-[10px] text-center">Luna</div></div>
                  <div class="roster-item"><div class="text-2xl">🎹</div><div class="text-white/70 text-[10px] text-center">DJ Max</div></div>
                  <div class="roster-item"><div class="text-2xl">🎵</div><div class="text-white/70 text-[10px] text-center">Trio X</div></div>
                </div>

                <div class="p-3 rounded-xl bg-dark-800">
                  <div class="flex items-center justify-between mb-2">
                    <span class="text-white/50 text-xs">Total Venituri Q4</span>
                    <span class="text-brand-gold text-xs font-medium">↑ 23%</span>
                  </div>
                  <div class="text-white font-display text-2xl font-bold">847.500 RON</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- White Label -->
        <div class="glow-card p-8" style="--glow-color: rgba(124, 58, 237, 0.15); --border-color: rgba(124, 58, 237, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-violet to-brand-indigo mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">White-Label Total</h3>
          <p class="text-white/50 mb-4">Fiecare artist are pagina lui cu branding propriu. Logo-ul Tixello nu apare nicăieri.</p>

          <div class="mt-4 artist-page-preview">
            <div class="artist-cover"><div class="artist-avatar">🎤</div></div>
            <div class="p-4 pt-10">
              <div class="text-white font-semibold">Alexandra Stan</div>
              <div class="text-white/40 text-xs">alexandrastan.com/bilete</div>
            </div>
          </div>
        </div>

        <!-- Tour Management -->
        <div class="glow-card p-8" style="--glow-color: rgba(6, 182, 212, 0.15); --border-color: rgba(6, 182, 212, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-cyan to-brand-teal mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Management Turnee</h3>
          <p class="text-white/50 mb-4">Creezi turneul, adaugi datele, vânzările pornesc. Vizibilitate pe toate orașele.</p>

          <div class="mt-4 space-y-2">
            <div class="flex items-center gap-3 p-2 rounded-lg bg-dark-800/50">
              <div class="tour-dot bg-brand-cyan text-brand-cyan"></div>
              <div class="flex-1">
                <div class="text-white text-sm">București</div>
                <div class="text-white/40 text-[10px]">15 Mar • Sold Out</div>
              </div>
              <span class="text-brand-green text-xs">100%</span>
            </div>
            <div class="flex items-center gap-3 p-2 rounded-lg bg-dark-800/50">
              <div class="tour-dot bg-brand-amber text-brand-amber"></div>
              <div class="flex-1">
                <div class="text-white text-sm">Cluj</div>
                <div class="text-white/40 text-[10px]">17 Mar • 847/1000</div>
              </div>
              <span class="text-brand-amber text-xs">85%</span>
            </div>
            <div class="flex items-center gap-3 p-2 rounded-lg bg-dark-800/50">
              <div class="tour-dot bg-brand-violet text-brand-violet"></div>
              <div class="flex-1">
                <div class="text-white text-sm">Timișoara</div>
                <div class="text-white/40 text-[10px]">19 Mar • 523/800</div>
              </div>
              <span class="text-white/50 text-xs">65%</span>
            </div>
          </div>
        </div>

        <!-- Artist Analytics -->
        <div class="glow-card p-8 lg:col-span-2" style="--glow-color: rgba(16, 185, 129, 0.15); --border-color: rgba(16, 185, 129, 0.3);">
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <div class="feature-icon bg-gradient-to-br from-brand-green to-brand-emerald mb-6">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <h3 class="font-display text-2xl font-bold text-white mb-3">Analytics per Artist</h3>
              <p class="text-white/50 mb-4">Fiecare artist are statistici detaliate: vânzări, audiență, comparații, trend-uri, locații populare.</p>
              <ul class="space-y-2">
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Venituri per eveniment</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Demografice audiență</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Orașe cu cei mai mulți fani</li>
              </ul>
            </div>
            <div>
              <div class="dashboard-mockup p-4">
                <div class="flex items-center gap-3 mb-4">
                  <div class="w-10 h-10 rounded-full bg-gradient-to-br from-brand-violet to-brand-indigo flex items-center justify-center text-lg">🎤</div>
                  <div>
                    <div class="text-white font-medium">Alexandra Stan</div>
                    <div class="text-white/40 text-xs">Ultimele 12 luni</div>
                  </div>
                </div>

                <div class="grid grid-cols-2 gap-3 mb-4">
                  <div class="stat-card">
                    <div class="text-white/50 text-xs mb-1">Bilete vândute</div>
                    <div class="text-white font-display text-xl font-bold">47.832</div>
                    <div class="text-brand-green text-xs">↑ 34%</div>
                  </div>
                  <div class="stat-card">
                    <div class="text-white/50 text-xs mb-1">Venituri</div>
                    <div class="text-white font-display text-xl font-bold">523K</div>
                    <div class="text-brand-green text-xs">↑ 28%</div>
                  </div>
                </div>

                <div class="text-white/50 text-xs mb-2">Top Orașe</div>
                <div class="space-y-1">
                  <div class="flex items-center gap-2">
                    <span class="text-white/70 text-xs w-20">București</span>
                    <div class="flex-1 h-2 rounded-full bg-dark-800"><div class="h-full rounded-full bg-brand-gold" style="width: 85%;"></div></div>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="text-white/70 text-xs w-20">Cluj</span>
                    <div class="flex-1 h-2 rounded-full bg-dark-800"><div class="h-full rounded-full bg-brand-violet" style="width: 62%;"></div></div>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="text-white/70 text-xs w-20">Iași</span>
                    <div class="flex-1 h-2 rounded-full bg-dark-800"><div class="h-full rounded-full bg-brand-cyan" style="width: 45%;"></div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Artist Pages -->
        <div class="glow-card p-8" style="--glow-color: rgba(236, 72, 153, 0.15); --border-color: rgba(236, 72, 153, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-rose to-brand-pink mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Pagini de Artist</h3>
          <p class="text-white/50 mb-4">EPK digital: bio, foto, video, discografie, toate evenimentele—totul într-un link.</p>

          <div class="mt-4 space-y-2">
            <div class="flex items-center gap-2 p-2 rounded-lg bg-dark-800/50"><span class="text-lg">📸</span><span class="text-white/70 text-sm">Galerie foto HD</span></div>
            <div class="flex items-center gap-2 p-2 rounded-lg bg-dark-800/50"><span class="text-lg">🎵</span><span class="text-white/70 text-sm">Embed Spotify/YouTube</span></div>
            <div class="flex items-center gap-2 p-2 rounded-lg bg-dark-800/50"><span class="text-lg">📅</span><span class="text-white/70 text-sm">Calendar evenimente</span></div>
            <div class="flex items-center gap-2 p-2 rounded-lg bg-dark-800/50"><span class="text-lg">📧</span><span class="text-white/70 text-sm">Contact booking</span></div>
          </div>
        </div>

        <!-- Unified Calendar -->
        <div class="glow-card p-8" style="--glow-color: rgba(249, 115, 22, 0.15); --border-color: rgba(249, 115, 22, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-orange to-brand-amber mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Calendar Unificat</h3>
          <p class="text-white/50 mb-4">Toate evenimentele tuturor artiștilor într-un calendar. Evită conflictele, planifică eficient.</p>

          <div class="mt-4 space-y-2">
            <div class="calendar-event border-brand-violet"><div class="text-white text-sm">🎤 Alex P. @ București</div><div class="text-white/40 text-[10px]">15 Mar, 21:00</div></div>
            <div class="calendar-event border-brand-rose"><div class="text-white text-sm">🎸 Luna @ Cluj</div><div class="text-white/40 text-[10px]">15 Mar, 20:00</div></div>
            <div class="calendar-event border-brand-cyan"><div class="text-white text-sm">🎹 DJ Max @ Mamaia</div><div class="text-white/40 text-[10px]">16 Mar, 23:00</div></div>
          </div>
        </div>

        <!-- Access Control -->
        <div class="glow-card p-8" style="--glow-color: rgba(99, 102, 241, 0.15); --border-color: rgba(99, 102, 241, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-indigo to-brand-violet mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Acces Granular</h3>
          <p class="text-white/50 mb-4">Fiecare artist vede doar ce trebuie. Tu vezi tot. Control total pe permisiuni.</p>

          <div class="mt-4 space-y-2">
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-white/70 text-sm">👔 Manager</span><span class="text-brand-gold text-xs">Full Access</span></div>
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-white/70 text-sm">🎤 Artist</span><span class="text-white/50 text-xs">Own Events</span></div>
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-white/70 text-sm">📊 Accountant</span><span class="text-white/50 text-xs">Finance Only</span></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- MORE FEATURES -->
  <section class="py-32 relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
      <div class="text-center mb-16 reveal">
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-4">Și mai multe <span class="text-gradient">funcționalități</span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 reveal">
        <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5"><div class="text-2xl mb-3">🎁</div><h3 class="text-white font-semibold mb-1">Meet & Greet Packages</h3><p class="text-white/50 text-sm">Vinde experiențe VIP cu acces la artist</p></div>
        <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5"><div class="text-2xl mb-3">👕</div><h3 class="text-white font-semibold mb-1">Merchandise Bundle</h3><p class="text-white/50 text-sm">Tricouri și accesorii la checkout</p></div>
        <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5"><div class="text-2xl mb-3">📧</div><h3 class="text-white font-semibold mb-1">Email-uri Branded</h3><p class="text-white/50 text-sm">Confirmări cu logo-ul artistului</p></div>
        <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5"><div class="text-2xl mb-3">🎯</div><h3 class="text-white font-semibold mb-1">Retargeting Pixel</h3><p class="text-white/50 text-sm">Facebook, TikTok, Google integrat</p></div>
        <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5"><div class="text-2xl mb-3">📱</div><h3 class="text-white font-semibold mb-1">Fan Database</h3><p class="text-white/50 text-sm">CRM per artist—datele tale, nu ale platformei</p></div>
        <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5"><div class="text-2xl mb-3">💱</div><h3 class="text-white font-semibold mb-1">Multi-Currency</h3><p class="text-white/50 text-sm">Turnee internaționale în EUR, USD, GBP</p></div>
        <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5"><div class="text-2xl mb-3">📋</div><h3 class="text-white font-semibold mb-1">Contract Templates</h3><p class="text-white/50 text-sm">Riders și contracte standard pentru organizatori</p></div>
        <div class="p-5 rounded-2xl bg-dark-800/50 border border-white/5"><div class="text-2xl mb-3">🔗</div><h3 class="text-white font-semibold mb-1">Affiliate Links</h3><p class="text-white/50 text-sm">Urmărește care influencer vinde cel mai bine</p></div>
        <div class="p-5 rounded-2xl bg-gradient-to-br from-brand-gold/10 to-brand-amber/5 border border-brand-gold/20"><div class="text-2xl mb-3">📄</div><h3 class="text-white font-semibold mb-1">eFactura Integrat</h3><p class="text-brand-gold text-sm">Fiscalizare automată pentru toate vânzările</p></div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="py-32 relative overflow-hidden bg-dark-850">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center mb-16 reveal">
        <span class="inline-block px-4 py-2 rounded-full bg-brand-gold/10 text-brand-gold text-sm font-medium mb-4">💬 Testimoniale</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white">Ce spun managerii de artiști</h2>
      </div>

      <div class="grid md:grid-cols-3 gap-6">
        <div class="testimonial-card reveal">
          <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"În sfârșit văd toți artiștii mei într-un loc. <strong class="text-white">Și banii ajung direct în contul agenției,</strong> nu mai alerg după organizatori."</p>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-gold to-brand-amber flex items-center justify-center text-dark-900 text-lg">👔</div>
            <div><div class="text-white font-medium">Cristian M.</div><div class="text-white/40 text-sm">CEO, Artist Management Agency</div></div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-1">
          <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Turneul de 12 orașe l-am setat în 30 de minute. <strong class="text-white">Fiecare oraș cu prețuri diferite, totul centralizat.</strong>"</p>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-violet to-brand-indigo flex items-center justify-center text-white text-lg">🎤</div>
            <div><div class="text-white font-medium">Ana P.</div><div class="text-white/40 text-sm">Manager, Pop Artist</div></div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-2">
          <p class="text-white/70 text-lg leading-relaxed mb-6 relative z-10">"Split-ul automat între mine, artist și booking agent <strong class="text-white">a eliminat complet discuțiile despre bani.</strong> Fiecare primește automat."</p>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-cyan to-brand-teal flex items-center justify-center text-white text-lg">💼</div>
            <div><div class="text-white font-medium">Mihai R.</div><div class="text-white/40 text-sm">Booking Agent</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0">
      <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-brand-gold/15 rounded-full blur-[150px]"></div>
      <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-brand-violet/15 rounded-full blur-[150px]"></div>
    </div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
      <div class="reveal">
        <div class="text-6xl mb-6">👔</div>
        <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6">Roster-ul tău.<br><span class="text-gradient">Control total.</span></h2>
        <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto">Bani direct în contul tău, statistici pentru fiecare artist, white-label complet. <strong class="text-white">Hai să construim împreună.</strong></p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="group cta-primary inline-flex items-center justify-center gap-3 font-semibold text-lg px-10 py-5 rounded-full text-dark-900">
            <span>Programează un Demo</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-5 rounded-full bg-white/10 text-white border border-white/20 hover:bg-white/20 transition-all">Contactează Vânzări</a>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Doar 1% comision</span></div>
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Încasări directe</span></div>
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Artiști nelimitați</span></div>
        </div>

        <p class="text-white/30 text-sm mt-12">Tixello lucrează cu manageri care gestionează de la un singur artist<br>la agenții cu zeci de artiști în roster.</p>
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
