<?php
/*
Template Name: Tixello vs BLT.ro
*/

get_header();

$current_compare = 'blt';

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
                    Tixello este o platformă B2B pentru organizatori: încasezi direct în contul tău, alegi comisionul 1–3% 
                    (îl poți include în preț sau îl poți afișa peste), ai admin dedicat și microservicii fiscale &amp; analytics 
                    care cresc conversia. SLA 99.99% • ~300ms timp de răspuns.
                </p>
            <?php endwhile; endif; ?>

            <div class="mt-10 grid gap-6 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-start">
                <!-- Card diferențiere -->
                <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/70 backdrop-blur">
                    <h2 class="text-lg font-semibold text-slate-50">
                        Tixello vs modelul de intermediere BLT.ro
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-slate-200">
                        Tixello este construit pentru organizatori care vor cashflow direct, transparență completă pe costuri 
                        și proprietate deplină asupra datelor. BLT.ro funcționează ca serviciu de intermediere online între 
                        organizatori și cumpărători.
                    </p>

                    <div class="mt-6 space-y-5">
                        <?php
                        $metrics = [
                            'Cashflow direct & control' => ['tixello' => 98, 'others' => 60],
                            'Transparență comisioane' => ['tixello' => 95, 'others' => 55],
                            'Microservicii fiscale & analytics' => ['tixello' => 92, 'others' => 50],
                        ];
                        foreach ( $metrics as $label => $values ) :
                        ?>
                            <div>
                                <div class="flex justify-between text-xs lg:text-sm text-slate-300 mb-1.5">
                                    <span><?php echo esc_html( $label ); ?></span>
                                    <span class="text-slate-400">Tixello vs marketplace</span>
                                </div>
                                <div class="flex h-3 overflow-hidden rounded-full bg-slate-800">
                                    <div 
                                        class="h-full transition-all duration-700 bg-gradient-to-r from-emerald-400 via-emerald-300 to-sky-400"
                                        style="width: <?php echo (int) $values['tixello']; ?>%;"
                                    ></div>
                                    <div 
                                        class="h-full transition-all duration-700 bg-slate-600/70"
                                        style="width: <?php echo max(0, 100 - (int) $values['tixello']); ?>%;"
                                    ></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="mt-3 text-[11px] text-slate-400">
                        * Valorile sunt orientative și evidențiază diferența de abordare între Tixello și un serviciu de intermediere.
                    </p>
                </div>

                <!-- CTA -->
                <div class="p-6 border rounded-2xl border-emerald-500/40 bg-emerald-500/10">
                    <h2 class="text-lg font-semibold text-emerald-100">
                        Vrei să ieși din modelul de intermediere?
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-emerald-50/90">
                        Îți arătăm cum arată Tixello ca soluție B2B: site propriu, cashflow direct, comision predictibil și 
                        documente fiscale generate automat.
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

    <!-- SECTIUNE PRINCIPALĂ: DIFERENȚE TIXELLO VS BLT -->
    <section class="max-w-6xl px-4 py-12 mx-auto space-y-10 lg:px-8 lg:py-16">
        <header class="flex flex-col gap-8 lg:flex-row lg:items-start lg:justify-between">
            <div class="lg:w-2/3">
                <h2 class="text-2xl font-semibold lg:text-3xl text-slate-50">
                    Tixello vs BLT.ro — platformă B2B pentru organizatori vs. intermediere pe marketplace
                </h2>
                <p class="mt-4 text-sm lg:text-base text-slate-200">
                    BLT.ro operează ca serviciu de intermediere online între organizatori și cumpărători, pe bază de contract. 
                    Comisionul vizibil la checkout este o „taxă de emitere bilet” plătită de client, iar încasarea poate fi 
                    făcută fie de vânzător, fie de platformă. Tixello, în schimb, este o soluție B2B full-stack, centrată pe 
                    cashflow direct și control pentru organizator.
                </p>
            </div>

            <!-- Context BLT -->
            <div class="p-5 text-sm border lg:w-1/3 rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-slate-50">
                    Ce este BLT.ro (context factual)
                </h3>
                <ul class="mt-3 space-y-2 text-sm text-slate-200">
                    <li>
                        <span class="font-semibold text-slate-100">Rol:</span> „furnizor de servicii de intermediere online” 
                        între organizatori („Vânzători”) și clienți — colaborare pe contract de promovare și intermediere.
                    </li>
                    <li>
                        <span class="font-semibold text-slate-100">Comision pentru client:</span> „Taxă de emitere bilet (comision)” 
                        comunicată la checkout, în plus față de prețul biletului care revine vânzătorului.
                    </li>
                    <li>
                        <span class="font-semibold text-slate-100">Plăți &amp; încasări:</span> procesare prin Netopia–MobilPay; 
                        încasarea o face fie vânzătorul, fie platforma, cu virarea ulterioară către vânzător a prețului biletului.
                    </li>
                    <li>
                        <span class="font-semibold text-slate-100">Livrare &amp; acces:</span> bilete electronice și fizice; 
                        paginile de eveniment includ „selecție locuri”.
                    </li>
                </ul>
                <p class="mt-3 text-[11px] text-slate-500">
                    Informații preluate din documentele publice BLT.ro (Termeni &amp; condiții, Politica de confidențialitate).
                </p>
            </div>
        </header>

        <div class="space-y-6 lg:space-y-8">
            <!-- 1) Cashflow & comisioane -->
            <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-200">
                    1) Cashflow &amp; comisioane
                </h3>
                <div class="grid gap-6 mt-4 text-sm sm:grid-cols-2 lg:text-base">
                    <div>
                        <p class="mb-2 font-semibold text-emerald-200">Tixello</p>
                        <p class="text-slate-100">
                            Banii intră direct în contul tău; plătești doar când vinzi; comision 1–3% (1% exclusiv / 2% non-exclusiv 
                            / 3% când Tixello procesează tranzacțiile). Poți include comisionul în preț sau îl poți afișa peste.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">BLT.ro</p>
                        <p class="text-slate-200">
                            Comisionul vizibil public este o taxă plătită de client; încasarea poate fi făcută de platformă, 
                            care virează ulterior doar prețul biletului către organizator — model ce poate întârzia cashflow-ul. 
                            Nu sunt publicate comisioane pentru organizatori.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 2) Controlul și proprietatea datelor -->
            <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-200">
                    2) Controlul și proprietatea datelor
                </h3>
                <div class="grid gap-6 mt-4 text-sm sm:grid-cols-2 lg:text-base">
                    <div>
                        <p class="mb-2 font-semibold text-emerald-200">Tixello</p>
                        <p class="text-slate-100">
                            Admin dedicat (nu-l împarți cu alți organizatori), datele clienților și analytics la tine, 
                            GTM propriu, export &amp; integrări. Tixello este gândit ca un instrument de creștere pentru organizatori.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">BLT.ro</p>
                        <p class="text-slate-200">
                            BLT prelucrează datele pe seama organizatorului (împreună cu fluxurile de plată MobilPay), însă nu 
                            există specificații publice despre un panou dedicat pentru organizatori sau despre un SLA asumat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 3) Microservicii -->
            <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-200">
                    3) Microservicii care îți economisesc timp
                </h3>
                <div class="grid gap-6 mt-4 text-sm sm:grid-cols-2 lg:text-base">
                    <div>
                        <p class="mb-2 font-semibold text-emerald-200">Tixello</p>
                        <p class="text-slate-100">
                            Facturare automată + eFactura, pachet de documente fiscale &amp; legale post-eveniment, multi-processor 
                            plăți (fallback &amp; routing), tracking avansat (canale/surse), aplicații de scanare iOS/Android, 
                            rapoarte live.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">BLT.ro</p>
                        <p class="text-slate-200">
                            Oferă bilete electronice/fizice și selecție locuri; nu are publicate eFactura, multi-processor, 
                            GTM propriu sau SLA pentru organizatori.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 4) Marketing & conversie -->
            <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-200">
                    4) Marketing &amp; creșterea conversiei
                </h3>
                <div class="grid gap-6 mt-4 text-sm sm:grid-cols-2 lg:text-base">
                    <div>
                        <p class="mb-2 font-semibold text-emerald-200">Tixello</p>
                        <p class="text-slate-100">
                            Email marketing din platformă, coduri promo, segmente, early bird / tiered / pachete, personalizare 
                            bilete &amp; branding, tracking avansat al surselor de conversie.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">BLT.ro</p>
                        <p class="text-slate-200">
                            Site-ul pune accent pe beneficii pentru cumpărători; lipsesc public detalii de CRM/marketing self-service 
                            pentru organizatori.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 5) Onboarding -->
            <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-200">
                    5) Onboarding &amp; time-to-market
                </h3>
                <div class="grid gap-6 mt-4 text-sm sm:grid-cols-2 lg:text-base">
                    <div>
                        <p class="mb-2 font-semibold text-emerald-200">Tixello</p>
                        <p class="text-slate-100">
                            Aproape plug &amp; play — site-ul organizatorului se instalează automat pe serverul lui, fără programare. 
                            Poți replica rapid structuri de evenimente și tipuri de bilete.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">BLT.ro</p>
                        <p class="text-slate-200">
                            Colaborare pe contract, cu listare pe marketplace; nu este promovat un traseu self-service cu admin 
                            dedicat sau instalare pe serverul organizatorului.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Ce câștigi practic cu Tixello -->
            <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                    Ce câștigi practic cu Tixello
                </h3>
                <ul class="mt-3 space-y-2 text-sm lg:text-base text-emerald-50/90">
                    <li>• Cashflow predictibil: banii direct la tine, fără a depinde de cicluri de virare ale platformei.</li>
                    <li>• Costuri sub control: alegi între 1–3%, decizi cum apare comisionul (inclus vs. peste).</li>
                    <li>• Mai multă conversie: vezi exact de unde vin vânzările, optimizezi campaniile, scazi pierderile din ads.</li>
                    <li>• Zero corvoadă administrativă: facturi, eFactura și documente generate automat.</li>
                    <li>• Scalabilitate &amp; suport: rapoarte live, editare rapidă, chat în timp real cu echipa Tixello.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- TABEL COMPARATIV SEPARAT -->
    <section class="max-w-6xl px-4 pb-12 mx-auto lg:px-8 lg:pb-16">
        <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
            <div class="flex flex-col gap-3 mb-4 sm:flex-row sm:items-center sm:justify-between">
                <h3 class="text-lg font-semibold lg:text-xl text-slate-50">
                    Tabel comparativ (executive): Tixello vs BLT.ro
                </h3>
                <span class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-slate-800 lg:text-sm text-slate-200">
                    B2B platformă proprie vs. intermediere
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs text-left align-top border-collapse lg:text-sm">
                    <thead class="text-xs border-b lg:text-sm text-slate-300 border-slate-800">
                        <tr>
                            <th class="py-2 pr-4">Criteriu</th>
                            <th class="py-2 pr-4 text-emerald-200">Tixello</th>
                            <th class="py-2 pr-4 text-slate-200">BLT.ro</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-200">
                        <tr>
                            <td class="py-2 pr-4">Model comision</td>
                            <td class="py-2 pr-4">1–3% (flexibil; inclus în preț sau peste)</td>
                            <td class="py-2 pr-4">„Taxă de emitere bilet (comision)” plătită de client; fără cotă publică pentru organizatori</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Costuri fixe</td>
                            <td class="py-2 pr-4">Plătești doar când vinzi</td>
                            <td class="py-2 pr-4">Nespecificat public</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Încasări</td>
                            <td class="py-2 pr-4">Direct în contul organizatorului</td>
                            <td class="py-2 pr-4">Încasează vânzătorul sau platforma; platforma poate vira ulterior doar prețul biletului către vânzător</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Acces la date</td>
                            <td class="py-2 pr-4">Organizatorul deține datele + analytics, GTM propriu</td>
                            <td class="py-2 pr-4">BLT prelucrează date pe seama organizatorului; fără panou dedicat/SLA public</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Admin &amp; control</td>
                            <td class="py-2 pr-4">Admin dedicat, site propriu (tenant)</td>
                            <td class="py-2 pr-4">Intermediere pe marketplace; contract de promovare &amp; intermediere</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Microservicii</td>
                            <td class="py-2 pr-4">eFactura, documente fiscale, multi-processor, tracking, app scan</td>
                            <td class="py-2 pr-4">Bilete electronice/fizice, selecție locuri; alte microservicii nu sunt publicate</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">SLA &amp; performanță</td>
                            <td class="py-2 pr-4">99.99% · ~300ms</td>
                            <td class="py-2 pr-4">Nespecificat public</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-3 text-[11px] text-slate-500">
                Citate cheie: Termeni &amp; condiții BLT (intermediere, taxă de emitere, plată/încasare, selecție locuri), 
                Politica de confidențialitate (Ticket Technologies, MobilPay) – conform blt.ro.
            </p>
        </div>
    </section>

    <!-- FAQ ACORDEON + NOTĂ -->
    <section class="max-w-6xl mx-auto px-4 lg:px-8 pb-12 lg:pb-16 grid lg:grid-cols-[minmax(0,1.5fr)_minmax(0,1fr)] gap-8">
        <!-- FAQ -->
        <div 
            class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6"
            x-data="{ openFaqBlt: 1 }"
        >
            <h3 class="mb-4 text-lg font-semibold lg:text-xl text-slate-50">
                Întrebări frecvente despre Tixello vs BLT.ro
            </h3>

            <!-- Q1 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button 
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaqBlt === 1 ? openFaqBlt = null : openFaqBlt = 1"
                >
                    <span>Poate Tixello lucra cu mai mulți procesatori de plată?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaqBlt === 1 ? '–' : '+'"></span>
                </button>
                <div 
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaqBlt === 1"
                    x-transition
                >
                    Da. Poți seta un procesor principal și unul de backup, inclusiv routing după reguli (valoare, țară, tip de card).
                </div>
            </div>

            <!-- Q2 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button 
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaqBlt === 2 ? openFaqBlt = null : openFaqBlt = 2"
                >
                    <span>Pot include comisionul Tixello în prețul biletului?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaqBlt === 2 ? '–' : '+'"></span>
                </button>
                <div 
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaqBlt === 2"
                    x-transition
                >
                    Da — sau îl poți afișa separat. Poți testa ambele variante și urmări impactul în conversie în analytics.
                </div>
            </div>

            <!-- Q3 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button 
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaqBlt === 3 ? openFaqBlt = null : openFaqBlt = 3"
                >
                    <span>Cine deține datele clienților în Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaqBlt === 3 ? '–' : '+'"></span>
                </button>
                <div 
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaqBlt === 3"
                    x-transition
                >
                    Tu, ca organizator. Tixello îți oferă acces complet la date, export, integrări și GTM propriu, fără să „blocheze” 
                    relația cu publicul tău.
                </div>
            </div>

            <!-- Q4 -->
            <div>
                <button 
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaqBlt === 4 ? openFaqBlt = null : openFaqBlt = 4"
                >
                    <span>Cum pot migra de pe un marketplace (ex. BLT.ro) pe Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaqBlt === 4 ? '–' : '+'"></span>
                </button>
                <div 
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaqBlt === 4"
                    x-transition
                >
                    Migrarea se poate face gradual: păstrezi o perioadă listările existente, în timp ce lansezi și vânzarea directă 
                    prin Tixello pe site-ul tău. Putem defini împreună un plan de tranziție și comunicare către public.
                </div>
            </div>
        </div>

        <!-- Notă transparență + CTA -->
        <div class="space-y-4">
            <div class="p-5 text-sm border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6 text-slate-200">
                <h3 class="mb-2 text-base font-semibold lg:text-lg text-slate-50">
                    Notă de transparență
                </h3>
                <p class="text-xs lg:text-sm text-slate-300">
                    Informațiile despre BLT.ro provin din paginile Termeni &amp; condiții, Politica de confidențialitate 
                    și Despre noi publice la 31 octombrie 2025. Dacă reprezinți BLT.ro și dorești actualizări, scrie-ne — 
                    actualizăm cu plăcere comparația.
                </p>
            </div>

            <div class="p-5 text-sm border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h3 class="mb-2 text-base font-semibold lg:text-lg text-emerald-100">
                    Vrei control total, bani direct în cont și mai multă conversie?
                </h3>
                <p class="mb-3 text-sm text-emerald-50/90">
                    Programează un demo — îți arătăm cum Tixello arată pentru evenimentele tale dacă vii dintr-un model de intermediere.
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

    <!-- ANCORĂ CTA GLOBALĂ -->
    <section id="contact-demo" class="border-t border-slate-800 bg-slate-950">
        <div class="flex flex-col items-start justify-between max-w-6xl gap-6 px-4 py-10 mx-auto lg:px-8 lg:py-14 lg:flex-row lg:items-center">
            <div>
                <h2 class="text-xl font-semibold lg:text-2xl text-slate-50">
                    Vrei să vezi cum arată Tixello pe setup-ul tău de evenimente?
                </h2>
                <p class="max-w-xl mt-2 text-sm lg:text-base text-slate-300">
                    Spune-ne câteva detalii despre volum, tipuri de evenimente și canale de vânzare, iar noi pregătim un demo 
                    personalizat Tixello pentru tine.
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
