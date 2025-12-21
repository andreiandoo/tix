<?php
/*
Template Name: Tixello vs BLT
*/

// Include the comparisons data
require_once get_template_directory() . '/tixello-comparisons-data.php';

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$t = tixello_get_comparison_translations();
$competitor = tixello_get_comparison_by_slug('blt');
$carousel_items = tixello_get_carousel_comparisons('blt');

// Competitor-specific content
$competitor_content = [
    'ro' => [
        'verdict_text' => 'BLT.ro operează ca serviciu de intermediere online între organizatori și cumpărători, pe bază de contract. Comisionul vizibil la checkout este o „taxă de emitere bilet" plătită de client, iar încasarea poate fi făcută fie de vânzător, fie de platformă.',
        'verdict_points' => [
            '<strong class="text-white/70">Rol:</strong> „furnizor de servicii de intermediere online" între organizatori („Vânzători") și clienți — colaborare pe contract de promovare și intermediere.',
            '<strong class="text-white/70">Comision pentru client:</strong> „Taxă de emitere bilet (comision)" comunicată la checkout, în plus față de prețul biletului care revine vânzătorului.',
            '<strong class="text-red-400">Plăți & încasări:</strong> procesare prin Netopia–MobilPay; încasarea o face fie vânzătorul, fie platforma, cu virarea ulterioară către vânzător a prețului biletului.',
            '<strong class="text-white/70">Livrare & acces:</strong> bilete electronice și fizice; paginile de eveniment includ „selecție locuri".',
            '<strong class="text-white/70">Observație:</strong> nu sunt publicate comisioane pentru organizatori, SLA sau un model standard de payout direct.',
        ],
        'compare_1_tixello' => 'Banii intră <strong class="text-emerald-400">direct în contul tău</strong>; plătești doar când vinzi; comision <strong class="text-emerald-400">1-3%</strong> (1% exclusiv / 2% non-exclusiv / 3% când Tixello procesează tranzacțiile). Poți include comisionul în preț sau îl poți afișa peste.',
        'compare_1_competitor' => 'Comisionul vizibil public este o <strong class="text-red-400">taxă plătită de client</strong>; încasarea poate fi făcută de platformă, care virează ulterior doar prețul biletului către organizator — model ce poate <strong class="text-red-400">întârzia cashflow-ul</strong>. Nu sunt publicate comisioane pentru organizatori.',
        'compare_2_tixello' => '<strong class="text-emerald-400">Admin dedicat</strong> (nu-l împarți cu alți organizatori), datele clienților și analytics la tine, GTM propriu, export & integrări. Tixello este gândit ca un instrument de creștere pentru organizatori.',
        'compare_2_competitor' => 'BLT prelucrează datele pe seama organizatorului (împreună cu fluxurile de plată MobilPay), însă <strong class="text-red-400">nu există specificații publice</strong> despre un panou dedicat pentru organizatori sau despre un SLA asumat.',
        'compare_3_tixello' => 'Facturare automată + <strong class="text-emerald-400">eFactura</strong>, pachet de documente fiscale & legale post-eveniment, multi-processor plăți (fallback & routing), tracking avansat (canale/surse), aplicații de scanare iOS/Android, rapoarte live.',
        'compare_3_competitor' => 'Oferă bilete electronice/fizice și selecție locuri; <strong class="text-red-400">nu are publicate</strong> eFactura, multi-processor, GTM propriu sau SLA pentru organizatori.',
        'compare_4_tixello' => 'Email marketing din platformă, coduri promo, segmente, early bird / tiered / pachete, personalizare bilete & branding, <strong class="text-emerald-400">tracking avansat al surselor de conversie</strong>.',
        'compare_4_competitor' => 'Site-ul pune accent pe beneficii pentru cumpărători; <strong class="text-red-400">lipsesc public</strong> detalii de CRM/marketing self-service pentru organizatori.',
        'compare_5_tixello' => 'Aproape <strong class="text-emerald-400">plug & play</strong> — site-ul organizatorului se instalează automat pe serverul lui, fără programare. Poți replica rapid structuri de evenimente și tipuri de bilete.',
        'compare_5_competitor' => 'Colaborare pe contract, cu listare pe marketplace; <strong class="text-red-400">nu este promovat</strong> un traseu self-service cu admin dedicat sau instalare pe serverul organizatorului.',
        'table' => [
            'cost_tixello' => '1-3% (flexibil; inclus în preț sau peste)',
            'cost_competitor' => '„Taxă de emitere bilet" plătită de client; fără cotă publică pentru organizatori',
            'cashflow_tixello' => 'Direct în contul organizatorului; plătești doar când vinzi',
            'cashflow_competitor' => 'Încasează vânzătorul sau platforma; virare ulterioară doar prețul biletului',
            'admin_tixello' => 'Admin dedicat, site propriu (tenant); GTM propriu',
            'admin_competitor' => 'Intermediere pe marketplace; contract de promovare & intermediere',
            'delivery_tixello' => 'e-ticket + wallet; rapoarte live, email & promo',
            'delivery_competitor' => 'Bilete electronice/fizice, selecție locuri; alte microservicii nu sunt publicate',
            'fiscal_tixello' => 'eFactura, documente fiscale, multi-processor, tracking, app scan',
            'fiscal_competitor' => 'BLT prelucrează date; fără panou dedicat/SLA public',
            'refund_tixello' => 'Flexibilă; integrată în dashboard',
            'refund_competitor' => 'Nespecificat public',
            'sla_tixello' => '99.99% · ~300ms',
            'sla_competitor' => 'Nespecificat public',
        ],
        'faq' => [
            [
                'q' => 'Poate Tixello lucra cu mai mulți procesatori de plată?',
                'a' => 'Da. Poți seta un procesor principal și unul de backup, inclusiv routing după reguli (valoare, țară, tip de card).',
            ],
            [
                'q' => 'Pot include comisionul Tixello în prețul biletului?',
                'a' => 'Da — sau îl poți afișa separat. Poți testa ambele variante și urmări impactul în conversie în analytics.',
            ],
            [
                'q' => 'Cine deține datele clienților în Tixello?',
                'a' => 'Tu, ca organizator. Tixello îți oferă acces complet la date, export, integrări și GTM propriu, fără să „blocheze" relația cu publicul tău.',
            ],
            [
                'q' => 'Cum pot migra de pe un marketplace (ex. BLT.ro) pe Tixello?',
                'a' => 'Migrarea se poate face gradual: păstrezi o perioadă listările existente, în timp ce lansezi și vânzarea directă prin Tixello pe site-ul tău. Putem defini împreună un plan de tranziție și comunicare către public.',
            ],
            [
                'q' => 'Ce diferențe sunt între modelul BLT.ro și Tixello?',
                'a' => 'BLT.ro funcționează ca intermediar între organizatori și cumpărători, cu taxe vizibile pentru client și virare ulterioară. Tixello este o platformă B2B care oferă cashflow direct, admin dedicat și control complet asupra datelor și brandingului.',
            ],
        ],
    ],
    'en' => [
        'verdict_text' => 'BLT.ro operates as an online intermediation service between organizers and buyers, on a contract basis. The visible commission at checkout is a "ticket issuance fee" paid by the customer, and the collection can be done either by the seller or by the platform.',
        'verdict_points' => [
            '<strong class="text-white/70">Role:</strong> "online intermediation services provider" between organizers ("Sellers") and customers — collaboration on promotion and intermediation contract.',
            '<strong class="text-white/70">Customer commission:</strong> "Ticket issuance fee (commission)" communicated at checkout, in addition to the ticket price that goes to the seller.',
            '<strong class="text-red-400">Payments & collections:</strong> processing through Netopia-MobilPay; collection is done either by the seller or the platform, with subsequent transfer to the seller of the ticket price.',
            '<strong class="text-white/70">Delivery & access:</strong> electronic and physical tickets; event pages include "seat selection".',
            '<strong class="text-white/70">Note:</strong> no commissions for organizers, SLA or a standard direct payout model are published.',
        ],
        'compare_1_tixello' => 'Money goes <strong class="text-emerald-400">directly to your account</strong>; you pay only when you sell; commission <strong class="text-emerald-400">1-3%</strong> (1% exclusive / 2% non-exclusive / 3% when Tixello processes transactions). You can include the commission in the price or display it on top.',
        'compare_1_competitor' => 'The publicly visible commission is a <strong class="text-red-400">fee paid by the customer</strong>; collection can be done by the platform, which then transfers only the ticket price to the organizer — a model that can <strong class="text-red-400">delay cashflow</strong>. No commissions for organizers are published.',
        'compare_2_tixello' => '<strong class="text-emerald-400">Dedicated admin</strong> (not shared with other organizers), customer data and analytics with you, own GTM, export & integrations. Tixello is designed as a growth tool for organizers.',
        'compare_2_competitor' => 'BLT processes data on behalf of the organizer (together with MobilPay payment flows), but <strong class="text-red-400">there are no public specifications</strong> about a dedicated panel for organizers or an assumed SLA.',
        'compare_3_tixello' => 'Automatic invoicing + <strong class="text-emerald-400">e-invoicing</strong>, fiscal & legal documents package post-event, multi-processor payments (fallback & routing), advanced tracking (channels/sources), iOS/Android scanning apps, live reports.',
        'compare_3_competitor' => 'Offers electronic/physical tickets and seat selection; <strong class="text-red-400">does not have published</strong> e-invoicing, multi-processor, own GTM or SLA for organizers.',
        'compare_4_tixello' => 'Email marketing from platform, promo codes, segments, early bird / tiered / packages, ticket & branding personalization, <strong class="text-emerald-400">advanced conversion source tracking</strong>.',
        'compare_4_competitor' => 'The website focuses on buyer benefits; <strong class="text-red-400">public details are missing</strong> about CRM/self-service marketing for organizers.',
        'compare_5_tixello' => 'Almost <strong class="text-emerald-400">plug & play</strong> — the organizer\'s website is automatically installed on their server, without programming. You can quickly replicate event structures and ticket types.',
        'compare_5_competitor' => 'Contract-based collaboration, with listing on marketplace; <strong class="text-red-400">not promoted</strong> a self-service route with dedicated admin or installation on the organizer\'s server.',
        'table' => [
            'cost_tixello' => '1-3% (flexible; included in price or on top)',
            'cost_competitor' => '"Ticket issuance fee" paid by customer; no public rate for organizers',
            'cashflow_tixello' => 'Direct to organizer\'s account; pay only when you sell',
            'cashflow_competitor' => 'Seller or platform collects; subsequent transfer of ticket price only',
            'admin_tixello' => 'Dedicated admin, own site (tenant); own GTM',
            'admin_competitor' => 'Intermediation on marketplace; promotion & intermediation contract',
            'delivery_tixello' => 'e-ticket + wallet; live reports, email & promo',
            'delivery_competitor' => 'Electronic/physical tickets, seat selection; other microservices not published',
            'fiscal_tixello' => 'e-invoicing, fiscal documents, multi-processor, tracking, scan app',
            'fiscal_competitor' => 'BLT processes data; no dedicated panel/public SLA',
            'refund_tixello' => 'Flexible; integrated in dashboard',
            'refund_competitor' => 'Not publicly specified',
            'sla_tixello' => '99.99% · ~300ms',
            'sla_competitor' => 'Not publicly specified',
        ],
        'faq' => [
            [
                'q' => 'Can Tixello work with multiple payment processors?',
                'a' => 'Yes. You can set a primary processor and a backup, including routing by rules (value, country, card type).',
            ],
            [
                'q' => 'Can I include the Tixello commission in the ticket price?',
                'a' => 'Yes — or you can display it separately. You can test both variants and track the impact on conversion in analytics.',
            ],
            [
                'q' => 'Who owns the customer data in Tixello?',
                'a' => 'You, as the organizer. Tixello gives you full access to data, export, integrations and your own GTM, without "blocking" the relationship with your audience.',
            ],
            [
                'q' => 'How can I migrate from a marketplace (e.g. BLT.ro) to Tixello?',
                'a' => 'Migration can be done gradually: keep existing listings for a period, while also launching direct sales through Tixello on your own site. We can define together a transition and communication plan to the public.',
            ],
            [
                'q' => 'What are the differences between BLT.ro and Tixello model?',
                'a' => 'BLT.ro works as an intermediary between organizers and buyers, with visible fees for the customer and subsequent transfer. Tixello is a B2B platform that offers direct cashflow, dedicated admin and complete control over data and branding.',
            ],
        ],
    ],
];

$content = isset($competitor_content[$lang]) ? $competitor_content[$lang] : $competitor_content['ro'];

get_header();
?>

<main class="antialiased bg-zinc-950 text-zinc-200">

    <!-- ==================== HERO SECTION ==================== -->
    <section class="relative pt-24 pb-16 overflow-hidden sm:pt-32 sm:pb-24 bg-zinc-950">
        <!-- Background effects -->
        <div class="absolute inset-0 bg-gradient-to-b from-violet-500/5 via-transparent to-transparent"></div>
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px); background-size: 48px 48px; mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, black, transparent);"></div>
        <div class="absolute w-20 h-20 rounded-full top-32 left-10 bg-violet-500/10 blur-2xl animate-float"></div>
        <div class="absolute w-32 h-32 rounded-full top-48 right-20 bg-cyan-500/10 blur-2xl animate-float-delayed"></div>
        <div class="absolute w-24 h-24 rounded-full bottom-20 left-1/4 bg-red-500/10 blur-2xl animate-float"></div>

        <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 mb-8 text-sm text-white/40 animate-fade-in">
                <a href="<?php echo home_url(); ?>" class="transition-colors hover:text-white/60"><?php echo esc_html($t['breadcrumb_home']); ?></a>
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                <a href="<?php echo home_url('/compare'); ?>" class="transition-colors hover:text-white/60"><?php echo esc_html($t['breadcrumb_comparisons']); ?></a>
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                <span class="text-white/60"><?php echo esc_html($competitor['name']); ?></span>
            </div>

            <!-- VS Header -->
            <div class="flex flex-col items-center justify-center gap-6 mb-12 lg:flex-row lg:gap-12 animate-fade-in-up">
                <div class="flex items-center gap-4">
                    <div class="flex items-center justify-center w-16 h-16 shadow-lg sm:w-20 sm:h-20 rounded-2xl bg-gradient-to-br from-violet-500 to-cyan-500 shadow-violet-500/20">
                        <span class="text-2xl font-black text-white sm:text-3xl">T</span>
                    </div>
                    <div class="text-left">
                        <p class="text-2xl font-bold text-white sm:text-3xl">Tixello</p>
                        <p class="text-sm text-emerald-400"><?php echo esc_html($t['platform_b2b']); ?></p>
                    </div>
                </div>

                <div class="flex items-center justify-center border rounded-full animate-vs-pulse w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-violet-600/20 to-cyan-600/20 border-violet-500/30">
                    <span class="text-xl font-black text-white sm:text-2xl"><?php echo esc_html($t['vs']); ?></span>
                </div>

                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl bg-gradient-to-br from-red-500/20 to-red-600/20 border border-red-500/20 flex items-center justify-center">
                        <span class="text-red-400 font-black text-2xl sm:text-3xl"><?php echo esc_html($competitor['icon_letter']); ?></span>
                    </div>
                    <div class="text-left">
                        <p class="text-2xl font-bold text-white sm:text-3xl"><?php echo esc_html($competitor['name']); ?>.ro</p>
                        <p class="text-sm text-red-400"><?php echo $lang === 'en' ? 'Intermediation' : 'Intermediere'; ?></p>
                    </div>
                </div>
            </div>

            <!-- Main headline -->
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="mb-6 text-3xl font-black leading-tight text-white sm:text-4xl lg:text-5xl xl:text-6xl animate-fade-in-up">
                    <?php echo esc_html($t['headline_main']); ?>
                    <span class="bg-gradient-to-r from-violet-400 via-cyan-400 to-emerald-400 bg-clip-text text-transparent animate-gradient-flow bg-[length:300%_300%]"><?php echo esc_html($t['headline_gradient']); ?></span>
                </h1>

                <p class="max-w-3xl mx-auto mb-8 text-lg sm:text-xl text-white/60 animate-fade-in-up">
                    <?php echo $t['hero_description']; ?>
                    <span class="font-medium text-white"><?php echo esc_html($t['hero_stats']); ?></span>
                </p>

                <!-- Quick stats -->
                <div class="flex flex-wrap items-center justify-center gap-6 mb-10 sm:gap-10 animate-fade-in-up">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-white/70"><?php echo esc_html($t['stat_cashflow']); ?></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-white/70"><?php echo esc_html($t['stat_commission']); ?></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-white/70"><?php echo esc_html($t['stat_efactura']); ?></span>
                    </div>
                </div>

                <!-- CTA buttons -->
                <div class="flex flex-col items-center justify-center gap-4 sm:flex-row animate-fade-in-up">
                    <a href="#demo" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-violet-600 to-violet-500 hover:from-violet-500 hover:to-violet-400 text-white font-semibold text-lg shadow-lg shadow-violet-500/30 hover:shadow-violet-500/50 transition-all hover:-translate-y-0.5"><?php echo esc_html($t['cta_demo']); ?></a>
                    <a href="#comparison" class="w-full px-8 py-4 font-semibold text-white transition-all border sm:w-auto rounded-xl border-white/20 hover:bg-white/5 hover:border-white/30"><?php echo esc_html($t['cta_offer']); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== QUICK COMPARISON CARDS ==================== -->
    <section class="relative py-16 border-t sm:py-24 bg-zinc-900/30 border-white/5">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="mb-12 text-center">
                <h2 class="mb-3 text-2xl font-bold text-white sm:text-3xl"><?php echo $lang === 'en' ? 'Tixello vs BLT.ro intermediation model' : 'Tixello vs modelul de intermediere BLT.ro'; ?></h2>
                <p class="max-w-3xl mx-auto text-white/50"><?php echo $lang === 'en' ? 'Tixello is built for organizers who want direct cashflow, complete cost transparency and full ownership of data. BLT.ro works as an online intermediation service between organizers and buyers.' : 'Tixello este construit pentru organizatori care vor cashflow direct, transparență completă pe costuri și proprietate deplină asupra datelor. BLT.ro funcționează ca serviciu de intermediere online între organizatori și cumpărători.'; ?></p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                <!-- Cashflow Card -->
                <div class="relative group">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/20 to-emerald-600/5 rounded-2xl blur-xl group-hover:opacity-100"></div>
                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-emerald-500/30 transition-all duration-300">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-emerald-500/10">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-white"><?php echo $lang === 'en' ? 'Direct cashflow & control' : 'Cashflow direct & control'; ?></h3>
                        <p class="mb-4 text-sm text-white/50">Tixello vs marketplace</p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-sm text-white/70">Tixello: <?php echo $lang === 'en' ? 'Money directly to account' : 'Banii direct în cont'; ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                <span class="text-sm text-white/70">BLT: <?php echo $lang === 'en' ? 'Subsequent transfer' : 'Virare ulterioară'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transparency Card -->
                <div class="relative group">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-violet-500/20 to-violet-600/5 rounded-2xl blur-xl group-hover:opacity-100"></div>
                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-violet-500/30 transition-all duration-300">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-violet-500/10">
                            <svg class="w-6 h-6 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-white"><?php echo $lang === 'en' ? 'Commission transparency' : 'Transparență comisioane'; ?></h3>
                        <p class="mb-4 text-sm text-white/50">Tixello vs marketplace</p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-sm text-white/70">Tixello: 1-3% transparent</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                <span class="text-sm text-white/70">BLT: <?php echo $lang === 'en' ? 'No public rate for org.' : 'Fără cotă publică pt. org.'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Microservicii Card -->
                <div class="relative group">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-cyan-500/20 to-cyan-600/5 rounded-2xl blur-xl group-hover:opacity-100"></div>
                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-cyan-500/30 transition-all duration-300">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-cyan-500/10">
                            <svg class="w-6 h-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-white"><?php echo $lang === 'en' ? 'Fiscal & analytics microservices' : 'Microservicii fiscale & analytics'; ?></h3>
                        <p class="mb-4 text-sm text-white/50">Tixello vs marketplace</p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-sm text-white/70">Tixello: eFactura, tracking, SLA</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                                <span class="text-sm text-white/70">BLT: <?php echo $lang === 'en' ? 'Not published' : 'Nu sunt publicate'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-8 text-xs text-center text-white/30"><?php echo $lang === 'en' ? '* Values are indicative and highlight the difference in approach between Tixello and an intermediation service.' : '* Valorile sunt orientative și evidențiază diferența de abordare între Tixello și un serviciu de intermediere.'; ?></p>
        </div>
    </section>

    <!-- ==================== DEMO CTA ==================== -->
    <section class="relative py-16 border-t bg-zinc-950 border-white/5">
        <div class="max-w-4xl px-4 mx-auto text-center sm:px-6 lg:px-8">
            <h2 class="mb-4 text-2xl font-bold text-white sm:text-3xl"><?php echo $lang === 'en' ? 'Want to exit the intermediation model?' : 'Vrei să ieși din modelul de intermediere?'; ?></h2>
            <p class="max-w-2xl mx-auto mb-8 text-white/50"><?php echo $lang === 'en' ? 'We show you what Tixello looks like as a B2B solution: own site, direct cashflow, predictable commission and automatically generated fiscal documents.' : 'Îți arătăm cum arată Tixello ca soluție B2B: site propriu, cashflow direct, comision predictibil și documente fiscale generate automat.'; ?></p>
            <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="#demo" class="px-8 py-4 font-semibold text-white transition-all shadow-lg rounded-xl bg-gradient-to-r from-violet-600 to-violet-500 hover:from-violet-500 hover:to-violet-400 shadow-violet-500/30"><?php echo esc_html($t['cta_demo']); ?></a>
                <a href="#contact" class="px-8 py-4 font-semibold text-white transition-all border rounded-xl border-white/20 hover:bg-white/5"><?php echo esc_html($t['cta_offer']); ?></a>
            </div>
        </div>
    </section>

    <!-- ==================== VERDICT SECTION ==================== -->
    <section class="relative py-20 border-t sm:py-28 bg-zinc-900/30 border-white/5">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="mb-16 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-violet-500/10 border-violet-500/20">
                    <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-sm font-medium text-violet-400"><?php echo esc_html($t['verdict_badge']); ?></span>
                </div>
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl"><?php echo $lang === 'en' ? 'Tixello vs BLT.ro - B2B platform for organizers vs. marketplace intermediation' : 'Tixello vs BLT.ro - platformă B2B pentru organizatori vs. intermediere pe marketplace'; ?></h2>
            </div>

            <div class="grid gap-8 lg:grid-cols-2">

                <!-- Competitor -->
                <div class="p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-red-500/20">
                            <span class="text-xl font-bold text-red-400"><?php echo esc_html($competitor['icon_letter']); ?></span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white"><?php echo $lang === 'en' ? 'What is BLT.ro (factual context)' : 'Ce este BLT.ro (context factual)'; ?></h3>
                            <p class="text-sm text-white/40"><?php echo $lang === 'en' ? 'From public sources' : 'Din surse publice'; ?></p>
                        </div>
                    </div>

                    <p class="mb-6 leading-relaxed text-white/60"><?php echo $content['verdict_text']; ?></p>

                    <div class="space-y-4">
                        <?php foreach ($content['verdict_points'] as $point) : ?>
                        <div class="flex items-start gap-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-red-400 mt-2 flex-shrink-0"></div>
                            <p class="text-sm text-white/50"><?php echo $point; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="mt-6 text-xs text-white/30"><?php echo $lang === 'en' ? 'Information taken from BLT.ro public documents (Terms & conditions, Privacy policy).' : 'Informații preluate din documentele publice BLT.ro (Termeni & condiții, Politica de confidențialitate).'; ?></p>
                </div>

                <!-- Tixello -->
                <div class="p-6 border sm:p-8 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-cyan-500/5 border-emerald-500/20">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500">
                            <span class="text-xl font-bold text-white">T</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white"><?php echo esc_html($t['verdict_tixello_title']); ?></h3>
                            <p class="text-sm text-emerald-400"><?php echo $lang === 'en' ? 'Full-stack B2B solution' : 'Soluție B2B full-stack'; ?></p>
                        </div>
                    </div>

                    <p class="mb-6 leading-relaxed text-white/70">
                        <?php echo $lang === 'en'
                            ? 'Tixello is a full-stack B2B solution, focused on direct cashflow and control for the organizer. Dedicated admin, fiscal microservices and analytics that increase conversion.'
                            : 'Tixello este o soluție B2B full-stack, centrată pe cashflow direct și control pentru organizator. Admin dedicat, microservicii fiscale și analytics care cresc conversia.'; ?>
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <p class="text-sm text-white/70"><?php echo esc_html($t['tixello_cashflow']); ?></p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <p class="text-sm text-white/70"><?php echo esc_html($t['tixello_commission']); ?></p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <p class="text-sm text-white/70"><?php echo esc_html($t['tixello_admin']); ?></p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <p class="text-sm text-white/70"><?php echo esc_html($t['tixello_processor']); ?></p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <p class="text-sm text-white/70"><?php echo esc_html($t['tixello_fiscal']); ?></p>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <p class="text-sm text-white/70"><?php echo esc_html($t['tixello_sla']); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== DETAILED COMPARISON SECTION ==================== -->
    <section id="comparison" class="relative py-20 border-t sm:py-28 bg-zinc-950 border-white/5">

        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 rounded-full left-1/4 w-96 h-96 bg-violet-600/5 blur-3xl"></div>
            <div class="absolute bottom-0 rounded-full right-1/4 w-96 h-96 bg-cyan-600/5 blur-3xl"></div>
        </div>

        <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="mb-16 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-violet-500/10 border-violet-500/20">
                    <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                    <span class="text-sm font-medium text-violet-400"><?php echo esc_html($t['detailed_badge']); ?></span>
                </div>
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                    <?php echo esc_html($t['detailed_title']); ?> <span class="text-transparent bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text"><?php echo esc_html($t['detailed_title_gradient']); ?></span>
                </h2>
            </div>

            <!-- Comparison Items -->
            <div class="space-y-8">

                <!-- Item 1: Cashflow & comisioane -->
                <div class="grid items-stretch gap-6 lg:grid-cols-2">
                    <!-- Tixello Side -->
                    <div class="relative p-6 transition-all border sm:p-8 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-emerald-600/5 border-emerald-500/20 group hover:border-emerald-500/40">
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center gap-1 px-2 py-1 text-xs font-medium rounded-full bg-emerald-500/20 text-emerald-400">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                <?php echo esc_html($t['winner_badge']); ?>
                            </span>
                        </div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500">
                                <span class="font-bold text-white">T</span>
                            </div>
                            <span class="text-lg font-bold text-white">Tixello</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_1_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_1_tixello']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">1-3% <?php echo $lang === 'en' ? 'commission' : 'comision'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Direct cashflow' : 'Cashflow direct'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Flexible' : 'Flexibil'; ?></span>
                        </div>
                    </div>

                    <!-- Competitor Side -->
                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-red-500/20">
                                <span class="font-bold text-red-400"><?php echo esc_html($competitor['icon_letter']); ?></span>
                            </div>
                            <span class="text-lg font-bold text-white"><?php echo esc_html($competitor['name']); ?>.ro</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_1_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_1_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-red-500/10 text-red-400"><?php echo $lang === 'en' ? 'Issuance fee' : 'Taxă de emitere'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Subsequent transfer' : 'Virare ulterioară'; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Controlul platformei -->
                <div class="grid items-stretch gap-6 lg:grid-cols-2">
                    <div class="relative p-6 transition-all border sm:p-8 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-emerald-600/5 border-emerald-500/20 group hover:border-emerald-500/40">
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center gap-1 px-2 py-1 text-xs font-medium rounded-full bg-emerald-500/20 text-emerald-400">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                <?php echo esc_html($t['winner_badge']); ?>
                            </span>
                        </div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500">
                                <span class="font-bold text-white">T</span>
                            </div>
                            <span class="text-lg font-bold text-white">Tixello</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_2_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_2_tixello']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Dedicated admin' : 'Admin dedicat'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Own GTM' : 'GTM propriu'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Data with you' : 'Date la tine'; ?></span>
                        </div>
                    </div>

                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-red-500/20">
                                <span class="font-bold text-red-400"><?php echo esc_html($competitor['icon_letter']); ?></span>
                            </div>
                            <span class="text-lg font-bold text-white"><?php echo esc_html($competitor['name']); ?>.ro</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_2_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_2_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'No dedicated panel' : 'Fără panou dedicat'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Unpublished SLA' : 'SLA nepublicat'; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Fiscalitate & operațional -->
                <div class="grid items-stretch gap-6 lg:grid-cols-2">
                    <div class="relative p-6 transition-all border sm:p-8 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-emerald-600/5 border-emerald-500/20 group hover:border-emerald-500/40">
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center gap-1 px-2 py-1 text-xs font-medium rounded-full bg-emerald-500/20 text-emerald-400">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                <?php echo esc_html($t['winner_badge']); ?>
                            </span>
                        </div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500">
                                <span class="font-bold text-white">T</span>
                            </div>
                            <span class="text-lg font-bold text-white">Tixello</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_3_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_3_tixello']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">eFactura</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">Multi-processor</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Scan app' : 'App scanare'; ?></span>
                        </div>
                    </div>

                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-red-500/20">
                                <span class="font-bold text-red-400"><?php echo esc_html($competitor['icon_letter']); ?></span>
                            </div>
                            <span class="text-lg font-bold text-white"><?php echo esc_html($competitor['name']); ?>.ro</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_3_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_3_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'E/physical tickets' : 'Bilete e/fizice'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Seat selection' : 'Selecție locuri'; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Item 4: UX & conversie -->
                <div class="grid items-stretch gap-6 lg:grid-cols-2">
                    <div class="relative p-6 transition-all border sm:p-8 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-emerald-600/5 border-emerald-500/20 group hover:border-emerald-500/40">
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center gap-1 px-2 py-1 text-xs font-medium rounded-full bg-emerald-500/20 text-emerald-400">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                <?php echo esc_html($t['winner_badge']); ?>
                            </span>
                        </div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500">
                                <span class="font-bold text-white">T</span>
                            </div>
                            <span class="text-lg font-bold text-white">Tixello</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_4_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_4_tixello']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Email marketing' : 'Email marketing'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Promo codes' : 'Coduri promo'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Source tracking' : 'Tracking surse'; ?></span>
                        </div>
                    </div>

                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-red-500/20">
                                <span class="font-bold text-red-400"><?php echo esc_html($competitor['icon_letter']); ?></span>
                            </div>
                            <span class="text-lg font-bold text-white"><?php echo esc_html($competitor['name']); ?>.ro</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_4_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_4_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Buyer focus' : 'Focus cumpărători'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Unpublished CRM' : 'CRM nepublicat'; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Item 5: Onboarding -->
                <div class="grid items-stretch gap-6 lg:grid-cols-2">
                    <div class="relative p-6 transition-all border sm:p-8 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-emerald-600/5 border-emerald-500/20 group hover:border-emerald-500/40">
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center gap-1 px-2 py-1 text-xs font-medium rounded-full bg-emerald-500/20 text-emerald-400">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                <?php echo esc_html($t['winner_badge']); ?>
                            </span>
                        </div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500">
                                <span class="font-bold text-white">T</span>
                            </div>
                            <span class="text-lg font-bold text-white">Tixello</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo $lang === 'en' ? '5) Onboarding & time-to-market' : '5) Onboarding & time-to-market'; ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_5_tixello']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">Plug & play</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Own site' : 'Site propriu'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'No programming' : 'Fără programare'; ?></span>
                        </div>
                    </div>

                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-red-500/20">
                                <span class="font-bold text-red-400"><?php echo esc_html($competitor['icon_letter']); ?></span>
                            </div>
                            <span class="text-lg font-bold text-white"><?php echo esc_html($competitor['name']); ?>.ro</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo $lang === 'en' ? '5) Onboarding & time-to-market' : '5) Onboarding & time-to-market'; ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_5_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'On contract' : 'Pe contract'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40">Marketplace</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== BENEFITS SECTION ==================== -->
    <section class="relative py-20 overflow-hidden border-t sm:py-28 bg-zinc-900/30 border-white/5">

        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute left-0 w-64 h-64 -translate-y-1/2 rounded-full top-1/2 bg-emerald-500/10 blur-3xl"></div>
            <div class="absolute right-0 w-64 h-64 -translate-y-1/2 rounded-full top-1/2 bg-cyan-500/10 blur-3xl"></div>
        </div>

        <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="mb-16 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-emerald-500/10 border-emerald-500/20">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-sm font-medium text-emerald-400"><?php echo esc_html($t['benefits_badge']); ?></span>
                </div>
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl"><?php echo esc_html($t['benefits_title']); ?></h2>
            </div>

            <div class="grid max-w-5xl gap-6 mx-auto sm:grid-cols-2 lg:grid-cols-3">

                <div class="group p-6 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-emerald-500/30 hover:bg-white/[0.04] transition-all">
                    <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-xl bg-emerald-500/10">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['benefit_1_title']); ?></h3>
                    <p class="text-sm leading-relaxed text-white/50"><?php echo esc_html($t['benefit_1_desc']); ?></p>
                </div>

                <div class="group p-6 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-emerald-500/30 hover:bg-white/[0.04] transition-all">
                    <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-xl bg-emerald-500/10">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['benefit_2_title']); ?></h3>
                    <p class="text-sm leading-relaxed text-white/50"><?php echo esc_html($t['benefit_2_desc']); ?></p>
                </div>

                <div class="group p-6 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-emerald-500/30 hover:bg-white/[0.04] transition-all">
                    <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-xl bg-emerald-500/10">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['benefit_3_title']); ?></h3>
                    <p class="text-sm leading-relaxed text-white/50"><?php echo esc_html($t['benefit_3_desc']); ?></p>
                </div>

                <div class="group p-6 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-emerald-500/30 hover:bg-white/[0.04] transition-all">
                    <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-xl bg-emerald-500/10">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['benefit_4_title']); ?></h3>
                    <p class="text-sm leading-relaxed text-white/50"><?php echo esc_html($t['benefit_4_desc']); ?></p>
                </div>

                <div class="group p-6 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-emerald-500/30 hover:bg-white/[0.04] transition-all sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-xl bg-emerald-500/10">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['benefit_5_title']); ?></h3>
                    <p class="text-sm leading-relaxed text-white/50"><?php echo esc_html($t['benefit_5_desc']); ?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== COMPARISON TABLE ==================== -->
    <section class="relative py-20 border-t sm:py-28 bg-zinc-950 border-white/5">
        <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">

            <div class="mb-12 text-center">
                <h2 class="mb-3 text-2xl font-bold text-white sm:text-3xl"><?php echo $lang === 'en' ? 'Comparison table (executive): Tixello vs BLT.ro' : 'Tabel comparativ (executive): Tixello vs BLT.ro'; ?></h2>
                <p class="text-white/50"><?php echo $lang === 'en' ? 'Own B2B platform vs. intermediation' : 'B2B platformă proprie vs. intermediere'; ?></p>
            </div>

            <div class="rounded-2xl border border-white/10 overflow-hidden bg-white/[0.02]">
                <div class="grid grid-cols-3 bg-white/[0.03]">
                    <div class="p-4 text-sm font-semibold border-r sm:p-5 text-white/40 border-white/5"><?php echo esc_html($t['table_criterion']); ?></div>
                    <div class="p-4 text-center border-r sm:p-5 border-white/5">
                        <div class="flex items-center justify-center gap-2">
                            <div class="flex items-center justify-center w-6 h-6 rounded bg-gradient-to-br from-violet-500 to-cyan-500"><span class="text-xs font-bold text-white">T</span></div>
                            <span class="text-sm font-semibold text-white">Tixello</span>
                        </div>
                    </div>
                    <div class="p-4 text-center sm:p-5">
                        <div class="flex items-center justify-center gap-2">
                            <div class="flex items-center justify-center w-6 h-6 rounded bg-red-500/20"><span class="text-xs font-bold text-red-400"><?php echo esc_html($competitor['icon_letter']); ?></span></div>
                            <span class="text-sm font-semibold text-white"><?php echo esc_html($competitor['name']); ?>.ro</span>
                        </div>
                    </div>
                </div>

                <div class="divide-y divide-white/5">
                    <div class="grid grid-cols-3 hover:bg-white/[0.02] transition-colors">
                        <div class="p-4 text-sm border-r sm:p-5 text-white/70 border-white/5"><?php echo esc_html($t['table_cost']); ?></div>
                        <div class="p-4 text-sm text-center border-r sm:p-5 text-emerald-400 border-white/5 bg-emerald-500/5"><?php echo esc_html($content['table']['cost_tixello']); ?></div>
                        <div class="p-4 text-sm text-center sm:p-5 text-white/50"><?php echo esc_html($content['table']['cost_competitor']); ?></div>
                    </div>
                    <div class="grid grid-cols-3 hover:bg-white/[0.02] transition-colors">
                        <div class="p-4 text-sm border-r sm:p-5 text-white/70 border-white/5"><?php echo esc_html($t['table_cashflow']); ?></div>
                        <div class="p-4 text-sm text-center border-r sm:p-5 text-emerald-400 border-white/5 bg-emerald-500/5"><?php echo esc_html($content['table']['cashflow_tixello']); ?></div>
                        <div class="p-4 text-sm text-center sm:p-5 text-white/50"><?php echo esc_html($content['table']['cashflow_competitor']); ?></div>
                    </div>
                    <div class="grid grid-cols-3 hover:bg-white/[0.02] transition-colors">
                        <div class="p-4 text-sm border-r sm:p-5 text-white/70 border-white/5"><?php echo esc_html($t['table_admin']); ?></div>
                        <div class="p-4 text-sm text-center border-r sm:p-5 text-emerald-400 border-white/5 bg-emerald-500/5"><?php echo esc_html($content['table']['admin_tixello']); ?></div>
                        <div class="p-4 text-sm text-center sm:p-5 text-white/50"><?php echo esc_html($content['table']['admin_competitor']); ?></div>
                    </div>
                    <div class="grid grid-cols-3 hover:bg-white/[0.02] transition-colors">
                        <div class="p-4 text-sm border-r sm:p-5 text-white/70 border-white/5"><?php echo esc_html($t['table_delivery']); ?></div>
                        <div class="p-4 text-sm text-center border-r sm:p-5 text-emerald-400 border-white/5 bg-emerald-500/5"><?php echo esc_html($content['table']['delivery_tixello']); ?></div>
                        <div class="p-4 text-sm text-center sm:p-5 text-white/50"><?php echo esc_html($content['table']['delivery_competitor']); ?></div>
                    </div>
                    <div class="grid grid-cols-3 hover:bg-white/[0.02] transition-colors">
                        <div class="p-4 text-sm border-r sm:p-5 text-white/70 border-white/5"><?php echo esc_html($t['table_fiscal']); ?></div>
                        <div class="p-4 text-sm text-center border-r sm:p-5 text-emerald-400 border-white/5 bg-emerald-500/5"><?php echo esc_html($content['table']['fiscal_tixello']); ?></div>
                        <div class="p-4 text-sm text-center sm:p-5 text-white/50"><?php echo esc_html($content['table']['fiscal_competitor']); ?></div>
                    </div>
                    <div class="grid grid-cols-3 hover:bg-white/[0.02] transition-colors">
                        <div class="p-4 text-sm border-r sm:p-5 text-white/70 border-white/5"><?php echo esc_html($t['table_refund']); ?></div>
                        <div class="p-4 text-sm text-center border-r sm:p-5 text-emerald-400 border-white/5 bg-emerald-500/5"><?php echo esc_html($content['table']['refund_tixello']); ?></div>
                        <div class="p-4 text-sm text-center sm:p-5 text-white/50"><?php echo esc_html($content['table']['refund_competitor']); ?></div>
                    </div>
                    <div class="grid grid-cols-3 hover:bg-white/[0.02] transition-colors">
                        <div class="p-4 text-sm border-r sm:p-5 text-white/70 border-white/5"><?php echo esc_html($t['table_sla']); ?></div>
                        <div class="p-4 text-sm text-center border-r sm:p-5 text-emerald-400 border-white/5 bg-emerald-500/5"><?php echo esc_html($content['table']['sla_tixello']); ?></div>
                        <div class="p-4 text-sm text-center sm:p-5 text-white/50"><?php echo esc_html($content['table']['sla_competitor']); ?></div>
                    </div>
                </div>
            </div>

            <p class="mt-6 text-xs text-center text-white/30"><?php echo $lang === 'en' ? 'Key quotes: BLT Terms & conditions (intermediation, issuance fee, payment/collection, seat selection), Privacy policy (Ticket Technologies, MobilPay) - according to blt.ro.' : 'Citate cheie: Termeni & condiții BLT (intermediere, taxă de emitere, plată/încasare, selecție locuri), Politica de confidențialitate (Ticket Technologies, MobilPay) - conform blt.ro.'; ?></p>
        </div>
    </section>

    <!-- ==================== FAQ SECTION ==================== -->
    <section class="relative py-20 border-t sm:py-28 bg-zinc-900/30 border-white/5">
        <div class="max-w-4xl px-4 mx-auto sm:px-6 lg:px-8">

            <div class="mb-16 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 border rounded-full bg-violet-500/10 border-violet-500/20">
                    <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-sm font-medium text-violet-400"><?php echo esc_html($t['faq_badge']); ?></span>
                </div>
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl"><?php echo $lang === 'en' ? 'Frequently asked questions about Tixello vs BLT.ro' : 'Intrebari frecvente despre Tixello vs BLT.ro'; ?></h2>
            </div>

            <div class="space-y-4" x-data="{ open: 1 }">
                <?php foreach ($content['faq'] as $index => $faq) : $num = $index + 1; ?>
                <div class="overflow-hidden transition-all border rounded-2xl border-white/10" :class="open === <?php echo $num; ?> ? 'bg-white/[0.03]' : 'bg-white/[0.01] hover:bg-white/[0.02]'">
                    <button @click="open = open === <?php echo $num; ?> ? null : <?php echo $num; ?>" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="pr-4 font-semibold text-white"><?php echo esc_html($faq['q']); ?></span>
                        <svg class="flex-shrink-0 w-5 h-5 transition-transform duration-300 text-white/50" :class="open === <?php echo $num; ?> ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === <?php echo $num; ?>" x-collapse>
                        <div class="px-6 pb-6 text-sm leading-relaxed text-white/60">
                            <p><?php echo esc_html($faq['a']); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ==================== OTHER COMPARISONS CAROUSEL ==================== -->
    <section class="relative py-16 overflow-hidden border-t bg-zinc-950 border-white/5">
        <div class="px-4 mx-auto mb-8 max-w-7xl sm:px-6 lg:px-8">
            <h3 class="mb-2 text-lg font-semibold text-white"><?php echo esc_html($t['carousel_title']); ?></h3>
        </div>

        <div class="relative">
            <div class="absolute top-0 bottom-0 left-0 z-10 w-20 pointer-events-none bg-gradient-to-r from-zinc-950 to-transparent"></div>
            <div class="absolute top-0 bottom-0 right-0 z-10 w-20 pointer-events-none bg-gradient-to-l from-zinc-950 to-transparent"></div>

            <div class="flex overflow-hidden">
                <div class="flex animate-scroll-x gap-4 hover:[animation-play-state:paused]">
                    <?php
                    // Render carousel items twice for infinite scroll effect
                    for ($i = 0; $i < 2; $i++) :
                        foreach ($carousel_items as $item) :
                    ?>
                    <a href="<?php echo home_url('/compare/' . $item['slug']); ?>" class="flex-shrink-0 w-56 p-4 rounded-xl bg-white/[0.03] border border-white/10 hover:border-violet-500/30 hover:bg-white/[0.05] transition-all group">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-cyan-500"><span class="text-xs font-bold text-white">T</span></div>
                            <span class="text-sm text-white/40">vs</span>
                            <div class="w-8 h-8 rounded-lg <?php echo esc_attr($item['icon_bg']); ?> flex items-center justify-center"><span class="<?php echo esc_attr($item['icon_text']); ?> font-bold text-xs"><?php echo esc_html($item['icon_letter']); ?></span></div>
                        </div>
                        <p class="text-sm font-medium text-white transition-colors group-hover:text-violet-400"><?php echo esc_html($item['name']); ?></p>
                    </a>
                    <?php
                        endforeach;
                    endfor;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FINAL CTA ==================== -->
    <section id="demo" class="relative py-24 overflow-hidden border-t sm:py-32 bg-gradient-to-b from-zinc-900/50 to-zinc-950 border-white/5">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 w-full h-px -translate-x-1/2 left-1/2 bg-gradient-to-r from-transparent via-violet-500/30 to-transparent"></div>
            <div class="absolute w-64 h-64 rounded-full top-1/2 left-1/4 bg-violet-600/20 blur-3xl"></div>
            <div class="absolute w-64 h-64 rounded-full top-1/2 right-1/4 bg-cyan-600/20 blur-3xl"></div>
        </div>

        <div class="relative max-w-4xl px-4 mx-auto text-center sm:px-6 lg:px-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 border rounded-full bg-gradient-to-r from-violet-500/10 to-cyan-500/10 border-violet-500/20">
                <span class="relative flex w-2 h-2">
                    <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-emerald-400"></span>
                    <span class="relative inline-flex w-2 h-2 rounded-full bg-emerald-500"></span>
                </span>
                <span class="text-sm font-medium text-white/70"><?php echo esc_html($t['final_badge']); ?></span>
            </div>

            <h2 class="mb-6 text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">
                <?php echo esc_html($t['final_title']); ?>
                <span class="block text-transparent bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text"><?php echo esc_html($t['final_title_gradient']); ?></span>
            </h2>

            <p class="max-w-2xl mx-auto mb-10 text-lg sm:text-xl text-white/50"><?php echo $lang === 'en' ? 'Schedule a demo - we show you what Tixello looks like for your events if you come from an intermediation model.' : 'Programeaza un demo - iti aratam cum Tixello arata pentru evenimentele tale daca vii dintr-un model de intermediere.'; ?></p>

            <div class="flex flex-col items-center justify-center gap-4 mb-12 sm:flex-row">
                <a href="<?php echo home_url('/demo'); ?>" class="relative inline-flex items-center justify-center w-full gap-3 px-8 py-5 overflow-hidden text-lg font-semibold text-white transition-all shadow-2xl group sm:w-auto rounded-2xl bg-gradient-to-r from-violet-600 to-cyan-600 shadow-violet-500/30 hover:shadow-violet-500/50 hover:-translate-y-1">
                    <span class="relative"><?php echo esc_html($t['final_cta']); ?></span>
                    <svg class="relative w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>

            <div class="flex flex-wrap items-center justify-center text-sm gap-x-8 gap-y-4 text-white/40">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><?php echo esc_html($t['final_stat_1']); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><?php echo esc_html($t['final_stat_2']); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><?php echo esc_html($t['final_stat_3']); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== SECOND CTA ==================== -->
    <section class="relative py-16 border-t bg-zinc-950 border-white/5">
        <div class="max-w-4xl px-4 mx-auto text-center sm:px-6 lg:px-8">
            <h2 class="mb-4 text-2xl font-bold text-white sm:text-3xl"><?php echo $lang === 'en' ? 'Want to see what Tixello looks like on your event setup?' : 'Vrei sa vezi cum arata Tixello pe setup-ul tau de evenimente?'; ?></h2>
            <p class="max-w-2xl mx-auto mb-8 text-white/50"><?php echo $lang === 'en' ? 'Tell us some details about volume, types of events and sales channels, and we prepare a personalized Tixello demo for you.' : 'Spune-ne cateva detalii despre volum, tipuri de evenimente si canale de vanzare, iar noi pregatim un demo personalizat Tixello pentru tine.'; ?></p>
            <a href="<?php echo home_url('/contact'); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all border rounded-xl border-white/20 hover:bg-white/5 hover:border-white/30">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                <span><?php echo $lang === 'en' ? 'Open contact form' : 'Deschide formularul de contact'; ?></span>
            </a>
        </div>
    </section>

    <!-- ==================== TRANSPARENCY NOTE ==================== -->
    <section class="py-12 border-t bg-zinc-900/30 border-white/5">
        <div class="max-w-4xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-start gap-4 p-6 rounded-xl bg-white/[0.02] border border-white/10">
                <svg class="w-6 h-6 text-violet-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/></svg>
                <div>
                    <h4 class="mb-1 font-semibold text-white"><?php echo esc_html($t['transparency_title']); ?></h4>
                    <p class="text-sm leading-relaxed text-white/50"><?php echo $lang === 'en' ? 'Information about BLT.ro comes from the publicly available Terms & conditions, Privacy policy and About us pages as of October 31, 2025. If you represent BLT.ro and want updates, write to us - we are happy to update the comparison.' : 'Informatiile despre BLT.ro provin din paginile Termeni & conditii, Politica de confidentialitate si Despre noi publice la 31 octombrie 2025. Daca reprezinti BLT.ro si doresti actualizari, scrie-ne - actualizam cu placere comparatia.'; ?></p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
