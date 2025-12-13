<?php
/**
 * Template Name: Micro - PayU
 * Description: Landing page for PayU Central and Eastern Europe payment integration
 */

get_header();
?>

<style>
  ::selection { background: #A6CE38; color: #1B1F23; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-payu { background: linear-gradient(135deg, #A6CE38 0%, #C5E063 50%, #00B386 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(166, 206, 56, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Country card styles */
  .country-card { transition: all 0.3s; }
  .country-card:hover { transform: translateY(-4px); }
  .country-card.active { border-color: #A6CE38; background: rgba(166, 206, 56, 0.1); }

  /* Payment method badge */
  .payment-method {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    transition: all 0.3s;
  }
  .payment-method:hover {
    background: rgba(166, 206, 56, 0.1);
    border-color: rgba(166, 206, 56, 0.3);
  }
  .payment-method.popular {
    border-color: #A6CE38;
    background: rgba(166, 206, 56, 0.1);
  }

  /* BLIK specific */
  .blik-code {
    font-family: 'JetBrains Mono', monospace;
    letter-spacing: 0.3em;
    background: linear-gradient(135deg, #E41F26, #E41F26);
  }

  /* Currency pill */
  .currency-pill {
    background: rgba(166, 206, 56, 0.1);
    border: 1px solid rgba(166, 206, 56, 0.2);
    transition: all 0.3s;
  }
  .currency-pill:hover {
    background: rgba(166, 206, 56, 0.2);
    transform: scale(1.05);
  }
  .currency-pill.active {
    background: #A6CE38;
    color: #1B1F23;
    font-weight: 600;
  }

  /* Status badge */
  .status-new { background: rgba(166, 206, 56, 0.2); color: #A6CE38; }
  .status-pending { background: rgba(245, 158, 11, 0.2); color: #f59e0b; }
  .status-completed { background: rgba(16, 185, 129, 0.2); color: #10b981; }
  .status-canceled { background: rgba(239, 68, 68, 0.2); color: #ef4444; }

  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #A6CE38, #C5E063, #00B386);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-payu-green/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-payu-accent/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">🇵🇱</div>
    <div class="absolute bottom-40 right-24 opacity-30 animate-float text-xl" style="animation-delay: 1s;">🇷🇴</div>
    <div class="absolute top-1/2 right-16 opacity-20 animate-float text-3xl" style="animation-delay: 2s;">🇨🇿</div>
    <div class="absolute bottom-60 left-24 opacity-20 animate-float text-xl" style="animation-delay: 1.5s;">🇭🇺</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-payu-green/10 border border-payu-green/20 mb-6">
            <svg class="w-5 h-5 text-payu-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            <span class="text-payu-green text-sm font-medium">Europa Centrală și de Est</span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Plăți<br><span class="text-gradient-payu">locale CEE</span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            <strong class="text-white">BLIK, transferuri bancare, carduri locale</strong> - metodele preferate în Polonia, Cehia, România, Ungaria. O singură integrare PayU pentru toată regiunea.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-payu-green to-payu-lime text-payu-dark hover:scale-105 hover:shadow-glow-payu transition-all duration-300">
              Conectează PayU
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#tari" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              Vezi țările suportate
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-display font-bold text-payu-green">5</div>
              <div class="text-white/40 text-sm">Țări CEE</div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-white">BLIK</div>
              <div class="text-white/40 text-sm">Polonia #1</div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-payu-accent">Multi</div>
              <div class="text-white/40 text-sm">Valută</div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Country Payment Selector -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            selectedCountry: 'pl',
            countries: {
              pl: { name: 'Polonia', currency: 'PLN', flag: '🇵🇱', methods: ['BLIK', 'Carduri', 'Transfer bancar', 'Rate'], popular: 'BLIK' },
              cz: { name: 'Cehia', currency: 'CZK', flag: '🇨🇿', methods: ['Carduri', 'Transfer bancar', 'Apple Pay', 'Google Pay'], popular: 'Transfer bancar' },
              ro: { name: 'România', currency: 'RON', flag: '🇷🇴', methods: ['Carduri', 'Transfer bancar', 'Rate'], popular: 'Carduri' },
              hu: { name: 'Ungaria', currency: 'HUF', flag: '🇭🇺', methods: ['Carduri', 'Transfer bancar', 'SimplePay'], popular: 'Carduri' },
              sk: { name: 'Slovacia', currency: 'EUR', flag: '🇸🇰', methods: ['Carduri', 'Transfer bancar'], popular: 'Carduri' }
            }
          }">

            <!-- Main Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-3xl p-6 border border-payu-green/20 shadow-2xl">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-payu-green/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-payu-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/></svg>
                  </div>
                  <div>
                    <div class="text-white font-semibold">Selectează Țara</div>
                    <div class="text-white/40 text-xs">Metode locale de plată</div>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-payu-green animate-pulse"></span>
                  <span class="text-payu-green text-xs">Live</span>
                </div>
              </div>

              <!-- Country Tabs -->
              <div class="flex gap-2 mb-6 overflow-x-auto pb-2">
                <template x-for="(country, code) in countries" :key="code">
                  <button
                    @click="selectedCountry = code"
                    :class="selectedCountry === code ? 'bg-payu-green/20 border-payu-green' : 'bg-dark-700 border-white/10'"
                    class="flex items-center gap-2 px-4 py-2 rounded-xl border transition-all flex-shrink-0"
                  >
                    <span class="text-xl" x-text="country.flag"></span>
                    <span class="text-white text-sm font-medium" x-text="country.currency"></span>
                  </button>
                </template>
              </div>

              <!-- Selected Country Details -->
              <div class="bg-dark-900/50 rounded-2xl p-4 mb-4">
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center gap-3">
                    <span class="text-4xl" x-text="countries[selectedCountry].flag"></span>
                    <div>
                      <div class="text-white font-semibold text-lg" x-text="countries[selectedCountry].name"></div>
                      <div class="text-white/40 text-sm">Valută: <span class="text-payu-green font-mono" x-text="countries[selectedCountry].currency"></span></div>
                    </div>
                  </div>
                </div>

                <!-- Payment Methods -->
                <div class="text-white/40 text-xs uppercase tracking-wider mb-3">Metode de plată disponibile</div>
                <div class="flex flex-wrap gap-2">
                  <template x-for="method in countries[selectedCountry].methods" :key="method">
                    <div
                      :class="method === countries[selectedCountry].popular ? 'popular' : ''"
                      class="payment-method px-3 py-2 rounded-lg flex items-center gap-2"
                    >
                      <span class="text-white text-sm" x-text="method"></span>
                      <span x-show="method === countries[selectedCountry].popular" class="px-1.5 py-0.5 rounded bg-payu-green/20 text-payu-green text-[10px] font-bold">POPULAR</span>
                    </div>
                  </template>
                </div>
              </div>

              <!-- BLIK Demo (shows only for Poland) -->
              <div x-show="selectedCountry === 'pl'" x-transition class="bg-gradient-to-br from-red-600/20 to-red-500/10 rounded-2xl p-4 border border-red-500/20">
                <div class="flex items-center gap-3 mb-3">
                  <div class="w-10 h-10 rounded-xl bg-red-500 flex items-center justify-center">
                    <span class="text-white font-bold text-sm">BLIK</span>
                  </div>
                  <div>
                    <div class="text-white font-semibold">BLIK - Plată Instant</div>
                    <div class="text-white/40 text-xs">Cod de 6 cifre din aplicația bancară</div>
                  </div>
                </div>
                <div class="flex items-center justify-center gap-2 py-3">
                  <div class="blik-code text-white text-2xl font-bold px-4 py-2 rounded-lg">7 4 2 8 1 9</div>
                </div>
                <div class="text-center text-white/40 text-xs">Introdu codul în aplicația ta bancară</div>
              </div>

              <!-- Amount Preview -->
              <div class="mt-4 pt-4 border-t border-white/10">
                <div class="flex items-center justify-between">
                  <span class="text-white/40 text-sm">Total de plată</span>
                  <div class="text-right">
                    <span class="text-2xl font-display font-bold text-white">150</span>
                    <span class="text-lg text-payu-green font-mono ml-1" x-text="countries[selectedCountry].currency"></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating PayU Badge -->
            <div class="absolute -top-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-payu-green/30 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-payu-green flex items-center justify-center">
                  <span class="text-payu-dark font-bold text-xs">Pay</span>
                </div>
                <div>
                  <div class="text-payu-green text-sm font-medium">PayU</div>
                  <div class="text-white/40 text-xs">CEE Leader</div>
                </div>
              </div>
            </div>

            <!-- Floating Security Badge -->
            <div class="absolute -bottom-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div>
                  <div class="text-brand-green text-sm font-medium">PCI DSS</div>
                  <div class="text-white/40 text-xs">Nivel 1</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== COUNTRIES ==================== -->
  <section class="py-24 relative overflow-hidden" id="tari">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-payu-green text-sm font-medium uppercase tracking-widest">Acoperire Regională</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">5 Țări,<br><span class="text-gradient-payu">o integrare</span></h2>
        <p class="text-lg text-white/60">Fiecare piață cu metodele ei locale preferate. PayU le gestionează pe toate.</p>
      </div>

      <!-- Countries Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Poland -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-poland/50 transition-all duration-500 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇵🇱</div>
            <div>
              <h3 class="text-xl font-semibold text-white">Polonia</h3>
              <div class="text-payu-green text-sm font-mono">PLN</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-red-500"></div>
              <span class="text-white text-sm">BLIK</span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs">#1 Mobile</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Transfer bancar instant</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Plăți în rate</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Carduri Visa/Mastercard</span>
            </div>
          </div>
          <div class="text-white/40 text-xs">38M+ utilizatori potențiali</div>
        </div>

        <!-- Czech Republic -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-czech/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇨🇿</div>
            <div>
              <h3 class="text-xl font-semibold text-white">Republica Cehă</h3>
              <div class="text-payu-green text-sm font-mono">CZK</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-blue-500"></div>
              <span class="text-white text-sm">Transfer bancar online</span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs">Popular</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Carduri locale</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Apple Pay / Google Pay</span>
            </div>
          </div>
          <div class="text-white/40 text-xs">10M+ utilizatori potențiali</div>
        </div>

        <!-- Romania -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-romania/50 transition-all duration-500 reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇷🇴</div>
            <div>
              <h3 class="text-xl font-semibold text-white">România</h3>
              <div class="text-payu-green text-sm font-mono">RON</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-blue-500"></div>
              <span class="text-white text-sm">Carduri locale</span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs">Principal</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Transfer bancar</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Rate prin parteneri</span>
            </div>
          </div>
          <div class="text-white/40 text-xs">19M+ utilizatori potențiali</div>
        </div>

        <!-- Hungary -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-hungary/50 transition-all duration-500 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇭🇺</div>
            <div>
              <h3 class="text-xl font-semibold text-white">Ungaria</h3>
              <div class="text-payu-green text-sm font-mono">HUF</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-green-500"></div>
              <span class="text-white text-sm">Carduri</span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs">Principal</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">SimplePay</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Transfer bancar</span>
            </div>
          </div>
          <div class="text-white/40 text-xs">10M+ utilizatori potențiali</div>
        </div>

        <!-- Slovakia -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-slovakia/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇸🇰</div>
            <div>
              <h3 class="text-xl font-semibold text-white">Slovacia</h3>
              <div class="text-payu-green text-sm font-mono">EUR</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-blue-500"></div>
              <span class="text-white text-sm">Carduri</span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs">Principal</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Transfer bancar</span>
            </div>
          </div>
          <div class="text-white/40 text-xs">5M+ utilizatori potențiali</div>
        </div>

        <!-- Total Coverage -->
        <div class="feature-card relative bg-gradient-to-br from-payu-green/10 to-payu-accent/10 rounded-2xl p-6 border border-payu-green/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="text-center">
            <div class="text-6xl font-display font-bold text-payu-green mb-2">82M+</div>
            <div class="text-white font-semibold mb-2">Utilizatori potențiali</div>
            <div class="text-white/50 text-sm mb-4">În toată regiunea CEE</div>
            <div class="flex justify-center gap-2">
              <span class="text-2xl">🇵🇱</span>
              <span class="text-2xl">🇨🇿</span>
              <span class="text-2xl">🇷🇴</span>
              <span class="text-2xl">🇭🇺</span>
              <span class="text-2xl">🇸🇰</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== BLIK FEATURE ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-500/20 border border-red-500/30 mb-4">
            <span class="text-red-400 text-sm font-bold">BLIK</span>
            <span class="text-white/50 text-xs">🇵🇱 Polonia</span>
          </div>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Metoda #1<br><span class="text-gradient-payu">în Polonia</span></h2>
          <p class="text-lg text-white/60 mb-8">BLIK domină plățile mobile în Polonia. Cod de 6 cifre, autorizare instantanee, fără date de card. Perfect pentru consumatorii mobile-first.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-red-500/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Mobile-First</span>
                <p class="text-white/50 text-sm">Cod generat în aplicația bancară mobilă</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-payu-green/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Instant</span>
                <p class="text-white/50 text-sm">Confirmare plată în câteva secunde</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Securizat</span>
                <p class="text-white/50 text-sm">Fără date de card, autorizare biometrică</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - BLIK Flow -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-red-500/20">
            <div class="text-center mb-6">
              <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-500 text-white font-bold">
                <span>BLIK</span>
              </div>
            </div>

            <!-- Flow steps -->
            <div class="space-y-4">
              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50">
                <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center text-red-400 font-bold">1</div>
                <div class="flex-1">
                  <div class="text-white font-medium">Client selectează BLIK</div>
                  <div class="text-white/40 text-sm">La checkout pe site-ul tău</div>
                </div>
              </div>

              <div class="flex justify-center">
                <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50">
                <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center text-red-400 font-bold">2</div>
                <div class="flex-1">
                  <div class="text-white font-medium">Generează cod în aplicație</div>
                  <div class="text-white/40 text-sm">Deschide aplicația băncii</div>
                </div>
                <div class="blik-code text-white font-bold px-3 py-1 rounded text-sm">7 4 2 8 1 9</div>
              </div>

              <div class="flex justify-center">
                <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50">
                <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center text-red-400 font-bold">3</div>
                <div class="flex-1">
                  <div class="text-white font-medium">Introdu codul pe site</div>
                  <div class="text-white/40 text-sm">6 cifre, valabil 2 minute</div>
                </div>
              </div>

              <div class="flex justify-center">
                <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-brand-green/10 border border-brand-green/30">
                <div class="w-10 h-10 rounded-full bg-brand-green/20 flex items-center justify-center text-brand-green font-bold">✓</div>
                <div class="flex-1">
                  <div class="text-brand-green font-medium">Plată confirmată!</div>
                  <div class="text-white/40 text-sm">Instant, fără alte date</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== MULTI-CURRENCY ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-payu-accent text-sm font-medium uppercase tracking-widest">Multi-Valută</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Prețuri<br><span class="text-gradient-payu">locale</span></h2>
        <p class="text-lg text-white/60">Arată prețuri în valuta familiară fiecărui client. PayU gestionează conversia și decontarea.</p>
      </div>

      <!-- Currency cards -->
      <div class="flex flex-wrap justify-center gap-4 reveal">
        <div class="currency-pill px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇵🇱</span>
          <div>
            <div class="text-white font-semibold text-lg">PLN</div>
            <div class="text-white/40 text-xs">Złoty polonez</div>
          </div>
          <div class="text-payu-green font-mono text-xl ml-4">150 zł</div>
        </div>

        <div class="currency-pill px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇨🇿</span>
          <div>
            <div class="text-white font-semibold text-lg">CZK</div>
            <div class="text-white/40 text-xs">Coroană cehă</div>
          </div>
          <div class="text-payu-green font-mono text-xl ml-4">850 Kč</div>
        </div>

        <div class="currency-pill active px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇷🇴</span>
          <div>
            <div class="font-semibold text-lg">RON</div>
            <div class="text-payu-dark/60 text-xs">Leu românesc</div>
          </div>
          <div class="font-mono text-xl ml-4">175 lei</div>
        </div>

        <div class="currency-pill px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇭🇺</span>
          <div>
            <div class="text-white font-semibold text-lg">HUF</div>
            <div class="text-white/40 text-xs">Forint maghiar</div>
          </div>
          <div class="text-payu-green font-mono text-xl ml-4">13,500 Ft</div>
        </div>

        <div class="currency-pill px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇪🇺</span>
          <div>
            <div class="text-white font-semibold text-lg">EUR</div>
            <div class="text-white/40 text-xs">Euro</div>
          </div>
          <div class="text-payu-green font-mono text-xl ml-4">€35</div>
        </div>
      </div>

      <!-- Conversion note -->
      <div class="text-center mt-8 reveal reveal-delay-1">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-dark-800/50 border border-white/10">
          <svg class="w-4 h-4 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
          <span class="text-white/60 text-sm">Decontare în valuta ta preferată cu cursuri competitive</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest">Cazuri de Utilizare</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Perfect pentru<br><span class="text-gradient animate-shimmer">evenimente regionale</span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-payu-green/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-payu-green/20 to-payu-accent/20 flex items-center justify-center mb-4"><span class="text-2xl">🌍</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Evenimente Multi-Țară</h3>
          <p class="text-white/50 text-sm">Festival în Cracovia cu audiențe din Polonia, Cehia și Slovacia. Fiecare vede metodele locale.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-poland/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-red-500/20 to-red-400/10 flex items-center justify-center mb-4"><span class="text-2xl">🇵🇱</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Focus Polonia</h3>
          <p class="text-white/50 text-sm">Integrare BLIK pentru consumatorii mobile-first care preferă plăți din aplicație.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-czech/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-blue-400/10 flex items-center justify-center mb-4"><span class="text-2xl">🇨🇿</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Turneele Cehe</h3>
          <p class="text-white/50 text-sm">Transfer bancar instant pentru consumatorii cehi care evită cardurile.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10 flex items-center justify-center mb-4"><span class="text-2xl">🎪</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Circuit Regional</h3>
          <p class="text-white/50 text-sm">Festivaluri în multiple țări CEE cu procesare unificată a plăților.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-amber/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10 flex items-center justify-center mb-4"><span class="text-2xl">💳</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Cross-Border</h3>
          <p class="text-white/50 text-sm">Clienții plătesc în valute familiare indiferent de locația evenimentului.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-payu-accent/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-payu-accent/20 to-payu-green/10 flex items-center justify-center mb-4"><span class="text-2xl">👑</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Pachete Premium</h3>
          <p class="text-white/50 text-sm">Plăți în rate pentru experiențe VIP. Opțiuni Buy Now Pay Later prin PayU.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== ORDER STATUSES ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Visual - Order Flow -->
        <div class="reveal">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-10 h-10 rounded-xl bg-payu-green/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold">Statusuri Comandă</div>
                <div class="text-white/40 text-xs">Ciclu de viață complet</div>
              </div>
            </div>

            <div class="space-y-3">
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <span class="status-new px-3 py-1 rounded-full text-xs font-medium">NEW</span>
                <span class="text-white/70 text-sm">Comandă creată</span>
              </div>
              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <span class="status-pending px-3 py-1 rounded-full text-xs font-medium">PENDING</span>
                <span class="text-white/70 text-sm">Se așteaptă plata</span>
              </div>
              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <span class="status-pending px-3 py-1 rounded-full text-xs font-medium">WAITING</span>
                <span class="text-white/70 text-sm">Plată primită, se așteaptă capturarea</span>
              </div>
              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
              <div class="flex items-center gap-4 p-3 rounded-lg bg-brand-green/10 border border-brand-green/30">
                <span class="status-completed px-3 py-1 rounded-full text-xs font-medium">COMPLETED</span>
                <span class="text-white/70 text-sm">Plată reușită</span>
              </div>
            </div>

            <!-- Alternative paths -->
            <div class="mt-4 pt-4 border-t border-white/10">
              <div class="text-white/40 text-xs mb-2">Statusuri alternative:</div>
              <div class="flex gap-2">
                <span class="status-canceled px-2 py-1 rounded text-xs">CANCELED</span>
                <span class="status-canceled px-2 py-1 rounded text-xs">REJECTED</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="reveal reveal-delay-1">
          <span class="text-payu-green text-sm font-medium uppercase tracking-widest">Gestionare Tranzacții</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Control<br><span class="text-gradient-payu">complet</span></h2>
          <p class="text-lg text-white/60 mb-8">Urmărește fiecare tranzacție de la creare până la finalizare. Webhooks în timp real, rambursări, gestionare dispute.</p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-payu-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
              </div>
              <div>
                <div class="text-white font-medium">Webhooks Real-Time</div>
                <p class="text-white/50 text-sm">Notificări instant pentru fiecare schimbare de status</p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-amber/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/></svg>
              </div>
              <div>
                <div class="text-white font-medium">Rambursări Flexibile</div>
                <p class="text-white/50 text-sm">Complete sau parțiale, cu motiv documentat</p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-violet/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium">Dashboard Unificat</div>
                <p class="text-white/50 text-sm">Toate piețele și valutele într-un singur loc</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-payu-green/10 to-payu-accent/10 rounded-3xl p-8 md:p-12 border border-payu-green/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "Cu <span class="text-gradient-payu font-semibold">BLIK în Polonia</span>, rata de conversie a crescut cu 45%. Clienții polonezi adoră să plătească din aplicația bancară - e familiar și instant."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-payu-green to-payu-accent"></div>
            <div>
              <div class="font-semibold text-white">Tomasz K.</div>
              <div class="text-white/50">Founder, Warsaw Music Events</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-payu-green/20 via-transparent to-payu-accent/20"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(166,206,56,0.3) 0%, rgba(0,179,134,0.2) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">🇵🇱</div>
    <div class="absolute bottom-20 right-20 opacity-20 animate-float text-4xl" style="animation-delay: 1s;">🇷🇴</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Cucerește<br><span class="text-gradient-payu">Europa de Est</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">BLIK, transferuri bancare locale, multi-valută. O singură integrare PayU pentru toată regiunea CEE.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-payu-green to-payu-lime text-payu-dark hover:scale-105 hover:shadow-glow-payu transition-all duration-300">
          Conectează PayU
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Întrebări? Contactează-ne
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">5 țări • BLIK & Transfer bancar • PCI DSS Nivel 1</p>
    </div>
  </section>
</div>

<!-- JAVASCRIPT -->
<script>
  window.addEventListener('scroll', () => {
    const scrollProgress = document.getElementById('scroll-progress');
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    scrollProgress.style.width = (scrollTop / scrollHeight) * 100 + '%';
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => { const rect = card.getBoundingClientRect(); card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`); card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`); });
  });
</script>

<?php get_footer(); ?>
