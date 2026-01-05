<?php
/**
 * Template Name: Intelligence Hub
 * Description: Tixello Intelligence Hub - Data & ML Platform
 */

// Multilingual translations (RO/EN)
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';

$t = [
    // Hero
    'badge' => $lang === 'ro' ? 'INTELLIGENCE HUB' : 'INTELLIGENCE HUB',
    'hero_title_1' => $lang === 'ro' ? 'De la Date Anonime la' : 'From Anonymous Data to',
    'hero_title_2' => $lang === 'ro' ? 'Acțiuni Automate' : 'Automated Actions',
    'hero_desc' => $lang === 'ro'
        ? 'Platformă de data intelligence care transformă fiecare interacțiune în insight-uri actionable. Cross-device tracking, identity resolution și ML predictions - toate integrate nativ.'
        : 'Data intelligence platform that transforms every interaction into actionable insights. Cross-device tracking, identity resolution and ML predictions - all natively integrated.',
    'watch_demo' => $lang === 'ro' ? 'Vezi Demo Live' : 'Watch Live Demo',
    'learn_more' => $lang === 'ro' ? 'Află Mai Multe' : 'Learn More',
    'scroll_explore' => $lang === 'ro' ? 'Scroll pentru a explora' : 'Scroll to explore',

    // Problem Section
    'problem_badge' => $lang === 'ro' ? 'PROBLEMA' : 'THE PROBLEM',
    'problem_title_1' => $lang === 'ro' ? 'Date Fragmentate,' : 'Fragmented Data,',
    'problem_title_2' => $lang === 'ro' ? 'Oportunități Pierdute' : 'Lost Opportunities',
    'problem_desc' => $lang === 'ro'
        ? 'Fără o platformă unificată de intelligence, pierzi conexiunea dintre comportament și conversie.'
        : 'Without a unified intelligence platform, you lose the connection between behavior and conversion.',
    'problem_1_title' => $lang === 'ro' ? 'Utilizatori Anonimi' : 'Anonymous Users',
    'problem_1_desc' => $lang === 'ro' ? 'Nu știi cine sunt vizitatorii până la checkout' : 'You don\'t know who visitors are until checkout',
    'problem_2_title' => $lang === 'ro' ? 'Date Izolate' : 'Isolated Data',
    'problem_2_desc' => $lang === 'ro' ? 'Comportamentul nu se leagă de identitate' : 'Behavior doesn\'t link to identity',
    'problem_3_title' => $lang === 'ro' ? 'Personalizare Limitată' : 'Limited Personalization',
    'problem_3_desc' => $lang === 'ro' ? 'Aceleași recomandări pentru toți' : 'Same recommendations for everyone',
    'problem_4_title' => $lang === 'ro' ? 'Acțiuni Manuale' : 'Manual Actions',
    'problem_4_desc' => $lang === 'ro' ? 'Campaigns și follow-ups făcute manual' : 'Campaigns and follow-ups done manually',

    // Identity Resolution
    'identity_badge' => $lang === 'ro' ? 'SOLUTIA' : 'THE SOLUTION',
    'identity_title_1' => $lang === 'ro' ? 'Identity Resolution' : 'Identity Resolution',
    'identity_title_2' => $lang === 'ro' ? 'în Timp Real' : 'in Real Time',
    'identity_desc' => $lang === 'ro'
        ? 'Din momentul în care un utilizator ajunge pe site și până când devine client fidel, captăm și conectăm toate datele.'
        : 'From the moment a user lands on the site until they become a loyal customer, we capture and connect all data.',
    'identity_step_1' => $lang === 'ro' ? 'Captare date anonime' : 'Anonymous data capture',
    'identity_step_2' => $lang === 'ro' ? 'Comportament & preferințe' : 'Behavior & preferences',
    'identity_step_3' => $lang === 'ro' ? 'Identity resolution' : 'Identity resolution',
    'identity_step_4' => $lang === 'ro' ? 'Profil unificat 360°' : 'Unified 360° profile',
    'identity_step_5' => $lang === 'ro' ? 'Predicții ML & acțiuni automate' : 'ML predictions & automated actions',

    // Demo Section
    'demo_badge' => $lang === 'ro' ? 'DEMO INTERACTIV' : 'INTERACTIVE DEMO',
    'demo_title' => $lang === 'ro' ? 'Vezi Intelligence Hub în Acțiune' : 'See Intelligence Hub in Action',
    'demo_desc' => $lang === 'ro'
        ? 'Urmărește cum un utilizator anonim devine un profil complet cu predicții ML și acțiuni automate.'
        : 'Watch how an anonymous user becomes a complete profile with ML predictions and automated actions.',
    'demo_play' => $lang === 'ro' ? 'Play Demo' : 'Play Demo',
    'demo_pause' => $lang === 'ro' ? 'Pauză' : 'Pause',
    'demo_restart' => $lang === 'ro' ? 'Restart' : 'Restart',

    // Key Takeaways
    'takeaways_title' => $lang === 'ro' ? 'Ce Tocmai Ai Văzut' : 'What You Just Saw',
    'takeaways_desc' => $lang === 'ro'
        ? 'O demonstrație a întregului ciclu de data intelligence, de la colectare la personalizare cross-site.'
        : 'A demonstration of the entire data intelligence cycle, from collection to cross-site personalization.',
    'takeaway_1_title' => $lang === 'ro' ? 'Cross-Device Tracking' : 'Cross-Device Tracking',
    'takeaway_1_desc' => $lang === 'ro'
        ? 'Același utilizator pe telefon și laptop, recunoscut automat prin fingerprinting avansat.'
        : 'Same user on phone and laptop, automatically recognized through advanced fingerprinting.',
    'takeaway_2_title' => $lang === 'ro' ? 'Identity Resolution' : 'Identity Resolution',
    'takeaway_2_desc' => $lang === 'ro'
        ? 'La checkout, toate datele anonime se leagă instant de identitatea reală.'
        : 'At checkout, all anonymous data instantly links to real identity.',
    'takeaway_3_title' => $lang === 'ro' ? 'Cross-Site Intelligence' : 'Cross-Site Intelligence',
    'takeaway_3_desc' => $lang === 'ro'
        ? 'Pe ambilet.ro (powered by Tixello), Maria e recunoscută instant și primește recomandări personalizate.'
        : 'On ambilet.ro (powered by Tixello), Maria is instantly recognized and receives personalized recommendations.',

    // Data Capture
    'data_badge' => $lang === 'ro' ? 'DATA CAPTURE' : 'DATA CAPTURE',
    'data_title_1' => $lang === 'ro' ? 'Ce Date' : 'What Data',
    'data_title_2' => $lang === 'ro' ? 'Capturăm' : 'We Capture',
    'data_desc' => $lang === 'ro'
        ? '50+ data points per utilizator, capturate automat la fiecare interacțiune.'
        : '50+ data points per user, automatically captured at every interaction.',
    'data_behavioral' => $lang === 'ro' ? 'Behavioral' : 'Behavioral',
    'data_transactional' => $lang === 'ro' ? 'Transactional' : 'Transactional',
    'data_engagement' => $lang === 'ro' ? 'Engagement' : 'Engagement',
    'data_magic_title' => $lang === 'ro' ? 'The Magic: Cross-Referencing' : 'The Magic: Cross-Referencing',
    'data_magic_desc' => $lang === 'ro'
        ? 'Puterea reală vine din combinarea datelor. Iată un exemplu de insight generat automat:'
        : 'The real power comes from combining data. Here\'s an example of an auto-generated insight:',

    // AI Engines
    'engines_badge' => $lang === 'ro' ? '7 AI ENGINES' : '7 AI ENGINES',
    'engines_title_1' => $lang === 'ro' ? 'Machine Learning' : 'Machine Learning',
    'engines_title_2' => $lang === 'ro' ? 'Built-In' : 'Built-In',
    'engines_desc' => $lang === 'ro'
        ? 'Zero configurare. Funcționează din prima zi cu rezultate măsurabile.'
        : 'Zero configuration. Works from day one with measurable results.',

    // Impact
    'impact_badge' => $lang === 'ro' ? 'MEASURED IMPACT' : 'MEASURED IMPACT',
    'impact_title_1' => $lang === 'ro' ? 'Rezultate' : 'Measurable',
    'impact_title_2' => $lang === 'ro' ? 'Măsurabile' : 'Results',
    'impact_desc' => $lang === 'ro'
        ? 'Metrici reale din producție. Zero vanity metrics.'
        : 'Real metrics from production. Zero vanity metrics.',
    'impact_conversion' => $lang === 'ro' ? 'Conversion Rate' : 'Conversion Rate',
    'impact_recovered' => $lang === 'ro' ? 'Recovered/lună' : 'Recovered/month',
    'impact_churn' => $lang === 'ro' ? 'Churn Rate' : 'Churn Rate',
    'impact_roas' => $lang === 'ro' ? 'ROAS Ads' : 'ROAS Ads',
    'tech_specs' => $lang === 'ro' ? 'Technical Specifications' : 'Technical Specifications',

    // CTA
    'cta_title' => $lang === 'ro' ? 'Programează un Demo Tehnic' : 'Schedule a Technical Demo',
    'cta_desc' => $lang === 'ro'
        ? '30 de minute în care îți arătăm exact cum funcționează Intelligence Hub pe date reale. Deep-dive tehnic pentru investitori și parteneri.'
        : '30 minutes where we show you exactly how Intelligence Hub works on real data. Technical deep-dive for investors and partners.',
    'cta_email' => 'investors@tixello.com',
    'cta_deck' => $lang === 'ro' ? 'Request Investor Deck' : 'Request Investor Deck',
    'cta_footer' => $lang === 'ro' ? 'Răspuns în 24h • NDA disponibil' : 'Response within 24h • NDA available',
];

get_header();
?>

<!-- Alpine.js Intersect Plugin (MUST be before Alpine core) -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

<!-- Aurora Background -->
<div class="int-aurora">
    <div class="int-aurora-blob"></div>
    <div class="int-aurora-blob"></div>
    <div class="int-aurora-blob"></div>
</div>

<!-- Scan Line Effect -->
<div class="int-scanline"></div>

<!-- Grid Background -->
<div class="fixed inset-0 pointer-events-none int-grid-bg -z-10"></div>

<!-- Hero Section -->
<section class="relative flex items-center min-h-screen pt-32 pb-20 overflow-hidden">
    <div class="relative z-10 max-w-6xl px-4 mx-auto sm:px-6">
        <div class="text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 border int-glass rounded-full border-violet-500/20 int-float">
                <div class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></div>
                <span class="font-mono text-xs tracking-wider text-violet-400"><?php echo esc_html($t['badge']); ?></span>
            </div>

            <!-- Title -->
            <h1 class="mb-6 text-4xl font-bold leading-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
                <?php echo esc_html($t['hero_title_1']); ?><br>
                <span class="int-gradient-text-animated"><?php echo esc_html($t['hero_title_2']); ?></span>
            </h1>

            <!-- Description -->
            <p class="max-w-2xl mx-auto mb-10 text-lg text-white/50 sm:text-xl">
                <?php echo esc_html($t['hero_desc']); ?>
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a href="#demo" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-semibold text-white transition-all duration-300 int-magnetic-btn rounded-2xl bg-gradient-to-r from-violet-600 to-cyan-600 hover:shadow-xl hover:shadow-violet-500/20 int-shine">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/></svg>
                    <?php echo esc_html($t['watch_demo']); ?>
                </a>
                <a href="#how-it-works" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-medium text-white transition-all duration-300 int-glass int-magnetic-btn rounded-2xl hover:bg-white/10">
                    <?php echo esc_html($t['learn_more']); ?>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="mt-20">
                <p class="mb-3 text-sm text-white/30"><?php echo esc_html($t['scroll_explore']); ?></p>
                <div class="flex justify-center">
                    <div class="flex items-center justify-center w-6 h-10 border rounded-full border-white/20">
                        <div class="w-1 h-2 rounded-full bg-white/40 int-scroll-indicator"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- THE PROBLEM Section -->
<section class="relative py-20 sm:py-32">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        <div class="mb-16 text-center int-reveal" x-data x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-red-500/10 border-red-500/20">
                <span class="font-mono text-xs tracking-wider text-red-400"><?php echo esc_html($t['problem_badge']); ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo esc_html($t['problem_title_1']); ?> <span class="int-gradient-text"><?php echo esc_html($t['problem_title_2']); ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo esc_html($t['problem_desc']); ?>
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 int-stagger-children" x-data x-intersect="$el.classList.add('visible')">
            <!-- Problem 1 -->
            <div class="p-6 text-center int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-2xl bg-red-500/10">
                    <svg class="w-8 h-8 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" /></svg>
                </div>
                <h3 class="mb-2 font-semibold text-white"><?php echo esc_html($t['problem_1_title']); ?></h3>
                <p class="text-sm text-white/40"><?php echo esc_html($t['problem_1_desc']); ?></p>
            </div>

            <!-- Problem 2 -->
            <div class="p-6 text-center int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-2xl bg-orange-500/10">
                    <svg class="w-8 h-8 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" /></svg>
                </div>
                <h3 class="mb-2 font-semibold text-white"><?php echo esc_html($t['problem_2_title']); ?></h3>
                <p class="text-sm text-white/40"><?php echo esc_html($t['problem_2_desc']); ?></p>
            </div>

            <!-- Problem 3 -->
            <div class="p-6 text-center int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-2xl bg-yellow-500/10">
                    <svg class="w-8 h-8 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /></svg>
                </div>
                <h3 class="mb-2 font-semibold text-white"><?php echo esc_html($t['problem_3_title']); ?></h3>
                <p class="text-sm text-white/40"><?php echo esc_html($t['problem_3_desc']); ?></p>
            </div>

            <!-- Problem 4 -->
            <div class="p-6 text-center int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-2xl bg-pink-500/10">
                    <svg class="w-8 h-8 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <h3 class="mb-2 font-semibold text-white"><?php echo esc_html($t['problem_4_title']); ?></h3>
                <p class="text-sm text-white/40"><?php echo esc_html($t['problem_4_desc']); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Identity Resolution Section -->
<section class="relative py-20 sm:py-32">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        <div class="mb-16 text-center int-reveal" x-data x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-violet-500/10 border-violet-500/20">
                <span class="font-mono text-xs tracking-wider text-violet-400"><?php echo esc_html($t['identity_badge']); ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo esc_html($t['identity_title_1']); ?> <span class="int-gradient-text"><?php echo esc_html($t['identity_title_2']); ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo esc_html($t['identity_desc']); ?>
            </p>
        </div>

        <!-- Timeline -->
        <div class="relative max-w-4xl mx-auto">
            <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-violet-500 via-cyan-500 to-emerald-500 int-data-flow-line"></div>

            <div class="space-y-12 int-stagger-children" x-data x-intersect="$el.classList.add('visible')">
                <!-- Step 1 -->
                <div class="relative flex items-center gap-8">
                    <div class="flex-1 text-right">
                        <div class="inline-block p-6 int-glass rounded-2xl int-card-3d">
                            <h3 class="mb-2 font-semibold text-white"><?php echo esc_html($t['identity_step_1']); ?></h3>
                            <p class="text-sm text-white/40">Browser fingerprint, device info, session data</p>
                        </div>
                    </div>
                    <div class="absolute z-10 flex items-center justify-center w-12 h-12 text-white transform -translate-x-1/2 rounded-full left-1/2 bg-violet-500 int-glow-box">1</div>
                    <div class="flex-1"></div>
                </div>

                <!-- Step 2 -->
                <div class="relative flex items-center gap-8">
                    <div class="flex-1"></div>
                    <div class="absolute z-10 flex items-center justify-center w-12 h-12 text-white transform -translate-x-1/2 rounded-full left-1/2 bg-cyan-500 int-glow-box">2</div>
                    <div class="flex-1">
                        <div class="inline-block p-6 int-glass rounded-2xl int-card-3d">
                            <h3 class="mb-2 font-semibold text-white"><?php echo esc_html($t['identity_step_2']); ?></h3>
                            <p class="text-sm text-white/40">Page views, clicks, search, cart actions</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative flex items-center gap-8">
                    <div class="flex-1 text-right">
                        <div class="inline-block p-6 int-glass rounded-2xl int-card-3d">
                            <h3 class="mb-2 font-semibold text-white"><?php echo esc_html($t['identity_step_3']); ?></h3>
                            <p class="text-sm text-white/40">Email/phone la checkout = merge cu date anonime</p>
                        </div>
                    </div>
                    <div class="absolute z-10 flex items-center justify-center w-12 h-12 text-white transform -translate-x-1/2 rounded-full left-1/2 bg-emerald-500 int-glow-box">3</div>
                    <div class="flex-1"></div>
                </div>

                <!-- Step 4 -->
                <div class="relative flex items-center gap-8">
                    <div class="flex-1"></div>
                    <div class="absolute z-10 flex items-center justify-center w-12 h-12 text-white transform -translate-x-1/2 rounded-full left-1/2 bg-amber-500 int-glow-box">4</div>
                    <div class="flex-1">
                        <div class="inline-block p-6 int-glass rounded-2xl int-card-3d">
                            <h3 class="mb-2 font-semibold text-white"><?php echo esc_html($t['identity_step_4']); ?></h3>
                            <p class="text-sm text-white/40">Toate sesiunile și device-urile conectate</p>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="relative flex items-center gap-8">
                    <div class="flex-1 text-right">
                        <div class="inline-block p-6 int-glass-strong rounded-2xl int-gradient-border">
                            <h3 class="mb-2 font-semibold text-white"><?php echo esc_html($t['identity_step_5']); ?></h3>
                            <p class="text-sm text-white/40">LTV, churn risk, next best action</p>
                        </div>
                    </div>
                    <div class="absolute z-10 flex items-center justify-center w-12 h-12 text-white transform -translate-x-1/2 rounded-full left-1/2 bg-gradient-to-br from-violet-500 to-cyan-500 int-glow-box int-morph-blob">5</div>
                    <div class="flex-1"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Demo Section -->
<section id="demo" class="relative py-20 sm:py-32">
    <div class="max-w-7xl px-4 mx-auto sm:px-6">
        <div class="mb-12 text-center int-reveal" x-data x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-emerald-500/10 border-emerald-500/20">
                <span class="font-mono text-xs tracking-wider text-emerald-400"><?php echo esc_html($t['demo_badge']); ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo esc_html($t['demo_title']); ?>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo esc_html($t['demo_desc']); ?>
            </p>
        </div>

        <!-- Demo Placeholder -->
        <div class="p-8 text-center int-glass-strong rounded-3xl int-gradient-border">
            <div class="flex items-center justify-center w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-violet-500 to-cyan-500 int-glow-box">
                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/></svg>
            </div>
            <h3 class="mb-4 text-2xl font-bold text-white">Interactive Demo</h3>
            <p class="max-w-lg mx-auto mb-8 text-white/50">
                Demo-ul interactiv arată journey-ul complet al unui utilizator: de la vizită anonimă la profil complet cu acțiuni automate.
            </p>
            <a href="mailto:investors@tixello.com" class="inline-flex items-center gap-2 px-6 py-3 font-semibold text-white transition-all rounded-xl bg-violet-600 hover:bg-violet-500">
                Solicită Demo Live
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
            </a>
        </div>
    </div>
</section>

<!-- Key Takeaways Section -->
<section id="how-it-works" class="py-20 sm:py-32">
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl">
                <?php echo esc_html($t['takeaways_title']); ?>
            </h2>
            <p class="max-w-2xl mx-auto text-white/50">
                <?php echo esc_html($t['takeaways_desc']); ?>
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            <div class="p-8 int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center mb-6 w-14 h-14 rounded-2xl bg-violet-500/20">
                    <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-white"><?php echo esc_html($t['takeaway_1_title']); ?></h3>
                <p class="mb-4 text-white/50"><?php echo esc_html($t['takeaway_1_desc']); ?></p>
                <div class="flex items-center gap-2 text-sm text-violet-400">
                    <span class="font-mono">47</span>
                    <span class="text-white/40">data points colectate</span>
                </div>
            </div>

            <div class="p-8 int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center mb-6 w-14 h-14 rounded-2xl bg-cyan-500/20">
                    <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" /></svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-white"><?php echo esc_html($t['takeaway_2_title']); ?></h3>
                <p class="mb-4 text-white/50"><?php echo esc_html($t['takeaway_2_desc']); ?></p>
                <div class="flex items-center gap-2 text-sm text-cyan-400">
                    <span class="font-mono">&lt;50ms</span>
                    <span class="text-white/40">timp de procesare</span>
                </div>
            </div>

            <div class="p-8 int-glass rounded-2xl int-card-3d">
                <div class="flex items-center justify-center mb-6 w-14 h-14 rounded-2xl bg-emerald-500/20">
                    <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <h3 class="mb-3 text-xl font-semibold text-white"><?php echo esc_html($t['takeaway_3_title']); ?></h3>
                <p class="mb-4 text-white/50"><?php echo esc_html($t['takeaway_3_desc']); ?></p>
                <div class="flex items-center gap-2 text-sm text-emerald-400">
                    <span class="font-mono">+34%</span>
                    <span class="text-white/40">conversii în plus</span>
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
                <span class="font-mono text-xs tracking-wider text-cyan-400"><?php echo esc_html($t['data_badge']); ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo esc_html($t['data_title_1']); ?> <span class="int-gradient-text"><?php echo esc_html($t['data_title_2']); ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo esc_html($t['data_desc']); ?>
            </p>
        </div>

        <div class="grid gap-6 mb-12 lg:grid-cols-3 int-stagger-children" x-data x-intersect="$el.classList.add('visible')">
            <!-- Behavioral -->
            <div class="int-glass rounded-2xl p-7 int-card-3d">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-violet-500/10">
                        <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white"><?php echo esc_html($t['data_behavioral']); ?></h3>
                        <p class="font-mono text-sm text-violet-400">15+ data points</p>
                    </div>
                </div>
                <ul class="mb-6 space-y-3 text-sm text-white/60">
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-violet-400"></div>Page views + scroll depth</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-violet-400"></div>Click patterns + hover time</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-violet-400"></div>Search queries + results clicked</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-violet-400"></div>Navigation paths + time on page</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-violet-400"></div>Exit intent + tab switches</li>
                </ul>
                <div class="int-code-block rounded-xl p-4 text-[11px] font-mono">
                    <div class="int-syn-comment">// Event example</div>
                    <div><span class="int-syn-key">type:</span> <span class="int-syn-str">"page_view"</span></div>
                    <div><span class="int-syn-key">scroll_depth:</span> <span class="int-syn-num">87</span></div>
                    <div><span class="int-syn-key">time_on_page:</span> <span class="int-syn-num">142s</span></div>
                </div>
            </div>

            <!-- Transactional -->
            <div class="int-glass rounded-2xl p-7 int-card-3d">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-cyan-500/10">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white"><?php echo esc_html($t['data_transactional']); ?></h3>
                        <p class="font-mono text-sm text-cyan-400">18+ data points</p>
                    </div>
                </div>
                <ul class="mb-6 space-y-3 text-sm text-white/60">
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-cyan-400"></div>Cart add/remove/modify + timing</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-cyan-400"></div>Abandonment patterns + recovery</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-cyan-400"></div>Purchase history + frequency</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-cyan-400"></div>Payment method preferences</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-cyan-400"></div>Ticket types + price sensitivity</li>
                </ul>
                <div class="int-code-block rounded-xl p-4 text-[11px] font-mono">
                    <div class="int-syn-comment">// Event example</div>
                    <div><span class="int-syn-key">type:</span> <span class="int-syn-str">"cart_add"</span></div>
                    <div><span class="int-syn-key">ticket:</span> <span class="int-syn-str">"VIP"</span></div>
                    <div><span class="int-syn-key">price:</span> <span class="int-syn-num">€127</span></div>
                </div>
            </div>

            <!-- Engagement -->
            <div class="int-glass rounded-2xl p-7 int-card-3d">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-emerald-500/10">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white"><?php echo esc_html($t['data_engagement']); ?></h3>
                        <p class="font-mono text-sm text-emerald-400">17+ data points</p>
                    </div>
                </div>
                <ul class="mb-6 space-y-3 text-sm text-white/60">
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-emerald-400"></div>Artist/venue follows + preferences</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-emerald-400"></div>Genre affinities (ML-derived)</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-emerald-400"></div>Email opens + click patterns</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-emerald-400"></div>Wishlist + reminder signups</li>
                    <li class="flex items-center gap-2"><div class="w-1 h-1 rounded-full bg-emerald-400"></div>Social shares + referrals</li>
                </ul>
                <div class="int-code-block rounded-xl p-4 text-[11px] font-mono">
                    <div class="int-syn-comment">// Event example</div>
                    <div><span class="int-syn-key">type:</span> <span class="int-syn-str">"artist_follow"</span></div>
                    <div><span class="int-syn-key">artist:</span> <span class="int-syn-str">"Cargo"</span></div>
                    <div><span class="int-syn-key">genre:</span> <span class="int-syn-str">"rock"</span></div>
                </div>
            </div>
        </div>

        <!-- Cross-Referencing -->
        <div class="p-8 int-glass-strong rounded-3xl sm:p-10 int-gradient-border int-reveal-scale" x-data x-intersect="$el.classList.add('visible')">
            <div class="flex flex-col items-start gap-8 lg:flex-row">
                <div class="flex items-center justify-center flex-shrink-0 w-20 h-20 rounded-3xl bg-gradient-to-br from-violet-500 to-cyan-500 int-glow-box int-morph-blob">
                    <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" /></svg>
                </div>
                <div class="flex-1">
                    <h3 class="mb-4 text-2xl font-bold text-white"><?php echo esc_html($t['data_magic_title']); ?></h3>
                    <p class="mb-6 text-lg text-white/60"><?php echo esc_html($t['data_magic_desc']); ?></p>
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
        <div class="mb-16 text-center int-reveal" x-data x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-emerald-500/10 border-emerald-500/20">
                <span class="font-mono text-xs tracking-wider text-emerald-400"><?php echo esc_html($t['engines_badge']); ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo esc_html($t['engines_title_1']); ?> <span class="int-gradient-text"><?php echo esc_html($t['engines_title_2']); ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo esc_html($t['engines_desc']); ?>
            </p>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 int-stagger-children" x-data x-intersect="$el.classList.add('visible')">
            <!-- Engine 1 -->
            <div class="p-6 int-glass rounded-2xl int-card-3d group" x-data="{ expanded: false }">
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
                </div>
            </div>

            <!-- Engine 2 -->
            <div class="p-6 int-glass rounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold transition-colors rounded-xl bg-cyan-500/10 text-cyan-400 group-hover:bg-cyan-500/20">2</div>
                    <div>
                        <h3 class="font-semibold text-white">Next Best Action</h3>
                        <p class="text-xs text-white/40">Decision engine</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">12 tipuri de acțiuni: cart recovery, win-back, upsell, exit intent.</p>
                <span class="px-3 py-1 font-mono text-xs rounded-lg bg-cyan-500/10 text-cyan-400">&lt;50ms latency</span>
            </div>

            <!-- Engine 3 -->
            <div class="p-6 int-glass rounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold transition-colors rounded-xl bg-emerald-500/10 text-emerald-400 group-hover:bg-emerald-500/20">3</div>
                    <div>
                        <h3 class="font-semibold text-white">Win-Back AI</h3>
                        <p class="text-xs text-white/40">Churn prevention</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">4-tier automated recovery: 60, 90, 120, 180 zile cu oferte LTV-based.</p>
                <span class="px-3 py-1 font-mono text-xs rounded-lg bg-emerald-500/10 text-emerald-400">-28% churn</span>
            </div>

            <!-- Engine 4 -->
            <div class="p-6 int-glass rounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold text-red-400 transition-colors rounded-xl bg-red-500/10 group-hover:bg-red-500/20">4</div>
                    <div>
                        <h3 class="font-semibold text-white">Real-Time Alerts</h3>
                        <p class="text-xs text-white/40">Event triggers</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">12 trigger types: high-value abandon, churn spike, VIP activity, sellout.</p>
                <span class="px-3 py-1 font-mono text-xs text-red-400 rounded-lg bg-red-500/10">instant webhooks</span>
            </div>

            <!-- Engine 5 -->
            <div class="p-6 int-glass rounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold text-pink-400 transition-colors rounded-xl bg-pink-500/10 group-hover:bg-pink-500/20">5</div>
                    <div>
                        <h3 class="font-semibold text-white">Lookalike Finder</h3>
                        <p class="text-xs text-white/40">Audience builder</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">8-factor ML similarity cu export pentru Facebook, Google, TikTok Ads.</p>
                <span class="px-3 py-1 font-mono text-xs text-pink-400 rounded-lg bg-pink-500/10">3.2x ROAS</span>
            </div>

            <!-- Engine 6 -->
            <div class="p-6 int-glass rounded-2xl int-card-3d group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 text-lg font-bold transition-colors rounded-xl bg-amber-500/10 text-amber-400 group-hover:bg-amber-500/20">6</div>
                    <div>
                        <h3 class="font-semibold text-white">Demand Forecast</h3>
                        <p class="text-xs text-white/40">Predictive analytics</p>
                    </div>
                </div>
                <p class="mb-4 text-sm text-white/50">Velocity tracking, sellout probability, dynamic pricing signals.</p>
                <span class="px-3 py-1 font-mono text-xs rounded-lg bg-amber-500/10 text-amber-400">91% accuracy</span>
            </div>
        </div>

        <!-- Engine 7 -->
        <div class="p-8 mt-6 int-glass-strong rounded-3xl int-gradient-border int-reveal-scale" x-data x-intersect="$el.classList.add('visible')">
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
        <div class="mb-16 text-center int-reveal" x-data x-intersect="$el.classList.add('visible')">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-amber-500/10 border-amber-500/20">
                <span class="font-mono text-xs tracking-wider text-amber-400"><?php echo esc_html($t['impact_badge']); ?></span>
            </div>
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                <?php echo esc_html($t['impact_title_1']); ?> <span class="int-gradient-text"><?php echo esc_html($t['impact_title_2']); ?></span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-white/50">
                <?php echo esc_html($t['impact_desc']); ?>
            </p>
        </div>

        <div class="grid grid-cols-2 gap-5 mb-16 lg:grid-cols-4 int-stagger-children" x-data x-intersect="$el.classList.add('visible')">
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d" x-data="{ count: 0 }" x-intersect.once="let interval = setInterval(() => { if(count < 34) count++; else clearInterval(interval); }, 50)">
                <p class="mb-2 text-4xl font-bold sm:text-5xl lg:text-6xl text-emerald-400">+<span x-text="count" class="int-counter"></span>%</p>
                <p class="text-sm text-white/60"><?php echo esc_html($t['impact_conversion']); ?></p>
                <p class="mt-1 text-xs text-white/30">vs. baseline</p>
            </div>
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d" x-data="{ count: 0 }" x-intersect.once="let interval = setInterval(() => { if(count < 47) count++; else clearInterval(interval); }, 40)">
                <p class="mb-2 text-4xl font-bold sm:text-5xl lg:text-6xl text-amber-400">€<span x-text="count" class="int-counter"></span>K</p>
                <p class="text-sm text-white/60"><?php echo esc_html($t['impact_recovered']); ?></p>
                <p class="mt-1 text-xs text-white/30">abandoned carts</p>
            </div>
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d" x-data="{ count: 0 }" x-intersect.once="let interval = setInterval(() => { if(count < 28) count++; else clearInterval(interval); }, 60)">
                <p class="mb-2 text-4xl font-bold text-red-400 sm:text-5xl lg:text-6xl">-<span x-text="count" class="int-counter"></span>%</p>
                <p class="text-sm text-white/60"><?php echo esc_html($t['impact_churn']); ?></p>
                <p class="mt-1 text-xs text-white/30">win-back AI</p>
            </div>
            <div class="p-8 text-center int-glass-strong rounded-3xl int-card-3d">
                <p class="mb-2 text-4xl font-bold sm:text-5xl lg:text-6xl text-cyan-400">3.2x</p>
                <p class="text-sm text-white/60"><?php echo esc_html($t['impact_roas']); ?></p>
                <p class="mt-1 text-xs text-white/30">lookalike audiences</p>
            </div>
        </div>

        <!-- Tech Specs -->
        <div class="p-8 int-glass-strong rounded-3xl sm:p-10 int-reveal-scale" x-data x-intersect="$el.classList.add('visible')">
            <h3 class="mb-8 text-xl font-semibold text-center text-white"><?php echo esc_html($t['tech_specs']); ?></h3>
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
        <div class="int-glass-strong rounded-[2rem] p-10 sm:p-14 text-center relative overflow-hidden int-gradient-border int-reveal-scale" x-data x-intersect="$el.classList.add('visible')">
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
                    <?php echo esc_html($t['cta_title']); ?>
                </h2>

                <p class="max-w-lg mx-auto mb-10 text-lg text-white/50">
                    <?php echo esc_html($t['cta_desc']); ?>
                </p>

                <div class="flex flex-col justify-center gap-4 sm:flex-row">
                    <a href="mailto:<?php echo esc_attr($t['cta_email']); ?>" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-semibold text-white transition-all duration-300 int-magnetic-btn rounded-2xl bg-gradient-to-r from-violet-600 to-cyan-600 hover:shadow-xl hover:shadow-violet-500/20 int-shine">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <?php echo esc_html($t['cta_email']); ?>
                    </a>

                    <a href="#" class="inline-flex items-center justify-center gap-3 px-8 py-4 font-medium text-white transition-all duration-300 int-magnetic-btn rounded-2xl int-glass hover:bg-white/10">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                        <?php echo esc_html($t['cta_deck']); ?>
                    </a>
                </div>

                <p class="mt-10 text-sm text-white/20"><?php echo esc_html($t['cta_footer']); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
