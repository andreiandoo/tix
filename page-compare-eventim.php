<?php
/*
Template Name: Tixello vs Eventim
*/

get_header();

$current_compare = 'eventim';

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
                        Tixello: când vrei control real, cashflow direct și cost total mic
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-slate-200">
                        Platformă B2B construită pentru organizatori: cashflow direct, comision 1–3% (fără abonamente impuse),
                        admin dedicat pe tenant, multi-processor plăți, facturare automată + eFactura, tracking avansat și chat live cu echipa.
                    </p>

                    <div class="mt-6 space-y-4">
                        <?php
                        $metrics = [
                            'Cost total pentru organizator'          => ['tixello' => 92, 'eventim' => 65],
                            'Transparență comisioane & payout'      => ['tixello' => 96, 'eventim' => 50],
                            'Control platformă & fiscalitate locală' => ['tixello' => 94, 'eventim' => 55],
                        ];
                        foreach ( $metrics as $label => $values ) :
                        ?>
                            <div>
                                <div class="flex justify-between text-xs lg:text-sm text-slate-300 mb-1.5">
                                    <span><?php echo esc_html( $label ); ?></span>
                                    <span class="text-slate-400">Tixello vs Eventim</span>
                                </div>
                                <div class="flex h-3 overflow-hidden rounded-full bg-slate-800">
                                    <div
                                        class="h-full transition-all duration-700 bg-gradient-to-r from-emerald-400 via-emerald-300 to-sky-400"
                                        style="width: <?php echo (int) $values['tixello']; ?>%;"
                                    ></div>
                                    <div
                                        class="h-full transition-all duration-700 bg-slate-600/70"
                                        style="width: <?php echo (int) $values['eventim']; ?>%;"
                                    ></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="mt-3 text-[11px] text-slate-400">
                        * Valorile sunt orientative și arată diferența de abordare: Tixello optimizează costul total, cashflow-ul și fiscalitatea locală,
                        în timp ce Eventim funcționează ca marketplace cu condiții contractuale.
                    </p>
                </div>

                <!-- CTA -->
                <div class="p-6 border rounded-2xl border-emerald-500/40 bg-emerald-500/10">
                    <h2 class="text-lg font-semibold text-emerald-100">
                        Vrei să vezi Tixello pe structura evenimentelor tale?
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-emerald-50/90">
                        Într-un demo live comparăm costurile și cashflow-ul Tixello vs. un marketplace clasic, pe scenarii reale:
                        festival, sală de spectacole, turneu sau evenimente corporate.
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

    <!-- VERDICT & EVENTIM PE SCURT -->
    <section class="max-w-6xl px-4 py-10 mx-auto space-y-8 lg:px-8 lg:py-14">
        <div class="grid lg:grid-cols-[minmax(0,1.6fr)_minmax(0,1.1fr)] gap-8">
            <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/60">
                <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                    Verdict pe scurt pentru organizatori
                </h2>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Eventim este un marketplace de bilete cu servicii pentru organizatori: listează evenimente, vinde bilete online,
                    are eventim.access pentru control acces, seat maps și instrumente de raportare. Nu publică pe site modelul de comision
                    pentru organizatori, SLA sau clarificări despre cashflow-ul direct în contul organizatorului (payout) – multe detalii
                    depind de contractul dintre părți.
                </p>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Tixello este o platformă B2B construită pentru organizatori: cashflow direct, comision 1–3% (fără abonamente impuse),
                    admin dedicat pe tenant, multi-processor plăți, facturare automată + eFactura, tracking avansat și chat live cu echipa.
                </p>
            </div>

            <div class="p-6 text-sm border rounded-2xl border-slate-800 bg-slate-900/60 lg:text-base">
                <h3 class="text-base font-semibold lg:text-lg text-slate-50">
                    Eventim pe scurt (factual, din surse publice)
                </h3>
                <ul class="mt-3 space-y-2 text-slate-200">
                    <li>• eventim.access – sistem de control acces optimizat pentru organizatori și locații.</li>
                    <li>• Aplicație Eventim de cumpărare bilete cu seating plan booking.</li>
                    <li>• Plata prin card (Visa/Mastercard) în webshop; disponibilitatea metodelor depinde de eveniment.</li>
                    <li>• „Eventim Webreporting” – vezi în timp real câte bilete ai vândut; capabilități de profil socio-demografic și măsurarea eficienței campaniilor.</li>
                    <li>• Unele evenimente nu permit print@home; regulile de utilizare sunt impuse de organizator.</li>
                    <li>• Colectare de date pentru vânzare, plată și livrare (conform politicii de confidențialitate).</li>
                    <li>• Nu publică procente de comision pentru organizatori, SLA sau un model standard de payout; acestea se stabilesc contractual.</li>
                </ul>
                <p class="mt-3 text-[11px] text-slate-500">
                    Bazat pe paginile Eventim România (tehnologie, servicii pentru organizatori, termeni, plăți, livrare, confidențialitate)
                    consultate la 31 octombrie 2025.
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
                Eventim excelează ca marketplace cu infrastructură de acces &amp; raportare. Tixello mută centrul de greutate pe
                control, cashflow direct și cost total mic pentru organizator.
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
                        Încasezi direct în contul tău; plătești doar când vinzi; comision 1–3% (1% exclusiv / 2% non-exclusiv / 3% dacă
                        Tixello procesează tranzacțiile). Poți include comisionul în preț sau îl poți afișa peste – optimizezi conversia cum vrei.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Model de cost clar, fără „surprize” ascunse în contract: vezi de la început cât te costă fiecare bilet vândut.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Eventim -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Eventim</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Nu comunică public comisioane pentru organizatori sau modelul de payout; condițiile țin de contractul dintre
                        organizator și Eventim. Estimarea costului total și a cashflow-ului necesită discuții și oferte individuale.
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
                        Admin dedicat (nu-l împarți cu alți organizatori), GTM propriu, acces complet la date &amp; analytics, export &amp; integrări.
                        Instalare aproape plug &amp; play pe serverul tău, astfel încât platforma devine o extensie a infrastructurii tale.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Eventim -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Eventim</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Oferă Webreporting și instrumente operaționale pentru organizatori. Nu sunt publice detalii despre GTM per tenant
                        sau un model de admin dedicat self-hosted; rămâne o platformă centralizată de tip marketplace.
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
                        Facturare automată + eFactura, pachet documente fiscale &amp; legale post-eveniment, multi-processor plăți
                        (fallback &amp; routing), tracking avansat al surselor, chat live.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Practic, Tixello preia toată munca de back-office pe care altfel ai face-o cu Excel-uri și modele de Word.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Eventim -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Eventim</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Evidențiază controlul accesului și raportarea pentru organizatori. Nu sunt comunicate public eFactura,
                        multi-processor sau SLA, astfel încât o parte importantă din responsabilitatea fiscală rămâne la tine.
                    </p>
                </div>
            </div>
        </section>

        <!-- 4) Seating, operare & UX -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                4) Seating, operare &amp; UX
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">Tixello</h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Seat maps, blocări pe zone/rânduri, personalizare bilete, tipuri multiple (early bird, pachete), email din platformă,
                        coduri promo și rapoarte live pe conversie. Vezi ce se întâmplă cu vânzările pe fiecare segment de hartă.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Eventim -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Eventim</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Seat maps și eventim.access pentru control acces, plus aplicație de cumpărare bilete cu seating plan booking.
                        Focusul este pe marketplace și infrastructura de vânzare &amp; acces, nu pe marketing self-service end-to-end.
                    </p>
                </div>
            </div>
        </section>

        <!-- 5) Onboarding & timp de implementare -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                5) Onboarding &amp; timp de implementare
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">Tixello</h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Go-live rapid, fără programare: admin dedicat pe tenant, instalare aproape plug &amp; play și suport direct cu echipa
                        care construiește produsul.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Eventim -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Eventim</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Colaborare pe bază de contract; SLA și modelul de payout nu sunt publicate. Timpul de implementare și condițiile
                        tehnice se clarifică în discuții individuale.
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
                        Ce câștigi practic cu Tixello
                    </h2>
                    <p class="max-w-xl mt-3 text-sm lg:text-base text-emerald-100/90">
                        Nu e doar un alt tool de ticketing. Tixello este infrastructura ta de venituri: cost total mic, cashflow direct,
                        fiscalitate automată și analytics care îți arată clar ce funcționează și ce nu.
                    </p>
                </div>
                <div class="shrink-0">
                    <div class="inline-flex items-center gap-2 px-3 py-1 text-xs border rounded-full bg-slate-900/80 border-emerald-400/60 lg:text-sm text-emerald-100">
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(52,211,153,0.9)]"></span>
                        Pentru organizatori care calculează fiecare procent
                    </div>
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2 lg:gap-6">
                <!-- 1 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        1. Cost total mai mic &amp; predictibil
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Alegi 1–3% și atât. Fără abonamente impuse și fără comisioane opace. Poți modela prețul biletului (comision inclus
                        vs. peste) în funcție de public și tipul de eveniment.
                    </p>
                </div>

                <!-- 2 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        2. Conversie mai mare, pe date reale
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Vezi exact de unde vin vânzările, optimizezi bugetele de marketing și scazi pierderile din ads. 
                        Nu mai „speri” că un canal merge – îl vezi în cifre.
                    </p>
                </div>

                <!-- 3 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        3. Cashflow direct &amp; zero corvoadă
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Banii ajung direct în contul tău, nu aștepți cicluri de decontare. Facturi, eFactura și documente post-eveniment
                        sunt generate automat, astfel încât echipa nu se îneacă în hârtie.
                    </p>
                </div>

                <!-- 4 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        4. Scalabil &amp; sigur pentru seriile de evenimente
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        SLA 99.99%, ~300ms timp de răspuns, rapoarte live, editare rapidă, chat în timp real. 
                        Poți construi un calendar întreg de evenimente fără să îți schimbi platforma la fiecare pas.
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
                    Tabel comparativ (executive): Tixello vs Eventim
                </h2>
                <span class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-slate-800 lg:text-sm text-slate-200">
                    Cost, cashflow, control &amp; fiscalitate
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs text-left align-top border-collapse lg:text-sm">
                    <thead class="text-xs border-b lg:text-sm text-slate-300 border-slate-800">
                        <tr>
                            <th class="py-2 pr-4">Criteriu</th>
                            <th class="py-2 pr-4 text-emerald-200">Tixello</th>
                            <th class="py-2 pr-4 text-slate-200">Eventim</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-200">
                        <tr>
                            <td class="py-2 pr-4">Model cost</td>
                            <td class="py-2 pr-4">1–3% (plătești doar când vinzi; inclus în preț sau peste)</td>
                            <td class="py-2 pr-4">Nespecificat public pentru organizatori (contractual)</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Cashflow</td>
                            <td class="py-2 pr-4">Banii direct în contul tău; multi-processor, fallback</td>
                            <td class="py-2 pr-4">Nespecificat public (contractual)</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Admin &amp; date</td>
                            <td class="py-2 pr-4">Admin dedicat pe tenant; GTM propriu; export</td>
                            <td class="py-2 pr-4">Raportare (Webreporting); fără detalii publice despre admin dedicat/GTM tenant</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Seating &amp; acces</td>
                            <td class="py-2 pr-4">Seat maps + blocări, personalizare bilete</td>
                            <td class="py-2 pr-4">eventim.access (control acces); seat maps &amp; app bilete</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Marketing</td>
                            <td class="py-2 pr-4">Email integrat, coduri promo, segmente, tracking conversii</td>
                            <td class="py-2 pr-4">Profilări &amp; măsurare campanii (conform afirmațiilor Eventim)</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Fiscalitate</td>
                            <td class="py-2 pr-4">Facturi + eFactura, documente post-eveniment automat</td>
                            <td class="py-2 pr-4">Necomunicat public</td>
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
                Citate: eventim.access (control acces), aplicație cu seat plan booking, modalități de plată (card),
                termeni de utilizare (reguli la nivel de organizator, print@home limitat), Webreporting &amp; profilări,
                Privacy/DPP (colectare date) – conform paginilor Eventim România consultate la 31 octombrie 2025.
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
                Întrebări frecvente despre Tixello vs Eventim
            </h2>

            <!-- Q1 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                >
                    <span>Eventim are control acces și seat maps?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 1 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 1"
                    x-transition
                >
                    Da — eventim.access pentru control acces și seat plan booking în aplicație. Tixello oferă de asemenea hartă de locuri
                    și control granular (blocări pe zone/rânduri) cu rapoarte live legate direct de vânzări și conversie.
                </div>
            </div>

            <!-- Q2 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                >
                    <span>Publică Eventim comisioanele pentru organizatori?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 2 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 2"
                    x-transition
                >
                    Nu am identificat procente publice; condițiile sunt contractuale și se negociază de la caz la caz. La Tixello,
                    comisionul este transparent: 1–3% și vezi din start cât vei plăti.
                </div>
            </div>

            <!-- Q3 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                >
                    <span>Pot încasa direct în contul meu?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 3 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 3"
                    x-transition
                >
                    La Tixello — da, implicit. Banii ajung direct în contul tău, cu multi-processor &amp; fallback. 
                    În cazul Eventim, site-ul nu precizează public un model standard de payout; acesta se stabilește contractual.
                </div>
            </div>

            <!-- Q4 -->
            <div>
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                >
                    <span>Cum stă treaba cu facturile și eFactura?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 4 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 4"
                    x-transition
                >
                    La Tixello, facturarea + eFactura și documentele post-eveniment se generează automat. La Eventim, în documentația publică
                    pentru România nu am găsit mențiuni despre eFactura; componenta fiscală rămâne mult mai mult în sarcina organizatorului.
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
                    Analiza Eventim se bazează pe informații publice consultate la 31 octombrie 2025 (pagini Eventim România despre
                    tehnologie, servicii pentru organizatori, termenii de utilizare, plăți, livrare, confidențialitate și aplicații).
                    Dacă reprezinți Eventim și dorești actualizări sau clarificări, scrie-ne — actualizăm cu plăcere.
                </p>
            </div>

            <div class="p-5 text-sm border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h2 class="mb-2 text-base font-semibold lg:text-lg text-emerald-100">
                    Vrei control total, cashflow direct și costuri previzibile?
                </h2>
                <p class="mb-3 text-sm text-emerald-50/90">
                    Programează un demo — îți arătăm cum Tixello scurtează drumul de la anunț la sold-out și ce înseamnă, în cifre,
                    să treci de la un marketplace la o platformă B2B cu cashflow direct.
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
                    Spune-ne câteva detalii despre evenimentele tale, iar noi pregătim un demo personalizat Tixello vs Eventim – 
                    cu simulare de cost, cashflow și scenarii de creștere a conversiei.
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
