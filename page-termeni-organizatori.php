<?php
/*
Template Name: Termeni Organizatori
*/
get_header();
?>

<main class="bg-zinc-950 text-zinc-300 antialiased">

    <!-- Header -->
    <header class="pt-32 pb-16 border-b border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 flex items-center justify-center">
                    <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                </div>
                <div>
                    <p class="text-sm text-emerald-400 font-medium">Contract de servicii</p>
                    <h1 class="text-3xl sm:text-4xl font-bold text-white">Termeni pentru organizatori</h1>
                </div>
            </div>
            <p class="text-lg text-white/60 max-w-2xl">
                Acești termeni guvernează utilizarea platformei Tixello de către organizatorii de evenimente.
                Prin crearea unui cont și utilizarea serviciilor, accepți acești termeni.
            </p>
            <p class="text-sm text-white/40 mt-4">Versiune: 2.0 | Ultima actualizare: Decembrie 2025</p>
        </div>
    </header>

    <!-- Table of Contents -->
    <div class="py-8 border-b border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-sm font-semibold text-white/60 uppercase tracking-wider mb-4">Cuprins</h2>
            <div class="grid sm:grid-cols-2 gap-2 text-sm">
                <a href="#definitii" class="text-violet-400 hover:text-violet-300">1. Definiții</a>
                <a href="#eligibilitate" class="text-violet-400 hover:text-violet-300">2. Eligibilitate</a>
                <a href="#cont" class="text-violet-400 hover:text-violet-300">3. Contul tău</a>
                <a href="#servicii" class="text-violet-400 hover:text-violet-300">4. Serviciile Tixello</a>
                <a href="#costuri" class="text-violet-400 hover:text-violet-300">5. Costuri și comisioane</a>
                <a href="#plati" class="text-violet-400 hover:text-violet-300">6. Procesarea plăților</a>
                <a href="#obligatii" class="text-violet-400 hover:text-violet-300">7. Obligațiile tale</a>
                <a href="#date" class="text-violet-400 hover:text-violet-300">8. Protecția datelor</a>
                <a href="#raspundere" class="text-violet-400 hover:text-violet-300">9. Limitarea răspunderii</a>
                <a href="#reziliere" class="text-violet-400 hover:text-violet-300">10. Rezilierea</a>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="prose prose-invert prose-zinc max-w-none">

                <!-- 1. Definiții -->
                <section id="definitii" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">1</span>
                        Definiții
                    </h2>
                    <div class="p-6 rounded-2xl glass-legal">
                        <dl class="space-y-4">
                            <div>
                                <dt class="font-semibold text-white">„Tixello" / „Noi" / „Platforma"</dt>
                                <dd class="text-white/60 mt-1">Platforma de ticketing operată de Tixello S.R.L., inclusiv toate serviciile, API-urile și infrastructura asociată.</dd>
                            </div>
                            <div>
                                <dt class="font-semibold text-white">„Organizator" / „Tu"</dt>
                                <dd class="text-white/60 mt-1">Persoana juridică sau fizică autorizată care utilizează Tixello pentru a vinde bilete la evenimente.</dd>
                            </div>
                            <div>
                                <dt class="font-semibold text-white">„Participant" / „Cumpărător"</dt>
                                <dd class="text-white/60 mt-1">Persoana care achiziționează bilete pentru evenimentele tale prin intermediul Tixello.</dd>
                            </div>
                            <div>
                                <dt class="font-semibold text-white">„Eveniment"</dt>
                                <dd class="text-white/60 mt-1">Orice activitate, spectacol, concert, festival, conferință sau altă întâlnire pentru care vinzi bilete.</dd>
                            </div>
                            <div>
                                <dt class="font-semibold text-white">„Tenant"</dt>
                                <dd class="text-white/60 mt-1">Instanța dedicată a platformei alocată organizatorului, cu admin propriu și configurări personalizate.</dd>
                            </div>
                            <div>
                                <dt class="font-semibold text-white">„Comision"</dt>
                                <dd class="text-white/60 mt-1">Procentul din valoarea biletelor vândute care revine Tixello pentru serviciile furnizate.</dd>
                            </div>
                        </dl>
                    </div>
                </section>

                <!-- 2. Eligibilitate -->
                <section id="eligibilitate" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">2</span>
                        Eligibilitate
                    </h2>
                    <div class="p-6 rounded-2xl glass-legal">
                        <p class="text-white/70 leading-relaxed mb-4">
                            Pentru a utiliza Tixello ca organizator, trebuie să îndeplinești următoarele condiții:
                        </p>
                        <ul class="space-y-3 text-white/70">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span><strong class="text-white">Pentru planurile 1% și 2%:</strong> Să fii persoană juridică înregistrată în România (SRL, SA, PFA, II, ONG, instituție) sau în UE</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span><strong class="text-white">Pentru planul 3% (Intermediat):</strong> Persoană fizică majoră, cu CNP valid și cont bancar în nume propriu</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span>Să deții drepturile sau autorizațiile necesare pentru organizarea evenimentului</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                <span>Să nu fi fost suspendat anterior de pe platformă pentru încălcări</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- 3. Contul tău -->
                <section id="cont" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">3</span>
                        Contul tău
                    </h2>
                    <div class="space-y-6">
                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">3.1 Înregistrarea</h3>
                            <p class="text-white/70 leading-relaxed">
                                La înregistrare, trebuie să furnizezi informații complete și corecte despre entitatea ta: denumire, CUI/CNP,
                                adresă, date de contact, date bancare pentru viramente. Ești responsabil pentru menținerea acestor date actualizate.
                            </p>
                        </div>
                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">3.2 Securitatea contului</h3>
                            <p class="text-white/70 leading-relaxed">
                                Ești responsabil pentru păstrarea confidențialității credențialelor de acces. Orice activitate efectuată prin contul tău
                                este responsabilitatea ta. Notifică-ne imediat în caz de acces neautorizat.
                            </p>
                        </div>
                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">3.3 Tenantul dedicat</h3>
                            <p class="text-white/70 leading-relaxed">
                                Primești acces la un admin dedicat (tenant) în care îți poți configura evenimentele, vizualiza rapoarte,
                                gestiona bilete și accesa toate funcționalitățile. Datele din tenant sunt ale tale, dar procesate prin infrastructura Tixello.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- 4. Serviciile Tixello -->
                <section id="servicii" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">4</span>
                        Serviciile Tixello
                    </h2>
                    <div class="p-6 rounded-2xl glass-legal">
                        <p class="text-white/70 leading-relaxed mb-4">
                            Tixello îți oferă următoarele servicii (lista completă disponibilă pe pagina de funcționalități):
                        </p>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="p-4 rounded-xl bg-white/[0.02] border border-white/5">
                                <h4 class="font-medium text-white mb-2">Core</h4>
                                <ul class="text-sm text-white/60 space-y-1">
                                    <li>• Vânzare online de bilete</li>
                                    <li>• Checkout securizat</li>
                                    <li>• Generare bilete PDF/QR</li>
                                    <li>• Validare la intrare</li>
                                </ul>
                            </div>
                            <div class="p-4 rounded-xl bg-white/[0.02] border border-white/5">
                                <h4 class="font-medium text-white mb-2">Fiscalitate</h4>
                                <ul class="text-sm text-white/60 space-y-1">
                                    <li>• Facturare automată</li>
                                    <li>• Integrare eFactura ANAF</li>
                                    <li>• Documente post-eveniment</li>
                                    <li>• Export contabil</li>
                                </ul>
                            </div>
                            <div class="p-4 rounded-xl bg-white/[0.02] border border-white/5">
                                <h4 class="font-medium text-white mb-2">Marketing</h4>
                                <ul class="text-sm text-white/60 space-y-1">
                                    <li>• Email marketing</li>
                                    <li>• Coduri promoționale</li>
                                    <li>• Tracking conversii</li>
                                    <li>• Integrare Facebook/Google Ads</li>
                                </ul>
                            </div>
                            <div class="p-4 rounded-xl bg-white/[0.02] border border-white/5">
                                <h4 class="font-medium text-white mb-2">Avansate</h4>
                                <ul class="text-sm text-white/60 space-y-1">
                                    <li>• Hărți de locuri</li>
                                    <li>• Multi-processor plăți</li>
                                    <li>• API & integrări</li>
                                    <li>• Analytics detaliat</li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-white/50 text-sm mt-4">
                            SLA garantat: 99.99% uptime, ~300ms timp de răspuns mediu.
                        </p>
                    </div>
                </section>

                <!-- 5. Costuri și comisioane -->
                <section id="costuri" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">5</span>
                        Costuri și comisioane
                    </h2>
                    <div class="space-y-6">
                        <div class="p-6 rounded-2xl bg-emerald-500/5 border border-emerald-500/20">
                            <h3 class="font-semibold text-white mb-4">5.1 Modele de preț</h3>
                            <div class="grid sm:grid-cols-3 gap-4">
                                <div class="p-4 rounded-xl bg-white/[0.03]">
                                    <p class="text-3xl font-bold text-emerald-400">1%</p>
                                    <p class="text-sm text-white font-medium">Exclusiv</p>
                                    <p class="text-xs text-white/50 mt-2">Vinzi doar prin Tixello</p>
                                </div>
                                <div class="p-4 rounded-xl bg-white/[0.03]">
                                    <p class="text-3xl font-bold text-violet-400">2%</p>
                                    <p class="text-sm text-white font-medium">Flexibil</p>
                                    <p class="text-xs text-white/50 mt-2">Fără exclusivitate</p>
                                </div>
                                <div class="p-4 rounded-xl bg-white/[0.03]">
                                    <p class="text-3xl font-bold text-cyan-400">3%</p>
                                    <p class="text-sm text-white font-medium">Intermediat</p>
                                    <p class="text-xs text-white/50 mt-2">Fără firmă, noi facturăm</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">5.2 Ce este inclus</h3>
                            <ul class="space-y-2 text-white/70 text-sm">
                                <li>• Zero costuri de înregistrare sau setup</li>
                                <li>• Zero costuri lunare fixe</li>
                                <li>• Zero costuri dacă nu vinzi bilete</li>
                                <li>• Toate funcționalitățile core incluse</li>
                                <li>• Suport prin chat și email</li>
                            </ul>
                        </div>

                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">5.3 Servicii opționale cu cost</h3>
                            <ul class="space-y-2 text-white/70 text-sm">
                                <li>• Domeniu propriu: <strong class="text-white">15€/an</strong></li>
                                <li>• Găzduire domeniu pe serverele noastre: <strong class="text-white">2€/lună</strong></li>
                                <li>• White Label (licență): <strong class="text-white">20.000€</strong> (one-time)</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- 6. Procesarea plăților -->
                <section id="plati" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">6</span>
                        Procesarea plăților
                    </h2>
                    <div class="space-y-6">
                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">6.1 Cashflow direct (planuri 1% și 2%)</h3>
                            <p class="text-white/70 leading-relaxed">
                                Plățile de la cumpărători intră <strong class="text-white">direct în contul tău bancar</strong> prin procesatorul de plăți configurat.
                                Tixello nu intermediază și nu reține banii. Comisionul nostru se facturează separat, lunar.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">6.2 Payout lunar (plan 3%)</h3>
                            <p class="text-white/70 leading-relaxed">
                                Pentru planul Intermediat, Tixello colectează plățile și le virează lunar, după deducerea comisionului și a taxelor.
                                Noi emitem facturile către cumpărători în numele tău.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">6.3 Procesatori suportați</h3>
                            <p class="text-white/70 leading-relaxed mb-3">
                                Poți alege și configura unul sau mai mulți procesatori:
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/70 text-sm">Stripe</span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/70 text-sm">PayU</span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/70 text-sm">Netopia</span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/70 text-sm">EuPlătesc</span>
                            </div>
                            <p class="text-white/50 text-sm mt-3">
                                Taxele procesatorilor sunt separate și se deduc direct de aceștia.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- 7. Obligațiile tale -->
                <section id="obligatii" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">7</span>
                        Obligațiile tale ca organizator
                    </h2>
                    <div class="p-6 rounded-2xl glass-legal">
                        <ul class="space-y-4 text-white/70">
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center text-violet-400 text-xs font-bold flex-shrink-0 mt-0.5">a</span>
                                <div>
                                    <strong class="text-white">Legalitatea evenimentului</strong>
                                    <p class="text-sm mt-1">Să deții toate autorizațiile, licențele și asigurările necesare. Să respecți legislația în vigoare.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center text-violet-400 text-xs font-bold flex-shrink-0 mt-0.5">b</span>
                                <div>
                                    <strong class="text-white">Informații corecte</strong>
                                    <p class="text-sm mt-1">Să furnizezi descrieri precise, prețuri corecte, date și locații reale pentru evenimente.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center text-violet-400 text-xs font-bold flex-shrink-0 mt-0.5">c</span>
                                <div>
                                    <strong class="text-white">Fiscalitate</strong>
                                    <p class="text-sm mt-1">Să emiți documentele fiscale conform legii române și să declari veniturile corespunzător.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center text-violet-400 text-xs font-bold flex-shrink-0 mt-0.5">d</span>
                                <div>
                                    <strong class="text-white">Politică de rambursare</strong>
                                    <p class="text-sm mt-1">Să ai o politică clară de rambursare, comunicată înainte de achiziție, și să o respecți.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center text-violet-400 text-xs font-bold flex-shrink-0 mt-0.5">e</span>
                                <div>
                                    <strong class="text-white">Suport participanți</strong>
                                    <p class="text-sm mt-1">Să răspunzi la întrebările și plângerile participanților în timp util.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center text-violet-400 text-xs font-bold flex-shrink-0 mt-0.5">f</span>
                                <div>
                                    <strong class="text-white">Protecția datelor</strong>
                                    <p class="text-sm mt-1">Să respecți GDPR și să tratezi datele participanților conform legii.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-violet-500/20 flex items-center justify-center text-violet-400 text-xs font-bold flex-shrink-0 mt-0.5">g</span>
                                <div>
                                    <strong class="text-white">Utilizare acceptabilă</strong>
                                    <p class="text-sm mt-1">Să respecți <a href="<?php echo home_url('/acceptable-use-policy/'); ?>" class="text-violet-400 hover:text-violet-300">Politica de utilizare acceptabilă</a>.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- 8. Protecția datelor -->
                <section id="date" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">8</span>
                        Protecția datelor
                    </h2>
                    <div class="space-y-6">
                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">8.1 Roluri GDPR</h3>
                            <p class="text-white/70 leading-relaxed">
                                Pentru datele participanților la evenimentele tale, <strong class="text-white">tu ești operator de date</strong>,
                                iar <strong class="text-white">Tixello este împuternicit</strong>. Procesăm datele în numele tău, conform instrucțiunilor tale
                                și în scopul furnizării serviciilor.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">8.2 Accesul la date</h3>
                            <p class="text-white/70 leading-relaxed mb-3">
                                Tixello are acces la toate datele tranzacționate prin platformă:
                            </p>
                            <ul class="text-white/60 text-sm space-y-1">
                                <li>• Date de identificare participanți (nume, email, telefon)</li>
                                <li>• Istoricul achizițiilor și plăților</li>
                                <li>• Comportament pe site (analytics)</li>
                                <li>• Comunicări prin platformă</li>
                            </ul>
                            <p class="text-white/50 text-sm mt-3">
                                Acest acces este necesar pentru funcționarea platformei și suport. Nu vindem datele terților.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">8.3 DPA</h3>
                            <p class="text-white/70 leading-relaxed">
                                Prin acceptarea acestor termeni, accepți și <strong class="text-white">Acordul de procesare a datelor (DPA)</strong>
                                disponibil la cerere, care detaliază măsurile de securitate și obligațiile noastre ca împuternicit.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- 9. Limitarea răspunderii -->
                <section id="raspundere" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">9</span>
                        Limitarea răspunderii
                    </h2>
                    <div class="p-6 rounded-2xl glass-legal">
                        <p class="text-white/70 leading-relaxed mb-4">
                            Tixello oferă platforma „așa cum este". Nu garantăm că serviciul va fi neîntrerupt sau fără erori,
                            deși facem toate eforturile pentru un SLA de 99.99%.
                        </p>
                        <p class="text-white/70 leading-relaxed mb-4">
                            <strong class="text-white">Nu suntem responsabili pentru:</strong>
                        </p>
                        <ul class="text-white/60 text-sm space-y-1 mb-4">
                            <li>• Anularea sau modificarea evenimentelor tale</li>
                            <li>• Disputele dintre tine și participanți</li>
                            <li>• Pierderi indirecte sau consecvențiale</li>
                            <li>• Probleme cauzate de procesatorii de plăți terți</li>
                        </ul>
                        <p class="text-white/70 leading-relaxed">
                            <strong class="text-white">Răspunderea noastră maximă</strong> este limitată la comisioanele plătite în ultimele 12 luni.
                        </p>
                    </div>
                </section>

                <!-- 10. Rezilierea -->
                <section id="reziliere" class="mb-16 scroll-mt-24">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-lg bg-violet-500/20 flex items-center justify-center text-violet-400 text-sm font-bold">10</span>
                        Rezilierea
                    </h2>
                    <div class="space-y-6">
                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">10.1 De către tine</h3>
                            <p class="text-white/70 leading-relaxed">
                                Poți închide contul oricând, cu condiția să nu ai evenimente active cu bilete vândute.
                                Pentru evenimentele în derulare, trebuie să le finalizezi sau să procesezi rambursările înainte.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">10.2 De către Tixello</h3>
                            <p class="text-white/70 leading-relaxed">
                                Putem suspenda sau închide contul pentru încălcări ale termenilor, activități frauduloase,
                                sau la cererea autorităților. Vei fi notificat și vei avea ocazia să răspunzi, cu excepția cazurilor urgente.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl glass-legal">
                            <h3 class="font-semibold text-white mb-3">10.3 După reziliere</h3>
                            <p class="text-white/70 leading-relaxed">
                                Poți exporta datele (evenimente, participanți, rapoarte) timp de 30 de zile după închidere.
                                După aceea, datele vor fi șterse conform politicii de retenție.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Contact -->
                <section class="mb-16">
                    <div class="p-6 rounded-2xl bg-violet-500/5 border border-violet-500/20">
                        <h3 class="font-semibold text-white mb-3">Întrebări?</h3>
                        <p class="text-white/70 text-sm mb-4">
                            Pentru clarificări despre acești termeni sau pentru a solicita DPA, contactează-ne:
                        </p>
                        <a href="mailto:legal@tixello.com" class="text-violet-400 hover:text-violet-300">legal@tixello.com</a>
                    </div>
                </section>

            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
