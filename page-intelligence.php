<?php
/**
 * Template Name: Intelligence Hub
 * Description: Tixello Intelligence Hub - Data & ML showcase page
 */

get_header();

$lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'ro';

$t = [
    // Hero
    'badge' => $lang === 'ro' ? 'PENTRU INVESTITORI & PARTENERI' : 'FOR INVESTORS & PARTNERS',
    'hero_title_1' => $lang === 'ro' ? 'Tixello' : 'Tixello',
    'hero_title_2' => $lang === 'ro' ? 'Intelligence Hub' : 'Intelligence Hub',
    'hero_desc' => $lang === 'ro'
        ? 'Customer Data Platform cu 7 motoare ML care transformă fiecare interacțiune în insight acționabil. Identity resolution cross-device, predicții în timp real, automatizări zero-config.'
        : 'Customer Data Platform with 7 ML engines that transform every interaction into actionable insight. Cross-device identity resolution, real-time predictions, zero-config automations.',
    'data_points' => $lang === 'ro' ? 'data points/user' : 'data points/user',
    'ml_engines' => $lang === 'ro' ? 'motoare ML' : 'ML engines',
    'latency' => $lang === 'ro' ? 'latență P99' : 'P99 latency',
    'watch_demo' => $lang === 'ro' ? 'Vezi Demo Live' : 'Watch Live Demo',
    'see_data' => $lang === 'ro' ? 'Explorează Datele' : 'Explore Data',

    // Demo Section
    'demo_title' => $lang === 'ro' ? 'Demo Interactiv: Identity Resolution' : 'Interactive Demo: Identity Resolution',
    'demo_desc' => $lang === 'ro'
        ? 'Urmărește cum transformăm un utilizator anonim într-un profil complet — de pe telefon pe laptop, de pe un site pe altul.'
        : 'Watch how we transform an anonymous user into a complete profile — from phone to laptop, from one site to another.',
    'play_demo' => $lang === 'ro' ? 'Play Demo' : 'Play Demo',
    'pause' => $lang === 'ro' ? 'Pauză' : 'Pause',
    'restart' => $lang === 'ro' ? 'Restart' : 'Restart',

    // What You Saw Section
    'saw_title' => $lang === 'ro' ? 'Ce Tocmai Ai Văzut' : 'What You Just Saw',
    'saw_desc' => $lang === 'ro'
        ? 'O demonstrație a întregului ciclu de data intelligence, de la colectare la personalizare cross-site.'
        : 'A demonstration of the full data intelligence cycle, from collection to cross-site personalization.',
    'cross_device' => $lang === 'ro' ? 'Cross-Device Tracking' : 'Cross-Device Tracking',
    'cross_device_desc' => $lang === 'ro'
        ? 'Același utilizator pe telefon și laptop, recunoscut automat prin fingerprinting avansat.'
        : 'Same user on phone and laptop, automatically recognized through advanced fingerprinting.',
    'identity_res' => 'Identity Resolution',
    'identity_res_desc' => $lang === 'ro'
        ? 'La checkout, toate datele anonime se leagă instant de identitatea reală.'
        : 'At checkout, all anonymous data instantly links to real identity.',
    'cross_site' => $lang === 'ro' ? 'Cross-Site Intelligence' : 'Cross-Site Intelligence',
    'cross_site_desc' => $lang === 'ro'
        ? 'Pe ambilet.ro (powered by Tixello), Maria e recunoscută instant și primește recomandări personalizate.'
        : 'On ambilet.ro (powered by Tixello), Maria is instantly recognized and receives personalized recommendations.',
    'data_points_collected' => $lang === 'ro' ? 'data points colectate' : 'data points collected',
    'processing_time' => $lang === 'ro' ? 'timp de procesare' : 'processing time',
    'more_conversions' => $lang === 'ro' ? 'conversii în plus' : 'more conversions',

    // Data Capture Section
    'data_capture' => 'DATA CAPTURE',
    'data_title' => $lang === 'ro' ? 'Ce Date' : 'What Data We',
    'data_title_2' => $lang === 'ro' ? 'Capturăm' : 'Capture',
    'data_desc' => $lang === 'ro'
        ? '50+ data points per utilizator, capturate automat la fiecare interacțiune.'
        : '50+ data points per user, automatically captured at each interaction.',
    'behavioral' => 'Behavioral',
    'behavioral_points' => '15+ data points',
    'transactional' => 'Transactional',
    'transactional_points' => '18+ data points',
    'engagement' => 'Engagement',
    'engagement_points' => '17+ data points',
    'magic_title' => $lang === 'ro' ? 'The Magic: Cross-Referencing' : 'The Magic: Cross-Referencing',
    'magic_desc' => $lang === 'ro'
        ? 'Puterea reală vine din combinarea datelor. Iată un exemplu de insight generat automat:'
        : 'The real power comes from combining data. Here is an example of an auto-generated insight:',

    // AI Engines Section
    'engines_badge' => '7 AI ENGINES',
    'engines_title' => 'Machine Learning',
    'engines_title_2' => 'Built-In',
    'engines_desc' => $lang === 'ro'
        ? 'Zero configurare. Funcționează din prima zi cu rezultate măsurabile.'
        : 'Zero configuration. Works from day one with measurable results.',
    'recommendations' => 'Recommendations',
    'recommendations_desc' => $lang === 'ro'
        ? 'Content-based + collaborative filtering pentru recomandări hiperpersonalizate.'
        : 'Content-based + collaborative filtering for hyper-personalized recommendations.',
    'nba' => 'Next Best Action',
    'nba_desc' => $lang === 'ro'
        ? '12 tipuri de acțiuni: cart recovery, win-back, upsell, exit intent.'
        : '12 action types: cart recovery, win-back, upsell, exit intent.',
    'winback' => 'Win-Back AI',
    'winback_desc' => $lang === 'ro'
        ? '4-tier automated recovery: 60, 90, 120, 180 zile cu oferte LTV-based.'
        : '4-tier automated recovery: 60, 90, 120, 180 days with LTV-based offers.',
    'alerts' => 'Real-Time Alerts',
    'alerts_desc' => $lang === 'ro'
        ? '12 trigger types: high-value abandon, churn spike, VIP activity, sellout.'
        : '12 trigger types: high-value abandon, churn spike, VIP activity, sellout.',
    'lookalike' => 'Lookalike Finder',
    'lookalike_desc' => $lang === 'ro'
        ? '8-factor ML similarity cu export pentru Facebook, Google, TikTok Ads.'
        : '8-factor ML similarity with export for Facebook, Google, TikTok Ads.',
    'forecast' => 'Demand Forecast',
    'forecast_desc' => $lang === 'ro'
        ? 'Velocity tracking, sellout probability, dynamic pricing signals.'
        : 'Velocity tracking, sellout probability, dynamic pricing signals.',
    'journey' => 'Journey Intelligence',
    'journey_desc' => $lang === 'ro'
        ? 'Full lifecycle tracking cu auto stage detection'
        : 'Full lifecycle tracking with auto stage detection',

    // Impact Section
    'impact_badge' => 'MEASURED IMPACT',
    'impact_title' => $lang === 'ro' ? 'Rezultate' : 'Measurable',
    'impact_title_2' => $lang === 'ro' ? 'Măsurabile' : 'Results',
    'impact_desc' => $lang === 'ro'
        ? 'Metrici reale din producție. Zero vanity metrics.'
        : 'Real metrics from production. Zero vanity metrics.',
    'conversion_rate' => 'Conversion Rate',
    'vs_baseline' => 'vs. baseline',
    'recovered_month' => $lang === 'ro' ? 'Recovered/lună' : 'Recovered/month',
    'abandoned_carts' => 'abandoned carts',
    'churn_rate' => 'Churn Rate',
    'roas_ads' => 'ROAS Ads',
    'lookalike_audiences' => 'lookalike audiences',
    'tech_specs' => $lang === 'ro' ? 'Technical Specifications' : 'Technical Specifications',
    'processing_capacity' => 'Processing Capacity',
    'p99_latency' => 'P99 Latency',
    'ml_predictions' => 'ML Predictions/Day',
    'model_accuracy' => 'Model Accuracy',
    'system_uptime' => 'System Uptime',
    'setup_required' => 'Setup Required',
    'zero_config' => 'Zero config',

    // CTA Section
    'cta_title' => $lang === 'ro' ? 'Programează un Demo Tehnic' : 'Schedule a Technical Demo',
    'cta_desc' => $lang === 'ro'
        ? '30 de minute în care îți arătăm exact cum funcționează Intelligence Hub pe date reale. Deep-dive tehnic pentru investitori și parteneri.'
        : '30 minutes where we show you exactly how Intelligence Hub works on real data. Technical deep-dive for investors and partners.',
    'request_deck' => $lang === 'ro' ? 'Request Investor Deck' : 'Request Investor Deck',
    'response_note' => $lang === 'ro' ? 'Răspuns în 24h • NDA disponibil' : 'Response in 24h • NDA available',

    // Demo Controller texts (Romanian only in demo as it's a showcase)
    'demo_click_play' => $lang === 'ro' ? 'Click "Play Demo" to start' : 'Click "Play Demo" to start',
    'demo_complete' => $lang === 'ro' ? 'Demo complete! Click Restart to replay' : 'Demo complete! Click Restart to replay',
];
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden sm:pt-40 sm:pb-32">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute w-96 h-96 bg-violet-500/20 rounded-full blur-3xl top-1/4 left-1/4 animate-pulse"></div>
        <div class="absolute w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl bottom-1/4 right-1/4 animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute w-[600px] h-[600px] bg-emerald-500/10 rounded-full blur-3xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
    </div>

    <div class="relative max-w-5xl px-4 mx-auto text-center sm:px-6">
        <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 border rounded-full bg-violet-500/10 border-violet-500/20">
            <span class="font-mono text-xs tracking-wider text-violet-400"><?php echo esc_html( $t['badge'] ); ?></span>
        </div>

        <h1 class="mb-6 text-4xl font-bold text-white sm:text-5xl lg:text-6xl">
            <?php echo esc_html( $t['hero_title_1'] ); ?>
            <span class="block mt-2 int-gradient-text"><?php echo esc_html( $t['hero_title_2'] ); ?></span>
        </h1>

        <p class="max-w-3xl mx-auto mb-10 text-lg sm:text-xl text-white/60">
            <?php echo esc_html( $t['hero_desc'] ); ?>
        </p>

        <div class="flex flex-wrap justify-center gap-6 mb-12 sm:gap-10">
            <div class="text-center">
                <p class="text-3xl font-bold text-violet-400 sm:text-4xl">50+</p>
                <p class="text-sm text-white/40"><?php echo esc_html( $t['data_points'] ); ?></p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold sm:text-4xl text-cyan-400">7</p>
                <p class="text-sm text-white/40"><?php echo esc_html( $t['ml_engines'] ); ?></p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-emerald-400 sm:text-4xl">&lt;12ms</p>
                <p class="text-sm text-white/40"><?php echo esc_html( $t['latency'] ); ?></p>
            </div>
        </div>

        <div class="flex flex-col justify-center gap-4 sm:flex-row">
            <a href="#demo" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-semibold text-white transition-all duration-300 int-shine rounded-2xl bg-gradient-to-r from-violet-600 to-cyan-600 hover:shadow-xl hover:shadow-violet-500/20">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" /><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <?php echo esc_html( $t['watch_demo'] ); ?>
            </a>
            <a href="#data" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-semibold text-white transition-all duration-300 int-glass rounded-2xl hover:bg-white/10">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" /></svg>
                <?php echo esc_html( $t['see_data'] ); ?>
            </a>
        </div>
    </div>
</section>

<!-- Interactive Demo Section -->
<section id="demo" class="py-20 sm:py-32">
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <div class="mb-12 text-center">
            <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                <?php echo esc_html( $t['demo_title'] ); ?>
            </h2>
            <p class="max-w-2xl mx-auto text-white/50">
                <?php echo esc_html( $t['demo_desc'] ); ?>
            </p>
        </div>

        <!-- Demo Container with Alpine.js -->
        <div x-data="demoController()" class="relative">
            <!-- Demo Controls -->
            <div class="flex flex-wrap items-center justify-center gap-4 mb-8">
                <button @click="togglePlay()" class="inline-flex items-center gap-2 px-6 py-3 font-medium text-white transition-colors rounded-xl" :class="isPlaying ? 'bg-red-500/20 hover:bg-red-500/30' : 'bg-violet-500/20 hover:bg-violet-500/30'">
                    <svg x-show="!isPlaying" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/></svg>
                    <svg x-show="isPlaying" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    <span x-text="isPlaying ? '<?php echo esc_js( $t['pause'] ); ?>' : '<?php echo esc_js( $t['play_demo'] ); ?>'"></span>
                </button>
                <button @click="restart()" class="inline-flex items-center gap-2 px-6 py-3 font-medium transition-colors text-white/60 hover:text-white rounded-xl bg-white/5 hover:bg-white/10">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                    <?php echo esc_html( $t['restart'] ); ?>
                </button>
            </div>

            <!-- Progress Bar -->
            <div class="max-w-2xl mx-auto mb-8">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-medium" :class="getPhaseColor()">
                        <span x-text="phaseLabel"></span>
                    </span>
                    <span class="font-mono text-xs text-white/40"><span x-text="step"></span>/<span x-text="totalSteps"></span></span>
                </div>
                <div class="h-2 overflow-hidden rounded-full bg-white/10">
                    <div class="h-full transition-all duration-300 rounded-full bg-gradient-to-r from-violet-500 via-cyan-500 to-emerald-500" :style="`width: ${progress}%`"></div>
                </div>
            </div>

            <!-- Demo Grid -->
            <div class="grid gap-8 lg:grid-cols-12">
                <!-- Devices Display -->
                <div class="lg:col-span-7">
                    <div class="relative p-6 int-glass-strong rounded-2xl">
                        <!-- Phone Device -->
                        <div class="absolute z-20 bottom-4 left-4 sm:bottom-6 sm:left-6" :class="activeDevice === 'phone' ? 'opacity-100 scale-100' : 'opacity-50 scale-95'" style="transition: all 0.5s ease;">
                            <div class="w-40 sm:w-48 bg-zinc-900 rounded-[2rem] p-2 shadow-2xl border border-white/10">
                                <div class="relative overflow-hidden bg-zinc-800 rounded-[1.5rem] aspect-[9/19]">
                                    <div class="absolute inset-0 flex flex-col p-3">
                                        <div class="flex items-center justify-center h-6 mb-2">
                                            <div class="w-16 h-4 rounded-full bg-zinc-900"></div>
                                        </div>
                                        <div class="flex-1 p-2 overflow-hidden rounded-xl bg-zinc-900/50">
                                            <p class="mb-2 text-xs font-medium text-white" x-text="currentUrl"></p>
                                            <!-- Phone content based on screen state -->
                                            <div class="space-y-2">
                                                <div class="flex items-center gap-2 p-2 rounded-lg bg-white/5" x-show="phoneScreen === 'search'">
                                                    <svg class="w-3 h-3 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                                    <span class="text-xs text-white/60" x-text="searchText || 'Search...'"></span>
                                                    <span class="int-cursor" x-show="isTyping"></span>
                                                </div>
                                                <template x-if="showResults">
                                                    <div class="space-y-1">
                                                        <div class="p-2 text-xs transition-colors rounded-lg cursor-pointer" :class="selectedEvent === 0 ? 'bg-violet-500/30 border border-violet-500/50' : 'bg-white/5'" @click="selectedEvent = 0">
                                                            <p class="font-medium text-white">Cargo Concert</p>
                                                            <p class="text-white/40">Rock • 15 Dec</p>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Laptop Device -->
                        <div class="relative z-10 mx-auto" style="max-width: 600px;" :class="activeDevice === 'laptop' ? 'opacity-100' : 'opacity-60'" style="transition: opacity 0.5s ease;">
                            <div class="bg-zinc-800 rounded-t-xl p-1.5 border border-white/10">
                                <div class="overflow-hidden rounded-lg bg-zinc-900 int-laptop-screen-gradient aspect-video">
                                    <div class="h-full p-4 overflow-hidden">
                                        <div class="flex items-center gap-2 mb-3">
                                            <div class="flex gap-1">
                                                <div class="w-2 h-2 rounded-full bg-red-500/60"></div>
                                                <div class="w-2 h-2 rounded-full bg-yellow-500/60"></div>
                                                <div class="w-2 h-2 rounded-full bg-green-500/60"></div>
                                            </div>
                                            <div class="flex-1 px-3 py-1 text-xs rounded-md bg-white/5 text-white/40" x-text="currentUrl"></div>
                                        </div>
                                        <div class="h-full">
                                            <!-- Laptop screens content -->
                                            <div x-show="laptopScreen === 'event'" class="space-y-3">
                                                <div class="flex items-center gap-3">
                                                    <div class="flex items-center justify-center w-12 h-12 text-xl rounded-xl bg-gradient-to-br from-violet-500/30 to-pink-500/30">🎸</div>
                                                    <div>
                                                        <p class="text-sm font-bold text-white">Cargo Concert</p>
                                                        <p class="text-xs text-white/50">Arenele Romane • 15 Dec 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div x-show="laptopScreen === 'checkout'" class="space-y-3">
                                                <div class="flex items-center gap-2 mb-4">
                                                    <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-cyan-500">
                                                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                                    </div>
                                                    <span class="text-sm font-medium text-white">Checkout</span>
                                                </div>
                                                <div class="space-y-2">
                                                    <div class="p-2 text-xs border rounded-lg bg-white/5 border-white/10" :class="emailFocused ? 'border-violet-500' : ''">
                                                        <p class="mb-1 text-white/50">Email</p>
                                                        <p class="text-white" x-text="checkoutEmail || '...'"></p>
                                                    </div>
                                                    <div x-show="showNameField" class="p-2 text-xs border rounded-lg bg-white/5 border-white/10">
                                                        <p class="mb-1 text-white/50">Name</p>
                                                        <p class="text-white" x-text="checkoutName || '...'"></p>
                                                    </div>
                                                </div>
                                                <div x-show="showIdentitySuccess" class="p-3 mt-3 border rounded-lg bg-emerald-500/20 border-emerald-500/40 int-identity-flash">
                                                    <p class="text-sm font-bold text-emerald-400">Identity Resolved!</p>
                                                    <p class="text-xs text-white/60">47 data points linked</p>
                                                </div>
                                            </div>
                                            <div x-show="laptopScreen === 'ambilet-home'" class="space-y-3">
                                                <div x-show="showPersonalizedGreeting" class="p-3 rounded-lg int-wave-in bg-gradient-to-r from-violet-600/20 to-cyan-600/20">
                                                    <p class="text-sm font-medium text-white">Bună seara, Maria! 👋</p>
                                                    <p class="text-xs text-white/50">Recomandate pentru tine</p>
                                                </div>
                                                <div x-show="showRecommendations" class="grid grid-cols-3 gap-2">
                                                    <div x-show="showRec1" class="p-2 rounded-lg int-slide-up bg-white/5">
                                                        <p class="text-xs font-medium text-white">Vița de Vie</p>
                                                        <p class="text-emerald-400 text-[10px]">94% match</p>
                                                    </div>
                                                    <div x-show="showRec2" class="p-2 rounded-lg int-slide-up bg-white/5">
                                                        <p class="text-xs font-medium text-white">Alternosfera</p>
                                                        <p class="text-emerald-400 text-[10px]">91% match</p>
                                                    </div>
                                                    <div x-show="showRec3" class="p-2 rounded-lg int-slide-up bg-white/5">
                                                        <p class="text-xs font-medium text-white">Rock la Munte</p>
                                                        <p class="text-emerald-400 text-[10px]">87% match</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-4 mx-auto int-laptop-base" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>

                <!-- Data Panel -->
                <div class="lg:col-span-5">
                    <div class="sticky p-6 int-glass-strong rounded-2xl top-24">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500">
                                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
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

                        <!-- User Profile -->
                        <div class="p-4 mb-4 bg-white/5 rounded-xl">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="flex items-center justify-center w-12 h-12 transition-all duration-500 rounded-full" :class="isIdentified ? 'bg-gradient-to-br from-emerald-500 to-cyan-500' : 'bg-white/10'">
                                    <span class="font-bold text-white" x-text="isIdentified ? 'MP' : '?'"></span>
                                </div>
                                <div>
                                    <p class="font-medium text-white" x-text="isIdentified ? 'Maria Popescu' : 'Anonymous User'"></p>
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

                        <!-- Live Event Stream -->
                        <div class="mb-4">
                            <p class="flex items-center gap-2 mb-2 text-xs text-white/40">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                Live Event Stream
                            </p>
                            <div class="bg-black/30 rounded-xl p-3 h-36 overflow-hidden font-mono text-[10px]">
                                <template x-for="(event, index) in dataStream.slice(0, 6)" :key="event.id">
                                    <div class="mb-1.5 py-1 border-b border-white/5 int-data-pulse">
                                        <span class="text-white/30" x-text="event.time"></span>
                                        <span class="ml-2 px-1.5 py-0.5 rounded text-[9px]" :class="event.bgColor" x-text="event.type"></span>
                                        <span class="ml-1 text-white/60" x-text="event.data"></span>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- Current Action -->
                        <div class="p-4 transition-colors duration-300 border-l-4 rounded-xl bg-white/5" :class="demoPhase === 2 ? 'border-emerald-500' : 'border-violet-500'">
                            <p class="mb-1 text-xs text-white/40">Current Step</p>
                            <p class="font-medium text-white" x-text="currentAction"></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Phase Indicators -->
            <div class="flex flex-wrap justify-center gap-4 mt-12">
                <div class="flex items-center gap-3 px-4 py-2 transition-all rounded-xl" :class="demoPhase === 1 ? 'bg-violet-500/20 border border-violet-500/40' : 'bg-white/5'">
                    <span class="flex items-center justify-center text-xs font-bold rounded-full w-7 h-7" :class="demoPhase === 1 ? 'bg-violet-500 text-white' : demoPhase > 1 ? 'bg-emerald-500/50 text-white' : 'bg-white/10 text-white/40'">
                        <span x-show="demoPhase <= 1">1</span>
                        <svg x-show="demoPhase > 1" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    </span>
                    <p class="text-sm font-medium" :class="demoPhase === 1 ? 'text-violet-400' : demoPhase > 1 ? 'text-emerald-400' : 'text-white/40'">Identity Resolution</p>
                </div>
                <div class="flex items-center gap-3 px-4 py-2 transition-all rounded-xl" :class="demoPhase === 2 ? 'bg-cyan-500/20 border border-cyan-500/40' : 'bg-white/5'">
                    <span class="flex items-center justify-center text-xs font-bold rounded-full w-7 h-7" :class="demoPhase === 2 ? 'bg-cyan-500 text-white' : demoPhase > 2 ? 'bg-emerald-500/50 text-white' : 'bg-white/10 text-white/40'">
                        <span x-show="demoPhase <= 2">2</span>
                        <svg x-show="demoPhase > 2" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    </span>
                    <p class="text-sm font-medium" :class="demoPhase === 2 ? 'text-cyan-400' : demoPhase > 2 ? 'text-emerald-400' : 'text-white/40'">Cross-Site Personalization</p>
                </div>
                <div class="flex items-center gap-3 px-4 py-2 transition-all rounded-xl" :class="demoPhase === 3 ? 'bg-emerald-500/20 border border-emerald-500/40' : 'bg-white/5'">
                    <span class="flex items-center justify-center text-xs font-bold rounded-full w-7 h-7" :class="demoPhase === 3 ? 'bg-emerald-500 text-white' : 'bg-white/10 text-white/40'">3</span>
                    <p class="text-sm font-medium" :class="demoPhase === 3 ? 'text-emerald-400' : 'text-white/40'">Profile & Automation</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What You Saw Section -->
<section id="how-it-works" class="py-20 sm:py-32">
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl"><?php echo esc_html( $t['saw_title'] ); ?></h2>
            <p class="max-w-2xl mx-auto text-white/50"><?php echo esc_html( $t['saw_desc'] ); ?></p>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            <div class="p-8 int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center mb-6 w-14 h-14 rounded-2xl bg-violet-500/20">
                    <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-white"><?php echo esc_html( $t['cross_device'] ); ?></h3>
                <p class="mb-4 text-white/50"><?php echo esc_html( $t['cross_device_desc'] ); ?></p>
                <div class="flex items-center gap-2 text-sm text-violet-400">
                    <span class="font-mono">47</span>
                    <span class="text-white/40"><?php echo esc_html( $t['data_points_collected'] ); ?></span>
                </div>
            </div>

            <div class="p-8 int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center mb-6 w-14 h-14 rounded-2xl bg-cyan-500/20">
                    <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-white"><?php echo esc_html( $t['identity_res'] ); ?></h3>
                <p class="mb-4 text-white/50"><?php echo esc_html( $t['identity_res_desc'] ); ?></p>
                <div class="flex items-center gap-2 text-sm text-cyan-400">
                    <span class="font-mono">&lt;50ms</span>
                    <span class="text-white/40"><?php echo esc_html( $t['processing_time'] ); ?></span>
                </div>
            </div>

            <div class="p-8 int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center mb-6 w-14 h-14 rounded-2xl bg-emerald-500/20">
                    <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-white"><?php echo esc_html( $t['cross_site'] ); ?></h3>
                <p class="mb-4 text-white/50"><?php echo esc_html( $t['cross_site_desc'] ); ?></p>
                <div class="flex items-center gap-2 text-sm text-emerald-400">
                    <span class="font-mono">+34%</span>
                    <span class="text-white/40"><?php echo esc_html( $t['more_conversions'] ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Data Capture Section -->
<section id="data" class="relative py-20 sm:py-32">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        <div class="mb-16 text-center int-reveal" x-data x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-cyan-500/10 border-cyan-500/20">
                <span class="font-mono text-xs tracking-wider text-cyan-400"><?php echo esc_html( $t['data_capture'] ); ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo esc_html( $t['data_title'] ); ?> <span class="int-gradient-text"><?php echo esc_html( $t['data_title_2'] ); ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50"><?php echo esc_html( $t['data_desc'] ); ?></p>
        </div>

        <div class="grid gap-6 mb-12 lg:grid-cols-3 int-stagger-children" x-data x-intersect="$el.classList.add('visible')">
            <!-- Behavioral -->
            <div class="int-glass rounded-2xl p-7 int-card-3d">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-violet-500/10">
                        <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white"><?php echo esc_html( $t['behavioral'] ); ?></h3>
                        <p class="font-mono text-sm text-violet-400"><?php echo esc_html( $t['behavioral_points'] ); ?></p>
                    </div>
                </div>
                <ul class="mb-6 space-y-3 text-sm text-white/60">
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-violet-400"></div>Page views + scroll depth</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-violet-400"></div>Click patterns + hover time</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-violet-400"></div>Search queries + results clicked</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-violet-400"></div>Navigation paths + time on page</li>
                </ul>
            </div>

            <!-- Transactional -->
            <div class="int-glass rounded-2xl p-7 int-card-3d">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-cyan-500/10">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white"><?php echo esc_html( $t['transactional'] ); ?></h3>
                        <p class="font-mono text-sm text-cyan-400"><?php echo esc_html( $t['transactional_points'] ); ?></p>
                    </div>
                </div>
                <ul class="mb-6 space-y-3 text-sm text-white/60">
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-cyan-400"></div>Cart add/remove/modify + timing</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-cyan-400"></div>Abandonment patterns + recovery</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-cyan-400"></div>Purchase history + frequency</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-cyan-400"></div>Ticket types + price sensitivity</li>
                </ul>
            </div>

            <!-- Engagement -->
            <div class="int-glass rounded-2xl p-7 int-card-3d">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-emerald-500/10">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white"><?php echo esc_html( $t['engagement'] ); ?></h3>
                        <p class="font-mono text-sm text-emerald-400"><?php echo esc_html( $t['engagement_points'] ); ?></p>
                    </div>
                </div>
                <ul class="mb-6 space-y-3 text-sm text-white/60">
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-emerald-400"></div>Artist/venue follows + preferences</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-emerald-400"></div>Genre affinities (ML-derived)</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-emerald-400"></div>Email opens + click patterns</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-emerald-400"></div>Social shares + referrals</li>
                </ul>
            </div>
        </div>

        <!-- Cross-Referencing Box -->
        <div class="p-8 int-glass-strong rounded-3xl sm:p-10 int-gradient-border int-reveal-scale" x-data x-intersect="$el.classList.add('visible')">
            <div class="flex flex-col items-start gap-8 lg:flex-row">
                <div class="flex items-center justify-center flex-shrink-0 w-20 h-20 rounded-3xl bg-gradient-to-br from-violet-500 to-cyan-500 int-glow-box int-morph-blob">
                    <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                </div>
                <div class="flex-1">
                    <h3 class="mb-4 text-2xl font-bold text-white"><?php echo esc_html( $t['magic_title'] ); ?></h3>
                    <p class="mb-6 text-lg text-white/60"><?php echo esc_html( $t['magic_desc'] ); ?></p>
                    <div class="p-6 overflow-x-auto font-mono text-xs int-code-block rounded-xl">
                        <div class="int-syn-comment">// Insight auto-generat</div>
                        <div class="mt-3"><span class="int-syn-key">insight_type:</span> <span class="int-syn-str">"upsell_opportunity"</span></div>
                        <div><span class="int-syn-key">confidence:</span> <span class="int-syn-num">0.94</span></div>
                        <div class="mt-2"><span class="int-syn-key">action:</span> <span class="int-syn-str">"show_vip_upgrade_modal"</span></div>
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
        <div class="mb-16 text-center int-reveal" x-data x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-emerald-500/10 border-emerald-500/20">
                <span class="font-mono text-xs tracking-wider text-emerald-400"><?php echo esc_html( $t['engines_badge'] ); ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo esc_html( $t['engines_title'] ); ?> <span class="int-gradient-text"><?php echo esc_html( $t['engines_title_2'] ); ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50"><?php echo esc_html( $t['engines_desc'] ); ?></p>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 int-stagger-children" x-data x-intersect="$el.classList.add('visible')">
            <?php
            $engines = [
                ['num' => 1, 'color' => 'violet', 'title' => $t['recommendations'], 'desc' => $t['recommendations_desc'], 'stat' => '+34% conversii'],
                ['num' => 2, 'color' => 'cyan', 'title' => $t['nba'], 'desc' => $t['nba_desc'], 'stat' => '<50ms latency'],
                ['num' => 3, 'color' => 'emerald', 'title' => $t['winback'], 'desc' => $t['winback_desc'], 'stat' => '-28% churn'],
                ['num' => 4, 'color' => 'red', 'title' => $t['alerts'], 'desc' => $t['alerts_desc'], 'stat' => 'instant webhooks'],
                ['num' => 5, 'color' => 'pink', 'title' => $t['lookalike'], 'desc' => $t['lookalike_desc'], 'stat' => '3.2x ROAS'],
                ['num' => 6, 'color' => 'amber', 'title' => $t['forecast'], 'desc' => $t['forecast_desc'], 'stat' => '91% accuracy'],
            ];
            foreach ( $engines as $e ) :
            ?>
            <div class="p-6 int-glass rounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold transition-colors rounded-xl bg-<?php echo $e['color']; ?>-500/10 text-<?php echo $e['color']; ?>-400 group-hover:bg-<?php echo $e['color']; ?>-500/20"><?php echo $e['num']; ?></div>
                    <h3 class="font-semibold text-white"><?php echo esc_html( $e['title'] ); ?></h3>
                </div>
                <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $e['desc'] ); ?></p>
                <span class="px-3 py-1 font-mono text-xs rounded-lg bg-<?php echo $e['color']; ?>-500/10 text-<?php echo $e['color']; ?>-400"><?php echo esc_html( $e['stat'] ); ?></span>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Engine 7 Full Width -->
        <div class="p-8 mt-6 int-glass-strong rounded-3xl int-gradient-border int-reveal-scale" x-data x-intersect="$el.classList.add('visible')">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center">
                <div class="flex items-center gap-4">
                    <div class="flex items-center justify-center text-xl font-bold text-indigo-400 w-14 h-14 rounded-2xl bg-indigo-500/10">7</div>
                    <div>
                        <h3 class="text-lg font-semibold text-white"><?php echo esc_html( $t['journey'] ); ?></h3>
                        <p class="text-sm text-white/50"><?php echo esc_html( $t['journey_desc'] ); ?></p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-3 lg:ml-auto">
                    <span class="px-3 py-1.5 rounded-lg bg-white/5 text-white/40 text-sm">Anonymous</span>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    <span class="px-3 py-1.5 rounded-lg bg-violet-500/10 text-violet-400 text-sm">Aware</span>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    <span class="px-3 py-1.5 rounded-lg bg-cyan-500/10 text-cyan-400 text-sm">Interested</span>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    <span class="px-3 py-1.5 rounded-lg bg-emerald-500/10 text-emerald-400 text-sm">Converted</span>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    <span class="px-3 py-1.5 rounded-lg bg-amber-500/10 text-amber-400 text-sm">Loyal</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section id="impact" class="relative py-20 sm:py-32">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        <div class="mb-16 text-center int-reveal" x-data x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-amber-500/10 border-amber-500/20">
                <span class="font-mono text-xs tracking-wider text-amber-400"><?php echo esc_html( $t['impact_badge'] ); ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo esc_html( $t['impact_title'] ); ?> <span class="int-gradient-text"><?php echo esc_html( $t['impact_title_2'] ); ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50"><?php echo esc_html( $t['impact_desc'] ); ?></p>
        </div>

        <div class="grid grid-cols-2 gap-5 mb-16 lg:grid-cols-4 int-stagger-children" x-data x-intersect="$el.classList.add('visible')">
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d" x-data="{ count: 0 }" x-intersect.once="let i = setInterval(() => { if(count < 34) count++; else clearInterval(i); }, 50)">
                <p class="mb-2 text-4xl font-bold sm:text-5xl lg:text-6xl text-emerald-400">+<span x-text="count"></span>%</p>
                <p class="text-sm text-white/60"><?php echo esc_html( $t['conversion_rate'] ); ?></p>
                <p class="mt-1 text-xs text-white/30"><?php echo esc_html( $t['vs_baseline'] ); ?></p>
            </div>
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d" x-data="{ count: 0 }" x-intersect.once="let i = setInterval(() => { if(count < 47) count++; else clearInterval(i); }, 40)">
                <p class="mb-2 text-4xl font-bold sm:text-5xl lg:text-6xl text-amber-400">€<span x-text="count"></span>K</p>
                <p class="text-sm text-white/60"><?php echo esc_html( $t['recovered_month'] ); ?></p>
                <p class="mt-1 text-xs text-white/30"><?php echo esc_html( $t['abandoned_carts'] ); ?></p>
            </div>
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d" x-data="{ count: 0 }" x-intersect.once="let i = setInterval(() => { if(count < 28) count++; else clearInterval(i); }, 60)">
                <p class="mb-2 text-4xl font-bold text-red-400 sm:text-5xl lg:text-6xl">-<span x-text="count"></span>%</p>
                <p class="text-sm text-white/60"><?php echo esc_html( $t['churn_rate'] ); ?></p>
                <p class="mt-1 text-xs text-white/30">win-back AI</p>
            </div>
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d">
                <p class="mb-2 text-4xl font-bold sm:text-5xl lg:text-6xl text-cyan-400">3.2x</p>
                <p class="text-sm text-white/60"><?php echo esc_html( $t['roas_ads'] ); ?></p>
                <p class="mt-1 text-xs text-white/30"><?php echo esc_html( $t['lookalike_audiences'] ); ?></p>
            </div>
        </div>

        <!-- Technical Specs -->
        <div class="p-8 int-glass-strong rounded-3xl sm:p-10 int-reveal-scale" x-data x-intersect="$el.classList.add('visible')">
            <h3 class="mb-8 text-xl font-semibold text-center text-white"><?php echo esc_html( $t['tech_specs'] ); ?></h3>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="space-y-4">
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50"><?php echo esc_html( $t['processing_capacity'] ); ?></span>
                        <span class="font-mono font-medium text-violet-400">847M events/day</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50"><?php echo esc_html( $t['p99_latency'] ); ?></span>
                        <span class="font-mono font-medium text-cyan-400">&lt;12ms</span>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50"><?php echo esc_html( $t['ml_predictions'] ); ?></span>
                        <span class="font-mono font-medium text-emerald-400">2.4M</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50"><?php echo esc_html( $t['model_accuracy'] ); ?></span>
                        <span class="font-mono font-medium text-amber-400">89.3%</span>
                    </div>
                </div>
                <div class="space-y-4 sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50"><?php echo esc_html( $t['system_uptime'] ); ?></span>
                        <span class="font-mono font-medium text-emerald-400">99.99%</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-white/5">
                        <span class="text-white/50"><?php echo esc_html( $t['setup_required'] ); ?></span>
                        <span class="font-mono font-medium text-pink-400"><?php echo esc_html( $t['zero_config'] ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="contact" class="py-20 sm:py-32">
    <div class="max-w-3xl px-4 mx-auto sm:px-6">
        <div class="int-glass-strong rounded-[2rem] p-10 sm:p-14 text-center relative overflow-hidden int-gradient-border int-reveal-scale" x-data x-intersect="$el.classList.add('visible')">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 rounded-full left-1/4 w-80 h-80 bg-violet-500/20 blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 rounded-full right-1/4 w-80 h-80 bg-cyan-500/20 blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>

            <div class="relative">
                <div class="flex items-center justify-center w-20 h-20 mx-auto mb-8 rounded-3xl bg-gradient-to-br from-violet-500 to-cyan-500 int-glow-box int-morph-blob">
                    <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                </div>

                <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl"><?php echo esc_html( $t['cta_title'] ); ?></h2>
                <p class="max-w-lg mx-auto mb-10 text-lg text-white/50"><?php echo esc_html( $t['cta_desc'] ); ?></p>

                <div class="flex flex-col justify-center gap-4 sm:flex-row">
                    <a href="mailto:investors@tixello.com" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-semibold text-white transition-all duration-300 int-shine rounded-2xl bg-gradient-to-r from-violet-600 to-cyan-600 hover:shadow-xl hover:shadow-violet-500/20">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                        investors@tixello.com
                    </a>
                    <a href="#" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-medium text-white transition-all duration-300 int-glass rounded-2xl hover:bg-white/10">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                        <?php echo esc_html( $t['request_deck'] ); ?>
                    </a>
                </div>

                <p class="mt-10 text-sm text-white/20"><?php echo esc_html( $t['response_note'] ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Demo Controller Script -->
<script>
function demoController() {
    return {
        isPlaying: false, step: 0, totalSteps: 17, demoPhase: 1, progress: 0, isProcessing: false, eventId: 0,
        activeDevice: 'phone', phoneScreen: 'search', laptopScreen: 'event', currentUrl: 'tixello.ro',
        isIdentified: false, userId: 'anon_7x8k2', dataPoints: 0, devices: 1, sessions: 1,
        isTyping: false, searchText: '', checkoutEmail: '', checkoutName: '',
        showResults: false, selectedEvent: -1, emailFocused: false, showNameField: false, showIdentitySuccess: false,
        showPersonalizedGreeting: false, showRecommendations: false, showRec1: false, showRec2: false, showRec3: false,
        dataStream: [], currentAction: '<?php echo esc_js( $t['demo_click_play'] ); ?>',

        get phaseLabel() {
            if (this.demoPhase === 1) return 'Phase 1: Identity Resolution';
            if (this.demoPhase === 2) return 'Phase 2: Cross-Site Personalization';
            return 'Phase 3: Profile & Automation';
        },

        getPhaseColor(type = 'text') {
            const c = { 1: type === 'border' ? 'border-violet-500' : 'text-violet-400', 2: type === 'border' ? 'border-cyan-500' : 'text-cyan-400', 3: type === 'border' ? 'border-emerald-500' : 'text-emerald-400' };
            return c[this.demoPhase] || c[1];
        },

        togglePlay() { this.isPlaying = !this.isPlaying; if (this.isPlaying) this.runDemo(); },

        restart() {
            Object.assign(this, {isPlaying:false,step:0,demoPhase:1,progress:0,activeDevice:'phone',phoneScreen:'search',laptopScreen:'event',currentUrl:'tixello.ro',isProcessing:false,isIdentified:false,userId:'anon_7x8k2',dataPoints:0,devices:1,sessions:1,searchText:'',checkoutEmail:'',checkoutName:'',showResults:false,selectedEvent:-1,emailFocused:false,showNameField:false,showIdentitySuccess:false,showPersonalizedGreeting:false,showRecommendations:false,showRec1:false,showRec2:false,showRec3:false,dataStream:[],currentAction:'<?php echo esc_js( $t['demo_click_play'] ); ?>'});
        },

        addEvent(type, data, bgColor = 'bg-violet-500/30 text-violet-400') {
            const time = new Date().toLocaleTimeString('ro-RO', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
            this.dataStream.unshift({ id: ++this.eventId, time, type, data, bgColor });
            if (this.dataStream.length > 12) this.dataStream.pop();
        },

        async typeText(prop, text, speed = 60) {
            for (let i = 0; i <= text.length; i++) { if (!this.isPlaying) return; this[prop] = text.substring(0, i); await this.sleep(speed); }
        },

        sleep(ms) { return new Promise(r => setTimeout(r, ms)); },

        async runDemo() {
            while (this.isPlaying && this.step < this.totalSteps) { await this.executeStep(this.step); this.step++; this.progress = (this.step / this.totalSteps) * 100; }
            if (this.step >= this.totalSteps) { this.isPlaying = false; this.currentAction = '✅ <?php echo esc_js( $t['demo_complete'] ); ?>'; }
        },

        async executeStep(s) {
            this.isProcessing = true;
            const steps = [
                async () => { this.currentAction = '📱 User searches for events'; this.isTyping = true; await this.typeText('searchText', 'concert rock bucuresti'); this.isTyping = false; this.addEvent('SEARCH', '"concert rock"'); this.dataPoints = 6; },
                async () => { this.currentAction = '📱 Search results appear'; this.showResults = true; this.addEvent('VIEW', 'search_results'); this.dataPoints = 9; await this.sleep(1500); },
                async () => { this.currentAction = '📱 User selects Cargo concert'; this.selectedEvent = 0; this.addEvent('CLICK', 'event: Cargo'); this.dataPoints = 12; await this.sleep(1500); },
                async () => { this.currentAction = '💻 Cross-device: user continues on laptop'; this.activeDevice = 'laptop'; this.currentUrl = 'tixello.ro/cargo'; this.devices = 2; this.addEvent('DEVICE', 'cross_device_linked', 'bg-amber-500/30 text-amber-400'); this.dataPoints = 16; await this.sleep(1500); },
                async () => { this.currentAction = '💻 User views event page'; this.addEvent('VIEW', 'event_page'); this.dataPoints = 24; await this.sleep(2000); },
                async () => { this.currentAction = '💻 User goes to checkout'; this.laptopScreen = 'checkout'; this.currentUrl = 'tixello.ro/checkout'; this.addEvent('NAVIGATE', 'checkout_init', 'bg-cyan-500/30 text-cyan-400'); this.dataPoints = 31; await this.sleep(1000); },
                async () => { this.currentAction = '💻 User enters email'; this.emailFocused = true; await this.typeText('checkoutEmail', 'maria.popescu@email.ro', 40); this.emailFocused = false; this.addEvent('INPUT', 'email: maria.p***', 'bg-violet-500/30 text-violet-400'); this.dataPoints = 39; },
                async () => { this.currentAction = '💻 User enters name'; this.showNameField = true; await this.typeText('checkoutName', 'Maria Popescu', 50); this.addEvent('INPUT', 'name: Maria Popescu'); this.dataPoints = 43; },
                async () => { this.currentAction = '✨ IDENTITY RESOLVED!'; this.showIdentitySuccess = true; this.isIdentified = true; this.userId = 'user_4829'; this.dataPoints = 47; this.addEvent('IDENTITY', '✓ Maria Popescu', 'bg-emerald-500/30 text-emerald-400'); await this.sleep(3000); },
                async () => { this.demoPhase = 2; this.currentAction = '🌐 One week later: Maria visits ambilet.ro'; this.laptopScreen = 'ambilet-home'; this.currentUrl = 'ambilet.ro'; this.sessions = 2; this.showIdentitySuccess = false; this.addEvent('SESSION', 'new_site: ambilet.ro', 'bg-amber-500/30 text-amber-400'); this.addEvent('IDENTIFY', 'user_4829 recognized', 'bg-emerald-500/30 text-emerald-400'); await this.sleep(1500); },
                async () => { this.currentAction = '🎯 Homepage personalizes instantly'; this.showPersonalizedGreeting = true; this.addEvent('PERSONALIZE', 'homepage_customized', 'bg-emerald-500/30 text-emerald-400'); await this.sleep(1500); },
                async () => { this.currentAction = '🎵 Rock-based recommendations'; this.showRecommendations = true; this.showRec1 = true; await this.sleep(400); this.showRec2 = true; await this.sleep(400); this.showRec3 = true; this.addEvent('RECOMMEND', 'Vița de Vie (94% match)', 'bg-cyan-500/30 text-cyan-400'); await this.sleep(1500); },
                async () => { this.demoPhase = 3; this.currentAction = '⚡ 5 automated actions triggered'; this.addEvent('ENGINE', 'email_sent', 'bg-violet-500/30 text-violet-400'); await this.sleep(500); this.addEvent('ENGINE', 'retargeting_segment', 'bg-cyan-500/30 text-cyan-400'); await this.sleep(500); this.addEvent('ENGINE', 'loyalty_enrolled', 'bg-emerald-500/30 text-emerald-400'); await this.sleep(1500); },
            ];
            if (steps[s]) await steps[s]();
            this.isProcessing = false;
        }
    }
}
</script>

<?php get_footer(); ?>
