<?php
/**
 * Template Name: Micro - Zapier
 * Description: Pagina integrării Zapier - Conectează 5000+ Aplicații
 */

get_header();
?>

<style>
  /* Zapier Page Specific Styles */
  .text-gradient-zapier {
    background: linear-gradient(135deg, #FF4A00 0%, #FF7A47 50%, #FFB347 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shimmer 3s linear infinite;
  }

  /* Feature card glow */
  .feature-card {
    @apply relative overflow-hidden;
  }
  .feature-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(255, 74, 0, 0.15), transparent 50%);
    opacity: 0;
    transition: opacity 0.5s;
    border-radius: inherit;
  }
  .feature-card:hover::before { opacity: 1; }

  /* Zap flow animation */
  .zap-flow {
    position: absolute;
    width: 8px;
    height: 8px;
    background: #FF4A00;
    border-radius: 50%;
    box-shadow: 0 0 15px #FF4A00;
    animation: flow 4s ease-in-out infinite;
  }
  .zap-flow:nth-child(2) { animation-delay: 1.3s; }
  .zap-flow:nth-child(3) { animation-delay: 2.6s; }
  @keyframes flow {
    0% { transform: translateY(-100%) translateX(-50%); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(100%) translateX(-50%); opacity: 0; }
  }

  /* Lightning bolt pulse */
  .lightning-pulse {
    animation: lightningPulse 2s ease-in-out infinite;
  }
  @keyframes lightningPulse {
    0%, 100% { filter: drop-shadow(0 0 5px #FF4A00); }
    50% { filter: drop-shadow(0 0 20px #FF4A00); }
  }
</style>

<main class="">
<div class="scroll-progress" id="scroll-progress"></div>

<!-- HERO -->
<section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
  <!-- Background Orbs -->
  <div class="orb w-[600px] h-[600px] bg-zapier-orange/20 -top-40 -right-40"></div>
  <div class="orb w-[400px] h-[400px] bg-orange-500/15 bottom-20 -left-20"></div>
  <div class="orb w-[300px] h-[300px] bg-amber-500/10 top-1/3 left-1/4"></div>

  <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
    <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
      <!-- Hero Content -->
      <div class="reveal">
        <!-- Badge -->
        <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-zapier-orange/10 border-zapier-orange/20">
          <svg class="w-5 h-5 text-zapier-orange" viewBox="0 0 24 24" fill="currentColor">
            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
          </svg>
          <span class="text-sm font-medium text-zapier-orange">Integrare Oficială Zapier</span>
        </div>

        <!-- Heading -->
        <h1 class="mb-6 text-5xl font-bold text-white font-display md:text-6xl lg:text-7xl leading-extra-tight">
          Conectează<br><span class="text-gradient-zapier animate-shimmer">5.000+ aplicații</span>
        </h1>

        <!-- Description -->
        <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
          Automatizează totul fără cod. Când cineva cumpără un bilet, actualizează CRM-ul, trimite email-uri, notifică echipa. <strong class="text-white">Tu configurezi o dată, Zapier face restul.</strong>
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="text-white btn bg-gradient-to-r from-zapier-orange to-orange-500 hover:scale-105 hover:shadow-glow-zapier">
            Conectează Zapier
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#cum-functioneaza" class="btn btn-ghost">
            Vezi cum funcționează
          </a>
        </div>

        <!-- Trust Badges -->
        <div class="flex flex-wrap items-center gap-6 text-sm text-white/50">
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Fără cod necesar
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Triggere în timp real
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            6 triggere disponibile
          </div>
        </div>
      </div>

      <!-- Hero Visual - Zap Flow -->
      <div class="reveal reveal-delay-1">
        <div class="relative">
          <!-- Main Card -->
          <div class="p-8 border bg-dark-800/80 backdrop-blur-xl rounded-3xl border-white/10">
            <!-- Header -->
            <div class="flex items-center justify-between mb-8">
              <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-zapier-orange">
                  <svg class="w-6 h-6 text-white lightning-pulse" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                  </svg>
                </div>
                <div>
                  <div class="font-semibold text-white">Zap activ</div>
                  <div class="text-sm text-white/40">Tixello → 3 acțiuni</div>
                </div>
              </div>
              <div class="flex items-center gap-2 text-sm text-brand-green">
                <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span>
                Running
              </div>
            </div>

            <!-- Zap Flow Visual -->
            <div class="relative">
              <!-- Trigger -->
              <div class="flex items-center gap-4 mb-6">
                <div class="flex items-center justify-center shadow-lg w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet to-brand-cyan">
                  <span class="font-bold text-white font-display">T</span>
                </div>
                <div class="flex-1">
                  <div class="font-medium text-white">Când: Bilet vândut</div>
                  <div class="text-sm text-white/40">Trigger Tixello</div>
                </div>
              </div>

              <!-- Connection Line -->
              <div class="relative h-12 ml-7">
                <div class="absolute left-0 top-0 w-0.5 h-full bg-gradient-to-b from-brand-cyan to-zapier-orange"></div>
                <div class="zap-flow" style="left: 0; top: 0;"></div>
              </div>

              <!-- Actions -->
              <div class="space-y-3">
                <!-- Mailchimp -->
                <div class="flex items-center gap-4 p-3 border rounded-xl bg-white/5 border-white/10">
                  <div class="w-10 h-10 rounded-xl bg-[#FFE01B] flex items-center justify-center">
                    <span class="font-bold text-black">M</span>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-medium text-white">Adaugă în Mailchimp</div>
                    <div class="text-xs text-white/40">Lista: Cumpărători Bilete</div>
                  </div>
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>

                <!-- Slack -->
                <div class="flex items-center gap-4 p-3 border rounded-xl bg-white/5 border-white/10">
                  <div class="w-10 h-10 rounded-xl bg-[#4A154B] flex items-center justify-center">
                    <span class="font-bold text-white">S</span>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-medium text-white">Notifică pe Slack</div>
                    <div class="text-xs text-white/40">Canal: #vânzări</div>
                  </div>
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>

                <!-- Google Sheets -->
                <div class="flex items-center gap-4 p-3 border rounded-xl bg-white/5 border-white/10">
                  <div class="w-10 h-10 rounded-xl bg-[#0F9D58] flex items-center justify-center">
                    <span class="font-bold text-white">G</span>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-medium text-white">Adaugă în Sheets</div>
                    <div class="text-xs text-white/40">Spreadsheet: Vânzări 2025</div>
                  </div>
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
              </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-3 pt-6 mt-6 border-t border-white/10">
              <div class="text-center">
                <div class="text-xl font-bold text-zapier-orange">2,847</div>
                <div class="text-xs text-white/40">Zap-uri rulate</div>
              </div>
              <div class="text-center">
                <div class="text-xl font-bold text-brand-green">99.8%</div>
                <div class="text-xs text-white/40">Success rate</div>
              </div>
              <div class="text-center">
                <div class="text-xl font-bold text-brand-cyan">&lt;1s</div>
                <div class="text-xs text-white/40">Timp răspuns</div>
              </div>
            </div>
          </div>

          <!-- Floating Badges -->
          <div class="absolute px-4 py-3 border shadow-xl -top-4 -right-4 bg-dark-800 rounded-xl border-brand-green/20 float">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></div>
              <span class="text-sm font-medium text-brand-green">+1 lead Mailchimp</span>
            </div>
          </div>

          <div class="absolute px-4 py-3 border shadow-xl -bottom-4 -left-4 bg-dark-800 rounded-xl border-zapier-orange/20 float" style="animation-delay: 1s;">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-zapier-orange" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
              <span class="text-sm font-medium text-zapier-orange">Zap rulat!</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- APPS LOGOS -->
<section class="py-16 border-y border-white/5">
  <div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="mb-8 text-center reveal">
      <p class="text-sm tracking-widest uppercase text-white/40">Conectează-te la aplicațiile tale preferate</p>
    </div>
    <div class="grid grid-cols-3 gap-4 md:grid-cols-6 lg:grid-cols-9">
      <!-- Mailchimp -->
      <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-4 flex items-center justify-center hover:bg-white/[0.06] hover:border-white/[0.15] transition-all duration-300 reveal">
        <div class="w-10 h-10 rounded-lg bg-[#FFE01B] flex items-center justify-center">
          <span class="text-lg font-bold text-black">M</span>
        </div>
      </div>
      <!-- Slack -->
      <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-4 flex items-center justify-center hover:bg-white/[0.06] hover:border-white/[0.15] transition-all duration-300 reveal reveal-delay-1">
        <div class="w-10 h-10 rounded-lg bg-[#4A154B] flex items-center justify-center">
          <span class="text-lg font-bold text-white">S</span>
        </div>
      </div>
      <!-- Google Sheets -->
      <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-4 flex items-center justify-center hover:bg-white/[0.06] hover:border-white/[0.15] transition-all duration-300 reveal reveal-delay-2">
        <div class="w-10 h-10 rounded-lg bg-[#0F9D58] flex items-center justify-center">
          <span class="text-lg font-bold text-white">G</span>
        </div>
      </div>
      <!-- HubSpot -->
      <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-4 flex items-center justify-center hover:bg-white/[0.06] hover:border-white/[0.15] transition-all duration-300 reveal reveal-delay-3">
        <div class="w-10 h-10 rounded-lg bg-[#FF7A59] flex items-center justify-center">
          <span class="text-lg font-bold text-white">H</span>
        </div>
      </div>
      <!-- Salesforce -->
      <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-4 flex items-center justify-center hover:bg-white/[0.06] hover:border-white/[0.15] transition-all duration-300 reveal reveal-delay-4">
        <div class="w-10 h-10 rounded-lg bg-[#00A1E0] flex items-center justify-center">
          <span class="text-lg font-bold text-white">SF</span>
        </div>
      </div>
      <!-- Zendesk -->
      <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-4 flex items-center justify-center hover:bg-white/[0.06] hover:border-white/[0.15] transition-all duration-300 reveal reveal-delay-5">
        <div class="w-10 h-10 rounded-lg bg-[#03363D] flex items-center justify-center">
          <span class="text-lg font-bold text-white">Z</span>
        </div>
      </div>
      <!-- Notion -->
      <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-4 flex items-center justify-center hover:bg-white/[0.06] hover:border-white/[0.15] transition-all duration-300 reveal">
        <div class="flex items-center justify-center w-10 h-10 bg-white rounded-lg">
          <span class="text-lg font-bold text-black">N</span>
        </div>
      </div>
      <!-- Airtable -->
      <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-4 flex items-center justify-center hover:bg-white/[0.06] hover:border-white/[0.15] transition-all duration-300 reveal reveal-delay-1">
        <div class="w-10 h-10 rounded-lg bg-[#18BFFF] flex items-center justify-center">
          <span class="text-lg font-bold text-white">A</span>
        </div>
      </div>
      <!-- +5000 -->
      <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-4 flex items-center justify-center hover:bg-white/[0.06] hover:border-white/[0.15] transition-all duration-300 reveal reveal-delay-2">
        <span class="font-bold text-zapier-orange">+5000</span>
      </div>
    </div>
  </div>
</section>

<!-- THE PROBLEM -->
<section class="relative py-24 overflow-hidden">
  <div class="px-6 mx-auto max-w-7xl lg:px-8">
    <!-- Section Header -->
    <div class="max-w-3xl mx-auto mb-16 text-center reveal">
      <span class="text-sm font-medium tracking-widest uppercase text-brand-rose">Problema</span>
      <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Faci totul manual?<br><span class="text-brand-rose">Pierzi timp prețios</span></h2>
      <p class="text-lg text-white/60">Export CSV, import în alt sistem, copy-paste. De fiecare dată. Pentru fiecare comandă.</p>
    </div>

    <div class="grid gap-8 lg:grid-cols-2">
      <!-- Before -->
      <div class="reveal">
        <div class="h-full p-8 border bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-3xl border-brand-rose/20">
          <div class="flex items-center gap-3 mb-6">
            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-brand-rose/20">
              <svg class="w-5 h-5 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </div>
            <span class="font-semibold text-brand-rose">Workflow Manual</span>
          </div>

          <div class="space-y-4">
            <div class="flex items-center gap-3 p-3 rounded-xl bg-dark-900/50">
              <div class="flex items-center justify-center w-8 h-8 text-sm font-bold rounded-lg bg-brand-rose/20 text-brand-rose">1</div>
              <span class="text-sm text-white/70">Export comenzi din platformă</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-dark-900/50">
              <div class="flex items-center justify-center w-8 h-8 text-sm font-bold rounded-lg bg-brand-rose/20 text-brand-rose">2</div>
              <span class="text-sm text-white/70">Import în Mailchimp manual</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-dark-900/50">
              <div class="flex items-center justify-center w-8 h-8 text-sm font-bold rounded-lg bg-brand-rose/20 text-brand-rose">3</div>
              <span class="text-sm text-white/70">Copy-paste în spreadsheet</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-dark-900/50">
              <div class="flex items-center justify-center w-8 h-8 text-sm font-bold rounded-lg bg-brand-rose/20 text-brand-rose">4</div>
              <span class="text-sm text-white/70">Mesaj echipei pe Slack</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-dark-900/50">
              <div class="flex items-center justify-center w-8 h-8 text-sm font-bold rounded-lg bg-brand-rose/20 text-brand-rose">5</div>
              <span class="text-sm text-white/70">Actualizare CRM manual...</span>
            </div>

            <div class="flex items-center gap-2 mt-4 text-sm text-brand-rose">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              ~30 min / comandă × 50 comenzi = 25 ore pierdute
            </div>
          </div>
        </div>
      </div>

      <!-- After -->
      <div class="reveal reveal-delay-1">
        <div class="h-full p-8 border bg-gradient-to-br from-brand-green/10 to-brand-green/5 rounded-3xl border-brand-green/20">
          <div class="flex items-center gap-3 mb-6">
            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-brand-green/20">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="font-semibold text-brand-green">Cu Zapier</span>
          </div>

          <div class="space-y-4">
            <div class="flex items-center gap-3 p-3 rounded-xl bg-dark-900/50">
              <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-brand-green/20">
                <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <span class="text-sm font-medium text-white">Bilet vândut → Trigger Zapier</span>
            </div>

            <div class="space-y-2 pl-11">
              <div class="flex items-center gap-2 text-sm text-white/60">
                <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Adăugat în Mailchimp automat
              </div>
              <div class="flex items-center gap-2 text-sm text-white/60">
                <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Spreadsheet actualizat automat
              </div>
              <div class="flex items-center gap-2 text-sm text-white/60">
                <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Echipa notificată pe Slack
              </div>
              <div class="flex items-center gap-2 text-sm text-white/60">
                <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                CRM actualizat automat
              </div>
            </div>

            <div class="flex items-center gap-2 mt-4 text-sm text-brand-green">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              &lt;1 secundă per comandă, 0 muncă manuală
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRIGGERS -->
<section class="relative py-24 bg-dark-850" id="cum-functioneaza">
  <div class="orb w-[500px] h-[500px] bg-zapier-orange/15 top-1/2 -right-60"></div>
  <div class="relative px-6 mx-auto max-w-7xl lg:px-8">
    <!-- Section Header -->
    <div class="max-w-3xl mx-auto mb-16 text-center reveal">
      <span class="text-sm font-medium tracking-widest uppercase text-zapier-orange">6 Triggere Puternice</span>
      <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Activează automatizări<br><span class="text-gradient-zapier animate-shimmer">în timp real</span></h2>
      <p class="text-lg text-white/60">Fiecare eveniment cheie din platformă poate declanșa acțiuni în aplicațiile tale.</p>
    </div>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      <!-- Trigger 1: Order Created -->
      <div class="p-6 transition-all duration-500 border feature-card bg-gradient-to-br from-zapier-orange/10 to-zapier-orange/5 rounded-2xl border-white/10 hover:border-zapier-orange/30 hover:-translate-y-1 reveal">
        <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-zapier-orange/20">
          <svg class="w-7 h-7 text-zapier-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Comandă Creată</h3>
        <p class="mb-4 text-sm text-white/50">Se activează la fiecare comandă nouă plasată.</p>
        <div class="text-zapier-orange/70 text-xs font-mono bg-zapier-orange/10 px-3 py-1.5 rounded-lg inline-block">order_created</div>
      </div>

      <!-- Trigger 2: Ticket Sold -->
      <div class="p-6 transition-all duration-500 border feature-card bg-gradient-to-br from-brand-green/10 to-brand-green/5 rounded-2xl border-white/10 hover:border-brand-green/30 hover:-translate-y-1 reveal reveal-delay-1">
        <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-green/20">
          <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Bilet Vândut</h3>
        <p class="mb-4 text-sm text-white/50">Pentru fiecare bilet individual cumpărat.</p>
        <div class="text-brand-green/70 text-xs font-mono bg-brand-green/10 px-3 py-1.5 rounded-lg inline-block">ticket_sold</div>
      </div>

      <!-- Trigger 3: Customer Created -->
      <div class="p-6 transition-all duration-500 border feature-card bg-gradient-to-br from-brand-cyan/10 to-brand-cyan/5 rounded-2xl border-white/10 hover:border-brand-cyan/30 hover:-translate-y-1 reveal reveal-delay-2">
        <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-cyan/20">
          <svg class="w-7 h-7 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Client Nou</h3>
        <p class="mb-4 text-sm text-white/50">Când un client se înregistrează prima dată.</p>
        <div class="text-brand-cyan/70 text-xs font-mono bg-brand-cyan/10 px-3 py-1.5 rounded-lg inline-block">customer_created</div>
      </div>

      <!-- Trigger 4: Event Published -->
      <div class="p-6 transition-all duration-500 border feature-card bg-gradient-to-br from-brand-violet/10 to-brand-violet/5 rounded-2xl border-white/10 hover:border-brand-violet/30 hover:-translate-y-1 reveal reveal-delay-3">
        <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-violet/20">
          <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Eveniment Publicat</h3>
        <p class="mb-4 text-sm text-white/50">Când un eveniment devine live pe platformă.</p>
        <div class="text-brand-violet/70 text-xs font-mono bg-brand-violet/10 px-3 py-1.5 rounded-lg inline-block">event_published</div>
      </div>

      <!-- Trigger 5: Registration Complete -->
      <div class="p-6 transition-all duration-500 border feature-card bg-gradient-to-br from-brand-amber/10 to-brand-amber/5 rounded-2xl border-white/10 hover:border-brand-amber/30 hover:-translate-y-1 reveal reveal-delay-4">
        <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-amber/20">
          <svg class="w-7 h-7 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Înregistrare Completă</h3>
        <p class="mb-4 text-sm text-white/50">Formular de înregistrare completat cu succes.</p>
        <div class="text-brand-amber/70 text-xs font-mono bg-brand-amber/10 px-3 py-1.5 rounded-lg inline-block">registration_completed</div>
      </div>

      <!-- Trigger 6: Refund Issued -->
      <div class="p-6 transition-all duration-500 border feature-card bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-2xl border-white/10 hover:border-brand-rose/30 hover:-translate-y-1 reveal reveal-delay-5">
        <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-rose/20">
          <svg class="w-7 h-7 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/></svg>
        </div>
        <h3 class="mb-2 text-xl font-semibold text-white">Rambursare Emisă</h3>
        <p class="mb-4 text-sm text-white/50">Când o rambursare este procesată.</p>
        <div class="text-brand-rose/70 text-xs font-mono bg-brand-rose/10 px-3 py-1.5 rounded-lg inline-block">refund_issued</div>
      </div>
    </div>
  </div>
</section>

<!-- USE CASES -->
<section class="relative py-24 overflow-hidden">
  <div class="orb w-[400px] h-[400px] bg-brand-violet/20 top-1/3 -left-40"></div>
  <div class="relative px-6 mx-auto max-w-7xl lg:px-8">
    <!-- Section Header -->
    <div class="max-w-3xl mx-auto mb-16 text-center reveal">
      <span class="text-sm font-medium tracking-widest uppercase text-brand-cyan">Cazuri de Utilizare</span>
      <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Ce poți automatiza<br><span class="text-gradient animate-shimmer">cu Zapier</span></h2>
    </div>

    <div class="grid gap-6 md:grid-cols-2">
      <!-- Use Case 1 -->
      <div class="p-6 transition-all duration-300 border bg-dark-800/50 rounded-2xl border-white/10 hover:border-white/20 reveal">
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-[#FFE01B]/20 flex items-center justify-center flex-shrink-0">
            <span class="text-[#FFE01B] font-bold">M</span>
          </div>
          <div>
            <h3 class="mb-2 text-lg font-semibold text-white">Email Marketing Automat</h3>
            <p class="text-sm text-white/50">Când cineva cumpără un bilet, adaugă-l automat în Mailchimp, ConvertKit sau ActiveCampaign. Etichetează după tipul evenimentului, începe secvențe automate.</p>
          </div>
        </div>
      </div>

      <!-- Use Case 2 -->
      <div class="p-6 transition-all duration-300 border bg-dark-800/50 rounded-2xl border-white/10 hover:border-white/20 reveal reveal-delay-1">
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-[#FF7A59]/20 flex items-center justify-center flex-shrink-0">
            <span class="text-[#FF7A59] font-bold">H</span>
          </div>
          <div>
            <h3 class="mb-2 text-lg font-semibold text-white">Actualizări CRM</h3>
            <p class="text-sm text-white/50">Creează sau actualizează contacte în Salesforce, HubSpot sau Pipedrive. Urmărește automat istoricul achizițiilor în CRM.</p>
          </div>
        </div>
      </div>

      <!-- Use Case 3 -->
      <div class="p-6 transition-all duration-300 border bg-dark-800/50 rounded-2xl border-white/10 hover:border-white/20 reveal reveal-delay-2">
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-[#4A154B]/20 flex items-center justify-center flex-shrink-0">
            <span class="text-[#E01E5A] font-bold">S</span>
          </div>
          <div>
            <h3 class="mb-2 text-lg font-semibold text-white">Notificări Echipă</h3>
            <p class="text-sm text-white/50">Trimite mesaje Slack sau Teams când intră comenzi. Alertează pentru achiziții VIP sau comenzi mari. Ține echipa informată fără verificare manuală.</p>
          </div>
        </div>
      </div>

      <!-- Use Case 4 -->
      <div class="p-6 transition-all duration-300 border bg-dark-800/50 rounded-2xl border-white/10 hover:border-white/20 reveal reveal-delay-3">
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-[#0F9D58]/20 flex items-center justify-center flex-shrink-0">
            <span class="text-[#0F9D58] font-bold">G</span>
          </div>
          <div>
            <h3 class="mb-2 text-lg font-semibold text-white">Tracking Spreadsheet</h3>
            <p class="text-sm text-white/50">Adaugă comenzi noi în Google Sheets sau Excel. Construiește dashboard-uri de vânzări în timp real. Backup automat pentru tranzacții.</p>
          </div>
        </div>
      </div>

      <!-- Use Case 5 -->
      <div class="p-6 transition-all duration-300 border bg-dark-800/50 rounded-2xl border-white/10 hover:border-white/20 reveal reveal-delay-4">
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-xl bg-[#03363D]/20 flex items-center justify-center flex-shrink-0">
            <span class="text-[#78A300] font-bold">Z</span>
          </div>
          <div>
            <h3 class="mb-2 text-lg font-semibold text-white">Suport Clienți</h3>
            <p class="text-sm text-white/50">Creează tichete Zendesk sau Freshdesk la rambursări. Atribuie automat sarcini de follow-up când se activează anumite triggere.</p>
          </div>
        </div>
      </div>

      <!-- Use Case 6 -->
      <div class="p-6 transition-all duration-300 border bg-dark-800/50 rounded-2xl border-white/10 hover:border-white/20 reveal reveal-delay-5">
        <div class="flex items-start gap-4">
          <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-pink-500/20 to-purple-500/20">
            <span class="font-bold text-pink-400">#</span>
          </div>
          <div>
            <h3 class="mb-2 text-lg font-semibold text-white">Social Media</h3>
            <p class="text-sm text-white/50">Postează pe canalele sociale când evenimentele sunt publicate. Partajează milestone-uri automat. Automatizează promovarea.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SETUP -->
<section class="relative py-24 bg-dark-850">
  <div class="relative px-6 mx-auto max-w-7xl lg:px-8">
    <!-- Section Header -->
    <div class="max-w-3xl mx-auto mb-16 text-center reveal">
      <span class="text-sm font-medium tracking-widest uppercase text-brand-green">Setup</span>
      <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Configurare în<br><span class="text-gradient-zapier animate-shimmer">3 pași simpli</span></h2>
      <p class="text-lg text-white/60">Fără cod, fără complicații. Conectezi și funcționează.</p>
    </div>

    <!-- Steps -->
    <div class="max-w-3xl mx-auto">
      <div class="space-y-8">
        <!-- Step 1 -->
        <div class="flex gap-6 reveal">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center text-xl font-bold text-white shadow-lg w-14 h-14 rounded-2xl bg-gradient-to-br from-zapier-orange to-orange-500 font-display shadow-zapier-orange/30">1</div>
          </div>
          <div class="flex-1 pb-8 border-b border-white/10">
            <h3 class="mb-2 text-xl font-semibold text-white">Generează API Key în Tixello</h3>
            <p class="mb-4 text-white/50">Din dashboard-ul Tixello, mergi la Setări → Integrări → Zapier și generează o cheie API.</p>
            <div class="inline-flex items-center gap-3 px-4 py-2 border rounded-lg bg-white/5 border-white/10">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>
              <span class="text-sm text-white/70">Cheie securizată, rotație disponibilă</span>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="flex gap-6 reveal reveal-delay-1">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center text-xl font-bold text-white shadow-lg w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet to-purple-600 font-display shadow-brand-violet/30">2</div>
          </div>
          <div class="flex-1 pb-8 border-b border-white/10">
            <h3 class="mb-2 text-xl font-semibold text-white">Conectează în Zapier</h3>
            <p class="mb-4 text-white/50">În Zapier, caută "Tixello" și introdu cheia API. Alege trigger-ul dorit și conectează la aplicația preferată.</p>
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-zapier-orange/10 text-zapier-orange text-sm border border-zapier-orange/20">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
              5000+ aplicații disponibile
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="flex gap-6 reveal reveal-delay-2">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center text-xl font-bold text-white shadow-lg w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green to-emerald-600 font-display shadow-brand-green/30">3</div>
          </div>
          <div class="flex-1">
            <h3 class="mb-2 text-xl font-semibold text-white">Activează și bucură-te</h3>
            <p class="mb-4 text-white/50">Activează Zap-ul și de acum totul funcționează automat. Monitorizează din dashboard-ul Zapier sau Tixello.</p>
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-brand-green/10 text-brand-green text-sm border border-brand-green/20">
              <div class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></div>
              Webhook-uri în timp real
            </div>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <div class="mt-12 text-center reveal reveal-delay-3">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="px-8 py-4 text-lg text-white btn bg-gradient-to-r from-zapier-orange to-orange-500 hover:scale-105 hover:shadow-glow-zapier">
          Conectează Zapier acum
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <p class="mt-4 text-sm text-white/30">Inclus gratuit în toate planurile</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="relative py-24">
  <div class="max-w-4xl px-6 mx-auto lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="p-8 border bg-gradient-to-br from-zapier-orange/10 to-brand-amber/10 rounded-3xl md:p-12 border-white/10">
        <!-- Stars -->
        <div class="flex items-center gap-1 mb-6">
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <!-- Quote -->
        <blockquote class="mb-8 text-2xl font-light leading-relaxed text-white md:text-3xl">
          "Înainte petreceam 2 ore pe zi cu exporturi și importuri manuale. Acum <span class="font-semibold text-zapier-orange">totul se întâmplă automat</span>. Zapier + Tixello mi-au salvat săptămâni întregi de muncă."
        </blockquote>
        <!-- Author -->
        <div class="flex items-center gap-4">
          <div class="rounded-full w-14 h-14 bg-gradient-to-br from-zapier-orange to-orange-500"></div>
          <div>
            <div class="font-semibold text-white">Elena V.</div>
            <div class="text-white/50">Operations Manager, Agenție Evenimente</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="relative py-32 overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-zapier-orange/20 via-transparent to-brand-amber/20"></div>
  <div class="orb w-[800px] h-[800px] bg-zapier-orange/30 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>

  <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
    <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal">Automatizează<br><span class="text-gradient-zapier animate-shimmer">totul</span></h2>
    <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1">Conectează Tixello la 5.000+ aplicații. Configurezi o dată, funcționează pentru totdeauna.</p>

    <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="px-10 py-4 text-lg text-white btn bg-gradient-to-r from-zapier-orange to-orange-500 hover:scale-105 hover:shadow-glow-zapier">
        Conectează Zapier
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="px-10 py-4 text-lg btn btn-ghost">
        Întrebări? Contactează-ne
      </a>
    </div>

    <p class="mt-8 text-sm text-white/30 reveal reveal-delay-3">Funcționează cu Mailchimp, Slack, Google Sheets, HubSpot, Salesforce și +5000 altele</p>
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
