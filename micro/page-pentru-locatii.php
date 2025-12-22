<?php
/**
 * Template Name: Pentru Locatii
 * Description: Landing page for venue owners - white-label, multi-promoter, seating maps, box office
 */

get_header();
?>

<style>
  ::selection { background: #6366f1; color: white; }

  .text-gradient {
    background: linear-gradient(135deg, #818cf8 0%, #6366f1 30%, #4f46e5 70%, #3b82f6 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shimmer 4s linear infinite;
  }
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  @keyframes seatPulse { 0%, 100% { opacity: 0.6; } 50% { opacity: 1; } }

  .reveal { opacity: 0; transform: translateY(50px); transition: all 0.9s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }

  .hero-gradient {
    background:
      radial-gradient(ellipse 80% 50% at 50% -20%, rgba(99, 102, 241, 0.2), transparent),
      radial-gradient(ellipse 60% 40% at 80% 60%, rgba(59, 130, 246, 0.15), transparent),
      radial-gradient(ellipse 50% 30% at 20% 80%, rgba(6, 182, 212, 0.1), transparent);
  }

  .noise-bg::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
    opacity: 0.03;
    pointer-events: none;
  }

  .glow-card {
    position: relative;
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 24px;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .glow-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), var(--glow-color, rgba(99, 102, 241, 0.15)), transparent 40%);
    opacity: 0;
    transition: opacity 0.5s;
  }
  .glow-card:hover::before { opacity: 1; }
  .glow-card:hover {
    border-color: var(--border-color, rgba(99, 102, 241, 0.3));
    transform: translateY(-8px);
    box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3);
  }

  .feature-icon {
    width: 64px;
    height: 64px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    transition: transform 0.3s ease;
  }
  .feature-icon::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: inherit;
    background: inherit;
    filter: blur(20px);
    opacity: 0.4;
    z-index: -1;
  }
  .glow-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); }

  .seat { width: 8px; height: 8px; border-radius: 2px; transition: all 0.2s ease; }
  .seat-available { background: rgba(16, 185, 129, 0.6); }
  .seat-sold { background: rgba(99, 102, 241, 0.8); }
  .seat-selected { background: rgba(6, 182, 212, 1); animation: seatPulse 1s ease-in-out infinite; }
  .seat-blocked { background: rgba(255, 255, 255, 0.1); }
  .seat:hover { transform: scale(1.5); }

  .venue-stage {
    background: linear-gradient(180deg, rgba(99, 102, 241, 0.3), rgba(99, 102, 241, 0.1));
    border-radius: 8px 8px 50% 50% / 8px 8px 20% 20%;
  }

  .dashboard-mockup {
    background: linear-gradient(135deg, rgba(19, 19, 28, 0.9), rgba(26, 26, 39, 0.9));
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 40px 80px -20px rgba(0, 0, 0, 0.5);
  }

  .chart-bar { transform-origin: bottom; transition: all 0.3s ease; }
  .chart-bar:hover { filter: brightness(1.2); transform: scaleY(1.05); }

  .counter-value { font-variant-numeric: tabular-nums; }

  .testimonial-card {
    background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 24px;
    padding: 32px;
    position: relative;
  }
  .testimonial-card::before {
    content: '"';
    position: absolute;
    top: 20px;
    left: 24px;
    font-size: 80px;
    font-family: Georgia, serif;
    color: rgba(99, 102, 241, 0.2);
    line-height: 1;
  }

  .float-element { position: absolute; pointer-events: none; z-index: 0; }

  .cta-primary {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    transition: all 0.3s ease;
  }
  .cta-primary::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s;
  }
  .cta-primary:hover::before { transform: translateX(100%); }
  .cta-primary:hover { transform: translateY(-2px); box-shadow: 0 20px 40px rgba(99, 102, 241, 0.4); }

  .timeline-step { position: relative; }
  .timeline-step::before {
    content: '';
    position: absolute;
    left: 31px;
    top: 64px;
    width: 2px;
    height: calc(100% + 24px);
    background: linear-gradient(180deg, rgba(99, 102, 241, 0.5), rgba(6, 182, 212, 0.2));
  }
  .timeline-step:last-child::before { display: none; }

  .promoter-card {
    background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 16px;
    padding: 16px;
    transition: all 0.3s ease;
  }
  .promoter-card:hover { border-color: rgba(99, 102, 241, 0.3); background: rgba(99, 102, 241, 0.05); }

  .revenue-bar { height: 8px; border-radius: 4px; background: rgba(255,255,255,0.1); overflow: hidden; }
  .revenue-fill { height: 100%; border-radius: 4px; transition: width 1s ease-out; }

  .pos-terminal {
    background: linear-gradient(135deg, #1a1a27, #13131c);
    border: 2px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    padding: 16px;
  }

  .spotlight {
    position: absolute;
    width: 300px;
    height: 600px;
    background: conic-gradient(from 180deg, transparent 0deg, rgba(99, 102, 241, 0.1) 30deg, transparent 60deg);
    filter: blur(40px);
    pointer-events: none;
  }

  .animate-float { animation: float 6s ease-in-out infinite; }
  .animate-float-slow { animation: float 8s ease-in-out infinite; }
  .animate-float-fast { animation: float 4s ease-in-out infinite; }
  .animate-bounce-soft { animation: bounceSoft 2s ease-in-out infinite; }
  @keyframes float { 0%, 100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-20px) rotate(2deg); } }
  @keyframes bounceSoft { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
</style>

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">

  <!-- HERO -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden hero-gradient">
    <div class="spotlight -top-20 left-[20%] rotate-[15deg] opacity-60"></div>
    <div class="spotlight -top-20 right-[20%] -rotate-[15deg] opacity-60"></div>

    <div class="float-element top-32 left-[8%] animate-float">
      <div class="flex items-center justify-center w-16 h-16 text-3xl border rounded-2xl bg-gradient-to-br from-brand-indigo/20 to-brand-blue/20 backdrop-blur-sm border-white/10">🏛️</div>
    </div>
    <div class="float-element top-48 right-[12%] animate-float-slow" style="animation-delay: 1s;">
      <div class="flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-blue/20 backdrop-blur-sm border-white/10">🎭</div>
    </div>
    <div class="float-element bottom-40 left-[15%] animate-float-fast" style="animation-delay: 0.5s;">
      <div class="flex items-center justify-center w-12 h-12 text-xl border rounded-xl bg-gradient-to-br from-brand-violet/20 to-brand-indigo/20 backdrop-blur-sm border-white/10">💺</div>
    </div>
    <div class="float-element bottom-32 right-[8%] animate-float" style="animation-delay: 2s;">
      <div class="flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green/20 to-brand-cyan/20 backdrop-blur-sm border-white/10">📍</div>
    </div>

    <div class="relative z-10 max-w-6xl px-6 py-20 mx-auto lg:px-8">
      <div class="text-center">
        <div class="reveal inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-brand-indigo/10 border border-brand-indigo/20 mb-8">
          <div class="flex items-center justify-center w-6 h-6 rounded-lg bg-brand-indigo/30">
            <svg class="w-4 h-4 text-brand-indigo" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <span class="text-sm font-medium text-brand-indigo">Soluția completă pentru locații</span>
        </div>

        <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-[1.05] reveal reveal-delay-1">
          Locația Ta Merită<br>
          <span class="text-gradient">Un Partener Real.</span>
        </h1>

        <p class="max-w-3xl mx-auto mb-8 text-xl leading-relaxed md:text-2xl text-white/60 reveal reveal-delay-2">
          Ai investit totul în locația ta. <strong class="text-white">Ticketing-ul tău ar trebui să fie la înălțimea acestui angajament.</strong> Control complet, zero compromisuri.
        </p>

        <div class="flex flex-wrap justify-center gap-3 mb-12 reveal reveal-delay-3">
          <span class="px-4 py-2 text-sm transition-all border rounded-full cursor-default bg-white/5 border-white/10 text-white/60 hover:bg-brand-indigo/10 hover:border-brand-indigo/20 hover:text-white">🎭 Teatre</span>
          <span class="px-4 py-2 text-sm transition-all border rounded-full cursor-default bg-white/5 border-white/10 text-white/60 hover:bg-brand-blue/10 hover:border-brand-blue/20 hover:text-white">🎵 Săli de Concerte</span>
          <span class="px-4 py-2 text-sm transition-all border rounded-full cursor-default bg-white/5 border-white/10 text-white/60 hover:bg-brand-cyan/10 hover:border-brand-cyan/20 hover:text-white">🏟️ Arene</span>
          <span class="px-4 py-2 text-sm transition-all border rounded-full cursor-default bg-white/5 border-white/10 text-white/60 hover:bg-brand-violet/10 hover:border-brand-violet/20 hover:text-white">🎨 Centre Culturale</span>
          <span class="px-4 py-2 text-sm transition-all border rounded-full cursor-default bg-white/5 border-white/10 text-white/60 hover:bg-brand-green/10 hover:border-brand-green/20 hover:text-white">🍷 Cluburi</span>
        </div>

        <div class="flex flex-wrap justify-center gap-8 mb-12 md:gap-16 reveal reveal-delay-3">
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 100) count++; else clearInterval(interval); }, 15) }, 500)">
            <div class="text-4xl font-bold md:text-5xl font-display text-gradient counter-value"><span x-text="count"></span>%</div>
            <div class="text-sm text-white/50">White-label complet</div>
          </div>
          <div class="hidden w-px h-16 sm:block bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 50) count++; else clearInterval(interval); }, 40) }, 700)">
            <div class="text-4xl font-bold md:text-5xl font-display text-gradient counter-value"><span x-text="count"></span>+</div>
            <div class="text-sm text-white/50">Promotori gestionați</div>
          </div>
          <div class="hidden w-px h-16 sm:block bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 6) count++; else clearInterval(interval); }, 250) }, 900)">
            <div class="text-4xl font-bold md:text-5xl font-display text-gradient counter-value"><span x-text="count"></span></div>
            <div class="text-sm text-white/50">Configurații de layout</div>
          </div>
        </div>

        <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-4">
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="inline-flex items-center justify-center gap-3 px-8 py-4 text-lg font-semibold text-white rounded-full group cta-primary">
            <span>Programează un Demo</span>
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 text-lg font-semibold text-white transition-all border rounded-full bg-white/5 border-white/10 hover:bg-white/10 hover:border-white/20">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            <span>Contactează Vânzări</span>
          </a>
        </div>

        <div class="flex flex-wrap justify-center gap-6 mt-12 reveal">
          <div class="flex items-center gap-2 text-sm text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Implementare asistată</span>
          </div>
          <div class="flex items-center gap-2 text-sm text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Migrare date inclusă</span>
          </div>
          <div class="flex items-center gap-2 text-sm text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Training echipă</span>
          </div>
        </div>
      </div>
    </div>

    <div class="absolute -translate-x-1/2 bottom-8 left-1/2 animate-bounce-soft">
      <div class="flex items-start justify-center w-6 h-10 p-2 border-2 rounded-full border-white/20">
        <div class="w-1.5 h-3 rounded-full bg-white/40 animate-pulse"></div>
      </div>
    </div>
  </section>

  <!-- THE CHALLENGE -->
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-dark-900 via-dark-850 to-dark-900"></div>

    <div class="relative z-10 max-w-5xl px-6 mx-auto lg:px-8">
      <div class="mb-16 text-center reveal">
        <span class="inline-block px-4 py-2 mb-4 text-sm font-medium rounded-full bg-brand-rose/10 text-brand-rose">🎯 Provocarea</span>
        <h2 class="mb-6 text-4xl font-bold text-white font-display md:text-5xl">
          A conduce o locație înseamnă să<br><span class="text-gradient">jonglezi cu totul.</span>
        </h2>
        <p class="max-w-2xl mx-auto text-xl text-white/50">
          Platformele generice te tratează ca pe un client oarecare. Nu înțeleg că <strong class="text-white">locația ta este vedeta</strong>—nu evenimentele care trec prin ea.
        </p>
      </div>

      <div class="grid gap-4 mb-16 md:grid-cols-2 lg:grid-cols-3">
        <div class="p-5 border rounded-2xl bg-dark-800/50 border-white/5 reveal">
          <div class="mb-3 text-2xl">🎨</div>
          <h3 class="mb-1 font-semibold text-white">Identitatea locației</h3>
          <p class="text-sm text-white/50">Nu brandingul unei platforme</p>
        </div>

        <div class="p-5 border rounded-2xl bg-dark-800/50 border-white/5 reveal reveal-delay-1">
          <div class="mb-3 text-2xl">👥</div>
          <h3 class="mb-1 font-semibold text-white">Multipli promotori</h3>
          <p class="text-sm text-white/50">Fără haos și confuzie</p>
        </div>

        <div class="p-5 border rounded-2xl bg-dark-800/50 border-white/5 reveal reveal-delay-2">
          <div class="mb-3 text-2xl">👁️</div>
          <h3 class="mb-1 font-semibold text-white">Vizibilitate completă</h3>
          <p class="text-sm text-white/50">În tot ce se întâmplă</p>
        </div>

        <div class="p-5 border rounded-2xl bg-dark-800/50 border-white/5 reveal">
          <div class="mb-3 text-2xl">🤝</div>
          <h3 class="mb-1 font-semibold text-white">Relații cu clienții</h3>
          <p class="text-sm text-white/50">Protejate și întărite</p>
        </div>

        <div class="p-5 border rounded-2xl bg-dark-800/50 border-white/5 reveal reveal-delay-1">
          <div class="mb-3 text-2xl">📈</div>
          <h3 class="mb-1 font-semibold text-white">Creștere venituri</h3>
          <p class="text-sm text-white/50">Fără muncă suplimentară</p>
        </div>

        <div class="p-5 border rounded-2xl bg-gradient-to-br from-brand-indigo/10 to-brand-blue/5 border-brand-indigo/20 reveal reveal-delay-2">
          <div class="mb-3 text-2xl">✨</div>
          <h3 class="mb-1 font-semibold text-white">Tixello livrează</h3>
          <p class="text-sm font-medium text-brand-indigo">Toate acestea și mai mult</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES BENTO -->
  <section class="relative py-32 overflow-hidden bg-dark-850">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-gradient-to-b from-brand-indigo/10 to-transparent rounded-full blur-[150px] pointer-events-none"></div>

    <div class="relative z-10 px-6 mx-auto max-w-7xl lg:px-8">
      <div class="mb-20 text-center reveal">
        <span class="inline-block px-4 py-2 mb-4 text-sm font-medium rounded-full bg-brand-indigo/10 text-brand-indigo">🏛️ Construit pentru Locații</span>
        <h2 class="mb-6 text-4xl font-bold text-white font-display md:text-6xl">
          Funcționalități care<br><span class="text-gradient">înțeleg nevoile tale.</span>
        </h2>
      </div>

      <div class="grid gap-6 lg:grid-cols-3">

        <!-- White Label -->
        <div class="p-8 glow-card lg:col-span-2" style="--glow-color: rgba(99, 102, 241, 0.15); --border-color: rgba(99, 102, 241, 0.3);">
          <div class="grid items-center gap-8 md:grid-cols-2">
            <div>
              <div class="mb-6 feature-icon bg-gradient-to-br from-brand-indigo to-brand-violet">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
              </div>
              <h3 class="mb-3 text-2xl font-bold text-white font-display">Brandul Tău, Domeniul Tău</h3>
              <p class="mb-4 text-white/50">Când cineva cumpără un bilet, își amintește de locația ta—nu de un site de ticketing.</p>
              <ul class="space-y-2">
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-indigo" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>numelocatieita.ro</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-indigo" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Email-uri și bilete cu brand propriu</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-indigo" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Datele clienților rămân ale tale</li>
              </ul>
            </div>
            <div>
              <div class="p-4 dashboard-mockup">
                <div class="flex items-center gap-2 mb-4">
                  <div class="flex items-center justify-center w-8 h-8 text-sm font-bold text-white rounded-lg bg-brand-indigo">TN</div>
                  <div>
                    <div class="text-sm font-medium text-white">Teatrul Național</div>
                    <div class="text-xs text-white/40">teatrul-national.ro</div>
                  </div>
                </div>
                <div class="flex items-center justify-center h-24 mb-3 rounded-lg bg-gradient-to-br from-brand-indigo/30 to-brand-blue/20">
                  <span class="text-sm text-white/60">Header Personalizat</span>
                </div>
                <div class="grid grid-cols-2 gap-2">
                  <div class="h-16 p-2 border rounded-lg bg-white/5 border-white/10">
                    <div class="mb-1 text-xs text-white/30">Eveniment</div>
                    <div class="w-20 h-2 rounded bg-white/20"></div>
                  </div>
                  <div class="flex items-center justify-center h-16 border rounded-lg bg-brand-indigo/20 border-brand-indigo/30">
                    <span class="text-xs font-medium text-white">Cumpără →</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Multi-Promoter -->
        <div class="p-8 glow-card" style="--glow-color: rgba(6, 182, 212, 0.15); --border-color: rgba(6, 182, 212, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-cyan to-brand-blue">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Multi-Promotor</h3>
          <p class="mb-4 text-white/50">Portaluri separate pentru fiecare partener. Ei gestionează, tu supraveghezi.</p>

          <div class="mt-4 space-y-2">
            <div class="flex items-center justify-between promoter-card">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 text-sm rounded-lg bg-brand-cyan/20">🎵</div>
                <span class="text-sm text-white/80">Jazz Events</span>
              </div>
              <span class="text-xs text-brand-green">Activ</span>
            </div>
            <div class="flex items-center justify-between promoter-card">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 text-sm rounded-lg bg-brand-violet/20">🎭</div>
                <span class="text-sm text-white/80">Teatru Independent</span>
              </div>
              <span class="text-xs text-brand-green">Activ</span>
            </div>
          </div>
        </div>

        <!-- Seating Maps -->
        <div class="p-8 glow-card" style="--glow-color: rgba(124, 58, 237, 0.15); --border-color: rgba(124, 58, 237, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-violet to-brand-indigo">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Hărți de Locuri</h3>
          <p class="mb-4 text-white/50">Constructor vizual cu multiple configurații salvate.</p>

          <div class="p-4 mt-4 rounded-xl bg-dark-900/50">
            <div class="flex items-center justify-center w-full h-6 mb-3 venue-stage">
              <span class="text-xs tracking-wider uppercase text-white/40">Scenă</span>
            </div>
            <div class="flex flex-col items-center gap-1">
              <div class="flex gap-1">
                <div class="seat seat-sold"></div><div class="seat seat-sold"></div><div class="seat seat-sold"></div><div class="seat seat-selected"></div><div class="seat seat-selected"></div><div class="seat seat-sold"></div><div class="seat seat-sold"></div><div class="seat seat-sold"></div>
              </div>
              <div class="flex gap-1">
                <div class="seat seat-sold"></div><div class="seat seat-available"></div><div class="seat seat-available"></div><div class="seat seat-available"></div><div class="seat seat-available"></div><div class="seat seat-available"></div><div class="seat seat-available"></div><div class="seat seat-sold"></div>
              </div>
              <div class="flex gap-1">
                <div class="seat seat-available"></div><div class="seat seat-available"></div><div class="seat seat-blocked"></div><div class="seat seat-available"></div><div class="seat seat-available"></div><div class="seat seat-blocked"></div><div class="seat seat-available"></div><div class="seat seat-available"></div>
              </div>
            </div>
            <div class="flex justify-center gap-4 mt-3 text-[10px]">
              <div class="flex items-center gap-1"><div class="w-2 h-2 rounded-sm bg-brand-indigo"></div><span class="text-white/40">Vândut</span></div>
              <div class="flex items-center gap-1"><div class="w-2 h-2 rounded-sm bg-brand-green"></div><span class="text-white/40">Liber</span></div>
              <div class="flex items-center gap-1"><div class="w-2 h-2 rounded-sm bg-brand-cyan"></div><span class="text-white/40">Selectat</span></div>
            </div>
          </div>
        </div>

        <!-- Box Office -->
        <div class="p-8 glow-card lg:col-span-2" style="--glow-color: rgba(16, 185, 129, 0.15); --border-color: rgba(16, 185, 129, 0.3);">
          <div class="grid items-center gap-8 md:grid-cols-2">
            <div>
              <div class="mb-6 feature-icon bg-gradient-to-br from-brand-green to-brand-cyan">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
              </div>
              <h3 class="mb-3 text-2xl font-bold text-white font-display">Box Office 2025</h3>
              <p class="mb-4 text-white/50">Vânzările walk-up contează. Tabletele devin terminale profesionale cu inventar unificat.</p>

              <div class="grid grid-cols-3 gap-2 mt-6">
                <div class="p-2 text-center rounded-lg bg-dark-800/50"><div class="text-lg font-bold text-brand-green">💳</div><div class="text-xs text-white/40">Card</div></div>
                <div class="p-2 text-center rounded-lg bg-dark-800/50"><div class="text-lg font-bold text-brand-green">💵</div><div class="text-xs text-white/40">Cash</div></div>
                <div class="p-2 text-center rounded-lg bg-dark-800/50"><div class="text-lg font-bold text-brand-green">📱</div><div class="text-xs text-white/40">Mobile</div></div>
              </div>
            </div>
            <div>
              <div class="pos-terminal">
                <div class="flex items-center justify-between mb-4">
                  <span class="font-medium text-white">Box Office</span>
                  <span class="px-2 py-1 text-xs rounded-full bg-brand-green/10 text-brand-green">Online</span>
                </div>
                <div class="mb-4 space-y-2">
                  <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800"><span class="text-sm text-white/70">Concert Jazz - VIP</span><span class="font-medium text-white">x2</span></div>
                  <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800"><span class="text-sm text-white/70">Parcare</span><span class="font-medium text-white">x1</span></div>
                </div>
                <div class="flex items-center justify-between pt-3 border-t border-white/10">
                  <span class="font-medium text-white">Total</span>
                  <span class="text-2xl font-bold font-display text-brand-green">389 RON</span>
                </div>
                <div class="grid grid-cols-2 gap-2 mt-4">
                  <button class="p-3 text-sm rounded-lg bg-white/5 text-white/60">Card</button>
                  <button class="p-3 text-sm font-medium text-white rounded-lg bg-brand-green">Încasează</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Analytics -->
        <div class="p-8 glow-card" style="--glow-color: rgba(59, 130, 246, 0.15); --border-color: rgba(59, 130, 246, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-blue to-brand-sky">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Vizibilitate Totală</h3>
          <p class="mb-4 text-white/50">Dashboard-uri cross-eveniment, performanța promotorilor, analize prezență.</p>

          <div class="p-3 mt-4 bg-dark-900/50 rounded-xl">
            <div class="flex items-center justify-between mb-2">
              <span class="text-xs text-white/50">Această lună</span>
              <span class="text-xs font-medium text-brand-blue">+18%</span>
            </div>
            <div class="flex items-end h-16 gap-1">
              <div class="flex-1 rounded-t chart-bar bg-brand-blue/50" style="height: 50%;"></div>
              <div class="flex-1 rounded-t chart-bar bg-brand-blue/60" style="height: 70%;"></div>
              <div class="flex-1 rounded-t chart-bar bg-brand-blue/70" style="height: 55%;"></div>
              <div class="flex-1 rounded-t chart-bar bg-brand-blue/80" style="height: 85%;"></div>
              <div class="flex-1 rounded-t chart-bar bg-brand-blue" style="height: 100%;"></div>
            </div>
          </div>
        </div>

        <!-- Revenue Split -->
        <div class="p-8 glow-card" style="--glow-color: rgba(245, 158, 11, 0.15); --border-color: rgba(245, 158, 11, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-amber to-brand-orange">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Partajare Venituri</h3>
          <p class="mb-4 text-white/50">Configurare automată, calcule transparente. Fără dispute.</p>

          <div class="mt-4 space-y-3">
            <div>
              <div class="flex items-center justify-between mb-1 text-sm"><span class="text-white/70">Locație</span><span class="font-medium text-brand-amber">30%</span></div>
              <div class="revenue-bar"><div class="revenue-fill bg-gradient-to-r from-brand-amber to-brand-orange" style="width: 30%;"></div></div>
            </div>
            <div>
              <div class="flex items-center justify-between mb-1 text-sm"><span class="text-white/70">Promotor</span><span class="font-medium text-brand-violet">70%</span></div>
              <div class="revenue-bar"><div class="revenue-fill bg-gradient-to-r from-brand-violet to-brand-indigo" style="width: 70%;"></div></div>
            </div>
          </div>
        </div>

        <!-- Permissions -->
        <div class="p-8 glow-card" style="--glow-color: rgba(244, 63, 94, 0.15); --border-color: rgba(244, 63, 94, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-rose to-brand-orange">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Control Permisiuni</h3>
          <p class="mb-4 text-white/50">Fiecare rol primește exact accesul de care are nevoie.</p>

          <div class="mt-4 space-y-2">
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-sm text-white/70">📊 Marketing</span><span class="text-xs text-white/40">Rapoarte</span></div>
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-sm text-white/70">🎫 Box Office</span><span class="text-xs text-white/40">Vânzări</span></div>
            <div class="flex items-center justify-between p-2 rounded-lg bg-dark-800/50"><span class="text-sm text-white/70">🚪 Staff Ușă</span><span class="text-xs text-white/40">Scanare</span></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="relative py-32 overflow-hidden bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="mb-16 text-center reveal">
        <span class="inline-block px-4 py-2 mb-4 text-sm font-medium rounded-full bg-brand-indigo/10 text-brand-indigo">💬 Testimoniale</span>
        <h2 class="text-4xl font-bold text-white font-display md:text-5xl">Ce spun proprietarii de locații</h2>
      </div>

      <div class="grid gap-6 md:grid-cols-3">
        <div class="testimonial-card reveal">
          <p class="relative z-10 mb-6 text-lg leading-relaxed text-white/70">"Înainte de Tixello, foloseam trei sisteme diferite și tot alergam după promotori pentru rapoarte. <strong class="text-white">Acum totul rulează printr-o singură platformă.</strong>"</p>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 text-lg text-white rounded-full bg-gradient-to-br from-brand-indigo to-brand-blue">🎭</div>
            <div><div class="font-medium text-white">Alexandru M.</div><div class="text-sm text-white/40">Manager Teatru, București</div></div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-1">
          <p class="relative z-10 mb-6 text-lg leading-relaxed text-white/70">"Sistemul de hărți de locuri înțelege într-adevăr spațiul nostru. <strong class="text-white">Avem șase configurații diferite</strong> și putem comuta între ele instant."</p>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 text-lg text-white rounded-full bg-gradient-to-br from-brand-cyan to-brand-blue">🎵</div>
            <div><div class="font-medium text-white">Maria V.</div><div class="text-sm text-white/40">Director Operațiuni, Sală de Concerte</div></div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-2">
          <p class="relative z-10 mb-6 text-lg leading-relaxed text-white/70">"Promotorii noștri adoră să aibă propriul portal. Se simt independenți, <strong class="text-white">dar noi menținem controlul.</strong> Este echilibrul perfect."</p>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 text-lg text-white rounded-full bg-gradient-to-br from-brand-violet to-brand-indigo">🎨</div>
            <div><div class="font-medium text-white">Cristian P.</div><div class="text-sm text-white/40">Proprietar, Centru de Arte Multi-Spațiu</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="relative py-32 overflow-hidden">
    <div class="max-w-3xl px-6 mx-auto lg:px-8">
      <div class="mb-16 text-center reveal">
        <h2 class="mb-4 text-4xl font-bold text-white font-display md:text-5xl">Implementare <span class="text-gradient">fără stress</span></h2>
        <p class="text-lg text-white/50">Te ghidăm la fiecare pas.</p>
      </div>

      <div class="space-y-8">
        <div class="flex gap-6 timeline-step reveal">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white rounded-2xl bg-gradient-to-br from-brand-indigo to-brand-violet font-display">1</div>
          <div class="flex-1 pt-2"><h3 class="mb-1 text-lg font-semibold text-white">Îți cartografiem locația</h3><p class="text-white/50">Echipa noastră construiește hărțile de locuri și configurațiile cu precizie.</p></div>
        </div>

        <div class="flex gap-6 timeline-step reveal reveal-delay-1">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white rounded-2xl bg-gradient-to-br from-brand-violet to-brand-blue font-display">2</div>
          <div class="flex-1 pt-2"><h3 class="mb-1 text-lg font-semibold text-white">Îți migrăm datele</h3><p class="text-white/50">Istoricul clienților din sistemele anterioare se transferă perfect.</p></div>
        </div>

        <div class="flex gap-6 timeline-step reveal reveal-delay-2">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white rounded-2xl bg-gradient-to-br from-brand-blue to-brand-cyan font-display">3</div>
          <div class="flex-1 pt-2"><h3 class="mb-1 text-lg font-semibold text-white">Îți antrenăm echipa</h3><p class="text-white/50">Staff-ul, promotorii și box office-ul se pun la curent rapid.</p></div>
        </div>

        <div class="flex gap-6 timeline-step reveal reveal-delay-3">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white rounded-2xl bg-gradient-to-br from-brand-cyan to-brand-green font-display">4</div>
          <div class="flex-1 pt-2"><h3 class="mb-1 text-lg font-semibold text-white">Mergi live! 🚀</h3><p class="text-white/50">Lansare cu suport complet la dispoziție.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0">
      <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-brand-indigo/20 rounded-full blur-[150px]"></div>
      <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-brand-cyan/20 rounded-full blur-[150px]"></div>
    </div>

    <div class="relative z-10 max-w-4xl px-6 mx-auto text-center lg:px-8">
      <div class="reveal">
        <div class="mb-6 text-6xl">🏛️</div>
        <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl">Locația ta este unică.<br><span class="text-gradient">Ticketing-ul tău la fel.</span></h2>
        <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60">Platformele generice te forțează în tiparul lor. <strong class="text-white">Tixello se adaptează la modul în care operezi efectiv.</strong></p>

        <div class="flex flex-col justify-center gap-4 mb-8 sm:flex-row">
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="inline-flex items-center justify-center gap-3 px-10 py-5 text-lg font-semibold text-white rounded-full group cta-primary">
            <span>Programează un Demo</span>
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-5 text-lg font-semibold text-white transition-all border rounded-full bg-white/10 border-white/20 hover:bg-white/20">Contactează Vânzări</a>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Demo personalizat</span></div>
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Implementare asistată</span></div>
          <div class="flex items-center gap-2 text-white/40"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>Suport dedicat</span></div>
        </div>

        <p class="mt-12 text-sm text-white/30">Tixello alimentează locații de la teatre intime de 100 de locuri<br>la centre de arte performative multi-sală.</p>
      </div>
    </div>
  </section>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Scroll reveal
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('revealed'); });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // Glow card mouse tracking
    document.querySelectorAll('.glow-card').forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        card.style.setProperty('--mouse-x', e.clientX - rect.left + 'px');
        card.style.setProperty('--mouse-y', e.clientY - rect.top + 'px');
      });
    });

    // Floating elements parallax
    document.addEventListener('mousemove', (e) => {
      document.querySelectorAll('.float-element').forEach((el, i) => {
        const speed = (i + 1) * 10;
        el.style.transform = `translate(${(e.clientX / window.innerWidth - 0.5) * speed}px, ${(e.clientY / window.innerHeight - 0.5) * speed}px)`;
      });
    });
  });
</script>

<?php get_footer(); ?>
