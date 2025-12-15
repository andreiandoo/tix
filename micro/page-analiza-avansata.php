<?php
/**
 * Template Name: Analiza Avansata
 * Description: Landing page for Advanced Analytics - dashboards and insights
 */

get_header();
?>

<style>
  ::selection { background: #3B82F6; color: white; }

  .text-gradient-analytics { background: linear-gradient(135deg, #3B82F6 0%, #06B6D4 50%, #8B5CF6 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(59, 130, 246, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Chart bar */
  .chart-bar {
    background: linear-gradient(180deg, #3B82F6, #06B6D4);
    border-radius: 4px 4px 0 0;
    transform-origin: bottom;
  }

  /* Metric card */
  .metric-card {
    background: rgba(59, 130, 246, 0.1);
    border: 1px solid rgba(59, 130, 246, 0.2);
    border-radius: 16px;
    padding: 20px;
    transition: all 0.3s;
  }
  .metric-card:hover {
    border-color: rgba(59, 130, 246, 0.4);
    transform: translateY(-2px);
  }

  /* Heatmap cell */
  .heatmap-cell {
    border-radius: 4px;
    transition: all 0.3s;
  }
  .heatmap-cell:hover {
    transform: scale(1.1);
    z-index: 10;
  }

  /* Funnel segment */
  .funnel-segment {
    clip-path: polygon(5% 0%, 95% 0%, 100% 100%, 0% 100%);
    transition: all 0.3s;
  }
  .funnel-segment:hover {
    filter: brightness(1.2);
  }

  /* Live indicator */
  .live-dot {
    width: 8px;
    height: 8px;
    background: #10B981;
    border-radius: 50%;
    animation: dotPulse 2s ease-in-out infinite;
  }

  /* Export button */
  .export-btn {
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 500;
    transition: all 0.2s;
  }
  .export-btn:hover {
    transform: translateY(-1px);
  }
  .export-btn.pdf { background: rgba(239, 68, 68, 0.2); color: #F87171; }
  .export-btn.xlsx { background: rgba(16, 185, 129, 0.2); color: #34D399; }
  .export-btn.csv { background: rgba(59, 130, 246, 0.2); color: #60A5FA; }
</style>

<main class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-analytics-primary/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-analytics-secondary/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">📊</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">📈</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">🎯</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-analytics-primary/10 border border-analytics-primary/20 mb-6">
            <svg class="w-5 h-5 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            <span class="text-analytics-primary text-sm font-medium">Business Intelligence</span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Analiza<br><span class="text-gradient-analytics">Avansata</span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            Transforma datele in decizii. <strong class="text-white">Dashboard-uri in timp real</strong>, previziuni ML, harti termice geografice, palnii de conversie.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-analytics-primary text-white hover:bg-analytics-secondary hover:scale-105 hover:shadow-glow-blue transition-all duration-300">
              Exploreaza Dashboard
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#functionalitati" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              Vezi Functionalitati
            </a>
          </div>

          <!-- Quick features -->
          <div class="flex flex-wrap items-center gap-4">
            <div class="flex items-center gap-2">
              <div class="live-dot"></div>
              <span class="text-white/60 text-sm">Real-time</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
              <span class="text-white/60 text-sm">ML Forecasting</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-analytics-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              <span class="text-white/60 text-sm">Export PDF/Excel</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Dashboard Preview -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            revenue: 127450,
            tickets: 2847,
            conversion: 4.2,
            trend: '+23%'
          }">

            <!-- Main Dashboard Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-2xl border border-analytics-primary/20 shadow-2xl overflow-hidden">
              <!-- Header -->
              <div class="px-6 py-4 border-b border-white/10 flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-analytics-primary/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                  </div>
                  <div>
                    <div class="text-white font-semibold">Dashboard Principal</div>
                    <div class="text-white/40 text-xs">Festival Vara 2025</div>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <div class="live-dot"></div>
                  <span class="text-analytics-success text-xs font-medium">LIVE</span>
                </div>
              </div>

              <!-- Metrics Row -->
              <div class="grid grid-cols-3 gap-4 p-4">
                <div class="metric-card text-center">
                  <div class="text-analytics-primary font-bold text-2xl" x-text="revenue.toLocaleString() + ' €'">127,450 €</div>
                  <div class="text-white/40 text-xs">Venituri</div>
                  <div class="text-analytics-success text-xs mt-1">↑ 23%</div>
                </div>
                <div class="metric-card text-center" style="background: rgba(6, 182, 212, 0.1); border-color: rgba(6, 182, 212, 0.2);">
                  <div class="text-analytics-secondary font-bold text-2xl" x-text="tickets.toLocaleString()">2,847</div>
                  <div class="text-white/40 text-xs">Bilete</div>
                  <div class="text-analytics-success text-xs mt-1">↑ 18%</div>
                </div>
                <div class="metric-card text-center" style="background: rgba(139, 92, 246, 0.1); border-color: rgba(139, 92, 246, 0.2);">
                  <div class="text-analytics-accent font-bold text-2xl" x-text="conversion + '%'">4.2%</div>
                  <div class="text-white/40 text-xs">Conversie</div>
                  <div class="text-analytics-success text-xs mt-1">↑ 0.8%</div>
                </div>
              </div>

              <!-- Mini Chart -->
              <div class="px-4 pb-4">
                <div class="bg-dark-900/50 rounded-xl p-4">
                  <div class="flex items-center justify-between mb-3">
                    <span class="text-white/60 text-sm">Vanzari ultimele 7 zile</span>
                    <span class="text-analytics-success text-sm font-medium">+23%</span>
                  </div>
                  <div class="flex items-end gap-2 h-20">
                    <div class="chart-bar flex-1 animate-chart-grow" style="height: 40%;"></div>
                    <div class="chart-bar flex-1 animate-chart-grow" style="height: 55%; animation-delay: 0.1s;"></div>
                    <div class="chart-bar flex-1 animate-chart-grow" style="height: 45%; animation-delay: 0.2s;"></div>
                    <div class="chart-bar flex-1 animate-chart-grow" style="height: 70%; animation-delay: 0.3s;"></div>
                    <div class="chart-bar flex-1 animate-chart-grow" style="height: 65%; animation-delay: 0.4s;"></div>
                    <div class="chart-bar flex-1 animate-chart-grow" style="height: 85%; animation-delay: 0.5s;"></div>
                    <div class="chart-bar flex-1 animate-chart-grow" style="height: 100%; animation-delay: 0.6s;"></div>
                  </div>
                  <div class="flex justify-between mt-2 text-white/30 text-xs">
                    <span>Lun</span>
                    <span>Mar</span>
                    <span>Mie</span>
                    <span>Joi</span>
                    <span>Vin</span>
                    <span>Sam</span>
                    <span>Dum</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating ML Badge -->
            <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-analytics-accent/30 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-analytics-accent/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                </div>
                <div>
                  <div class="text-analytics-accent text-sm font-medium">ML Forecast</div>
                  <div class="text-white/40 text-xs">+15% prevazut</div>
                </div>
              </div>
            </div>

            <!-- Floating Export Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-analytics-success/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <button class="export-btn pdf">PDF</button>
                <button class="export-btn xlsx">Excel</button>
                <button class="export-btn csv">CSV</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== DASHBOARDS ==================== -->
  <section class="py-24 relative overflow-hidden" id="functionalitati">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-analytics-primary text-sm font-medium uppercase tracking-widest">Dashboard-uri</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Date in<br><span class="text-gradient-analytics">timp real</span></h2>
        <p class="text-lg text-white/60">Vezi vanzarile pe masura ce se intampla. Reactioneaza instant la tendinte.</p>
      </div>

      <!-- Dashboard Types -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
        <!-- Sales Dashboard -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-primary/20 hover:border-analytics-primary/50 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-analytics-primary/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Vanzari Live</h3>
          <p class="text-white/50 text-sm mb-4">Urmareste vanzarile in timp real. Vezi impactul campaniilor instant.</p>
          <div class="flex items-center gap-2">
            <div class="live-dot"></div>
            <span class="text-analytics-success text-xs">Actualizare 5s</span>
          </div>
        </div>

        <!-- ML Forecast -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-accent/20 hover:border-analytics-accent/50 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-analytics-accent/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Previziuni ML</h3>
          <p class="text-white/50 text-sm mb-4">Machine learning prezice veniturile bazat pe date istorice si tendinte.</p>
          <div class="flex items-center gap-2">
            <span class="px-2 py-1 rounded bg-analytics-accent/20 text-analytics-accent text-xs">AI-Powered</span>
          </div>
        </div>

        <!-- Demographics -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-secondary/20 hover:border-analytics-secondary/50 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-analytics-secondary/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Demografice</h3>
          <p class="text-white/50 text-sm mb-4">Intelege cine cumpara bilete: varsta, locatie, preferinte.</p>
          <div class="flex items-center gap-2">
            <span class="px-2 py-1 rounded bg-analytics-secondary/20 text-analytics-secondary text-xs">Segmentare</span>
          </div>
        </div>

        <!-- Conversion Funnel -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-success/20 hover:border-analytics-success/50 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-analytics-success/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Palnie Conversie</h3>
          <p class="text-white/50 text-sm mb-4">Urmareste calatoria de la click pana la achizitie. Identifica drop-off-uri.</p>
          <div class="flex items-center gap-2">
            <span class="px-2 py-1 rounded bg-analytics-success/20 text-analytics-success text-xs">Optimizare</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CONVERSION FUNNEL ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-analytics-success text-sm font-medium uppercase tracking-widest">Palnie de Conversie</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Unde pierzi<br><span class="text-gradient-analytics">clienti?</span></h2>
          <p class="text-lg text-white/60 mb-8">Urmareste fiecare pas din calatoria cumparatorului. Identifica si repara punctele de abandon.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-analytics-primary/10 border border-analytics-primary/30">
              <div class="w-12 h-12 rounded-xl bg-analytics-primary/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Vizualizari Pagina</span>
                <p class="text-white/50 text-sm">Cati au vazut evenimentul</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-analytics-secondary/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-analytics-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Adaugari Cos</span>
                <p class="text-white/50 text-sm">Cati au selectat bilete</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-analytics-accent/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Checkout Complet</span>
                <p class="text-white/50 text-sm">Cati au finalizat plata</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Funnel -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="text-white font-semibold">Palnie Conversie</div>
              <select class="bg-dark-900/50 border border-white/10 rounded-lg px-3 py-1.5 text-white text-sm">
                <option>Ultima saptamana</option>
                <option>Ultima luna</option>
              </select>
            </div>

            <!-- Funnel Visualization -->
            <div class="space-y-3">
              <!-- Level 1 -->
              <div class="relative">
                <div class="funnel-segment h-16 bg-analytics-primary flex items-center justify-between px-6" style="width: 100%;">
                  <span class="text-white font-medium">Vizualizari</span>
                  <span class="text-white font-bold">12,450</span>
                </div>
                <div class="absolute right-0 top-full text-white/40 text-xs mt-1">100%</div>
              </div>

              <!-- Level 2 -->
              <div class="relative pl-6">
                <div class="funnel-segment h-16 bg-analytics-secondary flex items-center justify-between px-6" style="width: 85%;">
                  <span class="text-white font-medium">Interes Bilete</span>
                  <span class="text-white font-bold">6,225</span>
                </div>
                <div class="absolute right-0 top-full text-white/40 text-xs mt-1">50%</div>
              </div>

              <!-- Level 3 -->
              <div class="relative pl-12">
                <div class="funnel-segment h-16 bg-analytics-accent flex items-center justify-between px-6" style="width: 70%;">
                  <span class="text-white font-medium">Adaugat in Cos</span>
                  <span class="text-white font-bold">2,490</span>
                </div>
                <div class="absolute right-0 top-full text-white/40 text-xs mt-1">20%</div>
              </div>

              <!-- Level 4 -->
              <div class="relative pl-20">
                <div class="funnel-segment h-16 bg-analytics-success flex items-center justify-between px-6" style="width: 55%;">
                  <span class="text-white font-medium">Checkout</span>
                  <span class="text-white font-bold">1,494</span>
                </div>
                <div class="absolute right-0 top-full text-white/40 text-xs mt-1">12%</div>
              </div>

              <!-- Level 5 -->
              <div class="relative pl-28">
                <div class="funnel-segment h-16 bg-brand-green flex items-center justify-between px-6" style="width: 40%;">
                  <span class="text-white font-medium">✓ Cumparat</span>
                  <span class="text-white font-bold">523</span>
                </div>
                <div class="absolute right-0 top-full text-analytics-success text-xs mt-1 font-medium">4.2% conversie</div>
              </div>
            </div>

            <!-- Drop-off Alert -->
            <div class="mt-6 p-3 rounded-lg bg-analytics-warning/10 border border-analytics-warning/30">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-analytics-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                <span class="text-analytics-warning text-sm">40% abandona la Checkout. Verifica procesul de plata.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== GEOGRAPHIC HEATMAP ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Visual - Heatmap -->
        <div class="reveal order-2 lg:order-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="text-white font-semibold">Harta Vanzarilor</div>
              <div class="flex items-center gap-2">
                <span class="text-white/40 text-xs">Intensitate:</span>
                <div class="flex gap-1">
                  <div class="w-4 h-4 rounded bg-analytics-primary/20"></div>
                  <div class="w-4 h-4 rounded bg-analytics-primary/40"></div>
                  <div class="w-4 h-4 rounded bg-analytics-primary/60"></div>
                  <div class="w-4 h-4 rounded bg-analytics-primary/80"></div>
                  <div class="w-4 h-4 rounded bg-analytics-primary"></div>
                </div>
              </div>
            </div>

            <!-- Romania Map Heatmap (Simplified) -->
            <div class="relative bg-dark-900/50 rounded-xl p-6 h-64">
              <!-- Cities as heatmap dots -->
              <div class="absolute top-[30%] left-[45%] w-12 h-12 rounded-full bg-analytics-primary animate-heatmap-pulse flex items-center justify-center">
                <span class="text-white text-xs font-bold">BUC</span>
              </div>
              <div class="absolute top-[20%] left-[35%] w-10 h-10 rounded-full bg-analytics-primary/80 animate-heatmap-pulse flex items-center justify-center" style="animation-delay: 0.5s;">
                <span class="text-white text-xs font-bold">CLJ</span>
              </div>
              <div class="absolute top-[35%] left-[25%] w-8 h-8 rounded-full bg-analytics-primary/60 animate-heatmap-pulse flex items-center justify-center" style="animation-delay: 1s;">
                <span class="text-white text-xs font-bold">TIM</span>
              </div>
              <div class="absolute top-[25%] left-[55%] w-7 h-7 rounded-full bg-analytics-primary/50 animate-heatmap-pulse flex items-center justify-center" style="animation-delay: 1.5s;">
                <span class="text-white text-xs font-bold">IAS</span>
              </div>
              <div class="absolute top-[40%] left-[40%] w-6 h-6 rounded-full bg-analytics-primary/40 animate-heatmap-pulse flex items-center justify-center" style="animation-delay: 2s;">
                <span class="text-white text-xs font-bold">SIB</span>
              </div>
              <div class="absolute top-[50%] left-[30%] w-5 h-5 rounded-full bg-analytics-primary/30 animate-heatmap-pulse" style="animation-delay: 2.5s;"></div>
              <div class="absolute top-[15%] left-[50%] w-5 h-5 rounded-full bg-analytics-primary/30 animate-heatmap-pulse" style="animation-delay: 3s;"></div>
            </div>

            <!-- Top Cities -->
            <div class="mt-4 grid grid-cols-2 gap-2">
              <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/30">
                <span class="text-white/70 text-sm">Bucuresti</span>
                <span class="text-analytics-primary font-medium">42%</span>
              </div>
              <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/30">
                <span class="text-white/70 text-sm">Cluj-Napoca</span>
                <span class="text-analytics-primary font-medium">23%</span>
              </div>
              <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/30">
                <span class="text-white/70 text-sm">Timisoara</span>
                <span class="text-analytics-primary font-medium">12%</span>
              </div>
              <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/30">
                <span class="text-white/70 text-sm">Iasi</span>
                <span class="text-analytics-primary font-medium">8%</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="reveal reveal-delay-1 order-1 lg:order-2">
          <span class="text-analytics-secondary text-sm font-medium uppercase tracking-widest">Geographic</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Unde sunt<br><span class="text-gradient-analytics">clientii tai?</span></h2>
          <p class="text-lg text-white/60 mb-8">Harti termice care arata cele mai puternice piete si oportunitatile neexploatate.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-lg bg-analytics-primary flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Piete Principale</span>
                <p class="text-white/50 text-sm">Identifica orasele cu cele mai multe vanzari</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-lg bg-analytics-accent flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Oportunitati</span>
                <p class="text-white/50 text-sm">Descopera piete cu potential neexploatat</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-lg bg-analytics-success flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Comparatii Regionale</span>
                <p class="text-white/50 text-sm">Analizeaza performanta pe regiuni</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CUSTOM REPORTS ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-analytics-warning text-sm font-medium uppercase tracking-widest">Raportare</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Rapoarte<br><span class="text-gradient animate-shimmer">personalizate</span></h2>
        <p class="text-lg text-white/60">Construieste rapoarte care raspund intrebarilor tale. Programeaza livrarea automata.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Report Builder -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-primary/20 hover:border-analytics-primary/50 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-analytics-primary/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Constructor Rapoarte</h3>
          <p class="text-white/50 text-sm mb-4">Drag & drop pentru metrici si dimensiuni. Creeaza exact ce ai nevoie.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-analytics-primary/20 text-analytics-primary text-xs">Drag & Drop</span>
          </div>
        </div>

        <!-- Scheduled Reports -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-secondary/20 hover:border-analytics-secondary/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-analytics-secondary/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Programare Automata</h3>
          <p class="text-white/50 text-sm mb-4">Rapoarte zilnice, saptamanale sau lunare livrate automat pe email.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-analytics-secondary/20 text-analytics-secondary text-xs">Auto Email</span>
          </div>
        </div>

        <!-- Export Formats -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-accent/20 hover:border-analytics-accent/50 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-analytics-accent/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Export Multiple</h3>
          <p class="text-white/50 text-sm mb-4">PDF pentru prezentari, Excel pentru analize, CSV pentru integrari.</p>
          <div class="flex gap-2 mt-4">
            <button class="export-btn pdf">PDF</button>
            <button class="export-btn xlsx">Excel</button>
            <button class="export-btn csv">CSV</button>
          </div>
        </div>

        <!-- Event Comparison -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-success/20 hover:border-analytics-success/50 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-analytics-success/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Comparare Evenimente</h3>
          <p class="text-white/50 text-sm">Cap la cap: ce functioneaza, ce nu. Invata din fiecare eveniment.</p>
        </div>

        <!-- Promo Code Analysis -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-warning/20 hover:border-analytics-warning/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-analytics-warning/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Analiza Coduri Promo</h3>
          <p class="text-white/50 text-sm">ROI pe fiecare cod. Vedere care campanii convertesc cel mai bine.</p>
        </div>

        <!-- Year over Year -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-analytics-danger/20 hover:border-analytics-danger/50 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-analytics-danger/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-analytics-danger" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">An la An</h3>
          <p class="text-white/50 text-sm">Comparatii YoY pentru editiile evenimentului. Urmareste cresterea.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-analytics-primary/10 to-analytics-secondary/10 rounded-3xl p-8 md:p-12 border border-analytics-primary/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "Palnia de conversie ne-a aratat ca <span class="text-gradient-analytics font-semibold">40% abandonau la checkout</span>. Am simplificat procesul si rata de conversie a crescut cu 2.3% in prima saptamana."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-analytics-primary to-analytics-secondary flex items-center justify-center">
              <span class="text-white font-bold">AM</span>
            </div>
            <div>
              <div class="font-semibold text-white">Alexandru M.</div>
              <div class="text-white/50">Growth Lead, Neversea</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-analytics-primary/10 via-transparent to-analytics-secondary/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(59,130,246,0.2) 0%, rgba(6,182,212,0.1) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">📊</div>
    <div class="absolute bottom-20 right-20 opacity-20 animate-float text-3xl" style="animation-delay: 1s;">📈</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Analiza<br><span class="text-gradient-analytics">Avansata</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Date care conduc decizii. Dashboard-uri live, previziuni ML, rapoarte personalizate.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-analytics-primary text-white hover:bg-analytics-secondary hover:scale-105 hover:shadow-glow-blue transition-all duration-300">
          Exploreaza Dashboard
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Intrebari? Contacteaza-ne
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">Real-time • ML Forecasting • Harti Termice • Palnii Conversie • Export PDF/Excel • API</p>
    </div>
  </section>

</main>

<script>
  // Reveal on scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Feature card mouse tracking
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
      card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
    });
  });
</script>

<?php get_footer(); ?>
