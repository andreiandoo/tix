<?php
/**
 * Template Name: Pentru Artisti v2
 * Description: Artist-focused landing page - own your audience
 */

get_header();
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  @font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }
  ::selection { background: #7c3aed; color: white; }
  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #f472b6 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; animation: shimmer 4s linear infinite; }
  .text-gradient-rose { background: linear-gradient(135deg, #f43f5e 0%, #ec4899 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
  .reveal { opacity: 0; transform: translateY(50px); transition: all 0.9s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }
  .reveal-scale { opacity: 0; transform: scale(0.9); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal-scale.revealed { opacity: 1; transform: scale(1); }
  .hero-gradient { background: radial-gradient(ellipse 80% 50% at 50% -20%, rgba(236, 72, 153, 0.25), transparent), radial-gradient(ellipse 60% 40% at 80% 60%, rgba(124, 58, 237, 0.2), transparent), radial-gradient(ellipse 50% 30% at 20% 80%, rgba(6, 182, 212, 0.15), transparent); }
  .noise-bg::before { content: ''; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.03; pointer-events: none; }
  .glow-card { position: relative; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06); border-radius: 24px; overflow: hidden; transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1); }
  .glow-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), var(--glow-color, rgba(124, 58, 237, 0.15)), transparent 40%); opacity: 0; transition: opacity 0.5s; }
  .glow-card:hover::before { opacity: 1; }
  .glow-card:hover { border-color: var(--border-color, rgba(124, 58, 237, 0.3)); transform: translateY(-8px); box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3); }
  .problem-card { background: linear-gradient(135deg, rgba(244, 63, 94, 0.1), rgba(244, 63, 94, 0.02)); border: 1px solid rgba(244, 63, 94, 0.2); border-radius: 16px; padding: 24px; position: relative; overflow: hidden; }
  .problem-card::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: linear-gradient(180deg, #f43f5e, #ec4899); }
  .feature-icon { width: 64px; height: 64px; border-radius: 20px; display: flex; align-items: center; justify-content: center; position: relative; transition: transform 0.3s ease; }
  .feature-icon::after { content: ''; position: absolute; inset: 0; border-radius: inherit; background: inherit; filter: blur(20px); opacity: 0.4; z-index: -1; }
  .glow-card:hover .feature-icon { transform: scale(1.1) rotate(-5deg); }
  .audio-bar { width: 4px; background: linear-gradient(180deg, #7c3aed, #ec4899); border-radius: 2px; animation: wave 1s ease-in-out infinite; }
  .audio-bar:nth-child(1) { height: 20px; animation-delay: 0s; }
  .audio-bar:nth-child(2) { height: 35px; animation-delay: 0.1s; }
  .audio-bar:nth-child(3) { height: 25px; animation-delay: 0.2s; }
  .audio-bar:nth-child(4) { height: 40px; animation-delay: 0.3s; }
  .audio-bar:nth-child(5) { height: 30px; animation-delay: 0.4s; }
  .audio-bar:nth-child(6) { height: 20px; animation-delay: 0.5s; }
  .audio-bar:nth-child(7) { height: 35px; animation-delay: 0.6s; }
  @keyframes wave { 0%, 100% { transform: scaleY(1); } 50% { transform: scaleY(0.6); } }
  .counter-value { font-variant-numeric: tabular-nums; }
  .comparison-table { border-collapse: separate; border-spacing: 0; }
  .comparison-table th, .comparison-table td { border-bottom: 1px solid rgba(255,255,255,0.05); padding: 16px 20px; }
  .comparison-table tr:hover td { background: rgba(124, 58, 237, 0.05); }
  .testimonial-card { background: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01)); border: 1px solid rgba(255,255,255,0.08); border-radius: 24px; padding: 32px; position: relative; }
  .testimonial-card::before { content: '"'; position: absolute; top: 20px; left: 24px; font-size: 80px; font-family: Georgia, serif; color: rgba(124, 58, 237, 0.2); line-height: 1; }
  .float-element { position: absolute; pointer-events: none; z-index: 0; }
  .chart-bar { transition: all 0.3s ease; cursor: pointer; }
  .chart-bar:hover { filter: brightness(1.2); }
  .cta-primary { position: relative; overflow: hidden; background: linear-gradient(135deg, #7c3aed, #ec4899); transition: all 0.3s ease; }
  .cta-primary::before { content: ''; position: absolute; inset: 0; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transform: translateX(-100%); transition: transform 0.6s; }
  .cta-primary:hover::before { transform: translateX(100%); }
  .cta-primary:hover { transform: translateY(-2px); box-shadow: 0 20px 40px rgba(124, 58, 237, 0.4); }
  .stage-light { position: absolute; width: 300px; height: 600px; background: conic-gradient(from 180deg, transparent 0deg, rgba(124, 58, 237, 0.1) 30deg, transparent 60deg); filter: blur(40px); pointer-events: none; }
  .vinyl-record { width: 200px; height: 200px; border-radius: 50%; background: radial-gradient(circle at center, #1a1a27 30%, transparent 31%), repeating-radial-gradient(circle at center, #0a0a0f 0px, #0a0a0f 2px, #13131c 2px, #13131c 4px); position: relative; animation: spin 4s linear infinite; }
  .vinyl-record::after { content: ''; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, #7c3aed, #ec4899); }
  .ticket-3d { transform: perspective(1000px) rotateY(-5deg) rotateX(5deg); transition: transform 0.5s ease; }
  .ticket-3d:hover { transform: perspective(1000px) rotateY(0deg) rotateX(0deg); }
</style>

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">

  <!-- ==================== HERO SECTION ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden hero-gradient">
    <!-- Stage Lights -->
    <div class="stage-light -top-20 -left-20 rotate-[30deg] opacity-50"></div>
    <div class="stage-light -top-20 -right-20 -rotate-[30deg] opacity-50"></div>

    <!-- Floating Elements -->
    <div class="float-element top-32 left-[8%] animate-float">
      <div class="flex items-center justify-center w-16 h-16 text-3xl border rounded-2xl bg-gradient-to-br from-brand-pink/20 to-brand-violet/20 backdrop-blur-sm border-white/10">🎤</div>
    </div>
    <div class="float-element top-48 right-[12%] animate-float-slow" style="animation-delay: 1s;">
      <div class="flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-violet/20 backdrop-blur-sm border-white/10">🎸</div>
    </div>
    <div class="float-element bottom-40 left-[15%] animate-float-fast" style="animation-delay: 0.5s;">
      <div class="flex items-center justify-center w-12 h-12 text-xl border rounded-xl bg-gradient-to-br from-brand-amber/20 to-brand-rose/20 backdrop-blur-sm border-white/10">🎹</div>
    </div>
    <div class="float-element bottom-32 right-[8%] animate-float" style="animation-delay: 2s;">
      <div class="flex items-center justify-center text-2xl border w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green/20 to-brand-cyan/20 backdrop-blur-sm border-white/10">🎵</div>
    </div>

    <!-- Vinyl Record Background -->
    <div class="absolute -bottom-20 -left-20 opacity-10">
      <div class="vinyl-record" style="width: 400px; height: 400px;"></div>
    </div>

    <div class="relative z-10 max-w-6xl px-6 py-20 mx-auto lg:px-8">
      <div class="text-center">

        <!-- Badge -->
        <div class="reveal inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-brand-pink/10 border border-brand-pink/20 mb-8">
          <div class="flex items-end h-6 gap-1">
            <div class="audio-bar"></div>
            <div class="audio-bar"></div>
            <div class="audio-bar"></div>
            <div class="audio-bar"></div>
            <div class="audio-bar"></div>
            <div class="audio-bar"></div>
            <div class="audio-bar"></div>
          </div>
          <span class="text-sm font-medium text-brand-pink">Platforma creata pentru artisti</span>
        </div>

        <!-- Headline -->
        <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-[1.05] reveal reveal-delay-1">
          Detine-ti Audienta.<br>
          <span class="text-gradient">Controleaza-ti Biletele.</span>
        </h1>

        <!-- Subheadline -->
        <p class="max-w-3xl mx-auto mb-8 text-xl leading-relaxed md:text-2xl text-white/60 reveal reveal-delay-2">
          Tu creezi arta. Tu construiesti baza de fani. <strong class="text-white">Meriti o relatie directa</strong> cu oamenii care iti iubesc munca.
        </p>

        <!-- Stats Row -->
        <div class="flex flex-wrap justify-center gap-8 mb-12 md:gap-16 reveal reveal-delay-3">
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 85) count++; else clearInterval(interval); }, 20) }, 500)">
            <div class="text-4xl font-bold md:text-5xl font-display text-gradient counter-value"><span x-text="count"></span>%</div>
            <div class="text-sm text-white/50">Mai mult profit pastrat</div>
          </div>
          <div class="hidden w-px h-16 sm:block bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 100) count++; else clearInterval(interval); }, 15) }, 700)">
            <div class="text-4xl font-bold md:text-5xl font-display text-gradient counter-value"><span x-text="count"></span>%</div>
            <div class="text-sm text-white/50">Datele tale, ale tale</div>
          </div>
          <div class="hidden w-px h-16 sm:block bg-white/10"></div>
          <div class="text-center" x-data="{ count: 0 }" x-init="setTimeout(() => { let interval = setInterval(() => { if(count < 5) count++; else clearInterval(interval); }, 300) }, 900)">
            <div class="text-4xl font-bold md:text-5xl font-display text-gradient counter-value"><span x-text="count"></span> min</div>
            <div class="text-sm text-white/50">Configurare eveniment</div>
          </div>
        </div>

        <!-- CTAs -->
        <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-4">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-3 px-8 py-4 text-lg font-semibold text-white rounded-full group cta-primary">
            <span>Creeaza Cont Gratuit</span>
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 text-lg font-semibold text-white transition-all border rounded-full group bg-white/5 border-white/10 hover:bg-white/10 hover:border-white/20">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Vezi Demo</span>
          </a>
        </div>

        <!-- Trust Badges -->
        <div class="flex flex-wrap justify-center gap-6 mt-12 reveal">
          <div class="flex items-center gap-2 text-sm text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Fara card de credit</span>
          </div>
          <div class="flex items-center gap-2 text-sm text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Evenimente gratuite = 0 costuri</span>
          </div>
          <div class="flex items-center gap-2 text-sm text-white/40">
            <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Anuleaza oricand</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute -translate-x-1/2 bottom-8 left-1/2 animate-bounce-soft">
      <div class="flex items-start justify-center w-6 h-10 p-2 border-2 rounded-full border-white/20">
        <div class="w-1.5 h-3 rounded-full bg-white/40 animate-pulse"></div>
      </div>
    </div>
  </section>

  <!-- ==================== THE PROBLEM SECTION ==================== -->
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-dark-900 via-dark-850 to-dark-900"></div>

    <div class="relative z-10 max-w-6xl px-6 mx-auto lg:px-8">
      <!-- Section Header -->
      <div class="mb-20 text-center reveal">
        <span class="inline-block px-4 py-2 mb-4 text-sm font-medium rounded-full bg-brand-rose/10 text-brand-rose">Problema</span>
        <h2 class="mb-6 text-4xl font-bold text-white font-display md:text-6xl">
          Modelul traditional<br><span class="text-gradient-rose">e stricat.</span>
        </h2>
        <p class="max-w-2xl mx-auto text-xl text-white/50">
          Muncesti ani sa construiesti un following, si cand fanii vor in sfarsit sa te vada live...
        </p>
      </div>

      <!-- Problem Cards Grid -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="problem-card reveal">
          <div class="mb-4 text-3xl">💸</div>
          <h3 class="mb-2 text-lg font-semibold text-white">Comisioane Uriase</h3>
          <p class="text-sm text-white/50">Platformele de ticketing iau procente mari si trec costuri si mai mari clientilor.</p>
          <div class="flex items-center gap-2 mt-4">
            <div class="flex-1 h-2 overflow-hidden rounded-full bg-dark-800">
              <div class="h-full w-[35%] bg-gradient-to-r from-brand-rose to-brand-pink rounded-full"></div>
            </div>
            <span class="text-xs font-medium text-brand-rose">-35%</span>
          </div>
        </div>

        <div class="problem-card reveal reveal-delay-1">
          <div class="mb-4 text-3xl">🙈</div>
          <h3 class="mb-2 text-lg font-semibold text-white">Fani Invizibili</h3>
          <p class="text-sm text-white/50">Nu vezi niciodata cine cumpara bilete. Platformele pastreaza acele date pentru ele.</p>
          <div class="flex items-center gap-3 mt-4">
            <div class="flex items-center justify-center w-8 h-8 text-lg rounded-full bg-dark-700">?</div>
            <div class="flex items-center justify-center w-8 h-8 text-lg rounded-full bg-dark-700">?</div>
            <div class="flex items-center justify-center w-8 h-8 text-lg rounded-full bg-dark-700">?</div>
            <span class="text-xs text-white/30">Fanii tai, necunoscuti</span>
          </div>
        </div>

        <div class="problem-card reveal reveal-delay-2">
          <div class="mb-4 text-3xl">🎭</div>
          <h3 class="mb-2 text-lg font-semibold text-white">Brand Ascuns</h3>
          <p class="text-sm text-white/50">Identitatea ta dispare in spatele site-urilor generice de ticketing.</p>
          <div class="px-3 py-2 mt-4 text-center border rounded-lg bg-dark-800 border-white/5">
            <span class="font-mono text-xs text-white/30">generic-tickets.com/event/12847</span>
          </div>
        </div>

        <div class="problem-card reveal">
          <div class="mb-4 text-3xl">🤖</div>
          <h3 class="mb-2 text-lg font-semibold text-white">Scalperi & Boti</h3>
          <p class="text-sm text-white/50">Scalperii prind biletele si le revand la preturi pe care nu le vezi niciodata.</p>
          <div class="flex items-center justify-between mt-4 text-xs">
            <span class="text-white/40">Pret original: <span class="text-white">150 RON</span></span>
            <span class="text-brand-rose">→ Revandut: 450 RON</span>
          </div>
        </div>

        <div class="problem-card reveal reveal-delay-1">
          <div class="mb-4 text-3xl">📵</div>
          <h3 class="mb-2 text-lg font-semibold text-white">Zero Comunicare</h3>
          <p class="text-sm text-white/50">Nu poti vorbi direct cu oamenii care iti iubesc muzica.</p>
          <div class="flex items-center gap-2 mt-4">
            <div class="px-3 py-1.5 rounded-lg bg-dark-800 text-white/20 text-xs">Email blocat</div>
            <div class="px-3 py-1.5 rounded-lg bg-dark-800 text-white/20 text-xs">SMS interzis</div>
          </div>
        </div>

        <div class="flex flex-col items-center justify-center text-center problem-card reveal reveal-delay-2">
          <div class="mb-4 text-5xl">😤</div>
          <p class="font-medium text-white">Suna familiar?</p>
          <p class="mt-1 text-sm text-white/40">Exista o cale mai buna.</p>
          <div class="mt-4">
            <svg class="w-8 h-8 text-brand-green animate-bounce-soft" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== THE SOLUTION SECTION ==================== -->
  <section class="relative py-32 overflow-hidden bg-dark-850">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-gradient-to-b from-brand-violet/10 to-transparent rounded-full blur-[150px] pointer-events-none"></div>

    <div class="relative z-10 px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="mb-20 text-center reveal">
        <span class="inline-block px-4 py-2 mb-4 text-sm font-medium rounded-full bg-brand-green/10 text-brand-green">Solutia</span>
        <h2 class="mb-6 text-4xl font-bold text-white font-display md:text-6xl">
          Tixello<br><span class="text-gradient">pune artistii in control.</span>
        </h2>
      </div>

      <!-- Features Bento Grid -->
      <div class="grid gap-6 lg:grid-cols-3">

        <!-- Feature 1: Brand -->
        <div class="p-8 glow-card lg:col-span-2" style="--glow-color: rgba(236, 72, 153, 0.15); --border-color: rgba(236, 72, 153, 0.3);">
          <div class="grid items-center gap-8 md:grid-cols-2">
            <div>
              <div class="mb-6 feature-icon bg-gradient-to-br from-brand-pink to-brand-violet">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
              </div>
              <h3 class="mb-3 text-2xl font-bold text-white font-display">Brandul Tau, Magazinul Tau</h3>
              <p class="mb-4 text-white/50">Paginile cu brand personalizat pun identitatea ta in prim plan. Fotografiile tale, culorile tale, vocea ta.</p>
              <ul class="space-y-2">
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Domeniu personalizat</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Email-uri white-label</li>
                <li class="flex items-center gap-2 text-sm text-white/70"><svg class="w-4 h-4 text-brand-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Checkout cu branding propriu</li>
              </ul>
            </div>
            <div class="relative">
              <!-- Mockup Event Page -->
              <div class="overflow-hidden border shadow-2xl ticket-3d bg-dark-800 rounded-2xl border-white/10">
                <div class="relative h-32 bg-gradient-to-br from-brand-pink/30 to-brand-violet/30">
                  <div class="absolute bottom-4 left-4">
                    <div class="w-12 h-12 rounded-xl bg-white/20 backdrop-blur"></div>
                  </div>
                </div>
                <div class="p-4">
                  <div class="mb-1 font-semibold text-white">Concert Live 2025</div>
                  <div class="mb-3 text-xs text-white/40">numeartist.tixello.ro</div>
                  <div class="flex gap-2">
                    <div class="flex-1 h-8 rounded-lg bg-brand-pink/20"></div>
                    <div class="flex items-center justify-center w-20 h-8 text-xs font-medium text-white rounded-lg bg-brand-pink">Cumpara</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Feature 2: Data -->
        <div class="p-8 glow-card" style="--glow-color: rgba(6, 182, 212, 0.15); --border-color: rgba(6, 182, 212, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-cyan to-brand-green">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Cunoaste-ti Fanii</h3>
          <p class="mb-4 text-white/50">Fiecare fan care cumpara un bilet devine parte din comunitatea TA.</p>

          <!-- Mini Chart -->
          <div class="p-4 mt-4 bg-dark-900/50 rounded-xl">
            <div class="mb-2 text-xs text-white/40">Crestere lista email</div>
            <div class="flex items-end h-16 gap-1">
              <div class="flex-1 rounded-t chart-bar bg-brand-cyan/40" style="height: 30%;"></div>
              <div class="flex-1 rounded-t chart-bar bg-brand-cyan/50" style="height: 45%;"></div>
              <div class="flex-1 rounded-t chart-bar bg-brand-cyan/60" style="height: 55%;"></div>
              <div class="flex-1 rounded-t chart-bar bg-brand-cyan/70" style="height: 70%;"></div>
              <div class="flex-1 rounded-t chart-bar bg-brand-cyan/80" style="height: 85%;"></div>
              <div class="flex-1 rounded-t chart-bar bg-brand-cyan" style="height: 100%;"></div>
            </div>
            <div class="flex justify-between text-[10px] text-white/30 mt-1">
              <span>Ian</span><span>Feb</span><span>Mar</span><span>Apr</span><span>Mai</span><span>Iun</span>
            </div>
          </div>
        </div>

        <!-- Feature 3: Pricing -->
        <div class="p-8 glow-card" style="--glow-color: rgba(16, 185, 129, 0.15); --border-color: rgba(16, 185, 129, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-green to-brand-cyan">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Preturi Corecte</h3>
          <p class="mb-4 text-white/50">Structura clara, comisioane mici. Tu alegi cine plateste.</p>

          <!-- Comparison Mini -->
          <div class="mt-4 space-y-3">
            <div class="flex items-center justify-between">
              <span class="text-sm text-white/60">Platforme traditionale</span>
              <span class="text-sm font-medium text-brand-rose">15-25%</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-sm text-white">Tixello</span>
              <span class="text-sm font-medium text-brand-green">3-5%</span>
            </div>
            <div class="h-px my-2 bg-white/10"></div>
            <div class="flex items-center justify-between">
              <span class="text-sm text-white/60">Economii</span>
              <span class="text-sm font-bold text-brand-green">+20% profit</span>
            </div>
          </div>
        </div>

        <!-- Feature 4: Anti-Scalper -->
        <div class="p-8 glow-card" style="--glow-color: rgba(245, 158, 11, 0.15); --border-color: rgba(245, 158, 11, 0.3);">
          <div class="mb-6 feature-icon bg-gradient-to-br from-brand-amber to-brand-rose">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold text-white font-display">Lupta cu Scalperii</h3>
          <p class="mb-4 text-white/50">Management cozi, controale transfer, verificare fani.</p>

          <div class="flex items-center gap-3 p-3 mt-4 border rounded-xl bg-brand-green/10 border-brand-green/20">
            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-brand-green/20">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div>
              <div class="text-sm font-medium text-white">Protectie activa</div>
              <div class="text-xs text-white/50">Biletele ajung la fani reali</div>
            </div>
          </div>
        </div>

        <!-- Feature 5: VIP & Merch (Large) -->
        <div class="p-8 glow-card lg:col-span-2" style="--glow-color: rgba(124, 58, 237, 0.15); --border-color: rgba(124, 58, 237, 0.3);">
          <div class="grid items-center gap-8 md:grid-cols-2">
            <div>
              <div class="mb-6 feature-icon bg-gradient-to-br from-brand-violet to-brand-pink">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
              </div>
              <h3 class="mb-3 text-2xl font-bold text-white font-display">Experiente VIP & Merchandise</h3>
              <p class="mb-4 text-white/50">Pachetele VIP si add-on-urile la checkout pot genera mai mult decat biletele standard.</p>

              <div class="grid grid-cols-2 gap-3 mt-6">
                <div class="p-3 text-center border rounded-xl bg-dark-800/50 border-white/5">
                  <div class="text-xl font-bold text-brand-violet">+45%</div>
                  <div class="text-xs text-white/40">Venituri din VIP</div>
                </div>
                <div class="p-3 text-center border rounded-xl bg-dark-800/50 border-white/5">
                  <div class="text-xl font-bold text-brand-pink">+25%</div>
                  <div class="text-xs text-white/40">Add-on conversie</div>
                </div>
              </div>
            </div>
            <div class="space-y-3">
              <!-- VIP Package Cards -->
              <div class="p-4 border rounded-xl bg-gradient-to-r from-brand-violet/20 to-brand-pink/10 border-brand-violet/20">
                <div class="flex items-center justify-between mb-2">
                  <span class="font-medium text-white">🌟 VIP Meet & Greet</span>
                  <span class="font-bold text-brand-violet">499 RON</span>
                </div>
                <div class="text-xs text-white/40">Bilet + Intalnire + Foto + Merch semnat</div>
              </div>
              <div class="p-4 border rounded-xl bg-dark-800/50 border-white/10">
                <div class="flex items-center justify-between mb-2">
                  <span class="font-medium text-white">🎫 Soundcheck Access</span>
                  <span class="font-bold text-white/70">299 RON</span>
                </div>
                <div class="text-xs text-white/40">Bilet + Acces soundcheck exclusiv</div>
              </div>
              <div class="p-4 border rounded-xl bg-dark-800/50 border-white/10">
                <div class="flex items-center justify-between mb-2">
                  <span class="font-medium text-white">👕 Bundle Merch</span>
                  <span class="font-bold text-white/70">+89 RON</span>
                </div>
                <div class="text-xs text-white/40">Tricou editie limitata + Poster</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==================== COMPARISON SECTION ==================== -->
  <section class="relative py-32 overflow-hidden">
    <div class="max-w-5xl px-6 mx-auto lg:px-8">
      <div class="mb-16 text-center reveal">
        <h2 class="mb-4 text-4xl font-bold text-white font-display md:text-5xl">
          Tixello vs. Ticketing Traditional
        </h2>
        <p class="text-lg text-white/50">Diferenta e clara.</p>
      </div>

      <div class="reveal">
        <div class="overflow-hidden border bg-dark-800/50 rounded-3xl border-white/10">
          <table class="w-full comparison-table">
            <thead>
              <tr class="bg-dark-900/50">
                <th class="py-4 text-sm font-medium text-left text-white/50">Caracteristica</th>
                <th class="text-sm font-medium text-center text-white/50">Platforme Traditionale</th>
                <th class="text-sm font-medium text-center"><span class="text-gradient">Tixello</span></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-white/70">Proprietate date fani</td>
                <td class="text-center"><span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-brand-rose/20 text-brand-rose">✗</span></td>
                <td class="text-center"><span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-brand-green/20 text-brand-green">✓</span></td>
              </tr>
              <tr>
                <td class="text-white/70">Branding personalizat complet</td>
                <td class="text-center"><span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-brand-rose/20 text-brand-rose">✗</span></td>
                <td class="text-center"><span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-brand-green/20 text-brand-green">✓</span></td>
              </tr>
              <tr>
                <td class="text-white/70">Comisioane</td>
                <td class="font-medium text-center text-brand-rose">15-25%</td>
                <td class="font-medium text-center text-brand-green">3-5%</td>
              </tr>
              <tr>
                <td class="text-white/70">Protectie anti-scalper</td>
                <td class="text-center text-white/40">Limitata</td>
                <td class="text-center"><span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-brand-green/20 text-brand-green">✓</span></td>
              </tr>
              <tr>
                <td class="text-white/70">Pachete VIP & Merch</td>
                <td class="text-center text-white/40">Basic</td>
                <td class="text-center"><span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-brand-green/20 text-brand-green">✓</span></td>
              </tr>
              <tr>
                <td class="text-white/70">Export date oriunde</td>
                <td class="text-center"><span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-brand-rose/20 text-brand-rose">✗</span></td>
                <td class="text-center"><span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-brand-green/20 text-brand-green">✓</span></td>
              </tr>
              <tr>
                <td class="text-white/70">Evenimente gratuite</td>
                <td class="text-center text-white/40">Cu taxe</td>
                <td class="font-medium text-center text-brand-green">Gratuit</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIALS ==================== -->
  <section class="relative py-32 overflow-hidden bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="mb-16 text-center reveal">
        <span class="inline-block px-4 py-2 mb-4 text-sm font-medium rounded-full bg-brand-violet/10 text-brand-violet">Testimoniale</span>
        <h2 class="text-4xl font-bold text-white font-display md:text-5xl">Ce spun artistii</h2>
      </div>

      <div class="grid gap-6 md:grid-cols-3">
        <div class="testimonial-card reveal">
          <p class="relative z-10 mb-6 text-lg leading-relaxed text-white/70">
            "Obisnuiam sa nu am nicio idee cine cumpara bilete la show-urile mele. Acum am o lista de email reala si pot vorbi direct cu fanii mei. <strong class="text-white">Asta e nepretuit.</strong>"
          </p>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 text-lg text-white rounded-full bg-gradient-to-br from-brand-pink to-brand-violet">🎤</div>
            <div>
              <div class="font-medium text-white">Maria T.</div>
              <div class="text-sm text-white/40">Cantautoare Independenta</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-1">
          <p class="relative z-10 mb-6 text-lg leading-relaxed text-white/70">
            "Pachetele VIP prin Tixello ne-au facut <strong class="text-white">mai multi bani decat restul turneului combinat.</strong> Fanii vor experiente—acum le putem vinde cum trebuie."
          </p>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 text-lg text-white rounded-full bg-gradient-to-br from-brand-cyan to-brand-green">🎸</div>
            <div>
              <div class="font-medium text-white">Alex P.</div>
              <div class="text-sm text-white/40">Manager de Trupa</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card reveal reveal-delay-2">
          <p class="relative z-10 mb-6 text-lg leading-relaxed text-white/70">
            "Dupa ani de lupte cu companiile de ticketing care ne tratau ca pe un numar, <strong class="text-white">Tixello chiar se simte ca un partener.</strong>"
          </p>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center w-12 h-12 text-lg text-white rounded-full bg-gradient-to-br from-brand-amber to-brand-rose">🎹</div>
            <div>
              <div class="font-medium text-white">Andrei M.</div>
              <div class="text-sm text-white/40">Promotor DIY / Artist</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CAREER STAGES ==================== -->
  <section class="relative py-32 overflow-hidden">
    <div class="max-w-6xl px-6 mx-auto lg:px-8">
      <div class="mb-16 text-center reveal">
        <h2 class="mb-4 text-4xl font-bold text-white font-display md:text-5xl">
          Pentru fiecare etapa a carierei tale
        </h2>
      </div>

      <div class="grid gap-6 md:grid-cols-3">
        <!-- Emerging -->
        <div class="p-8 glow-card reveal" style="--glow-color: rgba(236, 72, 153, 0.15); --border-color: rgba(236, 72, 153, 0.3);">
          <div class="mb-6 text-5xl">🌱</div>
          <h3 class="mb-3 text-xl font-bold text-white font-display">Artisti Emergenti</h3>
          <p class="mb-4 text-white/50">Instrumente profesionale fara costuri profesionale. Evenimentele gratuite nu costa nimic.</p>
          <div class="p-3 border rounded-xl bg-brand-pink/10 border-brand-pink/20">
            <div class="text-sm font-medium text-brand-pink">Perfect pentru:</div>
            <div class="text-sm text-white/60">Open mics, showcase-uri, prime concerte</div>
          </div>
        </div>

        <!-- Touring -->
        <div class="p-8 glow-card reveal reveal-delay-1" style="--glow-color: rgba(124, 58, 237, 0.15); --border-color: rgba(124, 58, 237, 0.3);">
          <div class="mb-6 text-5xl">🚐</div>
          <h3 class="mb-3 text-xl font-bold text-white font-display">Muzicieni in Turneu</h3>
          <p class="mb-4 text-white/50">Gestioneaza multiple date eficient. Cloneaza show-uri, urmareste metrici la nivel de turneu.</p>
          <div class="p-3 border rounded-xl bg-brand-violet/10 border-brand-violet/20">
            <div class="text-sm font-medium text-brand-violet">Perfect pentru:</div>
            <div class="text-sm text-white/60">Tururi 10-50 date, club-uri si teatre</div>
          </div>
        </div>

        <!-- Established -->
        <div class="p-8 glow-card reveal reveal-delay-2" style="--glow-color: rgba(6, 182, 212, 0.15); --border-color: rgba(6, 182, 212, 0.3);">
          <div class="mb-6 text-5xl">⭐</div>
          <h3 class="mb-3 text-xl font-bold text-white font-display">Acte Consacrate</h3>
          <p class="mb-4 text-white/50">Personalizarea si controlul datelor pe care platformele majore refuza sa le ofere.</p>
          <div class="p-3 border rounded-xl bg-brand-cyan/10 border-brand-cyan/20">
            <div class="text-sm font-medium text-brand-cyan">Perfect pentru:</div>
            <div class="text-sm text-white/60">Arene, festivaluri, fan clubs</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== HOW IT WORKS ==================== -->
  <section class="relative py-32 overflow-hidden bg-dark-850">
    <div class="max-w-5xl px-6 mx-auto lg:px-8">
      <div class="mb-16 text-center reveal">
        <h2 class="mb-4 text-4xl font-bold text-white font-display md:text-5xl">
          Incepe sa vinzi in <span class="text-gradient">5 minute</span>
        </h2>
      </div>

      <div class="space-y-6">
        <!-- Step 1 -->
        <div class="flex items-center gap-6 reveal">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white rounded-2xl bg-gradient-to-br from-brand-violet to-brand-pink font-display">1</div>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-white">Creeaza-ti contul gratuit</h3>
            <p class="text-white/50">Fara card de credit, fara angajament. 30 de secunde.</p>
          </div>
          <div class="hidden text-sm font-medium md:block text-brand-green">30 sec</div>
        </div>

        <div class="w-px h-8 ml-8 bg-gradient-to-b from-brand-violet to-brand-cyan"></div>

        <!-- Step 2 -->
        <div class="flex items-center gap-6 reveal reveal-delay-1">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white rounded-2xl bg-gradient-to-br from-brand-cyan to-brand-green font-display">2</div>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-white">Construieste primul show</h3>
            <p class="text-white/50">Adauga detalii, incarca imagini, seteaza preturi si categorii.</p>
          </div>
          <div class="hidden text-sm font-medium md:block text-brand-green">3 min</div>
        </div>

        <div class="w-px h-8 ml-8 bg-gradient-to-b from-brand-cyan to-brand-green"></div>

        <!-- Step 3 -->
        <div class="flex items-center gap-6 reveal reveal-delay-2">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white rounded-2xl bg-gradient-to-br from-brand-green to-brand-amber font-display">3</div>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-white">Conecteaza platile</h3>
            <p class="text-white/50">Leaga Stripe sau alt procesator pentru a primi fonduri direct.</p>
          </div>
          <div class="hidden text-sm font-medium md:block text-brand-green">1 min</div>
        </div>

        <div class="w-px h-8 ml-8 bg-gradient-to-b from-brand-green to-brand-amber"></div>

        <!-- Step 4 -->
        <div class="flex items-center gap-6 reveal reveal-delay-3">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white rounded-2xl bg-gradient-to-br from-brand-amber to-brand-rose font-display">4</div>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-white">Partajeaza si vinde!</h3>
            <p class="text-white/50">Posteaza pe social, trimite email listei, urmareste vanzarile live.</p>
          </div>
          <div class="hidden text-sm font-medium md:block text-brand-pink">🎉</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="relative py-32 overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
      <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-brand-pink/20 rounded-full blur-[150px]"></div>
      <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-brand-violet/20 rounded-full blur-[150px]"></div>
    </div>

    <div class="relative z-10 max-w-4xl px-6 mx-auto text-center lg:px-8">
      <div class="reveal">
        <div class="mb-6 text-6xl">🎤</div>
        <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl">
          Fanii tai<br><span class="text-gradient">asteapta.</span>
        </h2>
        <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60">
          Nu mai lasa platformele sa se puna intre tine si oamenii care iti iubesc muzica.
          <strong class="text-white">Preia controlul azi.</strong>
        </p>

        <div class="flex flex-col justify-center gap-4 mb-8 sm:flex-row">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-3 px-10 py-5 text-lg font-semibold text-white rounded-full group cta-primary">
            <span>Creeaza Cont Gratuit</span>
            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/demo')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-5 text-lg font-semibold text-white transition-all border rounded-full bg-white/10 border-white/20 hover:bg-white/20">
            Programeaza Demo
          </a>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
          <div class="flex items-center gap-2 text-white/40">
            <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Gratuit pentru evenimente gratuite</span>
          </div>
          <div class="flex items-center gap-2 text-white/40">
            <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Fara costuri lunare</span>
          </div>
          <div class="flex items-center gap-2 text-white/40">
            <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>Anuleaza oricand</span>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
  // Reveal on Scroll
  const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); } });
  }, observerOptions);
  document.querySelectorAll('.reveal, .reveal-scale').forEach(el => { observer.observe(el); });

  // Mouse tracking for glow cards
  document.querySelectorAll('.glow-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mouse-x', e.clientX - rect.left + 'px');
      card.style.setProperty('--mouse-y', e.clientY - rect.top + 'px');
    });
  });

  // Parallax effect for floating elements
  document.addEventListener('mousemove', (e) => {
    const floatElements = document.querySelectorAll('.float-element');
    const mouseX = e.clientX / window.innerWidth - 0.5;
    const mouseY = e.clientY / window.innerHeight - 0.5;
    floatElements.forEach((el, index) => {
      const speed = (index + 1) * 10;
      const x = mouseX * speed;
      const y = mouseY * speed;
      el.style.transform = `translate(${x}px, ${y}px)`;
    });
  });
</script>

<?php get_footer(); ?>
