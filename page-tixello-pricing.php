<?php
/**
 * Template Name: Tixello Pricing
 * Description: Pricing page for Tixello platform
 *
 * @package Tixello
 */

// Polylang language detection
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'ro';

// Translation array
$t = [
    // Hero section
    'badge_text' => $current_lang === 'ro' ? 'Inregistrare gratuita • Fara card bancar' : 'Free registration • No credit card',
    'hero_title_1' => $current_lang === 'ro' ? 'Platesti doar' : 'Pay only',
    'hero_title_2' => $current_lang === 'ro' ? 'cand vinzi' : 'when you sell',
    'hero_subtitle' => $current_lang === 'ro'
        ? 'Comision de la <strong class="text-emerald-400">1%</strong>. Zero costuri fixe. Zero costuri daca nu vinzi. Fara surprize.'
        : 'Commission starting at <strong class="text-emerald-400">1%</strong>. Zero fixed costs. Zero costs if you don\'t sell. No surprises.',
    'benefit_free_reg' => $current_lang === 'ro' ? 'Inregistrare gratuita' : 'Free registration',
    'benefit_no_card' => $current_lang === 'ro' ? 'Fara card bancar' : 'No credit card',
    'benefit_no_cost' => $current_lang === 'ro' ? '0 lei daca nu vinzi' : '0 if you don\'t sell',
    'cta_create_account' => $current_lang === 'ro' ? 'Creeaza cont gratuit' : 'Create free account',
    'cta_see_prices' => $current_lang === 'ro' ? 'Vezi preturile' : 'See prices',
    'scroll_for_details' => $current_lang === 'ro' ? 'Scroll pentru detalii' : 'Scroll for details',

    // Trust badges
    'trust_reg_cost' => $current_lang === 'ro' ? 'cost inregistrare' : 'registration cost',
    'trust_no_sell' => $current_lang === 'ro' ? 'daca nu vinzi' : 'if you don\'t sell',
    'trust_commission' => $current_lang === 'ro' ? 'comision pe vanzare' : 'commission per sale',
    'trust_sla' => $current_lang === 'ro' ? 'SLA garantat' : 'SLA guaranteed',

    // Pricing section
    'pricing_badge' => $current_lang === 'ro' ? 'Modele de preturi' : 'Pricing models',
    'pricing_title' => $current_lang === 'ro' ? 'Alege modelul potrivit pentru tine' : 'Choose the right model for you',
    'pricing_subtitle' => $current_lang === 'ro' ? 'Comision simplu, transparent. Platesti doar din ce incasezi.' : 'Simple, transparent commission. You only pay from what you earn.',
    'per_transaction' => $current_lang === 'ro' ? 'per tranzactie' : 'per transaction',
    'commission_note' => $current_lang === 'ro'
        ? 'Comisionul poate fi <strong class="text-white/60">inclus in pret</strong> sau <strong class="text-white/60">afisat separat</strong> — tu decizi ce functioneaza mai bine pentru publicul tau.'
        : 'Commission can be <strong class="text-white/60">included in price</strong> or <strong class="text-white/60">shown separately</strong> — you decide what works better for your audience.',

    // Plan: Exclusiv
    'plan_exclusiv_badge' => $current_lang === 'ro' ? 'CEL MAI MIC COST' : 'LOWEST COST',
    'plan_exclusiv_name' => $current_lang === 'ro' ? 'Exclusiv' : 'Exclusive',
    'plan_exclusiv_desc' => $current_lang === 'ro' ? 'Lucrezi doar cu Tixello' : 'Work only with Tixello',
    'plan_exclusiv_f1' => $current_lang === 'ro' ? 'Cashflow direct in contul tau' : 'Direct cashflow to your account',
    'plan_exclusiv_f2' => $current_lang === 'ro' ? 'Admin dedicat pe tenant' : 'Dedicated admin on tenant',
    'plan_exclusiv_f3' => $current_lang === 'ro' ? 'eFactura & facturare automata' : 'eInvoice & automatic billing',
    'plan_exclusiv_f4' => $current_lang === 'ro' ? 'Multi-processor plati' : 'Multi-processor payments',
    'plan_exclusiv_f5' => $current_lang === 'ro' ? 'SLA 99.99% garantat' : '99.99% SLA guaranteed',
    'plan_exclusiv_f6' => $current_lang === 'ro' ? 'Suport prioritar in chat' : 'Priority chat support',
    'plan_exclusiv_note' => $current_lang === 'ro' ? 'Pentru organizatori care folosesc exclusiv Tixello' : 'For organizers who exclusively use Tixello',
    'plan_exclusiv_cta' => $current_lang === 'ro' ? 'Incepe cu 1%' : 'Start with 1%',

    // Plan: Flexibil
    'plan_flexibil_badge' => $current_lang === 'ro' ? 'CEL MAI POPULAR' : 'MOST POPULAR',
    'plan_flexibil_name' => $current_lang === 'ro' ? 'Flexibil' : 'Flexible',
    'plan_flexibil_desc' => $current_lang === 'ro' ? 'Fara exclusivitate' : 'No exclusivity',
    'plan_flexibil_f1' => $current_lang === 'ro' ? 'Tot ce include planul Exclusiv' : 'Everything in Exclusive plan',
    'plan_flexibil_f2' => $current_lang === 'ro' ? 'Libertate sa vinzi si pe alte platforme' : 'Freedom to sell on other platforms',
    'plan_flexibil_f3' => $current_lang === 'ro' ? 'Fara constrangeri contractuale' : 'No contractual constraints',
    'plan_flexibil_f4' => $current_lang === 'ro' ? 'Import bilete de pe alte platforme' : 'Import tickets from other platforms',
    'plan_flexibil_f5' => $current_lang === 'ro' ? 'Rapoarte consolidate cross-platform' : 'Consolidated cross-platform reports',
    'plan_flexibil_f6' => $current_lang === 'ro' ? 'Flexibilitate maxima' : 'Maximum flexibility',
    'plan_flexibil_note' => $current_lang === 'ro' ? 'Pentru organizatori care doresc flexibilitate' : 'For organizers who want flexibility',
    'plan_flexibil_cta' => $current_lang === 'ro' ? 'Incepe cu 2%' : 'Start with 2%',

    // Plan: Intermediat
    'plan_intermediat_badge' => $current_lang === 'ro' ? 'FARA FIRMA' : 'NO COMPANY',
    'plan_intermediat_name' => $current_lang === 'ro' ? 'Intermediat' : 'Intermediated',
    'plan_intermediat_desc' => $current_lang === 'ro' ? 'Tixello vinde pentru tine' : 'Tixello sells for you',
    'plan_intermediat_f1' => $current_lang === 'ro' ? 'Tot ce include planul Flexibil' : 'Everything in Flexible plan',
    'plan_intermediat_f2' => $current_lang === 'ro' ? '<strong class="text-white">Fara firma necesara</strong> (SRL/PFA/ONG)' : '<strong class="text-white">No company needed</strong> (LLC/Sole prop/NGO)',
    'plan_intermediat_f3' => $current_lang === 'ro' ? 'Tixello emite facturile pentru tine' : 'Tixello issues invoices for you',
    'plan_intermediat_f4' => $current_lang === 'ro' ? 'Ne ocupam de fiscalizare' : 'We handle tax compliance',
    'plan_intermediat_f5' => $current_lang === 'ro' ? 'Payout lunar garantat' : 'Guaranteed monthly payout',
    'plan_intermediat_f6' => $current_lang === 'ro' ? 'Perfect pentru persoane fizice' : 'Perfect for individuals',
    'plan_intermediat_note' => $current_lang === 'ro' ? 'Pentru artisti, creatori, persoane fizice' : 'For artists, creators, individuals',
    'plan_intermediat_cta' => $current_lang === 'ro' ? 'Incepe cu 3%' : 'Start with 3%',

    // Microservices section
    'services_badge' => $current_lang === 'ro' ? 'Microservicii' : 'Microservices',
    'services_title' => $current_lang === 'ro' ? 'Servicii incluse & add-on-uri' : 'Included services & add-ons',
    'services_subtitle' => $current_lang === 'ro' ? 'Multe functii sunt gratuite. Altele costa putin — lunar sau o singura data.' : 'Many features are free. Others cost a little — monthly or one-time.',
    'free_label' => $current_lang === 'ro' ? 'GRATUIT' : 'FREE',

    // Free services
    'service_efactura' => $current_lang === 'ro' ? 'eFactura automata' : 'Automatic eInvoice',
    'service_efactura_desc' => $current_lang === 'ro' ? 'Generare automata si trimitere la ANAF. Zero efort din partea ta.' : 'Automatic generation and ANAF submission. Zero effort from you.',
    'service_scan' => $current_lang === 'ro' ? 'Validare bilete (scan)' : 'Ticket validation (scan)',
    'service_scan_desc' => $current_lang === 'ro' ? 'Aplicatie de scanare QR pentru Android/iOS. Functioneaza si offline.' : 'QR scanning app for Android/iOS. Works offline too.',
    'service_analytics' => $current_lang === 'ro' ? 'Analytics & rapoarte' : 'Analytics & reports',
    'service_analytics_desc' => $current_lang === 'ro' ? 'Dashboard live, export date, tracking surse, conversii, GTM propriu.' : 'Live dashboard, data export, source tracking, conversions, own GTM.',
    'service_email' => $current_lang === 'ro' ? 'E-mail marketing' : 'Email marketing',
    'service_email_desc' => $current_lang === 'ro' ? 'Campanii email, segmente, automatizari, newsletter pentru participanti.' : 'Email campaigns, segments, automations, newsletter for attendees.',
    'service_seating' => $current_lang === 'ro' ? 'Harti de locuri (seating)' : 'Seating maps',
    'service_seating_desc' => $current_lang === 'ro' ? 'Seat maps interactive cu blocari pe zone, randuri, locuri individuale.' : 'Interactive seat maps with zone, row, individual seat blocking.',
    'service_promo' => $current_lang === 'ro' ? 'Coduri promotionale' : 'Promo codes',
    'service_promo_desc' => $current_lang === 'ro' ? 'Discount codes, early bird, pachete VIP, grupuri, coduri de acces.' : 'Discount codes, early bird, VIP packages, groups, access codes.',

    // Website options
    'website_title' => $current_lang === 'ro' ? 'Optiuni website' : 'Website options',
    'website_subtitle' => $current_lang === 'ro' ? 'Nu ai website propriu? Nicio problema.' : 'Don\'t have your own website? No problem.',
    'website_subdomain' => $current_lang === 'ro' ? 'Subdomeniu gratuit' : 'Free subdomain',
    'website_subdomain_desc' => $current_lang === 'ro' ? 'Website generat automat pe infrastructura Tixello' : 'Auto-generated website on Tixello infrastructure',
    'website_domain' => $current_lang === 'ro' ? 'Domeniu propriu' : 'Custom domain',
    'website_domain_desc' => $current_lang === 'ro' ? 'Achizitionam si configuram domeniul pentru tine' : 'We purchase and configure the domain for you',
    'website_hosting' => $current_lang === 'ro' ? 'Gazduire domeniu' : 'Domain hosting',
    'website_hosting_desc' => $current_lang === 'ro' ? 'Hosting rapid, SSL inclus, backup automat' : 'Fast hosting, SSL included, automatic backup',
    'website_hosting_location' => $current_lang === 'ro' ? 'Pe serverele Tixello' : 'On Tixello servers',
    'year' => $current_lang === 'ro' ? '/an' : '/year',
    'month' => $current_lang === 'ro' ? '/luna' : '/month',

    // White Label
    'wl_badge' => 'Enterprise',
    'wl_title' => 'White Label',
    'wl_title_2' => $current_lang === 'ro' ? '100% al tau' : '100% yours',
    'wl_desc' => $current_lang === 'ro'
        ? 'Vrei sa integrezi sistemul Tixello in propria ta platforma de ticketing? Un <strong class="text-white">white label super performant</strong> cu toate optiunile integrate, sub brandul tau.'
        : 'Want to integrate Tixello into your own ticketing platform? A <strong class="text-white">super performant white label</strong> with all options integrated, under your brand.',
    'wl_f1' => $current_lang === 'ro' ? 'Branding complet personalizat' : 'Fully customized branding',
    'wl_f2' => $current_lang === 'ro' ? 'Toate functionalitatile Tixello incluse' : 'All Tixello features included',
    'wl_f3' => $current_lang === 'ro' ? 'API complet & documentatie' : 'Complete API & documentation',
    'wl_f4' => $current_lang === 'ro' ? 'Suport dedicat & SLA enterprise' : 'Dedicated support & enterprise SLA',
    'wl_f5' => $current_lang === 'ro' ? 'Infrastructura dedicata' : 'Dedicated infrastructure',
    'wl_cta' => $current_lang === 'ro' ? 'Discuta cu noi' : 'Talk to us',
    'wl_license' => $current_lang === 'ro' ? 'Licenta one-time' : 'One-time license',
    'wl_payment' => $current_lang === 'ro' ? 'Plata unica, licenta perpetua' : 'Single payment, perpetual license',
    'wl_optional' => $current_lang === 'ro' ? 'Optional (costuri separate)' : 'Optional (separate costs)',
    'wl_opt_ui' => $current_lang === 'ro' ? 'Customizare UI' : 'UI Customization',
    'wl_opt_features' => $current_lang === 'ro' ? 'Features extra' : 'Extra Features',

    // Calculator
    'calc_title' => $current_lang === 'ro' ? 'Cat vei plati?' : 'How much will you pay?',
    'calc_subtitle' => $current_lang === 'ro' ? 'Un exemplu simplu pentru un eveniment de succes' : 'A simple example for a successful event',
    'calc_tickets' => $current_lang === 'ro' ? 'Numar bilete vandute' : 'Number of tickets sold',
    'calc_price' => $current_lang === 'ro' ? 'Pret mediu bilet (lei)' : 'Average ticket price (RON)',
    'calc_plan' => $current_lang === 'ro' ? 'Plan ales' : 'Selected plan',
    'calc_revenue' => $current_lang === 'ro' ? 'Venituri brute' : 'Gross revenue',
    'calc_commission' => $current_lang === 'ro' ? 'Comision Tixello' : 'Tixello commission',
    'calc_you_get' => $current_lang === 'ro' ? 'Tu primesti' : 'You receive',
    'lei' => $current_lang === 'ro' ? 'lei' : 'RON',

    // FAQ
    'faq_badge' => 'FAQ',
    'faq_title' => $current_lang === 'ro' ? 'Intrebari frecvente despre preturi' : 'Frequently asked questions about pricing',
    'faq_q1' => $current_lang === 'ro' ? 'Chiar nu platesc nimic daca nu vand?' : 'Do I really pay nothing if I don\'t sell?',
    'faq_a1' => $current_lang === 'ro'
        ? '<strong class="text-emerald-400">Exact.</strong> Zero comision daca nu vinzi niciun bilet. Nicio taxa de setup, nicio taxa lunara, nicio obligatie. Platesti doar procentul din tranzactiile efectuate.'
        : '<strong class="text-emerald-400">Exactly.</strong> Zero commission if you don\'t sell any tickets. No setup fee, no monthly fee, no obligation. You only pay the percentage from completed transactions.',
    'faq_q2' => $current_lang === 'ro' ? 'Ce inseamna „exclusiv" la planul de 1%?' : 'What does "exclusive" mean for the 1% plan?',
    'faq_a2' => $current_lang === 'ro'
        ? 'Inseamna ca pentru evenimentul respectiv vinzi bilete <strong class="text-white">doar prin Tixello</strong>. Nu vinzi in paralel pe iaBilet, Bilete.ro sau alte platforme. In schimb, beneficiezi de cel mai mic comision posibil.'
        : 'It means for that event you sell tickets <strong class="text-white">only through Tixello</strong>. You don\'t sell in parallel on other platforms. In return, you get the lowest possible commission.',
    'faq_q3' => $current_lang === 'ro' ? 'Nu am firma. Pot sa vand bilete?' : 'I don\'t have a company. Can I sell tickets?',
    'faq_a3' => $current_lang === 'ro'
        ? '<strong class="text-cyan-400">Da!</strong> Cu planul Intermediat (3%), Tixello intermediaza vanzarile pentru tine. Noi emitem facturile, ne ocupam de fiscalizare, si tu primesti banii lunar. Perfect pentru artisti, creatori, persoane fizice.'
        : '<strong class="text-cyan-400">Yes!</strong> With the Intermediated plan (3%), Tixello handles sales for you. We issue invoices, handle tax compliance, and you receive money monthly. Perfect for artists, creators, individuals.',
    'faq_q4' => $current_lang === 'ro' ? 'Am nevoie de card bancar pentru inregistrare?' : 'Do I need a credit card to register?',
    'faq_a4' => $current_lang === 'ro'
        ? '<strong class="text-emerald-400">Nu.</strong> Inregistrarea este 100% gratuita si nu necesita card bancar. Creezi cont, configurezi evenimentul, si platesti comision doar din vanzarile efectuate.'
        : '<strong class="text-emerald-400">No.</strong> Registration is 100% free and doesn\'t require a credit card. Create an account, configure the event, and pay commission only from completed sales.',
    'faq_q5' => $current_lang === 'ro' ? 'Pot include comisionul in pretul biletului?' : 'Can I include the commission in the ticket price?',
    'faq_a5' => $current_lang === 'ro'
        ? '<strong class="text-white">Da, tu decizi.</strong> Poti alege sa incluzi comisionul in pretul afisat (clientul vede un pret final) sau sa-l afisezi separat (clientul vede pret + taxa serviciu). Poti chiar sa testezi A/B care varianta converteste mai bine.'
        : '<strong class="text-white">Yes, you decide.</strong> You can choose to include the commission in the displayed price (customer sees final price) or show it separately (customer sees price + service fee). You can even A/B test which version converts better.',
    'faq_q6' => $current_lang === 'ro' ? 'Ce include White Label-ul de 20.000€?' : 'What does the €20,000 White Label include?',
    'faq_a6' => $current_lang === 'ro'
        ? 'Licenta perpetua pentru platforma completa Tixello sub brandul tau: admin, checkout, validare, rapoarte, eFactura, multi-processor, API, documentatie, suport enterprise. Customizarile de interfata sau feature-uri extra se discuta separat.'
        : 'Perpetual license for the complete Tixello platform under your brand: admin, checkout, validation, reports, eInvoice, multi-processor, API, documentation, enterprise support. UI customizations or extra features are discussed separately.',

    // Final CTA
    'cta_badge' => $current_lang === 'ro' ? 'Fara card bancar • Fara obligatii' : 'No credit card • No obligations',
    'cta_title_1' => $current_lang === 'ro' ? 'Gata sa incepi' : 'Ready to start',
    'cta_title_2' => $current_lang === 'ro' ? 'fara niciun risc?' : 'with no risk?',
    'cta_subtitle' => $current_lang === 'ro'
        ? 'Creeaza cont gratuit, configureaza evenimentul, si platesti doar cand vinzi. Simplu.'
        : 'Create a free account, configure your event, and pay only when you sell. Simple.',
    'cta_zero_setup' => $current_lang === 'ro' ? '0 lei setup' : '0 setup',
    'cta_zero_nosell' => $current_lang === 'ro' ? '0 lei daca nu vinzi' : '0 if you don\'t sell',

    // Footer
    'footer_tagline' => 'Made with love for events, in the EU.',
    'footer_terms' => $current_lang === 'ro' ? 'Termeni' : 'Terms',
    'footer_privacy' => $current_lang === 'ro' ? 'Confidentialitate' : 'Privacy',
];

get_header();
?>

<main class="antialiased bg-zinc-950 text-zinc-200 scroll-smooth" x-data="{ open: 1 }">

    <!-- ==================== HERO SECTION ==================== -->
    <section class="relative pb-20 overflow-hidden pt-28 sm:pt-36 sm:pb-28 bg-zinc-950">
        <!-- Background effects -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_50%_at_50%_-20%,rgba(139,92,246,0.15),transparent_60%),radial-gradient(ellipse_60%_40%_at_70%_100%,rgba(6,182,212,0.1),transparent),radial-gradient(ellipse_40%_30%_at_30%_80%,rgba(16,185,129,0.08),transparent)]"></div>
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:50px_50px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,black,transparent)]"></div>

        <!-- Floating elements -->
        <div class="absolute w-32 h-32 rounded-full top-32 left-10 bg-violet-500/10 blur-3xl animate-float"></div>
        <div class="absolute w-48 h-48 rounded-full top-48 right-16 bg-cyan-500/10 blur-3xl animate-float-delayed"></div>
        <div class="absolute w-40 h-40 rounded-full bottom-24 left-1/4 bg-emerald-500/10 blur-3xl animate-float-slow"></div>

        <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">

                <!-- Badge -->
                <div class="animate-fade-in inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-white/[0.03] backdrop-blur-xl border border-white/[0.08] mb-8">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-emerald-400"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="text-sm font-medium text-white/80"><?php echo esc_html( $t['badge_text'] ); ?></span>
                </div>

                <!-- Main headline -->
                <h1 class="mb-6 text-4xl font-black leading-tight text-white animate-fade-in-up sm:text-5xl lg:text-6xl xl:text-7xl">
                    <span class="block"><?php echo esc_html( $t['hero_title_1'] ); ?></span>
                    <span class="block bg-gradient-to-r from-violet-500 via-cyan-400 to-emerald-400 bg-[length:300%_300%] bg-clip-text text-transparent animate-gradient-flow"><?php echo esc_html( $t['hero_title_2'] ); ?></span>
                </h1>

                <p class="animate-fade-in-up text-xl sm:text-2xl text-white/60 max-w-3xl mx-auto mb-8 leading-relaxed [animation-delay:0.1s]">
                    <?php echo wp_kses_post( $t['hero_subtitle'] ); ?>
                </p>

                <!-- Key benefits -->
                <div class="animate-fade-in-up flex flex-wrap items-center justify-center gap-4 sm:gap-8 mb-12 [animation-delay:0.2s]">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-white/70"><?php echo esc_html( $t['benefit_free_reg'] ); ?></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-white/70"><?php echo esc_html( $t['benefit_no_card'] ); ?></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-white/70"><?php echo esc_html( $t['benefit_no_cost'] ); ?></span>
                    </div>
                </div>

                <!-- CTA -->
                <div class="animate-fade-in-up flex flex-col sm:flex-row items-center justify-center gap-4 [animation-delay:0.3s]">
                    <a href="/signup" class="group relative overflow-hidden w-full sm:w-auto px-8 py-5 rounded-2xl bg-gradient-to-br from-violet-500 to-violet-600 text-white font-semibold text-lg flex items-center justify-center gap-2 shadow-[0_4px_20px_rgba(139,92,246,0.4)] hover:shadow-[0_8px_30px_rgba(139,92,246,0.5)] hover:-translate-y-0.5 transition-all duration-300">
                        <span><?php echo esc_html( $t['cta_create_account'] ); ?></span>
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                    <a href="#pricing" class="w-full px-8 py-5 font-semibold text-white transition-all border sm:w-auto rounded-2xl border-white/20 hover:bg-white/5">
                        <?php echo esc_html( $t['cta_see_prices'] ); ?>
                    </a>
                </div>

                <!-- Scroll indicator -->
                <div class="animate-fade-in mt-16 flex flex-col items-center gap-2 text-white/30 [animation-delay:0.4s]">
                    <span class="text-xs tracking-wider uppercase"><?php echo esc_html( $t['scroll_for_details'] ); ?></span>
                    <svg class="w-5 h-5 animate-scroll-down" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TRUST BADGES ==================== -->
    <section class="relative py-12 border-t border-b bg-zinc-900/50 border-white/5">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-16">
                <div class="text-center">
                    <p class="mb-1 text-3xl font-black text-white sm:text-4xl tabular-nums">0 <?php echo $current_lang === 'ro' ? 'lei' : ''; ?></p>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['trust_reg_cost'] ); ?></p>
                </div>
                <div class="hidden w-px h-12 sm:block bg-white/10"></div>
                <div class="text-center">
                    <p class="mb-1 text-3xl font-black text-white sm:text-4xl tabular-nums">0 <?php echo $current_lang === 'ro' ? 'lei' : ''; ?></p>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['trust_no_sell'] ); ?></p>
                </div>
                <div class="hidden w-px h-12 sm:block bg-white/10"></div>
                <div class="text-center">
                    <p class="text-3xl sm:text-4xl font-black bg-gradient-to-r from-violet-500 via-cyan-400 to-emerald-400 bg-[length:300%_300%] bg-clip-text text-transparent animate-gradient-flow mb-1 tabular-nums">1-3%</p>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['trust_commission'] ); ?></p>
                </div>
                <div class="hidden w-px h-12 sm:block bg-white/10"></div>
                <div class="text-center">
                    <p class="mb-1 text-3xl font-black text-white sm:text-4xl tabular-nums">99.99%</p>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['trust_sla'] ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PRICING CARDS ==================== -->
    <section id="pricing" class="relative py-24 sm:py-32 bg-zinc-950">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 rounded-full left-1/3 w-96 h-96 bg-violet-600/5 blur-3xl"></div>
            <div class="absolute bottom-0 rounded-full right-1/3 w-96 h-96 bg-cyan-600/5 blur-3xl"></div>
        </div>

        <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="mb-16 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-violet-500/10 border-violet-500/20">
                    <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-sm font-medium text-violet-400"><?php echo esc_html( $t['pricing_badge'] ); ?></span>
                </div>
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                    <?php echo esc_html( $t['pricing_title'] ); ?>
                </h2>
                <p class="max-w-2xl mx-auto text-xl text-white/50">
                    <?php echo esc_html( $t['pricing_subtitle'] ); ?>
                </p>
            </div>

            <!-- Pricing Cards -->
            <div class="grid max-w-6xl gap-8 mx-auto lg:grid-cols-3">

                <!-- 2% Flexibil (POPULAR) -->
                <div class="relative p-8 rounded-3xl bg-white/[0.03] backdrop-blur-xl border border-white/10 hover:border-emerald-500/30 hover:-translate-y-3 transition-all duration-400">
                    <div class="absolute top-0 -translate-x-1/2 -translate-y-1/2 left-1/2">
                        <span class="px-4 py-1.5 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-semibold border border-emerald-500/30">
                            <?php echo esc_html( $t['plan_flexibil_badge'] ); ?>
                        </span>
                    </div>

                    <div class="pt-4 mb-8 text-center">
                        <h3 class="mb-2 text-xl font-bold text-white"><?php echo esc_html( $t['plan_flexibil_name'] ); ?></h3>
                        <p class="mb-6 text-sm text-white/50"><?php echo esc_html( $t['plan_flexibil_desc'] ); ?></p>
                        <div class="flex items-end justify-center gap-1">
                            <span class="text-6xl font-black text-emerald-400">2</span>
                            <span class="mb-2 text-3xl font-bold text-emerald-400">%</span>
                        </div>
                        <p class="mt-2 text-sm text-white/40"><?php echo esc_html( $t['per_transaction'] ); ?></p>
                    </div>

                    <div class="mb-8 space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_flexibil_f1'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_flexibil_f2'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_flexibil_f3'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_flexibil_f4'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_flexibil_f5'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_flexibil_f6'] ); ?></span>
                        </div>
                    </div>

                    <p class="mb-6 text-xs text-center text-white/30">
                        <?php echo esc_html( $t['plan_flexibil_note'] ); ?>
                    </p>

                    <a href="/signup" class="block w-full py-4 font-semibold text-center transition-all border rounded-xl bg-emerald-500/10 border-emerald-500/30 text-emerald-400 hover:bg-emerald-500/20">
                        <?php echo esc_html( $t['plan_flexibil_cta'] ); ?>
                    </a>
                </div>

                <!-- 1% Exclusiv -->
                <div class="relative p-8 rounded-3xl bg-white/[0.03] backdrop-blur-xl border border-white/10 hover:border-emerald-500/30 hover:-translate-y-3 transition-all duration-400">
                    <div class="absolute top-0 -translate-x-1/2 -translate-y-1/2 left-1/2">
                        <span class="px-5 py-2 rounded-full bg-gradient-to-r from-violet-500 via-violet-400 to-violet-500 bg-[length:200%_100%] animate-badge-shine text-white text-sm font-semibold shadow-lg shadow-violet-500/30">
                            ⭐ <?php echo esc_html( $t['plan_exclusiv_badge'] ); ?>
                        </span>
                    </div>

                    <div class="pt-4 mb-8 text-center">
                        <h3 class="mb-2 text-xl font-bold text-white"><?php echo esc_html( $t['plan_exclusiv_name'] ); ?></h3>
                        <p class="mb-6 text-sm text-white/50"><?php echo esc_html( $t['plan_exclusiv_desc'] ); ?></p>
                        <div class="flex items-end justify-center gap-1">
                            <span class="text-6xl font-black text-violet-400">1</span>
                            <span class="mb-2 text-3xl font-bold text-violet-400">%</span>
                        </div>
                        <p class="mt-2 text-sm text-white/40"><?php echo esc_html( $t['per_transaction'] ); ?></p>
                    </div>

                    <div class="mb-8 space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-violet-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_exclusiv_f1'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-violet-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_exclusiv_f2'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-violet-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_exclusiv_f3'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-violet-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_exclusiv_f4'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-violet-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_exclusiv_f5'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-violet-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_exclusiv_f6'] ); ?></span>
                        </div>
                    </div>

                    <p class="mb-6 text-xs text-center text-white/30">
                        <?php echo esc_html( $t['plan_exclusiv_note'] ); ?>
                    </p>

                    <a href="/signup" class="relative overflow-hidden block w-full py-4 rounded-xl bg-gradient-to-br from-violet-500 to-violet-600 text-white font-semibold text-center shadow-[0_4px_20px_rgba(139,92,246,0.4)] hover:shadow-[0_8px_30px_rgba(139,92,246,0.5)] hover:-translate-y-0.5 transition-all">
                        <?php echo esc_html( $t['plan_exclusiv_cta'] ); ?>
                    </a>
                </div>

                <!-- 3% Intermediat -->
                <div class="relative p-8 rounded-3xl bg-white/[0.03] backdrop-blur-xl border border-white/10 hover:border-cyan-500/30 hover:-translate-y-3 transition-all duration-400">
                    <div class="absolute top-0 -translate-x-1/2 -translate-y-1/2 left-1/2">
                        <span class="px-4 py-1.5 rounded-full bg-cyan-500/20 text-cyan-400 text-xs font-semibold border border-cyan-500/30">
                            <?php echo esc_html( $t['plan_intermediat_badge'] ); ?>
                        </span>
                    </div>

                    <div class="pt-4 mb-8 text-center">
                        <h3 class="mb-2 text-xl font-bold text-white"><?php echo esc_html( $t['plan_intermediat_name'] ); ?></h3>
                        <p class="mb-6 text-sm text-white/50"><?php echo esc_html( $t['plan_intermediat_desc'] ); ?></p>
                        <div class="flex items-end justify-center gap-1">
                            <span class="text-6xl font-black text-cyan-400">3</span>
                            <span class="mb-2 text-3xl font-bold text-cyan-400">%</span>
                        </div>
                        <p class="mt-2 text-sm text-white/40"><?php echo esc_html( $t['per_transaction'] ); ?></p>
                    </div>

                    <div class="mb-8 space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_intermediat_f1'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo wp_kses_post( $t['plan_intermediat_f2'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_intermediat_f3'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_intermediat_f4'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_intermediat_f5'] ); ?></span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm text-white/70"><?php echo esc_html( $t['plan_intermediat_f6'] ); ?></span>
                        </div>
                    </div>

                    <p class="mb-6 text-xs text-center text-white/30">
                        <?php echo esc_html( $t['plan_intermediat_note'] ); ?>
                    </p>

                    <a href="/signup" class="block w-full py-4 font-semibold text-center transition-all border rounded-xl bg-cyan-500/10 border-cyan-500/30 text-cyan-400 hover:bg-cyan-500/20">
                        <?php echo esc_html( $t['plan_intermediat_cta'] ); ?>
                    </a>
                </div>

            </div>

            <!-- Note -->
            <div class="mt-12 text-center">
                <p class="text-sm text-white/40">
                    <?php echo wp_kses_post( $t['commission_note'] ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== MICROSERVICES ==================== -->
    <section id="services" class="relative py-24 border-t sm:py-32 bg-zinc-900/30 border-white/5">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="mb-16 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-emerald-500/10 border-emerald-500/20">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z"/></svg>
                    <span class="text-sm font-medium text-emerald-400"><?php echo esc_html( $t['services_badge'] ); ?></span>
                </div>
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                    <?php echo esc_html( $t['services_title'] ); ?>
                </h2>
                <p class="max-w-2xl mx-auto text-xl text-white/50">
                    <?php echo esc_html( $t['services_subtitle'] ); ?>
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                <!-- eFactura -->
                <div class="p-6 rounded-2xl bg-white/[0.03] backdrop-blur-xl border border-emerald-500/20 hover:-translate-y-1 hover:border-violet-500/30 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-500/20">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white"><?php echo esc_html( $t['service_efactura'] ); ?></h3>
                            <span class="inline-block px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 text-xs font-semibold animate-free-pulse"><?php echo esc_html( $t['free_label'] ); ?></span>
                        </div>
                    </div>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['service_efactura_desc'] ); ?></p>
                </div>

                <!-- Scan -->
                <div class="p-6 rounded-2xl bg-white/[0.03] backdrop-blur-xl border border-emerald-500/20 hover:-translate-y-1 hover:border-violet-500/30 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-500/20">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white"><?php echo esc_html( $t['service_scan'] ); ?></h3>
                            <span class="inline-block px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 text-xs font-semibold animate-free-pulse"><?php echo esc_html( $t['free_label'] ); ?></span>
                        </div>
                    </div>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['service_scan_desc'] ); ?></p>
                </div>

                <!-- Analytics -->
                <div class="p-6 rounded-2xl bg-white/[0.03] backdrop-blur-xl border border-emerald-500/20 hover:-translate-y-1 hover:border-violet-500/30 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-500/20">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white"><?php echo esc_html( $t['service_analytics'] ); ?></h3>
                            <span class="inline-block px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 text-xs font-semibold animate-free-pulse"><?php echo esc_html( $t['free_label'] ); ?></span>
                        </div>
                    </div>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['service_analytics_desc'] ); ?></p>
                </div>

                <!-- Email -->
                <div class="p-6 rounded-2xl bg-white/[0.03] backdrop-blur-xl border border-emerald-500/20 hover:-translate-y-1 hover:border-violet-500/30 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-500/20">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white"><?php echo esc_html( $t['service_email'] ); ?></h3>
                            <span class="inline-block px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 text-xs font-semibold animate-free-pulse"><?php echo esc_html( $t['free_label'] ); ?></span>
                        </div>
                    </div>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['service_email_desc'] ); ?></p>
                </div>

                <!-- Seating -->
                <div class="p-6 rounded-2xl bg-white/[0.03] backdrop-blur-xl border border-emerald-500/20 hover:-translate-y-1 hover:border-violet-500/30 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-500/20">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white"><?php echo esc_html( $t['service_seating'] ); ?></h3>
                            <span class="inline-block px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 text-xs font-semibold animate-free-pulse"><?php echo esc_html( $t['free_label'] ); ?></span>
                        </div>
                    </div>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['service_seating_desc'] ); ?></p>
                </div>

                <!-- Promo codes -->
                <div class="p-6 rounded-2xl bg-white/[0.03] backdrop-blur-xl border border-emerald-500/20 hover:-translate-y-1 hover:border-violet-500/30 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-emerald-500/20">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white"><?php echo esc_html( $t['service_promo'] ); ?></h3>
                            <span class="inline-block px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 text-xs font-semibold animate-free-pulse"><?php echo esc_html( $t['free_label'] ); ?></span>
                        </div>
                    </div>
                    <p class="text-sm text-white/50"><?php echo esc_html( $t['service_promo_desc'] ); ?></p>
                </div>

            </div>

            <!-- Website Options -->
            <div class="mt-16">
                <div class="mb-10 text-center">
                    <h3 class="mb-2 text-2xl font-bold text-white"><?php echo esc_html( $t['website_title'] ); ?></h3>
                    <p class="text-white/50"><?php echo esc_html( $t['website_subtitle'] ); ?></p>
                </div>

                <div class="grid max-w-4xl gap-6 mx-auto md:grid-cols-3">

                    <div class="p-6 rounded-2xl bg-white/[0.03] backdrop-blur-xl border border-white/10 text-center hover:-translate-y-1 transition-all duration-300">
                        <div class="flex items-center justify-center mx-auto mb-4 w-14 h-14 rounded-2xl bg-emerald-500/10">
                            <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                        </div>
                        <h4 class="mb-2 font-bold text-white"><?php echo esc_html( $t['website_subdomain'] ); ?></h4>
                        <p class="mb-2 text-3xl font-black text-emerald-400">0€</p>
                        <p class="text-sm text-white/50">eveniment.tics.ro</p>
                        <p class="mt-3 text-xs text-white/30"><?php echo esc_html( $t['website_subdomain_desc'] ); ?></p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/[0.03] backdrop-blur-xl border border-violet-500/20 text-center hover:-translate-y-1 transition-all duration-300">
                        <div class="flex items-center justify-center mx-auto mb-4 w-14 h-14 rounded-2xl bg-violet-500/10">
                            <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>
                        </div>
                        <h4 class="mb-2 font-bold text-white"><?php echo esc_html( $t['website_domain'] ); ?></h4>
                        <p class="mb-2 text-3xl font-black text-violet-400">15€<span class="text-lg text-white/40"><?php echo esc_html( $t['year'] ); ?></span></p>
                        <p class="text-sm text-white/50">evenimentul-tau.ro</p>
                        <p class="mt-3 text-xs text-white/30"><?php echo esc_html( $t['website_domain_desc'] ); ?></p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/[0.03] backdrop-blur-xl border border-cyan-500/20 text-center hover:-translate-y-1 transition-all duration-300">
                        <div class="flex items-center justify-center mx-auto mb-4 w-14 h-14 rounded-2xl bg-cyan-500/10">
                            <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z"/></svg>
                        </div>
                        <h4 class="mb-2 font-bold text-white"><?php echo esc_html( $t['website_hosting'] ); ?></h4>
                        <p class="mb-2 text-3xl font-black text-cyan-400">2€<span class="text-lg text-white/40"><?php echo esc_html( $t['month'] ); ?></span></p>
                        <p class="text-sm text-white/50"><?php echo esc_html( $t['website_hosting_location'] ); ?></p>
                        <p class="mt-3 text-xs text-white/30"><?php echo esc_html( $t['website_hosting_desc'] ); ?></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ==================== WHITE LABEL ==================== -->
    <section id="whitelabel" class="relative py-24 overflow-hidden border-t sm:py-32 bg-zinc-950 border-white/5">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-violet-600/10 to-cyan-600/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">

            <div class="p-1 rounded-3xl bg-gradient-to-br from-violet-500/20 to-cyan-500/20 animate-glow-pulse-pricing">
                <div class="p-8 sm:p-12 lg:p-16 rounded-[22px] bg-zinc-950">

                    <div class="grid items-center gap-12 lg:grid-cols-2">

                        <div>
                            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-violet-500/10 border-violet-500/20">
                                <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/></svg>
                                <span class="text-sm font-medium text-violet-400"><?php echo esc_html( $t['wl_badge'] ); ?></span>
                            </div>

                            <h2 class="mb-6 text-3xl font-black leading-tight text-white sm:text-4xl lg:text-5xl">
                                <?php echo esc_html( $t['wl_title'] ); ?>
                                <span class="block bg-gradient-to-r from-violet-500 via-cyan-400 to-emerald-400 bg-[length:300%_300%] bg-clip-text text-transparent animate-gradient-flow"><?php echo esc_html( $t['wl_title_2'] ); ?></span>
                            </h2>

                            <p class="mb-8 text-lg leading-relaxed text-white/60">
                                <?php echo wp_kses_post( $t['wl_desc'] ); ?>
                            </p>

                            <div class="mb-8 space-y-4">
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-violet-400 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span class="text-white/70"><?php echo esc_html( $t['wl_f1'] ); ?></span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-violet-400 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span class="text-white/70"><?php echo esc_html( $t['wl_f2'] ); ?></span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-violet-400 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span class="text-white/70"><?php echo esc_html( $t['wl_f3'] ); ?></span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-violet-400 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span class="text-white/70"><?php echo esc_html( $t['wl_f4'] ); ?></span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-violet-400 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span class="text-white/70"><?php echo esc_html( $t['wl_f5'] ); ?></span>
                                </div>
                            </div>

                            <a href="/contact" class="relative overflow-hidden inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-gradient-to-br from-violet-500 to-violet-600 text-white font-semibold shadow-[0_4px_20px_rgba(139,92,246,0.4)] hover:shadow-[0_8px_30px_rgba(139,92,246,0.5)] hover:-translate-y-0.5 transition-all duration-300">
                                <span><?php echo esc_html( $t['wl_cta'] ); ?></span>
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            </a>
                        </div>

                        <div class="text-center lg:text-right">
                            <div class="inline-block p-8 rounded-3xl bg-white/[0.05] backdrop-blur-[30px] border border-white/10">
                                <p class="mb-2 text-sm tracking-wider uppercase text-white/40"><?php echo esc_html( $t['wl_license'] ); ?></p>
                                <div class="flex items-end justify-center gap-2 mb-4 lg:justify-end">
                                    <span class="text-6xl font-black text-white sm:text-7xl">20.000</span>
                                    <span class="mb-3 text-3xl font-bold text-white/40">€</span>
                                </div>
                                <p class="mb-6 text-sm text-white/40"><?php echo esc_html( $t['wl_payment'] ); ?></p>

                                <div class="pt-6 border-t border-white/10">
                                    <p class="mb-3 text-xs text-white/30"><?php echo esc_html( $t['wl_optional'] ); ?></p>
                                    <div class="flex flex-wrap justify-center gap-2 lg:justify-end">
                                        <span class="px-3 py-1 text-xs rounded-full bg-white/5 text-white/50"><?php echo esc_html( $t['wl_opt_ui'] ); ?></span>
                                        <span class="px-3 py-1 text-xs rounded-full bg-white/5 text-white/50"><?php echo esc_html( $t['wl_opt_features'] ); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CALCULATOR SECTION ==================== -->
    <section class="relative py-24 border-t bg-zinc-900/30 border-white/5">
        <div class="max-w-4xl px-4 mx-auto sm:px-6 lg:px-8">

            <div class="mb-12 text-center">
                <h2 class="mb-4 text-2xl font-bold text-white sm:text-3xl"><?php echo esc_html( $t['calc_title'] ); ?></h2>
                <p class="text-white/50"><?php echo esc_html( $t['calc_subtitle'] ); ?></p>
            </div>

            <div class="p-8 rounded-3xl bg-white/[0.05] backdrop-blur-[30px] border border-white/10" x-data="{ tickets: 500, price: 100, plan: 2 }">

                <div class="grid gap-8 mb-8 md:grid-cols-2">
                    <div>
                        <label class="block mb-3 text-sm font-medium text-white/70"><?php echo esc_html( $t['calc_tickets'] ); ?></label>
                        <input type="range" min="100" max="5000" step="100" x-model="tickets" class="w-full h-2 rounded-lg appearance-none cursor-pointer bg-white/10 accent-violet-500">
                        <div class="flex justify-between mt-2">
                            <span class="text-xs text-white/40">100</span>
                            <span class="text-lg font-bold text-white" x-text="tickets.toLocaleString()"></span>
                            <span class="text-xs text-white/40">5000</span>
                        </div>
                    </div>

                    <div>
                        <label class="block mb-3 text-sm font-medium text-white/70"><?php echo esc_html( $t['calc_price'] ); ?></label>
                        <input type="range" min="20" max="500" step="10" x-model="price" class="w-full h-2 rounded-lg appearance-none cursor-pointer bg-white/10 accent-violet-500">
                        <div class="flex justify-between mt-2">
                            <span class="text-xs text-white/40">20</span>
                            <span class="text-lg font-bold text-white" x-text="price + ' <?php echo esc_js( $t['lei'] ); ?>'"></span>
                            <span class="text-xs text-white/40">500</span>
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <label class="block mb-3 text-sm font-medium text-white/70"><?php echo esc_html( $t['calc_plan'] ); ?></label>
                    <div class="flex gap-4">
                        <button @click="plan = 1" :class="plan === 1 ? 'bg-violet-500/20 border-violet-500/50 text-violet-400' : 'bg-white/5 border-white/10 text-white/50'" class="flex-1 py-3 font-semibold transition-all border rounded-xl">1% <?php echo esc_html( $t['plan_exclusiv_name'] ); ?></button>
                        <button @click="plan = 2" :class="plan === 2 ? 'bg-emerald-500/20 border-emerald-500/50 text-emerald-400' : 'bg-white/5 border-white/10 text-white/50'" class="flex-1 py-3 font-semibold transition-all border rounded-xl">2% <?php echo esc_html( $t['plan_flexibil_name'] ); ?></button>
                        <button @click="plan = 3" :class="plan === 3 ? 'bg-cyan-500/20 border-cyan-500/50 text-cyan-400' : 'bg-white/5 border-white/10 text-white/50'" class="flex-1 py-3 font-semibold transition-all border rounded-xl">3% <?php echo esc_html( $t['plan_intermediat_name'] ); ?></button>
                    </div>
                </div>

                <div class="grid sm:grid-cols-3 gap-6 p-6 rounded-2xl bg-white/[0.03] border border-white/10">
                    <div class="text-center">
                        <p class="mb-1 text-sm text-white/40"><?php echo esc_html( $t['calc_revenue'] ); ?></p>
                        <p class="text-2xl font-bold text-white" x-text="(tickets * price).toLocaleString() + ' <?php echo esc_js( $t['lei'] ); ?>'"></p>
                    </div>
                    <div class="text-center">
                        <p class="mb-1 text-sm text-white/40"><?php echo esc_html( $t['calc_commission'] ); ?></p>
                        <p class="text-2xl font-bold" :class="plan === 1 ? 'text-emerald-400' : (plan === 2 ? 'text-violet-400' : 'text-cyan-400')" x-text="Math.round(tickets * price * plan / 100).toLocaleString() + ' <?php echo esc_js( $t['lei'] ); ?>'"></p>
                    </div>
                    <div class="text-center">
                        <p class="mb-1 text-sm text-white/40"><?php echo esc_html( $t['calc_you_get'] ); ?></p>
                        <p class="text-2xl font-bold text-emerald-400" x-text="Math.round(tickets * price * (100 - plan) / 100).toLocaleString() + ' <?php echo esc_js( $t['lei'] ); ?>'"></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== FAQ ==================== -->
    <section id="faq" class="relative py-24 border-t sm:py-32 bg-zinc-950 border-white/5">
        <div class="max-w-4xl px-4 mx-auto sm:px-6 lg:px-8">

            <div class="mb-16 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-violet-500/10 border-violet-500/20">
                    <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-sm font-medium text-violet-400"><?php echo esc_html( $t['faq_badge'] ); ?></span>
                </div>
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl"><?php echo esc_html( $t['faq_title'] ); ?></h2>
            </div>

            <div class="space-y-4">

                <!-- FAQ 1 -->
                <div class="rounded-2xl bg-white/[0.03] backdrop-blur-xl border overflow-hidden" :class="open === 1 ? 'border-violet-500/30' : 'border-white/10'">
                    <button @click="open = open === 1 ? null : 1" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="pr-4 font-semibold text-white"><?php echo esc_html( $t['faq_q1'] ); ?></span>
                        <svg class="flex-shrink-0 w-5 h-5 transition-transform duration-300 text-violet-400" :class="open === 1 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 1" x-collapse x-cloak>
                        <div class="px-6 pb-6 leading-relaxed text-white/60">
                            <?php echo wp_kses_post( $t['faq_a1'] ); ?>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="rounded-2xl bg-white/[0.03] backdrop-blur-xl border overflow-hidden" :class="open === 2 ? 'border-violet-500/30' : 'border-white/10'">
                    <button @click="open = open === 2 ? null : 2" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="pr-4 font-semibold text-white"><?php echo esc_html( $t['faq_q2'] ); ?></span>
                        <svg class="flex-shrink-0 w-5 h-5 transition-transform duration-300 text-violet-400" :class="open === 2 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 2" x-collapse x-cloak>
                        <div class="px-6 pb-6 leading-relaxed text-white/60">
                            <?php echo wp_kses_post( $t['faq_a2'] ); ?>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="rounded-2xl bg-white/[0.03] backdrop-blur-xl border overflow-hidden" :class="open === 3 ? 'border-violet-500/30' : 'border-white/10'">
                    <button @click="open = open === 3 ? null : 3" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="pr-4 font-semibold text-white"><?php echo esc_html( $t['faq_q3'] ); ?></span>
                        <svg class="flex-shrink-0 w-5 h-5 transition-transform duration-300 text-violet-400" :class="open === 3 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 3" x-collapse x-cloak>
                        <div class="px-6 pb-6 leading-relaxed text-white/60">
                            <?php echo wp_kses_post( $t['faq_a3'] ); ?>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="rounded-2xl bg-white/[0.03] backdrop-blur-xl border overflow-hidden" :class="open === 4 ? 'border-violet-500/30' : 'border-white/10'">
                    <button @click="open = open === 4 ? null : 4" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="pr-4 font-semibold text-white"><?php echo esc_html( $t['faq_q4'] ); ?></span>
                        <svg class="flex-shrink-0 w-5 h-5 transition-transform duration-300 text-violet-400" :class="open === 4 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 4" x-collapse x-cloak>
                        <div class="px-6 pb-6 leading-relaxed text-white/60">
                            <?php echo wp_kses_post( $t['faq_a4'] ); ?>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="rounded-2xl bg-white/[0.03] backdrop-blur-xl border overflow-hidden" :class="open === 5 ? 'border-violet-500/30' : 'border-white/10'">
                    <button @click="open = open === 5 ? null : 5" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="pr-4 font-semibold text-white"><?php echo esc_html( $t['faq_q5'] ); ?></span>
                        <svg class="flex-shrink-0 w-5 h-5 transition-transform duration-300 text-violet-400" :class="open === 5 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 5" x-collapse x-cloak>
                        <div class="px-6 pb-6 leading-relaxed text-white/60">
                            <?php echo wp_kses_post( $t['faq_a5'] ); ?>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="rounded-2xl bg-white/[0.03] backdrop-blur-xl border overflow-hidden" :class="open === 6 ? 'border-violet-500/30' : 'border-white/10'">
                    <button @click="open = open === 6 ? null : 6" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="pr-4 font-semibold text-white"><?php echo esc_html( $t['faq_q6'] ); ?></span>
                        <svg class="flex-shrink-0 w-5 h-5 transition-transform duration-300 text-violet-400" :class="open === 6 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 6" x-collapse x-cloak>
                        <div class="px-6 pb-6 leading-relaxed text-white/60">
                            <?php echo wp_kses_post( $t['faq_a6'] ); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== FINAL CTA ==================== -->
    <section class="relative py-32 overflow-hidden border-t bg-gradient-to-b from-zinc-900/50 to-zinc-950 border-white/5">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 w-full h-px -translate-x-1/2 left-1/2 bg-gradient-to-r from-transparent via-violet-500/40 to-transparent"></div>
            <div class="absolute rounded-full top-1/2 left-1/4 w-96 h-96 bg-violet-600/10 blur-3xl"></div>
            <div class="absolute rounded-full top-1/2 right-1/4 w-96 h-96 bg-emerald-600/10 blur-3xl"></div>
        </div>

        <div class="relative max-w-4xl px-4 mx-auto text-center sm:px-6 lg:px-8">

            <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white/[0.03] backdrop-blur-xl border border-white/[0.08] mb-10">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-emerald-400"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                </span>
                <span class="text-sm font-medium text-white/70"><?php echo esc_html( $t['cta_badge'] ); ?></span>
            </div>

            <h2 class="mb-6 text-4xl font-black leading-tight text-white sm:text-5xl lg:text-6xl">
                <?php echo esc_html( $t['cta_title_1'] ); ?>
                <span class="block bg-gradient-to-r from-emerald-400 via-teal-400 to-cyan-400 bg-[length:300%_300%] bg-clip-text text-transparent animate-gradient-flow-fast"><?php echo esc_html( $t['cta_title_2'] ); ?></span>
            </h2>

            <p class="max-w-2xl mx-auto mb-10 text-xl text-white/50">
                <?php echo esc_html( $t['cta_subtitle'] ); ?>
            </p>

            <div class="flex flex-col items-center justify-center gap-4 mb-12 sm:flex-row">
                <a href="/signup" class="group relative overflow-hidden w-full sm:w-auto px-10 py-6 rounded-2xl bg-gradient-to-br from-violet-500 to-violet-600 text-white font-semibold text-xl flex items-center justify-center gap-3 shadow-[0_4px_20px_rgba(139,92,246,0.4)] hover:shadow-[0_8px_30px_rgba(139,92,246,0.5)] hover:-translate-y-0.5 transition-all duration-300">
                    <span><?php echo esc_html( $t['cta_create_account'] ); ?></span>
                    <svg class="w-6 h-6 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>

            <div class="flex flex-wrap items-center justify-center text-sm gap-x-10 gap-y-4 text-white/40">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><?php echo esc_html( $t['cta_zero_setup'] ); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><?php echo esc_html( $t['cta_zero_nosell'] ); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><?php echo esc_html( $t['benefit_no_card'] ); ?></span>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
    [x-cloak] { display: none !important; }
</style>

<?php
get_footer();
