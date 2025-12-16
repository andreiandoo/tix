<?php
/**
 * Template Name: Micro - Shop / E-commerce
 * Description: Shop - Modul E-commerce pentru merchandise și produse
 */

get_header();
?>

<style>
  ::selection { background: #F97316; color: white; }

  .text-gradient-shop { background: linear-gradient(135deg, #F97316 0%, #FBBF24 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card { transition: all 0.3s ease; }
  .feature-card:hover { transform: translateY(-4px); }
  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(249, 115, 22, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-15px); } }
  @keyframes float-reverse { 0%, 100% { transform: translateY(-15px); } 50% { transform: translateY(0px); } }
  @keyframes conveyor { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
  @keyframes pulse-border { 0%, 100% { border-color: rgba(249, 115, 22, 0.3); } 50% { border-color: rgba(249, 115, 22, 0.8); } }
  @keyframes neon-glow { 0%, 100% { text-shadow: 0 0 10px rgba(249, 115, 22, 0.5), 0 0 20px rgba(249, 115, 22, 0.3); filter: brightness(1); } 50% { text-shadow: 0 0 20px rgba(249, 115, 22, 0.8), 0 0 40px rgba(249, 115, 22, 0.5); filter: brightness(1.1); } }
  @keyframes cart-shake { 0%, 100% { transform: rotate(0deg); } 25% { transform: rotate(-3deg); } 75% { transform: rotate(3deg); } }
  @keyframes item-drop { 0% { transform: translateY(-50px) scale(0); opacity: 0; } 60% { transform: translateY(5px) scale(1.1); opacity: 1; } 100% { transform: translateY(0) scale(1); opacity: 1; } }
  @keyframes price-tick { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); color: #22c55e; } }

  .animate-float { animation: float 4s ease-in-out infinite; }
  .animate-float-delay { animation: float 4s ease-in-out 1s infinite; }
  .animate-float-delay-2 { animation: float 4s ease-in-out 2s infinite; }
  .animate-float-reverse { animation: float-reverse 4s ease-in-out infinite; }
  .animate-conveyor { animation: conveyor 20s linear infinite; }
  .animate-pulse-border { animation: pulse-border 2s ease-in-out infinite; }
  .animate-neon { animation: neon-glow 2s ease-in-out infinite; }
  .animate-cart-shake { animation: cart-shake 0.5s ease-in-out; }
  .animate-item-drop { animation: item-drop 0.5s ease-out forwards; }
  .animate-price-tick { animation: price-tick 0.3s ease-out; }

  .shop-window { background: linear-gradient(180deg, rgba(24, 24, 27, 0.9) 0%, rgba(24, 24, 27, 0.95) 100%); backdrop-filter: blur(20px); }
  .product-shelf { background: linear-gradient(180deg, rgba(39, 39, 42, 0.8) 0%, rgba(24, 24, 27, 0.9) 100%); }
</style>

<main class="noise bg-dark-950 min-h-screen">

  <!-- Background -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="absolute top-20 left-10 w-72 h-72 bg-orange-500/10 rounded-full blur-3xl animate-float"></div>
    <div class="absolute top-1/2 right-10 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl animate-float-delay"></div>
    <div class="absolute bottom-20 left-1/3 w-64 h-64 bg-yellow-500/10 rounded-full blur-3xl animate-float-delay-2"></div>
  </div>

  <!-- HERO - Shop Window Concept -->
  <section class="relative pt-28 pb-16 overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Top Badge -->
      <div class="text-center mb-8">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-orange-500/10 border border-orange-500/20 text-orange-400 text-sm">
          <span>🛒</span>
          <span>E-commerce complet integrat cu ticketing</span>
        </div>
      </div>

      <!-- Main Title -->
      <div class="text-center mb-12">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight font-display">
          Vinde mai mult decât <span class="text-gradient-shop animate-neon">bilete</span>
        </h1>
        <p class="text-lg sm:text-xl text-white/60 max-w-2xl mx-auto">
          Tricouri, hanorace, postere, muzică digitală. Un magazin complet, același checkout cu biletele. <strong class="text-white">Zero fricțiune, +35% venit.</strong>
        </p>
      </div>

      <!-- Shop Window Display -->
      <div class="relative max-w-5xl mx-auto" x-data="shopWindow()">

        <!-- The Shop Window Frame -->
        <div class="relative rounded-3xl border-2 border-orange-500/30 animate-pulse-border overflow-hidden shop-window">

          <!-- Neon Sign -->
          <div class="absolute -top-5 left-1/2 -translate-x-1/2 z-20">
            <div class="px-6 py-2 rounded-full bg-dark-900 border border-orange-500/50 shadow-lg shadow-orange-500/20">
              <span class="text-orange-400 font-bold tracking-wider animate-neon">MERCH SHOP</span>
            </div>
          </div>

          <!-- Window Content -->
          <div class="pt-8 pb-6 px-6">

            <!-- Product Conveyor Belt -->
            <div class="relative h-48 sm:h-56 overflow-hidden rounded-2xl bg-dark-900/50 mb-6">

              <!-- Shelf Background -->
              <div class="absolute inset-x-0 bottom-0 h-16 product-shelf rounded-b-2xl"></div>

              <!-- Animated Products -->
              <div class="absolute inset-0 flex items-center">
                <div class="flex gap-8 animate-conveyor" style="width: 200%;">
                  <!-- Product Set 1 -->
                  <div class="flex gap-8 items-end px-4">
                    <div class="w-28 sm:w-36 flex-shrink-0 transform hover:scale-105 transition-transform cursor-pointer" @click="addToCart('tshirt')">
                      <div class="bg-gradient-to-br from-pink-600/20 to-purple-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">👕</span>
                        <p class="text-xs text-white/70 text-center">Festival Tee</p>
                        <p class="text-orange-400 font-bold text-center">€29</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0 transform hover:scale-105 transition-transform cursor-pointer" @click="addToCart('hoodie')">
                      <div class="bg-gradient-to-br from-blue-600/20 to-cyan-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">🧥</span>
                        <p class="text-xs text-white/70 text-center">Hoodie VIP</p>
                        <p class="text-orange-400 font-bold text-center">€59</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0 transform hover:scale-105 transition-transform cursor-pointer" @click="addToCart('cap')">
                      <div class="bg-gradient-to-br from-amber-600/20 to-orange-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">🧢</span>
                        <p class="text-xs text-white/70 text-center">Logo Cap</p>
                        <p class="text-orange-400 font-bold text-center">€19</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0 transform hover:scale-105 transition-transform cursor-pointer" @click="addToCart('poster')">
                      <div class="bg-gradient-to-br from-emerald-600/20 to-teal-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">🖼️</span>
                        <p class="text-xs text-white/70 text-center">Poster Ltd</p>
                        <p class="text-orange-400 font-bold text-center">€15</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0 transform hover:scale-105 transition-transform cursor-pointer" @click="addToCart('vinyl')">
                      <div class="bg-gradient-to-br from-violet-600/20 to-purple-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">💿</span>
                        <p class="text-xs text-white/70 text-center">Vinyl Album</p>
                        <p class="text-orange-400 font-bold text-center">€35</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0 transform hover:scale-105 transition-transform cursor-pointer" @click="addToCart('digital')">
                      <div class="bg-gradient-to-br from-cyan-600/20 to-blue-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">🎵</span>
                        <p class="text-xs text-white/70 text-center">Digital Pack</p>
                        <p class="text-orange-400 font-bold text-center">€9</p>
                      </div>
                    </div>
                  </div>
                  <!-- Product Set 2 (duplicate for seamless loop) -->
                  <div class="flex gap-8 items-end px-4">
                    <div class="w-28 sm:w-36 flex-shrink-0">
                      <div class="bg-gradient-to-br from-pink-600/20 to-purple-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">👕</span>
                        <p class="text-xs text-white/70 text-center">Festival Tee</p>
                        <p class="text-orange-400 font-bold text-center">€29</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0">
                      <div class="bg-gradient-to-br from-blue-600/20 to-cyan-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">🧥</span>
                        <p class="text-xs text-white/70 text-center">Hoodie VIP</p>
                        <p class="text-orange-400 font-bold text-center">€59</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0">
                      <div class="bg-gradient-to-br from-amber-600/20 to-orange-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">🧢</span>
                        <p class="text-xs text-white/70 text-center">Logo Cap</p>
                        <p class="text-orange-400 font-bold text-center">€19</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0">
                      <div class="bg-gradient-to-br from-emerald-600/20 to-teal-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">🖼️</span>
                        <p class="text-xs text-white/70 text-center">Poster Ltd</p>
                        <p class="text-orange-400 font-bold text-center">€15</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0">
                      <div class="bg-gradient-to-br from-violet-600/20 to-purple-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">💿</span>
                        <p class="text-xs text-white/70 text-center">Vinyl Album</p>
                        <p class="text-orange-400 font-bold text-center">€35</p>
                      </div>
                    </div>
                    <div class="w-28 sm:w-36 flex-shrink-0">
                      <div class="bg-gradient-to-br from-cyan-600/20 to-blue-600/20 rounded-xl p-4 border border-white/10">
                        <span class="text-5xl sm:text-6xl block text-center mb-2">🎵</span>
                        <p class="text-xs text-white/70 text-center">Digital Pack</p>
                        <p class="text-orange-400 font-bold text-center">€9</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Click hint -->
              <div class="absolute bottom-2 right-3 text-xs text-white/30">Click pe produs pentru demo</div>
            </div>

            <!-- Bottom: Ticket + Cart Area -->
            <div class="grid sm:grid-cols-2 gap-4">

              <!-- Ticket (always in cart) -->
              <div class="p-4 rounded-xl bg-gradient-to-br from-violet-600/10 to-purple-600/10 border border-violet-500/20">
                <div class="flex items-center gap-4">
                  <div class="w-14 h-14 rounded-xl bg-violet-600/20 flex items-center justify-center flex-shrink-0">
                    <span class="text-3xl">🎫</span>
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm text-white font-medium truncate">Bilet VIP Festival</p>
                    <p class="text-xs text-white/50">Întotdeauna în coș</p>
                  </div>
                  <div class="text-right">
                    <p class="text-violet-400 font-bold">€150</p>
                    <span class="text-xs text-emerald-400">✓</span>
                  </div>
                </div>
              </div>

              <!-- Shopping Cart -->
              <div class="p-4 rounded-xl bg-dark-800/50 border border-white/10" :class="{ 'animate-cart-shake': cartShake }">
                <div class="flex items-center justify-between mb-3">
                  <div class="flex items-center gap-2">
                    <span class="text-xl">🛒</span>
                    <span class="text-sm text-white/70">Coșul tău</span>
                  </div>
                  <span class="px-2 py-0.5 rounded-full bg-orange-600/20 text-orange-400 text-xs font-bold" x-text="cartItems.length + ' produse'"></span>
                </div>

                <!-- Cart Items -->
                <div class="flex flex-wrap gap-1 mb-3 min-h-[32px]">
                  <template x-for="item in cartItems" :key="item.id">
                    <span class="text-xl animate-item-drop" x-text="item.emoji"></span>
                  </template>
                </div>

                <!-- Total -->
                <div class="flex items-center justify-between pt-3 border-t border-white/10">
                  <span class="text-sm text-white/50">Total:</span>
                  <span class="text-lg font-bold text-white" :class="{ 'animate-price-tick': priceUpdated }" x-text="'€' + total"></span>
                </div>
              </div>
            </div>
          </div>

          <!-- Reflection effect -->
          <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-dark-950/50 to-transparent"></div>
        </div>

        <!-- Price Tag floating -->
        <div class="absolute -top-2 -right-2 sm:-right-6 bg-emerald-500 text-dark-900 px-4 py-2 rounded-xl font-bold shadow-lg transform rotate-6 animate-float">
          €29/lună
        </div>

        <!-- Stats floating left -->
        <div class="absolute -left-2 sm:-left-8 top-1/2 -translate-y-1/2 bg-dark-900 border border-white/10 rounded-xl p-3 shadow-xl animate-float-delay hidden sm:block">
          <p class="text-2xl font-bold text-orange-400">+35%</p>
          <p class="text-xs text-white/50">Venit per client</p>
        </div>
      </div>

      <!-- CTA Buttons -->
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-10">
        <a href="https://core.tixello.com/register" class="px-8 py-4 rounded-xl bg-gradient-to-r from-orange-500 to-amber-500 text-dark-900 font-semibold hover:shadow-lg hover:shadow-orange-500/30 transition-all">
          Deschide Magazinul
        </a>
        <a href="#functionalitati" class="px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-colors">
          Vezi funcționalități
        </a>
      </div>
    </div>
  </section>

  <!-- Key Stats -->
  <section class="relative py-12 border-y border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-8">
        <div class="text-center">
          <p class="text-3xl sm:text-4xl font-bold text-orange-400 mb-1">∞</p>
          <p class="text-sm text-white/50">Produse Nelimitate</p>
        </div>
        <div class="text-center">
          <p class="text-3xl sm:text-4xl font-bold text-orange-400 mb-1">4</p>
          <p class="text-sm text-white/50">Valute Suportate</p>
        </div>
        <div class="text-center">
          <p class="text-3xl sm:text-4xl font-bold text-orange-400 mb-1">6</p>
          <p class="text-sm text-white/50">Statusuri Comandă</p>
        </div>
        <div class="text-center">
          <p class="text-3xl sm:text-4xl font-bold text-orange-400 mb-1">15min</p>
          <p class="text-sm text-white/50">Rezervare Stoc</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Features -->
  <section id="functionalitati" class="relative py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-orange-600/10 text-orange-400 text-sm font-medium mb-4">Funcționalități Complete</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Tot Ce Ai Nevoie Pentru E-commerce</h2>
        <p class="text-white/50 max-w-2xl mx-auto">De la gestionarea produselor până la livrare, totul integrat perfect cu platforma de ticketing.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Feature 1: Product Management -->
        <div class="feature-card relative p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30">
          <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">📦</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Gestionare Produse</h3>
          <p class="text-sm text-white/50 mb-4">Vinde produse fizice, digitale și merchandise cu urmărire completă a stocului și variante multiple.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Produse fizice cu stoc</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Produse digitale descărcabile</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Variante (mărime, culoare)</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Galerie imagini multiple</li>
          </ul>
        </div>

        <!-- Feature 2: Inventory -->
        <div class="feature-card relative p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30">
          <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">📊</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Inventar & Control Stoc</h3>
          <p class="text-sm text-white/50 mb-4">Monitorizează stocul în timp real cu alerte automate și rezervare inteligentă la checkout.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Actualizări în timp real</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Alerte stoc redus</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Rezervare 15 min la checkout</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Opțiune stoc nelimitat</li>
          </ul>
        </div>

        <!-- Feature 3: Pricing -->
        <div class="feature-card relative p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30">
          <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">💰</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Prețuri Flexibile</h3>
          <p class="text-sm text-white/50 mb-4">Setează prețuri promoționale, urmărește costurile și marjele în multiple valute.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Prețuri promoționale programate</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Urmărire costuri și marje</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> RON, EUR, USD, GBP</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> TVA inclus/exclus</li>
          </ul>
        </div>

        <!-- Feature 4: Shipping -->
        <div class="feature-card relative p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30">
          <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🚚</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Livrare & Îndeplinire</h3>
          <p class="text-sm text-white/50 mb-4">Configurează zone de livrare, metode multiple și urmărește comenzile de la plasare la livrare.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Zone livrare personalizate</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Tarif fix / greutate / preț</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Estimări timp livrare</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Urmărire status comandă</li>
          </ul>
        </div>

        <!-- Feature 5: Event Integration -->
        <div class="feature-card relative p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30">
          <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🎫</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Integrare Evenimente</h3>
          <p class="text-sm text-white/50 mb-4">Leagă produsele de evenimente specifice. Checkout unificat pentru bilete și merchandise.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Produse per eveniment</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Checkout combinat</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Upsell automat</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Bundle bilet + produs</li>
          </ul>
        </div>

        <!-- Feature 6: Gift Cards -->
        <div class="feature-card relative p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30">
          <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🎁</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Carduri Cadou</h3>
          <p class="text-sm text-white/50 mb-4">Vinde carduri cadou pentru bilete sau produse. Perfect pentru sărbători și ocazii speciale.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Valori personalizate</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Email personalizat</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Coduri unice</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Expirare configurabilă</li>
          </ul>
        </div>

        <!-- Feature 7: Customer Experience -->
        <div class="feature-card relative p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30">
          <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">⭐</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Experiență Client</h3>
          <p class="text-sm text-white/50 mb-4">Recenzii produse, wishlist, notificări de stoc și recomandări personalizate.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Recenzii și rating-uri</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Lista de dorințe</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Notificare "Back in stock"</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Produse recomandate</li>
          </ul>
        </div>

        <!-- Feature 8: Coupons -->
        <div class="feature-card relative p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30">
          <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🏷️</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Cupoane & Promoții</h3>
          <p class="text-sm text-white/50 mb-4">Creează campanii de reduceri cu cupoane unice sau publice și limite de utilizare.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Reducere % sau sumă fixă</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Limite de utilizare</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Perioadă de valabilitate</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Minim comandă</li>
          </ul>
        </div>

        <!-- Feature 9: Analytics -->
        <div class="feature-card relative p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30">
          <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center mb-4">
            <span class="text-2xl">📈</span>
          </div>
          <h3 class="text-lg font-semibold text-white mb-2">Analiză & Rapoarte</h3>
          <p class="text-sm text-white/50 mb-4">Dashboard cu metrici de vânzări, produse populare și comportament clienți.</p>
          <ul class="space-y-2 text-sm text-white/60">
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Vânzări în timp real</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Top produse</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Rate de conversie</li>
            <li class="flex items-center gap-2"><span class="text-orange-400">✓</span> Export rapoarte</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Order Flow -->
  <section class="relative py-24 bg-dark-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-orange-600/10 text-orange-400 text-sm font-medium mb-4">Flux Comenzi</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Ciclul de Viață al Comenzii</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Urmărește fiecare comandă de la plasare până la livrare cu statusuri clare.</p>
      </div>

      <!-- Order Status Flow -->
      <div class="relative max-w-5xl mx-auto">
        <!-- Connection Line -->
        <div class="hidden lg:block absolute top-8 left-[8%] right-[8%] h-0.5 bg-gradient-to-r from-yellow-500 via-blue-500 via-purple-500 via-cyan-500 to-green-500"></div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6">
          <div class="text-center">
            <div class="w-16 h-16 mx-auto rounded-full bg-yellow-500/20 border-2 border-yellow-500 flex items-center justify-center mb-4 relative z-10">
              <span class="text-2xl">⏳</span>
            </div>
            <h4 class="font-semibold text-white mb-1">În așteptare</h4>
            <p class="text-xs text-white/50">Plată în procesare</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 mx-auto rounded-full bg-blue-500/20 border-2 border-blue-500 flex items-center justify-center mb-4 relative z-10">
              <span class="text-2xl">🔄</span>
            </div>
            <h4 class="font-semibold text-white mb-1">Procesare</h4>
            <p class="text-xs text-white/50">Se pregătește</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 mx-auto rounded-full bg-purple-500/20 border-2 border-purple-500 flex items-center justify-center mb-4 relative z-10">
              <span class="text-2xl">📦</span>
            </div>
            <h4 class="font-semibold text-white mb-1">Împachetat</h4>
            <p class="text-xs text-white/50">Gata de expediere</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 mx-auto rounded-full bg-cyan-500/20 border-2 border-cyan-500 flex items-center justify-center mb-4 relative z-10">
              <span class="text-2xl">🚚</span>
            </div>
            <h4 class="font-semibold text-white mb-1">Expediat</h4>
            <p class="text-xs text-white/50">La curier</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 mx-auto rounded-full bg-green-500/20 border-2 border-green-500 flex items-center justify-center mb-4 relative z-10">
              <span class="text-2xl">✅</span>
            </div>
            <h4 class="font-semibold text-white mb-1">Finalizat</h4>
            <p class="text-xs text-white/50">Livrat cu succes</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 mx-auto rounded-full bg-red-500/20 border-2 border-red-500 flex items-center justify-center mb-4 relative z-10">
              <span class="text-2xl">❌</span>
            </div>
            <h4 class="font-semibold text-white mb-1">Anulat</h4>
            <p class="text-xs text-white/50">Sau rambursat</p>
          </div>
        </div>
      </div>

      <!-- Order Features -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-16">
        <div class="p-4 rounded-xl bg-dark-900/50 border border-white/5 text-center">
          <span class="text-2xl mb-2 block">🔢</span>
          <p class="text-sm text-white/70">Numere comandă automate</p>
          <p class="text-orange-400 text-xs mt-1">SH-2024-00001</p>
        </div>
        <div class="p-4 rounded-xl bg-dark-900/50 border border-white/5 text-center">
          <span class="text-2xl mb-2 block">📜</span>
          <p class="text-sm text-white/70">Istoric detaliat</p>
          <p class="text-orange-400 text-xs mt-1">Cu marcaje temporale</p>
        </div>
        <div class="p-4 rounded-xl bg-dark-900/50 border border-white/5 text-center">
          <span class="text-2xl mb-2 block">📝</span>
          <p class="text-sm text-white/70">Note interne</p>
          <p class="text-orange-400 text-xs mt-1">Comunicare echipă</p>
        </div>
        <div class="p-4 rounded-xl bg-dark-900/50 border border-white/5 text-center">
          <span class="text-2xl mb-2 block">📤</span>
          <p class="text-sm text-white/70">Export în masă</p>
          <p class="text-orange-400 text-xs mt-1">Pentru fulfillment</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Admin Panel Section -->
  <section class="relative py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 items-center">

        <div>
          <span class="inline-block px-4 py-1.5 rounded-full bg-orange-600/10 text-orange-400 text-sm font-medium mb-4">Panou Admin</span>
          <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 font-display">Control Total Din Dashboard</h2>
          <p class="text-white/60 mb-8">Accesează toate funcționalitățile magazinului direct din panoul de control. Interfață intuitivă pentru gestionare eficientă.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50 border border-white/5">
              <div class="w-10 h-10 rounded-lg bg-orange-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">📦</span>
              </div>
              <div>
                <h4 class="font-medium text-white">Produse</h4>
                <p class="text-sm text-white/50">Creează și gestionează catalogul</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50 border border-white/5">
              <div class="w-10 h-10 rounded-lg bg-orange-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">🏷️</span>
              </div>
              <div>
                <h4 class="font-medium text-white">Categorii & Atribute</h4>
                <p class="text-sm text-white/50">Organizează și definește variante</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50 border border-white/5">
              <div class="w-10 h-10 rounded-lg bg-orange-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">📋</span>
              </div>
              <div>
                <h4 class="font-medium text-white">Comenzi</h4>
                <p class="text-sm text-white/50">Vizualizează și procesează comenzi</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50 border border-white/5">
              <div class="w-10 h-10 rounded-lg bg-orange-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">🚚</span>
              </div>
              <div>
                <h4 class="font-medium text-white">Livrare</h4>
                <p class="text-sm text-white/50">Zone și metode de livrare</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Mock Dashboard -->
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-r from-orange-600/20 to-amber-600/20 rounded-3xl blur-3xl"></div>
          <div class="relative rounded-2xl bg-dark-900 border border-white/10 overflow-hidden">
            <!-- Dashboard Header -->
            <div class="px-6 py-4 border-b border-white/5 flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-orange-600/20 flex items-center justify-center">
                  <span class="text-sm">🛒</span>
                </div>
                <span class="font-medium text-white">Magazin Dashboard</span>
              </div>
              <div class="flex items-center gap-2">
                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                <div class="w-3 h-3 rounded-full bg-green-500"></div>
              </div>
            </div>

            <!-- Dashboard Content -->
            <div class="p-6">
              <!-- Stats Row -->
              <div class="grid grid-cols-3 gap-4 mb-6">
                <div class="p-3 rounded-lg bg-dark-800/50">
                  <p class="text-xs text-white/50 mb-1">Comenzi Azi</p>
                  <p class="text-xl font-bold text-white">24</p>
                </div>
                <div class="p-3 rounded-lg bg-dark-800/50">
                  <p class="text-xs text-white/50 mb-1">Venituri</p>
                  <p class="text-xl font-bold text-orange-400">€1,847</p>
                </div>
                <div class="p-3 rounded-lg bg-dark-800/50">
                  <p class="text-xs text-white/50 mb-1">Produse</p>
                  <p class="text-xl font-bold text-white">156</p>
                </div>
              </div>

              <!-- Recent Orders -->
              <div class="space-y-3">
                <p class="text-sm font-medium text-white/70">Comenzi Recente</p>
                <div class="flex items-center justify-between p-3 rounded-lg bg-dark-800/30">
                  <div class="flex items-center gap-3">
                    <span class="text-lg">📦</span>
                    <div>
                      <p class="text-sm text-white">SH-2024-00156</p>
                      <p class="text-xs text-white/50">2 produse • €87</p>
                    </div>
                  </div>
                  <span class="px-2 py-1 rounded-full bg-blue-600/20 text-blue-400 text-xs">Procesare</span>
                </div>
                <div class="flex items-center justify-between p-3 rounded-lg bg-dark-800/30">
                  <div class="flex items-center gap-3">
                    <span class="text-lg">🚚</span>
                    <div>
                      <p class="text-sm text-white">SH-2024-00155</p>
                      <p class="text-xs text-white/50">1 produs • €35</p>
                    </div>
                  </div>
                  <span class="px-2 py-1 rounded-full bg-cyan-600/20 text-cyan-400 text-xs">Expediat</span>
                </div>
                <div class="flex items-center justify-between p-3 rounded-lg bg-dark-800/30">
                  <div class="flex items-center gap-3">
                    <span class="text-lg">✅</span>
                    <div>
                      <p class="text-sm text-white">SH-2024-00154</p>
                      <p class="text-xs text-white/50">3 produse • €124</p>
                    </div>
                  </div>
                  <span class="px-2 py-1 rounded-full bg-green-600/20 text-green-400 text-xs">Finalizat</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ticket + Product Integration -->
  <section class="relative py-24 bg-dark-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-violet-600/10 text-violet-400 text-sm font-medium mb-4">Integrare Bilete + Produse</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Conectează Produsele cu Biletele</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Maximizează veniturile prin conectarea inteligentă a produselor cu vânzarea de bilete.</p>
      </div>

      <div class="grid lg:grid-cols-2 gap-8">

        <!-- Upsell at Checkout -->
        <div class="p-8 rounded-3xl bg-gradient-to-br from-violet-600/10 to-purple-600/5 border border-violet-500/20">
          <div class="w-16 h-16 rounded-2xl bg-violet-600/20 flex items-center justify-center mb-6">
            <span class="text-4xl">🛍️</span>
          </div>
          <h3 class="text-2xl font-bold text-white mb-4">Upsell la Checkout Bilete</h3>
          <p class="text-white/60 mb-6">Când un client cumpără bilet la un eveniment, îi poți sugera produse relevante din magazin direct în procesul de checkout. Crește valoarea medie a comenzii fără efort suplimentar.</p>

          <div class="space-y-3">
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5">
              <span class="text-xl">🎫</span>
              <div class="flex-1">
                <p class="text-sm text-white">Bilet Festival VIP</p>
                <p class="text-xs text-white/50">€150</p>
              </div>
              <span class="text-emerald-400 text-sm">✓ În coș</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-orange-600/10 border border-orange-500/30">
              <span class="text-xl">👕</span>
              <div class="flex-1">
                <p class="text-sm text-white">Tricou Official Festival</p>
                <p class="text-xs text-orange-400">+€25 - Recomandat pentru tine</p>
              </div>
              <button class="px-3 py-1 rounded-lg bg-orange-600 text-white text-xs font-medium">Adaugă</button>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5">
              <span class="text-xl">🧢</span>
              <div class="flex-1">
                <p class="text-sm text-white">Șapcă Limited Edition</p>
                <p class="text-xs text-white/50">+€15</p>
              </div>
              <button class="px-3 py-1 rounded-lg bg-white/10 text-white/70 text-xs font-medium">Adaugă</button>
            </div>
          </div>

          <div class="mt-6 p-4 rounded-xl bg-violet-600/10 border border-violet-500/20">
            <p class="text-sm text-violet-300"><strong>💡 Rezultat:</strong> În medie +23% valoare per comandă cu upsell activat.</p>
          </div>
        </div>

        <!-- Free Product with Ticket -->
        <div class="p-8 rounded-3xl bg-gradient-to-br from-emerald-600/10 to-teal-600/5 border border-emerald-500/20">
          <div class="w-16 h-16 rounded-2xl bg-emerald-600/20 flex items-center justify-center mb-6">
            <span class="text-4xl">🎁</span>
          </div>
          <h3 class="text-2xl font-bold text-white mb-4">Produs Gratuit cu Biletul</h3>
          <p class="text-white/60 mb-6">Conectează produse din magazin cu tipuri specifice de bilete. Când cineva cumpără un bilet VIP, poate primi automat un tricou gratuit sau alt produs inclus.</p>

          <div class="space-y-4">
            <div class="p-4 rounded-xl bg-white/5 border border-white/10">
              <div class="flex items-center justify-between mb-3">
                <span class="text-sm font-medium text-white">Configurare Bundle</span>
                <span class="px-2 py-0.5 rounded bg-emerald-600/20 text-emerald-400 text-xs">Activ</span>
              </div>
              <div class="flex items-center gap-3">
                <div class="flex-1 p-3 rounded-lg bg-dark-800/50 text-center">
                  <span class="text-2xl block mb-1">🎫</span>
                  <p class="text-xs text-white/70">Bilet VIP</p>
                </div>
                <span class="text-white/30 text-xl">+</span>
                <div class="flex-1 p-3 rounded-lg bg-dark-800/50 text-center">
                  <span class="text-2xl block mb-1">👕</span>
                  <p class="text-xs text-white/70">Tricou</p>
                </div>
                <span class="text-white/30 text-xl">=</span>
                <div class="flex-1 p-3 rounded-lg bg-emerald-600/20 text-center border border-emerald-500/30">
                  <span class="text-2xl block mb-1">🎉</span>
                  <p class="text-xs text-emerald-400">Bundle</p>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-2 gap-3 text-center">
              <div class="p-3 rounded-lg bg-white/5">
                <p class="text-lg font-bold text-white">Gratuit</p>
                <p class="text-xs text-white/50">Produs inclus</p>
              </div>
              <div class="p-3 rounded-lg bg-white/5">
                <p class="text-lg font-bold text-white">Automat</p>
                <p class="text-xs text-white/50">Adăugat în coș</p>
              </div>
            </div>
          </div>

          <div class="mt-6 p-4 rounded-xl bg-emerald-600/10 border border-emerald-500/20">
            <p class="text-sm text-emerald-300"><strong>💡 Exemplu:</strong> Bilet Gold + Tricou Festival = Pachet complet fără cost suplimentar pentru client.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Artist Merch Section -->
  <section class="relative py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <span class="inline-block px-4 py-1.5 rounded-full bg-pink-600/10 text-pink-400 text-sm font-medium mb-4">Pentru Artiști</span>
          <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 font-display">Magazin pentru Artiști & Management</h2>
          <p class="text-white/60 mb-8">Artiștii și echipele lor de management pot vinde merchandise oficial direct prin platformă. Fiecare artist poate avea propriul magazin integrat cu profilul său.</p>

          <div class="space-y-4 mb-8">
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-lg bg-pink-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">👕</span>
              </div>
              <div>
                <h4 class="font-medium text-white mb-1">Merch Oficial Artist</h4>
                <p class="text-sm text-white/50">Vinde tricouri, hanorace, postere și alte produse cu branding-ul artistului</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-lg bg-pink-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">🎵</span>
              </div>
              <div>
                <h4 class="font-medium text-white mb-1">Conținut Digital Exclusiv</h4>
                <p class="text-sm text-white/50">Vinde muzică, videoclipuri exclusive, behind-the-scenes și alte materiale digitale</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-lg bg-pink-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">📦</span>
              </div>
              <div>
                <h4 class="font-medium text-white mb-1">Dropshipping & Fulfillment</h4>
                <p class="text-sm text-white/50">Integrează cu servicii de fulfillment pentru livrare fără stoc propriu</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-lg bg-pink-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-lg">💰</span>
              </div>
              <div>
                <h4 class="font-medium text-white mb-1">Revenue Split Automat</h4>
                <p class="text-sm text-white/50">Împarte veniturile automat între artist, management și platformă</p>
              </div>
            </div>
          </div>

          <div class="flex flex-wrap gap-3">
            <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-sm text-white/70">🎤 Rapperi</span>
            <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-sm text-white/70">🎸 Trupe Rock</span>
            <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-sm text-white/70">🎧 DJ-i</span>
            <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-sm text-white/70">🎹 Producători</span>
            <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-sm text-white/70">🎭 Comedianți</span>
          </div>
        </div>

        <!-- Artist Store Mockup -->
        <div class="relative">
          <div class="absolute inset-0 bg-gradient-to-r from-pink-600/20 to-purple-600/20 rounded-3xl blur-3xl"></div>
          <div class="relative rounded-2xl bg-dark-900 border border-white/10 overflow-hidden">
            <!-- Store Header -->
            <div class="p-6 border-b border-white/5 bg-gradient-to-r from-pink-600/10 to-purple-600/10">
              <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-pink-600 to-purple-600 flex items-center justify-center">
                  <span class="text-2xl">🎤</span>
                </div>
                <div>
                  <div class="flex items-center gap-2">
                    <h4 class="font-bold text-white text-lg">Artist Name</h4>
                    <span class="text-blue-400">✓</span>
                  </div>
                  <p class="text-sm text-white/50">Official Merchandise Store</p>
                </div>
              </div>
            </div>

            <!-- Products Grid -->
            <div class="p-6">
              <div class="grid grid-cols-2 gap-4">
                <div class="rounded-xl bg-dark-800/50 overflow-hidden group cursor-pointer">
                  <div class="aspect-square bg-gradient-to-br from-pink-600/20 to-purple-600/20 flex items-center justify-center group-hover:scale-105 transition-transform">
                    <span class="text-4xl">👕</span>
                  </div>
                  <div class="p-3">
                    <p class="text-sm text-white font-medium">Tour 2025 Tee</p>
                    <p class="text-orange-400 text-sm font-bold">€35</p>
                  </div>
                </div>
                <div class="rounded-xl bg-dark-800/50 overflow-hidden group cursor-pointer">
                  <div class="aspect-square bg-gradient-to-br from-blue-600/20 to-cyan-600/20 flex items-center justify-center group-hover:scale-105 transition-transform">
                    <span class="text-4xl">🧢</span>
                  </div>
                  <div class="p-3">
                    <p class="text-sm text-white font-medium">Logo Cap</p>
                    <p class="text-orange-400 text-sm font-bold">€25</p>
                  </div>
                </div>
                <div class="rounded-xl bg-dark-800/50 overflow-hidden group cursor-pointer">
                  <div class="aspect-square bg-gradient-to-br from-amber-600/20 to-orange-600/20 flex items-center justify-center group-hover:scale-105 transition-transform">
                    <span class="text-4xl">🎵</span>
                  </div>
                  <div class="p-3">
                    <p class="text-sm text-white font-medium">Album Digital</p>
                    <p class="text-orange-400 text-sm font-bold">€12</p>
                  </div>
                </div>
                <div class="rounded-xl bg-dark-800/50 overflow-hidden group cursor-pointer">
                  <div class="aspect-square bg-gradient-to-br from-emerald-600/20 to-teal-600/20 flex items-center justify-center group-hover:scale-105 transition-transform">
                    <span class="text-4xl">📸</span>
                  </div>
                  <div class="p-3">
                    <p class="text-sm text-white font-medium">Signed Poster</p>
                    <p class="text-orange-400 text-sm font-bold">€45</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Attributes & Shipping -->
  <section class="relative py-24 bg-dark-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid lg:grid-cols-2 gap-12">

        <!-- Product Attributes -->
        <div>
          <span class="inline-block px-4 py-1.5 rounded-full bg-cyan-600/10 text-cyan-400 text-sm font-medium mb-4">Atribute Produse</span>
          <h2 class="text-2xl sm:text-3xl font-bold text-white mb-6 font-display">Variante Nelimitate pentru Produse</h2>
          <p class="text-white/60 mb-8">Creează combinații complexe de atribute pentru orice tip de produs. Definește mărimi, culori, materiale și orice alte caracteristici specifice.</p>

          <div class="space-y-4">
            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/5">
              <div class="flex items-center justify-between mb-3">
                <span class="font-medium text-white">Mărime</span>
                <span class="text-xs text-white/50">6 opțiuni</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1.5 rounded-lg bg-white/5 text-sm text-white/70">XS</span>
                <span class="px-3 py-1.5 rounded-lg bg-white/5 text-sm text-white/70">S</span>
                <span class="px-3 py-1.5 rounded-lg bg-cyan-600/20 text-sm text-cyan-400 border border-cyan-500/30">M</span>
                <span class="px-3 py-1.5 rounded-lg bg-white/5 text-sm text-white/70">L</span>
                <span class="px-3 py-1.5 rounded-lg bg-white/5 text-sm text-white/70">XL</span>
                <span class="px-3 py-1.5 rounded-lg bg-white/5 text-sm text-white/70">XXL</span>
              </div>
            </div>

            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/5">
              <div class="flex items-center justify-between mb-3">
                <span class="font-medium text-white">Culoare</span>
                <span class="text-xs text-white/50">5 opțiuni</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <span class="w-8 h-8 rounded-full bg-black border-2 border-white/20"></span>
                <span class="w-8 h-8 rounded-full bg-white border-2 border-white/20"></span>
                <span class="w-8 h-8 rounded-full bg-red-600 border-2 border-cyan-400"></span>
                <span class="w-8 h-8 rounded-full bg-blue-600 border-2 border-white/20"></span>
                <span class="w-8 h-8 rounded-full bg-emerald-600 border-2 border-white/20"></span>
              </div>
            </div>

            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/5">
              <div class="flex items-center justify-between mb-3">
                <span class="font-medium text-white">Material</span>
                <span class="text-xs text-white/50">Atribut custom</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1.5 rounded-lg bg-white/5 text-sm text-white/70">100% Bumbac</span>
                <span class="px-3 py-1.5 rounded-lg bg-white/5 text-sm text-white/70">Poliester</span>
                <span class="px-3 py-1.5 rounded-lg bg-white/5 text-sm text-white/70">Organic</span>
              </div>
            </div>
          </div>

          <div class="mt-6 p-4 rounded-xl bg-cyan-600/10 border border-cyan-500/20">
            <p class="text-sm text-cyan-300"><strong>💡 Flexibilitate:</strong> Creează atribute personalizate pentru orice nevoie: ediții limitate, personalizări, opțiuni de cadou.</p>
          </div>
        </div>

        <!-- Shipping Methods -->
        <div>
          <span class="inline-block px-4 py-1.5 rounded-full bg-amber-600/10 text-amber-400 text-sm font-medium mb-4">Metode Livrare</span>
          <h2 class="text-2xl sm:text-3xl font-bold text-white mb-6 font-display">Multiple Opțiuni de Livrare</h2>
          <p class="text-white/60 mb-8">Configurează diferite metode de livrare pentru a acoperi toate nevoile clienților. De la livrare gratuită la opțiuni express.</p>

          <div class="space-y-4">
            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/5 flex items-center gap-4">
              <div class="w-12 h-12 rounded-xl bg-emerald-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-2xl">🆓</span>
              </div>
              <div class="flex-1">
                <h4 class="font-medium text-white">Livrare Gratuită</h4>
                <p class="text-sm text-white/50">Pentru comenzi peste €50</p>
              </div>
              <span class="text-emerald-400 font-bold">€0</span>
            </div>

            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/5 flex items-center gap-4">
              <div class="w-12 h-12 rounded-xl bg-blue-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-2xl">📦</span>
              </div>
              <div class="flex-1">
                <h4 class="font-medium text-white">Curier Standard</h4>
                <p class="text-sm text-white/50">3-5 zile lucrătoare</p>
              </div>
              <span class="text-white font-bold">€15</span>
            </div>

            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/5 flex items-center gap-4">
              <div class="w-12 h-12 rounded-xl bg-orange-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-2xl">⚡</span>
              </div>
              <div class="flex-1">
                <h4 class="font-medium text-white">Livrare Express</h4>
                <p class="text-sm text-white/50">1-2 zile lucrătoare</p>
              </div>
              <span class="text-white font-bold">€25</span>
            </div>

            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/5 flex items-center gap-4">
              <div class="w-12 h-12 rounded-xl bg-purple-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-2xl">📍</span>
              </div>
              <div class="flex-1">
                <h4 class="font-medium text-white">Ridicare la Eveniment</h4>
                <p class="text-sm text-white/50">Ridică comanda la intrare</p>
              </div>
              <span class="text-emerald-400 font-bold">€0</span>
            </div>

            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/5 flex items-center gap-4">
              <div class="w-12 h-12 rounded-xl bg-slate-600/20 flex items-center justify-center flex-shrink-0">
                <span class="text-2xl">⚖️</span>
              </div>
              <div class="flex-1">
                <h4 class="font-medium text-white">Bazat pe Greutate</h4>
                <p class="text-sm text-white/50">Calculat automat</p>
              </div>
              <span class="text-white/50 font-bold">Variabil</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tracking & Analytics Integration -->
  <section class="relative py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-blue-600/10 text-blue-400 text-sm font-medium mb-4">Tracking & Analytics</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Integrare cu Tracking & Analytics</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Urmărește fiecare vânzare din magazin în platformele tale de advertising pentru optimizare maximă.</p>
      </div>

      <div class="grid lg:grid-cols-2 gap-8 items-center">

        <!-- Platforms -->
        <div class="grid grid-cols-2 gap-4">
          <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5 text-center group hover:border-blue-500/30 transition-colors">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-blue-600/20 to-blue-400/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
              <span class="text-3xl">📊</span>
            </div>
            <h4 class="font-semibold text-white mb-1">Google Analytics</h4>
            <p class="text-xs text-white/50">GA4 E-commerce Events</p>
          </div>

          <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5 text-center group hover:border-yellow-500/30 transition-colors">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-yellow-600/20 to-yellow-400/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
              <span class="text-3xl">🏷️</span>
            </div>
            <h4 class="font-semibold text-white mb-1">Google Tag Manager</h4>
            <p class="text-xs text-white/50">DataLayer Events</p>
          </div>

          <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5 text-center group hover:border-blue-500/30 transition-colors">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-blue-700/20 to-blue-500/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
              <span class="text-3xl">📘</span>
            </div>
            <h4 class="font-semibold text-white mb-1">Meta Pixel</h4>
            <p class="text-xs text-white/50">Facebook & Instagram Ads</p>
          </div>

          <div class="p-6 rounded-2xl bg-dark-900/50 border border-white/5 text-center group hover:border-pink-500/30 transition-colors">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-pink-600/20 to-pink-400/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
              <span class="text-3xl">🎵</span>
            </div>
            <h4 class="font-semibold text-white mb-1">TikTok Pixel</h4>
            <p class="text-xs text-white/50">TikTok Ads Tracking</p>
          </div>
        </div>

        <!-- Events Tracked -->
        <div class="p-8 rounded-2xl bg-dark-900/50 border border-white/5">
          <h4 class="font-semibold text-white mb-6">Evenimente urmărite automat:</h4>

          <div class="flex flex-wrap items-center gap-2 mb-6">
            <span class="px-3 py-2 rounded-lg bg-blue-600/10 text-blue-400 text-sm font-mono">view_item</span>
            <span class="text-white/30">→</span>
            <span class="px-3 py-2 rounded-lg bg-orange-600/10 text-orange-400 text-sm font-mono">add_to_cart</span>
            <span class="text-white/30">→</span>
            <span class="px-3 py-2 rounded-lg bg-red-600/10 text-red-400 text-sm font-mono">remove_from_cart</span>
          </div>

          <div class="flex flex-wrap items-center gap-2">
            <span class="px-3 py-2 rounded-lg bg-purple-600/10 text-purple-400 text-sm font-mono">begin_checkout</span>
            <span class="text-white/30">→</span>
            <span class="px-3 py-2 rounded-lg bg-cyan-600/10 text-cyan-400 text-sm font-mono">add_payment_info</span>
            <span class="text-white/30">→</span>
            <span class="px-3 py-2 rounded-lg bg-emerald-600/10 text-emerald-400 text-sm font-mono">purchase</span>
          </div>

          <div class="mt-6 p-4 rounded-xl bg-blue-600/10 border border-blue-500/20">
            <p class="text-sm text-blue-300"><strong>🔗 Conectat cu:</strong> Microserviciul Tracking & Analytics (€19/lună)</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Configuration Table -->
  <section class="relative py-24 bg-dark-900/30">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-orange-600/10 text-orange-400 text-sm font-medium mb-4">Configurare</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Opțiuni de Configurare</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Personalizează magazinul să funcționeze exact cum ai nevoie.</p>
      </div>

      <div class="rounded-2xl bg-dark-900/50 border border-white/5 overflow-hidden">
        <table class="w-full">
          <thead>
            <tr class="border-b border-white/5">
              <th class="px-6 py-4 text-left text-sm font-semibold text-white">Setare</th>
              <th class="px-6 py-4 text-left text-sm font-semibold text-white hidden sm:table-cell">Descriere</th>
              <th class="px-6 py-4 text-right text-sm font-semibold text-white">Implicit</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-white/5">
            <tr class="hover:bg-white/[0.02]">
              <td class="px-6 py-4 text-sm text-white font-medium">Monedă</td>
              <td class="px-6 py-4 text-sm text-white/50 hidden sm:table-cell">Moneda principală pentru prețuri</td>
              <td class="px-6 py-4 text-sm text-orange-400 text-right">RON</td>
            </tr>
            <tr class="hover:bg-white/[0.02]">
              <td class="px-6 py-4 text-sm text-white font-medium">TVA Inclus</td>
              <td class="px-6 py-4 text-sm text-white/50 hidden sm:table-cell">Prețurile includ TVA</td>
              <td class="px-6 py-4 text-sm text-orange-400 text-right">Da</td>
            </tr>
            <tr class="hover:bg-white/[0.02]">
              <td class="px-6 py-4 text-sm text-white font-medium">Prefix Comandă</td>
              <td class="px-6 py-4 text-sm text-white/50 hidden sm:table-cell">Prefix pentru numere comenzi</td>
              <td class="px-6 py-4 text-sm text-orange-400 text-right font-mono">SH</td>
            </tr>
            <tr class="hover:bg-white/[0.02]">
              <td class="px-6 py-4 text-sm text-white font-medium">Prag Stoc Redus</td>
              <td class="px-6 py-4 text-sm text-white/50 hidden sm:table-cell">Alertă când stocul scade sub</td>
              <td class="px-6 py-4 text-sm text-orange-400 text-right">5</td>
            </tr>
            <tr class="hover:bg-white/[0.02]">
              <td class="px-6 py-4 text-sm text-white font-medium">Rezervare Stoc</td>
              <td class="px-6 py-4 text-sm text-white/50 hidden sm:table-cell">Timp rezervare la checkout</td>
              <td class="px-6 py-4 text-sm text-orange-400 text-right">15 min</td>
            </tr>
            <tr class="hover:bg-white/[0.02]">
              <td class="px-6 py-4 text-sm text-white font-medium">Recenzii</td>
              <td class="px-6 py-4 text-sm text-white/50 hidden sm:table-cell">Permite recenzii produse</td>
              <td class="px-6 py-4 text-sm text-white/40 text-right">Nu</td>
            </tr>
            <tr class="hover:bg-white/[0.02]">
              <td class="px-6 py-4 text-sm text-white font-medium">Wishlist</td>
              <td class="px-6 py-4 text-sm text-white/50 hidden sm:table-cell">Permite funcția wishlist</td>
              <td class="px-6 py-4 text-sm text-white/40 text-right">Nu</td>
            </tr>
            <tr class="hover:bg-white/[0.02]">
              <td class="px-6 py-4 text-sm text-white font-medium">Mod Checkout</td>
              <td class="px-6 py-4 text-sm text-white/50 hidden sm:table-cell">Combinat cu bilete sau separat</td>
              <td class="px-6 py-4 text-sm text-orange-400 text-right">Combinat</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Use Cases -->
  <section class="relative py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Cazuri de Utilizare</h2>
        <p class="text-white/50">Perfect pentru orice tip de organizator.</p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="p-6 rounded-xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30 transition-colors">
          <span class="text-4xl mb-4 block">🎪</span>
          <h3 class="font-semibold text-white mb-2">Festivaluri</h3>
          <p class="text-sm text-white/50">Tricouri, hanorace, accesorii. Vinde înainte, în timpul și după festival cu ridicare la intrare.</p>
        </div>

        <div class="p-6 rounded-xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30 transition-colors">
          <span class="text-4xl mb-4 block">🎤</span>
          <h3 class="font-semibold text-white mb-2">Concerte & Tururi</h3>
          <p class="text-sm text-white/50">Merch de turneu, ediții limitate per oraș, vinyls și conținut digital exclusiv.</p>
        </div>

        <div class="p-6 rounded-xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30 transition-colors">
          <span class="text-4xl mb-4 block">🎭</span>
          <h3 class="font-semibold text-white mb-2">Teatre & Cinematografe</h3>
          <p class="text-sm text-white/50">Programe, afișe, carduri cadou pentru spectacole și abonamente.</p>
        </div>

        <div class="p-6 rounded-xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30 transition-colors">
          <span class="text-4xl mb-4 block">🎓</span>
          <h3 class="font-semibold text-white mb-2">Conferințe</h3>
          <p class="text-sm text-white/50">Materiale pentru participanți, cărți, recording-uri video și pachete sponsor.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Getting Started -->
  <section class="relative py-24 bg-dark-900/30">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-16">
        <span class="inline-block px-4 py-1.5 rounded-full bg-orange-600/10 text-orange-400 text-sm font-medium mb-4">Ghid Rapid</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4 font-display">Cum Să Începi</h2>
        <p class="text-white/50 max-w-2xl mx-auto">Urmează acești pași simpli pentru a-ți lansa magazinul.</p>
      </div>

      <div class="space-y-4">
        <div class="flex gap-4 p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30 transition-colors">
          <div class="w-10 h-10 rounded-full bg-orange-600 flex items-center justify-center flex-shrink-0 font-bold text-white">1</div>
          <div>
            <h4 class="font-semibold text-white mb-1">Activează Microserviciul</h4>
            <p class="text-sm text-white/50">Activează Magazinul în setările tenant-ului din panoul de control.</p>
          </div>
        </div>

        <div class="flex gap-4 p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30 transition-colors">
          <div class="w-10 h-10 rounded-full bg-orange-600 flex items-center justify-center flex-shrink-0 font-bold text-white">2</div>
          <div>
            <h4 class="font-semibold text-white mb-1">Configurează Setările</h4>
            <p class="text-sm text-white/50">Configurează numele magazinului, moneda și setările de taxare.</p>
          </div>
        </div>

        <div class="flex gap-4 p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30 transition-colors">
          <div class="w-10 h-10 rounded-full bg-orange-600 flex items-center justify-center flex-shrink-0 font-bold text-white">3</div>
          <div>
            <h4 class="font-semibold text-white mb-1">Adaugă Produse</h4>
            <p class="text-sm text-white/50">Creează primele produse cu imagini, descrieri, variante și prețuri.</p>
          </div>
        </div>

        <div class="flex gap-4 p-6 rounded-2xl bg-dark-900/50 border border-white/5 hover:border-orange-500/30 transition-colors">
          <div class="w-10 h-10 rounded-full bg-orange-600 flex items-center justify-center flex-shrink-0 font-bold text-white">4</div>
          <div>
            <h4 class="font-semibold text-white mb-1">Configurează Livrarea</h4>
            <p class="text-sm text-white/50">Definește zonele și metodele de livrare pentru produsele fizice.</p>
          </div>
        </div>

        <div class="flex gap-4 p-6 rounded-2xl bg-gradient-to-r from-orange-600/20 to-amber-600/10 border border-orange-500/30">
          <div class="w-10 h-10 rounded-full bg-gradient-to-br from-orange-500 to-amber-500 flex items-center justify-center flex-shrink-0 font-bold text-dark-900">5</div>
          <div>
            <h4 class="font-semibold text-white mb-1">Testează & Lansează!</h4>
            <p class="text-sm text-white/50">Plasează o comandă de test pentru a verifica fluxul, apoi lansează magazinul! 🚀</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="relative py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-orange-950/20 to-transparent"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-orange-600/20 rounded-full blur-3xl"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6 font-display">
        Gata Să-ți Crești Veniturile?
      </h2>
      <p class="text-lg text-white/60 mb-10 max-w-2xl mx-auto">
        Activează microserviciul Magazin și începe să vinzi merchandise, produse digitale și carduri cadou astăzi.
      </p>
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="https://core.tixello.com/register" class="group px-8 py-4 rounded-xl bg-orange-600 text-white font-semibold hover:bg-orange-500 hover:shadow-lg hover:shadow-orange-600/30 transition-all flex items-center gap-2">
          Activează pentru €29/lună
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="/contact" class="px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-semibold hover:bg-white/10 transition-all">
          Întrebări? Contactează-ne
        </a>
      </div>
    </div>
  </section>

</main>

<script>
  function shopWindow() {
    return {
      cartItems: [],
      total: 150,
      cartShake: false,
      priceUpdated: false,
      products: {
        tshirt: { emoji: '👕', price: 29, id: 'tshirt' },
        hoodie: { emoji: '🧥', price: 59, id: 'hoodie' },
        cap: { emoji: '🧢', price: 19, id: 'cap' },
        poster: { emoji: '🖼️', price: 15, id: 'poster' },
        vinyl: { emoji: '💿', price: 35, id: 'vinyl' },
        digital: { emoji: '🎵', price: 9, id: 'digital' }
      },
      addToCart(productId) {
        const product = this.products[productId];
        if (this.cartItems.length < 6) {
          this.cartItems.push({ ...product, id: Date.now() });
          this.total += product.price;
          this.cartShake = true;
          this.priceUpdated = true;
          setTimeout(() => { this.cartShake = false; this.priceUpdated = false; }, 500);
        }
      }
    }
  }

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