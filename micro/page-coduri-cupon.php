<?php
/**
 * Template Name: Micro - Coduri Cupon
 * Description: Sistemul complet de coduri promoționale Tixello
 */

get_header();
?>

<style>
  /* Page-specific overrides for coupon page (amber theme) */
  .scroll-progress-amber {
    background: linear-gradient(90deg, #f59e0b, #f43f5e) !important;
  }

  .feature-card-amber {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.08) 0%, rgba(234, 88, 12, 0.04) 100%);
  }
  .feature-card-amber::before {
    background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(245, 158, 11, 0.15), transparent 50%);
  }
  .feature-card-amber:hover {
    border-color: rgba(245, 158, 11, 0.3);
  }
</style>

<main class="noise" x-data="{ activeTab: 'campanii' }">
  <div class="scroll-progress scroll-progress-amber" id="scroll-progress"></div>

  <!-- HERO -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <div class="orb w-[600px] h-[600px] bg-brand-amber/20 -top-40 -right-40"></div>
    <div class="orb w-[400px] h-[400px] bg-brand-rose/20 bottom-20 -left-20"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <div class="reveal">
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-amber/10 border border-brand-amber/20 mb-6">
            <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
            <span class="text-amber-400 text-sm font-medium">Funcționalitate Premium</span>
          </div>

          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-extra-tight">
            Coduri<br><span class="text-gradient-amber">Cupon</span>
          </h1>

          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            Supraalimentează-ți vânzările cu reduceri strategice. Generează mii de coduri unice în secunde, fiecare urmăribil individual. Transformă ideile de marketing în rezultate măsurabile.
          </p>

          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn btn-amber">
              Creează prima campanie
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#demo" class="btn btn-ghost">Vezi în acțiune</a>
          </div>

          <div class="flex flex-wrap gap-6 text-sm">
            <div class="flex items-center gap-2 text-white/50">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              Validare în timp real
            </div>
            <div class="flex items-center gap-2 text-white/50">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              Analize detaliate
            </div>
            <div class="flex items-center gap-2 text-white/50">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              API complet
            </div>
          </div>
        </div>

        <!-- Hero Visual - Coupon Preview -->
        <div class="reveal reveal-delay-1">
          <div class="relative">
            <!-- Main coupon card -->
            <div class="bg-gradient-to-br from-brand-amber to-orange-600 rounded-3xl p-8 shadow-2xl shadow-brand-amber/20 pulse-glow-amber">
              <div class="flex justify-between items-start mb-6">
                <div>
                  <div class="text-white/80 text-sm font-medium mb-1">Reduceri de Vară 2025</div>
                  <div class="text-white font-display text-4xl font-bold">-20%</div>
                </div>
                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                </div>
              </div>

              <div class="border-t border-dashed border-white/30 my-6"></div>

              <div class="bg-white/10 rounded-xl p-4 mb-4">
                <div class="text-white/60 text-xs mb-1">COD PROMOȚIONAL</div>
                <div class="coupon-code text-white text-2xl font-bold tracking-widest">VARA20ABC</div>
              </div>

              <div class="flex justify-between text-white/70 text-sm">
                <span>Valabil până: 31 Aug 2025</span>
                <span>245 / 1000 utilizat</span>
              </div>
            </div>

            <!-- Floating stats -->
            <div class="absolute -top-4 -right-4 bg-dark-800 rounded-2xl p-4 border border-white/10 shadow-xl animate-float">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-brand-green/20 flex items-center justify-center">
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <div>
                  <div class="text-white font-semibold">+42%</div>
                  <div class="text-white/40 text-xs">Conversii</div>
                </div>
              </div>
            </div>

            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-2xl p-4 border border-white/10 shadow-xl animate-float" style="animation-delay: -3s;">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-brand-violet/20 flex items-center justify-center">
                  <svg class="w-5 h-5 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                  <div class="text-white font-semibold">4,900€</div>
                  <div class="text-white/40 text-xs">Reduceri aplicate</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="py-16 border-y border-white/5">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="stat-card reveal">
          <div class="stat-value text-gradient-amber">10K+</div>
          <div class="stat-label">Coduri per batch</div>
        </div>
        <div class="stat-card reveal reveal-delay-1">
          <div class="stat-value text-gradient-amber">&lt;50ms</div>
          <div class="stat-label">Validare</div>
        </div>
        <div class="stat-card reveal reveal-delay-2">
          <div class="stat-value text-gradient-amber">100%</div>
          <div class="stat-label">Urmăribile</div>
        </div>
        <div class="stat-card reveal reveal-delay-3">
          <div class="stat-value text-gradient-amber">∞</div>
          <div class="stat-label">Campanii</div>
        </div>
      </div>
    </div>
  </section>

  <!-- DISCOUNT TYPES -->
  <section class="py-24 relative overflow-hidden">
    <div class="orb w-[500px] h-[500px] bg-brand-violet/20 top-1/2 -left-60"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-amber text-sm font-medium uppercase tracking-widest">Tipuri de Reduceri</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Orice tip de<br><span class="text-gradient">promoție îți dorești</span></h2>
        <p class="text-lg text-white/60">De la reduceri procentuale simple la oferte complexe cumpără-X-primești-Y. Sistemul se adaptează strategiei tale.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Percentage -->
        <div class="discount-card reveal">
          <div class="w-14 h-14 rounded-2xl bg-brand-violet/20 flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-3">Procentual</h3>
          <p class="text-white/50 text-sm mb-4">Reduce prețurile cu un procent configurat.</p>
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-violet/10 text-brand-violet text-sm font-medium">
            <span>Ex: -20%</span>
          </div>
        </div>

        <!-- Fixed Amount -->
        <div class="discount-card reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-brand-cyan/20 flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-3">Sumă Fixă</h3>
          <p class="text-white/50 text-sm mb-4">Scade o valoare fixă din total.</p>
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-cyan/10 text-brand-cyan text-sm font-medium">
            <span>Ex: -10€</span>
          </div>
        </div>

        <!-- Free Shipping -->
        <div class="discount-card reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-brand-green/20 flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-3">Livrare Gratuită</h3>
          <p class="text-white/50 text-sm mb-4">Renunță la taxele de livrare.</p>
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-green/10 text-brand-green text-sm font-medium">
            <span>Ex: 0€ transport</span>
          </div>
        </div>

        <!-- Buy X Get Y -->
        <div class="discount-card reveal reveal-delay-3">
          <div class="w-14 h-14 rounded-2xl bg-brand-rose/20 flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-3">Cumpără X Primești Y</h3>
          <p class="text-white/50 text-sm mb-4">Reduceri pachet și oferte bundle.</p>
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-rose/10 text-brand-rose text-sm font-medium">
            <span>Ex: 3+1 gratis</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CODE GENERATION -->
  <section class="py-24 bg-dark-850 relative" id="demo">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <!-- Code Preview -->
        <div class="order-2 lg:order-1 reveal">
          <div class="code-block">
            <div class="code-header">
              <div class="code-dot bg-brand-rose"></div>
              <div class="code-dot bg-brand-amber"></div>
              <div class="code-dot bg-brand-green"></div>
              <span class="text-xs text-white/30 ml-2">generate-codes.json</span>
            </div>
            <div class="code-content">
              <pre class="text-white/70"><code><span class="text-brand-violet">POST</span> /api/coupons/campaigns/<span class="text-brand-cyan">camp_123</span>/generate

{
  <span class="text-brand-amber">"quantity"</span>: <span class="text-brand-green">1000</span>,
  <span class="text-brand-amber">"format"</span>: <span class="text-brand-cyan">"alphanumeric"</span>,
  <span class="text-brand-amber">"prefix"</span>: <span class="text-brand-cyan">"VARA"</span>,
  <span class="text-brand-amber">"length"</span>: <span class="text-brand-green">6</span>
}

<span class="text-white/40">// Rezultat: VARA20ABC, VARA9X2KM, VARA7HJ3P...</span>
<span class="text-white/40">// Generat în ~2 secunde</span></code></pre>
            </div>
          </div>

          <!-- Generated codes preview -->
          <div class="mt-6 grid grid-cols-3 gap-3">
            <div class="bg-dark-700 rounded-lg p-3 text-center">
              <div class="coupon-code text-brand-amber font-semibold">VARA20ABC</div>
              <div class="text-white/30 text-xs mt-1">Neutilizat</div>
            </div>
            <div class="bg-dark-700 rounded-lg p-3 text-center">
              <div class="coupon-code text-brand-green font-semibold">VARA9X2KM</div>
              <div class="text-white/30 text-xs mt-1">Utilizat</div>
            </div>
            <div class="bg-dark-700 rounded-lg p-3 text-center">
              <div class="coupon-code text-brand-amber font-semibold">VARA7HJ3P</div>
              <div class="text-white/30 text-xs mt-1">Neutilizat</div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="order-1 lg:order-2 reveal reveal-delay-1">
          <span class="inline-block px-4 py-1.5 rounded-full bg-brand-amber/10 text-brand-amber text-sm font-medium mb-6">⚡ Generare Rapidă</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">Mii de coduri<br><span class="text-gradient-amber">în secunde</span></h2>
          <p class="text-lg text-white/60 mb-8 leading-relaxed">Generează coduri unice în masă cu formate personalizate. Fiecare cod are propriul istoric de urmărire pentru atribuire precisă.</p>

          <div class="space-y-4 mb-8">
            <div class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-amber/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <strong class="text-white">Formate Flexibile</strong>
                <p class="text-sm text-white/50">Alfanumeric, numeric, alfabetic sau pattern-uri custom cu prefix/sufix</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-amber/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <strong class="text-white">Până la 10,000 per batch</strong>
                <p class="text-sm text-white/50">Generare în masă pentru campanii mari</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-full bg-brand-amber/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <strong class="text-white">Export CSV/JSON</strong>
                <p class="text-sm text-white/50">Descarcă codurile pentru distribuție externă</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VALIDATION RULES -->
  <section class="py-24 relative overflow-hidden">
    <div class="orb w-[500px] h-[500px] bg-brand-cyan/20 top-1/2 -right-60"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="inline-block px-4 py-1.5 rounded-full bg-brand-violet/10 text-brand-violet text-sm font-medium mb-6">🎯 Control Total</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">Reguli de validare<br><span class="text-gradient">precise</span></h2>
          <p class="text-lg text-white/60 mb-8 leading-relaxed">Controlează fiecare aspect al promoțiilor. Validarea în timp real asigură că doar codurile valide sunt acceptate.</p>

          <div class="grid sm:grid-cols-2 gap-4">
            <div class="feature-card feature-card-amber p-4">
              <div class="flex items-center gap-3 mb-2">
                <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span class="text-white font-medium">Limite per utilizator</span>
              </div>
              <p class="text-white/40 text-sm">O dată per client sau nelimitat</p>
            </div>
            <div class="feature-card feature-card-amber p-4">
              <div class="flex items-center gap-3 mb-2">
                <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                <span class="text-white font-medium">Limite utilizări totale</span>
              </div>
              <p class="text-white/40 text-sm">Ex: primele 100 comenzi</p>
            </div>
            <div class="feature-card feature-card-amber p-4">
              <div class="flex items-center gap-3 mb-2">
                <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-white font-medium">Valoare minimă</span>
              </div>
              <p class="text-white/40 text-sm">Comenzi de min. 50€</p>
            </div>
            <div class="feature-card feature-card-amber p-4">
              <div class="flex items-center gap-3 mb-2">
                <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <span class="text-white font-medium">Interval de date</span>
              </div>
              <p class="text-white/40 text-sm">Programare automată</p>
            </div>
            <div class="feature-card feature-card-amber p-4">
              <div class="flex items-center gap-3 mb-2">
                <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                <span class="text-white font-medium">Produse specifice</span>
              </div>
              <p class="text-white/40 text-sm">Sau excluderi categorii</p>
            </div>
            <div class="feature-card feature-card-amber p-4">
              <div class="flex items-center gap-3 mb-2">
                <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span class="text-white font-medium">Restricții geografice</span>
              </div>
              <p class="text-white/40 text-sm">Per țară sau regiune</p>
            </div>
          </div>
        </div>

        <!-- Validation Response Preview -->
        <div class="reveal reveal-delay-1">
          <div class="code-block">
            <div class="code-header">
              <div class="code-dot bg-brand-rose"></div>
              <div class="code-dot bg-brand-amber"></div>
              <div class="code-dot bg-brand-green"></div>
              <span class="text-xs text-white/30 ml-2">validation-response.json</span>
            </div>
            <div class="code-content">
              <pre class="text-white/70"><code>{
  <span class="text-brand-amber">"valid"</span>: <span class="text-brand-green">true</span>,
  <span class="text-brand-amber">"code"</span>: <span class="text-brand-cyan">"VARA20ABC"</span>,
  <span class="text-brand-amber">"discount"</span>: {
    <span class="text-brand-amber">"type"</span>: <span class="text-brand-cyan">"percentage"</span>,
    <span class="text-brand-amber">"value"</span>: <span class="text-brand-green">20</span>,
    <span class="text-brand-amber">"amount"</span>: <span class="text-brand-green">30.00</span>
  },
  <span class="text-brand-amber">"message"</span>: <span class="text-brand-cyan">"Cod aplicat cu succes"</span>,
  <span class="text-brand-amber">"restrictions"</span>: {
    <span class="text-brand-amber">"remaining_uses"</span>: <span class="text-brand-green">755</span>,
    <span class="text-brand-amber">"expires_at"</span>: <span class="text-brand-cyan">"2025-08-31T23:59:59Z"</span>
  }
}</code></pre>
            </div>
          </div>

          <!-- Invalid code example -->
          <div class="mt-4 p-4 rounded-xl bg-brand-rose/10 border border-brand-rose/20">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-rose/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
              </div>
              <div>
                <div class="text-brand-rose font-medium">Cod invalid sau expirat</div>
                <div class="text-white/40 text-sm">Mesaje clare pentru utilizatori</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- USE CASES -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-rose text-sm font-medium uppercase tracking-widest">Cazuri de Utilizare</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Strategii care<br><span class="text-gradient">funcționează</span></h2>
        <p class="text-lg text-white/60">De la early bird la flash sales. Găsește strategia potrivită pentru evenimentul tău.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="use-case-card reveal">
          <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Reduceri Early Bird</h3>
          <p class="text-white/50 text-sm">Răsplătește clienții care rezervă devreme cu reduceri procentuale. Conduce impulsul de vânzări timpuriu și prezice mai bine participarea.</p>
        </div>

        <div class="use-case-card reveal reveal-delay-1">
          <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Vânzări Flash</h3>
          <p class="text-white/50 text-sm">Ocupă locurile goale cu coduri de vânzare flash distribuite prin email sau social media. Urgența limitată în timp conduce decizii rapide.</p>
        </div>

        <div class="use-case-card reveal reveal-delay-2">
          <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Coduri Parteneri</h3>
          <p class="text-white/50 text-sm">Creează coduri unice pentru parteneri, influenceri sau afiliați. Urmărește exact care parteneriate conduc vânzări.</p>
        </div>

        <div class="use-case-card reveal reveal-delay-3">
          <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Loialitate Clienți</h3>
          <p class="text-white/50 text-sm">Răsplătește clienții repetiți cu coduri exclusive. Trimite reduceri personalizate bazate pe istoricul de achiziții.</p>
        </div>

        <div class="use-case-card reveal reveal-delay-4">
          <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Vânzări Corporate</h3>
          <p class="text-white/50 text-sm">Oferă coduri specifice companiei pentru clienți B2B. Urmărește achizițiile corporate și oferă reduceri de volum.</p>
        </div>

        <div class="use-case-card reveal reveal-delay-5">
          <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Campanii Social</h3>
          <p class="text-white/50 text-sm">Creează coduri partajabile pentru promoții sociale. Urmărește care platforme conduc cele mai multe conversii.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES GRID -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest">Funcționalități</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Tot ce ai nevoie<br><span class="text-gradient">într-un singur loc</span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Campaign Management -->
        <div class="feature-card feature-card-amber reveal">
          <h4 class="text-lg font-semibold text-white mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-brand-violet/20 flex items-center justify-center">
              <svg class="w-4 h-4 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
            </span>
            Gestionare Campanii
          </h4>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Programare campanii</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Generare coduri în masă</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Formate personalizate</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Activare/dezactivare rapidă</li>
          </ul>
        </div>

        <!-- Usage Controls -->
        <div class="feature-card feature-card-amber reveal reveal-delay-1">
          <h4 class="text-lg font-semibold text-white mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-brand-amber/20 flex items-center justify-center">
              <svg class="w-4 h-4 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
            </span>
            Controale Utilizare
          </h4>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Limite per utilizator</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Limite utilizări totale</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Doar prima achiziție</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Plafoane reducere</li>
          </ul>
        </div>

        <!-- Targeting -->
        <div class="feature-card feature-card-amber reveal reveal-delay-2">
          <h4 class="text-lg font-semibold text-white mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-brand-rose/20 flex items-center justify-center">
              <svg class="w-4 h-4 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </span>
            Targetare
          </h4>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Produse/categorii</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Coduri per eveniment</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Segmente clienți</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Restricții geografice</li>
          </ul>
        </div>

        <!-- Validation -->
        <div class="feature-card feature-card-amber reveal reveal-delay-3">
          <h4 class="text-lg font-semibold text-white mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center">
              <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </span>
            Validare & Utilizare
          </h4>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Validare în timp real</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Urmărire utilizări</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Jurnal validări</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Reversare utilizare</li>
          </ul>
        </div>

        <!-- Analytics -->
        <div class="feature-card feature-card-amber reveal reveal-delay-4">
          <h4 class="text-lg font-semibold text-white mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-brand-cyan/20 flex items-center justify-center">
              <svg class="w-4 h-4 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </span>
            Analize & Export
          </h4>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Rapoarte campanii</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Export CSV/JSON</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Atribuire utilizatori</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Dashboard performanță</li>
          </ul>
        </div>

        <!-- API -->
        <div class="feature-card feature-card-amber reveal reveal-delay-5">
          <h4 class="text-lg font-semibold text-white mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center">
              <svg class="w-4 h-4 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
            </span>
            API Complet
          </h4>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>REST API</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Webhooks</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Rate limiting</li>
            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>SDK-uri PHP/JS</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- API DOCUMENTATION -->
  <section class="py-24 bg-dark-850 relative" id="api">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-start">
        <!-- Content -->
        <div class="reveal lg:sticky lg:top-32">
          <span class="inline-block px-4 py-1.5 rounded-full bg-blue-500/10 text-blue-400 text-sm font-medium mb-6">🔌 API Documentation</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">Integrare<br><span class="text-gradient">simplă</span></h2>
          <p class="text-lg text-white/60 mb-8 leading-relaxed">API RESTful complet documentat. Integrează sistemul de cupoane în orice platformă în câteva minute.</p>

          <div class="space-y-3 mb-8">
            <div class="api-endpoint flex items-center gap-3">
              <span class="method-get font-semibold">GET</span>
              <span class="text-white/70">/api/coupons/campaigns</span>
            </div>
            <div class="api-endpoint flex items-center gap-3">
              <span class="method-post font-semibold">POST</span>
              <span class="text-white/70">/api/coupons/campaigns</span>
            </div>
            <div class="api-endpoint flex items-center gap-3">
              <span class="method-post font-semibold">POST</span>
              <span class="text-white/70">/api/coupons/validate</span>
            </div>
            <div class="api-endpoint flex items-center gap-3">
              <span class="method-post font-semibold">POST</span>
              <span class="text-white/70">/api/coupons/redeem</span>
            </div>
            <div class="api-endpoint flex items-center gap-3">
              <span class="method-get font-semibold">GET</span>
              <span class="text-white/70">/api/coupons/campaigns/{id}/stats</span>
            </div>
          </div>

          <a href="<?php echo esc_url(home_url('/api/docs/coupons')); ?>" class="btn btn-ghost">
            Vezi documentația completă
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
          </a>
        </div>

        <!-- Code Example -->
        <div class="reveal reveal-delay-1">
          <div class="code-block mb-6">
            <div class="code-header">
              <div class="code-dot bg-brand-rose"></div>
              <div class="code-dot bg-brand-amber"></div>
              <div class="code-dot bg-brand-green"></div>
              <span class="text-xs text-white/30 ml-2">integration.php</span>
            </div>
            <div class="code-content">
              <pre class="text-white/70"><code><span class="text-brand-violet">use</span> App\Services\PromoCodes\<span class="text-brand-cyan">PromoCodeService</span>;
<span class="text-brand-violet">use</span> App\Services\PromoCodes\<span class="text-brand-cyan">PromoCodeValidator</span>;

<span class="text-white/40">// Injectare servicii</span>
<span class="text-brand-rose">$service</span> = app(<span class="text-brand-cyan">PromoCodeService</span>::class);
<span class="text-brand-rose">$validator</span> = app(<span class="text-brand-cyan">PromoCodeValidator</span>::class);

<span class="text-white/40">// Validează codul la checkout</span>
<span class="text-brand-rose">$result</span> = <span class="text-brand-rose">$validator</span>-><span class="text-brand-amber">validate</span>(
    <span class="text-brand-rose">$code</span>,
    <span class="text-brand-rose">$cart</span>,
    <span class="text-brand-rose">$customer</span>
);

<span class="text-brand-violet">if</span> (<span class="text-brand-rose">$result</span>-><span class="text-brand-amber">isValid</span>()) {
    <span class="text-white/40">// Aplică reducerea</span>
    <span class="text-brand-rose">$cart</span>-><span class="text-brand-amber">applyDiscount</span>(
        <span class="text-brand-rose">$result</span>-><span class="text-brand-amber">getDiscount</span>()
    );

    <span class="text-white/40">// După plată: înregistrează utilizarea</span>
    <span class="text-brand-rose">$service</span>-><span class="text-brand-amber">redeem</span>(<span class="text-brand-rose">$code</span>, <span class="text-brand-rose">$order</span>);
}</code></pre>
            </div>
          </div>

          <!-- Campaign Structure -->
          <div class="code-block">
            <div class="code-header">
              <div class="code-dot bg-brand-rose"></div>
              <div class="code-dot bg-brand-amber"></div>
              <div class="code-dot bg-brand-green"></div>
              <span class="text-xs text-white/30 ml-2">campaign-structure.json</span>
            </div>
            <div class="code-content">
              <pre class="text-white/70"><code>{
  <span class="text-brand-amber">"id"</span>: <span class="text-brand-cyan">"camp_123"</span>,
  <span class="text-brand-amber">"name"</span>: <span class="text-brand-cyan">"Reduceri de Vară 2025"</span>,
  <span class="text-brand-amber">"type"</span>: <span class="text-brand-cyan">"percentage"</span>,
  <span class="text-brand-amber">"value"</span>: <span class="text-brand-green">20</span>,
  <span class="text-brand-amber">"rules"</span>: {
    <span class="text-brand-amber">"min_purchase"</span>: <span class="text-brand-green">50.00</span>,
    <span class="text-brand-amber">"max_discount"</span>: <span class="text-brand-green">100.00</span>,
    <span class="text-brand-amber">"usage_limit"</span>: <span class="text-brand-green">1000</span>,
    <span class="text-brand-amber">"per_user_limit"</span>: <span class="text-brand-green">1</span>
  },
  <span class="text-brand-amber">"stats"</span>: {
    <span class="text-brand-amber">"codes_generated"</span>: <span class="text-brand-green">1000</span>,
    <span class="text-brand-amber">"codes_used"</span>: <span class="text-brand-green">245</span>,
    <span class="text-brand-amber">"revenue_generated"</span>: <span class="text-brand-green">24500.00</span>
  }
}</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-amber/20 via-transparent to-brand-rose/20"></div>
    <div class="orb w-[800px] h-[800px] bg-brand-amber/30 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Transformă promoțiile<br><span class="text-gradient-amber">în rezultate</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Creează prima campanie în 2 minute. Generează coduri, setează reguli, urmărește performanța - totul într-un singur dashboard.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn btn-amber text-lg px-10 py-4">
          Începe gratuit
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-ghost text-lg px-10 py-4">Vorbește cu un specialist</a>
      </div>
      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">Fără card de credit • Setup în 2 minute • Suport gratuit</p>
    </div>
  </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Scroll progress indicator
  window.addEventListener('scroll', () => {
    const scrollProgress = document.getElementById('scroll-progress');
    if (!scrollProgress) return;
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const progress = (scrollTop / scrollHeight) * 100;
    scrollProgress.style.width = progress + '%';
  });

  // Intersection Observer for reveal animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Feature card mouse tracking effect
  document.querySelectorAll('.feature-card feature-card-amber').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);
    });
  });

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
});
</script>

<?php get_footer(); ?>
