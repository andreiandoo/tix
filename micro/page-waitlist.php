<?php
/**
 * Template Name: Micro - Waitlist
 * Description: Landing page for Waitlist Management feature
 */

get_header();

// Language detection (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Translations array
$t = [
    // Hero section
    'badge'              => $current_lang === 'ro' ? 'Lista de Asteptare Inteligenta' : 'Smart Waitlist',
    'hero_title_1'       => 'Sold out?',
    'hero_title_2'       => $current_lang === 'ro' ? 'Nicio problema.' : 'No problem.',
    'hero_desc'          => $current_lang === 'ro' ? 'Transforma dezamagirea "sold out" in vanzari viitoare. Capteaza interesul, notifica instant, <strong class="text-white">converteste automat</strong> cand biletele devin disponibile.' : 'Transform "sold out" disappointment into future sales. Capture interest, notify instantly, <strong class="text-white">auto-convert</strong> when tickets become available.',
    'cta_activate'       => $current_lang === 'ro' ? 'Activeaza Waitlist' : 'Activate Waitlist',
    'cta_how'            => $current_lang === 'ro' ? 'Cum functioneaza' : 'How it works',
    'stat_conversion'    => $current_lang === 'ro' ? 'Rata conversie' : 'Conversion rate',
    'stat_window'        => $current_lang === 'ro' ? 'Fereastra achizitie' : 'Purchase window',
    'stat_max'           => $current_lang === 'ro' ? 'Max. lista' : 'Max list',

    // Hero mockup
    'waiting'            => $current_lang === 'ro' ? 'in asteptare' : 'waiting',
    'position_in_queue'  => $current_lang === 'ro' ? 'Pozitia ta in coada' : 'Your position in queue',
    'advancing'          => $current_lang === 'ro' ? 'Avansezi' : 'Advancing',
    'of'                 => $current_lang === 'ro' ? 'din' : 'of',
    'progress'           => $current_lang === 'ro' ? 'Progres' : 'Progress',
    'queue_realtime'     => $current_lang === 'ro' ? 'Coada in timp real' : 'Queue in real time',
    'you'                => $current_lang === 'ro' ? 'Tu' : 'You',
    'vip_ticket'         => $current_lang === 'ro' ? 'Bilet VIP' : 'VIP Ticket',
    'tickets_each'       => $current_lang === 'ro' ? '2 bilete - 150 EUR/buc' : '2 tickets - 150 EUR each',
    'pref_saved'         => $current_lang === 'ro' ? 'Preferinta salvata' : 'Preference saved',
    'your_turn'          => $current_lang === 'ro' ? 'E randul tau!' : 'It\'s your turn!',
    'tickets_avail'      => $current_lang === 'ro' ? 'Biletele sunt disponibile. Ai 2 ore sa finalizezi achizitia.' : 'Tickets are available. You have 2 hours to complete purchase.',
    'time_remaining'     => $current_lang === 'ro' ? 'Timp ramas:' : 'Time remaining:',
    'buy_now'            => $current_lang === 'ro' ? 'Cumpara Acum' : 'Buy Now',
    'notif_sent'         => $current_lang === 'ro' ? 'Notificare trimisa' : 'Notification sent',
    'email_sms'          => 'Email + SMS',

    // Problem section
    'problem'            => $current_lang === 'ro' ? 'Problema' : 'Problem',
    'problem_title_1'    => $current_lang === 'ro' ? 'Sold out = ' : 'Sold out = ',
    'problem_title_2'    => $current_lang === 'ro' ? 'Clienti pierduti?' : 'Lost customers?',
    'problem_desc'       => $current_lang === 'ro' ? 'Fara lista de asteptare, pierzi clienti entuziasti care ar fi platit.' : 'Without a waitlist, you lose enthusiastic customers who would have paid.',
    'without_waitlist'   => $current_lang === 'ro' ? 'Fara Lista de Asteptare' : 'Without Waitlist',
    'with_waitlist'      => $current_lang === 'ro' ? 'Cu Lista de Asteptare' : 'With Waitlist',
    'interested_client'  => $current_lang === 'ro' ? 'Client interesat' : 'Interested customer',
    'wants_vip'          => $current_lang === 'ro' ? 'Vrea 2 bilete VIP' : 'Wants 2 VIP tickets',
    'client_leaves'      => $current_lang === 'ro' ? 'Client pleaca' : 'Customer leaves',
    'loss'               => $current_lang === 'ro' ? 'pierdere' : 'loss',
    'when_available'     => $current_lang === 'ro' ? 'Cand biletele devin disponibile din returnari... nimeni nu mai stie.' : 'When tickets become available from returns... nobody knows.',
    'joins_list'         => $current_lang === 'ro' ? 'Se inscrie pe lista - Pozitia #23' : 'Joins waitlist - Position #23',
    'ticket_returned'    => $current_lang === 'ro' ? 'Bilet returnat' : 'Ticket returned',
    'instant_notif'      => $current_lang === 'ro' ? 'Notificare instant' : 'Instant notification',
    'emails_sent'        => $current_lang === 'ro' ? 'Email + SMS trimise' : 'Email + SMS sent',
    'purchase_complete'  => $current_lang === 'ro' ? 'Achizitie finalizata' : 'Purchase completed',

    // How it works section
    'how_works'          => $current_lang === 'ro' ? 'Cum Functioneaza' : 'How It Works',
    'flow_title_1'       => $current_lang === 'ro' ? 'Fluxul complet' : 'The complete flow',
    'flow_title_2'       => $current_lang === 'ro' ? 'automatizat' : 'automated',
    'flow_desc'          => $current_lang === 'ro' ? 'De la sold-out la vanzare, fara interventie manuala.' : 'From sold-out to sale, without manual intervention.',
    'step1_title'        => 'Sold Out',
    'step1_desc'         => $current_lang === 'ro' ? 'Evenimentul face sold-out. Lista de asteptare se activeaza automat.' : 'Event sells out. Waitlist activates automatically.',
    'auto_activation'    => $current_lang === 'ro' ? 'Activare automata' : 'Auto activation',
    'step2_title'        => $current_lang === 'ro' ? 'Inscriere' : 'Sign Up',
    'step2_desc'         => $current_lang === 'ro' ? 'Clientii se inscriu cu preferinte: tip bilet, cantitate. Primesc pozitia in coada.' : 'Customers sign up with preferences: ticket type, quantity. They receive queue position.',
    'prefs_saved'        => $current_lang === 'ro' ? 'Preferinte salvate' : 'Preferences saved',
    'step3_title'        => $current_lang === 'ro' ? 'Notificare' : 'Notification',
    'step3_desc'         => $current_lang === 'ro' ? 'Cand biletele devin disponibile, sistemul notifica instant prin email si SMS.' : 'When tickets become available, the system notifies instantly via email and SMS.',
    'step4_title'        => $current_lang === 'ro' ? 'Conversie' : 'Conversion',
    'step4_desc'         => $current_lang === 'ro' ? 'Clientul are o fereastra de timp sa cumpere. Daca nu, urmatorul primeste sansa.' : 'Customer has a time window to purchase. If not, next in line gets the chance.',
    'window_2h'          => $current_lang === 'ro' ? 'Fereastra 2h' : '2h window',

    // Features section
    'features'           => $current_lang === 'ro' ? 'Functionalitati' : 'Features',
    'feat_title_1'       => $current_lang === 'ro' ? 'Tot ce ai nevoie' : 'Everything you need',
    'feat_title_2'       => $current_lang === 'ro' ? 'pentru conversie' : 'for conversion',
    'feat1_title'        => $current_lang === 'ro' ? 'Activare Automata' : 'Auto Activation',
    'feat1_desc'         => $current_lang === 'ro' ? 'Lista se activeaza automat cand evenimentul face sold-out. Zero configurare manuala.' : 'List activates automatically when event sells out. Zero manual configuration.',
    'feat2_title'        => $current_lang === 'ro' ? 'Afisare Pozitie' : 'Position Display',
    'feat2_desc'         => $current_lang === 'ro' ? 'Clientii vad pozitia lor in timp real. Transparenta construieste incredere si engagement.' : 'Customers see their position in real-time. Transparency builds trust and engagement.',
    'feat3_title'        => $current_lang === 'ro' ? 'Notificari Duale' : 'Dual Notifications',
    'feat3_desc'         => $current_lang === 'ro' ? 'Email si SMS simultan. Maximizeaza sansele ca mesajul sa ajunga la client.' : 'Email and SMS simultaneously. Maximizes chances the message reaches the customer.',
    'feat4_title'        => $current_lang === 'ro' ? 'Ferestre de Timp' : 'Time Windows',
    'feat4_desc'         => $current_lang === 'ro' ? 'Creeaza urgenta cu limite de timp. Daca nu cumpara, urmatorul primeste sansa.' : 'Create urgency with time limits. If they don\'t buy, the next person gets the chance.',
    'feat5_title'        => $current_lang === 'ro' ? 'Prioritate VIP' : 'VIP Priority',
    'feat5_desc'         => $current_lang === 'ro' ? 'Membrii VIP si de loialitate primesc prioritate. Rasplateste-ti cei mai buni clienti.' : 'VIP and loyalty members get priority. Reward your best customers.',
    'feat6_title'        => $current_lang === 'ro' ? 'Integrare Returnari' : 'Returns Integration',
    'feat6_desc'         => $current_lang === 'ro' ? 'Biletele din returnari curg automat catre lista de asteptare. Zero interventie manuala.' : 'Returned tickets flow automatically to the waitlist. Zero manual intervention.',

    // Priority section
    'priorities'         => $current_lang === 'ro' ? 'Prioritati' : 'Priorities',
    'prio_title_1'       => $current_lang === 'ro' ? 'Regulile tale,' : 'Your rules,',
    'prio_title_2'       => $current_lang === 'ro' ? 'alegerea ta' : 'your choice',
    'prio_desc'          => $current_lang === 'ro' ? 'Alege cum se distribuie biletele: echitabil, VIP first, sau primul-venit-primul-servit.' : 'Choose how tickets are distributed: fair, VIP first, or first-come-first-served.',
    'fair_title'         => $current_lang === 'ro' ? 'Distributie Echitabila' : 'Fair Distribution',
    'fair_desc'          => $current_lang === 'ro' ? 'Algoritm care asigura sanse egale pentru toti. Perfect pentru evenimente cu audiente diverse.' : 'Algorithm ensuring equal chances for everyone. Perfect for events with diverse audiences.',
    'vip_title'          => $current_lang === 'ro' ? 'Prioritate VIP' : 'VIP Priority',
    'vip_desc'           => $current_lang === 'ro' ? 'Membrii VIP si de loialitate primesc prioritate. Rasplateste-ti clientii fideli.' : 'VIP and loyalty members get priority. Reward your loyal customers.',
    'popular'            => 'POPULAR',
    'vip_member'         => 'VIP Member',
    'priority'           => 'PRIORITY',
    'loyalty_member'     => 'Loyalty Member',
    'standard'           => 'Standard',
    'normal'             => 'Normal',
    'fcfs_title'         => $current_lang === 'ro' ? 'Primul-Venit' : 'First-Come',
    'fcfs_desc'          => $current_lang === 'ro' ? 'Strict dupa ordinea inscrierii. Simplu, transparent, usor de inteles pentru toti.' : 'Strictly by signup order. Simple, transparent, easy to understand for everyone.',
    'signed_up'          => $current_lang === 'ro' ? 'Inscris:' : 'Signed up:',
    'next'               => 'NEXT',
    'waiting_label'      => 'Waiting',

    // Testimonial section
    'testimonial_quote'  => $current_lang === 'ro' ? 'Am facut sold-out in 2 ore. Dar lista de asteptare ne-a adus inca <span class="text-waitlist-orange font-semibold">12.000 EUR din returnari</span>. Oamenii care altfel ar fi plecat au cumparat cand au aparut bilete. Magic.' : 'We sold out in 2 hours. But the waitlist brought us another <span class="text-waitlist-orange font-semibold">12,000 EUR from returns</span>. People who would have left bought when tickets appeared. Magic.',
    'testimonial_author' => 'Dan M.',
    'testimonial_role'   => $current_lang === 'ro' ? 'Organizator, Electric Castle' : 'Organizer, Electric Castle',

    // Final CTA section
    'final_title_1'      => $current_lang === 'ro' ? 'Nu mai pierde' : 'Don\'t lose',
    'final_title_2'      => $current_lang === 'ro' ? 'nicio vanzare' : 'any more sales',
    'final_desc'         => $current_lang === 'ro' ? 'Sold out nu mai inseamna clienti pierduti. Capteaza-i, notifica-i, converteste-i.' : 'Sold out no longer means lost customers. Capture them, notify them, convert them.',
    'cta_questions'      => $current_lang === 'ro' ? 'Intrebari? Contacteaza-ne' : 'Questions? Contact us',
    'footer_note'        => $current_lang === 'ro' ? 'Inclus gratuit in toate planurile. Notificari email + SMS. Max 10.000 per lista.' : 'Included free in all plans. Email + SMS notifications. Max 10,000 per list.',
];
?>

<style>
  /* Selection */
  ::selection { background: #F97316; color: white; }

  /* Text gradients */
  .text-gradient {
    @apply bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-cyan-400 to-purple-400 bg-[length:200%_auto] animate-shimmer;
  }
  .text-gradient-waitlist {
    background: linear-gradient(135deg, #F97316 0%, #FBBF24 50%, #EAB308 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shimmer 3s linear infinite;
  }
  .text-gradient-urgent {
    background: linear-gradient(135deg, #F97316 0%, #EF4444 50%, #F97316 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shimmer 2s linear infinite;
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
    background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(249, 115, 22, 0.15), transparent 50%);
  }
  .feature-card:hover::before { @apply opacity-100; }

  /* Queue person styles */
  .queue-person {
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }

  /* Position badge */
  .position-badge {
    font-variant-numeric: tabular-nums;
  }

  /* Timer countdown style */
  .timer-digit {
    font-variant-numeric: tabular-nums;
    text-shadow: 0 0 30px rgba(249, 115, 22, 0.5);
  }

  /* Progress bar */
  .progress-bar {
    background: linear-gradient(90deg, #F97316, #FBBF24, #EAB308);
    background-size: 200% 100%;
    animation: shimmer 2s linear infinite;
  }

  /* VIP badge glow */
  .vip-glow {
    box-shadow: 0 0 20px rgba(251, 191, 36, 0.5), inset 0 0 20px rgba(251, 191, 36, 0.1);
  }

  /* Sold out badge */
  .sold-out-badge {
    background: linear-gradient(135deg, #EF4444, #DC2626);
    animation: pulse 2s ease-in-out infinite;
  }

  /* Bell animation */
  @keyframes bellRing {
    0%, 100% { transform: rotate(0); }
    10%, 30%, 50% { transform: rotate(10deg); }
    20%, 40% { transform: rotate(-10deg); }
    60% { transform: rotate(0); }
  }
  .bell-animate {
    animation: bellRing 1s ease-in-out;
  }

  /* Urgency pulse */
  @keyframes countdown {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
  }
  .urgency-pulse {
    animation: countdown 1s ease-in-out infinite;
  }

  /* Queue move animation */
  @keyframes queueMove {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
  }

  /* Waitlist button */
  .btn-waitlist {
    @apply inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-waitlist-orange to-waitlist-amber text-white transition-all duration-300;
  }
  .btn-waitlist:hover {
    @apply scale-105 shadow-glow-orange;
  }
</style>

<!-- ==================== HERO ==================== -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
  <!-- Background Effects -->
  <div class="absolute w-[700px] h-[700px] bg-waitlist-orange/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[500px] h-[500px] bg-waitlist-amber/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[300px] h-[300px] bg-brand-rose/10 rounded-full top-1/3 left-1/4 blur-[120px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Hero Content -->
      <div class="reveal">
        <!-- Badge -->
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-waitlist-orange/10 border border-waitlist-orange/20 mb-6">
          <svg class="w-5 h-5 text-waitlist-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
          <span class="text-waitlist-orange text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
        </div>

        <!-- Heading -->
        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
          <?php echo esc_html( $t['hero_title_1'] ); ?><br><span class="text-gradient-waitlist"><?php echo esc_html( $t['hero_title_2'] ); ?></span>
        </h1>

        <!-- Description -->
        <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
          <?php echo $t['hero_desc']; ?>
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn-waitlist">
            <?php echo esc_html( $t['cta_activate'] ); ?>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#cum-functioneaza" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
            <?php echo esc_html( $t['cta_how'] ); ?>
          </a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-6">
          <div>
            <div class="text-3xl font-display font-bold text-waitlist-orange">87%</div>
            <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_conversion'] ); ?></div>
          </div>
          <div>
            <div class="text-3xl font-display font-bold text-white">2h</div>
            <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_window'] ); ?></div>
          </div>
          <div>
            <div class="text-3xl font-display font-bold text-white">10k+</div>
            <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_max'] ); ?></div>
          </div>
        </div>
      </div>

      <!-- Hero Visual - Queue Mockup -->
      <div class="reveal reveal-delay-1">
        <div class="relative" x-data="{
          position: 3,
          showNotification: false,
          timer: { h: 1, m: 45, s: 32 }
        }" x-init="
          setInterval(() => {
            if (position > 1) {
              position--;
              if (position === 1) {
                setTimeout(() => showNotification = true, 500);
              }
            }
          }, 4000);
          setInterval(() => {
            if (timer.s > 0) timer.s--;
            else if (timer.m > 0) { timer.m--; timer.s = 59; }
            else if (timer.h > 0) { timer.h--; timer.m = 59; timer.s = 59; }
          }, 1000);
        ">
          <!-- Main Card -->
          <div class="bg-dark-800/80 backdrop-blur-xl rounded-3xl p-6 border border-white/10 shadow-2xl">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="sold-out-badge px-3 py-1 rounded-full text-white text-xs font-bold">
                  SOLD OUT
                </div>
                <div class="text-white font-semibold">Summer Festival 2025</div>
              </div>
              <div class="flex items-center gap-2 text-waitlist-amber text-sm">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span>847 <?php echo esc_html( $t['waiting'] ); ?></span>
              </div>
            </div>

            <!-- Your Position Card -->
            <div class="bg-gradient-to-br from-waitlist-orange/20 to-waitlist-amber/10 rounded-2xl p-5 border border-waitlist-orange/20 mb-6">
              <div class="flex items-center justify-between mb-4">
                <div class="text-white/60 text-sm"><?php echo esc_html( $t['position_in_queue'] ); ?></div>
                <div class="flex items-center gap-1">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                  <span class="text-brand-green text-sm"><?php echo esc_html( $t['advancing'] ); ?></span>
                </div>
              </div>
              <div class="flex items-end gap-4">
                <div class="text-6xl font-display font-bold text-white position-badge" x-text="'#' + position">#3</div>
                <div class="text-white/40 text-sm mb-2"><?php echo esc_html( $t['of'] ); ?> 847</div>
              </div>

              <!-- Progress bar -->
              <div class="mt-4">
                <div class="flex justify-between text-xs text-white/40 mb-2">
                  <span><?php echo esc_html( $t['progress'] ); ?></span>
                  <span x-text="Math.round((847 - position) / 847 * 100) + '%'">99%</span>
                </div>
                <div class="h-2 bg-white/10 rounded-full overflow-hidden">
                  <div class="h-full progress-bar rounded-full transition-all duration-1000" :style="'width: ' + ((847 - position) / 847 * 100) + '%'"></div>
                </div>
              </div>
            </div>

            <!-- Queue Visualization -->
            <div class="relative mb-6">
              <div class="text-white/40 text-xs uppercase tracking-wider mb-3"><?php echo esc_html( $t['queue_realtime'] ); ?></div>
              <div class="flex items-center gap-3 overflow-hidden">
                <div class="flex items-center gap-2">
                  <!-- Current user -->
                  <div class="relative queue-person" :class="position === 1 ? 'scale-110' : ''">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-waitlist-orange to-waitlist-amber flex items-center justify-center border-2 border-white shadow-lg">
                      <span class="text-white font-bold text-sm"><?php echo esc_html( $t['you'] ); ?></span>
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full bg-dark-800 border border-waitlist-orange flex items-center justify-center">
                      <span class="text-waitlist-orange text-[10px] font-bold" x-text="position">3</span>
                    </div>
                  </div>

                  <!-- Arrow -->
                  <svg class="w-6 h-6 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>

                  <!-- Other people -->
                  <template x-for="i in Math.min(position - 1, 3)" :key="i">
                    <div class="queue-person">
                      <div class="w-10 h-10 rounded-full bg-dark-600 flex items-center justify-center border border-white/10">
                        <svg class="w-5 h-5 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                      </div>
                    </div>
                  </template>

                  <!-- Ticket icon -->
                  <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center border border-brand-green/30">
                    <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
                  </div>
                </div>
              </div>
            </div>

            <!-- Preference -->
            <div class="flex items-center justify-between p-3 rounded-xl bg-white/5 border border-white/10">
              <div>
                <div class="text-white text-sm font-medium"><?php echo esc_html( $t['vip_ticket'] ); ?></div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['tickets_each'] ); ?></div>
              </div>
              <div class="text-brand-green text-sm flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <?php echo esc_html( $t['pref_saved'] ); ?>
              </div>
            </div>
          </div>

          <!-- Notification Popup -->
          <div x-show="showNotification" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-x-20" x-transition:enter-end="opacity-100 translate-x-0" class="absolute -top-4 -right-4 bg-dark-800 rounded-2xl p-4 border border-brand-green/30 shadow-2xl shadow-brand-green/20 z-10 max-w-[280px]">
            <div class="flex items-start gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-green/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-brand-green bell-animate" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold text-sm"><?php echo esc_html( $t['your_turn'] ); ?></div>
                <div class="text-white/60 text-xs mt-1"><?php echo esc_html( $t['tickets_avail'] ); ?></div>
              </div>
            </div>
            <!-- Timer -->
            <div class="mt-3 p-2 rounded-lg bg-waitlist-orange/10 border border-waitlist-orange/20">
              <div class="flex items-center justify-between">
                <span class="text-waitlist-orange text-xs"><?php echo esc_html( $t['time_remaining'] ); ?></span>
                <div class="flex items-center gap-1 font-mono">
                  <span class="text-white font-bold timer-digit" x-text="String(timer.h).padStart(2, '0')">01</span>
                  <span class="text-white/40">:</span>
                  <span class="text-white font-bold timer-digit" x-text="String(timer.m).padStart(2, '0')">45</span>
                  <span class="text-white/40">:</span>
                  <span class="text-white font-bold timer-digit urgency-pulse" x-text="String(timer.s).padStart(2, '0')">32</span>
                </div>
              </div>
            </div>
            <button class="w-full mt-3 px-4 py-2 rounded-lg bg-brand-green text-white font-semibold text-sm hover:bg-brand-green/90 transition-colors">
              <?php echo esc_html( $t['buy_now'] ); ?>
            </button>
          </div>

          <!-- Floating badge -->
          <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-waitlist-amber/20 shadow-xl animate-float z-10">
            <div class="flex items-center gap-2">
              <div class="text-2xl">📧</div>
              <div>
                <div class="text-white text-sm font-medium"><?php echo esc_html( $t['notif_sent'] ); ?></div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['email_sms'] ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== THE PROBLEM ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-rose text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['problem'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['problem_title_1'] ); ?><br><span class="text-brand-rose"><?php echo esc_html( $t['problem_title_2'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['problem_desc'] ); ?></p>
    </div>

    <!-- Before/After -->
    <div class="grid lg:grid-cols-2 gap-8">
      <!-- Before -->
      <div class="reveal">
        <div class="bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-3xl p-8 border border-brand-rose/20 h-full">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </div>
            <span class="text-brand-rose font-semibold"><?php echo esc_html( $t['without_waitlist'] ); ?></span>
          </div>

          <div class="space-y-4">
            <div class="p-4 rounded-xl bg-dark-900/50">
              <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">
                  <svg class="w-5 h-5 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
                <div>
                  <div class="text-white text-sm"><?php echo esc_html( $t['interested_client'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['wants_vip'] ); ?></div>
                </div>
              </div>
              <div class="p-3 rounded-lg bg-brand-rose/10 border border-brand-rose/20 text-center">
                <span class="text-brand-rose text-sm">SOLD OUT</span>
              </div>
            </div>

            <div class="flex items-center justify-center gap-2 text-white/30">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </div>

            <div class="p-4 rounded-xl bg-dark-900/50">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-brand-rose/20 flex items-center justify-center">
                  <svg class="w-5 h-5 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                </div>
                <div>
                  <div class="text-white/50 text-sm"><?php echo esc_html( $t['client_leaves'] ); ?></div>
                  <div class="text-brand-rose text-xs">-300 EUR <?php echo esc_html( $t['loss'] ); ?></div>
                </div>
              </div>
            </div>

            <div class="mt-4 p-3 rounded-lg bg-brand-rose/5 border border-brand-rose/10">
              <div class="text-brand-rose/70 text-sm text-center"><?php echo esc_html( $t['when_available'] ); ?></div>
            </div>
          </div>
        </div>
      </div>

      <!-- After -->
      <div class="reveal reveal-delay-1">
        <div class="bg-gradient-to-br from-brand-green/10 to-brand-green/5 rounded-3xl p-8 border border-brand-green/20 h-full">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-brand-green font-semibold"><?php echo esc_html( $t['with_waitlist'] ); ?></span>
          </div>

          <div class="space-y-4">
            <div class="p-4 rounded-xl bg-dark-900/50">
              <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-full bg-waitlist-orange/20 flex items-center justify-center">
                  <svg class="w-5 h-5 text-waitlist-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
                <div>
                  <div class="text-white text-sm"><?php echo esc_html( $t['interested_client'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['wants_vip'] ); ?></div>
                </div>
              </div>
              <div class="p-3 rounded-lg bg-waitlist-orange/10 border border-waitlist-orange/20 text-center">
                <span class="text-waitlist-orange text-sm"><?php echo esc_html( $t['joins_list'] ); ?></span>
              </div>
            </div>

            <div class="flex items-center justify-center gap-2 text-white/30">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              <span class="text-xs"><?php echo esc_html( $t['ticket_returned'] ); ?></span>
            </div>

            <div class="p-4 rounded-xl bg-dark-900/50">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-brand-green/20 flex items-center justify-center">
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                </div>
                <div>
                  <div class="text-white text-sm"><?php echo esc_html( $t['instant_notif'] ); ?></div>
                  <div class="text-brand-green text-xs"><?php echo esc_html( $t['emails_sent'] ); ?></div>
                </div>
              </div>
            </div>

            <div class="p-4 rounded-xl bg-brand-green/10 border border-brand-green/20">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  <span class="text-brand-green text-sm font-medium"><?php echo esc_html( $t['purchase_complete'] ); ?></span>
                </div>
                <span class="text-brand-green font-bold">+300 EUR</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== HOW IT WORKS ==================== -->
<section class="py-24 bg-dark-850 relative" id="cum-functioneaza">
  <div class="absolute w-[500px] h-[500px] bg-waitlist-orange/15 rounded-full top-1/2 -right-60 blur-[120px] pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-waitlist-orange text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['how_works'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['flow_title_1'] ); ?><br><span class="text-gradient-waitlist"><?php echo esc_html( $t['flow_title_2'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['flow_desc'] ); ?></p>
    </div>

    <!-- Flow Steps -->
    <div class="relative">
      <!-- Connection Line -->
      <div class="absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-waitlist-orange via-waitlist-amber to-brand-green rounded-full -translate-y-1/2 hidden lg:block"></div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
        <!-- Step 1 -->
        <div class="reveal">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 relative h-full">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-waitlist-orange to-waitlist-amber flex items-center justify-center text-white font-display font-bold text-xl mb-4 shadow-lg shadow-waitlist-orange/30">1</div>
            <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step1_title'] ); ?></h3>
            <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['step1_desc'] ); ?></p>
            <div class="flex items-center gap-2 text-waitlist-orange text-sm">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              <?php echo esc_html( $t['auto_activation'] ); ?>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 relative h-full">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-waitlist-amber to-waitlist-gold flex items-center justify-center text-white font-display font-bold text-xl mb-4 shadow-lg shadow-waitlist-amber/30">2</div>
            <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step2_title'] ); ?></h3>
            <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['step2_desc'] ); ?></p>
            <div class="flex items-center gap-2 text-waitlist-amber text-sm">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
              <?php echo esc_html( $t['prefs_saved'] ); ?>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="reveal reveal-delay-2">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 relative h-full">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-cyan to-brand-violet flex items-center justify-center text-white font-display font-bold text-xl mb-4 shadow-lg shadow-brand-cyan/30">3</div>
            <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step3_title'] ); ?></h3>
            <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['step3_desc'] ); ?></p>
            <div class="flex items-center gap-2 text-brand-cyan text-sm">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
              <?php echo esc_html( $t['email_sms'] ); ?>
            </div>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="reveal reveal-delay-3">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10 relative h-full">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-green to-emerald-600 flex items-center justify-center text-white font-display font-bold text-xl mb-4 shadow-lg shadow-brand-green/30">4</div>
            <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step4_title'] ); ?></h3>
            <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['step4_desc'] ); ?></p>
            <div class="flex items-center gap-2 text-brand-green text-sm">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <?php echo esc_html( $t['window_2h'] ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FEATURES ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="absolute w-[400px] h-[400px] bg-brand-violet/15 rounded-full top-1/3 -left-40 blur-[120px] pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-violet text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['features'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['feat_title_1'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['feat_title_2'] ); ?></span></h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Feature 1: Auto Activation -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-waitlist-orange/30 transition-all duration-500 reveal">
        <div class="w-14 h-14 rounded-2xl bg-waitlist-orange/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-waitlist-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['feat1_title'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['feat1_desc'] ); ?></p>
      </div>

      <!-- Feature 2: Position Display -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-cyan/30 transition-all duration-500 reveal reveal-delay-1">
        <div class="w-14 h-14 rounded-2xl bg-brand-cyan/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['feat2_title'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['feat2_desc'] ); ?></p>
      </div>

      <!-- Feature 3: Dual Notifications -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal reveal-delay-2">
        <div class="w-14 h-14 rounded-2xl bg-brand-violet/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['feat3_title'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['feat3_desc'] ); ?></p>
      </div>

      <!-- Feature 4: Time Windows -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-rose/30 transition-all duration-500 reveal reveal-delay-3">
        <div class="w-14 h-14 rounded-2xl bg-brand-rose/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['feat4_title'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['feat4_desc'] ); ?></p>
      </div>

      <!-- Feature 5: VIP Priority -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-waitlist-amber/30 transition-all duration-500 reveal reveal-delay-4">
        <div class="w-14 h-14 rounded-2xl bg-waitlist-amber/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-waitlist-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['feat5_title'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['feat5_desc'] ); ?></p>
      </div>

      <!-- Feature 6: Returns Integration -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-green/30 transition-all duration-500 reveal reveal-delay-5">
        <div class="w-14 h-14 rounded-2xl bg-brand-green/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['feat6_title'] ); ?></h3>
        <p class="text-white/50 text-sm"><?php echo esc_html( $t['feat6_desc'] ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== PRIORITY TIERS ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-waitlist-amber text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['priorities'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['prio_title_1'] ); ?><br><span class="text-gradient-waitlist"><?php echo esc_html( $t['prio_title_2'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['prio_desc'] ); ?></p>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">
      <!-- Fair Distribution -->
      <div class="reveal">
        <div class="bg-dark-800 rounded-3xl p-8 border border-white/10 h-full hover:border-brand-cyan/30 transition-all duration-300">
          <div class="w-16 h-16 rounded-2xl bg-brand-cyan/20 flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
          </div>
          <h3 class="text-2xl font-semibold text-white mb-4"><?php echo esc_html( $t['fair_title'] ); ?></h3>
          <p class="text-white/50 mb-6"><?php echo esc_html( $t['fair_desc'] ); ?></p>

          <div class="space-y-3">
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5">
              <div class="w-8 h-8 rounded-full bg-brand-cyan/20 flex items-center justify-center text-brand-cyan text-xs font-bold">#1</div>
              <div class="flex-1"><div class="w-24 h-2 bg-white/20 rounded"></div></div>
              <span class="text-white/40 text-xs">100%</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5">
              <div class="w-8 h-8 rounded-full bg-brand-cyan/20 flex items-center justify-center text-brand-cyan text-xs font-bold">#2</div>
              <div class="flex-1"><div class="w-24 h-2 bg-white/20 rounded"></div></div>
              <span class="text-white/40 text-xs">100%</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5">
              <div class="w-8 h-8 rounded-full bg-brand-cyan/20 flex items-center justify-center text-brand-cyan text-xs font-bold">#3</div>
              <div class="flex-1"><div class="w-24 h-2 bg-white/20 rounded"></div></div>
              <span class="text-white/40 text-xs">100%</span>
            </div>
          </div>
        </div>
      </div>

      <!-- VIP Priority -->
      <div class="reveal reveal-delay-1">
        <div class="bg-gradient-to-br from-waitlist-amber/10 to-waitlist-gold/10 rounded-3xl p-8 border border-waitlist-amber/30 h-full relative overflow-hidden">
          <div class="absolute top-4 right-4 px-3 py-1 bg-gradient-to-r from-waitlist-amber to-waitlist-gold text-dark-900 text-xs font-bold rounded-full">POPULAR</div>

          <div class="w-16 h-16 rounded-2xl bg-waitlist-amber/20 flex items-center justify-center mb-6 vip-glow">
            <svg class="w-8 h-8 text-waitlist-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
          </div>
          <h3 class="text-2xl font-semibold text-white mb-4"><?php echo esc_html( $t['vip_title'] ); ?></h3>
          <p class="text-white/50 mb-6"><?php echo esc_html( $t['vip_desc'] ); ?></p>

          <div class="space-y-3">
            <div class="flex items-center gap-3 p-3 rounded-xl bg-waitlist-amber/10 border border-waitlist-amber/20">
              <div class="w-8 h-8 rounded-full bg-gradient-to-br from-waitlist-amber to-waitlist-gold flex items-center justify-center text-dark-900 text-xs font-bold">👑</div>
              <div class="flex-1"><div class="text-waitlist-amber text-xs font-medium">VIP Member</div></div>
              <span class="text-waitlist-amber text-xs font-bold">PRIORITY</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5">
              <div class="w-8 h-8 rounded-full bg-brand-violet/20 flex items-center justify-center text-brand-violet text-xs font-bold">⭐</div>
              <div class="flex-1"><div class="text-white/60 text-xs">Loyalty Member</div></div>
              <span class="text-white/40 text-xs">+50%</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5">
              <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white/40 text-xs font-bold">#3</div>
              <div class="flex-1"><div class="text-white/40 text-xs">Standard</div></div>
              <span class="text-white/40 text-xs">Normal</span>
            </div>
          </div>
        </div>
      </div>

      <!-- First Come First Served -->
      <div class="reveal reveal-delay-2">
        <div class="bg-dark-800 rounded-3xl p-8 border border-white/10 h-full hover:border-brand-green/30 transition-all duration-300">
          <div class="w-16 h-16 rounded-2xl bg-brand-green/20 flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </div>
          <h3 class="text-2xl font-semibold text-white mb-4"><?php echo esc_html( $t['fcfs_title'] ); ?></h3>
          <p class="text-white/50 mb-6"><?php echo esc_html( $t['fcfs_desc'] ); ?></p>

          <div class="space-y-3">
            <div class="flex items-center gap-3 p-3 rounded-xl bg-brand-green/10 border border-brand-green/20">
              <div class="w-8 h-8 rounded-full bg-brand-green/20 flex items-center justify-center text-brand-green text-xs font-bold">#1</div>
              <div class="flex-1"><div class="text-brand-green text-xs">Inscris: 10:01:23</div></div>
              <span class="text-brand-green text-xs">NEXT</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5">
              <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white/40 text-xs font-bold">#2</div>
              <div class="flex-1"><div class="text-white/40 text-xs">Inscris: 10:01:45</div></div>
              <span class="text-white/40 text-xs">Waiting</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5">
              <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white/40 text-xs font-bold">#3</div>
              <div class="flex-1"><div class="text-white/40 text-xs">Inscris: 10:02:12</div></div>
              <span class="text-white/40 text-xs">Waiting</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== TESTIMONIAL ==================== -->
<section class="py-24 relative">
  <div class="max-w-4xl mx-auto px-6 lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="bg-gradient-to-br from-waitlist-orange/10 to-waitlist-amber/10 rounded-3xl p-8 md:p-12 border border-waitlist-orange/20">
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
          "<?php echo $t['testimonial_quote']; ?>"
        </blockquote>
        <!-- Author -->
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-full bg-gradient-to-br from-waitlist-orange to-waitlist-amber"></div>
          <div>
            <div class="font-semibold text-white"><?php echo esc_html( $t['testimonial_author'] ); ?></div>
            <div class="text-white/50"><?php echo esc_html( $t['testimonial_role'] ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FINAL CTA ==================== -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-waitlist-orange/20 via-transparent to-waitlist-amber/20"></div>
  <div class="absolute w-[800px] h-[800px] bg-waitlist-orange/30 rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none"></div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
    <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['final_title_1'] ); ?><br><span class="text-gradient-waitlist"><?php echo esc_html( $t['final_title_2'] ); ?></span></h2>
    <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn-waitlist text-lg px-10">
        <?php echo esc_html( $t['cta_activate'] ); ?>
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
        <?php echo esc_html( $t['cta_questions'] ); ?>
      </a>
    </div>

    <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3"><?php echo esc_html( $t['footer_note'] ); ?></p>
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
