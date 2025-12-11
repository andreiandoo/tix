<?php
/*
Template Name: Tixello vs MyTicket
*/

get_header();

$current_compare = 'myticket';

$compare_links = [
    [
        'slug'  => 'eventbook',
        'label' => 'Tixello vs Eventbook',
        'url'   => '/tixello-vs-eventbook',
    ],
    [
        'slug'  => 'blt',
        'label' => 'Tixello vs BLT.ro',
        'url'   => '/tixello-vs-blt',
    ],
    [
        'slug'  => 'oveit',
        'label' => 'Tixello vs Oveit',
        'url'   => '/tixello-vs-oveit',
    ],
    [
        'slug'  => 'evticket',
        'label' => 'Tixello vs EvTicket',
        'url'   => '/tixello-vs-evticket',
    ],
    [
        'slug'  => 'eventim',
        'label' => 'Tixello vs Eventim',
        'url'   => '/tixello-vs-eventim',
    ],
    [
        'slug'  => 'myticket',
        'label' => 'Tixello vs MyTicket',
        'url'   => '/tixello-vs-myticket',
    ],
    // Adaugă restul comparațiilor aici
];
?>

<main class="bg-slate-950 text-slate-50">

    <!-- Stil pentru scroll orizontal animat -->
    <style>
        @keyframes tixello-marquee {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .tixello-marquee {
            min-width: max-content;
            animation: tixello-marquee 40s linear infinite;
        }
        .tixello-marquee:hover {
            animation-play-state: paused;
        }
    </style>

    <!-- HERO -->
    <section class="relative overflow-hidden border-b border-slate-800">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(56,189,248,0.2),_transparent_60%),_radial-gradient(circle_at_bottom,_rgba(16,185,129,0.18),_transparent_55%)] opacity-80"></div>

        <div class="relative max-w-6xl px-4 py-12 mx-auto lg:px-8 lg:py-20">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <p class="text-xs font-semibold tracking-[0.2em] text-emerald-300 uppercase mb-3">
                    Comparație soluții de ticketing pentru organizatori
                </p>

                <h1 class="text-3xl font-semibold tracking-tight lg:text-5xl text-slate-50">
                    <?php the_title(); ?>
                </h1>

                <p class="max-w-2xl mt-5 text-base lg:text-lg text-slate-200">
                    Păstrezi controlul și crești conversia. Tixello virează banii direct în contul tău, îți lasă comisionul 1–3%
                    (îl poți include în preț sau îl poți adăuga peste), îți dă admin dedicat și microservicii fiscale &amp; analytics.
                    SLA 99.99% • ~300ms timp de răspuns.
                </p>
            <?php endwhile; endif; ?>

            <div class="mt-10 grid gap-6 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-start">
                <!-- Card metrici Tixello -->
                <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/70 backdrop-blur">
                    <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                        Tixello: control, cashflow direct și cost total mai mic
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-slate-200">
                        Platformă B2B pentru organizatori: cashflow direct, comision 1–3% (fără abonamente impuse),
                        admin dedicat pe tenant, multi-processor plăți, facturare automată + eFactura, tracking avansat
                        și chat live cu echipa.
                    </p>

                    <div class="mt-6 space-y-4">
                        <?php
                        $metrics = [
                            'Cost total pentru organizator'     => ['tixello' => 92, 'myticket' => 65],
                            'Transparență comisioane & cashflow' => ['tixello' => 96, 'myticket' => 55],
                            'Control platformă & fiscalitate'   => ['tixello' => 94, 'myticket' => 60],
                        ];
                        foreach ( $metrics as $label => $values ) :
                        ?>
                            <div>
                                <div class="flex justify-between text-xs lg:text-sm text-slate-300 mb-1.5">
                                    <span><?php echo esc_html( $label ); ?></span>
                                    <span class="text-slate-400">Tixello vs MyTicket</span>
                                </div>
                                <div class="flex h-3 overflow-hidden rounded-full bg-slate-800">
                                    <div
                                        class="h-full transition-all duration-700 bg-gradient-to-r from-emerald-400 via-emerald-300 to-sky-400"
                                        style="width: <?php echo (int) $values['tixello']; ?>%;"
                                    ></div>
                                    <div
                                        class="h-full transition-all duration-700 bg-slate-600/70"
                                        style="width: <?php echo (int) $values['myticket']; ?>%;"
                                    ></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="mt-3 text-[11px] text-slate-400">
                        * Valorile sunt orientative și reflectă diferența de abordare: Tixello prioritizează cashflow direct, transparența
                        comisioanelor și fiscalitatea automată; MyTicket mizează pe intermediere, distribuție și retail.
                    </p>
                </div>

                <!-- CTA -->
                <div class="p-6 border rounded-2xl border-emerald-500/40 bg-emerald-500/10">
                    <h2 class="text-lg font-semibold text-emerald-100">
                        Vrei să vezi Tixello pe structura evenimentelor tale?
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-emerald-50/90">
                        Într-un demo live comparăm costurile și cashflow-ul Tixello vs. un marketplace de tip MyTicket,
                        pe scenarii reale (festival, venue, turneu sau evenimente corporate).
                    </p>
                    <div class="flex flex-wrap gap-3 mt-5">
                        <a
                            href="#contact-demo"
                            class="inline-flex items-center justify-center rounded-full bg-emerald-400 px-5 py-2.5 text-sm font-semibold text-slate-950 shadow-lg shadow-emerald-500/30 hover:bg-emerald-300 transition"
                        >
                            Programează un demo
                        </a>
                        <a
                            href="#contact-demo"
                            class="inline-flex items-center justify-center rounded-full border border-emerald-400/60 px-5 py-2.5 text-sm font-medium text-emerald-100 hover:bg-emerald-400/10 transition"
                        >
                            Cere ofertă personalizată
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SCROLL ORIZONTAL CU ALTE COMPARAȚII -->
    <section class="border-y border-slate-800 bg-slate-950">
        <div class="max-w-6xl px-4 py-4 mx-auto lg:px-8">
            <div class="flex items-center justify-between gap-4">
                <p class="text-xs lg:text-sm text-slate-300">
                    Vezi și alte comparații Tixello:
                </p>
            </div>
            <div class="relative mt-3 overflow-hidden">
                <div class="flex gap-3 tixello-marquee">
                    <?php for ( $i = 0; $i < 2; $i++ ) : ?>
                        <?php foreach ( $compare_links as $link ) : ?>
                            <?php
                                $is_active = ( $link['slug'] === $current_compare );
                                $base_classes = 'inline-flex items-center justify-center rounded-full border px-4 py-2 text-xs lg:text-sm font-medium transition whitespace-nowrap';
                                $active_classes = ' bg-emerald-500 text-slate-950 border-emerald-400';
                                $inactive_classes = ' bg-slate-900 text-slate-100 border-slate-700 hover:bg-slate-800';
                            ?>
                            <a
                                href="<?php echo esc_url( $link['url'] ); ?>"
                                class="<?php echo esc_attr( $base_classes . ( $is_active ? $active_classes : $inactive_classes ) ); ?>"
                            >
                                <?php echo esc_html( $link['label'] ); ?>
                            </a>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- VERDICT & MYTICKET PE SCURT -->
    <section class="max-w-6xl px-4 py-10 mx-auto space-y-8 lg:px-8 lg:py-14">
        <div class="grid lg:grid-cols-[minmax(0,1.6fr)_minmax(0,1.1fr)] gap-8">
            <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/60">
                <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                    Verdict pe scurt pentru organizatori
                </h2>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    MyTicket (operat de Ticketing Nation SRL) este un marketplace care intermediază vânzarea de bilete online și prin
                    parteneri fizici (Cărturești, Carrefour). Oferă acces la rapoarte de vânzare, servicii de control acces, mecanisme
                    de decontare și opțiuni multiple de plată (mobilPay, rate, ramburs, carduri culturale, inclusiv GoCrypto prin ecosistemul Entertix).
                </p>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Conform site-ului, cumpărătorilor li se poate aplica o taxă de procesare (2 lei/bilet + 2% administrare comandă),
                    iar sumele încasate sunt transferate către organizatori la intervale stabilite prin acord. Nu există procente publicate
                    pentru comisionul perceput organizatorilor, iar un SLA nu este comunicat public.
                </p>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Tixello este o platformă B2B pentru organizatori: cashflow direct, comision 1–3% (fără abonamente impuse),
                    admin dedicat pe tenant, multi-processor plăți, facturare automată + eFactura, tracking avansat și chat live cu echipa.
                </p>
                <p class="mt-3 text-xs lg:text-sm text-slate-400">
                    Context: din 2024–2025, MyTicket &amp; Entertix fac parte din grupul Piletilevi (PLG), care a anunțat
                    preluarea integrală a entităților locale în iulie 2025.
                </p>
            </div>

            <div class="p-6 text-sm border rounded-2xl border-slate-800 bg-slate-900/60 lg:text-base">
                <h3 class="text-base font-semibold lg:text-lg text-slate-50">
                    MyTicket pe scurt (factual, din surse publice)
                </h3>
                <ul class="mt-3 space-y-2 text-slate-200">
                    <li>• Operator: site-ul myticket.ro este proprietatea Ticketing Nation SRL.</li>
                    <li>
                        • Plăți: mobilPay (card online), transfer bancar, rate la anumite bănci, plată la puncte MyTicket, ramburs,
                          carduri culturale, GoCrypto (prin Entertix).
                    </li>
                    <li>• Taxe către client: cost procesare bilet 2 lei + cost administrare comandă 2% (TVA inclus) pot fi adăugate la preț.</li>
                    <li>• Livrare: e-ticket (print at home) sau curier; rețea de puncte &amp; magazine partenere (Cărturești, Carrefour).</li>
                    <li>
                        • Servicii pentru organizatori: consultanță, marketing, control acces &amp; vânzare la intrare, rapoarte în timp real,
                          mecanisme rapide de decontare (settlement), registratură &amp; depunere deconturi.
                    </li>
                    <li>
                        • Payout: „Sumele încasate aferente biletelor sunt trimise la intervale precise în conturile organizatorilor,
                          conform acordurilor” (settlement periodic, nu payout instant).
                    </li>
                    <li>
                        • Fiscal: în FAQ, MyTicket notează că „biletele sunt documente deja fiscalizate”, de regulă fără factură separată pentru client.
                    </li>
                </ul>
                <p class="mt-3 text-[11px] text-slate-500">
                    Bazat pe paginile MyTicket (T&amp;C, plăți, livrare, parteneri, servicii organizatori, FAQ) și articole media despre
                    tranzacția PLG, consultate la 31 octombrie 2025.
                </p>
            </div>
        </div>
    </section>

    <!-- DIFERENȚE CARE ÎȚI CRESC PROFITUL -->
    <section class="max-w-6xl px-4 pb-10 mx-auto space-y-10 lg:px-8 lg:pb-14">
        <header>
            <h2 class="text-xl font-semibold lg:text-2xl text-slate-50">
                Diferențe care îți cresc profitul (și liniștea)
            </h2>
            <p class="max-w-3xl mt-3 text-sm lg:text-base text-slate-300">
                MyTicket mizează pe distribuție largă și parteneri retail. Tixello pune în centru controlul organizatorului:
                cashflow direct, cost total mic și fiscalitate automată pentru piața locală.
            </p>
        </header>

        <!-- 1) Cashflow & comisioane -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                1) Cashflow &amp; comisioane
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">Tixello</h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Banii intră direct în contul tău; plătești doar când vinzi; comision 1–3%
                        (1% exclusiv / 2% non-exclusiv / 3% dacă Tixello procesează tranzacțiile). Poți include comisionul în preț
                        sau îl poți afișa peste ca să optimizezi conversia.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        În loc de „vedem la decont”, ai din start un model de cost clar, controlabil și ușor de simulat în Excel.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- MyTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">MyTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Model de intermediere cu decontări periodice; nu sunt publicate procente pentru comisionul organizatorilor.
                        La client pot apărea taxe suplimentare de 2 lei/bilet + 2% administrare comandă, ceea ce poate afecta percepția
                        de preț și conversia.
                    </p>
                </div>
            </div>
        </section>

        <!-- 2) Controlul platformei & al datelor -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                2) Controlul platformei &amp; al datelor
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">Tixello</h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Admin dedicat (nu îl împarți cu alți organizatori), GTM propriu, acces complet la date &amp; analytics,
                        export &amp; integrări; instalare aproape plug &amp; play pe serverul tău.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Platforma devine infrastructura ta de ticketing, nu doar un cont în marketplace.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- MyTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">MyTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Oferă rapoarte de vânzare, consultanță și marketing în rețeaua proprie. Nu comunică public un admin self-hosted
                        per organizator, un GTM propriu per tenant sau un SLA clar — rămâi în logica unui marketplace centralizat.
                    </p>
                </div>
            </div>
        </section>

        <!-- 3) Microservicii & fiscalitate -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                3) Microservicii &amp; fiscalitate
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">Tixello</h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Facturare automată, eFactura, pachet documente fiscale &amp; legale post-eveniment, multi-processor plăți
                        (fallback &amp; routing), tracking avansat al surselor, chat live.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Acolo unde MyTicket spune „biletele sunt documente deja fiscalizate”, Tixello adaugă tot lanțul: facturi, eFactura,
                        centralizatoare și arhivă fiscală coerentă.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- MyTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">MyTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Pune accent pe distribuție (online + retail), control acces, vânzare la intrare și settlement.
                        eFactura sau automatizările fiscale pentru România nu sunt comunicate public; o parte importantă din sarcina fiscală
                        rămâne la organizator.
                    </p>
                </div>
            </div>
        </section>

        <!-- 4) UX & conversie -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                4) UX &amp; conversie
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">Tixello</h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Poți rula teste inclus vs. peste pentru comision, segmentezi audiențe, rulezi emailing și coduri promo din platformă.
                        Hărți de locuri cu blocări la nivel de zone/rânduri, personalizare bilete și rapoarte live pe conversie.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- MyTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">MyTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Oferă magazine partenere (Cărturești, Carrefour), e-ticket/curier și opțiunea CareTix – clientul poate cumpăra
                        „drept de retragere” la 5% din valoarea biletelor, în anumite condiții. Focusul este pe accesul la rețea,
                        nu pe fine-tuning-ul conversiei din panoul tău.
                    </p>
                </div>
            </div>
        </section>
    </section>

    <!-- CE CÂȘTIGI PRACTIC CU TIXELLO -->
    <section class="max-w-6xl px-4 pb-12 mx-auto lg:px-8 lg:pb-16">
        <div class="p-6 border rounded-3xl border-emerald-500/40 bg-gradient-to-br from-slate-900 via-slate-900 to-emerald-900/40 lg:p-8">
            <div class="flex flex-col gap-6 mb-6 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <h2 class="text-xl font-semibold lg:text-2xl text-emerald-50">
                        Ce câștigi, concret, cu Tixello
                    </h2>
                    <p class="max-w-xl mt-3 text-sm lg:text-base text-emerald-100/90">
                        De la primul bilet până la raportul fiscal final, Tixello este construit să te ajute să păstrezi mai mult din
                        fiecare leu încasat și să pierzi mai puțin timp în Excel.
                    </p>
                </div>
                <div class="shrink-0">
                    <div class="inline-flex items-center gap-2 px-3 py-1 text-xs border rounded-full bg-slate-900/80 border-emerald-400/60 lg:text-sm text-emerald-100">
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(52,211,153,0.9)]"></span>
                        Pentru organizatori care numără costurile
                    </div>
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2 lg:gap-6">
                <!-- 1 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        1. Cost total mai mic &amp; previzibil
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Alegi 1–3%, fără feed-uri impuse și fără structură opacă de comisioane. Decizi cum afișezi comisionul
                        (inclus vs. peste) și poți simula ușor impactul pe prețul final.
                    </p>
                </div>

                <!-- 2 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        2. Conversie mai mare, cu date clare
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Vezi exact de unde vin vânzările, ajustezi bugetele de marketing și scazi pierderile din ads.
                        Nu mai ghicești — iei decizii pe cifre, nu pe impresii.
                    </p>
                </div>

                <!-- 3 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        3. Cashflow direct &amp; zero corvoadă administrativă
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Nu aștepți cicluri de virare — banii ajung direct în contul tău. Facturi, eFactura și documente post-eveniment
                        se generează automat, astfel încât echipa ta poate să se ocupe de eveniment, nu de hârtii.
                    </p>
                </div>

                <!-- 4 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        4. Scalabil &amp; sigur pentru seriile de evenimente
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        SLA 99.99%, ~300ms timp de răspuns, rapoarte live, editare rapidă, suport în timp real în chat.
                        Poți crește de la un eveniment local la un calendar complex fără să schimbi platforma.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- TABEL COMPARATIV -->
    <section class="max-w-6xl px-4 pb-12 mx-auto lg:px-8 lg:pb-16">
        <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
            <div class="flex flex-col gap-3 mb-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                    Tabel comparativ (executive): Tixello vs MyTicket
                </h2>
                <span class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-slate-800 lg:text-sm text-slate-200">
                    Cost, cashflow, distribuție &amp; fiscalitate
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs text-left align-top border-collapse lg:text-sm">
                    <thead class="text-xs border-b lg:text-sm text-slate-300 border-slate-800">
                        <tr>
                            <th class="py-2 pr-4">Criteriu</th>
                            <th class="py-2 pr-4 text-emerald-200">Tixello</th>
                            <th class="py-2 pr-4 text-slate-200">MyTicket</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-200">
                        <tr>
                            <td class="py-2 pr-4">Model cost</td>
                            <td class="py-2 pr-4">1–3% (plătești doar când vinzi; inclus în preț sau peste)</td>
                            <td class="py-2 pr-4">
                                Taxe către client posibile: 2 lei/bilet + 2% admin comandă; procentele pentru organizatori nu sunt publice
                            </td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Cashflow</td>
                            <td class="py-2 pr-4">Banii direct în contul tău; multi-processor, fallback</td>
                            <td class="py-2 pr-4">Decontări periodice către organizator, conform acordurilor</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Admin &amp; date</td>
                            <td class="py-2 pr-4">Admin dedicat pe tenant; GTM propriu; export</td>
                            <td class="py-2 pr-4">Rapoarte de vânzare; nu se comunică public admin self-hosted/SLA</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Distribuție</td>
                            <td class="py-2 pr-4">Online pe site-ul tău (tenant)</td>
                            <td class="py-2 pr-4">Online + magazine partenere (Cărturești, Carrefour)</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Seating &amp; operare</td>
                            <td class="py-2 pr-4">Hartă + blocări, personalizare bilete, email, coduri promo</td>
                            <td class="py-2 pr-4">Control acces, vânzare la intrare, CareTix opțional</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Fiscalitate</td>
                            <td class="py-2 pr-4">Facturi + eFactura, documente post-eveniment</td>
                            <td class="py-2 pr-4">„Biletele sunt documente deja fiscalizate” (FAQ)</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">SLA &amp; performanță</td>
                            <td class="py-2 pr-4">99.99% • ~300ms</td>
                            <td class="py-2 pr-4">Necomunicat public</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-3 text-[11px] text-slate-500">
                Citate cheie: proprietar &amp; T&amp;C, plăți &amp; taxe, livrare, parteneri retail, servicii organizatori
                (control acces, rapoarte, deconturi), settlement la intervale, FAQ fiscal, context PLG – conform myticket.ro
                și articolelor media consultate la 31 octombrie 2025.
            </p>
        </div>
    </section>

    <!-- FAQ ACORDEON + NOTĂ TRANSPARENȚĂ -->
    <section class="max-w-6xl mx-auto px-4 lg:px-8 pb-12 lg:pb-16 grid lg:grid-cols-[minmax(0,1.5fr)_minmax(0,1fr)] gap-8">
        <!-- FAQ -->
        <div
            class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6"
            x-data="{ openFaq: 1 }"
        >
            <h2 class="mb-4 text-lg font-semibold lg:text-xl text-slate-50">
                Întrebări frecvente despre Tixello vs MyTicket
            </h2>

            <!-- Q1 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                >
                    <span>Publică MyTicket comisioanele pentru organizatori?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 1 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 1"
                    x-transition
                >
                    Nu am găsit procente publicate pe site; condițiile se stabilesc contractual. La Tixello, comisionul este transparent:
                    1–3%, astfel încât poți calcula din start costul total, înainte să intri în negocieri.
                </div>
            </div>

            <!-- Q2 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                >
                    <span>Când îmi intră banii?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 2 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 2"
                    x-transition
                >
                    În Tixello, banii ajung direct în contul tău (payout direct), cu multi-processor &amp; fallback. La MyTicket,
                    termenii indică faptul că sumele sunt transferate la intervale în conturile organizatorilor, conform acordurilor
                    — adică un settlement periodic, nu payout instant.
                </div>
            </div>

            <!-- Q3 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                >
                    <span>Ce înseamnă CareTix?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 3 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 3"
                    x-transition
                >
                    CareTix este un add-on pentru cumpărător (contra ~5% din valoarea biletelor), care permite renunțarea la participare
                    în anumite condiții. Poate crește încrederea la cumpărare, dar crește și costul final pentru client.
                </div>
            </div>

            <!-- Q4 -->
            <div>
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                >
                    <span>Ce metode de plată oferă MyTicket comparativ cu Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 4 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 4"
                    x-transition
                >
                    MyTicket oferă mobilPay (card), transfer bancar, rate pentru anumite bănci, plată la puncte MyTicket, ramburs,
                    carduri culturale și GoCrypto prin Entertix. Tixello lucrează cu multi-processor, focus pe stabilitate,
                    routing și fallback, astfel încât să reduci rata tranzacțiilor eșuate și să păstrezi controlul pe fluxul de plată.
                </div>
            </div>
        </div>

        <!-- Notă transparență + CTA -->
        <div class="space-y-4">
            <div class="p-5 text-sm border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6 text-slate-200">
                <h2 class="mb-2 text-base font-semibold lg:text-lg text-slate-50">
                    Notă de transparență
                </h2>
                <p class="text-xs lg:text-sm text-slate-300">
                    Analiza MyTicket se bazează pe informații publice consultate la 31 octombrie 2025 (pagini MyTicket: T&amp;C, plăți,
                    livrare, parteneri, FAQ, servicii organizatori; articole media despre tranzacția Piletilevi Group – PLG).
                    Dacă reprezinți MyTicket și dorești actualizări sau clarificări, scrie-ne — actualizăm cu plăcere.
                </p>
            </div>

            <div class="p-5 text-sm border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h2 class="mb-2 text-base font-semibold lg:text-lg text-emerald-100">
                    Vrei control total, cashflow direct și costuri previzibile?
                </h2>
                <p class="mb-3 text-sm text-emerald-50/90">
                    Programează un demo — îți arătăm cum Tixello scurtează drumul de la anunț la sold-out și ce înseamnă, concret,
                    să treci de la settlement periodic la payout direct, pe evenimentele tale reale.
                </p>
                <a
                    href="#contact-demo"
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold transition rounded-full bg-emerald-400 text-slate-950 hover:bg-emerald-300"
                >
                    Programează un demo Tixello
                </a>
            </div>
        </div>
    </section>

    <!-- CTA FINAL GLOBALĂ -->
    <section id="contact-demo" class="border-t border-slate-800 bg-slate-950">
        <div class="flex flex-col items-start justify-between max-w-6xl gap-6 px-4 py-10 mx-auto lg:px-8 lg:py-14 lg:flex-row lg:items-center">
            <div>
                <h2 class="text-xl font-semibold lg:text-2xl text-slate-50">
                    Vrei să vezi Tixello pe un exemplu concret din portofoliul tău?
                </h2>
                <p class="max-w-xl mt-2 text-sm lg:text-base text-slate-300">
                    Spune-ne câteva detalii despre evenimentele tale, iar noi pregătim un demo personalizat Tixello vs MyTicket:
                    simulare de cost, cashflow și impact pe conversie, pe cifre reale.
                </p>
            </div>
            <div class="w-full lg:w-auto">
                <!-- Înlocuiește cu shortcode de formular -->
                <a
                    href="/contact"
                    class="inline-flex items-center justify-center rounded-full bg-emerald-400 px-6 py-2.5 text-sm font-semibold text-slate-950 hover:bg-emerald-300 transition w-full lg:w-auto"
                >
                    Deschide formularul de contact
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
