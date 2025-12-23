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
		? 'Am trimis <span class="font-semibold text-gradient-gold">500 de invitații</span> în 10 minute. Import CSV, un click pe Send, gata. Știam exact cine și-a descărcat invitația și cine avea nevoie de reminder.'
		: 'I sent <span class="font-semibold text-gradient-gold">500 invitations</span> in 10 minutes. CSV import, one click on Send, done. I knew exactly who downloaded their invitation and who needed a reminder.',
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

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #D4AF37, #FFD700, #CD7F32);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-vip-gold/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-vip-bronze/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute text-2xl top-32 left-16 opacity-30 animate-float">👑</div>
    <div class="absolute text-xl bottom-40 right-24 opacity-20 animate-float" style="animation-delay: 1s;">✉️</div>
    <div class="absolute text-3xl top-1/2 right-16 opacity-10 animate-float" style="animation-delay: 2s;">🎭</div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-vip-gold/10 border-vip-gold/20">
            <span class="text-vip-gold">👑</span>
            <span class="text-sm font-medium text-vip-gold"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-gold"><?php echo esc_html( $t['hero_title2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold transition-all duration-300 rounded-full group bg-gradient-to-r from-vip-gold to-vip-accent text-vip-dark hover:scale-105 hover:shadow-glow-gold">
              <?php echo esc_html( $t['cta_create'] ); ?>
              <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#import" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              <?php echo esc_html( $t['cta_csv'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-bold font-display text-vip-gold">CSV</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['stat_csv'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold text-white font-display">QR</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['stat_qr'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold font-display text-brand-green">100%</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['stat_tracking'] ); ?></div>
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
            <div class="p-6 invitation-card rounded-2xl shadow-invitation animate-vip-glow">
              <!-- Header -->
              <div class="relative z-10 flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-vip-gold to-vip-accent">
                    <span class="text-sm font-bold text-vip-dark">VIP</span>
                  </div>
                  <div>
                    <div class="font-semibold text-white"><?php echo esc_html( $t['exclusive_invitation'] ); ?></div>
                    <div class="text-xs text-white/40"><?php echo esc_html( $t['new_year_gala'] ); ?></div>
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
                  class="px-3 py-1 text-xs font-medium transition-all duration-300 rounded-full"
                  x-text="status === 'created' ? 'Creat' : status === 'rendered' ? 'Generat' : status === 'emailed' ? 'Trimis' : status === 'downloaded' ? 'Descărcat' : 'Check-in ✓'"
                ></div>
              </div>

              <!-- Gold line -->
              <div class="h-px mb-6 bg-gradient-to-r from-transparent via-vip-gold/50 to-transparent"></div>

              <!-- Guest Info -->
              <div class="relative z-10 p-4 mb-6 bg-dark-900/50 rounded-xl">
                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <div class="text-xs tracking-wider uppercase text-vip-gold/60"><?php echo esc_html( $t['guest'] ); ?></div>
                    <div class="font-semibold text-white">Maria Ionescu</div>
                  </div>
                  <div>
                    <div class="text-xs tracking-wider uppercase text-vip-gold/60"><?php echo esc_html( $t['company'] ); ?></div>
                    <div class="font-semibold text-white">Antena Group</div>
                  </div>
                  <div>
                    <div class="text-xs tracking-wider uppercase text-vip-gold/60"><?php echo esc_html( $t['title_label'] ); ?></div>
                    <div class="text-sm text-white/80">Editor Șef</div>
                  </div>
                  <div>
                    <div class="text-xs tracking-wider uppercase text-vip-gold/60"><?php echo esc_html( $t['seat'] ); ?></div>
                    <div class="text-sm text-white/80">Masa VIP-3</div>
                  </div>
                </div>
              </div>

              <!-- Event Details -->
              <div class="relative z-10 flex items-center justify-between mb-6">
                <div>
                  <div class="text-xs uppercase text-vip-gold/60"><?php echo esc_html( $t['date_label'] ); ?></div>
                  <div class="font-medium text-white">31 Decembrie 2025</div>
                </div>
                <div class="text-right">
                  <div class="text-xs uppercase text-vip-gold/60"><?php echo esc_html( $t['time_label'] ); ?></div>
                  <div class="font-medium text-white">20:00</div>
                </div>
              </div>

              <!-- QR Code -->
              <div class="relative z-10 flex justify-center">
                <div class="qr-vip">
                  <div class="flex items-center justify-center w-24 h-24 rounded-lg bg-dark-900">
                    <svg class="w-16 h-16 text-vip-gold" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M3 3h6v6H3V3zm2 2v2h2V5H5zm8-2h6v6h-6V3zm2 2v2h2V5h-2zM3 13h6v6H3v-6zm2 2v2h2v-2H5zm13-2h1v1h-1v-1zm-3 0h1v1h-1v-1zm1 1h1v1h-1v-1zm-1 1h1v1h-1v-1zm2 0h1v1h-1v-1zm0 2h1v1h-1v-1zm-2 0h1v1h-1v-1zm4-4h1v1h-1v-1zm0 2h1v1h-1v-1zm0 2h1v1h-1v-1z"/>
                    </svg>
                  </div>
                </div>
              </div>

              <!-- Invitation Code -->
              <div class="relative z-10 mt-4 text-center">
                <span class="font-mono text-xs text-vip-gold/50">INV-2025-VIP-00127</span>
              </div>
            </div>

            <!-- Floating Batch Badge -->
            <div class="absolute z-20 px-4 py-3 border shadow-xl -top-4 -left-4 bg-dark-800 rounded-xl border-vip-gold/30 animate-float">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-vip-gold/20">
                  <svg class="w-4 h-4 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-vip-gold"><?php echo esc_html( $t['batch_label'] ); ?> #47</div>
                  <div class="text-xs text-white/40">250 <?php echo esc_html( $t['invitations'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating Email Status -->
            <div class="absolute -bottom-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/30 shadow-xl animate-float [animation-delay:1s] z-20">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-brand-green/20">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-brand-green"><?php echo esc_html( $t['delivered'] ); ?></div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['ago_2min'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CSV IMPORT ==================== -->
  <section class="relative py-24 overflow-hidden" id="import">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-vip-gold"><?php echo esc_html( $t['csv_label'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['csv_title'] ); ?><br><span class="text-gradient-gold"><?php echo esc_html( $t['csv_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['csv_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-vip-gold/20">
                <svg class="w-6 h-6 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['drag_drop'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['drag_drop_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-violet/20">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['field_mapping'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['field_mapping_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-cyan/20">
                <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['batch_gen'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['batch_gen_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - CSV Import UI -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <!-- Drop Zone -->
            <div class="p-8 mb-6 text-center csv-dropzone rounded-xl">
              <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-2xl bg-vip-gold/10">
                <svg class="w-8 h-8 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </div>
              <div class="mb-1 font-medium text-white">invitati_gala_2025.csv</div>
              <div class="text-sm text-white/40">250 <?php echo esc_html( $t['rows_detected'] ); ?></div>
              <div class="inline-flex items-center gap-1 px-3 py-1 mt-3 text-xs rounded-full bg-brand-green/20 text-brand-green">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <?php echo esc_html( $t['uploaded_success'] ); ?>
              </div>
            </div>

            <!-- Field Mapping -->
            <div class="mb-3 text-xs tracking-wider uppercase text-white/40"><?php echo esc_html( $t['field_mapping'] ); ?></div>
            <div class="mb-6 space-y-2">
              <div class="flex items-center gap-4">
                <div class="flex-1 px-3 py-2 text-sm rounded-lg bg-dark-900/50">
                  <span class="text-xs text-white/40">CSV</span>
                  <div class="font-mono text-sm text-white">nume_complet</div>
                </div>
                <svg class="flex-shrink-0 w-5 h-5 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                <div class="flex-1 px-3 py-2 text-sm border rounded-lg bg-vip-gold/10 border-vip-gold/20">
                  <span class="text-xs text-vip-gold/60"><?php echo esc_html( $t['exclusive_invitation'] ); ?></span>
                  <div class="text-sm font-medium text-vip-gold"><?php echo esc_html( $t['name_field'] ); ?></div>
                </div>
              </div>

              <div class="flex items-center gap-4">
                <div class="flex-1 px-3 py-2 text-sm rounded-lg bg-dark-900/50">
                  <span class="text-xs text-white/40">CSV</span>
                  <div class="font-mono text-sm text-white">email_addr</div>
                </div>
                <svg class="flex-shrink-0 w-5 h-5 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                <div class="flex-1 px-3 py-2 text-sm border rounded-lg bg-vip-gold/10 border-vip-gold/20">
                  <span class="text-xs text-vip-gold/60"><?php echo esc_html( $t['exclusive_invitation'] ); ?></span>
                  <div class="text-sm font-medium text-vip-gold">Email</div>
                </div>
              </div>

              <div class="flex items-center gap-4">
                <div class="flex-1 px-3 py-2 text-sm rounded-lg bg-dark-900/50">
                  <span class="text-xs text-white/40">CSV</span>
                  <div class="font-mono text-sm text-white">firma</div>
                </div>
                <svg class="flex-shrink-0 w-5 h-5 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                <div class="flex-1 px-3 py-2 text-sm border rounded-lg bg-vip-gold/10 border-vip-gold/20">
                  <span class="text-xs text-vip-gold/60"><?php echo esc_html( $t['exclusive_invitation'] ); ?></span>
                  <div class="text-sm font-medium text-vip-gold"><?php echo esc_html( $t['company'] ); ?></div>
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
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-brand-cyan"><?php echo esc_html( $t['tracking_label'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['tracking_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['tracking_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['tracking_desc'] ); ?></p>
      </div>

      <!-- Status Flow Visual -->
      <div class="relative reveal">
        <!-- Progress Line -->
        <div class="absolute left-0 right-0 hidden h-1 top-12 bg-dark-700 lg:block"></div>
        <div class="absolute left-0 hidden w-full h-1 top-12 bg-gradient-to-r from-vip-gold via-brand-cyan to-brand-green lg:block" style="width: 100%;"></div>

        <div class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-6">
          <!-- Created -->
          <div class="text-center">
            <div class="relative z-10 flex items-center justify-center w-24 h-24 mx-auto mb-4 border rounded-2xl bg-vip-gold/10 border-vip-gold/30">
              <svg class="w-10 h-10 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
            </div>
            <span class="px-3 py-1 text-xs font-medium rounded-full status-created"><?php echo esc_html( $t['status_created'] ); ?></span>
            <p class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['inv_in_system'] ); ?></p>
          </div>

          <!-- Rendered -->
          <div class="text-center">
            <div class="relative z-10 flex items-center justify-center w-24 h-24 mx-auto mb-4 border rounded-2xl bg-brand-violet/10 border-brand-violet/30">
              <svg class="w-10 h-10 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <span class="px-3 py-1 text-xs font-medium rounded-full status-rendered"><?php echo esc_html( $t['status_rendered'] ); ?></span>
            <p class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['pdf_created'] ); ?></p>
          </div>

          <!-- Emailed -->
          <div class="text-center">
            <div class="relative z-10 flex items-center justify-center w-24 h-24 mx-auto mb-4 border rounded-2xl bg-brand-cyan/10 border-brand-cyan/30">
              <svg class="w-10 h-10 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <span class="px-3 py-1 text-xs font-medium rounded-full status-emailed"><?php echo esc_html( $t['status_emailed'] ); ?></span>
            <p class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['email_delivered'] ); ?></p>
          </div>

          <!-- Downloaded -->
          <div class="text-center">
            <div class="relative z-10 flex items-center justify-center w-24 h-24 mx-auto mb-4 border rounded-2xl bg-blue-500/10 border-blue-500/30">
              <svg class="w-10 h-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            </div>
            <span class="px-3 py-1 text-xs font-medium rounded-full status-downloaded"><?php echo esc_html( $t['status_downloaded'] ); ?></span>
            <p class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['pdf_saved'] ); ?></p>
          </div>

          <!-- Opened -->
          <div class="text-center">
            <div class="relative z-10 flex items-center justify-center w-24 h-24 mx-auto mb-4 border rounded-2xl bg-brand-amber/10 border-brand-amber/30">
              <svg class="w-10 h-10 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
            </div>
            <span class="px-3 py-1 text-xs font-medium rounded-full status-opened"><?php echo $current_lang === 'ro' ? 'Deschis' : 'Opened'; ?></span>
            <p class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['viewed'] ); ?></p>
          </div>

          <!-- Checked In -->
          <div class="text-center">
            <div class="relative z-10 flex items-center justify-center w-24 h-24 mx-auto mb-4 border rounded-2xl bg-brand-green/10 border-brand-green/30">
              <svg class="w-10 h-10 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <span class="px-3 py-1 text-xs font-medium rounded-full status-checkedin">Check-in</span>
            <p class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['guest_entered'] ); ?></p>
          </div>
        </div>
      </div>

      <!-- Voided status note -->
      <div class="mt-12 text-center reveal reveal-delay-1">
        <div class="inline-flex items-center gap-2 px-4 py-2 border rounded-full bg-dark-800/50 border-brand-rose/20">
          <svg class="w-4 h-4 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
          <span class="text-sm text-white/60"><?php echo esc_html( $t['voided_note'] ); ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== BATCH MANAGEMENT ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Visual - Batch List -->
        <div class="order-2 reveal lg:order-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-vip-gold/20">
                  <svg class="w-5 h-5 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <div>
                  <div class="font-semibold text-white"><?php echo esc_html( $t['inv_batches'] ); ?></div>
                  <div class="text-xs text-white/40">3 <?php echo esc_html( $t['active_batches'] ); ?></div>
                </div>
              </div>
              <button class="px-3 py-1.5 rounded-lg bg-vip-gold/20 text-vip-gold text-sm font-medium hover:bg-vip-gold/30 transition-colors">
                <?php echo esc_html( $t['new_batch'] ); ?>
              </button>
            </div>

            <!-- Batch items -->
            <div class="space-y-3">
              <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-900/50 border-vip-gold/20">
                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-brand-green/20">
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="flex-1">
                  <div class="font-medium text-white"><?php echo esc_html( $t['press_media'] ); ?></div>
                  <div class="text-xs text-white/40">75 <?php echo esc_html( $t['invitations'] ); ?> • <?php echo esc_html( $t['completed'] ); ?></div>
                </div>
                <div class="text-right">
                  <div class="text-sm font-medium text-brand-green">72 <?php echo esc_html( $t['checkin'] ); ?></div>
                  <div class="text-xs text-white/40">96%</div>
                </div>
              </div>

              <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-900/50 border-brand-cyan/20">
                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-brand-cyan/20">
                  <svg class="w-5 h-5 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div class="flex-1">
                  <div class="font-medium text-white"><?php echo esc_html( $t['sponsors_vip'] ); ?></div>
                  <div class="text-xs text-white/40">150 <?php echo esc_html( $t['invitations'] ); ?> • <?php echo esc_html( $t['in_sending'] ); ?></div>
                </div>
                <div class="text-right">
                  <div class="text-sm font-medium text-brand-cyan">142 <?php echo $current_lang === 'ro' ? 'livrate' : 'delivered'; ?></div>
                  <div class="text-xs text-white/40">95%</div>
                </div>
              </div>

              <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-900/50 border-brand-violet/20">
                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-brand-violet/20">
                  <svg class="w-5 h-5 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <div class="flex-1">
                  <div class="font-medium text-white"><?php echo esc_html( $t['artists_team'] ); ?></div>
                  <div class="text-xs text-white/40">25 <?php echo esc_html( $t['invitations'] ); ?> • <?php echo esc_html( $t['generating'] ); ?></div>
                </div>
                <div class="text-right">
                  <div class="flex items-center gap-1 text-sm text-brand-violet">
                    <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                    <span>18/25</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick actions -->
            <div class="flex gap-2 mt-4">
              <button class="flex-1 py-2 text-sm transition-colors rounded-lg bg-dark-700 text-white/60 hover:bg-dark-600">
                <?php echo esc_html( $t['export_csv'] ); ?>
              </button>
              <button class="flex-1 py-2 text-sm transition-colors rounded-lg bg-dark-700 text-white/60 hover:bg-dark-600">
                <?php echo esc_html( $t['reminder'] ); ?>
              </button>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="order-1 reveal lg:order-2">
          <span class="text-sm font-medium tracking-widest uppercase text-vip-gold"><?php echo esc_html( $t['batch_mgmt_label'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['batch_mgmt_title'] ); ?><br><span class="text-gradient-gold"><?php echo esc_html( $t['batch_mgmt_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['batch_mgmt_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-vip-gold/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-vip-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['multiple_batches'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['multiple_batches_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['stats_per_batch'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['stats_per_batch_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-cyan/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['bulk_zip'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['bulk_zip_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== QR SECURITY ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-brand-green"><?php echo esc_html( $t['security_label'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['security_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['security_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['security_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-brand-green/10 border-brand-green/20">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-green/20">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['unique_checksum'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['unique_checksum_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-rose/20">
                <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['replay_block'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['replay_block_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-violet/20">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['signed_urls'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['signed_urls_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - QR Security -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <!-- Valid scan -->
            <div class="flex items-center gap-4 p-4 mb-4 border rounded-xl bg-brand-green/10 border-brand-green/30">
              <div class="flex items-center justify-center flex-shrink-0 w-16 h-16 bg-white rounded-xl">
                <svg class="w-10 h-10 text-dark-900" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M3 3h6v6H3V3zm2 2v2h2V5H5zm8-2h6v6h-6V3zm2 2v2h2V5h-2zM3 13h6v6H3v-6zm2 2v2h2v-2H5z"/>
                </svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="font-semibold text-brand-green"><?php echo esc_html( $t['valid_scan'] ); ?></span>
                  <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="text-sm text-white/60">INV-2025-VIP-00127</div>
                <div class="mt-1 text-xs text-white/40">Maria Ionescu • Check-in: 20:15</div>
              </div>
            </div>

            <!-- Replay attempt -->
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-brand-rose/10 border-brand-rose/30">
              <div class="relative flex items-center justify-center flex-shrink-0 w-16 h-16 bg-white/10 rounded-xl">
                <svg class="w-10 h-10 text-brand-rose/50" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M3 3h6v6H3V3zm2 2v2h2V5H5zm8-2h6v6h-6V3zm2 2v2h2V5h-2zM3 13h6v6H3v-6zm2 2v2h2v-2H5z"/>
                </svg>
                <div class="absolute inset-0 flex items-center justify-center">
                  <svg class="w-12 h-12 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </div>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="font-semibold text-brand-rose"><?php echo esc_html( $t['replay_blocked'] ); ?></span>
                  <svg class="w-5 h-5 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div class="text-sm text-white/60"><?php echo esc_html( $t['same_code'] ); ?> INV-2025-VIP-00127</div>
                <div class="mt-1 text-xs text-white/40"><?php echo esc_html( $t['already_used'] ); ?> 20:15 • <?php echo esc_html( $t['gate'] ); ?> B</div>
              </div>
            </div>

            <!-- Security note -->
            <div class="p-3 mt-4 text-center rounded-lg bg-dark-900/50">
              <span class="text-xs text-white/40"><?php echo esc_html( $t['scans_logged'] ); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-brand-violet"><?php echo esc_html( $t['usecases_label'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['usecases_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['usecases_title2'] ); ?></span></h2>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-vip-gold/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-vip-gold/20 to-vip-accent/20"><span class="text-2xl">🍾</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_gala'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_gala_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-vip-gold/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/10"><span class="text-2xl">🎬</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_premiere'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_premiere_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-vip-gold/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10"><span class="text-2xl">🚀</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_launch'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_launch_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-vip-gold/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-rose/20 to-brand-rose/10"><span class="text-2xl">📰</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_press'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_press_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-vip-gold/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green/20 to-brand-green/10"><span class="text-2xl">🤝</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_sponsors'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_sponsors_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-vip-gold/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10"><span class="text-2xl">🎭</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_artists'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_artists_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-vip-gold/10 to-vip-bronze/10 rounded-3xl md:p-12 border-vip-gold/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-vip-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="mb-8 text-2xl font-light leading-relaxed text-white md:text-3xl">
            "<?php echo $t['testimonial_quote']; ?>"
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="rounded-full w-14 h-14 bg-gradient-to-br from-vip-gold to-vip-bronze"></div>
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
    <div class="absolute inset-0 bg-gradient-to-br from-vip-gold/15 via-transparent to-vip-bronze/15"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(212,175,55,0.2) 0%, rgba(205,127,50,0.1) 100%);"></div>

    <div class="absolute text-4xl top-20 left-20 opacity-20 animate-float">👑</div>
    <div class="absolute text-3xl bottom-20 right-20 opacity-20 animate-float" style="animation-delay: 1s;">✉️</div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal"><?php echo esc_html( $t['cta_title'] ); ?><br><span class="text-gradient-gold"><?php echo esc_html( $t['cta_title2'] ); ?></span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1"><?php echo esc_html( $t['cta_desc'] ); ?></p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold transition-all duration-300 rounded-full group bg-gradient-to-r from-vip-gold to-vip-accent text-vip-dark hover:scale-105 hover:shadow-glow-gold">
          <?php echo esc_html( $t['cta_create'] ); ?>
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
          <?php echo esc_html( $t['cta_contact'] ); ?>
        </a>
      </div>

      <p class="mt-8 text-sm text-white/30 reveal reveal-delay-3"><?php echo esc_html( $t['cta_footer'] ); ?></p>
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
