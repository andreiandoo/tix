<?php
/**
 * Template Name: Micro - Rezervări de Grup
 * Description: Landing page for Group Reservations / Bulk Ticket Purchases
 */

get_header();

$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'                  => $current_lang === 'ro' ? 'Bilete în Vrac' : 'Bulk Tickets',
	'hero_title'             => $current_lang === 'ro' ? 'Rezervări' : 'Group',
	'hero_title2'            => $current_lang === 'ro' ? 'de grup' : 'Reservations',
	'hero_desc'              => $current_lang === 'ro'
		? 'Simplifică achizițiile în vrac pentru <strong class="text-white">evenimente corporate</strong>, excursii școlare și grupuri turistice. Reduceri pe niveluri, plăți parțiale, check-in în lot.'
		: 'Simplify bulk purchases for <strong class="text-white">corporate events</strong>, school trips and tourist groups. Tiered discounts, partial payments, batch check-in.',
	'cta_activate'           => $current_lang === 'ro' ? 'Activează Rezervări Grup' : 'Activate Group Reservations',
	'cta_discounts'          => $current_lang === 'ro' ? 'Vezi reducerile' : 'See discounts',
	'stat_discount'          => $current_lang === 'ro' ? 'Reducere max' : 'Max discount',
	'stat_tickets'           => $current_lang === 'ro' ? 'Bilete/grup' : 'Tickets/group',
	'stat_checkin'           => $current_lang === 'ro' ? 'Click check-in' : 'Click check-in',

	// Hero Visual
	'booking_label'          => $current_lang === 'ro' ? 'Rezervare Grup' : 'Group Booking',
	'team_building'          => 'Team Building',
	'approved'               => $current_lang === 'ro' ? 'Aprobat' : 'Approved',
	'event_label'            => $current_lang === 'ro' ? 'Eveniment' : 'Event',
	'tickets'                => $current_lang === 'ro' ? 'bilete' : 'tickets',
	'group_discount_applied' => $current_lang === 'ro' ? 'Reducere Grup Aplicată' : 'Group Discount Applied',
	'confirmed_participants' => $current_lang === 'ro' ? 'Participanți Confirmați' : 'Confirmed Participants',
	'other_participants'     => $current_lang === 'ro' ? '+ 19 alți participanți' : '+ 19 other participants',
	'payment_status'         => $current_lang === 'ro' ? 'Status Plată' : 'Payment Status',
	'advance_paid'           => $current_lang === 'ro' ? 'Avans plătit' : 'Advance paid',
	'processing'             => $current_lang === 'ro' ? 'În procesare' : 'Processing',
	'remaining'              => $current_lang === 'ro' ? 'Rămas' : 'Remaining',
	'you_save'               => $current_lang === 'ro' ? 'Economisiți' : 'You save',
	'group_leader'           => $current_lang === 'ro' ? 'Lider Grup' : 'Group Leader',

	// Tiered Discounts
	'tiers_label'            => $current_lang === 'ro' ? 'Reduceri pe Niveluri' : 'Tiered Discounts',
	'tiers_title'            => $current_lang === 'ro' ? 'Cu cât mai mult,' : 'The more you buy,',
	'tiers_title2'           => $current_lang === 'ro' ? 'cu atât mai ieftin' : 'the cheaper it gets',
	'tiers_desc'             => $current_lang === 'ro'
		? 'Activează reduceri automate care răsplătesc achizițiile mai mari. Clienții economisesc, tu umpli locuri.'
		: 'Enable automatic discounts that reward larger purchases. Customers save, you fill seats.',
	'tier_label'             => $current_lang === 'ro' ? 'Nivelul' : 'Tier',
	'discount_applied'       => $current_lang === 'ro' ? 'reducere aplicată' : 'discount applied',
	'negotiable'             => $current_lang === 'ro' ? 'Negociabil' : 'Negotiable',
	'contact_us'             => $current_lang === 'ro' ? 'contactează-ne' : 'contact us',
	'example_label'          => $current_lang === 'ro' ? 'Exemplu: 25 bilete × €100' : 'Example: 25 tickets × €100',
	'normal_price'           => $current_lang === 'ro' ? 'Preț Normal' : 'Normal Price',
	'group_price'            => $current_lang === 'ro' ? 'Preț Grup' : 'Group Price',
	'savings_message'        => $current_lang === 'ro' ? 'Economisiți €375 cu această rezervare!' : 'Save €375 with this booking!',

	// Group Leader Dashboard
	'dashboard_label'        => $current_lang === 'ro' ? 'Dashboard Lider Grup' : 'Group Leader Dashboard',
	'control_title'          => $current_lang === 'ro' ? 'Control' : 'Total',
	'control_title2'         => $current_lang === 'ro' ? 'total' : 'control',
	'dashboard_desc'         => $current_lang === 'ro'
		? 'Liderul grupului gestionează participanții, colectează detaliile individuale și distribuie biletele. Tot dintr-un singur loc.'
		: 'The group leader manages participants, collects individual details and distributes tickets. All from one place.',
	'manage_participants'    => $current_lang === 'ro' ? 'Gestionare Participanți' : 'Manage Participants',
	'manage_desc'            => $current_lang === 'ro' ? 'Adaugă, editează sau șterge membri din grup' : 'Add, edit or remove group members',
	'custom_forms'           => $current_lang === 'ro' ? 'Formulare Personalizate' : 'Custom Forms',
	'custom_forms_desc'      => $current_lang === 'ro' ? 'Colectează cerințe dietetice, accesibilitate, mărime tricou' : 'Collect dietary requirements, accessibility, t-shirt size',
	'ticket_distribution'    => $current_lang === 'ro' ? 'Distribuție Bilete' : 'Ticket Distribution',
	'ticket_dist_desc'       => $current_lang === 'ro' ? 'Trimite biletele individuale pe email membrilor' : 'Send individual tickets by email to members',
	'participants_list'      => $current_lang === 'ro' ? 'Lista Participanți' : 'Participants List',
	'confirmed_of'           => $current_lang === 'ro' ? 'din 25 confirmați' : 'of 25 confirmed',
	'add_btn'                => $current_lang === 'ro' ? '+ Adaugă' : '+ Add',
	'completed'              => $current_lang === 'ro' ? 'completat' : 'completed',
	'left'                   => $current_lang === 'ro' ? 'rămas' : 'left',
	'vegetarian'             => 'Vegetarian',
	'seat'                   => $current_lang === 'ro' ? 'Loc' : 'Seat',
	'standard'               => 'Standard',
	'distributed'            => $current_lang === 'ro' ? 'Distribuit' : 'Distributed',
	'pending'                => 'Pending',
	'waiting_details'        => $current_lang === 'ro' ? 'Așteaptă detalii...' : 'Waiting for details...',
	'empty_slot'             => $current_lang === 'ro' ? 'Loc liber' : 'Empty slot',
	'click_to_add'           => $current_lang === 'ro' ? 'Click pentru a adăuga' : 'Click to add',
	'send_reminder'          => $current_lang === 'ro' ? '📧 Trimite Reminder' : '📧 Send Reminder',
	'export_csv'             => '📥 Export CSV',

	// Seat Blocks
	'blocks_label'           => $current_lang === 'ro' ? 'Blocuri de Locuri' : 'Seat Blocks',
	'together_title'         => $current_lang === 'ro' ? 'Grupul stă' : 'Group sits',
	'together_title2'        => $current_lang === 'ro' ? 'împreună' : 'together',
	'blocks_desc'            => $current_lang === 'ro'
		? 'Rezervă blocuri de locuri consecutive pentru a asigura că întregul grup stă împreună. Perfect pentru evenimente cu locuri numerotate.'
		: 'Reserve consecutive seat blocks to ensure the entire group sits together. Perfect for events with numbered seats.',
	'block_selection'        => $current_lang === 'ro' ? 'Selecție Bloc' : 'Block Selection',
	'block_selection_desc'   => $current_lang === 'ro' ? 'Selectează o secțiune întreagă sau rânduri consecutive' : 'Select an entire section or consecutive rows',
	'flexible_allocation'    => $current_lang === 'ro' ? 'Alocare Flexibilă' : 'Flexible Allocation',
	'flexible_desc'          => $current_lang === 'ro' ? 'Sau lasă sistemul să găsească cele mai bune locuri disponibile' : 'Or let the system find the best available seats',
	'inventory_lock'         => $current_lang === 'ro' ? 'Blocare Inventar' : 'Inventory Lock',
	'inventory_desc'         => $current_lang === 'ro' ? 'Locurile sunt rezervate până la expirarea opțiunii' : 'Seats are held until option expires',
	'block_reserved'         => $current_lang === 'ro' ? 'Bloc Locuri Rezervat' : 'Reserved Seat Block',
	'section_rows'           => $current_lang === 'ro' ? 'Secțiunea A • Rândurile 5-7' : 'Section A • Rows 5-7',
	'group_seat'             => $current_lang === 'ro' ? 'Grup' : 'Group',
	'taken_seat'             => $current_lang === 'ro' ? 'Ocupat' : 'Taken',
	'available_seat'         => $current_lang === 'ro' ? 'Liber' : 'Available',
	'stage'                  => $current_lang === 'ro' ? 'Scenă' : 'Stage',
	'seats_reserved'         => $current_lang === 'ro' ? '25 locuri consecutive rezervate pentru grupul tău' : '25 consecutive seats reserved for your group',

	// Group Check-in
	'onsite_label'           => $current_lang === 'ro' ? 'La Locație' : 'On-site',
	'checkin_title'          => 'Check-in',
	'checkin_title2'         => $current_lang === 'ro' ? 'în lot' : 'batch',
	'checkin_desc'           => $current_lang === 'ro'
		? 'Procesează întregul grup cu o singură scanare. Perfect când autocarul turistic ajunge la ușă și ai 50 de persoane de verificat rapid.'
		: 'Process the entire group with a single scan. Perfect when the tour bus arrives and you have 50 people to check quickly.',
	'full_checkin'           => $current_lang === 'ro' ? 'Check-in Grup Complet' : 'Full Group Check-in',
	'full_checkin_desc'      => $current_lang === 'ro' ? 'Un click procesează toți participanții confirmați' : 'One click processes all confirmed participants',
	'qr_group'               => $current_lang === 'ro' ? 'QR Cod Grup' : 'Group QR Code',
	'qr_group_desc'          => $current_lang === 'ro' ? 'Liderul de grup are un cod master pentru toată echipa' : 'Group leader has a master code for the entire team',
	'attendance_list'        => $current_lang === 'ro' ? 'Lista Prezență' : 'Attendance List',
	'attendance_desc'        => $current_lang === 'ro' ? 'Bifează manual membrii pe măsură ce intră' : 'Manually check off members as they enter',
	'live_checkin'           => $current_lang === 'ro' ? 'Check-in Grup Live' : 'Live Group Check-in',
	'gate'                   => $current_lang === 'ro' ? 'Poarta B' : 'Gate B',
	'entered'                => $current_lang === 'ro' ? 'intrați' : 'entered',
	'group_complete'         => $current_lang === 'ro' ? '✓ Grup Complet!' : '✓ Group Complete!',
	'checkin_progress'       => $current_lang === 'ro' ? 'Check-in în desfășurare...' : 'Check-in in progress...',

	// Use Cases
	'usecases_label'         => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
	'usecases_title'         => $current_lang === 'ro' ? 'De la corporate' : 'From corporate',
	'usecases_title2'        => $current_lang === 'ro' ? 'la școli' : 'to schools',
	'uc_corporate'           => $current_lang === 'ro' ? 'Team Building Corporate' : 'Corporate Team Building',
	'uc_corporate_desc'      => $current_lang === 'ro' ? 'Companii care organizează ieșiri pentru echipe. Reduceri, factură firmă, gestionare simplă.' : 'Companies organizing team outings. Discounts, company invoice, simple management.',
	'uc_schools'             => $current_lang === 'ro' ? 'Excursii Școlare' : 'School Trips',
	'uc_schools_desc'        => $current_lang === 'ro' ? 'Clase și grupuri de elevi. Colectare autorizații, cerințe speciale, check-in rapid.' : 'Classes and student groups. Permission collection, special requirements, quick check-in.',
	'uc_tours'               => $current_lang === 'ro' ? 'Tururi Organizate' : 'Organized Tours',
	'uc_tours_desc'          => $current_lang === 'ro' ? 'Agenții de turism care aduc grupuri. Un autocar, un check-in, zero coadă.' : 'Tourism agencies bringing groups. One bus, one check-in, zero queue.',
	'uc_family'              => $current_lang === 'ro' ? 'Reuniuni de Familie' : 'Family Reunions',
	'uc_family_desc'         => $current_lang === 'ro' ? 'Nunți, aniversări, evenimente private. Un organizator, mulți participanți.' : 'Weddings, anniversaries, private events. One organizer, many participants.',
	'uc_sports'              => $current_lang === 'ro' ? 'Cluburi Sportive' : 'Sports Clubs',
	'uc_sports_desc'         => $current_lang === 'ro' ? 'Deplasări ale suporterilor. Locuri consecutive, reduceri club, coordonare simplă.' : 'Fan away trips. Consecutive seats, club discounts, simple coordination.',
	'uc_fans'                => 'Fan Clubs',
	'uc_fans_desc'           => $current_lang === 'ro' ? 'Grupuri de fani care merg împreună la concerte. Experiență comună, preț redus.' : 'Fan groups going to concerts together. Shared experience, reduced price.',

	// Testimonial
	'testimonial_quote'      => $current_lang === 'ro'
		? 'Aducem <span class="font-semibold text-gradient-group">3 autocare pe zi</span> la festival. Cu check-in-ul de grup, procesăm 150 de persoane în 5 minute. Înainte dura o oră.'
		: 'We bring <span class="font-semibold text-gradient-group">3 buses per day</span> to the festival. With group check-in, we process 150 people in 5 minutes. It used to take an hour.',
	'testimonial_author'     => 'Cristian M.',
	'testimonial_role'       => $current_lang === 'ro' ? 'Director Operațiuni, EuroTour Travel' : 'Operations Director, EuroTour Travel',

	// Final CTA
	'cta_title'              => $current_lang === 'ro' ? 'Grupuri' : 'Groups',
	'cta_title2'             => $current_lang === 'ro' ? 'simplificate' : 'simplified',
	'cta_desc'               => $current_lang === 'ro'
		? 'Reduceri pe niveluri, dashboard lider, plăți parțiale, check-in în lot. Tot ce ai nevoie pentru comenzi mari.'
		: 'Tiered discounts, leader dashboard, partial payments, batch check-in. Everything you need for large orders.',
	'cta_contact'            => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
	'cta_footer'             => $current_lang === 'ro' ? '10-500 bilete • Reduceri automate • Check-in în lot' : '10-500 tickets • Automatic discounts • Batch check-in',
];
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  @font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }
  ::selection { background: #6366F1; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-group { background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 50%, #EC4899 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(99, 102, 241, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Tier card styling */
  .tier-card {
    background: linear-gradient(145deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.05));
    border: 1px solid rgba(99, 102, 241, 0.2);
    position: relative;
    overflow: hidden;
    transition: all 0.3s;
  }
  .tier-card:hover {
    border-color: rgba(99, 102, 241, 0.5);
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(99, 102, 241, 0.2);
  }
  .tier-card.active {
    border-color: #14B8A6;
    background: linear-gradient(145deg, rgba(20, 184, 166, 0.15), rgba(20, 184, 166, 0.05));
  }
  .tier-card.active::before {
    content: '✓ ACTIV';
    position: absolute;
    top: 12px;
    right: 12px;
    background: #14B8A6;
    color: white;
    font-size: 10px;
    font-weight: bold;
    padding: 4px 8px;
    border-radius: 4px;
  }

  /* Attendee row */
  .attendee-row {
    background: rgba(99, 102, 241, 0.05);
    border: 1px solid rgba(99, 102, 241, 0.1);
    transition: all 0.3s;
  }
  .attendee-row:hover {
    background: rgba(99, 102, 241, 0.1);
    border-color: rgba(99, 102, 241, 0.3);
  }

  /* Seat grid */
  .seat {
    width: 24px;
    height: 24px;
    border-radius: 4px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.2s;
  }
  .seat.available { background: rgba(255, 255, 255, 0.1); }
  .seat.selected { background: #6366F1; border-color: #6366F1; }
  .seat.blocked { background: #EC4899; border-color: #EC4899; }
  .seat.taken { background: rgba(255, 255, 255, 0.3); cursor: not-allowed; }

  /* Progress bar */
  .progress-bar {
    height: 8px;
    background: rgba(99, 102, 241, 0.2);
    border-radius: 4px;
    overflow: hidden;
  }
  .progress-bar-fill {
    height: 100%;
    background: linear-gradient(90deg, #6366F1, #14B8A6);
    border-radius: 4px;
    transition: width 0.5s ease-out;
  }

  /* Approval badge */
  .approval-pending { background: rgba(245, 158, 11, 0.2); color: #f59e0b; }
  .approval-approved { background: rgba(16, 185, 129, 0.2); color: #10b981; }
  .approval-rejected { background: rgba(239, 68, 68, 0.2); color: #ef4444; }

  /* Discount badge */
  .discount-badge {
    background: linear-gradient(135deg, #14B8A6, #10b981);
    color: white;
    font-weight: bold;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 14px;
  }

  /* Payment split */
  .payment-split {
    display: flex;
    height: 12px;
    border-radius: 6px;
    overflow: hidden;
  }
  .payment-paid { background: #10b981; }
  .payment-pending { background: #f59e0b; }
  .payment-remaining { background: rgba(255, 255, 255, 0.1); }
</style>

<main class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-group-primary/15 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-group-accent/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute text-2xl top-32 left-16 opacity-30 animate-float">👥</div>
    <div class="absolute text-xl bottom-40 right-24 opacity-20 animate-float" style="animation-delay: 1s;">🎫</div>
    <div class="absolute text-3xl top-1/2 right-16 opacity-10 animate-float" style="animation-delay: 2s;">🏢</div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-group-primary/10 border-group-primary/20">
            <svg class="w-5 h-5 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            <span class="text-sm font-medium text-group-primary"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-group"><?php echo esc_html( $t['hero_title2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 rounded-full group bg-gradient-to-r from-group-primary to-group-secondary hover:scale-105 hover:shadow-glow-group">
              <?php echo esc_html( $t['cta_activate'] ); ?>
              <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#reduceri" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              <?php echo esc_html( $t['cta_discounts'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-bold font-display text-group-teal">-20%</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['stat_discount'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold text-white font-display">500</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['stat_tickets'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold font-display text-group-primary">1</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['stat_checkin'] ); ?></div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Group Booking Card -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            groupSize: 25,
            discount: 15,
            attendees: [
              { name: 'Maria Ionescu', email: 'maria@corp.ro', status: 'confirmed' },
              { name: 'Alexandru Popa', email: 'alex@corp.ro', status: 'confirmed' },
              { name: 'Elena Dumitrescu', email: 'elena@corp.ro', status: 'pending' }
            ]
          }">

            <!-- Main Card -->
            <div class="p-6 border shadow-2xl bg-dark-800/80 backdrop-blur-xl rounded-3xl border-group-primary/20">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-group-primary to-group-secondary">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                  </div>
                  <div>
                    <div class="font-semibold text-white"><?php echo esc_html( $t['booking_label'] ); ?> #247</div>
                    <div class="text-xs text-white/40">TechCorp SRL • <?php echo esc_html( $t['team_building'] ); ?></div>
                  </div>
                </div>
                <span class="px-3 py-1 text-xs font-medium rounded-full approval-approved"><?php echo esc_html( $t['approved'] ); ?></span>
              </div>

              <!-- Event Info -->
              <div class="p-4 mb-4 bg-dark-900/50 rounded-xl">
                <div class="flex items-center justify-between">
                  <div>
                    <div class="text-xs uppercase text-white/40"><?php echo esc_html( $t['event_label'] ); ?></div>
                    <div class="font-medium text-white">Summer Festival 2025</div>
                    <div class="text-sm text-white/50">15 Iulie • Romexpo</div>
                  </div>
                  <div class="text-right">
                    <div class="text-3xl font-bold text-white" x-text="groupSize">25</div>
                    <div class="text-xs text-white/40"><?php echo esc_html( $t['tickets'] ); ?></div>
                  </div>
                </div>
              </div>

              <!-- Discount Applied -->
              <div class="flex items-center justify-between p-3 mb-4 border rounded-xl bg-group-teal/10 border-group-teal/30">
                <div class="flex items-center gap-2">
                  <svg class="w-5 h-5 text-group-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                  <span class="font-medium text-group-teal"><?php echo esc_html( $t['group_discount_applied'] ); ?></span>
                </div>
                <span class="discount-badge" x-text="'-' + discount + '%'">-15%</span>
              </div>

              <!-- Attendees Preview -->
              <div class="mb-4">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-xs uppercase text-white/40"><?php echo esc_html( $t['confirmed_participants'] ); ?></span>
                  <span class="text-xs text-white/60">22/25</span>
                </div>
                <div class="space-y-2">
                  <template x-for="attendee in attendees" :key="attendee.email">
                    <div class="flex items-center gap-3 px-3 py-2 rounded-lg attendee-row">
                      <div class="flex items-center justify-center w-8 h-8 rounded-full bg-group-primary/20">
                        <span class="text-xs font-medium text-group-primary" x-text="attendee.name.split(' ').map(n => n[0]).join('')"></span>
                      </div>
                      <div class="flex-1">
                        <div class="text-sm text-white" x-text="attendee.name"></div>
                        <div class="text-xs text-white/40" x-text="attendee.email"></div>
                      </div>
                      <svg x-show="attendee.status === 'confirmed'" class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                      <svg x-show="attendee.status === 'pending'" class="w-4 h-4 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                  </template>
                </div>
                <div class="mt-2 text-center">
                  <span class="text-xs text-white/40"><?php echo esc_html( $t['other_participants'] ); ?></span>
                </div>
              </div>

              <!-- Payment Progress -->
              <div>
                <div class="flex items-center justify-between mb-2">
                  <span class="text-xs uppercase text-white/40"><?php echo esc_html( $t['payment_status'] ); ?></span>
                  <span class="text-xs font-medium text-brand-green">€1,875 / €2,500</span>
                </div>
                <div class="payment-split">
                  <div class="payment-paid" style="width: 50%"></div>
                  <div class="payment-pending" style="width: 25%"></div>
                  <div class="payment-remaining" style="width: 25%"></div>
                </div>
                <div class="flex justify-between mt-1 text-xs text-white/40">
                  <span><?php echo esc_html( $t['advance_paid'] ); ?></span>
                  <span><?php echo esc_html( $t['processing'] ); ?></span>
                  <span><?php echo esc_html( $t['remaining'] ); ?></span>
                </div>
              </div>
            </div>

            <!-- Floating Savings Badge -->
            <div class="absolute z-10 px-4 py-3 shadow-xl -top-4 -right-4 bg-group-teal rounded-xl animate-float">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <div>
                  <div class="font-bold text-white">€375</div>
                  <div class="text-xs text-white/70"><?php echo esc_html( $t['you_save'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating Leader Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-group-primary/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-group-primary/20">
                  <svg class="w-4 h-4 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-group-primary"><?php echo esc_html( $t['group_leader'] ); ?></div>
                  <div class="text-xs text-white/40">Ion Popescu</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TIERED DISCOUNTS ==================== -->
  <section class="relative py-24 overflow-hidden" id="reduceri">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-group-teal"><?php echo esc_html( $t['tiers_label'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['tiers_title'] ); ?><br><span class="text-gradient-group"><?php echo esc_html( $t['tiers_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['tiers_desc'] ); ?></p>
      </div>

      <!-- Tier Cards -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 reveal" x-data="{ selectedTier: 2 }">
        <!-- Tier 1 -->
        <div class="p-6 cursor-pointer tier-card rounded-2xl" :class="selectedTier >= 1 && 'active'" @click="selectedTier = 1">
          <div class="mb-4 text-4xl">🎫</div>
          <div class="mb-1 text-sm tracking-wider uppercase text-white/40"><?php echo esc_html( $t['tier_label'] ); ?> 1</div>
          <div class="mb-2 text-3xl font-bold text-white">10+</div>
          <div class="mb-4 text-sm text-white/60"><?php echo esc_html( $t['tickets'] ); ?></div>
          <div class="text-2xl font-bold text-group-teal">-10%</div>
          <div class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['discount_applied'] ); ?></div>
        </div>

        <!-- Tier 2 -->
        <div class="p-6 cursor-pointer tier-card rounded-2xl" :class="selectedTier >= 2 && 'active'" @click="selectedTier = 2">
          <div class="mb-4 text-4xl">🎟️</div>
          <div class="mb-1 text-sm tracking-wider uppercase text-white/40"><?php echo esc_html( $t['tier_label'] ); ?> 2</div>
          <div class="mb-2 text-3xl font-bold text-white">25+</div>
          <div class="mb-4 text-sm text-white/60"><?php echo esc_html( $t['tickets'] ); ?></div>
          <div class="text-2xl font-bold text-group-teal">-15%</div>
          <div class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['discount_applied'] ); ?></div>
        </div>

        <!-- Tier 3 -->
        <div class="p-6 cursor-pointer tier-card rounded-2xl" :class="selectedTier >= 3 && 'active'" @click="selectedTier = 3">
          <div class="mb-4 text-4xl">🎪</div>
          <div class="mb-1 text-sm tracking-wider uppercase text-white/40"><?php echo esc_html( $t['tier_label'] ); ?> 3</div>
          <div class="mb-2 text-3xl font-bold text-white">50+</div>
          <div class="mb-4 text-sm text-white/60"><?php echo esc_html( $t['tickets'] ); ?></div>
          <div class="text-2xl font-bold text-group-teal">-20%</div>
          <div class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['discount_applied'] ); ?></div>
        </div>

        <!-- Custom -->
        <div class="p-6 border-dashed cursor-pointer tier-card rounded-2xl" @click="selectedTier = 4">
          <div class="mb-4 text-4xl">🏢</div>
          <div class="mb-1 text-sm tracking-wider uppercase text-white/40">Enterprise</div>
          <div class="mb-2 text-3xl font-bold text-white">100+</div>
          <div class="mb-4 text-sm text-white/60"><?php echo esc_html( $t['tickets'] ); ?></div>
          <div class="text-lg font-bold text-group-accent"><?php echo esc_html( $t['negotiable'] ); ?></div>
          <div class="mt-2 text-xs text-white/40"><?php echo esc_html( $t['contact_us'] ); ?></div>
        </div>
      </div>

      <!-- Calculator Preview -->
      <div class="max-w-2xl mx-auto mt-12 reveal reveal-delay-1">
        <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
          <div class="mb-4 text-center">
            <span class="text-sm text-white/40"><?php echo esc_html( $t['example_label'] ); ?></span>
          </div>
          <div class="flex items-center justify-between mb-4">
            <div>
              <div class="text-xs text-white/40"><?php echo esc_html( $t['normal_price'] ); ?></div>
              <div class="text-lg line-through text-white/50">€2,500</div>
            </div>
            <div class="discount-badge">-15%</div>
            <div class="text-right">
              <div class="text-xs text-group-teal"><?php echo esc_html( $t['group_price'] ); ?></div>
              <div class="text-2xl font-bold text-group-teal">€2,125</div>
            </div>
          </div>
          <div class="p-3 text-center border rounded-lg bg-group-teal/10 border-group-teal/30">
            <span class="font-medium text-group-teal"><?php echo esc_html( $t['savings_message'] ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== GROUP LEADER DASHBOARD ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-group-primary"><?php echo esc_html( $t['dashboard_label'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['control_title'] ); ?><br><span class="text-gradient-group"><?php echo esc_html( $t['control_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['dashboard_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-group-primary/20">
                <svg class="w-6 h-6 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['manage_participants'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['manage_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-group-secondary/20">
                <svg class="w-6 h-6 text-group-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['custom_forms'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['custom_forms_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-group-accent/20">
                <svg class="w-6 h-6 text-group-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['ticket_distribution'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['ticket_dist_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Dashboard UI -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-group-primary/20">
                  <svg class="w-5 h-5 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <div>
                  <div class="font-semibold text-white"><?php echo esc_html( $t['participants_list'] ); ?></div>
                  <div class="text-xs text-white/40">22 <?php echo esc_html( $t['confirmed_of'] ); ?></div>
                </div>
              </div>
              <button class="px-3 py-1.5 rounded-lg bg-group-primary/20 text-group-primary text-sm font-medium hover:bg-group-primary/30 transition-colors">
                <?php echo esc_html( $t['add_btn'] ); ?>
              </button>
            </div>

            <!-- Progress -->
            <div class="mb-4">
              <div class="progress-bar">
                <div class="progress-bar-fill" style="width: 88%"></div>
              </div>
              <div class="flex justify-between mt-1 text-xs text-white/40">
                <span>88% <?php echo esc_html( $t['completed'] ); ?></span>
                <span>3 <?php echo esc_html( $t['left'] ); ?></span>
              </div>
            </div>

            <!-- Attendees Table -->
            <div class="mb-4 space-y-2">
              <div class="flex items-center gap-3 px-3 py-2 rounded-lg attendee-row">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-brand-green/20">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-sm text-white">Maria Ionescu</div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['vegetarian'] ); ?> • <?php echo esc_html( $t['seat'] ); ?> A-15</div>
                </div>
                <span class="px-2 py-0.5 rounded bg-brand-green/20 text-brand-green text-xs"><?php echo esc_html( $t['distributed'] ); ?></span>
              </div>

              <div class="flex items-center gap-3 px-3 py-2 rounded-lg attendee-row">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-brand-green/20">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-sm text-white">Alexandru Popa</div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['standard'] ); ?> • <?php echo esc_html( $t['seat'] ); ?> A-16</div>
                </div>
                <span class="px-2 py-0.5 rounded bg-brand-green/20 text-brand-green text-xs"><?php echo esc_html( $t['distributed'] ); ?></span>
              </div>

              <div class="flex items-center gap-3 px-3 py-2 rounded-lg attendee-row">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-brand-amber/20">
                  <svg class="w-4 h-4 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-sm text-white">Elena Dumitrescu</div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['waiting_details'] ); ?></div>
                </div>
                <span class="px-2 py-0.5 rounded bg-brand-amber/20 text-brand-amber text-xs"><?php echo esc_html( $t['pending'] ); ?></span>
              </div>

              <div class="flex items-center gap-3 px-3 py-2 border-dashed rounded-lg attendee-row">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white/5">
                  <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-sm text-white/30"><?php echo esc_html( $t['empty_slot'] ); ?></div>
                  <div class="text-xs text-white/20"><?php echo esc_html( $t['click_to_add'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-2">
              <button class="flex-1 py-2 text-sm font-medium text-white transition-colors rounded-lg bg-group-primary hover:bg-group-primary/80">
                <?php echo $t['send_reminder']; ?>
              </button>
              <button class="flex-1 py-2 text-sm transition-colors rounded-lg bg-dark-700 text-white/60 hover:bg-dark-600">
                <?php echo esc_html( $t['export_csv'] ); ?>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SEAT BLOCKS ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Visual - Seat Map -->
        <div class="order-2 reveal lg:order-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div>
                <div class="font-semibold text-white"><?php echo esc_html( $t['block_reserved'] ); ?></div>
                <div class="text-xs text-white/40"><?php echo esc_html( $t['section_rows'] ); ?></div>
              </div>
              <div class="flex items-center gap-4 text-xs">
                <div class="flex items-center gap-1">
                  <div class="seat selected" style="width: 12px; height: 12px;"></div>
                  <span class="text-white/40"><?php echo esc_html( $t['group_seat'] ); ?></span>
                </div>
                <div class="flex items-center gap-1">
                  <div class="seat taken" style="width: 12px; height: 12px;"></div>
                  <span class="text-white/40"><?php echo esc_html( $t['taken_seat'] ); ?></span>
                </div>
                <div class="flex items-center gap-1">
                  <div class="seat available" style="width: 12px; height: 12px;"></div>
                  <span class="text-white/40"><?php echo esc_html( $t['available_seat'] ); ?></span>
                </div>
              </div>
            </div>

            <!-- Stage -->
            <div class="mb-6 text-center">
              <div class="inline-block px-12 py-2 text-xs tracking-wider uppercase rounded-full bg-white/5 text-white/30"><?php echo esc_html( $t['stage'] ); ?></div>
            </div>

            <!-- Seat Grid -->
            <div class="space-y-2">
              <!-- Row 4 -->
              <div class="flex items-center justify-center gap-2">
                <span class="w-4 text-xs text-white/30">4</span>
                <div class="flex gap-1">
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                </div>
              </div>

              <!-- Row 5 - Group -->
              <div class="flex items-center justify-center gap-2">
                <span class="w-4 text-xs text-white/30">5</span>
                <div class="flex gap-1">
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                </div>
              </div>

              <!-- Row 6 - Group -->
              <div class="flex items-center justify-center gap-2">
                <span class="w-4 text-xs text-white/30">6</span>
                <div class="flex gap-1">
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                </div>
              </div>

              <!-- Row 7 - Partial Group -->
              <div class="flex items-center justify-center gap-2">
                <span class="w-4 text-xs text-white/30">7</span>
                <div class="flex gap-1">
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                </div>
              </div>

              <!-- Row 8 -->
              <div class="flex items-center justify-center gap-2">
                <span class="w-4 text-xs text-white/30">8</span>
                <div class="flex gap-1">
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat taken"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                </div>
              </div>
            </div>

            <!-- Summary -->
            <div class="p-3 mt-6 text-center border rounded-lg bg-group-primary/10 border-group-primary/30">
              <span class="font-medium text-group-primary"><?php echo esc_html( $t['seats_reserved'] ); ?></span>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="order-1 reveal lg:order-2">
          <span class="text-sm font-medium tracking-widest uppercase text-group-accent"><?php echo esc_html( $t['blocks_label'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['together_title'] ); ?><br><span class="text-gradient-group"><?php echo esc_html( $t['together_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['blocks_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-group-primary/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['block_selection'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['block_selection_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-group-secondary/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-group-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['flexible_allocation'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['flexible_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-group-teal/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-group-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['inventory_lock'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['inventory_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== GROUP CHECK-IN ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-brand-green"><?php echo esc_html( $t['onsite_label'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['checkin_title'] ); ?><br><span class="text-gradient-group"><?php echo esc_html( $t['checkin_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['checkin_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-brand-green/10 border-brand-green/30">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-green/20">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['full_checkin'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['full_checkin_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-group-primary/20">
                <svg class="w-6 h-6 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['qr_group'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['qr_group_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-cyan/20">
                <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
              </div>
              <div>
                <span class="font-medium text-white"><?php echo esc_html( $t['attendance_list'] ); ?></span>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['attendance_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Check-in Animation -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10" x-data="{ checkedIn: 0 }" x-init="setInterval(() => { if(checkedIn < 25) checkedIn++; }, 200)">
            <div class="flex items-center justify-between mb-6">
              <div>
                <div class="font-semibold text-white"><?php echo esc_html( $t['live_checkin'] ); ?></div>
                <div class="text-xs text-white/40">TechCorp SRL • <?php echo esc_html( $t['gate'] ); ?></div>
              </div>
              <div class="text-right">
                <div class="text-3xl font-bold text-brand-green" x-text="checkedIn + '/25'">0/25</div>
                <div class="text-xs text-white/40"><?php echo esc_html( $t['entered'] ); ?></div>
              </div>
            </div>

            <!-- Progress -->
            <div class="mb-6">
              <div class="progress-bar" style="height: 12px;">
                <div class="transition-all duration-300 progress-bar-fill" :style="'width: ' + (checkedIn * 4) + '%'"></div>
              </div>
            </div>

            <!-- Avatars Grid -->
            <div class="grid grid-cols-5 gap-3 mb-6">
              <template x-for="i in 25" :key="i">
                <div
                  class="flex items-center justify-center w-12 h-12 transition-all duration-300 rounded-full"
                  :class="i <= checkedIn ? 'bg-brand-green/20 text-brand-green' : 'bg-dark-900/50 text-white/20'"
                >
                  <svg x-show="i <= checkedIn" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  <span x-show="i > checkedIn" class="text-sm" x-text="i"></span>
                </div>
              </template>
            </div>

            <!-- Complete button -->
            <button
              class="w-full py-3 font-medium transition-all duration-300 rounded-xl"
              :class="checkedIn === 25 ? 'bg-brand-green text-white' : 'bg-group-primary text-white'"
              x-text="checkedIn === 25 ? '<?php echo esc_attr( $t['group_complete'] ); ?>' : '<?php echo esc_attr( $t['checkin_progress'] ); ?>'"
            ></button>
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
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-group-primary/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-group-primary/20 to-group-secondary/20"><span class="text-2xl">🏢</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_corporate'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_corporate_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-group-primary/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10"><span class="text-2xl">🎓</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_schools'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_schools_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-group-primary/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-group-teal/20 to-group-teal/10"><span class="text-2xl">🚌</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_tours'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_tours_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-group-primary/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-group-accent/20 to-group-accent/10"><span class="text-2xl">👨‍👩‍👧‍👦</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_family'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_family_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-group-primary/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-rose/20 to-brand-rose/10"><span class="text-2xl">⚽</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_sports'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_sports_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-group-primary/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/10"><span class="text-2xl">🎵</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_fans'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_fans_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-group-primary/10 to-group-accent/10 rounded-3xl md:p-12 border-group-primary/20">
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
            <div class="rounded-full w-14 h-14 bg-gradient-to-br from-group-primary to-group-accent"></div>
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
    <div class="absolute inset-0 bg-gradient-to-br from-group-primary/15 via-transparent to-group-accent/15"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(99,102,241,0.2) 0%, rgba(236,72,153,0.1) 100%);"></div>

    <div class="absolute text-4xl top-20 left-20 opacity-20 animate-float">👥</div>
    <div class="absolute text-3xl bottom-20 right-20 opacity-20 animate-float" style="animation-delay: 1s;">🎟️</div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal"><?php echo esc_html( $t['cta_title'] ); ?><br><span class="text-gradient-group"><?php echo esc_html( $t['cta_title2'] ); ?></span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1"><?php echo esc_html( $t['cta_desc'] ); ?></p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 rounded-full group bg-gradient-to-r from-group-primary to-group-secondary hover:scale-105 hover:shadow-glow-group">
          <?php echo esc_html( $t['cta_activate'] ); ?>
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
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
