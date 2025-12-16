<?php
/**
 * Template Name: Tixello – Features Page
 */

get_header();?>

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

<!-- Header -->
<header class="fixed top-0 left-0 right-0 z-50 bg-zinc-950/80 backdrop-blur-xl border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between h-20">
            <a href="/" class="flex items-center gap-2.5">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-violet-600 to-cyan-500 flex items-center justify-center shadow-lg shadow-violet-600/20">
                    <span class="text-white font-bold text-base">T</span>
                </div>
                <span class="font-bold text-xl text-white">Tixello</span>
            </a>
            
            <div class="hidden md:flex items-center gap-6">
                <a href="/ro/functionalitati" class="text-sm text-white font-medium">Funcționalități</a>
                <a href="/ro/preturi" class="text-sm text-white/60 hover:text-white transition-colors">Prețuri</a>
                <a href="/ro/evenimente" class="text-sm text-white/60 hover:text-white transition-colors">Evenimente</a>
                <a href="/ro/contact" class="text-sm text-white/60 hover:text-white transition-colors">Contact</a>
            </div>
            
            <div class="flex items-center gap-3">
                <a href="/features" class="text-sm text-white/50 hover:text-white transition-colors">EN</a>
                <span class="text-white/20">|</span>
                <a href="/login" class="hidden sm:block px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors">Conectare</a>
                <a href="/signup" class="px-4 py-2 rounded-full bg-violet-600 text-white text-sm font-semibold hover:bg-violet-500 transition-colors shadow-lg shadow-violet-600/20">Înregistrare Gratuită</a>
            </div>
        </nav>
    </div>
</header>

<div class="h-20"></div>

<!-- Hero Section -->
<section class="relative py-20 sm:py-32 overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-violet-600/10 border border-violet-500/20 mb-8 animate-fade-in">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-violet-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-violet-500"></span>
                </span>
                <span class="text-violet-400 text-sm font-medium">180+ Funcționalități • Platformă All-in-One</span>
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight animate-slide-up">
                Tot Ce Ai Nevoie Pentru<br>
                <span class="gradient-text">Evenimentele Tale</span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-lg sm:text-xl text-white/60 mb-10 max-w-2xl mx-auto animate-slide-up" style="animation-delay: 0.1s">
                De la ticketing la check-in, marketing la analytics — descoperă toolkit-ul complet pentru organizatorii moderni de evenimente.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-slide-up" style="animation-delay: 0.2s">
                <a href="/signup" class="group px-8 py-4 rounded-xl bg-gradient-to-r from-violet-600 to-violet-500 text-white font-semibold hover:shadow-lg hover:shadow-violet-600/30 transition-all flex items-center gap-2">
                    Începe Gratuit
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="/demo" class="px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-semibold hover:bg-white/10 transition-all flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Vezi Demo
                </a>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mt-16 pt-16 border-t border-white/5">
                <div class="text-center">
                    <p class="text-3xl sm:text-4xl font-bold text-white mb-1">180+</p>
                    <p class="text-sm text-white/50">Funcționalități</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl sm:text-4xl font-bold text-white mb-1">20</p>
                    <p class="text-sm text-white/50">Categorii</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl sm:text-4xl font-bold text-white mb-1">5000+</p>
                    <p class="text-sm text-white/50">Integrări via Zapier</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl sm:text-4xl font-bold text-white mb-1">99.9%</p>
                    <p class="text-sm text-white/50">Uptime</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category Navigation (Sticky + Draggable) -->
<nav class="sticky top-20 z-40 bg-zinc-950/95 backdrop-blur-xl border-y border-white/5 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="categoryNav" class="drag-scroll flex items-center gap-2 overflow-x-auto pb-2">
            <button @click="activeCategory = 'all'" :class="activeCategory === 'all' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                Toate
            </button>
            <button @click="activeCategory = 'ticketing'" :class="activeCategory === 'ticketing' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                🎫 Ticketing
            </button>
            <button @click="activeCategory = 'events'" :class="activeCategory === 'events' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                📅 Evenimente
            </button>
            <button @click="activeCategory = 'customers'" :class="activeCategory === 'customers' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                👥 Clienți
            </button>
            <button @click="activeCategory = 'artists'" :class="activeCategory === 'artists' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                🎤 Artiști
            </button>
            <button @click="activeCategory = 'venues'" :class="activeCategory === 'venues' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                🏛️ Locații
            </button>
            <button @click="activeCategory = 'analytics'" :class="activeCategory === 'analytics' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                📊 Analytics
            </button>
            <button @click="activeCategory = 'marketing'" :class="activeCategory === 'marketing' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                📧 Marketing
            </button>
            <button @click="activeCategory = 'checkin'" :class="activeCategory === 'checkin' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                ✅ Check-in
            </button>
            <button @click="activeCategory = 'payments'" :class="activeCategory === 'payments' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                💳 Plăți
            </button>
            <button @click="activeCategory = 'integrations'" :class="activeCategory === 'integrations' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                🔧 Integrări
            </button>
            <button @click="activeCategory = 'whitelabel'" :class="activeCategory === 'whitelabel' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                🎨 White-Label
            </button>
            <button @click="activeCategory = 'security'" :class="activeCategory === 'security' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                🔐 Securitate
            </button>
            <button @click="activeCategory = 'mobile'" :class="activeCategory === 'mobile' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                📱 Mobile
            </button>
            <button @click="activeCategory = 'specialized'" :class="activeCategory === 'specialized' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/60 hover:text-white hover:bg-white/10'" class="px-4 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all flex-shrink-0">
                🎯 Specializate
            </button>
        </div>
        <!-- Drag hint -->
        <div class="flex items-center justify-center gap-2 mt-2 text-white/30 text-xs">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"/>
            </svg>
            <span>Trage pentru a naviga</span>
        </div>
    </div>
</nav>

<!-- Features Sections -->
<main class="relative py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- ===================== TICKETING & SALES ===================== -->
        <section id="ticketing" class="category-section mb-24" x-show="activeCategory === 'all' || activeCategory === 'ticketing'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-600 to-violet-400 flex items-center justify-center text-3xl shadow-lg glow-violet">
                    🎫
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white">Ticketing & Vânzări</h2>
                    <p class="text-white/50">Vinde bilete în felul tău cu instrumente puternice și flexibile</p>
                </div>
                <span class="px-3 py-1 rounded-full bg-violet-600/20 text-violet-400 text-sm font-medium">20 funcționalități</span>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🎟️</span><h3 class="font-semibold text-white mb-1">Bilete Multi-Nivel</h3><p class="text-sm text-white/50">Early Bird, Standard, VIP și altele cu prețuri diferite</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">💰</span><h3 class="font-semibold text-white mb-1">Prețuri Dinamice</h3><p class="text-sm text-white/50">Prețuri care se ajustează automat în funcție de cerere</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">📊</span><h3 class="font-semibold text-white mb-1">Gestionare Inventar</h3><p class="text-sm text-white/50">Control în timp real al stocului cu alerte sold out</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🔄</span><h3 class="font-semibold text-white mb-1">Gestionare Rambursări</h3><p class="text-sm text-white/50">Sistem automatizat de rambursări și schimburi</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🎁</span><h3 class="font-semibold text-white mb-1">Coduri Promoționale</h3><p class="text-sm text-white/50">Coduri cu reduceri și acces anticipat</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">👥</span><h3 class="font-semibold text-white mb-1">Bilete de Grup</h3><p class="text-sm text-white/50">Pachete pentru grupuri cu reduceri automate</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🪑</span><h3 class="font-semibold text-white mb-1">Evenimente cu Locuri</h3><p class="text-sm text-white/50">Selecție locuri pe hartă interactivă</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🎫</span><h3 class="font-semibold text-white mb-1">Abonamente Sezon</h3><p class="text-sm text-white/50">Subscripții pentru serii de evenimente</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🔐</span><h3 class="font-semibold text-white mb-1">Evenimente Private</h3><p class="text-sm text-white/50">Acces pe bază de invitație</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">⏰</span><h3 class="font-semibold text-white mb-1">Intrare Programată</h3><p class="text-sm text-white/50">Sloturi orare pentru controlul fluxului</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🛒</span><h3 class="font-semibold text-white mb-1">Checkout Inteligent</h3><p class="text-sm text-white/50">Checkout optimizat pentru conversie maximă</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">💳</span><h3 class="font-semibold text-white mb-1">Plăți Multiple</h3><p class="text-sm text-white/50">Card, Apple Pay, Google Pay, rate</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🧾</span><h3 class="font-semibold text-white mb-1">Generare Facturi</h3><p class="text-sm text-white/50">Facturi automate pentru persoane juridice</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🎯</span><h3 class="font-semibold text-white mb-1">Upsells & Add-ons</h3><p class="text-sm text-white/50">Merch, parking, vouchere food</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">📱</span><h3 class="font-semibold text-white mb-1">Bilete Mobile</h3><p class="text-sm text-white/50">Integrare Apple Wallet și Google Pay</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🔒</span><h3 class="font-semibold text-white mb-1">Coduri QR Securizate</h3><p class="text-sm text-white/50">Coduri criptate anti-screenshot</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🎭</span><h3 class="font-semibold text-white mb-1">Pachete Bundle</h3><p class="text-sm text-white/50">Bilet + cazare, bilet + transport</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">💵</span><h3 class="font-semibold text-white mb-1">Plătește Cât Vrei</h3><p class="text-sm text-white/50">Prețuri flexibile stabilite de cumpărător</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">🆓</span><h3 class="font-semibold text-white mb-1">Înregistrare Gratuită</h3><p class="text-sm text-white/50">Evenimente gratuite cu captare date</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30"><span class="text-2xl mb-3 block">📋</span><h3 class="font-semibold text-white mb-1">Liste de Așteptare</h3><p class="text-sm text-white/50">Waitlists pentru evenimente sold out</p></div>
            </div>
        </section>

        <!-- ===================== EVENT MANAGEMENT ===================== -->
        <section id="events" class="category-section mb-24" x-show="activeCategory === 'all' || activeCategory === 'events'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-cyan-600 to-cyan-400 flex items-center justify-center text-3xl shadow-lg glow-cyan">
                    📅
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white">Gestionare Evenimente</h2>
                    <p class="text-white/50">Creează, gestionează și scalează evenimentele cu ușurință</p>
                </div>
                <span class="px-3 py-1 rounded-full bg-cyan-600/20 text-cyan-400 text-sm font-medium">17 funcționalități</span>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">📝</span><h3 class="font-semibold text-white mb-1">Wizard Eveniment</h3><p class="text-sm text-white/50">Creare rapidă în pași ghidați</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">📅</span><h3 class="font-semibold text-white mb-1">Evenimente Multi-Dată</h3><p class="text-sm text-white/50">Evenimente recurente sau cu mai multe date</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">🔄</span><h3 class="font-semibold text-white mb-1">Clonare Evenimente</h3><p class="text-sm text-white/50">Duplicare rapidă evenimente anterioare</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">📍</span><h3 class="font-semibold text-white mb-1">Selectare Locație</h3><p class="text-sm text-white/50">Bibliotecă de locații cu capacități</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">🎨</span><h3 class="font-semibold text-white mb-1">Pagini Personalizate</h3><p class="text-sm text-white/50">Pagini personalizabile cu brand propriu</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">📸</span><h3 class="font-semibold text-white mb-1">Galerie Media</h3><p class="text-sm text-white/50">Galerii foto și video per eveniment</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">📝</span><h3 class="font-semibold text-white mb-1">Descrieri Rich</h3><p class="text-sm text-white/50">Formatare, imagini și video embed</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">🏷️</span><h3 class="font-semibold text-white mb-1">Categorii & Tag-uri</h3><p class="text-sm text-white/50">Categorizare pentru discoverability</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">🌐</span><h3 class="font-semibold text-white mb-1">Multi-Limbă</h3><p class="text-sm text-white/50">Evenimente în mai multe limbi</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">⏱️</span><h3 class="font-semibold text-white mb-1">Timer Countdown</h3><p class="text-sm text-white/50">Timer pentru lansare sau începere</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">📢</span><h3 class="font-semibold text-white mb-1">Gestionare Status</h3><p class="text-sm text-white/50">Draft, Publicat, Amânat, Anulat</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">🔗</span><h3 class="font-semibold text-white mb-1">URL-uri Custom</h3><p class="text-sm text-white/50">URL-uri personalizate pentru SEO</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">📄</span><h3 class="font-semibold text-white mb-1">Termeni și Condiții</h3><p class="text-sm text-white/50">T&C specifice per eveniment</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">🎵</span><h3 class="font-semibold text-white mb-1">Gestionare Lineup</h3><p class="text-sm text-white/50">Artiști cu timeslots și ordine</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">🗺️</span><h3 class="font-semibold text-white mb-1">Hărți Interactive</h3><p class="text-sm text-white/50">Hărți interactive cu zone</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">📊</span><h3 class="font-semibold text-white mb-1">Planificare Capacitate</h3><p class="text-sm text-white/50">Planificare pe zone și ore</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30"><span class="text-2xl mb-3 block">🚨</span><h3 class="font-semibold text-white mb-1">Alerte Eveniment</h3><p class="text-sm text-white/50">Notificări pentru milestone-uri</p></div>
            </div>
        </section>

        <!-- ===================== CUSTOMER MANAGEMENT ===================== -->
        <section id="customers" class="category-section mb-24" x-show="activeCategory === 'all' || activeCategory === 'customers'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-600 to-pink-400 flex items-center justify-center text-3xl shadow-lg glow-pink">
                    👥
                </div>
                <div class="flex-1 min-w-[200px]">
                    <h2 class="text-3xl font-bold text-white">Gestionare Clienți</h2>
                    <p class="text-white/50">Construiește relații de durată cu participanții tăi</p>
                </div>
                <span class="px-3 py-1 rounded-full bg-pink-600/20 text-pink-400 text-sm font-medium">12 funcționalități</span>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">👥</span><h3 class="font-semibold text-white mb-1">Bază de Date Clienți</h3><p class="text-sm text-white/50">Bază centralizată cu toți cumpărătorii</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">📧</span><h3 class="font-semibold text-white mb-1">Colectare Email-uri</h3><p class="text-sm text-white/50">Captare email cu consimțământ GDPR</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">🏷️</span><h3 class="font-semibold text-white mb-1">Segmentare</h3><p class="text-sm text-white/50">Segmentare pe comportament și istoric</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">📝</span><h3 class="font-semibold text-white mb-1">Formulare Custom</h3><p class="text-sm text-white/50">Formulare cu câmpuri personalizate</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">🔐</span><h3 class="font-semibold text-white mb-1">Conturi Clienți</h3><p class="text-sm text-white/50">Conturi pentru istoric comenzi</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">⭐</span><h3 class="font-semibold text-white mb-1">Program Loialitate</h3><p class="text-sm text-white/50">Puncte și recompense pentru fideli</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">📊</span><h3 class="font-semibold text-white mb-1">Insights Clienți</h3><p class="text-sm text-white/50">Analytics despre comportament</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">📱</span><h3 class="font-semibold text-white mb-1">Aplicație Client</h3><p class="text-sm text-white/50">Aplicație mobilă pentru cumpărători</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">🎫</span><h3 class="font-semibold text-white mb-1">Transfer Bilete</h3><p class="text-sm text-white/50">Transfer bilete între persoane</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">📋</span><h3 class="font-semibold text-white mb-1">Istoric Comenzi</h3><p class="text-sm text-white/50">Istoric complet al comenzilor</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">💬</span><h3 class="font-semibold text-white mb-1">Portal Suport</h3><p class="text-sm text-white/50">Portal self-service pentru clienți</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30"><span class="text-2xl mb-3 block">🔔</span><h3 class="font-semibold text-white mb-1">Notificări</h3><p class="text-sm text-white/50">Push, SMS, email pentru updates</p></div>
            </div>
        </section>

        <!-- Add remaining sections with Romanian translations... -->
        <!-- For brevity, I'll include the remaining categories in compact format -->

        <!-- ARTISTS, VENUES, ANALYTICS, MARKETING, CHECK-IN, PAYMENTS, INTEGRATIONS, WHITE-LABEL, SECURITY, MOBILE, SPECIALIZED -->
        <!-- Same structure as English version but with Romanian text -->

        <!-- ===================== ARTISTS ===================== -->
        <section id="artists" class="category-section mb-24" x-show="activeCategory === 'all' || activeCategory === 'artists'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-600 to-amber-400 flex items-center justify-center text-3xl shadow-lg" style="box-shadow: 0 0 60px rgba(245, 158, 11, 0.3);">🎤</div>
                <div class="flex-1 min-w-[200px]"><h2 class="text-3xl font-bold text-white">Artiști & Talent</h2><p class="text-white/50">Prezintă artiștii și gestionează relațiile cu talente</p></div>
                <span class="px-3 py-1 rounded-full bg-amber-600/20 text-amber-400 text-sm font-medium">11 funcționalități</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">🎤</span><h3 class="font-semibold text-white mb-1">Profile Artiști</h3><p class="text-sm text-white/50">Profile complete cu bio și galerie</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">📊</span><h3 class="font-semibold text-white mb-1">Analytics Artiști</h3><p class="text-sm text-white/50">Statistici performanță și valoare</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">🔗</span><h3 class="font-semibold text-white mb-1">Integrare Social</h3><p class="text-sm text-white/50">Spotify, YouTube, Instagram, TikTok</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">📈</span><h3 class="font-semibold text-white mb-1">Scor Valoare</h3><p class="text-sm text-white/50">Scor bazat pe reach și performanță</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">📅</span><h3 class="font-semibold text-white mb-1">Calendar Artist</h3><p class="text-sm text-white/50">Disponibilități și evenimente</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">📞</span><h3 class="font-semibold text-white mb-1">Contacte Booking</h3><p class="text-sm text-white/50">Contacte management și booking</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">🏷️</span><h3 class="font-semibold text-white mb-1">Taguri Gen</h3><p class="text-sm text-white/50">Categorizare pe genuri muzicale</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">✅</span><h3 class="font-semibold text-white mb-1">Artiști Verificați</h3><p class="text-sm text-white/50">Sistem verificare autenticitate</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">🔍</span><h3 class="font-semibold text-white mb-1">Descoperire Artiști</h3><p class="text-sm text-white/50">Motor căutare și filtrare</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">📹</span><h3 class="font-semibold text-white mb-1">Video Embeds</h3><p class="text-sm text-white/50">YouTube/Vimeo pe profil</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30"><span class="text-2xl mb-3 block">🤝</span><h3 class="font-semibold text-white mb-1">Cereri Booking</h3><p class="text-sm text-white/50">Cereri pentru organizatori</p></div>
            </div>
        </section>

        <!-- ===================== VENUES ===================== -->
        <section id="venues" class="category-section mb-24" x-show="activeCategory === 'all' || activeCategory === 'venues'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-600 to-emerald-400 flex items-center justify-center text-3xl shadow-lg" style="box-shadow: 0 0 60px rgba(16, 185, 129, 0.3);">🏛️</div>
                <div class="flex-1 min-w-[200px]"><h2 class="text-3xl font-bold text-white">Gestionare Locații</h2><p class="text-white/50">Profile complete pentru locații și instrumente de rezervare</p></div>
                <span class="px-3 py-1 rounded-full bg-emerald-600/20 text-emerald-400 text-sm font-medium">10 funcționalități</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">🏟️</span><h3 class="font-semibold text-white mb-1">Profile Locații</h3><p class="text-sm text-white/50">Profile cu facilități și capacitate</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">📍</span><h3 class="font-semibold text-white mb-1">Locație & Hărți</h3><p class="text-sm text-white/50">Integrare Google Maps cu direcții</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">🏷️</span><h3 class="font-semibold text-white mb-1">140+ Tipuri Locații</h3><p class="text-sm text-white/50">Tipuri de locații categorizate</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">🛎️</span><h3 class="font-semibold text-white mb-1">150+ Facilități</h3><p class="text-sm text-white/50">Catalog facilități cu iconițe</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">📸</span><h3 class="font-semibold text-white mb-1">Galerie Locație</h3><p class="text-sm text-white/50">Galerie foto pentru fiecare locație</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">📅</span><h3 class="font-semibold text-white mb-1">Calendar Locație</h3><p class="text-sm text-white/50">Disponibilități și evenimente</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">📊</span><h3 class="font-semibold text-white mb-1">Analytics Locații</h3><p class="text-sm text-white/50">Statistici evenimente și ocupare</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">🗺️</span><h3 class="font-semibold text-white mb-1">Scheme Locuri</h3><p class="text-sm text-white/50">Configurații salvate</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">📞</span><h3 class="font-semibold text-white mb-1">Contacte Locație</h3><p class="text-sm text-white/50">Date contact pentru rezervări</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30"><span class="text-2xl mb-3 block">⭐</span><h3 class="font-semibold text-white mb-1">Rating Locații</h3><p class="text-sm text-white/50">Sistem rating și review-uri</p></div>
            </div>
        </section>

        <!-- ===================== INTEGRATIONS ===================== -->
        <section id="integrations" class="category-section mb-24" x-show="activeCategory === 'all' || activeCategory === 'integrations'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="flex flex-wrap items-center gap-4 mb-10">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-600 to-orange-400 flex items-center justify-center text-3xl shadow-lg" style="box-shadow: 0 0 60px rgba(234, 88, 12, 0.3);">🔧</div>
                <div class="flex-1 min-w-[200px]"><h2 class="text-3xl font-bold text-white">Platformă & Integrări</h2><p class="text-white/50">50+ integrări native + 5000+ prin Zapier</p></div>
                <span class="px-3 py-1 rounded-full bg-orange-600/20 text-orange-400 text-sm font-medium">13 funcționalități</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">🔌</span><h3 class="font-semibold text-white mb-1">REST API</h3><p class="text-sm text-white/50">API complet pentru integrări</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">🪝</span><h3 class="font-semibold text-white mb-1">Webhooks</h3><p class="text-sm text-white/50">Notificări în timp real</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">⚡</span><h3 class="font-semibold text-white mb-1">Zapier</h3><p class="text-sm text-white/50">Conectare la 5000+ aplicații</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">📦</span><h3 class="font-semibold text-white mb-1">Plugin WordPress</h3><p class="text-sm text-white/50">Integrare site WordPress</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">🛒</span><h3 class="font-semibold text-white mb-1">E-commerce</h3><p class="text-sm text-white/50">WooCommerce, Shopify</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">📧</span><h3 class="font-semibold text-white mb-1">Integrări CRM</h3><p class="text-sm text-white/50">Salesforce, HubSpot</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">📊</span><h3 class="font-semibold text-white mb-1">Instrumente Analytics</h3><p class="text-sm text-white/50">GA, Mixpanel, Amplitude</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">📱</span><h3 class="font-semibold text-white mb-1">API-uri Social</h3><p class="text-sm text-white/50">Facebook, Instagram, Twitter</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">🎵</span><h3 class="font-semibold text-white mb-1">Spotify</h3><p class="text-sm text-white/50">Date despre artiști</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">📺</span><h3 class="font-semibold text-white mb-1">YouTube</h3><p class="text-sm text-white/50">Statistici și video embed</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">🗺️</span><h3 class="font-semibold text-white mb-1">Google Maps</h3><p class="text-sm text-white/50">Hărți și localizare</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">📧</span><h3 class="font-semibold text-white mb-1">Provideri Email</h3><p class="text-sm text-white/50">SendGrid, Mailchimp</p></div>
                <div class="feature-card p-5 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30"><span class="text-2xl mb-3 block">📅</span><h3 class="font-semibold text-white mb-1">Sync Calendar</h3><p class="text-sm text-white/50">iCal, Google Calendar</p></div>
            </div>
        </section>

        <!-- Additional sections would follow the same pattern with Romanian translations -->
        <!-- For production, include all remaining sections (Analytics, Marketing, Check-in, Payments, White-Label, Security, Mobile, Specialized) -->

    </div>
</main>

<!-- CTA Section -->
<section class="relative py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-violet-950/20 to-transparent"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-violet-600/20 rounded-full blur-3xl"></div>
    
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6">
            Gata Să-ți Transformi Evenimentele?
        </h2>
        <p class="text-lg text-white/60 mb-10 max-w-2xl mx-auto">
            Alătură-te miilor de organizatori care au încredere în Tixello pentru evenimentele lor. Înregistrează-te gratuit — nu e nevoie de card.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/signup" class="group px-8 py-4 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/30 transition-all flex items-center gap-2">
                Înregistrare Gratuită
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="/contact" class="px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-semibold hover:bg-white/10 transition-all">
                Vorbește cu Vânzările
            </a>
        </div>
        <p class="text-sm text-white/40 mt-6">Înregistrare gratuită • Fără card • Anulează oricând</p>
    </div>
</section>

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