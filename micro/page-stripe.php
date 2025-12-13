<?php
/**
 * Template Name: Micro - Stripe Integration
 * Description: Stripe Integration - Plăți globale pentru evenimente
 */

get_header();
?>

<style>
  ::selection { background: #635BFF; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-stripe { background: linear-gradient(135deg, #635BFF 0%, #80E9FF 50%, #635BFF 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(99, 91, 255, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Credit card styles */
  .credit-card {
    background: linear-gradient(135deg, #1a1a27 0%, #2d2d44 50%, #1a1a27 100%);
    border-radius: 16px;
    aspect-ratio: 1.586/1;
    position: relative;
    overflow: hidden;
  }
  .credit-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.05) 50%, transparent 100%);
  }
  .card-chip {
    width: 40px;
    height: 30px;
    background: linear-gradient(135deg, #d4af37 0%, #f9e076 50%, #d4af37 100%);
    border-radius: 6px;
  }

  /* Stripe checkout form */
  .stripe-input {
    background: #1e1e2e;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 8px;
    padding: 12px 16px;
    color: white;
    transition: all 0.3s;
  }
  .stripe-input:focus {
    border-color: #635BFF;
    box-shadow: 0 0 0 3px rgba(99, 91, 255, 0.2);
  }

  /* Payment method badge */
  .payment-badge {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    transition: all 0.3s;
  }
  .payment-badge:hover {
    background: rgba(99, 91, 255, 0.1);
    border-color: rgba(99, 91, 255, 0.3);
  }
  .payment-badge.active {
    background: rgba(99, 91, 255, 0.2);
    border-color: #635BFF;
  }

  /* Secure badge */
  .secure-badge {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(16, 185, 129, 0.1));
    border: 1px solid rgba(16, 185, 129, 0.3);
  }

  /* Currency pill */
  .currency-pill {
    background: rgba(99, 91, 255, 0.1);
    border: 1px solid rgba(99, 91, 255, 0.2);
    transition: all 0.3s;
  }
  .currency-pill:hover {
    background: rgba(99, 91, 255, 0.2);
    transform: scale(1.05);
  }

  /* Custom keyframes */
  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }
  @keyframes cardFloat {
    0%, 100% { transform: translateY(0) rotate(-2deg); }
    50% { transform: translateY(-10px) rotate(2deg); }
  }
  @keyframes secureGlow {
    0%, 100% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.3); }
    50% { box-shadow: 0 0 40px rgba(16, 185, 129, 0.6); }
  }
  .animate-card-float { animation: cardFloat 4s ease-in-out infinite; }
  .animate-secure-glow { animation: secureGlow 2s ease-in-out infinite; }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden" x-data="{ mobileMenu: false }">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #635BFF, #80E9FF, #635BFF);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-stripe-purple/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-stripe-gradient/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating payment icons -->
    <div class="absolute top-32 left-16 opacity-20 animate-float text-2xl">💳</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">✓</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">€</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-stripe-purple/10 border border-stripe-purple/20 mb-6">
            <svg class="w-5 h-5 text-stripe-purple" viewBox="0 0 24 24" fill="currentColor"><path d="M13.976 9.15c-2.172-.806-3.356-1.426-3.356-2.409 0-.831.683-1.305 1.901-1.305 2.227 0 4.515.858 6.09 1.631l.89-5.494C18.252.975 15.697 0 12.165 0 9.667 0 7.589.654 6.104 1.872 4.56 3.147 3.757 4.992 3.757 7.218c0 4.039 2.467 5.76 6.476 7.219 2.585.92 3.445 1.574 3.445 2.583 0 .98-.84 1.545-2.354 1.545-1.875 0-4.965-.921-6.99-2.109l-.9 5.555C5.175 22.99 8.385 24 11.714 24c2.641 0 4.843-.624 6.328-1.813 1.664-1.305 2.525-3.236 2.525-5.732 0-4.128-2.524-5.851-6.591-7.305z"/></svg>
            <span class="text-stripe-purple text-sm font-medium">Powered by Stripe</span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Plăți<br><span class="text-gradient-stripe">fără limite</span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            Acceptă plăți de la clienți din <strong class="text-white">întreaga lume</strong>. Carduri, Apple Pay, Google Pay, SEPA - toate într-o singură integrare. <strong class="text-white">Securitate PCI DSS Nivel 1</strong>.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-stripe-purple to-stripe-light text-white hover:scale-105 hover:shadow-glow-stripe transition-all duration-300">
              Conectează Stripe
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#metode-plata" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              Vezi metode de plată
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-display font-bold text-stripe-purple">135+</div>
              <div class="text-white/40 text-sm">Valute suportate</div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-white">99.9%</div>
              <div class="text-white/40 text-sm">Uptime garantat</div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-brand-green">PCI L1</div>
              <div class="text-white/40 text-sm">Securitate maximă</div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Checkout Form -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            paymentMethod: 'card',
            cardNumber: '4242 4242 4242 4242',
            processing: false,
            success: false
          }">
            <!-- Checkout Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-3xl p-6 border border-white/10 shadow-2xl">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-stripe-purple/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-stripe-purple" viewBox="0 0 24 24" fill="currentColor"><path d="M13.976 9.15c-2.172-.806-3.356-1.426-3.356-2.409 0-.831.683-1.305 1.901-1.305 2.227 0 4.515.858 6.09 1.631l.89-5.494C18.252.975 15.697 0 12.165 0 9.667 0 7.589.654 6.104 1.872 4.56 3.147 3.757 4.992 3.757 7.218c0 4.039 2.467 5.76 6.476 7.219 2.585.92 3.445 1.574 3.445 2.583 0 .98-.84 1.545-2.354 1.545-1.875 0-4.965-.921-6.99-2.109l-.9 5.555C5.175 22.99 8.385 24 11.714 24c2.641 0 4.843-.624 6.328-1.813 1.664-1.305 2.525-3.236 2.525-5.732 0-4.128-2.524-5.851-6.591-7.305z"/></svg>
                  </div>
                  <div>
                    <div class="text-white font-semibold">Checkout</div>
                    <div class="text-white/40 text-xs">Plată securizată</div>
                  </div>
                </div>
                <div class="secure-badge px-3 py-1 rounded-full flex items-center gap-1">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  <span class="text-brand-green text-xs font-medium">SSL</span>
                </div>
              </div>

              <!-- Amount -->
              <div class="bg-dark-900/50 rounded-xl p-4 mb-6">
                <div class="flex items-center justify-between">
                  <div>
                    <div class="text-white/40 text-xs">Total de plată</div>
                    <div class="text-3xl font-display font-bold text-white">€157<span class="text-lg">.50</span></div>
                  </div>
                  <div class="text-right">
                    <div class="text-white/40 text-xs">2 bilete VIP</div>
                    <div class="text-white/60 text-sm">Summer Fest 2025</div>
                  </div>
                </div>
              </div>

              <!-- Payment Methods -->
              <div class="mb-4">
                <div class="text-white/40 text-xs uppercase tracking-wider mb-3">Metodă de plată</div>
                <div class="flex gap-2">
                  <button @click="paymentMethod = 'card'" :class="paymentMethod === 'card' ? 'active' : ''" class="payment-badge flex-1 rounded-lg p-3 flex items-center justify-center gap-2">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z" fill="currentColor"/></svg>
                    <span class="text-white text-sm">Card</span>
                  </button>
                  <button @click="paymentMethod = 'apple'" :class="paymentMethod === 'apple' ? 'active' : ''" class="payment-badge rounded-lg p-3 flex items-center justify-center">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                  </button>
                  <button @click="paymentMethod = 'google'" :class="paymentMethod === 'google' ? 'active' : ''" class="payment-badge rounded-lg p-3 flex items-center justify-center">
                    <svg class="w-6 h-6" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                  </button>
                </div>
              </div>

              <!-- Card Form -->
              <div x-show="paymentMethod === 'card'" class="space-y-4">
                <div>
                  <label class="text-white/40 text-xs uppercase tracking-wider mb-2 block">Număr card</label>
                  <div class="stripe-input flex items-center gap-3">
                    <span class="text-white font-mono" x-text="cardNumber">4242 4242 4242 4242</span>
                    <div class="ml-auto flex items-center gap-2">
                      <svg class="w-8 h-5" viewBox="0 0 32 20"><rect fill="#1A1F71" width="32" height="20" rx="2"/><text x="5" y="14" fill="white" font-size="8" font-weight="bold">VISA</text></svg>
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label class="text-white/40 text-xs uppercase tracking-wider mb-2 block">Expirare</label>
                    <div class="stripe-input">
                      <span class="text-white font-mono">12 / 28</span>
                    </div>
                  </div>
                  <div>
                    <label class="text-white/40 text-xs uppercase tracking-wider mb-2 block">CVC</label>
                    <div class="stripe-input">
                      <span class="text-white font-mono">•••</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Apple/Google Pay -->
              <div x-show="paymentMethod !== 'card'" class="py-8 text-center">
                <div class="text-white/60 text-sm mb-2">Apasă pentru a continua cu</div>
                <div x-show="paymentMethod === 'apple'" class="text-white text-xl font-semibold"> Pay</div>
                <div x-show="paymentMethod === 'google'" class="text-white text-xl font-semibold">Google Pay</div>
              </div>

              <!-- Pay Button -->
              <button
                @click="processing = true; setTimeout(() => { processing = false; success = true; }, 2000)"
                :disabled="processing || success"
                class="w-full py-4 rounded-xl font-semibold text-white transition-all duration-300 mt-6"
                :class="success ? 'bg-brand-green' : 'bg-gradient-to-r from-stripe-purple to-stripe-light hover:shadow-glow-stripe'"
              >
                <span x-show="!processing && !success" class="flex items-center justify-center gap-2">
                  <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  Plătește €157.50
                </span>
                <span x-show="processing" class="flex items-center justify-center gap-2">
                  <svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                  Procesare...
                </span>
                <span x-show="success" class="flex items-center justify-center gap-2">
                  <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  Plată reușită!
                </span>
              </button>

              <!-- Trust badges -->
              <div class="flex items-center justify-center gap-6 mt-6">
                <div class="flex items-center gap-1 text-white/30 text-xs">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                  PCI DSS
                </div>
                <div class="flex items-center gap-1 text-white/30 text-xs">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                  3D Secure
                </div>
                <div class="flex items-center gap-1 text-white/30 text-xs">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M13.976 9.15c-2.172-.806-3.356-1.426-3.356-2.409 0-.831.683-1.305 1.901-1.305 2.227 0 4.515.858 6.09 1.631l.89-5.494C18.252.975 15.697 0 12.165 0 9.667 0 7.589.654 6.104 1.872 4.56 3.147 3.757 4.992 3.757 7.218c0 4.039 2.467 5.76 6.476 7.219 2.585.92 3.445 1.574 3.445 2.583 0 .98-.84 1.545-2.354 1.545-1.875 0-4.965-.921-6.99-2.109l-.9 5.555C5.175 22.99 8.385 24 11.714 24c2.641 0 4.843-.624 6.328-1.813 1.664-1.305 2.525-3.236 2.525-5.732 0-4.128-2.524-5.851-6.591-7.305z"/></svg>
                  Stripe
                </div>
              </div>
            </div>

            <!-- Floating Card -->
            <div class="absolute -top-8 -right-8 w-48 credit-card p-4 shadow-card animate-card-float z-10">
              <div class="flex justify-between items-start mb-8">
                <div class="card-chip"></div>
                <svg class="w-8 h-8 text-white/30" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/><path d="M9.5 16.5l7-4.5-7-4.5z"/></svg>
              </div>
              <div class="text-white/70 font-mono text-sm tracking-wider mb-2">•••• •••• •••• 4242</div>
              <div class="flex justify-between">
                <div class="text-white/40 text-xs">VALID THRU<br><span class="text-white/70">12/28</span></div>
                <svg class="w-12 h-8" viewBox="0 0 48 32"><circle cx="16" cy="16" r="14" fill="#EB001B"/><circle cx="32" cy="16" r="14" fill="#F79E1B"/><path d="M24 6.5c3.5 2.5 5.8 6.5 5.8 11s-2.3 8.5-5.8 11c-3.5-2.5-5.8-6.5-5.8-11s2.3-8.5 5.8-11z" fill="#FF5F00"/></svg>
              </div>
            </div>

            <!-- Success Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div>
                  <div class="text-brand-green text-sm font-medium">Instant</div>
                  <div class="text-white/40 text-xs">Confirmare plată</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAYMENT METHODS ==================== -->
  <section class="py-24 relative overflow-hidden" id="metode-plata">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-stripe-purple text-sm font-medium uppercase tracking-widest">Metode de Plată</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Lasă clienții să<br><span class="text-gradient-stripe">aleagă</span></h2>
        <p class="text-lg text-white/60">Carduri, portofele digitale și metode locale. Toate funcționează instantaneu.</p>
      </div>

      <!-- Payment Methods Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
        <!-- Cards -->
        <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 hover:border-stripe-purple/30 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 rounded-xl bg-stripe-purple/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-stripe-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
            </div>
            <div>
              <h3 class="text-white font-semibold">Carduri</h3>
              <p class="text-white/40 text-xs">Credit & Debit</p>
            </div>
          </div>
          <div class="flex flex-wrap gap-2">
            <div class="px-2 py-1 rounded bg-payment-visa/20 text-xs text-white/70">Visa</div>
            <div class="px-2 py-1 rounded bg-payment-mastercard/20 text-xs text-white/70">Mastercard</div>
            <div class="px-2 py-1 rounded bg-payment-amex/20 text-xs text-white/70">Amex</div>
          </div>
        </div>

        <!-- Apple Pay -->
        <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 hover:border-white/30 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">
              <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
            </div>
            <div>
              <h3 class="text-white font-semibold">Apple Pay</h3>
              <p class="text-white/40 text-xs">Touch & Face ID</p>
            </div>
          </div>
          <div class="text-white/50 text-sm">Checkout cu o atingere pe iPhone, iPad, Mac și Apple Watch.</div>
        </div>

        <!-- Google Pay -->
        <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 hover:border-payment-google/30 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 rounded-xl bg-payment-google/10 flex items-center justify-center">
              <svg class="w-6 h-6" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
            </div>
            <div>
              <h3 class="text-white font-semibold">Google Pay</h3>
              <p class="text-white/40 text-xs">Android & Chrome</p>
            </div>
          </div>
          <div class="text-white/50 text-sm">Plătește rapid cu cardurile salvate în contul Google.</div>
        </div>

        <!-- SEPA -->
        <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 hover:border-brand-cyan/30 transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
            </div>
            <div>
              <h3 class="text-white font-semibold">SEPA Direct Debit</h3>
              <p class="text-white/40 text-xs">Europa (EUR)</p>
            </div>
          </div>
          <div class="text-white/50 text-sm">Debitare directă din contul bancar pentru clienții europeni.</div>
        </div>
      </div>

      <!-- More methods -->
      <div class="mt-8 flex flex-wrap justify-center gap-4 reveal reveal-delay-1">
        <div class="currency-pill px-4 py-2 rounded-full flex items-center gap-2">
          <span class="text-white/70 text-sm">iDEAL</span>
          <span class="text-white/30 text-xs">🇳🇱</span>
        </div>
        <div class="currency-pill px-4 py-2 rounded-full flex items-center gap-2">
          <span class="text-white/70 text-sm">Bancontact</span>
          <span class="text-white/30 text-xs">🇧🇪</span>
        </div>
        <div class="currency-pill px-4 py-2 rounded-full flex items-center gap-2">
          <span class="text-white/70 text-sm">Sofort</span>
          <span class="text-white/30 text-xs">🇩🇪</span>
        </div>
        <div class="currency-pill px-4 py-2 rounded-full flex items-center gap-2">
          <span class="text-white/70 text-sm">Klarna</span>
          <span class="text-white/30 text-xs">BNPL</span>
        </div>
        <div class="currency-pill px-4 py-2 rounded-full flex items-center gap-2">
          <span class="text-white/70 text-sm">Link</span>
          <span class="text-white/30 text-xs">1-click</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SECURITY ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-brand-green text-sm font-medium uppercase tracking-widest">Securitate</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Protecție<br><span class="text-gradient animate-shimmer">la fiecare pas</span></h2>
          <p class="text-lg text-white/60 mb-8">Cele mai înalte standarde de securitate. Datele cardurilor nu ating niciodată serverele tale.</p>

          <div class="space-y-4">
            <!-- PCI DSS -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-brand-green/20">
              <div class="w-14 h-14 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0 animate-secure-glow">
                <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </div>
              <div>
                <div class="flex items-center gap-2">
                  <span class="text-white font-semibold">PCI DSS Nivel 1</span>
                  <span class="px-2 py-0.5 rounded-full bg-brand-green/20 text-brand-green text-xs">Certificat</span>
                </div>
                <p class="text-white/50 text-sm">Cel mai înalt nivel de conformitate pentru procesarea plăților</p>
              </div>
            </div>

            <!-- 3D Secure -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-14 h-14 rounded-xl bg-stripe-purple/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-stripe-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </div>
              <div>
                <span class="text-white font-semibold">3D Secure 2.0</span>
                <p class="text-white/50 text-sm">Autentificare puternică cerută de regulamentele UE (SCA)</p>
              </div>
            </div>

            <!-- Stripe Radar -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-14 h-14 rounded-xl bg-brand-amber/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
              </div>
              <div>
                <span class="text-white font-semibold">Stripe Radar</span>
                <p class="text-white/50 text-sm">Detecție fraudă cu ML antrenat pe miliarde de tranzacții</p>
              </div>
            </div>

            <!-- Tokenization -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-14 h-14 rounded-xl bg-brand-cyan/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-7 h-7 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              </div>
              <div>
                <span class="text-white font-semibold">Tokenizare</span>
                <p class="text-white/50 text-sm">Numerele de card sunt înlocuite cu tokens securizate</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual -->
        <div class="reveal reveal-delay-1">
          <div class="relative">
            <!-- Shield visual -->
            <div class="bg-dark-800 rounded-3xl p-8 border border-brand-green/20">
              <div class="flex items-center justify-center">
                <div class="relative">
                  <!-- Outer ring -->
                  <div class="w-48 h-48 rounded-full border-4 border-dashed border-brand-green/20 flex items-center justify-center">
                    <!-- Middle ring -->
                    <div class="w-36 h-36 rounded-full border-2 border-brand-green/30 flex items-center justify-center">
                      <!-- Inner shield -->
                      <div class="w-24 h-24 rounded-full bg-gradient-to-br from-brand-green/20 to-brand-green/10 flex items-center justify-center animate-secure-glow">
                        <svg class="w-12 h-12 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                      </div>
                    </div>
                  </div>

                  <!-- Floating badges -->
                  <div class="absolute -top-2 right-0 px-3 py-1 bg-dark-700 rounded-full border border-brand-green/30 text-brand-green text-xs font-medium">
                    Criptat
                  </div>
                  <div class="absolute -bottom-2 left-0 px-3 py-1 bg-dark-700 rounded-full border border-stripe-purple/30 text-stripe-purple text-xs font-medium">
                    Verificat
                  </div>
                </div>
              </div>

              <!-- Stats -->
              <div class="grid grid-cols-3 gap-4 mt-8">
                <div class="text-center">
                  <div class="text-2xl font-display font-bold text-brand-green">256</div>
                  <div class="text-white/40 text-xs">bit encryption</div>
                </div>
                <div class="text-center">
                  <div class="text-2xl font-display font-bold text-stripe-purple">0%</div>
                  <div class="text-white/40 text-xs">date brute</div>
                </div>
                <div class="text-center">
                  <div class="text-2xl font-display font-bold text-brand-amber">ML</div>
                  <div class="text-white/40 text-xs">fraud detection</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== GLOBAL ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-stripe-purple text-sm font-medium uppercase tracking-widest">Global</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Acceptă plăți de<br><span class="text-gradient-stripe">oriunde</span></h2>
        <p class="text-lg text-white/60">135+ valute, metode de plată locale, decontare în valuta ta.</p>
      </div>

      <!-- Currency grid -->
      <div class="flex flex-wrap justify-center gap-3 reveal">
        <div class="currency-pill px-5 py-3 rounded-xl flex items-center gap-3">
          <span class="text-2xl">🇪🇺</span>
          <div>
            <div class="text-white font-semibold">EUR</div>
            <div class="text-white/40 text-xs">Euro</div>
          </div>
        </div>
        <div class="currency-pill px-5 py-3 rounded-xl flex items-center gap-3">
          <span class="text-2xl">🇺🇸</span>
          <div>
            <div class="text-white font-semibold">USD</div>
            <div class="text-white/40 text-xs">Dollar</div>
          </div>
        </div>
        <div class="currency-pill px-5 py-3 rounded-xl flex items-center gap-3">
          <span class="text-2xl">🇬🇧</span>
          <div>
            <div class="text-white font-semibold">GBP</div>
            <div class="text-white/40 text-xs">Pound</div>
          </div>
        </div>
        <div class="currency-pill px-5 py-3 rounded-xl flex items-center gap-3">
          <span class="text-2xl">🇷🇴</span>
          <div>
            <div class="text-white font-semibold">RON</div>
            <div class="text-white/40 text-xs">Leu</div>
          </div>
        </div>
        <div class="currency-pill px-5 py-3 rounded-xl flex items-center gap-3">
          <span class="text-2xl">🇨🇭</span>
          <div>
            <div class="text-white font-semibold">CHF</div>
            <div class="text-white/40 text-xs">Franc</div>
          </div>
        </div>
        <div class="currency-pill px-5 py-3 rounded-xl flex items-center gap-3">
          <span class="text-2xl">🇯🇵</span>
          <div>
            <div class="text-white font-semibold">JPY</div>
            <div class="text-white/40 text-xs">Yen</div>
          </div>
        </div>
        <div class="currency-pill px-5 py-3 rounded-xl flex items-center gap-3 opacity-60">
          <span class="text-xl">+129</span>
          <div>
            <div class="text-white/70 text-sm">alte valute</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest">Cazuri de Utilizare</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Perfect pentru<br><span class="text-gradient animate-shimmer">orice eveniment</span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-stripe-purple/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-purple-500/20 flex items-center justify-center mb-4"><span class="text-2xl">🌍</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Evenimente Internaționale</h3>
          <p class="text-white/50 text-sm">Metode de plată locale afișate automat în funcție de țara clientului.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-stripe-purple/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500/20 to-orange-500/20 flex items-center justify-center mb-4"><span class="text-2xl">🚀</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Vânzări cu Volum Mare</h3>
          <p class="text-white/50 text-sm">Mii de tranzacții pe secundă. Infrastructura scalează automat la cerere.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-stripe-purple/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500/20 to-emerald-500/20 flex items-center justify-center mb-4"><span class="text-2xl">📱</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Mobile-First</h3>
          <p class="text-white/50 text-sm">Apple Pay și Google Pay pentru checkout cu o singură atingere. Conversii mai mari.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-stripe-purple/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-violet-500/20 to-purple-500/20 flex items-center justify-center mb-4"><span class="text-2xl">🔄</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Clienți Recurenți</h3>
          <p class="text-white/50 text-sm">Carduri salvate pentru cumpărături viitoare cu un click. Reduce abandonul.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-stripe-purple/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 flex items-center justify-center mb-4"><span class="text-2xl">💱</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Multi-Valută</h3>
          <p class="text-white/50 text-sm">Prețuri în valuta locală, decontare în valuta ta. Fără bătăi de cap.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-stripe-purple/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center mb-4"><span class="text-2xl">👑</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Evenimente Premium</h3>
          <p class="text-white/50 text-sm">Protecție împotriva fraudei și gestionarea disputelor pentru tranzacții mari.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-stripe-purple/10 to-stripe-light/10 rounded-3xl p-8 md:p-12 border border-stripe-purple/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "De când am integrat Stripe, <span class="text-gradient-stripe font-semibold">rata de abandon</span> la checkout a scăzut cu 35%. Apple Pay pe mobil a fost game-changer - clienții finalizează în secunde."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-stripe-purple to-stripe-light"></div>
            <div>
              <div class="font-semibold text-white">Andreea P.</div>
              <div class="text-white/50">COO, Electric Castle</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-stripe-purple/20 via-transparent to-stripe-light/20"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(99,91,255,0.3) 0%, rgba(128,233,255,0.2) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-10 animate-float">
      <svg class="w-16 h-16 text-stripe-purple" viewBox="0 0 24 24" fill="currentColor"><path d="M13.976 9.15c-2.172-.806-3.356-1.426-3.356-2.409 0-.831.683-1.305 1.901-1.305 2.227 0 4.515.858 6.09 1.631l.89-5.494C18.252.975 15.697 0 12.165 0 9.667 0 7.589.654 6.104 1.872 4.56 3.147 3.757 4.992 3.757 7.218c0 4.039 2.467 5.76 6.476 7.219 2.585.92 3.445 1.574 3.445 2.583 0 .98-.84 1.545-2.354 1.545-1.875 0-4.965-.921-6.99-2.109l-.9 5.555C5.175 22.99 8.385 24 11.714 24c2.641 0 4.843-.624 6.328-1.813 1.664-1.305 2.525-3.236 2.525-5.732 0-4.128-2.524-5.851-6.591-7.305z"/></svg>
    </div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Start<br><span class="text-gradient-stripe">accepting</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Conectează Stripe în minute. Acceptă plăți global. Crește-ți veniturile.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-stripe-purple to-stripe-light text-white hover:scale-105 hover:shadow-glow-stripe transition-all duration-300">
          Conectează Stripe
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Întrebări? Contactează-ne
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">Configurare în minute. 135+ valute. Transferuri automate.</p>
    </div>
  </section>
</div>

<!-- JAVASCRIPT -->
<script>
  window.addEventListener('scroll', () => {
    const scrollProgress = document.getElementById('scroll-progress');
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    scrollProgress.style.width = (scrollTop / scrollHeight) * 100 + '%';
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => { const rect = card.getBoundingClientRect(); card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`); card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`); });
  });
</script>

<?php get_footer(); ?>
