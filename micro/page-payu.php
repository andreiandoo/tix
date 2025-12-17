<?php
/**
 * Template Name: Micro - PayU
 * Description: Landing page for PayU Central and Eastern Europe payment integration
 */

get_header();

// Language detection (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Translations array
$t = [
    // Hero section
    'badge'              => $current_lang === 'ro' ? 'Europa Centrală și de Est' : 'Central and Eastern Europe',
    'hero_title_1'       => $current_lang === 'ro' ? 'Plăți' : 'Payments',
    'hero_title_2'       => $current_lang === 'ro' ? 'locale CEE' : 'local CEE',
    'hero_desc'          => $current_lang === 'ro' ? '<strong class="text-white">BLIK, transferuri bancare, carduri locale</strong> - metodele preferate în Polonia, Cehia, România, Ungaria. O singură integrare PayU pentru toată regiunea.' : '<strong class="text-white">BLIK, bank transfers, local cards</strong> - preferred methods in Poland, Czechia, Romania, Hungary. One PayU integration for the entire region.',
    'cta_connect'        => $current_lang === 'ro' ? 'Conectează PayU' : 'Connect PayU',
    'cta_countries'      => $current_lang === 'ro' ? 'Vezi țările suportate' : 'See supported countries',
    'stat_countries'     => $current_lang === 'ro' ? 'Țări CEE' : 'CEE Countries',
    'stat_poland'        => $current_lang === 'ro' ? 'Polonia #1' : 'Poland #1',
    'stat_currency'      => $current_lang === 'ro' ? 'Valută' : 'Currency',

    // Country selector
    'select_country'     => $current_lang === 'ro' ? 'Selectează Țara' : 'Select Country',
    'local_methods'      => $current_lang === 'ro' ? 'Metode locale de plată' : 'Local payment methods',
    'live'               => 'Live',
    'currency'           => $current_lang === 'ro' ? 'Valută' : 'Currency',
    'payment_methods'    => $current_lang === 'ro' ? 'Metode de plată disponibile' : 'Available payment methods',
    'popular'            => 'POPULAR',
    'total_pay'          => $current_lang === 'ro' ? 'Total de plată' : 'Total to pay',
    'cee_leader'         => 'CEE Leader',
    'level_1'            => $current_lang === 'ro' ? 'Nivel 1' : 'Level 1',

    // Countries section
    'regional_coverage'  => $current_lang === 'ro' ? 'Acoperire Regională' : 'Regional Coverage',
    'countries_title_1'  => $current_lang === 'ro' ? '5 Țări,' : '5 Countries,',
    'countries_title_2'  => $current_lang === 'ro' ? 'o integrare' : 'one integration',
    'countries_desc'     => $current_lang === 'ro' ? 'Fiecare piață cu metodele ei locale preferate. PayU le gestionează pe toate.' : 'Each market with its preferred local methods. PayU handles them all.',
    'poland'             => $current_lang === 'ro' ? 'Polonia' : 'Poland',
    'czech_republic'     => $current_lang === 'ro' ? 'Republica Cehă' : 'Czech Republic',
    'romania'            => $current_lang === 'ro' ? 'România' : 'Romania',
    'hungary'            => $current_lang === 'ro' ? 'Ungaria' : 'Hungary',
    'slovakia'           => $current_lang === 'ro' ? 'Slovacia' : 'Slovakia',
    'mobile_1'           => '#1 Mobile',
    'instant_transfer'   => $current_lang === 'ro' ? 'Transfer bancar instant' : 'Instant bank transfer',
    'installments'       => $current_lang === 'ro' ? 'Plăți în rate' : 'Installment payments',
    'cards_visa_mc'      => $current_lang === 'ro' ? 'Carduri Visa/Mastercard' : 'Visa/Mastercard cards',
    'potential_users'    => $current_lang === 'ro' ? 'utilizatori potențiali' : 'potential users',
    'online_transfer'    => $current_lang === 'ro' ? 'Transfer bancar online' : 'Online bank transfer',
    'local_cards'        => $current_lang === 'ro' ? 'Carduri locale' : 'Local cards',
    'main'               => $current_lang === 'ro' ? 'Principal' : 'Main',
    'bank_transfer'      => $current_lang === 'ro' ? 'Transfer bancar' : 'Bank transfer',
    'rate_partners'      => $current_lang === 'ro' ? 'Rate prin parteneri' : 'Installments through partners',
    'cards'              => $current_lang === 'ro' ? 'Carduri' : 'Cards',
    'entire_cee'         => $current_lang === 'ro' ? 'În toată regiunea CEE' : 'In the entire CEE region',

    // BLIK section
    'method_1'           => $current_lang === 'ro' ? 'Metoda #1' : 'Method #1',
    'in_poland'          => $current_lang === 'ro' ? 'în Polonia' : 'in Poland',
    'blik_desc'          => $current_lang === 'ro' ? 'BLIK domină plățile mobile în Polonia. Cod de 6 cifre, autorizare instantanee, fără date de card. Perfect pentru consumatorii mobile-first.' : 'BLIK dominates mobile payments in Poland. 6-digit code, instant authorization, no card data. Perfect for mobile-first consumers.',
    'mobile_first'       => 'Mobile-First',
    'mobile_first_desc'  => $current_lang === 'ro' ? 'Cod generat în aplicația bancară mobilă' : 'Code generated in mobile banking app',
    'instant'            => 'Instant',
    'instant_desc'       => $current_lang === 'ro' ? 'Confirmare plată în câteva secunde' : 'Payment confirmation in seconds',
    'secured'            => $current_lang === 'ro' ? 'Securizat' : 'Secured',
    'secured_desc'       => $current_lang === 'ro' ? 'Fără date de card, autorizare biometrică' : 'No card data, biometric authorization',
    'blik_instant'       => $current_lang === 'ro' ? 'BLIK - Plată Instant' : 'BLIK - Instant Payment',
    'code_6_digits'      => $current_lang === 'ro' ? 'Cod de 6 cifre din aplicația bancară' : '6-digit code from banking app',
    'enter_code'         => $current_lang === 'ro' ? 'Introdu codul în aplicația ta bancară' : 'Enter the code in your banking app',
    'select_blik'        => $current_lang === 'ro' ? 'Client selectează BLIK' : 'Customer selects BLIK',
    'at_checkout'        => $current_lang === 'ro' ? 'La checkout pe site-ul tău' : 'At checkout on your site',
    'generate_code'      => $current_lang === 'ro' ? 'Generează cod în aplicație' : 'Generate code in app',
    'open_bank_app'      => $current_lang === 'ro' ? 'Deschide aplicația băncii' : 'Open banking app',
    'enter_on_site'      => $current_lang === 'ro' ? 'Introdu codul pe site' : 'Enter code on site',
    'valid_2_min'        => $current_lang === 'ro' ? '6 cifre, valabil 2 minute' : '6 digits, valid 2 minutes',
    'payment_confirmed'  => $current_lang === 'ro' ? 'Plată confirmată!' : 'Payment confirmed!',
    'instant_no_data'    => $current_lang === 'ro' ? 'Instant, fără alte date' : 'Instant, no other data',

    // Multi-currency section
    'multi_currency'     => $current_lang === 'ro' ? 'Multi-Valută' : 'Multi-Currency',
    'prices_title_1'     => $current_lang === 'ro' ? 'Prețuri' : 'Prices',
    'prices_title_2'     => $current_lang === 'ro' ? 'locale' : 'local',
    'prices_desc'        => $current_lang === 'ro' ? 'Arată prețuri în valuta familiară fiecărui client. PayU gestionează conversia și decontarea.' : 'Show prices in each customer\'s familiar currency. PayU handles conversion and settlement.',
    'polish_zloty'       => $current_lang === 'ro' ? 'Złoty polonez' : 'Polish zloty',
    'czech_koruna'       => $current_lang === 'ro' ? 'Coroană cehă' : 'Czech koruna',
    'romanian_leu'       => $current_lang === 'ro' ? 'Leu românesc' : 'Romanian leu',
    'hungarian_forint'   => $current_lang === 'ro' ? 'Forint maghiar' : 'Hungarian forint',
    'euro'               => 'Euro',
    'settlement_note'    => $current_lang === 'ro' ? 'Decontare în valuta ta preferată cu cursuri competitive' : 'Settlement in your preferred currency with competitive rates',

    // Use cases section
    'use_cases'          => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
    'perfect_for'        => $current_lang === 'ro' ? 'Perfect pentru' : 'Perfect for',
    'regional_events'    => $current_lang === 'ro' ? 'evenimente regionale' : 'regional events',
    'multi_country'      => $current_lang === 'ro' ? 'Evenimente Multi-Țară' : 'Multi-Country Events',
    'multi_country_desc' => $current_lang === 'ro' ? 'Festival în Cracovia cu audiențe din Polonia, Cehia și Slovacia. Fiecare vede metodele locale.' : 'Festival in Krakow with audiences from Poland, Czechia and Slovakia. Each sees local methods.',
    'focus_poland'       => $current_lang === 'ro' ? 'Focus Polonia' : 'Focus Poland',
    'focus_poland_desc'  => $current_lang === 'ro' ? 'Integrare BLIK pentru consumatorii mobile-first care preferă plăți din aplicație.' : 'BLIK integration for mobile-first consumers who prefer in-app payments.',
    'czech_tours'        => $current_lang === 'ro' ? 'Turneele Cehe' : 'Czech Tours',
    'czech_tours_desc'   => $current_lang === 'ro' ? 'Transfer bancar instant pentru consumatorii cehi care evită cardurile.' : 'Instant bank transfer for Czech consumers who avoid cards.',
    'regional_circuit'   => $current_lang === 'ro' ? 'Circuit Regional' : 'Regional Circuit',
    'regional_desc'      => $current_lang === 'ro' ? 'Festivaluri în multiple țări CEE cu procesare unificată a plăților.' : 'Festivals in multiple CEE countries with unified payment processing.',
    'cross_border'       => 'Cross-Border',
    'cross_border_desc'  => $current_lang === 'ro' ? 'Clienții plătesc în valute familiare indiferent de locația evenimentului.' : 'Customers pay in familiar currencies regardless of event location.',
    'premium_packages'   => $current_lang === 'ro' ? 'Pachete Premium' : 'Premium Packages',
    'premium_desc'       => $current_lang === 'ro' ? 'Plăți în rate pentru experiențe VIP. Opțiuni Buy Now Pay Later prin PayU.' : 'Installment payments for VIP experiences. Buy Now Pay Later options through PayU.',

    // Order statuses section
    'order_statuses'     => $current_lang === 'ro' ? 'Statusuri Comandă' : 'Order Statuses',
    'full_lifecycle'     => $current_lang === 'ro' ? 'Ciclu de viață complet' : 'Full lifecycle',
    'order_created'      => $current_lang === 'ro' ? 'Comandă creată' : 'Order created',
    'waiting_payment'    => $current_lang === 'ro' ? 'Se așteaptă plata' : 'Awaiting payment',
    'payment_received'   => $current_lang === 'ro' ? 'Plată primită, se așteaptă capturarea' : 'Payment received, awaiting capture',
    'payment_success'    => $current_lang === 'ro' ? 'Plată reușită' : 'Payment successful',
    'alt_statuses'       => $current_lang === 'ro' ? 'Statusuri alternative:' : 'Alternative statuses:',
    'txn_management'     => $current_lang === 'ro' ? 'Gestionare Tranzacții' : 'Transaction Management',
    'control_title_1'    => $current_lang === 'ro' ? 'Control' : 'Full',
    'control_title_2'    => $current_lang === 'ro' ? 'complet' : 'control',
    'control_desc'       => $current_lang === 'ro' ? 'Urmărește fiecare tranzacție de la creare până la finalizare. Webhooks în timp real, rambursări, gestionare dispute.' : 'Track every transaction from creation to completion. Real-time webhooks, refunds, dispute management.',
    'webhooks_realtime'  => $current_lang === 'ro' ? 'Webhooks Real-Time' : 'Real-Time Webhooks',
    'webhooks_desc'      => $current_lang === 'ro' ? 'Notificări instant pentru fiecare schimbare de status' : 'Instant notifications for every status change',
    'flexible_refunds'   => $current_lang === 'ro' ? 'Rambursări Flexibile' : 'Flexible Refunds',
    'refunds_desc'       => $current_lang === 'ro' ? 'Complete sau parțiale, cu motiv documentat' : 'Full or partial, with documented reason',
    'unified_dashboard'  => $current_lang === 'ro' ? 'Dashboard Unificat' : 'Unified Dashboard',
    'dashboard_desc'     => $current_lang === 'ro' ? 'Toate piețele și valutele într-un singur loc' : 'All markets and currencies in one place',

    // Testimonial
    'testimonial_text'   => $current_lang === 'ro' ? 'Cu <span class="text-gradient-payu font-semibold">BLIK în Polonia</span>, rata de conversie a crescut cu 45%. Clienții polonezi adoră să plătească din aplicația bancară - e familiar și instant.' : 'With <span class="text-gradient-payu font-semibold">BLIK in Poland</span>, conversion rate increased by 45%. Polish customers love paying from the banking app - it\'s familiar and instant.',

    // Final CTA
    'cta_title_1'        => $current_lang === 'ro' ? 'Cucerește' : 'Conquer',
    'cta_title_2'        => $current_lang === 'ro' ? 'Europa de Est' : 'Eastern Europe',
    'cta_desc'           => $current_lang === 'ro' ? 'BLIK, transferuri bancare locale, multi-valută. O singură integrare PayU pentru toată regiunea CEE.' : 'BLIK, local bank transfers, multi-currency. One PayU integration for the entire CEE region.',
    'questions_contact'  => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
    'final_tagline'      => $current_lang === 'ro' ? '5 țări • BLIK & Transfer bancar • PCI DSS Nivel 1' : '5 countries • BLIK & Bank transfer • PCI DSS Level 1',
];
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
            <span class="text-payu-green text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['hero_title_2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-payu-green to-payu-lime text-payu-dark hover:scale-105 hover:shadow-glow-payu transition-all duration-300">
              <?php echo esc_html( $t['cta_connect'] ); ?>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#tari" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              <?php echo esc_html( $t['cta_countries'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-display font-bold text-payu-green">5</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_countries'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-white">BLIK</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_poland'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-payu-accent">Multi</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_currency'] ); ?></div>
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
                    <div class="text-white font-semibold"><?php echo esc_html( $t['select_country'] ); ?></div>
                    <div class="text-white/40 text-xs"><?php echo esc_html( $t['local_methods'] ); ?></div>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-payu-green animate-pulse"></span>
                  <span class="text-payu-green text-xs"><?php echo esc_html( $t['live'] ); ?></span>
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
                      <div class="text-white/40 text-sm"><?php echo esc_html( $t['currency'] ); ?>: <span class="text-payu-green font-mono" x-text="countries[selectedCountry].currency"></span></div>
                    </div>
                  </div>
                </div>

                <!-- Payment Methods -->
                <div class="text-white/40 text-xs uppercase tracking-wider mb-3"><?php echo esc_html( $t['payment_methods'] ); ?></div>
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
                    <div class="text-white font-semibold"><?php echo esc_html( $t['blik_instant'] ); ?></div>
                    <div class="text-white/40 text-xs"><?php echo esc_html( $t['code_6_digits'] ); ?></div>
                  </div>
                </div>
                <div class="flex items-center justify-center gap-2 py-3">
                  <div class="blik-code text-white text-2xl font-bold px-4 py-2 rounded-lg">7 4 2 8 1 9</div>
                </div>
                <div class="text-center text-white/40 text-xs"><?php echo esc_html( $t['enter_code'] ); ?></div>
              </div>

              <!-- Amount Preview -->
              <div class="mt-4 pt-4 border-t border-white/10">
                <div class="flex items-center justify-between">
                  <span class="text-white/40 text-sm"><?php echo esc_html( $t['total_pay'] ); ?></span>
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
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['cee_leader'] ); ?></div>
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
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['level_1'] ); ?></div>
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
        <span class="text-payu-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['regional_coverage'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['countries_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['countries_title_2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['countries_desc'] ); ?></p>
      </div>

      <!-- Countries Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Poland -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-poland/50 transition-all duration-500 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇵🇱</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['poland'] ); ?></h3>
              <div class="text-payu-green text-sm font-mono">PLN</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-red-500"></div>
              <span class="text-white text-sm">BLIK</span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['mobile_1'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm"><?php echo esc_html( $t['instant_transfer'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm"><?php echo esc_html( $t['installments'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm"><?php echo esc_html( $t['cards_visa_mc'] ); ?></span>
            </div>
          </div>
          <div class="text-white/40 text-xs">38M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Czech Republic -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-czech/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇨🇿</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['czech_republic'] ); ?></h3>
              <div class="text-payu-green text-sm font-mono">CZK</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-blue-500"></div>
              <span class="text-white text-sm"><?php echo esc_html( $t['online_transfer'] ); ?></span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['popular'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm"><?php echo esc_html( $t['local_cards'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">Apple Pay / Google Pay</span>
            </div>
          </div>
          <div class="text-white/40 text-xs">10M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Romania -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-romania/50 transition-all duration-500 reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇷🇴</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['romania'] ); ?></h3>
              <div class="text-payu-green text-sm font-mono">RON</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-blue-500"></div>
              <span class="text-white text-sm"><?php echo esc_html( $t['local_cards'] ); ?></span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['main'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm"><?php echo esc_html( $t['bank_transfer'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm"><?php echo esc_html( $t['rate_partners'] ); ?></span>
            </div>
          </div>
          <div class="text-white/40 text-xs">19M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Hungary -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-hungary/50 transition-all duration-500 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇭🇺</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['hungary'] ); ?></h3>
              <div class="text-payu-green text-sm font-mono">HUF</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-green-500"></div>
              <span class="text-white text-sm"><?php echo esc_html( $t['cards'] ); ?></span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['main'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm">SimplePay</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm"><?php echo esc_html( $t['bank_transfer'] ); ?></span>
            </div>
          </div>
          <div class="text-white/40 text-xs">10M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Slovakia -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-slovakia/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl overflow-hidden flex items-center justify-center text-4xl">🇸🇰</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['slovakia'] ); ?></h3>
              <div class="text-payu-green text-sm font-mono">EUR</div>
            </div>
          </div>
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-blue-500"></div>
              <span class="text-white text-sm"><?php echo esc_html( $t['cards'] ); ?></span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['main'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-white/70 text-sm"><?php echo esc_html( $t['bank_transfer'] ); ?></span>
            </div>
          </div>
          <div class="text-white/40 text-xs">5M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Total Coverage -->
        <div class="feature-card relative bg-gradient-to-br from-payu-green/10 to-payu-accent/10 rounded-2xl p-6 border border-payu-green/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="text-center">
            <div class="text-6xl font-display font-bold text-payu-green mb-2">82M+</div>
            <div class="text-white font-semibold mb-2"><?php echo esc_html( $t['potential_users'] ); ?></div>
            <div class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['entire_cee'] ); ?></div>
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
            <span class="text-white/50 text-xs">🇵🇱 <?php echo esc_html( $t['poland'] ); ?></span>
          </div>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['method_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['in_poland'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['blik_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-red-500/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['mobile_first'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['mobile_first_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-payu-green/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['instant'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['instant_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['secured'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['secured_desc'] ); ?></p>
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
                  <div class="text-white font-medium"><?php echo esc_html( $t['select_blik'] ); ?></div>
                  <div class="text-white/40 text-sm"><?php echo esc_html( $t['at_checkout'] ); ?></div>
                </div>
              </div>

              <div class="flex justify-center">
                <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50">
                <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center text-red-400 font-bold">2</div>
                <div class="flex-1">
                  <div class="text-white font-medium"><?php echo esc_html( $t['generate_code'] ); ?></div>
                  <div class="text-white/40 text-sm"><?php echo esc_html( $t['open_bank_app'] ); ?></div>
                </div>
                <div class="blik-code text-white font-bold px-3 py-1 rounded text-sm">7 4 2 8 1 9</div>
              </div>

              <div class="flex justify-center">
                <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50">
                <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center text-red-400 font-bold">3</div>
                <div class="flex-1">
                  <div class="text-white font-medium"><?php echo esc_html( $t['enter_on_site'] ); ?></div>
                  <div class="text-white/40 text-sm"><?php echo esc_html( $t['valid_2_min'] ); ?></div>
                </div>
              </div>

              <div class="flex justify-center">
                <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-brand-green/10 border border-brand-green/30">
                <div class="w-10 h-10 rounded-full bg-brand-green/20 flex items-center justify-center text-brand-green font-bold">✓</div>
                <div class="flex-1">
                  <div class="text-brand-green font-medium"><?php echo esc_html( $t['payment_confirmed'] ); ?></div>
                  <div class="text-white/40 text-sm"><?php echo esc_html( $t['instant_no_data'] ); ?></div>
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
        <span class="text-payu-accent text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['multi_currency'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['prices_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['prices_title_2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['prices_desc'] ); ?></p>
      </div>

      <!-- Currency cards -->
      <div class="flex flex-wrap justify-center gap-4 reveal">
        <div class="currency-pill px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇵🇱</span>
          <div>
            <div class="text-white font-semibold text-lg">PLN</div>
            <div class="text-white/40 text-xs"><?php echo esc_html( $t['polish_zloty'] ); ?></div>
          </div>
          <div class="text-payu-green font-mono text-xl ml-4">150 zł</div>
        </div>

        <div class="currency-pill px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇨🇿</span>
          <div>
            <div class="text-white font-semibold text-lg">CZK</div>
            <div class="text-white/40 text-xs"><?php echo esc_html( $t['czech_koruna'] ); ?></div>
          </div>
          <div class="text-payu-green font-mono text-xl ml-4">850 Kč</div>
        </div>

        <div class="currency-pill active px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇷🇴</span>
          <div>
            <div class="font-semibold text-lg">RON</div>
            <div class="text-payu-dark/60 text-xs"><?php echo esc_html( $t['romanian_leu'] ); ?></div>
          </div>
          <div class="font-mono text-xl ml-4">175 lei</div>
        </div>

        <div class="currency-pill px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇭🇺</span>
          <div>
            <div class="text-white font-semibold text-lg">HUF</div>
            <div class="text-white/40 text-xs"><?php echo esc_html( $t['hungarian_forint'] ); ?></div>
          </div>
          <div class="text-payu-green font-mono text-xl ml-4">13,500 Ft</div>
        </div>

        <div class="currency-pill px-6 py-4 rounded-2xl flex items-center gap-4">
          <span class="text-3xl">🇪🇺</span>
          <div>
            <div class="text-white font-semibold text-lg">EUR</div>
            <div class="text-white/40 text-xs"><?php echo esc_html( $t['euro'] ); ?></div>
          </div>
          <div class="text-payu-green font-mono text-xl ml-4">€35</div>
        </div>
      </div>

      <!-- Conversion note -->
      <div class="text-center mt-8 reveal reveal-delay-1">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-dark-800/50 border border-white/10">
          <svg class="w-4 h-4 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
          <span class="text-white/60 text-sm"><?php echo esc_html( $t['settlement_note'] ); ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['use_cases'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['perfect_for'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['regional_events'] ); ?></span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-payu-green/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-payu-green/20 to-payu-accent/20 flex items-center justify-center mb-4"><span class="text-2xl">🌍</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['multi_country'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['multi_country_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-poland/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-red-500/20 to-red-400/10 flex items-center justify-center mb-4"><span class="text-2xl">🇵🇱</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['focus_poland'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['focus_poland_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-country-czech/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-blue-400/10 flex items-center justify-center mb-4"><span class="text-2xl">🇨🇿</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['czech_tours'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['czech_tours_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10 flex items-center justify-center mb-4"><span class="text-2xl">🎪</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['regional_circuit'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['regional_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-amber/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10 flex items-center justify-center mb-4"><span class="text-2xl">💳</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['cross_border'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['cross_border_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-payu-accent/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-payu-accent/20 to-payu-green/10 flex items-center justify-center mb-4"><span class="text-2xl">👑</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['premium_packages'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['premium_desc'] ); ?></p>
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
                <div class="text-white font-semibold"><?php echo esc_html( $t['order_statuses'] ); ?></div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['full_lifecycle'] ); ?></div>
              </div>
            </div>

            <div class="space-y-3">
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <span class="status-new px-3 py-1 rounded-full text-xs font-medium">NEW</span>
                <span class="text-white/70 text-sm"><?php echo esc_html( $t['order_created'] ); ?></span>
              </div>
              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <span class="status-pending px-3 py-1 rounded-full text-xs font-medium">PENDING</span>
                <span class="text-white/70 text-sm"><?php echo esc_html( $t['waiting_payment'] ); ?></span>
              </div>
              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <span class="status-pending px-3 py-1 rounded-full text-xs font-medium">WAITING</span>
                <span class="text-white/70 text-sm"><?php echo esc_html( $t['payment_received'] ); ?></span>
              </div>
              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
              <div class="flex items-center gap-4 p-3 rounded-lg bg-brand-green/10 border border-brand-green/30">
                <span class="status-completed px-3 py-1 rounded-full text-xs font-medium">COMPLETED</span>
                <span class="text-white/70 text-sm"><?php echo esc_html( $t['payment_success'] ); ?></span>
              </div>
            </div>

            <!-- Alternative paths -->
            <div class="mt-4 pt-4 border-t border-white/10">
              <div class="text-white/40 text-xs mb-2"><?php echo esc_html( $t['alt_statuses'] ); ?></div>
              <div class="flex gap-2">
                <span class="status-canceled px-2 py-1 rounded text-xs">CANCELED</span>
                <span class="status-canceled px-2 py-1 rounded text-xs">REJECTED</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="reveal reveal-delay-1">
          <span class="text-payu-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['txn_management'] ); ?></span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['control_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['control_title_2'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['control_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-payu-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['webhooks_realtime'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['webhooks_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-amber/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['flexible_refunds'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['refunds_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-violet/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['unified_dashboard'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['dashboard_desc'] ); ?></p>
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
            "<?php echo $t['testimonial_text']; ?>"
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
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['cta_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['cta_title_2'] ); ?></span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['cta_desc'] ); ?></p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-payu-green to-payu-lime text-payu-dark hover:scale-105 hover:shadow-glow-payu transition-all duration-300">
          <?php echo esc_html( $t['cta_connect'] ); ?>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          <?php echo esc_html( $t['questions_contact'] ); ?>
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3"><?php echo esc_html( $t['final_tagline'] ); ?></p>
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
