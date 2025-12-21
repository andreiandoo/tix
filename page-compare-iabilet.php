<?php
/*
Template Name: Tixello vs iaBilet
*/

// Include the comparisons data
require_once get_template_directory() . '/tixello-comparisons-data.php';

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$t = tixello_get_comparison_translations();
$competitor = tixello_get_comparison_by_slug('iabilet');
$carousel_items = tixello_get_carousel_comparisons('iabilet');

// Competitor-specific content
$competitor_content = [
    'ro' => [
        'verdict_text' => 'iaBilet este un <strong class="text-yellow-400">marketplace + suită de servicii</strong> pentru organizatori: comision redus și plătești doar când vinzi (comunicat public), aplicații mobile, validator de bilete pe Android/iOS, integrări (API/plug-in) și tool-uri (inclusiv import QR extern, checkpoints, GTM/how-to).',
        'verdict_points' => [
            '<strong class="text-white/70">Promisiune cost:</strong> „Plătești doar când vinzi", comision redus; zero costuri dacă nu vinzi; „site-ul tău de bilete" din aceeași infrastructură.',
            '<strong class="text-white/70">Scan & acces:</strong> IB Validator (Android/iOS), conectare cu token din admin; suport pentru import coduri externe și checkpoints.',
            '<strong class="text-yellow-400">Metode de plată:</strong> <strong class="text-yellow-400">Apple Pay & Google Pay native</strong> (comunicate public) + alte metode; unele evenimente au rate (Card Avantaj).',
            '<strong class="text-white/70">Fiscal:</strong> Ghid care explică că biletul e fiscalizat ca <strong class="text-yellow-400">factură simplificată</strong> (facturare clasică doar la cererea clientului).',
            '<strong class="text-yellow-400">Observație:</strong> Nu publică procentele exacte de comision, SLA sau un model standard de payout (direct vs. decont).',
        ],
        'compare_1_tixello' => 'Încasezi <strong class="text-emerald-400">direct în contul tău</strong>; plătești doar când vinzi; comision <strong class="text-emerald-400">1-3%</strong> (1% exclusiv / 2% non-exclusiv / 3% când Tixello tranzacționează). <strong class="text-white">Poți include comisionul în preț sau îl poți afișa peste</strong> — optimizezi conversia.',
        'compare_1_competitor' => 'Comision redus și „plătești doar când vinzi" comunicate public; <strong class="text-yellow-400">nu sunt publicate procentele exacte</strong>, SLA sau un payout model standard (direct/decont) în documentele publice.',
        'compare_2_tixello' => '<strong class="text-emerald-400">Admin dedicat</strong> (nu-l împarți), GTM propriu, acces complet la date & analytics, export & integrări — instalare plug & play pe serverul tău.',
        'compare_2_competitor' => 'Validator + tool-uri solide (<strong class="text-yellow-400">import coduri, checkpoints</strong>), GTM how-to; nu comunică public un admin self-hosted per organizator sau SLA.',
        'compare_3_tixello' => '<strong class="text-emerald-400">Multi-processor</strong> (routing & fallback) pentru aprobare mai bună; A/B pe „inclus vs. peste" la comision; e-mailing & segmente în platformă.',
        'compare_3_competitor' => '<strong class="text-yellow-400">Apple Pay/Google Pay native</strong> și opțiuni multiple de plată; unele evenimente cu rate (Card Avantaj). UX familiar pentru cumpărători.',
        'compare_4_tixello' => 'Facturare automată, <strong class="text-emerald-400">eFactura</strong>, documente post-eveniment generate automat, chat live cu suport.',
        'compare_4_competitor' => 'Ghid de fiscalizare (<strong class="text-yellow-400">bilet = factură simplificată</strong>; factură la cerere), help center extins.',
        'table' => [
            'cost_tixello' => '1-3% (plătești doar când vinzi; inclus vs. peste)',
            'cost_competitor' => '„Comision redus" + „plătești doar când vinzi"; procente exacte nepublice',
            'cashflow_tixello' => 'Banii direct în contul tău; multi-processor',
            'cashflow_competitor' => 'Necomunicat public (payout/decont) pentru organizatori',
            'admin_tixello' => 'Admin dedicat pe tenant; GTM propriu; export',
            'admin_competitor' => 'Validator iOS/Android, import coduri & checkpoints',
            'delivery_tixello' => 'e-ticket + wallet; rapoarte live, email & promo',
            'delivery_competitor' => 'Apple Pay/Google Pay native; uneori rate',
            'fiscal_tixello' => 'Facturi + eFactura automat',
            'fiscal_competitor' => 'Bilet = factură simplificată; factură la cerere',
            'refund_tixello' => 'Flexibilă; integrată în dashboard',
            'refund_competitor' => 'Politică standard marketplace',
            'sla_tixello' => '99.99% · ~300ms',
            'sla_competitor' => 'Necomunicat public',
        ],
        'faq' => [
            [
                'q' => 'iaBilet publică procentele de comision pentru organizatori?',
                'a' => 'Comunică „comision redus" și „plătești doar când vinzi", dar nu publică procentele exacte sau un SLA; termenii pentru organizatori sunt într-o pagină dedicată. La Tixello, comisionul e transparent: 1-3%.',
            ],
            [
                'q' => 'Pot scana bilete cu telefonul?',
                'a' => 'Da. iaBilet are IB Validator (Android/iOS). Tixello oferă, de asemenea, scan & validare cu rapoarte live și blocări pe zone/rânduri — plus admin dedicat cu export complet.',
            ],
            [
                'q' => 'Ce metode de plată are iaBilet?',
                'a' => 'Au anunțat Apple Pay & Google Pay native și menționează „multe metode" (inclusiv rate pentru unele evenimente). Tixello te lasă să alegi mai mulți procesatori simultan pentru aprobare și conversie mai bună.',
            ],
            [
                'q' => 'Cum stă treaba cu facturile?',
                'a' => 'La iaBilet, biletul este factură simplificată; se emite factură la cerere. La Tixello, facturare + eFactura și pachet de documente post-eveniment sunt automate.',
            ],
            [
                'q' => 'Ce avantaje oferă iaBilet pentru organizatori?',
                'a' => 'iaBilet oferă tool-uri utile precum import coduri externe, checkpoints pentru acces și aplicație validator. La Tixello, ai admin dedicat pe tenant cu control total asupra datelor și GTM propriu.',
            ],
        ],
    ],
    'en' => [
        'verdict_text' => 'iaBilet is a <strong class="text-yellow-400">marketplace + service suite</strong> for organizers: reduced commission and you only pay when you sell (publicly communicated), mobile apps, ticket validator on Android/iOS, integrations (API/plug-in) and tools (including external QR import, checkpoints, GTM/how-to).',
        'verdict_points' => [
            '<strong class="text-white/70">Cost promise:</strong> "You only pay when you sell", reduced commission; zero costs if you don\'t sell; "your ticket site" from the same infrastructure.',
            '<strong class="text-white/70">Scan & access:</strong> IB Validator (Android/iOS), connection with token from admin; support for external code import and checkpoints.',
            '<strong class="text-yellow-400">Payment methods:</strong> <strong class="text-yellow-400">Native Apple Pay & Google Pay</strong> (publicly communicated) + other methods; some events have installments (Card Avantaj).',
            '<strong class="text-white/70">Fiscal:</strong> Guide explaining that the ticket is fiscalized as a <strong class="text-yellow-400">simplified invoice</strong> (classic invoicing only at customer request).',
            '<strong class="text-yellow-400">Note:</strong> Does not publish exact commission percentages, SLA or a standard payout model (direct vs. settlement).',
        ],
        'compare_1_tixello' => 'You collect <strong class="text-emerald-400">directly in your account</strong>; you pay only when you sell; commission <strong class="text-emerald-400">1-3%</strong> (1% exclusive / 2% non-exclusive / 3% when Tixello transacts). <strong class="text-white">You can include the commission in the price or display it on top</strong> — optimize conversion.',
        'compare_1_competitor' => 'Reduced commission and "you only pay when you sell" publicly communicated; <strong class="text-yellow-400">exact percentages are not published</strong>, SLA or a standard payout model (direct/settlement) in public documents.',
        'compare_2_tixello' => '<strong class="text-emerald-400">Dedicated admin</strong> (not shared), own GTM, full access to data & analytics, export & integrations — plug & play installation on your server.',
        'compare_2_competitor' => 'Validator + solid tools (<strong class="text-yellow-400">code import, checkpoints</strong>), GTM how-to; does not publicly communicate a self-hosted admin per organizer or SLA.',
        'compare_3_tixello' => '<strong class="text-emerald-400">Multi-processor</strong> (routing & fallback) for better approval; A/B on "included vs. on top" for commission; emailing & segments in platform.',
        'compare_3_competitor' => '<strong class="text-yellow-400">Native Apple Pay/Google Pay</strong> and multiple payment options; some events with installments (Card Avantaj). Familiar UX for buyers.',
        'compare_4_tixello' => 'Automatic invoicing, <strong class="text-emerald-400">e-invoicing</strong>, post-event documents generated automatically, live chat with support.',
        'compare_4_competitor' => 'Fiscalization guide (<strong class="text-yellow-400">ticket = simplified invoice</strong>; invoice on request), extended help center.',
        'table' => [
            'cost_tixello' => '1-3% (pay only when you sell; included vs. on top)',
            'cost_competitor' => '"Reduced commission" + "pay only when you sell"; exact percentages not public',
            'cashflow_tixello' => 'Money directly to your account; multi-processor',
            'cashflow_competitor' => 'Not publicly communicated (payout/settlement) for organizers',
            'admin_tixello' => 'Dedicated admin per tenant; own GTM; export',
            'admin_competitor' => 'Validator iOS/Android, code import & checkpoints',
            'delivery_tixello' => 'e-ticket + wallet; live reports, email & promo',
            'delivery_competitor' => 'Native Apple Pay/Google Pay; sometimes installments',
            'fiscal_tixello' => 'Invoices + automatic e-invoicing',
            'fiscal_competitor' => 'Ticket = simplified invoice; invoice on request',
            'refund_tixello' => 'Flexible; integrated in dashboard',
            'refund_competitor' => 'Standard marketplace policy',
            'sla_tixello' => '99.99% · ~300ms',
            'sla_competitor' => 'Not publicly communicated',
        ],
        'faq' => [
            [
                'q' => 'Does iaBilet publish commission percentages for organizers?',
                'a' => 'They communicate "reduced commission" and "you only pay when you sell", but do not publish exact percentages or an SLA; terms for organizers are on a dedicated page. At Tixello, the commission is transparent: 1-3%.',
            ],
            [
                'q' => 'Can I scan tickets with my phone?',
                'a' => 'Yes. iaBilet has IB Validator (Android/iOS). Tixello also offers scan & validation with live reports and zone/row blocking — plus dedicated admin with complete export.',
            ],
            [
                'q' => 'What payment methods does iaBilet have?',
                'a' => 'They announced native Apple Pay & Google Pay and mention "many methods" (including installments for some events). Tixello lets you choose multiple processors simultaneously for better approval and conversion.',
            ],
            [
                'q' => 'How does invoicing work?',
                'a' => 'At iaBilet, the ticket is a simplified invoice; invoice is issued on request. At Tixello, invoicing + e-invoicing and post-event document package are automatic.',
            ],
            [
                'q' => 'What advantages does iaBilet offer for organizers?',
                'a' => 'iaBilet offers useful tools like external code import, access checkpoints and validator app. At Tixello, you have dedicated admin per tenant with full control over data and your own GTM.',
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
        <div class="absolute w-24 h-24 rounded-full bottom-20 left-1/4 bg-yellow-500/10 blur-2xl animate-float"></div>

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
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl <?php echo esc_attr($competitor['icon_bg']); ?> border border-yellow-500/20 flex items-center justify-center">
                        <span class="<?php echo esc_attr($competitor['icon_text']); ?> font-black text-2xl sm:text-3xl"><?php echo esc_html($competitor['icon_letter']); ?></span>
                    </div>
                    <div class="text-left">
                        <p class="text-2xl font-bold text-white sm:text-3xl"><?php echo esc_html($competitor['name']); ?></p>
                        <p class="text-sm <?php echo esc_attr($competitor['icon_text']); ?>"><?php echo esc_html(tixello_localize($competitor['tagline'])); ?></p>
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
                <h2 class="mb-3 text-2xl font-bold text-white sm:text-3xl"><?php echo esc_html($t['quick_comparison_title']); ?></h2>
                <p class="max-w-3xl mx-auto text-white/50"><?php echo esc_html($t['quick_comparison_desc']); ?></p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                <!-- Cost Card -->
                <div class="relative group">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/20 to-emerald-600/5 rounded-2xl blur-xl group-hover:opacity-100"></div>
                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-emerald-500/30 transition-all duration-300">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-emerald-500/10">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['card_cost']); ?></h3>
                        <p class="mb-4 text-sm text-white/50">Tixello vs <?php echo esc_html($competitor['name']); ?></p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-sm text-white/70">Tixello: 1-3% transparent</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                <span class="text-sm text-white/70"><?php echo esc_html($competitor['name']); ?>: <?php echo $lang === 'en' ? '"Reduced" (not public)' : '"Redus" (nepublic)'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cashflow Card -->
                <div class="relative group">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-violet-500/20 to-violet-600/5 rounded-2xl blur-xl group-hover:opacity-100"></div>
                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-violet-500/30 transition-all duration-300">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-violet-500/10">
                            <svg class="w-6 h-6 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/></svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['card_cashflow']); ?></h3>
                        <p class="mb-4 text-sm text-white/50">Tixello vs <?php echo esc_html($competitor['name']); ?></p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-sm text-white/70">Tixello: <?php echo $lang === 'en' ? 'Direct payout' : 'Payout direct'; ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                <span class="text-sm text-white/70"><?php echo esc_html($competitor['name']); ?>: <?php echo $lang === 'en' ? 'Not public' : 'Nepublic'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fiscalitate Card -->
                <div class="relative group">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-cyan-500/20 to-cyan-600/5 rounded-2xl blur-xl group-hover:opacity-100"></div>
                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-cyan-500/30 transition-all duration-300">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-cyan-500/10">
                            <svg class="w-6 h-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['card_fiscal']); ?></h3>
                        <p class="mb-4 text-sm text-white/50">Tixello vs <?php echo esc_html($competitor['name']); ?></p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-sm text-white/70">Tixello: <?php echo $lang === 'en' ? 'Invoices + auto eFactura' : 'Facturi + eFactura auto'; ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                <span class="text-sm text-white/70"><?php echo esc_html($competitor['name']); ?>: <?php echo $lang === 'en' ? 'Simplified invoice' : 'Factură simplificată'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== DEMO CTA ==================== -->
    <section class="relative py-16 border-t bg-zinc-950 border-white/5">
        <div class="max-w-4xl px-4 mx-auto text-center sm:px-6 lg:px-8">
            <h2 class="mb-4 text-2xl font-bold text-white sm:text-3xl"><?php echo esc_html($t['demo_title']); ?></h2>
            <p class="max-w-2xl mx-auto mb-8 text-white/50"><?php echo esc_html($t['demo_desc']); ?></p>
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
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl"><?php echo esc_html($t['verdict_title']); ?></h2>
            </div>

            <div class="grid gap-8 lg:grid-cols-2">

                <!-- Competitor -->
                <div class="p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl <?php echo esc_attr($competitor['icon_bg']); ?> flex items-center justify-center">
                            <span class="<?php echo esc_attr($competitor['icon_text']); ?> font-bold text-xl"><?php echo esc_html($competitor['icon_letter']); ?></span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white"><?php echo esc_html($competitor['name']); ?> <?php echo esc_html($t['verdict_competitor_title']); ?></h3>
                            <p class="text-sm text-white/40"><?php echo esc_html($t['verdict_competitor_subtitle']); ?></p>
                        </div>
                    </div>

                    <p class="mb-6 leading-relaxed text-white/60"><?php echo $content['verdict_text']; ?></p>

                    <div class="space-y-4">
                        <?php foreach ($content['verdict_points'] as $point) : ?>
                        <div class="flex items-start gap-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-yellow-400 mt-2 flex-shrink-0"></div>
                            <p class="text-sm text-white/50"><?php echo $point; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Tixello -->
                <div class="p-6 border sm:p-8 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-cyan-500/5 border-emerald-500/20">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500">
                            <span class="text-xl font-bold text-white">T</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white"><?php echo esc_html($t['verdict_tixello_title']); ?></h3>
                            <p class="text-sm text-emerald-400"><?php echo esc_html($t['verdict_tixello_subtitle']); ?></p>
                        </div>
                    </div>

                    <p class="mb-6 leading-relaxed text-white/70">
                        <?php echo $lang === 'en'
                            ? 'Tixello is a B2B platform for organizers: direct cashflow to your account, 1-3% commission, dedicated tenant admin, multi-processor payments, automatic invoicing + e-invoicing, advanced tracking and live chat with the team.'
                            : 'Tixello este o platformă B2B pentru organizatori: cashflow direct în contul tău, comision 1-3%, admin dedicat pe tenant, multi-processor plăți, facturare automată + eFactura, tracking avansat și chat live cu echipa.'; ?>
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
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Direct payout' : 'Payout direct'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'No subscription' : 'Fără abonament'; ?></span>
                        </div>
                    </div>

                    <!-- Competitor Side -->
                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl <?php echo esc_attr($competitor['icon_bg']); ?> flex items-center justify-center">
                                <span class="<?php echo esc_attr($competitor['icon_text']); ?> font-bold"><?php echo esc_html($competitor['icon_letter']); ?></span>
                            </div>
                            <span class="text-lg font-bold text-white"><?php echo esc_html($competitor['name']); ?></span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_1_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_1_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-500/10 text-yellow-400/70"><?php echo $lang === 'en' ? '"Reduced commission"' : '"Comision redus"'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Percentages not public' : 'Procente nepublice'; ?></span>
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
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">Self-hosted</span>
                        </div>
                    </div>

                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl <?php echo esc_attr($competitor['icon_bg']); ?> flex items-center justify-center">
                                <span class="<?php echo esc_attr($competitor['icon_text']); ?> font-bold"><?php echo esc_html($competitor['icon_letter']); ?></span>
                            </div>
                            <span class="text-lg font-bold text-white"><?php echo esc_html($competitor['name']); ?></span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_2_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_2_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-500/10 text-yellow-400/70">IB Validator</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-500/10 text-yellow-400/70">Checkpoints</span>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Plati & conversie -->
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
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">Multi-processor</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">A/B testing</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">E-mailing</span>
                        </div>
                    </div>

                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl <?php echo esc_attr($competitor['icon_bg']); ?> flex items-center justify-center">
                                <span class="<?php echo esc_attr($competitor['icon_text']); ?> font-bold"><?php echo esc_html($competitor['icon_letter']); ?></span>
                            </div>
                            <span class="text-lg font-bold text-white"><?php echo esc_html($competitor['name']); ?></span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_3_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_3_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-500/10 text-yellow-400/70">Apple/Google Pay</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-500/10 text-yellow-400/70"><?php echo $lang === 'en' ? 'Installments' : 'Rate'; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Item 4: Fiscalitate & operațional -->
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
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">eFactura auto</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Post-event docs' : 'Documente post-event'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">Chat live</span>
                        </div>
                    </div>

                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-white/20 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl <?php echo esc_attr($competitor['icon_bg']); ?> flex items-center justify-center">
                                <span class="<?php echo esc_attr($competitor['icon_text']); ?> font-bold"><?php echo esc_html($competitor['icon_letter']); ?></span>
                            </div>
                            <span class="text-lg font-bold text-white"><?php echo esc_html($competitor['name']); ?></span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_4_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_4_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-500/10 text-yellow-400/70"><?php echo $lang === 'en' ? 'Simplified invoice' : 'Factură simplificată'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-500/10 text-yellow-400/70"><?php echo $lang === 'en' ? 'Invoice on request' : 'Factură la cerere'; ?></span>
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
                <h2 class="mb-3 text-2xl font-bold text-white sm:text-3xl"><?php echo esc_html($t['table_title']); ?> <?php echo esc_html($competitor['name']); ?></h2>
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
                            <div class="w-6 h-6 rounded <?php echo esc_attr($competitor['icon_bg']); ?> flex items-center justify-center"><span class="<?php echo esc_attr($competitor['icon_text']); ?> font-bold text-xs"><?php echo esc_html($competitor['icon_letter']); ?></span></div>
                            <span class="text-sm font-semibold text-white"><?php echo esc_html($competitor['name']); ?></span>
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
                        <div class="p-4 text-sm text-center sm:p-5 text-yellow-400/70"><?php echo esc_html($content['table']['delivery_competitor']); ?></div>
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
                <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl"><?php echo esc_html($t['faq_title']); ?> <?php echo esc_html($competitor['name']); ?></h2>
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

            <p class="max-w-2xl mx-auto mb-10 text-lg sm:text-xl text-white/50"><?php echo esc_html($t['final_desc']); ?></p>

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

    <!-- ==================== TRANSPARENCY NOTE ==================== -->
    <section class="py-12 border-t bg-zinc-900/30 border-white/5">
        <div class="max-w-4xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-start gap-4 p-6 rounded-xl bg-white/[0.02] border border-white/10">
                <svg class="w-6 h-6 text-violet-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/></svg>
                <div>
                    <h4 class="mb-1 font-semibold text-white"><?php echo esc_html($t['transparency_title']); ?></h4>
                    <p class="text-sm leading-relaxed text-white/50"><?php echo esc_html($t['transparency_text']); ?></p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
