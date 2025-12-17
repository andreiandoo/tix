<?php
/**
 * Template Name: Tixello – Features Page
 */

get_header();

// Detectare limba curentă (Polylang)
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'en';

// Array cu traduceri
$t = [
    // Hero Section
    'badge' => $current_lang === 'ro' ? '180+ Funcționalități • Platformă All-in-One' : '180+ Features • All-in-One Platform',
    'hero_title_1' => $current_lang === 'ro' ? 'Tot Ce Ai Nevoie Pentru' : 'Everything You Need to',
    'hero_title_2' => $current_lang === 'ro' ? 'Evenimentele Tale' : 'Power Your Events',
    'hero_subtitle' => $current_lang === 'ro'
        ? 'De la ticketing la check-in, marketing la analiză — descoperă toolkit-ul complet pentru organizatorii moderni.'
        : 'From ticketing to check-in, marketing to analytics — discover the complete toolkit for modern event organizers.',
    'cta_start' => $current_lang === 'ro' ? 'Începe Gratuit' : 'Get Started Free',
    'cta_demo' => $current_lang === 'ro' ? 'Vezi Demo' : 'Watch Demo',

    // Stats
    'stat_features' => $current_lang === 'ro' ? 'Funcționalități' : 'Features',
    'stat_categories' => $current_lang === 'ro' ? 'Categorii' : 'Categories',
    'stat_integrations' => $current_lang === 'ro' ? 'Integrări via Zapier' : 'Integrations via Zapier',

    // Navigation
    'nav_all' => $current_lang === 'ro' ? 'Toate' : 'All Features',
    'nav_ticketing' => 'Ticketing',
    'nav_events' => $current_lang === 'ro' ? 'Evenimente' : 'Events',
    'nav_customers' => $current_lang === 'ro' ? 'Clienți' : 'Customers',
    'nav_artists' => $current_lang === 'ro' ? 'Artiști' : 'Artists',
    'nav_venues' => $current_lang === 'ro' ? 'Locații' : 'Venues',
    'nav_analytics' => $current_lang === 'ro' ? 'Analiză' : 'Analytics',
    'nav_marketing' => 'Marketing',
    'nav_checkin' => 'Check-in',
    'nav_payments' => $current_lang === 'ro' ? 'Plăți' : 'Payments',
    'nav_integrations' => $current_lang === 'ro' ? 'Integrări' : 'Integrations',
    'nav_whitelabel' => 'White-Label',
    'nav_security' => $current_lang === 'ro' ? 'Securitate' : 'Security',
    'nav_mobile' => 'Mobile',
    'nav_specialized' => $current_lang === 'ro' ? 'Specializate' : 'Specialized',
    'drag_hint' => $current_lang === 'ro' ? 'Trage pentru a derula' : 'Drag to scroll',

    // Section Headers
    'sec_ticketing' => $current_lang === 'ro' ? 'Ticketing & Vânzări' : 'Ticketing & Sales',
    'sec_ticketing_desc' => $current_lang === 'ro' ? 'Vinde bilete în felul tău cu instrumente puternice și flexibile' : 'Sell tickets your way with powerful, flexible tools',
    'sec_events' => $current_lang === 'ro' ? 'Management Evenimente' : 'Event Management',
    'sec_events_desc' => $current_lang === 'ro' ? 'Creează, gestionează și scalează evenimente fără efort' : 'Create, manage, and scale events effortlessly',
    'sec_customers' => $current_lang === 'ro' ? 'Management Clienți' : 'Customer Management',
    'sec_customers_desc' => $current_lang === 'ro' ? 'Construiește relații durabile cu participanții' : 'Build lasting relationships with your attendees',
    'sec_artists' => $current_lang === 'ro' ? 'Artiști & Talent' : 'Artist & Talent',
    'sec_artists_desc' => $current_lang === 'ro' ? 'Prezintă artiștii și gestionează relațiile cu talentele' : 'Showcase artists and manage talent relationships',
    'sec_venues' => $current_lang === 'ro' ? 'Management Locații' : 'Venue Management',
    'sec_venues_desc' => $current_lang === 'ro' ? 'Profile complete pentru locații și instrumente de booking' : 'Comprehensive venue profiles and booking tools',
    'sec_analytics' => $current_lang === 'ro' ? 'Analiză & Rapoarte' : 'Analytics & Reporting',
    'sec_analytics_desc' => $current_lang === 'ro' ? 'Insights bazate pe date pentru a-ți crește evenimentele' : 'Data-driven insights to grow your events',
    'sec_marketing' => $current_lang === 'ro' ? 'Marketing & Comunicare' : 'Marketing & Communication',
    'sec_marketing_desc' => $current_lang === 'ro' ? 'Ajunge la publicul tău și angajează-l eficient' : 'Reach and engage your audience effectively',
    'sec_checkin' => $current_lang === 'ro' ? 'Check-in & Control Acces' : 'Check-in & Access Control',
    'sec_checkin_desc' => $current_lang === 'ro' ? 'Experiență de intrare fără probleme pentru participanți' : 'Seamless entry experience for your attendees',
    'sec_payments' => $current_lang === 'ro' ? 'Plăți & Finanțe' : 'Payments & Finance',
    'sec_payments_desc' => $current_lang === 'ro' ? 'Plăți sigure și management financiar' : 'Secure payments and financial management',
    'sec_integrations' => $current_lang === 'ro' ? 'Platformă & Integrări' : 'Platform & Integrations',
    'sec_integrations_desc' => $current_lang === 'ro' ? '50+ integrări native + 5000+ via Zapier' : '50+ native integrations + 5000+ via Zapier',
    'sec_whitelabel' => $current_lang === 'ro' ? 'White-Label & Branding' : 'White-Label & Branding',
    'sec_whitelabel_desc' => $current_lang === 'ro' ? 'Fă Tixello să arate ca platforma ta proprie' : 'Make Tixello look like your own platform',
    'sec_security' => $current_lang === 'ro' ? 'Securitate & Anti-Fraudă' : 'Security & Fraud Prevention',
    'sec_security_desc' => $current_lang === 'ro' ? 'Securitate de nivel enterprise pentru liniște sufletească' : 'Enterprise-grade security for peace of mind',
    'sec_mobile' => $current_lang === 'ro' ? 'Mobile & Aplicații' : 'Mobile & Apps',
    'sec_mobile_desc' => $current_lang === 'ro' ? 'Aplicații native pentru organizatori și participanți' : 'Native apps for organizers and attendees',
    'sec_specialized' => $current_lang === 'ro' ? 'Funcționalități Specializate' : 'Specialized Features',
    'sec_specialized_desc' => $current_lang === 'ro' ? 'Construite special pentru diferite tipuri de evenimente' : 'Purpose-built for different event types',

    // Feature counts
    'features' => $current_lang === 'ro' ? 'funcționalități' : 'features',

    // CTA Section
    'cta_title' => $current_lang === 'ro' ? 'Gata Să-ți Transformi Evenimentele?' : 'Ready to Transform Your Events?',
    'cta_subtitle' => $current_lang === 'ro'
        ? 'Alătură-te miilor de organizatori care au încredere în Tixello pentru evenimentele lor. Înregistrează-te gratuit — nu este necesar card.'
        : 'Join thousands of organizers who trust Tixello to power their events. Sign up free today — no credit card required.',
    'cta_signup' => $current_lang === 'ro' ? 'Înregistrare Gratuită' : 'Sign Up Free',
    'cta_contact' => $current_lang === 'ro' ? 'Contactează Vânzări' : 'Talk to Sales',
    'cta_note' => $current_lang === 'ro' ? 'Înregistrare gratuită • Fără card • Anulează oricând' : 'Free registration • No credit card • Cancel anytime',
];

// Traduceri pentru features (ticketing)
$features_ticketing = $current_lang === 'ro' ? [
    ['icon' => '🎟️', 'title' => 'Bilete Multi-Nivel', 'desc' => 'Early Bird, Standard, VIP și altele cu prețuri diferite'],
    ['icon' => '💰', 'title' => 'Prețuri Dinamice', 'desc' => 'Prețuri care se ajustează automat în funcție de cerere'],
    ['icon' => '📊', 'title' => 'Gestiune Inventar', 'desc' => 'Control stoc în timp real cu alerte sold out'],
    ['icon' => '🔄', 'title' => 'Gestiune Returnări', 'desc' => 'Returnări automate și schimburi de bilete'],
    ['icon' => '🎁', 'title' => 'Coduri Promoționale', 'desc' => 'Coduri cu reduceri și acces anticipat'],
    ['icon' => '👥', 'title' => 'Bilete de Grup', 'desc' => 'Pachete de grup cu reduceri automate'],
    ['icon' => '🪑', 'title' => 'Evenimente cu Locuri', 'desc' => 'Selecție interactivă pe hărți'],
    ['icon' => '🎫', 'title' => 'Abonamente Sezon', 'desc' => 'Subscripții pentru serii de evenimente'],
    ['icon' => '🔐', 'title' => 'Evenimente Private', 'desc' => 'Evenimente cu acces pe invitație'],
    ['icon' => '⏰', 'title' => 'Intrare Programată', 'desc' => 'Sloturi orare pentru controlul fluxului'],
    ['icon' => '🛒', 'title' => 'Checkout Inteligent', 'desc' => 'Optimizat pentru conversie maximă'],
    ['icon' => '💳', 'title' => 'Plăți Multiple', 'desc' => 'Card, Apple Pay, Google Pay, rate'],
    ['icon' => '🧾', 'title' => 'Generare Facturi', 'desc' => 'Facturi automate pentru companii'],
    ['icon' => '🎯', 'title' => 'Upsells & Add-ons', 'desc' => 'Merch, parcare, vouchere mâncare'],
    ['icon' => '📱', 'title' => 'Bilete Mobile', 'desc' => 'Integrare Apple Wallet și Google Pay'],
    ['icon' => '🔒', 'title' => 'Coduri QR Sigure', 'desc' => 'Coduri criptate anti-captură ecran'],
    ['icon' => '🎭', 'title' => 'Pachete Bundle', 'desc' => 'Bilet + hotel, bilet + transport'],
    ['icon' => '💵', 'title' => 'Plătește Cât Vrei', 'desc' => 'Prețuri flexibile setate de cumpărători'],
    ['icon' => '🆓', 'title' => 'Înregistrare Gratuită', 'desc' => 'Evenimente gratuite cu captare date'],
    ['icon' => '📋', 'title' => 'Liste de Așteptare', 'desc' => 'Waitlist pentru evenimente sold out'],
] : [
    ['icon' => '🎟️', 'title' => 'Multi-Tier Tickets', 'desc' => 'Early Bird, Standard, VIP and more with different prices'],
    ['icon' => '💰', 'title' => 'Dynamic Pricing', 'desc' => 'Prices that adjust automatically based on demand'],
    ['icon' => '📊', 'title' => 'Inventory Management', 'desc' => 'Real-time stock control with sold out alerts'],
    ['icon' => '🔄', 'title' => 'Refund Management', 'desc' => 'Automated refunds and ticket exchanges'],
    ['icon' => '🎁', 'title' => 'Promo Codes', 'desc' => 'Promotional codes with discounts and early access'],
    ['icon' => '👥', 'title' => 'Group Tickets', 'desc' => 'Group packages with automatic discounts'],
    ['icon' => '🪑', 'title' => 'Seated Events', 'desc' => 'Interactive seat selection on venue maps'],
    ['icon' => '🎫', 'title' => 'Season Passes', 'desc' => 'Subscriptions for event series or seasons'],
    ['icon' => '🔐', 'title' => 'Invite-Only Events', 'desc' => 'Private events with invitation-based access'],
    ['icon' => '⏰', 'title' => 'Timed Entry', 'desc' => 'Time slots for visitor flow control'],
    ['icon' => '🛒', 'title' => 'Smart Checkout', 'desc' => 'Checkout optimized for maximum conversion'],
    ['icon' => '💳', 'title' => 'Multiple Payments', 'desc' => 'Card, Apple Pay, Google Pay, installments'],
    ['icon' => '🧾', 'title' => 'Invoice Generation', 'desc' => 'Automatic invoices for businesses'],
    ['icon' => '🎯', 'title' => 'Upsells & Add-ons', 'desc' => 'Merch, parking, food vouchers'],
    ['icon' => '📱', 'title' => 'Mobile Tickets', 'desc' => 'Apple Wallet and Google Pay integration'],
    ['icon' => '🔒', 'title' => 'Secure QR Codes', 'desc' => 'Encrypted codes with anti-screenshot protection'],
    ['icon' => '🎭', 'title' => 'Bundle Packages', 'desc' => 'Ticket + hotel, ticket + transport'],
    ['icon' => '💵', 'title' => 'Pay What You Want', 'desc' => 'Flexible pricing set by buyers'],
    ['icon' => '🆓', 'title' => 'Free Registration', 'desc' => 'Free events with data capture'],
    ['icon' => '📋', 'title' => 'Waiting Lists', 'desc' => 'Waitlists for sold out events'],
];

// Traduceri pentru features (events)
$features_events = $current_lang === 'ro' ? [
    ['icon' => '📝', 'title' => 'Wizard Eveniment', 'desc' => 'Creare rapidă în pași ghidați'],
    ['icon' => '📅', 'title' => 'Evenimente Multi-Dată', 'desc' => 'Evenimente recurente sau date multiple'],
    ['icon' => '🔄', 'title' => 'Clonare Evenimente', 'desc' => 'Duplicare rapidă evenimente anterioare'],
    ['icon' => '📍', 'title' => 'Selecție Locație', 'desc' => 'Bibliotecă locații cu capacități'],
    ['icon' => '🎨', 'title' => 'Pagini Personalizate', 'desc' => 'Pagini cu brandul tău'],
    ['icon' => '📸', 'title' => 'Galerie Media', 'desc' => 'Galerii foto și video per eveniment'],
    ['icon' => '📝', 'title' => 'Descrieri Bogate', 'desc' => 'Formatare, imagini și video embed'],
    ['icon' => '🏷️', 'title' => 'Categorii & Tag-uri', 'desc' => 'Categorizare pentru descoperire'],
    ['icon' => '🌐', 'title' => 'Multi-Limbă', 'desc' => 'Evenimente în mai multe limbi'],
    ['icon' => '⏱️', 'title' => 'Numărătoare Inversă', 'desc' => 'Timer pentru lansare sau start'],
    ['icon' => '📢', 'title' => 'Gestiune Status', 'desc' => 'Draft, Publicat, Amânat, Anulat'],
    ['icon' => '🔗', 'title' => 'URL-uri Custom', 'desc' => 'URL-uri SEO-friendly personalizate'],
    ['icon' => '📄', 'title' => 'Termeni & Condiții', 'desc' => 'T&C specifice evenimentului'],
    ['icon' => '🎵', 'title' => 'Gestiune Lineup', 'desc' => 'Management artiști cu timeslots'],
    ['icon' => '🗺️', 'title' => 'Hărți Interactive', 'desc' => 'Hărți interactive cu zone'],
    ['icon' => '📊', 'title' => 'Planificare Capacitate', 'desc' => 'Planificare pe zone și ore'],
    ['icon' => '🚨', 'title' => 'Alerte Eveniment', 'desc' => 'Notificări pentru milestone-uri'],
] : [
    ['icon' => '📝', 'title' => 'Event Wizard', 'desc' => 'Quick creation in guided steps'],
    ['icon' => '📅', 'title' => 'Multi-Date Events', 'desc' => 'Recurring events or multiple dates'],
    ['icon' => '🔄', 'title' => 'Event Cloning', 'desc' => 'Quick duplication of past events'],
    ['icon' => '📍', 'title' => 'Venue Selection', 'desc' => 'Venue library with capacities'],
    ['icon' => '🎨', 'title' => 'Custom Event Pages', 'desc' => 'Customizable pages with your brand'],
    ['icon' => '📸', 'title' => 'Media Gallery', 'desc' => 'Photo and video galleries per event'],
    ['icon' => '📝', 'title' => 'Rich Descriptions', 'desc' => 'Formatting, images and video embed'],
    ['icon' => '🏷️', 'title' => 'Categories & Tags', 'desc' => 'Categorization for discoverability'],
    ['icon' => '🌐', 'title' => 'Multi-Language', 'desc' => 'Events in multiple languages'],
    ['icon' => '⏱️', 'title' => 'Countdown Timers', 'desc' => 'Timer for launch or event start'],
    ['icon' => '📢', 'title' => 'Status Management', 'desc' => 'Draft, Published, Postponed, Cancelled'],
    ['icon' => '🔗', 'title' => 'Custom URLs', 'desc' => 'SEO-friendly custom URLs'],
    ['icon' => '📄', 'title' => 'Terms & Conditions', 'desc' => 'Event-specific T&C'],
    ['icon' => '🎵', 'title' => 'Lineup Management', 'desc' => 'Artist management with timeslots'],
    ['icon' => '🗺️', 'title' => 'Interactive Maps', 'desc' => 'Interactive maps with zones'],
    ['icon' => '📊', 'title' => 'Capacity Planning', 'desc' => 'Planning by zones and hours'],
    ['icon' => '🚨', 'title' => 'Event Alerts', 'desc' => 'Notifications for milestones'],
];

?>

<style>
    [x-cloak] { display: none !important; }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    @keyframes slideUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .gradient-text {
        background: linear-gradient(135deg, #8B5CF6 0%, #EC4899 50%, #06B6D4 100%);
        background-size: 200% 200%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: gradient 8s linear infinite;
    }
    
    .feature-card {
        transition: all 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-4px);
    }
    
    .category-section {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-out;
    }
    
    .category-section.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .glow-violet { box-shadow: 0 0 60px rgba(139, 92, 246, 0.3); }
    .glow-cyan { box-shadow: 0 0 60px rgba(6, 182, 212, 0.3); }
    .glow-pink { box-shadow: 0 0 60px rgba(236, 72, 153, 0.3); }
    
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: rgba(255,255,255,0.02); }
    ::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.2); }
    
    .drag-scroll {
        cursor: grab;
        user-select: none;
        -webkit-user-select: none;
    }
    .drag-scroll:active { cursor: grabbing; }
    .drag-scroll.dragging { cursor: grabbing; scroll-behavior: auto; }
    .drag-scroll::-webkit-scrollbar { height: 0; display: none; }
    .drag-scroll { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<!-- Hero Section -->
<section class="relative py-20 overflow-hidden sm:py-32">
    <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 border rounded-full bg-violet-600/10 border-violet-500/20 animate-fade-in">
                <span class="relative flex w-2 h-2">
                    <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-violet-400"></span>
                    <span class="relative inline-flex w-2 h-2 rounded-full bg-violet-500"></span>
                </span>
                <span class="text-sm font-medium text-violet-400"><?php echo $t['badge']; ?></span>
            </div>

            <!-- Title -->
            <h1 class="mb-6 text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-7xl animate-slide-up">
                <?php echo $t['hero_title_1']; ?><br>
                <span class="gradient-text"><?php echo $t['hero_title_2']; ?></span>
            </h1>

            <!-- Subtitle -->
            <p class="max-w-2xl mx-auto mb-10 text-lg sm:text-xl text-white/60 animate-slide-up" style="animation-delay: 0.1s">
                <?php echo $t['hero_subtitle']; ?>
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col items-center justify-center gap-4 sm:flex-row animate-slide-up" style="animation-delay: 0.2s">
                <a href="https://core.tixello.com/register" class="flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all group rounded-xl bg-gradient-to-r from-violet-600 to-violet-500 hover:shadow-lg hover:shadow-violet-600/30">
                    <?php echo $t['cta_start']; ?>
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="/demo" class="flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all border rounded-xl bg-white/5 border-white/10 hover:bg-white/10">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <?php echo $t['cta_demo']; ?>
                </a>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 gap-6 pt-16 mt-16 border-t sm:grid-cols-4 border-white/5">
                <div class="text-center">
                    <p class="mb-1 text-3xl font-bold text-white sm:text-4xl">180+</p>
                    <p class="text-sm text-white/50"><?php echo $t['stat_features']; ?></p>
                </div>
                <div class="text-center">
                    <p class="mb-1 text-3xl font-bold text-white sm:text-4xl">20</p>
                    <p class="text-sm text-white/50"><?php echo $t['stat_categories']; ?></p>
                </div>
                <div class="text-center">
                    <p class="mb-1 text-3xl font-bold text-white sm:text-4xl">5000+</p>
                    <p class="text-sm text-white/50"><?php echo $t['stat_integrations']; ?></p>
                </div>
                <div class="text-center">
                    <p class="mb-1 text-3xl font-bold text-white sm:text-4xl">99.9%</p>
                    <p class="text-sm text-white/50">Uptime</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Alpine.js wrapper for category filtering -->
<div x-data="{ activeCategory: 'all' }">

<!-- Category Navigation (Sticky + Draggable) -->
<nav class="sticky z-40 py-4 top-20 bg-zinc-950/95 backdrop-blur-xl border-y border-white/5">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div id="categoryNav" class="flex items-center gap-2 pb-2 overflow-x-auto drag-scroll">
            <button @click="activeCategory = 'all'" :class="activeCategory === 'all' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                <?php echo $t['nav_all']; ?>
            </button>
            <button @click="activeCategory = 'ticketing'" :class="activeCategory === 'ticketing' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                🎫 <?php echo $t['nav_ticketing']; ?>
            </button>
            <button @click="activeCategory = 'events'" :class="activeCategory === 'events' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                📅 <?php echo $t['nav_events']; ?>
            </button>
            <button @click="activeCategory = 'customers'" :class="activeCategory === 'customers' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                👥 <?php echo $t['nav_customers']; ?>
            </button>
            <button @click="activeCategory = 'artists'" :class="activeCategory === 'artists' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                🎤 <?php echo $t['nav_artists']; ?>
            </button>
            <button @click="activeCategory = 'venues'" :class="activeCategory === 'venues' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                🏛️ <?php echo $t['nav_venues']; ?>
            </button>
            <button @click="activeCategory = 'analytics'" :class="activeCategory === 'analytics' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                📊 <?php echo $t['nav_analytics']; ?>
            </button>
            <button @click="activeCategory = 'marketing'" :class="activeCategory === 'marketing' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                📧 <?php echo $t['nav_marketing']; ?>
            </button>
            <button @click="activeCategory = 'checkin'" :class="activeCategory === 'checkin' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                ✅ <?php echo $t['nav_checkin']; ?>
            </button>
            <button @click="activeCategory = 'payments'" :class="activeCategory === 'payments' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                💳 <?php echo $t['nav_payments']; ?>
            </button>
            <button @click="activeCategory = 'integrations'" :class="activeCategory === 'integrations' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                🔧 <?php echo $t['nav_integrations']; ?>
            </button>
            <button @click="activeCategory = 'whitelabel'" :class="activeCategory === 'whitelabel' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                🎨 <?php echo $t['nav_whitelabel']; ?>
            </button>
            <button @click="activeCategory = 'security'" :class="activeCategory === 'security' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                🔐 <?php echo $t['nav_security']; ?>
            </button>
            <button @click="activeCategory = 'mobile'" :class="activeCategory === 'mobile' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                📱 <?php echo $t['nav_mobile']; ?>
            </button>
            <button @click="activeCategory = 'specialized'" :class="activeCategory === 'specialized' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="flex-shrink-0 px-4 py-2 text-sm font-medium transition-all rounded-full whitespace-nowrap">
                🎯 <?php echo $t['nav_specialized']; ?>
            </button>
        </div>
        <!-- Drag hint -->
        <div class="flex items-center justify-center gap-2 mt-2 text-xs text-white/30">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"/>
            </svg>
            <span><?php echo $t['drag_hint']; ?></span>
        </div>
    </div>
</nav>

<!-- Features Sections -->
<main class="relative py-16">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        
        <!-- ===================== TICKETING & SALES ===================== -->
        <section id="ticketing" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'ticketing'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-violet-600 to-violet-400 glow-violet">
                    🎫
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_ticketing']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_ticketing_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium rounded-full bg-violet-600/20 text-violet-400">20 <?php echo $t['features']; ?></span>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($features_ticketing as $f): ?>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-violet-500/30">
                    <span class="block mb-3 text-2xl"><?php echo $f['icon']; ?></span>
                    <h3 class="mb-1 font-semibold text-white"><?php echo $f['title']; ?></h3>
                    <p class="text-sm text-white/50"><?php echo $f['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ===================== EVENT MANAGEMENT ===================== -->
        <section id="events" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'events'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-cyan-600 to-cyan-400 glow-cyan">
                    📅
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_events']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_events_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium rounded-full bg-cyan-600/20 text-cyan-400">17 <?php echo $t['features']; ?></span>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($features_events as $f): ?>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-cyan-500/30">
                    <span class="block mb-3 text-2xl"><?php echo $f['icon']; ?></span>
                    <h3 class="mb-1 font-semibold text-white"><?php echo $f['title']; ?></h3>
                    <p class="text-sm text-white/50"><?php echo $f['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ===================== CUSTOMER MANAGEMENT ===================== -->
        <section id="customers" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'customers'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-pink-600 to-pink-400 glow-pink">
                    👥
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_customers']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_customers_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium text-pink-400 rounded-full bg-pink-600/20">12 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">👥</span>
                    <h3 class="mb-1 font-semibold text-white">Customer Database</h3>
                    <p class="text-sm text-white/50">Centralized database of all buyers</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">📧</span>
                    <h3 class="mb-1 font-semibold text-white">Email Collection</h3>
                    <p class="text-sm text-white/50">Email capture with GDPR consent</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">🏷️</span>
                    <h3 class="mb-1 font-semibold text-white">Segmentation</h3>
                    <p class="text-sm text-white/50">Segmentation by behavior and history</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">📝</span>
                    <h3 class="mb-1 font-semibold text-white">Custom Forms</h3>
                    <p class="text-sm text-white/50">Forms with custom fields</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">🔐</span>
                    <h3 class="mb-1 font-semibold text-white">Customer Accounts</h3>
                    <p class="text-sm text-white/50">Accounts for order history</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">⭐</span>
                    <h3 class="mb-1 font-semibold text-white">Loyalty Program</h3>
                    <p class="text-sm text-white/50">Points and rewards for loyal customers</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">📊</span>
                    <h3 class="mb-1 font-semibold text-white">Customer Insights</h3>
                    <p class="text-sm text-white/50">Behavior analytics</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">📱</span>
                    <h3 class="mb-1 font-semibold text-white">Customer App</h3>
                    <p class="text-sm text-white/50">Mobile app for ticket buyers</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">🎫</span>
                    <h3 class="mb-1 font-semibold text-white">Ticket Transfer</h3>
                    <p class="text-sm text-white/50">Transfer tickets between people</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">📋</span>
                    <h3 class="mb-1 font-semibold text-white">Order History</h3>
                    <p class="text-sm text-white/50">Complete order history</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">💬</span>
                    <h3 class="mb-1 font-semibold text-white">Support Portal</h3>
                    <p class="text-sm text-white/50">Self-service customer portal</p>
                </div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-pink-500/30">
                    <span class="block mb-3 text-2xl">🔔</span>
                    <h3 class="mb-1 font-semibold text-white">Notifications</h3>
                    <p class="text-sm text-white/50">Push, SMS, email for updates</p>
                </div>
            </div>
        </section>

        <!-- ===================== ARTISTS ===================== -->
        <section id="artists" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'artists'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-amber-600 to-amber-400" style="box-shadow: 0 0 60px rgba(245, 158, 11, 0.3);">
                    🎤
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_artists']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_artists_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium rounded-full bg-amber-600/20 text-amber-400">11 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">🎤</span><h3 class="mb-1 font-semibold text-white">Artist Profiles</h3><p class="text-sm text-white/50">Complete profiles with bio and gallery</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Artist Analytics</h3><p class="text-sm text-white/50">Performance and value statistics</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">🔗</span><h3 class="mb-1 font-semibold text-white">Social Integration</h3><p class="text-sm text-white/50">Spotify, YouTube, Instagram, TikTok</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">📈</span><h3 class="mb-1 font-semibold text-white">Value Score</h3><p class="text-sm text-white/50">Score based on reach and performance</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">📅</span><h3 class="mb-1 font-semibold text-white">Artist Calendar</h3><p class="text-sm text-white/50">Availability and event calendar</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">📞</span><h3 class="mb-1 font-semibold text-white">Booking Contacts</h3><p class="text-sm text-white/50">Management and booking contacts</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">🏷️</span><h3 class="mb-1 font-semibold text-white">Genre Tagging</h3><p class="text-sm text-white/50">Categorization by music genres</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">✅</span><h3 class="mb-1 font-semibold text-white">Verified Artists</h3><p class="text-sm text-white/50">Verification system for authentic artists</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">🔍</span><h3 class="mb-1 font-semibold text-white">Artist Discovery</h3><p class="text-sm text-white/50">Search and filter engine</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">📹</span><h3 class="mb-1 font-semibold text-white">Video Embeds</h3><p class="text-sm text-white/50">YouTube/Vimeo on profile</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-amber-500/30"><span class="block mb-3 text-2xl">🤝</span><h3 class="mb-1 font-semibold text-white">Booking Requests</h3><p class="text-sm text-white/50">Booking requests for organizers</p></div>
            </div>
        </section>

        <!-- ===================== VENUES ===================== -->
        <section id="venues" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'venues'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-emerald-600 to-emerald-400" style="box-shadow: 0 0 60px rgba(16, 185, 129, 0.3);">
                    🏛️
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_venues']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_venues_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium rounded-full bg-emerald-600/20 text-emerald-400">10 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">🏟️</span><h3 class="mb-1 font-semibold text-white">Venue Profiles</h3><p class="text-sm text-white/50">Complete profiles with facilities and capacity</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">📍</span><h3 class="mb-1 font-semibold text-white">Location & Maps</h3><p class="text-sm text-white/50">Google Maps integration with directions</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">🏷️</span><h3 class="mb-1 font-semibold text-white">140+ Venue Types</h3><p class="text-sm text-white/50">Categorized venue types</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">🛎️</span><h3 class="mb-1 font-semibold text-white">150+ Facilities</h3><p class="text-sm text-white/50">Facilities catalog with icons</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">📸</span><h3 class="mb-1 font-semibold text-white">Venue Gallery</h3><p class="text-sm text-white/50">Photo gallery for each venue</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">📅</span><h3 class="mb-1 font-semibold text-white">Venue Calendar</h3><p class="text-sm text-white/50">Availability and scheduled events</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Venue Analytics</h3><p class="text-sm text-white/50">Event and occupancy statistics</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">🗺️</span><h3 class="mb-1 font-semibold text-white">Seating Charts</h3><p class="text-sm text-white/50">Saved seat configurations</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">📞</span><h3 class="mb-1 font-semibold text-white">Venue Contacts</h3><p class="text-sm text-white/50">Contact info for bookings</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-emerald-500/30"><span class="block mb-3 text-2xl">⭐</span><h3 class="mb-1 font-semibold text-white">Venue Ratings</h3><p class="text-sm text-white/50">Rating and review system</p></div>
            </div>
        </section>

        <!-- ===================== ANALYTICS ===================== -->
        <section id="analytics" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'analytics'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-blue-600 to-blue-400" style="box-shadow: 0 0 60px rgba(37, 99, 235, 0.3);">
                    📊
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_analytics']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_analytics_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium text-blue-400 rounded-full bg-blue-600/20">13 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">📈</span><h3 class="mb-1 font-semibold text-white">Real-Time Dashboard</h3><p class="text-sm text-white/50">Live dashboard with sales and metrics</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Sales Reports</h3><p class="text-sm text-white/50">Detailed reports by period</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">🎯</span><h3 class="mb-1 font-semibold text-white">Conversion Tracking</h3><p class="text-sm text-white/50">Funnel from visit to purchase</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">📍</span><h3 class="mb-1 font-semibold text-white">Geographic Analytics</h3><p class="text-sm text-white/50">Sales distribution maps</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">📱</span><h3 class="mb-1 font-semibold text-white">Device Analytics</h3><p class="text-sm text-white/50">Mobile vs desktop statistics</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">💰</span><h3 class="mb-1 font-semibold text-white">Revenue Reports</h3><p class="text-sm text-white/50">Detailed financial reports</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">👥</span><h3 class="mb-1 font-semibold text-white">Attendance Reports</h3><p class="text-sm text-white/50">Attendance and check-in reports</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">📧</span><h3 class="mb-1 font-semibold text-white">Marketing Attribution</h3><p class="text-sm text-white/50">Traffic source tracking</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">📤</span><h3 class="mb-1 font-semibold text-white">Export Reports</h3><p class="text-sm text-white/50">Export CSV, Excel, PDF</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">📅</span><h3 class="mb-1 font-semibold text-white">Scheduled Reports</h3><p class="text-sm text-white/50">Automatic reports via email</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">🔮</span><h3 class="mb-1 font-semibold text-white">Predictive Analytics</h3><p class="text-sm text-white/50">AI predictions for sales</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Custom Dashboards</h3><p class="text-sm text-white/50">Customizable dashboards</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-blue-500/30"><span class="block mb-3 text-2xl">🏆</span><h3 class="mb-1 font-semibold text-white">Benchmarking</h3><p class="text-sm text-white/50">Industry comparison</p></div>
            </div>
        </section>

        <!-- ===================== MARKETING ===================== -->
        <section id="marketing" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'marketing'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-rose-600 to-rose-400" style="box-shadow: 0 0 60px rgba(225, 29, 72, 0.3);">
                    📧
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_marketing']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_marketing_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium rounded-full bg-rose-600/20 text-rose-400">13 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">📧</span><h3 class="mb-1 font-semibold text-white">Email Campaigns</h3><p class="text-sm text-white/50">Integrated email campaigns</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">📱</span><h3 class="mb-1 font-semibold text-white">SMS Marketing</h3><p class="text-sm text-white/50">SMS notifications and promos</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">🔔</span><h3 class="mb-1 font-semibold text-white">Push Notifications</h3><p class="text-sm text-white/50">In-app push notifications</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">📢</span><h3 class="mb-1 font-semibold text-white">Social Sharing</h3><p class="text-sm text-white/50">Share on Facebook, Twitter, WhatsApp</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">🎯</span><h3 class="mb-1 font-semibold text-white">Facebook Pixel</h3><p class="text-sm text-white/50">Retargeting and tracking</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Google Analytics</h3><p class="text-sm text-white/50">GA4 integration</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">🔗</span><h3 class="mb-1 font-semibold text-white">UTM Tracking</h3><p class="text-sm text-white/50">UTM parameter tracking</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">📝</span><h3 class="mb-1 font-semibold text-white">Email Templates</h3><p class="text-sm text-white/50">Customizable templates</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">📬</span><h3 class="mb-1 font-semibold text-white">Automated Emails</h3><p class="text-sm text-white/50">Confirmation, reminder, follow-up</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">💌</span><h3 class="mb-1 font-semibold text-white">Newsletter</h3><p class="text-sm text-white/50">Mailchimp, SendGrid sync</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">🎁</span><h3 class="mb-1 font-semibold text-white">Referral Program</h3><p class="text-sm text-white/50">Referrals with rewards</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">📣</span><h3 class="mb-1 font-semibold text-white">Affiliate Marketing</h3><p class="text-sm text-white/50">Affiliate system for sales</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-rose-500/30"><span class="block mb-3 text-2xl">🎨</span><h3 class="mb-1 font-semibold text-white">Branded Comms</h3><p class="text-sm text-white/50">Communications with your brand</p></div>
            </div>
        </section>

        <!-- ===================== CHECK-IN ===================== -->
        <section id="checkin" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'checkin'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-green-600 to-green-400" style="box-shadow: 0 0 60px rgba(22, 163, 74, 0.3);">
                    ✅
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_checkin']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_checkin_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium text-green-400 rounded-full bg-green-600/20">13 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">📱</span><h3 class="mb-1 font-semibold text-white">Mobile Scanning</h3><p class="text-sm text-white/50">Ticket scanning app</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">📷</span><h3 class="mb-1 font-semibold text-white">QR Scanner</h3><p class="text-sm text-white/50">Fast and reliable QR scanner</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">🔐</span><h3 class="mb-1 font-semibold text-white">NFC Support</h3><p class="text-sm text-white/50">NFC ticket support</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">👥</span><h3 class="mb-1 font-semibold text-white">Multi-Gate</h3><p class="text-sm text-white/50">Multiple entry management</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Real-Time Attendance</h3><p class="text-sm text-white/50">Live attendance monitoring</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">🔄</span><h3 class="mb-1 font-semibold text-white">Offline Mode</h3><p class="text-sm text-white/50">Works without internet</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">⚡</span><h3 class="mb-1 font-semibold text-white">Fast Check-In</h3><p class="text-sm text-white/50">Check-in under 1 second</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">🎫</span><h3 class="mb-1 font-semibold text-white">Partial Check-In</h3><p class="text-sm text-white/50">For multi-day packages</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">📋</span><h3 class="mb-1 font-semibold text-white">Guest Lists</h3><p class="text-sm text-white/50">Guest and VIP lists</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">🚫</span><h3 class="mb-1 font-semibold text-white">Blacklist</h3><p class="text-sm text-white/50">Restricted persons</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Entry Analytics</h3><p class="text-sm text-white/50">Flow and peak hours</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">🖨️</span><h3 class="mb-1 font-semibold text-white">Badge Printing</h3><p class="text-sm text-white/50">On-site badge printing</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-green-500/30"><span class="block mb-3 text-2xl">📍</span><h3 class="mb-1 font-semibold text-white">Zone Access</h3><p class="text-sm text-white/50">VIP, Backstage control</p></div>
            </div>
        </section>

        <!-- ===================== PAYMENTS ===================== -->
        <section id="payments" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'payments'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-indigo-600 to-indigo-400" style="box-shadow: 0 0 60px rgba(79, 70, 229, 0.3);">
                    💳
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_payments']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_payments_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium text-indigo-400 rounded-full bg-indigo-600/20">13 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">💳</span><h3 class="mb-1 font-semibold text-white">Stripe Integration</h3><p class="text-sm text-white/50">Stripe payment processing</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">💰</span><h3 class="mb-1 font-semibold text-white">PayPal Support</h3><p class="text-sm text-white/50">Integrated PayPal payments</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">🏦</span><h3 class="mb-1 font-semibold text-white">Bank Transfer</h3><p class="text-sm text-white/50">Bank transfer payments</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">📱</span><h3 class="mb-1 font-semibold text-white">Apple/Google Pay</h3><p class="text-sm text-white/50">Native mobile payments</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">💶</span><h3 class="mb-1 font-semibold text-white">Multi-Currency</h3><p class="text-sm text-white/50">Support for multiple currencies</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Revenue Split</h3><p class="text-sm text-white/50">Automatic revenue split</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">💸</span><h3 class="mb-1 font-semibold text-white">Auto Payouts</h3><p class="text-sm text-white/50">Automatic organizer payments</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">🧾</span><h3 class="mb-1 font-semibold text-white">Tax Management</h3><p class="text-sm text-white/50">VAT calculation and reporting</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">📋</span><h3 class="mb-1 font-semibold text-white">Financial Reports</h3><p class="text-sm text-white/50">Complete financial reports</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">🔐</span><h3 class="mb-1 font-semibold text-white">PCI Compliance</h3><p class="text-sm text-white/50">PCI DSS compliance</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">💳</span><h3 class="mb-1 font-semibold text-white">Installments</h3><p class="text-sm text-white/50">Payment in installments</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">🎁</span><h3 class="mb-1 font-semibold text-white">Gift Cards</h3><p class="text-sm text-white/50">Gift cards for events</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-indigo-500/30"><span class="block mb-3 text-2xl">💰</span><h3 class="mb-1 font-semibold text-white">Deposit Payments</h3><p class="text-sm text-white/50">Advance/deposit payments</p></div>
            </div>
        </section>

        <!-- ===================== INTEGRATIONS ===================== -->
        <section id="integrations" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'integrations'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-orange-600 to-orange-400" style="box-shadow: 0 0 60px rgba(234, 88, 12, 0.3);">
                    🔧
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_integrations']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_integrations_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium text-orange-400 rounded-full bg-orange-600/20">13 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">🔌</span><h3 class="mb-1 font-semibold text-white">REST API</h3><p class="text-sm text-white/50">Complete API for integrations</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">🪝</span><h3 class="mb-1 font-semibold text-white">Webhooks</h3><p class="text-sm text-white/50">Real-time notifications</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">⚡</span><h3 class="mb-1 font-semibold text-white">Zapier</h3><p class="text-sm text-white/50">Connect to 5000+ apps</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">📦</span><h3 class="mb-1 font-semibold text-white">WordPress Plugin</h3><p class="text-sm text-white/50">WordPress site integration</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">🛒</span><h3 class="mb-1 font-semibold text-white">E-commerce</h3><p class="text-sm text-white/50">WooCommerce, Shopify</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">📧</span><h3 class="mb-1 font-semibold text-white">CRM Integrations</h3><p class="text-sm text-white/50">Salesforce, HubSpot</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Analytics Tools</h3><p class="text-sm text-white/50">GA, Mixpanel, Amplitude</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">📱</span><h3 class="mb-1 font-semibold text-white">Social APIs</h3><p class="text-sm text-white/50">Facebook, Instagram, Twitter</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">🎵</span><h3 class="mb-1 font-semibold text-white">Spotify</h3><p class="text-sm text-white/50">Artist data</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">📺</span><h3 class="mb-1 font-semibold text-white">YouTube</h3><p class="text-sm text-white/50">Statistics and video embed</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">🗺️</span><h3 class="mb-1 font-semibold text-white">Google Maps</h3><p class="text-sm text-white/50">Maps and location</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">📧</span><h3 class="mb-1 font-semibold text-white">Email Providers</h3><p class="text-sm text-white/50">SendGrid, Mailchimp</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-orange-500/30"><span class="block mb-3 text-2xl">📅</span><h3 class="mb-1 font-semibold text-white">Calendar Sync</h3><p class="text-sm text-white/50">iCal, Google Calendar</p></div>
            </div>
        </section>

        <!-- ===================== WHITE-LABEL ===================== -->
        <section id="whitelabel" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'whitelabel'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-purple-600 to-purple-400" style="box-shadow: 0 0 60px rgba(147, 51, 234, 0.3);">
                    🎨
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_whitelabel']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_whitelabel_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium text-purple-400 rounded-full bg-purple-600/20">9 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-purple-500/30"><span class="block mb-3 text-2xl">🎨</span><h3 class="mb-1 font-semibold text-white">Custom Branding</h3><p class="text-sm text-white/50">Logo, colors, custom fonts</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-purple-500/30"><span class="block mb-3 text-2xl">🌐</span><h3 class="mb-1 font-semibold text-white">Custom Domain</h3><p class="text-sm text-white/50">Your own domain for the widget</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-purple-500/30"><span class="block mb-3 text-2xl">📧</span><h3 class="mb-1 font-semibold text-white">Branded Emails</h3><p class="text-sm text-white/50">Emails with organizer identity</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-purple-500/30"><span class="block mb-3 text-2xl">🎫</span><h3 class="mb-1 font-semibold text-white">Custom Ticket Design</h3><p class="text-sm text-white/50">Custom design for tickets</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-purple-500/30"><span class="block mb-3 text-2xl">📱</span><h3 class="mb-1 font-semibold text-white">White-Label App</h3><p class="text-sm text-white/50">Mobile app with your brand</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-purple-500/30"><span class="block mb-3 text-2xl">🖼️</span><h3 class="mb-1 font-semibold text-white">Custom Checkout</h3><p class="text-sm text-white/50">Customized checkout page</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-purple-500/30"><span class="block mb-3 text-2xl">📄</span><h3 class="mb-1 font-semibold text-white">Custom Terms</h3><p class="text-sm text-white/50">Your own terms and conditions</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-purple-500/30"><span class="block mb-3 text-2xl">🔗</span><h3 class="mb-1 font-semibold text-white">Embeddable Widget</h3><p class="text-sm text-white/50">Sales widget for your site</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-purple-500/30"><span class="block mb-3 text-2xl">💳</span><h3 class="mb-1 font-semibold text-white">Custom Payment Page</h3><p class="text-sm text-white/50">Payment page with branding</p></div>
            </div>
        </section>

        <!-- ===================== SECURITY ===================== -->
        <section id="security" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'security'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-red-600 to-red-400" style="box-shadow: 0 0 60px rgba(220, 38, 38, 0.3);">
                    🔐
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_security']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_security_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium text-red-400 rounded-full bg-red-600/20">10 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">🤖</span><h3 class="mb-1 font-semibold text-white">Bot Protection</h3><p class="text-sm text-white/50">Anti-scalping protection</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">🔍</span><h3 class="mb-1 font-semibold text-white">AI Fraud Detection</h3><p class="text-sm text-white/50">ML fraud detection</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">🎫</span><h3 class="mb-1 font-semibold text-white">Anti-Counterfeit</h3><p class="text-sm text-white/50">Unforgeable tickets</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">👤</span><h3 class="mb-1 font-semibold text-white">ID Verification</h3><p class="text-sm text-white/50">Identity verification at entry</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">🔐</span><h3 class="mb-1 font-semibold text-white">Two-Factor Auth</h3><p class="text-sm text-white/50">2FA for organizers</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">📍</span><h3 class="mb-1 font-semibold text-white">Geoblocking</h3><p class="text-sm text-white/50">Regional restrictions</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">🚫</span><h3 class="mb-1 font-semibold text-white">Purchase Limits</h3><p class="text-sm text-white/50">Ticket limits per person</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">🕐</span><h3 class="mb-1 font-semibold text-white">Queue System</h3><p class="text-sm text-white/50">Queue for popular events</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">🔒</span><h3 class="mb-1 font-semibold text-white">SSL/TLS</h3><p class="text-sm text-white/50">Complete data encryption</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-red-500/30"><span class="block mb-3 text-2xl">📊</span><h3 class="mb-1 font-semibold text-white">Audit Logs</h3><p class="text-sm text-white/50">Complete action logs</p></div>
            </div>
        </section>

        <!-- ===================== MOBILE ===================== -->
        <section id="mobile" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'mobile'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-teal-600 to-teal-400" style="box-shadow: 0 0 60px rgba(20, 184, 166, 0.3);">
                    📱
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_mobile']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_mobile_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium text-teal-400 rounded-full bg-teal-600/20">8 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-teal-500/30"><span class="block mb-3 text-2xl">📱</span><h3 class="mb-1 font-semibold text-white">iOS App</h3><p class="text-sm text-white/50">Native app for iPhone</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-teal-500/30"><span class="block mb-3 text-2xl">🤖</span><h3 class="mb-1 font-semibold text-white">Android App</h3><p class="text-sm text-white/50">Native app for Android</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-teal-500/30"><span class="block mb-3 text-2xl">📲</span><h3 class="mb-1 font-semibold text-white">Progressive Web App</h3><p class="text-sm text-white/50">PWA for quick access</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-teal-500/30"><span class="block mb-3 text-2xl">📱</span><h3 class="mb-1 font-semibold text-white">Organizer App</h3><p class="text-sm text-white/50">Event management app</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-teal-500/30"><span class="block mb-3 text-2xl">📷</span><h3 class="mb-1 font-semibold text-white">Scanner App</h3><p class="text-sm text-white/50">Dedicated check-in app</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-teal-500/30"><span class="block mb-3 text-2xl">🔔</span><h3 class="mb-1 font-semibold text-white">Push Notifications</h3><p class="text-sm text-white/50">Native push notifications</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-teal-500/30"><span class="block mb-3 text-2xl">📍</span><h3 class="mb-1 font-semibold text-white">Location Services</h3><p class="text-sm text-white/50">GPS integration for directions</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-teal-500/30"><span class="block mb-3 text-2xl">📴</span><h3 class="mb-1 font-semibold text-white">Offline Support</h3><p class="text-sm text-white/50">Offline functionality</p></div>
            </div>
        </section>

        <!-- ===================== SPECIALIZED ===================== -->
        <section id="specialized" class="mb-24 category-section" x-show="activeCategory === 'all' || activeCategory === 'specialized'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="flex items-center justify-center w-16 h-16 text-3xl shadow-lg rounded-2xl bg-gradient-to-br from-fuchsia-600 to-fuchsia-400" style="box-shadow: 0 0 60px rgba(192, 38, 211, 0.3);">
                    🎯
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white"><?php echo $t['sec_specialized']; ?></h2>
                    <p class="text-white/50"><?php echo $t['sec_specialized_desc']; ?></p>
                </div>
                <span class="px-3 py-1 text-sm font-medium rounded-full bg-fuchsia-600/20 text-fuchsia-400">10 <?php echo $t['features']; ?></span>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">🎪</span><h3 class="mb-1 font-semibold text-white">Festival Mode</h3><p class="text-sm text-white/50">Special features for festivals</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">🎭</span><h3 class="mb-1 font-semibold text-white">Theater Mode</h3><p class="text-sm text-white/50">Show management with runs</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">🏟️</span><h3 class="mb-1 font-semibold text-white">Sports Mode</h3><p class="text-sm text-white/50">Features for sports events</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">🎤</span><h3 class="mb-1 font-semibold text-white">Conference Mode</h3><p class="text-sm text-white/50">Conference and workshop management</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">🎉</span><h3 class="mb-1 font-semibold text-white">Party Mode</h3><p class="text-sm text-white/50">Features for clubs and parties</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">💒</span><h3 class="mb-1 font-semibold text-white">Private Events</h3><p class="text-sm text-white/50">Private event management</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">🎓</span><h3 class="mb-1 font-semibold text-white">Educational Events</h3><p class="text-sm text-white/50">Courses and training features</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">🏃</span><h3 class="mb-1 font-semibold text-white">Race Mode</h3><p class="text-sm text-white/50">Race and competition management</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">🎨</span><h3 class="mb-1 font-semibold text-white">Exhibition Mode</h3><p class="text-sm text-white/50">Exhibition and fair features</p></div>
                <div class="p-5 border feature-card rounded-2xl bg-zinc-900/50 border-white/5 hover:border-fuchsia-500/30"><span class="block mb-3 text-2xl">🎬</span><h3 class="mb-1 font-semibold text-white">Streaming Events</h3><p class="text-sm text-white/50">Online/hybrid event support</p></div>
            </div>
        </section>

    </div>
</main>

<!-- CTA Section -->
<section class="relative py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-violet-950/20 to-transparent"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-violet-600/20 rounded-full blur-3xl"></div>

    <div class="relative max-w-4xl px-4 mx-auto text-center sm:px-6 lg:px-8">
        <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
            <?php echo $t['cta_title']; ?>
        </h2>
        <p class="max-w-2xl mx-auto mb-10 text-lg text-white/60">
            <?php echo $t['cta_subtitle']; ?>
        </p>
        <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
            <a href="https://core.tixello.com/register" class="flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all group rounded-xl bg-violet-600 hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/30">
                <?php echo $t['cta_signup']; ?>
                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="/contact" class="px-8 py-4 font-semibold text-white transition-all border rounded-xl bg-white/5 border-white/10 hover:bg-white/10">
                <?php echo $t['cta_contact']; ?>
            </a>
        </div>
        <p class="mt-6 text-sm text-white/40"><?php echo $t['cta_note']; ?></p>
    </div>
</section>

</div><!-- End Alpine.js wrapper -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });
        
        document.querySelectorAll('.category-section').forEach(section => {
            observer.observe(section);
        });
        
        // Drag to scroll
        const slider = document.getElementById('categoryNav');
        let isDown = false;
        let startX;
        let scrollLeft;
        
        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('dragging');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });
        
        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('dragging');
        });
        
        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('dragging');
        });
        
        slider.addEventListener('mousemove', (e) => {
            if(!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2;
            slider.scrollLeft = scrollLeft - walk;
        });
        
        // Touch support
        slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });
        
        slider.addEventListener('touchmove', (e) => {
            const x = e.touches[0].pageX - slider.offsetLeft;
            const walk = (x - startX) * 2;
            slider.scrollLeft = scrollLeft - walk;
        });
    });
</script>

<?php get_footer();?>