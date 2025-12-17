<?php
/**
 * Template Name: Micro - Invitatii
 * Description: VIP invitations and accreditations landing page
 */

get_header();

$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'                  => $current_lang === 'ro' ? 'Oaspeți VIP & Acreditări' : 'VIP Guests & Accreditations',
	'hero_title'             => $current_lang === 'ro' ? 'Invitații' : 'Exclusive',
	'hero_title2'            => $current_lang === 'ro' ? 'exclusive' : 'invitations',
	'hero_desc'              => $current_lang === 'ro'
		? 'Gestionează <strong class="text-white">oaspeți VIP</strong>, acreditări de presă și bilete gratuite. Import CSV, QR unic cu protecție anti-replay, urmărire completă de la generare la check-in.'
		: 'Manage <strong class="text-white">VIP guests</strong>, press accreditations and free tickets. CSV import, unique QR with anti-replay protection, complete tracking from generation to check-in.',
	'cta_create'             => $current_lang === 'ro' ? 'Creează Invitații' : 'Create Invitations',
	'cta_csv'                => $current_lang === 'ro' ? 'Vezi importul CSV' : 'See CSV import',
	'stat_csv'               => $current_lang === 'ro' ? 'Import instant' : 'Instant import',
	'stat_qr'                => $current_lang === 'ro' ? 'Anti-replay' : 'Anti-replay',
	'stat_tracking'          => $current_lang === 'ro' ? 'Tracking' : 'Tracking',
	'exclusive_invitation'   => $current_lang === 'ro' ? 'Invitație Exclusivă' : 'Exclusive Invitation',
	'new_year_gala'          => $current_lang === 'ro' ? 'Gala de Anul Nou 2025' : 'New Year Gala 2025',
	'status_created'         => $current_lang === 'ro' ? 'Creat' : 'Created',
	'status_rendered'        => $current_lang === 'ro' ? 'Generat' : 'Rendered',
	'status_emailed'         => $current_lang === 'ro' ? 'Trimis' : 'Sent',
	'status_downloaded'      => $current_lang === 'ro' ? 'Descărcat' : 'Downloaded',
	'status_checkedin'       => $current_lang === 'ro' ? 'Check-in ✓' : 'Check-in ✓',
	'guest'                  => $current_lang === 'ro' ? 'Invitat' : 'Guest',
	'company'                => $current_lang === 'ro' ? 'Companie' : 'Company',
	'title_label'            => $current_lang === 'ro' ? 'Titlu' : 'Title',
	'seat'                   => $current_lang === 'ro' ? 'Loc' : 'Seat',
	'date_label'             => $current_lang === 'ro' ? 'Data' : 'Date',
	'time_label'             => $current_lang === 'ro' ? 'Ora' : 'Time',
	'batch_label'            => $current_lang === 'ro' ? 'Lot' : 'Batch',
	'invitations'            => $current_lang === 'ro' ? 'invitații' : 'invitations',
	'delivered'              => $current_lang === 'ro' ? 'Livrat' : 'Delivered',
	'ago_2min'               => $current_lang === 'ro' ? 'acum 2 min' : '2 min ago',

	// CSV Import
	'csv_label'              => $current_lang === 'ro' ? 'Import Rapid' : 'Quick Import',
	'csv_title'              => $current_lang === 'ro' ? 'Import CSV' : 'CSV Import',
	'csv_title2'             => $current_lang === 'ro' ? 'inteligent' : 'smart',
	'csv_desc'               => $current_lang === 'ro'
		? 'Trage și plasează foaia ta de calcul. Mapare automată a coloanelor, generare în masă, personalizare pentru fiecare invitat.'
		: 'Drag and drop your spreadsheet. Automatic column mapping, bulk generation, personalization for each guest.',
	'drag_drop'              => $current_lang === 'ro' ? 'Drag & Drop' : 'Drag & Drop',
	'drag_drop_desc'         => $current_lang === 'ro' ? 'Trage fișierul CSV direct în browser' : 'Drag the CSV file directly into the browser',
	'field_mapping'          => $current_lang === 'ro' ? 'Mapare Câmpuri' : 'Field Mapping',
	'field_mapping_desc'     => $current_lang === 'ro' ? 'Conectează coloanele CSV la datele invitației' : 'Connect CSV columns to invitation data',
	'batch_gen'              => $current_lang === 'ro' ? 'Generare în Lot' : 'Batch Generation',
	'batch_gen_desc'         => $current_lang === 'ro' ? 'Sute de invitații generate în secunde' : 'Hundreds of invitations generated in seconds',
	'rows_detected'          => $current_lang === 'ro' ? 'rânduri detectate' : 'rows detected',
	'uploaded_success'       => $current_lang === 'ro' ? 'Încărcat cu succes' : 'Uploaded successfully',
	'name_field'             => $current_lang === 'ro' ? 'Nume' : 'Name',
	'generate_btn'           => $current_lang === 'ro' ? 'Generează 250 Invitații' : 'Generate 250 Invitations',

	// Status Flow
	'tracking_label'         => $current_lang === 'ro' ? 'Urmărire Completă' : 'Complete Tracking',
	'tracking_title'         => $current_lang === 'ro' ? 'Știi totul despre' : 'Know everything about',
	'tracking_title2'        => $current_lang === 'ro' ? 'fiecare invitație' : 'each invitation',
	'tracking_desc'          => $current_lang === 'ro' ? 'De la creare până la check-in, urmărești fiecare pas. Niciun oaspete pierdut.' : 'From creation to check-in, you track every step. No guest lost.',
	'inv_in_system'          => $current_lang === 'ro' ? 'Invitație în sistem' : 'Invitation in system',
	'pdf_created'            => $current_lang === 'ro' ? 'PDF creat' : 'PDF created',
	'email_delivered'        => $current_lang === 'ro' ? 'Email livrat' : 'Email delivered',
	'pdf_saved'              => $current_lang === 'ro' ? 'PDF salvat' : 'PDF saved',
	'viewed'                 => $current_lang === 'ro' ? 'Vizualizat' : 'Viewed',
	'guest_entered'          => $current_lang === 'ro' ? 'Oaspete intrat' : 'Guest entered',
	'voided_note'            => $current_lang === 'ro' ? 'Invitațiile anulate sunt blocate automat la check-in' : 'Voided invitations are automatically blocked at check-in',

	// Batch Management
	'batch_mgmt_label'       => $current_lang === 'ro' ? 'Gestionare Loturi' : 'Batch Management',
	'batch_mgmt_title'       => $current_lang === 'ro' ? 'Organizează' : 'Organize',
	'batch_mgmt_title2'      => $current_lang === 'ro' ? 'pe categorii' : 'by categories',
	'batch_mgmt_desc'        => $current_lang === 'ro'
		? 'Grupează invitațiile în loturi: presă, sponsori, VIP, artiști. Urmărește progresul fiecărui lot separat.'
		: 'Group invitations into batches: press, sponsors, VIP, artists. Track progress of each batch separately.',
	'inv_batches'            => $current_lang === 'ro' ? 'Loturi Invitații' : 'Invitation Batches',
	'active_batches'         => $current_lang === 'ro' ? 'loturi active' : 'active batches',
	'new_batch'              => $current_lang === 'ro' ? '+ Lot Nou' : '+ New Batch',
	'press_media'            => $current_lang === 'ro' ? 'Presă & Media' : 'Press & Media',
	'completed'              => $current_lang === 'ro' ? 'Completat' : 'Completed',
	'checkin'                => $current_lang === 'ro' ? 'check-in' : 'check-in',
	'sponsors_vip'           => $current_lang === 'ro' ? 'Sponsori VIP' : 'VIP Sponsors',
	'in_sending'             => $current_lang === 'ro' ? 'În trimitere' : 'Sending',
	'artists_team'           => $current_lang === 'ro' ? 'Artiști & Echipă' : 'Artists & Team',
	'generating'             => $current_lang === 'ro' ? 'Generare...' : 'Generating...',
	'export_csv'             => $current_lang === 'ro' ? '📥 Export CSV' : '📥 Export CSV',
	'reminder'               => $current_lang === 'ro' ? '📧 Reminder' : '📧 Reminder',
	'multiple_batches'       => $current_lang === 'ro' ? 'Loturi Multiple' : 'Multiple Batches',
	'multiple_batches_desc'  => $current_lang === 'ro' ? 'Creează loturi separate pentru diferite categorii de oaspeți' : 'Create separate batches for different guest categories',
	'stats_per_batch'        => $current_lang === 'ro' ? 'Statistici per Lot' : 'Stats per Batch',
	'stats_per_batch_desc'   => $current_lang === 'ro' ? 'Vezi rata de livrare, descărcare și check-in pentru fiecare' : 'See delivery, download and check-in rate for each',
	'bulk_zip'               => $current_lang === 'ro' ? 'ZIP în Masă' : 'Bulk ZIP',
	'bulk_zip_desc'          => $current_lang === 'ro' ? 'Descarcă toate PDF-urile unui lot într-o singură arhivă' : 'Download all PDFs of a batch in a single archive',

	// QR Security
	'security_label'         => $current_lang === 'ro' ? 'Securitate' : 'Security',
	'security_title'         => $current_lang === 'ro' ? 'QR cu protecție' : 'QR with',
	'security_title2'        => $current_lang === 'ro' ? 'anti-replay' : 'anti-replay protection',
	'security_desc'          => $current_lang === 'ro'
		? 'Fiecare cod QR conține checksum unic. Odată scanat, invitația este marcată și nu poate fi refolosită. Zero intrări duplicate.'
		: 'Each QR code contains a unique checksum. Once scanned, the invitation is marked and cannot be reused. Zero duplicate entries.',
	'unique_checksum'        => $current_lang === 'ro' ? 'Checksum Unic' : 'Unique Checksum',
	'unique_checksum_desc'   => $current_lang === 'ro' ? 'Fiecare QR include hash verificabil server-side' : 'Each QR includes server-side verifiable hash',
	'replay_block'           => $current_lang === 'ro' ? 'Blocare Replay' : 'Replay Block',
	'replay_block_desc'      => $current_lang === 'ro' ? 'A doua scanare este respinsă automat' : 'Second scan is automatically rejected',
	'signed_urls'            => $current_lang === 'ro' ? 'URL-uri Semnate' : 'Signed URLs',
	'signed_urls_desc'       => $current_lang === 'ro' ? 'Link-uri de descărcare cu expirare automată' : 'Download links with automatic expiration',
	'valid_scan'             => $current_lang === 'ro' ? 'Scanare Validă' : 'Valid Scan',
	'replay_blocked'         => $current_lang === 'ro' ? 'Replay Blocat!' : 'Replay Blocked!',
	'same_code'              => $current_lang === 'ro' ? 'Același cod' : 'Same code',
	'already_used'           => $current_lang === 'ro' ? 'Deja folosit la' : 'Already used at',
	'gate'                   => $current_lang === 'ro' ? 'Poartă' : 'Gate',
	'scans_logged'           => $current_lang === 'ro' ? '🔒 Toate scanările sunt logate cu timestamp, IP și poartă' : '🔒 All scans are logged with timestamp, IP and gate',

	// Use Cases
	'usecases_label'         => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
	'usecases_title'         => $current_lang === 'ro' ? 'Pentru evenimente' : 'For events',
	'usecases_title2'        => $current_lang === 'ro' ? 'unde listele contează' : 'where lists matter',
	'uc_gala'                => $current_lang === 'ro' ? 'Gale & Dineuri' : 'Galas & Dinners',
	'uc_gala_desc'           => $current_lang === 'ro' ? 'Invitații personalizate cu locuri pre-atribuite la mese. Import lista de oaspeți din Excel.' : 'Personalized invitations with pre-assigned table seats. Import guest list from Excel.',
	'uc_premiere'            => $current_lang === 'ro' ? 'Premiere Film' : 'Film Premieres',
	'uc_premiere_desc'       => $current_lang === 'ro' ? 'Acreditări pentru presă, actori și echipa de producție. Categorii diferite de acces.' : 'Accreditations for press, actors and production team. Different access categories.',
	'uc_launch'              => $current_lang === 'ro' ? 'Lansări Produse' : 'Product Launches',
	'uc_launch_desc'         => $current_lang === 'ro' ? 'Invită parteneri, influenceri și presă. Urmărește cine confirmă participarea.' : 'Invite partners, influencers and press. Track who confirms attendance.',
	'uc_press'               => $current_lang === 'ro' ? 'Acreditări Presă' : 'Press Accreditations',
	'uc_press_desc'          => $current_lang === 'ro' ? 'Lot separat pentru jurnaliști cu acces special la zonele de presă și backstage.' : 'Separate batch for journalists with special access to press areas and backstage.',
	'uc_sponsors'            => $current_lang === 'ro' ? 'Sponsori & Parteneri' : 'Sponsors & Partners',
	'uc_sponsors_desc'       => $current_lang === 'ro' ? 'Invitații brandate pentru sponsorii evenimentului. Include note personalizate.' : 'Branded invitations for event sponsors. Includes personalized notes.',
	'uc_artists'             => $current_lang === 'ro' ? 'Artiști & Crew' : 'Artists & Crew',
	'uc_artists_desc'        => $current_lang === 'ro' ? 'Acces all-areas pentru echipa de producție, artiști și staff tehnic.' : 'All-areas access for production team, artists and technical staff.',

	// Testimonial
	'testimonial_quote'      => $current_lang === 'ro'
		? 'Am trimis <span class="text-gradient-gold font-semibold">500 de invitații</span> în 10 minute. Import CSV, un click pe Send, gata. Știam exact cine și-a descărcat invitația și cine avea nevoie de reminder.'
		: 'I sent <span class="text-gradient-gold font-semibold">500 invitations</span> in 10 minutes. CSV import, one click on Send, done. I knew exactly who downloaded their invitation and who needed a reminder.',
	'testimonial_author'     => 'Alexandru P.',
	'testimonial_role'       => $current_lang === 'ro' ? 'Event Director, Gala Premiilor ANIS' : 'Event Director, ANIS Awards Gala',

	// Final CTA
	'cta_title'              => $current_lang === 'ro' ? 'Invitații' : 'VIP',
	'cta_title2'             => 'VIP',
	'cta_desc'               => $current_lang === 'ro'
		? 'Import CSV, QR anti-replay, urmărire completă. Gestionează oaspeții speciali ca un profesionist.'
		: 'CSV import, anti-replay QR, complete tracking. Manage special guests like a professional.',
	'cta_contact'            => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
	'cta_footer'             => $current_lang === 'ro'
		? 'Import CSV • QR Anti-Replay • Urmărire Completă • Export Rapoarte'
		: 'CSV Import • Anti-Replay QR • Complete Tracking • Report Export',
];
?>

<style>
  ::selection { background: #D4AF37; color: #1C1C1C; }

  .text-gradient-gold { background: linear-gradient(135deg, #D4AF37 0%, #F7E7CE 25%, #FFD700 50%, #D4AF37 75%, #CD7F32 100%); background-size: 400% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: goldShine 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(212, 175, 55, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* VIP Invitation card */
  .invitation-card {
    background: linear-gradient(145deg, #1C1C1C 0%, #13131c 100%);
    border: 1px solid rgba(212, 175, 55, 0.3);
    position: relative;
    overflow: hidden;
  }
  .invitation-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #D4AF37, #FFD700, #D4AF37);
  }
  .invitation-card::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent 40%, rgba(212, 175, 55, 0.05) 50%, transparent 60%);
    animation: goldShine 4s linear infinite;
  }

  /* CSV Drop zone */
  .csv-dropzone {
    border: 2px dashed rgba(212, 175, 55, 0.3);
    background: rgba(212, 175, 55, 0.05);
    transition: all 0.3s;
  }
  .csv-dropzone:hover,
  .csv-dropzone.dragover {
    border-color: #D4AF37;
    background: rgba(212, 175, 55, 0.1);
    transform: scale(1.02);
  }

  /* Status badges */
  .status-created { background: rgba(212, 175, 55, 0.2); color: #D4AF37; }
  .status-rendered { background: rgba(139, 92, 246, 0.2); color: #8b5cf6; }
  .status-emailed { background: rgba(6, 182, 212, 0.2); color: #06b6d4; }
  .status-downloaded { background: rgba(59, 130, 246, 0.2); color: #3b82f6; }
  .status-opened { background: rgba(245, 158, 11, 0.2); color: #f59e0b; }
  .status-checkedin { background: rgba(16, 185, 129, 0.2); color: #10b981; }
  .status-voided { background: rgba(239, 68, 68, 0.2); color: #ef4444; }

  /* QR Code VIP style */
  .qr-vip {
    background: white;
    padding: 12px;
    border-radius: 12px;
    position: relative;
  }
  .qr-vip::before {
    content: 'VIP';
    position: absolute;
    top: -8px;
    right: -8px;
    background: linear-gradient(135deg, #D4AF37, #FFD700);
    color: #1C1C1C;
    font-size: 10px;
    font-weight: bold;
    padding: 2px 8px;
    border-radius: 4px;
  }

  /* Gold border glow */
  .gold-border {
    border: 1px solid rgba(212, 175, 55, 0.3);
    position: relative;
  }
  .gold-border::after {
    content: '';
    position: absolute;
    inset: -1px;
    border-radius: inherit;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.5), transparent, rgba(212, 175, 55, 0.5));
    z-index: -1;
    opacity: 0;
    transition: opacity 0.3s;
  }
  .gold-border:hover::after {
    opacity: 1;
  }

  /* Envelope animation */
  .envelope {
    perspective: 1000px;
  }
  .envelope-flap {
    transform-origin: top center;
    transition: transform 0.6s ease-out;
  }
  .envelope:hover .envelope-flap {
    transform: rotateX(-180deg);
  }

  /* Field mapping connector */
  .field-connector {
    position: relative;
  }
  .field-connector::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 100%;
    width: 40px;
    height: 2px;
    background: linear-gradient(90deg, #D4AF37, rgba(212, 175, 55, 0.3));
  }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #D4AF37, #FFD700, #CD7F32);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-vip-gold/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-vip-bronze/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">👑</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">✉️</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">🎭</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-vip-gold/10 border border-vip-gold/20 mb-6">
            <span class="text-vip-gold">👑</span>
            <span class="text-vip-gold text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-gold"><?php echo esc_html( $t['hero_title2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-vip-gold to-vip-accent text-vip-dark hover:scale-105 hover:shadow-glow-gold transition-all duration-300">
              <?php echo esc_html( $t['cta_create'] ); ?>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#import" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              <?php echo esc_html( $t['cta_csv'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-display font-bold text-vip-gold">CSV</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_csv'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-white">QR</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_qr'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-brand-green">100%</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['stat_tracking'] ); ?></div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - VIP Invitation Card -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            status: 'created',
            statuses: ['created', 'rendered', 'emailed', 'downloaded', 'checked_in'],
            statusIndex: 0
          }" x-init="setInterval(() => {
            statusIndex = (statusIndex + 1) % statuses.length;
            status = statuses[statusIndex];
          }, 2500)">

            <!-- Main Invitation Card -->
            <div class="invitation-card rounded-2xl p-6 shadow-invitation animate-vip-glow">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6 relative z-10">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-vip-gold to-vip-accent flex items-center justify-center">
                    <span class="text-vip-dark font-bold text-sm">VIP</span>
                  </div>
                  <div>
                    <div class="text-white font-semibold"><?php echo esc_html( $t['exclusive_invitation'] ); ?></div>
                    <div class="text-white/40 text-xs"><?php echo esc_html( $t['new_year_gala'] ); ?></div>
                  </div>
                </div>
                <div
                  :class="{
                    'status-created': status === 'created',
                    'status-rendered': status === 'rendered',
                    'status-emailed': status === 'emailed',
                    'status-downloaded': status === 'downloaded',
                    'status-checkedin': status === 'checked_in'
                  }"
                  class="px-3 py-1 rounded-full text-xs font-medium transition-all duration-300"
                  x-text="status === 'created' ? 'Creat' : status === 'rendered' ? 'Generat' : status === 'emailed' ? 'Trimis' : status === 'downloaded' ? 'Descărcat' : 'Check-in ✓'"
                ></div>
              </div>

              <!-- Gold line -->
              <div class="h-px bg-gradient-to-r from-transparent via-vip-gold/50 to-transparent mb-6"></div>

              <!-- Guest Info -->
              <div class="bg-dark-900/50 rounded-xl p-4 mb-6 relative z-10">
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <div class="text-vip-gold/60 text-xs uppercase tracking-wider"><?php echo esc_html( $t['guest'] ); ?></div>
                    <div class="text-white font-semibold">Maria Ionescu</div>
                  </div>
                  <div>
                    <div class="text-vip-gold/60 text-xs uppercase tracking-wider"><?php echo esc_html( $t['company'] ); ?></div>
                    <div class="text-white font-semibold">Antena Group</div>
                  </div>
                  <div>
                    <div class="text-vip-gold/60 text-xs uppercase tracking-wider"><?php echo esc_html( $t['title_label'] ); ?></div>
                    <div class="text-white/80 text-sm">Editor Șef</div>
                  </div>
                  <div>
                    <div class="text-vip-gold/60 text-xs uppercase tracking-wider"><?php echo esc_html( $t['seat'] ); ?></div>
                    <div class="text-white/80 text-sm">Masa VIP-3</div>
                  </div>
                </div>
              </div>

              <!-- Event Details -->
              <div class="flex items-center justify-between mb-6 relative z-10">
                <div>
                  <div class="text-vip-gold/60 text-xs uppercase"><?php echo esc_html( $t['date_label'] ); ?></div>
                  <div class="text-white font-medium">31 Decembrie 2025</div>
                </div>
                <div class="text-right">
                  <div class="text-vip-gold/60 text-xs uppercase"><?php echo esc_html( $t['time_label'] ); ?></div>
                  <div class="text-white font-medium">20:00</div>
                </div>
              </div>

              <!-- QR Code -->
              <div class="flex justify-center relative z-10">
                <div class="qr-vip">
                  <div class="w-24 h-24 bg-dark-900 rounded-lg flex items-center justify-center">
                    <svg class="w-16 h-16 text-vip-gold" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M3 3h6v6H3V3zm2 2v2h2V5H5zm8-2h6v6h-6V3zm2 2v2h2V5h-2zM3 13h6v6H3v-6zm2 2v2h2v-2H5zm13-2h1v1h-1v-1zm-3 0h1v1h-1v-1zm1 1h1v1h-1v-1zm-1 1h1v1h-1v-1zm2 0h1v1h-1v-1zm0 2h1v1h-1v-1zm-2 0h1v1h-1v-1zm4-4h1v1h-1v-1zm0 2h1v1h-1v-1zm0 2h1v1h-1v-1z"/>
                    </svg>
                  </div>
                </div>
              </div>

              <!-- Invitation Code -->
              <div class="text-center mt-4 relative z-10">
                <span class="text-vip-gold/50 text-xs font-mono">INV-2025-VIP-00127</span>
              </div>
            </div>

            <!-- Floating Batch Badge -->
            <div class="absolute -top-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-vip-gold/30 shadow-xl animate-float z-20">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-vip-gold/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <div>
                  <div class="text-vip-gold text-sm font-medium"><?php echo esc_html( $t['batch_label'] ); ?> #47</div>
                  <div class="text-white/40 text-xs">250 <?php echo esc_html( $t['invitations'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating Email Status -->
            <div class="absolute -bottom-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/30 shadow-xl animate-float [animation-delay:1s] z-20">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div>
                  <div class="text-brand-green text-sm font-medium"><?php echo esc_html( $t['delivered'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['ago_2min'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CSV IMPORT ==================== -->
  <section class="py-24 relative overflow-hidden" id="import">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-vip-gold text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['csv_label'] ); ?></span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['csv_title'] ); ?><br><span class="text-gradient-gold"><?php echo esc_html( $t['csv_title2'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['csv_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-vip-gold/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['drag_drop'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['drag_drop_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['field_mapping'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['field_mapping_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['batch_gen'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['batch_gen_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - CSV Import UI -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <!-- Drop Zone -->
            <div class="csv-dropzone rounded-xl p-8 text-center mb-6">
              <div class="w-16 h-16 rounded-2xl bg-vip-gold/10 flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </div>
              <div class="text-white font-medium mb-1">invitati_gala_2025.csv</div>
              <div class="text-white/40 text-sm">250 <?php echo esc_html( $t['rows_detected'] ); ?></div>
              <div class="mt-3 inline-flex items-center gap-1 px-3 py-1 rounded-full bg-brand-green/20 text-brand-green text-xs">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <?php echo esc_html( $t['uploaded_success'] ); ?>
              </div>
            </div>

            <!-- Field Mapping -->
            <div class="text-white/40 text-xs uppercase tracking-wider mb-3"><?php echo esc_html( $t['field_mapping'] ); ?></div>
            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-4">
                <div class="flex-1 bg-dark-900/50 rounded-lg px-3 py-2 text-sm">
                  <span class="text-white/40 text-xs">CSV</span>
                  <div class="text-white font-mono text-sm">nume_complet</div>
                </div>
                <svg class="w-5 h-5 text-vip-gold flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                <div class="flex-1 bg-vip-gold/10 rounded-lg px-3 py-2 text-sm border border-vip-gold/20">
                  <span class="text-vip-gold/60 text-xs"><?php echo esc_html( $t['exclusive_invitation'] ); ?></span>
                  <div class="text-vip-gold font-medium text-sm"><?php echo esc_html( $t['name_field'] ); ?></div>
                </div>
              </div>

              <div class="flex items-center gap-4">
                <div class="flex-1 bg-dark-900/50 rounded-lg px-3 py-2 text-sm">
                  <span class="text-white/40 text-xs">CSV</span>
                  <div class="text-white font-mono text-sm">email_addr</div>
                </div>
                <svg class="w-5 h-5 text-vip-gold flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                <div class="flex-1 bg-vip-gold/10 rounded-lg px-3 py-2 text-sm border border-vip-gold/20">
                  <span class="text-vip-gold/60 text-xs"><?php echo esc_html( $t['exclusive_invitation'] ); ?></span>
                  <div class="text-vip-gold font-medium text-sm">Email</div>
                </div>
              </div>

              <div class="flex items-center gap-4">
                <div class="flex-1 bg-dark-900/50 rounded-lg px-3 py-2 text-sm">
                  <span class="text-white/40 text-xs">CSV</span>
                  <div class="text-white font-mono text-sm">firma</div>
                </div>
                <svg class="w-5 h-5 text-vip-gold flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                <div class="flex-1 bg-vip-gold/10 rounded-lg px-3 py-2 text-sm border border-vip-gold/20">
                  <span class="text-vip-gold/60 text-xs"><?php echo esc_html( $t['exclusive_invitation'] ); ?></span>
                  <div class="text-vip-gold font-medium text-sm"><?php echo esc_html( $t['company'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Generate Button -->
            <button class="w-full py-3 rounded-xl bg-gradient-to-r from-vip-gold to-vip-accent text-vip-dark font-semibold hover:scale-[1.02] transition-transform">
              <?php echo esc_html( $t['generate_btn'] ); ?>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== STATUS FLOW ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest">Urmărire Completă</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Știi totul despre<br><span class="text-gradient animate-shimmer">fiecare invitație</span></h2>
        <p class="text-lg text-white/60">De la creare până la check-in, urmărești fiecare pas. Niciun oaspete pierdut.</p>
      </div>

      <!-- Status Flow Visual -->
      <div class="relative reveal">
        <!-- Progress Line -->
        <div class="absolute top-12 left-0 right-0 h-1 bg-dark-700 hidden lg:block"></div>
        <div class="absolute top-12 left-0 w-full h-1 bg-gradient-to-r from-vip-gold via-brand-cyan to-brand-green hidden lg:block" style="width: 100%;"></div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
          <!-- Created -->
          <div class="text-center">
            <div class="w-24 h-24 rounded-2xl bg-vip-gold/10 border border-vip-gold/30 flex items-center justify-center mx-auto mb-4 relative z-10">
              <svg class="w-10 h-10 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
            </div>
            <span class="status-created px-3 py-1 rounded-full text-xs font-medium">Creat</span>
            <p class="text-white/40 text-xs mt-2">Invitație în sistem</p>
          </div>

          <!-- Rendered -->
          <div class="text-center">
            <div class="w-24 h-24 rounded-2xl bg-brand-violet/10 border border-brand-violet/30 flex items-center justify-center mx-auto mb-4 relative z-10">
              <svg class="w-10 h-10 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <span class="status-rendered px-3 py-1 rounded-full text-xs font-medium">Generat</span>
            <p class="text-white/40 text-xs mt-2">PDF creat</p>
          </div>

          <!-- Emailed -->
          <div class="text-center">
            <div class="w-24 h-24 rounded-2xl bg-brand-cyan/10 border border-brand-cyan/30 flex items-center justify-center mx-auto mb-4 relative z-10">
              <svg class="w-10 h-10 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <span class="status-emailed px-3 py-1 rounded-full text-xs font-medium">Trimis</span>
            <p class="text-white/40 text-xs mt-2">Email livrat</p>
          </div>

          <!-- Downloaded -->
          <div class="text-center">
            <div class="w-24 h-24 rounded-2xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center mx-auto mb-4 relative z-10">
              <svg class="w-10 h-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            </div>
            <span class="status-downloaded px-3 py-1 rounded-full text-xs font-medium">Descărcat</span>
            <p class="text-white/40 text-xs mt-2">PDF salvat</p>
          </div>

          <!-- Opened -->
          <div class="text-center">
            <div class="w-24 h-24 rounded-2xl bg-brand-amber/10 border border-brand-amber/30 flex items-center justify-center mx-auto mb-4 relative z-10">
              <svg class="w-10 h-10 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
            </div>
            <span class="status-opened px-3 py-1 rounded-full text-xs font-medium">Deschis</span>
            <p class="text-white/40 text-xs mt-2">Vizualizat</p>
          </div>

          <!-- Checked In -->
          <div class="text-center">
            <div class="w-24 h-24 rounded-2xl bg-brand-green/10 border border-brand-green/30 flex items-center justify-center mx-auto mb-4 relative z-10">
              <svg class="w-10 h-10 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <span class="status-checkedin px-3 py-1 rounded-full text-xs font-medium">Check-in</span>
            <p class="text-white/40 text-xs mt-2">Oaspete intrat</p>
          </div>
        </div>
      </div>

      <!-- Voided status note -->
      <div class="mt-12 text-center reveal reveal-delay-1">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-dark-800/50 border border-brand-rose/20">
          <svg class="w-4 h-4 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
          <span class="text-white/60 text-sm">Invitațiile anulate sunt blocate automat la check-in</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== BATCH MANAGEMENT ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Visual - Batch List -->
        <div class="reveal order-2 lg:order-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-vip-gold/20 flex items-center justify-center">
                  <svg class="w-5 h-5 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <div>
                  <div class="text-white font-semibold">Loturi Invitații</div>
                  <div class="text-white/40 text-xs">3 loturi active</div>
                </div>
              </div>
              <button class="px-3 py-1.5 rounded-lg bg-vip-gold/20 text-vip-gold text-sm font-medium hover:bg-vip-gold/30 transition-colors">
                + Lot Nou
              </button>
            </div>

            <!-- Batch items -->
            <div class="space-y-3">
              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50 border border-vip-gold/20">
                <div class="w-10 h-10 rounded-lg bg-brand-green/20 flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-white font-medium">Presă & Media</div>
                  <div class="text-white/40 text-xs">75 invitații • Completat</div>
                </div>
                <div class="text-right">
                  <div class="text-brand-green text-sm font-medium">72 check-in</div>
                  <div class="text-white/40 text-xs">96%</div>
                </div>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50 border border-brand-cyan/20">
                <div class="w-10 h-10 rounded-lg bg-brand-cyan/20 flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-white font-medium">Sponsori VIP</div>
                  <div class="text-white/40 text-xs">150 invitații • În trimitere</div>
                </div>
                <div class="text-right">
                  <div class="text-brand-cyan text-sm font-medium">142 livrate</div>
                  <div class="text-white/40 text-xs">95%</div>
                </div>
              </div>

              <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-900/50 border border-brand-violet/20">
                <div class="w-10 h-10 rounded-lg bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-white font-medium">Artiști & Echipă</div>
                  <div class="text-white/40 text-xs">25 invitații • Generare...</div>
                </div>
                <div class="text-right">
                  <div class="flex items-center gap-1 text-brand-violet text-sm">
                    <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                    <span>18/25</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick actions -->
            <div class="flex gap-2 mt-4">
              <button class="flex-1 py-2 rounded-lg bg-dark-700 text-white/60 text-sm hover:bg-dark-600 transition-colors">
                📥 Export CSV
              </button>
              <button class="flex-1 py-2 rounded-lg bg-dark-700 text-white/60 text-sm hover:bg-dark-600 transition-colors">
                📧 Reminder
              </button>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="reveal order-1 lg:order-2">
          <span class="text-vip-gold text-sm font-medium uppercase tracking-widest">Gestionare Loturi</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Organizează<br><span class="text-gradient-gold">pe categorii</span></h2>
          <p class="text-lg text-white/60 mb-8">Grupează invitațiile în loturi: presă, sponsori, VIP, artiști. Urmărește progresul fiecărui lot separat.</p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-vip-gold/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
              </div>
              <div>
                <div class="text-white font-medium">Loturi Multiple</div>
                <p class="text-white/50 text-sm">Creează loturi separate pentru diferite categorii de oaspeți</p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium">Statistici per Lot</div>
                <p class="text-white/50 text-sm">Vezi rata de livrare, descărcare și check-in pentru fiecare</p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-cyan/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
              </div>
              <div>
                <div class="text-white font-medium">ZIP în Masă</div>
                <p class="text-white/50 text-sm">Descarcă toate PDF-urile unui lot într-o singură arhivă</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== QR SECURITY ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-brand-green text-sm font-medium uppercase tracking-widest">Securitate</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">QR cu protecție<br><span class="text-gradient animate-shimmer">anti-replay</span></h2>
          <p class="text-lg text-white/60 mb-8">Fiecare cod QR conține checksum unic. Odată scanat, invitația este marcată și nu poate fi refolosită. Zero intrări duplicate.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-brand-green/10 border border-brand-green/20">
              <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Checksum Unic</span>
                <p class="text-white/50 text-sm">Fiecare QR include hash verificabil server-side</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Blocare Replay</span>
                <p class="text-white/50 text-sm">A doua scanare este respinsă automat</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">URL-uri Semnate</span>
                <p class="text-white/50 text-sm">Link-uri de descărcare cu expirare automată</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - QR Security -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <!-- Valid scan -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-brand-green/10 border border-brand-green/30 mb-4">
              <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-10 h-10 text-dark-900" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M3 3h6v6H3V3zm2 2v2h2V5H5zm8-2h6v6h-6V3zm2 2v2h2V5h-2zM3 13h6v6H3v-6zm2 2v2h2v-2H5z"/>
                </svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="text-brand-green font-semibold">Scanare Validă</span>
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="text-white/60 text-sm">INV-2025-VIP-00127</div>
                <div class="text-white/40 text-xs mt-1">Maria Ionescu • Check-in: 20:15</div>
              </div>
            </div>

            <!-- Replay attempt -->
            <div class="flex items-center gap-4 p-4 rounded-xl bg-brand-rose/10 border border-brand-rose/30">
              <div class="w-16 h-16 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0 relative">
                <svg class="w-10 h-10 text-brand-rose/50" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M3 3h6v6H3V3zm2 2v2h2V5H5zm8-2h6v6h-6V3zm2 2v2h2V5h-2zM3 13h6v6H3v-6zm2 2v2h2v-2H5z"/>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center">
                  <svg class="w-12 h-12 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </div>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="text-brand-rose font-semibold">Replay Blocat!</span>
                  <svg class="w-5 h-5 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div class="text-white/60 text-sm">Același cod INV-2025-VIP-00127</div>
                <div class="text-white/40 text-xs mt-1">Deja folosit la 20:15 • Poartă B</div>
              </div>
            </div>

            <!-- Security note -->
            <div class="mt-4 p-3 rounded-lg bg-dark-900/50 text-center">
              <span class="text-white/40 text-xs">🔒 Toate scanările sunt logate cu timestamp, IP și poartă</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest">Cazuri de Utilizare</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Pentru evenimente<br><span class="text-gradient animate-shimmer">unde listele contează</span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-vip-gold/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-vip-gold/20 to-vip-accent/20 flex items-center justify-center mb-4"><span class="text-2xl">🍾</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Gale & Dineuri</h3>
          <p class="text-white/50 text-sm">Invitații personalizate cu locuri pre-atribuite la mese. Import lista de oaspeți din Excel.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-vip-gold/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/10 flex items-center justify-center mb-4"><span class="text-2xl">🎬</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Premiere Film</h3>
          <p class="text-white/50 text-sm">Acreditări pentru presă, actori și echipa de producție. Categorii diferite de acces.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-vip-gold/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10 flex items-center justify-center mb-4"><span class="text-2xl">🚀</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Lansări Produse</h3>
          <p class="text-white/50 text-sm">Invită parteneri, influenceri și presă. Urmărește cine confirmă participarea.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-vip-gold/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-rose/20 to-brand-rose/10 flex items-center justify-center mb-4"><span class="text-2xl">📰</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Acreditări Presă</h3>
          <p class="text-white/50 text-sm">Lot separat pentru jurnaliști cu acces special la zonele de presă și backstage.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-vip-gold/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green/20 to-brand-green/10 flex items-center justify-center mb-4"><span class="text-2xl">🤝</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Sponsori & Parteneri</h3>
          <p class="text-white/50 text-sm">Invitații brandate pentru sponsorii evenimentului. Include note personalizate.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-vip-gold/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10 flex items-center justify-center mb-4"><span class="text-2xl">🎭</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Artiști & Crew</h3>
          <p class="text-white/50 text-sm">Acces all-areas pentru echipa de producție, artiști și staff tehnic.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-vip-gold/10 to-vip-bronze/10 rounded-3xl p-8 md:p-12 border border-vip-gold/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "Am trimis <span class="text-gradient-gold font-semibold">500 de invitații</span> în 10 minute. Import CSV, un click pe Send, gata. Știam exact cine și-a descărcat invitația și cine avea nevoie de reminder."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-vip-gold to-vip-bronze"></div>
            <div>
              <div class="font-semibold text-white">Alexandru P.</div>
              <div class="text-white/50">Event Director, Gala Premiilor ANIS</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-vip-gold/15 via-transparent to-vip-bronze/15"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(212,175,55,0.2) 0%, rgba(205,127,50,0.1) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">👑</div>
    <div class="absolute bottom-20 right-20 opacity-20 animate-float text-3xl" style="animation-delay: 1s;">✉️</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Invitații<br><span class="text-gradient-gold">VIP</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Import CSV, QR anti-replay, urmărire completă. Gestionează oaspeții speciali ca un profesionist.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-vip-gold to-vip-accent text-vip-dark hover:scale-105 hover:shadow-glow-gold transition-all duration-300">
          Creează Invitații
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Întrebări? Contactează-ne
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">Import CSV • QR Anti-Replay • Urmărire Completă • Export Rapoarte</p>
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
