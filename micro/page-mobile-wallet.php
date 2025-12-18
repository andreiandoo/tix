<?php
/**
 * Template Name: Micro - Mobile Wallet
 * Description: Apple Wallet and Google Pay wallet cards landing page
 */

get_header();

$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'                  => 'Apple Wallet & Google Pay',
	'hero_title'             => $current_lang === 'ro' ? 'Bilete în' : 'Tickets in your',
	'hero_title2'            => $current_lang === 'ro' ? 'buzunar' : 'pocket',
	'hero_desc'              => $current_lang === 'ro'
		? 'Transformă biletele în <strong class="text-white">carduri digitale</strong> pentru Apple Wallet și Google Pay. Actualizări în timp real, notificări push, acces offline. <strong class="text-white">Zero printare.</strong>'
		: 'Transform tickets into <strong class="text-white">digital cards</strong> for Apple Wallet and Google Pay. Real-time updates, push notifications, offline access. <strong class="text-white">Zero printing.</strong>',
	'cta_activate'           => $current_lang === 'ro' ? 'Activează Wallet Cards' : 'Activate Wallet Cards',
	'cta_platforms'          => $current_lang === 'ro' ? 'Vezi platformele' : 'See platforms',

	// Phone Mockup
	'wallet'                 => 'Wallet',
	'my_cards'               => $current_lang === 'ro' ? 'Cardurile Mele' : 'My Cards',
	'ticket'                 => $current_lang === 'ro' ? 'BILET' : 'TICKET',
	'general_access'         => $current_lang === 'ro' ? 'Acces General' : 'General Access',
	'date_label'             => $current_lang === 'ro' ? 'Data' : 'Date',
	'time_label'             => $current_lang === 'ro' ? 'Ora' : 'Time',
	'location_label'         => $current_lang === 'ro' ? 'Locație' : 'Location',
	'seat_label'             => $current_lang === 'ro' ? 'Loc' : 'Seat',
	'notif_title'            => $current_lang === 'ro' ? 'Reminder Eveniment' : 'Event Reminder',
	'notif_desc'             => $current_lang === 'ro' ? 'Summer Fest începe în 1 oră!' : 'Summer Fest starts in 1 hour!',
	'nearby'                 => $current_lang === 'ro' ? 'Aproape' : 'Nearby',
	'of_location'            => $current_lang === 'ro' ? 'de locație' : 'location',
	'offline'                => 'Offline',
	'accessible'             => $current_lang === 'ro' ? 'accesibil' : 'accessible',

	// Platforms Section
	'platforms_label'        => $current_lang === 'ro' ? 'Platforme Suportate' : 'Supported Platforms',
	'platforms_title'        => 'Apple Wallet',
	'platforms_title2'       => '& Google Pay',
	'platforms_desc'         => $current_lang === 'ro'
		? 'O singură integrare, ambele platforme. Acoperă 99% din smartphone-uri.'
		: 'One integration, both platforms. Covers 99% of smartphones.',
	'apple_pkpass'           => $current_lang === 'ro' ? 'Fișiere .pkpass native' : 'Native .pkpass files',
	'apple_push'             => $current_lang === 'ro' ? 'Actualizări push în timp real' : 'Real-time push updates',
	'apple_location'         => $current_lang === 'ro' ? 'Remindere bazate pe locație' : 'Location-based reminders',
	'apple_lockscreen'       => $current_lang === 'ro' ? 'Notificări pe lock screen' : 'Lock screen notifications',
	'apple_watch'            => $current_lang === 'ro' ? 'Sincronizare Apple Watch' : 'Apple Watch sync',
	'google_jwt'             => $current_lang === 'ro' ? 'Carduri bazate pe JWT' : 'JWT-based cards',
	'google_auto'            => $current_lang === 'ro' ? 'Actualizări automate' : 'Automatic updates',
	'google_notif'           => $current_lang === 'ro' ? 'Notificări personalizate' : 'Custom notifications',
	'google_calendar'        => $current_lang === 'ro' ? 'Integrare Google Calendar' : 'Google Calendar integration',
	'google_backup'          => $current_lang === 'ro' ? 'Backup în cloud' : 'Cloud backup',

	// Lifecycle Section
	'lifecycle_label'        => $current_lang === 'ro' ? 'Ciclul de Viață' : 'Lifecycle',
	'lifecycle_title'        => $current_lang === 'ro' ? 'De la achiziție' : 'From purchase',
	'lifecycle_title2'       => $current_lang === 'ro' ? 'la check-in' : 'to check-in',
	'step_generate'          => $current_lang === 'ro' ? 'Generare' : 'Generation',
	'step_generate_desc'     => $current_lang === 'ro' ? 'Card generat automat la achiziția biletului' : 'Card automatically generated at ticket purchase',
	'step_delivery'          => $current_lang === 'ro' ? 'Livrare' : 'Delivery',
	'step_delivery_desc'     => $current_lang === 'ro' ? 'Email cu buton "Adaugă în Wallet"' : 'Email with "Add to Wallet" button',
	'step_updates'           => $current_lang === 'ro' ? 'Actualizări' : 'Updates',
	'step_updates_desc'      => $current_lang === 'ro' ? 'Push automat când detaliile se schimbă' : 'Auto push when details change',
	'step_checkin'           => 'Check-in',
	'step_checkin_desc'      => $current_lang === 'ro' ? 'Scanare cod QR la intrare' : 'QR code scan at entry',
	'step_expire'            => $current_lang === 'ro' ? 'Expirare' : 'Expiration',
	'step_expire_desc'       => $current_lang === 'ro' ? 'Arhivare automată post-eveniment' : 'Auto-archive post-event',

	// Use Cases Section
	'usecases_label'         => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
	'usecases_title'         => $current_lang === 'ro' ? 'Pentru orice' : 'For any',
	'usecases_title2'        => $current_lang === 'ro' ? 'tip de eveniment' : 'event type',
	'uc_concerts'            => $current_lang === 'ro' ? 'Concerte' : 'Concerts',
	'uc_concerts_desc'       => $current_lang === 'ro' ? 'Carduri elegante cu artwork-ul artistului. Fanii arată telefonul și intră direct.' : 'Elegant cards with artist artwork. Fans show their phone and enter directly.',
	'uc_festivals'           => $current_lang === 'ro' ? 'Festivaluri Multi-Zi' : 'Multi-Day Festivals',
	'uc_festivals_desc'      => $current_lang === 'ro' ? 'Un singur card pentru toate zilele. Actualizări cu programul și anunțuri.' : 'One card for all days. Updates with schedule and announcements.',
	'uc_conferences'         => $current_lang === 'ro' ? 'Conferințe' : 'Conferences',
	'uc_conferences_desc'    => $current_lang === 'ro' ? 'Badge digital cu informații participant, acces la sesiuni și networking.' : 'Digital badge with attendee info, session access and networking.',
	'uc_sports'              => $current_lang === 'ro' ? 'Evenimente Sportive' : 'Sports Events',
	'uc_sports_desc'         => $current_lang === 'ro' ? 'Abonamente de sezon care se actualizează pentru fiecare meci de acasă.' : 'Season passes that update for each home game.',
	'uc_theater'             => $current_lang === 'ro' ? 'Teatru & Spectacole' : 'Theater & Shows',
	'uc_theater_desc'        => $current_lang === 'ro' ? 'Carduri sofisticate cu reminder pentru ora cortinei și informații loc.' : 'Sophisticated cards with curtain time reminder and seat info.',
	'uc_parking'             => $current_lang === 'ro' ? 'Transport & Parcare' : 'Transport & Parking',
	'uc_parking_desc'        => $current_lang === 'ro' ? 'Combină biletul cu permisul de parcare într-un singur card convenabil.' : 'Combine ticket with parking pass in one convenient card.',

	// Testimonial
	'testimonial_quote'      => $current_lang === 'ro'
		? 'Am eliminat complet printarea biletelor. <span class="text-gradient-wallet font-semibold">78% din participanți</span> folosesc acum wallet cards. Check-in-ul e de 3x mai rapid, iar când am schimbat ora începerii, toată lumea a văzut actualizarea instant.'
		: 'We completely eliminated ticket printing. <span class="text-gradient-wallet font-semibold">78% of attendees</span> now use wallet cards. Check-in is 3x faster, and when we changed the start time, everyone saw the update instantly.',
	'testimonial_author'     => 'Diana S.',
	'testimonial_role'       => 'Operations Manager, Electric Castle',

	// Final CTA
	'cta_title'              => $current_lang === 'ro' ? 'Bilete' : 'Modern',
	'cta_title2'             => $current_lang === 'ro' ? 'moderne' : 'tickets',
	'cta_desc'               => $current_lang === 'ro'
		? 'Apple Wallet și Google Pay într-o singură integrare. Actualizări live, notificări push, acces offline.'
		: 'Apple Wallet and Google Pay in one integration. Live updates, push notifications, offline access.',
	'cta_contact'            => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
	'offline_access'         => 'Offline Access',
];
?>

<style>
  ::selection { background: #667EEA; color: white; }

  .text-gradient-wallet { background: linear-gradient(135deg, #667EEA 0%, #764BA2 50%, #00D9FF 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(102, 126, 234, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Phone mockup */
  .phone-frame {
    background: linear-gradient(145deg, #2a2a2a 0%, #1a1a1a 100%);
    border-radius: 45px;
    padding: 12px;
    box-shadow: 0 50px 100px -20px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255,255,255,0.1);
  }
  .phone-screen {
    background: #000;
    border-radius: 35px;
    overflow: hidden;
  }
  .phone-notch {
    width: 120px;
    height: 30px;
    background: #000;
    border-radius: 0 0 20px 20px;
    margin: 0 auto;
    position: relative;
    z-index: 10;
  }

  /* Wallet pass card */
  .wallet-pass {
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
    border-radius: 16px;
    position: relative;
    overflow: hidden;
  }
  .wallet-pass::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(135deg, #667EEA, #764BA2);
  }

  /* QR Code styling */
  .qr-code {
    background: white;
    padding: 8px;
    border-radius: 8px;
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 2px;
  }
  .qr-cell {
    aspect-ratio: 1;
    background: #000;
    border-radius: 1px;
  }
  .qr-cell.white { background: white; }

  /* Platform badges */
  .apple-badge {
    background: #000;
    color: white;
  }
  .google-badge {
    background: linear-gradient(135deg, #4285F4, #34A853);
    color: white;
  }

  /* Notification bubble */
  .notification-bubble {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
  }

  /* Add to wallet buttons */
  .btn-apple-wallet {
    background: #000;
    color: white;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    border-radius: 12px;
    transition: all 0.3s;
  }
  .btn-apple-wallet:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  }
  .btn-google-pay {
    background: white;
    color: #5F6368;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    border-radius: 12px;
    border: 1px solid #dadce0;
    transition: all 0.3s;
  }
  .btn-google-pay:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  }

  /* Location ping */
  .location-ping {
    position: relative;
  }
  .location-ping::before,
  .location-ping::after {
    content: '';
    position: absolute;
    inset: -10px;
    border: 2px solid currentColor;
    border-radius: 50%;
    animation: pulseRing 2s ease-out infinite;
  }
  .location-ping::after {
    animation-delay: 1s;
  }

  /* Pass strip gradient */
  .pass-strip {
    background: linear-gradient(135deg, #667EEA 0%, #764BA2 50%, #f093fb 100%);
  }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #667EEA, #764BA2, #00D9FF);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-wallet-gradient1/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-wallet-gradient2/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float">
      <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
    </div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">
      <svg class="w-10 h-10" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-wallet-gradient1/10 border border-wallet-gradient1/20 mb-6">
            <svg class="w-5 h-5 text-wallet-gradient1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg>
            <span class="text-wallet-gradient1 text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-wallet"><?php echo esc_html( $t['hero_title2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-wallet-gradient1 to-wallet-gradient2 text-white hover:scale-105 hover:shadow-glow-wallet transition-all duration-300">
              <?php echo esc_html( $t['cta_activate'] ); ?>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#platforme" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              <?php echo esc_html( $t['cta_platforms'] ); ?>
            </a>
          </div>

          <!-- Platform badges -->
          <div class="flex items-center gap-4">
            <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-black">
              <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
              <span class="text-white text-sm font-medium">Apple Wallet</span>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-white">
              <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
              <span class="text-gray-700 text-sm font-medium">Google Pay</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Phone with Wallet Pass -->
        <div class="reveal reveal-delay-1">
          <div class="relative flex justify-center" x-data="{ showNotification: false }" x-init="setInterval(() => { showNotification = true; setTimeout(() => showNotification = false, 3000); }, 5000)">

            <!-- Phone Frame -->
            <div class="phone-frame w-[280px] animate-phone-rock">
              <div class="phone-screen">
                <!-- Status bar -->
                <div class="flex items-center justify-between px-6 py-2 bg-black">
                  <span class="text-white text-xs font-medium">9:41</span>
                  <div class="phone-notch"></div>
                  <div class="flex items-center gap-1">
                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.18L12 21z"/></svg>
                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/></svg>
                    <div class="w-6 h-3 rounded-sm bg-white/30 relative"><div class="absolute right-0 top-0 bottom-0 w-4 rounded-sm bg-brand-green"></div></div>
                  </div>
                </div>

                <!-- Wallet Header -->
                <div class="bg-black px-4 py-3">
                  <div class="text-white/60 text-xs"><?php echo esc_html( $t['wallet'] ); ?></div>
                  <div class="text-white text-lg font-semibold"><?php echo esc_html( $t['my_cards'] ); ?></div>
                </div>

                <!-- Wallet Pass -->
                <div class="bg-gray-900 p-4 min-h-[400px]">
                  <div class="wallet-pass shadow-xl">
                    <!-- Pass Header with gradient -->
                    <div class="relative p-4 pb-12">
                      <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                          <div class="w-8 h-8 rounded-lg bg-white/20 flex items-center justify-center">
                            <span class="text-white font-display font-bold text-sm">T</span>
                          </div>
                          <span class="text-white/80 text-sm">Tixello</span>
                        </div>
                        <span class="text-white/60 text-xs"><?php echo esc_html( $t['ticket'] ); ?></span>
                      </div>
                    </div>

                    <!-- Pass Content -->
                    <div class="bg-wallet-pass p-4 pt-8 -mt-8 rounded-b-2xl">
                      <div class="text-center mb-4">
                        <div class="text-white text-xl font-bold mb-1">Summer Fest 2025</div>
                        <div class="text-white/60 text-sm"><?php echo esc_html( $t['general_access'] ); ?></div>
                      </div>

                      <div class="grid grid-cols-2 gap-4 mb-4 text-sm">
                        <div>
                          <div class="text-white/40 text-xs uppercase"><?php echo esc_html( $t['date_label'] ); ?></div>
                          <div class="text-white font-medium">15 Iulie 2025</div>
                        </div>
                        <div class="text-right">
                          <div class="text-white/40 text-xs uppercase"><?php echo esc_html( $t['time_label'] ); ?></div>
                          <div class="text-white font-medium">18:00</div>
                        </div>
                        <div>
                          <div class="text-white/40 text-xs uppercase"><?php echo esc_html( $t['location_label'] ); ?></div>
                          <div class="text-white font-medium">Romexpo</div>
                        </div>
                        <div class="text-right">
                          <div class="text-white/40 text-xs uppercase"><?php echo esc_html( $t['seat_label'] ); ?></div>
                          <div class="text-white font-medium">A-127</div>
                        </div>
                      </div>

                      <!-- QR Code -->
                      <div class="flex justify-center">
                        <div class="bg-white p-3 rounded-xl">
                          <div class="qr-code animate-qr-scan" style="width: 80px; height: 80px;">
                            <div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div>
                            <div class="qr-cell"></div><div class="qr-cell white"></div><div class="qr-cell white"></div><div class="qr-cell white"></div><div class="qr-cell white"></div><div class="qr-cell white"></div><div class="qr-cell"></div>
                            <div class="qr-cell"></div><div class="qr-cell white"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell white"></div><div class="qr-cell"></div>
                            <div class="qr-cell"></div><div class="qr-cell white"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell white"></div><div class="qr-cell"></div>
                            <div class="qr-cell"></div><div class="qr-cell white"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell white"></div><div class="qr-cell"></div>
                            <div class="qr-cell"></div><div class="qr-cell white"></div><div class="qr-cell white"></div><div class="qr-cell white"></div><div class="qr-cell white"></div><div class="qr-cell white"></div><div class="qr-cell"></div>
                            <div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div><div class="qr-cell"></div>
                          </div>
                        </div>
                      </div>

                      <div class="text-center mt-2">
                        <span class="text-white/40 text-xs font-mono">TXL-2025-A127</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating Notification -->
            <div
              x-show="showNotification"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 -translate-y-4"
              x-transition:enter-end="opacity-100 translate-y-0"
              x-transition:leave="transition ease-in duration-200"
              x-transition:leave-start="opacity-100 translate-y-0"
              x-transition:leave-end="opacity-0 -translate-y-4"
              class="absolute -top-4 left-1/2 -translate-x-1/2 notification-bubble px-4 py-3 flex items-center gap-3 z-20"
            >
              <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-wallet-gradient1 to-wallet-gradient2 flex items-center justify-center flex-shrink-0">
                <span class="text-white font-bold text-sm">T</span>
              </div>
              <div>
                <div class="text-gray-900 font-semibold text-sm"><?php echo esc_html( $t['notif_title'] ); ?></div>
                <div class="text-gray-500 text-xs"><?php echo esc_html( $t['notif_desc'] ); ?></div>
              </div>
            </div>

            <!-- Floating Location Badge -->
            <div class="absolute -bottom-4 -left-8 bg-dark-800 rounded-xl px-4 py-3 border border-wallet-gradient1/30 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-wallet-gradient1/20 flex items-center justify-center location-ping text-wallet-gradient1">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div>
                  <div class="text-wallet-gradient1 text-sm font-medium"><?php echo esc_html( $t['nearby'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['of_location'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating Offline Badge -->
            <div class="absolute -bottom-4 -right-8 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/30 shadow-xl animate-float [animation-delay:1.5s] z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div>
                  <div class="text-brand-green text-sm font-medium"><?php echo esc_html( $t['offline'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['accessible'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PLATFORMS ==================== -->
  <section class="py-24 relative overflow-hidden" id="platforme">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-wallet-gradient1 text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['platforms_label'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['platforms_title'] ); ?><br><span class="text-gradient-wallet"><?php echo esc_html( $t['platforms_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['platforms_desc'] ); ?></p>
      </div>

      <!-- Platform Cards -->
      <div class="grid md:grid-cols-2 gap-8">
        <!-- Apple Wallet -->
        <div class="feature-card relative bg-dark-800/50 rounded-3xl p-8 border border-white/10 hover:border-apple-blue/30 transition-all duration-500 reveal">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-16 h-16 rounded-2xl bg-black flex items-center justify-center">
              <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
            </div>
            <div>
              <h3 class="text-2xl font-semibold text-white">Apple Wallet</h3>
              <div class="text-apple-silver text-sm">iOS 6+ • iPhone & Apple Watch</div>
            </div>
          </div>

          <div class="space-y-3 mb-6">
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['apple_pkpass'] ); ?></span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['apple_push'] ); ?></span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['apple_location'] ); ?></span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['apple_lockscreen'] ); ?></span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['apple_watch'] ); ?></span>
            </div>
          </div>

          <div class="btn-apple-wallet inline-flex">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
            <span class="font-medium">Add to Apple Wallet</span>
          </div>
        </div>

        <!-- Google Pay -->
        <div class="feature-card relative bg-dark-800/50 rounded-3xl p-8 border border-white/10 hover:border-google-blue/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center">
              <svg class="w-10 h-10" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
            </div>
            <div>
              <h3 class="text-2xl font-semibold text-white">Google Pay</h3>
              <div class="text-gray-400 text-sm">Android 5.0+ • Wear OS</div>
            </div>
          </div>

          <div class="space-y-3 mb-6">
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['google_jwt'] ); ?></span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['google_auto'] ); ?></span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['google_notif'] ); ?></span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['google_calendar'] ); ?></span>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-white/70"><?php echo esc_html( $t['google_backup'] ); ?></span>
            </div>
          </div>

          <div class="btn-google-pay inline-flex">
            <svg class="w-6 h-6" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
            <span class="font-medium text-gray-700">Save to Google Pay</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CARD LIFECYCLE ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['lifecycle_label'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['lifecycle_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['lifecycle_title2'] ); ?></span></h2>
      </div>

      <div class="grid md:grid-cols-5 gap-4 reveal">
        <!-- Step 1 -->
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-wallet-gradient1 to-wallet-gradient2 flex items-center justify-center mx-auto mb-4">
            <span class="text-white font-bold text-xl">1</span>
          </div>
          <h4 class="text-white font-semibold mb-2"><?php echo esc_html( $t['step_generate'] ); ?></h4>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['step_generate_desc'] ); ?></p>
        </div>

        <!-- Arrow -->
        <div class="hidden md:flex items-center justify-center">
          <svg class="w-8 h-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </div>

        <!-- Step 2 -->
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-wallet-gradient1 to-wallet-gradient2 flex items-center justify-center mx-auto mb-4">
            <span class="text-white font-bold text-xl">2</span>
          </div>
          <h4 class="text-white font-semibold mb-2"><?php echo esc_html( $t['step_delivery'] ); ?></h4>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['step_delivery_desc'] ); ?></p>
        </div>

        <!-- Arrow -->
        <div class="hidden md:flex items-center justify-center">
          <svg class="w-8 h-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </div>

        <!-- Step 3 -->
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-wallet-gradient1 to-wallet-gradient2 flex items-center justify-center mx-auto mb-4">
            <span class="text-white font-bold text-xl">3</span>
          </div>
          <h4 class="text-white font-semibold mb-2"><?php echo esc_html( $t['step_updates'] ); ?></h4>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['step_updates_desc'] ); ?></p>
        </div>
      </div>

      <div class="grid md:grid-cols-5 gap-4 mt-8 reveal reveal-delay-1">
        <!-- Empty space for alignment -->
        <div class="hidden md:block"></div>

        <!-- Step 4 -->
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-green to-brand-cyan flex items-center justify-center mx-auto mb-4">
            <span class="text-white font-bold text-xl">4</span>
          </div>
          <h4 class="text-white font-semibold mb-2"><?php echo esc_html( $t['step_checkin'] ); ?></h4>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['step_checkin_desc'] ); ?></p>
        </div>

        <!-- Arrow -->
        <div class="hidden md:flex items-center justify-center">
          <svg class="w-8 h-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </div>

        <!-- Step 5 -->
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-green to-brand-cyan flex items-center justify-center mx-auto mb-4">
            <span class="text-white font-bold text-xl">5</span>
          </div>
          <h4 class="text-white font-semibold mb-2"><?php echo esc_html( $t['step_expire'] ); ?></h4>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['step_expire_desc'] ); ?></p>
        </div>

        <div class="hidden md:block"></div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['usecases_label'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['usecases_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['usecases_title2'] ); ?></span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-wallet-gradient1/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-wallet-gradient1/20 to-wallet-gradient2/20 flex items-center justify-center mb-4"><span class="text-2xl">🎸</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['uc_concerts'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['uc_concerts_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-wallet-gradient1/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10 flex items-center justify-center mb-4"><span class="text-2xl">🎪</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['uc_festivals'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['uc_festivals_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-wallet-gradient1/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/10 flex items-center justify-center mb-4"><span class="text-2xl">🎤</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['uc_conferences'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['uc_conferences_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-wallet-gradient1/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green/20 to-brand-green/10 flex items-center justify-center mb-4"><span class="text-2xl">⚽</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['uc_sports'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['uc_sports_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-wallet-gradient1/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-rose/20 to-brand-rose/10 flex items-center justify-center mb-4"><span class="text-2xl">🎭</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['uc_theater'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['uc_theater_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-wallet-gradient1/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10 flex items-center justify-center mb-4"><span class="text-2xl">🚗</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['uc_parking'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['uc_parking_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-wallet-gradient1/10 to-wallet-gradient2/10 rounded-3xl p-8 md:p-12 border border-wallet-gradient1/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "<?php echo $t['testimonial_quote']; ?>"
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-wallet-gradient1 to-wallet-gradient2"></div>
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
    <div class="absolute inset-0 bg-gradient-to-br from-wallet-gradient1/20 via-transparent to-wallet-gradient2/20"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(102,126,234,0.3) 0%, rgba(118,75,162,0.2) 100%);"></div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['cta_title'] ); ?><br><span class="text-gradient-wallet"><?php echo esc_html( $t['cta_title2'] ); ?></span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['cta_desc'] ); ?></p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-wallet-gradient1 to-wallet-gradient2 text-white hover:scale-105 hover:shadow-glow-wallet transition-all duration-300">
          <?php echo esc_html( $t['cta_activate'] ); ?>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          <?php echo esc_html( $t['cta_contact'] ); ?>
        </a>
      </div>

      <div class="flex items-center justify-center gap-6 mt-8 reveal reveal-delay-3">
        <div class="flex items-center gap-2 text-white/30 text-sm">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
          Apple Wallet
        </div>
        <div class="flex items-center gap-2 text-white/30 text-sm">
          <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/></svg>
          Google Pay
        </div>
        <div class="text-white/30 text-sm"><?php echo esc_html( $t['offline_access'] ); ?></div>
      </div>
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
