<?php
/*
Template Name: Tixello vs MyTicket
*/

// Include the comparisons data
require_once get_template_directory() . '/tixello-comparisons-data.php';

$lang = function_exists('pll_current_language') ? pll_current_language() : 'ro';
$t = tixello_get_comparison_translations();
$competitor = tixello_get_comparison_by_slug('myticket');
$carousel_items = tixello_get_carousel_comparisons('myticket');

// Competitor-specific content
$competitor_content = [
    'ro' => [
        'verdict_text' => 'MyTicket (operat de Ticketing Nation SRL) este un marketplace care intermediaza vanzarea de bilete online si prin parteneri fizici (Carturesti, Carrefour). Ofera acces la rapoarte de vanzare, servicii de control acces, mecanisme de decontare si optiuni multiple de plata (mobilPay, rate, ramburs, carduri culturale, inclusiv GoCrypto prin ecosistemul Entertix).',
        'verdict_points' => [
            '<strong class="text-white/70">Operator:</strong> site-ul myticket.ro este proprietatea Ticketing Nation SRL.',
            '<strong class="text-white/70">Plati:</strong> mobilPay (card online), transfer bancar, rate la anumite banci, plata la puncte MyTicket, ramburs, carduri culturale, GoCrypto (prin Entertix).',
            '<strong class="text-teal-400">Taxe catre client:</strong> cost procesare bilet 2 lei + cost administrare comanda 2% (TVA inclus) pot fi adaugate la pret.',
            '<strong class="text-white/70">Livrare:</strong> e-ticket (print at home) sau curier; retea de puncte & magazine partenere (Carturesti, Carrefour).',
            '<strong class="text-white/70">Servicii pentru organizatori:</strong> consultanta, marketing, control acces & vanzare la intrare, rapoarte in timp real, mecanisme rapide de decontare (settlement), registratura & depunere deconturi.',
            '<strong class="text-white/70">Payout:</strong> "Sumele incasate aferente biletelor sunt trimise la intervale precise in conturile organizatorilor, conform acordurilor" (settlement periodic, nu payout instant).',
            '<strong class="text-white/70">Fiscal:</strong> in FAQ, MyTicket noteaza ca "biletele sunt documente deja fiscalizate", de regula fara factura separata pentru client.',
        ],
        'compare_1_tixello' => 'Banii intra <strong class="text-emerald-400">direct in contul tau</strong>; platesti doar cand vinzi; comision <strong class="text-emerald-400">1-3%</strong> (1% exclusiv / 2% non-exclusiv / 3% daca Tixello proceseaza tranzactiile). Poti include comisionul in pret sau il poti afisa peste ca sa optimizezi conversia.',
        'compare_1_competitor' => 'Model de intermediere cu <strong class="text-teal-400">decontari periodice</strong>; nu sunt publicate procente pentru comisionul organizatorilor. La client pot aparea taxe suplimentare de 2 lei/bilet + 2% administrare comanda, ceea ce poate afecta perceptia de pret si conversia.',
        'compare_2_tixello' => '<strong class="text-emerald-400">Admin dedicat</strong> (nu il imparti cu alti organizatori), GTM propriu, acces complet la date & analytics, export & integrari; instalare aproape plug & play pe serverul tau.',
        'compare_2_competitor' => 'Ofera rapoarte de vanzare, consultanta si marketing in reteaua proprie. <strong class="text-teal-400">Nu comunica public</strong> un admin self-hosted per organizator, un GTM propriu per tenant sau un SLA clar — ramai in logica unui marketplace centralizat.',
        'compare_3_tixello' => 'Facturare automata, <strong class="text-emerald-400">eFactura</strong>, pachet documente fiscale & legale post-eveniment, multi-processor plati (fallback & routing), tracking avansat al surselor, chat live.',
        'compare_3_competitor' => 'Pune accent pe distributie (online + retail), control acces, vanzare la intrare si settlement. <strong class="text-teal-400">eFactura sau automatizarile fiscale pentru Romania nu sunt comunicate public</strong>; o parte importanta din sarcina fiscala ramane la organizator.',
        'compare_4_tixello' => 'Poti rula teste inclus vs. peste pentru comision, segmentezi audiente, rulezi emailing si coduri promo din platforma. Harti de locuri cu blocari la nivel de zone/randuri, personalizare bilete si rapoarte live pe conversie.',
        'compare_4_competitor' => 'Ofera magazine partenere (Carturesti, Carrefour), e-ticket/curier si optiunea <strong class="text-teal-400">CareTix</strong> – clientul poate cumpara "drept de retragere" la 5% din valoarea biletelor, in anumite conditii. Focusul este pe accesul la retea, nu pe fine-tuning-ul conversiei din panoul tau.',
        'table' => [
            'cost_tixello' => '1-3% (platesti doar cand vinzi; inclus in pret sau peste)',
            'cost_competitor' => 'Taxe client posibile: 2 lei/bilet + 2% admin; procente organizatori nepublice',
            'cashflow_tixello' => 'Banii direct in contul tau; multi-processor, fallback',
            'cashflow_competitor' => 'Decontari periodice catre organizator, conform acordurilor',
            'admin_tixello' => 'Admin dedicat pe tenant; GTM propriu; export',
            'admin_competitor' => 'Rapoarte de vanzare; nu se comunica public admin self-hosted/SLA',
            'delivery_tixello' => 'e-ticket + wallet; rapoarte live, email & promo',
            'delivery_competitor' => 'Online + magazine partenere (Carturesti, Carrefour)',
            'fiscal_tixello' => 'Facturi + eFactura, documente post-eveniment',
            'fiscal_competitor' => '"Biletele sunt documente deja fiscalizate" (FAQ)',
            'refund_tixello' => 'Flexibila; integrata in dashboard',
            'refund_competitor' => 'CareTix optional (~5%); control acces',
            'sla_tixello' => '99.99% · ~300ms',
            'sla_competitor' => 'Necomunicat public',
        ],
        'faq' => [
            [
                'q' => 'Publica MyTicket comisioanele pentru organizatori?',
                'a' => 'Nu am gasit procente publicate pe site; conditiile se stabilesc contractual. La Tixello, comisionul este transparent: 1-3%, astfel incat poti calcula din start costul total, inainte sa intri in negocieri.',
            ],
            [
                'q' => 'Cand imi intra banii?',
                'a' => 'In Tixello, banii ajung direct in contul tau (payout direct), cu multi-processor & fallback. La MyTicket, termenii indica faptul ca sumele sunt transferate la intervale in conturile organizatorilor, conform acordurilor — adica un settlement periodic, nu payout instant.',
            ],
            [
                'q' => 'Ce inseamna CareTix?',
                'a' => 'CareTix este un add-on pentru cumparator (contra ~5% din valoarea biletelor), care permite renuntarea la participare in anumite conditii. Poate creste increderea la cumparare, dar creste si costul final pentru client.',
            ],
            [
                'q' => 'Ce metode de plata ofera MyTicket comparativ cu Tixello?',
                'a' => 'MyTicket ofera mobilPay (card), transfer bancar, rate pentru anumite banci, plata la puncte MyTicket, ramburs, carduri culturale si GoCrypto prin Entertix. Tixello lucreaza cu multi-processor, focus pe stabilitate, routing si fallback, astfel incat sa reduci rata tranzactiilor esuate si sa pastrezi controlul pe fluxul de plata.',
            ],
        ],
    ],
    'en' => [
        'verdict_text' => 'MyTicket (operated by Ticketing Nation SRL) is a marketplace that intermediates ticket sales online and through physical partners (Carturesti, Carrefour). It offers access to sales reports, access control services, settlement mechanisms and multiple payment options (mobilPay, installments, cash on delivery, cultural cards, including GoCrypto through the Entertix ecosystem).',
        'verdict_points' => [
            '<strong class="text-white/70">Operator:</strong> the myticket.ro website is owned by Ticketing Nation SRL.',
            '<strong class="text-white/70">Payments:</strong> mobilPay (online card), bank transfer, installments at certain banks, payment at MyTicket points, cash on delivery, cultural cards, GoCrypto (through Entertix).',
            '<strong class="text-teal-400">Client fees:</strong> ticket processing cost 2 lei + order administration cost 2% (VAT included) may be added to the price.',
            '<strong class="text-white/70">Delivery:</strong> e-ticket (print at home) or courier; network of points & partner stores (Carturesti, Carrefour).',
            '<strong class="text-white/70">Services for organizers:</strong> consulting, marketing, access control & on-site sales, real-time reports, fast settlement mechanisms, registry & settlement filing.',
            '<strong class="text-white/70">Payout:</strong> "The amounts collected for tickets are sent at precise intervals to the organizers\' accounts, according to the agreements" (periodic settlement, not instant payout).',
            '<strong class="text-white/70">Fiscal:</strong> in the FAQ, MyTicket notes that "tickets are already fiscalized documents", usually without a separate invoice for the client.',
        ],
        'compare_1_tixello' => 'Money goes <strong class="text-emerald-400">directly to your account</strong>; you pay only when you sell; commission <strong class="text-emerald-400">1-3%</strong> (1% exclusive / 2% non-exclusive / 3% if Tixello processes transactions). You can include the commission in the price or display it on top to optimize conversion.',
        'compare_1_competitor' => 'Intermediation model with <strong class="text-teal-400">periodic settlements</strong>; percentages for organizer commission are not published. Additional fees of 2 lei/ticket + 2% order administration may appear to the client, which can affect price perception and conversion.',
        'compare_2_tixello' => '<strong class="text-emerald-400">Dedicated admin</strong> (not shared with other organizers), own GTM, full access to data & analytics, export & integrations; almost plug & play installation on your server.',
        'compare_2_competitor' => 'Offers sales reports, consulting and marketing in its own network. <strong class="text-teal-400">Does not publicly communicate</strong> a self-hosted admin per organizer, own GTM per tenant or a clear SLA — you remain in the logic of a centralized marketplace.',
        'compare_3_tixello' => 'Automatic invoicing, <strong class="text-emerald-400">e-invoicing</strong>, fiscal & legal documents package post-event, multi-processor payments (fallback & routing), advanced source tracking, live chat.',
        'compare_3_competitor' => 'Focuses on distribution (online + retail), access control, on-site sales and settlement. <strong class="text-teal-400">e-invoicing or fiscal automations for Romania are not publicly communicated</strong>; a significant part of the fiscal burden remains with the organizer.',
        'compare_4_tixello' => 'You can run included vs. on top tests for commission, segment audiences, run emailing and promo codes from the platform. Seat maps with zone/row blocking, ticket personalization and live conversion reports.',
        'compare_4_competitor' => 'Offers partner stores (Carturesti, Carrefour), e-ticket/courier and the <strong class="text-teal-400">CareTix</strong> option – the client can buy "right of withdrawal" at 5% of ticket value, under certain conditions. The focus is on network access, not on fine-tuning conversion from your panel.',
        'table' => [
            'cost_tixello' => '1-3% (pay only when you sell; included in price or on top)',
            'cost_competitor' => 'Possible client fees: 2 lei/ticket + 2% admin; organizer percentages not public',
            'cashflow_tixello' => 'Money directly to your account; multi-processor, fallback',
            'cashflow_competitor' => 'Periodic settlements to organizer, according to agreements',
            'admin_tixello' => 'Dedicated admin per tenant; own GTM; export',
            'admin_competitor' => 'Sales reports; self-hosted admin/SLA not publicly communicated',
            'delivery_tixello' => 'e-ticket + wallet; live reports, email & promo',
            'delivery_competitor' => 'Online + partner stores (Carturesti, Carrefour)',
            'fiscal_tixello' => 'Invoices + e-invoicing, post-event documents',
            'fiscal_competitor' => '"Tickets are already fiscalized documents" (FAQ)',
            'refund_tixello' => 'Flexible; integrated in dashboard',
            'refund_competitor' => 'Optional CareTix (~5%); access control',
            'sla_tixello' => '99.99% · ~300ms',
            'sla_competitor' => 'Not publicly communicated',
        ],
        'faq' => [
            [
                'q' => 'Does MyTicket publish commissions for organizers?',
                'a' => 'We did not find percentages published on the site; conditions are set contractually. At Tixello, the commission is transparent: 1-3%, so you can calculate the total cost from the start, before entering negotiations.',
            ],
            [
                'q' => 'When do I get my money?',
                'a' => 'In Tixello, money goes directly to your account (direct payout), with multi-processor & fallback. At MyTicket, terms indicate that amounts are transferred at intervals to organizers\' accounts, according to agreements — meaning periodic settlement, not instant payout.',
            ],
            [
                'q' => 'What does CareTix mean?',
                'a' => 'CareTix is an add-on for the buyer (for ~5% of ticket value), which allows withdrawal from participation under certain conditions. It can increase confidence in buying, but also increases the final cost for the client.',
            ],
            [
                'q' => 'What payment methods does MyTicket offer compared to Tixello?',
                'a' => 'MyTicket offers mobilPay (card), bank transfer, installments for certain banks, payment at MyTicket points, cash on delivery, cultural cards and GoCrypto through Entertix. Tixello works with multi-processor, focusing on stability, routing and fallback, so you reduce the rate of failed transactions and keep control of the payment flow.',
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
        <div class="absolute w-24 h-24 rounded-full bottom-20 left-1/4 bg-teal-500/10 blur-2xl animate-float"></div>

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
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl <?php echo esc_attr($competitor['icon_bg']); ?> border border-teal-500/20 flex items-center justify-center">
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
                                <svg class="flex-shrink-0 w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                <span class="text-sm text-white/70"><?php echo esc_html($competitor['name']); ?>: <?php echo $lang === 'en' ? 'Not publicly specified' : 'Nespecificat public'; ?></span>
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
                        <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['card_cashflow']); ?></h3>
                        <p class="mb-4 text-sm text-white/50">Tixello vs <?php echo esc_html($competitor['name']); ?></p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-sm text-white/70">Tixello: <?php echo $lang === 'en' ? 'Direct payout' : 'Payout direct'; ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                                <span class="text-sm text-white/70"><?php echo esc_html($competitor['name']); ?>: <?php echo $lang === 'en' ? 'Periodic settlement' : 'Settlement periodic'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Platform Card -->
                <div class="relative group">
                    <div class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-cyan-500/20 to-cyan-600/5 rounded-2xl blur-xl group-hover:opacity-100"></div>
                    <div class="relative p-6 sm:p-8 rounded-2xl bg-white/[0.03] border border-white/10 hover:border-cyan-500/30 transition-all duration-300">
                        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-cyan-500/10">
                            <svg class="w-6 h-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-white"><?php echo esc_html($t['card_fiscal']); ?></h3>
                        <p class="mb-4 text-sm text-white/50">Tixello vs <?php echo esc_html($competitor['name']); ?></p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-sm text-white/70">Tixello: <?php echo $lang === 'en' ? 'Dedicated admin, eFactura' : 'Admin dedicat, eFactura'; ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="flex-shrink-0 w-5 h-5 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                                <span class="text-sm text-white/70"><?php echo esc_html($competitor['name']); ?>: <?php echo $lang === 'en' ? 'Marketplace + Retail' : 'Marketplace + Retail'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-8 text-xs text-center text-white/30">* <?php echo $lang === 'en' ? 'Values are indicative and reflect the difference in approach: Tixello prioritizes direct cashflow, commission transparency and automatic fiscality; MyTicket relies on intermediation, distribution and retail.' : 'Valorile sunt orientative si reflecta diferenta de abordare: Tixello prioritizeaza cashflow direct, transparenta comisioanelor si fiscalitatea automata; MyTicket mizeaza pe intermediere, distributie si retail.'; ?></p>
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
                            <div class="w-1.5 h-1.5 rounded-full bg-teal-400 mt-2 flex-shrink-0"></div>
                            <p class="text-sm text-white/50"><?php echo $point; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-6 p-4 rounded-lg bg-white/[0.02] border border-white/5">
                        <p class="text-xs text-white/40"><strong class="text-white/50">Context:</strong> <?php echo $lang === 'en' ? 'from 2024-2025, MyTicket & Entertix are part of the Piletilevi Group (PLG), which announced the full takeover of local entities in July 2025.' : 'din 2024-2025, MyTicket & Entertix fac parte din grupul Piletilevi (PLG), care a anuntat preluarea integrala a entitatilor locale in iulie 2025.'; ?></p>
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
                            : 'Tixello este o platforma B2B pentru organizatori: cashflow direct in contul tau, comision 1-3%, admin dedicat pe tenant, multi-processor plati, facturare automata + eFactura, tracking avansat si chat live cu echipa.'; ?>
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
                <p class="max-w-3xl mx-auto text-white/50"><?php echo $lang === 'en' ? 'MyTicket relies on wide distribution and retail partners. Tixello puts the organizer\'s control at the center: direct cashflow, low total cost and automatic fiscality for the local market.' : 'MyTicket mizeaza pe distributie larga si parteneri retail. Tixello pune in centru controlul organizatorului: cashflow direct, cost total mic si fiscalitate automata pentru piata locala.'; ?></p>
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
                        <p class="mb-4 text-sm text-white/50"><?php echo $lang === 'en' ? 'Instead of "we\'ll see at settlement", you have from the start a clear, controllable cost model that\'s easy to simulate in Excel.' : 'In loc de "vedem la decont", ai din start un model de cost clar, controlabil si usor de simulat in Excel.'; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">1-3% <?php echo $lang === 'en' ? 'commission' : 'comision'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Direct payout' : 'Payout direct'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Transparent' : 'Transparent'; ?></span>
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
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Periodic settlement' : 'Settlement periodic'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? '2 lei + 2% client fees' : '2 lei + 2% taxe client'; ?></span>
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
                        <p class="mb-4 text-sm text-white/50"><?php echo $lang === 'en' ? 'The platform becomes your ticketing infrastructure, not just a marketplace account.' : 'Platforma devine infrastructura ta de ticketing, nu doar un cont in marketplace.'; ?></p>
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
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40">Marketplace</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Sales reports' : 'Rapoarte vanzare'; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Fiscalitate & operational -->
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
                        <p class="mb-4 text-sm text-white/50"><?php echo $lang === 'en' ? 'Where MyTicket says "tickets are already fiscalized documents", Tixello adds the entire chain: invoices, e-invoicing, summaries and coherent fiscal archive.' : 'Acolo unde MyTicket spune "biletele sunt documente deja fiscalizate", Tixello adauga tot lantul: facturi, eFactura, centralizatoare si arhiva fiscala coerenta.'; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">eFactura</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">Multi-processor</span>
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
                        <h3 class="mb-3 text-xl font-bold text-white"><?php echo esc_html($t['compare_3_title']); ?></h3>
                        <p class="mb-4 leading-relaxed text-white/60"><?php echo $content['compare_3_competitor']; ?></p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Distribution' : 'Distributie'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Access control' : 'Control acces'; ?></span>
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
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400">Seat maps</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Promo codes' : 'Coduri promo'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400"><?php echo $lang === 'en' ? 'Live reports' : 'Rapoarte live'; ?></span>
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
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40"><?php echo $lang === 'en' ? 'Retail partners' : 'Parteneri retail'; ?></span>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-white/5 text-white/40">CareTix</span>
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
                <p class="max-w-2xl mx-auto text-white/50"><?php echo $lang === 'en' ? 'From the first ticket to the final fiscal report, Tixello is built to help you keep more of each euro collected and lose less time in Excel.' : 'De la primul bilet pana la raportul fiscal final, Tixello este construit sa te ajute sa pastrezi mai mult din fiecare leu incasat si sa pierzi mai putin timp in Excel.'; ?></p>
            </div>

            <div class="grid max-w-4xl gap-6 mx-auto sm:grid-cols-2">

                <div class="group p-6 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-emerald-500/30 hover:bg-white/[0.04] transition-all">
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-emerald-500/10">
                            <span class="font-bold text-emerald-400">1</span>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-white"><?php echo $lang === 'en' ? 'Lower & predictable total cost' : 'Cost total mai mic & previzibil'; ?></h3>
                            <p class="text-sm leading-relaxed text-white/50"><?php echo $lang === 'en' ? 'Choose 1-3%, without imposed fees and without opaque commission structure. Decide how to display the commission (included vs. on top) and easily simulate the impact on the final price.' : 'Alegi 1-3%, fara feed-uri impuse si fara structura opaca de comisioane. Decizi cum afisezi comisionul (inclus vs. peste) si poti simula usor impactul pe pretul final.'; ?></p>
                        </div>
                    </div>
                </div>

                <div class="group p-6 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-emerald-500/30 hover:bg-white/[0.04] transition-all">
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-emerald-500/10">
                            <span class="font-bold text-emerald-400">2</span>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-white"><?php echo $lang === 'en' ? 'Higher conversion, with clear data' : 'Conversie mai mare, cu date clare'; ?></h3>
                            <p class="text-sm leading-relaxed text-white/50"><?php echo $lang === 'en' ? 'See exactly where sales come from, adjust marketing budgets and reduce losses from ads. Stop guessing - make decisions based on numbers, not impressions.' : 'Vezi exact de unde vin vanzarile, ajustezi bugetele de marketing si scazi pierderile din ads. Nu mai ghicesti — iei decizii pe cifre, nu pe impresii.'; ?></p>
                        </div>
                    </div>
                </div>

                <div class="group p-6 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-emerald-500/30 hover:bg-white/[0.04] transition-all">
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-emerald-500/10">
                            <span class="font-bold text-emerald-400">3</span>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-white"><?php echo $lang === 'en' ? 'Direct cashflow & zero admin burden' : 'Cashflow direct & zero corvoada administrativa'; ?></h3>
                            <p class="text-sm leading-relaxed text-white/50"><?php echo $lang === 'en' ? 'No waiting for transfer cycles - money goes directly to your account. Invoices, e-invoicing and post-event documents are generated automatically, so your team can focus on the event, not paperwork.' : 'Nu astepti cicluri de virare — banii ajung direct in contul tau. Facturi, eFactura si documente post-eveniment se genereaza automat, astfel incat echipa ta poate sa se ocupe de eveniment, nu de hartii.'; ?></p>
                        </div>
                    </div>
                </div>

                <div class="group p-6 rounded-2xl bg-white/[0.02] border border-white/10 hover:border-emerald-500/30 hover:bg-white/[0.04] transition-all">
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-xl bg-emerald-500/10">
                            <span class="font-bold text-emerald-400">4</span>
                        </div>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-white"><?php echo $lang === 'en' ? 'Scalable & reliable for event series' : 'Scalabil & sigur pentru seriile de evenimente'; ?></h3>
                            <p class="text-sm leading-relaxed text-white/50"><?php echo $lang === 'en' ? 'SLA 99.99%, ~300ms response time, live reports, quick editing, real-time chat support. You can grow from a local event to a complex calendar without changing platforms.' : 'SLA 99.99%, ~300ms timp de raspuns, rapoarte live, editare rapida, suport in timp real in chat. Poti creste de la un eveniment local la un calendar complex fara sa schimbi platforma.'; ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== COMPARISON TABLE ==================== -->
    <section class="relative py-20 border-t sm:py-28 bg-zinc-950 border-white/5">
        <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">

            <div class="mb-12 text-center">
                <h2 class="mb-3 text-2xl font-bold text-white sm:text-3xl"><?php echo esc_html($t['table_title']); ?> <?php echo esc_html($competitor['name']); ?></h2>
                <p class="text-white/50"><?php echo $lang === 'en' ? 'Cost, cashflow, distribution & fiscality' : 'Cost, cashflow, distributie & fiscalitate'; ?></p>
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
                        <div class="p-4 text-sm text-center border-r sm:p-5 text-white/50 border-white/5"><?php echo esc_html($content['table']['delivery_tixello']); ?></div>
                        <div class="p-4 text-sm text-center sm:p-5 text-teal-400"><?php echo esc_html($content['table']['delivery_competitor']); ?></div>
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

            <p class="mt-6 text-xs text-center text-white/30"><?php echo $lang === 'en' ? 'Key quotes: owner & T&C, payments & fees, delivery, retail partners, organizer services (access control, reports, settlements), settlement at intervals, fiscal FAQ, PLG context - according to myticket.ro and media articles consulted on October 31, 2025.' : 'Citate cheie: proprietar & T&C, plati & taxe, livrare, parteneri retail, servicii organizatori (control acces, rapoarte, deconturi), settlement la intervale, FAQ fiscal, context PLG – conform myticket.ro si articolelor media consultate la 31 octombrie 2025.'; ?></p>
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

            <p class="max-w-2xl mx-auto mb-10 text-lg sm:text-xl text-white/50"><?php echo $lang === 'en' ? 'Schedule a demo - we\'ll show you how Tixello shortens the path from announcement to sold-out and what it means, concretely, to switch from periodic settlement to direct payout, on your real events.' : 'Programeaza un demo — iti aratam cum Tixello scurteaza drumul de la anunt la sold-out si ce inseamna, concret, sa treci de la settlement periodic la payout direct, pe evenimentele tale reale.'; ?></p>

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
            <h2 class="mb-4 text-2xl font-bold text-white sm:text-3xl"><?php echo $lang === 'en' ? 'Want to see Tixello on a concrete example from your portfolio?' : 'Vrei sa vezi Tixello pe un exemplu concret din portofoliul tau?'; ?></h2>
            <p class="max-w-2xl mx-auto mb-8 text-white/50"><?php echo $lang === 'en' ? 'Tell us a few details about your events, and we\'ll prepare a personalized Tixello vs MyTicket demo: cost simulation, cashflow and conversion impact, on real numbers.' : 'Spune-ne cateva detalii despre evenimentele tale, iar noi pregatim un demo personalizat Tixello vs MyTicket: simulare de cost, cashflow si impact pe conversie, pe cifre reale.'; ?></p>
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
                    <p class="text-sm leading-relaxed text-white/50">
                        <?php echo $lang === 'en'
                            ? 'The MyTicket analysis is based on public information consulted on October 31, 2025 (MyTicket pages: T&C, payments, delivery, partners, FAQ, organizer services; media articles about the Piletilevi Group - PLG transaction). If you represent MyTicket and want updates or clarifications, write to us - we\'ll gladly update.'
                            : 'Analiza MyTicket se bazeaza pe informatii publice consultate la 31 octombrie 2025 (pagini MyTicket: T&C, plati, livrare, parteneri, FAQ, servicii organizatori; articole media despre tranzactia Piletilevi Group – PLG). Daca reprezinti MyTicket si doresti actualizari sau clarificari, scrie-ne — actualizam cu placere.'; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
