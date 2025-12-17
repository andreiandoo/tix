<?php
/**
 * Template Name: Micro - Netopia
 * Description: Landing page for Netopia Romanian payment integration
 */

get_header();

// Language detection (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Translations array
$t = [
    // Hero section
    'badge'              => $current_lang === 'ro' ? 'Procesator #1 în România' : '#1 Processor in Romania',
    'hero_title_1'       => $current_lang === 'ro' ? 'Plăți' : 'Payments',
    'hero_title_2'       => $current_lang === 'ro' ? 'pentru România' : 'for Romania',
    'hero_desc'          => $current_lang === 'ro' ? 'Acceptă plăți <strong class="text-white">card românesc</strong>, rate fără dobândă și transfer bancar. Integrare nativă cu toate băncile din România.' : 'Accept <strong class="text-white">Romanian card</strong> payments, interest-free installments and bank transfers. Native integration with all Romanian banks.',
    'cta_connect'        => $current_lang === 'ro' ? 'Conectează Netopia' : 'Connect Netopia',
    'cta_how'            => $current_lang === 'ro' ? 'Cum funcționează' : 'How it works',
    'stat_banks'         => $current_lang === 'ro' ? 'Bănci partenere' : 'Partner banks',
    'stat_rate'          => $current_lang === 'ro' ? 'Rate fără dobândă' : 'Interest-free installments',
    'stat_security'      => $current_lang === 'ro' ? 'Securitate 3D' : '3D Security',

    // Checkout mockup
    'secure_payment'     => $current_lang === 'ro' ? 'Plată securizată' : 'Secure payment',
    'payment_method'     => $current_lang === 'ro' ? 'Metodă de plată' : 'Payment method',
    'card_payment'       => $current_lang === 'ro' ? 'Card' : 'Card',
    'installments'       => $current_lang === 'ro' ? 'Rate' : 'Installments',
    'bank_transfer'      => $current_lang === 'ro' ? 'Transfer' : 'Transfer',
    'card_number'        => $current_lang === 'ro' ? 'Număr card' : 'Card number',
    'expiry'             => $current_lang === 'ro' ? 'Expirare' : 'Expiry',
    'cardholder'         => $current_lang === 'ro' ? 'Titular card' : 'Cardholder',
    'pay_now'            => $current_lang === 'ro' ? 'Plătește acum' : 'Pay now',
    'processing'         => $current_lang === 'ro' ? 'Procesare 3D Secure...' : '3D Secure processing...',
    'success'            => $current_lang === 'ro' ? 'Plată confirmată!' : 'Payment confirmed!',

    // Features section
    'features'           => $current_lang === 'ro' ? 'Funcționalități' : 'Features',
    'why_netopia'        => $current_lang === 'ro' ? 'De ce Netopia?' : 'Why Netopia?',
    'all_banks'          => $current_lang === 'ro' ? 'Toate băncile' : 'All banks',
    'all_banks_desc'     => $current_lang === 'ro' ? 'Carduri emise de orice bancă din România sunt acceptate instant.' : 'Cards issued by any Romanian bank are accepted instantly.',
    'installments_title' => $current_lang === 'ro' ? 'Rate fără dobândă' : 'Interest-free installments',
    'installments_desc'  => $current_lang === 'ro' ? 'Oferă clienților posibilitatea de a plăti în rate, de la 2 la 24 luni.' : 'Give customers the option to pay in installments, from 2 to 24 months.',
    '3d_secure'          => '3D Secure 2.0',
    '3d_secure_desc'     => $current_lang === 'ro' ? 'Autentificare puternică a clientului conform PSD2.' : 'Strong customer authentication compliant with PSD2.',
    'instant_confirm'    => $current_lang === 'ro' ? 'Confirmare instant' : 'Instant confirmation',
    'instant_desc'       => $current_lang === 'ro' ? 'Află imediat dacă plata a fost aprobată sau nu.' : 'Know immediately if the payment was approved or not.',

    // CTA section
    'final_title'        => $current_lang === 'ro' ? 'Gata pentru piața din România?' : 'Ready for the Romanian market?',
    'final_desc'         => $current_lang === 'ro' ? 'Conectează Netopia și acceptă plăți de la orice card românesc.' : 'Connect Netopia and accept payments from any Romanian card.',
    'cta_start'          => $current_lang === 'ro' ? 'Începe acum' : 'Start now',
    'cta_contact'        => $current_lang === 'ro' ? 'Contactează-ne' : 'Contact us',

    // Hero extra
    'hero_title_ro'      => $current_lang === 'ro' ? 'românești' : 'Romanian',
    'hero_desc_full'     => $current_lang === 'ro' ? '<strong class="text-white">Netopia</strong> - procesatorul de plăți de încredere, cunoscut de milioane de români. Carduri, transferuri bancare, rate. <strong class="text-white">Conversii mai mari</strong> datorită familiarității.' : '<strong class="text-white">Netopia</strong> - the trusted payment processor, known by millions of Romanians. Cards, bank transfers, installments. <strong class="text-white">Higher conversions</strong> due to familiarity.',
    'cta_view_methods'   => $current_lang === 'ro' ? 'Vezi metodele de plată' : 'View payment methods',
    'stat_years'         => $current_lang === 'ro' ? 'Ani experiență' : 'Years experience',
    'stat_currency'      => $current_lang === 'ro' ? 'Valută nativă' : 'Native currency',
    'stat_max_security'  => $current_lang === 'ro' ? 'Securitate maximă' : 'Maximum security',

    // Checkout mockup
    'secured'            => $current_lang === 'ro' ? 'Securizat' : 'Secured',
    'total_pay'          => $current_lang === 'ro' ? 'Total de plată' : 'Total to pay',
    'tickets'            => $current_lang === 'ro' ? 'bilete' : 'tickets',
    'step_details'       => $current_lang === 'ro' ? 'Detalii' : 'Details',
    'step_confirmed'     => $current_lang === 'ro' ? 'Confirmat' : 'Confirmed',
    'card_number_label'  => $current_lang === 'ro' ? 'Număr card' : 'Card number',
    'expiry_label'       => $current_lang === 'ro' ? 'Expirare' : 'Expiry',
    'cvv_label'          => 'CVV',
    'verification_3ds'   => $current_lang === 'ro' ? 'Verificare 3D Secure' : '3D Secure verification',
    'verifying_bank'     => $current_lang === 'ro' ? 'Se verifică cu banca ta...' : 'Verifying with your bank...',
    'redirecting_bank'   => $current_lang === 'ro' ? 'Redirecționare către bancă...' : 'Redirecting to bank...',
    'payment_confirmed'  => $current_lang === 'ro' ? 'Plată Confirmată!' : 'Payment Confirmed!',
    'transaction'        => $current_lang === 'ro' ? 'Tranzacție' : 'Transaction',
    'years_on_market'    => $current_lang === 'ro' ? 'pe piața RO' : 'on RO market',
    'holder'             => $current_lang === 'ro' ? 'TITULAR' : 'HOLDER',
    'expiry_card'        => $current_lang === 'ro' ? 'EXPIRARE' : 'EXPIRY',

    // Payment methods section
    'payment_methods'    => $current_lang === 'ro' ? 'Metode de Plată' : 'Payment Methods',
    'all_ro_cards'       => $current_lang === 'ro' ? 'Toate cardurile' : 'All cards',
    'all_ro_cards_sub'   => $current_lang === 'ro' ? 'românești' : 'Romanian',
    'all_ro_cards_desc'  => $current_lang === 'ro' ? 'Visa, Mastercard, Maestro și cardurile locale ale băncilor românești. Plus transferuri bancare.' : 'Visa, Mastercard, Maestro and local Romanian bank cards. Plus bank transfers.',
    'visa_desc'          => $current_lang === 'ro' ? 'Credit, Debit, Electron. Toate cardurile Visa emise în România.' : 'Credit, Debit, Electron. All Visa cards issued in Romania.',
    'mastercard_desc'    => $current_lang === 'ro' ? 'Credit și Debit. Toate băncile românești partenere.' : 'Credit and Debit. All Romanian partner banks.',
    'maestro_desc'       => $current_lang === 'ro' ? 'Carduri de debit pentru plăți imediate din cont.' : 'Debit cards for immediate account payments.',
    'bank_transfer_title'=> $current_lang === 'ro' ? 'Transfer Bancar' : 'Bank Transfer',
    'bank_transfer_desc' => $current_lang === 'ro' ? 'Direct din contul bancar pentru clienții care preferă non-card.' : 'Directly from bank account for customers who prefer non-card.',
    'banks_issued'       => $current_lang === 'ro' ? 'Carduri emise de toate băncile românești majore' : 'Cards issued by all major Romanian banks',

    // 3D Secure section
    'security'           => $current_lang === 'ro' ? 'Securitate' : 'Security',
    '3d_mandatory'       => $current_lang === 'ro' ? 'obligatoriu' : 'mandatory',
    '3d_desc'            => $current_lang === 'ro' ? 'Fiecare tranzacție cu cardul trece prin verificarea 3D Secure. Banca clientului autentifică plata - protecție maximă pentru tine și clienții tăi.' : 'Every card transaction goes through 3D Secure verification. The customer\'s bank authenticates the payment - maximum protection for you and your customers.',
    'liability_protect'  => $current_lang === 'ro' ? 'Protecție Răspundere' : 'Liability Protection',
    'active'             => $current_lang === 'ro' ? 'Activă' : 'Active',
    'liability_desc'     => $current_lang === 'ro' ? 'Liability shift către bancă pentru tranzacțiile autentificate' : 'Liability shift to bank for authenticated transactions',
    'fraud_detect'       => $current_lang === 'ro' ? 'Detectare Fraudă' : 'Fraud Detection',
    'fraud_desc'         => $current_lang === 'ro' ? 'Monitorizare automată a tranzacțiilor suspecte' : 'Automatic monitoring of suspicious transactions',
    'pci_compliant'      => 'PCI DSS Compliant',
    'pci_desc'           => $current_lang === 'ro' ? 'Datele cardului nu ajung pe serverele tale' : 'Card data never reaches your servers',
    '3d_flow'            => $current_lang === 'ro' ? 'Flux 3D Secure' : '3D Secure Flow',
    '3d_auth_steps'      => $current_lang === 'ro' ? 'Autentificare în 3 pași' : 'Authentication in 3 steps',
    'step1_title'        => $current_lang === 'ro' ? 'Client introduce cardul' : 'Customer enters card',
    'step1_desc'         => $current_lang === 'ro' ? 'Pe pagina securizată Netopia' : 'On secured Netopia page',
    'step2_title'        => $current_lang === 'ro' ? 'Redirecționare către bancă' : 'Redirect to bank',
    'step2_desc'         => $current_lang === 'ro' ? 'Autentificare SMS/Token/App' : 'SMS/Token/App authentication',
    'step3_title'        => $current_lang === 'ro' ? 'Tranzacție confirmată' : 'Transaction confirmed',
    'step3_desc'         => $current_lang === 'ro' ? 'Webhook instant către sistemul tău' : 'Instant webhook to your system',

    // Transaction status section
    'txn_statuses'       => $current_lang === 'ro' ? 'Statusuri Tranzacție' : 'Transaction Statuses',
    'track_payments'     => $current_lang === 'ro' ? 'Urmărește' : 'Track',
    'every_payment'      => $current_lang === 'ro' ? 'fiecare plată' : 'every payment',
    'txn_desc'           => $current_lang === 'ro' ? 'Webhook-uri în timp real pentru toate schimbările de status. Știi imediat ce se întâmplă.' : 'Real-time webhooks for all status changes. Know immediately what happens.',
    'status_pending'     => $current_lang === 'ro' ? 'În Așteptare' : 'Pending',
    'status_pending_desc'=> $current_lang === 'ro' ? 'Plată inițiată, se așteaptă finalizarea' : 'Payment initiated, awaiting completion',
    'status_confirmed'   => $current_lang === 'ro' ? 'Confirmat' : 'Confirmed',
    'status_confirmed_desc'=> $current_lang === 'ro' ? 'Plată reușită, fonduri securizate' : 'Payment successful, funds secured',
    'status_cancelled'   => $current_lang === 'ro' ? 'Anulat' : 'Cancelled',
    'status_cancelled_desc'=> $current_lang === 'ro' ? 'Anulat de client sau timeout' : 'Cancelled by customer or timeout',
    'status_credited'    => $current_lang === 'ro' ? 'Creditat' : 'Credited',
    'status_credited_desc'=> $current_lang === 'ro' ? 'Rambursare procesată' : 'Refund processed',
    'code'               => $current_lang === 'ro' ? 'Cod' : 'Code',
    'webhook_note'       => $current_lang === 'ro' ? 'Notificări webhook în timp real pentru fiecare schimbare de status' : 'Real-time webhook notifications for every status change',

    // Use cases section
    'use_cases'          => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
    'perfect_for'        => $current_lang === 'ro' ? 'Perfect pentru' : 'Perfect for',
    'ro_market'          => $current_lang === 'ro' ? 'piața românească' : 'Romanian market',
    'ro_events'          => $current_lang === 'ro' ? 'Evenimente Românești' : 'Romanian Events',
    'ro_events_desc'     => $current_lang === 'ro' ? 'Conversii mai mari când clienții văd Netopia - brand local de încredere pe care îl cunosc.' : 'Higher conversions when customers see Netopia - trusted local brand they know.',
    'local_festivals'    => $current_lang === 'ro' ? 'Festivaluri Locale' : 'Local Festivals',
    'local_festivals_desc'=> $current_lang === 'ro' ? 'Procesează mii de tranzacții în perioadele de vârf. Infrastructura Netopia scalează automat.' : 'Process thousands of transactions in peak periods. Netopia infrastructure scales automatically.',
    'corporate_ro'       => $current_lang === 'ro' ? 'Corporate România' : 'Corporate Romania',
    'corporate_ro_desc'  => $current_lang === 'ro' ? 'Transferuri bancare pentru companiile românești care preferă plăți directe.' : 'Bank transfers for Romanian companies that prefer direct payments.',
    'ro_artists'         => $current_lang === 'ro' ? 'Artiști Români' : 'Romanian Artists',
    'ro_artists_desc'    => $current_lang === 'ro' ? 'Procesare familiară pentru fanii care cumpără bilete la concertele artiștilor locali.' : 'Familiar processing for fans buying tickets to local artists\' concerts.',
    'multi_currency'     => $current_lang === 'ro' ? 'Multi-Valută' : 'Multi-Currency',
    'multi_currency_desc'=> $current_lang === 'ro' ? 'Afișează prețuri în EUR cu conversie automată la RON în checkout.' : 'Display prices in EUR with automatic conversion to RON at checkout.',
    'installment_pay'    => $current_lang === 'ro' ? 'Plăți în Rate' : 'Installment Payments',
    'installment_desc'   => $current_lang === 'ro' ? 'Pachete VIP accesibile prin parteneriatele Netopia cu băncile românești.' : 'Accessible VIP packages through Netopia partnerships with Romanian banks.',

    // Testimonial section
    'testimonial_text'   => $current_lang === 'ro' ? 'Când am trecut la Netopia, <span class="text-gradient-netopia font-semibold">rata de abandon</span> la checkout a scăzut cu 28%. Românii au încredere în brand - îl văd peste tot online.' : 'When we switched to Netopia, <span class="text-gradient-netopia font-semibold">the abandonment rate</span> at checkout dropped by 28%. Romanians trust the brand - they see it everywhere online.',
    'testimonial_role'   => $current_lang === 'ro' ? 'Event Manager, SAGA Festival' : 'Event Manager, SAGA Festival',

    // Final CTA
    'connect_title'      => $current_lang === 'ro' ? 'Conectează' : 'Connect',
    'final_cta_desc'     => $current_lang === 'ro' ? 'Procesatorul de încredere pentru milioane de români. Carduri locale, 3D Secure, decontare rapidă.' : 'The trusted processor for millions of Romanians. Local cards, 3D Secure, fast settlement.',
    'questions_contact'  => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
    'final_tagline'      => $current_lang === 'ro' ? '15+ ani experiență • 3D Secure obligatoriu • Decontare 1-3 zile' : '15+ years experience • 3D Secure mandatory • Settlement 1-3 days',
];
?>

<style>
  ::selection { background: #00A99D; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-netopia { background: linear-gradient(135deg, #00A99D 0%, #4DD4C3 50%, #00A99D 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(0, 169, 157, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Romanian credit card */
  .ro-card {
    background: linear-gradient(135deg, #002B7F 0%, #1a3a8f 50%, #002B7F 100%);
    border-radius: 16px;
    position: relative;
    overflow: hidden;
  }
  .ro-card::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.1) 50%, transparent 60%);
    animation: cardShine 3s ease-in-out infinite;
  }
  .ro-card-chip {
    width: 45px;
    height: 35px;
    background: linear-gradient(135deg, #d4af37 0%, #f9e076 50%, #d4af37 100%);
    border-radius: 6px;
  }

  /* Trust badge */
  .trust-badge {
    background: linear-gradient(135deg, rgba(0, 169, 157, 0.1), rgba(0, 169, 157, 0.05));
    border: 1px solid rgba(0, 169, 157, 0.3);
  }

  /* 3D Secure badge */
  .secure-3d {
    background: linear-gradient(135deg, #002B7F, #1a3a8f);
    position: relative;
  }
  .secure-3d::after {
    content: '3DS';
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 10px;
    font-weight: bold;
    color: white;
    background: #CE1126;
    padding: 2px 6px;
    border-radius: 4px;
  }

  /* Status badges */
  .status-pending { background: rgba(245, 158, 11, 0.2); color: #f59e0b; }
  .status-confirmed { background: rgba(0, 169, 157, 0.2); color: #00A99D; }
  .status-cancelled { background: rgba(239, 68, 68, 0.2); color: #ef4444; }
  .status-credited { background: rgba(139, 92, 246, 0.2); color: #8b5cf6; }

  /* Redirect flow arrow */
  .redirect-arrow {
    position: relative;
  }
  .redirect-arrow::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 100%;
    width: 40px;
    height: 2px;
    background: linear-gradient(90deg, #00A99D, transparent);
    animation: redirectFlow 2s ease-in-out infinite;
  }

  /* Romanian flag stripe */
  .ro-flag-stripe {
    background: linear-gradient(90deg, #002B7F 33%, #FCD116 33%, #FCD116 66%, #CE1126 66%);
    height: 4px;
  }

  /* Bank logos placeholder */
  .bank-logo {
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
  }

  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }
  @keyframes cardShine {
    0% { transform: translateX(-100%) rotate(45deg); }
    100% { transform: translateX(100%) rotate(45deg); }
  }
  @keyframes redirectFlow {
    0% { transform: translateX(0); }
    50% { transform: translateX(10px); }
    100% { transform: translateX(0); }
  }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #002B7F, #FCD116, #CE1126);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-netopia-teal/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-romania-blue/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">🇷🇴</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">💳</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">🔒</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-netopia-teal/10 border border-netopia-teal/20 mb-6">
            <span class="text-xl">🇷🇴</span>
            <span class="text-netopia-teal text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title_1'] ); ?><br><span class="text-gradient-netopia"><?php echo esc_html( $t['hero_title_ro'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            <?php echo $t['hero_desc_full']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-netopia-teal to-netopia-light text-white hover:scale-105 hover:shadow-glow-netopia transition-all duration-300">
              <?php echo esc_html( $t['cta_connect'] ); ?>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#metode" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              <?php echo esc_html( $t['cta_view_methods'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-display font-bold text-netopia-teal">15+</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_years'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-white">RON</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_currency'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-brand-green">3DS</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_max_security'] ); ?></div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Romanian Card + Checkout -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            step: 1,
            processing: false,
            confirmed: false
          }" x-init="setInterval(() => {
            if (step === 1) { step = 2; }
            else if (step === 2) { processing = true; setTimeout(() => { processing = false; confirmed = true; step = 3; }, 2000); }
            else { step = 1; confirmed = false; }
          }, 4000)">

            <!-- Main Checkout Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-3xl p-6 border border-netopia-teal/20 shadow-2xl">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-netopia-teal/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-netopia-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                  </div>
                  <div>
                    <div class="text-white font-semibold">Netopia Payments</div>
                    <div class="text-white/40 text-xs"><?php echo esc_html( $t['secure_payment'] ); ?></div>
                  </div>
                </div>
                <div class="trust-badge px-3 py-1 rounded-full flex items-center gap-1">
                  <svg class="w-4 h-4 text-netopia-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                  <span class="text-netopia-teal text-xs font-medium"><?php echo esc_html( $t['secured'] ); ?></span>
                </div>
              </div>

              <!-- Romanian flag stripe -->
              <div class="ro-flag-stripe rounded-full mb-6"></div>

              <!-- Amount -->
              <div class="bg-dark-900/50 rounded-xl p-4 mb-6">
                <div class="flex items-center justify-between">
                  <div>
                    <div class="text-white/40 text-xs"><?php echo esc_html( $t['total_pay'] ); ?></div>
                    <div class="text-3xl font-display font-bold text-white">175 <span class="text-lg text-netopia-teal">RON</span></div>
                  </div>
                  <div class="text-right">
                    <div class="text-white/40 text-xs">2 <?php echo esc_html( $t['tickets'] ); ?></div>
                    <div class="text-white/60 text-sm">Summer Fest 2025</div>
                  </div>
                </div>
              </div>

              <!-- Step Indicator -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-2">
                  <div :class="step >= 1 ? 'bg-netopia-teal text-white' : 'bg-dark-700 text-white/40'" class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold transition-all">1</div>
                  <span :class="step >= 1 ? 'text-white' : 'text-white/40'" class="text-sm"><?php echo esc_html( $t['step_details'] ); ?></span>
                </div>
                <div class="flex-1 h-0.5 mx-2" :class="step >= 2 ? 'bg-netopia-teal' : 'bg-dark-700'"></div>
                <div class="flex items-center gap-2">
                  <div :class="step >= 2 ? 'bg-netopia-teal text-white' : 'bg-dark-700 text-white/40'" class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold transition-all">2</div>
                  <span :class="step >= 2 ? 'text-white' : 'text-white/40'" class="text-sm">3D Secure</span>
                </div>
                <div class="flex-1 h-0.5 mx-2" :class="step >= 3 ? 'bg-netopia-teal' : 'bg-dark-700'"></div>
                <div class="flex items-center gap-2">
                  <div :class="step >= 3 ? 'bg-brand-green text-white' : 'bg-dark-700 text-white/40'" class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold transition-all">
                    <span x-show="step < 3">3</span>
                    <svg x-show="step >= 3" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </div>
                  <span :class="step >= 3 ? 'text-brand-green' : 'text-white/40'" class="text-sm"><?php echo esc_html( $t['step_confirmed'] ); ?></span>
                </div>
              </div>

              <!-- Step 1: Card Details -->
              <div x-show="step === 1" x-transition class="space-y-4">
                <div class="bg-dark-900/50 rounded-xl p-4 border border-white/10">
                  <div class="text-white/40 text-xs uppercase tracking-wider mb-2"><?php echo esc_html( $t['card_number_label'] ); ?></div>
                  <div class="flex items-center gap-3">
                    <span class="text-white font-mono">4532 •••• •••• 1234</span>
                    <div class="ml-auto flex items-center gap-2">
                      <svg class="w-8 h-5" viewBox="0 0 32 20"><rect fill="#1A1F71" width="32" height="20" rx="2"/><text x="5" y="14" fill="white" font-size="8" font-weight="bold">VISA</text></svg>
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                  <div class="bg-dark-900/50 rounded-xl p-4 border border-white/10">
                    <div class="text-white/40 text-xs uppercase tracking-wider mb-2"><?php echo esc_html( $t['expiry_label'] ); ?></div>
                    <span class="text-white font-mono">12/28</span>
                  </div>
                  <div class="bg-dark-900/50 rounded-xl p-4 border border-white/10">
                    <div class="text-white/40 text-xs uppercase tracking-wider mb-2"><?php echo esc_html( $t['cvv_label'] ); ?></div>
                    <span class="text-white font-mono">•••</span>
                  </div>
                </div>
              </div>

              <!-- Step 2: 3D Secure -->
              <div x-show="step === 2" x-transition class="text-center py-8">
                <div class="secure-3d inline-flex items-center gap-3 px-6 py-3 rounded-xl text-white mb-4">
                  <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  <span class="font-semibold"><?php echo esc_html( $t['verification_3ds'] ); ?></span>
                </div>
                <div x-show="processing" class="flex items-center justify-center gap-2 text-white/60">
                  <svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                  <span><?php echo esc_html( $t['verifying_bank'] ); ?></span>
                </div>
                <div x-show="!processing" class="text-white/60 text-sm"><?php echo esc_html( $t['redirecting_bank'] ); ?></div>
              </div>

              <!-- Step 3: Confirmed -->
              <div x-show="step === 3" x-transition class="text-center py-8">
                <div class="w-16 h-16 rounded-full bg-brand-green/20 flex items-center justify-center mx-auto mb-4">
                  <svg class="w-8 h-8 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="text-brand-green font-semibold text-lg mb-2"><?php echo esc_html( $t['payment_confirmed'] ); ?></div>
                <div class="text-white/40 text-sm"><?php echo esc_html( $t['transaction'] ); ?> #TXN-2025-001234</div>
              </div>

              <!-- Trust badges -->
              <div class="flex items-center justify-center gap-6 mt-6 pt-4 border-t border-white/10">
                <div class="flex items-center gap-1 text-white/30 text-xs">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                  PCI DSS
                </div>
                <div class="flex items-center gap-1 text-white/30 text-xs">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  3D Secure
                </div>
                <div class="flex items-center gap-1 text-white/30 text-xs">
                  <span class="text-sm">🇷🇴</span>
                  Netopia
                </div>
              </div>
            </div>

            <!-- Floating Romanian Card -->
            <div class="absolute -top-8 -right-8 w-56 ro-card p-4 shadow-card-ro animate-float z-10">
              <div class="flex justify-between items-start mb-8">
                <div class="ro-card-chip"></div>
                <svg class="w-8 h-8 text-white/30" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/><path d="M9.5 16.5l7-4.5-7-4.5z"/></svg>
              </div>
              <div class="text-white/70 font-mono text-sm tracking-wider mb-3">•••• •••• •••• 1234</div>
              <div class="flex justify-between items-end">
                <div>
                  <div class="text-white/40 text-[10px]"><?php echo esc_html( $t['holder'] ); ?></div>
                  <div class="text-white/80 text-xs">ION POPESCU</div>
                </div>
                <div class="text-right">
                  <div class="text-white/40 text-[10px]"><?php echo esc_html( $t['expiry_card'] ); ?></div>
                  <div class="text-white/80 text-xs">12/28</div>
                </div>
              </div>
            </div>

            <!-- Floating Trust Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-netopia-teal/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-netopia-teal/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-netopia-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div>
                  <div class="text-netopia-teal text-sm font-medium">15+</div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['years_on_market'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAYMENT METHODS ==================== -->
  <section class="py-24 relative overflow-hidden" id="metode">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-netopia-teal text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['payment_methods'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['all_ro_cards'] ); ?><br><span class="text-gradient-netopia"><?php echo esc_html( $t['all_ro_cards_sub'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['all_ro_cards_desc'] ); ?></p>
      </div>

      <!-- Payment Methods Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Visa -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-[#1A1F71]/20 flex items-center justify-center mb-4">
            <svg class="w-10 h-6" viewBox="0 0 48 16"><rect fill="#1A1F71" width="48" height="16" rx="2"/><text x="8" y="12" fill="white" font-size="10" font-weight="bold">VISA</text></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Visa</h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['visa_desc'] ); ?></p>
        </div>

        <!-- Mastercard -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#EB001B]/20 to-[#F79E1B]/20 flex items-center justify-center mb-4">
            <svg class="w-10 h-10" viewBox="0 0 48 32"><circle cx="16" cy="16" r="12" fill="#EB001B"/><circle cx="32" cy="16" r="12" fill="#F79E1B"/><path d="M24 6c4 3 6.5 8 6.5 10s-2.5 7-6.5 10c-4-3-6.5-8-6.5-10s2.5-7 6.5-10z" fill="#FF5F00"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Mastercard</h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['mastercard_desc'] ); ?></p>
        </div>

        <!-- Maestro -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#0066A1]/20 to-[#CC0000]/20 flex items-center justify-center mb-4">
            <svg class="w-10 h-10" viewBox="0 0 48 32"><circle cx="16" cy="16" r="12" fill="#0066A1"/><circle cx="32" cy="16" r="12" fill="#CC0000"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Maestro</h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['maestro_desc'] ); ?></p>
        </div>

        <!-- Bank Transfer -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal reveal-delay-3">
          <div class="w-14 h-14 rounded-2xl bg-netopia-teal/20 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-netopia-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['bank_transfer_title'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['bank_transfer_desc'] ); ?></p>
        </div>
      </div>

      <!-- Romanian Banks -->
      <div class="mt-12 reveal">
        <div class="text-center mb-6">
          <span class="text-white/40 text-sm"><?php echo esc_html( $t['banks_issued'] ); ?></span>
        </div>
        <div class="flex flex-wrap justify-center gap-4">
          <div class="bank-logo px-4 py-2 rounded-lg text-white/50 text-sm">BCR</div>
          <div class="bank-logo px-4 py-2 rounded-lg text-white/50 text-sm">BRD</div>
          <div class="bank-logo px-4 py-2 rounded-lg text-white/50 text-sm">ING</div>
          <div class="bank-logo px-4 py-2 rounded-lg text-white/50 text-sm">Raiffeisen</div>
          <div class="bank-logo px-4 py-2 rounded-lg text-white/50 text-sm">UniCredit</div>
          <div class="bank-logo px-4 py-2 rounded-lg text-white/50 text-sm">CEC Bank</div>
          <div class="bank-logo px-4 py-2 rounded-lg text-white/50 text-sm">Banca Transilvania</div>
          <div class="bank-logo px-4 py-2 rounded-lg text-white/50 text-sm">Alpha Bank</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== 3D SECURE ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-brand-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['security'] ); ?></span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">3D Secure<br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['3d_mandatory'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['3d_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-brand-green/20">
              <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0 animate-secure-pulse">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </div>
              <div>
                <div class="flex items-center gap-2">
                  <span class="text-white font-semibold"><?php echo esc_html( $t['liability_protect'] ); ?></span>
                  <span class="px-2 py-0.5 rounded-full bg-brand-green/20 text-brand-green text-xs"><?php echo esc_html( $t['active'] ); ?></span>
                </div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['liability_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-netopia-teal/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-netopia-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/></svg>
              </div>
              <div>
                <span class="text-white font-semibold"><?php echo esc_html( $t['fraud_detect'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['fraud_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </div>
              <div>
                <span class="text-white font-semibold"><?php echo esc_html( $t['pci_compliant'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['pci_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - 3D Secure Flow -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-10 h-10 rounded-xl bg-romania-blue/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold"><?php echo esc_html( $t['3d_flow'] ); ?></div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['3d_auth_steps'] ); ?></div>
              </div>
            </div>

            <div class="space-y-4">
              <!-- Step 1 -->
              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <div class="w-10 h-10 rounded-full bg-netopia-teal/20 flex items-center justify-center text-netopia-teal font-bold">1</div>
                <div class="flex-1">
                  <div class="text-white font-medium"><?php echo esc_html( $t['step1_title'] ); ?></div>
                  <div class="text-white/40 text-sm"><?php echo esc_html( $t['step1_desc'] ); ?></div>
                </div>
                <svg class="w-5 h-5 text-netopia-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>

              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <!-- Step 2 -->
              <div class="flex items-center gap-4 p-3 rounded-lg bg-romania-blue/10 border border-romania-blue/30">
                <div class="w-10 h-10 rounded-full bg-romania-blue/20 flex items-center justify-center text-white font-bold">2</div>
                <div class="flex-1">
                  <div class="text-white font-medium"><?php echo esc_html( $t['step2_title'] ); ?></div>
                  <div class="text-white/40 text-sm"><?php echo esc_html( $t['step2_desc'] ); ?></div>
                </div>
                <span class="px-2 py-1 rounded bg-romania-blue text-white text-xs font-bold">3DS</span>
              </div>

              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <!-- Step 3 -->
              <div class="flex items-center gap-4 p-3 rounded-lg bg-brand-green/10 border border-brand-green/30">
                <div class="w-10 h-10 rounded-full bg-brand-green/20 flex items-center justify-center text-brand-green font-bold">✓</div>
                <div class="flex-1">
                  <div class="text-brand-green font-medium"><?php echo esc_html( $t['step3_title'] ); ?></div>
                  <div class="text-white/40 text-sm"><?php echo esc_html( $t['step3_desc'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TRANSACTION STATUS ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-netopia-teal text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['txn_statuses'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['track_payments'] ); ?><br><span class="text-gradient-netopia"><?php echo esc_html( $t['every_payment'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['txn_desc'] ); ?></p>
      </div>

      <!-- Status Flow -->
      <div class="max-w-4xl mx-auto reveal">
        <div class="grid md:grid-cols-4 gap-4">
          <!-- Pending -->
          <div class="bg-dark-800/50 rounded-2xl p-6 border border-white/10 text-center">
            <div class="w-14 h-14 rounded-2xl bg-brand-amber/20 flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <span class="status-pending px-3 py-1 rounded-full text-xs font-medium"><?php echo esc_html( $t['status_pending'] ); ?></span>
            <div class="mt-3 text-white/50 text-sm"><?php echo esc_html( $t['code'] ); ?>: 0</div>
            <p class="text-white/40 text-xs mt-2"><?php echo esc_html( $t['status_pending_desc'] ); ?></p>
          </div>

          <!-- Confirmed -->
          <div class="bg-dark-800/50 rounded-2xl p-6 border border-netopia-teal/30 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-netopia-teal/5 to-transparent"></div>
            <div class="relative">
              <div class="w-14 h-14 rounded-2xl bg-netopia-teal/20 flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7 text-netopia-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="status-confirmed px-3 py-1 rounded-full text-xs font-medium"><?php echo esc_html( $t['status_confirmed'] ); ?></span>
              <div class="mt-3 text-white/50 text-sm"><?php echo esc_html( $t['code'] ); ?>: 1</div>
              <p class="text-white/40 text-xs mt-2"><?php echo esc_html( $t['status_confirmed_desc'] ); ?></p>
            </div>
          </div>

          <!-- Cancelled -->
          <div class="bg-dark-800/50 rounded-2xl p-6 border border-white/10 text-center">
            <div class="w-14 h-14 rounded-2xl bg-brand-rose/20 flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </div>
            <span class="status-cancelled px-3 py-1 rounded-full text-xs font-medium"><?php echo esc_html( $t['status_cancelled'] ); ?></span>
            <div class="mt-3 text-white/50 text-sm"><?php echo esc_html( $t['code'] ); ?>: 4</div>
            <p class="text-white/40 text-xs mt-2"><?php echo esc_html( $t['status_cancelled_desc'] ); ?></p>
          </div>

          <!-- Credited -->
          <div class="bg-dark-800/50 rounded-2xl p-6 border border-white/10 text-center">
            <div class="w-14 h-14 rounded-2xl bg-brand-violet/20 flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/></svg>
            </div>
            <span class="status-credited px-3 py-1 rounded-full text-xs font-medium"><?php echo esc_html( $t['status_credited'] ); ?></span>
            <div class="mt-3 text-white/50 text-sm"><?php echo esc_html( $t['code'] ); ?>: 5</div>
            <p class="text-white/40 text-xs mt-2"><?php echo esc_html( $t['status_credited_desc'] ); ?></p>
          </div>
        </div>

        <!-- Webhook note -->
        <div class="mt-8 text-center">
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-dark-800/50 border border-white/10">
            <svg class="w-4 h-4 text-netopia-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
            <span class="text-white/60 text-sm"><?php echo esc_html( $t['webhook_note'] ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['use_cases'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['perfect_for'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['ro_market'] ); ?></span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-netopia-teal/20 to-netopia-mint/20 flex items-center justify-center mb-4"><span class="text-2xl">🎪</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['ro_events'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['ro_events_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10 flex items-center justify-center mb-4"><span class="text-2xl">🎸</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['local_festivals'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['local_festivals_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-romania-blue/20 to-romania-blue/10 flex items-center justify-center mb-4"><span class="text-2xl">🏢</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['corporate_ro'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['corporate_ro_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10 flex items-center justify-center mb-4"><span class="text-2xl">🎤</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['ro_artists'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['ro_artists_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/10 flex items-center justify-center mb-4"><span class="text-2xl">💱</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['multi_currency'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['multi_currency_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-netopia-teal/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green/20 to-brand-green/10 flex items-center justify-center mb-4"><span class="text-2xl">💳</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['installment_pay'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['installment_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-netopia-teal/10 to-netopia-mint/10 rounded-3xl p-8 md:p-12 border border-netopia-teal/20">
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
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-netopia-teal to-netopia-mint"></div>
            <div>
              <div class="font-semibold text-white">Andrei M.</div>
              <div class="text-white/50"><?php echo esc_html( $t['testimonial_role'] ); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-netopia-teal/20 via-transparent to-romania-blue/20"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(0,169,157,0.3) 0%, rgba(0,43,127,0.2) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">🇷🇴</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['connect_title'] ); ?><br><span class="text-gradient-netopia">Netopia</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['final_cta_desc'] ); ?></p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-netopia-teal to-netopia-light text-white hover:scale-105 hover:shadow-glow-netopia transition-all duration-300">
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
