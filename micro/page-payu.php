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
    'testimonial_text'   => $current_lang === 'ro' ? 'Cu <span class="font-semibold text-gradient-payu">BLIK în Polonia</span>, rata de conversie a crescut cu 45%. Clienții polonezi adoră să plătească din aplicația bancară - e familiar și instant.' : 'With <span class="font-semibold text-gradient-payu">BLIK in Poland</span>, conversion rate increased by 45%. Polish customers love paying from the banking app - it\'s familiar and instant.',

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

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #A6CE38, #C5E063, #00B386);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-payu-green/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-payu-accent/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute text-2xl top-32 left-16 opacity-30 animate-float">🇵🇱</div>
    <div class="absolute text-xl bottom-40 right-24 opacity-30 animate-float" style="animation-delay: 1s;">🇷🇴</div>
    <div class="absolute text-3xl top-1/2 right-16 opacity-20 animate-float" style="animation-delay: 2s;">🇨🇿</div>
    <div class="absolute text-xl bottom-60 left-24 opacity-20 animate-float" style="animation-delay: 1.5s;">🇭🇺</div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-payu-green/10 border-payu-green/20">
            <svg class="w-5 h-5 text-payu-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            <span class="text-sm font-medium text-payu-green"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['hero_title_2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold transition-all duration-300 rounded-full group bg-gradient-to-r from-payu-green to-payu-lime text-payu-dark hover:scale-105 hover:shadow-glow-payu">
              <?php echo esc_html( $t['cta_connect'] ); ?>
              <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#tari" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              <?php echo esc_html( $t['cta_countries'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-bold font-display text-payu-green">5</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['stat_countries'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold text-white font-display">BLIK</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['stat_poland'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold font-display text-payu-accent">Multi</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['stat_currency'] ); ?></div>
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
            <div class="p-6 border shadow-2xl bg-dark-800/80 backdrop-blur-xl rounded-3xl border-payu-green/20">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-payu-green/20">
                    <svg class="w-5 h-5 text-payu-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/></svg>
                  </div>
                  <div>
                    <div class="font-semibold text-white"><?php echo esc_html( $t['select_country'] ); ?></div>
                    <div class="text-xs text-white/40"><?php echo esc_html( $t['local_methods'] ); ?></div>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-payu-green animate-pulse"></span>
                  <span class="text-xs text-payu-green"><?php echo esc_html( $t['live'] ); ?></span>
                </div>
              </div>

              <!-- Country Tabs -->
              <div class="flex gap-2 pb-2 mb-6 overflow-x-auto">
                <template x-for="(country, code) in countries" :key="code">
                  <button
                    @click="selectedCountry = code"
                    :class="selectedCountry === code ? 'bg-payu-green/20 border-payu-green' : 'bg-dark-700 border-white/10'"
                    class="flex items-center flex-shrink-0 gap-2 px-4 py-2 transition-all border rounded-xl"
                  >
                    <span class="text-xl" x-text="country.flag"></span>
                    <span class="text-sm font-medium text-white" x-text="country.currency"></span>
                  </button>
                </template>
              </div>

              <!-- Selected Country Details -->
              <div class="p-4 mb-4 bg-dark-900/50 rounded-2xl">
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center gap-3">
                    <span class="text-4xl" x-text="countries[selectedCountry].flag"></span>
                    <div>
                      <div class="text-lg font-semibold text-white" x-text="countries[selectedCountry].name"></div>
                      <div class="text-sm text-white/40"><?php echo esc_html( $t['currency'] ); ?>: <span class="font-mono text-payu-green" x-text="countries[selectedCountry].currency"></span></div>
                    </div>
                  </div>
                </div>

                <!-- Payment Methods -->
                <div class="mb-3 text-xs tracking-wider uppercase text-white/40"><?php echo esc_html( $t['payment_methods'] ); ?></div>
                <div class="flex flex-wrap gap-2">
                  <template x-for="method in countries[selectedCountry].methods" :key="method">
                    <div
                      :class="method === countries[selectedCountry].popular ? 'popular' : ''"
                      class="flex items-center gap-2 px-3 py-2 rounded-lg payment-method"
                    >
                      <span class="text-sm text-white" x-text="method"></span>
                      <span x-show="method === countries[selectedCountry].popular" class="px-1.5 py-0.5 rounded bg-payu-green/20 text-payu-green text-[10px] font-bold">POPULAR</span>
                    </div>
                  </template>
                </div>
              </div>

              <!-- BLIK Demo (shows only for Poland) -->
              <div x-show="selectedCountry === 'pl'" x-transition class="p-4 border bg-gradient-to-br from-red-600/20 to-red-500/10 rounded-2xl border-red-500/20">
                <div class="flex items-center gap-3 mb-3">
                  <div class="flex items-center justify-center w-10 h-10 bg-red-500 rounded-xl">
                    <span class="text-sm font-bold text-white">BLIK</span>
                  </div>
                  <div>
                    <div class="font-semibold text-white"><?php echo esc_html( $t['blik_instant'] ); ?></div>
                    <div class="text-xs text-white/40"><?php echo esc_html( $t['code_6_digits'] ); ?></div>
                  </div>
                </div>
                <div class="flex items-center justify-center gap-2 py-3">
                  <div class="px-4 py-2 text-2xl font-bold text-white rounded-lg blik-code">7 4 2 8 1 9</div>
                </div>
                <div class="text-xs text-center text-white/40"><?php echo esc_html( $t['enter_code'] ); ?></div>
              </div>

              <!-- Amount Preview -->
              <div class="pt-4 mt-4 border-t border-white/10">
                <div class="flex items-center justify-between">
                  <span class="text-sm text-white/40"><?php echo esc_html( $t['total_pay'] ); ?></span>
                  <div class="text-right">
                    <span class="text-2xl font-bold text-white font-display">150</span>
                    <span class="ml-1 font-mono text-lg text-payu-green" x-text="countries[selectedCountry].currency"></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating PayU Badge -->
            <div class="absolute z-10 px-4 py-3 border shadow-xl -top-4 -left-4 bg-dark-800 rounded-xl border-payu-green/30 animate-float">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-payu-green">
                  <span class="text-xs font-bold text-payu-dark">Pay</span>
                </div>
                <div>
                  <div class="text-sm font-medium text-payu-green">PayU</div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['cee_leader'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating Security Badge -->
            <div class="absolute -bottom-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-brand-green/20">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-brand-green">PCI DSS</div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['level_1'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== COUNTRIES ==================== -->
  <section class="relative py-24 overflow-hidden" id="tari">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-payu-green"><?php echo esc_html( $t['regional_coverage'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['countries_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['countries_title_2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['countries_desc'] ); ?></p>
      </div>

      <!-- Countries Grid -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- Poland -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-country-poland/50 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center overflow-hidden text-4xl w-14 h-14 rounded-2xl">🇵🇱</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['poland'] ); ?></h3>
              <div class="font-mono text-sm text-payu-green">PLN</div>
            </div>
          </div>
          <div class="mb-4 space-y-2">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 bg-red-500 rounded-full"></div>
              <span class="text-sm text-white">BLIK</span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['mobile_1'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['instant_transfer'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['installments'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['cards_visa_mc'] ); ?></span>
            </div>
          </div>
          <div class="text-xs text-white/40">38M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Czech Republic -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-country-czech/50 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center overflow-hidden text-4xl w-14 h-14 rounded-2xl">🇨🇿</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['czech_republic'] ); ?></h3>
              <div class="font-mono text-sm text-payu-green">CZK</div>
            </div>
          </div>
          <div class="mb-4 space-y-2">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
              <span class="text-sm text-white"><?php echo esc_html( $t['online_transfer'] ); ?></span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['popular'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['local_cards'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70">Apple Pay / Google Pay</span>
            </div>
          </div>
          <div class="text-xs text-white/40">10M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Romania -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-country-romania/50 reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center overflow-hidden text-4xl w-14 h-14 rounded-2xl">🇷🇴</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['romania'] ); ?></h3>
              <div class="font-mono text-sm text-payu-green">RON</div>
            </div>
          </div>
          <div class="mb-4 space-y-2">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
              <span class="text-sm text-white"><?php echo esc_html( $t['local_cards'] ); ?></span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['main'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['bank_transfer'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['rate_partners'] ); ?></span>
            </div>
          </div>
          <div class="text-xs text-white/40">19M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Hungary -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-country-hungary/50 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center overflow-hidden text-4xl w-14 h-14 rounded-2xl">🇭🇺</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['hungary'] ); ?></h3>
              <div class="font-mono text-sm text-payu-green">HUF</div>
            </div>
          </div>
          <div class="mb-4 space-y-2">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 bg-green-500 rounded-full"></div>
              <span class="text-sm text-white"><?php echo esc_html( $t['cards'] ); ?></span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['main'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70">SimplePay</span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['bank_transfer'] ); ?></span>
            </div>
          </div>
          <div class="text-xs text-white/40">10M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Slovakia -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-country-slovakia/50 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center overflow-hidden text-4xl w-14 h-14 rounded-2xl">🇸🇰</div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['slovakia'] ); ?></h3>
              <div class="font-mono text-sm text-payu-green">EUR</div>
            </div>
          </div>
          <div class="mb-4 space-y-2">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
              <span class="text-sm text-white"><?php echo esc_html( $t['cards'] ); ?></span>
              <span class="ml-auto px-2 py-0.5 rounded bg-payu-green/20 text-payu-green text-xs"><?php echo esc_html( $t['main'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-white/30"></div>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['bank_transfer'] ); ?></span>
            </div>
          </div>
          <div class="text-xs text-white/40">5M+ <?php echo esc_html( $t['potential_users'] ); ?></div>
        </div>

        <!-- Total Coverage -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-gradient-to-br from-payu-green/10 to-payu-accent/10 rounded-2xl border-payu-green/30 reveal reveal-delay-2">
          <div class="text-center">
            <div class="mb-2 text-6xl font-bold font-display text-payu-green">82M+</div>
            <div class="mb-2 font-semibold text-white"><?php echo esc_html( $t['potential_users'] ); ?></div>
            <div class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['entire_cee'] ); ?></div>
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
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <div class="inline-flex items-center gap-2 px-3 py-1 mb-4 border rounded-full bg-red-500/20 border-red-500/30">
            <span class="text-sm font-bold text-red-400">BLIK</span>
            <span class="text-xs text-white/50">🇵🇱 <?php echo esc_html( $t['poland'] ); ?></span>
          </div>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['method_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['in_poland'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['blik_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-red-500/20">
                <svg class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['mobile_first'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['mobile_first_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-payu-green/20">
                <svg class="w-6 h-6 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['instant'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['instant_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-green/20">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['secured'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['secured_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - BLIK Flow -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-red-500/20">
            <div class="mb-6 text-center">
              <div class="inline-flex items-center gap-2 px-4 py-2 font-bold text-white bg-red-500 rounded-full">
                <span>BLIK</span>
              </div>
            </div>

            <!-- Flow steps -->
            <div class="space-y-4">
              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50">
                <div class="flex items-center justify-center w-10 h-10 font-bold text-red-400 rounded-full bg-red-500/20">1</div>
                <div class="flex-1">
                  <div class="font-medium text-white"><?php echo esc_html( $t['select_blik'] ); ?></div>
                  <div class="text-sm text-white/40"><?php echo esc_html( $t['at_checkout'] ); ?></div>
                </div>
              </div>

              <div class="flex justify-center">
                <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50">
                <div class="flex items-center justify-center w-10 h-10 font-bold text-red-400 rounded-full bg-red-500/20">2</div>
                <div class="flex-1">
                  <div class="font-medium text-white"><?php echo esc_html( $t['generate_code'] ); ?></div>
                  <div class="text-sm text-white/40"><?php echo esc_html( $t['open_bank_app'] ); ?></div>
                </div>
                <div class="px-3 py-1 text-sm font-bold text-white rounded blik-code">7 4 2 8 1 9</div>
              </div>

              <div class="flex justify-center">
                <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50">
                <div class="flex items-center justify-center w-10 h-10 font-bold text-red-400 rounded-full bg-red-500/20">3</div>
                <div class="flex-1">
                  <div class="font-medium text-white"><?php echo esc_html( $t['enter_on_site'] ); ?></div>
                  <div class="text-sm text-white/40"><?php echo esc_html( $t['valid_2_min'] ); ?></div>
                </div>
              </div>

              <div class="flex justify-center">
                <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-4 border rounded-xl bg-brand-green/10 border-brand-green/30">
                <div class="flex items-center justify-center w-10 h-10 font-bold rounded-full bg-brand-green/20 text-brand-green">✓</div>
                <div class="flex-1">
                  <div class="font-medium text-brand-green"><?php echo esc_html( $t['payment_confirmed'] ); ?></div>
                  <div class="text-sm text-white/40"><?php echo esc_html( $t['instant_no_data'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== MULTI-CURRENCY ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-payu-accent"><?php echo esc_html( $t['multi_currency'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['prices_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['prices_title_2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['prices_desc'] ); ?></p>
      </div>

      <!-- Currency cards -->
      <div class="flex flex-wrap justify-center gap-4 reveal">
        <div class="flex items-center gap-4 px-6 py-4 currency-pill rounded-2xl">
          <span class="text-3xl">🇵🇱</span>
          <div>
            <div class="text-lg font-semibold text-white">PLN</div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['polish_zloty'] ); ?></div>
          </div>
          <div class="ml-4 font-mono text-xl text-payu-green">150 zł</div>
        </div>

        <div class="flex items-center gap-4 px-6 py-4 currency-pill rounded-2xl">
          <span class="text-3xl">🇨🇿</span>
          <div>
            <div class="text-lg font-semibold text-white">CZK</div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['czech_koruna'] ); ?></div>
          </div>
          <div class="ml-4 font-mono text-xl text-payu-green">850 Kč</div>
        </div>

        <div class="flex items-center gap-4 px-6 py-4 currency-pill active rounded-2xl">
          <span class="text-3xl">🇷🇴</span>
          <div>
            <div class="text-lg font-semibold">RON</div>
            <div class="text-xs text-payu-dark/60"><?php echo esc_html( $t['romanian_leu'] ); ?></div>
          </div>
          <div class="ml-4 font-mono text-xl">175 lei</div>
        </div>

        <div class="flex items-center gap-4 px-6 py-4 currency-pill rounded-2xl">
          <span class="text-3xl">🇭🇺</span>
          <div>
            <div class="text-lg font-semibold text-white">HUF</div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['hungarian_forint'] ); ?></div>
          </div>
          <div class="ml-4 font-mono text-xl text-payu-green">13,500 Ft</div>
        </div>

        <div class="flex items-center gap-4 px-6 py-4 currency-pill rounded-2xl">
          <span class="text-3xl">🇪🇺</span>
          <div>
            <div class="text-lg font-semibold text-white">EUR</div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['euro'] ); ?></div>
          </div>
          <div class="ml-4 font-mono text-xl text-payu-green">€35</div>
        </div>
      </div>

      <!-- Conversion note -->
      <div class="mt-8 text-center reveal reveal-delay-1">
        <div class="inline-flex items-center gap-2 px-4 py-2 border rounded-full bg-dark-800/50 border-white/10">
          <svg class="w-4 h-4 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
          <span class="text-sm text-white/60"><?php echo esc_html( $t['settlement_note'] ); ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-brand-violet"><?php echo esc_html( $t['use_cases'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['perfect_for'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['regional_events'] ); ?></span></h2>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-payu-green/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-payu-green/20 to-payu-accent/20"><span class="text-2xl">🌍</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['multi_country'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['multi_country_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-country-poland/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-red-500/20 to-red-400/10"><span class="text-2xl">🇵🇱</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['focus_poland'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['focus_poland_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-country-czech/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-blue-400/10"><span class="text-2xl">🇨🇿</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['czech_tours'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['czech_tours_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-violet/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10"><span class="text-2xl">🎪</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['regional_circuit'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['regional_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-amber/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10"><span class="text-2xl">💳</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['cross_border'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['cross_border_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-payu-accent/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-payu-accent/20 to-payu-green/10"><span class="text-2xl">👑</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['premium_packages'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['premium_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== ORDER STATUSES ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Visual - Order Flow -->
        <div class="reveal">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <div class="flex items-center gap-3 mb-6">
              <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-payu-green/20">
                <svg class="w-5 h-5 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
              </div>
              <div>
                <div class="font-semibold text-white"><?php echo esc_html( $t['order_statuses'] ); ?></div>
                <div class="text-xs text-white/40"><?php echo esc_html( $t['full_lifecycle'] ); ?></div>
              </div>
            </div>

            <div class="space-y-3">
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <span class="px-3 py-1 text-xs font-medium rounded-full status-new">NEW</span>
                <span class="text-sm text-white/70"><?php echo esc_html( $t['order_created'] ); ?></span>
              </div>
              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <span class="px-3 py-1 text-xs font-medium rounded-full status-pending">PENDING</span>
                <span class="text-sm text-white/70"><?php echo esc_html( $t['waiting_payment'] ); ?></span>
              </div>
              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <span class="px-3 py-1 text-xs font-medium rounded-full status-pending">WAITING</span>
                <span class="text-sm text-white/70"><?php echo esc_html( $t['payment_received'] ); ?></span>
              </div>
              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
              <div class="flex items-center gap-4 p-3 border rounded-lg bg-brand-green/10 border-brand-green/30">
                <span class="px-3 py-1 text-xs font-medium rounded-full status-completed">COMPLETED</span>
                <span class="text-sm text-white/70"><?php echo esc_html( $t['payment_success'] ); ?></span>
              </div>
            </div>

            <!-- Alternative paths -->
            <div class="pt-4 mt-4 border-t border-white/10">
              <div class="mb-2 text-xs text-white/40"><?php echo esc_html( $t['alt_statuses'] ); ?></div>
              <div class="flex gap-2">
                <span class="px-2 py-1 text-xs rounded status-canceled">CANCELED</span>
                <span class="px-2 py-1 text-xs rounded status-canceled">REJECTED</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="reveal reveal-delay-1">
          <span class="text-sm font-medium tracking-widest uppercase text-payu-green"><?php echo esc_html( $t['txn_management'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['control_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['control_title_2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['control_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-payu-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-payu-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['webhooks_realtime'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['webhooks_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-amber/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['flexible_refunds'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['refunds_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-violet/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['unified_dashboard'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['dashboard_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-payu-green/10 to-payu-accent/10 rounded-3xl md:p-12 border-payu-green/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="mb-8 text-2xl font-light leading-relaxed text-white md:text-3xl">
            "<?php echo $t['testimonial_text']; ?>"
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="rounded-full w-14 h-14 bg-gradient-to-br from-payu-green to-payu-accent"></div>
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
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-payu-green/20 via-transparent to-payu-accent/20"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(166,206,56,0.3) 0%, rgba(0,179,134,0.2) 100%);"></div>

    <div class="absolute text-4xl top-20 left-20 opacity-20 animate-float">🇵🇱</div>
    <div class="absolute text-4xl bottom-20 right-20 opacity-20 animate-float" style="animation-delay: 1s;">🇷🇴</div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal"><?php echo esc_html( $t['cta_title_1'] ); ?><br><span class="text-gradient-payu"><?php echo esc_html( $t['cta_title_2'] ); ?></span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1"><?php echo esc_html( $t['cta_desc'] ); ?></p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold transition-all duration-300 rounded-full group bg-gradient-to-r from-payu-green to-payu-lime text-payu-dark hover:scale-105 hover:shadow-glow-payu">
          <?php echo esc_html( $t['cta_connect'] ); ?>
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
          <?php echo esc_html( $t['questions_contact'] ); ?>
        </a>
      </div>

      <p class="mt-8 text-sm text-white/30 reveal reveal-delay-3"><?php echo esc_html( $t['final_tagline'] ); ?></p>
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
