<?php
/**
 * Template Name: Micro - WhatsApp
 * Description: Landing page for WhatsApp Business API integration
 */

get_header();
?>

<style>
  /* Selection */
  ::selection { background: #25D366; color: white; }

  /* Text gradients */
  .text-gradient {
    @apply bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-cyan-400 to-purple-400 bg-[length:200%_auto] animate-shimmer;
  }
  .text-gradient-whatsapp {
    @apply bg-clip-text text-transparent bg-gradient-to-r from-whatsapp-green via-whatsapp-teal to-whatsapp-dark bg-[length:200%_auto];
  }

  /* Reveal animations */
  .reveal {
    @apply opacity-0 translate-y-10 transition-all duration-700;
    transition-timing-function: cubic-bezier(0.16, 1, 0.3, 1);
  }
  .reveal.revealed { @apply opacity-100 translate-y-0; }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }
  .reveal-delay-5 { transition-delay: 0.5s; }

  /* Feature card glow */
  .feature-card::before {
    content: '';
    @apply absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-500;
    background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(37, 211, 102, 0.15), transparent 50%);
  }
  .feature-card:hover::before { @apply opacity-100; }

  /* Phone mockup */
  .phone-frame {
    background: linear-gradient(145deg, #1a1a27 0%, #0f0f16 100%);
    border-radius: 40px;
    padding: 12px;
    box-shadow:
      0 50px 100px -20px rgba(0, 0, 0, 0.5),
      inset 0 1px 0 rgba(255, 255, 255, 0.1);
  }
  .phone-screen {
    background: linear-gradient(180deg, #075E54 0%, #075E54 8%, #0B141A 8%, #0B141A 100%);
    border-radius: 32px;
    overflow: hidden;
  }

  /* WhatsApp chat bubble */
  .wa-bubble {
    position: relative;
    background: #005C4B;
    border-radius: 8px 8px 8px 0;
    padding: 8px 12px;
    max-width: 85%;
  }
  .wa-bubble-out {
    background: #005C4B;
    border-radius: 8px 8px 0 8px;
    margin-left: auto;
  }
  .wa-bubble::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: -8px;
    width: 0;
    height: 0;
    border-right: 8px solid #005C4B;
    border-bottom: 8px solid transparent;
  }
  .wa-bubble-out::before {
    left: auto;
    right: -8px;
    border-right: none;
    border-left: 8px solid #005C4B;
  }

  /* Double check animation */
  .double-check {
    display: inline-flex;
    gap: 1px;
  }
  .double-check svg:nth-child(2) {
    margin-left: -8px;
  }

  /* Typing indicator */
  .typing-dots span {
    @apply inline-block w-2 h-2 bg-white/50 rounded-full;
    animation: typing 1.5s ease-in-out infinite;
  }
  .typing-dots span:nth-child(2) { animation-delay: 0.2s; }
  .typing-dots span:nth-child(3) { animation-delay: 0.4s; }

  @keyframes typing {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 1; }
  }

  /* Message appear animation */
  .message-animated {
    @apply opacity-0 translate-y-5;
  }
  .message-animated.show {
    animation: messageIn 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }

  @keyframes messageIn {
    0% { opacity: 0; transform: translateY(20px) scale(0.95); }
    100% { opacity: 1; transform: translateY(0) scale(1); }
  }

  /* Notification badge bounce */
  @keyframes notifBounce {
    0% { transform: scale(0); }
    50% { transform: scale(1.2); }
    100% { transform: scale(1); }
  }

  /* Stats counter */
  .stat-glow {
    text-shadow: 0 0 40px rgba(37, 211, 102, 0.5);
  }

  /* WhatsApp button */
  .btn-whatsapp {
    @apply inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-whatsapp-green to-whatsapp-teal text-white transition-all duration-300;
  }
  .btn-whatsapp:hover {
    @apply scale-105 shadow-glow-whatsapp;
  }

  /* Pulse green animation */
  @keyframes pulseGreen {
    0%, 100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.4); }
    50% { box-shadow: 0 0 0 20px rgba(37, 211, 102, 0); }
  }
  .animate-pulse-green {
    animation: pulseGreen 2s ease-in-out infinite;
  }
</style>

<!-- ==================== HERO ==================== -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
  <!-- Background Orbs -->
  <div class="absolute w-[600px] h-[600px] bg-whatsapp-green/20 rounded-full -top-40 -right-40 blur-[120px] pointer-events-none"></div>
  <div class="absolute w-[400px] h-[400px] bg-whatsapp-teal/15 rounded-full bottom-20 -left-20 blur-[120px] pointer-events-none"></div>
  <div class="absolute w-[300px] h-[300px] bg-emerald-500/10 rounded-full top-1/3 left-1/4 blur-[120px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

      <!-- Hero Content -->
      <div class="reveal">
        <!-- Badge -->
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-whatsapp-green/10 border border-whatsapp-green/20 mb-6">
          <svg class="w-5 h-5 text-whatsapp-green" viewBox="0 0 24 24" fill="currentColor">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
          </svg>
          <span class="text-whatsapp-green text-sm font-medium">WhatsApp Business API</span>
        </div>

        <!-- Heading -->
        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
          Mesaje cu<br><span class="text-gradient-whatsapp animate-shimmer">98% open rate</span>
        </h1>

        <!-- Description -->
        <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
          Email-urile se pierd in spam. SMS-urile sunt ignorate. <strong class="text-white">WhatsApp-ul se citeste in 3 minute.</strong> Trimite confirmari, remindere si campanii direct pe telefonul clientului.
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn-whatsapp">
            Activeaza WhatsApp
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#cum-functioneaza" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
            Vezi cum functioneaza
          </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-6">
          <div>
            <div class="text-3xl font-display font-bold text-whatsapp-green stat-glow">98%</div>
            <div class="text-white/40 text-sm">Open rate</div>
          </div>
          <div>
            <div class="text-3xl font-display font-bold text-white">3 min</div>
            <div class="text-white/40 text-sm">Timp raspuns</div>
          </div>
          <div>
            <div class="text-3xl font-display font-bold text-white">45%</div>
            <div class="text-white/40 text-sm">Click rate</div>
          </div>
        </div>
      </div>

      <!-- Hero Visual - Phone Mockup -->
      <div class="reveal reveal-delay-1">
        <div class="relative flex justify-center">
          <!-- Phone Frame -->
          <div class="phone-frame w-[300px]" x-data="{ messages: [], showTyping: false }" x-init="
            setTimeout(() => { messages.push(1); }, 500);
            setTimeout(() => { messages.push(2); }, 1500);
            setTimeout(() => { showTyping = true; }, 2500);
            setTimeout(() => { showTyping = false; messages.push(3); }, 4000);
          ">
            <div class="phone-screen">
              <!-- WhatsApp Header -->
              <div class="bg-whatsapp-dark px-4 py-3 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center">
                  <span class="text-white font-display font-bold text-xs">T</span>
                </div>
                <div class="flex-1">
                  <div class="text-white font-medium text-sm">Tixello</div>
                  <div class="text-whatsapp-green text-xs">online</div>
                </div>
                <svg class="w-5 h-5 text-white/70" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
              </div>

              <!-- Chat Area -->
              <div class="h-[400px] p-4 space-y-3 overflow-hidden bg-[#0B141A]">

                <!-- Message 1: Order Confirmation -->
                <div class="message-animated" :class="{ 'show': messages.includes(1) }">
                  <div class="wa-bubble">
                    <div class="text-white/90 text-sm mb-1"><strong>Comanda confirmata!</strong></div>
                    <div class="text-white/70 text-xs leading-relaxed">
                      2x Bilete VIP<br>
                      <strong>Summer Festival 2025</strong><br>
                      15 Iulie, 18:00<br>
                      Arena Nationala
                    </div>
                    <div class="flex items-center justify-end gap-1 mt-2">
                      <span class="text-white/40 text-[10px]">10:30</span>
                      <div class="double-check text-blue-400">
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor"><path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 2.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor"><path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 2.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/></svg>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Message 2: Download Link -->
                <div class="message-animated" :class="{ 'show': messages.includes(2) }">
                  <div class="wa-bubble">
                    <div class="text-white/90 text-sm mb-2">Descarca biletele tale:</div>
                    <span class="inline-block px-4 py-2 bg-whatsapp-green/20 rounded-lg text-whatsapp-green text-sm">
                      Deschide Bilete
                    </span>
                    <div class="flex items-center justify-end gap-1 mt-2">
                      <span class="text-white/40 text-[10px]">10:30</span>
                      <div class="double-check text-blue-400">
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor"><path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 2.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor"><path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 2.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/></svg>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Typing Indicator -->
                <div x-show="showTyping" x-transition class="wa-bubble w-20">
                  <div class="typing-dots flex items-center gap-1 py-1">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>

                <!-- Message 3: Reminder -->
                <div class="message-animated" :class="{ 'show': messages.includes(3) }">
                  <div class="wa-bubble">
                    <div class="text-white/90 text-sm mb-1"><strong>Reminder: 3 zile ramase!</strong></div>
                    <div class="text-white/70 text-xs">
                      Summer Festival 2025 incepe in curand. Nu uita sa verifici detaliile de acces!
                    </div>
                    <div class="flex items-center justify-end gap-1 mt-2">
                      <span class="text-white/40 text-[10px]">12:00</span>
                      <div class="double-check text-blue-400">
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor"><path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 2.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor"><path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 2.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/></svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Floating Elements -->
          <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-whatsapp-green/20 shadow-xl animate-float">
            <div class="flex items-center gap-2">
              <div class="w-8 h-8 rounded-full bg-whatsapp-green/20 flex items-center justify-center animate-pulse-green">
                <svg class="w-4 h-4 text-whatsapp-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <div class="text-white text-sm font-medium">Livrat</div>
                <div class="text-whatsapp-green text-xs">Citit</div>
              </div>
            </div>
          </div>

          <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-amber/20 shadow-xl animate-float" style="animation-delay: 1s;">
            <div class="flex items-center gap-2">
              <div class="text-2xl">📊</div>
              <div>
                <div class="text-white text-sm font-medium">2,847</div>
                <div class="text-white/40 text-xs">mesaje azi</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== COMPARISON ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-rose text-sm font-medium uppercase tracking-widest">Comparatie</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">De ce WhatsApp<br><span class="text-whatsapp-green">bate email-ul</span></h2>
    </div>

    <!-- Comparison Cards -->
    <div class="grid lg:grid-cols-3 gap-6">
      <!-- Email -->
      <div class="reveal">
        <div class="bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-3xl p-8 border border-brand-rose/20 h-full">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <span class="text-brand-rose font-semibold">Email</span>
          </div>
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <span class="text-white/60">Open Rate</span>
              <span class="text-brand-rose font-semibold">21%</span>
            </div>
            <div class="h-2 bg-white/10 rounded-full overflow-hidden">
              <div class="h-full w-[21%] bg-brand-rose/50 rounded-full"></div>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-white/60">Timp raspuns</span>
              <span class="text-white/40">6+ ore</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-white/60">Click Rate</span>
              <span class="text-white/40">2.5%</span>
            </div>
            <div class="pt-4 border-t border-white/10 text-white/40 text-sm">
              Se pierde in spam, promotions tab, sau e ignorat complet.
            </div>
          </div>
        </div>
      </div>

      <!-- SMS -->
      <div class="reveal reveal-delay-1">
        <div class="bg-gradient-to-br from-brand-amber/10 to-brand-amber/5 rounded-3xl p-8 border border-brand-amber/20 h-full">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
            </div>
            <span class="text-brand-amber font-semibold">SMS</span>
          </div>
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <span class="text-white/60">Open Rate</span>
              <span class="text-brand-amber font-semibold">82%</span>
            </div>
            <div class="h-2 bg-white/10 rounded-full overflow-hidden">
              <div class="h-full w-[82%] bg-brand-amber/50 rounded-full"></div>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-white/60">Timp raspuns</span>
              <span class="text-white/40">90 sec</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-white/60">Cost / mesaj</span>
              <span class="text-brand-rose">0.05-0.10 EUR</span>
            </div>
            <div class="pt-4 border-t border-white/10 text-white/40 text-sm">
              Scump, limitat la 160 caractere, fara media sau butoane.
            </div>
          </div>
        </div>
      </div>

      <!-- WhatsApp -->
      <div class="reveal reveal-delay-2">
        <div class="bg-gradient-to-br from-whatsapp-green/10 to-whatsapp-teal/10 rounded-3xl p-8 border border-whatsapp-green/30 h-full relative overflow-hidden">
          <!-- Recommended badge -->
          <div class="absolute top-4 right-4 px-3 py-1 bg-whatsapp-green text-white text-xs font-semibold rounded-full">
            RECOMANDAT
          </div>
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-whatsapp-green/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-whatsapp-green" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </div>
            <span class="text-whatsapp-green font-semibold">WhatsApp</span>
          </div>
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <span class="text-white/60">Open Rate</span>
              <span class="text-whatsapp-green font-bold text-xl">98%</span>
            </div>
            <div class="h-2 bg-white/10 rounded-full overflow-hidden">
              <div class="h-full w-[98%] bg-gradient-to-r from-whatsapp-green to-whatsapp-teal rounded-full"></div>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-white/60">Timp raspuns</span>
              <span class="text-whatsapp-green font-semibold">3 min</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-white/60">Click Rate</span>
              <span class="text-whatsapp-green font-semibold">45%</span>
            </div>
            <div class="pt-4 border-t border-white/10 text-white/60 text-sm">
              Rich media, butoane interactive, confirmari de citire, costuri competitive.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== MESSAGE TYPES ==================== -->
<section class="py-24 bg-dark-850 relative" id="cum-functioneaza">
  <div class="absolute w-[500px] h-[500px] bg-whatsapp-green/15 rounded-full top-1/2 -right-60 blur-[120px] pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-whatsapp-green text-sm font-medium uppercase tracking-widest">Tipuri de Mesaje</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Mesajul potrivit<br><span class="text-gradient-whatsapp animate-shimmer">la momentul potrivit</span></h2>
      <p class="text-lg text-white/60">Automatizeaza comunicarea pentru fiecare etapa a calatoriei clientului.</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Confirmari Comanda -->
      <div class="feature-card relative bg-gradient-to-br from-whatsapp-green/10 to-whatsapp-green/5 rounded-2xl p-6 border border-white/10 hover:border-whatsapp-green/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal">
        <div class="w-14 h-14 rounded-2xl bg-whatsapp-green/20 flex items-center justify-center mb-4">
          <span class="text-3xl">🎫</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Confirmari Comanda</h3>
        <p class="text-white/50 text-sm mb-4">Trimise instant dupa achizitie cu toate detaliile: bilete, eveniment, QR code, link descarcare.</p>
        <div class="flex items-center gap-2 text-whatsapp-green text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          Livrare idempotenta
        </div>
      </div>

      <!-- Remindere -->
      <div class="feature-card relative bg-gradient-to-br from-brand-amber/10 to-brand-amber/5 rounded-2xl p-6 border border-white/10 hover:border-brand-amber/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-1">
        <div class="w-14 h-14 rounded-2xl bg-brand-amber/20 flex items-center justify-center mb-4">
          <span class="text-3xl">⏰</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Remindere Smart</h3>
        <p class="text-white/50 text-sm mb-4">Programate automat la D-7, D-3 si D-1. Constiente de fusul orar - ajung la ore potrivite.</p>
        <div class="flex items-center gap-2 text-brand-amber text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Timezone-aware
        </div>
      </div>

      <!-- Campanii Promo -->
      <div class="feature-card relative bg-gradient-to-br from-brand-violet/10 to-brand-violet/5 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-2">
        <div class="w-14 h-14 rounded-2xl bg-brand-violet/20 flex items-center justify-center mb-4">
          <span class="text-3xl">🎯</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Campanii Promo</h3>
        <p class="text-white/50 text-sm mb-4">Targeteaza segmente specifice cu oferte personalizate. Dry-run pentru testare inainte de trimitere.</p>
        <div class="flex items-center gap-2 text-brand-violet text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          Segmentare audienta
        </div>
      </div>

      <!-- OTP/Verificare -->
      <div class="feature-card relative bg-gradient-to-br from-brand-cyan/10 to-brand-cyan/5 rounded-2xl p-6 border border-white/10 hover:border-brand-cyan/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-3">
        <div class="w-14 h-14 rounded-2xl bg-brand-cyan/20 flex items-center justify-center mb-4">
          <span class="text-3xl">🔐</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Verificare OTP</h3>
        <p class="text-white/50 text-sm mb-4">Coduri de verificare pentru autentificare si securitate. Livrare instantanee, expirare configurabila.</p>
        <div class="flex items-center gap-2 text-brand-cyan text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          Securitate maxima
        </div>
      </div>

      <!-- Urgente -->
      <div class="feature-card relative bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-2xl p-6 border border-white/10 hover:border-brand-rose/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-4">
        <div class="w-14 h-14 rounded-2xl bg-brand-rose/20 flex items-center justify-center mb-4">
          <span class="text-3xl">🚨</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Comunicari Urgente</h3>
        <p class="text-white/50 text-sm mb-4">Notifica rapid toti participantii despre schimbari de locatie, amanari sau informatii de siguranta.</p>
        <div class="flex items-center gap-2 text-brand-rose text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
          Livrare prioritara
        </div>
      </div>

      <!-- Template Variables -->
      <div class="feature-card relative bg-gradient-to-br from-brand-green/10 to-brand-green/5 rounded-2xl p-6 border border-white/10 hover:border-brand-green/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-5">
        <div class="w-14 h-14 rounded-2xl bg-brand-green/20 flex items-center justify-center mb-4">
          <span class="text-3xl">✨</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Template-uri Smart</h3>
        <p class="text-white/50 text-sm mb-4">Personalizare cu variabile: {first_name}, {event_name}, {ticket_type}, {discount_code} si altele.</p>
        <div class="flex items-center gap-2 text-brand-green text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          Multi-limba
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== REMINDER TIMELINE ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-amber text-sm font-medium uppercase tracking-widest">Remindere Automate</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Programare<br><span class="text-gradient animate-shimmer">inteligenta</span></h2>
      <p class="text-lg text-white/60">Reminderele se programeaza automat si ajung la ora potrivita in fusul orar al clientului.</p>
    </div>

    <!-- Timeline Visual -->
    <div class="relative max-w-4xl mx-auto reveal">
      <!-- Timeline Line -->
      <div class="absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-whatsapp-green/20 via-brand-amber/20 to-brand-rose/20 rounded-full -translate-y-1/2"></div>

      <div class="grid grid-cols-4 gap-4 relative">
        <!-- Event Date -->
        <div class="text-center">
          <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center mb-4 shadow-lg shadow-brand-violet/30 relative z-10">
            <span class="text-3xl">🎉</span>
          </div>
          <div class="text-white font-semibold mb-1">Eveniment</div>
          <div class="text-white/40 text-sm">15 Iulie</div>
        </div>

        <!-- D-7 -->
        <div class="text-center">
          <div class="w-16 h-16 mx-auto rounded-full bg-whatsapp-green/20 border-2 border-whatsapp-green flex items-center justify-center mb-4 relative z-10">
            <span class="text-whatsapp-green font-bold">D-7</span>
          </div>
          <div class="text-white font-semibold mb-1">8 Iulie</div>
          <div class="text-whatsapp-green text-sm">1 saptamana</div>
          <div class="mt-3 p-3 bg-dark-800 rounded-xl border border-whatsapp-green/20">
            <div class="text-white/70 text-xs">"Evenimentul tau e in 7 zile! Pregateste-te..."</div>
          </div>
        </div>

        <!-- D-3 -->
        <div class="text-center">
          <div class="w-16 h-16 mx-auto rounded-full bg-brand-amber/20 border-2 border-brand-amber flex items-center justify-center mb-4 relative z-10">
            <span class="text-brand-amber font-bold">D-3</span>
          </div>
          <div class="text-white font-semibold mb-1">12 Iulie</div>
          <div class="text-brand-amber text-sm">3 zile</div>
          <div class="mt-3 p-3 bg-dark-800 rounded-xl border border-brand-amber/20">
            <div class="text-white/70 text-xs">"Mai sunt 3 zile! Verifica detaliile..."</div>
          </div>
        </div>

        <!-- D-1 -->
        <div class="text-center">
          <div class="w-16 h-16 mx-auto rounded-full bg-brand-rose/20 border-2 border-brand-rose flex items-center justify-center mb-4 relative z-10">
            <span class="text-brand-rose font-bold">D-1</span>
          </div>
          <div class="text-white font-semibold mb-1">14 Iulie</div>
          <div class="text-brand-rose text-sm">Maine!</div>
          <div class="mt-3 p-3 bg-dark-800 rounded-xl border border-brand-rose/20">
            <div class="text-white/70 text-xs">"Maine e ziua cea mare! Nu uita biletele..."</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Features under timeline -->
    <div class="grid md:grid-cols-3 gap-6 mt-16 max-w-4xl mx-auto">
      <div class="text-center reveal reveal-delay-1">
        <div class="w-12 h-12 mx-auto rounded-xl bg-whatsapp-green/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-whatsapp-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="text-white font-medium mb-1">Timezone Aware</div>
        <div class="text-white/40 text-sm">Mesajele ajung la 10:00 ora locala a clientului</div>
      </div>
      <div class="text-center reveal reveal-delay-2">
        <div class="w-12 h-12 mx-auto rounded-xl bg-brand-amber/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
        </div>
        <div class="text-white font-medium mb-1">Intervale Configurabile</div>
        <div class="text-white/40 text-sm">Setezi D-7, D-3, D-1 sau ce intervale vrei</div>
      </div>
      <div class="text-center reveal reveal-delay-3">
        <div class="w-12 h-12 mx-auto rounded-xl bg-brand-violet/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
        </div>
        <div class="text-white font-medium mb-1">Programare in Masa</div>
        <div class="text-white/40 text-sm">Un click pentru toti participantii</div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== COMPLIANCE ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest">Conformitate</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">GDPR compliant<br><span class="text-gradient animate-shimmer">by design</span></h2>
    </div>

    <div class="grid lg:grid-cols-2 gap-8 items-center">
      <!-- Features List -->
      <div class="space-y-6 reveal">
        <div class="flex gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <div>
            <div class="text-white font-semibold mb-1">Gestionare Opt-in/Opt-out</div>
            <div class="text-white/50 text-sm">Consimtamantul clientului este cerut si respectat. Renuntarea e instantanee pe toate canalele.</div>
          </div>
        </div>

        <div class="flex gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <div>
            <div class="text-white font-semibold mb-1">Jurnal Complet de Audit</div>
            <div class="text-white/50 text-sm">Fiecare mesaj, fiecare consimtamant, fiecare modificare - totul este inregistrat pentru conformitate.</div>
          </div>
        </div>

        <div class="flex gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
          </div>
          <div>
            <div class="text-white font-semibold mb-1">Template-uri Pre-aprobate</div>
            <div class="text-white/50 text-sm">Toate template-urile trec prin flux de aprobare BSP inainte de a fi folosite.</div>
          </div>
        </div>

        <div class="flex gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          </div>
          <div>
            <div class="text-white font-semibold mb-1">Validare E.164</div>
            <div class="text-white/50 text-sm">Numerele de telefon sunt validate in format international inainte de trimitere.</div>
          </div>
        </div>
      </div>

      <!-- Providers -->
      <div class="reveal reveal-delay-1">
        <div class="bg-gradient-to-br from-whatsapp-green/10 to-whatsapp-teal/10 rounded-3xl p-8 border border-white/10">
          <h3 class="text-xl font-semibold text-white mb-6">Furnizori Suportati</h3>
          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-[#0DC153]/20 flex items-center justify-center">
                <span class="text-[#0DC153] font-bold text-sm">360</span>
              </div>
              <div class="flex-1">
                <div class="text-white font-medium">360dialog</div>
                <div class="text-white/40 text-sm">Official WhatsApp BSP</div>
              </div>
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-[#F22F46]/20 flex items-center justify-center">
                <span class="text-[#F22F46] font-bold text-sm">tw</span>
              </div>
              <div class="flex-1">
                <div class="text-white font-medium">Twilio</div>
                <div class="text-white/40 text-sm">Global Communications Platform</div>
              </div>
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-white/5 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-[#0866FF]/20 flex items-center justify-center">
                <span class="text-[#0866FF] font-bold text-sm">M</span>
              </div>
              <div class="flex-1">
                <div class="text-white font-medium">Meta Cloud API</div>
                <div class="text-white/40 text-sm">Direct from Meta</div>
              </div>
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
          </div>

          <div class="mt-6 p-4 rounded-xl bg-whatsapp-green/10 border border-whatsapp-green/20">
            <div class="flex items-center gap-2 text-whatsapp-green text-sm">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
              <span>Failover automat intre furnizori</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== SETUP ==================== -->
<section class="py-24 relative">
  <div class="absolute w-[400px] h-[400px] bg-whatsapp-green/20 rounded-full top-1/3 -left-40 blur-[120px] pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-green text-sm font-medium uppercase tracking-widest">Setup</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Configurare in<br><span class="text-gradient-whatsapp animate-shimmer">3 pasi simpli</span></h2>
    </div>

    <!-- Steps -->
    <div class="max-w-3xl mx-auto">
      <div class="space-y-8">
        <!-- Step 1 -->
        <div class="flex gap-6 reveal">
          <div class="flex-shrink-0">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-whatsapp-green to-whatsapp-teal flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-whatsapp-green/30">1</div>
          </div>
          <div class="flex-1 pb-8 border-b border-white/10">
            <h3 class="text-xl font-semibold text-white mb-2">Conecteaza WhatsApp Business</h3>
            <p class="text-white/50 mb-4">Alegi furnizorul preferat (360dialog, Twilio sau Meta) si introduci credentialele API. Noi ne ocupam de configurare.</p>
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-lg bg-white/5 border border-white/10">
              <svg class="w-5 h-5 text-whatsapp-green" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
              <span class="text-white/70 text-sm">WhatsApp Business API</span>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="flex gap-6 reveal reveal-delay-1">
          <div class="flex-shrink-0">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet to-purple-600 flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-brand-violet/30">2</div>
          </div>
          <div class="flex-1 pb-8 border-b border-white/10">
            <h3 class="text-xl font-semibold text-white mb-2">Creeaza template-uri</h3>
            <p class="text-white/50 mb-4">Foloseste template-urile noastre pre-definite sau creeaza-ti propriile. Le trimitem pentru aprobare BSP automat.</p>
            <div class="flex flex-wrap gap-2">
              <span class="px-3 py-1 rounded-full bg-white/10 text-white/60 text-sm">{first_name}</span>
              <span class="px-3 py-1 rounded-full bg-white/10 text-white/60 text-sm">{event_name}</span>
              <span class="px-3 py-1 rounded-full bg-white/10 text-white/60 text-sm">{ticket_type}</span>
              <span class="px-3 py-1 rounded-full bg-white/10 text-white/60 text-sm">{discount_code}</span>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="flex gap-6 reveal reveal-delay-2">
          <div class="flex-shrink-0">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green to-emerald-600 flex items-center justify-center text-white font-display font-bold text-xl shadow-lg shadow-brand-green/30">3</div>
          </div>
          <div class="flex-1">
            <h3 class="text-xl font-semibold text-white mb-2">Activeaza si monitorizeaza</h3>
            <p class="text-white/50 mb-4">Mesajele se trimit automat. Urmareste livrarile, citirile si costurile in timp real din dashboard.</p>
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-whatsapp-green/10 text-whatsapp-green text-sm border border-whatsapp-green/20">
              <div class="w-2 h-2 rounded-full bg-whatsapp-green animate-pulse"></div>
              Mesaje in timp real
            </div>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <div class="mt-12 text-center reveal reveal-delay-3">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn-whatsapp text-lg">
          Activeaza WhatsApp acum
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <p class="text-white/30 text-sm mt-4">Platesti doar pentru mesajele trimise</p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== TESTIMONIAL ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-4xl mx-auto px-6 lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="bg-gradient-to-br from-whatsapp-green/10 to-whatsapp-teal/10 rounded-3xl p-8 md:p-12 border border-white/10">
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
          "Am trecut de la email la WhatsApp si participarea la evenimente a crescut cu 35%. <span class="text-whatsapp-green font-semibold">Oamenii chiar citesc mesajele.</span> Reminderele D-1 au redus no-show-urile la jumatate."
        </blockquote>
        <!-- Author -->
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-full bg-gradient-to-br from-whatsapp-green to-whatsapp-teal"></div>
          <div>
            <div class="font-semibold text-white">Alexandra M.</div>
            <div class="text-white/50">Event Manager, Festival Booking</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FINAL CTA ==================== -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-whatsapp-green/20 via-transparent to-whatsapp-teal/20"></div>
  <div class="absolute w-[800px] h-[800px] bg-whatsapp-green/30 rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[120px] pointer-events-none"></div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
    <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Comunica<br><span class="text-gradient-whatsapp animate-shimmer">direct</span></h2>
    <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">98% open rate. 3 minute timp de raspuns. Mesajele tale chiar se citesc.</p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn-whatsapp text-lg px-10">
        Activeaza WhatsApp
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
        Intrebari? Contacteaza-ne
      </a>
    </div>

    <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">Functioneaza cu 360dialog, Twilio si Meta Cloud API</p>
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
