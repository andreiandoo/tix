<?php
/**
 * Template Name: EuPlatesc
 * Description: Landing page for EuPlatesc payment gateway integration
 */

get_header();

// Language detection (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Translations array
$t = [
    // Hero section
    'badge'              => $current_lang === 'ro' ? 'Gateway Local Romania' : 'Local Romanian Gateway',
    'hero_desc'          => $current_lang === 'ro' ? 'Gateway de plati <strong class="text-white">de incredere in Romania</strong>. Comisioane competitive, procesare fiabila, rate de aprobare excelente pentru carduri romanesti.' : 'Trusted payment gateway <strong class="text-white">in Romania</strong>. Competitive fees, reliable processing, excellent approval rates for Romanian cards.',
    'cta_activate'       => $current_lang === 'ro' ? 'Activeaza EuPlatesc' : 'Activate EuPlatesc',
    'cta_why'            => $current_lang === 'ro' ? 'De ce EuPlatesc?' : 'Why EuPlatesc?',
    'we_accept'          => $current_lang === 'ro' ? 'Acceptam:' : 'We accept:',
    'card_number'        => $current_lang === 'ro' ? 'Numar Card' : 'Card Number',
    'holder'             => $current_lang === 'ro' ? 'Titular' : 'Holder',
    'exp'                => 'Exp',
    'transaction'        => $current_lang === 'ro' ? 'Tranzactie' : 'Transaction',
    'total'              => 'Total',
    'card'               => $current_lang === 'ro' ? 'Card' : 'Card',
    'processing'         => $current_lang === 'ro' ? 'Procesare' : 'Processing',
    'approved'           => $current_lang === 'ro' ? 'Aprobat' : 'Approved',
    'tx_approved'        => $current_lang === 'ro' ? '✓ Tranzactie Aprobata' : '✓ Transaction Approved',
    'tx_processing'      => $current_lang === 'ro' ? 'Se proceseaza...' : 'Processing...',
    'local_currency'     => $current_lang === 'ro' ? 'Moneda Locala' : 'Local Currency',
    'no_conversion'      => $current_lang === 'ro' ? 'Fara conversie' : 'No conversion',

    // Advantages section
    'why_euplatesc'      => $current_lang === 'ro' ? 'De ce EuPlatesc?' : 'Why EuPlatesc?',
    'adv_title_1'        => $current_lang === 'ro' ? 'Gateway local,' : 'Local gateway,',
    'adv_title_2'        => $current_lang === 'ro' ? 'avantaje reale' : 'real benefits',
    'adv_desc'           => $current_lang === 'ro' ? 'Optimizat pentru piata romaneasca. Rate de aprobare mai mari, costuri mai mici, incredere locala.' : 'Optimized for the Romanian market. Higher approval rates, lower costs, local trust.',
    'trust_brand'        => $current_lang === 'ro' ? 'Brand de Incredere' : 'Trusted Brand',
    'trust_desc'         => $current_lang === 'ro' ? 'Romanii recunosc si au incredere in EuPlatesc. Familiaritatea reduce abandonarea cosului.' : 'Romanians recognize and trust EuPlatesc. Familiarity reduces cart abandonment.',
    'approval_rates'     => $current_lang === 'ro' ? 'Rate Aprobare Mari' : 'High Approval Rates',
    'approval_desc'      => $current_lang === 'ro' ? 'Procesare locala inseamna rate de aprobare mai mari pentru cardurile romanesti domestice.' : 'Local processing means higher approval rates for domestic Romanian cards.',
    'competitive_fees'   => $current_lang === 'ro' ? 'Comisioane Competitive' : 'Competitive Fees',
    'competitive_desc'   => $current_lang === 'ro' ? 'Structura transparenta, reduceri de volum. Economii semnificative pentru vanzari mari.' : 'Transparent structure, volume discounts. Significant savings for large sales.',
    'ron_settlement'     => $current_lang === 'ro' ? 'Decontare in RON' : 'RON Settlement',
    'ron_desc'           => $current_lang === 'ro' ? 'Fonduri direct in contul bancar romanesc. Fara comisioane de conversie valutara.' : 'Funds directly into Romanian bank account. No currency conversion fees.',
    '3d_mandatory'       => $current_lang === 'ro' ? '3D Secure Obligatoriu' : '3D Secure Mandatory',
    '3d_desc'            => $current_lang === 'ro' ? 'Autentificare bancara pentru fiecare tranzactie. Transfer de raspundere, risc redus.' : 'Bank authentication for every transaction. Liability shift, reduced risk.',
    'simple_integration' => $current_lang === 'ro' ? 'Integrare Simpla' : 'Simple Integration',
    'simple_desc'        => $current_lang === 'ro' ? 'API documentat, suport responsiv. Majoritatea comerciantilor finalizeaza in zile.' : 'Documented API, responsive support. Most merchants complete in days.',

    // Payment Flow section
    'payment_flow'       => $current_lang === 'ro' ? 'Flux de Plata' : 'Payment Flow',
    'secure_simple'      => $current_lang === 'ro' ? 'simplu' : 'simple',
    'flow_desc'          => $current_lang === 'ro' ? 'Flux bazat pe redirectionare. Conformitate PCI fara sa gestionezi date de card.' : 'Redirect-based flow. PCI compliance without handling card data.',
    'selection'          => $current_lang === 'ro' ? 'Selectare' : 'Selection',
    'selection_desc'     => $current_lang === 'ro' ? 'Client alege EuPlatesc' : 'Customer selects EuPlatesc',
    'redirect'           => $current_lang === 'ro' ? 'Redirectionare' : 'Redirect',
    'redirect_desc'      => $current_lang === 'ro' ? 'Pagina securizata EuPlatesc' : 'Secure EuPlatesc page',
    'bank_verify'        => $current_lang === 'ro' ? 'Verificare banca' : 'Bank verification',
    'approval'           => $current_lang === 'ro' ? 'Aprobare' : 'Approval',
    'tx_processed'       => $current_lang === 'ro' ? 'Tranzactie procesata' : 'Transaction processed',
    'callback'           => 'Callback',
    'webhook_notify'     => $current_lang === 'ro' ? 'Webhook notificare' : 'Webhook notification',
    'confirmation'       => $current_lang === 'ro' ? 'Confirmare' : 'Confirmation',
    'ticket_issued'      => $current_lang === 'ro' ? 'Bilet emis' : 'Ticket issued',
    'pci_compliance'     => $current_lang === 'ro' ? 'Conformitate PCI DSS' : 'PCI DSS Compliance',
    'pci_desc'           => $current_lang === 'ro' ? 'Serverele tale nu gestioneaza niciodata date brute de card. EuPlatesc se ocupa de tot.' : 'Your servers never handle raw card data. EuPlatesc handles everything.',

    // Settlement section
    'settlement'         => $current_lang === 'ro' ? 'Decontare' : 'Settlement',
    'funds_title_1'      => $current_lang === 'ro' ? 'Fonduri' : 'Predictable',
    'funds_title_2'      => $current_lang === 'ro' ? 'predictibile' : 'funds',
    'settlement_desc'    => $current_lang === 'ro' ? 'Decontare regulata in contul tau bancar romanesc. Rapoarte clare pentru reconciliere usoara.' : 'Regular settlement to your Romanian bank account. Clear reports for easy reconciliation.',
    'regular_schedule'   => $current_lang === 'ro' ? 'Program Regulat' : 'Regular Schedule',
    'schedule_desc'      => $current_lang === 'ro' ? 'Transferuri conform acordului de comerciant' : 'Transfers according to merchant agreement',
    'detailed_reports'   => $current_lang === 'ro' ? 'Rapoarte Detaliate' : 'Detailed Reports',
    'reports_desc'       => $current_lang === 'ro' ? 'Detalii la nivel de tranzactie pentru reconciliere' : 'Transaction-level details for reconciliation',
    'ro_bank_account'    => $current_lang === 'ro' ? 'Cont Bancar Romanesc' : 'Romanian Bank Account',
    'ro_bank_desc'       => $current_lang === 'ro' ? 'Direct in RON, fara conversie valutara' : 'Direct in RON, no currency conversion',
    'settlement_report'  => $current_lang === 'ro' ? 'Raport Decontare' : 'Settlement Report',
    'transferred'        => $current_lang === 'ro' ? 'Transferat' : 'Transferred',
    'transactions'       => $current_lang === 'ro' ? 'Tranzactii' : 'Transactions',
    'total_settled'      => $current_lang === 'ro' ? 'Total Decontat' : 'Total Settled',
    'last_transactions'  => $current_lang === 'ro' ? 'Ultimele tranzactii' : 'Last transactions',
    'approved_status'    => $current_lang === 'ro' ? 'Aprobat' : 'Approved',

    // Use Cases section
    'use_cases'          => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
    'perfect_for'        => $current_lang === 'ro' ? 'Perfect pentru' : 'Perfect for',
    'romanian_market'    => $current_lang === 'ro' ? 'piata romaneasca' : 'the Romanian market',
    'concert_halls'      => $current_lang === 'ro' ? 'Sali de Concert' : 'Concert Halls',
    'concert_desc'       => $current_lang === 'ro' ? 'Rate de aprobare excelente pentru detinatorii de carduri romani. Procesare locala optimizata.' : 'Excellent approval rates for Romanian cardholders. Optimized local processing.',
    'festivals'          => $current_lang === 'ro' ? 'Festivaluri' : 'Festivals',
    'festivals_desc'     => $current_lang === 'ro' ? 'Gestioneaza perioade de vanzari intense. Infrastructura care sustine volume mari.' : 'Handle intense sales periods. Infrastructure that supports high volumes.',
    'theater_culture'    => $current_lang === 'ro' ? 'Teatru & Cultura' : 'Theater & Culture',
    'theater_desc'       => $current_lang === 'ro' ? 'Preturi simple pentru institutii culturale. Procesare fiabila fara complexitate.' : 'Simple pricing for cultural institutions. Reliable processing without complexity.',
    'local_promoters'    => $current_lang === 'ro' ? 'Promotori Locali' : 'Local Promoters',
    'promoters_desc'     => $current_lang === 'ro' ? 'Procesare enterprise la rate competitive. Perfect pentru promotori independenti.' : 'Enterprise processing at competitive rates. Perfect for independent promoters.',
    'regional_series'    => $current_lang === 'ro' ? 'Serii Regionale' : 'Regional Series',
    'regional_desc'      => $current_lang === 'ro' ? 'Evenimente recurente in orase romanesti. Raportare clara pentru contabilitate multi-eveniment.' : 'Recurring events in Romanian cities. Clear reporting for multi-event accounting.',
    'limited_budget'     => $current_lang === 'ro' ? 'Buget Limitat' : 'Limited Budget',
    'budget_desc'        => $current_lang === 'ro' ? 'Comisioane competitive maximizeaza veniturile. Fiecare punct procentual conteaza.' : 'Competitive fees maximize revenue. Every percentage point counts.',

    // Testimonial
    'testimonial_text'   => $current_lang === 'ro' ? 'Cu <span class="font-semibold text-gradient-eu">EuPlatesc</span>, rata de aprobare pentru cardurile romanesti a crescut cu 15%. Clientii nostri recunosc brandul si platesc cu incredere.' : 'With <span class="font-semibold text-gradient-eu">EuPlatesc</span>, approval rate for Romanian cards increased by 15%. Our customers recognize the brand and pay with confidence.',
    'testimonial_role'   => $current_lang === 'ro' ? 'Director, Filarmonica Brasov' : 'Director, Brasov Philharmonic',

    // Final CTA
    'cta_desc'           => $current_lang === 'ro' ? 'Gateway local de incredere. Comisioane competitive, rate de aprobare excelente, decontare in RON.' : 'Trusted local gateway. Competitive fees, excellent approval rates, RON settlement.',
    'questions_contact'  => $current_lang === 'ro' ? 'Intrebari? Contacteaza-ne' : 'Questions? Contact us',
    'final_tagline'      => $current_lang === 'ro' ? '3D Secure • PCI DSS • Decontare RON • Visa • Mastercard • Maestro' : '3D Secure • PCI DSS • RON Settlement • Visa • Mastercard • Maestro',
];
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  @font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }
  ::selection { background: #00A651; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-eu { background: linear-gradient(135deg, #00A651 0%, #FFD700 50%, #00A651 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(0, 166, 81, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* EuPlatesc logo style */
  .eu-logo {
    background: linear-gradient(135deg, #00A651, #007A3D);
    border-radius: 12px;
    padding: 12px 20px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }
  .eu-logo-text {
    font-weight: bold;
    font-size: 18px;
    color: white;
  }
  .eu-logo-text span {
    color: #FFD700;
  }

  /* Credit card style */
  .credit-card {
    background: linear-gradient(135deg, #1a1a27 0%, #32324a 100%);
    border-radius: 16px;
    padding: 24px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
  }
  .credit-card::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 60%);
  }
  .credit-card-chip {
    width: 50px;
    height: 40px;
    background: linear-gradient(135deg, #FFD700, #FFA500);
    border-radius: 8px;
    position: relative;
  }
  .credit-card-chip::after {
    content: '';
    position: absolute;
    inset: 4px;
    background: repeating-linear-gradient(90deg, transparent 0 4px, rgba(0,0,0,0.1) 4px 8px);
  }

  /* Payment flow step */
  .flow-step {
    position: relative;
  }
  .flow-step::after {
    content: '';
    position: absolute;
    top: 50%;
    right: -30px;
    width: 24px;
    height: 2px;
    background: linear-gradient(90deg, #00A651, transparent);
  }
  .flow-step:last-child::after {
    display: none;
  }

  /* 3D Secure badge */
  .secure-3d {
    background: linear-gradient(135deg, rgba(0, 166, 81, 0.2), rgba(0, 122, 61, 0.1));
    border: 1px solid rgba(0, 166, 81, 0.3);
    border-radius: 8px;
    padding: 8px 16px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  /* Card brand logos */
  .card-brand {
    height: 32px;
    padding: 4px 12px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 12px;
  }
  .card-brand.visa { background: #1A1F71; color: white; }
  .card-brand.mastercard { background: linear-gradient(90deg, #EB001B, #F79E1B); color: white; }
  .card-brand.maestro { background: #0066A1; color: white; }

  /* Transaction status */
  .tx-approved { background: rgba(0, 166, 81, 0.2); border: 1px solid rgba(0, 166, 81, 0.3); color: #00A651; }
  .tx-pending { background: rgba(245, 158, 11, 0.2); border: 1px solid rgba(245, 158, 11, 0.3); color: #f59e0b; }
  .tx-failed { background: rgba(239, 68, 68, 0.2); border: 1px solid rgba(239, 68, 68, 0.3); color: #ef4444; }

  /* RON currency */
  .ron-badge {
    background: linear-gradient(135deg, #003087, #00A651);
    color: white;
    font-weight: bold;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 14px;
  }
</style>

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-euplatesc-primary/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-euplatesc-secondary/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute text-2xl top-32 left-16 opacity-30 animate-float">💳</div>
    <div class="absolute text-xl bottom-40 right-24 opacity-20 animate-float" style="animation-delay: 1s;">🇷🇴</div>
    <div class="absolute text-3xl top-1/2 right-16 opacity-10 animate-float" style="animation-delay: 2s;">✓</div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-euplatesc-primary/10 border-euplatesc-primary/20">
            <svg class="w-5 h-5 text-euplatesc-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
            <span class="text-sm font-medium text-euplatesc-primary"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <span class="text-gradient-eu">EuPlatesc</span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 rounded-full group bg-euplatesc-primary hover:bg-euplatesc-secondary hover:scale-105 hover:shadow-glow-eu">
              <?php echo esc_html( $t['cta_activate'] ); ?>
              <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#avantaje" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              <?php echo esc_html( $t['cta_why'] ); ?>
            </a>
          </div>

          <!-- Card Brands -->
          <div class="flex items-center gap-4">
            <span class="text-sm text-white/40"><?php echo esc_html( $t['we_accept'] ); ?></span>
            <div class="card-brand visa">VISA</div>
            <div class="card-brand mastercard">MC</div>
            <div class="card-brand maestro">Maestro</div>
          </div>
        </div>

        <!-- Hero Visual - Payment Card & Flow -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            step: 1,
            amount: 250,
            status: 'processing'
          }" x-init="setInterval(() => {
            step = step >= 4 ? 1 : step + 1;
            if(step === 4) status = 'approved';
            else status = 'processing';
          }, 2000)">

            <!-- Credit Card -->
            <div class="mb-6 credit-card">
              <div class="flex items-center justify-between mb-8">
                <div class="credit-card-chip"></div>
                <div class="eu-logo">
                  <span class="eu-logo-text">eu<span>Platesc</span></span>
                </div>
              </div>

              <div class="mb-6">
                <div class="mb-1 text-xs uppercase text-white/40"><?php echo esc_html( $t['card_number'] ); ?></div>
                <div class="font-mono text-xl tracking-wider text-white">•••• •••• •••• 4242</div>
              </div>

              <div class="flex items-center justify-between">
                <div>
                  <div class="mb-1 text-xs uppercase text-white/40"><?php echo esc_html( $t['holder'] ); ?></div>
                  <div class="font-medium text-white">MARIA IONESCU</div>
                </div>
                <div>
                  <div class="mb-1 text-xs uppercase text-white/40"><?php echo esc_html( $t['exp'] ); ?></div>
                  <div class="font-medium text-white">12/27</div>
                </div>
                <div class="card-brand visa">VISA</div>
              </div>
            </div>

            <!-- Transaction Status -->
            <div class="p-6 border bg-dark-800/80 backdrop-blur-xl rounded-2xl border-euplatesc-primary/20">
              <div class="flex items-center justify-between mb-4">
                <div>
                  <div class="text-xs uppercase text-white/40"><?php echo esc_html( $t['transaction'] ); ?></div>
                  <div class="font-semibold text-white">Festival Summer 2025</div>
                </div>
                <div class="text-right">
                  <div class="text-xs uppercase text-white/40"><?php echo esc_html( $t['total'] ); ?></div>
                  <div class="text-2xl font-bold text-euplatesc-primary" x-text="amount + ' RON'">250 RON</div>
                </div>
              </div>

              <!-- Payment Flow Steps -->
              <div class="flex items-center justify-between mb-4">
                <div class="flex-1 text-center flow-step" :class="step >= 1 && 'opacity-100'" :class="step < 1 && 'opacity-30'">
                  <div class="flex items-center justify-center w-10 h-10 mx-auto mb-2 transition-all duration-300 rounded-full" :class="step >= 1 ? 'bg-euplatesc-primary text-white' : 'bg-dark-700 text-white/40'">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                  </div>
                  <div class="text-xs text-white/60"><?php echo esc_html( $t['card'] ); ?></div>
                </div>

                <div class="flex-1 text-center flow-step" :class="step >= 2 && 'opacity-100'" :class="step < 2 && 'opacity-30'">
                  <div class="flex items-center justify-center w-10 h-10 mx-auto mb-2 transition-all duration-300 rounded-full" :class="step >= 2 ? 'bg-euplatesc-primary text-white' : 'bg-dark-700 text-white/40'">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  </div>
                  <div class="text-xs text-white/60">3D Secure</div>
                </div>

                <div class="flex-1 text-center flow-step" :class="step >= 3 && 'opacity-100'" :class="step < 3 && 'opacity-30'">
                  <div class="flex items-center justify-center w-10 h-10 mx-auto mb-2 transition-all duration-300 rounded-full" :class="step >= 3 ? 'bg-euplatesc-primary text-white animate-pulse' : 'bg-dark-700 text-white/40'">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                  </div>
                  <div class="text-xs text-white/60"><?php echo esc_html( $t['processing'] ); ?></div>
                </div>

                <div class="flex-1 text-center" :class="step >= 4 && 'opacity-100'" :class="step < 4 && 'opacity-30'">
                  <div class="flex items-center justify-center w-10 h-10 mx-auto mb-2 transition-all duration-300 rounded-full" :class="step >= 4 ? 'bg-brand-green text-white' : 'bg-dark-700 text-white/40'">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </div>
                  <div class="text-xs text-white/60"><?php echo esc_html( $t['approved'] ); ?></div>
                </div>
              </div>

              <!-- Status -->
              <div class="p-3 transition-all duration-300 rounded-lg" :class="status === 'approved' ? 'tx-approved' : 'bg-dark-900/50'">
                <div class="flex items-center justify-between">
                  <span class="text-sm font-medium" x-text="status === 'approved' ? '<?php echo esc_attr( $t['tx_approved'] ); ?>' : '<?php echo esc_attr( $t['tx_processing'] ); ?>'"></span>
                  <span class="text-xs" x-text="status === 'approved' ? 'EP-123456789' : ''"></span>
                </div>
              </div>
            </div>

            <!-- Floating 3D Secure Badge -->
            <div class="absolute z-10 shadow-xl -top-4 -right-4 secure-3d animate-float">
              <svg class="w-5 h-5 text-euplatesc-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              <span class="text-sm font-bold text-euplatesc-primary">3D Secure</span>
            </div>

            <!-- Floating RON Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-euplatesc-primary/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <span class="ron-badge">RON</span>
                <div>
                  <div class="text-sm font-medium text-white"><?php echo esc_html( $t['local_currency'] ); ?></div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['no_conversion'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== ADVANTAGES ==================== -->
  <section class="relative py-24 overflow-hidden" id="avantaje">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-euplatesc-primary"><?php echo esc_html( $t['why_euplatesc'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['adv_title_1'] ); ?><br><span class="text-gradient-eu"><?php echo esc_html( $t['adv_title_2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['adv_desc'] ); ?></p>
      </div>

      <!-- Advantages Grid -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- Trust -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-euplatesc-primary/20 hover:border-euplatesc-primary/50 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-euplatesc-primary/10">
            <svg class="w-7 h-7 text-euplatesc-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['trust_brand'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['trust_desc'] ); ?></p>
        </div>

        <!-- Approval Rates -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-brand-green/20 hover:border-brand-green/50 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-green/10">
            <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['approval_rates'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['approval_desc'] ); ?></p>
        </div>

        <!-- Competitive Pricing -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-euplatesc-accent/20 hover:border-euplatesc-accent/50 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-euplatesc-accent/10">
            <svg class="w-7 h-7 text-euplatesc-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['competitive_fees'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['competitive_desc'] ); ?></p>
        </div>

        <!-- RON Settlement -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-brand-cyan/20 hover:border-brand-cyan/50 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-cyan/10">
            <svg class="w-7 h-7 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['ron_settlement'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['ron_desc'] ); ?></p>
        </div>

        <!-- 3D Secure -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-brand-violet/20 hover:border-brand-violet/50 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-violet/10">
            <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['3d_mandatory'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['3d_desc'] ); ?></p>
        </div>

        <!-- Simple Integration -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-brand-amber/20 hover:border-brand-amber/50 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-amber/10">
            <svg class="w-7 h-7 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['simple_integration'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['simple_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAYMENT FLOW ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-brand-cyan"><?php echo esc_html( $t['payment_flow'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Securizat &<br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['secure_simple'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['flow_desc'] ); ?></p>
      </div>

      <!-- Flow Steps -->
      <div class="max-w-4xl mx-auto reveal">
        <div class="grid items-start gap-4 md:grid-cols-6">
          <!-- Step 1 -->
          <div class="text-center">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-3 border rounded-2xl bg-euplatesc-primary/20 border-euplatesc-primary/30">
              <span class="text-xl font-bold text-euplatesc-primary">1</span>
            </div>
            <div class="mb-1 text-sm font-medium text-white"><?php echo esc_html( $t['selection'] ); ?></div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['selection_desc'] ); ?></div>
          </div>

          <!-- Arrow -->
          <div class="items-center justify-center hidden pt-6 md:flex">
            <svg class="w-6 h-6 text-euplatesc-primary/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </div>

          <!-- Step 2 -->
          <div class="text-center">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-3 border rounded-2xl bg-euplatesc-primary/20 border-euplatesc-primary/30">
              <span class="text-xl font-bold text-euplatesc-primary">2</span>
            </div>
            <div class="mb-1 text-sm font-medium text-white"><?php echo esc_html( $t['redirect'] ); ?></div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['redirect_desc'] ); ?></div>
          </div>

          <!-- Arrow -->
          <div class="items-center justify-center hidden pt-6 md:flex">
            <svg class="w-6 h-6 text-euplatesc-primary/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </div>

          <!-- Step 3 -->
          <div class="text-center">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-3 border rounded-2xl bg-brand-violet/20 border-brand-violet/30">
              <span class="text-xl font-bold text-brand-violet">3</span>
            </div>
            <div class="mb-1 text-sm font-medium text-white">3D Secure</div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['bank_verify'] ); ?></div>
          </div>

          <!-- Arrow -->
          <div class="items-center justify-center hidden pt-6 md:flex">
            <svg class="w-6 h-6 text-brand-green/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </div>
        </div>

        <!-- Second row -->
        <div class="grid items-start gap-4 mt-8 md:grid-cols-6">
          <!-- Step 4 -->
          <div class="text-center md:col-start-1">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-3 border rounded-2xl bg-brand-green/20 border-brand-green/30">
              <span class="text-xl font-bold text-brand-green">4</span>
            </div>
            <div class="mb-1 text-sm font-medium text-white"><?php echo esc_html( $t['approval'] ); ?></div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['tx_processed'] ); ?></div>
          </div>

          <!-- Arrow -->
          <div class="items-center justify-center hidden pt-6 md:flex">
            <svg class="w-6 h-6 text-brand-green/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </div>

          <!-- Step 5 -->
          <div class="text-center">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-3 border rounded-2xl bg-brand-cyan/20 border-brand-cyan/30">
              <span class="text-xl font-bold text-brand-cyan">5</span>
            </div>
            <div class="mb-1 text-sm font-medium text-white"><?php echo esc_html( $t['callback'] ); ?></div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['webhook_notify'] ); ?></div>
          </div>

          <!-- Arrow -->
          <div class="items-center justify-center hidden pt-6 md:flex">
            <svg class="w-6 h-6 text-brand-cyan/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </div>

          <!-- Step 6 -->
          <div class="text-center">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-3 border rounded-2xl bg-euplatesc-primary/20 border-euplatesc-primary/30">
              <svg class="w-8 h-8 text-euplatesc-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div class="mb-1 text-sm font-medium text-white"><?php echo esc_html( $t['confirmation'] ); ?></div>
            <div class="text-xs text-white/40"><?php echo esc_html( $t['ticket_issued'] ); ?></div>
          </div>
        </div>
      </div>

      <!-- Security Note -->
      <div class="max-w-2xl mx-auto mt-12 reveal reveal-delay-1">
        <div class="flex items-center gap-4 p-4 border rounded-xl bg-euplatesc-primary/10 border-euplatesc-primary/30">
          <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-euplatesc-primary/20">
            <svg class="w-6 h-6 text-euplatesc-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <div>
            <div class="font-medium text-euplatesc-primary"><?php echo esc_html( $t['pci_compliance'] ); ?></div>
            <div class="text-sm text-white/60"><?php echo esc_html( $t['pci_desc'] ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SETTLEMENT ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-euplatesc-accent"><?php echo esc_html( $t['settlement'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['funds_title_1'] ); ?><br><span class="text-gradient-eu"><?php echo esc_html( $t['funds_title_2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['settlement_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-euplatesc-primary/20">
                <svg class="w-6 h-6 text-euplatesc-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['regular_schedule'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['schedule_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-cyan/20">
                <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['detailed_reports'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['reports_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-euplatesc-accent/20">
                <svg class="w-6 h-6 text-euplatesc-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['ro_bank_account'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['ro_bank_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Settlement Report -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-euplatesc-primary/20">
                  <svg class="w-5 h-5 text-euplatesc-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <div>
                  <div class="font-semibold text-white"><?php echo esc_html( $t['settlement_report'] ); ?></div>
                  <div class="text-xs text-white/40">15 Ianuarie 2025</div>
                </div>
              </div>
              <span class="px-3 py-1 text-xs font-medium rounded-full bg-brand-green/20 text-brand-green"><?php echo esc_html( $t['transferred'] ); ?></span>
            </div>

            <!-- Summary -->
            <div class="grid grid-cols-2 gap-4 mb-6">
              <div class="p-4 rounded-xl bg-dark-900/50">
                <div class="mb-1 text-xs uppercase text-white/40"><?php echo esc_html( $t['transactions'] ); ?></div>
                <div class="text-2xl font-bold text-white">147</div>
              </div>
              <div class="p-4 border rounded-xl bg-euplatesc-primary/10 border-euplatesc-primary/30">
                <div class="mb-1 text-xs uppercase text-euplatesc-primary"><?php echo esc_html( $t['total_settled'] ); ?></div>
                <div class="text-2xl font-bold text-euplatesc-primary">28,450 RON</div>
              </div>
            </div>

            <!-- Transaction List -->
            <div class="mb-4 space-y-2">
              <div class="mb-2 text-xs uppercase text-white/40"><?php echo esc_html( $t['last_transactions'] ); ?></div>

              <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/30">
                <div class="flex items-center gap-3">
                  <span class="tx-approved px-2 py-0.5 rounded text-xs"><?php echo esc_html( $t['approved_status'] ); ?></span>
                  <span class="text-sm text-white">EP-123456789</span>
                </div>
                <span class="font-medium text-euplatesc-primary">250 RON</span>
              </div>

              <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/30">
                <div class="flex items-center gap-3">
                  <span class="tx-approved px-2 py-0.5 rounded text-xs"><?php echo esc_html( $t['approved_status'] ); ?></span>
                  <span class="text-sm text-white">EP-123456788</span>
                </div>
                <span class="font-medium text-euplatesc-primary">175 RON</span>
              </div>

              <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/30">
                <div class="flex items-center gap-3">
                  <span class="tx-approved px-2 py-0.5 rounded text-xs"><?php echo esc_html( $t['approved_status'] ); ?></span>
                  <span class="text-sm text-white">EP-123456787</span>
                </div>
                <span class="font-medium text-euplatesc-primary">320 RON</span>
              </div>
            </div>

            <!-- Bank Info -->
            <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/50">
              <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                <span class="text-sm text-white/60">Banca Transilvania</span>
              </div>
              <span class="font-mono text-xs text-white/40">RO** **** **** 1234</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-brand-violet"><?php echo esc_html( $t['use_cases'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['perfect_for'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['romanian_market'] ); ?></span></h2>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-euplatesc-primary/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-euplatesc-primary/20 to-euplatesc-primary/10"><span class="text-2xl">🎵</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['concert_halls'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['concert_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-amber/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10"><span class="text-2xl">🎪</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['festivals'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['festivals_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-violet/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10"><span class="text-2xl">🎭</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['theater_culture'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['theater_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-cyan/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/10"><span class="text-2xl">🎤</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['local_promoters'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['promoters_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-rose/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-rose/20 to-brand-rose/10"><span class="text-2xl">🗓️</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['regional_series'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['regional_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-euplatesc-accent/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-euplatesc-accent/20 to-euplatesc-accent/10"><span class="text-2xl">💰</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['limited_budget'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['budget_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-euplatesc-primary/10 to-euplatesc-secondary/10 rounded-3xl md:p-12 border-euplatesc-primary/20">
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
            <div class="flex items-center justify-center rounded-full w-14 h-14 bg-gradient-to-br from-euplatesc-primary to-euplatesc-secondary">
              <span class="font-bold text-white">DM</span>
            </div>
            <div>
              <div class="font-semibold text-white">Dan M.</div>
              <div class="text-white/50"><?php echo esc_html( $t['testimonial_role'] ); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-euplatesc-primary/10 via-transparent to-euplatesc-accent/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(0,166,81,0.2) 0%, rgba(255,215,0,0.1) 100%);"></div>

    <div class="absolute text-4xl top-20 left-20 opacity-20 animate-float">💳</div>
    <div class="absolute text-3xl bottom-20 right-20 opacity-20 animate-float" style="animation-delay: 1s;">🇷🇴</div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal"><span class="text-gradient-eu">EuPlatesc</span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1"><?php echo esc_html( $t['cta_desc'] ); ?></p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 rounded-full group bg-euplatesc-primary hover:bg-euplatesc-secondary hover:scale-105 hover:shadow-glow-eu">
          <?php echo esc_html( $t['cta_activate'] ); ?>
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
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => { const rect = card.getBoundingClientRect(); card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`); card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`); });
  });
</script>

<?php get_footer(); ?>
