<?php
/**
 * Template Name: Intelligence Hub
 * Description: Tixello Intelligence Hub - Data & ML Platform
 */

// Multilingual translations (RO/EN)
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';

$t = [
    // Hero Section
    'badge_investor' => $lang === 'en' ? 'Investor & Partner Documentation' : 'Investor & Partner Documentation',
    'hero_title_1' => $lang === 'en' ? 'The Data Layer That' : 'The Data Layer That',
    'hero_title_2' => $lang === 'en' ? 'Powers Everything' : 'Powers Everything',
    'hero_desc_1' => $lang === 'en' ? 'Other platforms sell tickets and collect data as a side-effect.' : 'Alte platforme vând bilete și colectează date ca side-effect.',
    'hero_desc_2' => $lang === 'en' ? 'Tixello collects data and sells tickets as a result.' : 'Tixello colectează date și vinde bilete ca rezultat.',
    'stat_data_points' => $lang === 'en' ? 'Data points/user' : 'Data points/user',
    'stat_ai_engines' => $lang === 'en' ? 'AI Engines' : 'AI Engines',
    'stat_latency' => $lang === 'en' ? 'P99 Latency' : 'P99 Latency',
    'architecture_title' => $lang === 'en' ? 'SYSTEM ARCHITECTURE' : 'SYSTEM ARCHITECTURE',
    'arch_data_capture' => $lang === 'en' ? 'Data Capture' : 'Data Capture',
    'arch_touchpoints' => $lang === 'en' ? '50+ touchpoints' : '50+ touchpoints',
    'arch_ml_processing' => $lang === 'en' ? 'ML Processing' : 'ML Processing',
    'arch_engines' => $lang === 'en' ? '7 engines, real-time' : '7 engines, real-time',
    'arch_output' => $lang === 'en' ? 'Actionable Output' : 'Actionable Output',
    'arch_revenue' => $lang === 'en' ? 'Revenue growth' : 'Revenue growth',
    'scroll' => $lang === 'en' ? 'Scroll' : 'Scroll',

    // THE PROBLEM Section
    'problem_badge' => $lang === 'en' ? 'THE PROBLEM' : 'THE PROBLEM',
    'problem_title_1' => $lang === 'en' ? 'Why Other Platforms' : 'De Ce Alte Platforme',
    'problem_title_2' => $lang === 'en' ? 'Fail' : 'Eșuează',
    'problem_desc' => $lang === 'en' ? 'Traditional ticketing platforms were built to sell tickets. Data is an afterthought.' : 'Platformele tradiționale de ticketing au fost construite pentru a vinde bilete. Datele sunt un afterthought.',
    'other_platforms' => $lang === 'en' ? 'Other Platforms' : 'Alte Platforme',
    'limited_data' => $lang === 'en' ? 'Limited data' : 'Date limitate',
    'limited_data_desc' => $lang === 'en' ? 'Only name, email, ticket purchased' : 'Doar nume, email, bilet cumpărat',
    'zero_crossref' => $lang === 'en' ? 'Zero cross-referencing' : 'Zero cross-referencing',
    'zero_crossref_desc' => $lang === 'en' ? 'Each event is isolated' : 'Fiecare eveniment e izolat',
    'manual_export' => $lang === 'en' ? 'Manual export' : 'Export manual',
    'manual_export_desc' => $lang === 'en' ? 'CSVs, copy-paste to CRM' : 'CSV-uri, copy-paste în CRM',
    'no_predictions' => $lang === 'en' ? 'No predictions' : 'Fără predicții',
    'no_predictions_desc' => $lang === 'en' ? 'Reactive, not proactive' : 'Reactive, nu proactive',
    'tixello_intelligence' => $lang === 'en' ? 'Tixello Intelligence' : 'Tixello Intelligence',
    'data_points_per_user' => $lang === 'en' ? '50+ data points per user' : '50+ data points per user',
    'behavioral_trans_eng' => $lang === 'en' ? 'Behavioral, transactional, engagement' : 'Behavioral, transactional, engagement',
    'cross_event_intel' => $lang === 'en' ? 'Cross-event intelligence' : 'Cross-event intelligence',
    'cross_event_desc' => $lang === 'en' ? 'One user = complete history' : 'Un user = istoric complet',
    'realtime_integrations' => $lang === 'en' ? 'Real-time integrations' : 'Real-time integrations',
    'realtime_int_desc' => $lang === 'en' ? 'API, webhooks, Facebook/Google Ads' : 'API, webhooks, Facebook/Google Ads',
    'ml_engines_builtin' => $lang === 'en' ? '7 ML engines built-in' : '7 ML engines built-in',
    'ml_engines_desc' => $lang === 'en' ? 'Predictions, recommendations, automation' : 'Predicții, recomandări, automation',
    'quote_1' => $lang === 'en' ? 'Other platforms sell tickets and collect data.' : 'Alte platforme vând bilete și colectează date.',
    'quote_2' => $lang === 'en' ? 'We collect data and sell tickets.' : 'Noi colectăm date și vindem bilete.',
    'quote_author' => $lang === 'en' ? "— Tixello's Data-First Philosophy" : '— Filozofia Data-First a Tixello',

    // Identity Resolution Section
    'identity_badge' => $lang === 'en' ? 'IDENTITY RESOLUTION' : 'IDENTITY RESOLUTION',
    'identity_title_1' => $lang === 'en' ? 'From' : 'De la',
    'identity_title_anon' => $lang === 'en' ? 'Anonymous' : 'Anonim',
    'identity_title_to' => $lang === 'en' ? 'to' : 'la',
    'identity_title_real' => $lang === 'en' ? 'Real Person' : 'Persoană Reală',
    'identity_desc_1' => $lang === 'en' ? 'Tixello tracks user behavior' : 'Tixello urmărește comportamentul utilizatorilor',
    'identity_desc_anon' => $lang === 'en' ? 'anonymously' : 'anonim',
    'identity_desc_2' => $lang === 'en' ? 'across multiple sites and devices. At checkout, all data is associated with a real identity.' : 'pe multiple site-uri și device-uri. La checkout, toate datele se asociază cu o identitate reală.',
    'journey_tracked' => $lang === 'en' ? 'Customer Journey Tracked' : 'Customer Journey Tracked',
    'device_1' => $lang === 'en' ? 'Device 1' : 'Device 1',
    'search_rock' => $lang === 'en' ? 'Searches "rock concert"' : 'Caută "concert rock"',
    'device_2' => $lang === 'en' ? 'Device 2' : 'Device 2',
    'visits_artist' => $lang === 'en' ? 'Visits artist page' : 'Vizitează artist page',
    'other_site' => $lang === 'en' ? 'Other Site' : 'Alt Site',
    'organizer_site' => $lang === 'en' ? 'Organizer site' : 'Site organizator',
    'add_to_cart' => $lang === 'en' ? 'Add to Cart' : 'Add to Cart',
    'still_anon' => $lang === 'en' ? 'Still anonymous' : 'Încă anonim',
    'checkout' => $lang === 'en' ? 'Checkout' : 'Checkout',
    'identity_resolved' => $lang === 'en' ? 'Identity resolved!' : 'Identity resolved!',
    'before_checkout' => $lang === 'en' ? 'Before Checkout' : 'Înainte de Checkout',
    'after_checkout' => $lang === 'en' ? 'After Checkout' : 'După Checkout',
    'profile_merged' => $lang === 'en' ? '// Full profile merged!' : '// Full profile merged!',
    'cross_device_linking' => $lang === 'en' ? 'Cross-Device Linking' : 'Cross-Device Linking',
    'cross_device_desc' => $lang === 'en' ? 'Mobile, tablet, desktop — all automatically connected to the same profile.' : 'Mobil, tablet, desktop — toate conectate automat la același profil.',
    'cross_site_tracking' => $lang === 'en' ? 'Cross-Site Tracking' : 'Cross-Site Tracking',
    'cross_site_desc' => $lang === 'en' ? 'Marketplace + organizer sites = complete vision.' : 'Marketplace + site-uri organizatori = viziune completă.',
    'instant_personalization' => $lang === 'en' ? 'Instant Personalization' : 'Instant Personalization',
    'instant_pers_desc' => $lang === 'en' ? 'At checkout we already know everything. Precise recommendations, personalized offers.' : 'La checkout știm deja tot. Recomandări precise, oferte personalizate.',

    // Demo Section
    'demo_title_1' => $lang === 'en' ? 'Interactive Demo:' : 'Demo Interactiv:',
    'demo_title_2' => $lang === 'en' ? 'Identity Resolution + Personalization' : 'Identity Resolution + Personalization',
    'demo_desc' => $lang === 'en' ? "Follow a user's journey from anonymous to loyal customer, and see how AI personalizes everything in real-time." : 'Urmărește călătoria unui utilizator de la anonim la client loial, și vezi cum AI-ul personalizează totul în timp real.',
    'demo_progress' => $lang === 'en' ? 'Demo Progress' : 'Demo Progress',
    'play_demo' => $lang === 'en' ? 'Play Demo' : 'Play Demo',
    'pause' => $lang === 'en' ? 'Pause' : 'Pause',
    'restart' => $lang === 'en' ? 'Restart' : 'Restart',
    'step' => $lang === 'en' ? 'Step:' : 'Step:',
    'phase1_identity' => $lang === 'en' ? 'Identity Resolution' : 'Identity Resolution',
    'phase2_cross_site' => $lang === 'en' ? 'Cross-Site Personalization' : 'Cross-Site Personalization',
    'phase3_profile' => $lang === 'en' ? 'Profile & Automation' : 'Profile & Automation',

    // Demo Screen Content
    'choose_ticket' => $lang === 'en' ? 'Choose your ticket' : 'Alege biletul tău',
    'general_admission' => $lang === 'en' ? 'General Admission' : 'General Admission',
    'standing_access' => $lang === 'en' ? 'Standing zone access' : 'Acces zonă standing',
    'add_btn' => $lang === 'en' ? 'Add' : 'Adaugă',
    'vip_experience' => $lang === 'en' ? 'VIP Experience' : 'VIP Experience',
    'vip_access' => $lang === 'en' ? 'VIP access + meet & greet' : 'Acces VIP + meet & greet',
    'your_cart' => $lang === 'en' ? 'Your cart' : 'Coșul tău',
    'continue_checkout' => $lang === 'en' ? 'Continue to checkout →' : 'Continuă spre checkout →',
    'secure_checkout' => $lang === 'en' ? 'Secure checkout' : 'Checkout securizat',
    'email_label' => $lang === 'en' ? 'Email *' : 'Email *',
    'name_label' => $lang === 'en' ? 'Full name *' : 'Nume complet *',
    'phone_label' => $lang === 'en' ? 'Phone' : 'Telefon',
    'order_summary' => $lang === 'en' ? 'Order summary' : 'Sumar comandă',
    'total' => $lang === 'en' ? 'Total' : 'Total',
    'good_evening' => $lang === 'en' ? 'Good evening, Maria! 👋' : 'Bună seara, Maria! 👋',
    'recommended_for_you' => $lang === 'en' ? 'Recommended for you' : 'Recomandate pentru tine',
    'personalized' => $lang === 'en' ? 'Personalized' : 'Personalizat',
    'because_rock' => $lang === 'en' ? 'Because you like rock' : 'Pentru că îți place rock-ul',
    'special_offer' => $lang === 'en' ? 'Special offer for you!' : 'Ofertă specială pentru tine!',
    'upgrade_vip' => $lang === 'en' ? 'Upgrade to Untold VIP with' : 'Upgrade la Untold VIP cu',
    'discount' => $lang === 'en' ? '20% discount' : '20% discount',
    'see_offer' => $lang === 'en' ? 'See offer' : 'Vezi oferta',
    'verified_customer' => $lang === 'en' ? 'Verified Customer' : 'Verified Customer',
    'identity_label' => $lang === 'en' ? 'Identity' : 'Identitate',
    'behavior' => $lang === 'en' ? 'Behavior' : 'Comportament',
    'affinities' => $lang === 'en' ? 'Affinities' : 'Afinități',
    'ml_predictions' => $lang === 'en' ? 'ML Predictions' : 'Predicții ML',
    'detected_intents' => $lang === 'en' ? 'Detected Intents' : 'Intenții Detectate',
    'rock_romanian' => $lang === 'en' ? '🎸 Romanian rock' : '🎸 Rock românesc',
    'prefers_vip' => $lang === 'en' ? '💎 Prefers VIP' : '💎 Preferă VIP',
    'summer_events' => $lang === 'en' ? '📅 Summer events' : '📅 Evenimente vară',
    'open_festivals' => $lang === 'en' ? '🎪 Open to festivals' : '🎪 Deschis la festivaluri',
    'automated_actions' => $lang === 'en' ? 'Automated Actions for Maria' : 'Acțiuni Automate pentru Maria',
    'triggered_by' => $lang === 'en' ? 'Triggered by Intelligence Hub' : 'Triggered by Intelligence Hub',
    'personalized_email' => $lang === 'en' ? 'Personalized Email' : 'Email Personalizat',
    'rock_concerts_like' => $lang === 'en' ? '"Rock concerts you might like" - 5 similar events' : '"Concerte rock care ți-ar plăcea" - 5 evenimente similare',
    'retargeting_segment' => $lang === 'en' ? 'Retargeting Ads Segment' : 'Retargeting Ads Segment',
    'push_notification' => $lang === 'en' ? 'Push Notification' : 'Push Notification',
    'loyalty_enrolled' => $lang === 'en' ? 'Loyalty Enrolled' : 'Loyalty Enrolled',
    'winback_monitoring' => $lang === 'en' ? 'Win-Back Monitoring' : 'Win-Back Monitoring',
    'actions_triggered' => $lang === 'en' ? 'Actions Triggered' : 'Actions Triggered',
    'predicted_value' => $lang === 'en' ? 'Predicted Value' : 'Predicted Value',
    'manual_effort' => $lang === 'en' ? 'Manual Effort' : 'Manual Effort',
    'realtime_processing' => $lang === 'en' ? 'Real-time processing' : 'Real-time processing',
    'data_points_label' => $lang === 'en' ? 'Data Points' : 'Data Points',
    'devices_label' => $lang === 'en' ? 'Devices' : 'Devices',
    'sessions_label' => $lang === 'en' ? 'Sessions' : 'Sessions',
    'live_event_stream' => $lang === 'en' ? 'Live Event Stream' : 'Live Event Stream',
    'ml_insights' => $lang === 'en' ? 'ML Insights' : 'ML Insights',
    'collecting_data' => $lang === 'en' ? 'Collecting data...' : 'Collecting data...',
    'current_step' => $lang === 'en' ? 'Current Step' : 'Current Step',
    'anonymous_user' => $lang === 'en' ? 'Anonymous User' : 'Anonymous User',

    // Key Takeaways Section
    'takeaways_title' => $lang === 'en' ? 'What You Just Saw' : 'Ce Tocmai Ai Văzut',
    'takeaways_desc' => $lang === 'en' ? 'A demonstration of the entire data intelligence cycle, from collection to cross-site personalization.' : 'O demonstrație a întregului ciclu de data intelligence, de la colectare la personalizare cross-site.',
    'cross_device_title' => $lang === 'en' ? 'Cross-Device Tracking' : 'Cross-Device Tracking',
    'cross_device_takeaway' => $lang === 'en' ? 'Same user on phone and laptop, automatically recognized through advanced fingerprinting.' : 'Același utilizator pe telefon și laptop, recunoscut automat prin fingerprinting avansat.',
    'data_points_collected' => $lang === 'en' ? 'data points collected' : 'data points colectate',
    'identity_res_title' => $lang === 'en' ? 'Identity Resolution' : 'Identity Resolution',
    'identity_res_desc' => $lang === 'en' ? 'At checkout, all anonymous data is instantly linked to the real identity.' : 'La checkout, toate datele anonime se leagă instant de identitatea reală.',
    'processing_time' => $lang === 'en' ? 'processing time' : 'timp de procesare',
    'cross_site_intel' => $lang === 'en' ? 'Cross-Site Intelligence' : 'Cross-Site Intelligence',
    'cross_site_intel_desc' => $lang === 'en' ? 'On ambilet.ro (powered by Tixello), Maria is instantly recognized and receives personalized recommendations.' : 'Pe ambilet.ro (powered by Tixello), Maria e recunoscută instant și primește recomandări personalizate.',
    'conversions_plus' => $lang === 'en' ? 'more conversions' : 'conversii în plus',

    // Data Capture Section
    'data_badge' => $lang === 'en' ? 'DATA CAPTURE' : 'DATA CAPTURE',
    'data_title_1' => $lang === 'en' ? 'What Data' : 'Ce Date',
    'data_title_2' => $lang === 'en' ? 'We Capture' : 'Capturăm',
    'data_desc' => $lang === 'en' ? '50+ data points per user, automatically captured at every interaction.' : '50+ data points per utilizator, capturate automat la fiecare interacțiune.',
    'behavioral' => $lang === 'en' ? 'Behavioral' : 'Behavioral',
    'transactional' => $lang === 'en' ? 'Transactional' : 'Transactional',
    'engagement' => $lang === 'en' ? 'Engagement' : 'Engagement',
    'magic_title' => $lang === 'en' ? 'The Magic: Cross-Referencing' : 'The Magic: Cross-Referencing',
    'magic_desc' => $lang === 'en' ? 'The real power comes from combining data. Here is an example of an auto-generated insight:' : 'Puterea reală vine din combinarea datelor. Iată un exemplu de insight generat automat:',

    // AI Engines Section
    'engines_badge' => $lang === 'en' ? '7 AI ENGINES' : '7 AI ENGINES',
    'engines_title_1' => $lang === 'en' ? 'Machine Learning' : 'Machine Learning',
    'engines_title_2' => $lang === 'en' ? 'Built-In' : 'Built-In',
    'engines_desc' => $lang === 'en' ? 'Zero configuration. Works from day one with measurable results.' : 'Zero configurare. Funcționează din prima zi cu rezultate măsurabile.',
    'recommendations' => $lang === 'en' ? 'Recommendations' : 'Recommendations',
    'hybrid_ml' => $lang === 'en' ? 'Hybrid ML engine' : 'Hybrid ML engine',
    'recommendations_desc' => $lang === 'en' ? 'Content-based + collaborative filtering for hyper-personalized recommendations.' : 'Content-based + collaborative filtering pentru recomandări hiperpersonalizate.',
    'next_best_action' => $lang === 'en' ? 'Next Best Action' : 'Next Best Action',
    'decision_engine' => $lang === 'en' ? 'Decision engine' : 'Decision engine',
    'nba_desc' => $lang === 'en' ? '12 action types: cart recovery, win-back, upsell, exit intent.' : '12 tipuri de acțiuni: cart recovery, win-back, upsell, exit intent.',
    'winback_ai' => $lang === 'en' ? 'Win-Back AI' : 'Win-Back AI',
    'churn_prevention' => $lang === 'en' ? 'Churn prevention' : 'Churn prevention',
    'winback_desc' => $lang === 'en' ? '4-tier automated recovery: 60, 90, 120, 180 days with LTV-based offers.' : '4-tier automated recovery: 60, 90, 120, 180 zile cu oferte LTV-based.',
    'realtime_alerts' => $lang === 'en' ? 'Real-Time Alerts' : 'Real-Time Alerts',
    'event_triggers' => $lang === 'en' ? 'Event triggers' : 'Event triggers',
    'alerts_desc' => $lang === 'en' ? '12 trigger types: high-value abandon, churn spike, VIP activity, sellout.' : '12 trigger types: high-value abandon, churn spike, VIP activity, sellout.',
    'lookalike_finder' => $lang === 'en' ? 'Lookalike Finder' : 'Lookalike Finder',
    'audience_builder' => $lang === 'en' ? 'Audience builder' : 'Audience builder',
    'lookalike_desc' => $lang === 'en' ? '8-factor ML similarity with export for Facebook, Google, TikTok Ads.' : '8-factor ML similarity cu export pentru Facebook, Google, TikTok Ads.',
    'demand_forecast' => $lang === 'en' ? 'Demand Forecast' : 'Demand Forecast',
    'predictive_analytics' => $lang === 'en' ? 'Predictive analytics' : 'Predictive analytics',
    'forecast_desc' => $lang === 'en' ? 'Velocity tracking, sellout probability, dynamic pricing signals.' : 'Velocity tracking, sellout probability, dynamic pricing signals.',
    'journey_intel' => $lang === 'en' ? 'Journey Intelligence' : 'Journey Intelligence',
    'journey_desc' => $lang === 'en' ? 'Full lifecycle tracking with auto stage detection' : 'Full lifecycle tracking cu auto stage detection',

    // Impact Section
    'impact_badge' => $lang === 'en' ? 'MEASURED IMPACT' : 'MEASURED IMPACT',
    'impact_title_1' => $lang === 'en' ? 'Measurable' : 'Rezultate',
    'impact_title_2' => $lang === 'en' ? 'Results' : 'Măsurabile',
    'impact_desc' => $lang === 'en' ? 'Real metrics from production. Zero vanity metrics.' : 'Metrici reale din producție. Zero vanity metrics.',
    'conversion_rate' => $lang === 'en' ? 'Conversion Rate' : 'Conversion Rate',
    'vs_baseline' => $lang === 'en' ? 'vs. baseline' : 'vs. baseline',
    'recovered_month' => $lang === 'en' ? 'Recovered/month' : 'Recovered/lună',
    'abandoned_carts' => $lang === 'en' ? 'abandoned carts' : 'abandoned carts',
    'churn_rate' => $lang === 'en' ? 'Churn Rate' : 'Churn Rate',
    'winback_ai_label' => $lang === 'en' ? 'win-back AI' : 'win-back AI',
    'roas_ads' => $lang === 'en' ? 'ROAS Ads' : 'ROAS Ads',
    'lookalike_audiences' => $lang === 'en' ? 'lookalike audiences' : 'lookalike audiences',
    'tech_specs' => $lang === 'en' ? 'Technical Specifications' : 'Technical Specifications',
    'processing_capacity' => $lang === 'en' ? 'Processing Capacity' : 'Processing Capacity',
    'p99_latency' => $lang === 'en' ? 'P99 Latency' : 'P99 Latency',
    'ml_predictions_day' => $lang === 'en' ? 'ML Predictions/Day' : 'ML Predictions/Day',
    'model_accuracy' => $lang === 'en' ? 'Model Accuracy' : 'Model Accuracy',
    'system_uptime' => $lang === 'en' ? 'System Uptime' : 'System Uptime',
    'setup_required' => $lang === 'en' ? 'Setup Required' : 'Setup Required',
    'zero_config' => $lang === 'en' ? 'Zero config' : 'Zero config',

    // CTA Section
    'cta_title' => $lang === 'en' ? 'Schedule a Technical Demo' : 'Programează un Demo Tehnic',
    'cta_desc' => $lang === 'en' ? '30 minutes where we show you exactly how Intelligence Hub works on real data. Technical deep-dive for investors and partners.' : '30 de minute în care îți arătăm exact cum funcționează Intelligence Hub pe date reale. Deep-dive tehnic pentru investitori și parteneri.',
    'request_deck' => $lang === 'en' ? 'Request Investor Deck' : 'Request Investor Deck',
    'cta_footer' => $lang === 'en' ? 'Response within 24h • NDA available' : 'Răspuns în 24h • NDA disponibil',

    // Demo Controller Labels
    'click_play' => $lang === 'en' ? 'Click "Play Demo" to start' : 'Click "Play Demo" to start',
    'demo_complete' => $lang === 'en' ? '✅ Demo complete! Click Restart to replay' : '✅ Demo complete! Click Restart to replay',
];

get_header();
?>

<!-- Noise overlay -->
<div class="int-noise-overlay"></div>

<!-- Aurora Background -->
<div class="int-aurora">
    <div class="int-aurora-blob"></div>
    <div class="int-aurora-blob"></div>
    <div class="int-aurora-blob"></div>
</div>

<!-- Grid Background -->
<div class="fixed inset-0 opacity-50 pointer-events-none int-grid-bg"></div>

<!-- Floating Particles -->
<div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="int-particle" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
    <div class="int-particle" style="top: 40%; left: 80%; animation-delay: 2s; background: rgba(6, 182, 212, 0.6);"></div>
    <div class="int-particle" style="top: 60%; left: 20%; animation-delay: 4s; background: rgba(16, 185, 129, 0.6);"></div>
    <div class="int-particle" style="top: 80%; left: 70%; animation-delay: 1s;"></div>
    <div class="int-particle" style="top: 30%; left: 50%; animation-delay: 3s; background: rgba(6, 182, 212, 0.6);"></div>
    <div class="int-particle" style="top: 70%; left: 40%; animation-delay: 5s; background: rgba(16, 185, 129, 0.6);"></div>
</div>

<!-- Hero -->
<header class="relative flex items-center min-h-screen pb-16 pt-28 sm:pt-36 sm:pb-24">
    <div class="w-full max-w-6xl px-4 mx-auto sm:px-6">
        
        <!-- Badge -->
        <div class="flex justify-center mb-8" x-data x-intersect="$el.classList.add('visible')" class="int-reveal">
            <div class="inline-flex items-center gap-2 px-4 py-2 border rounded-full int-glass-strong border-amber-500/20 backdrop-blur-xl">
                <svg class="w-3.5 h-3.5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
                <span class="text-sm text-white/70"><?php echo $t['badge_investor']; ?></span>
            </div>
        </div>
        
        <!-- Headline -->
        <div class="max-w-4xl mx-auto mb-16 text-center" x-data x-intersect="$el.classList.add('visible')">
            <h1 class="mb-8 text-4xl font-bold leading-tight text-white sm:text-5xl md:text-6xl lg:text-7xl int-reveal" x-intersect="$el.classList.add('visible')">
                <?php echo $t['hero_title_1']; ?><br>
                <span class="int-gradient-text-animated"><?php echo $t['hero_title_2']; ?></span>
            </h1>
            
            <p class="max-w-2xl mx-auto mb-10 text-lg sm:text-xl text-white/50 int-reveal" x-intersect="$el.classList.add('visible')" style="transition-delay: 200ms;">
                <?php echo $t['hero_desc_1']; ?><br class="hidden sm:block">
                <strong class="text-white"><?php echo $t['hero_desc_2']; ?></strong>
            </p>
            
            <!-- Key Stats with animated int-counters -->
            <div class="flex flex-wrap justify-center gap-8 sm:gap-16 int-stagger-children" x-intersect="$el.classList.add('visible')">
                <div class="text-center" x-data="{ count: 0, target: 50 }" x-intersect.once="let interval = setInterval(() => { if(count < target) count++; else clearInterval(interval); }, 30)">
                    <p class="text-4xl font-bold sm:text-5xl text-violet-400">
                        <span x-text="count" class="int-counter"></span>+
                    </p>
                    <p class="mt-1 text-sm text-white/40"><?php echo $t['stat_data_points']; ?></p>
                </div>
                <div class="text-center" x-data="{ count: 0, target: 7 }" x-intersect.once="let interval = setInterval(() => { if(count < target) count++; else clearInterval(interval); }, 100)">
                    <p class="text-4xl font-bold sm:text-5xl text-cyan-400">
                        <span x-text="count" class="int-counter"></span>
                    </p>
                    <p class="mt-1 text-sm text-white/40"><?php echo $t['stat_ai_engines']; ?></p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-bold sm:text-5xl text-emerald-400">&lt;12<span class="text-2xl">ms</span></p>
                    <p class="mt-1 text-sm text-white/40"><?php echo $t['stat_latency']; ?></p>
                </div>
            </div>
        </div>
        
        <!-- Architecture Diagram -->
        <div class="int-reveal-scale" x-intersect="$el.classList.add('visible')">
            <div class="max-w-4xl p-8 mx-auto overflow-hidden int-glass-strong rounded-3xl sm:p-10 int-gradient-border">
                <h3 class="mb-8 font-mono text-xs tracking-widest text-center text-white/40"><?php echo $t['architecture_title']; ?></h3>
                <div class="flex flex-col items-center justify-between gap-6 sm:flex-row sm:gap-8">
                    <!-- Input -->
                    <div class="flex-1 text-center int-float">
                        <div class="flex items-center justify-center w-16 h-16 mx-auto mb-3 border sm:w-20 sm:h-20 rounded-2xl bg-violet-500/20 border-violet-500/30 int-card-3d">
                            <svg class="w-8 h-8 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-white"><?php echo $t['arch_data_capture']; ?></p>
                        <p class="text-xs text-white/40"><?php echo $t['arch_touchpoints']; ?></p>
                    </div>
                    
                    <!-- Arrow -->
                    <div class="hidden w-24 h-1 rounded-full sm:block bg-gradient-to-r from-violet-500/50 to-cyan-500/50 int-data-flow-line"></div>
                    <div class="w-1 h-10 rounded-full sm:hidden bg-gradient-to-b from-violet-500/50 to-cyan-500/50"></div>
                    
                    <!-- Processing -->
                    <div class="flex-1 text-center int-float-delayed">
                        <div class="flex items-center justify-center w-20 h-20 mx-auto mb-3 sm:w-24 sm:h-24 rounded-3xl bg-gradient-to-br from-violet-500 to-cyan-500 int-glow-box int-morph-blob">
                            <span class="text-2xl font-bold text-white">AI</span>
                        </div>
                        <p class="text-sm font-semibold text-white"><?php echo $t['arch_ml_processing']; ?></p>
                        <p class="text-xs text-white/40"><?php echo $t['arch_engines']; ?></p>
                    </div>
                    
                    <!-- Arrow -->
                    <div class="hidden w-24 h-1 rounded-full sm:block bg-gradient-to-r from-cyan-500/50 to-emerald-500/50 int-data-flow-line"></div>
                    <div class="w-1 h-10 rounded-full sm:hidden bg-gradient-to-b from-cyan-500/50 to-emerald-500/50"></div>
                    
                    <!-- Output -->
                    <div class="flex-1 text-center int-float-slow">
                        <div class="flex items-center justify-center w-16 h-16 mx-auto mb-3 border sm:w-20 sm:h-20 rounded-2xl bg-emerald-500/20 border-emerald-500/30 int-card-3d">
                            <svg class="w-8 h-8 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-white"><?php echo $t['arch_output']; ?></p>
                        <p class="text-xs text-white/40"><?php echo $t['arch_revenue']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute flex flex-col items-center gap-2 -translate-x-1/2 bottom-8 left-1/2 animate-bounce">
            <span class="text-xs text-white/30"><?php echo $t['scroll']; ?></span>
            <svg class="w-5 h-5 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </div>
</header>

<!-- THE PROBLEM Section -->
<section id="problem" class="relative py-20 sm:py-32">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        
        <div class="mb-16 text-center int-reveal" x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-red-500/10 border-red-500/20">
                <span class="font-mono text-xs tracking-wider text-red-400"><?php echo $t['problem_badge']; ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo $t['problem_title_1']; ?> <span class="text-red-400"><?php echo $t['problem_title_2']; ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo $t['problem_desc']; ?>
            </p>
        </div>
        
        <div class="grid gap-8 mb-16 md:grid-cols-2">
            <!-- Competiția -->
            <div class="p-8 int-glassrounded-2xl border-red-500/10 int-card-3d int-reveal-left" x-intersect="$el.classList.add('visible')">
                <div class="flex items-center gap-4 mb-8">
                    <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-red-500/20">
                        <svg class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white"><?php echo $t['other_platforms']; ?></h3>
                </div>
                
                <ul class="space-y-5 int-stagger-children" x-intersect="$el.classList.add('visible')">
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                        <div>
                            <p class="font-medium text-white/90"><?php echo $t['limited_data']; ?></p>
                            <p class="text-sm text-white/40"><?php echo $t['limited_data_desc']; ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                        <div>
                            <p class="font-medium text-white/90"><?php echo $t['zero_crossref']; ?></p>
                            <p class="text-sm text-white/40"><?php echo $t['zero_crossref_desc']; ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                        <div>
                            <p class="font-medium text-white/90"><?php echo $t['manual_export']; ?></p>
                            <p class="text-sm text-white/40"><?php echo $t['manual_export_desc']; ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                        <div>
                            <p class="font-medium text-white/90"><?php echo $t['no_predictions']; ?></p>
                            <p class="text-sm text-white/40"><?php echo $t['no_predictions_desc']; ?></p>
                        </div>
                    </li>
                </ul>
            </div>
            
            <!-- Tixello -->
            <div class="p-8 int-glassrounded-2xl border-emerald-500/20 int-card-3d int-reveal-right" x-intersect="$el.classList.add('visible')">
                <div class="flex items-center gap-4 mb-8">
                    <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-emerald-500/20">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white"><?php echo $t['tixello_intelligence']; ?></h3>
                </div>
                
                <ul class="space-y-5 int-stagger-children" x-intersect="$el.classList.add('visible')">
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <div>
                            <p class="font-medium text-white/90"><?php echo $t['data_points_per_user']; ?></p>
                            <p class="text-sm text-white/40"><?php echo $t['behavioral_trans_eng']; ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <div>
                            <p class="font-medium text-white/90"><?php echo $t['cross_event_intel']; ?></p>
                            <p class="text-sm text-white/40"><?php echo $t['cross_event_desc']; ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <div>
                            <p class="font-medium text-white/90"><?php echo $t['realtime_integrations']; ?></p>
                            <p class="text-sm text-white/40"><?php echo $t['realtime_int_desc']; ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <div>
                            <p class="font-medium text-white/90"><?php echo $t['ml_engines_builtin']; ?></p>
                            <p class="text-sm text-white/40"><?php echo $t['ml_engines_desc']; ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Philosophy Quote -->
        <div class="max-w-3xl p-8 mx-auto text-center int-glass-strong rounded-3xl sm:p-12 int-gradient-border int-reveal-scale" x-intersect="$el.classList.add('visible')">
            <div class="mb-4 font-serif text-6xl text-violet-500/20">"</div>
            <blockquote class="mb-6 text-xl leading-relaxed sm:text-2xl text-white/80">
                <?php echo $t['quote_1']; ?><br>
                <span class="font-semibold int-gradient-text"><?php echo $t['quote_2']; ?></span>
            </blockquote>
            <p class="font-mono text-sm text-white/30"><?php echo $t['quote_author']; ?></p>
        </div>
    </div>
</section>

<!-- Identity Resolution Section -->
<section id="tracking" class="relative py-20 sm:py-32">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        
        <div class="mb-16 text-center int-reveal" x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-violet-500/10 border-violet-500/20">
                <span class="font-mono text-xs tracking-wider text-violet-400"><?php echo $t['identity_badge']; ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo $t['identity_title_1']; ?> <span class="text-violet-400"><?php echo $t['identity_title_anon']; ?></span> <?php echo $t['identity_title_to']; ?> <span class="text-emerald-400"><?php echo $t['identity_title_real']; ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo $t['identity_desc_1']; ?> <strong class="text-white"><?php echo $t['identity_desc_anon']; ?></strong> <?php echo $t['identity_desc_2']; ?>
            </p>
        </div>
        
        <!-- The Journey Visualization -->
        <div class="p-8 mb-10 int-glass-strong rounded-3xl sm:p-10 int-reveal-scale" x-intersect="$el.classList.add('visible')">
            <h3 class="mb-8 text-lg font-semibold text-center text-white">Customer Journey Tracked</h3>
            
            <!-- Timeline - Desktop -->
            <div class="relative hidden md:block">
                <!-- Progress line -->
                <div class="absolute left-0 right-0 h-1 rounded-full top-10 bg-white/5">
                    <div class="h-full rounded-full bg-gradient-to-r from-violet-500 via-cyan-500 to-emerald-500 int-data-flow-line"></div>
                </div>
                
                <div class="relative grid grid-cols-5 gap-6 int-stagger-children" x-intersect="$el.classList.add('visible')">
                    <!-- Step 1 -->
                    <div class="text-center">
                        <div class="relative z-10 flex items-center justify-center w-20 h-20 mx-auto mb-4 border rounded-2xl bg-violet-500/10 border-violet-500/30 int-card-3d">
                            <svg class="w-8 h-8 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                        </div>
                        <p class="mb-1 text-sm font-medium text-white">Device 1</p>
                        <p class="mb-3 text-xs text-white/40">Caută "concert rock"</p>
                        <div class="px-3 py-1.5 rounded-lg bg-violet-500/10 inline-block">
                            <span class="text-[11px] font-mono text-violet-400">anon_7x8k2</span>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="text-center">
                        <div class="relative z-10 flex items-center justify-center w-20 h-20 mx-auto mb-4 border rounded-2xl bg-violet-500/10 border-violet-500/30 int-card-3d">
                            <svg class="w-8 h-8 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" /></svg>
                        </div>
                        <p class="mb-1 text-sm font-medium text-white">Device 2</p>
                        <p class="mb-3 text-xs text-white/40">Vizitează artist page</p>
                        <div class="px-3 py-1.5 rounded-lg bg-violet-500/10 inline-flex items-center gap-1">
                            <span class="text-[11px] font-mono text-violet-400">linked</span>
                            <svg class="w-3 h-3 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="text-center">
                        <div class="relative z-10 flex items-center justify-center w-20 h-20 mx-auto mb-4 border rounded-2xl bg-cyan-500/10 border-cyan-500/30 int-card-3d">
                            <svg class="w-8 h-8 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /></svg>
                        </div>
                        <p class="mb-1 text-sm font-medium text-white">Alt Site</p>
                        <p class="mb-3 text-xs text-white/40">Site organizator</p>
                        <div class="px-3 py-1.5 rounded-lg bg-cyan-500/10 inline-block">
                            <span class="text-[11px] font-mono text-cyan-400">same fingerprint</span>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="text-center">
                        <div class="relative z-10 flex items-center justify-center w-20 h-20 mx-auto mb-4 border rounded-2xl bg-cyan-500/10 border-cyan-500/30 int-card-3d">
                            <svg class="w-8 h-8 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" /></svg>
                        </div>
                        <p class="mb-1 text-sm font-medium text-white">Add to Cart</p>
                        <p class="mb-3 text-xs text-white/40">Încă anonim</p>
                        <div class="px-3 py-1.5 rounded-lg bg-cyan-500/10 inline-block">
                            <span class="text-[11px] font-mono text-cyan-400">cart: €127</span>
                        </div>
                    </div>
                    
                    <!-- Step 5 - Checkout -->
                    <div class="text-center">
                        <div class="relative z-10 flex items-center justify-center w-20 h-20 mx-auto mb-4 border-2 rounded-2xl bg-emerald-500/10 border-emerald-500/50 int-glow-box int-card-3d">
                            <svg class="w-8 h-8 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" /></svg>
                        </div>
                        <p class="mb-1 text-sm font-semibold text-emerald-400">Checkout</p>
                        <p class="mb-3 text-xs text-white/40">Identity resolved!</p>
                        <div class="px-3 py-1.5 rounded-lg bg-emerald-500/10 inline-block">
                            <span class="text-[11px] font-mono text-emerald-400">Maria P.</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Timeline - Mobile -->
            <div class="space-y-1 md:hidden int-stagger-children" x-intersect="$el.classList.add('visible')">
                <div class="flex items-center gap-4 p-4 int-glassrounded-xl">
                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-violet-500/20">
                        <svg class="w-5 h-5 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-white">Device 1 - Caută "concert rock"</p>
                        <span class="text-[10px] font-mono text-violet-400">anon_7x8k2</span>
                    </div>
                </div>
                
                <div class="ml-6 w-0.5 h-4 bg-gradient-to-b from-violet-500 to-cyan-500 rounded-full"></div>
                
                <div class="flex items-center gap-4 p-4 int-glassrounded-xl">
                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-violet-500/20">
                        <svg class="w-5 h-5 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" /></svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-white">Device 2 - Vizitează artist page</p>
                        <span class="text-[10px] font-mono text-violet-400 flex items-center gap-1">linked <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg></span>
                    </div>
                </div>
                
                <div class="ml-6 w-0.5 h-4 bg-gradient-to-b from-violet-500 to-cyan-500 rounded-full"></div>
                
                <div class="flex items-center gap-4 p-4 int-glassrounded-xl">
                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-cyan-500/20">
                        <svg class="w-5 h-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /></svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-white">Alt Site - Site organizator</p>
                        <span class="text-[10px] font-mono text-cyan-400">same fingerprint</span>
                    </div>
                </div>
                
                <div class="ml-6 w-0.5 h-4 bg-gradient-to-b from-cyan-500 to-emerald-500 rounded-full"></div>
                
                <div class="flex items-center gap-4 p-4 int-glassrounded-xl">
                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-cyan-500/20">
                        <svg class="w-5 h-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" /></svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-white">Add to Cart - Încă anonim</p>
                        <span class="text-[10px] font-mono text-cyan-400">cart: €127</span>
                    </div>
                </div>
                
                <div class="ml-6 w-0.5 h-4 bg-gradient-to-b from-cyan-500 to-emerald-500 rounded-full"></div>
                
                <div class="flex items-center gap-4 p-4 border int-glassrounded-xl border-emerald-500/20">
                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 border rounded-xl bg-emerald-500/20 border-emerald-500/30">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" /></svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-emerald-400">Checkout - Identity Resolved!</p>
                        <span class="text-[10px] font-mono text-emerald-400">Maria P. → full profile merged</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Before/After Code Comparison -->
        <div class="grid gap-6 mb-10 sm:grid-cols-2">
            <div class="p-6 int-glassrounded-2xl int-card-3d int-reveal-left" x-intersect="$el.classList.add('visible')">
                <div class="flex items-center gap-3 mb-5">
                    <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-violet-500/20">
                        <svg class="w-5 h-5 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
                    </div>
                    <h3 class="font-semibold text-white">Înainte de Checkout</h3>
                </div>
                <div class="p-5 overflow-x-auto font-mono text-xs int-code-block rounded-xl">
                    <div class="mb-2 int-syn-comment">// Anonymous profile</div>
                    <div><span class="int-syn-key">id:</span> <span class="int-syn-str">"anon_7x8k2"</span></div>
                    <div><span class="int-syn-key">devices:</span> <span class="int-syn-num">3</span></div>
                    <div><span class="int-syn-key">sessions:</span> <span class="int-syn-num">12</span></div>
                    <div><span class="int-syn-key">pageviews:</span> <span class="int-syn-num">47</span></div>
                    <div><span class="int-syn-key">searches:</span> <span class="int-syn-str">["rock", "cargo", "untold"]</span></div>
                    <div><span class="int-syn-key">artists_viewed:</span> <span class="int-syn-str">["Cargo", "Vița de Vie"]</span></div>
                    <div><span class="int-syn-key">affinity_rock:</span> <span class="int-syn-num">0.89</span></div>
                    <div><span class="int-syn-key">cart_value:</span> <span class="int-syn-num">€127</span></div>
                    <div class="mt-3 int-syn-comment">// email: <span class="text-red-400">unknown</span></div>
                    <div class="int-syn-comment">// name: <span class="text-red-400">unknown</span></div>
                </div>
            </div>
            
            <div class="p-6 int-glassrounded-2xl border-emerald-500/20 int-card-3d int-reveal-right" x-intersect="$el.classList.add('visible')">
                <div class="flex items-center gap-3 mb-5">
                    <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-emerald-500/20">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="font-semibold text-white">După Checkout</h3>
                </div>
                <div class="p-5 overflow-x-auto font-mono text-xs int-code-block rounded-xl border-emerald-500/20">
                    <div class="mb-2 text-emerald-400">// Full profile merged!</div>
                    <div><span class="int-syn-key">id:</span> <span class="int-syn-str">"user_4829"</span></div>
                    <div><span class="int-syn-key">email:</span> <span class="int-syn-str">"maria.popescu@email.ro"</span></div>
                    <div><span class="int-syn-key">name:</span> <span class="int-syn-str">"Maria Popescu"</span></div>
                    <div><span class="int-syn-key">devices:</span> <span class="int-syn-num">3</span> <span class="int-syn-comment">// all linked</span></div>
                    <div><span class="int-syn-key">total_pageviews:</span> <span class="int-syn-num">47</span></div>
                    <div><span class="int-syn-key">affinity_rock:</span> <span class="int-syn-num">0.89</span></div>
                    <div><span class="int-syn-key">LTV:</span> <span class="int-syn-num">€312</span> <span class="int-syn-comment">// predicted</span></div>
                    <div><span class="int-syn-key">churn_risk:</span> <span class="int-syn-bool">0.12</span> <span class="int-syn-comment">// low</span></div>
                    <div><span class="int-syn-key">next_action:</span> <span class="int-syn-str">"festival_upsell"</span></div>
                </div>
            </div>
        </div>
        
        <!-- Key benefits -->
        <div class="grid gap-5 sm:grid-cols-3 int-stagger-children" x-intersect="$el.classList.add('visible')">
            <div class="p-6 int-glassrounded-2xl int-card-3d">
                <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-violet-500/10">
                    <svg class="w-6 h-6 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" /></svg>
                </div>
                <h4 class="mb-2 font-semibold text-white">Cross-Device Linking</h4>
                <p class="text-sm text-white/50">Mobil, tablet, desktop — toate conectate automat la același profil.</p>
            </div>
            <div class="p-6 int-glassrounded-2xl int-card-3d">
                <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-cyan-500/10">
                    <svg class="w-6 h-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /></svg>
                </div>
                <h4 class="mb-2 font-semibold text-white">Cross-Site Tracking</h4>
                <p class="text-sm text-white/50">Marketplace + site-uri organizatori = viziune completă.</p>
            </div>
            <div class="p-6 int-glassrounded-2xl int-card-3d">
                <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-emerald-500/10">
                    <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h4 class="mb-2 font-semibold text-white">Instant Personalization</h4>
                <p class="text-sm text-white/50">La checkout știm deja tot. Recomandări precise, oferte personalizate.</p>
            </div>
        </div>
    </div>
</section>

<!-- Demo SECTION -->
<section id="demo" class="relative py-16 sm:py-24" x-data="demoController()">
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        
        <!-- Demo Header -->
        <div class="mb-12 text-center">
            <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                <span class="text-violet-400">Demo Interactiv:</span> Identity Resolution + Personalization
            </h2>
            <p class="max-w-2xl mx-auto text-white/50">
                Urmărește călătoria unui utilizator de la anonim la client loial, și vezi cum AI-ul personalizează totul în timp real.
            </p>
        </div>
        
        <!-- Progress Bar -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm text-white/40">Demo Progress</span>
                <span class="font-mono text-sm" :class="demoPhase === 1 ? 'text-violet-400' : 'text-emerald-400'" x-text="phaseLabel"></span>
            </div>
            <div class="h-1.5 bg-white/10 rounded-full overflow-hidden">
                <div class="h-full rounded-full int-demo-progress" :style="`width: ${progress}%`"></div>
            </div>
        </div>
        
        <!-- Demo Controls -->
        <div class="flex items-center justify-center gap-4 mb-12">
            <button @click="togglePlay()" 
                class="flex items-center gap-2 px-6 py-3 font-medium text-white transition-all rounded-xl bg-gradient-to-r from-violet-600 to-cyan-600 hover:shadow-lg hover:shadow-violet-500/25">
                <svg x-show="!isPlaying" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                <svg x-show="isPlaying" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z"/></svg>
                <span x-text="isPlaying ? 'Pause' : 'Play Demo'"></span>
            </button>
            <button @click="restart()" class="flex items-center gap-2 px-6 py-3 transition-all rounded-xl int-glasstext-white/70 hover:text-white hover:bg-white/5">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                Restart
            </button>
            <div class="items-center hidden gap-2 px-4 py-2 text-sm rounded-lg sm:flex bg-white/5 text-white/40">
                <span>Step:</span>
                <span class="font-mono text-white" x-text="step + 1"></span>
                <span>/</span>
                <span class="font-mono" x-text="totalSteps"></span>
            </div>
        </div>
        
        <!-- Main Demo Container -->
        <div class="grid gap-8 lg:grid-cols-12">
            
            <!-- Left: Device Mockups -->
            <div class="lg:col-span-7">
                <div class="relative">
                    
                    <!-- Phone Mockup -->
                    <div class="int-phone-frame w-[300px] h-[620px] p-4 mx-auto transition-all duration-500"
                            x-show="activeDevice === 'phone'"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100">
                        
                        <!-- Phone notch -->
                        <div class="absolute z-10 flex items-center justify-center h-6 -translate-x-1/2 bg-black top-1 left-1/2 w-28 rounded-b-2xl">
                            <div class="w-16 h-4 rounded-full bg-zinc-900"></div>
                        </div>
                        
                        <div class="int-screen-content h-full rounded-[28px] relative">
                            <div class="h-full p-4 pt-8 overflow-hidden bg-gradient-to-b from-zinc-900 to-zinc-950">
                                
                                <!-- Status bar -->
                                <div class="flex items-center justify-between mb-4 text-[10px] text-white/50">
                                    <span>9:41</span>
                                    <div class="flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/></svg>
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17 4h-3V2h-4v2H7v18h10V4z"/></svg>
                                    </div>
                                </div>
                                
                                <!-- Phone Screen: Search -->
                                <div x-show="phoneScreen === 'search'">
                                    <div class="flex items-center gap-2 px-4 py-3 mb-4 bg-white/5 rounded-xl">
                                        <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                        <span class="text-sm text-white/70">
                                            <span x-text="searchText"></span><span class="int-cursor" x-show="isTyping"></span>
                                        </span>
                                    </div>
                                    
                                    <!-- Results -->
                                    <div class="space-y-3" x-show="showResults">
                                        <div class="flex gap-3 p-3 bg-white/5 rounded-xl int-slide-up" 
                                                :class="selectedEvent === 0 ? 'ring-2 ring-violet-500 bg-violet-500/10' : ''">
                                            <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 rounded-lg bg-gradient-to-br from-violet-500/30 to-cyan-500/30">
                                                <span class="text-2xl">🎸</span>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-white">Cargo - Concert Aniversar</p>
                                                <p class="text-xs text-white/40">15 Iunie 2025 • Arenele Romane</p>
                                                <p class="mt-1 text-sm font-medium text-violet-400">de la €45</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-3 p-3 bg-white/5 rounded-xl int-slide-up" style="animation-delay: 0.1s">
                                            <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 rounded-lg bg-gradient-to-br from-amber-500/30 to-red-500/30">
                                                <span class="text-2xl">🎪</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-white">Untold Festival 2025</p>
                                                <p class="text-xs text-white/40">7-10 August • Cluj-Napoca</p>
                                                <p class="mt-1 text-sm font-medium text-amber-400">de la €199</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-3 p-3 bg-white/5 rounded-xl int-slide-up" style="animation-delay: 0.2s">
                                            <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 rounded-lg bg-gradient-to-br from-emerald-500/30 to-cyan-500/30">
                                                <span class="text-2xl">⚡</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-white">Electric Castle</p>
                                                <p class="text-xs text-white/40">16-20 Iulie • Bonțida</p>
                                                <p class="mt-1 text-sm font-medium text-emerald-400">de la €149</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Laptop Mockup -->
                    <div class="mx-auto transition-all duration-500"
                            x-show="activeDevice === 'laptop'"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            style="width: 680px;">
                        
                        <div class="p-3 int-laptop-frame">
                            <div class="rounded-lg int-screen-content" style="height: 520px;">
                                <div class="h-full overflow-hidden bg-gradient-to-b from-zinc-900 to-zinc-950">
                                    
                                    <!-- Browser chrome -->
                                    <div class="flex items-center h-10 gap-3 px-3 bg-zinc-800/50">
                                        <div class="flex gap-1.5">
                                            <div class="w-3 h-3 rounded-full bg-red-500/60"></div>
                                            <div class="w-3 h-3 rounded-full bg-yellow-500/60"></div>
                                            <div class="w-3 h-3 rounded-full bg-green-500/60"></div>
                                        </div>
                                        <div class="flex-1 mx-4">
                                            <div class="bg-zinc-700/50 rounded-lg px-4 py-1.5 text-xs text-white/50 flex items-center gap-2">
                                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                                <span x-text="currentUrl"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Screen Content Area -->
                                    <div class="p-5 h-[calc(100%-2.5rem)] overflow-y-auto">
                                        
                                        <!-- Screen: Event Page -->
                                        <div x-show="laptopScreen === 'event'" class="h-full">
                                            <div class="relative flex items-end p-5 mb-4 overflow-hidden h-28 bg-gradient-to-r from-violet-600/30 to-cyan-600/30 rounded-xl">
                                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,...')] opacity-10"></div>
                                                <div class="relative">
                                                    <p class="text-xl font-bold text-white">Cargo - Concert Aniversar 30 de Ani</p>
                                                    <p class="text-sm text-white/60">Arenele Romane, București • 15 Iunie 2025</p>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div class="p-4 bg-white/5 rounded-xl">
                                                    <p class="mb-2 text-xs text-white/50">Despre eveniment</p>
                                                    <p class="text-sm text-white/70">Cargo aniversează 30 de ani de rock românesc autentic...</p>
                                                </div>
                                                <div class="p-4 bg-white/5 rounded-xl">
                                                    <p class="mb-2 text-xs text-white/50">Artist</p>
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-10 h-10 rounded-full bg-violet-500/30"></div>
                                                        <div>
                                                            <p class="text-sm font-medium text-white">Cargo</p>
                                                            <p class="text-xs text-white/40">Rock • România</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Screen: Event Page Scrolled (Tickets) -->
                                        <div x-show="laptopScreen === 'event-tickets'" class="h-full">
                                            <div class="flex items-center gap-2 mb-3 text-xs text-white/30">
                                                <svg class="w-4 h-4 int-scroll-indicator" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" /></svg>
                                                <span>Scrolled to tickets section</span>
                                            </div>
                                            <div class="p-5 bg-white/5 rounded-xl">
                                                <p class="mb-4 font-medium text-white">Alege biletul tău</p>
                                                <div class="space-y-3">
                                                    <div class="flex items-center justify-between p-4 border rounded-xl bg-white/5 border-white/10">
                                                        <div>
                                                            <p class="font-medium text-white">General Admission</p>
                                                            <p class="text-xs text-white/40">Acces zonă standing</p>
                                                        </div>
                                                        <div class="text-right">
                                                            <p class="font-bold text-white">€45</p>
                                                            <button class="mt-1 text-xs text-violet-400">Adaugă</button>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-between p-4 transition-all border-2 rounded-xl"
                                                            :class="highlightVIP ? 'bg-violet-500/20 border-violet-500' : 'bg-white/5 border-white/10'">
                                                        <div>
                                                            <p class="font-medium text-white">VIP Experience</p>
                                                            <p class="text-xs text-white/40">Acces VIP + meet & greet</p>
                                                        </div>
                                                        <div class="text-right">
                                                            <p class="font-bold text-white">€127</p>
                                                            <button class="mt-1 text-xs text-violet-400" :class="highlightVIP ? 'font-bold' : ''">
                                                                <span x-show="!highlightVIP">Adaugă</span>
                                                                <span x-show="highlightVIP">→ Click</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Screen: Cart Page -->
                                        <div x-show="laptopScreen === 'cart'" class="h-full">
                                            <div class="flex items-center gap-3 mb-6">
                                                <svg class="w-6 h-6 text-white/50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                                <span class="text-lg font-medium text-white">Coșul tău</span>
                                                <span class="px-2 py-0.5 rounded-full bg-violet-500/20 text-violet-400 text-xs">1 item</span>
                                            </div>
                                            <div class="p-5 mb-4 bg-white/5 rounded-xl">
                                                <div class="flex gap-4">
                                                    <div class="flex-shrink-0 w-20 h-20 rounded-lg bg-gradient-to-br from-violet-500/30 to-cyan-500/30"></div>
                                                    <div class="flex-1">
                                                        <p class="font-medium text-white">Cargo - Concert Aniversar</p>
                                                        <p class="text-sm text-white/40">VIP Experience • 15 Iunie 2025</p>
                                                        <p class="text-sm text-white/40">Arenele Romane, București</p>
                                                    </div>
                                                    <div class="text-right">
                                                        <p class="text-lg font-bold text-white">€127</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-between p-4 mb-4 bg-white/5 rounded-xl">
                                                <span class="text-white/60">Total</span>
                                                <span class="text-xl font-bold text-white">€127</span>
                                            </div>
                                            <button class="w-full py-4 text-lg font-medium text-white rounded-xl bg-gradient-to-r from-violet-600 to-cyan-600"
                                                    :class="highlightCheckout ? 'animate-pulse shadow-lg shadow-violet-500/30' : ''">
                                                Continuă spre checkout →
                                            </button>
                                        </div>
                                        
                                        <!-- Screen: Checkout Page -->
                                        <div x-show="laptopScreen === 'checkout'" class="h-full">
                                            <div class="flex items-center gap-3 mb-6">
                                                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-cyan-500">
                                                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                                </div>
                                                <span class="text-lg font-medium text-white">Checkout securizat</span>
                                            </div>
                                            
                                            <div class="grid grid-cols-2 gap-6">
                                                <div class="space-y-4">
                                                    <div>
                                                        <label class="block mb-1 text-xs text-white/50">Email *</label>
                                                        <div class="px-4 py-3 border rounded-lg bg-white/5 border-white/10"
                                                                :class="emailFocused ? 'border-violet-500 bg-violet-500/5' : ''">
                                                            <span class="text-sm text-white" x-text="checkoutEmail"></span>
                                                            <span class="int-cursor" x-show="isTypingEmail"></span>
                                                        </div>
                                                    </div>
                                                    <div x-show="showNameField">
                                                        <label class="block mb-1 text-xs text-white/50">Nume complet *</label>
                                                        <div class="px-4 py-3 border rounded-lg bg-white/5 border-white/10"
                                                                :class="nameFocused ? 'border-violet-500 bg-violet-500/5' : ''">
                                                            <span class="text-sm text-white" x-text="checkoutName"></span>
                                                            <span class="int-cursor" x-show="isTypingName"></span>
                                                        </div>
                                                    </div>
                                                    <div x-show="showPhoneField">
                                                        <label class="block mb-1 text-xs text-white/50">Telefon</label>
                                                        <div class="px-4 py-3 border rounded-lg bg-white/5 border-white/10">
                                                            <span class="text-sm text-white" x-text="checkoutPhone"></span>
                                                            <span class="int-cursor" x-show="isTypingPhone"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-4 bg-white/5 rounded-xl">
                                                    <p class="mb-3 text-xs text-white/50">Sumar comandă</p>
                                                    <div class="flex justify-between mb-2 text-sm">
                                                        <span class="text-white/60">VIP Experience</span>
                                                        <span class="text-white">€127</span>
                                                    </div>
                                                    <div class="flex justify-between pt-2 mt-2 border-t border-white/10">
                                                        <span class="font-medium text-white">Total</span>
                                                        <span class="font-bold text-white">€127</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Identity Resolution Success -->
                                            <div x-show="showIdentitySuccess" 
                                                    class="p-5 mt-6 border rounded-xl bg-gradient-to-r from-emerald-500/20 to-cyan-500/20 border-emerald-500/40 int-identity-flash">
                                                <div class="flex items-center gap-4">
                                                    <div class="flex items-center justify-center flex-shrink-0 rounded-full w-14 h-14 bg-gradient-to-br from-emerald-500 to-cyan-500">
                                                        <svg class="text-white w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-lg font-bold text-emerald-400">Identity Resolved!</p>
                                                        <p class="text-sm text-white/60">47 data points linked to <span class="font-medium text-white">Maria Popescu</span></p>
                                                        <p class="mt-1 text-xs text-white/40">Cross-device history merged • LTV calculated • ML models updated</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Screen: Ambilet.ro Personalized Homepage (Phase 2) -->
                                        <div x-show="laptopScreen === 'ambilet-home'" class="h-full">
                                            <!-- Personalized greeting -->
                                            <div class="p-4 mb-4 bg-gradient-to-r from-violet-600/20 to-cyan-600/20 rounded-xl int-wave-in" x-show="showPersonalizedGreeting">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <p class="text-lg font-medium text-white">Bună seara, Maria! 👋</p>
                                                        <p class="text-sm text-white/50">Recomandate pentru tine</p>
                                                    </div>
                                                    <div class="px-3 py-1 text-xs rounded-full bg-emerald-500/20 text-emerald-400">
                                                        Personalizat
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Recommendations section -->
                                            <div x-show="showRecommendations">
                                                <p class="flex items-center gap-2 mb-3 text-xs text-white/50">
                                                    <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                                    Pentru că îți place rock-ul
                                                </p>
                                                <div class="grid grid-cols-3 gap-3">
                                                    <div class="p-3 bg-white/5 rounded-xl int-slide-up" x-show="showRec1">
                                                        <div class="flex items-center justify-center w-full h-20 mb-2 rounded-lg bg-gradient-to-br from-violet-500/30 to-pink-500/30">
                                                            <span class="text-2xl">🎤</span>
                                                        </div>
                                                        <p class="text-sm font-medium text-white">Vița de Vie</p>
                                                        <p class="text-xs text-white/40">Rock • Concert</p>
                                                        <p class="mt-1 text-sm text-violet-400">€35</p>
                                                        <div class="mt-2 text-[10px] text-emerald-400 flex items-center gap-1">
                                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                                            94% match
                                                        </div>
                                                    </div>
                                                    <div class="p-3 bg-white/5 rounded-xl int-slide-up" style="animation-delay: 0.1s" x-show="showRec2">
                                                        <div class="flex items-center justify-center w-full h-20 mb-2 rounded-lg bg-gradient-to-br from-cyan-500/30 to-emerald-500/30">
                                                            <span class="text-2xl">🎸</span>
                                                        </div>
                                                        <p class="text-sm font-medium text-white">Alternosfera</p>
                                                        <p class="text-xs text-white/40">Alt Rock</p>
                                                        <p class="mt-1 text-sm text-cyan-400">€40</p>
                                                        <div class="mt-2 text-[10px] text-emerald-400 flex items-center gap-1">
                                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                                            91% match
                                                        </div>
                                                    </div>
                                                    <div class="p-3 bg-white/5 rounded-xl int-slide-up" style="animation-delay: 0.2s" x-show="showRec3">
                                                        <div class="flex items-center justify-center w-full h-20 mb-2 rounded-lg bg-gradient-to-br from-amber-500/30 to-red-500/30">
                                                            <span class="text-2xl">🔥</span>
                                                        </div>
                                                        <p class="text-sm font-medium text-white">Rock la Munte</p>
                                                        <p class="text-xs text-white/40">Festival</p>
                                                        <p class="mt-1 text-sm text-amber-400">€89</p>
                                                        <div class="mt-2 text-[10px] text-emerald-400 flex items-center gap-1">
                                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                                            87% match
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Upsell modal -->
                                            <div x-show="showUpsell" class="p-4 mt-4 border rounded-xl bg-gradient-to-r from-amber-500/20 to-orange-500/20 border-amber-500/40 int-slide-up">
                                                <div class="flex items-start gap-3">
                                                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-amber-500/30">
                                                        <svg class="w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                                    </div>
                                                    <div class="flex-1">
                                                        <p class="font-medium text-amber-400">Ofertă specială pentru tine!</p>
                                                        <p class="mt-1 text-sm text-white/70">Upgrade la Untold VIP cu <span class="font-bold text-white">20% discount</span></p>
                                                        <div class="mt-2 text-[10px] text-white/40 font-mono">
                                                            NBA Engine: affinity_rock: 0.89 • LTV: €312 • conversion_prob: 0.87
                                                        </div>
                                                    </div>
                                                    <button class="px-4 py-2 text-sm font-medium text-black rounded-lg bg-amber-500">
                                                        Vezi oferta
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Screen: Maria's Complete Profile (Phase 3) -->
                                        <div x-show="laptopScreen === 'profile'" class="h-full overflow-y-auto">
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-br from-emerald-500 to-cyan-500">
                                                    <span class="text-lg font-bold text-white">MP</span>
                                                </div>
                                                <div>
                                                    <p class="text-lg font-bold text-white">Maria Popescu</p>
                                                    <p class="font-mono text-xs text-emerald-400">user_4829 • Verified Customer</p>
                                                </div>
                                                <div class="px-3 py-1 ml-auto border rounded-full bg-emerald-500/20 border-emerald-500/40">
                                                    <span class="text-xs font-medium text-emerald-400">Score: 847</span>
                                                </div>
                                            </div>
                                            
                                            <div class="grid grid-cols-2 gap-3">
                                                <div class="p-3 bg-white/5 rounded-xl stagger-in" x-show="showProfileSection1">
                                                    <p class="text-white/40 text-[10px] uppercase tracking-wider mb-2">Identitate</p>
                                                    <div class="space-y-1.5 text-xs">
                                                        <div class="flex justify-between"><span class="text-white/50">Email</span><span class="font-mono text-white">maria.p***@email.ro</span></div>
                                                        <div class="flex justify-between"><span class="text-white/50">Telefon</span><span class="font-mono text-white">+40 722 ***</span></div>
                                                        <div class="flex justify-between"><span class="text-white/50">Devices</span><span class="text-cyan-400">2 linked</span></div>
                                                    </div>
                                                </div>
                                                <div class="p-3 bg-white/5 rounded-xl stagger-in" x-show="showProfileSection2" style="animation-delay: 0.1s">
                                                    <p class="text-white/40 text-[10px] uppercase tracking-wider mb-2">Comportament</p>
                                                    <div class="space-y-1.5 text-xs">
                                                        <div class="flex justify-between"><span class="text-white/50">Sessions</span><span class="text-white">3</span></div>
                                                        <div class="flex justify-between"><span class="text-white/50">Pages</span><span class="text-white">12</span></div>
                                                        <div class="flex justify-between"><span class="text-white/50">Purchases</span><span class="text-emerald-400">1 (€127)</span></div>
                                                    </div>
                                                </div>
                                                <div class="p-3 bg-white/5 rounded-xl stagger-in" x-show="showProfileSection3" style="animation-delay: 0.2s">
                                                    <p class="text-white/40 text-[10px] uppercase tracking-wider mb-2">Afinități</p>
                                                    <div class="space-y-2">
                                                        <div><div class="flex justify-between mb-1 text-xs"><span class="text-white/70">Rock</span><span class="font-mono text-violet-400">0.89</span></div><div class="h-1.5 bg-white/10 rounded-full overflow-hidden"><div class="h-full rounded-full bg-violet-500" style="width: 89%"></div></div></div>
                                                        <div><div class="flex justify-between mb-1 text-xs"><span class="text-white/70">VIP/Premium</span><span class="font-mono text-amber-400">0.82</span></div><div class="h-1.5 bg-white/10 rounded-full overflow-hidden"><div class="h-full rounded-full bg-amber-500" style="width: 82%"></div></div></div>
                                                    </div>
                                                </div>
                                                <div class="p-3 bg-white/5 rounded-xl stagger-in" x-show="showProfileSection4" style="animation-delay: 0.3s">
                                                    <p class="text-white/40 text-[10px] uppercase tracking-wider mb-2">Predicții ML</p>
                                                    <div class="space-y-1.5 text-xs">
                                                        <div class="flex justify-between"><span class="text-white/50">LTV Predicted</span><span class="font-bold text-emerald-400">€312</span></div>
                                                        <div class="flex justify-between"><span class="text-white/50">Churn Risk</span><span class="text-emerald-400">12% (low)</span></div>
                                                        <div class="flex justify-between"><span class="text-white/50">Conv. Prob.</span><span class="text-amber-400">87%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 mt-3 border bg-gradient-to-r from-violet-500/10 to-cyan-500/10 rounded-xl border-violet-500/20 stagger-in" x-show="showProfileSection5" style="animation-delay: 0.4s">
                                                <p class="text-white/40 text-[10px] uppercase tracking-wider mb-2">Intenții Detectate</p>
                                                <div class="flex flex-wrap gap-2">
                                                    <span class="px-2 py-1 rounded-full bg-violet-500/20 text-violet-300 text-[10px]">🎸 Rock românesc</span>
                                                    <span class="px-2 py-1 rounded-full bg-cyan-500/20 text-cyan-300 text-[10px]">💎 Preferă VIP</span>
                                                    <span class="px-2 py-1 rounded-full bg-amber-500/20 text-amber-300 text-[10px]">📅 Evenimente vară</span>
                                                    <span class="px-2 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-[10px]">🎪 Deschis la festivaluri</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Screen: Automated Actions (Phase 3) -->
                                        <div x-show="laptopScreen === 'actions'" class="h-full overflow-y-auto">
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-cyan-500">
                                                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                                </div>
                                                <div>
                                                    <p class="font-bold text-white">Acțiuni Automate pentru Maria</p>
                                                    <p class="text-xs text-white/40">Triggered by Intelligence Hub</p>
                                                </div>
                                            </div>
                                            <div class="space-y-3">
                                                <div class="p-3 border-l-4 bg-white/5 rounded-xl border-violet-500 stagger-in" x-show="showAction1">
                                                    <div class="flex items-start gap-3">
                                                        <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-violet-500/20">
                                                            <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex items-center justify-between"><p class="text-sm font-medium text-white">Email Personalizat</p><span class="text-emerald-400 text-[10px] flex items-center gap-1"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Sent</span></div>
                                                            <p class="mt-1 text-xs text-white/50">"Concerte rock care ți-ar plăcea" - 5 evenimente similare</p>
                                                            <p class="text-white/30 text-[10px] mt-1 font-mono">Trigger: purchase + affinity_rock > 0.8</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-l-4 bg-white/5 rounded-xl border-cyan-500 stagger-in" x-show="showAction2" style="animation-delay: 0.1s">
                                                    <div class="flex items-start gap-3">
                                                        <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-cyan-500/20">
                                                            <svg class="w-4 h-4 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" /></svg>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex items-center justify-between"><p class="text-sm font-medium text-white">Retargeting Ads Segment</p><span class="text-emerald-400 text-[10px] flex items-center gap-1"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Active</span></div>
                                                            <p class="mt-1 text-xs text-white/50">Added to "VIP Rock Fans" → Meta & Google Ads</p>
                                                            <p class="text-white/30 text-[10px] mt-1 font-mono">Segment: vip_purchaser + rock_affinity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-l-4 bg-white/5 rounded-xl border-amber-500 stagger-in" x-show="showAction3" style="animation-delay: 0.2s">
                                                    <div class="flex items-start gap-3">
                                                        <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-amber-500/20">
                                                            <svg class="w-4 h-4 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex items-center justify-between"><p class="text-sm font-medium text-white">Push Notification</p><span class="text-amber-400 text-[10px]">In 3 days</span></div>
                                                            <p class="mt-1 text-xs text-white/50">"🎸 Vița de Vie: Early bird ends in 24h!"</p>
                                                            <p class="text-white/30 text-[10px] mt-1 font-mono">Trigger: recommendation_match > 90%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-l-4 bg-white/5 rounded-xl border-emerald-500 stagger-in" x-show="showAction4" style="animation-delay: 0.3s">
                                                    <div class="flex items-start gap-3">
                                                        <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-emerald-500/20">
                                                            <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex items-center justify-between"><p class="text-sm font-medium text-white">Loyalty Enrolled</p><span class="text-emerald-400 text-[10px] flex items-center gap-1"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Active</span></div>
                                                            <p class="mt-1 text-xs text-white/50">Silver Tier • 127 points • Next: -10% la VIP</p>
                                                            <p class="text-white/30 text-[10px] mt-1 font-mono">Trigger: first_purchase + ltv > €200</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-l-4 border-pink-500 bg-white/5 rounded-xl stagger-in" x-show="showAction5" style="animation-delay: 0.4s">
                                                    <div class="flex items-start gap-3">
                                                        <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-pink-500/20">
                                                            <svg class="w-4 h-4 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex items-center justify-between"><p class="text-sm font-medium text-white">Win-Back Monitoring</p><span class="text-pink-400 text-[10px] flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-pink-400 animate-pulse"></span>Watching</span></div>
                                                            <p class="mt-1 text-xs text-white/50">If no activity in 30d → Auto win-back</p>
                                                            <p class="text-white/30 text-[10px] mt-1 font-mono">Status: churn_risk: 0.12 • No action needed</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 mt-4 border rounded-xl bg-gradient-to-r from-emerald-500/10 to-cyan-500/10 border-emerald-500/30 stagger-in" x-show="showAction6" style="animation-delay: 0.5s">
                                                <div class="grid grid-cols-3 gap-4 text-center">
                                                    <div><p class="text-2xl font-bold text-emerald-400">5</p><p class="text-[10px] text-white/40">Actions Triggered</p></div>
                                                    <div><p class="text-2xl font-bold text-cyan-400">€47</p><p class="text-[10px] text-white/40">Predicted Value</p></div>
                                                    <div><p class="text-2xl font-bold text-violet-400">0ms</p><p class="text-[10px] text-white/40">Manual Effort</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Laptop base -->
                        <div class="h-4 mx-auto int-laptop-base" style="width: 80%;"></div>
                    </div>
                    
                    <!-- Cross-device connection indicator -->
                    <div x-show="showCrossDeviceIndicator" 
                            class="absolute z-30 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="flex items-center gap-4 px-6 py-3 border rounded-full bg-amber-500/20 border-amber-500/40 int-slide-up">
                            <svg class="w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" /></svg>
                            <span class="font-medium text-amber-400">Cross-device link detected</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right: Data Panel -->
            <div class="lg:col-span-5">
                <div class="sticky p-6 int-glass-strong rounded-2xl top-24">
                    <!-- Data Panel Header -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500">
                                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" /></svg>
                            </div>
                            <div>
                                <p class="font-medium text-white">Tixello Intelligence</p>
                                <p class="text-xs text-white/40">Real-time processing</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 px-3 py-1 rounded-full" :class="isProcessing ? 'bg-emerald-500/20' : 'bg-white/5'">
                            <div class="w-2 h-2 rounded-full" :class="isProcessing ? 'bg-emerald-400 animate-pulse' : 'bg-white/30'"></div>
                            <span class="text-xs" :class="isProcessing ? 'text-emerald-400' : 'text-white/40'" x-text="isProcessing ? 'Processing' : 'Idle'"></span>
                        </div>
                    </div>
                    
                    <!-- User Profile Card -->
                    <div class="p-4 mb-4 bg-white/5 rounded-xl">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="flex items-center justify-center w-12 h-12 transition-all duration-500 rounded-full"
                                    :class="isIdentified ? 'bg-gradient-to-br from-emerald-500 to-cyan-500' : 'bg-white/10'">
                                <span class="font-bold text-white" x-text="isIdentified ? 'MP' : '?'"></span>
                            </div>
                            <div>
                                <p class="font-medium text-white transition-all" x-text="isIdentified ? 'Maria Popescu' : 'Anonymous User'"></p>
                                <p class="font-mono text-xs" :class="isIdentified ? 'text-emerald-400' : 'text-violet-400'" x-text="userId"></p>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-3 gap-2 text-center">
                            <div class="p-2 rounded-lg bg-white/5">
                                <p class="text-xl font-bold text-violet-400" x-text="dataPoints"></p>
                                <p class="text-[10px] text-white/40">Data Points</p>
                            </div>
                            <div class="p-2 rounded-lg bg-white/5">
                                <p class="text-xl font-bold text-cyan-400" x-text="devices"></p>
                                <p class="text-[10px] text-white/40">Devices</p>
                            </div>
                            <div class="p-2 rounded-lg bg-white/5">
                                <p class="text-xl font-bold text-emerald-400" x-text="sessions"></p>
                                <p class="text-[10px] text-white/40">Sessions</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Live Data Stream -->
                    <div class="mb-4">
                        <p class="flex items-center gap-2 mb-2 text-xs text-white/40">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            Live Event Stream
                        </p>
                        <div class="bg-black/30 rounded-xl p-3 h-44 overflow-hidden font-mono text-[10px]">
                            <template x-for="(event, index) in dataStream.slice(0, 8)" :key="event.id">
                                <div class="mb-1.5 py-1 border-b border-white/5 last:border-0 int-data-pulse" :style="`animation-delay: ${index * 50}ms`">
                                    <span class="text-white/30" x-text="event.time"></span>
                                    <span class="ml-2 px-1.5 py-0.5 rounded text-[9px]" :class="event.bgColor" x-text="event.type"></span>
                                    <span class="ml-1 text-white/60" x-text="event.data"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                    
                    <!-- ML Insights Panel -->
                    <div class="p-4 border bg-gradient-to-br from-violet-500/10 to-cyan-500/10 rounded-xl border-violet-500/20">
                        <div class="flex items-center gap-2 mb-3">
                            <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                            <span class="text-sm font-medium text-white">ML Insights</span>
                        </div>
                        
                        <div class="space-y-2">
                            <template x-for="(insight, index) in mlInsights" :key="index">
                                <div class="flex items-center justify-between py-1 int-slide-up" :style="`animation-delay: ${index * 100}ms`">
                                    <span class="text-xs text-white/60" x-text="insight.label"></span>
                                    <span class="font-mono text-xs" :class="insight.color" x-text="insight.value"></span>
                                </div>
                            </template>
                        </div>
                        
                        <div x-show="mlInsights.length === 0" class="py-3 text-center">
                            <p class="text-xs text-white/30">Collecting data...</p>
                        </div>
                    </div>
                    
                    <!-- Current Action Display -->
                    <div class="p-4 mt-4 transition-colors duration-300 border-l-4 rounded-xl bg-white/5"
                            :class="demoPhase === 2 ? 'border-emerald-500' : 'border-violet-500'">
                        <p class="mb-1 text-xs text-white/40">Current Step</p>
                        <p class="font-medium text-white" x-text="currentAction"></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Phase Indicators -->
        <div class="flex flex-wrap justify-center gap-4 mt-12">
            <div class="flex items-center gap-3 px-4 py-2 transition-all rounded-xl"
                    :class="demoPhase === 1 ? 'bg-violet-500/20 border border-violet-500/40' : 'bg-white/5'">
                <span class="flex items-center justify-center text-xs font-bold rounded-full w-7 h-7" 
                        :class="demoPhase === 1 ? 'bg-violet-500 text-white' : demoPhase > 1 ? 'bg-emerald-500/50 text-white' : 'bg-white/10 text-white/40'">
                    <span x-show="demoPhase <= 1">1</span>
                    <svg x-show="demoPhase > 1" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                </span>
                <p class="text-sm font-medium" :class="demoPhase === 1 ? 'text-violet-400' : demoPhase > 1 ? 'text-emerald-400' : 'text-white/40'">Identity Resolution</p>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 transition-all rounded-xl"
                    :class="demoPhase === 2 ? 'bg-cyan-500/20 border border-cyan-500/40' : 'bg-white/5'">
                <span class="flex items-center justify-center text-xs font-bold rounded-full w-7 h-7"
                        :class="demoPhase === 2 ? 'bg-cyan-500 text-white' : demoPhase > 2 ? 'bg-emerald-500/50 text-white' : 'bg-white/10 text-white/40'">
                    <span x-show="demoPhase <= 2">2</span>
                    <svg x-show="demoPhase > 2" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                </span>
                <p class="text-sm font-medium" :class="demoPhase === 2 ? 'text-cyan-400' : demoPhase > 2 ? 'text-emerald-400' : 'text-white/40'">Cross-Site Personalization</p>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 transition-all rounded-xl"
                    :class="demoPhase === 3 ? 'bg-emerald-500/20 border border-emerald-500/40' : 'bg-white/5'">
                <span class="flex items-center justify-center text-xs font-bold rounded-full w-7 h-7"
                        :class="demoPhase === 3 ? 'bg-emerald-500 text-white' : 'bg-white/10 text-white/40'">3</span>
                <p class="text-sm font-medium" :class="demoPhase === 3 ? 'text-emerald-400' : 'text-white/40'">Profile & Automation</p>
            </div>
        </div>
    </div>
</section>

<!-- Key Takeaways Section -->
<section id="how-it-works" class="py-20 sm:py-32">
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                <?php echo $t['takeaways_title']; ?>
            </h2>
            <p class="max-w-2xl mx-auto text-white/50">
                <?php echo $t['takeaways_desc']; ?>
            </p>
        </div>
        
        <div class="grid gap-6 md:grid-cols-3">
            <div class="p-8 int-glassrounded-2xl int-card-3d">
                <div class="flex items-center justify-center mb-6 w-14 h-14 rounded-2xl bg-violet-500/20">
                    <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-white"><?php echo $t['cross_device_title']; ?></h3>
                <p class="mb-4 text-white/50"><?php echo $t['cross_device_takeaway']; ?></p>
                <div class="flex items-center gap-2 text-sm text-violet-400">
                    <span class="font-mono">47</span>
                    <span class="text-white/40"><?php echo $t['data_points_collected']; ?></span>
                </div>
            </div>
            
            <div class="p-8 int-glassrounded-2xl int-card-3d">
                <div class="flex items-center justify-center mb-6 w-14 h-14 rounded-2xl bg-cyan-500/20">
                    <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" /></svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-white"><?php echo $t['identity_res_title']; ?></h3>
                <p class="mb-4 text-white/50"><?php echo $t['identity_res_desc']; ?></p>
                <div class="flex items-center gap-2 text-sm text-cyan-400">
                    <span class="font-mono">&lt;50ms</span>
                    <span class="text-white/40"><?php echo $t['processing_time']; ?></span>
                </div>
            </div>
            
            <div class="p-8 int-glassrounded-2xl int-card-3d">
                <div class="flex items-center justify-center mb-6 w-14 h-14 rounded-2xl bg-emerald-500/20">
                    <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-white"><?php echo $t['cross_site_intel']; ?></h3>
                <p class="mb-4 text-white/50"><?php echo $t['cross_site_intel_desc']; ?></p>
                <div class="flex items-center gap-2 text-sm text-emerald-400">
                    <span class="font-mono">+34%</span>
                    <span class="text-white/40"><?php echo $t['conversions_plus']; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Data Capture Section -->
<section id="data" class="relative py-20 sm:py-32">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        
        <div class="mb-16 text-center int-reveal" x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-cyan-500/10 border-cyan-500/20">
                <span class="font-mono text-xs tracking-wider text-cyan-400"><?php echo $t['data_badge']; ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo $t['data_title_1']; ?> <span class="int-gradient-text"><?php echo $t['data_title_2']; ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo $t['data_desc']; ?>
            </p>
        </div>
        
        <div class="grid gap-6 mb-12 lg:grid-cols-3 int-stagger-children" x-intersect="$el.classList.add('visible')">
            <!-- Behavioral -->
            <div class="int-glassrounded-2xl p-7 int-card-3d">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-violet-500/10">
                        <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white">Behavioral</h3>
                        <p class="font-mono text-sm text-violet-400">15+ data points</p>
                    </div>
                </div>
                
                <ul class="mb-6 space-y-3 text-sm text-white/60">
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-violet-400"></div>
                        Page views + scroll depth
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-violet-400"></div>
                        Click patterns + hover time
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-violet-400"></div>
                        Search queries + results clicked
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-violet-400"></div>
                        Navigation paths + time on page
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-violet-400"></div>
                        Exit intent + tab switches
                    </li>
                </ul>
                
                <div class="int-code-block rounded-xl p-4 text-[11px] font-mono">
                    <div class="int-syn-comment">// Event example</div>
                    <div><span class="int-syn-key">type:</span> <span class="int-syn-str">"page_view"</span></div>
                    <div><span class="int-syn-key">scroll_depth:</span> <span class="int-syn-num">87</span></div>
                    <div><span class="int-syn-key">time_on_page:</span> <span class="int-syn-num">142s</span></div>
                </div>
            </div>
            
            <!-- Transactional -->
            <div class="int-glassrounded-2xl p-7 int-card-3d">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-cyan-500/10">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white">Transactional</h3>
                        <p class="font-mono text-sm text-cyan-400">18+ data points</p>
                    </div>
                </div>
                
                <ul class="mb-6 space-y-3 text-sm text-white/60">
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-cyan-400"></div>
                        Cart add/remove/modify + timing
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-cyan-400"></div>
                        Abandonment patterns + recovery
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-cyan-400"></div>
                        Purchase history + frequency
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-cyan-400"></div>
                        Payment method preferences
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-cyan-400"></div>
                        Ticket types + price sensitivity
                    </li>
                </ul>
                
                <div class="int-code-block rounded-xl p-4 text-[11px] font-mono">
                    <div class="int-syn-comment">// Event example</div>
                    <div><span class="int-syn-key">type:</span> <span class="int-syn-str">"cart_add"</span></div>
                    <div><span class="int-syn-key">ticket:</span> <span class="int-syn-str">"VIP"</span></div>
                    <div><span class="int-syn-key">price:</span> <span class="int-syn-num">€127</span></div>
                </div>
            </div>
            
            <!-- Engagement -->
            <div class="int-glassrounded-2xl p-7 int-card-3d">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-emerald-500/10">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white">Engagement</h3>
                        <p class="font-mono text-sm text-emerald-400">17+ data points</p>
                    </div>
                </div>
                
                <ul class="mb-6 space-y-3 text-sm text-white/60">
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-emerald-400"></div>
                        Artist/venue follows + preferences
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-emerald-400"></div>
                        Genre affinities (ML-derived)
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-emerald-400"></div>
                        Email opens + click patterns
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-emerald-400"></div>
                        Wishlist + reminder signups
                    </li>
                    <li class="flex items-center gap-2">
                        <div class="w-1 h-1 rounded-full bg-emerald-400"></div>
                        Social shares + referrals
                    </li>
                </ul>
                
                <div class="int-code-block rounded-xl p-4 text-[11px] font-mono">
                    <div class="int-syn-comment">// Event example</div>
                    <div><span class="int-syn-key">type:</span> <span class="int-syn-str">"artist_follow"</span></div>
                    <div><span class="int-syn-key">artist:</span> <span class="int-syn-str">"Cargo"</span></div>
                    <div><span class="int-syn-key">genre:</span> <span class="int-syn-str">"rock"</span></div>
                </div>
            </div>
        </div>
        
        <!-- The Magic: Cross-Referencing -->
        <div class="p-8 int-glass-strong rounded-3xl sm:p-10 int-gradient-border int-reveal-scale" x-intersect="$el.classList.add('visible')">
            <div class="flex flex-col items-start gap-8 lg:flex-row">
                <div class="flex items-center justify-center flex-shrink-0 w-20 h-20 rounded-3xl bg-gradient-to-br from-violet-500 to-cyan-500 int-glow-box int-morph-blob">
                    <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" /></svg>
                </div>
                <div class="flex-1">
                    <h3 class="mb-4 text-2xl font-bold text-white"><?php echo $t['magic_title']; ?></h3>
                    <p class="mb-6 text-lg text-white/60">
                        <?php echo $t['magic_desc']; ?>
                    </p>
                    
                    <div class="p-6 overflow-x-auto font-mono text-xs int-code-block rounded-xl">
                        <div class="int-syn-comment">// Insight auto-generat pentru Maria</div>
                        <div class="mt-3"><span class="int-syn-key">insight_type:</span> <span class="int-syn-str">"upsell_opportunity"</span></div>
                        <div><span class="int-syn-key">confidence:</span> <span class="int-syn-num">0.94</span></div>
                        <div class="mt-2"><span class="int-syn-key">reasoning:</span> {</div>
                        <div class="pl-4 text-white/50">"Maria a vizualizat Cargo de 8 ori în 3 zile,</div>
                        <div class="pl-4 text-white/50">a căutat 'VIP experience', scroll 100% pe ticket page,</div>
                        <div class="pl-4 text-white/50">dar a adăugat General Admission în cart.</div>
                        <div class="pl-4 text-white/50">Affinitate rock: 0.89 (top 5% users).</div>
                        <div class="pl-4 text-white/50">LTV predictat: €312 - worth upgrade offer."</div>
                        <div>}</div>
                        <div class="mt-3"><span class="int-syn-key">action:</span> <span class="int-syn-str">"show_vip_upgrade_modal"</span></div>
                        <div><span class="int-syn-key">discount:</span> <span class="int-syn-num">15%</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI Engines Section -->
<section id="engines" class="relative py-20 sm:py-32">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        
        <div class="mb-16 text-center int-reveal" x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-emerald-500/10 border-emerald-500/20">
                <span class="font-mono text-xs tracking-wider text-emerald-400"><?php echo $t['engines_badge']; ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo $t['engines_title_1']; ?> <span class="int-gradient-text"><?php echo $t['engines_title_2']; ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo $t['engines_desc']; ?>
            </p>
        </div>
        
        <!-- Engine Cards Grid -->
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 int-stagger-children" x-intersect="$el.classList.add('visible')">
            <!-- Engine 1 -->
            <div class="p-6 int-glassrounded-2xl int-card-3d group" x-data="{ expanded: false }">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold transition-colors rounded-xl bg-violet-500/10 text-violet-400 group-hover:bg-violet-500/20">1</div>
                    <div>
                        <h3 class="font-semibold text-white">Recommendations</h3>
                        <p class="text-xs text-white/40">Hybrid ML engine</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">Content-based + collaborative filtering pentru recomandări hiperpersonalizate.</p>
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 font-mono text-xs rounded-lg bg-violet-500/10 text-violet-400">+34% conversii</span>
                    <button @click="expanded = !expanded" class="transition-colors text-white/40 hover:text-white">
                        <svg class="w-5 h-5 transition-transform transform" :class="expanded ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                </div>
                <div x-show="expanded" x-collapse class="pt-4 mt-4 border-t border-white/5">
                    <ul class="space-y-2 text-xs text-white/50">
                        <li>• Homepage personalizată per user</li>
                        <li>• "Pentru tine" carousel</li>
                        <li>• Post-purchase recommendations</li>
                    </ul>
                </div>
            </div>
            
            <!-- Engine 2 -->
            <div class="p-6 int-glassrounded-2xl int-card-3d group" x-data="{ expanded: false }">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold transition-colors rounded-xl bg-cyan-500/10 text-cyan-400 group-hover:bg-cyan-500/20">2</div>
                    <div>
                        <h3 class="font-semibold text-white">Next Best Action</h3>
                        <p class="text-xs text-white/40">Decision engine</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">12 tipuri de acțiuni: cart recovery, win-back, upsell, exit intent.</p>
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 font-mono text-xs rounded-lg bg-cyan-500/10 text-cyan-400">&lt;50ms latency</span>
                    <button @click="expanded = !expanded" class="transition-colors text-white/40 hover:text-white">
                        <svg class="w-5 h-5 transition-transform transform" :class="expanded ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                </div>
                <div x-show="expanded" x-collapse class="pt-4 mt-4 border-t border-white/5">
                    <div class="flex flex-wrap gap-1">
                        <span class="px-2 py-0.5 rounded bg-white/5 text-white/40 text-[10px]">Cart Recovery</span>
                        <span class="px-2 py-0.5 rounded bg-white/5 text-white/40 text-[10px]">Exit Intent</span>
                        <span class="px-2 py-0.5 rounded bg-white/5 text-white/40 text-[10px]">Upsell</span>
                        <span class="px-2 py-0.5 rounded bg-white/5 text-white/40 text-[10px]">Win-back</span>
                    </div>
                </div>
            </div>
            
            <!-- Engine 3 -->
            <div class="p-6 int-glassrounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold transition-colors rounded-xl bg-emerald-500/10 text-emerald-400 group-hover:bg-emerald-500/20">3</div>
                    <div>
                        <h3 class="font-semibold text-white">Win-Back AI</h3>
                        <p class="text-xs text-white/40">Churn prevention</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">4-tier automated recovery: 60, 90, 120, 180 zile cu oferte LTV-based.</p>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 font-mono text-xs rounded-lg bg-emerald-500/10 text-emerald-400">-28% churn</span>
                    <span class="px-2 py-1 text-xs rounded-lg bg-white/5 text-white/30">€47K/lună</span>
                </div>
            </div>
            
            <!-- Engine 4 -->
            <div class="p-6 int-glassrounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold text-red-400 transition-colors rounded-xl bg-red-500/10 group-hover:bg-red-500/20">4</div>
                    <div>
                        <h3 class="font-semibold text-white">Real-Time Alerts</h3>
                        <p class="text-xs text-white/40">Event triggers</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">12 trigger types: high-value abandon, churn spike, VIP activity, sellout.</p>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 font-mono text-xs text-red-400 rounded-lg bg-red-500/10">instant webhooks</span>
                </div>
            </div>
            
            <!-- Engine 5 -->
            <div class="p-6 int-glassrounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold text-pink-400 transition-colors rounded-xl bg-pink-500/10 group-hover:bg-pink-500/20">5</div>
                    <div>
                        <h3 class="font-semibold text-white">Lookalike Finder</h3>
                        <p class="text-xs text-white/40">Audience builder</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">8-factor ML similarity cu export pentru Facebook, Google, TikTok Ads.</p>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 font-mono text-xs text-pink-400 rounded-lg bg-pink-500/10">3.2x ROAS</span>
                </div>
            </div>
            
            <!-- Engine 6 -->
            <div class="p-6 int-glassrounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold transition-colors rounded-xl bg-amber-500/10 text-amber-400 group-hover:bg-amber-500/20">6</div>
                    <div>
                        <h3 class="font-semibold text-white">Demand Forecast</h3>
                        <p class="text-xs text-white/40">Predictive analytics</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">Velocity tracking, sellout probability, dynamic pricing signals.</p>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 font-mono text-xs rounded-lg bg-amber-500/10 text-amber-400">91% accuracy</span>
                </div>
            </div>
        </div>
        
        <!-- Engine 7 - Full width -->
        <div class="p-8 mt-6 int-glass-strong rounded-3xl int-gradient-border int-reveal-scale" x-intersect="$el.classList.add('visible')">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center">
                <div class="flex items-center gap-4">
                    <div class="flex items-center justify-center text-xl font-bold text-indigo-400 w-14 h-14 rounded-2xl bg-indigo-500/10">7</div>
                    <div>
                        <h3 class="text-lg font-semibold text-white">Journey Intelligence</h3>
                        <p class="text-sm text-white/50">Full lifecycle tracking cu auto stage detection</p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-3 lg:ml-auto">
                    <span class="px-3 py-1.5 rounded-lg bg-white/5 text-white/40 text-sm">Anonymous</span>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    <span class="px-3 py-1.5 rounded-lg bg-violet-500/10 text-violet-400 text-sm">Aware</span>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    <span class="px-3 py-1.5 rounded-lg bg-cyan-500/10 text-cyan-400 text-sm">Interested</span>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    <span class="px-3 py-1.5 rounded-lg bg-emerald-500/10 text-emerald-400 text-sm">Converted</span>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    <span class="px-3 py-1.5 rounded-lg bg-amber-500/10 text-amber-400 text-sm">Loyal</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section id="impact" class="relative py-20 sm:py-32">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        
        <div class="mb-16 text-center int-reveal" x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-amber-500/10 border-amber-500/20">
                <span class="font-mono text-xs tracking-wider text-amber-400"><?php echo $t['impact_badge']; ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo $t['impact_title_1']; ?> <span class="int-gradient-text"><?php echo $t['impact_title_2']; ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo $t['impact_desc']; ?>
            </p>
        </div>
        
        <!-- Big Numbers with animated int-counters -->
        <div class="grid grid-cols-2 gap-5 mb-16 lg:grid-cols-4 int-stagger-children" x-intersect="$el.classList.add('visible')">
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d" x-data="{ count: 0 }" x-intersect.once="let interval = setInterval(() => { if(count < 34) count++; else clearInterval(interval); }, 50)">
                <p class="mb-2 text-4xl font-bold sm:text-5xl lg:text-6xl text-emerald-400">+<span x-text="count" class="int-counter"></span>%</p>
                <p class="text-sm text-white/60">Conversion Rate</p>
                <p class="mt-1 text-xs text-white/30">vs. baseline</p>
            </div>
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d" x-data="{ count: 0 }" x-intersect.once="let interval = setInterval(() => { if(count < 47) count++; else clearInterval(interval); }, 40)">
                <p class="mb-2 text-4xl font-bold sm:text-5xl lg:text-6xl text-amber-400">€<span x-text="count" class="int-counter"></span>K</p>
                <p class="text-sm text-white/60">Recovered/lună</p>
                <p class="mt-1 text-xs text-white/30">abandoned carts</p>
            </div>
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d" x-data="{ count: 0 }" x-intersect.once="let interval = setInterval(() => { if(count < 28) count++; else clearInterval(interval); }, 60)">
                <p class="mb-2 text-4xl font-bold text-red-400 sm:text-5xl lg:text-6xl">-<span x-text="count" class="int-counter"></span>%</p>
                <p class="text-sm text-white/60">Churn Rate</p>
                <p class="mt-1 text-xs text-white/30">win-back AI</p>
            </div>
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d">
                <p class="mb-2 text-4xl font-bold sm:text-5xl lg:text-6xl text-cyan-400">3.2x</p>
                <p class="text-sm text-white/60">ROAS Ads</p>
                <p class="mt-1 text-xs text-white/30">lookalike audiences</p>
            </div>
        </div>
        
        <!-- Technical Specs -->
        <div class="p-8 int-glass-strong rounded-3xl sm:p-10 int-reveal-scale" x-intersect="$el.classList.add('visible')">
            <h3 class="mb-8 text-xl font-semibold text-center text-white"><?php echo $t['tech_specs']; ?></h3>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="space-y-4">
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50">Processing Capacity</span>
                        <span class="font-mono font-medium text-violet-400">847M events/day</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50">P99 Latency</span>
                        <span class="font-mono font-medium text-cyan-400">&lt;12ms</span>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50">ML Predictions/Day</span>
                        <span class="font-mono font-medium text-emerald-400">2.4M</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50">Model Accuracy</span>
                        <span class="font-mono font-medium text-amber-400">89.3%</span>
                    </div>
                </div>
                <div class="space-y-4 sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50">System Uptime</span>
                        <span class="font-mono font-medium text-emerald-400">99.99%</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50">Setup Required</span>
                        <span class="font-mono font-medium text-pink-400">Zero config</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="contact" class="py-20 sm:py-32">
    <div class="max-w-3xl px-4 mx-auto sm:px-6">
        <div class="int-glass-strong rounded-[2rem] p-10 sm:p-14 text-center relative overflow-hidden int-gradient-border int-reveal-scale" x-intersect="$el.classList.add('visible')">
            <!-- Animated background -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 rounded-full left-1/4 w-80 h-80 bg-violet-500/20 blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 rounded-full right-1/4 w-80 h-80 bg-cyan-500/20 blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>
            
            <div class="relative">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-8 rounded-3xl bg-gradient-to-br from-violet-500 to-cyan-500 int-glow-box int-morph-blob">
                    <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                    </svg>
                </div>
                
                <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl">
                    <?php echo $t['cta_title']; ?>
                </h2>

                <p class="max-w-lg mx-auto mb-10 text-lg text-white/50">
                    <?php echo $t['cta_desc']; ?>
                </p>
                
                <div class="flex flex-col justify-center gap-4 sm:flex-row">
                    <a href="mailto:investors@tixello.com" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-semibold text-white transition-all duration-300 int-magnetic-btn rounded-2xl bg-gradient-to-r from-violet-600 to-cyan-600 hover:shadow-xl hover:shadow-violet-500/20 int-shine">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        investors@tixello.com
                    </a>
                    
                    <a href="#" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-medium text-white transition-all duration-300 int-magnetic-btn rounded-2xl int-glasshover:bg-white/10">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                        <?php echo $t['request_deck']; ?>
                    </a>
                </div>

                <p class="mt-10 text-sm text-white/20"><?php echo $t['cta_footer']; ?></p>
            </div>
        </div>
    </div>
</section>


<!-- Demo Controller Script -->
<script>
    function demoController() {
        return {
            // Control state
            isPlaying: false,
            step: 0,
            totalSteps: 24,
            demoPhase: 1,
            progress: 0,
            isProcessing: false,
            eventId: 0,
            
            // Device state
            activeDevice: 'phone',
            phoneScreen: 'search',
            laptopScreen: 'event',
            currentUrl: 'tixello.ro',
            
            // User state
            isIdentified: false,
            userId: 'anon_7x8k2',
            dataPoints: 0,
            devices: 1,
            sessions: 1,
            
            // Typing state
            isTyping: false,
            isTypingEmail: false,
            isTypingName: false,
            isTypingPhone: false,
            searchText: '',
            checkoutEmail: '',
            checkoutName: '',
            checkoutPhone: '',
            
            // UI flags - Phase 1
            showResults: false,
            selectedEvent: -1,
            showCrossDeviceIndicator: false,
            highlightVIP: false,
            highlightCheckout: false,
            emailFocused: false,
            nameFocused: false,
            showNameField: false,
            showPhoneField: false,
            showIdentitySuccess: false,
            
            // Phase 2 flags
            showPersonalizedGreeting: false,
            showRecommendations: false,
            showRec1: false,
            showRec2: false,
            showRec3: false,
            showUpsell: false,
            
            // Phase 3 flags - Profile
            showProfileSection1: false,
            showProfileSection2: false,
            showProfileSection3: false,
            showProfileSection4: false,
            showProfileSection5: false,
            
            // Phase 3 flags - Actions
            showAction1: false,
            showAction2: false,
            showAction3: false,
            showAction4: false,
            showAction5: false,
            showAction6: false,
            
            // Data
            dataStream: [],
            mlInsights: [],
            currentAction: 'Click "Play Demo" to start',
            
            get phaseLabel() {
                if (this.demoPhase === 1) return 'Phase 1: Identity Resolution';
                if (this.demoPhase === 2) return 'Phase 2: Cross-Site Personalization';
                return 'Phase 3: Profile & Automation';
            },
            
            getPhaseColor(type = 'text') {
                const colors = { 
                    1: type === 'border' ? 'border-violet-500' : 'text-violet-400', 
                    2: type === 'border' ? 'border-cyan-500' : 'text-cyan-400', 
                    3: type === 'border' ? 'border-emerald-500' : 'text-emerald-400' 
                };
                return colors[this.demoPhase] || colors[1];
            },
            
            togglePlay() {
                this.isPlaying = !this.isPlaying;
                if (this.isPlaying) this.runDemo();
            },
            
            restart() {
                this.isPlaying = false;
                this.step = 0;
                this.demoPhase = 1;
                this.progress = 0;
                this.activeDevice = 'phone';
                this.phoneScreen = 'search';
                this.laptopScreen = 'event';
                this.currentUrl = 'tixello.ro';
                this.isProcessing = false;
                this.isIdentified = false;
                this.userId = 'anon_7x8k2';
                this.dataPoints = 0;
                this.devices = 1;
                this.sessions = 1;
                this.searchText = '';
                this.checkoutEmail = '';
                this.checkoutName = '';
                this.checkoutPhone = '';
                this.showResults = false;
                this.selectedEvent = -1;
                this.showCrossDeviceIndicator = false;
                this.highlightVIP = false;
                this.highlightCheckout = false;
                this.emailFocused = false;
                this.nameFocused = false;
                this.showNameField = false;
                this.showPhoneField = false;
                this.showIdentitySuccess = false;
                this.showPersonalizedGreeting = false;
                this.showRecommendations = false;
                this.showRec1 = false;
                this.showRec2 = false;
                this.showRec3 = false;
                this.showUpsell = false;
                this.showProfileSection1 = false;
                this.showProfileSection2 = false;
                this.showProfileSection3 = false;
                this.showProfileSection4 = false;
                this.showProfileSection5 = false;
                this.showAction1 = false;
                this.showAction2 = false;
                this.showAction3 = false;
                this.showAction4 = false;
                this.showAction5 = false;
                this.showAction6 = false;
                this.dataStream = [];
                this.mlInsights = [];
                this.currentAction = 'Click "Play Demo" to start';
            },
            
            addEvent(type, data, colorClass = 'bg-violet-500/30 text-violet-400') {
                const time = new Date().toLocaleTimeString('ro-RO', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
                this.dataStream.unshift({ id: ++this.eventId, time, type, data, bgColor: colorClass });
                if (this.dataStream.length > 12) this.dataStream.pop();
            },
            
            async typeText(prop, text, speed = 60) {
                for (let i = 0; i <= text.length; i++) {
                    if (!this.isPlaying) return;
                    this[prop] = text.substring(0, i);
                    await this.sleep(speed);
                }
            },
            
            sleep(ms) {
                return new Promise(r => setTimeout(r, ms));
            },
            
            async runDemo() {
                while (this.isPlaying && this.step < this.totalSteps) {
                    await this.executeStep(this.step);
                    this.step++;
                    this.progress = (this.step / this.totalSteps) * 100;
                }
                if (this.step >= this.totalSteps) {
                    this.isPlaying = false;
                    this.currentAction = '✅ Demo complete! Click Restart to replay';
                }
            },
            
            async executeStep(s) {
                this.isProcessing = true;
                
                switch(s) {
                    // PHASE 1: IDENTITY RESOLUTION
                    case 0:
                        this.currentAction = '📱 User deschide app-ul și caută evenimente';
                        this.activeDevice = 'phone';
                        this.phoneScreen = 'search';
                        this.addEvent('SESSION', 'app_opened', 'bg-cyan-500/30 text-cyan-400');
                        this.dataPoints = 2;
                        await this.sleep(1000);
                        this.isTyping = true;
                        await this.typeText('searchText', 'concert rock bucuresti');
                        this.isTyping = false;
                        this.addEvent('SEARCH', '"concert rock bucuresti"', 'bg-violet-500/30 text-violet-400');
                        this.dataPoints = 6;
                        await this.sleep(500);
                        break;
                        
                    case 1:
                        this.currentAction = '📱 Rezultatele căutării apar';
                        this.showResults = true;
                        this.addEvent('VIEW', 'search_results (3 events)', 'bg-cyan-500/30 text-cyan-400');
                        this.dataPoints = 9;
                        this.mlInsights = [{ label: 'Search Intent', value: 'concert rock', color: 'text-violet-400' }];
                        await this.sleep(1500);
                        break;
                        
                    case 2:
                        this.currentAction = '📱 User selectează concertul Cargo';
                        this.selectedEvent = 0;
                        this.addEvent('CLICK', 'event: Cargo Concert', 'bg-emerald-500/30 text-emerald-400');
                        this.dataPoints = 12;
                        this.mlInsights.push({ label: 'Artist Interest', value: 'Cargo', color: 'text-cyan-400' });
                        await this.sleep(1500);
                        break;
                        
                    case 3:
                        this.currentAction = '💻 User continuă pe laptop (cross-device)';
                        this.showCrossDeviceIndicator = true;
                        await this.sleep(800);
                        this.activeDevice = 'laptop';
                        this.laptopScreen = 'event';
                        this.currentUrl = 'tixello.ro/cargo-concert';
                        this.devices = 2;
                        this.addEvent('DEVICE', 'cross_device_linked', 'bg-amber-500/30 text-amber-400');
                        this.dataPoints = 16;
                        await this.sleep(1200);
                        this.showCrossDeviceIndicator = false;
                        break;
                        
                    case 4:
                        this.currentAction = '💻 User vizualizează pagina evenimentului';
                        this.addEvent('VIEW', 'event_page: Cargo', 'bg-cyan-500/30 text-cyan-400');
                        this.addEvent('TIME', 'time_on_page: 45s', 'bg-white/20 text-white/60');
                        this.dataPoints = 20;
                        this.mlInsights.push({ label: 'Genre Affinity', value: 'rock: 0.72', color: 'text-emerald-400' });
                        await this.sleep(2000);
                        break;
                        
                    case 5:
                        this.currentAction = '💻 User face scroll și vede biletele';
                        this.laptopScreen = 'event-tickets';
                        this.addEvent('SCROLL', 'depth: 85%', 'bg-cyan-500/30 text-cyan-400');
                        this.addEvent('VIEW', 'tickets_section', 'bg-violet-500/30 text-violet-400');
                        this.dataPoints = 24;
                        await this.sleep(1500);
                        break;
                        
                    case 6:
                        this.currentAction = '💻 User se uită la opțiunea VIP';
                        this.highlightVIP = true;
                        this.addEvent('HOVER', 'ticket: VIP €127', 'bg-violet-500/30 text-violet-400');
                        this.dataPoints = 27;
                        this.mlInsights = [
                            { label: 'Genre Affinity', value: 'rock: 0.78', color: 'text-emerald-400' },
                            { label: 'Price Sensitivity', value: 'low', color: 'text-cyan-400' },
                            { label: 'VIP Interest', value: 'high', color: 'text-violet-400' }
                        ];
                        await this.sleep(1500);
                        break;
                        
                    case 7:
                        this.currentAction = '💻 User adaugă bilet VIP în coș';
                        this.laptopScreen = 'cart';
                        this.currentUrl = 'tixello.ro/cart';
                        this.highlightVIP = false;
                        this.addEvent('CART', 'add: VIP Ticket €127', 'bg-emerald-500/30 text-emerald-400');
                        this.dataPoints = 31;
                        this.mlInsights.push({ label: 'Cart Value', value: '€127', color: 'text-amber-400' });
                        await this.sleep(2000);
                        break;
                        
                    case 8:
                        this.currentAction = '💻 User merge la checkout';
                        this.highlightCheckout = true;
                        await this.sleep(800);
                        this.laptopScreen = 'checkout';
                        this.currentUrl = 'tixello.ro/checkout';
                        this.highlightCheckout = false;
                        this.addEvent('NAVIGATE', 'checkout_init', 'bg-cyan-500/30 text-cyan-400');
                        this.dataPoints = 35;
                        await this.sleep(1000);
                        break;
                        
                    case 9:
                        this.currentAction = '💻 User completează adresa de email';
                        this.emailFocused = true;
                        this.isTypingEmail = true;
                        await this.typeText('checkoutEmail', 'maria.popescu@email.ro', 40);
                        this.isTypingEmail = false;
                        this.emailFocused = false;
                        this.addEvent('INPUT', 'email: maria.p***@email.ro', 'bg-violet-500/30 text-violet-400');
                        this.dataPoints = 39;
                        await this.sleep(500);
                        break;
                        
                    case 10:
                        this.currentAction = '💻 User completează numele';
                        this.showNameField = true;
                        await this.sleep(300);
                        this.nameFocused = true;
                        this.isTypingName = true;
                        await this.typeText('checkoutName', 'Maria Popescu', 50);
                        this.isTypingName = false;
                        this.nameFocused = false;
                        this.addEvent('INPUT', 'name: Maria Popescu', 'bg-violet-500/30 text-violet-400');
                        this.dataPoints = 43;
                        await this.sleep(500);
                        break;
                        
                    case 11:
                        this.currentAction = '💻 User completează telefonul';
                        this.showPhoneField = true;
                        await this.sleep(300);
                        this.isTypingPhone = true;
                        await this.typeText('checkoutPhone', '+40 722 *** ***', 50);
                        this.isTypingPhone = false;
                        this.addEvent('INPUT', 'phone: +40 722***', 'bg-violet-500/30 text-violet-400');
                        this.dataPoints = 47;
                        await this.sleep(800);
                        break;
                        
                    case 12:
                        this.currentAction = '✨ IDENTITY RESOLUTION - All data linked!';
                        this.showIdentitySuccess = true;
                        this.isIdentified = true;
                        this.userId = 'user_4829';
                        this.addEvent('IDENTITY', '✓ RESOLVED: Maria Popescu', 'bg-emerald-500/30 text-emerald-400');
                        this.addEvent('MERGE', '47 data points linked', 'bg-emerald-500/30 text-emerald-400');
                        this.mlInsights = [
                            { label: 'User ID', value: 'user_4829', color: 'text-emerald-400' },
                            { label: 'Rock Affinity', value: '0.89', color: 'text-violet-400' },
                            { label: 'Predicted LTV', value: '€312', color: 'text-cyan-400' },
                            { label: 'Churn Risk', value: '0.12 (low)', color: 'text-emerald-400' }
                        ];
                        await this.sleep(3000);
                        break;
                        
                    // PHASE 2: CROSS-SITE PERSONALIZATION
                    case 13:
                        this.demoPhase = 2;
                        this.currentAction = '🌐 O săptămână mai târziu: Maria intră pe ambilet.ro';
                        this.laptopScreen = 'ambilet-home';
                        this.currentUrl = 'ambilet.ro';
                        this.sessions = 2;
                        this.showIdentitySuccess = false;
                        this.addEvent('SESSION', 'new_site: ambilet.ro', 'bg-amber-500/30 text-amber-400');
                        this.addEvent('IDENTIFY', 'user_4829 recognized', 'bg-emerald-500/30 text-emerald-400');
                        this.dataPoints = 48;
                        await this.sleep(1500);
                        break;
                        
                    case 14:
                        this.currentAction = '🎯 Homepage se personalizează instant';
                        this.showPersonalizedGreeting = true;
                        this.addEvent('PERSONALIZE', 'homepage_customized', 'bg-emerald-500/30 text-emerald-400');
                        this.dataPoints = 49;
                        await this.sleep(1500);
                        break;
                        
                    case 15:
                        this.currentAction = '🎵 Recomandări bazate pe afinitatea rock';
                        this.showRecommendations = true;
                        this.showRec1 = true;
                        await this.sleep(400);
                        this.addEvent('ML', 'recommendations_generated', 'bg-violet-500/30 text-violet-400');
                        this.showRec2 = true;
                        await this.sleep(400);
                        this.showRec3 = true;
                        this.addEvent('RECOMMEND', 'Vița de Vie (94% match)', 'bg-cyan-500/30 text-cyan-400');
                        this.dataPoints = 51;
                        await this.sleep(1000);
                        break;
                        
                    case 16:
                        this.currentAction = '💰 NBA Engine detectează oportunitate de upsell';
                        this.addEvent('NBA', 'upsell_opportunity', 'bg-amber-500/30 text-amber-400');
                        this.showUpsell = true;
                        this.dataPoints = 53;
                        this.mlInsights = [
                            { label: 'User ID', value: 'user_4829', color: 'text-emerald-400' },
                            { label: 'Rock Affinity', value: '0.89', color: 'text-violet-400' },
                            { label: 'Predicted LTV', value: '€312', color: 'text-cyan-400' },
                            { label: 'Conversion Prob.', value: '87%', color: 'text-amber-400' },
                            { label: 'NBA Action', value: 'VIP Upsell', color: 'text-pink-400' }
                        ];
                        await this.sleep(2500);
                        break;
                        
                    // PHASE 3: PROFILE & AUTOMATION
                    case 17:
                        this.demoPhase = 3;
                        this.currentAction = '📊 Vizualizăm profilul complet al Mariei';
                        this.laptopScreen = 'profile';
                        this.currentUrl = 'hub.tixello.ro/users/4829';
                        this.addEvent('VIEW', 'user_profile_360', 'bg-emerald-500/30 text-emerald-400');
                        this.sessions = 3;
                        this.dataPoints = 54;
                        await this.sleep(800);
                        this.showProfileSection1 = true;
                        await this.sleep(400);
                        break;
                        
                    case 18:
                        this.currentAction = '📊 Date comportamentale și afinități';
                        this.showProfileSection2 = true;
                        await this.sleep(400);
                        this.showProfileSection3 = true;
                        this.addEvent('ML', 'affinities_calculated', 'bg-violet-500/30 text-violet-400');
                        await this.sleep(400);
                        break;
                        
                    case 19:
                        this.currentAction = '🤖 Predicții ML și intenții detectate';
                        this.showProfileSection4 = true;
                        await this.sleep(400);
                        this.showProfileSection5 = true;
                        this.addEvent('ML', 'intents_detected: 4', 'bg-cyan-500/30 text-cyan-400');
                        this.mlInsights = [
                            { label: 'Profile Completeness', value: '94%', color: 'text-emerald-400' },
                            { label: 'Data Points', value: '54', color: 'text-violet-400' },
                            { label: 'Affinities Tracked', value: '3', color: 'text-cyan-400' },
                            { label: 'Intents Detected', value: '4', color: 'text-amber-400' }
                        ];
                        await this.sleep(2000);
                        break;
                        
                    case 20:
                        this.currentAction = '⚡ Acțiuni automate pentru Maria';
                        this.laptopScreen = 'actions';
                        this.currentUrl = 'hub.tixello.ro/actions/4829';
                        this.addEvent('ENGINE', 'automation_triggered', 'bg-emerald-500/30 text-emerald-400');
                        await this.sleep(800);
                        this.showAction1 = true;
                        this.addEvent('ACTION', 'email_sent', 'bg-violet-500/30 text-violet-400');
                        await this.sleep(600);
                        break;
                        
                    case 21:
                        this.currentAction = '⚡ Retargeting & Push notifications';
                        this.showAction2 = true;
                        this.addEvent('ACTION', 'retargeting_segment', 'bg-cyan-500/30 text-cyan-400');
                        await this.sleep(500);
                        this.showAction3 = true;
                        this.addEvent('ACTION', 'push_scheduled', 'bg-amber-500/30 text-amber-400');
                        await this.sleep(600);
                        break;
                        
                    case 22:
                        this.currentAction = '⚡ Loyalty & Churn prevention';
                        this.showAction4 = true;
                        this.addEvent('ACTION', 'loyalty_enrolled', 'bg-emerald-500/30 text-emerald-400');
                        await this.sleep(500);
                        this.showAction5 = true;
                        this.addEvent('ACTION', 'winback_monitoring', 'bg-pink-500/30 text-pink-400');
                        await this.sleep(600);
                        break;
                        
                    case 23:
                        this.currentAction = '✨ 5 acțiuni automate, 0 efort manual!';
                        this.showAction6 = true;
                        this.addEvent('COMPLETE', '5 actions • €47 predicted value', 'bg-emerald-500/30 text-emerald-400');
                        this.mlInsights = [
                            { label: 'Actions Triggered', value: '5', color: 'text-emerald-400' },
                            { label: 'Predicted Value', value: '+€47', color: 'text-cyan-400' },
                            { label: 'Manual Effort', value: '0ms', color: 'text-violet-400' },
                            { label: 'Automation Rate', value: '100%', color: 'text-amber-400' }
                        ];
                        await this.sleep(1500);
                        break;
                }
                
                this.isProcessing = false;
            }
        }
    }
</script>

<?php get_footer(); ?>
