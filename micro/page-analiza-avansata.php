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

<main class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-analytics-primary/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-analytics-secondary/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute text-2xl top-32 left-16 opacity-30 animate-float">📊</div>
    <div class="absolute text-xl bottom-40 right-24 opacity-20 animate-float" style="animation-delay: 1s;">📈</div>
    <div class="absolute text-3xl top-1/2 right-16 opacity-10 animate-float" style="animation-delay: 2s;">🎯</div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-analytics-primary/10 border-analytics-primary/20">
            <svg class="w-5 h-5 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            <span class="text-sm font-medium text-analytics-primary">Business Intelligence</span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Analiza<br><span class="text-gradient-analytics">Avansata</span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            Transforma datele in decizii. <strong class="text-white">Dashboard-uri in timp real</strong>, previziuni ML, harti termice geografice, palnii de conversie.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 rounded-full group bg-analytics-primary hover:bg-analytics-secondary hover:scale-105 hover:shadow-glow-blue">
              Exploreaza Dashboard
              <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#functionalitati" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              Vezi Functionalitati
            </a>
          </div>

          <!-- Quick features -->
          <div class="flex flex-wrap items-center gap-4">
            <div class="flex items-center gap-2">
              <div class="live-dot"></div>
              <span class="text-sm text-white/60">Real-time</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
              <span class="text-sm text-white/60">ML Forecasting</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-analytics-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              <span class="text-sm text-white/60">Export PDF/Excel</span>
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
            <div class="overflow-hidden border shadow-2xl bg-dark-800/80 backdrop-blur-xl rounded-2xl border-analytics-primary/20">
              <!-- Header -->
              <div class="flex items-center justify-between px-6 py-4 border-b border-white/10">
                <div class="flex items-center gap-3">
                  <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-analytics-primary/20">
                    <svg class="w-5 h-5 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                  </div>
                  <div>
                    <div class="font-semibold text-white">Dashboard Principal</div>
                    <div class="text-xs text-white/40">Festival Vara 2025</div>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <div class="live-dot"></div>
                  <span class="text-xs font-medium text-analytics-success">LIVE</span>
                </div>
              </div>

              <!-- Metrics Row -->
              <div class="grid grid-cols-3 gap-4 p-4">
                <div class="text-center metric-card">
                  <div class="text-2xl font-bold text-analytics-primary" x-text="revenue.toLocaleString() + ' €'">127,450 €</div>
                  <div class="text-xs text-white/40">Venituri</div>
                  <div class="mt-1 text-xs text-analytics-success">↑ 23%</div>
                </div>
                <div class="text-center metric-card" style="background: rgba(6, 182, 212, 0.1); border-color: rgba(6, 182, 212, 0.2);">
                  <div class="text-2xl font-bold text-analytics-secondary" x-text="tickets.toLocaleString()">2,847</div>
                  <div class="text-xs text-white/40">Bilete</div>
                  <div class="mt-1 text-xs text-analytics-success">↑ 18%</div>
                </div>
                <div class="text-center metric-card" style="background: rgba(139, 92, 246, 0.1); border-color: rgba(139, 92, 246, 0.2);">
                  <div class="text-2xl font-bold text-analytics-accent" x-text="conversion + '%'">4.2%</div>
                  <div class="text-xs text-white/40">Conversie</div>
                  <div class="mt-1 text-xs text-analytics-success">↑ 0.8%</div>
                </div>
              </div>

              <!-- Mini Chart -->
              <div class="px-4 pb-4">
                <div class="p-4 bg-dark-900/50 rounded-xl">
                  <div class="flex items-center justify-between mb-3">
                    <span class="text-sm text-white/60">Vanzari ultimele 7 zile</span>
                    <span class="text-sm font-medium text-analytics-success">+23%</span>
                  </div>
                  <div class="flex items-end h-20 gap-2">
                    <div class="flex-1 chart-bar animate-chart-grow" style="height: 40%;"></div>
                    <div class="flex-1 chart-bar animate-chart-grow" style="height: 55%; animation-delay: 0.1s;"></div>
                    <div class="flex-1 chart-bar animate-chart-grow" style="height: 45%; animation-delay: 0.2s;"></div>
                    <div class="flex-1 chart-bar animate-chart-grow" style="height: 70%; animation-delay: 0.3s;"></div>
                    <div class="flex-1 chart-bar animate-chart-grow" style="height: 65%; animation-delay: 0.4s;"></div>
                    <div class="flex-1 chart-bar animate-chart-grow" style="height: 85%; animation-delay: 0.5s;"></div>
                    <div class="flex-1 chart-bar animate-chart-grow" style="height: 100%; animation-delay: 0.6s;"></div>
                  </div>
                  <div class="flex justify-between mt-2 text-xs text-white/30">
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
            <div class="absolute z-10 px-4 py-3 border shadow-xl -top-4 -right-4 bg-dark-800 rounded-xl border-analytics-accent/30 animate-float">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-analytics-accent/20">
                  <svg class="w-4 h-4 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-analytics-accent">ML Forecast</div>
                  <div class="text-xs text-white/40">+15% prevazut</div>
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
  <section class="relative py-24 overflow-hidden" id="functionalitati">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-analytics-primary">Dashboard-uri</span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Date in<br><span class="text-gradient-analytics">timp real</span></h2>
        <p class="text-lg text-white/60">Vezi vanzarile pe masura ce se intampla. Reactioneaza instant la tendinte.</p>
      </div>

      <!-- Dashboard Types -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 reveal">
        <!-- Sales Dashboard -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-primary/20 hover:border-analytics-primary/50">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-primary/10">
            <svg class="w-7 h-7 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">Vanzari Live</h3>
          <p class="mb-4 text-sm text-white/50">Urmareste vanzarile in timp real. Vezi impactul campaniilor instant.</p>
          <div class="flex items-center gap-2">
            <div class="live-dot"></div>
            <span class="text-xs text-analytics-success">Actualizare 5s</span>
          </div>
        </div>

        <!-- ML Forecast -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-accent/20 hover:border-analytics-accent/50">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-accent/10">
            <svg class="w-7 h-7 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">Previziuni ML</h3>
          <p class="mb-4 text-sm text-white/50">Machine learning prezice veniturile bazat pe date istorice si tendinte.</p>
          <div class="flex items-center gap-2">
            <span class="px-2 py-1 text-xs rounded bg-analytics-accent/20 text-analytics-accent">AI-Powered</span>
          </div>
        </div>

        <!-- Demographics -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-secondary/20 hover:border-analytics-secondary/50">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-secondary/10">
            <svg class="w-7 h-7 text-analytics-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">Demografice</h3>
          <p class="mb-4 text-sm text-white/50">Intelege cine cumpara bilete: varsta, locatie, preferinte.</p>
          <div class="flex items-center gap-2">
            <span class="px-2 py-1 text-xs rounded bg-analytics-secondary/20 text-analytics-secondary">Segmentare</span>
          </div>
        </div>

        <!-- Conversion Funnel -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-success/20 hover:border-analytics-success/50">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-success/10">
            <svg class="w-7 h-7 text-analytics-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">Palnie Conversie</h3>
          <p class="mb-4 text-sm text-white/50">Urmareste calatoria de la click pana la achizitie. Identifica drop-off-uri.</p>
          <div class="flex items-center gap-2">
            <span class="px-2 py-1 text-xs rounded bg-analytics-success/20 text-analytics-success">Optimizare</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CONVERSION FUNNEL ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-analytics-success">Palnie de Conversie</span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Unde pierzi<br><span class="text-gradient-analytics">clienti?</span></h2>
          <p class="mb-8 text-lg text-white/60">Urmareste fiecare pas din calatoria cumparatorului. Identifica si repara punctele de abandon.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-analytics-primary/10 border-analytics-primary/30">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-analytics-primary/20">
                <svg class="w-6 h-6 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Vizualizari Pagina</span>
                <p class="text-sm text-white/50">Cati au vazut evenimentul</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-analytics-secondary/20">
                <svg class="w-6 h-6 text-analytics-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Adaugari Cos</span>
                <p class="text-sm text-white/50">Cati au selectat bilete</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-analytics-accent/20">
                <svg class="w-6 h-6 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Checkout Complet</span>
                <p class="text-sm text-white/50">Cati au finalizat plata</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Funnel -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="font-semibold text-white">Palnie Conversie</div>
              <select class="bg-dark-900/50 border border-white/10 rounded-lg px-3 py-1.5 text-white text-sm">
                <option>Ultima saptamana</option>
                <option>Ultima luna</option>
              </select>
            </div>

            <!-- Funnel Visualization -->
            <div class="space-y-3">
              <!-- Level 1 -->
              <div class="relative">
                <div class="flex items-center justify-between h-16 px-6 funnel-segment bg-analytics-primary" style="width: 100%;">
                  <span class="font-medium text-white">Vizualizari</span>
                  <span class="font-bold text-white">12,450</span>
                </div>
                <div class="absolute right-0 mt-1 text-xs top-full text-white/40">100%</div>
              </div>

              <!-- Level 2 -->
              <div class="relative pl-6">
                <div class="flex items-center justify-between h-16 px-6 funnel-segment bg-analytics-secondary" style="width: 85%;">
                  <span class="font-medium text-white">Interes Bilete</span>
                  <span class="font-bold text-white">6,225</span>
                </div>
                <div class="absolute right-0 mt-1 text-xs top-full text-white/40">50%</div>
              </div>

              <!-- Level 3 -->
              <div class="relative pl-12">
                <div class="flex items-center justify-between h-16 px-6 funnel-segment bg-analytics-accent" style="width: 70%;">
                  <span class="font-medium text-white">Adaugat in Cos</span>
                  <span class="font-bold text-white">2,490</span>
                </div>
                <div class="absolute right-0 mt-1 text-xs top-full text-white/40">20%</div>
              </div>

              <!-- Level 4 -->
              <div class="relative pl-20">
                <div class="flex items-center justify-between h-16 px-6 funnel-segment bg-analytics-success" style="width: 55%;">
                  <span class="font-medium text-white">Checkout</span>
                  <span class="font-bold text-white">1,494</span>
                </div>
                <div class="absolute right-0 mt-1 text-xs top-full text-white/40">12%</div>
              </div>

              <!-- Level 5 -->
              <div class="relative pl-28">
                <div class="flex items-center justify-between h-16 px-6 funnel-segment bg-brand-green" style="width: 40%;">
                  <span class="font-medium text-white">✓ Cumparat</span>
                  <span class="font-bold text-white">523</span>
                </div>
                <div class="absolute right-0 mt-1 text-xs font-medium top-full text-analytics-success">4.2% conversie</div>
              </div>
            </div>

            <!-- Drop-off Alert -->
            <div class="p-3 mt-6 border rounded-lg bg-analytics-warning/10 border-analytics-warning/30">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-analytics-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                <span class="text-sm text-analytics-warning">40% abandona la Checkout. Verifica procesul de plata.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== GEOGRAPHIC HEATMAP ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Visual - Heatmap -->
        <div class="order-2 reveal lg:order-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="font-semibold text-white">Harta Vanzarilor</div>
              <div class="flex items-center gap-2">
                <span class="text-xs text-white/40">Intensitate:</span>
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
            <div class="relative h-64 p-6 bg-dark-900/50 rounded-xl">
              <!-- Cities as heatmap dots -->
              <div class="absolute top-[30%] left-[45%] w-12 h-12 rounded-full bg-analytics-primary animate-heatmap-pulse flex items-center justify-center">
                <span class="text-xs font-bold text-white">BUC</span>
              </div>
              <div class="absolute top-[20%] left-[35%] w-10 h-10 rounded-full bg-analytics-primary/80 animate-heatmap-pulse flex items-center justify-center" style="animation-delay: 0.5s;">
                <span class="text-xs font-bold text-white">CLJ</span>
              </div>
              <div class="absolute top-[35%] left-[25%] w-8 h-8 rounded-full bg-analytics-primary/60 animate-heatmap-pulse flex items-center justify-center" style="animation-delay: 1s;">
                <span class="text-xs font-bold text-white">TIM</span>
              </div>
              <div class="absolute top-[25%] left-[55%] w-7 h-7 rounded-full bg-analytics-primary/50 animate-heatmap-pulse flex items-center justify-center" style="animation-delay: 1.5s;">
                <span class="text-xs font-bold text-white">IAS</span>
              </div>
              <div class="absolute top-[40%] left-[40%] w-6 h-6 rounded-full bg-analytics-primary/40 animate-heatmap-pulse flex items-center justify-center" style="animation-delay: 2s;">
                <span class="text-xs font-bold text-white">SIB</span>
              </div>
              <div class="absolute top-[50%] left-[30%] w-5 h-5 rounded-full bg-analytics-primary/30 animate-heatmap-pulse" style="animation-delay: 2.5s;"></div>
              <div class="absolute top-[15%] left-[50%] w-5 h-5 rounded-full bg-analytics-primary/30 animate-heatmap-pulse" style="animation-delay: 3s;"></div>
            </div>

            <!-- Top Cities -->
            <div class="grid grid-cols-2 gap-2 mt-4">
              <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/30">
                <span class="text-sm text-white/70">Bucuresti</span>
                <span class="font-medium text-analytics-primary">42%</span>
              </div>
              <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/30">
                <span class="text-sm text-white/70">Cluj-Napoca</span>
                <span class="font-medium text-analytics-primary">23%</span>
              </div>
              <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/30">
                <span class="text-sm text-white/70">Timisoara</span>
                <span class="font-medium text-analytics-primary">12%</span>
              </div>
              <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/30">
                <span class="text-sm text-white/70">Iasi</span>
                <span class="font-medium text-analytics-primary">8%</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="order-1 reveal reveal-delay-1 lg:order-2">
          <span class="text-sm font-medium tracking-widest uppercase text-analytics-secondary">Geographic</span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Unde sunt<br><span class="text-gradient-analytics">clientii tai?</span></h2>
          <p class="mb-8 text-lg text-white/60">Harti termice care arata cele mai puternice piete si oportunitatile neexploatate.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4">
              <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-analytics-primary">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Piete Principale</span>
                <p class="text-sm text-white/50">Identifica orasele cu cele mai multe vanzari</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-analytics-accent">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Oportunitati</span>
                <p class="text-sm text-white/50">Descopera piete cu potential neexploatat</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-analytics-success">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Comparatii Regionale</span>
                <p class="text-sm text-white/50">Analizeaza performanta pe regiuni</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CUSTOM REPORTS ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-analytics-warning">Raportare</span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Rapoarte<br><span class="text-gradient animate-shimmer">personalizate</span></h2>
        <p class="text-lg text-white/60">Construieste rapoarte care raspund intrebarilor tale. Programeaza livrarea automata.</p>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- Report Builder -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-primary/20 hover:border-analytics-primary/50 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-primary/10">
            <svg class="w-7 h-7 text-analytics-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">Constructor Rapoarte</h3>
          <p class="mb-4 text-sm text-white/50">Drag & drop pentru metrici si dimensiuni. Creeaza exact ce ai nevoie.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-analytics-primary/20 text-analytics-primary">Drag & Drop</span>
          </div>
        </div>

        <!-- Scheduled Reports -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-secondary/20 hover:border-analytics-secondary/50 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-secondary/10">
            <svg class="w-7 h-7 text-analytics-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">Programare Automata</h3>
          <p class="mb-4 text-sm text-white/50">Rapoarte zilnice, saptamanale sau lunare livrate automat pe email.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-analytics-secondary/20 text-analytics-secondary">Auto Email</span>
          </div>
        </div>

        <!-- Export Formats -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-accent/20 hover:border-analytics-accent/50 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-accent/10">
            <svg class="w-7 h-7 text-analytics-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">Export Multiple</h3>
          <p class="mb-4 text-sm text-white/50">PDF pentru prezentari, Excel pentru analize, CSV pentru integrari.</p>
          <div class="flex gap-2 mt-4">
            <button class="export-btn pdf">PDF</button>
            <button class="export-btn xlsx">Excel</button>
            <button class="export-btn csv">CSV</button>
          </div>
        </div>

        <!-- Event Comparison -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-success/20 hover:border-analytics-success/50 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-success/10">
            <svg class="w-7 h-7 text-analytics-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">Comparare Evenimente</h3>
          <p class="text-sm text-white/50">Cap la cap: ce functioneaza, ce nu. Invata din fiecare eveniment.</p>
        </div>

        <!-- Promo Code Analysis -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-warning/20 hover:border-analytics-warning/50 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-warning/10">
            <svg class="w-7 h-7 text-analytics-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">Analiza Coduri Promo</h3>
          <p class="text-sm text-white/50">ROI pe fiecare cod. Vedere care campanii convertesc cel mai bine.</p>
        </div>

        <!-- Year over Year -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-analytics-danger/20 hover:border-analytics-danger/50 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-analytics-danger/10">
            <svg class="w-7 h-7 text-analytics-danger" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white">An la An</h3>
          <p class="text-sm text-white/50">Comparatii YoY pentru editiile evenimentului. Urmareste cresterea.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-analytics-primary/10 to-analytics-secondary/10 rounded-3xl md:p-12 border-analytics-primary/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="mb-8 text-2xl font-light leading-relaxed text-white md:text-3xl">
            "Palnia de conversie ne-a aratat ca <span class="font-semibold text-gradient-analytics">40% abandonau la checkout</span>. Am simplificat procesul si rata de conversie a crescut cu 2.3% in prima saptamana."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center rounded-full w-14 h-14 bg-gradient-to-br from-analytics-primary to-analytics-secondary">
              <span class="font-bold text-white">AM</span>
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
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-analytics-primary/10 via-transparent to-analytics-secondary/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(59,130,246,0.2) 0%, rgba(6,182,212,0.1) 100%);"></div>

    <div class="absolute text-4xl top-20 left-20 opacity-20 animate-float">📊</div>
    <div class="absolute text-3xl bottom-20 right-20 opacity-20 animate-float" style="animation-delay: 1s;">📈</div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal">Analiza<br><span class="text-gradient-analytics">Avansata</span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1">Date care conduc decizii. Dashboard-uri live, previziuni ML, rapoarte personalizate.</p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 rounded-full group bg-analytics-primary hover:bg-analytics-secondary hover:scale-105 hover:shadow-glow-blue">
          Exploreaza Dashboard
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
          Intrebari? Contacteaza-ne
        </a>
      </div>

      <p class="mt-8 text-sm text-white/30 reveal reveal-delay-3">Real-time • ML Forecasting • Harti Termice • Palnii Conversie • Export PDF/Excel • API</p>
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
