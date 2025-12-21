<?php
/**
 * Tixello Comparisons Data
 *
 * Contains all competitor data for the comparison pages carousel
 * and for generating individual comparison pages.
 *
 * @package Tixello
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get all comparisons data with multilanguage support
 *
 * @return array Array of all competitors
 */
function tixello_get_comparisons_data() {
    $lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';

    $comparisons = [
        'ambilet' => [
            'slug' => 'ambilet',
            'name' => 'amBilet',
            'icon_letter' => 'a',
            'icon_bg' => 'bg-fuchsia-500/20',
            'icon_text' => 'text-fuchsia-400',
            'tagline' => [
                'ro' => 'Marketplace ticketing',
                'en' => 'Ticketing marketplace',
            ],
            'description' => [
                'ro' => 'amBilet este o platformă de ticketing care vinde online e-ticket (print-at-home) și, la unele evenimente, livrare prin curier.',
                'en' => 'amBilet is a ticketing platform that sells online e-tickets (print-at-home) and, for some events, courier delivery.',
            ],
        ],
        'bilete-ro' => [
            'slug' => 'bilete-ro',
            'name' => 'Bilete.ro',
            'icon_letter' => 'B',
            'icon_bg' => 'bg-red-500/20',
            'icon_text' => 'text-red-400',
            'tagline' => [
                'ro' => 'Platformă de bilete',
                'en' => 'Ticket platform',
            ],
            'description' => [
                'ro' => 'Bilete.ro este una dintre cele mai vechi platforme de ticketing din România.',
                'en' => 'Bilete.ro is one of the oldest ticketing platforms in Romania.',
            ],
        ],
        'biletin' => [
            'slug' => 'biletin',
            'name' => 'Biletin',
            'icon_letter' => 'Bt',
            'icon_bg' => 'bg-orange-500/20',
            'icon_text' => 'text-orange-400',
            'tagline' => [
                'ro' => 'Platformă ticketing',
                'en' => 'Ticketing platform',
            ],
            'description' => [
                'ro' => 'Biletin oferă soluții de ticketing pentru evenimente.',
                'en' => 'Biletin offers ticketing solutions for events.',
            ],
        ],
        'blt' => [
            'slug' => 'blt',
            'name' => 'BLT',
            'icon_letter' => 'B',
            'icon_bg' => 'bg-purple-500/20',
            'icon_text' => 'text-purple-400',
            'tagline' => [
                'ro' => 'Bilete live tickets',
                'en' => 'Live tickets',
            ],
            'description' => [
                'ro' => 'BLT este o platformă de ticketing pentru evenimente live.',
                'en' => 'BLT is a ticketing platform for live events.',
            ],
        ],
        'entertix' => [
            'slug' => 'entertix',
            'name' => 'Entertix',
            'icon_letter' => 'E',
            'icon_bg' => 'bg-amber-500/20',
            'icon_text' => 'text-amber-400',
            'tagline' => [
                'ro' => 'Entertainment ticketing',
                'en' => 'Entertainment ticketing',
            ],
            'description' => [
                'ro' => 'Entertix oferă soluții de ticketing pentru industria de entertainment.',
                'en' => 'Entertix provides ticketing solutions for the entertainment industry.',
            ],
        ],
        'eventbook' => [
            'slug' => 'eventbook',
            'name' => 'Eventbook.ro',
            'icon_letter' => 'Eb',
            'icon_bg' => 'bg-rose-500/20',
            'icon_text' => 'text-rose-400',
            'tagline' => [
                'ro' => 'Rezervări evenimente',
                'en' => 'Event bookings',
            ],
            'description' => [
                'ro' => 'Eventbook.ro este o platformă pentru rezervări și bilete la evenimente.',
                'en' => 'Eventbook.ro is a platform for event reservations and tickets.',
            ],
        ],
        'eventim' => [
            'slug' => 'eventim',
            'name' => 'Eventim',
            'icon_letter' => 'Ev',
            'icon_bg' => 'bg-blue-500/20',
            'icon_text' => 'text-blue-400',
            'tagline' => [
                'ro' => 'Ticketing internațional',
                'en' => 'International ticketing',
            ],
            'description' => [
                'ro' => 'Eventim este o platformă internațională de ticketing cu prezență în România.',
                'en' => 'Eventim is an international ticketing platform with presence in Romania.',
            ],
        ],
        'evticket' => [
            'slug' => 'evticket',
            'name' => 'evTicket',
            'icon_letter' => 'eT',
            'icon_bg' => 'bg-emerald-500/20',
            'icon_text' => 'text-emerald-400',
            'tagline' => [
                'ro' => 'E-ticketing solutions',
                'en' => 'E-ticketing solutions',
            ],
            'description' => [
                'ro' => 'evTicket oferă soluții de e-ticketing pentru organizatori.',
                'en' => 'evTicket offers e-ticketing solutions for organizers.',
            ],
        ],
        'getin' => [
            'slug' => 'getin',
            'name' => 'GetIn',
            'icon_letter' => 'G',
            'icon_bg' => 'bg-green-500/20',
            'icon_text' => 'text-green-400',
            'tagline' => [
                'ro' => 'Get in events',
                'en' => 'Get in events',
            ],
            'description' => [
                'ro' => 'GetIn este o platformă de ticketing pentru evenimente.',
                'en' => 'GetIn is a ticketing platform for events.',
            ],
        ],
        'iabilet' => [
            'slug' => 'iabilet',
            'name' => 'iaBilet',
            'icon_letter' => 'iB',
            'icon_bg' => 'bg-yellow-500/20',
            'icon_text' => 'text-yellow-400',
            'tagline' => [
                'ro' => 'Ia biletul online',
                'en' => 'Get your ticket online',
            ],
            'description' => [
                'ro' => 'iaBilet este o platformă populară de vânzare bilete în România.',
                'en' => 'iaBilet is a popular ticket selling platform in Romania.',
            ],
        ],
        'iticket' => [
            'slug' => 'iticket',
            'name' => 'iTicket',
            'icon_letter' => 'iT',
            'icon_bg' => 'bg-sky-500/20',
            'icon_text' => 'text-sky-400',
            'tagline' => [
                'ro' => 'Smart ticketing',
                'en' => 'Smart ticketing',
            ],
            'description' => [
                'ro' => 'iTicket oferă soluții moderne de ticketing.',
                'en' => 'iTicket offers modern ticketing solutions.',
            ],
        ],
        'livetickets' => [
            'slug' => 'livetickets',
            'name' => 'LiveTickets',
            'icon_letter' => 'L',
            'icon_bg' => 'bg-lime-500/20',
            'icon_text' => 'text-lime-400',
            'tagline' => [
                'ro' => 'Live events tickets',
                'en' => 'Live events tickets',
            ],
            'description' => [
                'ro' => 'LiveTickets este specializată în bilete pentru evenimente live.',
                'en' => 'LiveTickets specializes in tickets for live events.',
            ],
        ],
        'myticket' => [
            'slug' => 'myticket',
            'name' => 'MyTicket',
            'icon_letter' => 'M',
            'icon_bg' => 'bg-teal-500/20',
            'icon_text' => 'text-teal-400',
            'tagline' => [
                'ro' => 'Biletele tale',
                'en' => 'Your tickets',
            ],
            'description' => [
                'ro' => 'MyTicket oferă soluții personalizate de ticketing.',
                'en' => 'MyTicket offers personalized ticketing solutions.',
            ],
        ],
        'oveit' => [
            'slug' => 'oveit',
            'name' => 'Oveit',
            'icon_letter' => 'O',
            'icon_bg' => 'bg-indigo-500/20',
            'icon_text' => 'text-indigo-400',
            'tagline' => [
                'ro' => 'Event management',
                'en' => 'Event management',
            ],
            'description' => [
                'ro' => 'Oveit oferă soluții complete de management pentru evenimente.',
                'en' => 'Oveit provides complete event management solutions.',
            ],
        ],
    ];

    return $comparisons;
}

/**
 * Get single comparison data by slug
 *
 * @param string $slug The competitor slug
 * @return array|null Competitor data or null if not found
 */
function tixello_get_comparison_by_slug($slug) {
    $comparisons = tixello_get_comparisons_data();
    return isset($comparisons[$slug]) ? $comparisons[$slug] : null;
}

/**
 * Get comparisons for carousel (excludes current page)
 *
 * @param string $current_slug Slug of the current comparison page to exclude
 * @return array Array of comparisons excluding the current one
 */
function tixello_get_carousel_comparisons($current_slug = '') {
    $comparisons = tixello_get_comparisons_data();

    if (!empty($current_slug) && isset($comparisons[$current_slug])) {
        unset($comparisons[$current_slug]);
    }

    return $comparisons;
}

/**
 * Get translated text for comparison pages
 *
 * @return array Array of translated strings
 */
function tixello_get_comparison_translations() {
    $lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';

    $translations = [
        'ro' => [
            // Hero section
            'breadcrumb_home' => 'Acasă',
            'breadcrumb_comparisons' => 'Comparații',
            'platform_b2b' => 'Platformă B2B',
            'vs' => 'VS',

            // Headlines
            'headline_main' => 'Control real, cashflow direct și',
            'headline_gradient' => 'cost total mai mic',
            'hero_description' => 'Păstrezi controlul și crești conversia. Cu Tixello, banii intră direct în contul tău, alegi comisionul <span class="text-emerald-400 font-semibold">1-3%</span> (îl poți include în preț sau adăuga peste), ai admin dedicat și microservicii fiscale & analytics care-ți reduc munca.',
            'hero_stats' => 'SLA 99.99% • ~300ms timp de răspuns.',

            // Quick stats
            'stat_cashflow' => 'Cashflow direct',
            'stat_commission' => '1-3% comision',
            'stat_efactura' => 'eFactura automat',

            // CTAs
            'cta_demo' => 'Programează un demo',
            'cta_offer' => 'Cere ofertă personalizată',

            // Quick comparison section
            'quick_comparison_title' => 'Tixello: platformă B2B cu focus pe control, costuri & fiscalitate',
            'quick_comparison_desc' => 'Fără abonament impus, comision 1-3%, cashflow direct și automatizări fiscale pentru piața locală. Tu decizi cum afișezi comisionul (inclus vs. peste) și optimizezi conversia pe cifre reale.',

            // Card titles
            'card_cost' => 'Model cost',
            'card_cashflow' => 'Cashflow',
            'card_fiscal' => 'Fiscalitate',

            // Demo CTA section
            'demo_title' => 'Vrei să vezi Tixello pe structura evenimentelor tale?',
            'demo_desc' => 'Într-un demo live îți arătăm exact cum arată costul total, cum se generează automat facturile & eFactura și cum urmărești conversia pe canale.',

            // Verdict section
            'verdict_badge' => 'Verdict pe scurt',
            'verdict_title' => 'Verdict pe scurt pentru organizatori',
            'verdict_tixello_title' => 'Tixello pe scurt',
            'verdict_tixello_subtitle' => 'Platformă B2B pentru organizatori',
            'verdict_competitor_title' => 'pe scurt (factual)',
            'verdict_competitor_subtitle' => 'Din surse publice',

            // Tixello benefits in verdict
            'tixello_cashflow' => 'Cashflow direct — banii ajung direct în contul tău, fără cicluri de virare',
            'tixello_commission' => 'Comision 1-3% — plătești doar când vinzi, fără costuri fixe sau abonamente',
            'tixello_admin' => 'Admin dedicat — instanță separată, GTM propriu, export date complet',
            'tixello_processor' => 'Multi-processor plăți — fallback & routing pentru rate mai bune de aprobare',
            'tixello_fiscal' => 'Facturare automată + eFactura — documente fiscale & legale post-eveniment',
            'tixello_sla' => 'SLA 99.99% — ~300ms timp de răspuns și suport live în chat',

            // Detailed comparison section
            'detailed_badge' => 'Analiză detaliată',
            'detailed_title' => 'Diferențe care îți cresc',
            'detailed_title_gradient' => 'profitul',
            'winner_badge' => 'Câștigător',

            // Comparison items
            'compare_1_title' => '1) Cashflow & comisioane',
            'compare_2_title' => '2) Controlul platformei & al datelor',
            'compare_3_title' => '3) Fiscalitate & operațional',
            'compare_4_title' => '4) UX & conversie',

            // Benefits section
            'benefits_badge' => 'Beneficii concrete',
            'benefits_title' => 'Ce câștigi, concret, cu Tixello',
            'benefit_1_title' => 'Cost total mai mic și previzibil',
            'benefit_1_desc' => 'Alegi 1-3%, fără abonamente impuse; poți testa inclus vs. peste pentru comision. Zero surprize.',
            'benefit_2_title' => 'Conversie mai mare',
            'benefit_2_desc' => 'Vezi exact de unde vin vânzările, optimizezi bugetele și scazi pierderile din ads cu tracking avansat.',
            'benefit_3_title' => 'Cashflow direct',
            'benefit_3_desc' => 'Nu aștepți cicluri de virare sau decont; banii ajung direct în contul tău de la fiecare vânzare.',
            'benefit_4_title' => 'Zero corvoadă',
            'benefit_4_desc' => 'Facturi, eFactura și documente fiscale & legale generate automat. Te concentrezi pe eveniment.',
            'benefit_5_title' => 'Scalabil & sigur',
            'benefit_5_desc' => 'SLA 99.99%, rapoarte live, editare rapidă, suport în timp real în chat — și pentru 100 sau 100.000 de bilete.',

            // Comparison table
            'table_title' => 'Tabel comparativ (executive): Tixello vs',
            'table_criterion' => 'Criteriu',
            'table_cost' => 'Model cost',
            'table_cashflow' => 'Cashflow',
            'table_admin' => 'Admin & date',
            'table_delivery' => 'Livrare & acces',
            'table_fiscal' => 'Fiscalitate',
            'table_refund' => 'Politică retur',
            'table_sla' => 'SLA & performanță',

            // FAQ section
            'faq_badge' => 'FAQ',
            'faq_title' => 'Întrebări frecvente despre Tixello vs',

            // Carousel section
            'carousel_title' => 'Vezi și alte comparații Tixello:',

            // Final CTA section
            'final_badge' => 'Demo personalizat gratuit',
            'final_title' => 'Vrei control total, cashflow direct',
            'final_title_gradient' => 'și costuri previzibile?',
            'final_desc' => 'Programează un demo — îți arătăm cum Tixello scurtează drumul de la anunț la sold-out, fără birocrația unui contract lung.',
            'final_cta' => 'Programează un demo Tixello',
            'final_stat_1' => 'Fără obligații',
            'final_stat_2' => 'Demo în 24h',
            'final_stat_3' => 'Migrare gratuită',

            // Transparency note
            'transparency_title' => 'Notă de transparență',
            'transparency_text' => 'Analiza se bazează pe informații publice consultate la 1 noiembrie 2025. Dacă reprezinți această platformă și dorești clarificări, scrie-ne — actualizăm cu plăcere.',
        ],
        'en' => [
            // Hero section
            'breadcrumb_home' => 'Home',
            'breadcrumb_comparisons' => 'Comparisons',
            'platform_b2b' => 'B2B Platform',
            'vs' => 'VS',

            // Headlines
            'headline_main' => 'Real control, direct cashflow and',
            'headline_gradient' => 'lower total cost',
            'hero_description' => 'Keep control and increase conversion. With Tixello, money goes directly to your account, you choose the <span class="text-emerald-400 font-semibold">1-3%</span> commission (you can include it in the price or add it on top), you have a dedicated admin and fiscal & analytics microservices that reduce your workload.',
            'hero_stats' => 'SLA 99.99% • ~300ms response time.',

            // Quick stats
            'stat_cashflow' => 'Direct cashflow',
            'stat_commission' => '1-3% commission',
            'stat_efactura' => 'Automatic e-invoicing',

            // CTAs
            'cta_demo' => 'Schedule a demo',
            'cta_offer' => 'Request custom offer',

            // Quick comparison section
            'quick_comparison_title' => 'Tixello: B2B platform focused on control, costs & taxation',
            'quick_comparison_desc' => 'No mandatory subscription, 1-3% commission, direct cashflow and fiscal automations for the local market. You decide how to display the commission (included vs. on top) and optimize conversion on real numbers.',

            // Card titles
            'card_cost' => 'Cost model',
            'card_cashflow' => 'Cashflow',
            'card_fiscal' => 'Taxation',

            // Demo CTA section
            'demo_title' => 'Want to see Tixello on your events structure?',
            'demo_desc' => 'In a live demo we show you exactly what the total cost looks like, how invoices & e-invoices are automatically generated and how you track conversion by channels.',

            // Verdict section
            'verdict_badge' => 'Quick verdict',
            'verdict_title' => 'Quick verdict for organizers',
            'verdict_tixello_title' => 'Tixello in brief',
            'verdict_tixello_subtitle' => 'B2B Platform for organizers',
            'verdict_competitor_title' => 'in brief (factual)',
            'verdict_competitor_subtitle' => 'From public sources',

            // Tixello benefits in verdict
            'tixello_cashflow' => 'Direct cashflow — money goes directly to your account, no transfer cycles',
            'tixello_commission' => '1-3% commission — you pay only when you sell, no fixed costs or subscriptions',
            'tixello_admin' => 'Dedicated admin — separate instance, own GTM, complete data export',
            'tixello_processor' => 'Multi-processor payments — fallback & routing for better approval rates',
            'tixello_fiscal' => 'Automatic invoicing + e-invoicing — fiscal & legal documents post-event',
            'tixello_sla' => 'SLA 99.99% — ~300ms response time and live chat support',

            // Detailed comparison section
            'detailed_badge' => 'Detailed analysis',
            'detailed_title' => 'Differences that increase your',
            'detailed_title_gradient' => 'profit',
            'winner_badge' => 'Winner',

            // Comparison items
            'compare_1_title' => '1) Cashflow & commissions',
            'compare_2_title' => '2) Platform & data control',
            'compare_3_title' => '3) Taxation & operations',
            'compare_4_title' => '4) UX & conversion',

            // Benefits section
            'benefits_badge' => 'Concrete benefits',
            'benefits_title' => 'What you gain, concretely, with Tixello',
            'benefit_1_title' => 'Lower and predictable total cost',
            'benefit_1_desc' => 'Choose 1-3%, no mandatory subscriptions; you can test included vs. on top for commission. Zero surprises.',
            'benefit_2_title' => 'Higher conversion',
            'benefit_2_desc' => 'See exactly where sales come from, optimize budgets and reduce ad losses with advanced tracking.',
            'benefit_3_title' => 'Direct cashflow',
            'benefit_3_desc' => 'No waiting for transfer cycles or settlement; money goes directly to your account from each sale.',
            'benefit_4_title' => 'Zero hassle',
            'benefit_4_desc' => 'Invoices, e-invoices and fiscal & legal documents generated automatically. You focus on the event.',
            'benefit_5_title' => 'Scalable & secure',
            'benefit_5_desc' => 'SLA 99.99%, live reports, quick editing, real-time chat support — for 100 or 100,000 tickets.',

            // Comparison table
            'table_title' => 'Executive comparison table: Tixello vs',
            'table_criterion' => 'Criterion',
            'table_cost' => 'Cost model',
            'table_cashflow' => 'Cashflow',
            'table_admin' => 'Admin & data',
            'table_delivery' => 'Delivery & access',
            'table_fiscal' => 'Taxation',
            'table_refund' => 'Refund policy',
            'table_sla' => 'SLA & performance',

            // FAQ section
            'faq_badge' => 'FAQ',
            'faq_title' => 'Frequently asked questions about Tixello vs',

            // Carousel section
            'carousel_title' => 'See other Tixello comparisons:',

            // Final CTA section
            'final_badge' => 'Free personalized demo',
            'final_title' => 'Want total control, direct cashflow',
            'final_title_gradient' => 'and predictable costs?',
            'final_desc' => 'Schedule a demo — we show you how Tixello shortens the path from announcement to sold-out, without the bureaucracy of a long contract.',
            'final_cta' => 'Schedule a Tixello demo',
            'final_stat_1' => 'No obligations',
            'final_stat_2' => 'Demo in 24h',
            'final_stat_3' => 'Free migration',

            // Transparency note
            'transparency_title' => 'Transparency note',
            'transparency_text' => 'The analysis is based on public information consulted on November 1, 2025. If you represent this platform and want clarifications, write to us — we update with pleasure.',
        ],
    ];

    return isset($translations[$lang]) ? $translations[$lang] : $translations['ro'];
}

/**
 * Get translated string
 *
 * @param string $key Translation key
 * @return string Translated string
 */
function tixello_t($key) {
    $translations = tixello_get_comparison_translations();
    return isset($translations[$key]) ? $translations[$key] : $key;
}

/**
 * Get localized value from array
 *
 * @param array $arr Array with 'ro' and 'en' keys
 * @return string Localized value
 */
function tixello_localize($arr) {
    $lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
    return isset($arr[$lang]) ? $arr[$lang] : (isset($arr['ro']) ? $arr['ro'] : '');
}
