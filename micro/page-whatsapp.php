<?php
/**
 * Template Name: Micro - WhatsApp
 * Description: Landing page for WhatsApp Business API integration
 */

get_header();

$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
    // Hero
    'hero_title'              => $current_lang === 'ro' ? 'Mesaje cu' : 'Messages with',
    'hero_title2'             => '98% open rate',
    'hero_desc'               => $current_lang === 'ro' ? 'Email-urile se pierd in spam. SMS-urile sunt ignorate. <strong class="text-white">WhatsApp-ul se citeste in 3 minute.</strong> Trimite confirmari, remindere si campanii direct pe telefonul clientului.' : 'Emails get lost in spam. SMS are ignored. <strong class="text-white">WhatsApp messages are read within 3 minutes.</strong> Send confirmations, reminders and campaigns directly to customer phones.',
    'cta_activate'            => $current_lang === 'ro' ? 'Activeaza WhatsApp' : 'Activate WhatsApp',
    'cta_how'                 => $current_lang === 'ro' ? 'Vezi cum functioneaza' : 'See how it works',
    'response_time'           => $current_lang === 'ro' ? 'Timp raspuns' : 'Response time',

    // Phone mockup
    'order_confirmed'         => $current_lang === 'ro' ? 'Comanda confirmata!' : 'Order confirmed!',
    'tickets_vip'             => $current_lang === 'ro' ? '2x Bilete VIP' : '2x VIP Tickets',
    'download_tickets'        => $current_lang === 'ro' ? 'Descarca biletele tale:' : 'Download your tickets:',
    'open_tickets'            => $current_lang === 'ro' ? 'Deschide Bilete' : 'Open Tickets',
    'reminder_3_days'         => $current_lang === 'ro' ? 'Reminder: 3 zile ramase!' : 'Reminder: 3 days left!',
    'reminder_desc'           => $current_lang === 'ro' ? 'Summer Festival 2025 incepe in curand. Nu uita sa verifici detaliile de acces!' : 'Summer Festival 2025 starts soon. Don\'t forget to check access details!',
    'delivered'               => $current_lang === 'ro' ? 'Livrat' : 'Delivered',
    'read'                    => $current_lang === 'ro' ? 'Citit' : 'Read',
    'messages_today'          => $current_lang === 'ro' ? 'mesaje azi' : 'messages today',

    // Comparison
    'comparison_badge'        => $current_lang === 'ro' ? 'Comparatie' : 'Comparison',
    'comparison_title'        => $current_lang === 'ro' ? 'De ce WhatsApp' : 'Why WhatsApp',
    'comparison_title2'       => $current_lang === 'ro' ? 'bate email-ul' : 'beats email',
    'response_time_label'     => $current_lang === 'ro' ? 'Timp raspuns' : 'Response time',
    'hours'                   => $current_lang === 'ro' ? 'ore' : 'hours',
    'cost_per_msg'            => $current_lang === 'ro' ? 'Cost / mesaj' : 'Cost / message',
    'email_note'              => $current_lang === 'ro' ? 'Se pierde in spam, promotions tab, sau e ignorat complet.' : 'Gets lost in spam, promotions tab, or is completely ignored.',
    'sms_note'                => $current_lang === 'ro' ? 'Scump, limitat la 160 caractere, fara media sau butoane.' : 'Expensive, limited to 160 characters, no media or buttons.',
    'whatsapp_note'           => $current_lang === 'ro' ? 'Rich media, butoane interactive, confirmari de citire, costuri competitive.' : 'Rich media, interactive buttons, read confirmations, competitive costs.',
    'recommended'             => $current_lang === 'ro' ? 'RECOMANDAT' : 'RECOMMENDED',

    // Message Types
    'msg_types_badge'         => $current_lang === 'ro' ? 'Tipuri de Mesaje' : 'Message Types',
    'msg_types_title'         => $current_lang === 'ro' ? 'Mesajul potrivit' : 'The right message',
    'msg_types_title2'        => $current_lang === 'ro' ? 'la momentul potrivit' : 'at the right time',
    'msg_types_desc'          => $current_lang === 'ro' ? 'Automatizeaza comunicarea pentru fiecare etapa a calatoriei clientului.' : 'Automate communication for every stage of the customer journey.',
    'order_confirm'           => $current_lang === 'ro' ? 'Confirmari Comanda' : 'Order Confirmations',
    'order_confirm_desc'      => $current_lang === 'ro' ? 'Trimise instant dupa achizitie cu toate detaliile: bilete, eveniment, QR code, link descarcare.' : 'Sent instantly after purchase with all details: tickets, event, QR code, download link.',
    'instant_delivery'        => $current_lang === 'ro' ? 'Livrare idempotenta' : 'Idempotent delivery',
    'smart_reminders'         => $current_lang === 'ro' ? 'Remindere Smart' : 'Smart Reminders',
    'smart_reminders_desc'    => $current_lang === 'ro' ? 'Programate automat la D-7, D-3 si D-1. Constiente de fusul orar - ajung la ore potrivite.' : 'Automatically scheduled at D-7, D-3 and D-1. Timezone aware - arrive at appropriate times.',
    'timezone_aware'          => 'Timezone-aware',
    'promo_campaigns'         => $current_lang === 'ro' ? 'Campanii Promo' : 'Promo Campaigns',
    'promo_campaigns_desc'    => $current_lang === 'ro' ? 'Targeteaza segmente specifice cu oferte personalizate. Dry-run pentru testare inainte de trimitere.' : 'Target specific segments with personalized offers. Dry-run for testing before sending.',
    'audience_segmentation'   => $current_lang === 'ro' ? 'Segmentare audienta' : 'Audience segmentation',
    'otp_verification'        => $current_lang === 'ro' ? 'Verificare OTP' : 'OTP Verification',
    'otp_desc'                => $current_lang === 'ro' ? 'Coduri de verificare pentru autentificare si securitate. Livrare instantanee, expirare configurabila.' : 'Verification codes for authentication and security. Instant delivery, configurable expiration.',
    'max_security'            => $current_lang === 'ro' ? 'Securitate maxima' : 'Maximum security',
    'urgent_comms'            => $current_lang === 'ro' ? 'Comunicari Urgente' : 'Urgent Communications',
    'urgent_comms_desc'       => $current_lang === 'ro' ? 'Notifica rapid toti participantii despre schimbari de locatie, amanari sau informatii de siguranta.' : 'Quickly notify all participants about location changes, postponements or safety information.',
    'priority_delivery'       => $current_lang === 'ro' ? 'Livrare prioritara' : 'Priority delivery',
    'smart_templates'         => $current_lang === 'ro' ? 'Template-uri Smart' : 'Smart Templates',
    'smart_templates_desc'    => $current_lang === 'ro' ? 'Personalizare cu variabile: {first_name}, {event_name}, {ticket_type}, {discount_code} si altele.' : 'Personalization with variables: {first_name}, {event_name}, {ticket_type}, {discount_code} and more.',
    'multi_language'          => $current_lang === 'ro' ? 'Multi-limba' : 'Multi-language',

    // Reminder Timeline
    'auto_reminders'          => $current_lang === 'ro' ? 'Remindere Automate' : 'Automatic Reminders',
    'smart_scheduling'        => $current_lang === 'ro' ? 'Programare' : 'Scheduling',
    'smart_scheduling2'       => $current_lang === 'ro' ? 'inteligenta' : 'smart',
    'timeline_desc'           => $current_lang === 'ro' ? 'Reminderele se programeaza automat si ajung la ora potrivita in fusul orar al clientului.' : 'Reminders are automatically scheduled and arrive at the right time in the customer timezone.',
    'event'                   => $current_lang === 'ro' ? 'Eveniment' : 'Event',
    'one_week'                => $current_lang === 'ro' ? '1 saptamana' : '1 week',
    'three_days'              => $current_lang === 'ro' ? '3 zile' : '3 days',
    'tomorrow'                => $current_lang === 'ro' ? 'Maine!' : 'Tomorrow!',
    'msg_7_days'              => $current_lang === 'ro' ? '"Evenimentul tau e in 7 zile! Pregateste-te..."' : '"Your event is in 7 days! Get ready..."',
    'msg_3_days'              => $current_lang === 'ro' ? '"Mai sunt 3 zile! Verifica detaliile..."' : '"Only 3 days left! Check the details..."',
    'msg_1_day'               => $current_lang === 'ro' ? '"Maine e ziua cea mare! Nu uita biletele..."' : '"Tomorrow is the big day! Don\'t forget your tickets..."',
    'timezone_aware_label'    => 'Timezone Aware',
    'timezone_aware_desc'     => $current_lang === 'ro' ? 'Mesajele ajung la 10:00 ora locala a clientului' : 'Messages arrive at 10:00 AM customer local time',
    'config_intervals'        => $current_lang === 'ro' ? 'Intervale Configurabile' : 'Configurable Intervals',
    'config_intervals_desc'   => $current_lang === 'ro' ? 'Setezi D-7, D-3, D-1 sau ce intervale vrei' : 'Set D-7, D-3, D-1 or whatever intervals you want',
    'mass_scheduling'         => $current_lang === 'ro' ? 'Programare in Masa' : 'Mass Scheduling',
    'mass_scheduling_desc'    => $current_lang === 'ro' ? 'Un click pentru toti participantii' : 'One click for all participants',

    // Compliance
    'compliance_badge'        => $current_lang === 'ro' ? 'Conformitate' : 'Compliance',
    'compliance_title'        => 'GDPR compliant',
    'compliance_title2'       => 'by design',
    'opt_management'          => $current_lang === 'ro' ? 'Gestionare Opt-in/Opt-out' : 'Opt-in/Opt-out Management',
    'opt_desc'                => $current_lang === 'ro' ? 'Consimtamantul clientului este cerut si respectat. Renuntarea e instantanee pe toate canalele.' : 'Customer consent is requested and respected. Unsubscription is instant across all channels.',
    'audit_log'               => $current_lang === 'ro' ? 'Jurnal Complet de Audit' : 'Complete Audit Log',
    'audit_desc'              => $current_lang === 'ro' ? 'Fiecare mesaj, fiecare consimtamant, fiecare modificare - totul este inregistrat pentru conformitate.' : 'Every message, every consent, every change - everything is logged for compliance.',
    'pre_approved_templates'  => $current_lang === 'ro' ? 'Template-uri Pre-aprobate' : 'Pre-approved Templates',
    'pre_approved_desc'       => $current_lang === 'ro' ? 'Toate template-urile trec prin flux de aprobare BSP inainte de a fi folosite.' : 'All templates go through BSP approval before being used.',
    'e164_validation'         => $current_lang === 'ro' ? 'Validare E.164' : 'E.164 Validation',
    'e164_desc'               => $current_lang === 'ro' ? 'Numerele de telefon sunt validate in format international inainte de trimitere.' : 'Phone numbers are validated in international format before sending.',
    'supported_providers'     => $current_lang === 'ro' ? 'Furnizori Suportati' : 'Supported Providers',
    'auto_failover'           => $current_lang === 'ro' ? 'Failover automat intre furnizori' : 'Automatic failover between providers',

    // Setup
    'setup_badge'             => 'Setup',
    'setup_title'             => $current_lang === 'ro' ? 'Configurare in' : 'Configuration in',
    'setup_title2'            => $current_lang === 'ro' ? '3 pasi simpli' : '3 simple steps',
    'step1_title'             => $current_lang === 'ro' ? 'Conecteaza WhatsApp Business' : 'Connect WhatsApp Business',
    'step1_desc'              => $current_lang === 'ro' ? 'Alegi furnizorul preferat (360dialog, Twilio sau Meta) si introduci credentialele API. Noi ne ocupam de configurare.' : 'Choose your preferred provider (360dialog, Twilio or Meta) and enter API credentials. We handle the configuration.',
    'step2_title'             => $current_lang === 'ro' ? 'Creeaza template-uri' : 'Create templates',
    'step2_desc'              => $current_lang === 'ro' ? 'Foloseste template-urile noastre pre-definite sau creeaza-ti propriile. Le trimitem pentru aprobare BSP automat.' : 'Use our pre-defined templates or create your own. We submit them for BSP approval automatically.',
    'step3_title'             => $current_lang === 'ro' ? 'Activeaza si monitorizeaza' : 'Activate and monitor',
    'step3_desc'              => $current_lang === 'ro' ? 'Mesajele se trimit automat. Urmareste livrarile, citirile si costurile in timp real din dashboard.' : 'Messages are sent automatically. Track deliveries, reads and costs in real-time from the dashboard.',
    'realtime_messages'       => $current_lang === 'ro' ? 'Mesaje in timp real' : 'Real-time messages',
    'activate_now'            => $current_lang === 'ro' ? 'Activeaza WhatsApp acum' : 'Activate WhatsApp now',
    'pay_per_message'         => $current_lang === 'ro' ? 'Platesti doar pentru mesajele trimise' : 'Pay only for messages sent',

    // Testimonial
    'testimonial_text'        => $current_lang === 'ro' ? 'Am trecut de la email la WhatsApp si participarea la evenimente a crescut cu 35%. <span class="text-whatsapp-green font-semibold">Oamenii chiar citesc mesajele.</span> Reminderele D-1 au redus no-show-urile la jumatate.' : 'We switched from email to WhatsApp and event attendance increased by 35%. <span class="text-whatsapp-green font-semibold">People actually read the messages.</span> D-1 reminders cut no-shows in half.',
    'testimonial_author'      => 'Alexandra M.',
    'testimonial_role'        => $current_lang === 'ro' ? 'Event Manager, Festival Booking' : 'Event Manager, Festival Booking',

    // Final CTA
    'final_title'             => $current_lang === 'ro' ? 'Comunica' : 'Communicate',
    'final_title2'            => $current_lang === 'ro' ? 'direct' : 'directly',
    'final_desc'              => $current_lang === 'ro' ? '98% open rate. 3 minute timp de raspuns. Mesajele tale chiar se citesc.' : '98% open rate. 3 minute response time. Your messages actually get read.',
    'questions_contact'       => $current_lang === 'ro' ? 'Intrebari? Contacteaza-ne' : 'Questions? Contact us',
    'works_with'              => $current_lang === 'ro' ? 'Functioneaza cu 360dialog, Twilio si Meta Cloud API' : 'Works with 360dialog, Twilio and Meta Cloud API',
];
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
          <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-whatsapp animate-shimmer"><?php echo esc_html( $t['hero_title2'] ); ?></span>
        </h1>

        <!-- Description -->
        <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
          <?php echo $t['hero_desc']; ?>
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn-whatsapp">
            <?php echo esc_html( $t['cta_activate'] ); ?>
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#cum-functioneaza" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
            <?php echo esc_html( $t['cta_how'] ); ?>
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
            <div class="text-white/40 text-sm"><?php echo esc_html( $t['response_time'] ); ?></div>
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
                <div class="text-white text-sm font-medium"><?php echo esc_html( $t['delivered'] ); ?></div>
                <div class="text-whatsapp-green text-xs"><?php echo esc_html( $t['read'] ); ?></div>
              </div>
            </div>
          </div>

          <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-amber/20 shadow-xl animate-float" style="animation-delay: 1s;">
            <div class="flex items-center gap-2">
              <div class="text-2xl">📊</div>
              <div>
                <div class="text-white text-sm font-medium">2,847</div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['messages_today'] ); ?></div>
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
      <span class="text-brand-rose text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['comparison_badge'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['comparison_title'] ); ?><br><span class="text-whatsapp-green"><?php echo esc_html( $t['comparison_title2'] ); ?></span></h2>
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
              <span class="text-white/60"><?php echo esc_html( $t['response_time_label'] ); ?></span>
              <span class="text-white/40">6+ <?php echo esc_html( $t['hours'] ); ?></span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-white/60">Click Rate</span>
              <span class="text-white/40">2.5%</span>
            </div>
            <div class="pt-4 border-t border-white/10 text-white/40 text-sm">
              <?php echo esc_html( $t['email_note'] ); ?>
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
              <span class="text-white/60"><?php echo esc_html( $t['cost_per_msg'] ); ?></span>
              <span class="text-brand-rose">0.05-0.10 EUR</span>
            </div>
            <div class="pt-4 border-t border-white/10 text-white/40 text-sm">
              <?php echo esc_html( $t['sms_note'] ); ?>
            </div>
          </div>
        </div>
      </div>

      <!-- WhatsApp -->
      <div class="reveal reveal-delay-2">
        <div class="bg-gradient-to-br from-whatsapp-green/10 to-whatsapp-teal/10 rounded-3xl p-8 border border-whatsapp-green/30 h-full relative overflow-hidden">
          <!-- Recommended badge -->
          <div class="absolute top-4 right-4 px-3 py-1 bg-whatsapp-green text-white text-xs font-semibold rounded-full">
            <?php echo esc_html( $t['recommended'] ); ?>
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
              <span class="text-white/60"><?php echo esc_html( $t['response_time_label'] ); ?></span>
              <span class="text-whatsapp-green font-semibold">3 min</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-white/60">Click Rate</span>
              <span class="text-whatsapp-green font-semibold">45%</span>
            </div>
            <div class="pt-4 border-t border-white/10 text-white/60 text-sm">
              <?php echo esc_html( $t['whatsapp_note'] ); ?>
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
      <span class="text-whatsapp-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['msg_types_badge'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['msg_types_title'] ); ?><br><span class="text-gradient-whatsapp animate-shimmer"><?php echo esc_html( $t['msg_types_title2'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['msg_types_desc'] ); ?></p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Confirmari Comanda -->
      <div class="feature-card relative bg-gradient-to-br from-whatsapp-green/10 to-whatsapp-green/5 rounded-2xl p-6 border border-white/10 hover:border-whatsapp-green/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal">
        <div class="w-14 h-14 rounded-2xl bg-whatsapp-green/20 flex items-center justify-center mb-4">
          <span class="text-3xl">🎫</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['order_confirm'] ); ?></h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['order_confirm_desc'] ); ?></p>
        <div class="flex items-center gap-2 text-whatsapp-green text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          <?php echo esc_html( $t['instant_delivery'] ); ?>
        </div>
      </div>

      <!-- Remindere -->
      <div class="feature-card relative bg-gradient-to-br from-brand-amber/10 to-brand-amber/5 rounded-2xl p-6 border border-white/10 hover:border-brand-amber/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-1">
        <div class="w-14 h-14 rounded-2xl bg-brand-amber/20 flex items-center justify-center mb-4">
          <span class="text-3xl">⏰</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['smart_reminders'] ); ?></h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['smart_reminders_desc'] ); ?></p>
        <div class="flex items-center gap-2 text-brand-amber text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <?php echo esc_html( $t['timezone_aware'] ); ?>
        </div>
      </div>

      <!-- Campanii Promo -->
      <div class="feature-card relative bg-gradient-to-br from-brand-violet/10 to-brand-violet/5 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-2">
        <div class="w-14 h-14 rounded-2xl bg-brand-violet/20 flex items-center justify-center mb-4">
          <span class="text-3xl">🎯</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['promo_campaigns'] ); ?></h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['promo_campaigns_desc'] ); ?></p>
        <div class="flex items-center gap-2 text-brand-violet text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          <?php echo esc_html( $t['audience_segmentation'] ); ?>
        </div>
      </div>

      <!-- OTP/Verificare -->
      <div class="feature-card relative bg-gradient-to-br from-brand-cyan/10 to-brand-cyan/5 rounded-2xl p-6 border border-white/10 hover:border-brand-cyan/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-3">
        <div class="w-14 h-14 rounded-2xl bg-brand-cyan/20 flex items-center justify-center mb-4">
          <span class="text-3xl">🔐</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['otp_verification'] ); ?></h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['otp_desc'] ); ?></p>
        <div class="flex items-center gap-2 text-brand-cyan text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          <?php echo esc_html( $t['max_security'] ); ?>
        </div>
      </div>

      <!-- Urgente -->
      <div class="feature-card relative bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-2xl p-6 border border-white/10 hover:border-brand-rose/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-4">
        <div class="w-14 h-14 rounded-2xl bg-brand-rose/20 flex items-center justify-center mb-4">
          <span class="text-3xl">🚨</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['urgent_comms'] ); ?></h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['urgent_comms_desc'] ); ?></p>
        <div class="flex items-center gap-2 text-brand-rose text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
          <?php echo esc_html( $t['priority_delivery'] ); ?>
        </div>
      </div>

      <!-- Template Variables -->
      <div class="feature-card relative bg-gradient-to-br from-brand-green/10 to-brand-green/5 rounded-2xl p-6 border border-white/10 hover:border-brand-green/30 hover:-translate-y-1 transition-all duration-500 overflow-hidden reveal reveal-delay-5">
        <div class="w-14 h-14 rounded-2xl bg-brand-green/20 flex items-center justify-center mb-4">
          <span class="text-3xl">✨</span>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['smart_templates'] ); ?></h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['smart_templates_desc'] ); ?></p>
        <div class="flex items-center gap-2 text-brand-green text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          <?php echo esc_html( $t['multi_language'] ); ?>
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
      <span class="text-brand-amber text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['auto_reminders'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['smart_scheduling'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['smart_scheduling2'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['timeline_desc'] ); ?></p>
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
          <div class="text-white font-semibold mb-1"><?php echo esc_html( $t['event'] ); ?></div>
          <div class="text-white/40 text-sm">15 Iulie</div>
        </div>

        <!-- D-7 -->
        <div class="text-center">
          <div class="w-16 h-16 mx-auto rounded-full bg-whatsapp-green/20 border-2 border-whatsapp-green flex items-center justify-center mb-4 relative z-10">
            <span class="text-whatsapp-green font-bold">D-7</span>
          </div>
          <div class="text-white font-semibold mb-1">8 Iulie</div>
          <div class="text-whatsapp-green text-sm"><?php echo esc_html( $t['one_week'] ); ?></div>
          <div class="mt-3 p-3 bg-dark-800 rounded-xl border border-whatsapp-green/20">
            <div class="text-white/70 text-xs"><?php echo esc_html( $t['msg_7_days'] ); ?></div>
          </div>
        </div>

        <!-- D-3 -->
        <div class="text-center">
          <div class="w-16 h-16 mx-auto rounded-full bg-brand-amber/20 border-2 border-brand-amber flex items-center justify-center mb-4 relative z-10">
            <span class="text-brand-amber font-bold">D-3</span>
          </div>
          <div class="text-white font-semibold mb-1">12 Iulie</div>
          <div class="text-brand-amber text-sm"><?php echo esc_html( $t['three_days'] ); ?></div>
          <div class="mt-3 p-3 bg-dark-800 rounded-xl border border-brand-amber/20">
            <div class="text-white/70 text-xs"><?php echo esc_html( $t['msg_3_days'] ); ?></div>
          </div>
        </div>

        <!-- D-1 -->
        <div class="text-center">
          <div class="w-16 h-16 mx-auto rounded-full bg-brand-rose/20 border-2 border-brand-rose flex items-center justify-center mb-4 relative z-10">
            <span class="text-brand-rose font-bold">D-1</span>
          </div>
          <div class="text-white font-semibold mb-1">14 Iulie</div>
          <div class="text-brand-rose text-sm"><?php echo esc_html( $t['tomorrow'] ); ?></div>
          <div class="mt-3 p-3 bg-dark-800 rounded-xl border border-brand-rose/20">
            <div class="text-white/70 text-xs"><?php echo esc_html( $t['msg_1_day'] ); ?></div>
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
        <div class="text-white font-medium mb-1"><?php echo esc_html( $t['timezone_aware_label'] ); ?></div>
        <div class="text-white/40 text-sm"><?php echo esc_html( $t['timezone_aware_desc'] ); ?></div>
      </div>
      <div class="text-center reveal reveal-delay-2">
        <div class="w-12 h-12 mx-auto rounded-xl bg-brand-amber/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
        </div>
        <div class="text-white font-medium mb-1"><?php echo esc_html( $t['config_intervals'] ); ?></div>
        <div class="text-white/40 text-sm"><?php echo esc_html( $t['config_intervals_desc'] ); ?></div>
      </div>
      <div class="text-center reveal reveal-delay-3">
        <div class="w-12 h-12 mx-auto rounded-xl bg-brand-violet/20 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
        </div>
        <div class="text-white font-medium mb-1"><?php echo esc_html( $t['mass_scheduling'] ); ?></div>
        <div class="text-white/40 text-sm"><?php echo esc_html( $t['mass_scheduling_desc'] ); ?></div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== COMPLIANCE ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['compliance_badge'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['compliance_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['compliance_title2'] ); ?></span></h2>
    </div>

    <div class="grid lg:grid-cols-2 gap-8 items-center">
      <!-- Features List -->
      <div class="space-y-6 reveal">
        <div class="flex gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <div>
            <div class="text-white font-semibold mb-1"><?php echo esc_html( $t['opt_management'] ); ?></div>
            <div class="text-white/50 text-sm"><?php echo esc_html( $t['opt_desc'] ); ?></div>
          </div>
        </div>

        <div class="flex gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <div>
            <div class="text-white font-semibold mb-1"><?php echo esc_html( $t['audit_log'] ); ?></div>
            <div class="text-white/50 text-sm"><?php echo esc_html( $t['audit_desc'] ); ?></div>
          </div>
        </div>

        <div class="flex gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
          </div>
          <div>
            <div class="text-white font-semibold mb-1"><?php echo esc_html( $t['pre_approved_templates'] ); ?></div>
            <div class="text-white/50 text-sm"><?php echo esc_html( $t['pre_approved_desc'] ); ?></div>
          </div>
        </div>

        <div class="flex gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
          <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          </div>
          <div>
            <div class="text-white font-semibold mb-1"><?php echo esc_html( $t['e164_validation'] ); ?></div>
            <div class="text-white/50 text-sm"><?php echo esc_html( $t['e164_desc'] ); ?></div>
          </div>
        </div>
      </div>

      <!-- Providers -->
      <div class="reveal reveal-delay-1">
        <div class="bg-gradient-to-br from-whatsapp-green/10 to-whatsapp-teal/10 rounded-3xl p-8 border border-white/10">
          <h3 class="text-xl font-semibold text-white mb-6"><?php echo esc_html( $t['supported_providers'] ); ?></h3>
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
              <span><?php echo esc_html( $t['auto_failover'] ); ?></span>
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
      <span class="text-brand-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['setup_badge'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['setup_title'] ); ?><br><span class="text-gradient-whatsapp animate-shimmer"><?php echo esc_html( $t['setup_title2'] ); ?></span></h2>
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
            <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step1_title'] ); ?></h3>
            <p class="text-white/50 mb-4"><?php echo esc_html( $t['step1_desc'] ); ?></p>
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
            <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step2_title'] ); ?></h3>
            <p class="text-white/50 mb-4"><?php echo esc_html( $t['step2_desc'] ); ?></p>
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
            <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['step3_title'] ); ?></h3>
            <p class="text-white/50 mb-4"><?php echo esc_html( $t['step3_desc'] ); ?></p>
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-whatsapp-green/10 text-whatsapp-green text-sm border border-whatsapp-green/20">
              <div class="w-2 h-2 rounded-full bg-whatsapp-green animate-pulse"></div>
              <?php echo esc_html( $t['realtime_messages'] ); ?>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <div class="mt-12 text-center reveal reveal-delay-3">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn-whatsapp text-lg">
          <?php echo esc_html( $t['activate_now'] ); ?>
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <p class="text-white/30 text-sm mt-4"><?php echo esc_html( $t['pay_per_message'] ); ?></p>
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
          "<?php echo $t['testimonial_text']; ?>"
        </blockquote>
        <!-- Author -->
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-full bg-gradient-to-br from-whatsapp-green to-whatsapp-teal"></div>
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
  <div class="absolute inset-0 bg-gradient-to-br from-whatsapp-green/20 via-transparent to-whatsapp-teal/20"></div>
  <div class="absolute w-[800px] h-[800px] bg-whatsapp-green/30 rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[120px] pointer-events-none"></div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
    <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['final_title'] ); ?><br><span class="text-gradient-whatsapp animate-shimmer"><?php echo esc_html( $t['final_title2'] ); ?></span></h2>
    <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="btn-whatsapp text-lg px-10">
        <?php echo esc_html( $t['cta_activate'] ); ?>
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
        <?php echo esc_html( $t['questions_contact'] ); ?>
      </a>
    </div>

    <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3"><?php echo esc_html( $t['works_with'] ); ?></p>
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
