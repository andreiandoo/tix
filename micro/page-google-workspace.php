<?php
/**
 * Template Name: Micro - Google Workspace
 * Description: Landing page for Google Workspace integration (Drive, Calendar, Gmail)
 */

get_header();

$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'                  => 'Drive • Calendar • Gmail',
	'hero_title'             => 'Google',
	'hero_title2'            => 'Workspace',
	'hero_desc'              => $current_lang === 'ro'
		? 'Conectează evenimentele cu <strong class="text-white">Drive, Calendar și Gmail</strong>. Fișiere sincronizate, programări automate, email-uri profesionale. Totul în ecosistemul Google.'
		: 'Connect events with <strong class="text-white">Drive, Calendar and Gmail</strong>. Synced files, automatic scheduling, professional emails. Everything in the Google ecosystem.',
	'cta_connect'            => $current_lang === 'ro' ? 'Conectează cu Google' : 'Connect with Google',
	'cta_services'           => $current_lang === 'ro' ? 'Vezi serviciile' : 'See services',
	'sync_active'            => $current_lang === 'ro' ? 'Sincronizare activă' : 'Sync active',
	'connected'              => $current_lang === 'ro' ? 'Conectat' : 'Connected',
	'secured'                => $current_lang === 'ro' ? 'Securizat' : 'Secured',
	'realtime'               => 'Real-time',
	'auto_sync'              => 'Auto Sync',

	// Drive mockup
	'events_2025'            => $current_lang === 'ro' ? 'Evenimente 2025' : 'Events 2025',
	'shared_drive'           => $current_lang === 'ro' ? 'Shared Drive • 24 fișiere' : 'Shared Drive • 24 files',
	'sales_report'           => $current_lang === 'ro' ? 'Raport Vânzări - Festival.xlsx' : 'Sales Report - Festival.xlsx',
	'updated_5min'           => $current_lang === 'ro' ? 'Actualizat acum 5 min' : 'Updated 5 min ago',
	'new_label'              => $current_lang === 'ro' ? 'Nou' : 'New',
	'participant_list'       => $current_lang === 'ro' ? 'Lista Participanți.pdf' : 'Participants List.pdf',
	'auto_generated'         => $current_lang === 'ro' ? 'Generat automat' : 'Auto-generated',

	// Calendar mockup
	'guests_label'           => $current_lang === 'ro' ? 'invitați' : 'guests',
	'tech_setup'             => $current_lang === 'ro' ? 'Setup Tehnic' : 'Technical Setup',

	// Gmail mockup
	'ticket_confirm'         => $current_lang === 'ro' ? 'Confirmare Bilet - Maria I.' : 'Ticket Confirmation - Maria I.',
	'sent'                   => $current_lang === 'ro' ? 'Trimis' : 'Sent',
	'your_tickets_for'       => $current_lang === 'ro' ? 'Biletele tale pentru Summer Festival 2025...' : 'Your tickets for Summer Festival 2025...',
	'event_reminder'         => $current_lang === 'ro' ? 'Reminder Eveniment' : 'Event Reminder',
	'scheduled'              => $current_lang === 'ro' ? 'Programat' : 'Scheduled',
	'sends_tomorrow'         => $current_lang === 'ro' ? 'Se trimite mâine la 09:00' : 'Sends tomorrow at 09:00',

	// Services Section
	'services_label'         => $current_lang === 'ro' ? 'Servicii Integrate' : 'Integrated Services',
	'services_title'         => 'Drive, Calendar,',
	'services_title2'        => 'Gmail',
	'services_desc'          => $current_lang === 'ro'
		? 'Trei servicii esențiale, o singură integrare. Workflow-uri fluide în ecosistemul Google.'
		: 'Three essential services, one integration. Smooth workflows in the Google ecosystem.',

	// Drive features
	'drive_desc'             => $current_lang === 'ro'
		? 'Stochează rapoarte, exporturi și documente direct în Drive. Shared Drives pentru colaborare în echipă.'
		: 'Store reports, exports and documents directly in Drive. Shared Drives for team collaboration.',
	'drive_f1'               => $current_lang === 'ro' ? 'Export automat rapoarte' : 'Auto export reports',
	'drive_f2'               => $current_lang === 'ro' ? 'Shared Drives suport' : 'Shared Drives support',
	'drive_f3'               => $current_lang === 'ro' ? 'Link-uri partajabile' : 'Shareable links',
	'drive_f4'               => 'PDF, Excel, CSV',

	// Calendar features
	'calendar_desc'          => $current_lang === 'ro'
		? 'Sincronizează evenimentele automat. Invitații, remindere și verificare disponibilitate.'
		: 'Sync events automatically. Invites, reminders and availability check.',
	'calendar_f1'            => $current_lang === 'ro' ? 'Creare evenimente automate' : 'Auto event creation',
	'calendar_f2'            => $current_lang === 'ro' ? 'Invitații participanți' : 'Participant invites',
	'calendar_f3'            => $current_lang === 'ro' ? 'Remindere automate' : 'Auto reminders',
	'calendar_f4'            => $current_lang === 'ro' ? 'Calendare multiple' : 'Multiple calendars',

	// Gmail features
	'gmail_desc'             => $current_lang === 'ro'
		? 'Trimite email-uri profesionale prin infrastructura Google. Confirmări, remindere, follow-up.'
		: 'Send professional emails via Google infrastructure. Confirmations, reminders, follow-up.',
	'gmail_f1'               => $current_lang === 'ro' ? 'Email-uri tranzacționale' : 'Transactional emails',
	'gmail_f2'               => $current_lang === 'ro' ? 'Template-uri HTML' : 'HTML templates',
	'gmail_f3'               => $current_lang === 'ro' ? 'Atașamente fișiere' : 'File attachments',
	'gmail_f4'               => $current_lang === 'ro' ? 'Urmărire livrare' : 'Delivery tracking',

	// Data Flow Section
	'dataflow_label'         => $current_lang === 'ro' ? 'Flux de Date' : 'Data Flow',
	'dataflow_title'         => $current_lang === 'ro' ? 'Sincronizare' : 'Automatic',
	'dataflow_title2'        => $current_lang === 'ro' ? 'automată' : 'sync',
	'dataflow_desc'          => $current_lang === 'ro'
		? 'Datele curg natural între Tixello și Google Workspace. Fără intervenție manuală.'
		: 'Data flows naturally between Tixello and Google Workspace. No manual intervention.',
	'ticketing_platform'     => $current_lang === 'ro' ? 'Platforma de ticketing' : 'Ticketing platform',
	'bidirectional'          => $current_lang === 'ro' ? 'Bidirecțional' : 'Bidirectional',
	'reports_flow'           => $current_lang === 'ro' ? 'Rapoarte' : 'Reports',
	'events_flow'            => $current_lang === 'ro' ? 'Evenimente' : 'Events',
	'emails_flow'            => 'Email-uri',
	'webhooks_flow'          => 'Webhooks',
	'notifications'          => $current_lang === 'ro' ? 'Notificări' : 'Notifications',

	// Use Cases Section
	'usecases_label'         => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
	'usecases_title'         => $current_lang === 'ro' ? 'Productivitate' : 'Google-style',
	'usecases_title2'        => 'Google-style',
	'uc_reporting'           => $current_lang === 'ro' ? 'Raportare Automatizată' : 'Automated Reporting',
	'uc_reporting_desc'      => $current_lang === 'ro'
		? 'Rapoartele de vânzări se încarcă în Drive zilnic. Finance-ul accesează fără export manual.'
		: 'Sales reports upload to Drive daily. Finance accesses without manual export.',
	'uc_scheduling'          => $current_lang === 'ro' ? 'Programare Evenimente' : 'Event Scheduling',
	'uc_scheduling_desc'     => $current_lang === 'ro'
		? 'Sincronizează în calendar. Setup, demontare, timing - toată lumea vede același program.'
		: 'Sync to calendar. Setup, teardown, timing - everyone sees the same schedule.',
	'uc_comms'               => $current_lang === 'ro' ? 'Comunicări Clienți' : 'Client Communications',
	'uc_comms_desc'          => $current_lang === 'ro'
		? 'Email-uri prin Gmail: confirmări, remindere, follow-up post-eveniment.'
		: 'Emails via Gmail: confirmations, reminders, post-event follow-up.',
	'uc_sharing'             => $current_lang === 'ro' ? 'Partajare Echipă' : 'Team Sharing',
	'uc_sharing_desc'        => $current_lang === 'ro'
		? 'Shared Drives pentru materiale, contracte, checklist-uri. Colaborare în timp real.'
		: 'Shared Drives for materials, contracts, checklists. Real-time collaboration.',
	'uc_stakeholders'        => $current_lang === 'ro' ? 'Actualizări Stakeholderi' : 'Stakeholder Updates',
	'uc_stakeholders_desc'   => $current_lang === 'ro'
		? 'Link-uri live către rapoarte. Sponsorii văd date curente fără email-uri repetate.'
		: 'Live links to reports. Sponsors see current data without repeated emails.',
	'uc_security'            => 'Enterprise Security',
	'uc_security_desc'       => $current_lang === 'ro'
		? 'Service accounts, delegare domeniu, permisiuni granulare. Securitate Google.'
		: 'Service accounts, domain delegation, granular permissions. Google security.',

	// Testimonial
	'testimonial_quote'      => $current_lang === 'ro'
		? 'Echipa deja folosea <span class="font-semibold text-gradient-google">Google Workspace</span> zilnic. Acum rapoartele de vânzări apar automat în Drive, evenimentele în Calendar. Zero fricțiune.'
		: 'The team already used <span class="font-semibold text-gradient-google">Google Workspace</span> daily. Now sales reports appear automatically in Drive, events in Calendar. Zero friction.',
	'testimonial_author'     => 'Andrei M.',
	'testimonial_role'       => 'Operations Lead, Jazz in the Park',

	// Final CTA
	'cta_title'              => 'Google',
	'cta_title2'             => 'Workspace',
	'cta_desc'               => $current_lang === 'ro'
		? 'Drive, Calendar, Gmail într-o singură integrare. Productivitate în ecosistemul Google.'
		: 'Drive, Calendar, Gmail in one integration. Productivity in the Google ecosystem.',
	'cta_contact'            => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
	'cta_footer'             => 'OAuth 2.0 • Shared Drives • Service Accounts',
];
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  @font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }
  ::selection { background: #4285F4; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-google { background: linear-gradient(135deg, #4285F4 0%, #34A853 25%, #FBBC05 50%, #EA4335 75%, #4285F4 100%); background-size: 400% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(66, 133, 244, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Google logo colors ring */
  .google-ring {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: conic-gradient(from 0deg, #4285F4 0deg 90deg, #34A853 90deg 180deg, #FBBC05 180deg 270deg, #EA4335 270deg 360deg);
    padding: 4px;
  }
  .google-ring-inner {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: #13131c;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* Drive file icons */
  .file-icon {
    width: 40px;
    height: 48px;
    border-radius: 4px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .file-icon::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 12px;
    height: 12px;
    background: inherit;
    filter: brightness(0.8);
    clip-path: polygon(0 0, 100% 100%, 100% 0);
  }
  .file-icon.pdf { background: #EA4335; }
  .file-icon.xlsx { background: #34A853; }
  .file-icon.doc { background: #4285F4; }
  .file-icon.folder { background: #FBBC05; border-radius: 4px 4px 4px 4px; }
  .file-icon.folder::before { display: none; }

  /* Calendar event */
  .calendar-event {
    background: linear-gradient(135deg, rgba(3, 155, 229, 0.2), rgba(3, 155, 229, 0.1));
    border-left: 3px solid #039BE5;
    border-radius: 0 8px 8px 0;
  }

  /* Gmail message */
  .gmail-message {
    background: rgba(234, 67, 53, 0.05);
    border: 1px solid rgba(234, 67, 53, 0.2);
    border-left: 3px solid #EA4335;
  }

  /* Service card */
  .service-card {
    transition: all 0.3s;
  }
  .service-card:hover {
    transform: translateY(-4px);
  }
  .service-card.drive:hover { box-shadow: 0 20px 40px rgba(66, 133, 244, 0.2); }
  .service-card.calendar:hover { box-shadow: 0 20px 40px rgba(3, 155, 229, 0.2); }
  .service-card.gmail:hover { box-shadow: 0 20px 40px rgba(234, 67, 53, 0.2); }

  /* Sync arrow */
  .sync-line {
    height: 2px;
    background: linear-gradient(90deg, transparent, #4285F4, #34A853, #FBBC05, #EA4335, transparent);
    background-size: 200% 100%;
    animation: shimmer 2s linear infinite;
  }

  /* OAuth badge */
  .oauth-badge {
    background: linear-gradient(135deg, rgba(66, 133, 244, 0.1), rgba(52, 168, 83, 0.1));
    border: 1px solid rgba(66, 133, 244, 0.2);
  }
</style>

<main class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-google-blue/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-google-green/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating Google colors -->
    <div class="absolute w-4 h-4 rounded-full top-32 left-16 bg-google-blue opacity-30 animate-float"></div>
    <div class="absolute w-3 h-3 rounded-full top-48 right-24 bg-google-red opacity-20 animate-float" style="animation-delay: 0.5s;"></div>
    <div class="absolute w-5 h-5 rounded-full opacity-25 bottom-40 left-32 bg-google-yellow animate-float" style="animation-delay: 1s;"></div>
    <div class="absolute w-4 h-4 rounded-full bottom-32 right-40 bg-google-green opacity-20 animate-float" style="animation-delay: 1.5s;"></div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-google-blue/10 border-google-blue/20">
            <svg class="w-5 h-5" viewBox="0 0 24 24">
              <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
              <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
              <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
              <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            <span class="text-sm font-medium text-google-blue"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-google"><?php echo esc_html( $t['hero_title2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold transition-all duration-300 bg-white rounded-full group text-google-grey hover:bg-gray-100 hover:shadow-glow-google">
              <svg class="w-5 h-5" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
              </svg>
              <?php echo esc_html( $t['cta_connect'] ); ?>
            </a>
            <a href="#servicii" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              <?php echo esc_html( $t['cta_services'] ); ?>
            </a>
          </div>

          <!-- Services Row -->
          <div class="flex items-center gap-6">
            <div class="flex items-center gap-2">
              <svg class="w-6 h-6" viewBox="0 0 24 24"><path fill="#4285F4" d="M7.71 3.5L1.15 15l3.43 5.97L7.63 15h8.56z"/><path fill="#FBBC05" d="M14.57 8.5h6.86c.37.68.57 1.46.57 2.25 0 2.49-2.01 4.5-4.5 4.5h-2.08L14.57 8.5z"/><path fill="#34A853" d="M8.15 15l-.52.9.52.9H17.5c2.48 0 4.5-2.02 4.5-4.5 0-.81-.21-1.57-.57-2.23l-6.86 0z"/><path fill="#EA4335" d="M7.71 3.5l.52.9-.52.9-3.07 5.33L1.15 15l3.49-6.07z"/></svg>
              <span class="text-sm text-white/50">Drive</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-6 h-6" viewBox="0 0 24 24"><path fill="#4285F4" d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
              <span class="text-sm text-white/50">Calendar</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-6 h-6" viewBox="0 0 24 24"><path fill="#EA4335" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
              <span class="text-sm text-white/50">Gmail</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Google Services Hub -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{ activeService: 'drive' }" x-init="setInterval(() => {
            const services = ['drive', 'calendar', 'gmail'];
            const current = services.indexOf(activeService);
            activeService = services[(current + 1) % services.length];
          }, 3000)">

            <!-- Main Card -->
            <div class="p-6 border shadow-2xl bg-dark-800/80 backdrop-blur-xl rounded-3xl border-google-blue/20">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="google-ring">
                    <div class="google-ring-inner">
                      <svg class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                      </svg>
                    </div>
                  </div>
                  <div>
                    <div class="font-semibold text-white">Google Workspace</div>
                    <div class="text-xs text-white/40"><?php echo esc_html( $t['sync_active'] ); ?></div>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-google-green animate-pulse"></span>
                  <span class="text-xs text-google-green"><?php echo esc_html( $t['connected'] ); ?></span>
                </div>
              </div>

              <!-- Service Tabs -->
              <div class="flex gap-2 mb-6">
                <button
                  @click="activeService = 'drive'"
                  :class="activeService === 'drive' ? 'bg-google-blue/20 border-google-blue text-google-blue' : 'bg-dark-900/50 border-white/10 text-white/60'"
                  class="flex-1 px-3 py-2 text-sm font-medium transition-all border rounded-lg"
                >
                  <span class="flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="currentColor" d="M7.71 3.5L1.15 15l3.43 5.97L7.63 15h8.56z"/></svg>
                    Drive
                  </span>
                </button>
                <button
                  @click="activeService = 'calendar'"
                  :class="activeService === 'calendar' ? 'bg-calendar-event/20 border-calendar-event text-calendar-event' : 'bg-dark-900/50 border-white/10 text-white/60'"
                  class="flex-1 px-3 py-2 text-sm font-medium transition-all border rounded-lg"
                >
                  <span class="flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2z"/></svg>
                    Calendar
                  </span>
                </button>
                <button
                  @click="activeService = 'gmail'"
                  :class="activeService === 'gmail' ? 'bg-gmail-primary/20 border-gmail-primary text-gmail-primary' : 'bg-dark-900/50 border-white/10 text-white/60'"
                  class="flex-1 px-3 py-2 text-sm font-medium transition-all border rounded-lg"
                >
                  <span class="flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2z"/></svg>
                    Gmail
                  </span>
                </button>
              </div>

              <!-- Drive Content -->
              <div x-show="activeService === 'drive'" x-transition class="space-y-3">
                <div class="flex items-center gap-3 p-3 rounded-lg bg-dark-900/50">
                  <div class="flex items-center justify-center file-icon folder">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-medium text-white"><?php echo esc_html( $t['events_2025'] ); ?></div>
                    <div class="text-xs text-white/40"><?php echo esc_html( $t['shared_drive'] ); ?></div>
                  </div>
                </div>
                <div class="flex items-center gap-3 p-3 rounded-lg bg-dark-900/50">
                  <div class="flex items-center justify-center file-icon xlsx">
                    <span class="text-xs font-bold text-white">XLS</span>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-medium text-white"><?php echo esc_html( $t['sales_report'] ); ?></div>
                    <div class="text-xs text-white/40"><?php echo esc_html( $t['updated_5min'] ); ?></div>
                  </div>
                  <span class="text-xs text-google-green"><?php echo esc_html( $t['new_label'] ); ?></span>
                </div>
                <div class="flex items-center gap-3 p-3 rounded-lg bg-dark-900/50">
                  <div class="flex items-center justify-center file-icon pdf">
                    <span class="text-xs font-bold text-white">PDF</span>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-medium text-white"><?php echo esc_html( $t['participant_list'] ); ?></div>
                    <div class="text-xs text-white/40"><?php echo esc_html( $t['auto_generated'] ); ?></div>
                  </div>
                </div>
              </div>

              <!-- Calendar Content -->
              <div x-show="activeService === 'calendar'" x-transition class="space-y-3">
                <div class="p-3 rounded-lg calendar-event">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-calendar-event">Summer Festival 2025</span>
                    <span class="text-xs text-white/40">15 Iulie</span>
                  </div>
                  <div class="text-xs text-white/60">18:00 - 23:00 • Arena Parc Central</div>
                  <div class="flex items-center gap-2 mt-2">
                    <div class="flex -space-x-2">
                      <div class="flex items-center justify-center w-5 h-5 text-xs text-white rounded-full bg-google-blue">M</div>
                      <div class="flex items-center justify-center w-5 h-5 text-xs text-white rounded-full bg-google-green">A</div>
                      <div class="flex items-center justify-center w-5 h-5 text-xs text-white rounded-full bg-google-yellow">E</div>
                    </div>
                    <span class="text-xs text-white/40">+12 <?php echo esc_html( $t['guests_label'] ); ?></span>
                  </div>
                </div>
                <div class="p-3 rounded-lg calendar-event opacity-60">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-white"><?php echo esc_html( $t['tech_setup'] ); ?></span>
                    <span class="text-xs text-white/40">14 Iulie</span>
                  </div>
                  <div class="text-xs text-white/60">08:00 - 18:00 • Arena Parc Central</div>
                </div>
              </div>

              <!-- Gmail Content -->
              <div x-show="activeService === 'gmail'" x-transition class="space-y-3">
                <div class="p-3 rounded-lg gmail-message">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-white"><?php echo esc_html( $t['ticket_confirm'] ); ?></span>
                    <span class="text-xs text-gmail-primary"><?php echo esc_html( $t['sent'] ); ?></span>
                  </div>
                  <div class="mb-2 text-xs text-white/60"><?php echo esc_html( $t['your_tickets_for'] ); ?></div>
                  <div class="flex items-center gap-2">
                    <svg class="w-3 h-3 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/></svg>
                    <span class="text-xs text-white/40">bilete.pdf</span>
                  </div>
                </div>
                <div class="p-3 rounded-lg gmail-message opacity-60">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-white"><?php echo esc_html( $t['event_reminder'] ); ?></span>
                    <span class="text-xs text-white/40"><?php echo esc_html( $t['scheduled'] ); ?></span>
                  </div>
                  <div class="text-xs text-white/60"><?php echo esc_html( $t['sends_tomorrow'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating OAuth Badge -->
            <div class="absolute z-10 px-4 py-3 border shadow-xl -top-4 -right-4 bg-dark-800 rounded-xl border-google-green/30 animate-float">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-google-green/20">
                  <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-google-green">OAuth 2.0</div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['secured'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating Sync Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-google-blue/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-google-blue/20">
                  <svg class="w-4 h-4 text-google-blue animate-sync-rotate" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-google-blue"><?php echo esc_html( $t['auto_sync'] ); ?></div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['realtime'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SERVICES GRID ==================== -->
  <section class="relative py-24 overflow-hidden" id="servicii">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-google-blue"><?php echo esc_html( $t['services_label'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['services_title'] ); ?><br><span class="text-gradient-google"><?php echo esc_html( $t['services_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['services_desc'] ); ?></p>
      </div>

      <!-- Services Cards -->
      <div class="grid gap-8 md:grid-cols-3">
        <!-- Google Drive -->
        <div class="relative p-6 transition-all duration-500 border service-card drive feature-card bg-dark-800/50 rounded-2xl border-google-blue/20 hover:border-google-blue/50 reveal">
          <div class="flex items-center justify-center w-16 h-16 mb-6 rounded-2xl bg-google-blue/10">
            <svg class="w-8 h-8" viewBox="0 0 24 24">
              <path fill="#4285F4" d="M7.71 3.5L1.15 15l3.43 5.97L7.63 15h8.56z"/>
              <path fill="#FBBC05" d="M14.57 8.5h6.86c.37.68.57 1.46.57 2.25 0 2.49-2.01 4.5-4.5 4.5h-2.08L14.57 8.5z"/>
              <path fill="#34A853" d="M8.15 15l-.52.9.52.9H17.5c2.48 0 4.5-2.02 4.5-4.5 0-.81-.21-1.57-.57-2.23l-6.86 0z"/>
              <path fill="#EA4335" d="M7.71 3.5l.52.9-.52.9-3.07 5.33L1.15 15l3.49-6.07z"/>
            </svg>
          </div>
          <h3 class="mb-3 text-2xl font-semibold text-white">Google Drive</h3>
          <p class="mb-6 text-white/60"><?php echo esc_html( $t['drive_desc'] ); ?></p>

          <div class="space-y-3">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['drive_f1'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['drive_f2'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['drive_f3'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['drive_f4'] ); ?></span>
            </div>
          </div>
        </div>

        <!-- Google Calendar -->
        <div class="relative p-6 transition-all duration-500 border service-card calendar feature-card bg-dark-800/50 rounded-2xl border-calendar-event/20 hover:border-calendar-event/50 reveal reveal-delay-1">
          <div class="flex items-center justify-center w-16 h-16 mb-6 rounded-2xl bg-calendar-event/10">
            <svg class="w-8 h-8" viewBox="0 0 24 24">
              <path fill="#4285F4" d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/>
              <path fill="#34A853" d="M7 12h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"/>
            </svg>
          </div>
          <h3 class="mb-3 text-2xl font-semibold text-white">Google Calendar</h3>
          <p class="mb-6 text-white/60"><?php echo esc_html( $t['calendar_desc'] ); ?></p>

          <div class="space-y-3">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['calendar_f1'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['calendar_f2'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['calendar_f3'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['calendar_f4'] ); ?></span>
            </div>
          </div>
        </div>

        <!-- Gmail -->
        <div class="relative p-6 transition-all duration-500 border service-card gmail feature-card bg-dark-800/50 rounded-2xl border-gmail-primary/20 hover:border-gmail-primary/50 reveal reveal-delay-2">
          <div class="flex items-center justify-center w-16 h-16 mb-6 rounded-2xl bg-gmail-primary/10">
            <svg class="w-8 h-8" viewBox="0 0 24 24">
              <path fill="#EA4335" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2z"/>
              <path fill="#FFFFFF" d="M20 8l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
          </div>
          <h3 class="mb-3 text-2xl font-semibold text-white">Gmail</h3>
          <p class="mb-6 text-white/60"><?php echo esc_html( $t['gmail_desc'] ); ?></p>

          <div class="space-y-3">
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['gmail_f1'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['gmail_f2'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['gmail_f3'] ); ?></span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-4 h-4 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/70"><?php echo esc_html( $t['gmail_f4'] ); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== DATA FLOW ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-google-green"><?php echo esc_html( $t['dataflow_label'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['dataflow_title'] ); ?><br><span class="text-gradient-google"><?php echo esc_html( $t['dataflow_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['dataflow_desc'] ); ?></p>
      </div>

      <!-- Flow Visualization -->
      <div class="max-w-4xl mx-auto reveal">
        <div class="grid items-center gap-8 md:grid-cols-3">
          <!-- Tixello -->
          <div class="text-center">
            <div class="flex items-center justify-center w-20 h-20 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-brand-violet to-brand-cyan">
              <span class="text-2xl font-bold text-white font-display">T</span>
            </div>
            <div class="font-semibold text-white">Tixello</div>
            <div class="text-sm text-white/40"><?php echo esc_html( $t['ticketing_platform'] ); ?></div>
          </div>

          <!-- Arrows -->
          <div class="flex flex-col items-center gap-4">
            <div class="flex items-center w-full gap-2">
              <div class="flex-1 h-0.5 bg-gradient-to-r from-brand-violet to-google-blue"></div>
              <svg class="w-4 h-4 text-google-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </div>
            <div class="px-4 py-2 text-center border rounded-lg bg-dark-800/50 border-white/10">
              <div class="text-xs text-white/60"><?php echo esc_html( $t['bidirectional'] ); ?></div>
              <div class="text-sm font-medium text-white"><?php echo esc_html( $t['realtime'] ); ?> Sync</div>
            </div>
            <div class="flex items-center w-full gap-2">
              <svg class="w-4 h-4 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
              <div class="flex-1 h-0.5 bg-gradient-to-r from-google-blue to-brand-violet"></div>
            </div>
          </div>

          <!-- Google -->
          <div class="text-center">
            <div class="mx-auto mb-4 google-ring" style="width: 80px; height: 80px;">
              <div class="google-ring-inner">
                <svg class="w-8 h-8" viewBox="0 0 24 24">
                  <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                  <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                  <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                  <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
              </div>
            </div>
            <div class="font-semibold text-white">Google Workspace</div>
            <div class="text-sm text-white/40">Drive • Calendar • Gmail</div>
          </div>
        </div>

        <!-- Data Types -->
        <div class="grid gap-4 mt-12 md:grid-cols-4">
          <div class="p-4 text-center border rounded-xl bg-dark-800/50 border-google-blue/20">
            <div class="flex items-center justify-center w-10 h-10 mx-auto mb-2 rounded-lg bg-google-blue/20">
              <svg class="w-5 h-5 text-google-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <div class="text-sm font-medium text-white"><?php echo esc_html( $t['reports_flow'] ); ?></div>
            <div class="text-xs text-white/40">→ Drive</div>
          </div>

          <div class="p-4 text-center border rounded-xl bg-dark-800/50 border-calendar-event/20">
            <div class="flex items-center justify-center w-10 h-10 mx-auto mb-2 rounded-lg bg-calendar-event/20">
              <svg class="w-5 h-5 text-calendar-event" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <div class="text-sm font-medium text-white"><?php echo esc_html( $t['events_flow'] ); ?></div>
            <div class="text-xs text-white/40">→ Calendar</div>
          </div>

          <div class="p-4 text-center border rounded-xl bg-dark-800/50 border-gmail-primary/20">
            <div class="flex items-center justify-center w-10 h-10 mx-auto mb-2 rounded-lg bg-gmail-primary/20">
              <svg class="w-5 h-5 text-gmail-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div class="text-sm font-medium text-white"><?php echo esc_html( $t['emails_flow'] ); ?></div>
            <div class="text-xs text-white/40">→ Gmail</div>
          </div>

          <div class="p-4 text-center border rounded-xl bg-dark-800/50 border-google-green/20">
            <div class="flex items-center justify-center w-10 h-10 mx-auto mb-2 rounded-lg bg-google-green/20">
              <svg class="w-5 h-5 text-google-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
            </div>
            <div class="text-sm font-medium text-white"><?php echo esc_html( $t['webhooks_flow'] ); ?></div>
            <div class="text-xs text-white/40">← <?php echo esc_html( $t['notifications'] ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-brand-violet"><?php echo esc_html( $t['usecases_label'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['usecases_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['usecases_title2'] ); ?></span></h2>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-google-blue/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-google-blue/20 to-google-blue/10"><span class="text-2xl">📊</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_reporting'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_reporting_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-calendar-event/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-calendar-event/20 to-calendar-event/10"><span class="text-2xl">📅</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_scheduling'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_scheduling_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-gmail-primary/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-gmail-primary/20 to-gmail-primary/10"><span class="text-2xl">📧</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_comms'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_comms_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-google-yellow/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-google-yellow/20 to-google-yellow/10"><span class="text-2xl">📁</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_sharing'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_sharing_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-google-green/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-google-green/20 to-google-green/10"><span class="text-2xl">🔗</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_stakeholders'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_stakeholders_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-violet/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10"><span class="text-2xl">🔒</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_security'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_security_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-google-blue/10 via-google-green/10 to-google-yellow/10 rounded-3xl md:p-12 border-google-blue/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="mb-8 text-2xl font-light leading-relaxed text-white md:text-3xl">
            "<?php echo $t['testimonial_quote']; ?>"
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="google-ring" style="width: 56px; height: 56px;">
              <div class="google-ring-inner">
                <span class="font-bold text-white">AM</span>
              </div>
            </div>
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
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-google-blue/10 via-google-green/10 to-google-yellow/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: conic-gradient(from 0deg, rgba(66,133,244,0.2), rgba(52,168,83,0.2), rgba(251,188,5,0.2), rgba(234,67,53,0.2));"></div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal"><?php echo esc_html( $t['cta_title'] ); ?><br><span class="text-gradient-google"><?php echo esc_html( $t['cta_title2'] ); ?></span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1"><?php echo esc_html( $t['cta_desc'] ); ?></p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold transition-all duration-300 bg-white rounded-full group text-google-grey hover:bg-gray-100 hover:shadow-glow-google">
          <svg class="w-6 h-6" viewBox="0 0 24 24">
            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
          </svg>
          <?php echo esc_html( $t['cta_connect'] ); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
          <?php echo esc_html( $t['cta_contact'] ); ?>
        </a>
      </div>

      <p class="mt-8 text-sm text-white/30 reveal reveal-delay-3"><?php echo esc_html( $t['cta_footer'] ); ?></p>
    </div>
  </section>

</main>

<script>
  // Reveal on scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Feature card mouse tracking
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => { const rect = card.getBoundingClientRect(); card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`); card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`); });
  });
</script>

<?php get_footer(); ?>
