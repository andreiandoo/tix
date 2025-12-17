<?php
/**
 * Template Name: Micro - Tracking Pixels
 * Description: Landing page for Tracking & Pixels Manager feature
 */

get_header();

$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
    // Hero
    'badge'                   => $current_lang === 'ro' ? '4 Platforme, 1 Dashboard' : '4 Platforms, 1 Dashboard',
    'hero_title'              => 'Tracking',
    'hero_title2'             => $current_lang === 'ro' ? 'centralizat' : 'centralized',
    'hero_desc'               => $current_lang === 'ro' ? 'GA4, GTM, Meta Pixel, TikTok Pixel. <strong class="text-white">Un singur loc</strong> pentru a le gestiona pe toate. GDPR compliant, ecommerce tracking automat, zero cod.' : 'GA4, GTM, Meta Pixel, TikTok Pixel. <strong class="text-white">One place</strong> to manage them all. GDPR compliant, automatic ecommerce tracking, zero code.',
    'cta_configure'           => $current_lang === 'ro' ? 'Configurează Tracking' : 'Configure Tracking',
    'cta_platforms'           => $current_lang === 'ro' ? 'Vezi platformele' : 'View platforms',

    // Hub section
    'tracking_hub'            => 'Tracking Hub',
    'platforms_active'        => $current_lang === 'ro' ? '4 platforme active' : '4 platforms active',
    'live'                    => 'LIVE',
    'sessions_today'          => $current_lang === 'ro' ? 'sesiuni azi' : 'sessions today',
    'active_tags'             => $current_lang === 'ro' ? 'tag-uri active' : 'active tags',
    'conversions'             => $current_lang === 'ro' ? 'conversii' : 'conversions',
    'live_events'             => $current_lang === 'ro' ? 'Evenimente Live' : 'Live Events',
    'streaming'               => 'streaming',
    'now'                     => $current_lang === 'ro' ? 'acum' : 'now',
    'gdpr_compliant'          => 'GDPR Compliant',
    'consent_active'          => $current_lang === 'ro' ? 'Consimtamant activ' : 'Consent active',
    'connected'               => 'Connected',
    'active'                  => 'Active',

    // Platforms section
    'platforms_supported'     => $current_lang === 'ro' ? 'Platforme Suportate' : 'Supported Platforms',
    'all_giants'              => $current_lang === 'ro' ? 'Toti gigantii' : 'All the giants',
    'in_one_place'            => $current_lang === 'ro' ? 'intr-un singur loc' : 'in one place',
    'platforms_desc'          => $current_lang === 'ro' ? 'Configurare simpla, fara cod. Activezi, introduci ID-ul, gata.' : 'Simple setup, no code. Activate, enter the ID, done.',
    'ga4_desc'                => $current_lang === 'ro' ? 'Masurare imbunatatita, tracking ecommerce complet, atribuire sursa trafic.' : 'Enhanced measurement, complete ecommerce tracking, traffic source attribution.',
    'unlimited_pageviews'     => $current_lang === 'ro' ? 'Pageviews nelimitate' : 'Unlimited pageviews',
    'gtm_desc'                => $current_lang === 'ro' ? 'Management avansat de tag-uri, dataLayer integrat, preview & debug.' : 'Advanced tag management, integrated dataLayer, preview & debug.',
    'custom_variables'        => $current_lang === 'ro' ? 'Variabile custom' : 'Custom variables',
    'meta_pixel_desc'         => $current_lang === 'ro' ? 'Facebook & Instagram ads, Custom Audiences, optimizare conversii.' : 'Facebook & Instagram ads, Custom Audiences, conversion optimization.',
    'tiktok_pixel_desc'       => $current_lang === 'ro' ? 'Urmarire campanii TikTok, optimizare livrare ads, masurare performanta.' : 'TikTok campaign tracking, ad delivery optimization, performance measurement.',

    // Ecommerce Events
    'ecommerce_tracking'      => $current_lang === 'ro' ? 'Tracking Ecommerce' : 'Ecommerce Tracking',
    'every_step'              => $current_lang === 'ro' ? 'Fiecare pas' : 'Every step',
    'tracked_auto'            => $current_lang === 'ro' ? 'urmarit automat' : 'tracked automatically',
    'ecommerce_desc'          => $current_lang === 'ro' ? 'De la prima vizita pana la achizitie. Toate evenimentele se activeaza automat.' : 'From first visit to purchase. All events are activated automatically.',
    'event_page'              => $current_lang === 'ro' ? 'Pagina eveniment' : 'Event page',
    'ticket_in_cart'          => $current_lang === 'ro' ? 'Bilet in cos' : 'Ticket in cart',
    'begin_payment'           => $current_lang === 'ro' ? 'Incepe plata' : 'Begin payment',
    'order_completed'         => $current_lang === 'ro' ? 'Comanda finalizata' : 'Order completed',
    'automatic'               => $current_lang === 'ro' ? 'automat' : 'automatic',

    // GDPR
    'gdpr_section'            => $current_lang === 'ro' ? 'GDPR Compliant' : 'GDPR Compliant',
    'consent'                 => $current_lang === 'ro' ? 'Consimtamant' : 'Consent',
    'transparent'             => $current_lang === 'ro' ? 'transparent' : 'transparent',
    'gdpr_desc'               => $current_lang === 'ro' ? 'Tracking-ul se activeaza doar cand utilizatorii dau permisiunea. Banner de cookie, categorii de consimtamant, stocare preferinte.' : 'Tracking is activated only when users give permission. Cookie banner, consent categories, preference storage.',
    'script_blocking'         => $current_lang === 'ro' ? 'Blocare Scripturi' : 'Script Blocking',
    'script_blocking_desc'    => $current_lang === 'ro' ? 'Tracking dezactivat pana la acordare consimtamant' : 'Tracking disabled until consent is granted',
    'granular_control'        => $current_lang === 'ro' ? 'Control Granular' : 'Granular Control',
    'granular_desc'           => $current_lang === 'ro' ? 'Analytics, Marketing, Functionale - utilizatorul alege' : 'Analytics, Marketing, Functional - user chooses',
    'audit_trail'             => 'Audit Trail',
    'audit_trail_desc'        => $current_lang === 'ro' ? 'Log-uri complete pentru conformitate si documentare' : 'Complete logs for compliance and documentation',
    'we_use_cookies'          => $current_lang === 'ro' ? 'Folosim cookie-uri 🍪' : 'We use cookies 🍪',
    'cookies_desc'            => $current_lang === 'ro' ? 'Folosim cookie-uri pentru a imbunatati experienta ta.' : 'We use cookies to improve your experience.',
    'necessary'               => $current_lang === 'ro' ? 'Necesare' : 'Necessary',
    'analytics'               => 'Analytics',
    'marketing'               => 'Marketing',
    'customize'               => $current_lang === 'ro' ? 'Personalizeaza' : 'Customize',
    'accept_all'              => $current_lang === 'ro' ? 'Accept toate' : 'Accept all',
    'gdpr_ready'              => 'GDPR Ready',

    // Debug
    'debugging'               => 'Debugging',
    'verify_everything'       => $current_lang === 'ro' ? 'Verifica totul' : 'Verify everything',
    'in_real_time'            => $current_lang === 'ro' ? 'in timp real' : 'in real time',
    'debug_desc'              => $current_lang === 'ro' ? 'Modul debug arata exact ce se intampla. Vezi evenimentele inainte sa se activeze, valideaza datele, rezolva problemele instant.' : 'Debug mode shows exactly what happens. See events before they fire, validate data, solve problems instantly.',
    'preview_mode'            => $current_lang === 'ro' ? 'Preview mode - vezi evenimentele inainte sa se activeze' : 'Preview mode - see events before they fire',
    'realtime_validation'     => $current_lang === 'ro' ? 'Validare in timp real pentru toate platformele' : 'Real-time validation for all platforms',
    'compatible_with'         => $current_lang === 'ro' ? 'Compatibil cu GA4 DebugView, Meta Pixel Helper' : 'Compatible with GA4 DebugView, Meta Pixel Helper',

    // Use Cases
    'use_cases'               => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
    'data_for'                => $current_lang === 'ro' ? 'Date pentru' : 'Data for',
    'better_decisions'        => $current_lang === 'ro' ? 'decizii mai bune' : 'better decisions',
    'marketing_analytics'     => $current_lang === 'ro' ? 'Analytics Marketing' : 'Marketing Analytics',
    'marketing_analytics_desc' => $current_lang === 'ro' ? 'Intelege ce canale genereaza vanzari. Atribuire completa de la primul contact pana la achizitie.' : 'Understand which channels generate sales. Complete attribution from first touch to purchase.',
    'ad_optimization'         => $current_lang === 'ro' ? 'Optimizare Ads' : 'Ad Optimization',
    'ad_optimization_desc'    => $current_lang === 'ro' ? 'Alimenteaza campaniile Meta si TikTok cu date precise. Cost per achizitie mai mic.' : 'Feed Meta and TikTok campaigns with precise data. Lower cost per acquisition.',
    'funnel_analysis'         => $current_lang === 'ro' ? 'Analiza Funnel' : 'Funnel Analysis',
    'funnel_analysis_desc'    => $current_lang === 'ro' ? 'Vezi unde renunta vizitatorii. Identifica si repara punctele de frictiune.' : 'See where visitors drop off. Identify and fix friction points.',
    'gdpr_compliance'         => $current_lang === 'ro' ? 'Conformitate GDPR' : 'GDPR Compliance',
    'gdpr_compliance_desc'    => $current_lang === 'ro' ? 'Indeplineste reglementarile europene. Audit trail complet pentru documentare.' : 'Meet European regulations. Complete audit trail for documentation.',
    'ab_testing'              => $current_lang === 'ro' ? 'Testare A/B' : 'A/B Testing',
    'ab_testing_desc'         => $current_lang === 'ro' ? 'Implementeaza teste prin GTM si masoara rezultatele. Optimizare bazata pe date.' : 'Implement tests through GTM and measure results. Data-driven optimization.',
    'multi_platform'          => $current_lang === 'ro' ? 'Atribuire Multi-Platforma' : 'Multi-Platform Attribution',
    'multi_platform_desc'     => $current_lang === 'ro' ? 'Compara performanta intre Meta, TikTok si Google. Aloca bugetul inteligent.' : 'Compare performance between Meta, TikTok and Google. Allocate budget smartly.',

    // Testimonial
    'testimonial_text'        => $current_lang === 'ro' ? 'Inainte aveam 4 dashboard-uri diferite si nu intelegeam nimic. Acum vad <span class="text-gradient-tracking font-semibold">totul intr-un singur loc</span>. ROAS-ul a crescut cu 40% pentru ca in sfarsit stiu ce functioneaza.' : 'Before I had 4 different dashboards and understood nothing. Now I see <span class="text-gradient-tracking font-semibold">everything in one place</span>. ROAS increased by 40% because I finally know what works.',
    'testimonial_author'      => 'Cristina D.',
    'testimonial_role'        => 'Performance Marketing Manager',

    // Final CTA
    'track'                   => $current_lang === 'ro' ? 'Urmareste' : 'Track',
    'smart'                   => $current_lang === 'ro' ? 'inteligent' : 'smart',
    'final_desc'              => $current_lang === 'ro' ? 'GA4, GTM, Meta, TikTok. Un dashboard, GDPR compliant, zero cod.' : 'GA4, GTM, Meta, TikTok. One dashboard, GDPR compliant, zero code.',
    'configure_tracking'      => $current_lang === 'ro' ? 'Configureaza Tracking' : 'Configure Tracking',
    'questions_contact'       => $current_lang === 'ro' ? 'Intrebari? Contacteaza-ne' : 'Questions? Contact us',
    'footer_note'             => $current_lang === 'ro' ? 'Pageviews nelimitate. Inclus in toate planurile.' : 'Unlimited pageviews. Included in all plans.',
];
?>

<style>
/* Text gradients */
.text-gradient {
  background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%);
  background-size: 200% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.text-gradient-tracking {
  background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 33%, #06b6d4 66%, #6366F1 100%);
  background-size: 300% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: shimmer 4s linear infinite;
}
.text-gradient-multi {
  background: linear-gradient(90deg, #4285F4, #0866FF, #00F2EA, #4285F4);
  background-size: 300% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: shimmer 3s linear infinite;
}

/* Reveal animations */
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
.reveal-delay-5 { transition-delay: 0.5s; }

/* Feature card glow */
.feature-card::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(99, 102, 241, 0.15), transparent 50%);
  opacity: 0;
  transition: opacity 0.5s;
  border-radius: inherit;
}
.feature-card:hover::before { opacity: 1; }

/* Platform card styles */
.platform-card {
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.platform-card:hover {
  transform: translateY(-8px) scale(1.02);
}

/* Data flow line */
.data-flow-line {
  position: relative;
  overflow: hidden;
}
.data-flow-line::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 0;
  width: 20px;
  height: 4px;
  background: linear-gradient(90deg, transparent, #6366F1, transparent);
  border-radius: 2px;
  animation: dataFlow 2s linear infinite;
}

/* Event dot pulse */
.event-dot {
  position: relative;
}
.event-dot::after {
  content: '';
  position: absolute;
  inset: -4px;
  border-radius: 50%;
  background: currentColor;
  opacity: 0.3;
  animation: pulseDot 2s ease-in-out infinite;
}

/* Console styling */
.console-line {
  font-family: 'Monaco', 'Menlo', monospace;
}

/* Consent banner */
.consent-banner {
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Orbiting platforms */
.orbit-item {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -20px;
  margin-left: -20px;
}
.orbit-item:nth-child(1) { animation: orbit 15s linear infinite; }
.orbit-item:nth-child(2) { animation: orbit 15s linear infinite; animation-delay: -3.75s; }
.orbit-item:nth-child(3) { animation: orbit 15s linear infinite; animation-delay: -7.5s; }
.orbit-item:nth-child(4) { animation: orbit 15s linear infinite; animation-delay: -11.25s; }

/* Platform status indicator */
.status-active {
  box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
  animation: ping-slow 3s cubic-bezier(0, 0, 0.2, 1) infinite;
}

/* GDPR shield */
.gdpr-shield {
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  box-shadow: 0 0 40px rgba(16, 185, 129, 0.3);
}

/* Event log animation */
.event-log-item {
  animation: eventFire 0.3s ease-out forwards;
}

/* Custom keyframes */
@keyframes shimmer {
  0% { background-position: 0% center; }
  100% { background-position: 200% center; }
}
@keyframes dataFlow {
  0% { transform: translateX(-100%); opacity: 0; }
  20% { opacity: 1; }
  80% { opacity: 1; }
  100% { transform: translateX(500%); opacity: 0; }
}
@keyframes pulseDot {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.5); opacity: 0.5; }
}
@keyframes eventFire {
  0% { transform: scale(0); opacity: 0; }
  50% { transform: scale(1.2); }
  100% { transform: scale(1); opacity: 1; }
}
@keyframes orbit {
  0% { transform: rotate(0deg) translateX(120px) rotate(0deg); }
  100% { transform: rotate(360deg) translateX(120px) rotate(-360deg); }
}
@keyframes ping-slow {
  75%, 100% { transform: scale(2); opacity: 0; }
}
</style>

<!-- ==================== HERO ==================== -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
  <!-- Background Effects -->
  <div class="absolute w-[800px] h-[800px] bg-tracking-purple/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[600px] h-[600px] bg-meta-blue/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[400px] h-[400px] bg-tiktok-cyan/10 rounded-full top-1/3 left-1/4 blur-[120px] pointer-events-none"></div>

  <!-- Floating data particles -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute w-2 h-2 rounded-full bg-google-blue/50 animate-float" style="top: 20%; left: 10%;"></div>
    <div class="absolute w-2 h-2 rounded-full bg-meta-blue/50 animate-float" style="top: 60%; left: 85%; animation-delay: 1s;"></div>
    <div class="absolute w-3 h-3 rounded-full bg-tiktok-cyan/50 animate-float" style="top: 40%; left: 70%; animation-delay: 2s;"></div>
    <div class="absolute w-2 h-2 rounded-full bg-tracking-purple/50 animate-float" style="top: 80%; left: 20%; animation-delay: 1.5s;"></div>
  </div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Hero Content -->
      <div class="reveal">
        <!-- Badge -->
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-tracking-purple/10 border border-tracking-purple/20 mb-6">
          <div class="flex items-center gap-1">
            <div class="w-3 h-3 rounded-full bg-google-blue"></div>
            <div class="w-3 h-3 rounded-full bg-meta-blue"></div>
            <div class="w-3 h-3 rounded-full bg-tiktok-cyan"></div>
            <div class="w-3 h-3 rounded-full bg-brand-green"></div>
          </div>
          <span class="text-tracking-purple text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
        </div>

        <!-- Heading -->
        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
          <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-tracking"><?php echo esc_html( $t['hero_title2'] ); ?></span>
        </h1>

        <!-- Description -->
        <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
          <?php echo $t['hero_desc']; ?>
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-tracking-purple to-tracking-indigo text-white hover:scale-105 hover:shadow-glow-violet transition-all duration-300">
            <?php echo esc_html( $t['cta_configure'] ); ?>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#platforme" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
            <?php echo esc_html( $t['cta_platforms'] ); ?>
          </a>
        </div>

        <!-- Platform logos row -->
        <div class="flex items-center gap-6">
          <div class="flex items-center gap-2 text-white/40 text-sm">
            <svg class="w-6 h-6 text-google-blue" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
            GA4
          </div>
          <div class="flex items-center gap-2 text-white/40 text-sm">
            <svg class="w-6 h-6 text-google-blue" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
            GTM
          </div>
          <div class="flex items-center gap-2 text-white/40 text-sm">
            <svg class="w-6 h-6 text-meta-blue" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            Meta
          </div>
          <div class="flex items-center gap-2 text-white/40 text-sm">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
            TikTok
          </div>
        </div>
      </div>

      <!-- Hero Visual - Central Hub -->
      <div class="reveal reveal-delay-1">
        <div class="relative" x-data="{
          events: [],
          addEvent(type) {
            this.events.push({ type, id: Date.now() });
            if (this.events.length > 5) this.events.shift();
          }
        }" x-init="
          setInterval(() => addEvent(['view_item', 'add_to_cart', 'purchase', 'page_view'][Math.floor(Math.random() * 4)]), 2000);
        ">
          <!-- Central Dashboard Card -->
          <div class="bg-dark-800/80 backdrop-blur-xl rounded-3xl p-6 border border-white/10 shadow-2xl relative overflow-hidden">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-tracking-purple to-tracking-indigo flex items-center justify-center">
                  <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <div>
                  <div class="text-white font-semibold"><?php echo esc_html( $t['tracking_hub'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['platforms_active'] ); ?></div>
                </div>
              </div>
              <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></div>
                <span class="text-brand-green text-xs font-medium"><?php echo esc_html( $t['live'] ); ?></span>
              </div>
            </div>

            <!-- Platform Status Grid -->
            <div class="grid grid-cols-2 gap-3 mb-6">
              <!-- GA4 -->
              <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="flex items-center gap-2 mb-2">
                  <div class="w-8 h-8 rounded-lg bg-google-blue/20 flex items-center justify-center">
                    <span class="text-google-blue font-bold text-xs">GA4</span>
                  </div>
                  <div class="w-2 h-2 rounded-full bg-brand-green status-active"></div>
                </div>
                <div class="text-white text-lg font-bold">2,847</div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['sessions_today'] ); ?></div>
              </div>

              <!-- GTM -->
              <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="flex items-center gap-2 mb-2">
                  <div class="w-8 h-8 rounded-lg bg-google-blue/20 flex items-center justify-center">
                    <span class="text-google-yellow font-bold text-xs">GTM</span>
                  </div>
                  <div class="w-2 h-2 rounded-full bg-brand-green status-active"></div>
                </div>
                <div class="text-white text-lg font-bold">12</div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['active_tags'] ); ?></div>
              </div>

              <!-- Meta Pixel -->
              <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="flex items-center gap-2 mb-2">
                  <div class="w-8 h-8 rounded-lg bg-meta-blue/20 flex items-center justify-center">
                    <span class="text-meta-blue font-bold text-xs">Meta</span>
                  </div>
                  <div class="w-2 h-2 rounded-full bg-brand-green status-active"></div>
                </div>
                <div class="text-white text-lg font-bold">156</div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['conversions'] ); ?></div>
              </div>

              <!-- TikTok -->
              <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="flex items-center gap-2 mb-2">
                  <div class="w-8 h-8 rounded-lg bg-tiktok-cyan/20 flex items-center justify-center">
                    <span class="text-tiktok-cyan font-bold text-xs">TT</span>
                  </div>
                  <div class="w-2 h-2 rounded-full bg-brand-green status-active"></div>
                </div>
                <div class="text-white text-lg font-bold">89</div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['conversions'] ); ?></div>
              </div>
            </div>

            <!-- Live Events Feed -->
            <div class="bg-dark-900/50 rounded-xl p-3">
              <div class="flex items-center justify-between mb-3">
                <div class="text-white/40 text-xs uppercase tracking-wider"><?php echo esc_html( $t['live_events'] ); ?></div>
                <div class="flex items-center gap-1">
                  <div class="w-1.5 h-1.5 rounded-full bg-brand-green animate-pulse"></div>
                  <span class="text-brand-green text-[10px]"><?php echo esc_html( $t['streaming'] ); ?></span>
                </div>
              </div>
              <div class="space-y-2 h-[120px] overflow-hidden">
                <template x-for="event in events.slice().reverse()" :key="event.id">
                  <div class="flex items-center gap-2 p-2 rounded-lg bg-white/5 text-xs event-log-item">
                    <div class="w-2 h-2 rounded-full" :class="{
                      'bg-google-blue': event.type === 'page_view',
                      'bg-brand-amber': event.type === 'view_item',
                      'bg-meta-blue': event.type === 'add_to_cart',
                      'bg-brand-green': event.type === 'purchase'
                    }"></div>
                    <span class="text-white/70 font-mono" x-text="event.type"></span>
                    <span class="text-white/30 ml-auto"><?php echo esc_html( $t['now'] ); ?></span>
                  </div>
                </template>
              </div>
            </div>

            <!-- GDPR Status -->
            <div class="mt-4 flex items-center justify-between p-3 rounded-xl bg-brand-green/10 border border-brand-green/20">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <span class="text-brand-green text-sm font-medium"><?php echo esc_html( $t['gdpr_compliant'] ); ?></span>
              </div>
              <span class="text-white/40 text-xs"><?php echo esc_html( $t['consent_active'] ); ?></span>
            </div>
          </div>

          <!-- Floating Platform Badges -->
          <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-google-blue/20 shadow-xl animate-float z-10">
            <div class="flex items-center gap-2">
              <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-google-blue to-google-green flex items-center justify-center">
                <span class="text-white font-bold text-xs">G</span>
              </div>
              <div>
                <div class="text-white text-sm font-medium">GA4</div>
                <div class="text-brand-green text-xs"><?php echo esc_html( $t['connected'] ); ?></div>
              </div>
            </div>
          </div>

          <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-meta-blue/20 shadow-xl animate-float [animation-delay:1s] z-10">
            <div class="flex items-center gap-2">
              <div class="w-8 h-8 rounded-lg bg-meta-blue flex items-center justify-center">
                <span class="text-white font-bold text-xs">f</span>
              </div>
              <div>
                <div class="text-white text-sm font-medium">Meta Pixel</div>
                <div class="text-brand-green text-xs"><?php echo esc_html( $t['active'] ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== PLATFORMS GRID ==================== -->
<section class="py-24 border-y border-white/5 relative" id="platforme">
  <div class="absolute inset-0 bg-gradient-to-r from-google-blue/5 via-meta-blue/5 to-tiktok-cyan/5"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-tracking-purple text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['platforms_supported'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['all_giants'] ); ?><br><span class="text-gradient-multi"><?php echo esc_html( $t['in_one_place'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['platforms_desc'] ); ?></p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- GA4 -->
      <div class="platform-card bg-dark-800 rounded-2xl p-6 border border-white/10 hover:border-google-blue/30 transition-all duration-500 reveal">
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-google-blue via-google-red to-google-green flex items-center justify-center mb-4 shadow-lg">
          <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Google Analytics 4</h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['ga4_desc'] ); ?></p>
        <div class="space-y-2">
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <?php echo esc_html( $t['unlimited_pageviews'] ); ?>
          </div>
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Enhanced Measurement
          </div>
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            User Properties
          </div>
        </div>
      </div>

      <!-- GTM -->
      <div class="platform-card bg-dark-800 rounded-2xl p-6 border border-white/10 hover:border-google-yellow/30 transition-all duration-500 reveal reveal-delay-1">
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-google-blue to-google-yellow flex items-center justify-center mb-4 shadow-lg">
          <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Google Tag Manager</h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['gtm_desc'] ); ?></p>
        <div class="space-y-2">
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            DataLayer events
          </div>
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <?php echo esc_html( $t['custom_variables'] ); ?>
          </div>
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Version control
          </div>
        </div>
      </div>

      <!-- Meta Pixel -->
      <div class="platform-card bg-dark-800 rounded-2xl p-6 border border-white/10 hover:border-meta-blue/30 transition-all duration-500 reveal reveal-delay-2">
        <div class="w-16 h-16 rounded-2xl bg-meta-blue flex items-center justify-center mb-4 shadow-lg shadow-meta-blue/30">
          <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Meta Pixel</h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['meta_pixel_desc'] ); ?></p>
        <div class="space-y-2">
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            ViewContent/Purchase
          </div>
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Custom Audiences
          </div>
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Retargeting
          </div>
        </div>
      </div>

      <!-- TikTok Pixel -->
      <div class="platform-card bg-dark-800 rounded-2xl p-6 border border-white/10 hover:border-tiktok-cyan/30 transition-all duration-500 reveal reveal-delay-3">
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-tiktok-pink via-black to-tiktok-cyan flex items-center justify-center mb-4 shadow-lg">
          <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">TikTok Pixel</h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['tiktok_pixel_desc'] ); ?></p>
        <div class="space-y-2">
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Standard Events
          </div>
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Ad Optimization
          </div>
          <div class="flex items-center gap-2 text-xs text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Performance Tracking
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== ECOMMERCE EVENTS ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="absolute w-[500px] h-[500px] bg-tracking-purple/15 rounded-full top-1/2 -right-60 blur-[120px] pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-amber text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['ecommerce_tracking'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['every_step'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['tracked_auto'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['ecommerce_desc'] ); ?></p>
    </div>

    <!-- Funnel Visualization -->
    <div class="max-w-4xl mx-auto reveal">
      <div class="relative">
        <!-- Funnel Steps -->
        <div class="grid grid-cols-4 gap-4">
          <!-- View Item -->
          <div class="text-center">
            <div class="relative h-48 flex flex-col justify-end mb-4">
              <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-amber/30 to-brand-amber/10 rounded-t-xl" style="height: 100%;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-3xl">👀</span>
                </div>
              </div>
              <div class="absolute -top-2 left-1/2 -translate-x-1/2 px-3 py-1 bg-brand-amber rounded-full text-dark-900 text-xs font-bold">
                100%
              </div>
            </div>
            <div class="text-white font-semibold mb-1">view_item</div>
            <div class="text-white/40 text-xs"><?php echo esc_html( $t['event_page'] ); ?></div>
            <div class="mt-2 px-2 py-1 rounded bg-white/5 text-[10px] font-mono text-white/50">
              GA4 • Meta • TikTok
            </div>
          </div>

          <!-- Add to Cart -->
          <div class="text-center">
            <div class="relative h-48 flex flex-col justify-end mb-4">
              <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-meta-blue/30 to-meta-blue/10 rounded-t-xl" style="height: 65%;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-3xl">🛒</span>
                </div>
              </div>
              <div class="absolute left-1/2 -translate-x-1/2 px-3 py-1 bg-meta-blue rounded-full text-white text-xs font-bold" style="bottom: 65%;">
                65%
              </div>
            </div>
            <div class="text-white font-semibold mb-1">add_to_cart</div>
            <div class="text-white/40 text-xs"><?php echo esc_html( $t['ticket_in_cart'] ); ?></div>
            <div class="mt-2 px-2 py-1 rounded bg-white/5 text-[10px] font-mono text-white/50">
              GA4 • Meta • TikTok
            </div>
          </div>

          <!-- Begin Checkout -->
          <div class="text-center">
            <div class="relative h-48 flex flex-col justify-end mb-4">
              <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-tracking-purple/30 to-tracking-purple/10 rounded-t-xl" style="height: 40%;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-3xl">💳</span>
                </div>
              </div>
              <div class="absolute left-1/2 -translate-x-1/2 px-3 py-1 bg-tracking-purple rounded-full text-white text-xs font-bold" style="bottom: 40%;">
                40%
              </div>
            </div>
            <div class="text-white font-semibold mb-1">begin_checkout</div>
            <div class="text-white/40 text-xs"><?php echo esc_html( $t['begin_payment'] ); ?></div>
            <div class="mt-2 px-2 py-1 rounded bg-white/5 text-[10px] font-mono text-white/50">
              GA4 • Meta • TikTok
            </div>
          </div>

          <!-- Purchase -->
          <div class="text-center">
            <div class="relative h-48 flex flex-col justify-end mb-4">
              <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-green/30 to-brand-green/10 rounded-t-xl" style="height: 28%;">
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-3xl">✅</span>
                </div>
              </div>
              <div class="absolute left-1/2 -translate-x-1/2 px-3 py-1 bg-brand-green rounded-full text-white text-xs font-bold" style="bottom: 28%;">
                28%
              </div>
            </div>
            <div class="text-white font-semibold mb-1">purchase</div>
            <div class="text-white/40 text-xs"><?php echo esc_html( $t['order_completed'] ); ?></div>
            <div class="mt-2 px-2 py-1 rounded bg-white/5 text-[10px] font-mono text-white/50">
              GA4 • Meta • TikTok
            </div>
          </div>
        </div>

        <!-- Flow Arrows -->
        <div class="absolute top-1/2 left-[25%] w-[16%] h-0.5 bg-gradient-to-r from-brand-amber to-meta-blue -translate-y-1/2 data-flow-line"></div>
        <div class="absolute top-1/2 left-[50%] w-[16%] h-0.5 bg-gradient-to-r from-meta-blue to-tracking-purple -translate-y-1/2 data-flow-line" style="animation-delay: 0.5s;"></div>
        <div class="absolute top-1/2 left-[75%] w-[16%] h-0.5 bg-gradient-to-r from-tracking-purple to-brand-green -translate-y-1/2 data-flow-line" style="animation-delay: 1s;"></div>
      </div>

      <!-- DataLayer Preview -->
      <div class="mt-12 bg-dark-800 rounded-2xl p-6 border border-white/10 reveal reveal-delay-1">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center gap-2">
            <div class="w-3 h-3 rounded-full bg-red-500"></div>
            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
            <div class="w-3 h-3 rounded-full bg-green-500"></div>
            <span class="ml-2 text-white/40 text-sm">dataLayer.push()</span>
          </div>
          <span class="text-brand-green text-xs font-mono"><?php echo esc_html( $t['automatic'] ); ?></span>
        </div>
        <pre class="text-xs overflow-x-auto"><code class="text-white/70 console-line">{
  <span class="text-meta-blue">"event"</span>: <span class="text-brand-green">"purchase"</span>,
  <span class="text-meta-blue">"ecommerce"</span>: {
    <span class="text-meta-blue">"transaction_id"</span>: <span class="text-brand-green">"order_456"</span>,
    <span class="text-meta-blue">"currency"</span>: <span class="text-brand-green">"EUR"</span>,
    <span class="text-meta-blue">"value"</span>: <span class="text-brand-amber">150.00</span>,
    <span class="text-meta-blue">"items"</span>: [{ <span class="text-white/40">...</span> }]
  }
}</code></pre>
      </div>
    </div>
  </div>
</section>

<!-- ==================== GDPR CONSENT ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Content -->
      <div class="reveal">
        <span class="text-brand-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['gdpr_section'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['consent'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['transparent'] ); ?></span></h2>
        <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['gdpr_desc'] ); ?></p>

        <div class="space-y-4">
          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div>
              <div class="text-white font-medium"><?php echo esc_html( $t['script_blocking'] ); ?></div>
              <div class="text-white/50 text-sm"><?php echo esc_html( $t['script_blocking_desc'] ); ?></div>
            </div>
          </div>

          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="w-12 h-12 rounded-xl bg-tracking-purple/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-tracking-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
            </div>
            <div>
              <div class="text-white font-medium"><?php echo esc_html( $t['granular_control'] ); ?></div>
              <div class="text-white/50 text-sm"><?php echo esc_html( $t['granular_desc'] ); ?></div>
            </div>
          </div>

          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <div>
              <div class="text-white font-medium"><?php echo esc_html( $t['audit_trail'] ); ?></div>
              <div class="text-white/50 text-sm"><?php echo esc_html( $t['audit_trail_desc'] ); ?></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Consent Banner Visual -->
      <div class="reveal reveal-delay-1">
        <div class="relative">
          <!-- Browser Frame -->
          <div class="bg-dark-800 rounded-2xl overflow-hidden border border-white/10">
            <!-- Browser Chrome -->
            <div class="bg-dark-700 px-4 py-3 flex items-center gap-4 border-b border-white/10">
              <div class="flex gap-2">
                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                <div class="w-3 h-3 rounded-full bg-green-500"></div>
              </div>
              <div class="flex-1 bg-dark-800 rounded-lg px-4 py-1.5 text-white/40 text-sm">
                eventsite.com
              </div>
            </div>

            <!-- Page Content (blurred) -->
            <div class="h-64 bg-dark-900 p-6 relative">
              <div class="blur-sm">
                <div class="h-8 bg-white/5 rounded mb-4 w-1/2"></div>
                <div class="h-4 bg-white/5 rounded mb-2 w-3/4"></div>
                <div class="h-4 bg-white/5 rounded mb-2 w-2/3"></div>
                <div class="grid grid-cols-3 gap-4 mt-6">
                  <div class="h-20 bg-white/5 rounded"></div>
                  <div class="h-20 bg-white/5 rounded"></div>
                  <div class="h-20 bg-white/5 rounded"></div>
                </div>
              </div>

              <!-- Consent Banner Overlay -->
              <div class="absolute inset-x-4 bottom-4 consent-banner bg-dark-800/95 rounded-xl p-4" x-data="{ expanded: false }">
                <div class="flex items-start gap-3 mb-3">
                  <div class="w-10 h-10 rounded-lg gdpr-shield flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  </div>
                  <div class="flex-1">
                    <div class="text-white font-semibold text-sm mb-1"><?php echo esc_html( $t['we_use_cookies'] ); ?></div>
                    <div class="text-white/50 text-xs"><?php echo esc_html( $t['cookies_desc'] ); ?></div>
                  </div>
                </div>

                <!-- Category toggles -->
                <div x-show="expanded" class="space-y-2 mb-3">
                  <div class="flex items-center justify-between p-2 rounded-lg bg-white/5">
                    <span class="text-white/70 text-xs"><?php echo esc_html( $t['necessary'] ); ?></span>
                    <div class="w-8 h-4 rounded-full bg-brand-green/30 relative">
                      <div class="absolute right-0.5 top-0.5 w-3 h-3 rounded-full bg-brand-green"></div>
                    </div>
                  </div>
                  <div class="flex items-center justify-between p-2 rounded-lg bg-white/5">
                    <span class="text-white/70 text-xs"><?php echo esc_html( $t['analytics'] ); ?></span>
                    <div class="w-8 h-4 rounded-full bg-white/20 relative cursor-pointer">
                      <div class="absolute left-0.5 top-0.5 w-3 h-3 rounded-full bg-white/50"></div>
                    </div>
                  </div>
                  <div class="flex items-center justify-between p-2 rounded-lg bg-white/5">
                    <span class="text-white/70 text-xs"><?php echo esc_html( $t['marketing'] ); ?></span>
                    <div class="w-8 h-4 rounded-full bg-white/20 relative cursor-pointer">
                      <div class="absolute left-0.5 top-0.5 w-3 h-3 rounded-full bg-white/50"></div>
                    </div>
                  </div>
                </div>

                <div class="flex gap-2">
                  <button @click="expanded = !expanded" class="flex-1 px-3 py-2 rounded-lg bg-white/10 text-white text-xs font-medium hover:bg-white/20 transition-colors">
                    <?php echo esc_html( $t['customize'] ); ?>
                  </button>
                  <button class="flex-1 px-3 py-2 rounded-lg bg-brand-green text-white text-xs font-medium hover:bg-brand-green/90 transition-colors">
                    <?php echo esc_html( $t['accept_all'] ); ?>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Floating badge -->
          <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/20 shadow-xl animate-float">
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-brand-green text-sm font-medium"><?php echo esc_html( $t['gdpr_ready'] ); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== DEBUG MODE ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Console Visual -->
      <div class="order-2 lg:order-1 reveal">
        <div class="bg-dark-950 rounded-2xl overflow-hidden border border-white/10">
          <!-- Console Header -->
          <div class="bg-dark-800 px-4 py-2 flex items-center justify-between border-b border-white/10">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
              <span class="text-white/60 text-sm">Console - Debug Mode</span>
            </div>
            <div class="px-2 py-0.5 rounded bg-brand-amber/20 text-brand-amber text-xs">DEBUG</div>
          </div>

          <!-- Console Content -->
          <div class="p-4 font-mono text-xs space-y-2 h-64 overflow-y-auto">
            <div class="flex gap-2">
              <span class="text-tracking-purple">[Tracking]</span>
              <span class="text-white/70">GA4 initialized: G-XXXXXXXXXX</span>
            </div>
            <div class="flex gap-2">
              <span class="text-tracking-purple">[Tracking]</span>
              <span class="text-white/70">GTM container loaded: GTM-XXXXXXX</span>
            </div>
            <div class="flex gap-2">
              <span class="text-meta-blue">[Meta]</span>
              <span class="text-white/70">Pixel initialized: 123456789</span>
            </div>
            <div class="flex gap-2">
              <span class="text-tiktok-cyan">[TikTok]</span>
              <span class="text-white/70">Pixel initialized: CXXXXXXX</span>
            </div>
            <div class="border-t border-white/10 my-2"></div>
            <div class="flex gap-2">
              <span class="text-brand-green">[Event]</span>
              <span class="text-white/70">page_view → GA4 ✓</span>
            </div>
            <div class="flex gap-2">
              <span class="text-brand-green">[Event]</span>
              <span class="text-white/70">PageView → Meta ✓</span>
            </div>
            <div class="flex gap-2">
              <span class="text-brand-green">[Event]</span>
              <span class="text-white/70">PageView → TikTok ✓</span>
            </div>
            <div class="border-t border-white/10 my-2"></div>
            <div class="flex gap-2">
              <span class="text-brand-amber">[DataLayer]</span>
              <span class="text-white/70">view_item pushed</span>
            </div>
            <div class="pl-4 text-white/40">
              → item_id: "ticket_123"<br>
              → item_name: "VIP Pass"<br>
              → price: 75.00
            </div>
            <div class="flex gap-2">
              <span class="text-brand-green">[Event]</span>
              <span class="text-white/70">view_item → GA4 ✓</span>
            </div>
            <div class="flex gap-2">
              <span class="text-brand-green">[Event]</span>
              <span class="text-white/70">ViewContent → Meta ✓</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="order-1 lg:order-2 reveal reveal-delay-1">
        <span class="text-brand-amber text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['debugging'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['verify_everything'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['in_real_time'] ); ?></span></h2>
        <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['debug_desc'] ); ?></p>

        <div class="space-y-4">
          <div class="flex items-center gap-3 p-3 rounded-xl bg-dark-800/50 border border-white/10">
            <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
            <span class="text-white/70 text-sm"><?php echo esc_html( $t['preview_mode'] ); ?></span>
          </div>
          <div class="flex items-center gap-3 p-3 rounded-xl bg-dark-800/50 border border-white/10">
            <svg class="w-5 h-5 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
            <span class="text-white/70 text-sm"><?php echo esc_html( $t['realtime_validation'] ); ?></span>
          </div>
          <div class="flex items-center gap-3 p-3 rounded-xl bg-dark-800/50 border border-white/10">
            <svg class="w-5 h-5 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
            <span class="text-white/70 text-sm"><?php echo esc_html( $t['compatible_with'] ); ?></span>
          </div>
        </div>

        <div class="mt-6 p-4 rounded-xl bg-brand-amber/10 border border-brand-amber/20">
          <code class="text-brand-amber text-sm">localStorage.setItem('tracking_debug', 'true');</code>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== USE CASES ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-violet text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['use_cases'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['data_for'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['better_decisions'] ); ?></span></h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Marketing Analytics -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-google-blue/30 transition-all duration-500 reveal">
        <div class="w-14 h-14 rounded-2xl bg-google-blue/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-google-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['marketing_analytics'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['marketing_analytics_desc'] ); ?></p>
      </div>

      <!-- Ad Optimization -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-meta-blue/30 transition-all duration-500 reveal reveal-delay-1">
        <div class="w-14 h-14 rounded-2xl bg-meta-blue/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-meta-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['ad_optimization'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['ad_optimization_desc'] ); ?></p>
      </div>

      <!-- Funnel Analysis -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-tracking-purple/30 transition-all duration-500 reveal reveal-delay-2">
        <div class="w-14 h-14 rounded-2xl bg-tracking-purple/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-tracking-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['funnel_analysis'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['funnel_analysis_desc'] ); ?></p>
      </div>

      <!-- GDPR Compliance -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-green/30 transition-all duration-500 reveal reveal-delay-3">
        <div class="w-14 h-14 rounded-2xl bg-brand-green/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['gdpr_compliance'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['gdpr_compliance_desc'] ); ?></p>
      </div>

      <!-- A/B Testing -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-amber/30 transition-all duration-500 reveal reveal-delay-4">
        <div class="w-14 h-14 rounded-2xl bg-brand-amber/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['ab_testing'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['ab_testing_desc'] ); ?></p>
      </div>

      <!-- Multi-Platform -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-tiktok-cyan/30 transition-all duration-500 reveal reveal-delay-5">
        <div class="w-14 h-14 rounded-2xl bg-tiktok-cyan/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-tiktok-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['multi_platform'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['multi_platform_desc'] ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== TESTIMONIAL ==================== -->
<section class="py-24 relative">
  <div class="max-w-4xl mx-auto px-6 lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="bg-gradient-to-br from-tracking-purple/10 to-tracking-indigo/10 rounded-3xl p-8 md:p-12 border border-tracking-purple/20">
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
          "<?php echo $t['testimonial_text']; ?>"
        </blockquote>
        <!-- Author -->
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-full bg-gradient-to-br from-tracking-purple to-tracking-indigo"></div>
          <div>
            <div class="font-semibold text-white"><?php echo esc_html( $t['testimonial_author'] ); ?></div>
            <div class="text-white/50"><?php echo esc_html( $t['testimonial_role'] ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FINAL CTA ==================== -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-tracking-purple/20 via-transparent to-meta-blue/20"></div>
  <div class="absolute w-[800px] h-[800px] bg-tracking-purple/30 rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none"></div>

  <!-- Orbiting platforms -->
  <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
    <div class="relative w-[300px] h-[300px]">
      <div class="orbit-item w-10 h-10 rounded-full bg-google-blue flex items-center justify-center text-white text-xs font-bold">G</div>
      <div class="orbit-item w-10 h-10 rounded-full bg-meta-blue flex items-center justify-center text-white text-xs font-bold">f</div>
      <div class="orbit-item w-10 h-10 rounded-full bg-tiktok-cyan flex items-center justify-center text-dark-900 text-xs font-bold">T</div>
      <div class="orbit-item w-10 h-10 rounded-full bg-google-yellow flex items-center justify-center text-dark-900 text-xs font-bold">GTM</div>
    </div>
  </div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
    <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['track'] ); ?><br><span class="text-gradient-tracking"><?php echo esc_html( $t['smart'] ); ?></span></h2>
    <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-tracking-purple to-tracking-indigo text-white hover:scale-105 hover:shadow-glow-violet transition-all duration-300">
        <?php echo esc_html( $t['configure_tracking'] ); ?>
        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
        <?php echo esc_html( $t['questions_contact'] ); ?>
      </a>
    </div>

    <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3"><?php echo esc_html( $t['footer_note'] ); ?></p>
  </div>
</section>

<script>
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

<?php get_footer(); ?>
