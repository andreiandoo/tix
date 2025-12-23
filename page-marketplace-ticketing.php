<?php
/**
 * Template Name: Marketplace Ticketing
 * Description: White-label ticketing marketplace solution page
 */

get_header();

// ==========================
// Multilanguage Support (Polylang)
// ==========================
$lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'ro';

$t = [
    // Hero Section
    'badge' => $lang === 'ro' ? 'Enterprise Solution' : 'Enterprise Solution',
    'hero_title_1' => $lang === 'ro' ? 'Construiește-ți propriul' : 'Build Your Own',
    'hero_title_2' => $lang === 'ro' ? 'Marketplace de Ticketing' : 'Ticketing Marketplace',
    'hero_desc' => $lang === 'ro'
        ? 'Toată puterea Tixello, sub brandul tău. Lansează o platformă completă de ticketing pentru organizatorii și clienții tăi — fără să scrii o linie de cod.'
        : 'All the power of Tixello, under your brand. Launch a complete ticketing platform for your organizers and customers — without writing a single line of code.',
    'stat_features' => $lang === 'ro' ? 'Funcționalități incluse' : 'Features included',
    'stat_sla' => $lang === 'ro' ? 'SLA garantat' : 'Guaranteed SLA',
    'stat_launch' => $lang === 'ro' ? 'Timp de lansare' : 'Launch time',
    'stat_launch_val' => $lang === 'ro' ? '~2 săpt' : '~2 weeks',
    'cta_demo' => $lang === 'ro' ? 'Programează o prezentare' : 'Schedule a Demo',
    'cta_how' => $lang === 'ro' ? 'Cum funcționează →' : 'How it works →',

    // Architecture Preview
    'your_organizers' => $lang === 'ro' ? 'Organizatorii tăi' : 'Your Organizers',
    'create_manage' => $lang === 'ro' ? 'Creează & gestionează' : 'Create & manage',
    'your_marketplace' => $lang === 'ro' ? 'Marketplace-ul tău' : 'Your Marketplace',
    'powered_by' => $lang === 'ro' ? 'Powered by Tixello' : 'Powered by Tixello',
    'end_customers' => $lang === 'ro' ? 'Clienții finali' : 'End Customers',
    'buy_tickets' => $lang === 'ro' ? 'Cumpără bilete' : 'Buy tickets',

    // What is Marketplace
    'what_title' => $lang === 'ro' ? 'Ce este un Marketplace Tixello?' : 'What is a Tixello Marketplace?',
    'what_desc_1' => $lang === 'ro'
        ? 'Un marketplace de ticketing este o platformă completă — cu brandul tău — care permite organizatorilor de evenimente să vândă bilete, iar clienților finali să le cumpere.'
        : 'A ticketing marketplace is a complete platform — with your brand — that allows event organizers to sell tickets and end customers to buy them.',
    'what_desc_2' => $lang === 'ro'
        ? 'Tu ești proprietarul. Tu stabilești comisioanele. Tu construiești relația cu clienții. Tixello furnizează întreaga infrastructură tehnică, invizibilă pentru utilizatorii tăi.'
        : 'You are the owner. You set the fees. You build the customer relationship. Tixello provides the entire technical infrastructure, invisible to your users.',
    'you_owner' => $lang === 'ro' ? 'Tu ești proprietarul.' : 'You are the owner.',
    'brand_100' => $lang === 'ro' ? 'Brandul tău, 100%' : 'Your Brand, 100%',
    'brand_100_desc' => $lang === 'ro' ? 'Logo, culori, domeniu, emailuri — totul personalizat' : 'Logo, colors, domain, emails — everything customized',
    'you_set_fees' => $lang === 'ro' ? 'Tu stabilești comisioanele' : 'You Set the Fees',
    'you_set_fees_desc' => $lang === 'ro' ? 'Încasează cât vrei de la organizatorii tăi' : 'Charge what you want from your organizers',
    'zero_dev' => $lang === 'ro' ? 'Zero dezvoltare' : 'Zero Development',
    'zero_dev_desc' => $lang === 'ro' ? 'Lansare rapidă, fără echipă tehnică proprie' : 'Fast launch, no technical team required',
    'example' => $lang === 'ro' ? 'Exemplu' : 'Example',
    'active_organizers' => $lang === 'ro' ? 'Organizatori activi' : 'Active organizers',
    'tickets_sold_month' => $lang === 'ro' ? 'Bilete vândute luna aceasta' : 'Tickets sold this month',
    'commission_earned' => $lang === 'ro' ? 'Comision încasat' : 'Commission earned',

    // How it Works
    'how_title' => $lang === 'ro' ? 'Cum funcționează' : 'How It Works',
    'how_desc' => $lang === 'ro'
        ? 'Arhitectura simplă care îți permite să te concentrezi pe business, nu pe tehnologie'
        : 'Simple architecture that lets you focus on business, not technology',
    'step1_title' => $lang === 'ro' ? 'Tu atragi organizatori' : 'You Attract Organizers',
    'step1_desc' => $lang === 'ro'
        ? 'Organizatorii de evenimente se înscriu pe platforma ta. Tu le oferi acces, stabilești comisionul pe care îl încasezi și le oferi suport.'
        : 'Event organizers sign up on your platform. You give them access, set your commission, and provide support.',
    'step2_title' => $lang === 'ro' ? 'Tixello oferă infrastructura' : 'Tixello Provides Infrastructure',
    'step2_desc' => $lang === 'ro'
        ? 'Checkout, plăți, bilete, validare, eFactura, analytics — totul funcționează automat. Organizatorii tăi au acces la toate funcționalitățile.'
        : 'Checkout, payments, tickets, validation, e-invoicing, analytics — everything works automatically. Your organizers have access to all features.',
    'step3_title' => $lang === 'ro' ? 'Tu încasezi comisionul' : 'You Collect the Commission',
    'step3_desc' => $lang === 'ro'
        ? 'La fiecare bilet vândut pe platforma ta, încasezi comisionul pe care l-ai stabilit. Tu decizi: 3%, 5%, 10% — cât vrei.'
        : 'For every ticket sold on your platform, you collect the commission you set. You decide: 3%, 5%, 10% — whatever you want.',
    'full_flow' => $lang === 'ro' ? 'Fluxul complet' : 'Complete Flow',
    'create_events' => $lang === 'ro' ? 'Creează evenimente' : 'Create events',
    'listing_discovery' => $lang === 'ro' ? 'Listing & Discovery' : 'Listing & Discovery',
    'your_commission' => $lang === 'ro' ? 'Comisionul tău' : 'Your commission',
    'you_collect' => $lang === 'ro' ? 'Tu încasezi' : 'You collect',
    'invisible_infra' => $lang === 'ro'
        ? 'Infrastructura invizibilă care face totul să funcționeze'
        : 'The invisible infrastructure that makes everything work',

    // Features
    'features_title' => $lang === 'ro' ? 'Toate microserviciile Tixello, incluse' : 'All Tixello Microservices Included',
    'features_desc' => $lang === 'ro'
        ? 'Marketplace-ul tău vine cu acces complet la întreaga suită de funcționalități'
        : 'Your marketplace comes with complete access to the full suite of features',
    'feat_payments' => $lang === 'ro' ? 'Multi-processor plăți' : 'Multi-processor Payments',
    'feat_payments_desc' => 'Stripe, PayU, Netopia, EuPlătesc',
    'feat_invoice' => $lang === 'ro' ? 'eFactura ANAF' : 'ANAF e-Invoice',
    'feat_invoice_desc' => $lang === 'ro' ? 'Facturi automate, 100% conform' : 'Automatic invoices, 100% compliant',
    'feat_qr' => $lang === 'ro' ? 'Coduri QR & Validare' : 'QR Codes & Validation',
    'feat_qr_desc' => $lang === 'ro' ? 'Scanare și check-in instant' : 'Instant scanning and check-in',
    'feat_seating' => $lang === 'ro' ? 'Hărți de locuri' : 'Seat Maps',
    'feat_seating_desc' => $lang === 'ro' ? 'Seating interactiv, săli configurabile' : 'Interactive seating, configurable venues',
    'feat_promo' => $lang === 'ro' ? 'Coduri promoționale' : 'Promo Codes',
    'feat_promo_desc' => $lang === 'ro' ? 'Discounturi, early bird, VIP' : 'Discounts, early bird, VIP',
    'feat_email' => $lang === 'ro' ? 'Email Marketing' : 'Email Marketing',
    'feat_email_desc' => $lang === 'ro' ? 'Campanii, automatizări, templates' : 'Campaigns, automations, templates',
    'feat_analytics' => $lang === 'ro' ? 'Analytics & Rapoarte' : 'Analytics & Reports',
    'feat_analytics_desc' => $lang === 'ro' ? 'Dashboard-uri, export, insights' : 'Dashboards, export, insights',
    'feat_api' => $lang === 'ro' ? 'API Complet' : 'Complete API',
    'feat_api_desc' => $lang === 'ro' ? 'REST API, webhooks, integrări' : 'REST API, webhooks, integrations',
    'feat_fb' => 'Facebook CAPI',
    'feat_fb_desc' => $lang === 'ro' ? 'Conversii server-to-server' : 'Server-to-server conversions',
    'feat_google' => 'Google Ads',
    'feat_google_desc' => $lang === 'ro' ? 'Tracking conversii, remarketing' : 'Conversion tracking, remarketing',
    'feat_affiliate' => $lang === 'ro' ? 'Affiliate System' : 'Affiliate System',
    'feat_affiliate_desc' => $lang === 'ro' ? 'Programe de afiliere, tracking' : 'Affiliate programs, tracking',
    'feat_merch' => 'Merchandise Shop',
    'feat_merch_desc' => $lang === 'ro' ? 'Produse, bundles, upsell' : 'Products, bundles, upsell',
    'more_features' => $lang === 'ro' ? '+ încă 40+ funcționalități.' : '+ 40 more features.',
    'see_all' => $lang === 'ro' ? 'Vezi toate →' : 'See all →',

    // Use Cases
    'usecases_title' => $lang === 'ro' ? 'Pentru cine este?' : 'Who Is It For?',
    'usecases_desc' => $lang === 'ro'
        ? 'Marketplace-ul Tixello este ideal pentru organizații care vor să-și construiască propria platformă de ticketing'
        : 'Tixello Marketplace is ideal for organizations that want to build their own ticketing platform',
    'uc_theaters' => $lang === 'ro' ? 'Rețele de teatre & săli' : 'Theater & Venue Networks',
    'uc_theaters_desc' => $lang === 'ro'
        ? 'Gestionează multiple locații sub un singur brand. Fiecare teatru își administrează evenimentele, tu controlezi totul centralizat.'
        : 'Manage multiple locations under one brand. Each theater manages its events, you control everything centrally.',
    'uc_agencies' => $lang === 'ro' ? 'Agenții de evenimente' : 'Event Agencies',
    'uc_agencies_desc' => $lang === 'ro'
        ? 'Oferă clienților tăi o platformă modernă de ticketing. Fiecare client are propriul spațiu, tu încasezi comisionul tău.'
        : 'Offer your clients a modern ticketing platform. Each client has their own space, you collect your commission.',
    'uc_sports' => $lang === 'ro' ? 'Federații sportive' : 'Sports Federations',
    'uc_sports_desc' => $lang === 'ro'
        ? 'Centralizează vânzarea de bilete pentru toate cluburile din federație. Analytics unificat, control total.'
        : 'Centralize ticket sales for all clubs in the federation. Unified analytics, total control.',
    'uc_universities' => $lang === 'ro' ? 'Universități & Instituții' : 'Universities & Institutions',
    'uc_universities_desc' => $lang === 'ro'
        ? 'Conferințe, ceremonii, evenimente culturale — toate sub umbrela instituției, cu acces granular pentru fiecare facultate.'
        : 'Conferences, ceremonies, cultural events — all under the institution umbrella, with granular access for each faculty.',
    'uc_festivals' => $lang === 'ro' ? 'Organizatori de festivaluri' : 'Festival Organizers',
    'uc_festivals_desc' => $lang === 'ro'
        ? 'Portofoliu de festivaluri și evenimente, toate gestionate unitar. Cross-selling între evenimente, audience unificat.'
        : 'Portfolio of festivals and events, all managed together. Cross-selling between events, unified audience.',
    'uc_startups' => $lang === 'ro' ? 'Startup-uri tech' : 'Tech Startups',
    'uc_startups_desc' => $lang === 'ro'
        ? 'Lansează rapid un produs de ticketing fără să investești în dezvoltare. Concentrează-te pe creștere și clienți.'
        : 'Quickly launch a ticketing product without investing in development. Focus on growth and customers.',

    // Pricing
    'pricing_title' => $lang === 'ro' ? 'Două modele simple' : 'Two Simple Models',
    'pricing_desc' => $lang === 'ro'
        ? 'Alege ce ți se potrivește: o investiție unică sau un parteneriat pe termen lung'
        : 'Choose what suits you: a one-time investment or a long-term partnership',
    'license_badge' => $lang === 'ro' ? 'Licență perpetuă' : 'Perpetual License',
    'license_price' => '20.000€',
    'license_period' => 'one-time',
    'license_desc' => $lang === 'ro'
        ? 'Plătești o singură dată, folosești pentru totdeauna. Ideal pentru organizații cu volum mare care vor predicibilitate în costuri.'
        : 'Pay once, use forever. Ideal for high-volume organizations that want predictable costs.',
    'all_features' => $lang === 'ro' ? 'Toate funcționalitățile incluse' : 'All features included',
    'branding_100' => $lang === 'ro' ? 'Branding 100% personalizat' : '100% custom branding',
    'support_12' => $lang === 'ro' ? 'Suport dedicat 12 luni' : 'Dedicated support 12 months',
    'updates_12' => $lang === 'ro' ? 'Updates incluse 12 luni' : 'Updates included 12 months',
    'zero_commission' => $lang === 'ro' ? '0% comision Tixello pe vânzări' : '0% Tixello commission on sales',
    'talk_to_us' => $lang === 'ro' ? 'Discută cu noi' : 'Talk to Us',
    'revenue_badge' => 'Revenue share',
    'revenue_price' => '1%',
    'revenue_period' => $lang === 'ro' ? 'din încasări' : 'of revenue',
    'revenue_desc' => $lang === 'ro'
        ? 'Zero investiție inițială. Plătești doar când vinzi. Perfect pentru a valida ideea și a crește organic fără risc financiar.'
        : 'Zero upfront investment. Pay only when you sell. Perfect for validating the idea and growing organically without financial risk.',
    'support_continuous' => $lang === 'ro' ? 'Suport continuu inclus' : 'Continuous support included',
    'updates_perpetual' => $lang === 'ro' ? 'Updates perpetue incluse' : 'Perpetual updates included',
    'zero_upfront' => $lang === 'ro' ? 'Zero investiție inițială' : 'Zero upfront investment',
    'start_free' => $lang === 'ro' ? 'Începe gratuit' : 'Start Free',
    'popular' => 'Popular',
    'commission_note_title' => $lang === 'ro' ? 'Tu stabilești comisionul tău' : 'You Set Your Own Commission',
    'commission_note_desc' => $lang === 'ro'
        ? 'Indiferent de modelul ales, tu decizi ce comision încasezi de la organizatorii tăi. Vrei 3%? 5%? 10%? Tu stabilești. Comisionul Tixello (1% în modelul revenue share) se aplică pe volumul total, separat de ce încasezi tu.'
        : 'Regardless of the model you choose, you decide what commission you charge your organizers. Want 3%? 5%? 10%? You decide. The Tixello commission (1% in the revenue share model) applies to total volume, separate from what you collect.',

    // Why Not Build
    'whynot_title' => $lang === 'ro' ? 'De ce să nu construiești singur?' : 'Why Not Build It Yourself?',
    'whynot_desc' => $lang === 'ro'
        ? 'Am făcut calculele. Construirea unei platforme de ticketing de la zero costă mult mai mult decât crezi.'
        : "We've done the math. Building a ticketing platform from scratch costs much more than you think.",
    'build_own' => $lang === 'ro' ? 'Dezvoltare proprie' : 'Build Your Own',
    'build_time' => $lang === 'ro' ? '12-18 luni dezvoltare' : '12-18 months development',
    'build_time_desc' => $lang === 'ro' ? 'Pentru un MVP funcțional' : 'For a functional MVP',
    'build_cost' => '€150,000 - €300,000+',
    'build_cost_desc' => $lang === 'ro' ? 'Salarii, infrastructură, licențe' : 'Salaries, infrastructure, licenses',
    'build_team' => $lang === 'ro' ? 'Echipă dedicată 5-8 persoane' : 'Dedicated team of 5-8 people',
    'build_team_desc' => 'Backend, frontend, mobile, DevOps, QA',
    'build_integrations' => $lang === 'ro' ? 'Integrări complexe' : 'Complex integrations',
    'build_integrations_desc' => $lang === 'ro'
        ? 'Plăți, eFactura, tracking pixels — fiecare cu săptămâni de muncă'
        : 'Payments, e-invoicing, tracking pixels — each taking weeks of work',
    'build_maintenance' => $lang === 'ro' ? 'Mentenanță continuă' : 'Continuous maintenance',
    'build_maintenance_desc' => $lang === 'ro'
        ? 'Securitate, bug-uri, updates, scalabilitate'
        : 'Security, bugs, updates, scalability',
    'with_tixello' => $lang === 'ro' ? 'Cu Tixello Marketplace' : 'With Tixello Marketplace',
    'tix_time' => $lang === 'ro' ? '~2 săptămâni lansare' : '~2 weeks to launch',
    'tix_time_desc' => $lang === 'ro' ? 'Setup, branding, training, go live' : 'Setup, branding, training, go live',
    'tix_cost' => $lang === 'ro' ? '€20,000 sau 1% din vânzări' : '€20,000 or 1% of sales',
    'tix_cost_desc' => $lang === 'ro' ? 'Cost predictibil și transparent' : 'Predictable and transparent cost',
    'tix_team' => $lang === 'ro' ? 'Zero echipă tehnică necesară' : 'Zero technical team required',
    'tix_team_desc' => $lang === 'ro' ? 'Focusează-te pe business și clienți' : 'Focus on business and customers',
    'tix_integrations' => $lang === 'ro' ? '50+ integrări deja făcute' : '50+ integrations already done',
    'tix_integrations_desc' => $lang === 'ro' ? 'Plăți, eFactura, tracking — toate gata' : 'Payments, e-invoicing, tracking — all ready',
    'tix_maintenance' => $lang === 'ro' ? 'Noi ne ocupăm de tot' : 'We handle everything',
    'tix_maintenance_desc' => $lang === 'ro'
        ? 'Updates, securitate, scalabilitate, suport'
        : 'Updates, security, scalability, support',

    // FAQ
    'faq_title' => $lang === 'ro' ? 'Întrebări frecvente' : 'Frequently Asked Questions',
    'faq1_q' => $lang === 'ro' ? 'Cât durează implementarea?' : 'How long does implementation take?',
    'faq1_a' => $lang === 'ro'
        ? 'În mod normal, un marketplace poate fi lansat în 2-3 săptămâni. Aceasta include setup-ul tehnic, personalizarea brandingului, configurarea procesatorilor de plăți, training-ul echipei tale și go-live.'
        : 'Typically, a marketplace can be launched in 2-3 weeks. This includes technical setup, branding customization, payment processor configuration, team training, and go-live.',
    'faq2_q' => $lang === 'ro' ? 'Pot migra organizatori existenți?' : 'Can I migrate existing organizers?',
    'faq2_a' => $lang === 'ro'
        ? 'Da, oferim suport pentru migrarea datelor. Putem importa istoricul de evenimente, baze de date de clienți și alte date relevante. Discutăm specificul în cadrul onboarding-ului.'
        : 'Yes, we offer data migration support. We can import event history, customer databases, and other relevant data. We discuss specifics during onboarding.',
    'faq3_q' => $lang === 'ro' ? 'Clienții mei văd "Tixello" undeva?' : 'Do my customers see "Tixello" anywhere?',
    'faq3_a' => $lang === 'ro'
        ? 'Nu, dacă nu vrei. Marketplace-ul poate fi complet white-label — logo-ul tău, culorile tale, domeniul tău, emailurile tale. Tixello rămâne invizibil. Poți alege să menționezi "Powered by Tixello" în footer, dar nu e obligatoriu.'
        : 'No, if you don\'t want them to. The marketplace can be completely white-label — your logo, your colors, your domain, your emails. Tixello stays invisible. You can choose to mention "Powered by Tixello" in the footer, but it\'s not mandatory.',
    'faq4_q' => $lang === 'ro' ? 'Ce se întâmplă cu banii?' : 'What happens with the money?',
    'faq4_a' => $lang === 'ro'
        ? 'Poți configura fluxul de plăți: fie banii intră direct în conturile organizatorilor (tu încasezi comisionul separat), fie trec prin contul tău și apoi virezi către organizatori. Tu decizi ce model se potrivește business-ului tău.'
        : 'You can configure the payment flow: either money goes directly to organizer accounts (you collect commission separately), or it goes through your account and you transfer to organizers. You decide which model fits your business.',
    'faq5_q' => $lang === 'ro' ? 'Pot avea comisioane diferite pentru organizatori diferiți?' : 'Can I have different commissions for different organizers?',
    'faq5_a' => $lang === 'ro'
        ? 'Absolut. Poți seta comisioane diferite per organizator — poate vrei un deal special pentru un client mare, sau tarife diferite pe categorii de evenimente. Totul e configurabil.'
        : 'Absolutely. You can set different commissions per organizer — maybe you want a special deal for a big client, or different rates for event categories. Everything is configurable.',
    'faq6_q' => $lang === 'ro' ? 'Ce suport primesc?' : 'What support do I get?',
    'faq6_a' => $lang === 'ro'
        ? 'Ai acces la suport dedicat prin email, chat și, pentru probleme urgente, telefon. Îți oferim și training pentru echipa ta și documentație completă. SLA garantat: 99.99% uptime.'
        : 'You get access to dedicated support via email, chat, and for urgent issues, phone. We also provide training for your team and complete documentation. Guaranteed SLA: 99.99% uptime.',

    // Contact
    'contact_title' => $lang === 'ro' ? 'Hai să discutăm' : "Let's Talk",
    'contact_desc' => $lang === 'ro'
        ? 'Programează o prezentare de 30 de minute. Îți arătăm platforma, răspundem la întrebări și vedem cum putem construi împreună marketplace-ul tău.'
        : "Schedule a 30-minute presentation. We'll show you the platform, answer questions, and see how we can build your marketplace together.",
    'response_24h' => $lang === 'ro' ? 'Răspuns în 24h' : 'Response in 24h',
    'custom_demo' => $lang === 'ro' ? 'Demo personalizat' : 'Custom demo',
    'no_obligations' => $lang === 'ro' ? 'Fără obligații' : 'No obligations',
];
?>

<!-- Hero Section -->
<header class="relative pt-32 pb-24 overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-violet-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-emerald-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-sm text-white/70"><?php echo esc_html( $t['badge'] ); ?></span>
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight mb-6">
                <?php echo esc_html( $t['hero_title_1'] ); ?>
                <span class="block mt-2 bg-gradient-to-r from-violet-500 via-cyan-400 to-emerald-400 bg-clip-text text-transparent"><?php echo esc_html( $t['hero_title_2'] ); ?></span>
            </h1>

            <p class="text-xl text-white/60 max-w-2xl mx-auto mb-8">
                <?php echo esc_html( $t['hero_desc'] ); ?>
            </p>

            <!-- Key Stats -->
            <div class="flex flex-wrap justify-center gap-8 mb-12">
                <div class="text-center">
                    <p class="text-3xl font-bold text-white">50+</p>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['stat_features'] ); ?></p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold text-white">99.99%</p>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['stat_sla'] ); ?></p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold text-white"><?php echo esc_html( $t['stat_launch_val'] ); ?></p>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['stat_launch'] ); ?></p>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="px-8 py-4 rounded-xl bg-gradient-to-r from-violet-600 to-cyan-600 text-white font-semibold hover:opacity-90 transition-opacity">
                    <?php echo esc_html( $t['cta_demo'] ); ?>
                </a>
                <a href="#how-it-works" class="px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-semibold hover:bg-white/10 transition-colors">
                    <?php echo esc_html( $t['cta_how'] ); ?>
                </a>
            </div>
        </div>

        <!-- Floating Architecture Preview -->
        <div class="mt-20 relative">
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent to-transparent z-10 pointer-events-none"></div>
            <div class="mp-glass rounded-3xl p-8 max-w-4xl mx-auto mp-float-animation">
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="p-4">
                        <div class="w-12 h-12 rounded-xl bg-violet-500/20 flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
                        </div>
                        <p class="text-sm font-medium text-white"><?php echo esc_html( $t['your_organizers'] ); ?></p>
                        <p class="text-xs text-white/40 mt-1"><?php echo esc_html( $t['create_manage'] ); ?></p>
                    </div>
                    <div class="p-4 relative">
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full mp-architecture-line"></div>
                        <div class="relative w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 to-cyan-500 flex items-center justify-center mx-auto mb-3 mp-glow-box">
                            <span class="text-white font-bold text-lg">MP</span>
                        </div>
                        <p class="text-sm font-medium text-white"><?php echo esc_html( $t['your_marketplace'] ); ?></p>
                        <p class="text-xs text-white/40 mt-1"><?php echo esc_html( $t['powered_by'] ); ?></p>
                    </div>
                    <div class="p-4">
                        <div class="w-12 h-12 rounded-xl bg-emerald-500/20 flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
                        </div>
                        <p class="text-sm font-medium text-white"><?php echo esc_html( $t['end_customers'] ); ?></p>
                        <p class="text-xs text-white/40 mt-1"><?php echo esc_html( $t['buy_tickets'] ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- What is a Marketplace -->
<section class="py-24 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">
                    <?php echo esc_html( $t['what_title'] ); ?>
                </h2>
                <p class="text-lg text-white/60 mb-6">
                    <?php echo esc_html( $t['what_desc_1'] ); ?>
                </p>
                <p class="text-lg text-white/60 mb-8">
                    <strong class="text-white"><?php echo esc_html( $t['you_owner'] ); ?></strong> <?php echo esc_html( $t['what_desc_2'] ); ?>
                </p>

                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-violet-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white"><?php echo esc_html( $t['brand_100'] ); ?></h3>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['brand_100_desc'] ); ?></p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white"><?php echo esc_html( $t['you_set_fees'] ); ?></h3>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['you_set_fees_desc'] ); ?></p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white"><?php echo esc_html( $t['zero_dev'] ); ?></h3>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['zero_dev_desc'] ); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="mp-glass rounded-3xl p-8">
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-medium mb-4">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <?php echo esc_html( $t['example'] ); ?>
                        </div>
                        <h3 class="text-xl font-bold text-white">TicketMaster.ro</h3>
                        <p class="text-sm text-white/50"><?php echo esc_html( $t['powered_by'] ); ?></p>
                    </div>

                    <div class="space-y-4">
                        <div class="p-4 rounded-xl bg-white/[0.02] border border-white/5">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-white/70"><?php echo esc_html( $t['active_organizers'] ); ?></span>
                                <span class="text-sm font-semibold text-white">127</span>
                            </div>
                            <div class="w-full h-2 rounded-full bg-white/10">
                                <div class="w-3/4 h-full rounded-full bg-gradient-to-r from-violet-500 to-cyan-500"></div>
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-white/[0.02] border border-white/5">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-white/70"><?php echo esc_html( $t['tickets_sold_month'] ); ?></span>
                                <span class="text-sm font-semibold text-white">14,892</span>
                            </div>
                            <div class="w-full h-2 rounded-full bg-white/10">
                                <div class="w-2/3 h-full rounded-full bg-gradient-to-r from-cyan-500 to-emerald-500"></div>
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-white/[0.02] border border-white/5">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-white/70"><?php echo esc_html( $t['commission_earned'] ); ?></span>
                                <span class="text-sm font-semibold text-emerald-400">€ 23,450</span>
                            </div>
                            <div class="w-full h-2 rounded-full bg-white/10">
                                <div class="w-4/5 h-full rounded-full bg-gradient-to-r from-emerald-500 to-emerald-400"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How it Works -->
<section id="how-it-works" class="py-24 relative bg-white/[0.01]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                <?php echo esc_html( $t['how_title'] ); ?>
            </h2>
            <p class="text-lg text-white/60">
                <?php echo esc_html( $t['how_desc'] ); ?>
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="relative">
                <div class="mp-glass rounded-2xl p-8 h-full">
                    <div class="w-12 h-12 rounded-xl bg-violet-500/20 flex items-center justify-center mb-6">
                        <span class="text-xl font-bold text-violet-400">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?php echo esc_html( $t['step1_title'] ); ?></h3>
                    <p class="text-white/60">
                        <?php echo esc_html( $t['step1_desc'] ); ?>
                    </p>
                </div>
                <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-violet-500 to-transparent"></div>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="mp-glass rounded-2xl p-8 h-full border-violet-500/20">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/20 flex items-center justify-center mb-6">
                        <span class="text-xl font-bold text-cyan-400">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?php echo esc_html( $t['step2_title'] ); ?></h3>
                    <p class="text-white/60">
                        <?php echo esc_html( $t['step2_desc'] ); ?>
                    </p>
                </div>
                <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-gradient-to-r from-cyan-500 to-transparent"></div>
            </div>

            <!-- Step 3 -->
            <div>
                <div class="mp-glass rounded-2xl p-8 h-full">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/20 flex items-center justify-center mb-6">
                        <span class="text-xl font-bold text-emerald-400">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?php echo esc_html( $t['step3_title'] ); ?></h3>
                    <p class="text-white/60">
                        <?php echo esc_html( $t['step3_desc'] ); ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- Visual Architecture -->
        <div class="mt-20 mp-glass rounded-3xl p-8">
            <h3 class="text-lg font-semibold text-white text-center mb-8"><?php echo esc_html( $t['full_flow'] ); ?></h3>
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex-1 text-center p-4">
                    <div class="w-16 h-16 rounded-2xl bg-violet-500/20 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                    </div>
                    <p class="font-medium text-white"><?php echo esc_html( $t['your_organizers'] ); ?></p>
                    <p class="text-xs text-white/40"><?php echo esc_html( $t['create_events'] ); ?></p>
                </div>

                <div class="hidden md:block">
                    <svg class="w-8 h-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </div>

                <div class="flex-1 text-center p-4">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 to-cyan-500 flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold text-xl">MP</span>
                    </div>
                    <p class="font-medium text-white"><?php echo esc_html( $t['your_marketplace'] ); ?></p>
                    <p class="text-xs text-white/40"><?php echo esc_html( $t['listing_discovery'] ); ?></p>
                </div>

                <div class="hidden md:block">
                    <svg class="w-8 h-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </div>

                <div class="flex-1 text-center p-4">
                    <div class="w-16 h-16 rounded-2xl bg-cyan-500/20 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                    </div>
                    <p class="font-medium text-white"><?php echo esc_html( $t['end_customers'] ); ?></p>
                    <p class="text-xs text-white/40"><?php echo esc_html( $t['buy_tickets'] ); ?></p>
                </div>

                <div class="hidden md:block">
                    <svg class="w-8 h-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </div>

                <div class="flex-1 text-center p-4">
                    <div class="w-16 h-16 rounded-2xl bg-emerald-500/20 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg>
                    </div>
                    <p class="font-medium text-white"><?php echo esc_html( $t['you_collect'] ); ?></p>
                    <p class="text-xs text-white/40"><?php echo esc_html( $t['your_commission'] ); ?></p>
                </div>
            </div>

            <!-- Tixello Base -->
            <div class="mt-8 pt-8 border-t border-white/5">
                <div class="flex items-center justify-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-violet-500 to-cyan-500 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">T</span>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white"><?php echo esc_html( $t['powered_by'] ); ?></p>
                        <p class="text-xs text-white/40"><?php echo esc_html( $t['invisible_infra'] ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- All Features Included -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                <?php echo esc_html( $t['features_title'] ); ?>
            </h2>
            <p class="text-lg text-white/60">
                <?php echo esc_html( $t['features_desc'] ); ?>
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php
            $features = [
                ['icon' => 'violet', 'title' => $t['feat_payments'], 'desc' => $t['feat_payments_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/>'],
                ['icon' => 'cyan', 'title' => $t['feat_invoice'], 'desc' => $t['feat_invoice_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>'],
                ['icon' => 'emerald', 'title' => $t['feat_qr'], 'desc' => $t['feat_qr_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z"/>'],
                ['icon' => 'yellow', 'title' => $t['feat_seating'], 'desc' => $t['feat_seating_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/>'],
                ['icon' => 'pink', 'title' => $t['feat_promo'], 'desc' => $t['feat_promo_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"/>'],
                ['icon' => 'blue', 'title' => $t['feat_email'], 'desc' => $t['feat_email_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>'],
                ['icon' => 'indigo', 'title' => $t['feat_analytics'], 'desc' => $t['feat_analytics_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>'],
                ['icon' => 'orange', 'title' => $t['feat_api'], 'desc' => $t['feat_api_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z"/>'],
                ['icon' => 'red', 'title' => $t['feat_fb'], 'desc' => $t['feat_fb_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>'],
                ['icon' => 'teal', 'title' => $t['feat_google'], 'desc' => $t['feat_google_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
                ['icon' => 'lime', 'title' => $t['feat_affiliate'], 'desc' => $t['feat_affiliate_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z"/>'],
                ['icon' => 'fuchsia', 'title' => $t['feat_merch'], 'desc' => $t['feat_merch_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>'],
            ];

            foreach ( $features as $feat ) :
                $colors = [
                    'violet' => ['bg' => 'bg-violet-500/20', 'text' => 'text-violet-400'],
                    'cyan' => ['bg' => 'bg-cyan-500/20', 'text' => 'text-cyan-400'],
                    'emerald' => ['bg' => 'bg-emerald-500/20', 'text' => 'text-emerald-400'],
                    'yellow' => ['bg' => 'bg-yellow-500/20', 'text' => 'text-yellow-400'],
                    'pink' => ['bg' => 'bg-pink-500/20', 'text' => 'text-pink-400'],
                    'blue' => ['bg' => 'bg-blue-500/20', 'text' => 'text-blue-400'],
                    'indigo' => ['bg' => 'bg-indigo-500/20', 'text' => 'text-indigo-400'],
                    'orange' => ['bg' => 'bg-orange-500/20', 'text' => 'text-orange-400'],
                    'red' => ['bg' => 'bg-red-500/20', 'text' => 'text-red-400'],
                    'teal' => ['bg' => 'bg-teal-500/20', 'text' => 'text-teal-400'],
                    'lime' => ['bg' => 'bg-lime-500/20', 'text' => 'text-lime-400'],
                    'fuchsia' => ['bg' => 'bg-fuchsia-500/20', 'text' => 'text-fuchsia-400'],
                ];
                $c = $colors[$feat['icon']];
            ?>
            <div class="mp-feature-card mp-glass rounded-xl p-5">
                <div class="w-10 h-10 rounded-lg <?php echo esc_attr( $c['bg'] ); ?> flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 <?php echo esc_attr( $c['text'] ); ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><?php echo $feat['svg']; ?></svg>
                </div>
                <h3 class="font-semibold text-white mb-1"><?php echo esc_html( $feat['title'] ); ?></h3>
                <p class="text-sm text-white/50"><?php echo esc_html( $feat['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-8">
            <p class="text-white/50">
                <?php echo esc_html( $t['more_features'] ); ?> <a href="<?php echo esc_url( home_url( $lang === 'ro' ? '/functionalitati/' : '/features/' ) ); ?>" class="text-violet-400 hover:text-violet-300"><?php echo esc_html( $t['see_all'] ); ?></a>
            </p>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-24 bg-white/[0.01]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                <?php echo esc_html( $t['usecases_title'] ); ?>
            </h2>
            <p class="text-lg text-white/60">
                <?php echo esc_html( $t['usecases_desc'] ); ?>
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $usecases = [
                ['icon' => 'violet', 'title' => $t['uc_theaters'], 'desc' => $t['uc_theaters_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>'],
                ['icon' => 'cyan', 'title' => $t['uc_agencies'], 'desc' => $t['uc_agencies_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"/>'],
                ['icon' => 'emerald', 'title' => $t['uc_sports'], 'desc' => $t['uc_sports_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"/>'],
                ['icon' => 'yellow', 'title' => $t['uc_universities'], 'desc' => $t['uc_universities_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>'],
                ['icon' => 'pink', 'title' => $t['uc_festivals'], 'desc' => $t['uc_festivals_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z"/>'],
                ['icon' => 'orange', 'title' => $t['uc_startups'], 'desc' => $t['uc_startups_desc'], 'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/>'],
            ];

            foreach ( $usecases as $uc ) :
                $colors = [
                    'violet' => ['bg' => 'bg-violet-500/20', 'text' => 'text-violet-400'],
                    'cyan' => ['bg' => 'bg-cyan-500/20', 'text' => 'text-cyan-400'],
                    'emerald' => ['bg' => 'bg-emerald-500/20', 'text' => 'text-emerald-400'],
                    'yellow' => ['bg' => 'bg-yellow-500/20', 'text' => 'text-yellow-400'],
                    'pink' => ['bg' => 'bg-pink-500/20', 'text' => 'text-pink-400'],
                    'orange' => ['bg' => 'bg-orange-500/20', 'text' => 'text-orange-400'],
                ];
                $c = $colors[$uc['icon']];
            ?>
            <div class="mp-glass rounded-2xl p-6">
                <div class="w-12 h-12 rounded-xl <?php echo esc_attr( $c['bg'] ); ?> flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 <?php echo esc_attr( $c['text'] ); ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><?php echo $uc['svg']; ?></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2"><?php echo esc_html( $uc['title'] ); ?></h3>
                <p class="text-white/60 text-sm"><?php echo esc_html( $uc['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                <?php echo esc_html( $t['pricing_title'] ); ?>
            </h2>
            <p class="text-lg text-white/60">
                <?php echo esc_html( $t['pricing_desc'] ); ?>
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- One-time License -->
            <div class="mp-pricing-card mp-glass rounded-3xl p-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-violet-500/10 rounded-full blur-2xl"></div>

                <div class="relative">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-400 text-xs font-medium mb-6">
                        <?php echo esc_html( $t['license_badge'] ); ?>
                    </div>

                    <div class="mb-6">
                        <span class="text-5xl font-black text-white"><?php echo esc_html( $t['license_price'] ); ?></span>
                        <span class="text-white/50 ml-2"><?php echo esc_html( $t['license_period'] ); ?></span>
                    </div>

                    <p class="text-white/60 mb-8">
                        <?php echo esc_html( $t['license_desc'] ); ?>
                    </p>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><?php echo esc_html( $t['all_features'] ); ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><?php echo esc_html( $t['branding_100'] ); ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><?php echo esc_html( $t['support_12'] ); ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><?php echo esc_html( $t['updates_12'] ); ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><strong class="text-white"><?php echo esc_html( $t['zero_commission'] ); ?></strong></span>
                        </li>
                    </ul>

                    <a href="#contact" class="block w-full py-4 rounded-xl bg-white/5 border border-white/10 text-white font-semibold text-center hover:bg-white/10 transition-colors">
                        <?php echo esc_html( $t['talk_to_us'] ); ?>
                    </a>
                </div>
            </div>

            <!-- Revenue Share -->
            <div class="mp-pricing-card mp-glass rounded-3xl p-8 relative overflow-hidden border-2 border-emerald-500/30">
                <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/10 rounded-full blur-2xl"></div>
                <div class="absolute top-4 right-4">
                    <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-medium"><?php echo esc_html( $t['popular'] ); ?></span>
                </div>

                <div class="relative">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-medium mb-6">
                        <?php echo esc_html( $t['revenue_badge'] ); ?>
                    </div>

                    <div class="mb-6">
                        <span class="text-5xl font-black text-white"><?php echo esc_html( $t['revenue_price'] ); ?></span>
                        <span class="text-white/50 ml-2"><?php echo esc_html( $t['revenue_period'] ); ?></span>
                    </div>

                    <p class="text-white/60 mb-8">
                        <?php echo esc_html( $t['revenue_desc'] ); ?>
                    </p>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><?php echo esc_html( $t['all_features'] ); ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><?php echo esc_html( $t['branding_100'] ); ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><?php echo esc_html( $t['support_continuous'] ); ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><?php echo esc_html( $t['updates_perpetual'] ); ?></span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span><strong class="text-white"><?php echo esc_html( $t['zero_upfront'] ); ?></strong></span>
                        </li>
                    </ul>

                    <a href="#contact" class="block w-full py-4 rounded-xl bg-gradient-to-r from-emerald-600 to-cyan-600 text-white font-semibold text-center hover:opacity-90 transition-opacity">
                        <?php echo esc_html( $t['start_free'] ); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Commission Note -->
        <div class="mt-12 max-w-2xl mx-auto">
            <div class="mp-glass rounded-2xl p-6 text-center">
                <div class="w-12 h-12 rounded-xl bg-violet-500/20 flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2"><?php echo esc_html( $t['commission_note_title'] ); ?></h3>
                <p class="text-white/60">
                    <?php echo esc_html( $t['commission_note_desc'] ); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Not Build Yourself -->
<section class="py-24 bg-white/[0.01]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                <?php echo esc_html( $t['whynot_title'] ); ?>
            </h2>
            <p class="text-lg text-white/60">
                <?php echo esc_html( $t['whynot_desc'] ); ?>
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Build Yourself -->
            <div class="mp-glass rounded-3xl p-8 border border-red-500/20">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-red-500/20 flex items-center justify-center">
                        <svg class="w-5 h-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white"><?php echo esc_html( $t['build_own'] ); ?></h3>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="text-red-400 mt-1">✕</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['build_time'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['build_time_desc'] ); ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-400 mt-1">✕</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['build_cost'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['build_cost_desc'] ); ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-400 mt-1">✕</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['build_team'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['build_team_desc'] ); ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-400 mt-1">✕</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['build_integrations'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['build_integrations_desc'] ); ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-400 mt-1">✕</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['build_maintenance'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['build_maintenance_desc'] ); ?></p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- With Tixello -->
            <div class="mp-glass rounded-3xl p-8 border border-emerald-500/20">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white"><?php echo esc_html( $t['with_tixello'] ); ?></h3>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-400 mt-1">✓</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['tix_time'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['tix_time_desc'] ); ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-400 mt-1">✓</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['tix_cost'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['tix_cost_desc'] ); ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-400 mt-1">✓</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['tix_team'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['tix_team_desc'] ); ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-400 mt-1">✓</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['tix_integrations'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['tix_integrations_desc'] ); ?></p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-400 mt-1">✓</span>
                        <div>
                            <p class="text-white font-medium"><?php echo esc_html( $t['tix_maintenance'] ); ?></p>
                            <p class="text-sm text-white/50"><?php echo esc_html( $t['tix_maintenance_desc'] ); ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                <?php echo esc_html( $t['faq_title'] ); ?>
            </h2>
        </div>

        <div class="space-y-4" x-data="{ open: null }">
            <?php
            $faqs = [
                ['q' => $t['faq1_q'], 'a' => $t['faq1_a']],
                ['q' => $t['faq2_q'], 'a' => $t['faq2_a']],
                ['q' => $t['faq3_q'], 'a' => $t['faq3_a']],
                ['q' => $t['faq4_q'], 'a' => $t['faq4_a']],
                ['q' => $t['faq5_q'], 'a' => $t['faq5_a']],
                ['q' => $t['faq6_q'], 'a' => $t['faq6_a']],
            ];

            foreach ( $faqs as $i => $faq ) :
                $num = $i + 1;
            ?>
            <div class="mp-glass rounded-xl overflow-hidden">
                <button @click="open = open === <?php echo $num; ?> ? null : <?php echo $num; ?>" class="w-full p-6 text-left flex items-center justify-between">
                    <span class="font-semibold text-white"><?php echo esc_html( $faq['q'] ); ?></span>
                    <svg class="w-5 h-5 text-white/50 transition-transform" :class="{ 'rotate-180': open === <?php echo $num; ?> }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === <?php echo $num; ?>" x-collapse x-cloak class="px-6 pb-6">
                    <p class="text-white/60">
                        <?php echo esc_html( $faq['a'] ); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Contact / CTA Section -->
<section id="contact" class="py-24 bg-white/[0.01]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mp-glass rounded-3xl p-8 sm:p-12 text-center relative overflow-hidden">
            <!-- Background Effects -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 left-1/4 w-64 h-64 bg-violet-500/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-cyan-500/20 rounded-full blur-3xl"></div>
            </div>

            <div class="relative">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 to-cyan-500 flex items-center justify-center mx-auto mb-6 mp-glow-box">
                    <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/></svg>
                </div>

                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    <?php echo esc_html( $t['contact_title'] ); ?>
                </h2>

                <p class="text-lg text-white/60 max-w-xl mx-auto mb-8">
                    <?php echo esc_html( $t['contact_desc'] ); ?>
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                    <a href="mailto:enterprise@tixello.com" class="px-8 py-4 rounded-xl bg-gradient-to-r from-violet-600 to-cyan-600 text-white font-semibold hover:opacity-90 transition-opacity inline-flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                        enterprise@tixello.com
                    </a>
                </div>

                <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-white/50">
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?php echo esc_html( $t['response_24h'] ); ?>
                    </span>
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?php echo esc_html( $t['custom_demo'] ); ?>
                    </span>
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?php echo esc_html( $t['no_obligations'] ); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
