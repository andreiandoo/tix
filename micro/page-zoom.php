<?php
/**
 * Template Name: Micro - Zoom
 * Description: Pagina integrării Zoom - Evenimente Virtuale Automatizate
 */

get_header();
?>

<style>
  /* Zoom Page Specific Styles - Overrides for blue theme */
  .feature-card-zoom {
    background: linear-gradient(135deg, rgba(45, 140, 255, 0.08) 0%, rgba(45, 140, 255, 0.02) 100%);
  }
  .feature-card-zoom::before {
    background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(45, 140, 255, 0.15), transparent 50%);
  }
  .feature-card-zoom:hover {
    border-color: rgba(45, 140, 255, 0.3);
  }

  .use-case-card-zoom:hover {
    border-color: rgba(45, 140, 255, 0.3);
  }

  .scroll-progress-zoom {
    background: linear-gradient(90deg, #2D8CFF, #5CA4FF) !important;
  }
</style>

<main class="">
<div class="scroll-progress scroll-progress-zoom" id="scroll-progress"></div>

<!-- HERO -->
<section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
  <div class="orb w-[600px] h-[600px] bg-zoom-blue/20 -top-40 -right-40"></div>
  <div class="orb w-[400px] h-[400px] bg-violet-500/15 bottom-20 -left-20"></div>

  <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
    <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
      <div class="reveal">
        <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-zoom-blue/10 border-zoom-blue/20">
          <svg class="w-5 h-5 text-zoom-blue" viewBox="0 0 24 24" fill="currentColor">
            <path d="M4 3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7v2H6v2h12v-2h-5v-2h7a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H4zm0 2h16v10H4V5zm4.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM15 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-6.5 5a4 4 0 0 1 7 0h-7z"/>
          </svg>
          <span class="text-sm font-medium text-zoom-blue">Integrare Oficială Zoom</span>
        </div>

        <h1 class="mb-6 text-5xl font-bold text-white font-display md:text-6xl lg:text-7xl leading-extra-tight">
          Evenimente<br><span class="text-gradient-zoom">virtuale</span>
        </h1>

        <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
          Publici evenimentul, întâlnirea Zoom se creează singură. Vinzi bilete, participanții se adaugă automat. <strong class="text-white">Zero configurare manuală.</strong>
        </p>

        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn btn-zoom">
            Conectează Zoom
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#cum-functioneaza" class="btn btn-ghost">Vezi cum funcționează</a>
        </div>

        <div class="flex flex-wrap items-center gap-6 text-sm text-white/50">
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Meetings & Webinars
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Până la 50.000 participanți
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Urmărire prezență
          </div>
        </div>
      </div>

      <!-- Hero Visual - Zoom Meeting Mockup -->
      <div class="reveal reveal-delay-1">
        <div class="zoom-window">
          <div class="zoom-header">
            <div class="flex gap-2">
              <div class="zoom-dot bg-rose-500"></div>
              <div class="zoom-dot bg-amber-500"></div>
              <div class="bg-green-500 zoom-dot"></div>
            </div>
            <div class="flex items-center gap-3">
              <div class="recording-badge">REC</div>
              <div class="flex items-center gap-2 text-sm text-white/60">
                <div class="live-dot"></div>
                <span>Live</span>
              </div>
            </div>
            <div class="text-sm text-white/40">Workshop de Vară 2025</div>
          </div>

          <!-- Video Grid -->
          <div class="p-4">
            <div class="mb-4 video-grid">
              <!-- Main Speaker -->
              <div class="relative col-span-2 row-span-2 video-tile">
                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="flex items-center justify-center w-24 h-24 text-3xl font-bold text-white rounded-full bg-gradient-to-br from-violet-500 to-cyan-500">AM</div>
                </div>
                <div class="absolute flex items-center gap-2 bottom-3 left-3">
                  <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                  <span class="text-sm font-medium text-white">Ana Maria (Host)</span>
                </div>
              </div>

              <!-- Participants -->
              <div class="relative video-tile">
                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="flex items-center justify-center w-12 h-12 text-lg font-bold text-white rounded-full bg-gradient-to-br from-amber-500 to-orange-500">IP</div>
                </div>
                <div class="absolute text-xs text-white bottom-2 left-2">Ion P.</div>
              </div>
              <div class="relative video-tile">
                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="flex items-center justify-center w-12 h-12 text-lg font-bold text-white rounded-full bg-gradient-to-br from-green-500 to-emerald-500">MD</div>
                </div>
                <div class="absolute text-xs text-white bottom-2 left-2">Maria D.</div>
              </div>
              <div class="relative video-tile">
                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="flex items-center justify-center w-12 h-12 text-lg font-bold text-white rounded-full bg-gradient-to-br from-rose-500 to-pink-500">AT</div>
                </div>
                <div class="absolute text-xs text-white bottom-2 left-2">Andrei T.</div>
              </div>
              <div class="relative video-tile">
                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="flex items-center justify-center w-12 h-12 text-lg font-bold text-white rounded-full bg-gradient-to-br from-zoom-blue to-blue-500">+42</div>
                </div>
                <div class="absolute text-xs text-white bottom-2 left-2">Mai mulți...</div>
              </div>
            </div>

            <!-- Bottom Controls -->
            <div class="flex items-center justify-center gap-4 py-3">
              <button class="flex items-center justify-center w-12 h-12 transition-colors rounded-full bg-white/10 text-white/70 hover:bg-white/20">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
              </button>
              <button class="flex items-center justify-center w-12 h-12 transition-colors rounded-full bg-white/10 text-white/70 hover:bg-white/20">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
              </button>
              <button class="flex items-center justify-center w-12 h-12 text-white transition-colors rounded-full bg-rose-500 hover:bg-rose-600">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z"/></svg>
              </button>
              <button class="flex items-center justify-center w-12 h-12 transition-colors rounded-full bg-white/10 text-white/70 hover:bg-white/20">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Floating participant count -->
        <div class="absolute p-4 border shadow-xl -bottom-4 -right-4 bg-dark-800 rounded-2xl border-white/10 float">
          <div class="flex items-center gap-3">
            <div class="relative">
              <div class="flex items-center justify-center w-12 h-12 rounded-full bg-zoom-blue/20">
                <svg class="w-6 h-6 text-zoom-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </div>
              <div class="absolute inset-0 w-12 h-12 pulse-ring text-zoom-blue"></div>
            </div>
            <div>
              <div class="text-xs text-white/50">Participanți online</div>
              <div class="text-xl font-bold text-zoom-blue" x-data="{ count: 0 }" x-init="
                let interval = setInterval(() => { if(count < 247) count += 5; else { count = 247; clearInterval(interval); } }, 50);
              " x-text="count">0</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MEETING TYPES -->
<section class="py-16 border-y border-white/5">
  <div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="grid gap-6 md:grid-cols-2">
      <!-- Meeting -->
      <div class="p-6 border bg-gradient-to-br from-zoom-blue/10 to-zoom-blue/5 rounded-2xl border-zoom-blue/20 reveal">
        <div class="flex items-start justify-between mb-4">
          <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-zoom-blue/20">
            <svg class="w-7 h-7 text-zoom-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <div class="capacity-badge">Până la 1.000</div>
        </div>
        <h3 class="mb-2 text-2xl font-bold text-white">Zoom Meeting</h3>
        <p class="mb-4 text-white/50">Ideal pentru workshop-uri interactive, sesiuni Q&A și evenimente unde toți participanții pot interveni.</p>
        <div class="flex flex-wrap gap-2">
          <span class="px-3 py-1 text-sm rounded-full bg-white/5 text-white/60">Video participanți</span>
          <span class="px-3 py-1 text-sm rounded-full bg-white/5 text-white/60">Screen sharing</span>
          <span class="px-3 py-1 text-sm rounded-full bg-white/5 text-white/60">Breakout rooms</span>
        </div>
      </div>

      <!-- Webinar -->
      <div class="p-6 border bg-gradient-to-br from-violet-500/10 to-violet-500/5 rounded-2xl border-violet-500/20 reveal reveal-delay-1">
        <div class="flex items-start justify-between mb-4">
          <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-violet-500/20">
            <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
          </div>
          <div class="capacity-badge">Până la 50.000</div>
        </div>
        <h3 class="mb-2 text-2xl font-bold text-white">Zoom Webinar</h3>
        <p class="mb-4 text-white/50">Perfect pentru conferințe mari, prezentări și evenimente cu audiență largă. Speakeri și participanți separați.</p>
        <div class="flex flex-wrap gap-2">
          <span class="px-3 py-1 text-sm rounded-full bg-white/5 text-white/60">Q&A moderat</span>
          <span class="px-3 py-1 text-sm rounded-full bg-white/5 text-white/60">Sondaje live</span>
          <span class="px-3 py-1 text-sm rounded-full bg-white/5 text-white/60">Panelisti</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AUTOMATION FLOW -->
<section class="relative py-24 overflow-hidden" id="cum-functioneaza">
  <div class="orb w-[500px] h-[500px] bg-zoom-blue/20 top-1/2 -left-60"></div>
  <div class="relative px-6 mx-auto max-w-7xl lg:px-8">
    <div class="max-w-3xl mx-auto mb-16 text-center reveal">
      <span class="text-sm font-medium tracking-widest uppercase text-zoom-blue">Automatizare Completă</span>
      <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Tu publici.<br><span class="text-gradient-zoom">Noi facem restul.</span></h2>
      <p class="text-lg text-white/60">Fără configurare manuală, fără liste de email-uri, fără bătăi de cap tehnice.</p>
    </div>

    <!-- Automation Steps -->
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- Step 1 -->
      <div class="text-center reveal">
        <div class="relative inline-block mb-6">
          <div class="flex items-center justify-center w-20 h-20 text-white shadow-lg rounded-2xl bg-gradient-to-br from-zoom-blue to-zoom-dark shadow-zoom-blue/30">
            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
          </div>
          <div class="absolute flex items-center justify-center w-8 h-8 text-sm font-bold border-2 rounded-full -top-2 -right-2 bg-dark-900 border-zoom-blue text-zoom-blue">1</div>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Creezi evenimentul</h3>
        <p class="text-sm text-white/50">Publici evenimentul virtual în Tixello. Selectezi tip Meeting sau Webinar.</p>
      </div>

      <!-- Step 2 -->
      <div class="text-center reveal reveal-delay-1">
        <div class="relative inline-block mb-6">
          <div class="flex items-center justify-center w-20 h-20 text-white shadow-lg rounded-2xl bg-gradient-to-br from-zoom-blue to-zoom-dark shadow-zoom-blue/30">
            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <div class="absolute flex items-center justify-center w-8 h-8 text-sm font-bold border-2 rounded-full -top-2 -right-2 bg-dark-900 border-zoom-blue text-zoom-blue">2</div>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Zoom se configurează</h3>
        <p class="text-sm text-white/50">Întâlnirea se creează automat cu toate setările. Link, parolă, waiting room - gata.</p>
      </div>

      <!-- Step 3 -->
      <div class="text-center reveal reveal-delay-2">
        <div class="relative inline-block mb-6">
          <div class="flex items-center justify-center w-20 h-20 text-white shadow-lg rounded-2xl bg-gradient-to-br from-green-500 to-emerald-500 shadow-green-500/30">
            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <div class="absolute flex items-center justify-center w-8 h-8 text-sm font-bold text-green-400 border-2 border-green-500 rounded-full -top-2 -right-2 bg-dark-900">3</div>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Cineva cumpără bilet</h3>
        <p class="text-sm text-white/50">Clientul finalizează plata pe pagina ta de ticketing.</p>
      </div>

      <!-- Step 4 -->
      <div class="text-center reveal reveal-delay-3">
        <div class="relative inline-block mb-6">
          <div class="flex items-center justify-center w-20 h-20 text-white shadow-lg rounded-2xl bg-gradient-to-br from-violet-500 to-purple-500 shadow-violet-500/30">
            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
          </div>
          <div class="absolute flex items-center justify-center w-8 h-8 text-sm font-bold border-2 rounded-full -top-2 -right-2 bg-dark-900 border-violet-500 text-violet-400">4</div>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Participant adăugat</h3>
        <p class="text-sm text-white/50">Cumpărătorul devine automat participant înregistrat în Zoom.</p>
      </div>
    </div>
  </div>
</section>

<!-- ATTENDANCE TRACKING -->
<section class="relative py-24 bg-dark-850">
  <div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
      <div class="reveal">
        <span class="inline-block px-4 py-1.5 rounded-full bg-green-500/10 text-green-400 text-sm font-medium mb-6">Urmărire Prezență</span>
        <h2 class="mb-6 text-4xl font-bold text-white font-display md:text-5xl">Știi exact<br><span class="text-gradient">cine a participat</span></h2>
        <p class="mb-8 text-lg leading-relaxed text-white/60">După eveniment, ai raportul complet de prezență. Cine s-a conectat, cât a stat, când a plecat. Totul sincronizat în CRM.</p>

        <div class="space-y-4">
          <div class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg class="w-3.5 h-3.5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div>
              <strong class="text-white">Timp join/leave</strong>
              <p class="text-sm text-white/50">Vezi exact când s-a conectat și deconectat fiecare participant</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg class="w-3.5 h-3.5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div>
              <strong class="text-white">Durată participare</strong>
              <p class="text-sm text-white/50">Calculare automată a timpului petrecut în întâlnire</p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg class="w-3.5 h-3.5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div>
              <strong class="text-white">Export & CRM sync</strong>
              <p class="text-sm text-white/50">Datele se sincronizează automat în profilul clientului</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Attendance Report Mockup -->
      <div class="reveal reveal-delay-1">
        <div class="overflow-hidden border bg-dark-800 rounded-2xl border-white/10">
          <div class="flex items-center justify-between p-4 border-b border-white/10">
            <div>
              <div class="font-medium text-white">Raport Prezență</div>
              <div class="text-sm text-white/40">Workshop Design - 15 Iulie 2025</div>
            </div>
            <div class="flex items-center gap-2">
              <span class="text-sm font-medium text-green-400">89%</span>
              <span class="text-sm text-white/40">rată participare</span>
            </div>
          </div>

          <div class="p-4 space-y-3">
            <!-- Participants -->
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5 participant-list-item" style="animation-delay: 0.1s;">
              <div class="flex items-center justify-center w-10 h-10 text-sm font-bold text-white rounded-full bg-gradient-to-br from-violet-500 to-purple-500">AM</div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="text-sm font-medium text-white">Ana Maria</span>
                  <span class="px-2 py-0.5 rounded-full bg-amber-500/20 text-amber-400 text-xs">Host</span>
                </div>
                <div class="text-xs text-white/40">13:55 - 16:02</div>
              </div>
              <div class="text-right">
                <div class="font-medium text-white">2h 07m</div>
                <div class="text-xs text-green-400">100%</div>
              </div>
            </div>

            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5 participant-list-item" style="animation-delay: 0.2s;">
              <div class="flex items-center justify-center w-10 h-10 text-sm font-bold text-white rounded-full bg-gradient-to-br from-amber-500 to-orange-500">IP</div>
              <div class="flex-1">
                <div class="text-sm font-medium text-white">Ion Popescu</div>
                <div class="text-xs text-white/40">14:02 - 16:00</div>
              </div>
              <div class="text-right">
                <div class="font-medium text-white">1h 58m</div>
                <div class="text-xs text-green-400">98%</div>
              </div>
            </div>

            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5 participant-list-item" style="animation-delay: 0.3s;">
              <div class="flex items-center justify-center w-10 h-10 text-sm font-bold text-white rounded-full bg-gradient-to-br from-green-500 to-emerald-500">MD</div>
              <div class="flex-1">
                <div class="text-sm font-medium text-white">Maria Dumitrescu</div>
                <div class="text-xs text-white/40">14:05 - 15:30</div>
              </div>
              <div class="text-right">
                <div class="font-medium text-white">1h 25m</div>
                <div class="text-xs text-amber-400">71%</div>
              </div>
            </div>

            <!-- Summary -->
            <div class="pt-4 mt-4 border-t border-white/10">
              <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                  <div class="text-2xl font-bold text-white">247</div>
                  <div class="text-xs text-white/40">Înregistrați</div>
                </div>
                <div>
                  <div class="text-2xl font-bold text-green-400">219</div>
                  <div class="text-xs text-white/40">Participat</div>
                </div>
                <div>
                  <div class="text-2xl font-bold text-zoom-blue">1h 42m</div>
                  <div class="text-xs text-white/40">Durată medie</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- USE CASES -->
<section class="relative py-24">
  <div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="max-w-3xl mx-auto mb-16 text-center reveal">
      <span class="text-sm font-medium tracking-widest uppercase text-amber-400">Cazuri de Utilizare</span>
      <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Pentru orice tip<br><span class="text-gradient">de eveniment virtual</span></h2>
    </div>

    <div class="grid gap-6 md:grid-cols-2">
      <div class="use-case-card reveal">
        <div class="flex items-start gap-4">
          <div class="flex items-center justify-center flex-shrink-0 w-14 h-14 rounded-2xl bg-violet-500/20">
            <svg class="w-7 h-7 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
          </div>
          <div>
            <h3 class="mb-2 text-xl font-semibold text-white">Conferințe Virtuale</h3>
            <p class="mb-4 text-white/50">Conferințe multi-sesiune cu breakout rooms. Urmărirea participanților între sesiuni.</p>
            <div class="flex flex-wrap gap-2">
              <span class="px-2 py-1 text-xs rounded-full bg-violet-500/10 text-violet-400">Multi-track</span>
              <span class="px-2 py-1 text-xs rounded-full bg-violet-500/10 text-violet-400">Breakout rooms</span>
            </div>
          </div>
        </div>
      </div>

      <div class="use-case-card reveal reveal-delay-1">
        <div class="flex items-start gap-4">
          <div class="flex items-center justify-center flex-shrink-0 w-14 h-14 rounded-2xl bg-zoom-blue/20">
            <svg class="w-7 h-7 text-zoom-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
          </div>
          <div>
            <h3 class="mb-2 text-xl font-semibold text-white">Workshop-uri Online</h3>
            <p class="mb-4 text-white/50">Sesiuni interactive cu engagement maxim. Certificate de participare bazate pe prezență.</p>
            <div class="flex flex-wrap gap-2">
              <span class="px-2 py-1 text-xs rounded-full bg-zoom-blue/10 text-zoom-blue">Interactive</span>
              <span class="px-2 py-1 text-xs rounded-full bg-zoom-blue/10 text-zoom-blue">Certificate</span>
            </div>
          </div>
        </div>
      </div>

      <div class="use-case-card reveal reveal-delay-2">
        <div class="flex items-start gap-4">
          <div class="flex items-center justify-center flex-shrink-0 w-14 h-14 rounded-2xl bg-green-500/20">
            <svg class="text-green-400 w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
          </div>
          <div>
            <h3 class="mb-2 text-xl font-semibold text-white">Serii de Webinare</h3>
            <p class="mb-4 text-white/50">Conținut educațional la scară. Înregistrările extind valoarea evenimentelor.</p>
            <div class="flex flex-wrap gap-2">
              <span class="px-2 py-1 text-xs text-green-400 rounded-full bg-green-500/10">Educațional</span>
              <span class="px-2 py-1 text-xs text-green-400 rounded-full bg-green-500/10">Scalabil</span>
            </div>
          </div>
        </div>
      </div>

      <div class="use-case-card reveal reveal-delay-3">
        <div class="flex items-start gap-4">
          <div class="flex items-center justify-center flex-shrink-0 w-14 h-14 rounded-2xl bg-amber-500/20">
            <svg class="w-7 h-7 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <div>
            <h3 class="mb-2 text-xl font-semibold text-white">Evenimente Hibride</h3>
            <p class="mb-4 text-white/50">Combină fizic cu virtual. Același eveniment, două modalități de participare.</p>
            <div class="flex flex-wrap gap-2">
              <span class="px-2 py-1 text-xs rounded-full bg-amber-500/10 text-amber-400">Fizic + Virtual</span>
              <span class="px-2 py-1 text-xs rounded-full bg-amber-500/10 text-amber-400">Reach extins</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SETUP -->
<section class="relative py-24 overflow-hidden bg-dark-850">
  <div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="max-w-3xl mx-auto mb-16 text-center reveal">
      <span class="text-sm font-medium tracking-widest text-green-400 uppercase">Conectare</span>
      <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Setup în<br><span class="text-gradient-zoom">60 de secunde</span></h2>
      <p class="text-lg text-white/60">Conectezi contul Zoom o singură dată. De acolo, totul e automat.</p>
    </div>

    <div class="max-w-2xl mx-auto">
      <div class="flex flex-col gap-6">
        <div class="flex items-center gap-6 reveal">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white shadow-lg rounded-2xl bg-gradient-to-br from-zoom-blue to-zoom-dark font-display shadow-zoom-blue/30">1</div>
          <div class="flex-1">
            <h3 class="mb-1 text-xl font-semibold text-white">Conectează contul Zoom</h3>
            <p class="text-white/50">Click pe "Conectează Zoom" și autentifică-te cu contul tău.</p>
          </div>
        </div>

        <div class="flex items-center gap-6 reveal reveal-delay-1">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white shadow-lg rounded-2xl bg-gradient-to-br from-violet-500 to-purple-500 font-display shadow-violet-500/30">2</div>
          <div class="flex-1">
            <h3 class="mb-1 text-xl font-semibold text-white">Creează eveniment virtual</h3>
            <p class="text-white/50">Alege tipul (Meeting/Webinar) când publici un eveniment nou.</p>
          </div>
        </div>

        <div class="flex items-center gap-6 reveal reveal-delay-2">
          <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 text-2xl font-bold text-white shadow-lg rounded-2xl bg-gradient-to-br from-green-500 to-emerald-500 font-display shadow-green-500/30">3</div>
          <div class="flex-1">
            <h3 class="mb-1 text-xl font-semibold text-white">Gata! Funcționează automat</h3>
            <p class="text-white/50">Întâlniri create automat, participanți sincronizați, prezență urmărită.</p>
          </div>
        </div>
      </div>

      <div class="mt-12 text-center reveal reveal-delay-3">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="px-8 py-4 text-lg btn btn-zoom">
          Conectează Zoom acum
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <p class="mt-4 text-sm text-white/30">OAuth 2.0 securizat • Inclus în toate planurile</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="relative py-24">
  <div class="max-w-4xl px-6 mx-auto lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="p-8 border bg-gradient-to-br from-zoom-blue/10 to-violet-500/10 rounded-3xl md:p-12 border-white/10">
        <div class="flex items-center gap-1 mb-6">
          <svg class="w-6 h-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <blockquote class="mb-8 text-2xl font-light leading-relaxed text-white md:text-3xl">
          "Înainte petreceam <span class="font-semibold text-zoom-blue">2 ore</span> configurând fiecare webinar și adăugând participanții manual. Acum creez evenimentul și gata - totul se face singur. Am câștigat zile întregi."
        </blockquote>
        <div class="flex items-center gap-4">
          <div class="rounded-full w-14 h-14 bg-gradient-to-br from-zoom-blue to-violet-500"></div>
          <div>
            <div class="font-semibold text-white">Elena V.</div>
            <div class="text-white/50">Training Manager, Academie Online</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="relative py-32 overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-zoom-blue/20 via-transparent to-violet-500/20"></div>
  <div class="orb w-[800px] h-[800px] bg-zoom-blue/30 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
  <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
    <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal">Evenimente virtuale<br><span class="text-gradient-zoom">fără bătăi de cap</span></h2>
    <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1">Conectează Zoom în 60 de secunde. Întâlniri create automat, participanți sincronizați, prezență urmărită. Totul inclus gratuit.</p>
    <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="px-10 py-4 text-lg btn btn-zoom">
        Conectează Zoom
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="px-10 py-4 text-lg btn btn-ghost">Programează o demonstrație</a>
    </div>
    <p class="mt-8 text-sm text-white/30 reveal reveal-delay-3">Meetings • Webinars • Cloud Recordings • Attendance Reports</p>
  </div>
</section>

</main>

<!-- JAVASCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Scroll Progress
  window.addEventListener('scroll', () => {
    const scrollProgress = document.getElementById('scroll-progress');
    if (!scrollProgress) return;
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const progress = (scrollTop / scrollHeight) * 100;
    scrollProgress.style.width = progress + '%';
  });

  // Intersection Observer for Reveal Animations
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Feature Card Mouse Tracking
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
      card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
    });
  });

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
});
</script>

<?php get_footer(); ?>
