<?php
/*
Template Name: Tixello Compare Hub
*/

// Get current language
$lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';

// Translations
$t = [
    'ro' => [
        'breadcrumb_home' => 'Acasa',
        'breadcrumb_compare' => 'Compara',
        'badge_platforms' => '10 platforme analizate',
        'hero_title_1' => 'Alege in cunostinta',
        'hero_title_2' => 'de cauza',
        'hero_description' => 'Comparatii <strong class="text-white">oneste si transparente</strong> intre Tixello si cele mai populare platforme de ticketing din Romania. Analizam costuri, functii, control si fiscalitate - ca sa poti decide tu.',
        'stats_platforms' => 'Platforme analizate',
        'stats_criteria' => 'Criterii comparate',
        'stats_public' => 'Date publice',
        'scroll_text' => 'Exploreaza comparatiile',
        'why_1_title' => 'Analiza obiectiva',
        'why_1_desc' => 'Comparam functii, costuri si servicii pe baza de informatii publice verificabile.',
        'why_2_title' => 'Transparenta totala',
        'why_2_desc' => 'Fiecare comparatie include surse si note de transparenta. Daca ceva s-a schimbat, actualizam.',
        'why_3_title' => 'Tu decizi',
        'why_3_desc' => 'Nu te presam. Iti oferim informatiile - alegerea finala iti apartine in totalitate.',
        'featured_badge' => 'Comparatia principala',
        'featured_title' => 'Tixello vs iaBilet',
        'featured_desc' => 'Cea mai detaliata comparatie intre cele doua platforme. Analiza completa pe toate criteriile importante pentru organizatori.',
        'featured_headline' => 'Control & cashflow direct vs. marketplace cu retea',
        'featured_text' => 'Comision transparent 1-3% vs. "comision redus" nepublic. Admin dedicat vs. validator app. eFactura auto vs. factura simplificata.',
        'view_comparison' => 'Vezi comparatia',
        'all_badge' => 'Toate comparatiile',
        'all_title' => 'Compara Tixello cu',
        'all_title_gradient' => 'orice platforma',
        'all_desc' => 'Alege platforma pe care vrei sa o compari cu Tixello. Fiecare analiza include costuri, functii, UX si fiscalitate.',
        'diff_title' => 'Ce face Tixello diferit?',
        'diff_desc' => 'Avantajele cheie fata de majoritatea platformelor de pe piata',
        'diff_1_title' => 'Cashflow direct',
        'diff_1_text' => 'Banii ajung direct in contul tau, nu la noi. Zero cicluri de asteptare.',
        'diff_1_vs' => 'vs. decont periodic',
        'diff_2_title' => '1-3% transparent',
        'diff_2_text' => 'Comision clar, publicat, fara surprize. Il poti include in pret sau nu.',
        'diff_2_vs' => 'vs. procente nepublice',
        'diff_3_title' => 'eFactura automat',
        'diff_3_text' => 'Facturare automata + integrare ANAF. Zero efort din partea ta.',
        'diff_3_vs' => 'vs. factura la cerere',
        'diff_4_title' => 'Admin dedicat',
        'diff_4_text' => 'Instanta separata, GTM propriu, control total pe date si analytics.',
        'diff_4_vs' => 'vs. panou partajat',
        'method_badge' => 'Metodologie',
        'method_title' => 'Cum facem comparatiile?',
        'method_1_title' => 'Doar surse publice',
        'method_1_text' => 'Folosim exclusiv informatii disponibile public: site-uri oficiale, T&C, pagini de pret, documentatii, help centers.',
        'method_2_title' => 'Criteriile conteaza',
        'method_2_text' => 'Comparam ce conteaza pentru organizatori: costuri, cashflow, control date, fiscalitate, UX, SLA, suport.',
        'method_3_title' => 'Actualizari constante',
        'method_3_text' => 'Piata se schimba. Daca o platforma isi modifica oferta, actualizam comparatia. Data ultimei verificari e mentionata.',
        'method_4_title' => 'Deschidere la feedback',
        'method_4_text' => 'Reprezinti o platforma si vrei sa corectezi ceva? Scrie-ne. Actualizam cu placere daca ai informatii mai noi.',
        'cta_badge' => 'Fara obligatii • Fara card bancar',
        'cta_title' => 'Ai analizat suficient?',
        'cta_title_gradient' => 'Testeaza Tixello gratuit',
        'cta_desc' => 'Creeaza cont, configureaza un eveniment si vezi singur de ce organizatorii aleg Tixello. Zero costuri daca nu vinzi.',
        'cta_btn_start' => 'Incepe gratuit',
        'cta_btn_demo' => 'Programeaza un demo',
        'cta_check_1' => '1-3% comision',
        'cta_check_2' => 'Cashflow direct',
        'cta_check_3' => 'SLA 99.99%',
    ],
    'en' => [
        'breadcrumb_home' => 'Home',
        'breadcrumb_compare' => 'Compare',
        'badge_platforms' => '10 platforms analyzed',
        'hero_title_1' => 'Choose with',
        'hero_title_2' => 'full knowledge',
        'hero_description' => '<strong class="text-white">Honest and transparent</strong> comparisons between Tixello and the most popular ticketing platforms in Romania. We analyze costs, features, control and taxation - so you can decide.',
        'stats_platforms' => 'Platforms analyzed',
        'stats_criteria' => 'Criteria compared',
        'stats_public' => 'Public data',
        'scroll_text' => 'Explore comparisons',
        'why_1_title' => 'Objective analysis',
        'why_1_desc' => 'We compare features, costs and services based on verifiable public information.',
        'why_2_title' => 'Full transparency',
        'why_2_desc' => 'Each comparison includes sources and transparency notes. If something changed, we update.',
        'why_3_title' => 'You decide',
        'why_3_desc' => 'We don\'t pressure you. We provide the information - the final choice is entirely yours.',
        'featured_badge' => 'Main comparison',
        'featured_title' => 'Tixello vs iaBilet',
        'featured_desc' => 'The most detailed comparison between the two platforms. Complete analysis on all important criteria for organizers.',
        'featured_headline' => 'Control & direct cashflow vs. marketplace with network',
        'featured_text' => 'Transparent 1-3% commission vs. unpublished "reduced commission". Dedicated admin vs. validator app. Auto eFactura vs. simplified invoice.',
        'view_comparison' => 'View comparison',
        'all_badge' => 'All comparisons',
        'all_title' => 'Compare Tixello with',
        'all_title_gradient' => 'any platform',
        'all_desc' => 'Choose the platform you want to compare with Tixello. Each analysis includes costs, features, UX and taxation.',
        'diff_title' => 'What makes Tixello different?',
        'diff_desc' => 'Key advantages over most platforms on the market',
        'diff_1_title' => 'Direct cashflow',
        'diff_1_text' => 'Money goes directly to your account, not ours. Zero waiting cycles.',
        'diff_1_vs' => 'vs. periodic settlement',
        'diff_2_title' => '1-3% transparent',
        'diff_2_text' => 'Clear, published commission, no surprises. You can include it in the price or not.',
        'diff_2_vs' => 'vs. unpublished percentages',
        'diff_3_title' => 'Auto eFactura',
        'diff_3_text' => 'Automatic invoicing + ANAF integration. Zero effort on your part.',
        'diff_3_vs' => 'vs. invoice on request',
        'diff_4_title' => 'Dedicated admin',
        'diff_4_text' => 'Separate instance, own GTM, full control over data and analytics.',
        'diff_4_vs' => 'vs. shared panel',
        'method_badge' => 'Methodology',
        'method_title' => 'How do we make comparisons?',
        'method_1_title' => 'Public sources only',
        'method_1_text' => 'We exclusively use publicly available information: official sites, T&C, pricing pages, documentation, help centers.',
        'method_2_title' => 'Criteria matter',
        'method_2_text' => 'We compare what matters for organizers: costs, cashflow, data control, taxation, UX, SLA, support.',
        'method_3_title' => 'Constant updates',
        'method_3_text' => 'The market changes. If a platform changes its offer, we update the comparison. Last verification date is mentioned.',
        'method_4_title' => 'Open to feedback',
        'method_4_text' => 'Do you represent a platform and want to correct something? Write to us. We\'re happy to update if you have newer information.',
        'cta_badge' => 'No obligations • No credit card',
        'cta_title' => 'Analyzed enough?',
        'cta_title_gradient' => 'Try Tixello for free',
        'cta_desc' => 'Create an account, set up an event and see for yourself why organizers choose Tixello. Zero costs if you don\'t sell.',
        'cta_btn_start' => 'Start free',
        'cta_btn_demo' => 'Schedule a demo',
        'cta_check_1' => '1-3% commission',
        'cta_check_2' => 'Direct cashflow',
        'cta_check_3' => 'SLA 99.99%',
    ],
];

$tr = $t[$lang] ?? $t['ro'];

// Competitors data
$competitors = [
    [
        'slug' => 'bilete-ro',
        'name' => 'Bilete.ro',
        'initial' => 'B',
        'color' => 'red',
        'desc_ro' => 'Marketplace traditional cu reach vs. platforma B2B cu control total.',
        'desc_en' => 'Traditional marketplace with reach vs. B2B platform with full control.',
        'tags_ro' => ['Marketplace', 'Reach mare'],
        'tags_en' => ['Marketplace', 'Large reach'],
    ],
    [
        'slug' => 'livetickets',
        'name' => 'LiveTickets',
        'initial' => 'L',
        'color' => 'lime',
        'desc_ro' => 'Platforma locala cu focus pe evenimente live si concerte.',
        'desc_en' => 'Local platform focused on live events and concerts.',
        'tags_ro' => ['Evenimente live', 'Concerte'],
        'tags_en' => ['Live events', 'Concerts'],
    ],
    [
        'slug' => 'ambilet',
        'name' => 'amBilet',
        'initial' => 'a',
        'color' => 'fuchsia',
        'desc_ro' => 'Marketplace ticketing cu e-ticket si EuPlatesc.',
        'desc_en' => 'Ticketing marketplace with e-ticket and EuPlatesc.',
        'tags_ro' => ['E-ticket', 'Contract'],
        'tags_en' => ['E-ticket', 'Contract'],
    ],
    [
        'slug' => 'getin',
        'name' => 'get-in.ro',
        'initial' => 'G',
        'color' => 'orange',
        'desc_ro' => 'Magazin bilete cu checkout rapid fara cont.',
        'desc_en' => 'Ticket store with fast checkout without account.',
        'tags_ro' => ['Checkout simplu', 'KIMARO'],
        'tags_en' => ['Simple checkout', 'KIMARO'],
    ],
    [
        'slug' => 'eventim',
        'name' => 'Eventim',
        'initial' => 'Ev',
        'color' => 'blue',
        'desc_ro' => 'Gigant european de ticketing cu retea internationala.',
        'desc_en' => 'European ticketing giant with international network.',
        'tags_ro' => ['International', 'Enterprise'],
        'tags_en' => ['International', 'Enterprise'],
    ],
    [
        'slug' => 'iticket',
        'name' => 'iTicket',
        'initial' => 'iT',
        'color' => 'sky',
        'desc_ro' => 'Platforma ticketing cu focus pe evenimente culturale.',
        'desc_en' => 'Ticketing platform focused on cultural events.',
        'tags_ro' => ['Cultural', 'Teatru'],
        'tags_en' => ['Cultural', 'Theater'],
    ],
    [
        'slug' => 'myticket',
        'name' => 'MyTicket',
        'initial' => 'M',
        'color' => 'teal',
        'desc_ro' => 'Solutie de ticketing cu functii standard de piata.',
        'desc_en' => 'Ticketing solution with standard market features.',
        'tags_ro' => ['Standard', 'Local'],
        'tags_en' => ['Standard', 'Local'],
    ],
    [
        'slug' => 'oveit',
        'name' => 'Oveit',
        'initial' => 'O',
        'color' => 'indigo',
        'desc_ro' => 'Platforma moderna cu focus pe experienta participantilor.',
        'desc_en' => 'Modern platform focused on attendee experience.',
        'tags_ro' => ['Modern', 'Tech'],
        'tags_en' => ['Modern', 'Tech'],
    ],
    [
        'slug' => 'entertix',
        'name' => 'Entertix',
        'initial' => 'E',
        'color' => 'amber',
        'desc_ro' => 'Solutie de ticketing pentru entertainment si festivaluri.',
        'desc_en' => 'Ticketing solution for entertainment and festivals.',
        'tags_ro' => ['Entertainment', 'Festivaluri'],
        'tags_en' => ['Entertainment', 'Festivals'],
    ],
];

get_header();
?>

<main class="bg-zinc-950 text-zinc-200 antialiased">

    <!-- Hero Section -->
    <section class="hero-compare-bg relative overflow-hidden pt-28 sm:pt-36 pb-20 sm:pb-28">
        <div class="absolute inset-0 grid-pattern"></div>

        <!-- Floating elements -->
        <div class="absolute top-32 left-10 w-32 h-32 rounded-full bg-violet-500/10 blur-3xl animate-float"></div>
        <div class="absolute top-48 right-16 w-48 h-48 rounded-full bg-cyan-500/10 blur-3xl animate-float-delayed"></div>
        <div class="absolute bottom-24 left-1/4 w-40 h-40 rounded-full bg-emerald-500/10 blur-3xl animate-float-slow"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">

                <!-- Breadcrumb -->
                <div class="reveal revealed flex items-center justify-center gap-2 text-sm text-white/40 mb-8">
                    <a href="<?php echo home_url(); ?>" class="hover:text-white/60 transition-colors"><?php echo esc_html($tr['breadcrumb_home']); ?></a>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    <span class="text-white/60"><?php echo esc_html($tr['breadcrumb_compare']); ?></span>
                </div>

                <!-- Badge -->
                <div class="reveal revealed inline-flex items-center gap-3 px-5 py-2.5 rounded-full glass-compare mb-8">
                    <div class="flex -space-x-2">
                        <div class="w-6 h-6 rounded-full bg-yellow-500/20 border-2 border-zinc-950 flex items-center justify-center"><span class="text-yellow-400 text-xs font-bold">ia</span></div>
                        <div class="w-6 h-6 rounded-full bg-red-500/20 border-2 border-zinc-950 flex items-center justify-center"><span class="text-red-400 text-xs font-bold">B</span></div>
                        <div class="w-6 h-6 rounded-full bg-lime-500/20 border-2 border-zinc-950 flex items-center justify-center"><span class="text-lime-400 text-xs font-bold">L</span></div>
                        <div class="w-6 h-6 rounded-full bg-white/10 border-2 border-zinc-950 flex items-center justify-center"><span class="text-white/60 text-xs font-bold">+7</span></div>
                    </div>
                    <span class="text-sm font-medium text-white/80"><?php echo esc_html($tr['badge_platforms']); ?></span>
                </div>

                <!-- Main headline -->
                <h1 class="reveal revealed text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-black text-white leading-tight mb-6">
                    <span class="block"><?php echo esc_html($tr['hero_title_1']); ?></span>
                    <span class="block gradient-text-compare"><?php echo esc_html($tr['hero_title_2']); ?></span>
                </h1>

                <p class="reveal revealed text-xl sm:text-2xl text-white/60 max-w-3xl mx-auto mb-10 leading-relaxed">
                    <?php echo $tr['hero_description']; ?>
                </p>

                <!-- Stats -->
                <div class="reveal revealed flex flex-wrap items-center justify-center gap-8 sm:gap-12 mb-12">
                    <div class="text-center">
                        <p class="text-4xl font-black text-white mb-1 counter-compare">10</p>
                        <p class="text-sm text-white/40"><?php echo esc_html($tr['stats_platforms']); ?></p>
                    </div>
                    <div class="hidden sm:block w-px h-12 bg-white/10"></div>
                    <div class="text-center">
                        <p class="text-4xl font-black gradient-text-compare mb-1 counter-compare">50+</p>
                        <p class="text-sm text-white/40"><?php echo esc_html($tr['stats_criteria']); ?></p>
                    </div>
                    <div class="hidden sm:block w-px h-12 bg-white/10"></div>
                    <div class="text-center">
                        <p class="text-4xl font-black text-white mb-1 counter-compare">100%</p>
                        <p class="text-sm text-white/40"><?php echo esc_html($tr['stats_public']); ?></p>
                    </div>
                </div>

                <!-- Scroll indicator -->
                <div class="reveal revealed flex flex-col items-center gap-2 text-white/30">
                    <span class="text-xs uppercase tracking-wider"><?php echo esc_html($tr['scroll_text']); ?></span>
                    <svg class="w-5 h-5 scroll-indicator-compare" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Compare Section -->
    <section class="relative py-16 bg-zinc-900/50 border-t border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">

                <div class="text-center">
                    <div class="w-14 h-14 rounded-2xl bg-violet-500/10 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2"><?php echo esc_html($tr['why_1_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['why_1_desc']); ?></p>
                </div>

                <div class="text-center">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2"><?php echo esc_html($tr['why_2_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['why_2_desc']); ?></p>
                </div>

                <div class="text-center">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2"><?php echo esc_html($tr['why_3_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['why_3_desc']); ?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- Featured Comparison -->
    <section class="relative py-24 bg-zinc-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-yellow-500/10 border border-yellow-500/20 mb-6">
                    <svg class="w-4 h-4 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                    <span class="text-sm font-medium text-yellow-400"><?php echo esc_html($tr['featured_badge']); ?></span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4"><?php echo esc_html($tr['featured_title']); ?></h2>
                <p class="text-white/50 max-w-2xl mx-auto"><?php echo esc_html($tr['featured_desc']); ?></p>
            </div>

            <a href="<?php echo home_url('/compare/iabilet/'); ?>" class="featured-card-compare block max-w-4xl mx-auto p-1 rounded-3xl bg-gradient-to-br from-violet-500/30 via-yellow-500/20 to-cyan-500/30 group">
                <div class="p-8 sm:p-12 rounded-[22px] bg-zinc-950 relative overflow-hidden">

                    <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-500/5 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-violet-500/5 rounded-full blur-3xl"></div>

                    <div class="relative flex flex-col lg:flex-row items-center gap-8">

                        <!-- VS Visual -->
                        <div class="flex items-center gap-4">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-to-br from-violet-500 to-cyan-500 flex items-center justify-center shadow-xl shadow-violet-500/30">
                                <span class="text-white font-black text-3xl sm:text-4xl">T</span>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center">
                                <span class="text-white font-bold text-sm">VS</span>
                            </div>
                            <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-to-br from-yellow-500/20 to-orange-500/20 border border-yellow-500/20 flex items-center justify-center">
                                <span class="text-yellow-400 font-black text-3xl sm:text-4xl">ia</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex-1 text-center lg:text-left">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-3"><?php echo esc_html($tr['featured_headline']); ?></h3>
                            <p class="text-white/50 mb-6"><?php echo esc_html($tr['featured_text']); ?></p>

                            <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3">
                                <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-xs font-medium">Cashflow</span>
                                <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-400 text-xs font-medium">Control date</span>
                                <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400 text-xs font-medium"><?php echo $lang === 'en' ? 'Taxation' : 'Fiscalitate'; ?></span>
                                <span class="px-3 py-1 rounded-full bg-yellow-500/10 text-yellow-400 text-xs font-medium"><?php echo $lang === 'en' ? 'Payments' : 'Plati'; ?></span>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-violet-600 to-cyan-600 text-white font-semibold group-hover:shadow-lg group-hover:shadow-violet-500/30 transition-all">
                                <?php echo esc_html($tr['view_comparison']); ?>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            </span>
                        </div>

                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- All Comparisons Grid -->
    <section class="relative py-24 bg-zinc-900/30 border-t border-white/5">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-violet-600/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-600/5 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-violet-500/10 border border-violet-500/20 mb-6">
                    <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/></svg>
                    <span class="text-sm font-medium text-violet-400"><?php echo esc_html($tr['all_badge']); ?></span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">
                    <?php echo esc_html($tr['all_title']); ?>
                    <span class="gradient-text-compare"><?php echo esc_html($tr['all_title_gradient']); ?></span>
                </h2>
                <p class="text-xl text-white/50 max-w-2xl mx-auto"><?php echo esc_html($tr['all_desc']); ?></p>
            </div>

            <!-- Comparison Cards Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <?php foreach ($competitors as $c) :
                    $desc = $lang === 'en' ? $c['desc_en'] : $c['desc_ro'];
                    $tags = $lang === 'en' ? $c['tags_en'] : $c['tags_ro'];
                ?>
                <a href="<?php echo home_url('/compare/' . $c['slug'] . '/'); ?>" class="compare-card-hover group relative p-6 rounded-2xl glass-compare border border-white/10 hover:border-<?php echo $c['color']; ?>-500/30">
                    <div class="card-glow absolute inset-0 bg-gradient-to-br from-<?php echo $c['color']; ?>-500/10 to-<?php echo $c['color']; ?>-600/5 rounded-2xl opacity-0 transition-opacity duration-300"></div>
                    <div class="relative">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500 flex items-center justify-center">
                                    <span class="text-white font-bold">T</span>
                                </div>
                                <div class="vs-badge w-8 h-8 rounded-full bg-white/5 flex items-center justify-center transition-transform">
                                    <span class="text-white/40 text-xs font-bold">VS</span>
                                </div>
                                <div class="w-12 h-12 rounded-xl bg-<?php echo $c['color']; ?>-500/20 flex items-center justify-center">
                                    <span class="text-<?php echo $c['color']; ?>-400 font-bold <?php echo strlen($c['initial']) > 1 ? 'text-xs' : ''; ?>"><?php echo esc_html($c['initial']); ?></span>
                                </div>
                            </div>
                            <svg class="card-arrow w-5 h-5 text-white/30 group-hover:text-<?php echo $c['color']; ?>-400 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Tixello vs <?php echo esc_html($c['name']); ?></h3>
                        <p class="text-sm text-white/50 mb-4"><?php echo esc_html($desc); ?></p>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($tags as $tag) : ?>
                            <span class="px-2 py-1 rounded bg-<?php echo $c['color']; ?>-500/10 text-<?php echo $c['color']; ?>-400 text-xs"><?php echo esc_html($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- What Makes Tixello Different -->
    <section class="relative py-24 bg-zinc-950 border-t border-white/5">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
                <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4"><?php echo esc_html($tr['diff_title']); ?></h2>
                <p class="text-white/50 max-w-2xl mx-auto"><?php echo esc_html($tr['diff_desc']); ?></p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="p-6 rounded-2xl glass-compare text-center">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo esc_html($tr['diff_1_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['diff_1_text']); ?></p>
                    <p class="mt-4 text-emerald-400 font-semibold"><?php echo esc_html($tr['diff_1_vs']); ?></p>
                </div>

                <div class="p-6 rounded-2xl glass-compare text-center">
                    <div class="w-14 h-14 rounded-2xl bg-violet-500/10 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo esc_html($tr['diff_2_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['diff_2_text']); ?></p>
                    <p class="mt-4 text-violet-400 font-semibold"><?php echo esc_html($tr['diff_2_vs']); ?></p>
                </div>

                <div class="p-6 rounded-2xl glass-compare text-center">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo esc_html($tr['diff_3_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['diff_3_text']); ?></p>
                    <p class="mt-4 text-cyan-400 font-semibold"><?php echo esc_html($tr['diff_3_vs']); ?></p>
                </div>

                <div class="p-6 rounded-2xl glass-compare text-center">
                    <div class="w-14 h-14 rounded-2xl bg-yellow-500/10 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo esc_html($tr['diff_4_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['diff_4_text']); ?></p>
                    <p class="mt-4 text-yellow-400 font-semibold"><?php echo esc_html($tr['diff_4_vs']); ?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- Methodology -->
    <section class="relative py-24 bg-zinc-900/30 border-t border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-6">
                    <svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
                    <span class="text-sm font-medium text-white/60"><?php echo esc_html($tr['method_badge']); ?></span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4"><?php echo esc_html($tr['method_title']); ?></h2>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">

                <div class="p-6 rounded-2xl glass-compare">
                    <div class="w-10 h-10 rounded-xl bg-violet-500/10 flex items-center justify-center mb-4">
                        <span class="text-violet-400 font-bold">1</span>
                    </div>
                    <h3 class="font-bold text-white mb-2"><?php echo esc_html($tr['method_1_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['method_1_text']); ?></p>
                </div>

                <div class="p-6 rounded-2xl glass-compare">
                    <div class="w-10 h-10 rounded-xl bg-violet-500/10 flex items-center justify-center mb-4">
                        <span class="text-violet-400 font-bold">2</span>
                    </div>
                    <h3 class="font-bold text-white mb-2"><?php echo esc_html($tr['method_2_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['method_2_text']); ?></p>
                </div>

                <div class="p-6 rounded-2xl glass-compare">
                    <div class="w-10 h-10 rounded-xl bg-violet-500/10 flex items-center justify-center mb-4">
                        <span class="text-violet-400 font-bold">3</span>
                    </div>
                    <h3 class="font-bold text-white mb-2"><?php echo esc_html($tr['method_3_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['method_3_text']); ?></p>
                </div>

                <div class="p-6 rounded-2xl glass-compare">
                    <div class="w-10 h-10 rounded-xl bg-violet-500/10 flex items-center justify-center mb-4">
                        <span class="text-violet-400 font-bold">4</span>
                    </div>
                    <h3 class="font-bold text-white mb-2"><?php echo esc_html($tr['method_4_title']); ?></h3>
                    <p class="text-sm text-white/50"><?php echo esc_html($tr['method_4_text']); ?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="relative py-32 bg-gradient-to-b from-zinc-900/50 to-zinc-950 border-t border-white/5 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-gradient-to-r from-transparent via-violet-500/40 to-transparent"></div>
            <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-violet-600/10 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-emerald-600/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full glass-compare mb-10">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                </span>
                <span class="text-sm font-medium text-white/70"><?php echo esc_html($tr['cta_badge']); ?></span>
            </div>

            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                <?php echo esc_html($tr['cta_title']); ?>
                <span class="block gradient-text-emerald-compare"><?php echo esc_html($tr['cta_title_gradient']); ?></span>
            </h2>

            <p class="text-xl text-white/50 mb-10 max-w-2xl mx-auto">
                <?php echo esc_html($tr['cta_desc']); ?>
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                <a href="<?php echo home_url('/register/'); ?>" class="group btn-compare-primary btn-shine-compare w-full sm:w-auto px-10 py-6 rounded-2xl text-white font-semibold text-xl flex items-center justify-center gap-3">
                    <span><?php echo esc_html($tr['cta_btn_start']); ?></span>
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
                <a href="<?php echo home_url('/demo/'); ?>" class="w-full sm:w-auto px-10 py-6 rounded-2xl border border-white/20 text-white font-semibold hover:bg-white/5 transition-all">
                    <?php echo esc_html($tr['cta_btn_demo']); ?>
                </a>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-4 text-sm text-white/40">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><?php echo esc_html($tr['cta_check_1']); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><?php echo esc_html($tr['cta_check_2']); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><?php echo esc_html($tr['cta_check_3']); ?></span>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
