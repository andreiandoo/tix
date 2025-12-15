<?php
/**
 * Template Name: Despre Noi
 * Description: About us page - Company story, values, team and mission
 */
get_header();
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  @font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }
  ::selection { background: #7c3aed; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }
  .text-gradient-warm { background: linear-gradient(135deg, #f59e0b 0%, #f43f5e 50%, #f59e0b 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }
  .text-gradient-trust { background: linear-gradient(135deg, #10b981 0%, #06b6d4 50%, #10b981 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }

  .hero-gradient {
    background: radial-gradient(ellipse 80% 50% at 50% -20%, rgba(124, 58, 237, 0.3), transparent),
                radial-gradient(ellipse 60% 40% at 80% 60%, rgba(6, 182, 212, 0.2), transparent),
                radial-gradient(ellipse 50% 30% at 20% 80%, rgba(245, 158, 11, 0.15), transparent);
  }

  .gradient-border {
    position: relative;
    background: linear-gradient(var(--dark-800), var(--dark-800)) padding-box,
                linear-gradient(135deg, #7c3aed, #06b6d4, #f59e0b, #7c3aed) border-box;
    background-size: 100% 100%, 300% 300%;
    border: 2px solid transparent;
    animation: gradientShift 6s ease infinite;
  }

  .value-card {
    position: relative;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 24px;
    padding: 32px;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    overflow: hidden;
  }
  .value-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), var(--card-glow, rgba(124, 58, 237, 0.15)), transparent 50%);
    opacity: 0;
    transition: opacity 0.5s;
    border-radius: inherit;
  }
  .value-card:hover::before { opacity: 1; }
  .value-card:hover {
    transform: translateY(-8px);
    border-color: var(--card-border, rgba(124, 58, 237, 0.3));
    box-shadow: 0 20px 40px -20px var(--card-shadow, rgba(124, 58, 237, 0.3));
  }

  .team-card {
    position: relative;
    overflow: hidden;
    border-radius: 24px;
    background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));
    border: 1px solid rgba(255,255,255,0.05);
    transition: all 0.4s;
  }
  .team-card:hover {
    transform: translateY(-8px) scale(1.02);
    border-color: rgba(124, 58, 237, 0.3);
  }

  .stat-card {
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 20px;
    padding: 32px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .stat-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--stat-color, #7c3aed), transparent);
  }

  .quote-mark {
    font-family: 'Georgia', serif;
    font-size: 120px;
    line-height: 1;
    color: rgba(124, 58, 237, 0.1);
    position: absolute;
    top: -20px;
    left: 20px;
  }

  .belief-card {
    background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(6, 182, 212, 0.05));
    border: 1px solid rgba(124, 58, 237, 0.2);
    border-radius: 16px;
    padding: 24px;
    transition: all 0.3s;
  }
  .belief-card:hover {
    border-color: rgba(124, 58, 237, 0.4);
    transform: translateX(8px);
  }

  .contact-card {
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 16px;
    padding: 24px;
    transition: all 0.3s;
    text-align: center;
  }
  .contact-card:hover {
    background: rgba(255,255,255,0.05);
    border-color: var(--contact-color, rgba(124, 58, 237, 0.5));
    transform: translateY(-4px);
  }

  .floating-shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
    pointer-events: none;
  }

  #scroll-progress {
    background: linear-gradient(90deg, #7c3aed, #06b6d4, #f59e0b);
  }

  .cursor-glow {
    position: fixed;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(124, 58, 237, 0.1) 0%, transparent 70%);
    pointer-events: none;
    z-index: 0;
    transform: translate(-50%, -50%);
    transition: opacity 0.3s;
  }

  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }

  @keyframes gradientShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
  }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden" x-data="{ mobileMenu: false }">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress"></div>

  <!-- Cursor glow effect -->
  <div class="cursor-glow hidden lg:block" id="cursor-glow"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden hero-gradient">
    <!-- Floating shapes -->
    <div class="floating-shape w-[600px] h-[600px] bg-brand-violet/20 -top-40 -right-40 animate-float-slow"></div>
    <div class="floating-shape w-[400px] h-[400px] bg-brand-cyan/15 bottom-20 -left-20 animate-float-slow" style="animation-delay: 2s;"></div>
    <div class="floating-shape w-[300px] h-[300px] bg-brand-amber/10 top-1/2 right-1/4 animate-float" style="animation-delay: 4s;"></div>

    <!-- Decorative elements -->
    <div class="absolute top-32 left-16 opacity-20">
      <svg class="w-24 h-24 text-brand-violet animate-rotate-slow" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="0.5">
        <circle cx="50" cy="50" r="45" stroke-dasharray="4 4"/>
        <circle cx="50" cy="50" r="35" stroke-dasharray="2 6"/>
        <circle cx="50" cy="50" r="25"/>
      </svg>
    </div>
    <div class="absolute bottom-32 right-16 opacity-10">
      <svg class="w-32 h-32 text-brand-cyan animate-rotate-slow" style="animation-direction: reverse;" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="0.5">
        <polygon points="50,5 95,27.5 95,72.5 50,95 5,72.5 5,27.5" stroke-dasharray="8 4"/>
      </svg>
    </div>

    <div class="max-w-5xl mx-auto px-6 lg:px-8 py-20 text-center relative z-10">
      <!-- Eyebrow -->
      <div class="reveal inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-white/5 border border-white/10 mb-8 backdrop-blur-sm">
        <span class="w-2 h-2 rounded-full bg-brand-violet animate-pulse"></span>
        <span class="text-white/70 text-sm font-medium">Povestea Noastră</span>
      </div>

      <!-- Main Heading -->
      <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-8 leading-[1.05] reveal reveal-delay-1">
        Construim Viitorul<br>
        <span class="text-gradient">Ticketing-ului</span>
      </h1>

      <!-- Subheading -->
      <p class="text-xl md:text-2xl text-white/60 max-w-3xl mx-auto mb-12 leading-relaxed reveal reveal-delay-2">
        Am început cu o observație simplă: organizatorii de evenimente
        <span class="text-white font-medium">merită instrumente mai bune</span>.
        Și am construit platforma pe care ne-am fi dorit să existe.
      </p>

      <!-- Scroll indicator -->
      <div class="reveal reveal-delay-3">
        <a href="#story" class="inline-flex flex-col items-center gap-2 text-white/40 hover:text-white/70 transition-colors">
          <span class="text-sm">Descoperă povestea</span>
          <svg class="w-6 h-6 animate-wave" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ==================== ORIGIN STORY ==================== -->
  <section class="py-32 relative overflow-hidden" id="story">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-brand-rose text-sm font-medium uppercase tracking-widest">Originea</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6 leading-tight">
            Născuți din<br><span class="text-gradient-warm">frustrare</span>
          </h2>
          <div class="space-y-6 text-lg text-white/60 leading-relaxed">
            <p>
              Fondatorii noștri au petrecut ani în industria evenimentelor—organizând festivaluri, gestionând locații, promovând concerte. Au experimentat direct <strong class="text-white">limitările platformelor existente</strong>.
            </p>
            <p>
              Comisioanele astronomice care mâncau marjele deja subțiri. Datele clienților care dispăreau în bazele de date ale platformelor. Sistemele rigide care nu se puteau adapta la cum funcționează evenimentele în realitate.
            </p>
            <p class="text-white font-medium">
              În 2020, am început să construim platforma pe care ne-am fi dorit să existe.
            </p>
          </div>
        </div>

        <!-- Visual - Quote Card -->
        <div class="reveal reveal-delay-1">
          <div class="relative">
            <div class="gradient-border rounded-3xl p-8 md:p-10 bg-dark-800/50 backdrop-blur-sm" style="--dark-800: #13131c;">
              <span class="quote-mark">"</span>
              <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed relative z-10">
                O soluție de ticketing proiectată de oameni care
                <span class="text-gradient font-medium">înțeleg evenimentele</span>,
                pentru oameni care le creează.
              </blockquote>
            </div>

            <!-- Floating badge -->
            <div class="absolute -bottom-6 -right-6 bg-dark-800 rounded-2xl px-6 py-4 border border-brand-violet/30 shadow-xl animate-float">
              <div class="flex items-center gap-3">
                <span class="text-3xl">🎯</span>
                <div>
                  <div class="text-brand-violet font-semibold">2020</div>
                  <div class="text-white/50 text-sm">Anul începutului</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== STATS ==================== -->
  <section class="py-24 relative">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Stat 1 -->
        <div class="stat-card reveal" style="--stat-color: #7c3aed;" x-data="{ count: 0 }" x-intersect="$el.classList.contains('counted') || (count = 0, $el.classList.add('counted'), setInterval(() => count < 5000 && (count += 100), 20))">
          <div class="text-4xl md:text-5xl font-display font-bold text-gradient mb-2" x-text="count.toLocaleString() + '+'">5,000+</div>
          <div class="text-white/50">Evenimente alimentate</div>
        </div>

        <!-- Stat 2 -->
        <div class="stat-card reveal reveal-delay-1" style="--stat-color: #06b6d4;" x-data="{ count: 0 }" x-intersect="$el.classList.contains('counted') || (count = 0, $el.classList.add('counted'), setInterval(() => count < 2 && (count += 0.1), 50))">
          <div class="text-4xl md:text-5xl font-display font-bold text-gradient mb-2"><span x-text="count.toFixed(1)">2.0</span>M+</div>
          <div class="text-white/50">Bilete procesate</div>
        </div>

        <!-- Stat 3 -->
        <div class="stat-card reveal reveal-delay-2" style="--stat-color: #10b981;" x-data="{ count: 0 }" x-intersect="$el.classList.contains('counted') || (count = 0, $el.classList.add('counted'), setInterval(() => count < 15 && (count += 1), 100))">
          <div class="text-4xl md:text-5xl font-display font-bold text-gradient-trust mb-2" x-text="count">15</div>
          <div class="text-white/50">Țări deservite</div>
        </div>

        <!-- Stat 4 -->
        <div class="stat-card reveal reveal-delay-3" style="--stat-color: #f59e0b;" x-data="{ count: 0 }" x-intersect="$el.classList.contains('counted') || (count = 0, $el.classList.add('counted'), setInterval(() => count < 99 && (count += 2), 30))">
          <div class="text-4xl md:text-5xl font-display font-bold text-gradient-warm mb-2"><span x-text="count">99</span>%</div>
          <div class="text-white/50">Uptime garantat</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== BELIEFS ==================== -->
  <section class="py-32 bg-dark-850 relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-5">
      <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
        <defs>
          <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid)"/>
      </svg>
    </div>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 relative">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-20 reveal">
        <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest">Filozofia Noastră</span>
        <h2 class="font-display text-4xl md:text-6xl font-bold text-white mt-4 mb-6">În ce <span class="text-gradient">credem</span></h2>
        <p class="text-xl text-white/60">Principiile care ne ghidează în tot ce construim</p>
      </div>

      <!-- Beliefs Grid -->
      <div class="grid md:grid-cols-2 gap-6">
        <!-- Belief 1 -->
        <div class="belief-card reveal">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2">Evenimentele Merită Tehnologie Mai Bună</h3>
              <p class="text-white/50">Industria evenimentelor funcționează pe pasiune și muncă grea. Tehnologia ar trebui să fie la înălțimea acestei dedicări.</p>
            </div>
          </div>
        </div>

        <!-- Belief 2 -->
        <div class="belief-card reveal reveal-delay-1">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2">Clienții Tăi Sunt CLIENȚII TĂI</h3>
              <p class="text-white/50">Tu ar trebui să deții relația cu audiența ta. Acces la date, comunicare directă, brand fără interferențe.</p>
            </div>
          </div>
        </div>

        <!-- Belief 3 -->
        <div class="belief-card reveal reveal-delay-2">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2">Prețuri Corecte și Transparente</h3>
              <p class="text-white/50">Fără taxe ascunse, fără surprize. Știi exact ce plătești înainte să te angajezi.</p>
            </div>
          </div>
        </div>

        <!-- Belief 4 -->
        <div class="belief-card reveal reveal-delay-3">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2">Flexibilitatea Bate Rigiditatea</h3>
              <p class="text-white/50">Nu există două evenimente la fel. Platforma ta ar trebui să se adapteze nevoilor tale.</p>
            </div>
          </div>
        </div>

        <!-- Belief 5 - Full Width -->
        <div class="belief-card md:col-span-2 reveal reveal-delay-4">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2">Tehnologia Ar Trebui Să Împuternicească, Nu Să Complice</h3>
              <p class="text-white/50">Funcționalitățile puternice nu înseamnă nimic dacă sunt imposibil de folosit. Suntem obsedați de experiența utilizatorului, făcând capabilități complexe accesibile tuturor. Nu ar trebui să ai nevoie de background tehnic pentru ticketing profesional.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== VALUES ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-20 reveal">
        <span class="text-brand-green text-sm font-medium uppercase tracking-widest">Valorile Noastre</span>
        <h2 class="font-display text-4xl md:text-6xl font-bold text-white mt-4 mb-6">Ce ne <span class="text-gradient-trust">definește</span></h2>
      </div>

      <!-- Values Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Value 1: Transparență -->
        <div class="value-card reveal" style="--card-glow: rgba(124, 58, 237, 0.15); --card-border: rgba(124, 58, 237, 0.3); --card-shadow: rgba(124, 58, 237, 0.3);">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-violet to-brand-violet/50 flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
          </div>
          <h3 class="text-2xl font-semibold text-white mb-3">Transparență</h3>
          <p class="text-white/50 leading-relaxed">Fără taxe ascunse. Fără termeni îngropați. Fără surprize. Comunicăm clar și onest, chiar și când mesajul e dificil.</p>
        </div>

        <!-- Value 2: Fiabilitate -->
        <div class="value-card reveal reveal-delay-1" style="--card-glow: rgba(6, 182, 212, 0.15); --card-border: rgba(6, 182, 212, 0.3); --card-shadow: rgba(6, 182, 212, 0.3);">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-cyan to-brand-cyan/50 flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-2xl font-semibold text-white mb-3">Fiabilitate</h3>
          <p class="text-white/50 leading-relaxed">Evenimentele nu pot eșua. Când ușile se deschid, totul trebuie să funcționeze. Construim sisteme redundante și testăm obsesiv.</p>
        </div>

        <!-- Value 3: Inovație -->
        <div class="value-card reveal reveal-delay-2" style="--card-glow: rgba(245, 158, 11, 0.15); --card-border: rgba(245, 158, 11, 0.3); --card-shadow: rgba(245, 158, 11, 0.3);">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-amber to-brand-amber/50 flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="text-2xl font-semibold text-white mb-3">Inovație</h3>
          <p class="text-white/50 leading-relaxed">Industria evenimentelor evoluează constant. Stăm în față ascultând organizatorii și îmbunătățind continuu platforma.</p>
        </div>

        <!-- Value 4: Suport -->
        <div class="value-card reveal reveal-delay-3" style="--card-glow: rgba(16, 185, 129, 0.15); --card-border: rgba(16, 185, 129, 0.3); --card-shadow: rgba(16, 185, 129, 0.3);">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-green to-brand-green/50 flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
          </div>
          <h3 class="text-2xl font-semibold text-white mb-3">Suport</h3>
          <p class="text-white/50 leading-relaxed">Întrebările primesc răspunsuri. Problemele sunt rezolvate. Oameni reali răspund la probleme reale. Suntem în asta împreună.</p>
        </div>

        <!-- Value 5: Respect -->
        <div class="value-card md:col-span-2 lg:col-span-2 reveal reveal-delay-4" style="--card-glow: rgba(244, 63, 94, 0.15); --card-border: rgba(244, 63, 94, 0.3); --card-shadow: rgba(244, 63, 94, 0.3);">
          <div class="flex flex-col md:flex-row md:items-center gap-6">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-rose to-brand-rose/50 flex items-center justify-center flex-shrink-0">
              <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            </div>
            <div>
              <h3 class="text-2xl font-semibold text-white mb-3">Respect</h3>
              <p class="text-white/50 leading-relaxed">Pentru organizatorii care construiesc afaceri. Pentru artiștii care creează artă. Pentru fanii care caută experiențe. Pentru toți cei care lucrează să aducă oamenii împreună.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TEAM ==================== -->
  <section class="py-32 bg-dark-850 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-20 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest">Echipa</span>
        <h2 class="font-display text-4xl md:text-6xl font-bold text-white mt-4 mb-6">Oamenii din <span class="text-gradient">spatele scenei</span></h2>
        <p class="text-xl text-white/60">Experiență în industria evenimentelor combinată cu excelență tehnică</p>
      </div>

      <!-- Team Description -->
      <div class="grid lg:grid-cols-2 gap-12 mb-16">
        <!-- Industry Experience -->
        <div class="team-card p-8 reveal">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber to-brand-rose flex items-center justify-center">
              <span class="text-2xl">🎪</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white">Experiență în Evenimente</h3>
              <p class="text-white/50 text-sm">De la workshop-uri la festivaluri</p>
            </div>
          </div>
          <p class="text-white/60 leading-relaxed">
            Leadership-ul nostru a organizat evenimente de la workshop-uri de 50 de persoane la festivaluri de 50.000 de persoane. Am gestionat locații, am condus box office-uri, am stat la porțile festivalurilor la 3 dimineața depanând probleme de scanare. <strong class="text-white">Știm cum e pentru că am trăit-o.</strong>
          </p>
        </div>

        <!-- Tech Excellence -->
        <div class="team-card p-8 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center">
              <span class="text-2xl">⚡</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white">Excelență Tehnică</h3>
              <p class="text-white/50 text-sm">Din companii tech de top</p>
            </div>
          </div>
          <p class="text-white/60 leading-relaxed">
            Echipa noastră de inginerie aduce experiență de la companii de tehnologie de top. Au construit sisteme care scalează, au proiectat interfețe pe care utilizatorii le adoră și au creat <strong class="text-white">infrastructură care nu doarme niciodată.</strong>
          </p>
        </div>
      </div>

      <!-- Team Quote -->
      <div class="text-center reveal reveal-delay-2">
        <div class="inline-block gradient-border rounded-2xl px-8 py-6 bg-dark-800/50" style="--dark-800: #13131c;">
          <p class="text-xl md:text-2xl text-white font-light">
            Împreună, creăm platforma de ticketing pe care <span class="text-gradient font-medium">am fi vrut întotdeauna să o folosim.</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== COMMITMENT ==================== -->
  <section class="py-32 relative overflow-hidden">
    <!-- Gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-brand-violet/5 via-transparent to-brand-cyan/5"></div>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 relative">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-20 reveal">
        <span class="text-brand-rose text-sm font-medium uppercase tracking-widest">Angajament</span>
        <h2 class="font-display text-4xl md:text-6xl font-bold text-white mt-4 mb-6">Promisiunile <span class="text-gradient-warm">noastre</span></h2>
      </div>

      <!-- Commitments Grid -->
      <div class="grid md:grid-cols-3 gap-8">
        <!-- To Organizers -->
        <div class="text-center reveal">
          <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-brand-violet to-brand-violet/50 flex items-center justify-center mx-auto mb-6 animate-float">
            <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-4">Către Organizatori</h3>
          <p class="text-white/50 leading-relaxed">
            Vom continua să construim instrumente care îți fac munca mai ușoară. Prețuri corecte, platformă fiabilă, evoluție bazată pe nevoile tale.
          </p>
        </div>

        <!-- To Attendees -->
        <div class="text-center reveal reveal-delay-1">
          <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-brand-cyan to-brand-cyan/50 flex items-center justify-center mx-auto mb-6 animate-float" style="animation-delay: 0.5s;">
            <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-4">Către Participanți</h3>
          <p class="text-white/50 leading-relaxed">
            Cumpărare simplă și sigură. Bilete livrate fiabil. Date protejate și confidențialitate respectată.
          </p>
        </div>

        <!-- To Industry -->
        <div class="text-center reveal reveal-delay-2">
          <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-brand-green to-brand-green/50 flex items-center justify-center mx-auto mb-6 animate-float" style="animation-delay: 1s;">
            <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-4">Către Industrie</h3>
          <p class="text-white/50 leading-relaxed">
            Vom ridica standardul. Vom demonstra că platformele de ticketing pot fi parteneri corecți, nu intermediari extractivi.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CONTACT ==================== -->
  <section class="py-32 bg-dark-850 relative">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest">Contact</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Hai să <span class="text-gradient">vorbim</span></h2>
        <p class="text-lg text-white/60">Suntem aici pentru orice întrebare ai avea</p>
      </div>

      <!-- Contact Cards -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
        <!-- General -->
        <a href="mailto:hello@tixello.com" class="contact-card reveal" style="--contact-color: rgba(124, 58, 237, 0.5);">
          <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center mx-auto mb-4">
            <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </div>
          <h4 class="text-white font-medium mb-1">Întrebări Generale</h4>
          <p class="text-brand-violet text-sm">hello@tixello.com</p>
        </a>

        <!-- Sales -->
        <a href="mailto:sales@tixello.com" class="contact-card reveal reveal-delay-1" style="--contact-color: rgba(16, 185, 129, 0.5);">
          <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center mx-auto mb-4">
            <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h4 class="text-white font-medium mb-1">Vânzări</h4>
          <p class="text-brand-green text-sm">sales@tixello.com</p>
        </a>

        <!-- Support -->
        <a href="mailto:support@tixello.com" class="contact-card reveal reveal-delay-2" style="--contact-color: rgba(6, 182, 212, 0.5);">
          <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center mx-auto mb-4">
            <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
          </div>
          <h4 class="text-white font-medium mb-1">Suport</h4>
          <p class="text-brand-cyan text-sm">support@tixello.com</p>
        </a>

        <!-- Press -->
        <a href="mailto:press@tixello.com" class="contact-card reveal reveal-delay-3" style="--contact-color: rgba(245, 158, 11, 0.5);">
          <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center mx-auto mb-4">
            <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
          </div>
          <h4 class="text-white font-medium mb-1">Presă</h4>
          <p class="text-brand-amber text-sm">press@tixello.com</p>
        </a>
      </div>

      <!-- Location Note -->
      <div class="text-center reveal">
        <div class="inline-flex items-center gap-3 px-6 py-4 rounded-2xl bg-white/5 border border-white/10">
          <svg class="w-5 h-5 text-white/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span class="text-white/60">Sediul în <strong class="text-white">Europa</strong> • Echipă în mai multe țări • Suport în mai multe limbi</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-violet/20 via-transparent to-brand-cyan/20"></div>
    <div class="absolute w-[1000px] h-[1000px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[200px] pointer-events-none" style="background: radial-gradient(circle, rgba(124,58,237,0.3) 0%, rgba(6,182,212,0.2) 50%, transparent 100%);"></div>

    <!-- Floating elements -->
    <div class="absolute top-20 left-[10%] text-5xl opacity-30 animate-float">🎫</div>
    <div class="absolute top-40 right-[15%] text-4xl opacity-20 animate-float" style="animation-delay: 1s;">🎪</div>
    <div class="absolute bottom-32 left-[20%] text-3xl opacity-20 animate-float" style="animation-delay: 2s;">🎵</div>
    <div class="absolute bottom-20 right-[10%] text-4xl opacity-30 animate-float" style="animation-delay: 0.5s;">🎭</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">
        Alătură-te<br><span class="text-gradient">călătoriei</span>
      </h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">
        Fie că organizezi primul eveniment sau al o mia, ne-ar plăcea să te ajutăm să reușești.
      </p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-white text-dark-900 hover:bg-white/90 hover:scale-105 transition-all duration-300 shadow-xl">
          Creează Cont Gratuit
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Contactează Echipa
        </a>
      </div>

      <div class="flex flex-wrap justify-center gap-6 mt-12 reveal reveal-delay-3">
        <div class="flex items-center gap-2 text-white/40">
          <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
          <span>Setup gratuit</span>
        </div>
        <div class="flex items-center gap-2 text-white/40">
          <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
          <span>Fără obligații</span>
        </div>
        <div class="flex items-center gap-2 text-white/40">
          <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
          <span>Suport inclus</span>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- JAVASCRIPT -->
<script>
  // Scroll progress
  window.addEventListener('scroll', () => {
    const scrollProgress = document.getElementById('scroll-progress');
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    scrollProgress.style.width = (scrollTop / scrollHeight) * 100 + '%';
  });

  // Reveal animations
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Value cards mouse tracking
  document.querySelectorAll('.value-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
      card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
    });
  });

  // Cursor glow effect
  const cursorGlow = document.getElementById('cursor-glow');
  if (cursorGlow) {
    document.addEventListener('mousemove', (e) => {
      cursorGlow.style.left = e.clientX + 'px';
      cursorGlow.style.top = e.clientY + 'px';
    });
  }
</script>

<?php get_footer(); ?>
