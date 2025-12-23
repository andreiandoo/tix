<?php
/**
 * Template Name: Micro - Salesforce
 * Description: Landing page for Salesforce CRM integration
 */

get_header();

// Multilingual support
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'               => $current_lang === 'ro' ? 'Sincronizare CRM Bidirecțională' : 'Bidirectional CRM Sync',
	'hero_title'          => $current_lang === 'ro' ? 'în sync' : 'in sync',
	'hero_desc'           => $current_lang === 'ro' ? 'Clienți, comenzi și evenimente <strong class="text-white">sincronizate automat</strong> cu Salesforce CRM. Echipa de vânzări vede totul - istoric achiziții, participări, valoare client.' : 'Customers, orders, and events <strong class="text-white">automatically synced</strong> with Salesforce CRM. The sales team sees everything - purchase history, attendance, customer value.',
	'cta_connect'         => $current_lang === 'ro' ? 'Conectează Salesforce' : 'Connect Salesforce',
	'cta_see_objects'     => $current_lang === 'ro' ? 'Vezi obiectele suportate' : 'See supported objects',
	'both_directions'     => $current_lang === 'ro' ? 'Ambele direcții' : 'Both directions',
	'at_each_event'       => $current_lang === 'ro' ? 'La fiecare eveniment' : 'At each event',
	'advanced_queries'    => $current_lang === 'ro' ? 'Interogări avansate' : 'Advanced queries',
	'active_sync'         => $current_lang === 'ro' ? 'Sincronizare Activă' : 'Active Sync',
	'bidirectional_rt'    => $current_lang === 'ro' ? 'Bidirecțională • Real-time' : 'Bidirectional • Real-time',
	'syncing'             => $current_lang === 'ro' ? 'Sincronizare...' : 'Syncing...',
	'synced'              => $current_lang === 'ro' ? 'Sincronizat' : 'Synced',
	'syncs'               => $current_lang === 'ro' ? 'sincronizări' : 'syncs',
	'last_hour'           => $current_lang === 'ro' ? 'ultima oră' : 'last hour',
	'secure'              => $current_lang === 'ro' ? 'Securizat' : 'Secure',

	// Objects section
	'objects_badge'       => $current_lang === 'ro' ? 'Obiecte Suportate' : 'Supported Objects',
	'objects_title'       => $current_lang === 'ro' ? 'Toate obiectele' : 'All the objects',
	'objects_title2'      => $current_lang === 'ro' ? 'de care ai nevoie' : 'you need',
	'objects_desc'        => $current_lang === 'ro' ? 'Standard și personalizate. Sincronizare completă cu CRM-ul tău.' : 'Standard and custom. Complete synchronization with your CRM.',
	'contact_desc'        => $current_lang === 'ro' ? 'Clienți individuali cu detalii personale, istoricul achizițiilor și preferințe.' : 'Individual customers with personal details, purchase history, and preferences.',
	'lead_desc'           => $current_lang === 'ro' ? 'Potențiali clienți înainte de conversie. Urmărire pipeline de la interes la achiziție.' : 'Potential customers before conversion. Pipeline tracking from interest to purchase.',
	'opportunity_desc'    => $current_lang === 'ro' ? 'Deal-uri de vânzări pentru pachete mari, sponsorizări și vânzări corporative.' : 'Sales deals for large packages, sponsorships, and corporate sales.',
	'account_desc'        => $current_lang === 'ro' ? 'Companii pentru vânzări B2B. Leagă multiple contacte la același cont.' : 'Companies for B2B sales. Link multiple contacts to the same account.',
	'custom_objects'      => $current_lang === 'ro' ? '+ Obiecte personalizate suportate prin maparea câmpurilor' : '+ Custom objects supported through field mapping',

	// Sync directions
	'sync_badge'          => $current_lang === 'ro' ? 'Direcții Sincronizare' : 'Sync Directions',
	'sync_title'          => $current_lang === 'ro' ? 'Tu controlezi' : 'You control',
	'sync_title2'         => $current_lang === 'ro' ? 'fluxul de date' : 'the data flow',
	'sync_desc'           => $current_lang === 'ro' ? 'Alege cum se sincronizează datele: push, pull sau bidirecțional. Fiecare obiect poate avea propria configurare.' : 'Choose how data syncs: push, pull, or bidirectional. Each object can have its own configuration.',
	'push_desc'           => $current_lang === 'ro' ? 'Trimite date când se creează comenzi sau clienți noi' : 'Send data when orders or new customers are created',
	'pull_desc'           => $current_lang === 'ro' ? 'Importă actualizările făcute direct în Salesforce' : 'Import updates made directly in Salesforce',
	'bidirectional'       => $current_lang === 'ro' ? 'Bidirecțional' : 'Bidirectional',
	'recommended'         => $current_lang === 'ro' ? 'Recomandat' : 'Recommended',
	'bidirectional_desc'  => $current_lang === 'ro' ? 'Sincronizare automată în ambele direcții - o singură sursă de adevăr' : 'Automatic sync in both directions - a single source of truth',
	'sync_config'         => $current_lang === 'ro' ? 'Configurare Sync' : 'Sync Configuration',
	'per_object'          => $current_lang === 'ro' ? 'Per obiect' : 'Per object',

	// Field mapping
	'field_badge'         => $current_lang === 'ro' ? 'Mapare Câmpuri' : 'Field Mapping',
	'field_title'         => $current_lang === 'ro' ? 'Date acolo unde' : 'Data where',
	'field_title2'        => $current_lang === 'ro' ? 'ai nevoie' : 'you need it',
	'field_desc'          => $current_lang === 'ro' ? 'Mapează câmpurile Tixello la orice câmp Salesforce - standard sau personalizat.' : 'Map Tixello fields to any Salesforce field - standard or custom.',
	'tixello_field'       => $current_lang === 'ro' ? 'Câmp Tixello' : 'Tixello Field',
	'salesforce_field'    => $current_lang === 'ro' ? 'Câmp Salesforce' : 'Salesforce Field',
	'add_mapping'         => $current_lang === 'ro' ? '+ Adaugă mapare câmp' : '+ Add field mapping',

	// SOQL section
	'soql_badge'          => $current_lang === 'ro' ? 'Interogări SOQL' : 'SOQL Queries',
	'soql_title'          => $current_lang === 'ro' ? 'Puterea' : 'The power of',
	'soql_title2'         => $current_lang === 'ro' ? 'interogărilor' : 'queries',
	'soql_desc'           => $current_lang === 'ro' ? 'Interoghează direct datele Salesforce cu SOQL. Segmentează clienții, extrage rapoarte, filtrează sincronizările.' : 'Query Salesforce data directly with SOQL. Segment customers, extract reports, filter syncs.',
	'results'             => $current_lang === 'ro' ? 'Rezultate: 47 înregistrări' : 'Results: 47 records',
	'advanced_filter'     => $current_lang === 'ro' ? 'Filtrare Avansată' : 'Advanced Filtering',
	'advanced_filter_desc'=> $current_lang === 'ro' ? 'Sincronizează doar înregistrările care contează. Filtrează după dată, valoare, eveniment.' : 'Sync only the records that matter. Filter by date, value, event.',
	'segment_customers'   => $current_lang === 'ro' ? 'Segmentare Clienți' : 'Customer Segmentation',
	'segment_desc'        => $current_lang === 'ro' ? 'Identifică VIP-urile, clienții corporativi, participanții frecvenți.' : 'Identify VIPs, corporate customers, frequent attendees.',
	'custom_reporting'    => $current_lang === 'ro' ? 'Raportare Personalizată' : 'Custom Reporting',
	'custom_report_desc'  => $current_lang === 'ro' ? 'Extrage date pentru analytics și rapoarte custom.' : 'Extract data for analytics and custom reports.',

	// Use cases
	'usecases_badge'      => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
	'usecases_title'      => $current_lang === 'ro' ? 'CRM-ul tău,' : 'Your CRM,',
	'b2b_sales'           => $current_lang === 'ro' ? 'Vânzări B2B' : 'B2B Sales',
	'b2b_desc'            => $current_lang === 'ro' ? 'Creează Accounts pentru companii, leagă Contacts ca angajați, urmărește Opportunities pentru deal-uri mari.' : 'Create Accounts for companies, link Contacts as employees, track Opportunities for large deals.',
	'vip_tracking'        => $current_lang === 'ro' ? 'Urmărire VIP' : 'VIP Tracking',
	'vip_desc'            => $current_lang === 'ro' ? 'Marchează cumpărătorii de mare valoare. Istoricul complet de achiziții pentru servicii personalizate.' : 'Mark high-value buyers. Complete purchase history for personalized services.',
	'event_campaigns'     => $current_lang === 'ro' ? 'Campanii Evenimente' : 'Event Campaigns',
	'events_desc'         => $current_lang === 'ro' ? 'Segmentează contactele după participare. Targetează participanții anteriori. Măsoară ROI.' : 'Segment contacts by attendance. Target previous attendees. Measure ROI.',
	'corporate_clients'   => $current_lang === 'ro' ? 'Clienți Corporativi' : 'Corporate Clients',
	'corporate_desc'      => $current_lang === 'ro' ? 'Gestionează reînnoirile și abonamentele. Multiple contacte per Account pentru vizibilitate completă.' : 'Manage renewals and subscriptions. Multiple contacts per Account for complete visibility.',
	'sales_pipeline'      => $current_lang === 'ro' ? 'Pipeline Vânzări' : 'Sales Pipeline',
	'pipeline_desc'       => $current_lang === 'ro' ? 'Creează Opportunities pentru pachete mari. Prognozează venituri alături de alte vânzări.' : 'Create Opportunities for large packages. Forecast revenue alongside other sales.',
	'post_event'          => $current_lang === 'ro' ? 'Follow-Up Post-Event' : 'Post-Event Follow-Up',
	'post_event_desc'     => $current_lang === 'ro' ? 'Sincronizează participarea. Permite follow-up de vânzări cu participanții. Conversie lead-uri.' : 'Sync attendance. Enable sales follow-up with attendees. Convert leads.',

	// Testimonial
	'testimonial'         => $current_lang === 'ro' ? 'Echipa de vânzări vede acum <span class="font-semibold text-gradient-sf">întregul istoric</span> al clientului direct în Salesforce. Nu mai pierdem timp căutând informații. Deal-urile se închid mai repede.' : 'The sales team now sees the customer\'s <span class="font-semibold text-gradient-sf">complete history</span> directly in Salesforce. We no longer waste time searching for information. Deals close faster.',

	// Final CTA
	'final_title'         => $current_lang === 'ro' ? 'Conectează' : 'Connect',
	'final_desc'          => $current_lang === 'ro' ? 'Sincronizare bidirecțională. Mapare personalizată. Interogări SOQL. CRM-ul tău, supercharged.' : 'Bidirectional sync. Custom mapping. SOQL queries. Your CRM, supercharged.',
	'cta_questions'       => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
	'final_tagline'       => $current_lang === 'ro' ? 'OAuth 2.0 securizat. Suport Sandbox. Audit complet.' : 'Secure OAuth 2.0. Sandbox support. Complete audit.',
];
?>

<style>
  ::selection { background: #00A1E0; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-sf { background: linear-gradient(135deg, #00A1E0 0%, #00C7F2 50%, #1B96FF 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(0, 161, 224, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Salesforce UI Styles */
  .sf-card { background: linear-gradient(135deg, #032D60 0%, #0D2B4B 100%); border: 1px solid rgba(0, 161, 224, 0.2); }
  .sf-header { background: linear-gradient(90deg, #00A1E0, #1B96FF); }

  /* Cloud background */
  .cloud-bg { position: relative; overflow: hidden; }
  .cloud-bg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 200%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 20'%3E%3Cellipse cx='25' cy='10' rx='20' ry='8' fill='rgba(0,161,224,0.03)'/%3E%3Cellipse cx='75' cy='12' rx='15' ry='6' fill='rgba(0,199,242,0.02)'/%3E%3C/svg%3E");
    animation: cloudDrift 30s linear infinite;
  }

  /* Record card */
  .sf-record {
    background: rgba(0, 161, 224, 0.05);
    border-left: 3px solid #00A1E0;
    transition: all 0.3s;
  }
  .sf-record:hover {
    background: rgba(0, 161, 224, 0.1);
    transform: translateX(4px);
  }

  /* Object badge */
  .sf-object-badge {
    background: linear-gradient(135deg, #00A1E0, #1B96FF);
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 10px;
    letter-spacing: 0.5px;
  }

  /* SOQL code */
  .soql-keyword { color: #00A1E0; font-weight: bold; }
  .soql-field { color: #00C7F2; }
  .soql-string { color: #FF538A; }
  .soql-number { color: #10b981; }

  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }
  @keyframes cloudDrift {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
</style>

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #00A1E0, #00C7F2, #1B96FF);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden cloud-bg">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-salesforce-blue/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-salesforce-cloud/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute text-2xl top-32 left-16 opacity-20 animate-float">☁️</div>
    <div class="absolute text-xl bottom-40 right-24 opacity-20 animate-float" style="animation-delay: 1s;">🔄</div>
    <div class="absolute text-3xl top-1/2 right-16 opacity-10 animate-float" style="animation-delay: 2s;">📊</div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-salesforce-blue/10 border-salesforce-blue/20">
            <svg class="w-5 h-5 text-salesforce-blue" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12.24 2.57c-1.4-.53-2.94-.24-4.08.78l-.13.12c-1.54 1.43-1.77 3.74-.62 5.44.24.36.19.85-.13 1.15l-.49.47c-.35.34-.9.34-1.25 0l-.55-.53c-1.15-1.1-2.97-1.1-4.12 0-1.14 1.1-1.14 2.88 0 3.98l6.27 6.06c.34.33.89.33 1.23 0l.01-.01 9.76-9.43c.34-.33.34-.86 0-1.19l-4.27-4.13c-.34-.33-.89-.33-1.23 0l-.57.55c-.35.34-.35.89 0 1.23l2.71 2.62-7.08 6.84-4.53-4.38c-.25-.24-.25-.63 0-.87.25-.24.66-.24.91 0l3.12 3.01c.35.34.91.34 1.26 0l5.82-5.62c.35-.34.35-.89 0-1.23l-4.27-4.13c-.57-.55-.57-1.44 0-1.99.57-.55 1.5-.55 2.07 0l6.34 6.13c1.15 1.1 1.15 2.88 0 3.98l-9.76 9.43c-1.15 1.1-3.01 1.1-4.16 0L.65 14.34c-1.73-1.67-1.73-4.38 0-6.05 1.15-1.1 2.81-1.32 4.19-.66"/>
            </svg>
            <span class="text-sm font-medium text-salesforce-blue"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Salesforce<br><span class="text-gradient-sf"><?php echo esc_html( $t['hero_title'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 rounded-full group bg-gradient-to-r from-salesforce-blue to-salesforce-light hover:scale-105 hover:shadow-glow-sf">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12.24 2.57c-1.4-.53-2.94-.24-4.08.78l-.13.12c-1.54 1.43-1.77 3.74-.62 5.44"/></svg>
              <?php echo esc_html( $t['cta_connect'] ); ?>
              <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#obiecte" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              <?php echo esc_html( $t['cta_see_objects'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-bold font-display text-salesforce-blue">Bi-Sync</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['both_directions'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold text-white font-display">Real-time</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['at_each_event'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold font-display text-salesforce-cloud">SOQL</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['advanced_queries'] ); ?></div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Sync Visualization -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{ syncing: false, synced: 0 }" x-init="setInterval(() => { syncing = true; setTimeout(() => { syncing = false; synced++; }, 1500); }, 3000)">

            <!-- Main Sync Card -->
            <div class="p-6 border shadow-2xl bg-dark-800/80 backdrop-blur-xl rounded-3xl border-salesforce-blue/20">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-salesforce-blue/20">
                    <svg class="w-5 h-5 text-salesforce-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                  </div>
                  <div>
                    <div class="font-semibold text-white"><?php echo esc_html( $t['active_sync'] ); ?></div>
                    <div class="text-xs text-white/40"><?php echo esc_html( $t['bidirectional_rt'] ); ?></div>
                  </div>
                </div>
                <div class="flex items-center gap-2" :class="syncing ? 'animate-pulse' : ''">
                  <span class="w-2 h-2 rounded-full" :class="syncing ? 'bg-salesforce-blue' : 'bg-brand-green'"></span>
                  <span class="text-xs" :class="syncing ? 'text-salesforce-blue' : 'text-brand-green'" x-text="syncing ? '<?php echo esc_attr( $t['syncing'] ); ?>' : '<?php echo esc_attr( $t['synced'] ); ?>'"></span>
                </div>
              </div>

              <!-- Sync Visualization -->
              <div class="grid items-center grid-cols-3 gap-4 mb-6">
                <!-- Tixello Side -->
                <div class="text-center">
                  <div class="flex items-center justify-center w-16 h-16 mx-auto mb-2 shadow-lg rounded-2xl bg-gradient-to-br from-brand-violet to-brand-cyan">
                    <span class="text-xl font-bold text-white font-display">T</span>
                  </div>
                  <div class="text-sm font-medium text-white">Tixello</div>
                  <div class="text-xs text-white/40">Ticketing</div>
                </div>

                <!-- Sync Arrows -->
                <div class="flex flex-col items-center gap-2">
                  <div class="relative flex items-center justify-center w-full h-8">
                    <div class="absolute inset-x-0 h-0.5 bg-gradient-to-r from-brand-violet via-salesforce-blue to-salesforce-blue" :class="syncing ? 'animate-pulse' : ''"></div>
                    <svg class="absolute right-0 w-4 h-4 text-salesforce-blue" fill="currentColor" viewBox="0 0 24 24"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                  </div>
                  <div class="text-xs font-medium text-salesforce-blue">⟷ Bi-Sync</div>
                  <div class="relative flex items-center justify-center w-full h-8">
                    <div class="absolute inset-x-0 h-0.5 bg-gradient-to-l from-brand-violet via-salesforce-blue to-salesforce-blue" :class="syncing ? 'animate-pulse' : ''"></div>
                    <svg class="absolute left-0 w-4 h-4 text-brand-violet" fill="currentColor" viewBox="0 0 24 24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/></svg>
                  </div>
                </div>

                <!-- Salesforce Side -->
                <div class="text-center">
                  <div class="flex items-center justify-center w-16 h-16 mx-auto mb-2 shadow-lg rounded-2xl bg-gradient-to-br from-salesforce-blue to-salesforce-light shadow-salesforce-blue/30">
                    <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                  </div>
                  <div class="text-sm font-medium text-white">Salesforce</div>
                  <div class="text-xs text-white/40">CRM</div>
                </div>
              </div>

              <!-- Synced Records -->
              <div class="space-y-2">
                <div class="flex items-center justify-between p-3 rounded-lg sf-record">
                  <div class="flex items-center gap-3">
                    <span class="sf-object-badge px-2 py-0.5 rounded">Contact</span>
                    <span class="text-sm text-white">Maria Ionescu</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="text-xs text-brand-green">✓ Synced</span>
                  </div>
                </div>
                <div class="flex items-center justify-between p-3 rounded-lg sf-record">
                  <div class="flex items-center gap-3">
                    <span class="sf-object-badge px-2 py-0.5 rounded">Opportunity</span>
                    <span class="text-sm text-white">VIP Package - €450</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="text-xs text-brand-green">✓ Synced</span>
                  </div>
                </div>
                <div class="flex items-center justify-between p-3 rounded-lg sf-record" :class="syncing ? 'border-salesforce-blue' : ''">
                  <div class="flex items-center gap-3">
                    <span class="sf-object-badge px-2 py-0.5 rounded">Lead</span>
                    <span class="text-sm text-white">Corporate Inquiry</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="text-xs" :class="syncing ? 'text-salesforce-blue animate-pulse' : 'text-brand-green'" x-text="syncing ? '⟳ Syncing...' : '✓ Synced'"></span>
                  </div>
                </div>
              </div>

              <!-- Stats -->
              <div class="grid grid-cols-3 gap-4 pt-4 mt-4 border-t border-white/10">
                <div class="text-center">
                  <div class="text-xl font-bold text-white">1,247</div>
                  <div class="text-xs text-white/40">Contacts</div>
                </div>
                <div class="text-center">
                  <div class="text-xl font-bold text-salesforce-blue">89</div>
                  <div class="text-xs text-white/40">Opportunities</div>
                </div>
                <div class="text-center">
                  <div class="text-xl font-bold text-salesforce-cloud">34</div>
                  <div class="text-xs text-white/40">Accounts</div>
                </div>
              </div>
            </div>

            <!-- Floating OAuth Badge -->
            <div class="absolute z-10 px-4 py-3 border shadow-xl -top-4 -left-4 bg-dark-800 rounded-xl border-brand-green/30 animate-float">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-brand-green/20">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-brand-green">OAuth 2.0</div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['secure'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating Sync Count -->
            <div class="absolute -bottom-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-salesforce-blue/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <span class="text-2xl">⚡</span>
                <div>
                  <div class="text-sm font-medium text-salesforce-blue" x-text="synced + ' <?php echo esc_attr( $t['syncs'] ); ?>'">0 <?php echo esc_html( $t['syncs'] ); ?></div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['last_hour'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== OBJECTS ==================== -->
  <section class="relative py-24 overflow-hidden" id="obiecte">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-salesforce-blue"><?php echo esc_html( $t['objects_badge'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['objects_title'] ); ?><br><span class="text-gradient-sf"><?php echo esc_html( $t['objects_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['objects_desc'] ); ?></p>
      </div>

      <!-- Objects Grid -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
        <!-- Contact -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-salesforce-blue/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-salesforce-blue/20">
            <svg class="w-7 h-7 text-salesforce-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
          </div>
          <div class="flex items-center gap-2 mb-2">
            <h3 class="text-xl font-semibold text-white">Contact</h3>
            <span class="sf-object-badge px-2 py-0.5 rounded text-[10px]">Standard</span>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['contact_desc'] ); ?></p>
          <div class="flex flex-wrap gap-1">
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Email</span>
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Phone</span>
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Name</span>
          </div>
        </div>

        <!-- Lead -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-salesforce-cloud/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-salesforce-cloud/20">
            <svg class="w-7 h-7 text-salesforce-cloud" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <div class="flex items-center gap-2 mb-2">
            <h3 class="text-xl font-semibold text-white">Lead</h3>
            <span class="sf-object-badge px-2 py-0.5 rounded text-[10px]">Standard</span>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['lead_desc'] ); ?></p>
          <div class="flex flex-wrap gap-1">
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Status</span>
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Source</span>
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Rating</span>
          </div>
        </div>

        <!-- Opportunity -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-green/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-green/20">
            <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div class="flex items-center gap-2 mb-2">
            <h3 class="text-xl font-semibold text-white">Opportunity</h3>
            <span class="sf-object-badge px-2 py-0.5 rounded text-[10px]">Standard</span>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['opportunity_desc'] ); ?></p>
          <div class="flex flex-wrap gap-1">
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Amount</span>
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Stage</span>
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">CloseDate</span>
          </div>
        </div>

        <!-- Account -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-amber/30 reveal reveal-delay-3">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-amber/20">
            <svg class="w-7 h-7 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <div class="flex items-center gap-2 mb-2">
            <h3 class="text-xl font-semibold text-white">Account</h3>
            <span class="sf-object-badge px-2 py-0.5 rounded text-[10px]">Standard</span>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['account_desc'] ); ?></p>
          <div class="flex flex-wrap gap-1">
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Name</span>
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Industry</span>
            <span class="px-2 py-0.5 rounded bg-white/5 text-white/50 text-xs">Type</span>
          </div>
        </div>
      </div>

      <!-- Custom Objects -->
      <div class="mt-8 text-center reveal">
        <div class="inline-flex items-center gap-3 px-6 py-3 border rounded-2xl bg-dark-800/50 border-white/10">
          <svg class="w-5 h-5 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
          <span class="text-white/70"><?php echo esc_html( $t['custom_objects'] ); ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SYNC DIRECTIONS ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-salesforce-cloud"><?php echo esc_html( $t['sync_badge'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['sync_title'] ); ?><br><span class="text-gradient-sf"><?php echo esc_html( $t['sync_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['sync_desc'] ); ?></p>

          <div class="space-y-4">
            <!-- Push -->
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-violet/20">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="font-medium text-white">Push</span>
                  <span class="text-sm text-white/40">Tixello → Salesforce</span>
                </div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['push_desc'] ); ?></p>
              </div>
            </div>

            <!-- Pull -->
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-salesforce-blue/20">
                <svg class="w-6 h-6 text-salesforce-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="font-medium text-white">Pull</span>
                  <span class="text-sm text-white/40">Salesforce → Tixello</span>
                </div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['pull_desc'] ); ?></p>
              </div>
            </div>

            <!-- Bidirectional -->
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-salesforce-blue/30">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-brand-violet/20 to-salesforce-blue/20">
                <svg class="w-6 h-6 text-salesforce-cloud" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <span class="font-medium text-white"><?php echo esc_html( $t['bidirectional'] ); ?></span>
                  <span class="px-2 py-0.5 rounded-full bg-salesforce-blue/20 text-salesforce-blue text-xs"><?php echo esc_html( $t['recommended'] ); ?></span>
                </div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['bidirectional_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Sync Config -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-salesforce-blue/20">
            <div class="flex items-center gap-3 mb-4">
              <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-salesforce-blue/20">
                <svg class="w-5 h-5 text-salesforce-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </div>
              <div>
                <div class="font-semibold text-white"><?php echo esc_html( $t['sync_config'] ); ?></div>
                <div class="text-xs text-white/40"><?php echo esc_html( $t['per_object'] ); ?></div>
              </div>
            </div>

            <div class="space-y-3">
              <!-- Contact config -->
              <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/50">
                <div class="flex items-center gap-3">
                  <span class="sf-object-badge px-2 py-0.5 rounded text-[10px]">Contact</span>
                </div>
                <select class="px-3 py-1 text-sm text-white border rounded outline-none bg-dark-700 border-white/10 focus:border-salesforce-blue">
                  <option>⟷ <?php echo esc_html( $t['bidirectional'] ); ?></option>
                  <option>→ Push</option>
                  <option>← Pull</option>
                </select>
              </div>

              <!-- Lead config -->
              <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/50">
                <div class="flex items-center gap-3">
                  <span class="sf-object-badge px-2 py-0.5 rounded text-[10px]">Lead</span>
                </div>
                <select class="px-3 py-1 text-sm text-white border rounded outline-none bg-dark-700 border-white/10 focus:border-salesforce-blue">
                  <option>→ Push</option>
                  <option>⟷ <?php echo esc_html( $t['bidirectional'] ); ?></option>
                  <option>← Pull</option>
                </select>
              </div>

              <!-- Opportunity config -->
              <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/50">
                <div class="flex items-center gap-3">
                  <span class="sf-object-badge px-2 py-0.5 rounded text-[10px]">Opportunity</span>
                </div>
                <select class="px-3 py-1 text-sm text-white border rounded outline-none bg-dark-700 border-white/10 focus:border-salesforce-blue">
                  <option>⟷ <?php echo esc_html( $t['bidirectional'] ); ?></option>
                  <option>→ Push</option>
                  <option>← Pull</option>
                </select>
              </div>

              <!-- Account config -->
              <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/50">
                <div class="flex items-center gap-3">
                  <span class="sf-object-badge px-2 py-0.5 rounded text-[10px]">Account</span>
                </div>
                <select class="px-3 py-1 text-sm text-white border rounded outline-none bg-dark-700 border-white/10 focus:border-salesforce-blue">
                  <option>← Pull</option>
                  <option>⟷ <?php echo esc_html( $t['bidirectional'] ); ?></option>
                  <option>→ Push</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FIELD MAPPING ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-brand-violet"><?php echo esc_html( $t['field_badge'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['field_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['field_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['field_desc'] ); ?></p>
      </div>

      <!-- Field Mapping Visual -->
      <div class="max-w-4xl mx-auto reveal">
        <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
          <div class="grid items-center grid-cols-5 gap-4 mb-4 text-center">
            <div class="col-span-2">
              <div class="text-xs tracking-wider uppercase text-white/40"><?php echo esc_html( $t['tixello_field'] ); ?></div>
            </div>
            <div></div>
            <div class="col-span-2">
              <div class="text-xs tracking-wider uppercase text-white/40"><?php echo esc_html( $t['salesforce_field'] ); ?></div>
            </div>
          </div>

          <div class="space-y-3">
            <!-- Email -->
            <div class="grid items-center grid-cols-5 gap-4">
              <div class="col-span-2 p-3 border rounded-lg bg-brand-violet/10 border-brand-violet/20">
                <span class="font-mono text-sm text-white">email</span>
              </div>
              <div class="flex justify-center">
                <svg class="w-6 h-6 text-salesforce-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </div>
              <div class="col-span-2 p-3 border rounded-lg bg-salesforce-blue/10 border-salesforce-blue/20">
                <span class="font-mono text-sm text-white">Email</span>
              </div>
            </div>

            <!-- Name -->
            <div class="grid items-center grid-cols-5 gap-4">
              <div class="col-span-2 p-3 border rounded-lg bg-brand-violet/10 border-brand-violet/20">
                <span class="font-mono text-sm text-white">first_name</span>
              </div>
              <div class="flex justify-center">
                <svg class="w-6 h-6 text-salesforce-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </div>
              <div class="col-span-2 p-3 border rounded-lg bg-salesforce-blue/10 border-salesforce-blue/20">
                <span class="font-mono text-sm text-white">FirstName</span>
              </div>
            </div>

            <!-- Total purchases - Custom field -->
            <div class="grid items-center grid-cols-5 gap-4">
              <div class="col-span-2 p-3 border rounded-lg bg-brand-violet/10 border-brand-violet/20">
                <span class="font-mono text-sm text-white">total_purchases</span>
              </div>
              <div class="flex justify-center">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </div>
              <div class="col-span-2 p-3 border rounded-lg bg-brand-green/10 border-brand-green/20">
                <div class="flex items-center gap-2">
                  <span class="font-mono text-sm text-white">Total_Spent__c</span>
                  <span class="px-1.5 py-0.5 rounded bg-brand-green/20 text-brand-green text-[10px]">Custom</span>
                </div>
              </div>
            </div>

            <!-- Last event - Custom field -->
            <div class="grid items-center grid-cols-5 gap-4">
              <div class="col-span-2 p-3 border rounded-lg bg-brand-violet/10 border-brand-violet/20">
                <span class="font-mono text-sm text-white">last_event_name</span>
              </div>
              <div class="flex justify-center">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
              </div>
              <div class="col-span-2 p-3 border rounded-lg bg-brand-green/10 border-brand-green/20">
                <div class="flex items-center gap-2">
                  <span class="font-mono text-sm text-white">Last_Event__c</span>
                  <span class="px-1.5 py-0.5 rounded bg-brand-green/20 text-brand-green text-[10px]">Custom</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Add mapping button -->
          <button class="w-full p-3 mt-4 text-sm transition-all border-2 border-dashed rounded-lg border-white/10 text-white/40 hover:border-salesforce-blue/30 hover:text-white/70">
            <?php echo esc_html( $t['add_mapping'] ); ?>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SOQL ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Visual - SOQL Query -->
        <div class="order-2 reveal lg:order-1">
          <div class="overflow-hidden border bg-dark-800 rounded-2xl border-salesforce-blue/20">
            <div class="flex items-center gap-2 px-4 py-3 border-b bg-salesforce-dark border-white/10">
              <div class="w-3 h-3 bg-red-500 rounded-full"></div>
              <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
              <div class="w-3 h-3 bg-green-500 rounded-full"></div>
              <span class="ml-2 font-mono text-xs text-white/40">SOQL Query</span>
            </div>
            <div class="p-4 overflow-x-auto font-mono text-sm">
              <div>
                <span class="soql-keyword">SELECT</span>
                <span class="soql-field"> Id, FirstName, LastName, Email,</span>
              </div>
              <div class="ml-8">
                <span class="soql-field">Total_Spent__c, Last_Event__c</span>
              </div>
              <div>
                <span class="soql-keyword">FROM</span>
                <span class="soql-field"> Contact</span>
              </div>
              <div>
                <span class="soql-keyword">WHERE</span>
                <span class="soql-field"> Total_Spent__c</span>
                <span class="text-white"> > </span>
                <span class="soql-number">1000</span>
              </div>
              <div>
                <span class="soql-keyword">ORDER BY</span>
                <span class="soql-field"> CreatedDate</span>
                <span class="soql-keyword"> DESC</span>
              </div>
              <div>
                <span class="soql-keyword">LIMIT</span>
                <span class="soql-number"> 100</span>
              </div>
            </div>

            <!-- Results preview -->
            <div class="p-4 border-t border-white/10">
              <div class="mb-3 text-xs tracking-wider uppercase text-white/40"><?php echo esc_html( $t['results'] ); ?></div>
              <div class="space-y-2">
                <div class="flex items-center justify-between p-2 text-sm rounded bg-dark-900/50">
                  <span class="text-white">Maria Ionescu</span>
                  <span class="font-mono text-brand-green">€2,450</span>
                </div>
                <div class="flex items-center justify-between p-2 text-sm rounded bg-dark-900/50">
                  <span class="text-white">Alexandru Popa</span>
                  <span class="font-mono text-brand-green">€1,890</span>
                </div>
                <div class="flex items-center justify-between p-2 text-sm rounded bg-dark-900/50">
                  <span class="text-white">Elena Dumitrescu</span>
                  <span class="font-mono text-brand-green">€1,650</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="order-1 reveal lg:order-2">
          <span class="text-sm font-medium tracking-widest uppercase text-salesforce-blue"><?php echo esc_html( $t['soql_badge'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['soql_title'] ); ?><br><span class="text-gradient-sf"><?php echo esc_html( $t['soql_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['soql_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-salesforce-blue/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-salesforce-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['advanced_filter'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['advanced_filter_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-salesforce-cloud/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-salesforce-cloud" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['segment_customers'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['segment_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </div>
              <div>
                <div class="font-medium text-white"><?php echo esc_html( $t['custom_reporting'] ); ?></div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['custom_report_desc'] ); ?></p>
              </div>
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
        <span class="text-sm font-medium tracking-widest uppercase text-brand-violet"><?php echo esc_html( $t['usecases_badge'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['usecases_title'] ); ?><br><span class="text-gradient animate-shimmer">supercharged</span></h2>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-salesforce-blue/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-salesforce-blue/20 to-salesforce-cloud/20"><span class="text-2xl">🏢</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['b2b_sales'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['b2b_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-amber/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10"><span class="text-2xl">👑</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['vip_tracking'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['vip_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-violet/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10"><span class="text-2xl">📊</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['event_campaigns'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['events_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-green/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green/20 to-brand-green/10"><span class="text-2xl">💼</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['corporate_clients'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['corporate_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-salesforce-cloud/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-salesforce-cloud/20 to-salesforce-blue/10"><span class="text-2xl">📈</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['sales_pipeline'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['pipeline_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-cyan/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/10"><span class="text-2xl">🎯</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['post_event'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['post_event_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-salesforce-blue/10 to-salesforce-cloud/10 rounded-3xl md:p-12 border-salesforce-blue/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="mb-8 text-2xl font-light leading-relaxed text-white md:text-3xl">
            "<?php echo $t['testimonial']; ?>"
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="rounded-full w-14 h-14 bg-gradient-to-br from-salesforce-blue to-salesforce-cloud"></div>
            <div>
              <div class="font-semibold text-white">Mihai R.</div>
              <div class="text-white/50">Sales Director, Untold Festival</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-salesforce-blue/20 via-transparent to-salesforce-cloud/20"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(0,161,224,0.3) 0%, rgba(0,199,242,0.2) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-10 animate-float">
      <svg class="w-16 h-16 text-salesforce-blue" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
    </div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal"><?php echo esc_html( $t['final_title'] ); ?><br><span class="text-gradient-sf">Salesforce</span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 rounded-full group bg-gradient-to-r from-salesforce-blue to-salesforce-light hover:scale-105 hover:shadow-glow-sf">
          <?php echo esc_html( $t['cta_connect'] ); ?>
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
          <?php echo esc_html( $t['cta_questions'] ); ?>
        </a>
      </div>

      <p class="mt-8 text-sm text-white/30 reveal reveal-delay-3"><?php echo esc_html( $t['final_tagline'] ); ?></p>
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
