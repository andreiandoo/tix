<?php
/**
 * Template Name: Micro - Asigurare Bilete
 * Description: Landing page for Ticket Insurance add-on feature
 */

get_header();
?>

<style>
/* Text gradients */
.text-gradient {
  background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%);
  background-size: 200% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.text-gradient-insurance {
  background: linear-gradient(135deg, #10b981 0%, #14b8a6 50%, #6ee7b7 100%);
  background-size: 200% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: shimmer 4s linear infinite;
}

/* Reveal animations */
.reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}
.reveal.revealed { opacity: 1; transform: translateY(0); }
.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.3s; }
.reveal-delay-4 { transition-delay: 0.4s; }
.reveal-delay-5 { transition-delay: 0.5s; }

/* Feature card glow */
.feature-card::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(16, 185, 129, 0.15), transparent 50%);
  opacity: 0;
  transition: opacity 0.5s;
  border-radius: inherit;
}
.feature-card:hover::before { opacity: 1; }

/* Shield icon styles */
.shield-icon { filter: drop-shadow(0 0 20px rgba(16, 185, 129, 0.5)); }
.shield-bg { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }

/* Protect ring animation */
.protect-ring {
  position: absolute;
  inset: -10px;
  border: 2px dashed rgba(16, 185, 129, 0.3);
  border-radius: 50%;
  animation: protectRing 20s linear infinite;
}

/* Checkbox custom style */
.insurance-checkbox {
  appearance: none;
  width: 24px;
  height: 24px;
  border: 2px solid rgba(16, 185, 129, 0.5);
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.3s;
  position: relative;
}
.insurance-checkbox:checked {
  background: linear-gradient(135deg, #10b981, #059669);
  border-color: #10b981;
}
.insurance-checkbox:checked::after {
  content: '✓';
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: bold;
  font-size: 14px;
}

/* Premium display */
.premium-display { font-variant-numeric: tabular-nums; }

/* Policy status badges */
.status-pending { background: rgba(251, 191, 36, 0.2); color: #fbbf24; }
.status-issued { background: rgba(16, 185, 129, 0.2); color: #10b981; }
.status-voided { background: rgba(107, 114, 128, 0.2); color: #6b7280; }
.status-refunded { background: rgba(59, 130, 246, 0.2); color: #3b82f6; }

/* Config hierarchy lines */
.hierarchy-line { position: relative; }
.hierarchy-line::before {
  content: '';
  position: absolute;
  left: 24px;
  top: 100%;
  width: 2px;
  height: 20px;
  background: linear-gradient(to bottom, #10b981, transparent);
}

/* Custom keyframes */
@keyframes shimmer {
  0% { background-position: 0% center; }
  100% { background-position: 200% center; }
}
@keyframes protectRing {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
@keyframes shieldPulse {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.05); opacity: 0.9; }
}
</style>

<!-- ==================== HERO ==================== -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
  <!-- Background Effects -->
  <div class="absolute w-[800px] h-[800px] bg-insurance-emerald/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[600px] h-[600px] bg-insurance-teal/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

  <!-- Floating particles -->
  <div class="absolute top-32 left-20 text-3xl opacity-20 animate-float">🛡️</div>
  <div class="absolute bottom-40 right-32 text-2xl opacity-20 animate-float" style="animation-delay: 1s;">✓</div>
  <div class="absolute top-1/2 right-20 text-xl opacity-10 animate-float" style="animation-delay: 2s;">🔒</div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Hero Content -->
      <div class="reveal">
        <!-- Badge -->
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-insurance-emerald/10 border border-insurance-emerald/20 mb-6">
          <svg class="w-5 h-5 text-insurance-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          <span class="text-insurance-emerald text-sm font-medium">Add-on Optional · Venituri din Comisioane</span>
        </div>

        <!-- Heading -->
        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
          Asigurare<br><span class="text-gradient-insurance">bilete</span>
        </h1>

        <!-- Description -->
        <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
          Ofera clientilor <strong class="text-white">liniste sufleteasca</strong>. Add-on optional la checkout pentru protectie impotriva circumstantelor neprevazute. <strong class="text-white">Zero cost</strong> pentru tine - venituri din comisioane.
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-insurance-emerald to-insurance-teal text-white hover:scale-105 hover:shadow-glow-emerald transition-all duration-300">
            Activeaza Asigurarea
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#cum-functioneaza" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
            Cum functioneaza
          </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-6">
          <div>
            <div class="text-3xl font-display font-bold text-insurance-emerald">0€</div>
            <div class="text-white/40 text-sm">Cost activare</div>
          </div>
          <div>
            <div class="text-3xl font-display font-bold text-white">+15%</div>
            <div class="text-white/40 text-sm">Venituri extra</div>
          </div>
          <div>
            <div class="text-3xl font-display font-bold text-insurance-teal">Auto</div>
            <div class="text-white/40 text-sm">Emitere polite</div>
          </div>
        </div>
      </div>

      <!-- Hero Visual - Checkout Mockup with Insurance -->
      <div class="reveal reveal-delay-1">
        <div class="relative" x-data="{
          insuranceEnabled: true,
          ticketPrice: 75,
          quantity: 2,
          insuranceRate: 5,
          get subtotal() { return this.ticketPrice * this.quantity },
          get premium() { return this.insuranceEnabled ? (this.subtotal * this.insuranceRate / 100).toFixed(2) : 0 },
          get total() { return (this.subtotal + parseFloat(this.premium)).toFixed(2) }
        }">
          <!-- Checkout Card -->
          <div class="bg-dark-800/80 backdrop-blur-xl rounded-3xl p-6 border border-white/10 shadow-2xl">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center">
                  <span class="text-lg">🎫</span>
                </div>
                <div>
                  <div class="text-white font-semibold">Checkout</div>
                  <div class="text-white/40 text-xs">Summer Music Festival</div>
                </div>
              </div>
              <div class="px-3 py-1 rounded-full bg-brand-green/20 text-brand-green text-xs font-medium">
                Securizat
              </div>
            </div>

            <!-- Order Summary -->
            <div class="bg-dark-900/50 rounded-xl p-4 mb-4">
              <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-3">
                  <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center">
                    <span class="text-xl">🎤</span>
                  </div>
                  <div>
                    <div class="text-white font-medium">VIP Pass</div>
                    <div class="text-white/40 text-sm">€<span x-text="ticketPrice">75</span> × <span x-text="quantity">2</span></div>
                  </div>
                </div>
                <div class="text-white font-semibold">€<span x-text="subtotal">150</span></div>
              </div>
            </div>

            <!-- Insurance Add-on -->
            <div class="rounded-xl p-4 mb-4 transition-all duration-300" :class="insuranceEnabled ? 'bg-insurance-emerald/10 border-2 border-insurance-emerald/30' : 'bg-dark-900/50 border-2 border-transparent'">
              <label class="flex items-start gap-4 cursor-pointer">
                <input type="checkbox" x-model="insuranceEnabled" class="insurance-checkbox mt-1">
                <div class="flex-1">
                  <div class="flex items-center gap-2 mb-1">
                    <svg class="w-5 h-5 text-insurance-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    <span class="text-white font-medium">Asigurare Bilete</span>
                    <span class="px-2 py-0.5 rounded-full bg-insurance-emerald/20 text-insurance-emerald text-xs">Recomandat</span>
                  </div>
                  <p class="text-white/50 text-sm mb-2">Protejeaza-ti achizitia impotriva circumstantelor neprevazute: boala, urgente familiale, probleme de calatorie.</p>
                  <div class="flex items-center justify-between">
                    <span class="text-white/40 text-sm"><span x-text="insuranceRate">5</span>% din valoarea biletelor</span>
                    <span class="text-insurance-emerald font-semibold premium-display" x-show="insuranceEnabled" x-transition>+€<span x-text="premium">7.50</span></span>
                  </div>
                </div>
              </label>
            </div>

            <!-- Divider -->
            <div class="border-t border-white/10 my-4"></div>

            <!-- Total -->
            <div class="flex items-center justify-between mb-4">
              <span class="text-white/60">Total</span>
              <span class="text-2xl font-display font-bold text-white premium-display">€<span x-text="total">157.50</span></span>
            </div>

            <!-- Pay Button -->
            <button class="w-full py-4 rounded-xl font-semibold text-white transition-all duration-300" :class="insuranceEnabled ? 'bg-gradient-to-r from-insurance-emerald to-insurance-teal hover:shadow-glow-emerald' : 'bg-gradient-to-r from-brand-violet to-brand-cyan hover:shadow-lg'">
              <span class="flex items-center justify-center gap-2">
                <svg x-show="insuranceEnabled" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                Plateste Securizat
              </span>
            </button>

            <!-- Trust badges -->
            <div class="flex items-center justify-center gap-4 mt-4">
              <div class="flex items-center gap-1 text-white/30 text-xs">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                SSL
              </div>
              <div class="flex items-center gap-1 text-white/30 text-xs">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                Asigurat
              </div>
              <div class="flex items-center gap-1 text-white/30 text-xs">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                PCI DSS
              </div>
            </div>
          </div>

          <!-- Floating Shield Badge -->
          <div class="absolute -top-4 -right-4 w-16 h-16 rounded-2xl shield-bg flex items-center justify-center shadow-shield animate-float z-10" style="animation: shieldPulse 3s ease-in-out infinite;">
            <svg class="w-8 h-8 text-white shield-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>

          <!-- Floating Policy Badge -->
          <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-insurance-emerald/30 shadow-xl animate-float [animation-delay:1s] z-10">
            <div class="flex items-center gap-2">
              <div class="w-8 h-8 rounded-lg bg-insurance-emerald/20 flex items-center justify-center">
                <span class="text-sm">📄</span>
              </div>
              <div>
                <div class="text-insurance-emerald text-sm font-medium">Polita emisa</div>
                <div class="text-white/40 text-xs">POL-2025-001234</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== HOW IT WORKS ==================== -->
<section class="py-24 relative overflow-hidden" id="cum-functioneaza">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-insurance-emerald text-sm font-medium uppercase tracking-widest">Cum Functioneaza</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Simplu pentru<br><span class="text-gradient-insurance">toata lumea</span></h2>
      <p class="text-lg text-white/60">Add-on optional la checkout → Plata → Polita emisa automat</p>
    </div>

    <!-- 3-Step Flow -->
    <div class="relative">
      <!-- Connection Line -->
      <div class="absolute top-16 left-0 right-0 h-1 bg-gradient-to-r from-insurance-emerald via-insurance-teal to-insurance-mint rounded-full hidden lg:block"></div>

      <div class="grid md:grid-cols-3 gap-8 relative">
        <!-- Step 1: Checkout -->
        <div class="reveal">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 h-full text-center">
            <div class="w-16 h-16 rounded-2xl bg-insurance-emerald/20 flex items-center justify-center mx-auto mb-4 relative z-10">
              <span class="text-3xl">🛒</span>
            </div>
            <div class="px-3 py-1 rounded-full bg-insurance-emerald/20 text-insurance-emerald text-xs font-medium inline-block mb-4">Pasul 1</div>
            <h3 class="text-xl font-semibold text-white mb-3">Checkout</h3>
            <p class="text-white/50 text-sm">Clientul vede optiunea de asigurare in checkout. Un checkbox simplu cu explicatii clare despre ce acopera.</p>
          </div>
        </div>

        <!-- Step 2: Payment -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 h-full text-center">
            <div class="w-16 h-16 rounded-2xl bg-insurance-teal/20 flex items-center justify-center mx-auto mb-4 relative z-10">
              <span class="text-3xl">💳</span>
            </div>
            <div class="px-3 py-1 rounded-full bg-insurance-teal/20 text-insurance-teal text-xs font-medium inline-block mb-4">Pasul 2</div>
            <h3 class="text-xl font-semibold text-white mb-3">Plata</h3>
            <p class="text-white/50 text-sm">Prima de asigurare se adauga la total. Plata se proceseaza normal, cu asigurarea inclusa.</p>
          </div>
        </div>

        <!-- Step 3: Policy Issued -->
        <div class="reveal reveal-delay-2">
          <div class="bg-dark-800 rounded-2xl p-6 border border-insurance-emerald/30 h-full text-center">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-insurance-emerald to-insurance-teal flex items-center justify-center mx-auto mb-4 relative z-10 shadow-shield">
              <span class="text-3xl">📄</span>
            </div>
            <div class="px-3 py-1 rounded-full bg-insurance-emerald text-white text-xs font-medium inline-block mb-4">Pasul 3</div>
            <h3 class="text-xl font-semibold text-white mb-3">Polita Emisa</h3>
            <p class="text-white/50 text-sm">Polita se emite automat si se ataseaza la bilet. Documentul e disponibil instant pentru client.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== PRICING MODELS ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Content -->
      <div class="reveal">
        <span class="text-insurance-teal text-sm font-medium uppercase tracking-widest">Modele de Pret</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Flexibilitate<br><span class="text-gradient-insurance">totala</span></h2>
        <p class="text-lg text-white/60 mb-8">Alege modelul de pret care se potriveste evenimentelor tale. Suma fixa, procent, sau pe niveluri.</p>

        <div class="space-y-4">
          <!-- Fixed Amount -->
          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center flex-shrink-0">
              <span class="text-brand-amber font-bold">€</span>
            </div>
            <div class="flex-1">
              <div class="text-white font-medium">Suma Fixa</div>
              <div class="text-white/50 text-sm">Ex: €2 per bilet, indiferent de pret</div>
            </div>
            <code class="px-2 py-1 rounded bg-dark-900 text-brand-amber text-xs">fixed: 2.00</code>
          </div>

          <!-- Percentage -->
          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-insurance-emerald/30">
            <div class="w-12 h-12 rounded-xl bg-insurance-emerald/20 flex items-center justify-center flex-shrink-0">
              <span class="text-insurance-emerald font-bold">%</span>
            </div>
            <div class="flex-1">
              <div class="flex items-center gap-2">
                <div class="text-white font-medium">Procentual</div>
                <span class="px-2 py-0.5 rounded-full bg-insurance-emerald/20 text-insurance-emerald text-xs">Popular</span>
              </div>
              <div class="text-white/50 text-sm">Ex: 5% din valoarea biletului</div>
            </div>
            <code class="px-2 py-1 rounded bg-dark-900 text-insurance-emerald text-xs">rate: 5%</code>
          </div>

          <!-- Min/Max Caps -->
          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"/></svg>
            </div>
            <div class="flex-1">
              <div class="text-white font-medium">Plafoane Min/Max</div>
              <div class="text-white/50 text-sm">Ex: minim €1, maxim €50</div>
            </div>
            <code class="px-2 py-1 rounded bg-dark-900 text-brand-violet text-xs">1-50€</code>
          </div>
        </div>
      </div>

      <!-- Premium Calculator -->
      <div class="reveal reveal-delay-1" x-data="{
        ticketPrice: 100,
        rate: 5,
        minPremium: 1,
        maxPremium: 50,
        get premium() {
          let calc = this.ticketPrice * this.rate / 100;
          return Math.max(this.minPremium, Math.min(this.maxPremium, calc)).toFixed(2);
        }
      }">
        <div class="bg-dark-800 rounded-3xl p-6 border border-insurance-emerald/20">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 rounded-xl bg-insurance-emerald/20 flex items-center justify-center">
              <svg class="w-5 h-5 text-insurance-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
            </div>
            <div>
              <div class="text-white font-semibold">Calculator Prima</div>
              <div class="text-white/40 text-xs">Testeaza diferite scenarii</div>
            </div>
          </div>

          <!-- Ticket Price Slider -->
          <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
              <label class="text-white/60 text-sm">Pret bilet</label>
              <span class="text-white font-semibold">€<span x-text="ticketPrice">100</span></span>
            </div>
            <input type="range" x-model="ticketPrice" min="10" max="500" step="10" class="w-full h-2 rounded-full bg-dark-900 appearance-none cursor-pointer [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-insurance-emerald [&::-webkit-slider-thumb]:cursor-pointer">
          </div>

          <!-- Rate Slider -->
          <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
              <label class="text-white/60 text-sm">Rata asigurare</label>
              <span class="text-insurance-emerald font-semibold"><span x-text="rate">5</span>%</span>
            </div>
            <input type="range" x-model="rate" min="1" max="15" step="0.5" class="w-full h-2 rounded-full bg-dark-900 appearance-none cursor-pointer [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-insurance-teal [&::-webkit-slider-thumb]:cursor-pointer">
          </div>

          <!-- Result -->
          <div class="p-4 rounded-xl bg-insurance-emerald/10 border border-insurance-emerald/20 text-center">
            <div class="text-white/60 text-sm mb-1">Prima asigurare</div>
            <div class="text-4xl font-display font-bold text-insurance-emerald premium-display">€<span x-text="premium">5.00</span></div>
            <div class="text-white/40 text-xs mt-1">per bilet</div>
          </div>

          <!-- Caps info -->
          <div class="mt-4 flex items-center justify-center gap-4 text-xs text-white/40">
            <span>Min: €<span x-text="minPremium">1</span></span>
            <span>•</span>
            <span>Max: €<span x-text="maxPremium">50</span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== HIERARCHICAL CONFIG ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-violet text-sm font-medium uppercase tracking-widest">Configurare</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Control<br><span class="text-gradient animate-shimmer">ierarhic</span></h2>
      <p class="text-lg text-white/60">Setari implicite la nivel de tenant, personalizate per eveniment sau tip bilet.</p>
    </div>

    <!-- Hierarchy Visualization -->
    <div class="max-w-2xl mx-auto reveal">
      <div class="space-y-4">
        <!-- Tenant Level -->
        <div class="hierarchy-line">
          <div class="bg-dark-800 rounded-xl p-4 border border-brand-violet/30">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="text-white font-semibold">Nivel Tenant</span>
                  <span class="px-2 py-0.5 rounded-full bg-brand-violet/20 text-brand-violet text-xs">Default</span>
                </div>
                <div class="text-white/50 text-sm">Setari implicite pentru toate evenimentele</div>
              </div>
              <div class="text-right">
                <div class="text-brand-violet font-mono text-sm">5%</div>
                <div class="text-white/40 text-xs">rata globala</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Event Level -->
        <div class="ml-8 hierarchy-line">
          <div class="bg-dark-800 rounded-xl p-4 border border-insurance-teal/30">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 rounded-xl bg-insurance-teal/20 flex items-center justify-center">
                <svg class="w-6 h-6 text-insurance-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="text-white font-semibold">Nivel Eveniment</span>
                  <span class="px-2 py-0.5 rounded-full bg-insurance-teal/20 text-insurance-teal text-xs">Override</span>
                </div>
                <div class="text-white/50 text-sm">Suprascrie pentru evenimente specifice</div>
              </div>
              <div class="text-right">
                <div class="text-insurance-teal font-mono text-sm">7%</div>
                <div class="text-white/40 text-xs">Summer Fest</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Ticket Type Level -->
        <div class="ml-16">
          <div class="bg-dark-800 rounded-xl p-4 border border-insurance-emerald/30">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 rounded-xl bg-insurance-emerald/20 flex items-center justify-center">
                <svg class="w-6 h-6 text-insurance-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="text-white font-semibold">Nivel Tip Bilet</span>
                  <span class="px-2 py-0.5 rounded-full bg-insurance-emerald/20 text-insurance-emerald text-xs">Specific</span>
                </div>
                <div class="text-white/50 text-sm">Control fin per categorie de bilet</div>
              </div>
              <div class="text-right">
                <div class="text-insurance-emerald font-mono text-sm">€3 fix</div>
                <div class="text-white/40 text-xs">VIP Pass</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Resolution arrow -->
      <div class="mt-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-insurance-emerald/10 border border-insurance-emerald/20">
          <svg class="w-5 h-5 text-insurance-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <span class="text-insurance-emerald text-sm">Se aplica cea mai specifica configurare</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== POLICY LIFECYCLE ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest">Ciclul de Viata</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Status<br><span class="text-gradient animate-shimmer">polita</span></h2>
      <p class="text-lg text-white/60">Urmarire completa de la cotatie la revendicare.</p>
    </div>

    <!-- Status Flow -->
    <div class="max-w-4xl mx-auto reveal">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Pending -->
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-brand-amber/20 flex items-center justify-center mx-auto mb-3 border-2 border-brand-amber/30">
            <svg class="w-8 h-8 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div class="px-3 py-1 rounded-full status-pending text-xs font-medium inline-block mb-2">pending</div>
          <p class="text-white/40 text-xs">Asteptare plata</p>
        </div>

        <!-- Arrow -->
        <div class="hidden md:flex items-center justify-center">
          <svg class="w-8 h-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </div>

        <!-- Issued -->
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-insurance-emerald/20 flex items-center justify-center mx-auto mb-3 border-2 border-insurance-emerald/30 shadow-shield">
            <svg class="w-8 h-8 text-insurance-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <div class="px-3 py-1 rounded-full status-issued text-xs font-medium inline-block mb-2">issued</div>
          <p class="text-white/40 text-xs">Polita activa</p>
        </div>

        <!-- Arrow -->
        <div class="hidden md:flex items-center justify-center">
          <svg class="w-8 h-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </div>
      </div>

      <!-- Outcomes -->
      <div class="grid grid-cols-3 gap-4 mt-8">
        <!-- Voided -->
        <div class="text-center p-4 rounded-xl bg-dark-800 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center mx-auto mb-2">
            <svg class="w-6 h-6 text-white/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
          </div>
          <div class="px-2 py-0.5 rounded-full status-voided text-xs font-medium inline-block mb-1">voided</div>
          <p class="text-white/30 text-xs">Comanda anulata</p>
        </div>

        <!-- Refunded -->
        <div class="text-center p-4 rounded-xl bg-dark-800 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center mx-auto mb-2">
            <svg class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/></svg>
          </div>
          <div class="px-2 py-0.5 rounded-full status-refunded text-xs font-medium inline-block mb-1">refunded</div>
          <p class="text-white/30 text-xs">Returnare procesata</p>
        </div>

        <!-- Claimed -->
        <div class="text-center p-4 rounded-xl bg-dark-800 border border-brand-amber/20">
          <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center mx-auto mb-2">
            <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <div class="px-2 py-0.5 rounded-full bg-brand-amber/20 text-brand-amber text-xs font-medium inline-block mb-1">claimed</div>
          <p class="text-white/30 text-xs">Revendicare facuta</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== USE CASES ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-insurance-emerald text-sm font-medium uppercase tracking-widest">Cazuri de Utilizare</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Perfect pentru<br><span class="text-gradient-insurance">orice eveniment</span></h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Concerts & Festivals -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-insurance-emerald/30 transition-all duration-500 reveal">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center mb-4">
          <span class="text-2xl">🎵</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Concerte & Festivaluri</h3>
        <p class="text-white/50 text-sm">Fanilor le ofera increderea sa cumpere bilete cu luni inainte, stiind ca sunt protejati.</p>
      </div>

      <!-- Corporate -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-insurance-teal/30 transition-all duration-500 reveal reveal-delay-1">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-cyan-500/20 flex items-center justify-center mb-4">
          <span class="text-2xl">🏢</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Evenimente Corporate</h3>
        <p class="text-white/50 text-sm">Clientii B2B apreciaza flexibilitatea pentru biletele angajatilor, mai ales la evenimente nerambursabile.</p>
      </div>

      <!-- VIP Packages -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-amber/30 transition-all duration-500 reveal reveal-delay-2">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500/20 to-orange-500/20 flex items-center justify-center mb-4">
          <span class="text-2xl">👑</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Pachete VIP</h3>
        <p class="text-white/50 text-sm">Biletele premium cu cost semnificativ beneficiaza cel mai mult. Clientii sunt mai dispusi sa investeasca cand sunt protejati.</p>
      </div>

      <!-- International -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-cyan/30 transition-all duration-500 reveal reveal-delay-3">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 flex items-center justify-center mb-4">
          <span class="text-2xl">✈️</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Evenimente Internationale</h3>
        <p class="text-white/50 text-sm">Calatorii au riscuri suplimentare: zboruri anulate, vize, restrictii. Asigurarea ofera liniste.</p>
      </div>

      <!-- Group Bookings -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal reveal-delay-4">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-violet-500/20 to-purple-500/20 flex items-center justify-center mb-4">
          <span class="text-2xl">👥</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Rezervari de Grup</h3>
        <p class="text-white/50 text-sm">Cand organizezi participare de grup, asigurarea protejeaza intregul grup, nu doar indivizi.</p>
      </div>

      <!-- Season Passes -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-green/30 transition-all duration-500 reveal reveal-delay-5">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500/20 to-emerald-500/20 flex items-center justify-center mb-4">
          <span class="text-2xl">🎟️</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Abonamente de Sezon</h3>
        <p class="text-white/50 text-sm">Angajamentele pe termen lung beneficiaza de acoperire care se intinde pe mai multe evenimente.</p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== TESTIMONIAL ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-4xl mx-auto px-6 lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="bg-gradient-to-br from-insurance-emerald/10 to-insurance-teal/10 rounded-3xl p-8 md:p-12 border border-insurance-emerald/20">
        <!-- Stars -->
        <div class="flex items-center gap-1 mb-6">
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <!-- Quote -->
        <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
          "Am fost sceptic la inceput, dar <span class="text-gradient-insurance font-semibold">23% dintre clienti</span> au ales asigurarea la biletele VIP. E un venit extra fara niciun efort din partea noastra. Clientii sunt mai relaxati, noi castigam mai mult."
        </blockquote>
        <!-- Author -->
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-full bg-gradient-to-br from-insurance-emerald to-insurance-teal"></div>
          <div>
            <div class="font-semibold text-white">Marius T.</div>
            <div class="text-white/50">Organizator, Jazz in the Park</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FINAL CTA ==================== -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-insurance-emerald/20 via-transparent to-insurance-teal/20"></div>
  <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(16,185,129,0.3) 0%, rgba(20,184,166,0.2) 100%);"></div>

  <!-- Floating shields -->
  <div class="absolute top-20 left-20 opacity-10 animate-float">
    <svg class="w-16 h-16 text-insurance-emerald" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
  </div>
  <div class="absolute bottom-32 right-20 opacity-10 animate-float" style="animation-delay: 1s;">
    <svg class="w-12 h-12 text-insurance-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
  </div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
    <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Protejeaza<br><span class="text-gradient-insurance">clientii</span></h2>
    <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Zero cost pentru tine. Venituri din comisioane. Clienti mai fericiti.</p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-insurance-emerald to-insurance-teal text-white hover:scale-105 hover:shadow-glow-emerald transition-all duration-300">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
        Activeaza Asigurarea
        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
        Intrebari? Contacteaza-ne
      </a>
    </div>

    <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">Gratuit de activat. Comision din prime. Suport multi-furnizor.</p>
  </div>
</section>

<script>
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
</script>

<?php get_footer(); ?>
