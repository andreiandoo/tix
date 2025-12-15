<?php
/**
 * Template Name: Functionalitati
 * Description: Features overview page - complete ticketing platform capabilities
 */

get_header();
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  ::selection { background: #7c3aed; color: white; }
  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; animation: shimmer 4s linear infinite; }
  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .hero-gradient { background: radial-gradient(ellipse 100% 70% at 50% -30%, rgba(124, 58, 237, 0.25), transparent), radial-gradient(ellipse 80% 50% at 80% 50%, rgba(6, 182, 212, 0.15), transparent); }
  .category-nav { scrollbar-width: none; }
  .category-nav::-webkit-scrollbar { display: none; }
  .category-btn { padding: 12px 24px; border-radius: 100px; font-size: 14px; font-weight: 500; white-space: nowrap; transition: all 0.3s; background: rgba(255,255,255,0.03); }
  .category-btn:hover { background: rgba(255,255,255,0.08); }
  .category-btn.active { background: var(--cat-color); color: white; box-shadow: 0 0 20px var(--cat-color-glow); }
  .feature-card { position: relative; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; padding: 28px; transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); overflow: hidden; }
  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), var(--card-glow, rgba(124, 58, 237, 0.1)), transparent 50%); opacity: 0; transition: opacity 0.5s; }
  .feature-card:hover::before { opacity: 1; }
  .feature-card:hover { transform: translateY(-8px); border-color: var(--card-border, rgba(124, 58, 237, 0.3)); }
  .feature-icon { width: 56px; height: 56px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
  .major-feature { background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(6, 182, 212, 0.05)); border: 1px solid rgba(124, 58, 237, 0.2); border-radius: 24px; padding: 40px; }
  .integration-logo { width: 64px; height: 64px; border-radius: 16px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; transition: all 0.3s; }
  .integration-logo:hover { transform: translateY(-4px) scale(1.05); }
  .microservice-link { display: inline-flex; align-items: center; gap: 8px; padding: 8px 16px; border-radius: 8px; font-size: 13px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: rgba(255,255,255,0.7); transition: all 0.2s; }
  .microservice-link:hover { background: rgba(124, 58, 237, 0.2); border-color: rgba(124, 58, 237, 0.3); color: white; }
</style>

<div class="font-body bg-dark-900 text-zinc-200 overflow-x-hidden" x-data="{ activeCategory: 'all' }">

  <!-- HERO -->
  <section class="min-h-[80vh] flex items-center pt-20 relative overflow-hidden hero-gradient">
    <div class="absolute top-32 left-[10%] text-4xl opacity-20 animate-float">🎫</div>
    <div class="absolute top-48 right-[15%] text-3xl opacity-15 animate-float" style="animation-delay: 1s;">💳</div>
    <div class="absolute bottom-32 left-[20%] text-3xl opacity-15 animate-float" style="animation-delay: 2s;">📊</div>
    <div class="absolute bottom-48 right-[10%] text-4xl opacity-20 animate-float" style="animation-delay: 0.5s;">🔐</div>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 text-center relative z-10">
      <div class="reveal inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-white/5 border border-white/10 mb-8">
        <span class="flex h-2 w-2"><span class="animate-ping absolute inline-flex h-2 w-2 rounded-full bg-brand-green opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-brand-green"></span></span>
        <span class="text-white/70 text-sm font-medium">25+ Functionalitati Integrate</span>
      </div>

      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-8 leading-[1.05] reveal reveal-delay-1">Totul pentru<br><span class="text-gradient">evenimente de succes</span></h1>
      <p class="text-xl md:text-2xl text-white/60 max-w-3xl mx-auto mb-12 leading-relaxed reveal reveal-delay-2">Platforma completa de ticketing. De la vanzari la check-in, de la CRM la analiza. <strong class="text-white">Un singur loc pentru tot.</strong></p>

      <div class="flex flex-wrap justify-center gap-8 mb-12 reveal">
        <div class="text-center"><div class="text-3xl md:text-4xl font-display font-bold text-gradient">25+</div><div class="text-white/50 text-sm">Functionalitati</div></div>
        <div class="hidden sm:block w-px h-12 bg-white/10"></div>
        <div class="text-center"><div class="text-3xl md:text-4xl font-display font-bold text-gradient">50+</div><div class="text-white/50 text-sm">Integrari</div></div>
        <div class="hidden sm:block w-px h-12 bg-white/10"></div>
        <div class="text-center"><div class="text-3xl md:text-4xl font-display font-bold text-gradient">99.9%</div><div class="text-white/50 text-sm">Uptime</div></div>
      </div>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-8 py-4 rounded-full bg-brand-violet text-white hover:bg-brand-violet/80 transition-all">Incepe Gratuit<svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        <a href="#categorii" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all">Exploreaza Tot<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg></a>
      </div>
    </div>
  </section>

  <!-- CATEGORY NAV -->
  <section class="sticky top-20 z-40 bg-dark-900/95 backdrop-blur-xl border-b border-white/5 py-4" id="categorii">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="category-nav flex gap-3 overflow-x-auto pb-2">
        <button @click="activeCategory = 'all'" :class="activeCategory === 'all' ? 'active' : ''" class="category-btn" style="--cat-color: linear-gradient(135deg, #7c3aed, #06b6d4); --cat-color-glow: rgba(124, 58, 237, 0.3);">✨ Toate</button>
        <button @click="activeCategory = 'ticketing'" :class="activeCategory === 'ticketing' ? 'active' : ''" class="category-btn" style="--cat-color: #7c3aed; --cat-color-glow: rgba(124, 58, 237, 0.3);">🎫 Ticketing</button>
        <button @click="activeCategory = 'payments'" :class="activeCategory === 'payments' ? 'active' : ''" class="category-btn" style="--cat-color: #10b981; --cat-color-glow: rgba(16, 185, 129, 0.3);">💳 Plati</button>
        <button @click="activeCategory = 'access'" :class="activeCategory === 'access' ? 'active' : ''" class="category-btn" style="--cat-color: #06b6d4; --cat-color-glow: rgba(6, 182, 212, 0.3);">🚪 Acces</button>
        <button @click="activeCategory = 'marketing'" :class="activeCategory === 'marketing' ? 'active' : ''" class="category-btn" style="--cat-color: #f43f5e; --cat-color-glow: rgba(244, 63, 94, 0.3);">📣 Marketing</button>
        <button @click="activeCategory = 'analytics'" :class="activeCategory === 'analytics' ? 'active' : ''" class="category-btn" style="--cat-color: #f59e0b; --cat-color-glow: rgba(245, 158, 11, 0.3);">📊 Analiza</button>
        <button @click="activeCategory = 'integrations'" :class="activeCategory === 'integrations' ? 'active' : ''" class="category-btn" style="--cat-color: #3B82F6; --cat-color-glow: rgba(59, 130, 246, 0.3);">🔗 Integrari</button>
      </div>
    </div>
  </section>

  <!-- TICKETING CORE -->
  <section class="py-24 relative" x-show="activeCategory === 'all' || activeCategory === 'ticketing'" x-transition>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex items-center gap-4 mb-12 reveal">
        <div class="w-12 h-12 rounded-2xl bg-category-ticketing/20 flex items-center justify-center"><span class="text-2xl">🎫</span></div>
        <div><h2 class="font-display text-3xl font-bold text-white">Ticketing Core</h2><p class="text-white/50">Creare, vanzare si livrare bilete</p></div>
      </div>

      <div class="major-feature mb-8 reveal">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
          <div>
            <span class="text-category-ticketing text-sm font-medium uppercase tracking-widest">Fundatia</span>
            <h3 class="font-display text-3xl md:text-4xl font-bold text-white mt-2 mb-4">Creare & Management Evenimente</h3>
            <p class="text-white/60 text-lg mb-6">Constructor drag-and-drop pentru pagini de evenimente frumoase. Configureaza categorii nelimitate de bilete, preturi pe niveluri, reduceri early bird si pachete VIP.</p>
            <div class="flex flex-wrap gap-3">
              <span class="px-3 py-1.5 rounded-full bg-category-ticketing/20 text-category-ticketing text-sm">Drag & Drop</span>
              <span class="px-3 py-1.5 rounded-full bg-category-ticketing/20 text-category-ticketing text-sm">Multi-day</span>
              <span class="px-3 py-1.5 rounded-full bg-category-ticketing/20 text-category-ticketing text-sm">Recurente</span>
            </div>
          </div>
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center gap-3 mb-4">
              <div class="w-10 h-10 rounded-xl bg-category-ticketing/20 flex items-center justify-center text-lg">🎪</div>
              <div><div class="text-white font-semibold">Festival Vara 2025</div><div class="text-white/40 text-xs">3 zile • 5 tipuri bilete</div></div>
              <span class="ml-auto px-2 py-1 rounded bg-brand-green/20 text-brand-green text-xs font-medium">Live</span>
            </div>
            <div class="space-y-2">
              <div class="flex justify-between p-2 rounded bg-dark-900/50"><span class="text-white/70 text-sm">Early Bird</span><span class="text-brand-green text-sm font-medium">Sold Out</span></div>
              <div class="flex justify-between p-2 rounded bg-dark-900/50"><span class="text-white/70 text-sm">General Access</span><span class="text-white/50 text-sm">847 / 2000</span></div>
              <div class="flex justify-between p-2 rounded bg-dark-900/50"><span class="text-white/70 text-sm">VIP Package</span><span class="text-white/50 text-sm">43 / 100</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card reveal" style="--card-glow: rgba(124, 58, 237, 0.15); --card-border: rgba(124, 58, 237, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-category-ticketing to-category-ticketing/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Checkout Optimizat</h3>
          <p class="text-white/50 text-sm mb-4">Checkout sub 60 secunde, mobile-first. Recuperare cosuri abandonate +15% vanzari.</p>
          <div class="flex items-center gap-2 text-category-ticketing text-sm"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg><span>Conversie maxima</span></div>
        </div>
        <div class="feature-card reveal reveal-delay-1" style="--card-glow: rgba(6, 182, 212, 0.15); --card-border: rgba(6, 182, 212, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-cyan to-brand-cyan/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Portofel Mobil</h3>
          <p class="text-white/50 text-sm mb-4">Apple Wallet si Google Wallet cu un click. Actualizari automate, notificari push.</p>
          <a href="<?php echo esc_url(home_url('/functionalitati/mobile-wallet')); ?>" class="microservice-link"><span>Vezi detalii</span><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
        </div>
        <div class="feature-card reveal reveal-delay-2" style="--card-glow: rgba(139, 92, 246, 0.15); --card-border: rgba(139, 92, 246, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-purple-500 to-purple-500/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Harti Interactive</h3>
          <p class="text-white/50 text-sm mb-4">Constructor vizual pentru teatre si arene. Selectie locuri in timp real.</p>
          <div class="flex items-center gap-2 text-purple-400 text-sm"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg><span>Zoom & Pan</span></div>
        </div>
        <div class="feature-card reveal" style="--card-glow: rgba(245, 158, 11, 0.15); --card-border: rgba(245, 158, 11, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-amber to-brand-amber/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Box Office & POS</h3>
          <p class="text-white/50 text-sm mb-4">Vanzari la usa pe tableta. Numerar, card, mobile. Sincronizat cu inventarul online.</p>
          <div class="flex items-center gap-2 text-brand-amber text-sm"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z"/></svg><span>Walk-up ready</span></div>
        </div>
        <div class="feature-card reveal reveal-delay-1" style="--card-glow: rgba(16, 185, 129, 0.15); --card-border: rgba(16, 185, 129, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-green to-brand-green/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Rezervari de Grup</h3>
          <p class="text-white/50 text-sm mb-4">Cotatii corporate, facturare B2B, plati partiale. Transforma companiile in clienti mari.</p>
          <a href="<?php echo esc_url(home_url('/functionalitati/rezervari-grup')); ?>" class="microservice-link"><span>Vezi detalii</span><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
        </div>
        <div class="feature-card reveal reveal-delay-2" style="--card-glow: rgba(244, 63, 94, 0.15); --card-border: rgba(244, 63, 94, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-rose to-brand-rose/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Invitatii & Liste</h3>
          <p class="text-white/50 text-sm mb-4">Campanii de invitatii, RSVP tracking, liste de oaspeti. Perfect pentru premiere si VIP.</p>
          <a href="<?php echo esc_url(home_url('/functionalitati/invitatii-vip')); ?>" class="microservice-link"><span>Vezi detalii</span><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
        </div>
      </div>
    </div>
  </section>

  <!-- PAYMENTS & BILLING -->
  <section class="py-24 bg-dark-850 relative" x-show="activeCategory === 'all' || activeCategory === 'payments'" x-transition>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex items-center gap-4 mb-12 reveal">
        <div class="w-12 h-12 rounded-2xl bg-category-payments/20 flex items-center justify-center"><span class="text-2xl">💳</span></div>
        <div><h2 class="font-display text-3xl font-bold text-white">Plati & Facturare</h2><p class="text-white/50">Procesare, conformitate si contabilitate</p></div>
      </div>

      <div class="mb-12 reveal">
        <div class="flex flex-wrap items-center gap-3 mb-6">
          <span class="text-white/40 text-sm">Procesatori suportati:</span>
          <div class="flex flex-wrap gap-3">
            <a href="<?php echo esc_url(home_url('/functionalitati/stripe')); ?>" class="integration-logo"><span class="text-2xl">💳</span></a>
            <a href="<?php echo esc_url(home_url('/functionalitati/payu')); ?>" class="integration-logo"><span class="font-bold text-green-400">PayU</span></a>
            <a href="<?php echo esc_url(home_url('/functionalitati/netopia')); ?>" class="integration-logo"><span class="font-bold text-blue-400 text-sm">NETOPIA</span></a>
            <a href="<?php echo esc_url(home_url('/functionalitati/euplatesc')); ?>" class="integration-logo"><span class="font-bold text-cyan-400 text-sm">EuP</span></a>
          </div>
        </div>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card reveal" style="--card-glow: rgba(16, 185, 129, 0.15); --card-border: rgba(16, 185, 129, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-category-payments to-category-payments/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Procesare Multi-Provider</h3>
          <p class="text-white/50 text-sm mb-4">Alege procesatorul potrivit. Rutare inteligenta, 3D Secure, 135+ valute.</p>
          <div class="flex items-center gap-2 text-category-payments text-sm"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg><span>PCI DSS Level 1</span></div>
        </div>
        <div class="feature-card reveal reveal-delay-1" style="--card-glow: rgba(239, 68, 68, 0.15); --card-border: rgba(239, 68, 68, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-red-500 to-red-500/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">eFactura Romania</h3>
          <p class="text-white/50 text-sm mb-4">Integrare ANAF completa. Generare automata XML, semnatura digitala, transmitere SPV.</p>
          <a href="<?php echo esc_url(home_url('/functionalitati/efactura')); ?>" class="microservice-link"><span>Vezi detalii</span><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
        </div>
        <div class="feature-card reveal reveal-delay-2" style="--card-glow: rgba(99, 102, 241, 0.15); --card-border: rgba(99, 102, 241, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-indigo-500 to-indigo-500/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Conectori Contabilitate</h3>
          <p class="text-white/50 text-sm mb-4">SmartBill, FGO, Exact, Xero, QuickBooks. Sincronizare automata.</p>
          <a href="<?php echo esc_url(home_url('/functionalitati/conectori-contabilitate')); ?>" class="microservice-link"><span>Vezi detalii</span><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ACCESS & CHECK-IN -->
  <section class="py-24 relative" x-show="activeCategory === 'all' || activeCategory === 'access'" x-transition>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex items-center gap-4 mb-12 reveal">
        <div class="w-12 h-12 rounded-2xl bg-category-access/20 flex items-center justify-center"><span class="text-2xl">🚪</span></div>
        <div><h2 class="font-display text-3xl font-bold text-white">Acces & Check-In</h2><p class="text-white/50">Scanare, validare si control acces</p></div>
      </div>

      <div class="grid lg:grid-cols-2 gap-8">
        <div class="major-feature reveal" style="background: linear-gradient(135deg, rgba(6, 182, 212, 0.1), rgba(6, 182, 212, 0.02));">
          <div class="feature-icon bg-gradient-to-br from-category-access to-category-access/50 mb-6"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg></div>
          <h3 class="font-display text-2xl font-bold text-white mb-3">Check-In Ultra-Rapid</h3>
          <p class="text-white/60 mb-6">Scanare in sub 1 secunda cu aplicatii gratuite iOS si Android. Modul offline pentru fiabilitate totala.</p>
          <div class="grid grid-cols-3 gap-4">
            <div class="text-center p-3 rounded-xl bg-dark-800/50"><div class="text-category-access font-bold text-2xl">&lt;1s</div><div class="text-white/40 text-xs">Per scanare</div></div>
            <div class="text-center p-3 rounded-xl bg-dark-800/50"><div class="text-category-access font-bold text-2xl">100%</div><div class="text-white/40 text-xs">Offline ready</div></div>
            <div class="text-center p-3 rounded-xl bg-dark-800/50"><div class="text-category-access font-bold text-2xl">0</div><div class="text-white/40 text-xs">Cost per app</div></div>
          </div>
        </div>
        <div class="space-y-6 reveal reveal-delay-1">
          <div class="feature-card" style="--card-glow: rgba(244, 63, 94, 0.15); --card-border: rgba(244, 63, 94, 0.3);">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center flex-shrink-0"><svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div>
              <div><h4 class="text-lg font-semibold text-white mb-1">Prevenire Frauda</h4><p class="text-white/50 text-sm">QR dinamice anti-screenshot. Detectare duplicate automat.</p></div>
            </div>
          </div>
          <div class="feature-card" style="--card-glow: rgba(16, 185, 129, 0.15); --card-border: rgba(16, 185, 129, 0.3);">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0"><svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div>
              <div><h4 class="text-lg font-semibold text-white mb-1">Reguli Reintrare</h4><p class="text-white/50 text-sm">Configurabil pentru festivaluri multi-day si evenimente cu pauze.</p></div>
            </div>
          </div>
          <div class="feature-card" style="--card-glow: rgba(124, 58, 237, 0.15); --card-border: rgba(124, 58, 237, 0.3);">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0"><svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2z"/></svg></div>
              <div><h4 class="text-lg font-semibold text-white mb-1">Dashboard Live</h4><p class="text-white/50 text-sm">Prezenta in timp real pe toate punctele de intrare.</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MARKETING & CRM -->
  <section class="py-24 bg-dark-850 relative" x-show="activeCategory === 'all' || activeCategory === 'marketing'" x-transition>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex items-center gap-4 mb-12 reveal">
        <div class="w-12 h-12 rounded-2xl bg-category-marketing/20 flex items-center justify-center"><span class="text-2xl">📣</span></div>
        <div><h2 class="font-display text-3xl font-bold text-white">Marketing & CRM</h2><p class="text-white/50">Creste audienta si vinde mai mult</p></div>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card reveal" style="--card-glow: rgba(244, 63, 94, 0.15); --card-border: rgba(244, 63, 94, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-category-marketing to-category-marketing/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">CRM pentru Evenimente</h3>
          <p class="text-white/50 text-sm mb-4">Profiluri automate din achizitii. Segmentare, LTV, tracking sursa.</p>
          <a href="<?php echo esc_url(home_url('/functionalitati/hubspot')); ?>" class="microservice-link"><span>Vezi integrari</span><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
        </div>
        <div class="feature-card reveal reveal-delay-1" style="--card-glow: rgba(16, 185, 129, 0.15); --card-border: rgba(16, 185, 129, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-brand-green to-brand-green/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Program Afiliati</h3>
          <p class="text-white/50 text-sm mb-4">Link-uri si cupoane unice. Comisioane automate. Dashboard pentru parteneri.</p>
          <a href="<?php echo esc_url(home_url('/functionalitati/urmarire-afiliati')); ?>" class="microservice-link"><span>Vezi detalii</span><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
        </div>
        <div class="feature-card reveal reveal-delay-2" style="--card-glow: rgba(99, 102, 241, 0.15); --card-border: rgba(99, 102, 241, 0.3);">
          <div class="feature-icon bg-gradient-to-br from-indigo-500 to-indigo-500/50"><svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2"/></svg></div>
          <h3 class="text-xl font-semibold text-white mb-2">Blog & Continut</h3>
          <p class="text-white/50 text-sm mb-4">Editor rich-text, SEO integrat, analytics articole. Creste organic.</p>
          <a href="<?php echo esc_url(home_url('/functionalitati/blog-articole')); ?>" class="microservice-link"><span>Vezi detalii</span><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ANALYTICS -->
  <section class="py-24 relative" x-show="activeCategory === 'all' || activeCategory === 'analytics'" x-transition>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex items-center gap-4 mb-12 reveal">
        <div class="w-12 h-12 rounded-2xl bg-category-analytics/20 flex items-center justify-center"><span class="text-2xl">📊</span></div>
        <div><h2 class="font-display text-3xl font-bold text-white">Analiza & Raportare</h2><p class="text-white/50">Date in timp real, insight-uri actionabile</p></div>
      </div>
      <div class="major-feature mb-8 reveal" style="background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(244, 63, 94, 0.05));">
        <div class="grid lg:grid-cols-5 gap-8">
          <div class="lg:col-span-3">
            <span class="text-category-analytics text-sm font-medium uppercase tracking-widest">Dashboard-uri Live</span>
            <h3 class="font-display text-3xl font-bold text-white mt-2 mb-4">Analiza Avansata</h3>
            <p class="text-white/60 mb-6">Dashboard-uri in timp real, forecasting ML, conversion funnels, heatmaps geografice. Exporturi PDF, Excel, CSV.</p>
            <a href="<?php echo esc_url(home_url('/functionalitati/analiza-avansata')); ?>" class="microservice-link"><span>Exploreaza analytics</span><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></a>
          </div>
          <div class="lg:col-span-2">
            <div class="bg-dark-800/50 rounded-2xl p-6 border border-white/10">
              <div class="flex items-center justify-between mb-4"><span class="text-white/50 text-sm">Venituri azi</span><span class="text-brand-green text-sm">+23%</span></div>
              <div class="text-3xl font-display font-bold text-white mb-4">€12,450</div>
              <div class="flex gap-1 h-16">
                <div class="flex-1 bg-category-analytics/40 rounded-t self-end" style="height: 40%;"></div>
                <div class="flex-1 bg-category-analytics/50 rounded-t self-end" style="height: 55%;"></div>
                <div class="flex-1 bg-category-analytics/60 rounded-t self-end" style="height: 45%;"></div>
                <div class="flex-1 bg-category-analytics/70 rounded-t self-end" style="height: 70%;"></div>
                <div class="flex-1 bg-category-analytics/80 rounded-t self-end" style="height: 65%;"></div>
                <div class="flex-1 bg-category-analytics/90 rounded-t self-end" style="height: 85%;"></div>
                <div class="flex-1 bg-category-analytics rounded-t self-end" style="height: 100%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INTEGRATIONS -->
  <section class="py-24 bg-dark-850 relative" x-show="activeCategory === 'all' || activeCategory === 'integrations'" x-transition>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex items-center gap-4 mb-12 reveal">
        <div class="w-12 h-12 rounded-2xl bg-category-integrations/20 flex items-center justify-center"><span class="text-2xl">🔗</span></div>
        <div><h2 class="font-display text-3xl font-bold text-white">Ecosistem de Integrari</h2><p class="text-white/50">50+ integrari native + Zapier</p></div>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <div class="feature-card reveal" style="--card-glow: rgba(16, 185, 129, 0.15); --card-border: rgba(16, 185, 129, 0.3);">
          <h4 class="text-lg font-semibold text-white mb-4">💳 Plati</h4>
          <div class="space-y-2 text-sm text-white/60">
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span>Stripe</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span>PayU</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span>Netopia</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span>EuPlatesc</div>
          </div>
        </div>
        <div class="feature-card reveal reveal-delay-1" style="--card-glow: rgba(244, 63, 94, 0.15); --card-border: rgba(244, 63, 94, 0.3);">
          <h4 class="text-lg font-semibold text-white mb-4">📣 CRM & Marketing</h4>
          <div class="space-y-2 text-sm text-white/60">
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-rose"></span>HubSpot</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-rose"></span>Salesforce</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-rose"></span>Mailchimp</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-rose"></span>Meta Ads</div>
          </div>
        </div>
        <div class="feature-card reveal reveal-delay-2" style="--card-glow: rgba(59, 130, 246, 0.15); --card-border: rgba(59, 130, 246, 0.3);">
          <h4 class="text-lg font-semibold text-white mb-4">⚡ Productivitate</h4>
          <div class="space-y-2 text-sm text-white/60">
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>Google Workspace</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>Slack</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>Airtable</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>Google Sheets</div>
          </div>
        </div>
        <div class="feature-card reveal" style="--card-glow: rgba(139, 92, 246, 0.15); --card-border: rgba(139, 92, 246, 0.3);">
          <h4 class="text-lg font-semibold text-white mb-4">📊 Contabilitate</h4>
          <div class="space-y-2 text-sm text-white/60">
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>SmartBill</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>Xero</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>QuickBooks</div>
            <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>FGO</div>
          </div>
        </div>
      </div>
      <div class="text-center reveal">
        <div class="inline-flex items-center gap-4 px-8 py-4 rounded-2xl bg-white/5 border border-white/10">
          <span class="text-3xl">⚡</span>
          <div class="text-left"><div class="text-white font-semibold">+ 5,000 aplicatii via Zapier</div><div class="text-white/50 text-sm">Conecteaza orice in cateva minute</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECURITY & WHITE LABEL -->
  <section class="py-24 relative" x-show="activeCategory === 'all'" x-transition>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="reveal">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 rounded-2xl bg-teal-500/20 flex items-center justify-center"><span class="text-2xl">🔐</span></div>
            <div><h2 class="font-display text-3xl font-bold text-white">Securitate Enterprise</h2><p class="text-white/50">Protectie de nivel bancar</p></div>
          </div>
          <div class="space-y-4">
            <div class="flex items-start gap-4 p-4 rounded-xl bg-teal-500/10 border border-teal-500/20">
              <div class="w-10 h-10 rounded-lg bg-teal-500/20 flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
              <div><h4 class="text-white font-medium">PCI DSS Level 1</h4><p class="text-white/50 text-sm">Cel mai inalt nivel de conformitate pentru plati.</p></div>
            </div>
            <div class="flex items-start gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-10 h-10 rounded-lg bg-brand-violet/20 flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div>
              <div><h4 class="text-white font-medium">Criptare End-to-End</h4><p class="text-white/50 text-sm">Date criptate in tranzit si in repaus.</p></div>
            </div>
            <div class="flex items-start gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-10 h-10 rounded-lg bg-brand-green/20 flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div>
              <div><h4 class="text-white font-medium">GDPR Compliant</h4><p class="text-white/50 text-sm">Instrumente complete pentru confidentialitate.</p></div>
            </div>
          </div>
        </div>
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-3xl p-8 border border-teal-500/20">
            <div class="text-center mb-8">
              <div class="w-20 h-20 rounded-full bg-gradient-to-br from-teal-500 to-brand-cyan flex items-center justify-center mx-auto mb-4"><svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
              <h4 class="text-2xl font-display font-bold text-white">99.9% Uptime</h4>
              <p class="text-white/50">Infrastructura redundanta in cloud</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="text-center p-4 rounded-xl bg-dark-900/50"><div class="text-brand-green font-bold text-xl">24/7</div><div class="text-white/40 text-xs">Monitorizare</div></div>
              <div class="text-center p-4 rounded-xl bg-dark-900/50"><div class="text-brand-cyan font-bold text-xl">SOC 2</div><div class="text-white/40 text-xs">Compliant</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-violet/20 via-transparent to-brand-cyan/20"></div>
    <div class="absolute w-[1000px] h-[1000px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[200px] pointer-events-none" style="background: radial-gradient(circle, rgba(124,58,237,0.3) 0%, rgba(6,182,212,0.2) 50%, transparent 100%);"></div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Tot ce ai nevoie.<br><span class="text-gradient">Un singur loc.</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">25+ functionalitati, 50+ integrari, zero batai de cap. Incepe gratuit azi.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-white text-dark-900 hover:bg-white/90 hover:scale-105 transition-all duration-300 shadow-xl">Creeaza Cont Gratuit<svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        <a href="<?php echo esc_url(home_url('/demo')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Vezi Demo</a>
      </div>

      <div class="flex flex-wrap justify-center gap-6 mt-12 reveal">
        <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Fara card de credit</span></div>
        <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Setup in 5 minute</span></div>
        <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport inclus</span></div>
      </div>
    </div>
  </section>

</div>

<!-- JAVASCRIPT -->
<script>
  // Reveal animations
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Feature cards mouse tracking
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mouse-x', e.clientX - rect.left + 'px');
      card.style.setProperty('--mouse-y', e.clientY - rect.top + 'px');
    });
  });
</script>

<?php get_footer(); ?>
