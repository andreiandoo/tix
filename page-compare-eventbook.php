<?php
/*
Template Name: Compare Eventbook
*/

get_header();

$current_compare = 'eventbook';

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
    // Adaugă aici restul comparațiilor:
    // [ 'slug' => 'bilete-ro', 'label' => 'Tixello vs Bilete.ro', 'url' => '/tixello-vs-bilete-ro' ],
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
                    Tixello este o platformă B2B pentru organizatori de evenimente: păstrezi controlul, 
                    încasezi direct în contul tău și alegi comisionul (1–3%). Admin dedicat, microservicii fiscale 
                    &amp; analytics, SLA 99.99% și timp de răspuns ~300ms.
                </p>
            <?php endwhile; endif; ?>

            <div class="mt-10 grid gap-6 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-start">
                <!-- Card metrici Tixello -->
                <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/70 backdrop-blur">
                    <h2 class="text-lg font-semibold text-slate-50">
                        De ce Tixello iese în față în fața unui marketplace de bilete
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-slate-200">
                        Control pe brand și site propriu, încasări directe, comision flexibil și microservicii 
                        care scot munca administrativă din capul echipei tale.
                    </p>

                    <!-- Mini chart-uri bară -->
                    <div class="mt-6 space-y-5">
                        <?php
                        $metrics = [
                            'Control & date' => ['tixello' => 100, 'others' => 55],
                            'Cash-flow & comisioane' => ['tixello' => 95, 'others' => 60],
                            'Automatizări & microservicii' => ['tixello' => 92, 'others' => 50],
                        ];
                        foreach ( $metrics as $label => $values ) :
                        ?>
                            <div>
                                <div class="flex justify-between text-xs lg:text-sm text-slate-300 mb-1.5">
                                    <span><?php echo esc_html( $label ); ?></span>
                                    <span class="text-slate-400">Tixello vs alte platforme</span>
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
                        * Valorile sunt orientative și sintetizează modul în care Tixello este gândit pentru organizatori vs. marketplace-uri clasice.
                    </p>
                </div>

                <!-- Card CTA -->
                <div class="p-6 border rounded-2xl border-emerald-500/40 bg-emerald-500/10">
                    <h2 class="text-lg font-semibold text-emerald-100">
                        Vrei să vezi Tixello pe structura evenimentelor tale?
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-emerald-50/90">
                        Programăm un demo live și trecem împreună prin setup: eveniment, tipuri de bilete, hărți de locuri, 
                        rapoarte live și microservicii fiscale.
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
                    <dl class="grid grid-cols-2 gap-3 mt-5 text-xs text-emerald-100/90">
                        <div>
                            <dt class="font-semibold text-emerald-200">Comision</dt>
                            <dd>1–3% · plătești doar când vinzi</dd>
                        </div>
                        <div>
                            <dt class="font-semibold text-emerald-200">Încasări</dt>
                            <dd>Direct în contul tău de organizator</dd>
                        </div>
                    </dl>
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

    <!-- SECTIUNE PRINCIPALĂ: DIFERENȚE TIXELLO VS EVENTBOOK -->
    <section class="max-w-6xl px-4 py-12 mx-auto space-y-10 lg:px-8 lg:py-16">
        <header class="flex flex-col gap-8 lg:flex-row lg:items-start lg:justify-between">
            <div class="lg:w-2/3">
                <h2 class="text-2xl font-semibold lg:text-3xl text-slate-50">
                    Tixello vs Eventbook: platformă B2B pentru organizatori vs. marketplace de bilete
                </h2>
                <p class="mt-4 text-sm lg:text-base text-slate-200">
                    Tixello este construit pentru organizatori care vor control total: site propriu, încasări directe, comision 
                    predictibil și acces complet la date. Eventbook funcționează ca marketplace de bilete, cu vânzare pe site, 
                    API/iframe și rețea de puncte fizice.
                </p>
            </div>

            <!-- Context competitor -->
            <div class="p-5 border lg:w-1/3 rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-slate-50">
                    Cum funcționează Eventbook (din surse publice)
                </h3>
                <p class="mt-3 text-sm text-slate-200">
                    Eventbook vinde bilete online și lucrează cu organizatorii în baza unui contract prealabil, vânzarea putând avea 
                    loc pe eventbook.ro, prin API/iframe sau offline în rețeaua de puncte fizice și case de bilete.
                </p>
                <ul class="mt-3 space-y-1.5 text-xs lg:text-sm text-slate-300">
                    <li>• Aplicație de scanare/validare bilete (Android).</li>
                    <li>• Unele evenimente oferă „Choose seats” (hartă locuri) și afișează preț + taxe pentru cumpărător.</li>
                    <li>• Plăți via mobilPay, inclusiv în rate cu mai multe bănci.</li>
                    <li>• Nu comunică transparent public comisioanele pentru organizatori, modelul de payout sau SLA.</li>
                </ul>
                <p class="mt-3 text-[11px] text-slate-500">
                    Analiză bazată pe informații publice disponibile pe eventbook.ro.
                </p>
            </div>
        </header>

        <div class="space-y-6 lg:space-y-8">
            <!-- 1) Cash-flow & comisioane -->
            <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-200">
                    1) Cash-flow &amp; comisioane
                </h3>
                <div class="grid gap-6 mt-4 text-sm sm:grid-cols-2 lg:text-base">
                    <div>
                        <p class="mb-2 font-semibold text-emerald-200">Tixello</p>
                        <p class="text-slate-100">
                            Încasezi direct în contul tău; plătești doar când vinzi; alegi comisionul 
                            (1% exclusiv / 2% non-exclusiv / 3% când Tixello procesează tranzacțiile). 
                            Poți include comisionul în preț sau îl poți adăuga peste.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">Eventbook</p>
                        <p class="text-slate-200">
                            Nu publică comisioane pentru organizatori sau fluxul de payout către organizatori pe paginile publice.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 2) Controlul datelor & al platformei -->
            <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-200">
                    2) Controlul datelor &amp; al platformei
                </h3>
                <div class="grid gap-6 mt-4 text-sm sm:grid-cols-2 lg:text-base">
                    <div>
                        <p class="mb-2 font-semibold text-emerald-200">Tixello</p>
                        <p class="text-slate-100">
                            Ai admin dedicat (nu îl împarți cu alți organizatori), acces complet la date și analytics, GTM propriu 
                            și integrări de marketing. Tixello funcționează ca un SaaS B2B, nu ca marketplace.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">Eventbook</p>
                        <p class="text-slate-200">
                            Relația este guvernată de un contract prealabil, cu vânzare pe site/iframe/puncte fizice; nu sunt publicate 
                            pagini cu detalii despre un panou dedicat organizatorului sau politici de acces la date similare unui SaaS self-service.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 3) Microservicii -->
            <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-200">
                    3) Microservicii care îți scot munca din cap
                </h3>
                <div class="grid gap-6 mt-4 text-sm sm:grid-cols-2 lg:text-base">
                    <div>
                        <p class="mb-2 font-semibold text-emerald-200">Tixello</p>
                        <p class="text-slate-100">
                            Facturare automată + eFactura, pachet complet de documente fiscale &amp; legale post-eveniment, 
                            multi-processor plăți (fallback &amp; routing), tracking avansat al surselor de vânzare, 
                            aplicații de scanare iOS &amp; Android, rapoarte live.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">Eventbook</p>
                        <p class="text-slate-200">
                            Confirmă scanare/validare și vânzare online/offline; nu sunt comunicate public eFactura, 
                            multi-processor sau GTM propriu.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 4) Seating & marketing -->
            <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-200">
                    4) Seating, tipuri de bilete &amp; marketing
                </h3>
                <div class="grid gap-6 mt-4 text-sm sm:grid-cols-2 lg:text-base">
                    <div>
                        <p class="mb-2 font-semibold text-emerald-200">Tixello</p>
                        <p class="text-slate-100">
                            Hartă interactivă, blocare locuri/zone, early bird / tiered / pachete, coduri promo, email marketing 
                            și segmente direct în platformă, personalizare bilete și branding.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">Eventbook</p>
                        <p class="text-slate-200">
                            Unele evenimente pot avea „Choose seats” și taxe afișate pentru cumpărător; nu sunt detaliate public 
                            capabilități de marketing/CRM la nivel de organizator.
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
                            Aproape plug &amp; play — site-ul organizatorului se instalează automat pe serverul propriu; 
                            nu sunt necesare cunoștințe de programare.
                        </p>
                    </div>
                    <div>
                        <p class="mb-2 font-semibold text-slate-200">Eventbook</p>
                        <p class="text-slate-200">
                            Colaborare pe contract; nu există un traseu self-service de onboarding public și nici un SLA publicat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Ce obții concret cu Tixello -->
            <div class="p-5 border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                    Ce obții concret cu Tixello
                </h3>
                <ul class="mt-3 space-y-2 text-sm lg:text-base text-emerald-50/90">
                    <li>• Mai mult control, mai puține comisioane pierdute: alegi 1–3% și decizi cum apare în preț.</li>
                    <li>• Conversie mai mare: vezi exact de unde vin vânzările, optimizezi canalele, scazi pierderile din ads.</li>
                    <li>• Timp câștigat: facturi, eFactura și documente generate automat la final.</li>
                    <li>• Zero blocaje la plată: mai mulți procesatori, fallback &amp; routing.</li>
                    <li>• Echipă liniștită: rapoarte live, editare rapidă, suport în timp real pe chat.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- SECTIUNE SEPARATĂ: TABEL COMPARATIV -->
    <section class="max-w-6xl px-4 pb-12 mx-auto lg:px-8 lg:pb-16">
        <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
            <div class="flex flex-col gap-3 mb-4 sm:flex-row sm:items-center sm:justify-between">
                <h3 class="text-lg font-semibold lg:text-xl text-slate-50">
                    Tabel comparativ (executive): Tixello vs Eventbook
                </h3>
                <span class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-slate-800 lg:text-sm text-slate-200">
                    Focalizare pe profit &amp; control pentru organizatori
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs text-left align-top border-collapse lg:text-sm">
                    <thead class="text-xs border-b lg:text-sm text-slate-300 border-slate-800">
                        <tr>
                            <th class="py-2 pr-4">Criteriu</th>
                            <th class="py-2 pr-4 text-emerald-200">Tixello</th>
                            <th class="py-2 pr-4 text-slate-200">Eventbook</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-200">
                        <tr>
                            <td class="py-2 pr-4">Model comision</td>
                            <td class="py-2 pr-4">1–3% (flexibil; inclus în preț sau peste)</td>
                            <td class="py-2 pr-4">Nespecificat public pentru organizatori</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Costuri fixe</td>
                            <td class="py-2 pr-4">Plătești doar când vinzi</td>
                            <td class="py-2 pr-4">Nespecificat public</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Încasări</td>
                            <td class="py-2 pr-4">Direct în contul organizatorului</td>
                            <td class="py-2 pr-4">Nespecificat public</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Acces la date</td>
                            <td class="py-2 pr-4">Complet: clienți + analytics</td>
                            <td class="py-2 pr-4">Work-for-hire pe contract; lipsesc detalii publice despre acces complet la date</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Admin &amp; control</td>
                            <td class="py-2 pr-4">Admin dedicat; site propriu (tenant)</td>
                            <td class="py-2 pr-4">Vânzare pe site/API/iframe; fără panou self-service public</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Microservicii</td>
                            <td class="py-2 pr-4">eFactura, documente fiscale, multi-processor, GTM, tracking, app scan</td>
                            <td class="py-2 pr-4">Vânzare online/offline + app scan (Android)</td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Seating &amp; bilete</td>
                            <td class="py-2 pr-4">Hartă interactivă &amp; blocări, tipuri multiple de bilete</td>
                            <td class="py-2 pr-4">„Choose seats” vizibil la unele evenimente</td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Distribuție</td>
                            <td class="py-2 pr-4">Online pe site-ul tău (tenant), marketplace opțional</td>
                            <td class="py-2 pr-4">Online pe eventbook.ro + rețea puncte fizice</td>
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
                Citate: Termeni &amp; Politică (contract cu promoterii, API/iframe, offline), aplicație Scan Tickets (Android), 
                „Choose seats” și afișare preț + taxe, rețeaua de puncte fizice, mobilPay &amp; rate – conform eventbook.ro.
            </p>
        </div>
    </section>

    <!-- FAQ Acordeon + Notă transparență -->
    <section class="max-w-6xl mx-auto px-4 lg:px-8 pb-12 lg:pb-16 grid lg:grid-cols-[minmax(0,1.5fr)_minmax(0,1fr)] gap-8">
        <!-- FAQ -->
        <div 
            class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6"
            x-data="{ openFaq: 1 }"
        >
            <h3 class="mb-4 text-lg font-semibold lg:text-xl text-slate-50">
                Întrebări frecvente despre Tixello vs Eventbook
            </h3>

            <!-- Q1 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button 
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                >
                    <span>Poate Tixello lucra cu mai mulți procesatori de plată?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 1 ? '–' : '+'"></span>
                </button>
                <div 
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 1"
                    x-transition
                >
                    Da. Poți seta un procesor principal și unul de backup, plus routing pe criterii (valoare, țară, tip card).
                </div>
            </div>

            <!-- Q2 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button 
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                >
                    <span>Pot include comisionul Tixello în prețul biletului?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 2 ? '–' : '+'"></span>
                </button>
                <div 
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 2"
                    x-transition
                >
                    Da — sau îl poți afișa peste. Alegi varianta care servește cel mai bine conversiei tale și așteptărilor publicului.
                </div>
            </div>

            <!-- Q3 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button 
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                >
                    <span>Cine deține datele clienților în Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 3 ? '–' : '+'"></span>
                </button>
                <div 
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 3"
                    x-transition
                >
                    Tu, ca organizator. Ai acces complet la date și analytics, export, integrări și GTM propriu. 
                    Tixello este un furnizor B2B, nu un marketplace care „ține” audiența la el.
                </div>
            </div>

            <!-- Q4 -->
            <div>
                <button 
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                >
                    <span>Cât durează să pornesc cu Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 4 ? '–' : '+'"></span>
                </button>
                <div 
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 4"
                    x-transition
                >
                    Tixello este aproape plug &amp; play: instalare automată pe serverul tău, fără programare. 
                    În funcție de complexitatea evenimentelor, poți vinde bilete foarte repede.
                </div>
            </div>
        </div>

        <!-- Notă transparență + CTA scurt -->
        <div class="space-y-4">
            <div class="p-5 text-sm border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6 text-slate-200">
                <h3 class="mb-2 text-base font-semibold lg:text-lg text-slate-50">
                    Notă de transparență
                </h3>
                <p class="text-xs lg:text-sm text-slate-300">
                    Analiza Eventbook se bazează pe informații disponibile public la 31 octombrie 2025. 
                    Dacă reprezinți Eventbook și dorești să adaugi clarificări, scrie-ne — actualizăm cu plăcere pentru a păstra comparația corectă.
                </p>
            </div>

            <div class="p-5 text-sm border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h3 class="mb-2 text-base font-semibold lg:text-lg text-emerald-100">
                    Vrei control total, bani direct în cont și mai multă conversie?
                </h3>
                <p class="mb-3 text-sm text-emerald-50/90">
                    Programează un demo — îți arătăm cum Tixello scurtează drumul de la anunț la sold-out, inclusiv dacă vii de pe Eventbook.
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
                    Vrei să vezi Tixello pe un caz real din portofoliul tău?
                </h2>
                <p class="max-w-xl mt-2 text-sm lg:text-base text-slate-300">
                    Trimite-ne câteva detalii despre evenimentele tale și vom pregăti un demo personalizat cu structura de prețuri, 
                    tipurile de bilete și microserviciile relevante.
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
