<?php
/*
Template Name: Tixello vs Biletin.ro
*/

get_header();

$current_compare = 'biletin';
?>

<main class="bg-slate-950 text-slate-50">

    <!-- Stil pentru eventual marquee global (dacă vei folosi) -->
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
                    Păstrezi controlul și crești conversia. Cu Tixello, banii intră direct în contul tău, alegi comisionul 1–3%
                    (îl poți include în preț sau îl poți adăuga peste), ai admin dedicat și microservicii fiscale &amp; analytics
                    care îți reduc munca. SLA 99.99% • ~300ms timp de răspuns.
                </p>
            <?php endwhile; endif; ?>

            <div class="mt-10 grid gap-6 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-start">
                <!-- Card metrici Tixello -->
                <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/70 backdrop-blur">
                    <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                        Tixello: control real, cashflow direct și cost total mai mic
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-slate-200">
                        Platformă B2B: cashflow direct, comision 1–3%, admin dedicat pe tenant, facturare automată + eFactura,
                        multi-processor plăți, tracking avansat al surselor și chat live cu echipa.
                    </p>

                    <div class="mt-6 space-y-4">
                        <?php
                        $metrics = [
                            'Cost total pentru organizator'         => ['tixello' => 92, 'biletin' => 65],
                            'Transparență comisioane & payout'      => ['tixello' => 95, 'biletin' => 70],
                            'Control platformă & fiscalitate locală' => ['tixello' => 94, 'biletin' => 60],
                        ];
                        foreach ( $metrics as $label => $values ) :
                        ?>
                            <div>
                                <div class="flex justify-between text-xs lg:text-sm text-slate-300 mb-1.5">
                                    <span><?php echo esc_html( $label ); ?></span>
                                    <span class="text-slate-400">Tixello vs Biletin.ro</span>
                                </div>
                                <div class="flex h-3 overflow-hidden rounded-full bg-slate-800">
                                    <div
                                        class="h-full transition-all duration-700 bg-gradient-to-r from-emerald-400 via-emerald-300 to-sky-400"
                                        style="width: <?php echo (int) $values['tixello']; ?>%;"
                                    ></div>
                                    <div
                                        class="h-full transition-all duration-700 bg-slate-600/70"
                                        style="width: <?php echo (int) $values['biletin']; ?>%;"
                                    ></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="mt-3 text-[11px] text-slate-400">
                        * Valorile sunt orientative și arată diferența de abordare: Tixello prioritizează cashflow direct, comision mic
                        și fiscalitate automată; Biletin pune accent pe marketplace, marketing și Cashless.
                    </p>
                </div>

                <!-- CTA -->
                <div class="p-6 border rounded-2xl border-emerald-500/40 bg-emerald-500/10">
                    <h2 class="text-lg font-semibold text-emerald-100">
                        Vrei să vezi Tixello pe structura evenimentelor tale?
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-emerald-50/90">
                        Într-un demo live comparăm costurile și cashflow-ul Tixello vs. un marketplace de tip Biletin,
                        pe scenarii reale: festival, venue sau turneu.
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

    <!-- AICI poți include scroll-ul orizontal cu alte comparații dintr-un fișier separat / funcție proprie -->
    <?php if ( function_exists( 'tixello_compare_links_marquee' ) ) : ?>
        <section class="border-y border-slate-800 bg-slate-950">
            <div class="max-w-6xl px-4 py-4 mx-auto lg:px-8">
                <?php tixello_compare_links_marquee( $current_compare ); ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- VERDICT & BILETIN PE SCURT -->
    <section class="max-w-6xl px-4 py-10 mx-auto space-y-8 lg:px-8 lg:py-14">
        <div class="grid lg:grid-cols-[minmax(0,1.6fr)_minmax(0,1.1fr)] gap-8">
            <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/60">
                <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                    Verdict pe scurt pentru organizatori
                </h2>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Biletin.ro este o platformă de ticketing/marketplace care oferă panou de administrare pentru organizatori, integrare
                    de pixeli de marketing, acces la lista de clienți, iframe de vânzare pe site-ul tău, wallet (Apple/Google) și un
                    modul Cashless (NFC).
                </p>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Public, Biletin afișează un comision 4–6% (configurabil să fie suportat de organizator sau de client); nu comunică
                    un model standard de payout direct în contul organizatorului sau un SLA. Are aplicații mobile și pagină „Pentru
                    organizatori” cu detalii despre funcționalități.
                </p>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Tixello este o platformă B2B: cashflow direct, comision 1–3%, admin dedicat pe tenant, facturare automată + eFactura,
                    multi-processor plăți, tracking avansat al surselor și chat live cu echipa.
                </p>
            </div>

            <div class="p-6 text-sm border rounded-2xl border-slate-800 bg-slate-900/60 lg:text-base">
                <h3 class="text-base font-semibold lg:text-lg text-slate-50">
                    Biletin.ro pe scurt (factual)
                </h3>
                <ul class="mt-3 space-y-2 text-slate-200">
                    <li>
                        • Acces la clienți &amp; marketing: acces la lista de cumpărători, retargetare automată a coșurilor abandonate,
                          integrare de pixeli (view / add to cart / purchase).
                    </li>
                    <li>• Integrare pe site-ul tău: iframe cu întregul flux (selecție → plată → emitere bilet).</li>
                    <li>
                        • Comision: afișat public 4% / 5% / 6%, configurabil ca suportat de client sau de organizator (simulator pe pagină).
                    </li>
                    <li>
                        • Operațiuni &amp; securitate: administrare cu 2FA, refund din panou la anulare, limitări anti-bot &amp; anti-overload.
                    </li>
                    <li>
                        • Wallet &amp; aplicații: biletele se pot adăuga în Apple/Google Wallet; aplicații mobile disponibile (client + scanner).
                    </li>
                    <li>
                        • Cashless (NFC): portofel digital pe brățară/aplicație; Biletin gestionează fondurile și refund-urile Cashless
                          conform T&amp;C.
                    </li>
                </ul>
                <p class="mt-3 text-[11px] text-slate-500">
                    Bazat pe pagina „Pentru organizatori”, Termeni &amp; condiții, App Store/Google Play și materiale publice Biletin.ro
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
                Biletin îți dă acces la ecosistemul lor (marketplace, pixeli, Cashless). Tixello mută centrul de greutate pe controlul
                tău: comision mic, cashflow direct și fiscalitate automată pentru piața locală.
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
                        Încasezi direct în contul tău; plătești doar când vinzi; comision 1–3%
                        (1% exclusiv / 2% non-exclusiv / 3% când Tixello procesează tranzacțiile). Poți include comisionul în preț
                        sau îl poți afișa peste — optimizezi conversia cum vrei.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Modelul de cost este simplu, transparent și ușor de simulat în bugetele tale.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Biletin -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Biletin.ro</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Comision public 4–6%, configurabil ca suportat de client sau organizator. Site-ul nu publică un payout model
                        standard către contul organizatorului (direct/imediat vs. decont periodic); trebuie clarificat contractual.
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
                        Admin dedicat (nu-l împarți cu alți organizatori), GTM propriu pe tenant, acces complet la date &amp; analytics,
                        export &amp; integrări — instalare aproape plug &amp; play pe serverul tău.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Practic, ai propria ta platformă, nu un „cont” într-un marketplace.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Biletin -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Biletin.ro</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Panou organizator cu acces la lista de clienți, integrare de pixeli și rapoarte. Nu comunică public un SLA sau un
                        model de izolare tip admin dedicat self-hosted pe organizator, ca standard.
                    </p>
                </div>
            </div>
        </section>

        <!-- 3) Fiscalitate & operațional -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                3) Fiscalitate &amp; operațional
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
                        Îți scoți din cap mare parte din back-office: ce înainte era un folder cu Excel-uri devine un sistem automatizat.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Biletin -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Biletin.ro</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Accent pe marketing (pixeli) și Cashless. T&amp;C precizează că procesarea cardului este la parteneri și că,
                        în Cashless, refund-urile sunt procesate de Biletin și se percep comisioane administrative (ex. 3% + 1 leu sau
                        taxă fixă pentru sume mici). Automatizările fiscale RO (eFactura) nu sunt comunicate public.
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
                        Hărți de locuri cu blocări pe zone/rânduri, personalizare bilete, tipuri multiple (early bird, pachete),
                        emailing și segmente direct în platformă, plus rapoarte live pe conversie.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Biletin -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Biletin.ro</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Hărți de locuri, scanare/validare, bilete în Apple/Google Wallet, aplicații mobile client + scanner.
                        Foarte bun pentru operare &amp; acces, mai puțin focus pe un stack de marketing self-hosted end-to-end.
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
                        Go-live rapid, fără programare; admin dedicat pe tenant; SLA 99.99% și ~300ms timp de răspuns.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Biletin -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">Biletin.ro</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Onboarding self-service (formular „Înregistrare organizator”) și configurare din panou. SLA și payout model
                        standard nu sunt comunicate public, ci țin de relația comercială.
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
                        Nu e doar o altă platformă de ticketing. Tixello este infrastructura ta de venituri: comision mic, cashflow direct,
                        fiscalitate automată și analytics care îți arată clar ce funcționează.
                    </p>
                </div>
                <div class="shrink-0">
                    <div class="inline-flex items-center gap-2 px-3 py-1 text-xs border rounded-full bg-slate-900/80 border-emerald-400/60 lg:text-sm text-emerald-100">
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(52,211,153,0.9)]"></span>
                        Pentru organizatori care numără fiecare procent
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
                        Alegi 1–3%, fără abonamente impuse. Decizi cum afișezi comisionul (inclus vs. peste) și poți modela foarte clar
                        impactul asupra prețului final pentru public.
                    </p>
                </div>

                <!-- 2 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        2. Conversie mai mare, pe cifre reale
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Vezi exact de unde vin vânzările, optimizezi bugetele de marketing și scazi pierderile din ads. Canalele bune și
                        cele slabe se văd direct în rapoarte, nu doar în „feeling”-ul echipei.
                    </p>
                </div>

                <!-- 3 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        3. Cashflow direct &amp; zero corvoadă administrativă
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Banii ajung direct în contul tău, fără să aștepți cicluri de decontare. Facturi, eFactura și documente
                        post-eveniment se generează automat, astfel încât echipa poate respira.
                    </p>
                </div>

                <!-- 4 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        4. Scalabil &amp; sigur pentru seriile de evenimente
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        SLA 99.99%, ~300ms timp de răspuns, rapoarte live, editare rapidă, suport în timp real în chat —
                        astfel încât să poți crește numărul de evenimente fără să-ți schimbi infrastructura.
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
                    Tabel comparativ (executive): Tixello vs Biletin.ro
                </h2>
                <span class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-slate-800 lg:text-sm text-slate-200">
                    Cost, cashflow, marketing &amp; fiscalitate
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs text-left align-top border-collapse lg:text-sm">
                    <thead class="text-xs border-b lg:text-sm text-slate-300 border-slate-800">
                        <tr>
                            <th class="py-2 pr-4">Criteriu</th>
                            <th class="py-2 pr-4 text-emerald-200">Tixello</th>
                            <th class="py-2 pr-4 text-slate-200">Biletin.ro</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-200">
                        <tr>
                            <td class="py-2 pr-4">Model cost</td>
                            <td class="py-2 pr-4">1–3% (plătești doar când vinzi; inclus în preț sau peste)</td>
                            <td class="py-2 pr-4">4–6% (explicite pe site); suportat de client sau organizator</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Cashflow</td>
                            <td class="py-2 pr-4">Banii direct în contul tău; multi-processor, fallback</td>
                            <td class="py-2 pr-4">Nespecificat public (payout către organizator)</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Admin &amp; date</td>
                            <td class="py-2 pr-4">Admin dedicat pe tenant; GTM propriu; export</td>
                            <td class="py-2 pr-4">Panou organizator; acces la clienți, pixeli, rapoarte</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Seating &amp; operare</td>
                            <td class="py-2 pr-4">Hartă + blocări, personalizare bilete, emailing</td>
                            <td class="py-2 pr-4">Hartă locuri, scanare, Wallet (Apple/Google)</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Marketing</td>
                            <td class="py-2 pr-4">Tracking avansat al surselor, segmente, coduri promo</td>
                            <td class="py-2 pr-4">Integrare pixeli + retargetare coș abandonat</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Fiscalitate</td>
                            <td class="py-2 pr-4">Facturi + eFactura, documente post-eveniment</td>
                            <td class="py-2 pr-4">
                                Procesarea cardului la parteneri; Cashless cu refund și comisioane administrative în T&amp;C
                            </td>
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
                Citate cheie: pagina „Pentru organizatori” (acces clienți, pixeli, iframe, wallet, 2FA, refund din panou, comision 4–6%),
                Termeni &amp; condiții (FULL TIME DEV SRL, limitări anti-bot/overload, detaliile Cashless și comisioane de refund),
                plus App Store/Google Play – consultate la 31 octombrie 2025.
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
                Întrebări frecvente despre Tixello vs Biletin.ro
            </h2>

            <!-- Q1 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                >
                    <span>Pot muta comisionul la client la Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 1 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 1"
                    x-transition
                >
                    Da. La Tixello poți include comisionul în preț sau îl poți afișa peste – exact ca să optimizezi conversia
                    (la Biletin, sliderul arată explicit opțiunea client vs. organizator). Diferența este că la Tixello comisionul
                    este 1–3%, nu 4–6%.
                </div>
            </div>

            <!-- Q2 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                >
                    <span>Biletin are Cashless. Tixello are alternativă?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 2 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 2"
                    x-transition
                >
                    Biletin are Cashless (brățară/app, refund-uri cu comision administrativ). Tixello se concentrează pe cashflow direct,
                    fiscalitate automată (eFactura) și multi-processor plăți. Pentru festivaluri cu Cashless dedicat, Tixello poate lucra
                    cu integrări separate în funcție de setup-ul tău.
                </div>
            </div>

            <!-- Q3 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                >
                    <span>Există procente publice pentru comisionul organizatorului la Biletin?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 3 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 3"
                    x-transition
                >
                    Da — 4–6% pe pagina „Pentru organizatori”, cu opțiunea ca acest comision să fie suportat de client sau organizator.
                    La Tixello, intervalul este 1–3%, fără alte feed-uri ascunse.
                </div>
            </div>

            <!-- Q4 -->
            <div>
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                >
                    <span>Biletin oferă payout direct în contul meu?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 4 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 4"
                    x-transition
                >
                    Site-ul Biletin nu publică un model standard de payout către organizator (direct/imediat vs. decont periodic).
                    La Tixello, pleci implicit de la bani direct în contul tău, cu multi-processor &amp; fallback, astfel încât să îți
                    poți planifica cashflow-ul fără surprize.
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
                    Analiza Biletin.ro se bazează pe informații publice consultate la 31 octombrie 2025 (pagina „Pentru organizatori”,
                    Termeni &amp; condiții, App Store/Google Play și articole de pe blog). Dacă reprezinți Biletin și dorești clarificări
                    sau actualizări, scrie-ne — actualizăm cu plăcere.
                </p>
            </div>

            <div class="p-5 text-sm border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h2 class="mb-2 text-base font-semibold lg:text-lg text-emerald-100">
                    Vrei control total, cashflow direct și costuri previzibile?
                </h2>
                <p class="mb-3 text-sm text-emerald-50/90">
                    Programează un demo — îți arătăm cum Tixello scurtează drumul de la anunț la sold-out și cât poți economisi când
                    treci de la 4–6% comision la 1–3%, cu cashflow direct în cont.
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
                    Spune-ne câteva detalii despre evenimentele tale, iar noi pregătim un demo personalizat Tixello vs Biletin.ro:
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
