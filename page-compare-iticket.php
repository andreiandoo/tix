<?php
/*
Template Name: Tixello vs iTicket
*/

get_header();

$current_compare = 'iticket';
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
                    care-ți reduc munca. SLA 99.99% • ~300ms timp de răspuns.
                </p>
            <?php endwhile; endif; ?>

            <div class="mt-10 grid gap-6 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-start">
                <!-- Card metrici Tixello -->
                <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/70 backdrop-blur">
                    <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                        Tixello: control real, cashflow direct și cost total mai mic
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-slate-200">
                        Soluție B2B pentru organizatori: cashflow direct, comision 1–3%, admin dedicat, facturare automată + eFactura,
                        multi-processor plăți, tracking avansat și suport live.
                    </p>

                    <div class="mt-6 space-y-4">
                        <?php
                        $metrics = [
                            'Cost total pentru organizator'         => ['tixello' => 92, 'iticket' => 65],
                            'Transparență comisioane & payout'      => ['tixello' => 95, 'iticket' => 55],
                            'Control platformă & fiscalitate locală' => ['tixello' => 94, 'iticket' => 60],
                        ];
                        foreach ( $metrics as $label => $values ) :
                        ?>
                            <div>
                                <div class="flex justify-between text-xs lg:text-sm text-slate-300 mb-1.5">
                                    <span><?php echo esc_html( $label ); ?></span>
                                    <span class="text-slate-400">Tixello vs iTicket</span>
                                </div>
                                <div class="flex h-3 overflow-hidden rounded-full bg-slate-800">
                                    <div
                                        class="h-full transition-all duration-700 bg-gradient-to-r from-emerald-400 via-emerald-300 to-sky-400"
                                        style="width: <?php echo (int) $values['tixello']; ?>%;"
                                    ></div>
                                    <div
                                        class="h-full transition-all duration-700 bg-slate-600/70"
                                        style="width: <?php echo (int) $values['iticket']; ?>%;"
                                    ></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="mt-3 text-[11px] text-slate-400">
                        * Valorile sunt orientative și reflectă diferența de abordare: Tixello prioritizează cashflow direct, comision clar
                        și fiscalitate automată; iTicket este orientat pe marketplace și intermediere.
                    </p>
                </div>

                <!-- CTA -->
                <div class="p-6 border rounded-2xl border-emerald-500/40 bg-emerald-500/10">
                    <h2 class="text-lg font-semibold text-emerald-100">
                        Vrei să vezi Tixello pe structura evenimentelor tale?
                    </h2>
                    <p class="mt-3 text-sm lg:text-base text-emerald-50/90">
                        Într-un demo live comparăm costurile și cashflow-ul Tixello vs. un marketplace de tip iTicket, pe scenarii reale:
                        festival, venue sau turneu.
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

    <!-- Slot pentru marquee cu alte comparații (din alt fișier / funcție proprie) -->
    <?php if ( function_exists( 'tixello_compare_links_marquee' ) ) : ?>
        <section class="border-y border-slate-800 bg-slate-950">
            <div class="max-w-6xl px-4 py-4 mx-auto lg:px-8">
                <?php tixello_compare_links_marquee( $current_compare ); ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- VERDICT & ITICKET PE SCURT -->
    <section class="max-w-6xl px-4 py-10 mx-auto space-y-8 lg:px-8 lg:py-14">
        <div class="grid lg:grid-cols-[minmax(0,1.6fr)_minmax(0,1.1fr)] gap-8">
            <div class="p-6 border rounded-2xl border-slate-800 bg-slate-900/60">
                <h2 class="text-lg font-semibold lg:text-xl text-slate-50">
                    Verdict pe scurt pentru organizatori
                </h2>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    iTicket.ro este un marketplace / platformă online care intermediază vânzarea de bilete pentru evenimente;
                    biletele sunt livrate ca PDF prin e-mail și în secțiunea „Biletele mele”, iar responsabilitatea față de participanți
                    aparține organizatorilor care listează pe platformă.
                </p>
                <p class="mt-3 text-sm lg:text-base text-slate-200">
                    Pe paginile publice nu sunt comunicate procente de comision pentru organizatori, modelul de payout către organizatori
                    sau un SLA. Tixello, în schimb, este o soluție B2B pentru organizatori: cashflow direct, comision 1–3%, admin dedicat,
                    facturare automată + eFactura, multi-processor plăți, tracking avansat și suport live.
                </p>
            </div>

            <div class="p-6 text-sm border rounded-2xl border-slate-800 bg-slate-900/60 lg:text-base">
                <h3 class="text-base font-semibold lg:text-lg text-slate-50">
                    iTicket pe scurt (factual, din surse publice)
                </h3>
                <ul class="mt-3 space-y-2 text-slate-200">
                    <li>• Este prezentat ca „platformă de ticketing online”; biletele se trimit în PDF pe e-mail după finalizarea comenzii și se regăsesc în „Biletele mele”.</li>
                    <li>• iTicket „intermediază vânzarea”; organizatorii poartă răspunderea pentru evenimente.</li>
                    <li>• Unele evenimente indică explicit „+ taxe” la prețul afișat către client.</li>
                    <li>• Politica de confidențialitate și datele de contact sunt publice (iTicket Online SRL, București).</li>
                    <li>• Context regional: comunicare oficială și în Republica Moldova (lider local), cu prezență declarată și în România.</li>
                    <li>• Pe site nu sunt publicate procentele de comision pentru organizatori, payout direct sau SLA (verificat la 31 octombrie 2025).</li>
                </ul>
                <p class="mt-3 text-[11px] text-slate-500">
                    Informații extrase din paginile iticket.ro (Termeni &amp; condiții, Privacy, Contact și pagini de eveniment) consultate
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
                iTicket îți oferă acces la marketplace. Tixello mută centrul de gravitație la tine: cashflow direct, comision mic
                și fiscalitate automată, pe care te poți baza în bugete și rapoarte.
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
                        (1% exclusiv / 2% non-exclusiv / 3% dacă Tixello procesează tranzacțiile). Poți include comisionul în preț
                        sau îl poți afișa peste — optimizezi conversia cum vrei.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Știi din prima clipă cât pierzi pe comisioane și cât păstrezi în organizație.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- iTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">iTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Rol de intermediere; pe paginile publice nu sunt comunicate procente pentru organizatori și nici un payout model
                        standard (decont / vărsare). Aceste detalii se clarifică la nivel de contract, nu din start pe site.
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
                        Admin dedicat (nu-l împarți), GTM propriu, acces complet la date &amp; analytics, export &amp; integrări —
                        instalare aproape plug &amp; play pe serverul tău.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        Nu ești un „user” într-un marketplace, ești proprietarul propriei instanțe de platformă.
                    </p>
                </div>

            <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- iTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">iTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Marketplace cu cont de utilizator; politicile GDPR și datele de contact sunt publice, dar nu există o pagină care
                        să detalieze un admin dedicat self-hosted sau drepturi extinse de date pentru organizator, în stil SaaS B2B
                        self-service.
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
                        Facturare automată, eFactura, documente fiscale &amp; legale post-eveniment, multi-processor plăți
                        (fallback &amp; routing), tracking avansat al surselor, chat live.
                    </p>
                    <p class="mt-3 text-xs lg:text-sm text-emerald-100/80">
                        În loc să reconstruiești aceleași rapoarte la fiecare ediție, le ai gata din platformă.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- iTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">iTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Comunicarea este orientată pe vânzarea de bilete și informații pentru clienți. Nu sunt publice detalii despre
                        eFactura sau automatizări fiscale pentru România; sarcina fiscală rămâne în mare parte la organizator.
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
                        Hărți de locuri cu blocări pe zone/rânduri, tipuri multiple de bilete (early bird, pachete), emailing,
                        coduri promo, segmente și rapoarte live pe conversie — toate în același panou.
                    </p>
                </div>

                <!-- VS -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center justify-center px-3 py-1 text-xs font-semibold border rounded-full border-slate-700 bg-slate-900 lg:text-sm text-slate-200">
                        vs
                    </div>
                </div>

                <!-- iTicket -->
                <div class="p-5 border rounded-2xl border-slate-800 bg-slate-900/60 lg:p-6">
                    <h4 class="text-base font-semibold lg:text-lg text-slate-50">iTicket</h4>
                    <p class="mt-2 text-sm lg:text-base text-slate-200">
                        Livrare e-ticket PDF pe e-mail și în cont („Biletele mele”); anumite evenimente afișează preț + taxe.
                        Focus pe simplitatea vânzării, cu mai puține detalii publice despre optimizarea conversiei la nivel de panou
                        organizator.
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
                        De la costuri la cashflow și fiscalitate, Tixello este construit să reducă fricțiunea, nu doar să emită bilete.
                    </p>
                </div>
                <div class="shrink-0">
                    <div class="inline-flex items-center gap-2 px-3 py-1 text-xs border rounded-full bg-slate-900/80 border-emerald-400/60 lg:text-sm text-emerald-100">
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(52,211,153,0.9)]"></span>
                        Pentru organizatori care gândesc pe termen lung
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
                        Alegi 1–3%, fără abonamente impuse. Decizi cum afișezi comisionul (inclus vs. peste) și poți alinia
                        foarte clar politica de preț cu strategia ta de comunicare.
                    </p>
                </div>

                <!-- 2 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        2. Conversie mai mare, fără ghicit
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Vezi exact de unde vin vânzările, optimizezi bugetele de marketing și scazi pierderile din ads.
                        Segmente, coduri promo și rapoarte live — toate în același loc.
                    </p>
                </div>

                <!-- 3 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        3. Cashflow direct &amp; zero corvoadă
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        Nu aștepți cicluri de virare; banii ajung direct în contul tău. Facturi, eFactura și documente post-eveniment
                        se generează automat, astfel încât echipa se poate concentra pe experiența publicului.
                    </p>
                </div>

                <!-- 4 -->
                <div class="p-5 border rounded-2xl bg-slate-950/60 border-emerald-500/40 lg:p-6">
                    <h3 class="text-base font-semibold lg:text-lg text-emerald-100">
                        4. Scalabil &amp; sigur pentru seriile de evenimente
                    </h3>
                    <p class="mt-2 text-sm lg:text-base text-emerald-50/90">
                        SLA 99.99%, ~300ms timp de răspuns, rapoarte live, editare rapidă și suport în timp real — astfel încât
                        poți crește numărul de evenimente fără să-ți schimbi infrastructura de ticketing.
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
                    Tabel comparativ (executive): Tixello vs iTicket
                </h2>
                <span class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-slate-800 lg:text-sm text-slate-200">
                    Cost, cashflow, operare &amp; fiscalitate
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs text-left align-top border-collapse lg:text-sm">
                    <thead class="text-xs border-b lg:text-sm text-slate-300 border-slate-800">
                        <tr>
                            <th class="py-2 pr-4">Criteriu</th>
                            <th class="py-2 pr-4 text-emerald-200">Tixello</th>
                            <th class="py-2 pr-4 text-slate-200">iTicket</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-200">
                        <tr>
                            <td class="py-2 pr-4">Model cost</td>
                            <td class="py-2 pr-4">
                                1–3% (plătești doar când vinzi; inclus în preț sau peste)
                            </td>
                            <td class="py-2 pr-4">
                                Nespecificat public pentru organizatori
                            </td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Cashflow</td>
                            <td class="py-2 pr-4">
                                Banii direct în contul tău; multi-processor, fallback
                            </td>
                            <td class="py-2 pr-4">
                                Intermediere; payout / decont necomunicat public
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Admin &amp; date</td>
                            <td class="py-2 pr-4">
                                Admin dedicat pe tenant; GTM propriu; export
                            </td>
                            <td class="py-2 pr-4">
                                Marketplace; politici GDPR publice, fără admin self-hosted comunicat
                            </td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">Seating &amp; operare</td>
                            <td class="py-2 pr-4">
                                Hartă + blocări, personalizare bilete, emailing
                            </td>
                            <td class="py-2 pr-4">
                                E-ticket PDF; prețuri la unele evenimente cu „+ taxe”
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 pr-4">Fiscalitate</td>
                            <td class="py-2 pr-4">
                                Facturi + eFactura, documente post-eveniment
                            </td>
                            <td class="py-2 pr-4">
                                Necomunicat public (eFactura / automatizări fiscale)
                            </td>
                        </tr>
                        <tr class="bg-slate-900/60">
                            <td class="py-2 pr-4">SLA &amp; performanță</td>
                            <td class="py-2 pr-4">
                                99.99% • ~300ms
                            </td>
                            <td class="py-2 pr-4">
                                Necomunicat public
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-3 text-[11px] text-slate-500">
                Citate: Termeni &amp; condiții (platformă, e-ticket PDF, intermediere &amp; responsabilitatea organizatorilor),
                Privacy/Contact (iTicket Online SRL), pagini de eveniment cu „+ taxe” – conform iticket.ro (verificat la
                31 octombrie 2025).
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
                Întrebări frecvente despre Tixello vs iTicket
            </h2>

            <!-- Q1 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                >
                    <span>iTicket îmi virează banii direct în cont?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 1 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 1"
                    x-transition
                >
                    Pe paginile publice iTicket nu descrie un payout model standard; menționează rolul de intermediere și responsabilitatea
                    organizatorilor pentru evenimente. La Tixello, payout-ul este gândit din start ca bani direct în contul tău.
                </div>
            </div>

            <!-- Q2 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                >
                    <span>Publică iTicket comisioanele pentru organizatori?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 2 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 2"
                    x-transition
                >
                    Nu am identificat procente publice pentru comisionul organizatorilor pe iticket.ro. La Tixello, comisionul este
                    transparent: 1–3%, astfel încât poți evalua rapid costul total al schimbării.
                </div>
            </div>

            <!-- Q3 -->
            <div class="pb-4 mb-4 border-b border-slate-800/70">
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                >
                    <span>Cum primesc biletul pe iTicket comparativ cu Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 3 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 3"
                    x-transition
                >
                    Pe iTicket, biletul se livrează PDF pe e-mail și apare în „Biletele mele”. În Tixello, poți livra e-ticket customizat,
                    cu brandingul tău, plus alte formate sau canale, în funcție de setup-ul tău.
                </div>
            </div>

            <!-- Q4 -->
            <div>
                <button
                    type="button"
                    class="flex items-center justify-between w-full text-base font-medium text-left text-slate-100"
                    @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                >
                    <span>Aveți automatizări fiscale (eFactura) în Tixello?</span>
                    <span class="ml-2 text-slate-400" x-text="openFaq === 4 ? '–' : '+'"></span>
                </button>
                <div
                    class="mt-2 text-sm text-slate-200"
                    x-show="openFaq === 4"
                    x-transition
                >
                    Da. Tixello automatizează facturarea, eFactura și documentele post-eveniment. Pe iTicket, nu am găsit mențiuni publice
                    despre eFactura sau automatizări fiscale pentru România (conform verificărilor la 31 octombrie 2025).
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
                    Analiza iTicket se bazează pe informații publice consultate la 31 octombrie 2025 (pagini: Termeni &amp; condiții,
                    Privacy, Contact, plus verificări pe pagini de eveniment cu „+ taxe”). Dacă reprezinți iTicket și dorești clarificări
                    sau actualizări, scrie-ne — actualizăm cu plăcere.
                </p>
            </div>

            <div class="p-5 text-sm border rounded-2xl border-emerald-500/40 bg-emerald-500/5 lg:p-6">
                <h2 class="mb-2 text-base font-semibold lg:text-lg text-emerald-100">
                    Vrei control total, cashflow direct și costuri previzibile?
                </h2>
                <p class="mb-3 text-sm text-emerald-50/90">
                    Programează un demo — îți arătăm cum Tixello scurtează drumul de la anunț la sold-out și ce înseamnă, concret,
                    să treci de la un model de intermediere la cashflow direct, pe evenimentele tale reale.
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
                    Spune-ne câteva detalii despre evenimentele tale, iar noi pregătim un demo personalizat Tixello vs iTicket:
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
