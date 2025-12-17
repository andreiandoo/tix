<?php
/**
 * Template Name: Airtable Integration
 * Description: Landing page for Airtable integration - flexible database sync
 */

get_header();

// Multilingual support
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'               => $current_lang === 'ro' ? 'Baza de Date Flexibila' : 'Flexible Database',
	'hero_title'          => $current_lang === 'ro' ? 'Integrare' : 'Integration',
	'hero_desc'           => $current_lang === 'ro' ? 'Puterea spreadsheet-urilor + flexibilitatea bazelor de date. <strong class="text-white">Sincronizare bidirectionala</strong> pentru comenzi, bilete si clienti.' : 'The power of spreadsheets + flexibility of databases. <strong class="text-white">Bidirectional sync</strong> for orders, tickets, and customers.',
	'cta_connect'         => $current_lang === 'ro' ? 'Conecteaza Airtable' : 'Connect Airtable',
	'cta_features'        => $current_lang === 'ro' ? 'Vezi Functionalitati' : 'See Features',
	'realtime_sync'       => $current_lang === 'ro' ? 'Sync in timp real' : 'Real-time sync',
	'secure_auth'         => $current_lang === 'ro' ? 'Autentificare securizata' : 'Secure authentication',

	// Table preview
	'festival_orders'     => $current_lang === 'ro' ? 'Comenzi Festival' : 'Festival Orders',
	'records'             => $current_lang === 'ro' ? 'inregistrari' : 'records',
	'synced'              => $current_lang === 'ro' ? 'Sincronizat' : 'Synced',
	'syncing'             => $current_lang === 'ro' ? 'Sincronizare...' : 'Syncing...',
	'order'               => $current_lang === 'ro' ? 'Comanda' : 'Order',
	'customer'            => $current_lang === 'ro' ? 'Client' : 'Customer',
	'paid'                => $current_lang === 'ro' ? 'Platit' : 'Paid',

	// Sync Modes
	'sync_badge'          => $current_lang === 'ro' ? 'Moduri Sincronizare' : 'Sync Modes',
	'sync_title'          => $current_lang === 'ro' ? 'Date care curg' : 'Data flowing',
	'sync_title2'         => $current_lang === 'ro' ? 'in ambele directii' : 'both directions',
	'sync_desc'           => $current_lang === 'ro' ? 'Alege cum sincronizezi: push, bidirectional, programat sau in timp real.' : 'Choose how to sync: push, bidirectional, scheduled, or real-time.',
	'push_only'           => $current_lang === 'ro' ? 'Doar Push' : 'Push Only',
	'push_desc'           => $current_lang === 'ro' ? 'Datele curg doar catre Airtable. Perfect pentru raportare.' : 'Data flows only to Airtable. Perfect for reporting.',
	'bidirectional'       => $current_lang === 'ro' ? 'Bidirectional' : 'Bidirectional',
	'bidirectional_desc'  => $current_lang === 'ro' ? 'Schimbarile in oricare sistem se sincronizeaza in celalalt.' : 'Changes in either system sync to the other.',
	'scheduled'           => $current_lang === 'ro' ? 'Programat' : 'Scheduled',
	'scheduled_desc'      => $current_lang === 'ro' ? 'Sincronizare periodica la intervale configurate.' : 'Periodic sync at configured intervals.',
	'hourly_daily'        => $current_lang === 'ro' ? 'Orar/Zilnic' : 'Hourly/Daily',
	'realtime'            => $current_lang === 'ro' ? 'Timp Real' : 'Real-time',
	'realtime_desc'       => $current_lang === 'ro' ? 'Sincronizare imediata la fiecare schimbare de inregistrare.' : 'Immediate sync on every record change.',

	// Field Mapping
	'field_badge'         => $current_lang === 'ro' ? 'Mapare Campuri' : 'Field Mapping',
	'field_title'         => $current_lang === 'ro' ? 'Conecteaza datele' : 'Connect data',
	'field_title2'        => $current_lang === 'ro' ? 'corect' : 'correctly',
	'field_desc'          => $current_lang === 'ro' ? 'Mapeaza campurile platformei la coloanele Airtable. Pastreaza tipurile de date si relatiile.' : 'Map platform fields to Airtable columns. Preserve data types and relationships.',
	'text_types'          => $current_lang === 'ro' ? 'Text o linie, Text lung' : 'Single line text, Long text',
	'number_types'        => $current_lang === 'ro' ? 'Numar, Valuta, Procent' : 'Number, Currency, Percent',
	'date_types'          => $current_lang === 'ro' ? 'Data, DateTime' : 'Date, DateTime',
	'select_types'        => $current_lang === 'ro' ? 'Selectare simpla/multipla' : 'Single/Multiple select',
	'link_types'          => $current_lang === 'ro' ? 'Inregistrari legate, Atasamente' : 'Linked records, Attachments',
	'fields_mapped'       => $current_lang === 'ro' ? '5 campuri mapate' : '5 fields mapped',
	'add_mapping'         => $current_lang === 'ro' ? '+ Adauga mapare camp' : '+ Add field mapping',

	// Multiple Bases
	'org_badge'           => $current_lang === 'ro' ? 'Organizare' : 'Organization',
	'bases_title'         => $current_lang === 'ro' ? 'Baze multiple pentru' : 'Multiple bases for',
	'bases_title2'        => $current_lang === 'ro' ? 'operatiuni complexe' : 'complex operations',
	'bases_desc'          => $current_lang === 'ro' ? 'Vanzari intr-o baza, clienti in alta, planificare intr-a treia. Conectate dar organizate.' : 'Sales in one base, customers in another, planning in a third. Connected but organized.',
	'ticket_sales'        => $current_lang === 'ro' ? 'Vanzari Bilete' : 'Ticket Sales',
	'orders'              => $current_lang === 'ro' ? 'Comenzi' : 'Orders',
	'tickets'             => $current_lang === 'ro' ? 'Bilete' : 'Tickets',
	'revenue'             => $current_lang === 'ro' ? 'Venituri' : 'Revenue',
	'crm_customers'       => $current_lang === 'ro' ? 'Clienti CRM' : 'CRM Customers',
	'customers'           => $current_lang === 'ro' ? 'Clienti' : 'Customers',
	'planning'            => $current_lang === 'ro' ? 'Planificare' : 'Planning',
	'events'              => $current_lang === 'ro' ? 'Evenimente' : 'Events',
	'team'                => $current_lang === 'ro' ? 'Echipa' : 'Team',
	'linked_records'      => $current_lang === 'ro' ? 'Inregistrari Legate' : 'Linked Records',
	'linked_desc'         => $current_lang === 'ro' ? 'Leaga comenzile de clienti, biletele de evenimente. Relatii intre baze.' : 'Link orders to customers, tickets to events. Relationships between bases.',

	// Use Cases
	'usecases_badge'      => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
	'usecases_title'      => $current_lang === 'ro' ? 'Workflow-uri care' : 'Workflows that',
	'usecases_title2'     => $current_lang === 'ro' ? 'functioneaza' : 'work',
	'event_planning'      => $current_lang === 'ro' ? 'Planificare Evenimente' : 'Event Planning',
	'event_planning_desc' => $current_lang === 'ro' ? 'Urmareste planificarea in Airtable cu date vanzari bilete legate. Vezi ce evenimente se vand bine. Coordoneaza planificarea cu realitatea vanzarilor.' : 'Track planning in Airtable with linked ticket sales data. See which events sell well. Coordinate planning with sales reality.',
	'customer_success'    => $current_lang === 'ro' ? 'Customer Success' : 'Customer Success',
	'customer_success_desc' => $current_lang === 'ro' ? 'Gestioneaza relatiile cu clientii in Airtable. Leaga inregistrarile de achizitii de profile. Urmareste engagement-ul si follow-up-urile.' : 'Manage customer relationships in Airtable. Link purchase records to profiles. Track engagement and follow-ups.',
	'ops_dashboard'       => $current_lang === 'ro' ? 'Dashboard Operatiuni' : 'Operations Dashboard',
	'ops_dashboard_desc'  => $current_lang === 'ro' ? 'Construieste dashboard-uri vizuale cu vizualizari Airtable. Kanban boards pentru status comenzi. Vizualizari calendar pentru evenimente.' : 'Build visual dashboards with Airtable views. Kanban boards for order status. Calendar views for events.',
	'team_collab'         => $current_lang === 'ro' ? 'Colaborare Echipa' : 'Team Collaboration',
	'team_collab_desc'    => $current_lang === 'ro' ? 'Partajeaza bazele cu membrii echipei. Atribuie sarcini bazate pe datele biletelor. Colaboreaza fara a partaja accesul la platforma.' : 'Share bases with team members. Assign tasks based on ticket data. Collaborate without sharing platform access.',

	// Testimonial
	'testimonial'         => $current_lang === 'ro' ? 'Echipa folosea deja <span class="text-gradient-airtable font-semibold">Airtable</span> pentru planificare. Acum vanzarile de bilete apar automat langa task-uri. Toata lumea vede imaginea completa.' : 'The team was already using <span class="text-gradient-airtable font-semibold">Airtable</span> for planning. Now ticket sales appear automatically next to tasks. Everyone sees the complete picture.',

	// Final CTA
	'final_title'         => $current_lang === 'ro' ? 'Integrare' : 'Integration',
	'final_desc'          => $current_lang === 'ro' ? 'Spreadsheet + database power. Sincronizare bidirectionala, mapare campuri, baze multiple.' : 'Spreadsheet + database power. Bidirectional sync, field mapping, multiple bases.',
	'cta_questions'       => $current_lang === 'ro' ? 'Intrebari? Contacteaza-ne' : 'Questions? Contact us',
];
?>

<style>
  ::selection { background: #FCBF49; color: #1F1F1F; }

  .text-gradient-airtable { background: linear-gradient(135deg, #FCBF49 0%, #F77F00 50%, #18BFFF 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(252, 191, 73, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Airtable table styles */
  .airtable-table {
    background: #1E1E2E;
    border-radius: 12px;
    overflow: hidden;
  }
  .airtable-header {
    background: linear-gradient(90deg, rgba(252, 191, 73, 0.2), rgba(247, 127, 0, 0.1));
    border-bottom: 2px solid rgba(252, 191, 73, 0.3);
  }
  .airtable-row {
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.2s;
  }
  .airtable-row:hover {
    background: rgba(252, 191, 73, 0.05);
  }
  .airtable-cell {
    padding: 12px 16px;
    font-size: 14px;
  }

  /* Field type badges */
  .field-type {
    padding: 2px 8px;
    border-radius: 4px;
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
  }
  .field-type.text { background: rgba(24, 191, 255, 0.2); color: #18BFFF; }
  .field-type.number { background: rgba(139, 70, 255, 0.2); color: #8B46FF; }
  .field-type.date { background: rgba(32, 217, 210, 0.2); color: #20D9D2; }
  .field-type.select { background: rgba(239, 48, 97, 0.2); color: #EF3061; }
  .field-type.currency { background: rgba(252, 191, 73, 0.2); color: #FCBF49; }
  .field-type.link { background: rgba(247, 127, 0, 0.2); color: #F77F00; }

  /* Sync badges */
  .sync-badge {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
  }
  .sync-badge.push { background: rgba(252, 191, 73, 0.2); color: #FCBF49; }
  .sync-badge.bidirectional { background: rgba(24, 191, 255, 0.2); color: #18BFFF; }
  .sync-badge.realtime { background: rgba(32, 217, 210, 0.2); color: #20D9D2; }

  /* Base card */
  .base-card {
    background: linear-gradient(135deg, rgba(252, 191, 73, 0.1), rgba(247, 127, 0, 0.05));
    border: 1px solid rgba(252, 191, 73, 0.2);
    border-radius: 12px;
    padding: 16px;
    transition: all 0.3s;
  }
  .base-card:hover {
    border-color: rgba(252, 191, 73, 0.4);
    transform: translateY(-2px);
  }

  /* Mapping line */
  .mapping-line {
    height: 2px;
    background: linear-gradient(90deg, #7c3aed, #FCBF49);
    position: relative;
  }
  .mapping-line::after {
    content: '';
    position: absolute;
    right: -4px;
    top: -3px;
    border-left: 8px solid #FCBF49;
    border-top: 4px solid transparent;
    border-bottom: 4px solid transparent;
  }
</style>

<main class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-airtable-primary/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-airtable-accent/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">📊</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">🔄</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">📋</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-airtable-primary/10 border border-airtable-primary/20 mb-6">
            <svg class="w-5 h-5 text-airtable-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
            <span class="text-airtable-primary text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-airtable">Airtable</span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-airtable-primary text-airtable-dark hover:bg-airtable-secondary hover:text-white hover:scale-105 hover:shadow-glow-airtable transition-all duration-300">
              <?php echo esc_html( $t['cta_connect'] ); ?>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#functionalitati" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              <?php echo esc_html( $t['cta_features'] ); ?>
            </a>
          </div>

          <!-- Quick features -->
          <div class="flex flex-wrap items-center gap-4">
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-airtable-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              <span class="text-white/60 text-sm">Bidirectional Sync</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-airtable-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              <span class="text-white/60 text-sm">Real-time</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-airtable-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              <span class="text-white/60 text-sm">OAuth 2.0</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Airtable Table Preview -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            rows: [
              { order: 'ORD-001', email: 'maria@ex.ro', total: '€150', status: 'Platit' },
              { order: 'ORD-002', email: 'alex@co.ro', total: '€225', status: 'Platit' },
              { order: 'ORD-003', email: 'elena@biz.ro', total: '€75', status: 'Pending' }
            ],
            syncing: false
          }" x-init="setInterval(() => { syncing = true; setTimeout(() => syncing = false, 1500); }, 4000)">

            <!-- Airtable Table -->
            <div class="airtable-table shadow-2xl">
              <!-- Table Header -->
              <div class="airtable-header px-4 py-3 flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-airtable-primary to-airtable-secondary flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/></svg>
                  </div>
                  <div>
                    <div class="text-white font-semibold text-sm"><?php echo esc_html( $t['festival_orders'] ); ?></div>
                    <div class="text-white/40 text-xs">appXyz123 • 3 <?php echo esc_html( $t['records'] ); ?></div>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <span class="sync-badge realtime" :class="syncing ? 'animate-pulse' : ''">
                    <span x-show="!syncing">● <?php echo esc_html( $t['synced'] ); ?></span>
                    <span x-show="syncing">↻ <?php echo esc_html( $t['syncing'] ); ?></span>
                  </span>
                </div>
              </div>

              <!-- Column Headers -->
              <div class="grid grid-cols-4 airtable-header">
                <div class="airtable-cell font-semibold text-white/70 text-sm">
                  <span class="field-type text mr-2">Text</span>
                  <?php echo esc_html( $t['order'] ); ?>
                </div>
                <div class="airtable-cell font-semibold text-white/70 text-sm">
                  <span class="field-type text mr-2">Email</span>
                  <?php echo esc_html( $t['customer'] ); ?>
                </div>
                <div class="airtable-cell font-semibold text-white/70 text-sm">
                  <span class="field-type currency mr-2">€</span>
                  Total
                </div>
                <div class="airtable-cell font-semibold text-white/70 text-sm">
                  <span class="field-type select mr-2">⬤</span>
                  Status
                </div>
              </div>

              <!-- Table Rows -->
              <template x-for="(row, index) in rows" :key="row.order">
                <div class="grid grid-cols-4 airtable-row animate-row-slide" :style="'animation-delay: ' + (index * 0.1) + 's'">
                  <div class="airtable-cell text-white font-mono text-sm" x-text="row.order"></div>
                  <div class="airtable-cell text-white/70 text-sm" x-text="row.email"></div>
                  <div class="airtable-cell text-airtable-primary font-semibold" x-text="row.total"></div>
                  <div class="airtable-cell">
                    <span
                      class="px-2 py-1 rounded text-xs font-medium"
                      :class="row.status === 'Platit' ? 'bg-airtable-green/20 text-airtable-green' : 'bg-airtable-primary/20 text-airtable-primary'"
                      x-text="row.status"
                    ></span>
                  </div>
                </div>
              </template>

              <!-- New Row Indicator -->
              <div class="grid grid-cols-4 airtable-row opacity-50" x-show="syncing">
                <div class="airtable-cell text-white/30 font-mono text-sm">ORD-004</div>
                <div class="airtable-cell text-white/30 text-sm">nou@client.ro</div>
                <div class="airtable-cell text-white/30">€100</div>
                <div class="airtable-cell text-white/30 text-xs">Sincronizare...</div>
              </div>
            </div>

            <!-- Floating Sync Badge -->
            <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-airtable-accent/30 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-airtable-accent animate-sync-arrow" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                <div>
                  <div class="text-airtable-accent text-sm font-medium"><?php echo esc_html( $t['bidirectional'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['realtime_sync'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating OAuth Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-airtable-green/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-airtable-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <div>
                  <div class="text-airtable-green text-sm font-medium">OAuth 2.0</div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['secure_auth'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SYNC MODES ==================== -->
  <section class="py-24 relative overflow-hidden" id="functionalitati">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-airtable-primary text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['sync_badge'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['sync_title'] ); ?><br><span class="text-gradient-airtable"><?php echo esc_html( $t['sync_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['sync_desc'] ); ?></p>
      </div>

      <!-- Sync Modes Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
        <!-- Push Only -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-airtable-primary/20 hover:border-airtable-primary/50 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-airtable-primary/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-airtable-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['push_only'] ); ?></h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['push_desc'] ); ?></p>
          <span class="sync-badge push">Tixello → Airtable</span>
        </div>

        <!-- Bidirectional -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-airtable-accent/20 hover:border-airtable-accent/50 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-airtable-accent/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-airtable-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['bidirectional'] ); ?></h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['bidirectional_desc'] ); ?></p>
          <span class="sync-badge bidirectional">↔ Two-way Sync</span>
        </div>

        <!-- Scheduled -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-airtable-purple/20 hover:border-airtable-purple/50 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-airtable-purple/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-airtable-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['scheduled'] ); ?></h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['scheduled_desc'] ); ?></p>
          <span class="px-3 py-1 rounded bg-airtable-purple/20 text-airtable-purple text-xs">⏱ <?php echo esc_html( $t['hourly_daily'] ); ?></span>
        </div>

        <!-- Real-time -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-airtable-green/20 hover:border-airtable-green/50 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-airtable-green/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-airtable-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['realtime'] ); ?></h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['realtime_desc'] ); ?></p>
          <span class="sync-badge realtime">⚡ Instant</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FIELD MAPPING ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-airtable-accent text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['field_badge'] ); ?></span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['field_title'] ); ?><br><span class="text-gradient-airtable"><?php echo esc_html( $t['field_title2'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['field_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-airtable-primary/10 border border-airtable-primary/30">
              <span class="field-type text">Text</span>
              <span class="text-white"><?php echo esc_html( $t['text_types'] ); ?></span>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <span class="field-type number">123</span>
              <span class="text-white"><?php echo esc_html( $t['number_types'] ); ?></span>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <span class="field-type date">📅</span>
              <span class="text-white"><?php echo esc_html( $t['date_types'] ); ?></span>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <span class="field-type select">⬤</span>
              <span class="text-white"><?php echo esc_html( $t['select_types'] ); ?></span>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <span class="field-type link">🔗</span>
              <span class="text-white"><?php echo esc_html( $t['link_types'] ); ?></span>
            </div>
          </div>
        </div>

        <!-- Visual - Field Mapping -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="text-white font-semibold"><?php echo esc_html( $t['field_badge'] ); ?></div>
              <span class="text-airtable-green text-xs">✓ <?php echo esc_html( $t['fields_mapped'] ); ?></span>
            </div>

            <!-- Mapping Grid -->
            <div class="space-y-4">
              <!-- Header -->
              <div class="grid grid-cols-5 gap-4 text-xs text-white/40 uppercase">
                <div class="col-span-2">Tixello</div>
                <div class="col-span-1 text-center">→</div>
                <div class="col-span-2">Airtable</div>
              </div>

              <!-- Mappings -->
              <div class="grid grid-cols-5 gap-4 items-center p-3 rounded-lg bg-dark-900/50">
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-brand-violet"></div>
                  <span class="text-white text-sm">order_number</span>
                </div>
                <div class="col-span-1 flex justify-center">
                  <div class="mapping-line w-full"></div>
                </div>
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-airtable-primary"></div>
                  <span class="text-white text-sm">Nr. Comanda</span>
                  <span class="field-type text ml-auto">Text</span>
                </div>
              </div>

              <div class="grid grid-cols-5 gap-4 items-center p-3 rounded-lg bg-dark-900/50">
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-brand-violet"></div>
                  <span class="text-white text-sm">customer_email</span>
                </div>
                <div class="col-span-1 flex justify-center">
                  <div class="mapping-line w-full"></div>
                </div>
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-airtable-primary"></div>
                  <span class="text-white text-sm">Email Client</span>
                  <span class="field-type text ml-auto">Email</span>
                </div>
              </div>

              <div class="grid grid-cols-5 gap-4 items-center p-3 rounded-lg bg-dark-900/50">
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-brand-violet"></div>
                  <span class="text-white text-sm">total_amount</span>
                </div>
                <div class="col-span-1 flex justify-center">
                  <div class="mapping-line w-full"></div>
                </div>
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-airtable-primary"></div>
                  <span class="text-white text-sm">Total (€)</span>
                  <span class="field-type currency ml-auto">€</span>
                </div>
              </div>

              <div class="grid grid-cols-5 gap-4 items-center p-3 rounded-lg bg-dark-900/50">
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-brand-violet"></div>
                  <span class="text-white text-sm">payment_status</span>
                </div>
                <div class="col-span-1 flex justify-center">
                  <div class="mapping-line w-full"></div>
                </div>
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-airtable-primary"></div>
                  <span class="text-white text-sm">Status</span>
                  <span class="field-type select ml-auto">⬤</span>
                </div>
              </div>

              <div class="grid grid-cols-5 gap-4 items-center p-3 rounded-lg bg-dark-900/50">
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-brand-violet"></div>
                  <span class="text-white text-sm">created_at</span>
                </div>
                <div class="col-span-1 flex justify-center">
                  <div class="mapping-line w-full"></div>
                </div>
                <div class="col-span-2 flex items-center gap-2">
                  <div class="w-3 h-3 rounded bg-airtable-primary"></div>
                  <span class="text-white text-sm">Data</span>
                  <span class="field-type date ml-auto">📅</span>
                </div>
              </div>

              <!-- Add Field -->
              <button class="w-full p-3 rounded-lg border-2 border-dashed border-white/20 text-white/40 text-sm hover:border-airtable-primary/50 hover:text-airtable-primary transition-colors">
                <?php echo esc_html( $t['add_mapping'] ); ?>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== MULTIPLE BASES ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-airtable-secondary text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['org_badge'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['bases_title'] ); ?><br><span class="text-gradient-airtable"><?php echo esc_html( $t['bases_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['bases_desc'] ); ?></p>
      </div>

      <!-- Bases Grid -->
      <div class="grid md:grid-cols-3 gap-6 reveal">
        <!-- Sales Base -->
        <div class="base-card">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-airtable-primary to-airtable-secondary flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
              <div class="text-white font-semibold"><?php echo esc_html( $t['ticket_sales'] ); ?></div>
              <div class="text-white/40 text-xs">appSales123</div>
            </div>
          </div>
          <div class="space-y-2 text-sm">
            <div class="flex items-center justify-between text-white/60">
              <span>📋 <?php echo esc_html( $t['orders'] ); ?></span>
              <span class="text-airtable-primary">2,847</span>
            </div>
            <div class="flex items-center justify-between text-white/60">
              <span>🎫 <?php echo esc_html( $t['tickets'] ); ?></span>
              <span class="text-airtable-primary">5,124</span>
            </div>
            <div class="flex items-center justify-between text-white/60">
              <span>💰 <?php echo esc_html( $t['revenue'] ); ?></span>
              <span class="text-airtable-primary">€127,450</span>
            </div>
          </div>
          <div class="mt-4 pt-4 border-t border-white/10">
            <span class="sync-badge realtime">⚡ Real-time sync</span>
          </div>
        </div>

        <!-- Customers Base -->
        <div class="base-card">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-airtable-accent to-airtable-green flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
            </div>
            <div>
              <div class="text-white font-semibold"><?php echo esc_html( $t['crm_customers'] ); ?></div>
              <div class="text-white/40 text-xs">appCRM456</div>
            </div>
          </div>
          <div class="space-y-2 text-sm">
            <div class="flex items-center justify-between text-white/60">
              <span>👥 <?php echo esc_html( $t['customers'] ); ?></span>
              <span class="text-airtable-accent">1,892</span>
            </div>
            <div class="flex items-center justify-between text-white/60">
              <span>🔄 Returning</span>
              <span class="text-airtable-accent">34%</span>
            </div>
            <div class="flex items-center justify-between text-white/60">
              <span>⭐ VIP</span>
              <span class="text-airtable-accent">156</span>
            </div>
          </div>
          <div class="mt-4 pt-4 border-t border-white/10">
            <span class="sync-badge bidirectional">↔ Bidirectional</span>
          </div>
        </div>

        <!-- Planning Base -->
        <div class="base-card">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-airtable-purple to-airtable-red flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <div>
              <div class="text-white font-semibold"><?php echo esc_html( $t['planning'] ); ?></div>
              <div class="text-white/40 text-xs">appPlan789</div>
            </div>
          </div>
          <div class="space-y-2 text-sm">
            <div class="flex items-center justify-between text-white/60">
              <span>📅 <?php echo esc_html( $t['events'] ); ?></span>
              <span class="text-airtable-purple">12</span>
            </div>
            <div class="flex items-center justify-between text-white/60">
              <span>✅ Tasks</span>
              <span class="text-airtable-purple">89</span>
            </div>
            <div class="flex items-center justify-between text-white/60">
              <span>👤 <?php echo esc_html( $t['team'] ); ?></span>
              <span class="text-airtable-purple">15</span>
            </div>
          </div>
          <div class="mt-4 pt-4 border-t border-white/10">
            <span class="sync-badge push">→ Push only</span>
          </div>
        </div>
      </div>

      <!-- Connected Note -->
      <div class="max-w-2xl mx-auto mt-12 reveal reveal-delay-1">
        <div class="p-4 rounded-xl bg-airtable-accent/10 border border-airtable-accent/30 flex items-center gap-4">
          <div class="w-12 h-12 rounded-xl bg-airtable-accent/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-airtable-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
          </div>
          <div>
            <div class="text-airtable-accent font-medium"><?php echo esc_html( $t['linked_records'] ); ?></div>
            <div class="text-white/60 text-sm"><?php echo esc_html( $t['linked_desc'] ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['usecases_badge'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['usecases_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['usecases_title2'] ); ?></span></h2>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <!-- Event Planning -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-airtable-primary/30 transition-all duration-500 reveal">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-airtable-primary/20 to-airtable-primary/10 flex items-center justify-center flex-shrink-0"><span class="text-2xl">📅</span></div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['event_planning'] ); ?></h3>
              <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['event_planning_desc'] ); ?></p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 rounded bg-airtable-primary/20 text-airtable-primary text-xs">Kanban</span>
                <span class="px-2 py-1 rounded bg-airtable-primary/20 text-airtable-primary text-xs">Calendar</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Customer Success -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-airtable-accent/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-airtable-accent/20 to-airtable-accent/10 flex items-center justify-center flex-shrink-0"><span class="text-2xl">🤝</span></div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['customer_success'] ); ?></h3>
              <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['customer_success_desc'] ); ?></p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 rounded bg-airtable-accent/20 text-airtable-accent text-xs">CRM</span>
                <span class="px-2 py-1 rounded bg-airtable-accent/20 text-airtable-accent text-xs">Follow-ups</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Operations Dashboard -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-airtable-green/30 transition-all duration-500 reveal">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-airtable-green/20 to-airtable-green/10 flex items-center justify-center flex-shrink-0"><span class="text-2xl">📊</span></div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['ops_dashboard'] ); ?></h3>
              <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['ops_dashboard_desc'] ); ?></p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 rounded bg-airtable-green/20 text-airtable-green text-xs">Vizualizari</span>
                <span class="px-2 py-1 rounded bg-airtable-green/20 text-airtable-green text-xs">Filtre</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Team Collaboration -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-airtable-purple/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-airtable-purple/20 to-airtable-purple/10 flex items-center justify-center flex-shrink-0"><span class="text-2xl">👥</span></div>
            <div>
              <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['team_collab'] ); ?></h3>
              <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['team_collab_desc'] ); ?></p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 rounded bg-airtable-purple/20 text-airtable-purple text-xs">Sharing</span>
                <span class="px-2 py-1 rounded bg-airtable-purple/20 text-airtable-purple text-xs">Permissions</span>
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
        <div class="bg-gradient-to-br from-airtable-primary/10 to-airtable-secondary/10 rounded-3xl p-8 md:p-12 border border-airtable-primary/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "<?php echo $t['testimonial']; ?>"
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-airtable-primary to-airtable-secondary flex items-center justify-center">
              <span class="text-airtable-dark font-bold">ML</span>
            </div>
            <div>
              <div class="font-semibold text-white">Mihai L.</div>
              <div class="text-white/50">Operations Manager, Street Food Festival</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-airtable-primary/10 via-transparent to-airtable-accent/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(252,191,73,0.2) 0%, rgba(24,191,255,0.1) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">📊</div>
    <div class="absolute bottom-20 right-20 opacity-20 animate-float text-3xl" style="animation-delay: 1s;">🔄</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['final_title'] ); ?><br><span class="text-gradient-airtable">Airtable</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-airtable-primary text-airtable-dark hover:bg-airtable-secondary hover:text-white hover:scale-105 hover:shadow-glow-airtable transition-all duration-300">
          <?php echo esc_html( $t['cta_connect'] ); ?>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          <?php echo esc_html( $t['cta_questions'] ); ?>
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">OAuth 2.0 • Bidirectional Sync • Real-time • Field Mapping • Multiple Bases</p>
    </div>
  </section>

</main>

<script>
  // Reveal on scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Feature card mouse tracking
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
      card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
    });
  });
</script>

<?php get_footer(); ?>
