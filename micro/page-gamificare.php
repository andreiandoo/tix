<?php
/**
 * Template Name: Micro - Gamificare / Loyalty
 * Description: Gamificare - Program de loialitate și recompense
 */

get_header();
?>

<style>
  ::selection { background: #EAB308; color: white; }

  .text-gradient-gold { background: linear-gradient(135deg, #EAB308 0%, #F59E0B 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card { transition: all 0.3s ease; }
  .feature-card:hover { transform: translateY(-4px); }

  @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-10px); } }
  @keyframes pulse-ring { 0% { transform: scale(0.8); opacity: 1; } 100% { transform: scale(1.4); opacity: 0; } }
  @keyframes sparkle { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }

  .animate-float { animation: float 4s ease-in-out infinite; }
  .animate-float-delay { animation: float 4s ease-in-out 1s infinite; }
  .animate-pulse-ring { animation: pulse-ring 2s ease-out infinite; }
  .animate-sparkle { animation: sparkle 2s ease-in-out infinite; }

  .glow-gold { box-shadow: 0 0 40px rgba(234, 179, 8, 0.3); }
</style>

<main class="noise bg-dark-950 min-h-screen">

  <!-- Hero Section -->
  <section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-20 left-10 w-64 h-64 bg-yellow-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-80 h-80 bg-amber-500/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 items-center">

        <!-- Left: Text -->
        <div>
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 text-sm mb-6">
            <span>⭐</span>
            <span>Loyalty & Rewards · Gamificare</span>
          </div>

          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-display">
            Fanii fideli revin.<br><span class="text-gradient-gold">Mereu.</span>
          </h1>

          <p class="text-lg text-white/60 mb-8 max-w-lg">
            Transformă cumpărătorii ocazionali în fani loiali. Puncte la fiecare achiziție, niveluri de loialitate, program de referințe. <strong class="text-white">Clienții revin și aduc prieteni.</strong>
          </p>

          <div class="flex flex-col sm:flex-row gap-4 mb-10">
            <a href="https://core.tixello.com/register" class="px-6 py-3 rounded-lg bg-yellow-500 text-dark-900 font-semibold hover:bg-yellow-400 transition-colors text-center">
              Activează Gamificarea
            </a>
            <a href="#cum-functioneaza" class="px-6 py-3 rounded-lg bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-colors text-center">
              Cum funcționează
            </a>
          </div>

          <!-- Stats -->
          <div class="flex gap-8">
            <div>
              <p class="text-2xl font-bold text-yellow-400">+67%</p>
              <p class="text-sm text-white/50">Retenție clienți</p>
            </div>
            <div>
              <p class="text-2xl font-bold text-yellow-400">2.4x</p>
              <p class="text-sm text-white/50">Valoare lifetime</p>
            </div>
            <div>
              <p class="text-2xl font-bold text-yellow-400">23%</p>
              <p class="text-sm text-white/50">Din referințe</p>
            </div>
          </div>
        </div>

        <!-- Right: Visual Mockup -->
        <div class="relative">
          <!-- Points Card -->
          <div class="relative bg-dark-900 rounded-2xl border border-white/10 p-6 shadow-2xl">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-yellow-400 to-amber-600 flex items-center justify-center">
                  <span class="text-xl">👑</span>
                </div>
                <div>
                  <p class="font-semibold text-white">Maria P.</p>
                  <p class="text-sm text-yellow-400">Gold Member</p>
                </div>
              </div>
              <div class="text-right">
                <p class="text-xs text-white/50">Puncte disponibile</p>
                <p class="text-2xl font-bold text-white">2,450</p>
              </div>
            </div>

            <!-- Progress to next level -->
            <div class="mb-6">
              <div class="flex justify-between text-sm mb-2">
                <span class="text-white/60">Progres spre Platinum</span>
                <span class="text-yellow-400">2,450 / 5,000</span>
              </div>
              <div class="h-2 bg-dark-800 rounded-full overflow-hidden">
                <div class="h-full w-[49%] bg-gradient-to-r from-yellow-500 to-amber-500 rounded-full"></div>
              </div>
            </div>

            <!-- Recent Activity -->
            <div class="space-y-3">
              <p class="text-xs text-white/50 uppercase tracking-wide">Activitate recentă</p>

              <div class="flex items-center justify-between p-3 rounded-lg bg-emerald-500/10 border border-emerald-500/20">
                <div class="flex items-center gap-3">
                  <span class="text-lg">🎫</span>
                  <div>
                    <p class="text-sm text-white">Bilete Summer Fest</p>
                    <p class="text-xs text-white/50">Acum 2 ore</p>
                  </div>
                </div>
                <span class="text-emerald-400 font-semibold">+150 ⭐</span>
              </div>

              <div class="flex items-center justify-between p-3 rounded-lg bg-pink-500/10 border border-pink-500/20">
                <div class="flex items-center gap-3">
                  <span class="text-lg">🤝</span>
                  <div>
                    <p class="text-sm text-white">Referință convertită</p>
                    <p class="text-xs text-white/50">Ieri</p>
                  </div>
                </div>
                <span class="text-pink-400 font-semibold">+200 ⭐</span>
              </div>

              <div class="flex items-center justify-between p-3 rounded-lg bg-violet-500/10 border border-violet-500/20">
                <div class="flex items-center gap-3">
                  <span class="text-lg">🎂</span>
                  <div>
                    <p class="text-sm text-white">Bonus ziua de naștere</p>
                    <p class="text-xs text-white/50">15 Dec</p>
                  </div>
                </div>
                <span class="text-violet-400 font-semibold">+100 ⭐</span>
              </div>
            </div>

            <!-- Floating badges -->
            <div class="absolute -top-4 -right-4 px-3 py-1.5 rounded-full bg-yellow-500 text-dark-900 text-sm font-bold animate-float shadow-lg">
              1.5x puncte
            </div>
          </div>

          <!-- Referral popup -->
          <div class="absolute -bottom-6 -left-6 bg-dark-900 rounded-xl border border-white/10 p-4 shadow-xl animate-float-delay">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-pink-500/20 flex items-center justify-center">
                <span>🔗</span>
              </div>
              <div>
                <p class="text-sm text-white font-medium">Invită un prieten</p>
                <p class="text-xs text-pink-400">+200 puncte pentru tine</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Problem Section -->
  <section class="relative py-20 bg-dark-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Clienții cumpără o dată și pleacă?</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Fără un program de loialitate, pierzi clienți care ar fi revenit.</p>
      </div>

      <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">

        <!-- Without -->
        <div class="p-6 rounded-2xl bg-dark-800/50 border border-red-500/20">
          <div class="flex items-center gap-2 text-red-400 mb-6">
            <span class="text-xl">✗</span>
            <span class="font-semibold">Fără Gamificare</span>
          </div>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-800">
              <span class="text-2xl">👤</span>
              <div>
                <p class="text-sm text-white">Client cumpără bilet</p>
                <p class="text-xs text-white/50">150 RON</p>
              </div>
            </div>

            <div class="flex justify-center">
              <svg class="w-6 h-6 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </div>

            <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-800">
              <span class="text-2xl">🎉</span>
              <div>
                <p class="text-sm text-white">Participă la eveniment</p>
                <p class="text-xs text-white/50">Experiență bună</p>
              </div>
            </div>

            <div class="flex justify-center">
              <svg class="w-6 h-6 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </div>

            <div class="flex items-center gap-4 p-3 rounded-lg bg-red-500/10 border border-red-500/30">
              <span class="text-2xl">👋</span>
              <div>
                <p class="text-sm text-red-400 font-medium">Pleacă și uită</p>
                <p class="text-xs text-red-400/70">Zero motivație să revină</p>
              </div>
            </div>
          </div>

          <div class="mt-6 p-4 rounded-lg bg-red-500/5 border border-red-500/20 text-center">
            <p class="text-red-400 font-semibold">150 RON</p>
            <p class="text-xs text-red-400/70">Valoare totală client</p>
          </div>
        </div>

        <!-- With -->
        <div class="p-6 rounded-2xl bg-dark-800/50 border border-emerald-500/20">
          <div class="flex items-center gap-2 text-emerald-400 mb-6">
            <span class="text-xl">✓</span>
            <span class="font-semibold">Cu Gamificare</span>
          </div>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-800">
              <span class="text-2xl">👤</span>
              <div class="flex-1">
                <p class="text-sm text-white">Client cumpără bilet</p>
                <p class="text-xs text-white/50">150 RON</p>
              </div>
              <span class="text-yellow-400 text-sm font-medium">+75 ⭐</span>
            </div>

            <div class="flex justify-center">
              <svg class="w-6 h-6 text-emerald-500/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </div>

            <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-800">
              <span class="text-2xl">🔗</span>
              <div class="flex-1">
                <p class="text-sm text-white">Recomandă unui prieten</p>
                <p class="text-xs text-white/50">Prietenul cumpără</p>
              </div>
              <span class="text-pink-400 text-sm font-medium">+200 ⭐</span>
            </div>

            <div class="flex justify-center">
              <svg class="w-6 h-6 text-emerald-500/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </div>

            <div class="flex items-center gap-4 p-3 rounded-lg bg-emerald-500/10 border border-emerald-500/30">
              <span class="text-2xl">🔄</span>
              <div class="flex-1">
                <p class="text-sm text-emerald-400 font-medium">Revine și cumpără iar</p>
                <p class="text-xs text-emerald-400/70">Folosește punctele, câștigă altele</p>
              </div>
              <span class="text-emerald-400 text-sm font-medium">♾️</span>
            </div>
          </div>

          <div class="mt-6 p-4 rounded-lg bg-emerald-500/5 border border-emerald-500/20 text-center">
            <p class="text-emerald-400 font-semibold">850+ RON</p>
            <p class="text-xs text-emerald-400/70">Valoare lifetime client</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How it Works -->
  <section id="cum-functioneaza" class="relative py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Simplu ca 1-2-3</h2>
        <p class="text-white/50">Clienții câștigă puncte, urcă în nivel, primesc beneficii.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">

        <!-- Step 1 -->
        <div class="text-center">
          <div class="w-16 h-16 mx-auto rounded-2xl bg-yellow-500/10 border border-yellow-500/20 flex items-center justify-center mb-6">
            <span class="text-3xl">🛒</span>
          </div>
          <div class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-500 text-dark-900 font-bold text-sm mb-4">1</div>
          <h3 class="text-xl font-semibold text-white mb-2">Câștigă puncte</h3>
          <p class="text-white/50">5% din fiecare achiziție devine puncte. Plus bonusuri la înregistrare, ziua de naștere și referințe.</p>
        </div>

        <!-- Step 2 -->
        <div class="text-center">
          <div class="w-16 h-16 mx-auto rounded-2xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center mb-6">
            <span class="text-3xl">📈</span>
          </div>
          <div class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-violet-500 text-white font-bold text-sm mb-4">2</div>
          <h3 class="text-xl font-semibold text-white mb-2">Urcă în nivel</h3>
          <p class="text-white/50">Bronze → Silver → Gold → Platinum. Fiecare nivel aduce multiplicatori mai mari de puncte.</p>
        </div>

        <!-- Step 3 -->
        <div class="text-center">
          <div class="w-16 h-16 mx-auto rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center mb-6">
            <span class="text-3xl">🎁</span>
          </div>
          <div class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-emerald-500 text-white font-bold text-sm mb-4">3</div>
          <h3 class="text-xl font-semibold text-white mb-2">Răscumpără</h3>
          <p class="text-white/50">Punctele devin reduceri reale la checkout. 100 puncte = 1 RON. Simplu și transparent.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Features -->
  <section class="relative py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-yellow-600/10 text-yellow-400 text-sm font-medium mb-4">Funcționalități Complete</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Sistem Complet de Loialitate</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Toate instrumentele necesare pentru a construi un program de recompense de succes.</p>
      </div>

      <!-- Features Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Feature 1: Earning Points -->
        <div class="feature-card p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-yellow-500/30">
          <div class="w-12 h-12 rounded-xl bg-yellow-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">💰</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Câștigare Puncte</h3>
          <p class="text-sm text-white/50 mb-4">Recompensează clienții pentru fiecare acțiune - achiziții, înregistrări, referințe și momente speciale.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> % din valoarea comenzii</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Bonus la înregistrare</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Bonus de ziua de naștere</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Acțiuni personalizate</li>
          </ul>
        </div>

        <!-- Feature 2: Redemption -->
        <div class="feature-card p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-yellow-500/30">
          <div class="w-12 h-12 rounded-xl bg-yellow-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🎁</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Răscumpărare Puncte</h3>
          <p class="text-sm text-white/50 mb-4">Permite clienților să folosească punctele acumulate ca reducere la checkout.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Răscumpărare flexibilă</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Limite configurabile</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Plafonare per comandă</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Reducere instantanee</li>
          </ul>
        </div>

        <!-- Feature 3: Tiers -->
        <div class="feature-card p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-yellow-500/30">
          <div class="w-12 h-12 rounded-xl bg-yellow-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">👑</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Niveluri Clienți</h3>
          <p class="text-sm text-white/50 mb-4">Creează niveluri de loialitate cu beneficii și multiplicatori crescători.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Bronze, Silver, Gold, Platinum</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Multiplicatori de puncte</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Badge-uri vizuale</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Progresie automată</li>
          </ul>
        </div>

        <!-- Feature 4: Referrals -->
        <div class="feature-card p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-yellow-500/30">
          <div class="w-12 h-12 rounded-xl bg-yellow-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🤝</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Sistem Referințe</h3>
          <p class="text-sm text-white/50 mb-4">Programul viral care răsplătește recomandările și stimulează creșterea organică.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Coduri unice per client</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Link-uri de partajat</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Recompense duble</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Monitorizare conversii</li>
          </ul>
        </div>

        <!-- Feature 5: Expiration -->
        <div class="feature-card p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-yellow-500/30">
          <div class="w-12 h-12 rounded-xl bg-yellow-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">⏳</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Expirare Puncte</h3>
          <p class="text-sm text-white/50 mb-4">Control total asupra valabilității punctelor pentru a încuraja utilizarea activă.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Perioadă configurabilă</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Reguli de inactivitate</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Afișare transparentă</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Procesare automată</li>
          </ul>
        </div>

        <!-- Feature 6: Analytics -->
        <div class="feature-card p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-yellow-500/30">
          <div class="w-12 h-12 rounded-xl bg-yellow-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">📊</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Analytics Loialitate</h3>
          <p class="text-sm text-white/50 mb-4">Urmărește performanța programului și înțelege comportamentul clienților.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Total puncte emise</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Rate răscumpărare</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Conversii referințe</li>
            <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Membri activi</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Tiers Visual -->
  <section class="relative py-20 bg-dark-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Niveluri care motivează</h2>
        <p class="text-white/50">Cu cât cumpără mai mult, cu atât câștigă mai mult. Gamificare care funcționează.</p>
      </div>

      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 max-w-4xl mx-auto">

        <!-- Bronze -->
        <div class="p-5 rounded-xl bg-gradient-to-b from-amber-900/30 to-dark-900 border border-amber-800/30 text-center">
          <div class="w-14 h-14 mx-auto rounded-full bg-gradient-to-br from-amber-700 to-amber-900 flex items-center justify-center mb-3">
            <span class="text-2xl">🥉</span>
          </div>
          <h3 class="font-semibold text-amber-400 mb-1">Bronze</h3>
          <p class="text-2xl font-bold text-white mb-1">1x</p>
          <p class="text-xs text-white/40">puncte standard</p>
        </div>

        <!-- Silver -->
        <div class="p-5 rounded-xl bg-gradient-to-b from-slate-600/30 to-dark-900 border border-slate-500/30 text-center">
          <div class="w-14 h-14 mx-auto rounded-full bg-gradient-to-br from-slate-400 to-slate-600 flex items-center justify-center mb-3">
            <span class="text-2xl">🥈</span>
          </div>
          <h3 class="font-semibold text-slate-300 mb-1">Silver</h3>
          <p class="text-2xl font-bold text-white mb-1">1.25x</p>
          <p class="text-xs text-white/40">+25% bonus</p>
        </div>

        <!-- Gold -->
        <div class="p-5 rounded-xl bg-gradient-to-b from-yellow-600/30 to-dark-900 border border-yellow-500/30 text-center relative">
          <div class="absolute -top-2 left-1/2 -translate-x-1/2 px-2 py-0.5 rounded-full bg-yellow-500 text-dark-900 text-[10px] font-bold">POPULAR</div>
          <div class="w-14 h-14 mx-auto rounded-full bg-gradient-to-br from-yellow-400 to-amber-600 flex items-center justify-center mb-3 shadow-lg shadow-yellow-500/30">
            <span class="text-2xl">🥇</span>
          </div>
          <h3 class="font-semibold text-yellow-400 mb-1">Gold</h3>
          <p class="text-2xl font-bold text-white mb-1">1.5x</p>
          <p class="text-xs text-white/40">+50% bonus</p>
        </div>

        <!-- Platinum -->
        <div class="p-5 rounded-xl bg-gradient-to-b from-violet-600/30 to-dark-900 border border-violet-500/30 text-center">
          <div class="w-14 h-14 mx-auto rounded-full bg-gradient-to-br from-violet-400 to-purple-600 flex items-center justify-center mb-3 shadow-lg shadow-violet-500/30">
            <span class="text-2xl">💎</span>
          </div>
          <h3 class="font-semibold text-violet-400 mb-1">Platinum</h3>
          <p class="text-2xl font-bold text-white mb-1">2x</p>
          <p class="text-xs text-white/40">puncte duble!</p>
        </div>
      </div>

      <p class="text-center text-sm text-white/40 mt-6">Denumirile și multiplicatorii sunt complet personalizabili.</p>
    </div>
  </section>

  <!-- Referral Program Section -->
  <section class="relative py-24 bg-dark-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid lg:grid-cols-2 gap-12 items-center">

        <div>
          <span class="inline-block px-4 py-1.5 rounded-full bg-pink-600/10 text-pink-400 text-sm font-medium mb-4">Program Referințe</span>
          <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 font-display">Crește Organic cu Recomandări</h2>
          <p class="text-white/60 mb-8">Fiecare client devine ambasador. Când recomandă platforma unui prieten, ambii sunt recompensați. Win-win pentru toată lumea.</p>

          <div class="space-y-4 mb-8">
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-lg bg-pink-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">🔗</span>
              </div>
              <div>
                <h4 class="font-medium text-white mb-1">Link Unic Personal</h4>
                <p class="text-sm text-white/50">Fiecare client primește un link și cod de referință unic pe care îl poate distribui</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-lg bg-pink-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">🎁</span>
              </div>
              <div>
                <h4 class="font-medium text-white mb-1">Recompensă Dublă</h4>
                <p class="text-sm text-white/50">Cel care recomandă primește 200 puncte, prietenul recomandat primește 100 puncte</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-lg bg-pink-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">📊</span>
              </div>
              <div>
                <h4 class="font-medium text-white mb-1">Tracking Complet</h4>
                <p class="text-sm text-white/50">Urmărește click-uri, conversii și puncte câștigate din fiecare referință</p>
              </div>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="flex-1 p-4 rounded-xl bg-white/5 text-center">
              <p class="text-2xl font-bold text-pink-400 mb-1">200</p>
              <p class="text-xs text-white/50">Puncte pentru tine</p>
            </div>
            <div class="flex items-center justify-center text-white/30">+</div>
            <div class="flex-1 p-4 rounded-xl bg-white/5 text-center">
              <p class="text-2xl font-bold text-cyan-400 mb-1">100</p>
              <p class="text-xs text-white/50">Puncte pentru prieten</p>
            </div>
          </div>
        </div>

        <!-- Referral Mockup -->
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-r from-pink-600/20 to-violet-600/20 rounded-3xl blur-3xl"></div>
          <div class="relative rounded-2xl bg-dark-900 border border-white/10 overflow-hidden">
            <!-- Header -->
            <div class="px-6 py-4 border-b border-white/5 bg-gradient-to-r from-pink-600/10 to-violet-600/10">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-600 to-violet-600 flex items-center justify-center">
                  <span class="text-lg">🤝</span>
                </div>
                <div>
                  <h4 class="font-semibold text-white">Invită Prieteni</h4>
                  <p class="text-xs text-white/50">Câștigă puncte pentru fiecare referință</p>
                </div>
              </div>
            </div>

            <!-- Content -->
            <div class="p-6 space-y-6">
              <!-- Stats -->
              <div class="grid grid-cols-3 gap-4">
                <div class="p-3 rounded-lg bg-dark-800/50 text-center">
                  <p class="text-xl font-bold text-white">12</p>
                  <p class="text-xs text-white/50">Invitați</p>
                </div>
                <div class="p-3 rounded-lg bg-dark-800/50 text-center">
                  <p class="text-xl font-bold text-emerald-400">8</p>
                  <p class="text-xs text-white/50">Convertiți</p>
                </div>
                <div class="p-3 rounded-lg bg-dark-800/50 text-center">
                  <p class="text-xl font-bold text-yellow-400">1,600</p>
                  <p class="text-xs text-white/50">Puncte câștigate</p>
                </div>
              </div>

              <!-- Referral Code -->
              <div>
                <p class="text-xs text-white/50 mb-2">Codul tău de referință</p>
                <div class="flex items-center gap-2">
                  <div class="flex-1 p-3 rounded-lg bg-dark-800/50 font-mono text-white">
                    MARIA2025
                  </div>
                  <button class="p-3 rounded-lg bg-pink-600/20 text-pink-400 hover:bg-pink-600/30 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Share Link -->
              <div>
                <p class="text-xs text-white/50 mb-2">Link de partajat</p>
                <div class="p-3 rounded-lg bg-dark-800/50 text-sm text-white/70 truncate">
                  https://tixello.ro/r/MARIA2025
                </div>
              </div>

              <!-- Share Buttons -->
              <div class="flex gap-2">
                <button class="flex-1 py-2 px-4 rounded-lg bg-[#1877F2]/20 text-[#1877F2] text-sm font-medium hover:bg-[#1877F2]/30 transition-colors">
                  Facebook
                </button>
                <button class="flex-1 py-2 px-4 rounded-lg bg-[#25D366]/20 text-[#25D366] text-sm font-medium hover:bg-[#25D366]/30 transition-colors">
                  WhatsApp
                </button>
                <button class="flex-1 py-2 px-4 rounded-lg bg-white/10 text-white text-sm font-medium hover:bg-white/20 transition-colors">
                  Email
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Automated Features -->
  <section class="relative py-20 bg-dark-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Totul automatizat</h2>
        <p class="text-white/50">Zero muncă manuală. Sistemul face totul pentru tine.</p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">

        <div class="p-6 rounded-xl bg-dark-800/50 border border-white/5">
          <span class="text-3xl mb-4 block">🛒</span>
          <h3 class="font-semibold text-white mb-2">Puncte la achiziție</h3>
          <p class="text-sm text-white/50">Automat, la fiecare comandă. Configurezi procentul o dată, apoi funcționează singur.</p>
        </div>

        <div class="p-6 rounded-xl bg-dark-800/50 border border-white/5">
          <span class="text-3xl mb-4 block">🎂</span>
          <h3 class="font-semibold text-white mb-2">Bonus ziua de naștere</h3>
          <p class="text-sm text-white/50">Clienții primesc automat puncte bonus de ziua lor. Creează conexiune emoțională.</p>
        </div>

        <div class="p-6 rounded-xl bg-dark-800/50 border border-white/5">
          <span class="text-3xl mb-4 block">📊</span>
          <h3 class="font-semibold text-white mb-2">Progresie niveluri</h3>
          <p class="text-sm text-white/50">Clienții avansează automat în nivel când ating pragurile. Notificări incluse.</p>
        </div>

        <div class="p-6 rounded-xl bg-dark-800/50 border border-white/5">
          <span class="text-3xl mb-4 block">💳</span>
          <h3 class="font-semibold text-white mb-2">Răscumpărare la checkout</h3>
          <p class="text-sm text-white/50">Opțiune vizibilă în procesul de plată. Un click și punctele devin reducere.</p>
        </div>

        <div class="p-6 rounded-xl bg-dark-800/50 border border-white/5">
          <span class="text-3xl mb-4 block">⏰</span>
          <h3 class="font-semibold text-white mb-2">Expirare inteligentă</h3>
          <p class="text-sm text-white/50">Setează reguli de expirare pentru a încuraja utilizarea. Sau lasă punctele valabile permanent.</p>
        </div>

        <div class="p-6 rounded-xl bg-dark-800/50 border border-white/5">
          <span class="text-3xl mb-4 block">📱</span>
          <h3 class="font-semibold text-white mb-2">Panou pentru clienți</h3>
          <p class="text-sm text-white/50">Fiecare client își vede punctele, nivelul și istoricul în contul personal.</p>
        </div>
      </div>

      <div class="grid lg:grid-cols-2 gap-12">

        <!-- Earning Points -->
        <div>
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-emerald-600/20 flex items-center justify-center">
              <span class="text-2xl">📥</span>
            </div>
            <h3 class="text-2xl font-bold text-white">Câștigare Puncte</h3>
          </div>

          <div class="rounded-2xl bg-dark-800/50 border border-white/5 overflow-hidden">
            <table class="w-full">
              <thead>
                <tr class="border-b border-white/5">
                  <th class="px-5 py-3 text-left text-sm font-semibold text-white">Acțiune</th>
                  <th class="px-5 py-3 text-right text-sm font-semibold text-white">Puncte</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-white/5">
                <tr>
                  <td class="px-5 py-3 text-sm text-white/70 flex items-center gap-2">
                    <span class="text-lg">🛒</span> Achiziție
                  </td>
                  <td class="px-5 py-3 text-sm text-yellow-400 text-right font-medium">5% din valoare</td>
                </tr>
                <tr>
                  <td class="px-5 py-3 text-sm text-white/70 flex items-center gap-2">
                    <span class="text-lg">👤</span> Înregistrare
                  </td>
                  <td class="px-5 py-3 text-sm text-yellow-400 text-right font-medium">50 puncte</td>
                </tr>
                <tr>
                  <td class="px-5 py-3 text-sm text-white/70 flex items-center gap-2">
                    <span class="text-lg">🎂</span> Ziua de Naștere
                  </td>
                  <td class="px-5 py-3 text-sm text-yellow-400 text-right font-medium">100 puncte</td>
                </tr>
                <tr>
                  <td class="px-5 py-3 text-sm text-white/70 flex items-center gap-2">
                    <span class="text-lg">🤝</span> Referință (Tu)
                  </td>
                  <td class="px-5 py-3 text-sm text-yellow-400 text-right font-medium">200 puncte</td>
                </tr>
                <tr>
                  <td class="px-5 py-3 text-sm text-white/70 flex items-center gap-2">
                    <span class="text-lg">🆕</span> Referință (Prieten)
                  </td>
                  <td class="px-5 py-3 text-sm text-yellow-400 text-right font-medium">100 puncte</td>
                </tr>
              </tbody>
            </table>
          </div>

          <p class="mt-4 text-sm text-white/50 text-center">Toate valorile sunt configurabile din panou</p>
        </div>

        <!-- Redemption Example -->
        <div>
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-violet-600/20 flex items-center justify-center">
              <span class="text-2xl">📤</span>
            </div>
            <h3 class="text-2xl font-bold text-white">Răscumpărare</h3>
          </div>

          <div class="p-6 rounded-2xl bg-dark-800/50 border border-white/5">
            <h4 class="font-semibold text-white mb-4">Exemplu de Configurare</h4>

            <div class="space-y-4 mb-6">
              <div class="flex items-center justify-between p-3 rounded-xl bg-white/5">
                <span class="text-sm text-white/70">1 punct =</span>
                <span class="font-bold text-white">0.01 RON <span class="text-white/50 font-normal">(1 ban)</span></span>
              </div>
              <div class="flex items-center justify-between p-3 rounded-xl bg-white/5">
                <span class="text-sm text-white/70">Răscumpărare minimă</span>
                <span class="font-bold text-white">100 puncte <span class="text-white/50 font-normal">(1 RON)</span></span>
              </div>
              <div class="flex items-center justify-between p-3 rounded-xl bg-white/5">
                <span class="text-sm text-white/70">Reducere maximă</span>
                <span class="font-bold text-white">50% <span class="text-white/50 font-normal">din comandă</span></span>
              </div>
            </div>

            <div class="p-4 rounded-xl bg-gradient-to-br from-yellow-600/10 to-amber-600/5 border border-yellow-500/20">
              <p class="text-sm text-white/80 mb-2"><strong class="text-yellow-400">Exemplu practic:</strong></p>
              <p class="text-sm text-white/60">Un client cu <span class="text-yellow-400 font-semibold">500 puncte</span> poate răscumpăra până la <span class="text-emerald-400 font-semibold">5 RON</span> reducere la următoarea achiziție (limitat la 50% din valoarea comenzii).</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Use Cases -->
  <section class="relative py-24 bg-dark-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-yellow-600/10 text-yellow-400 text-sm font-medium mb-4">Cazuri de Utilizare</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Perfect Pentru Orice Tip de Eveniment</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Descoperă cum diferite tipuri de organizatori folosesc gamificarea pentru a crește loialitatea.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Use Case 1 -->
        <div class="p-6 rounded-2xl bg-gradient-to-br from-yellow-600/10 to-amber-600/5 border border-yellow-500/20">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-yellow-600/20 flex items-center justify-center flex-shrink-0">
              <span class="text-3xl">🏟️</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2">Locații Evenimente</h3>
              <p class="text-white/60 mb-4">Răsplătește participanții frecvenți și încurajează-i să aducă prieteni prin programul de referințe. Clienții loiali primesc puncte la fiecare achiziție.</p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Puncte per bilet</span>
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Bonus referințe</span>
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Niveluri VIP</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Use Case 2 -->
        <div class="p-6 rounded-2xl bg-gradient-to-br from-pink-600/10 to-rose-600/5 border border-pink-500/20">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-pink-600/20 flex items-center justify-center flex-shrink-0">
              <span class="text-3xl">🎪</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2">Festivaluri</h3>
              <p class="text-white/60 mb-4">Construiește loialitate de la an la an cu puncte care se transferă între edițiile anuale. Fanii fideli se bucură de avantaje exclusive.</p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Puncte multi-an</span>
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Early access</span>
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Upgrade gratuit</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Use Case 3 -->
        <div class="p-6 rounded-2xl bg-gradient-to-br from-violet-600/10 to-purple-600/5 border border-violet-500/20">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-violet-600/20 flex items-center justify-center flex-shrink-0">
              <span class="text-3xl">🎭</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2">Teatre & Cinematografe</h3>
              <p class="text-white/60 mb-4">Încurajează vizitele frecvente cu puncte la fiecare bilet și achiziție de la bar. Membrii Gold primesc acces la premiere.</p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Puncte F&B</span>
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Premiere exclusive</span>
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Popcorn gratuit</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Use Case 4 -->
        <div class="p-6 rounded-2xl bg-gradient-to-br from-cyan-600/10 to-blue-600/5 border border-cyan-500/20">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-cyan-600/20 flex items-center justify-center flex-shrink-0">
              <span class="text-3xl">🎓</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2">Conferințe</h3>
              <p class="text-white/60 mb-4">Răsplătește înregistrarea timpurie și referințele pentru a crește participarea. Early birds câștigă puncte bonus.</p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Early bird bonus</span>
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Referral program</span>
                <span class="px-2 py-1 rounded-full bg-white/5 text-white/60 text-xs">Workshop gratuit</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- API Endpoints -->
  <section class="relative py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-yellow-600/10 text-yellow-400 text-sm font-medium mb-4">API REST</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Integrare Ușoară via API</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Accesează toate funcționalitățile programatic pentru integrări personalizate.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Config & Balance -->
        <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5">
          <div class="flex items-center gap-3 mb-4">
            <span class="px-2 py-1 rounded bg-emerald-600/20 text-emerald-400 text-xs font-mono font-bold">GET</span>
            <h4 class="font-medium text-white">Configurare & Sold</h4>
          </div>
          <div class="space-y-2 font-mono text-sm">
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-emerald-400">GET</span> /api/gamification/config
            </div>
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-emerald-400">GET</span> /api/gamification/balance
            </div>
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-emerald-400">GET</span> /api/gamification/history
            </div>
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-emerald-400">GET</span> /api/gamification/how-to-earn
            </div>
          </div>
        </div>

        <!-- Redemption -->
        <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5">
          <div class="flex items-center gap-3 mb-4">
            <span class="px-2 py-1 rounded bg-amber-600/20 text-amber-400 text-xs font-mono font-bold">POST</span>
            <h4 class="font-medium text-white">Răscumpărare</h4>
          </div>
          <div class="space-y-2 font-mono text-sm">
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-amber-400">POST</span> /api/gamification/check-redemption
            </div>
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-amber-400">POST</span> /api/gamification/redeem
            </div>
          </div>
        </div>

        <!-- Referrals -->
        <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5">
          <div class="flex items-center gap-3 mb-4">
            <span class="px-2 py-1 rounded bg-pink-600/20 text-pink-400 text-xs font-mono font-bold">REFERRAL</span>
            <h4 class="font-medium text-white">Referințe</h4>
          </div>
          <div class="space-y-2 font-mono text-sm">
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-emerald-400">GET</span> /api/gamification/referral
            </div>
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-amber-400">POST</span> /api/gamification/track-referral/{code}
            </div>
          </div>
        </div>

        <!-- Webhooks -->
        <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5">
          <div class="flex items-center gap-3 mb-4">
            <span class="px-2 py-1 rounded bg-violet-600/20 text-violet-400 text-xs font-mono font-bold">EVENTS</span>
            <h4 class="font-medium text-white">Evenimente Webhook</h4>
          </div>
          <div class="space-y-2 font-mono text-sm">
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-violet-400">EVENT</span> points.earned
            </div>
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-violet-400">EVENT</span> points.redeemed
            </div>
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-violet-400">EVENT</span> tier.upgraded
            </div>
            <div class="p-2 rounded bg-dark-800/50 text-white/70">
              <span class="text-violet-400">EVENT</span> referral.converted
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Configuration Tables -->
  <section class="relative py-24 bg-dark-900/30">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-yellow-600/10 text-yellow-400 text-sm font-medium mb-4">Configurare</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Opțiuni de Setare Complete</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Personalizează fiecare aspect al programului de loialitate.</p>
      </div>

      <!-- Point Value Settings -->
      <div class="mb-8">
        <h3 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
          <span class="text-xl">💰</span> Setări Valoare Puncte
        </h3>
        <div class="rounded-2xl bg-dark-900/50 border border-white/5 overflow-hidden">
          <table class="w-full">
            <thead>
              <tr class="border-b border-white/5">
                <th class="px-5 py-3 text-left text-sm font-semibold text-white">Setare</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-white hidden sm:table-cell">Descriere</th>
                <th class="px-5 py-3 text-right text-sm font-semibold text-white">Implicit</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Valoare Punct</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Valoare în monedă per punct</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">0.01 RON</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Procent Câștig</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">% din comandă convertit în puncte</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">5%</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Calculare pe</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Subtotal vs Total comandă</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">Subtotal</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Comandă Min</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Comandă minimă pentru câștig</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">0 RON</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Redemption Settings -->
      <div class="mb-8">
        <h3 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
          <span class="text-xl">🎁</span> Setări Răscumpărare
        </h3>
        <div class="rounded-2xl bg-dark-900/50 border border-white/5 overflow-hidden">
          <table class="w-full">
            <thead>
              <tr class="border-b border-white/5">
                <th class="px-5 py-3 text-left text-sm font-semibold text-white">Setare</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-white hidden sm:table-cell">Descriere</th>
                <th class="px-5 py-3 text-right text-sm font-semibold text-white">Implicit</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Puncte Min</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Puncte minime pentru răscumpărare</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">100</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Procent Max</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">% maxim plătibil cu puncte</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">50%</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Puncte Max/Comandă</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Puncte maxime per tranzacție</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">Nelimitat</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Bonus Settings -->
      <div class="mb-8">
        <h3 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
          <span class="text-xl">🎂</span> Setări Bonus
        </h3>
        <div class="rounded-2xl bg-dark-900/50 border border-white/5 overflow-hidden">
          <table class="w-full">
            <thead>
              <tr class="border-b border-white/5">
                <th class="px-5 py-3 text-left text-sm font-semibold text-white">Setare</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-white hidden sm:table-cell">Descriere</th>
                <th class="px-5 py-3 text-right text-sm font-semibold text-white">Implicit</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Bonus Înregistrare</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Puncte pentru cont nou</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">50 puncte</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Bonus Ziua de Naștere</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Puncte de ziua clientului</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">100 puncte</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Bonus Referral (Tu)</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Puncte pentru cel ce recomandă</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">200 puncte</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Bonus Referral (Prieten)</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Puncte pentru noul client</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">100 puncte</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Expiration Settings -->
      <div>
        <h3 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
          <span class="text-xl">⏳</span> Setări Expirare
        </h3>
        <div class="rounded-2xl bg-dark-900/50 border border-white/5 overflow-hidden">
          <table class="w-full">
            <thead>
              <tr class="border-b border-white/5">
                <th class="px-5 py-3 text-left text-sm font-semibold text-white">Setare</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-white hidden sm:table-cell">Descriere</th>
                <th class="px-5 py-3 text-right text-sm font-semibold text-white">Implicit</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Zile Expirare</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Zile până la expirare</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">Niciodată</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Expirare Inactivitate</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Expiră dacă cont inactiv</td><td class="px-5 py-3 text-sm text-white/40 text-right">Nu</td></tr>
              <tr><td class="px-5 py-3 text-sm text-white font-medium">Zile Inactivitate</td><td class="px-5 py-3 text-sm text-white/50 hidden sm:table-cell">Zile înainte de expirare</td><td class="px-5 py-3 text-sm text-yellow-400 text-right">365 zile</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Business Benefits -->
  <section class="relative py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-yellow-600/10 text-yellow-400 text-sm font-medium mb-4">ROI Garantat</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Beneficii pentru Afacerea Ta</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Investiția în loialitate se întoarce multiplicat.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
        <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5 text-center">
          <div class="w-14 h-14 mx-auto rounded-2xl bg-emerald-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">📈</span>
          </div>
          <h4 class="font-semibold text-white mb-2">Retenție Crescută</h4>
          <p class="text-sm text-white/50">Clienții loiali revin mai frecvent</p>
        </div>

        <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5 text-center">
          <div class="w-14 h-14 mx-auto rounded-2xl bg-yellow-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">💰</span>
          </div>
          <h4 class="font-semibold text-white mb-2">Valori Mai Mari</h4>
          <p class="text-sm text-white/50">Cheltuieli mai mari pentru puncte</p>
        </div>

        <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5 text-center">
          <div class="w-14 h-14 mx-auto rounded-2xl bg-pink-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🚀</span>
          </div>
          <h4 class="font-semibold text-white mb-2">Creștere Organică</h4>
          <p class="text-sm text-white/50">Referințele aduc clienți noi</p>
        </div>

        <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5 text-center">
          <div class="w-14 h-14 mx-auto rounded-2xl bg-blue-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">📊</span>
          </div>
          <h4 class="font-semibold text-white mb-2">Date Valoroase</h4>
          <p class="text-sm text-white/50">Înțelege tiparele de achiziție</p>
        </div>

        <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5 text-center">
          <div class="w-14 h-14 mx-auto rounded-2xl bg-violet-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🏆</span>
          </div>
          <h4 class="font-semibold text-white mb-2">Diferențiere</h4>
          <p class="text-sm text-white/50">Ieși în evidență de competiție</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial -->
  <section class="relative py-20 bg-dark-900/50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

      <div class="w-16 h-16 mx-auto rounded-full bg-yellow-500/10 flex items-center justify-center mb-6">
        <span class="text-3xl">"</span>
      </div>

      <blockquote class="text-xl sm:text-2xl text-white font-medium mb-8 leading-relaxed">
        "Programul de loialitate ne-a crescut rata de revenire de la 12% la 34%. Clienții chiar se întrec să adune puncte și să urce în nivel. E ca un joc pentru ei și vânzări pentru noi."
      </blockquote>

      <div class="flex items-center justify-center gap-4">
        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-yellow-400 to-amber-600 flex items-center justify-center text-xl">
          A
        </div>
        <div class="text-left">
          <p class="font-semibold text-white">Andrei T.</p>
          <p class="text-sm text-white/50">Director Marketing, Mega Concert Events</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="relative py-24">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-yellow-950/10 to-transparent"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

      <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 font-display">
        Începe să-ți recompensezi clienții
      </h2>

      <p class="text-lg text-white/60 mb-10 max-w-2xl mx-auto">
        Puncte, niveluri, referințe. Tot ce ai nevoie pentru clienți care revin.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-6">
        <a href="https://core.tixello.com/register" class="px-8 py-4 rounded-lg bg-yellow-500 text-dark-900 font-semibold hover:bg-yellow-400 transition-colors">
          Activează Gamificarea
        </a>
        <a href="/contact" class="px-8 py-4 rounded-lg bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-colors">
          Întrebări? Contactează-ne
        </a>
      </div>

      <p class="text-sm text-white/40">€15/lună per tenant. Anulează oricând.</p>
    </div>
  </section>

</main>

<script>
  // Reveal on scroll
  document.addEventListener('DOMContentLoaded', () => {
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
        }
      });
    }, { threshold: 0.1 });
    reveals.forEach(el => observer.observe(el));
  });
</script>

<?php get_footer(); ?>