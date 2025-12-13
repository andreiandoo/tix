<?php
/**
 * Template Name: Micro - Google Ads
 * Description: Pagina integrării Google Ads - Știi Exact Ce Funcționează
 */

get_header();
?>

<style>
  /* Google Ads Page Specific Styles */
  .text-gradient-google {
    background: linear-gradient(135deg, #4285F4 0%, #34A853 25%, #FBBC05 50%, #EA4335 75%, #4285F4 100%);
    background-size: 300% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shimmer 4s linear infinite;
  }

  .btn-google {
    @apply bg-gradient-to-r from-google-blue to-google-green text-white;
  }
  .btn-google:hover {
    transform: scale(1.05);
    box-shadow: 0 0 60px rgba(66, 133, 244, 0.4);
  }

  /* Google Logo Animation */
  .google-logo-animated span {
    display: inline-block;
    animation: bounce 2s ease-in-out infinite;
  }
  .google-logo-animated span:nth-child(1) { color: #4285F4; animation-delay: 0s; }
  .google-logo-animated span:nth-child(2) { color: #EA4335; animation-delay: 0.1s; }
  .google-logo-animated span:nth-child(3) { color: #FBBC05; animation-delay: 0.2s; }
  .google-logo-animated span:nth-child(4) { color: #4285F4; animation-delay: 0.3s; }
  .google-logo-animated span:nth-child(5) { color: #34A853; animation-delay: 0.4s; }
  .google-logo-animated span:nth-child(6) { color: #EA4335; animation-delay: 0.5s; }
  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
  }

  /* ROAS Counter Animation */
  .roas-counter {
    font-variant-numeric: tabular-nums;
  }

  /* Conversion Flow Animation */
  .conversion-dot {
    position: absolute;
    width: 12px;
    height: 12px;
    background: #4285F4;
    border-radius: 50%;
    box-shadow: 0 0 20px #4285F4;
    animation: flowDot 3s ease-in-out infinite;
  }
  @keyframes flowDot {
    0% { left: 0%; opacity: 0; transform: scale(0); }
    10% { opacity: 1; transform: scale(1); }
    90% { opacity: 1; transform: scale(1); }
    100% { left: 100%; opacity: 0; transform: scale(0); }
  }

  /* Keyword Performance Bars */
  .keyword-bar {
    height: 8px;
    border-radius: 4px;
    background: rgba(255,255,255,0.1);
    overflow: hidden;
  }
  .keyword-fill {
    height: 100%;
    border-radius: 4px;
    position: relative;
    overflow: hidden;
  }
  .keyword-fill::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: shimmerBar 2s ease-in-out infinite;
  }
  @keyframes shimmerBar {
    100% { left: 100%; }
  }

  /* Live Conversion Feed */
  .conversion-feed {
    max-height: 300px;
    overflow: hidden;
  }
  .conversion-item {
    animation: slideIn 0.5s ease-out forwards;
  }
  @keyframes slideIn {
    from { opacity: 0; transform: translateX(-20px); }
    to { opacity: 1; transform: translateX(0); }
  }

  /* Funnel Visualization */
  .funnel-stage {
    position: relative;
    transition: all 0.3s ease;
  }
  .funnel-stage:hover {
    transform: scale(1.02);
  }

  /* Feature Cards */
  .feature-card {
    background: linear-gradient(135deg, rgba(66, 133, 244, 0.08) 0%, rgba(52, 168, 83, 0.04) 100%);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 20px;
    padding: 2rem;
    position: relative;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .feature-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(66, 133, 244, 0.15), transparent 50%);
    opacity: 0;
    transition: opacity 0.5s;
  }
  .feature-card:hover::before { opacity: 1; }
  .feature-card:hover { border-color: rgba(66, 133, 244, 0.3); transform: translateY(-4px); }

  /* Platform Cards */
  .platform-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 16px;
    padding: 1.5rem;
    transition: all 0.3s ease;
    cursor: pointer;
  }
  .platform-card:hover {
    background: rgba(255,255,255,0.06);
    border-color: rgba(255,255,255,0.15);
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
  }

  /* Animated Graph */
  .graph-bar {
    transition: height 1s cubic-bezier(0.16, 1, 0.3, 1);
  }

  /* Pulse Ring */
  .pulse-ring {
    position: absolute;
    border: 2px solid currentColor;
    border-radius: 50%;
    animation: pulseRing 2s ease-out infinite;
  }
  @keyframes pulseRing {
    0% { transform: scale(0.8); opacity: 1; }
    100% { transform: scale(2); opacity: 0; }
  }

  /* Rotating gradient border */
  .gradient-border {
    position: relative;
    background: #13131c;
    border-radius: 20px;
  }
  .gradient-border::before {
    content: '';
    position: absolute;
    inset: -2px;
    background: conic-gradient(from 0deg, #4285F4, #34A853, #FBBC05, #EA4335, #4285F4);
    border-radius: 22px;
    z-index: -1;
    animation: rotateBorder 4s linear infinite;
  }
  @keyframes rotateBorder {
    100% { transform: rotate(360deg); }
  }

  /* Grow Line Animation */
  @keyframes growLine {
    to { width: 100%; }
  }
</style>

<!-- HERO -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
  <div class="orb w-[600px] h-[600px] bg-blue-500/20 -top-40 -right-40"></div>
  <div class="orb w-[400px] h-[400px] bg-green-500/15 bottom-20 -left-20"></div>
  <div class="orb w-[300px] h-[300px] bg-yellow-500/10 top-1/2 left-1/3"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      <div class="reveal">
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-6">
          <!-- Google Colors Dots -->
          <div class="flex items-center gap-1">
            <span class="w-2 h-2 rounded-full bg-google-blue"></span>
            <span class="w-2 h-2 rounded-full bg-google-red"></span>
            <span class="w-2 h-2 rounded-full bg-google-yellow"></span>
            <span class="w-2 h-2 rounded-full bg-google-green"></span>
          </div>
          <span class="text-white/70 text-sm font-medium">Integrare Oficială Google</span>
        </div>

        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-extra-tight">
          Știi exact ce<br><span class="text-gradient-google">funcționează</span>
        </h1>

        <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
          Nu mai ghici care reclame vând bilete. Conectezi Google Ads și vezi exact care campanii, cuvinte cheie și reclame generează <strong class="text-white">venituri reale</strong>.
        </p>

        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn btn-google">
            Conectează Google Ads
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#cum-functioneaza" class="btn btn-ghost">Vezi cum funcționează</a>
        </div>

        <!-- Live ROAS Counter -->
        <div class="inline-flex items-center gap-4 p-4 rounded-2xl bg-white/5 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-green-500/20 flex items-center justify-center">
            <svg class="w-6 h-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </div>
          <div>
            <div class="text-white/50 text-sm">ROAS mediu cu tracking precis</div>
            <div class="text-2xl font-display font-bold text-green-400 roas-counter" x-data="{ value: 0 }" x-init="
              let target = 4.2;
              let duration = 2000;
              let start = performance.now();
              function update(now) {
                let progress = Math.min((now - start) / duration, 1);
                value = (progress * target).toFixed(1);
                if (progress < 1) requestAnimationFrame(update);
              }
              requestAnimationFrame(update);
            " x-text="value + 'x'">0x</div>
          </div>
        </div>
      </div>

      <!-- Hero Visual - Conversion Attribution -->
      <div class="reveal reveal-delay-1">
        <div class="relative">
          <!-- Main Dashboard Card -->
          <div class="gradient-border p-6">
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-2">
                <svg class="w-6 h-6" viewBox="0 0 24 24">
                  <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                  <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                  <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                  <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                <span class="text-white font-medium">Google Ads</span>
              </div>
              <div class="flex items-center gap-2 text-green-400 text-sm">
                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                Conectat
              </div>
            </div>

            <!-- Conversion Stats Grid -->
            <div class="grid grid-cols-3 gap-3 mb-6">
              <div class="bg-white/5 rounded-xl p-3 text-center">
                <div class="text-2xl font-bold text-white" x-data="{ count: 0 }" x-init="
                  let interval = setInterval(() => { if(count < 847) count += 13; else { count = 847; clearInterval(interval); } }, 50);
                " x-text="count">0</div>
                <div class="text-xs text-white/40">Conversii</div>
              </div>
              <div class="bg-white/5 rounded-xl p-3 text-center">
                <div class="text-2xl font-bold text-green-400">€42.3K</div>
                <div class="text-xs text-white/40">Venituri</div>
              </div>
              <div class="bg-white/5 rounded-xl p-3 text-center">
                <div class="text-2xl font-bold text-google-blue">4.2x</div>
                <div class="text-xs text-white/40">ROAS</div>
              </div>
            </div>

            <!-- Live Conversion Feed -->
            <div class="space-y-2 conversion-feed">
              <div class="flex items-center justify-between p-3 rounded-lg bg-green-500/10 border border-green-500/20 conversion-item">
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 rounded-full bg-green-500/20 flex items-center justify-center">
                    <svg class="w-4 h-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </div>
                  <div>
                    <div class="text-white text-sm font-medium">Purchase</div>
                    <div class="text-white/40 text-xs">"bilete concert bucuresti"</div>
                  </div>
                </div>
                <div class="text-right">
                  <div class="text-green-400 font-medium">+€89</div>
                  <div class="text-white/30 text-xs">acum 2 min</div>
                </div>
              </div>

              <div class="flex items-center justify-between p-3 rounded-lg bg-blue-500/10 border border-blue-500/20 conversion-item" style="animation-delay: 0.2s;">
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center">
                    <svg class="w-4 h-4 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </div>
                  <div>
                    <div class="text-white text-sm font-medium">Purchase</div>
                    <div class="text-white/40 text-xs">"festival vara 2025"</div>
                  </div>
                </div>
                <div class="text-right">
                  <div class="text-blue-400 font-medium">+€156</div>
                  <div class="text-white/30 text-xs">acum 5 min</div>
                </div>
              </div>

              <div class="flex items-center justify-between p-3 rounded-lg bg-amber-500/10 border border-amber-500/20 conversion-item" style="animation-delay: 0.4s;">
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 rounded-full bg-amber-500/20 flex items-center justify-center">
                    <svg class="w-4 h-4 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4"/></svg>
                  </div>
                  <div>
                    <div class="text-white text-sm font-medium">Add to Cart</div>
                    <div class="text-white/40 text-xs">YouTube Ads</div>
                  </div>
                </div>
                <div class="text-right">
                  <div class="text-amber-400 font-medium">€75</div>
                  <div class="text-white/30 text-xs">acum 8 min</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Floating ROAS Badge -->
          <div class="absolute -top-4 -right-4 bg-dark-800 rounded-2xl p-4 border border-green-500/20 shadow-xl float">
            <div class="flex items-center gap-3">
              <div class="relative">
                <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center">
                  <svg class="w-6 h-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="pulse-ring w-12 h-12 text-green-400 absolute inset-0"></div>
              </div>
              <div>
                <div class="text-white/50 text-xs">Return pe investiție</div>
                <div class="text-green-400 font-bold text-xl">+320%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PLATFORMS -->
<section class="py-16 border-y border-white/5">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-8 reveal">
      <p class="text-white/40 text-sm uppercase tracking-widest">Funcționează pe toate platformele Google</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
      <div class="platform-card text-center reveal">
        <div class="w-12 h-12 mx-auto rounded-xl bg-google-blue/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-google-blue" fill="currentColor" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
        </div>
        <div class="text-white font-medium text-sm">Search</div>
      </div>

      <div class="platform-card text-center reveal reveal-delay-1">
        <div class="w-12 h-12 mx-auto rounded-xl bg-google-red/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-google-red" fill="currentColor" viewBox="0 0 24 24"><path d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44-.9-.25-1.48-.83-1.73-1.73-.13-.47-.22-1.1-.28-1.9-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83.25-.9.83-1.48 1.73-1.73.47-.13 1.33-.22 2.65-.28 1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73z"/></svg>
        </div>
        <div class="text-white font-medium text-sm">YouTube</div>
      </div>

      <div class="platform-card text-center reveal reveal-delay-2">
        <div class="w-12 h-12 mx-auto rounded-xl bg-google-green/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-google-green" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h16v16H4V4m2 2v12h12V6H6m2 2h8v2H8V8m0 4h8v2H8v-2m0 4h5v2H8v-2z"/></svg>
        </div>
        <div class="text-white font-medium text-sm">Display</div>
      </div>

      <div class="platform-card text-center reveal reveal-delay-3">
        <div class="w-12 h-12 mx-auto rounded-xl bg-google-yellow/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-google-yellow" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
        </div>
        <div class="text-white font-medium text-sm">Discover</div>
      </div>

      <div class="platform-card text-center reveal reveal-delay-4">
        <div class="w-12 h-12 mx-auto rounded-xl bg-violet-500/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-violet-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <div class="text-white font-medium text-sm">Performance Max</div>
      </div>

      <div class="platform-card text-center reveal reveal-delay-5">
        <div class="w-12 h-12 mx-auto rounded-xl bg-cyan-500/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-cyan-400" fill="currentColor" viewBox="0 0 24 24"><path d="M18 6h-2c0-2.21-1.79-4-4-4S8 3.79 8 6H6c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-6-2c1.1 0 2 .9 2 2h-4c0-1.1.9-2 2-2zm6 16H6V8h2v2c0 .55.45 1 1 1s1-.45 1-1V8h4v2c0 .55.45 1 1 1s1-.45 1-1V8h2v12z"/></svg>
        </div>
        <div class="text-white font-medium text-sm">Shopping</div>
      </div>
    </div>
  </div>
</section>

<!-- THE PROBLEM - Before/After -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-amber-400 text-sm font-medium uppercase tracking-widest">Problema</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Știi cât cheltuiești.<br><span class="text-amber-400">Dar știi ce primești?</span></h2>
      <p class="text-lg text-white/60">Fără tracking precis, optimizezi pe baza ghicului. Cu tracking precis, optimizezi pe baza datelor.</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-8">
      <!-- Before -->
      <div class="reveal">
        <div class="bg-gradient-to-br from-rose-500/10 to-rose-600/5 rounded-3xl p-8 border border-rose-500/20 h-full">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 rounded-full bg-rose-500/20 flex items-center justify-center">
              <svg class="w-5 h-5 text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </div>
            <span class="text-rose-400 font-semibold">Fără Integrare</span>
          </div>

          <div class="space-y-4">
            <div class="bg-dark-900/50 rounded-xl p-4">
              <div class="flex items-center justify-between mb-3">
                <span class="text-white/70 text-sm">Campanie: Festival Vara</span>
                <span class="text-white/40 text-xs">Google Ads</span>
              </div>
              <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                  <div class="text-white font-semibold">12,450</div>
                  <div class="text-white/40 text-xs">Click-uri</div>
                </div>
                <div>
                  <div class="text-white font-semibold">€3,200</div>
                  <div class="text-white/40 text-xs">Cheltuieli</div>
                </div>
                <div>
                  <div class="text-rose-400 font-semibold">???</div>
                  <div class="text-white/40 text-xs">Conversii</div>
                </div>
              </div>
            </div>

            <div class="bg-dark-900/50 rounded-xl p-4">
              <div class="text-white/70 text-sm mb-2">Cuvinte cheie top</div>
              <div class="space-y-2">
                <div class="flex items-center justify-between">
                  <span class="text-white/60 text-sm">"bilete festival"</span>
                  <span class="text-white/40 text-sm">2,340 click-uri</span>
                </div>
                <div class="flex items-center justify-between">
                  <span class="text-white/60 text-sm">"concert vara"</span>
                  <span class="text-white/40 text-sm">1,890 click-uri</span>
                </div>
                <div class="flex items-center justify-between">
                  <span class="text-white/60 text-sm">"evenimente bucuresti"</span>
                  <span class="text-white/40 text-sm">1,456 click-uri</span>
                </div>
              </div>
            </div>

            <div class="flex items-center gap-2 text-rose-400 text-sm">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              Nu știi care cuvinte cheie vând bilete
            </div>
          </div>
        </div>
      </div>

      <!-- After -->
      <div class="reveal reveal-delay-1">
        <div class="bg-gradient-to-br from-green-500/10 to-green-600/5 rounded-3xl p-8 border border-green-500/20 h-full">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center">
              <svg class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-green-400 font-semibold">Cu Integrare Tixello</span>
          </div>

          <div class="space-y-4">
            <div class="bg-dark-900/50 rounded-xl p-4">
              <div class="flex items-center justify-between mb-3">
                <span class="text-white/70 text-sm">Campanie: Festival Vara</span>
                <span class="text-green-400 text-xs">● Live</span>
              </div>
              <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                  <div class="text-white font-semibold">12,450</div>
                  <div class="text-white/40 text-xs">Click-uri</div>
                </div>
                <div>
                  <div class="text-white font-semibold">€3,200</div>
                  <div class="text-white/40 text-xs">Cheltuieli</div>
                </div>
                <div>
                  <div class="text-green-400 font-semibold">347</div>
                  <div class="text-white/40 text-xs">Conversii</div>
                </div>
              </div>
              <div class="mt-3 pt-3 border-t border-white/10 flex items-center justify-between">
                <span class="text-white/50 text-sm">ROAS</span>
                <span class="text-green-400 font-bold text-lg">4.8x</span>
              </div>
            </div>

            <div class="bg-dark-900/50 rounded-xl p-4">
              <div class="text-white/70 text-sm mb-3">Cuvinte cheie cu conversii</div>
              <div class="space-y-3">
                <div>
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-white text-sm">"bilete festival"</span>
                    <span class="text-green-400 text-sm font-medium">189 vânzări</span>
                  </div>
                  <div class="keyword-bar">
                    <div class="keyword-fill bg-gradient-to-r from-green-500 to-emerald-400" style="width: 85%;"></div>
                  </div>
                </div>
                <div>
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-white text-sm">"concert vara"</span>
                    <span class="text-green-400 text-sm font-medium">98 vânzări</span>
                  </div>
                  <div class="keyword-bar">
                    <div class="keyword-fill bg-gradient-to-r from-green-500 to-emerald-400" style="width: 55%;"></div>
                  </div>
                </div>
                <div>
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-white text-sm">"evenimente bucuresti"</span>
                    <span class="text-amber-400 text-sm font-medium">12 vânzări</span>
                  </div>
                  <div class="keyword-bar">
                    <div class="keyword-fill bg-gradient-to-r from-amber-500 to-amber-400" style="width: 15%;"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex items-center gap-2 text-green-400 text-sm">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              Optimizezi pe baza vânzărilor reale
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS - Visual Flow -->
<section class="py-24 bg-dark-850 relative" id="cum-functioneaza">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-google-blue text-sm font-medium uppercase tracking-widest">Cum Funcționează</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Click. Cumpără.<br><span class="text-gradient-google">Atribuie.</span></h2>
      <p class="text-lg text-white/60">Fiecare vânzare este conectată la reclama care a generat-o. Automat.</p>
    </div>

    <!-- Visual Journey -->
    <div class="max-w-4xl mx-auto mb-16">
      <div class="relative">
        <!-- Connection line -->
        <div class="absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-google-blue via-google-green to-google-yellow rounded-full -translate-y-1/2 opacity-30"></div>
        <div class="absolute top-1/2 left-0 h-1 bg-gradient-to-r from-google-blue via-google-green to-google-yellow rounded-full -translate-y-1/2 animate-grow-line" style="width: 0%; animation: growLine 3s ease-out forwards;"></div>

        <div class="grid grid-cols-4 gap-4 relative">
          <!-- Step 1: Ad Click -->
          <div class="text-center reveal">
            <div class="w-20 h-20 mx-auto rounded-2xl bg-google-blue/20 border border-google-blue/30 flex items-center justify-center mb-4 relative z-10">
              <svg class="w-8 h-8 text-google-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg>
            </div>
            <div class="text-white font-medium mb-1">Click pe reclamă</div>
            <div class="text-white/40 text-sm">Google salvează GCLID</div>
          </div>

          <!-- Step 2: Browse -->
          <div class="text-center reveal reveal-delay-1">
            <div class="w-20 h-20 mx-auto rounded-2xl bg-google-green/20 border border-google-green/30 flex items-center justify-center mb-4 relative z-10">
              <svg class="w-8 h-8 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
            </div>
            <div class="text-white font-medium mb-1">Navighează site</div>
            <div class="text-white/40 text-sm">Tixello păstrează GCLID</div>
          </div>

          <!-- Step 3: Purchase -->
          <div class="text-center reveal reveal-delay-2">
            <div class="w-20 h-20 mx-auto rounded-2xl bg-google-yellow/20 border border-google-yellow/30 flex items-center justify-center mb-4 relative z-10">
              <svg class="w-8 h-8 text-google-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            </div>
            <div class="text-white font-medium mb-1">Cumpără bilet</div>
            <div class="text-white/40 text-sm">Comandă finalizată</div>
          </div>

          <!-- Step 4: Attribution -->
          <div class="text-center reveal reveal-delay-3">
            <div class="w-20 h-20 mx-auto rounded-2xl bg-google-red/20 border border-google-red/30 flex items-center justify-center mb-4 relative z-10">
              <svg class="w-8 h-8 text-google-red" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <div class="text-white font-medium mb-1">Google primește</div>
            <div class="text-white/40 text-sm">Conversia atribuită</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Enhanced Conversions Explanation -->
    <div class="max-w-3xl mx-auto reveal reveal-delay-4">
      <div class="bg-gradient-to-br from-google-blue/10 to-google-green/10 rounded-3xl p-8 border border-white/10">
        <div class="flex items-start gap-6">
          <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center flex-shrink-0">
            <svg class="w-8 h-8 text-google-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-white mb-2">Conversii Îmbunătățite</h3>
            <p class="text-white/60 mb-4">Când cookie-urile nu pot urmări, folosim date hash-uite (email, telefon) pentru a potrivi conversiile cu click-urile. Google nu vede datele reale - doar identificatori criptați pentru potrivire.</p>
            <div class="flex flex-wrap gap-3">
              <span class="px-3 py-1 rounded-full bg-white/10 text-white/70 text-sm">Email hash-uit</span>
              <span class="px-3 py-1 rounded-full bg-white/10 text-white/70 text-sm">Telefon hash-uit</span>
              <span class="px-3 py-1 rounded-full bg-white/10 text-white/70 text-sm">Cross-device</span>
              <span class="px-3 py-1 rounded-full bg-white/10 text-white/70 text-sm">GDPR compliant</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SMART BIDDING -->
<section class="py-24 relative overflow-hidden">
  <div class="orb w-[500px] h-[500px] bg-green-600/20 top-1/2 -right-60"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      <div class="reveal">
        <span class="inline-block px-4 py-1.5 rounded-full bg-green-500/10 text-green-400 text-sm font-medium mb-6">Smart Bidding</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">Lasă AI-ul Google<br><span class="text-gradient">să-ți găsească clienți</span></h2>
        <p class="text-lg text-white/60 mb-8 leading-relaxed">Cu date de conversie precise, algoritmii Google știu exact cine cumpără bilete. Licitează automat mai mult pe cine convertește și mai puțin pe cine doar dă click.</p>

        <div class="space-y-6">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-google-blue/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-google-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
              <h4 class="text-white font-semibold mb-1">Target ROAS</h4>
              <p class="text-white/50 text-sm">Setezi return-ul dorit (ex: 4x), Google optimizează automat licitările pentru a-l atinge.</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-google-green/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
            <div>
              <h4 class="text-white font-semibold mb-1">Maximize Conversion Value</h4>
              <p class="text-white/50 text-sm">Google maximizează valoarea totală a conversiilor în limita bugetului tău.</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-google-yellow/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-google-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <div>
              <h4 class="text-white font-semibold mb-1">Performance Max</h4>
              <p class="text-white/50 text-sm">Campaniile automatizate folosesc conversiile tale pentru a găsi clienți în Search, YouTube, Display și Discover.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Smart Bidding Visualization -->
      <div class="reveal reveal-delay-1">
        <div class="bg-dark-800 rounded-3xl p-6 border border-white/10">
          <div class="flex items-center justify-between mb-6">
            <span class="text-white font-medium">Performanță Smart Bidding</span>
            <span class="text-green-400 text-sm">Ultimele 30 zile</span>
          </div>

          <!-- Chart -->
          <div class="h-48 flex items-end justify-between gap-2 mb-6 px-4">
            <div class="flex-1 flex flex-col items-center gap-1">
              <div class="w-full bg-white/10 rounded-t-lg graph-bar" style="height: 40%;">
                <div class="w-full h-full bg-gradient-to-t from-white/20 to-white/5 rounded-t-lg"></div>
              </div>
              <span class="text-white/30 text-xs">Săpt 1</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-1">
              <div class="w-full bg-white/10 rounded-t-lg graph-bar" style="height: 55%;">
                <div class="w-full h-full bg-gradient-to-t from-google-blue/50 to-google-blue/20 rounded-t-lg"></div>
              </div>
              <span class="text-white/30 text-xs">Săpt 2</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-1">
              <div class="w-full bg-white/10 rounded-t-lg graph-bar" style="height: 70%;">
                <div class="w-full h-full bg-gradient-to-t from-google-green/50 to-google-green/20 rounded-t-lg"></div>
              </div>
              <span class="text-white/30 text-xs">Săpt 3</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-1">
              <div class="w-full bg-white/10 rounded-t-lg graph-bar" style="height: 95%;">
                <div class="w-full h-full bg-gradient-to-t from-green-500 to-green-400/50 rounded-t-lg"></div>
              </div>
              <span class="text-white/30 text-xs">Săpt 4</span>
            </div>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-2 gap-4">
            <div class="bg-white/5 rounded-xl p-4">
              <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                <span class="text-white/50 text-sm">ROAS</span>
              </div>
              <div class="flex items-baseline gap-2">
                <span class="text-3xl font-bold text-white">4.2x</span>
                <span class="text-green-400 text-sm">+28%</span>
              </div>
            </div>
            <div class="bg-white/5 rounded-xl p-4">
              <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-google-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-white/50 text-sm">Cost/conversie</span>
              </div>
              <div class="flex items-baseline gap-2">
                <span class="text-3xl font-bold text-white">€9.2</span>
                <span class="text-green-400 text-sm">-15%</span>
              </div>
            </div>
          </div>

          <div class="mt-4 p-3 rounded-xl bg-green-500/10 border border-green-500/20">
            <div class="flex items-center gap-2 text-green-400 text-sm">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              Smart Bidding optimizează automat bazat pe conversiile tale
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AUDIENCES -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-violet-400 text-sm font-medium uppercase tracking-widest">Audiențe</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Găsește mai mulți<br><span class="text-gradient">ca cei mai buni clienți</span></h2>
      <p class="text-lg text-white/60">Folosește datele tale de clienți pentru a crea audiențe puternice în Google Ads.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="feature-card reveal">
        <div class="w-14 h-14 rounded-2xl bg-violet-500/20 flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Customer Match</h3>
        <p class="text-white/50 mb-4">Încarcă lista de cumpărători în Google Ads. Arată reclame celor care au mai cumpărat sau exclude-i pentru a găsi clienți noi.</p>
        <div class="flex items-center gap-2 text-violet-400 text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
          Sincronizare automată
        </div>
      </div>

      <div class="feature-card reveal reveal-delay-1">
        <div class="w-14 h-14 rounded-2xl bg-cyan-500/20 flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Similar Audiences</h3>
        <p class="text-white/50 mb-4">Google găsește oameni similari cu cumpărătorii tăi de bilete. Expandează reach-ul fără să pierzi relevanța.</p>
        <div class="flex items-center gap-2 text-cyan-400 text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          Expansiune inteligentă
        </div>
      </div>

      <div class="feature-card reveal reveal-delay-2">
        <div class="w-14 h-14 rounded-2xl bg-amber-500/20 flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Remarketing</h3>
        <p class="text-white/50 mb-4">Readucu-i pe cei care au văzut evenimente dar n-au cumpărat. Cart abandonat? Arată-le reclama.</p>
        <div class="flex items-center gap-2 text-amber-400 text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Urmărește călătoria
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SETUP -->
<section class="py-24 relative overflow-hidden">
  <div class="orb w-[400px] h-[400px] bg-blue-600/20 top-1/3 -left-40"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-green-400 text-sm font-medium uppercase tracking-widest">Setup</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Conectare în<br><span class="text-gradient-google">3 pași simpli</span></h2>
      <p class="text-lg text-white/60">Nu e nevoie de cunoștințe tehnice. Conectezi contul și gata.</p>
    </div>

    <div class="max-w-3xl mx-auto">
      <div class="space-y-8">
        <!-- Step 1 -->
        <div class="flex gap-6 reveal">
          <div class="flex-shrink-0">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-google-blue to-google-blue/70 flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-google-blue/30">1</div>
          </div>
          <div class="flex-1 pb-8 border-b border-white/10">
            <h3 class="text-xl font-semibold text-white mb-2">Conectează contul Google Ads</h3>
            <p class="text-white/50 mb-4">Din dashboard-ul Tixello, mergi la Integrări → Google Ads și apasă "Conectează". Te autentifici cu Google-ul tău.</p>
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-lg bg-white/5 border border-white/10">
              <svg class="w-5 h-5" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
              </svg>
              <span class="text-white/70 text-sm">OAuth securizat Google</span>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="flex gap-6 reveal reveal-delay-1">
          <div class="flex-shrink-0">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-google-green to-google-green/70 flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-google-green/30">2</div>
          </div>
          <div class="flex-1 pb-8 border-b border-white/10">
            <h3 class="text-xl font-semibold text-white mb-2">Selectează acțiunile de conversie</h3>
            <p class="text-white/50 mb-4">Alege ce evenimente vrei să trimiți: Purchase, Lead, Add to Cart. Sau creează acțiuni noi direct din interfață.</p>
            <div class="flex flex-wrap gap-2">
              <span class="px-3 py-1.5 rounded-lg bg-green-500/10 text-green-400 text-sm border border-green-500/20">✓ Purchase</span>
              <span class="px-3 py-1.5 rounded-lg bg-blue-500/10 text-blue-400 text-sm border border-blue-500/20">✓ Lead</span>
              <span class="px-3 py-1.5 rounded-lg bg-amber-500/10 text-amber-400 text-sm border border-amber-500/20">✓ Add to Cart</span>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="flex gap-6 reveal reveal-delay-2">
          <div class="flex-shrink-0">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-google-yellow to-google-yellow/70 flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-google-yellow/30">3</div>
          </div>
          <div class="flex-1">
            <h3 class="text-xl font-semibold text-white mb-2">Gata! Conversiile se trimit automat</h3>
            <p class="text-white/50 mb-4">Din acest moment, fiecare vânzare este trimisă automat către Google Ads. Verifică în contul tău că apar conversiile.</p>
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-green-500/10 text-green-400 text-sm border border-green-500/20">
              <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
              Conversii în timp real
            </div>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <div class="mt-12 text-center reveal reveal-delay-3">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn btn-google text-lg px-8 py-4">
          Conectează Google Ads acum
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <p class="text-white/30 text-sm mt-4">Inclus gratuit în toate planurile</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-4xl mx-auto px-6 lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="bg-gradient-to-br from-google-blue/10 to-google-green/10 rounded-3xl p-8 md:p-12 border border-white/10">
        <div class="flex items-center gap-1 mb-6">
          <svg class="w-6 h-6 text-google-yellow" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-google-yellow" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-google-yellow" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-google-yellow" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-google-yellow" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
          "Înainte cheltuiam €5000 pe Google Ads fără să știu ce funcționează. Acum văd că doar <span class="text-google-blue font-semibold">3 din 20 de cuvinte cheie</span> aduc 80% din vânzări. Am oprit restul și am dublat ROAS-ul."
        </blockquote>
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-full bg-gradient-to-br from-google-blue to-google-green"></div>
          <div>
            <div class="font-semibold text-white">Mihai T.</div>
            <div class="text-white/50">Organizator Festivaluri, Cluj</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-google-blue/20 via-transparent to-google-green/20"></div>
  <div class="orb w-[800px] h-[800px] bg-google-blue/30 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
    <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Știi ce<br><span class="text-gradient-google">funcționează</span></h2>
    <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Conectează Google Ads în 2 minute. Vezi exact care campanii, cuvinte cheie și reclame vând bilete. Inclus gratuit în toate planurile Tixello.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn btn-google text-lg px-10 py-4">
        Conectează Google Ads
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-ghost text-lg px-10 py-4">Vreau o demonstrație</a>
    </div>
    <div class="flex flex-wrap justify-center gap-6 mt-8 text-sm text-white/40 reveal reveal-delay-3">
      <span class="flex items-center gap-2"><svg class="w-4 h-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Search</span>
      <span class="flex items-center gap-2"><svg class="w-4 h-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> YouTube</span>
      <span class="flex items-center gap-2"><svg class="w-4 h-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Display</span>
      <span class="flex items-center gap-2"><svg class="w-4 h-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Performance Max</span>
      <span class="flex items-center gap-2"><svg class="w-4 h-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Shopping</span>
    </div>
  </div>
</section>

<!-- JAVASCRIPT -->
<script>
  // Intersection Observer for reveals
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Feature card hover effect
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);
    });
  });

  // Animate graph bars when visible
  const graphBars = document.querySelectorAll('.graph-bar');
  const barObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.height = entry.target.style.height;
      }
    });
  }, { threshold: 0.5 });
  graphBars.forEach(bar => barObserver.observe(bar));

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
</script>

<?php get_footer(); ?>
