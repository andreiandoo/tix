<?php
/*
Template Name: Tixello vs EvTicket
*/

get_header();

$current_compare = 'evticket';

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
    // Adaugă aici restul comparațiilor
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
                        Platformă B2B pentru organizatori: cashflow direct, comision 1–3% fără abonamente impuse, admin dedicat
                        pe tenant, multi-processor plăți, facturare automată + eFactura, tracking avansat și chat live cu echipa.
                    </p>

                    <div class="mt-6 space-y-4">
                        <?php
                        $metrics = [
                            'Cost total pentru organizator'   => ['tixello' => 92, 'evticket' => 60],
                            'Transparență & control pe comisioane' => ['tixello' => 95, 'evticket' => 55],
                            'Automatizări fiscale & operaționale'  => ['tixello' => 94, 'evticket' => 50],
                        ];
                        foreach ( $metrics as $label => $values ) :
                        ?>
                            <div>
                                <div class="flex justify-between text-xs lg:text-sm text-slate-300 mb-1.5">
                                    <span><?php echo esc_html( $label ); ?></span>
                                    <span class="text-slate-400">Tixello vs EvTicket</span>
                                </div>
                                <div class="flex h-3 overflow-hidden rounded-full bg-slate-800">
                                    <div
                                        class="h-full transition-all duration-700 bg-gradient-to-r from-emerald-400 via-emerald-300 to-sky-400"
                                        style="width: <?php echo (int) $values['tixello']; ?>%;"
                                    ></div>
                                    <div
                                        class="h-full transition-all duration-700 bg-slate-600/70"
                                        style="width: <?php echo (int) $values['evticket']; ?>%;"
                                    ></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="mt-3 text-[11px] text-slate-400">
                        * Valorile sunt orientative și sintetizează diferența de abordare: Tixello optimizează costul total și fiscalitatea locală,
                        EvTicket pune accent pe intermediere și operare la sală.
                    </p>
                </div>

                <!-- CTA -->
                <div class="p-6 border rounded-2xl border-emerald-500/40 bg-emerald-500/10">
                    <h2 class="text-lg font-semibold text-emerald-100">
                        Vrei să vezi Tixello pe structura evenimentelor tale?
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-emerald-50/90">
                        Într-un demo live îți arătăm cum arată cashflow-ul direct, care este costul total vs. alte platforme
                        și cum arată raportarea fiscală &amp; analytics în Tixello.
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

    <!-- VERDICT PE SCURT & CONTEXT EVTICKET -->
    <section class="max-w-6xl px-4 py-10 mx-auto space-y-8 lg:px-8 lg:py-14">
        <div class="grid lg:grid-cols-[minmax(0,1.6fr)_minmax(0,1.1fr)] gap-8">
            <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/60">
                <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                    Verdict pe scurt pentru organizatori
                </h2>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    EvTicket este o platformă de ticketing care intermediază vânzarea de bilete, cu panou de control pentru organizatori,
                    selectare locuri și aplicații de scanare (Android &amp; iOS). Procesatorul de plăți menționat public este euPlătesc,
                    iar pentru facturile către persoane juridice, emisia se face de către organizator. Nu sunt publicate detalii despre
                    comisioanele pentru organizatori sau un SLA.
                </p>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Tixello este o platformă B2B pentru organizatori: cashflow direct, comision 1–3% (fără costuri fixe impuse),
                    admin dedicat pe tenant, multi-processor plăți, facturare automată + eFactura, tracking avansat și chat live cu echipa.
                </p>
            </div>

            <div class="p-6 text-sm border rounded-2xl border-slate-800 bg-slate-900/60 lg:text-base">
                <h3 class="text-base font-semibold lg:text-lg text-slate-50">
                    Ce este EvTicket (factual, din surse publice)
                </h3>
                <ul class="mt-3 space-y-2 text-slate-200">
                    <li>
                        • Se prezintă ca platformă în care „organizatorul are controlul total”, cu panou de control &amp; statistici,
                        administrare de evenimente, categorii de preț și blocarea/deblocarea locurilor/rândurilor/sectoarelor.
                        Include mod de vânzare rapidă la sală.
                    </li>
                    <li>• Are aplicații de scanare pe Google Play și App Store.</li>
                    <li>
                        • În Termeni &amp; condiții: EvTicket intermediază vânzarea (vânzătorul este organizatorul), procesatorul de plăți
                        este euPlătesc, iar factura pentru persoane juridice o emite organizatorul. Există rezervarea locurilor pe durata
                        checkout-ului și sincronizare online a scanerelor. Comisioanele pentru organizatori nu sunt publicate.
                    </li>
                    <li>
                        • Pagina „organizatori” promite „comision special, cât mai mic posibil”, Google Analytics propriu și promovare gratuită;
                        nu sunt comunicate procente sau un SLA.
                    </li>
                </ul>
                <p class="mt-3 text-[11px] text-slate-500">
                    Analiza EvTicket se bazează pe paginile Termeni &amp; condiții, Pentru organizatori și magazinele de aplicații consultate
                    la 31 octombrie 2025.
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
                EvTicket oferă un model de intermediere cu operare la sală puternică. Tixello merge mai departe cu cashflow direct,
                comision transparent și automatizări fiscale pentru piața locală.
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
                        Banii intră direct în contul tău; plătești doar când vinzi; comision 1–3% (1% exclusiv / 2% non-exclusiv / 3%
                        dacă Tixello procesează tranzacțiile). Poți include comisionul în preț sau îl poți afișa peste pentru a optimiza conversia.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Model transparent, fără „comision special” neclar. Știi exact cât te costă fiecare bilet vândut.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- EvTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">EvTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Funcționează ca intermediar; procesatorul este euPlătesc. Pagina pentru organizatori menționează „comision special,
                        cât mai mic posibil”, dar nu publică procente sau o structură clară de payout / cashflow pentru organizatori.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-slate-300">
                        Fără cifre publice, estimarea costului total devine dificilă, mai ales pe volum mare.
                    </p>
                </div>
            </div>
        </section>

        <!-- 2) Controlul datelor & al platformei -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                2) Controlul datelor &amp; al platformei
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">Tixello</h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Admin dedicat (nu îl împarți cu alți organizatori), acces complet la date, GTM propriu, export &amp; integrări.
                        Instalare aproape plug &amp; play pe serverul tău pentru un control real end-to-end.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- EvTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">EvTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Are panou de control și statistici, plus Google Analytics propriu. Nu sunt comunicate public detalii despre GTM propriu
                        sau izolarea instanței de admin per organizator, ca în modelul multi-tenant Tixello.
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
                        (fallback &amp; routing), tracking avansat al surselor, chat live cu echipa.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Practic, îți scoți din cap toată munca de „after movie fiscal” după fiecare eveniment.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- EvTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">EvTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Evidențiază scanarea biletelor, seating-ul și operarea la sală. eFactura, multi-processor sau SLA nu sunt
                        comunicate public; facturile pentru persoane juridice sunt emise de organizator.
                    </p>
                </div>
            </div>
        </section>

        <!-- 4) Seating & operare -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                4) Seating &amp; operare
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">Tixello</h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Selectare locuri pe hartă, blocare locuri/zone, tipuri multiple de bilete (early bird, pachete), email marketing,
                        coduri promo și rapoarte live pentru a lega harta de locuri direct cu rezultatele financiare.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- EvTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">EvTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Ambele oferă selectare locuri pe hartă și blocarea locurilor; EvTicket detaliază blocarea pe loc/rând/sector
                        și pune accent pe vânzarea rapidă la sală.
                    </p>
                </div>
            </div>
        </section>

        <!-- 5) Onboarding & performanță -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                5) Onboarding &amp; performanță
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">Tixello</h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Go-live rapid, fără programare; SLA 99.99% și ~300ms timp de răspuns. Ideal când ai evenimente recurente și
                        nu îți permiți downtime.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- EvTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">EvTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Onboarding pe bază de contact; SLA și performanța tehnică nu sunt comunicate public, ceea ce face dificilă
                        planificarea pe termen lung pentru evenimente mari.
                    </p>
                </div>
            </div>
        </section>
    </section>

    <!-- CE CÂȘTIGI PRACTIC CU TIXELLO (VENDABIL) -->
    <section class="max-w-6xl px-4 pb-12 mx-auto lg:px-8 lg:pb-16">
        <div class="p-6 border rounded-3xl border-emerald-500/40 bg-gradient-to-br from-slate-900 via-slate-900 to-emerald-900/40 lg:p-8">
            <div class="flex flex-col gap-6 mb-6 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <h2 class="text-xl font-semibold lg:text-2xl text-emerald-50">
                        Ce câștigi practic cu Tixello
                    </h2>
                    <p class="max-w-xl mt-3 text-sm lg:text-base text-emerald-100/90">
                        Dincolo de vânzarea de bilete, Tixello îți organizează veniturile: cost total mic, cashflow direct,
                        fiscalitate automată și analytics care te ajută să crești, nu doar să „ții evenimentul în picioare”.
                    </p>
                </div>
                <div class="shrink-0">
                    <div class="inline-flex items-center gap-2 px-3 py-1 text-xs border rounded-full bg-slate-900/80 border-emerald-400/60 lg:text-sm text-emerald-100">
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(52,211,153,0.9)]"></span>
                        Pentru organizatori care vor control, nu doar „listare”
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
                        Alegi 1–3% și atât. Fără abonamente impuse, fără comisioane ascunse. Știi exact cât vei plăti,
                        indiferent dacă vinzi 100 sau 10.000 de bilete.
                    </p>
                </div>

                <!-- 2 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        2. Conversie mai mare, pe date reale
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Vezi exact de unde vin vânzările, optimizezi bugetele, scazi pierderile din ads. Poți testa comision inclus vs. peste
                        și vezi în cifre ce variantă câștigă.
                    </p>
                </div>

                <!-- 3 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        3. Cashflow direct &amp; zero corvoadă
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Nu aștepți cicluri de virare — banii ajung direct în contul tău. Facturi, eFactura și documentele post-eveniment
                        se generează automat, fără Excel-uri și babysitting manual.
                    </p>
                </div>

                <!-- 4 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        4. Scalabil &amp; sigur pentru seriile de evenimente
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        SLA 99.99%, ~300ms timp de răspuns, rapoarte live, editare rapidă și suport în timp real în chat. 
                        Poți crește de la un singur eveniment la un festival sau turneu fără să schimbi platforma.
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
                    Tabel comparativ (executive): Tixello vs EvTicket
                </h2>
                <span class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-slate-800 lg:text-sm text-slate-200">
                    Cost, cashflow, fiscalitate &amp; operare
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs text-left align-top border-collapse lg:text-sm">
                    <thead class="text-xs border-b lg:text-sm text-slate-300 border-slate-800">
                        <tr>
                            <th class="py-2 pr-4">Criteriu</th>
                            <th class="py-2 pr-4 text-emerald-200">Tixello</th>
                            <th class="py-2 pr-4 text-slate-200">EvTicket</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-200">
                        <tr>
                            <td class="py-2 pr-4">Model cost</td>
                            <td class="py-2 pr-4">1–3% (plătești doar când vinzi; inclus în preț sau peste)</td>
                            <td class="py-2 pr-4">„Comision special” pentru organizatori; fără procente publice</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Cashflow</td>
                            <td class="py-2 pr-4">Banii direct în contul tău; multi-processor, fallback &amp; routing</td>
                            <td class="py-2 pr-4">Intermediere; euPlătesc procesator. Payout/cashflow nespecificat public</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Admin &amp; date</td>
                            <td class="py-2 pr-4">Admin dedicat pe tenant; GTM propriu; export</td>
                            <td class="py-2 pr-4">Panou de control &amp; statistici; GA propriu; GTM/SLA necomunicate</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Seating</td>
                            <td class="py-2 pr-4">Hartă + blocare locuri/zone; personalizare bilete</td>
                            <td class="py-2 pr-4">Selectare locuri + blocare loc/rând/sector</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Operare</td>
                            <td class="py-2 pr-4">Emailing, coduri promo, pachete, rapoarte live</td>
                            <td class="py-2 pr-4">Scanare bilete (Android &amp; iOS), vânzare rapidă la sală</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Fiscalitate</td>
                            <td class="py-2 pr-4">Facturi + eFactura, documente post-eveniment automat</td>
                            <td class="py-2 pr-4">Facturi P.J. emise de organizator; eFactura necomunicată public</td>
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
                Citate: Termeni &amp; condiții (intermediere, euPlătesc, facturi P.J., rezervare locuri, scanere online),
                pagina „organizatori” (control total, blocare locuri/rând/sector, comision „cât mai mic”, GA propriu, promovare),
                aplicații scanare Android/iOS — conform evticket.ro și magazinelor de aplicații, consultate la 31 octombrie 2025.
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
                Întrebări frecvente despre Tixello vs EvTicket
            </h2>

            <!-- Q1 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                >
                    <span>EvTicket are aplicație de scanare?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 1 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 1"
                    x-transition
                >
                    Da, EvTicket are aplicații de scanare pe Android și iOS. Tixello oferă de asemenea aplicații de scanare/validare,
                    cu rapoarte live la intrare și integrare directă cu restul rapoartelor de vânzări.
                </div>
            </div>

            <!-- Q2 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                >
                    <span>Pot folosi Google Analytics cu EvTicket? Dar cu Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 2 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 2"
                    x-transition
                >
                    Da, pagina pentru organizatori EvTicket menționează Google Analytics propriu. Tixello merge mai departe cu GTM
                    propriu pe tenant, tracking granular al surselor și integrări multiple, astfel încât să poți oricând schimba
                    sau extinde stack-ul de analytics.
                </div>
            </div>

            <!-- Q3 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                >
                    <span>Cum stau lucrurile cu facturile și eFactura?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 3 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 3"
                    x-transition
                >
                    În Tixello, facturarea + eFactura și documentele post-eveniment se generează automat, la final de eveniment.
                    La EvTicket, Termenii &amp; condițiile indică faptul că, pentru persoane juridice, organizatorul emite factura;
                    nu există mențiune publică despre eFactura.
                </div>
            </div>

            <!-- Q4 -->
            <div>
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                >
                    <span>Există procente publice pentru comisionul EvTicket?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 4 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 4"
                    x-transition
                >
                    Nu am găsit procente publicate; apare formularea „comision special, cât mai mic posibil”. La Tixello, comisionul
                    este transparent: 1–3%, iar tu alegi cum îl afișezi (inclus vs. peste) pentru a optimiza conversia.
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
                    Analiza EvTicket se bazează pe informații publice consultate la 31 octombrie 2025: paginile Termeni &amp; condiții,
                    Pentru organizatori și magazinele de aplicații. Dacă reprezinți EvTicket și dorești să adaugi clarificări,
                    scrie-ne — actualizăm cu plăcere.
                </p>
            </div>

            <div class="p-5 text-sm border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h2 class="mb-2 text-base font-semibold lg:text-lg text-emerald-100">
                    Vrei control total, cashflow direct și costuri previzibile?
                </h2>
                <p class="mb-3 text-sm text-emerald-50/90">
                    Programează un demo — îți arătăm cum Tixello scurtează drumul de la anunț la sold-out și cum arată diferența
                    de cost vs. EvTicket pe evenimente reale.
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
                    Spune-ne câteva detalii despre evenimentele tale (tip, volum, canale de vânzare), iar noi pregătim un demo personalizat,
                    cu simulare de cost vs. EvTicket și scenarii de creștere a conversiei.
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
