<?php
/*
Template Name: Tixello vs Oveit
*/

get_header();

$current_compare = 'oveit';

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
                    Păstrezi controlul și scazi costurile. Tixello îți virează banii direct în cont, îți oferă comision flexibil
                    1–3% (poți să-l incluzi în preț sau să-l adaugi peste), admin dedicat și microservicii fiscale &amp; analytics
                    care cresc conversia. SLA 99.99% • ~300ms timp de răspuns.
                </p>
            <?php endwhile; endif; ?>

            <div class="mt-10 grid gap-6 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-start">
                <!-- Card metrici Tixello -->
                <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/70 backdrop-blur">
                    <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                        Tixello: platformă B2B cu focus pe control, costuri &amp; fiscalitate
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-slate-200">
                        Fără abonament impus, comision 1–3%, cashflow direct și automatizări fiscale pentru piața locală.
                        Tu decizi cum afișezi comisionul (inclus vs. peste) și optimizezi conversia pe cifre reale.
                    </p>

                    <!-- Mini „chart” comparativ simbolic -->
                    <div class="mt-6 space-y-4">
                        <?php
                        $metrics = [
                            'Cost total pentru organizator' => ['tixello' => 90, 'oveit' => 65],
                            'Control fiscal & documente'    => ['tixello' => 95, 'oveit' => 60],
                            'Cashflow direct & flexibilitate' => ['tixello' => 96, 'oveit' => 80],
                        ];
                        foreach ( $metrics as $label => $values ) :
                        ?>
                            <div>
                                <div class="flex justify-between text-xs lg:text-sm text-slate-300 mb-1.5">
                                    <span><?php echo esc_html( $label ); ?></span>
                                    <span class="text-slate-400">Tixello vs Oveit</span>
                                </div>
                                <div class="flex h-3 overflow-hidden rounded-full bg-slate-800">
                                    <div
                                        class="h-full transition-all duration-700 bg-gradient-to-r from-emerald-400 via-emerald-300 to-sky-400"
                                        style="width: <?php echo (int) $values['tixello']; ?>%;"
                                    ></div>
                                    <div
                                        class="h-full transition-all duration-700 bg-slate-600/70"
                                        style="width: <?php echo (int) $values['oveit']; ?>%;"
                                    ></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="mt-3 text-[11px] text-slate-400">
                        * Valorile sunt orientative, rezumă accentul Tixello pe cost total, cashflow direct și fiscalitate automatizată vs. un model global axat pe cashless/Web3.
                    </p>
                </div>

                <!-- CTA -->
                <div class="p-6 border rounded-2xl border-emerald-500/40 bg-emerald-500/10">
                    <h2 class="text-lg font-semibold text-emerald-100">
                        Vrei să vezi Tixello pe structura evenimentelor tale?
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-emerald-50/90">
                        Într-un demo live îți arătăm exact cum arată costul total, cum se generează automat facturile &amp; eFactura
                        și cum urmărești conversia pe canale.
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

    <!-- TL;DR & CONTEXT OVEIT -->
    <section class="max-w-6xl px-4 py-10 mx-auto space-y-8 lg:px-8 lg:py-14">
        <div class="grid lg:grid-cols-[minmax(0,1.6fr)_minmax(0,1.1fr)] gap-8">
            <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/60">
                <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                    TL;DR pentru organizatori
                </h2>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Oveit este o platformă de ticketing &amp; plăți (inclusiv cashless NFC/RFID), cu opțiuni de plăți directe,
                    NFT tickets și soluții pentru streaming/vânzări online. Are planuri pe abonament (ex. Pro $199/lună) și, conform
                    Knowledge Base, un comision 4%/vânzare pentru evenimente plătite sau peste 300 de participanți (în funcție de plan).
                </p>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Tixello pune accent pe cashflow-ul direct la organizator, comision 1–3% (fără costuri fixe impuse), fiscalitate
                    automată pentru piața locală (facturi + eFactura), multi-processor plăți, tracking avansat și admin dedicat
                    instalat pe serverul tău.
                </p>
            </div>

            <div class="p-6 text-sm border rounded-2xl border-slate-800 bg-slate-900/60 lg:text-base">
                <h3 class="text-base font-semibold lg:text-lg text-slate-50">
                    Ce este Oveit (pe scurt, factual)
                </h3>
                <ul class="mt-3 space-y-2 text-slate-200">
                    <li>• Ticketing &amp; payments end-to-end, cu vânzări online, box office și parteneri; colectare de date la înregistrare.</li>
                    <li>• Plăți directe către organizatori (Stripe/PayPal, card, transfer bancar, chiar și crypto – „banii curg direct la ei”).</li>
                    <li>• Cashless NFC/RFID (Oveit Pay), portofele digitale/wristband, top-up, rapoarte în timp real.</li>
                    <li>• NFT tickets și ecosistem Web3; Streams.live pentru conținut plătit/streaming.</li>
                    <li>• Seat maps (ex. sport/arenă) și analytics în timp real.</li>
                    <li>• Politici GDPR publicate.</li>
                </ul>
                <p class="mt-3 text-[11px] text-slate-500">
                    Analiză bazată pe informații publice Oveit (site, Knowledge Base, interviuri).
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
                Oveit excelează pe componente de cashless/NFC și Web3. Tixello se concentrează pe cost total mic, fiscalitate automată
                și control end-to-end pentru organizatorii din piața locală.
            </p>
        </header>

        <!-- 1) Costuri & model de comision -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                1) Costuri &amp; model de comision
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Card Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">
                        Tixello
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Plătești doar când vinzi: 1–3% (1% exclusiv, 2% non-exclusiv, 3% dacă Tixello procesează tranzacțiile).
                        Comisionul îl poți include în preț sau îl poți adăuga peste, în funcție de strategia ta de conversie.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Fără abonament impus, fără fee-uri „invizibile” pe tranzacție. Vezi clar, încă de la început, cât te costă.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Card Oveit -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">
                        Oveit
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Are planuri pe abonament (ex. Pro $199/lună) și, conform Knowledge Base, 4% per vânzare pentru evenimente plătite
                        sau peste 300 participanți (în funcție de plan).
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-slate-300">
                        Dacă ești sensibil la fee-uri recurente sau la un % mai mare pe tranzacție, Tixello poate reduce semnificativ
                        costul total de proprietate.
                    </p>
                </div>
            </div>
        </section>

        <!-- 2) Cashflow & plăți -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                2) Cashflow &amp; plăți
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Card Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">
                        Tixello
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Payout direct în contul tău, nativ. Multi-processor plăți, fallback și routing, astfel încât să nu pierzi
                        conversie la probleme izolate de procesator.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Poți controla cum apare comisionul (inclus vs. peste) și poți testa rapid variantele ca să vezi ce funcționează.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Card Oveit -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">
                        Oveit
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Oferă plăți directe către organizatori (Stripe/PayPal, card, transfer bancar, crypto) — „banii curg direct la ei”.
                        Cashflow-ul este, în principiu, direct, dar fără accent pe multi-processor &amp; routing local.
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
                <!-- Card Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">
                        Tixello
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Facturare automată, eFactura, pachet de documente fiscale &amp; legale post-eveniment — toate gândite pentru
                        contextul fiscal local. Ideal când ai volum mare de vânzări și vrei să dormi liniștit.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Card Oveit -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">
                        Oveit
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Documentația publică pune accent pe cashless/NFC, Web3/NFT și streaming; nu comunică explicit eFactura
                        sau automatizări fiscale specializate pentru România.
                    </p>
                </div>
            </div>
        </section>

        <!-- 4) Date & marketing -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                4) Date &amp; marketing
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Card Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">
                        Tixello
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Admin dedicat (nu îl împarți cu nimeni), GTM propriu, tracking de surse &amp; atribuiri, email marketing
                        din platformă, coduri promo, segmente, rapoarte live.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Practic, ai un mini „growth stack” direct în soluția de ticketing, fără bricolaj între tool-uri.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Card Oveit -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">
                        Oveit
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Permite colectare de date și rapoarte, este GDPR-compliant, însă nu comunică public un stack de marketing
                        self-hosted (gen GTM propriu la nivel de tenant) similar Tixello.
                    </p>
                </div>
            </div>
        </section>

        <!-- 5) Seating & tipuri de bilete -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                5) Seating &amp; tipuri de bilete
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Card Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">
                        Tixello
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Hartă de locuri, blocare locuri/zone, tipuri multiple de bilete, personalizare bilete și control fin
                        asupra hărții — foarte util la venue-uri complexe sau turnee cu structuri diferite.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Card Oveit -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">
                        Oveit
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Oferă seat maps (ex. sport/arenă) și analytics în timp real; focusul principal este pe infrastructura
                        globală de ticketing &amp; payments.
                    </p>
                </div>
            </div>
        </section>

        <!-- 6) Cazuri de utilizare speciale -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold lg:text-xl text-emerald-200">
                6) Cazuri de utilizare speciale
            </h3>
            <div class="grid lg:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)] gap-4 lg:gap-6 items-stretch">
                <!-- Card Tixello -->
                <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/10 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-emerald-100">
                        Tixello
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Dacă vrei fiscalitate automată, cost total mic și control de la A la Z pe piața locală, Tixello iese în față.
                        Ideal pentru organizatori care au nevoie de predictibilitate financiară și raportare impecabilă.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- Card Oveit -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">
                        Oveit
                    </h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Dacă vrei cashless/NFC și wallet la festival, Oveit are un pachet matur (Oveit Pay), plus NFT tickets și
                        Streams.live pentru Web3/streaming.
                    </p>
                </div>
            </div>
        </section>
    </section>

    <!-- CE CÂȘTIGI PRACTIC CU TIXELLO (VERSIUNE MAI VENDABILĂ) -->
    <section class="max-w-6xl px-4 pb-12 mx-auto lg:px-8 lg:pb-16">
        <div class="p-6 border rounded-3xl border-emerald-500/40 bg-gradient-to-br from-slate-900 via-slate-900 to-emerald-900/40 lg:p-8">
            <div class="flex flex-col gap-6 mb-6 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <h2 class="text-xl font-semibold lg:text-2xl text-emerald-50">
                        Ce câștigi practic cu Tixello
                    </h2>
                    <p class="max-w-xl mt-3 text-sm lg:text-base text-emerald-100/90">
                        Nu e doar o platformă de ticketing. Este infrastructura ta de venituri: costuri clare, cashflow direct,
                        fiscalitate automată și analytics care te ajută să crești, nu doar să vinzi bilete.
                    </p>
                </div>
                <div class="shrink-0">
                    <div class="inline-flex items-center gap-2 px-3 py-1 text-xs border rounded-full bg-slate-900/80 border-emerald-400/60 lg:text-sm text-emerald-100">
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(52,211,153,0.9)]"></span>
                        Gândit pentru organizatori care vor control, nu dependență
                    </div>
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-2 lg:gap-6">
                <!-- Card 1 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        1. Cost total mai mic &amp; previzibil
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Fără abonament impus. Nu te trezești cu „surprize” pe factură: ai 1–3% comision și atât. 
                        Diferența față de abonamente + % mari pe tranzacție se vede imediat în profit.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        2. Conversie mai mare, pe cifre reale
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Poți testa rapid comision inclus vs. peste, vezi exact de unde vin vânzările și ce campanii ard buget
                        fără să aducă bilete. Tracking granular &amp; GTM propriu, nu „cutie neagră”.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        3. Zero corvoadă administrativă
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Facturi, eFactura, documente fiscale și legale la final de eveniment — toate generate automat. 
                        Echipa ta se concentrează pe line-up, nu pe Excel-uri și PDF-uri.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        4. Scalabil &amp; sigur pentru seriile de evenimente
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        SLA 99.99%, ~300ms timp de răspuns, multi-processor plăți și suport live în chat. 
                        Poți scala de la un eveniment mic la un festival fără să schimbi platforma.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- TABEL COMPARATIV SEPARAT -->
    <section class="max-w-6xl px-4 pb-12 mx-auto lg:px-8 lg:pb-16">
        <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
            <div class="flex flex-col gap-3 mb-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                    Tabel comparativ (executive): Tixello vs Oveit
                </h2>
                <span class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-slate-800 lg:text-sm text-slate-200">
                    Focus Tixello: cost total &amp; fiscalitate locală
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs text-left align-top border-collapse lg:text-sm">
                    <thead class="text-xs border-b lg:text-sm text-slate-300 border-slate-800">
                        <tr>
                            <th class="py-2 pr-4">Criteriu</th>
                            <th class="py-2 pr-4 text-emerald-200">Tixello</th>
                            <th class="py-2 pr-4 text-slate-200">Oveit</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-200">
                        <tr>
                            <td class="py-2 pr-4">Model cost</td>
                            <td class="py-2 pr-4">1–3% (fără abonament impus; plătești doar când vinzi)</td>
                            <td class="py-2 pr-4">Planuri abonament (ex. Pro $199/lună) + în unele cazuri 4% per vânzare (KB)</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Cashflow</td>
                            <td class="py-2 pr-4">Banii direct în contul tău; multi-processor, fallback &amp; routing</td>
                            <td class="py-2 pr-4">Plăți directe către organizator (Stripe/PayPal/card/bank/crypto)</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Fiscalitate</td>
                            <td class="py-2 pr-4">Facturi + eFactura, documente fiscale/legale automat</td>
                            <td class="py-2 pr-4">Accent pe cashless/NFC &amp; Web3; nu comunicate public automatizări eFactura</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Admin &amp; date</td>
                            <td class="py-2 pr-4">Admin dedicat pe serverul tău; GTM propriu</td>
                            <td class="py-2 pr-4">Colectare date &amp; GDPR; fără detaliu public despre GTM self-hosted per tenant</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Seating</td>
                            <td class="py-2 pr-4">Hartă + blocare locuri/zone, personalizare bilete</td>
                            <td class="py-2 pr-4">Seat maps (ex. sport/arenă)</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Specialități</td>
                            <td class="py-2 pr-4">Optimizare cost/conversie &amp; fiscalitate locală</td>
                            <td class="py-2 pr-4">Cashless NFC/RFID, NFT tickets, Streams.live</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">SLA &amp; performanță</td>
                            <td class="py-2 pr-4">99.99% • ~300ms</td>
                            <td class="py-2 pr-4">Nespecificat public</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-3 text-[11px] text-slate-500">
                Citate cheie Oveit: Pricing (plan Pro $199/lună), Knowledge Base (4%/vânzare peste 300 participanți/plătit),
                Direct payments &amp; integrare Stripe/PayPal, NFC/RFID cashless, NFT tickets, Streams.live, Seat maps, GDPR – conform documentației publice Oveit.
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
                Întrebări frecvente despre Tixello vs Oveit
            </h2>

            <!-- Q1 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                >
                    <span>Oveit și Tixello plătesc direct în contul meu?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 1 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 1"
                    x-transition
                >
                    Da. Oveit comunică direct payments (Stripe/PayPal/card/bank/crypto). Tixello pornește implicit cu payout direct
                    în contul tău și adaugă multi-processor &amp; routing pentru mai multă stabilitate în conversie.
                </div>
            </div>

            <!-- Q2 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                >
                    <span>Există abonament lunar la Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 2 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 2"
                    x-transition
                >
                    Nu impunem abonament. Modelul Tixello este 1–3% (plătești doar când vinzi). La Oveit, există planuri cu
                    abonament (ex. $199/lună) și, conform Knowledge Base, în anumite condiții 4% per vânzare.
                </div>
            </div>

            <!-- Q3 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                >
                    <span>Care platformă mă ajută mai mult la fiscalitate în România?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 3 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 3"
                    x-transition
                >
                    Tixello: facturi + eFactura, documente post-eveniment generate automat. Oveit pune accent pe cashless/NFC și Web3
                    (NFT, Streams.live) și nu detaliază public automatizări fiscale pentru România.
                </div>
            </div>

            <!-- Q4 -->
            <div>
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                >
                    <span>Am nevoie de cashless la festival. Ce aleg?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 4 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 4"
                    x-transition
                >
                    Dacă vrei NFC/RFID „la cheie”, Oveit are un pachet matur (Oveit Pay). Dacă prioritatea ta este cashflow direct,
                    cost total mic și automatizări fiscale locale, Tixello este construit exact pentru asta. Poți combina strategii:
                    Tixello ca platformă principală + soluții cashless dedicate acolo unde ai nevoie.
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
                    Analiza se bazează pe informații publice Oveit disponibile la 31 octombrie 2025 (site, Knowledge Base, interviuri).
                    Verifică mereu ultimele planuri și condiții comerciale direct la sursă, mai ales pentru abonamente și taxe pe tranzacție.
                </p>
            </div>

            <div class="p-5 text-sm border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h2 class="mb-2 text-base font-semibold lg:text-lg text-emerald-100">
                    Vrei control total, bani direct în cont și costuri previzibile?
                </h2>
                <p class="mb-3 text-sm text-emerald-50/90">
                    Programează un demo — îți arătăm cum Tixello scurtează drumul de la anunț la sold-out, cu focus pe cost total și fiscalitate.
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
                    Spune-ne câteva detalii despre evenimentele tale (volum, tip de public, mix de canale), iar noi pregătim un demo
                    personalizat, cu cifre de cost și scenarii de optimizare a conversiei.
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
