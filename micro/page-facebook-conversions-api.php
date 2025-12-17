<?php
/**
 * Template Name: Micro – Facebook Conversions API
 */

get_header();

// Multilingual support
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'               => 'Meta Official Partner',
	'hero_title'          => $current_lang === 'ro' ? 'Fă reclamele să' : 'Make your ads',
	'hero_title2'         => $current_lang === 'ro' ? 'funcționeze' : 'work again',
	'hero_desc'           => $current_lang === 'ro' ? 'Trimite conversiile direct de pe server la Meta. Ocolește blocajele iOS 14.5+ și ad blockers. <strong class="text-white">Atribuire precisă</strong> pentru reclamele tale.' : 'Send conversions directly from server to Meta. Bypass iOS 14.5+ and ad blocker restrictions. <strong class="text-white">Precise attribution</strong> for your ads.',
	'cta_activate'        => $current_lang === 'ro' ? 'Activează acum - gratuit' : 'Activate now - free',
	'cta_how'             => $current_lang === 'ro' ? 'Vezi cum funcționează' : 'See how it works',
	'setup_2min'          => $current_lang === 'ro' ? 'Setup în 2 minute' : '2-minute setup',
	'gdpr_compliant'      => 'GDPR compliant',
	'included_all'        => $current_lang === 'ro' ? 'Inclus în toate planurile' : 'Included in all plans',
	'server'              => 'Server',
	'conversions'         => $current_lang === 'ro' ? 'Conversii' : 'Conversions',

	// The Problem
	'problem_badge'       => $current_lang === 'ro' ? 'Problema' : 'The Problem',
	'problem_title'       => $current_lang === 'ro' ? 'De ce reclamele tale' : 'Why your ads',
	'problem_title2'      => $current_lang === 'ro' ? 'nu mai funcționează' : 'no longer work',
	'problem_desc'        => $current_lang === 'ro' ? 'Pixelul Facebook nu mai poate urmări toate conversiile. iOS 14.5+, ad blockers și browser privacy îți ascund vânzările.' : 'Facebook Pixel can no longer track all conversions. iOS 14.5+, ad blockers and browser privacy hide your sales.',
	'ios_title'           => 'iOS 14.5+ ATT',
	'ios_desc'            => $current_lang === 'ro' ? 'Utilizatorii iPhone pot bloca tracking-ul. Majoritatea aleg "Ask App Not to Track".' : 'iPhone users can block tracking. Most choose "Ask App Not to Track".',
	'ad_blockers'         => 'Ad Blockers',
	'ad_blockers_desc'    => $current_lang === 'ro' ? 'Extensiile de browser blochează scripturi de tracking, inclusiv pixelul Facebook.' : 'Browser extensions block tracking scripts, including the Facebook pixel.',
	'browser_privacy'     => 'Browser Privacy',
	'browser_desc'        => $current_lang === 'ro' ? 'Safari ITP și Firefox ETP limitează cookie-urile third-party și tracking-ul cross-site.' : 'Safari ITP and Firefox ETP limit third-party cookies and cross-site tracking.',
	'visible_conversions' => $current_lang === 'ro' ? 'conversii vizibile' : 'visible conversions',
	'pixel_before'        => $current_lang === 'ro' ? 'Doar Pixel (înainte iOS 14)' : 'Pixel only (before iOS 14)',
	'pixel_now'           => $current_lang === 'ro' ? 'Doar Pixel (acum)' : 'Pixel only (now)',
	'pixel_capi'          => 'Pixel + Conversions API',

	// How it works
	'how_badge'           => $current_lang === 'ro' ? 'Cum Funcționează' : 'How It Works',
	'how_title'           => $current_lang === 'ro' ? 'Direct de la server,' : 'Direct from server,',
	'how_title2'          => $current_lang === 'ro' ? 'fără intermediari' : 'no middlemen',
	'how_desc'            => $current_lang === 'ro' ? 'Conversions API trimite datele direct de pe serverele Tixello la Meta. Nu mai depinzi de browser-ul utilizatorului.' : 'Conversions API sends data directly from Tixello servers to Meta. No longer dependent on the user\'s browser.',
	'client'              => $current_lang === 'ro' ? 'Client' : 'Customer',
	'buys_ticket'         => $current_lang === 'ro' ? 'Cumpără bilet' : 'Buys ticket',
	'processes_sends'     => $current_lang === 'ro' ? 'Procesează & trimite' : 'Processes & sends',
	'receives_conversion' => $current_lang === 'ro' ? 'Primește conversia' : 'Receives conversion',
	'bypass_blocks'       => $current_lang === 'ro' ? 'Ocolește blocajele' : 'Bypass blocks',
	'bypass_desc'         => $current_lang === 'ro' ? 'Datele nu mai trec prin browser. Ad blockers și iOS nu pot interveni.' : 'Data no longer goes through the browser. Ad blockers and iOS cannot intervene.',
	'realtime_data'       => $current_lang === 'ro' ? 'Date în timp real' : 'Real-time data',
	'realtime_desc'       => $current_lang === 'ro' ? 'Conversiile ajung la Meta în secunde, nu ore. Optimizare mai rapidă.' : 'Conversions reach Meta in seconds, not hours. Faster optimization.',
	'precise_attrib'      => $current_lang === 'ro' ? 'Atribuire precisă' : 'Precise attribution',
	'precise_desc'        => $current_lang === 'ro' ? 'Meta știe exact care reclamă a generat vânzarea. ROAS real.' : 'Meta knows exactly which ad generated the sale. Real ROAS.',
	'privacy'             => $current_lang === 'ro' ? 'Confidențialitate' : 'Privacy',
	'privacy_desc'        => $current_lang === 'ro' ? 'Date hash-uite SHA-256. GDPR compliant by design.' : 'SHA-256 hashed data. GDPR compliant by design.',

	// Events
	'events_badge'        => $current_lang === 'ro' ? 'Evenimente' : 'Events',
	'events_title'        => $current_lang === 'ro' ? 'Urmărește întreaga' : 'Track the entire',
	'events_title2'       => $current_lang === 'ro' ? 'călătorie' : 'journey',
	'events_desc'         => $current_lang === 'ro' ? 'De la primul click până la achiziție. Fiecare pas este trimis la Meta pentru optimizare maximă.' : 'From first click to purchase. Every step is sent to Meta for maximum optimization.',
	'purchase'            => 'Purchase',
	'purchase_desc'       => $current_lang === 'ro' ? 'Vânzare finalizată cu valoare' : 'Completed sale with value',
	'add_to_cart'         => 'Add to Cart',
	'add_to_cart_desc'    => $current_lang === 'ro' ? 'Bilet adăugat în coș' : 'Ticket added to cart',
	'initiate_checkout'   => 'Initiate Checkout',
	'checkout_desc'       => $current_lang === 'ro' ? 'Început proces de plată' : 'Started payment process',
	'view_content'        => 'View Content',
	'view_content_desc'   => $current_lang === 'ro' ? 'Pagină eveniment vizualizată' : 'Event page viewed',
	'auto_dedup'          => $current_lang === 'ro' ? 'Deduplicare automată activată' : 'Automatic deduplication enabled',

	// Setup
	'setup_badge'         => 'Setup',
	'setup_title'         => $current_lang === 'ro' ? 'Configurare în' : 'Setup in',
	'setup_title2'        => $current_lang === 'ro' ? '2 minute' : '2 minutes',
	'setup_desc'          => $current_lang === 'ro' ? 'Nu e nevoie de cunoștințe tehnice. Conectezi contul Facebook și gata.' : 'No technical knowledge needed. Connect your Facebook account and you\'re done.',
	'step1_title'         => $current_lang === 'ro' ? 'Conectează contul Facebook' : 'Connect your Facebook account',
	'step1_desc'          => $current_lang === 'ro' ? 'Din dashboard-ul Tixello, mergi la Integrări → Facebook și apasă "Conectează".' : 'From the Tixello dashboard, go to Integrations → Facebook and click "Connect".',
	'oauth_secure'        => $current_lang === 'ro' ? 'OAuth securizat' : 'Secure OAuth',
	'step2_title'         => $current_lang === 'ro' ? 'Selectează Pixel-ul' : 'Select the Pixel',
	'step2_desc'          => $current_lang === 'ro' ? 'Alegem automat pixelul potrivit sau selectezi manual din lista disponibilă.' : 'We automatically select the right pixel or you can manually choose from the list.',
	'step3_title'         => $current_lang === 'ro' ? 'Gata! Evenimentele se trimit automat' : 'Done! Events are sent automatically',
	'step3_desc'          => $current_lang === 'ro' ? 'Din acest moment, fiecare conversie e trimisă automat către Meta.' : 'From this moment, every conversion is automatically sent to Meta.',
	'realtime_events'     => $current_lang === 'ro' ? 'Evenimente în timp real' : 'Real-time events',
	'connect_facebook'    => $current_lang === 'ro' ? 'Conectează Facebook acum' : 'Connect Facebook now',
	'included_free'       => $current_lang === 'ro' ? 'Inclus gratuit în toate planurile' : 'Included free in all plans',

	// Testimonial
	'testimonial'         => $current_lang === 'ro' ? 'După ce am activat Conversions API, am văzut <span class="text-meta-blue font-semibold">+40% mai multe conversii</span> în Facebook Ads Manager. Costul per bilet vândut a scăzut cu 25%.' : 'After activating Conversions API, I saw <span class="text-meta-blue font-semibold">+40% more conversions</span> in Facebook Ads Manager. Cost per ticket sold decreased by 25%.',
	'testimonial_role'    => $current_lang === 'ro' ? 'Marketing Manager, Festival de Muzică' : 'Marketing Manager, Music Festival',

	// Final CTA
	'final_title'         => $current_lang === 'ro' ? 'Fă reclamele să' : 'Make your ads',
	'final_title2'        => $current_lang === 'ro' ? 'funcționeze din nou' : 'work again',
	'final_desc'          => $current_lang === 'ro' ? 'Activează Conversions API în 2 minute. Recuperează conversiile pierdute și optimizează campaniile cu date complete.' : 'Activate Conversions API in 2 minutes. Recover lost conversions and optimize campaigns with complete data.',
	'cta_questions'       => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
	'works_with'          => $current_lang === 'ro' ? 'Funcționează cu Facebook, Instagram, Messenger și Audience Network' : 'Works with Facebook, Instagram, Messenger and Audience Network',
];
?>

<style>
/* Font faces */
@font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
@font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }

/* Selection color */
::selection { background: #0866FF; color: white; }

/* Text gradient (requires background-clip: text) */
.text-gradient {
    background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.text-gradient-meta {
    background: linear-gradient(135deg, #0866FF 0%, #00c6ff 50%, #0866FF 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Noise overlay (requires ::after with content) */
.noise::after {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
    opacity: 0.02;
    pointer-events: none;
    z-index: 1000;
}

/* Reveal animation (uses custom timing function and JS-toggled class) */
.reveal { 
    opacity: 0; 
    transform: translateY(40px); 
    transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); 
}
.reveal.revealed { opacity: 1; transform: translateY(0); }
.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.3s; }
.reveal-delay-4 { transition-delay: 0.4s; }

/* Feature card glow (requires CSS custom properties for mouse position) */
.feature-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(8, 102, 255, 0.15), transparent 50%);
    opacity: 0;
    transition: opacity 0.5s;
    border-radius: inherit;
}
.feature-card:hover::before { opacity: 1; }

/* Flow dots (requires animation with 'left' property) */
.flow-dot {
    position: absolute;
    width: 8px;
    height: 8px;
    background: #0866FF;
    border-radius: 50%;
    box-shadow: 0 0 10px #0866FF;
    animation: flow 3s ease-in-out infinite;
}
.flow-dot:nth-child(2) { animation-delay: 1s; }
.flow-dot:nth-child(3) { animation-delay: 2s; }

/* Quality bar shimmer (requires ::after with animation) */
.quality-bar-shimmer::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: shimmerBar 2s ease-in-out infinite;
}
@keyframes shimmerBar { 100% { left: 100%; } }
</style>

<!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background Orbs -->
    <div class="absolute w-[600px] h-[600px] bg-meta-blue/20 rounded-full -top-40 -right-40 blur-[120px] pointer-events-none"></div>
    <div class="absolute w-[400px] h-[400px] bg-brand-cyan/15 rounded-full bottom-20 -left-20 blur-[120px] pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        
        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-meta-blue/10 border border-meta-blue/20 mb-6">
            <svg class="w-5 h-5 text-meta-blue" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            <span class="text-meta-blue text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-meta animate-shimmer"><?php echo esc_html( $t['hero_title2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="/signup" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-meta-blue to-blue-500 text-white hover:scale-105 hover:shadow-glow-meta transition-all duration-300">
              <?php echo esc_html( $t['cta_activate'] ); ?>
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#cum-functioneaza" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
              <?php echo esc_html( $t['cta_how'] ); ?>
            </a>
          </div>

          <!-- Trust Badges -->
          <div class="flex flex-wrap items-center gap-6 text-sm text-white/50">
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?php echo esc_html( $t['setup_2min'] ); ?>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?php echo esc_html( $t['gdpr_compliant'] ); ?>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?php echo esc_html( $t['included_all'] ); ?>
            </div>
          </div>
        </div>
        
        <!-- Hero Visual -->
        <div class="reveal reveal-delay-1">
          <div class="relative">
            <!-- Main Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-3xl p-8 border border-white/10">
              <div class="flex items-center justify-between gap-8">
                <!-- Tixello Icon -->
                <div class="text-center">
                  <div class="w-24 h-24 rounded-2xl bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center mb-3 mx-auto shadow-lg shadow-brand-violet/30">
                    <span class="text-white font-display font-bold text-2xl">T</span>
                  </div>
                  <div class="text-white font-medium">Tixello</div>
                  <div class="text-white/40 text-sm"><?php echo esc_html( $t['server'] ); ?></div>
                </div>
                
                <!-- Connection Line -->
                <div class="flex-1 relative h-2">
                  <div class="absolute inset-0 bg-white/10 rounded-full overflow-hidden">
                    <div class="absolute inset-0 w-1/3 h-full bg-gradient-to-r from-transparent via-meta-blue to-transparent animate-data-flow"></div>
                  </div>
                  <div class="flow-dot" style="top: -3px;"></div>
                  <div class="flow-dot" style="top: -3px;"></div>
                  <div class="flow-dot" style="top: -3px;"></div>
                </div>
                
                <!-- Meta Icon -->
                <div class="text-center">
                  <div class="w-24 h-24 rounded-2xl bg-gradient-to-br from-meta-blue to-blue-600 flex items-center justify-center mb-3 mx-auto shadow-lg shadow-meta-blue/30">
                    <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                  </div>
                  <div class="text-white font-medium">Meta</div>
                  <div class="text-white/40 text-sm">Conversions API</div>
                </div>
              </div>
              
              <!-- Stats Grid -->
              <div class="grid grid-cols-3 gap-4 mt-8">
                <div class="bg-white/5 rounded-xl p-4 text-center">
                  <div class="text-2xl font-bold text-brand-green">+40%</div>
                  <div class="text-white/40 text-sm"><?php echo esc_html( $t['conversions'] ); ?></div>
                </div>
                <div class="bg-white/5 rounded-xl p-4 text-center">
                  <div class="text-2xl font-bold text-meta-blue">8.2</div>
                  <div class="text-white/40 text-sm">Quality Score</div>
                </div>
                <div class="bg-white/5 rounded-xl p-4 text-center">
                  <div class="text-2xl font-bold text-brand-cyan">100%</div>
                  <div class="text-white/40 text-sm">iOS Compatible</div>
                </div>
              </div>
            </div>
            
            <!-- Floating Badges -->
            <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/20 shadow-xl animate-float">
              <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></div>
                <span class="text-brand-green text-sm font-medium">Purchase +€89</span>
              </div>
            </div>
            
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-meta-blue/20 shadow-xl animate-float [animation-delay:1s]">
              <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full bg-meta-blue animate-pulse"></div>
                <span class="text-meta-blue text-sm font-medium">AddToCart</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== THE PROBLEM ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-rose text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['problem_badge'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['problem_title'] ); ?><br><span class="text-brand-rose"><?php echo esc_html( $t['problem_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['problem_desc'] ); ?></p>
      </div>
      
      <!-- Problem Cards -->
      <div class="grid md:grid-cols-3 gap-6 mb-12">
        <!-- iOS -->
        <div class="bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-2xl p-6 border border-brand-rose/20 reveal">
          <div class="w-14 h-14 rounded-2xl bg-brand-rose/20 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['ios_title'] ); ?></h3>
          <p class="text-white/50 mb-4"><?php echo esc_html( $t['ios_desc'] ); ?></p>
          <div class="flex items-center gap-2 text-brand-rose font-semibold">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            -60% <?php echo esc_html( $t['visible_conversions'] ); ?>
          </div>
        </div>

        <!-- Ad Blockers -->
        <div class="bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-2xl p-6 border border-brand-rose/20 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-brand-rose/20 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['ad_blockers'] ); ?></h3>
          <p class="text-white/50 mb-4"><?php echo esc_html( $t['ad_blockers_desc'] ); ?></p>
          <div class="flex items-center gap-2 text-brand-rose font-semibold">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            -40% <?php echo esc_html( $t['visible_conversions'] ); ?>
          </div>
        </div>

        <!-- Browser Privacy -->
        <div class="bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-2xl p-6 border border-brand-rose/20 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-brand-rose/20 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['browser_privacy'] ); ?></h3>
          <p class="text-white/50 mb-4"><?php echo esc_html( $t['browser_desc'] ); ?></p>
          <div class="flex items-center gap-2 text-brand-rose font-semibold">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            -30% <?php echo esc_html( $t['visible_conversions'] ); ?>
          </div>
        </div>
      </div>
      
      <!-- Comparison Bars -->
      <div class="max-w-2xl mx-auto reveal reveal-delay-3">
        <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
          <div class="space-y-4">
            <!-- Before iOS 14 -->
            <div>
              <div class="flex items-center justify-between mb-2">
                <span class="text-white/70 text-sm"><?php echo esc_html( $t['pixel_before'] ); ?></span>
                <span class="text-white/50 text-sm">~95%</span>
              </div>
              <div class="h-3 bg-white/10 rounded-full overflow-hidden">
                <div class="h-full w-[95%] bg-gradient-to-r from-brand-green to-emerald-400 rounded-full"></div>
              </div>
            </div>
            <!-- Now -->
            <div>
              <div class="flex items-center justify-between mb-2">
                <span class="text-white/70 text-sm"><?php echo esc_html( $t['pixel_now'] ); ?></span>
                <span class="text-brand-rose text-sm">~35%</span>
              </div>
              <div class="h-3 bg-white/10 rounded-full overflow-hidden">
                <div class="h-full w-[35%] bg-gradient-to-r from-brand-rose to-pink-400 rounded-full"></div>
              </div>
            </div>
            <!-- With CAPI -->
            <div>
              <div class="flex items-center justify-between mb-2">
                <span class="text-white font-medium text-sm"><?php echo esc_html( $t['pixel_capi'] ); ?></span>
                <span class="text-meta-blue font-medium text-sm">~95%</span>
              </div>
              <div class="h-3 bg-white/10 rounded-full overflow-hidden">
                <div class="h-full w-[95%] bg-gradient-to-r from-meta-blue to-brand-cyan rounded-full"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== HOW IT WORKS ==================== -->
  <section class="py-24 bg-dark-850 relative" id="cum-functioneaza">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-meta-blue text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['how_badge'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['how_title'] ); ?><br><span class="text-gradient-meta animate-shimmer"><?php echo esc_html( $t['how_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['how_desc'] ); ?></p>
      </div>
      
      <!-- Flow Visual -->
      <div class="grid grid-cols-5 gap-4 items-center max-w-4xl mx-auto mb-16">
        <div class="text-center reveal">
          <div class="w-16 h-16 mx-auto rounded-xl bg-dark-700 border border-white/10 flex items-center justify-center mb-3">
            <svg class="w-8 h-8 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
          </div>
          <div class="text-white text-sm font-medium"><?php echo esc_html( $t['client'] ); ?></div>
          <div class="text-white/40 text-xs"><?php echo esc_html( $t['buys_ticket'] ); ?></div>
        </div>

        <div class="flex justify-center reveal reveal-delay-1">
          <svg class="w-8 h-8 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </div>

        <div class="text-center reveal reveal-delay-2">
          <div class="w-16 h-16 mx-auto rounded-xl bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center mb-3 shadow-lg shadow-brand-violet/20">
            <span class="text-white font-display font-bold text-xl">T</span>
          </div>
          <div class="text-white text-sm font-medium">Tixello</div>
          <div class="text-white/40 text-xs"><?php echo esc_html( $t['processes_sends'] ); ?></div>
        </div>

        <div class="flex justify-center reveal reveal-delay-3">
          <svg class="w-8 h-8 text-meta-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </div>

        <div class="text-center reveal reveal-delay-4">
          <div class="w-16 h-16 mx-auto rounded-xl bg-gradient-to-br from-meta-blue to-blue-600 flex items-center justify-center mb-3 shadow-lg shadow-meta-blue/20">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </div>
          <div class="text-white text-sm font-medium">Meta</div>
          <div class="text-white/40 text-xs"><?php echo esc_html( $t['receives_conversion'] ); ?></div>
        </div>
      </div>
      
      <!-- Benefits Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="feature-card relative bg-gradient-to-br from-meta-blue/10 to-meta-blue/5 rounded-2xl p-6 border border-white/10 hover:border-meta-blue/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal">
          <div class="w-12 h-12 rounded-xl bg-meta-blue/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-meta-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2"><?php echo esc_html( $t['bypass_blocks'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['bypass_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-gradient-to-br from-meta-blue/10 to-meta-blue/5 rounded-2xl p-6 border border-white/10 hover:border-meta-blue/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-1">
          <div class="w-12 h-12 rounded-xl bg-meta-blue/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-meta-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2"><?php echo esc_html( $t['realtime_data'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['realtime_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-gradient-to-br from-meta-blue/10 to-meta-blue/5 rounded-2xl p-6 border border-white/10 hover:border-meta-blue/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-2">
          <div class="w-12 h-12 rounded-xl bg-meta-blue/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-meta-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2"><?php echo esc_html( $t['precise_attrib'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['precise_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-gradient-to-br from-meta-blue/10 to-meta-blue/5 rounded-2xl p-6 border border-white/10 hover:border-meta-blue/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-3">
          <div class="w-12 h-12 rounded-xl bg-meta-blue/20 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-meta-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2"><?php echo esc_html( $t['privacy'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['privacy_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== EVENTS TRACKED ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="absolute w-[500px] h-[500px] bg-brand-cyan/20 rounded-full top-1/2 -right-60 blur-[120px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        
        <!-- Content -->
        <div class="reveal">
          <span class="inline-block px-4 py-1.5 rounded-full bg-brand-cyan/10 text-brand-cyan text-sm font-medium mb-6">📊 <?php echo esc_html( $t['events_badge'] ); ?></span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6"><?php echo esc_html( $t['events_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['events_title2'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8 leading-relaxed"><?php echo esc_html( $t['events_desc'] ); ?></p>
          
          <div class="space-y-4">
            <!-- Purchase -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10">
              <div class="w-10 h-10 rounded-lg bg-brand-green/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['purchase'] ); ?></div>
                <div class="text-white/40 text-sm"><?php echo esc_html( $t['purchase_desc'] ); ?></div>
              </div>
            </div>

            <!-- AddToCart -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10">
              <div class="w-10 h-10 rounded-lg bg-meta-blue/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-meta-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['add_to_cart'] ); ?></div>
                <div class="text-white/40 text-sm"><?php echo esc_html( $t['add_to_cart_desc'] ); ?></div>
              </div>
            </div>

            <!-- InitiateCheckout -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10">
              <div class="w-10 h-10 rounded-lg bg-brand-amber/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['initiate_checkout'] ); ?></div>
                <div class="text-white/40 text-sm"><?php echo esc_html( $t['checkout_desc'] ); ?></div>
              </div>
            </div>

            <!-- ViewContent -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10">
              <div class="w-10 h-10 rounded-lg bg-brand-violet/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['view_content'] ); ?></div>
                <div class="text-white/40 text-sm"><?php echo esc_html( $t['view_content_desc'] ); ?></div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Events Manager Mockup -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl border border-white/10 overflow-hidden">
            <!-- Header -->
            <div class="p-4 border-b border-white/10 flex items-center justify-between">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-meta-blue" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <span class="text-white font-medium">Events Manager</span>
              </div>
              <div class="flex items-center gap-2 text-brand-green text-sm">
                <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span>
                Live
              </div>
            </div>
            
            <!-- Content -->
            <div class="p-6">
              <!-- Quality Score -->
              <div class="mb-6">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-white/60 text-sm">Event Match Quality</span>
                  <span class="text-meta-blue font-bold">8.2 / 10</span>
                </div>
                <div class="h-2 bg-white/10 rounded-full overflow-hidden">
                  <div class="quality-bar-shimmer relative h-full w-[82%] bg-gradient-to-r from-meta-blue to-brand-cyan rounded-full overflow-hidden"></div>
                </div>
              </div>
              
              <!-- Events List -->
              <div class="space-y-3">
                <div class="flex items-center justify-between p-3 rounded-lg bg-white/5">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center">
                      <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <span class="text-white text-sm">Purchase</span>
                  </div>
                  <div class="text-right">
                    <div class="text-white font-medium">1,247</div>
                    <div class="text-brand-green text-xs">+23%</div>
                  </div>
                </div>
                
                <div class="flex items-center justify-between p-3 rounded-lg bg-white/5">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-meta-blue/20 flex items-center justify-center">
                      <svg class="w-4 h-4 text-meta-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4"/></svg>
                    </div>
                    <span class="text-white text-sm">AddToCart</span>
                  </div>
                  <div class="text-right">
                    <div class="text-white font-medium">3,892</div>
                    <div class="text-brand-green text-xs">+18%</div>
                  </div>
                </div>
                
                <div class="flex items-center justify-between p-3 rounded-lg bg-white/5">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-brand-violet/20 flex items-center justify-center">
                      <svg class="w-4 h-4 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <span class="text-white text-sm">ViewContent</span>
                  </div>
                  <div class="text-right">
                    <div class="text-white font-medium">24,561</div>
                    <div class="text-brand-green text-xs">+31%</div>
                  </div>
                </div>
              </div>
              
              <!-- Deduplication Badge -->
              <div class="mt-6 p-3 rounded-xl bg-brand-green/10 border border-brand-green/20">
                <div class="flex items-center gap-2 text-brand-green text-sm">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  <?php echo esc_html( $t['auto_dedup'] ); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SETUP ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="absolute w-[400px] h-[400px] bg-meta-blue/20 rounded-full top-1/3 -left-40 blur-[120px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['setup_badge'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['setup_title'] ); ?><br><span class="text-gradient-meta animate-shimmer"><?php echo esc_html( $t['setup_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['setup_desc'] ); ?></p>
      </div>
      
      <!-- Steps -->
      <div class="max-w-3xl mx-auto">
        <div class="space-y-8">
          <!-- Step 1 -->
          <div class="flex gap-6 reveal">
            <div class="flex-shrink-0">
              <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-meta-blue to-blue-600 flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-meta-blue/30">1</div>
            </div>
            <div class="flex-1 pb-8 border-b border-white/10">
              <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step1_title'] ); ?></h3>
              <p class="text-white/50 mb-4"><?php echo esc_html( $t['step1_desc'] ); ?></p>
              <div class="inline-flex items-center gap-3 px-4 py-2 rounded-lg bg-white/5 border border-white/10">
                <svg class="w-5 h-5 text-meta-blue" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <span class="text-white/70 text-sm"><?php echo esc_html( $t['oauth_secure'] ); ?></span>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="flex gap-6 reveal reveal-delay-1">
            <div class="flex-shrink-0">
              <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet to-purple-600 flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-brand-violet/30">2</div>
            </div>
            <div class="flex-1 pb-8 border-b border-white/10">
              <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step2_title'] ); ?></h3>
              <p class="text-white/50 mb-4"><?php echo esc_html( $t['step2_desc'] ); ?></p>
              <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-brand-green/10 text-brand-green text-sm border border-brand-green/20">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Auto-detect
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="flex gap-6 reveal reveal-delay-2">
            <div class="flex-shrink-0">
              <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green to-emerald-600 flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-brand-green/30">3</div>
            </div>
            <div class="flex-1">
              <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step3_title'] ); ?></h3>
              <p class="text-white/50 mb-4"><?php echo esc_html( $t['step3_desc'] ); ?></p>
              <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-meta-blue/10 text-meta-blue text-sm border border-meta-blue/20">
                <div class="w-2 h-2 rounded-full bg-meta-blue animate-pulse"></div>
                <?php echo esc_html( $t['realtime_events'] ); ?>
              </div>
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="mt-12 text-center reveal reveal-delay-3">
          <a href="/signup" class="inline-flex items-center gap-2 font-semibold text-lg px-8 py-4 rounded-full bg-gradient-to-r from-meta-blue to-blue-600 text-white hover:scale-105 hover:shadow-glow-meta transition-all duration-300">
            <?php echo esc_html( $t['connect_facebook'] ); ?>
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <p class="text-white/30 text-sm mt-4"><?php echo esc_html( $t['included_free'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-meta-blue/10 to-brand-cyan/10 rounded-3xl p-8 md:p-12 border border-white/10">
          <!-- Stars -->
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <!-- Quote -->
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "<?php echo $t['testimonial']; ?>"
          </blockquote>
          <!-- Author -->
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-meta-blue to-brand-cyan"></div>
            <div>
              <div class="font-semibold text-white">Alexandra M.</div>
              <div class="text-white/50"><?php echo esc_html( $t['testimonial_role'] ); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-meta-blue/20 via-transparent to-brand-cyan/20"></div>
    <div class="absolute w-[800px] h-[800px] bg-meta-blue/30 rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[120px] pointer-events-none"></div>
    
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['final_title'] ); ?><br><span class="text-gradient-meta animate-shimmer"><?php echo esc_html( $t['final_title2'] ); ?></span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="/signup" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-meta-blue to-blue-600 text-white hover:scale-105 hover:shadow-glow-meta transition-all duration-300">
          <?php echo esc_html( $t['cta_activate'] ); ?>
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="/contact" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
          <?php echo esc_html( $t['cta_questions'] ); ?>
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3"><?php echo esc_html( $t['works_with'] ); ?></p>
    </div>
  </section>


  <script>
    // Scroll Progress Bar
    window.addEventListener('scroll', () => {
      const scrollProgress = document.getElementById('scroll-progress');
      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      scrollProgress.style.width = (scrollTop / scrollHeight) * 100 + '%';
    });

    // Header Background on Scroll
    window.addEventListener('scroll', () => {
      const header = document.getElementById('header');
      if (window.scrollY > 50) {
        header.classList.add('bg-dark-900/95', 'backdrop-blur-xl', 'shadow-lg', 'shadow-black/20');
      } else {
        header.classList.remove('bg-dark-900/95', 'backdrop-blur-xl', 'shadow-lg', 'shadow-black/20');
      }
    });

    // Intersection Observer for Reveal Animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // Feature Card Mouse Tracking
    document.querySelectorAll('.feature-card').forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
        card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
      });
    });
  </script>

<?php get_footer();?>