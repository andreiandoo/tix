<?php
/**
 * Template Name: Micro - Google Sheets
 * Description: Landing page for Google Sheets integration
 */

get_header();

// Multilingual support
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'                => $current_lang === 'ro' ? 'Export Spreadsheet' : 'Spreadsheet Export',
	'hero_desc'            => $current_lang === 'ro' ? 'Exportă comenzi, bilete și clienți în <strong class="text-white">Google Sheets</strong>. Sincronizare în timp real, rapoarte programate, dashboard-uri live.' : 'Export orders, tickets and customers to <strong class="text-white">Google Sheets</strong>. Real-time sync, scheduled reports, live dashboards.',
	'cta_connect'          => $current_lang === 'ro' ? 'Conectează Google Sheets' : 'Connect Google Sheets',
	'cta_features'         => $current_lang === 'ro' ? 'Vezi funcțiile' : 'See features',
	'sync_label'           => $current_lang === 'ro' ? 'Sincronizare' : 'Sync',
	'export_types'         => $current_lang === 'ro' ? 'Tipuri export' : 'Export types',
	'scheduling'           => $current_lang === 'ro' ? 'Programare' : 'Scheduling',

	// Spreadsheet mockup
	'report_title'         => $current_lang === 'ro' ? 'Raport Vânzări - Festival 2025' : 'Sales Report - Festival 2025',
	'syncing'              => $current_lang === 'ro' ? 'Sincronizare...' : 'Syncing...',
	'last_update'          => $current_lang === 'ro' ? 'Acum 2 sec' : '2 sec ago',
	'order'                => $current_lang === 'ro' ? 'Comandă' : 'Order',
	'email'                => 'Email',
	'total'                => 'Total',
	'status'               => 'Status',
	'paid'                 => $current_lang === 'ro' ? 'Plătit' : 'Paid',
	'pending'              => 'Pending',
	'new_order'            => $current_lang === 'ro' ? 'Nouă comandă...' : 'New order...',
	'rows_synced'          => $current_lang === 'ro' ? 'rânduri sincronizate' : 'rows synced',
	'sync_active'          => $current_lang === 'ro' ? 'Sync activ' : 'Sync active',
	'auto_export'          => $current_lang === 'ro' ? 'Auto export' : 'Auto export',
	'daily_at'             => $current_lang === 'ro' ? 'Zilnic 06:00' : 'Daily 06:00',

	// Data Types
	'data_types_badge'     => $current_lang === 'ro' ? 'Tipuri de Date' : 'Data Types',
	'data_types_title'     => $current_lang === 'ro' ? 'Exportă' : 'Export',
	'data_types_title2'    => $current_lang === 'ro' ? 'orice' : 'anything',
	'data_types_desc'      => $current_lang === 'ro' ? 'Comenzi, bilete, clienți sau analize. Toate datele tale, organizate în spreadsheet-uri.' : 'Orders, tickets, customers or analytics. All your data, organized in spreadsheets.',
	'orders'               => $current_lang === 'ro' ? 'Comenzi' : 'Orders',
	'orders_desc'          => $current_lang === 'ro' ? 'Detalii comandă, totaluri, status plată, referință client.' : 'Order details, totals, payment status, customer reference.',
	'tickets'              => $current_lang === 'ro' ? 'Bilete' : 'Tickets',
	'tickets_desc'         => $current_lang === 'ro' ? 'Bilete individuale, participanți, status check-in.' : 'Individual tickets, attendees, check-in status.',
	'customers'            => $current_lang === 'ro' ? 'Clienți' : 'Customers',
	'customers_desc'       => $current_lang === 'ro' ? 'Info contact, istoric achiziții, preferințe.' : 'Contact info, purchase history, preferences.',
	'events'               => $current_lang === 'ro' ? 'Evenimente' : 'Events',
	'events_desc'          => $current_lang === 'ro' ? 'Detalii eveniment, sumar vânzări, participare.' : 'Event details, sales summary, attendance.',

	// Sync Modes
	'sync_modes_badge'     => $current_lang === 'ro' ? 'Moduri Sincronizare' : 'Sync Modes',
	'sync_title'           => $current_lang === 'ro' ? 'Sincronizare' : 'Sync',
	'sync_title2'          => $current_lang === 'ro' ? 'flexibilă' : 'flexible',
	'sync_desc'            => $current_lang === 'ro' ? 'Alege cum și când se sincronizează datele. Real-time pentru dashboard-uri live, programat pentru rapoarte regulate.' : 'Choose how and when data syncs. Real-time for live dashboards, scheduled for regular reports.',
	'realtime'             => 'Real-time',
	'realtime_desc'        => $current_lang === 'ro' ? 'Date actualizate instant pe măsură ce apar' : 'Data updated instantly as it comes in',
	'scheduled'            => $current_lang === 'ro' ? 'Programat' : 'Scheduled',
	'scheduled_desc'       => $current_lang === 'ro' ? 'Export automat: orar, zilnic, săptămânal' : 'Automatic export: hourly, daily, weekly',
	'incremental'          => 'Incremental',
	'incremental_desc'     => $current_lang === 'ro' ? 'Adaugă doar date noi, fără duplicare' : 'Add only new data, no duplication',
	'full_sync'            => 'Full Sync',
	'full_sync_desc'       => $current_lang === 'ro' ? 'Înlocuiește tot cu date proaspete' : 'Replace everything with fresh data',

	// Schedule Config
	'schedule_title'       => $current_lang === 'ro' ? 'Programare Export' : 'Export Schedule',
	'schedule_desc'        => $current_lang === 'ro' ? 'Configurare sincronizare automată' : 'Automatic sync configuration',
	'frequency'            => $current_lang === 'ro' ? 'Frecvență' : 'Frequency',
	'hourly'               => $current_lang === 'ro' ? 'Orar' : 'Hourly',
	'daily'                => $current_lang === 'ro' ? 'Zilnic' : 'Daily',
	'weekly'               => $current_lang === 'ro' ? 'Săptămânal' : 'Weekly',
	'monthly'              => $current_lang === 'ro' ? 'Lunar' : 'Monthly',
	'time'                 => $current_lang === 'ro' ? 'Ora' : 'Time',
	'data_type'            => $current_lang === 'ro' ? 'Tip date' : 'Data type',
	'active_jobs'          => $current_lang === 'ro' ? 'Joburi active' : 'Active jobs',
	'daily_orders'         => $current_lang === 'ro' ? 'Comenzi zilnice' : 'Daily orders',
	'weekly_summary'       => $current_lang === 'ro' ? 'Sumar săptămânal' : 'Weekly summary',
	'monday'               => $current_lang === 'ro' ? 'Luni' : 'Monday',

	// Column Mapping
	'mapping_badge'        => $current_lang === 'ro' ? 'Personalizare' : 'Customization',
	'mapping_title'        => $current_lang === 'ro' ? 'Mapare' : 'Mapping',
	'mapping_title2'       => $current_lang === 'ro' ? 'personalizată' : 'custom',
	'mapping_desc'         => $current_lang === 'ro' ? 'Controlezi ce date apar și cum. Redenumește coloanele, schimbă ordinea, selectează exact ce ai nevoie.' : 'Control what data appears and how. Rename columns, change order, select exactly what you need.',
	'column_mapping'       => $current_lang === 'ro' ? 'Mapare Coloane' : 'Column Mapping',
	'column_mapping_desc'  => $current_lang === 'ro' ? 'Personalizează structura export' : 'Customize export structure',
	'add_field'            => $current_lang === 'ro' ? '+ Adaugă câmp' : '+ Add field',
	'select_fields'        => $current_lang === 'ro' ? 'Selectează câmpuri' : 'Select fields',
	'select_fields_desc'   => $current_lang === 'ro' ? 'Alege doar datele relevante pentru raport' : 'Choose only relevant data for the report',
	'rename_headers'       => $current_lang === 'ro' ? 'Redenumește headere' : 'Rename headers',
	'rename_headers_desc'  => $current_lang === 'ro' ? 'Nume de coloane în română sau engleză' : 'Column names in Romanian or English',
	'set_order'            => $current_lang === 'ro' ? 'Setează ordinea' : 'Set order',
	'set_order_desc'       => $current_lang === 'ro' ? 'Drag & drop pentru a reordona coloanele' : 'Drag & drop to reorder columns',
	'format_dates'         => $current_lang === 'ro' ? 'Formatare date/numere' : 'Date/number formatting',
	'format_dates_desc'    => $current_lang === 'ro' ? 'Formate locale pentru date și valute' : 'Local formats for dates and currencies',

	// Use Cases
	'usecases_badge'       => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
	'usecases_title'       => $current_lang === 'ro' ? 'Spreadsheet-uri' : 'Spreadsheets',
	'usecases_title2'      => $current_lang === 'ro' ? 'acționabile' : 'actionable',
	'sales_dashboard'      => $current_lang === 'ro' ? 'Dashboard Vânzări Live' : 'Live Sales Dashboard',
	'sales_dashboard_desc' => $current_lang === 'ro' ? 'Urmărește vânzările în timp real. Grafice care se actualizează automat. Vizibilitate pentru stakeholderi.' : 'Track sales in real-time. Auto-updating charts. Visibility for stakeholders.',
	'finance_reports'      => $current_lang === 'ro' ? 'Rapoarte Finance' : 'Finance Reports',
	'finance_reports_desc' => $current_lang === 'ro' ? 'Export zilnic pentru reconciliere. Finance-ul are mereu date proaspete în fiecare dimineață.' : 'Daily export for reconciliation. Finance always has fresh data every morning.',
	'marketing_analysis'   => $current_lang === 'ro' ? 'Analiză Marketing' : 'Marketing Analysis',
	'marketing_desc'       => $current_lang === 'ro' ? 'Date clienți pentru segmentare. Campanii targetate bazate pe comportament real.' : 'Customer data for segmentation. Targeted campaigns based on real behavior.',
	'event_day_ops'        => $current_lang === 'ro' ? 'Operațiuni Event Day' : 'Event Day Operations',
	'event_day_desc'       => $current_lang === 'ro' ? 'Liste participanți live. Urmărire check-in în timp real. Monitorizare capacitate.' : 'Live attendee lists. Real-time check-in tracking. Capacity monitoring.',
	'sponsor_reports'      => $current_lang === 'ro' ? 'Raportare Sponsori' : 'Sponsor Reports',
	'sponsor_desc'         => $current_lang === 'ro' ? 'Analize complete pentru sponsori. Date participare, demografie, engagement.' : 'Complete analytics for sponsors. Attendance data, demographics, engagement.',
	'team_collab'          => $current_lang === 'ro' ? 'Colaborare Echipă' : 'Team Collaboration',
	'team_collab_desc'     => $current_lang === 'ro' ? 'Share native în Google Sheets. Finance, marketing, operațiuni - toți pe aceleași date.' : 'Native sharing in Google Sheets. Finance, marketing, operations - all on the same data.',

	// Testimonial
	'testimonial'          => $current_lang === 'ro' ? 'În fiecare dimineață la 6:00, raportul de vânzări apare <span class="text-gradient-sheets font-semibold">automat în Sheets</span>. Când ajung la birou, dashboard-ul e deja actualizat. Zero muncă manuală.' : 'Every morning at 6:00, the sales report appears <span class="text-gradient-sheets font-semibold">automatically in Sheets</span>. When I get to the office, the dashboard is already updated. Zero manual work.',

	// Final CTA
	'final_desc'           => $current_lang === 'ro' ? 'Sincronizare real-time, export programat, mapare personalizată. Spreadsheet-uri care lucrează pentru tine.' : 'Real-time sync, scheduled export, custom mapping. Spreadsheets that work for you.',
	'cta_questions'        => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
	'final_tagline'        => 'OAuth 2.0 • Real-time Sync • Export ' . ($current_lang === 'ro' ? 'Programat' : 'Scheduled'),
];
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  @font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }
  ::selection { background: #34A853; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-sheets { background: linear-gradient(135deg, #34A853 0%, #188038 50%, #34A853 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(52, 168, 83, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Spreadsheet styling */
  .spreadsheet {
    font-family: 'Roboto', sans-serif;
    font-size: 13px;
  }
  .spreadsheet-header {
    background: rgba(52, 168, 83, 0.15);
    font-weight: 500;
  }
  .spreadsheet-row:nth-child(even) {
    background: rgba(52, 168, 83, 0.03);
  }
  .spreadsheet-row:nth-child(odd) {
    background: rgba(255, 255, 255, 0.01);
  }
  .spreadsheet-cell {
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding: 8px 12px;
  }
  .spreadsheet-cell.selected {
    box-shadow: inset 0 0 0 2px #34A853;
    background: rgba(52, 168, 83, 0.1);
  }
  .spreadsheet-cell.updating {
    animation: cellUpdate 0.5s ease-out;
  }

  /* Column letter headers */
  .column-header {
    background: rgba(255, 255, 255, 0.05);
    color: rgba(255, 255, 255, 0.5);
    font-size: 11px;
    text-align: center;
    padding: 4px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  /* Row number */
  .row-number {
    background: rgba(255, 255, 255, 0.03);
    color: rgba(255, 255, 255, 0.4);
    font-size: 11px;
    text-align: center;
    width: 40px;
    min-width: 40px;
    border-right: 1px solid rgba(255, 255, 255, 0.1);
  }

  /* Sync indicator */
  .sync-active {
    position: relative;
  }
  .sync-active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, #34A853, transparent);
    animation: dataFlow 1.5s linear infinite;
  }

  /* Schedule badge */
  .schedule-badge {
    background: linear-gradient(135deg, rgba(52, 168, 83, 0.2), rgba(52, 168, 83, 0.1));
    border: 1px solid rgba(52, 168, 83, 0.3);
  }

  /* Column mapping connector */
  .mapping-line {
    height: 2px;
    background: linear-gradient(90deg, #7c3aed, #34A853);
    position: relative;
  }
  .mapping-line::after {
    content: '';
    position: absolute;
    right: -4px;
    top: -3px;
    width: 0;
    height: 0;
    border-left: 6px solid #34A853;
    border-top: 4px solid transparent;
    border-bottom: 4px solid transparent;
  }

  /* Data type icon */
  .data-type-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>

<main class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-sheets-green/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-sheets-dark/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">📊</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">📈</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">📋</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-sheets-green/10 border border-sheets-green/20 mb-6">
            <svg class="w-5 h-5 text-sheets-green" viewBox="0 0 24 24" fill="currentColor">
              <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
              <path d="M7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zm4-8h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6z"/>
            </svg>
            <span class="text-sheets-green text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Google<br><span class="text-gradient-sheets">Sheets</span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-sheets-green text-white hover:bg-sheets-dark hover:scale-105 hover:shadow-glow-sheets transition-all duration-300">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
                <path d="M7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zm4-8h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6z"/>
              </svg>
              <?php echo esc_html( $t['cta_connect'] ); ?>
            </a>
            <a href="#functii" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              <?php echo esc_html( $t['cta_features'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-display font-bold text-sheets-green">Real-time</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['sync_label'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-white">4</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['export_types'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-sheets-green">Auto</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['scheduling'] ); ?></div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Live Spreadsheet -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            syncing: false,
            rowCount: 5,
            lastUpdate: '<?php echo esc_js( $t['last_update'] ); ?>',
            rows: [
              { id: 'ORD-001', email: 'maria@ex.ro', total: '€150', status: '<?php echo esc_js( $t['paid'] ); ?>' },
              { id: 'ORD-002', email: 'alex@co.ro', total: '€225', status: '<?php echo esc_js( $t['paid'] ); ?>' },
              { id: 'ORD-003', email: 'elena@biz.ro', total: '€75', status: '<?php echo esc_js( $t['pending'] ); ?>' },
              { id: 'ORD-004', email: 'ion@mail.ro', total: '€300', status: '<?php echo esc_js( $t['paid'] ); ?>' },
              { id: 'ORD-005', email: 'ana@work.ro', total: '€150', status: '<?php echo esc_js( $t['paid'] ); ?>' }
            ],
            syncingText: '<?php echo esc_js( $t['syncing'] ); ?>',
            secAgoText: '<?php echo $current_lang === 'ro' ? 'Acum' : ''; ?>'
          }" x-init="setInterval(() => {
            syncing = true;
            setTimeout(() => {
              syncing = false;
              rowCount++;
              lastUpdate = (secAgoText ? secAgoText + ' ' : '') + Math.floor(Math.random() * 5 + 1) + ' sec<?php echo $current_lang === 'ro' ? '' : ' ago'; ?>';
            }, 1000);
          }, 4000)">

            <!-- Main Spreadsheet Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-2xl border border-sheets-green/20 shadow-2xl overflow-hidden">
              <!-- Toolbar -->
              <div class="flex items-center justify-between px-4 py-3 border-b border-white/10 bg-dark-900/50">
                <div class="flex items-center gap-3">
                  <svg class="w-6 h-6 text-sheets-green" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
                    <path d="M7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zm4-8h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6z"/>
                  </svg>
                  <div>
                    <div class="text-white text-sm font-medium"><?php echo esc_html( $t['report_title'] ); ?></div>
                    <div class="text-white/40 text-xs">Sheet1</div>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <div class="flex items-center gap-1" :class="syncing && 'text-sheets-green'">
                    <svg class="w-4 h-4" :class="syncing && 'animate-sync-spin'" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    <span class="text-xs" :class="syncing ? 'text-sheets-green' : 'text-white/40'" x-text="syncing ? syncingText : lastUpdate"></span>
                  </div>
                </div>
              </div>

              <!-- Spreadsheet Grid -->
              <div class="overflow-hidden" :class="syncing && 'sync-active'">
                <!-- Column Headers -->
                <div class="flex">
                  <div class="row-number">&nbsp;</div>
                  <div class="column-header flex-1">A</div>
                  <div class="column-header flex-1">B</div>
                  <div class="column-header flex-1">C</div>
                  <div class="column-header flex-1">D</div>
                </div>

                <!-- Header Row -->
                <div class="flex spreadsheet-header">
                  <div class="row-number flex items-center justify-center">1</div>
                  <div class="spreadsheet-cell flex-1 text-white font-medium"><?php echo esc_html( $t['order'] ); ?></div>
                  <div class="spreadsheet-cell flex-1 text-white font-medium"><?php echo esc_html( $t['email'] ); ?></div>
                  <div class="spreadsheet-cell flex-1 text-white font-medium"><?php echo esc_html( $t['total'] ); ?></div>
                  <div class="spreadsheet-cell flex-1 text-white font-medium"><?php echo esc_html( $t['status'] ); ?></div>
                </div>

                <!-- Data Rows -->
                <template x-for="(row, index) in rows" :key="row.id">
                  <div class="flex spreadsheet-row">
                    <div class="row-number flex items-center justify-center" x-text="index + 2"></div>
                    <div class="spreadsheet-cell flex-1 text-white/80 font-mono text-xs" x-text="row.id"></div>
                    <div class="spreadsheet-cell flex-1 text-white/60 text-xs truncate" x-text="row.email"></div>
                    <div class="spreadsheet-cell flex-1 text-sheets-green font-medium" x-text="row.total"></div>
                    <div class="spreadsheet-cell flex-1">
                      <span
                        class="px-2 py-0.5 rounded text-xs"
                        :class="row.status === 'Plătit' ? 'bg-sheets-green/20 text-sheets-green' : 'bg-brand-amber/20 text-brand-amber'"
                        x-text="row.status"
                      ></span>
                    </div>
                  </div>
                </template>

                <!-- New Row Indicator -->
                <div class="flex spreadsheet-row opacity-50 border-t border-sheets-green/30">
                  <div class="row-number flex items-center justify-center" x-text="rows.length + 2"></div>
                  <div class="spreadsheet-cell flex-1 text-sheets-green/50 italic text-xs"><?php echo esc_html( $t['new_order'] ); ?></div>
                  <div class="spreadsheet-cell flex-1"></div>
                  <div class="spreadsheet-cell flex-1"></div>
                  <div class="spreadsheet-cell flex-1"></div>
                </div>
              </div>

              <!-- Footer -->
              <div class="px-4 py-2 border-t border-white/10 bg-dark-900/30 flex items-center justify-between">
                <span class="text-white/40 text-xs" x-text="rowCount + ' <?php echo esc_js( $t['rows_synced'] ); ?>'"></span>
                <span class="text-sheets-green text-xs font-medium">● Live</span>
              </div>
            </div>

            <!-- Floating Real-time Badge -->
            <div class="absolute -top-4 -right-4 bg-sheets-green rounded-xl px-4 py-3 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                <div>
                  <div class="text-white font-bold text-sm">Real-time</div>
                  <div class="text-white/70 text-xs"><?php echo esc_html( $t['sync_active'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating Schedule Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-sheets-green/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-sheets-green/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-sheets-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                  <div class="text-sheets-green text-sm font-medium"><?php echo esc_html( $t['daily_at'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['auto_export'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== DATA TYPES ==================== -->
  <section class="py-24 relative overflow-hidden" id="functii">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-sheets-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['data_types_badge'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['data_types_title'] ); ?><br><span class="text-gradient-sheets"><?php echo esc_html( $t['data_types_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['data_types_desc'] ); ?></p>
      </div>

      <!-- Data Type Cards -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
        <!-- Orders -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-sheets-green/20 hover:border-sheets-green/50 transition-all duration-500">
          <div class="data-type-icon bg-sheets-green/10 mb-4">
            <svg class="w-6 h-6 text-sheets-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['orders'] ); ?></h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['orders_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">order_id</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">total</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">status</span>
          </div>
        </div>

        <!-- Tickets -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-violet/20 hover:border-brand-violet/50 transition-all duration-500">
          <div class="data-type-icon bg-brand-violet/10 mb-4">
            <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['tickets'] ); ?></h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['tickets_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">ticket_id</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">attendee</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">checked_in</span>
          </div>
        </div>

        <!-- Customers -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-cyan/20 hover:border-brand-cyan/50 transition-all duration-500">
          <div class="data-type-icon bg-brand-cyan/10 mb-4">
            <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['customers'] ); ?></h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['customers_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">email</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">purchases</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">lifetime</span>
          </div>
        </div>

        <!-- Events -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-amber/20 hover:border-brand-amber/50 transition-all duration-500">
          <div class="data-type-icon bg-brand-amber/10 mb-4">
            <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['events'] ); ?></h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['events_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">event_id</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">revenue</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/40 text-xs">attendance</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SYNC MODES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sheets-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['sync_modes_badge'] ); ?></span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['sync_title'] ); ?><br><span class="text-gradient-sheets"><?php echo esc_html( $t['sync_title2'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['sync_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-sheets-green/10 border border-sheets-green/30">
              <div class="w-12 h-12 rounded-xl bg-sheets-green/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-sheets-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['realtime'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['realtime_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['scheduled'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['scheduled_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['incremental'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['incremental_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['full_sync'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['full_sync_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Schedule Config -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-10 h-10 rounded-xl bg-sheets-green/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-sheets-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold"><?php echo esc_html( $t['schedule_title'] ); ?></div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['schedule_desc'] ); ?></div>
              </div>
            </div>

            <!-- Frequency Options -->
            <div class="space-y-3 mb-6">
              <div class="text-white/40 text-xs uppercase tracking-wider"><?php echo esc_html( $t['frequency'] ); ?></div>
              <div class="grid grid-cols-4 gap-2">
                <button class="py-2 px-3 rounded-lg bg-dark-900/50 border border-white/10 text-white/60 text-sm hover:border-sheets-green/50 transition-colors"><?php echo esc_html( $t['hourly'] ); ?></button>
                <button class="py-2 px-3 rounded-lg bg-sheets-green/20 border border-sheets-green text-sheets-green text-sm font-medium"><?php echo esc_html( $t['daily'] ); ?></button>
                <button class="py-2 px-3 rounded-lg bg-dark-900/50 border border-white/10 text-white/60 text-sm hover:border-sheets-green/50 transition-colors"><?php echo esc_html( $t['weekly'] ); ?></button>
                <button class="py-2 px-3 rounded-lg bg-dark-900/50 border border-white/10 text-white/60 text-sm hover:border-sheets-green/50 transition-colors"><?php echo esc_html( $t['monthly'] ); ?></button>
              </div>
            </div>

            <!-- Time -->
            <div class="space-y-3 mb-6">
              <div class="text-white/40 text-xs uppercase tracking-wider"><?php echo esc_html( $t['time'] ); ?></div>
              <div class="flex items-center gap-2">
                <div class="flex-1 p-3 rounded-lg bg-dark-900/50 border border-white/10">
                  <span class="text-white font-mono">06:00</span>
                </div>
                <span class="text-white/40 text-sm">Europe/Bucharest</span>
              </div>
            </div>

            <!-- Data Type -->
            <div class="space-y-3 mb-6">
              <div class="text-white/40 text-xs uppercase tracking-wider"><?php echo esc_html( $t['data_type'] ); ?></div>
              <select class="w-full p-3 rounded-lg bg-dark-900/50 border border-white/10 text-white appearance-none">
                <option><?php echo esc_html( $t['orders'] ); ?></option>
                <option><?php echo esc_html( $t['tickets'] ); ?></option>
                <option><?php echo esc_html( $t['customers'] ); ?></option>
                <option><?php echo esc_html( $t['events'] ); ?></option>
              </select>
            </div>

            <!-- Scheduled Jobs -->
            <div class="space-y-2">
              <div class="text-white/40 text-xs uppercase tracking-wider"><?php echo esc_html( $t['active_jobs'] ); ?></div>
              <div class="p-3 rounded-lg bg-sheets-green/10 border border-sheets-green/30 flex items-center justify-between">
                <div class="flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-sheets-green animate-pulse"></span>
                  <span class="text-white text-sm"><?php echo esc_html( $t['daily_orders'] ); ?></span>
                </div>
                <span class="text-sheets-green text-xs">06:00</span>
              </div>
              <div class="p-3 rounded-lg bg-dark-900/50 border border-white/10 flex items-center justify-between">
                <div class="flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full bg-brand-violet"></span>
                  <span class="text-white/70 text-sm"><?php echo esc_html( $t['weekly_summary'] ); ?></span>
                </div>
                <span class="text-white/40 text-xs"><?php echo esc_html( $t['monday'] ); ?> 08:00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== COLUMN MAPPING ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Visual - Column Mapping UI -->
        <div class="reveal order-2 lg:order-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-10 h-10 rounded-xl bg-brand-violet/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold"><?php echo esc_html( $t['column_mapping'] ); ?></div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['column_mapping_desc'] ); ?></div>
              </div>
            </div>

            <!-- Mapping Rows -->
            <div class="space-y-4">
              <div class="flex items-center gap-4">
                <div class="flex-1 p-3 rounded-lg bg-brand-violet/10 border border-brand-violet/30">
                  <div class="text-brand-violet text-xs uppercase mb-1">Tixello</div>
                  <div class="text-white font-mono text-sm">order_number</div>
                </div>
                <div class="w-16 flex items-center justify-center">
                  <div class="mapping-line w-full"></div>
                </div>
                <div class="flex-1 p-3 rounded-lg bg-sheets-green/10 border border-sheets-green/30">
                  <div class="text-sheets-green text-xs uppercase mb-1">Sheets</div>
                  <div class="text-white font-mono text-sm">Nr. Comandă</div>
                </div>
              </div>

              <div class="flex items-center gap-4">
                <div class="flex-1 p-3 rounded-lg bg-brand-violet/10 border border-brand-violet/30">
                  <div class="text-brand-violet text-xs uppercase mb-1">Tixello</div>
                  <div class="text-white font-mono text-sm">customer_email</div>
                </div>
                <div class="w-16 flex items-center justify-center">
                  <div class="mapping-line w-full"></div>
                </div>
                <div class="flex-1 p-3 rounded-lg bg-sheets-green/10 border border-sheets-green/30">
                  <div class="text-sheets-green text-xs uppercase mb-1">Sheets</div>
                  <div class="text-white font-mono text-sm">Email Client</div>
                </div>
              </div>

              <div class="flex items-center gap-4">
                <div class="flex-1 p-3 rounded-lg bg-brand-violet/10 border border-brand-violet/30">
                  <div class="text-brand-violet text-xs uppercase mb-1">Tixello</div>
                  <div class="text-white font-mono text-sm">total_amount</div>
                </div>
                <div class="w-16 flex items-center justify-center">
                  <div class="mapping-line w-full"></div>
                </div>
                <div class="flex-1 p-3 rounded-lg bg-sheets-green/10 border border-sheets-green/30">
                  <div class="text-sheets-green text-xs uppercase mb-1">Sheets</div>
                  <div class="text-white font-mono text-sm">Total (€)</div>
                </div>
              </div>

              <div class="flex items-center gap-4">
                <div class="flex-1 p-3 rounded-lg bg-brand-violet/10 border border-brand-violet/30">
                  <div class="text-brand-violet text-xs uppercase mb-1">Tixello</div>
                  <div class="text-white font-mono text-sm">payment_status</div>
                </div>
                <div class="w-16 flex items-center justify-center">
                  <div class="mapping-line w-full"></div>
                </div>
                <div class="flex-1 p-3 rounded-lg bg-sheets-green/10 border border-sheets-green/30">
                  <div class="text-sheets-green text-xs uppercase mb-1">Sheets</div>
                  <div class="text-white font-mono text-sm">Status Plată</div>
                </div>
              </div>

              <!-- Add field button -->
              <button class="w-full p-3 rounded-lg border border-dashed border-white/20 text-white/40 text-sm hover:border-sheets-green/50 hover:text-sheets-green transition-colors">
                <?php echo esc_html( $t['add_field'] ); ?>
              </button>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="reveal order-1 lg:order-2">
          <span class="text-brand-violet text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['mapping_badge'] ); ?></span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['mapping_title'] ); ?><br><span class="text-gradient-sheets"><?php echo esc_html( $t['mapping_title2'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['mapping_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-sheets-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-sheets-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['select_fields'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['select_fields_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-sheets-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-sheets-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['rename_headers'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['rename_headers_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-sheets-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-sheets-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['set_order'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['set_order_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-sheets-green/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-sheets-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['format_dates'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['format_dates_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['usecases_badge'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['usecases_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['usecases_title2'] ); ?></span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-sheets-green/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-sheets-green/20 to-sheets-green/10 flex items-center justify-center mb-4"><span class="text-2xl">📊</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['sales_dashboard'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['sales_dashboard_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-amber/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10 flex items-center justify-center mb-4"><span class="text-2xl">💰</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['finance_reports'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['finance_reports_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10 flex items-center justify-center mb-4"><span class="text-2xl">🎯</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['marketing_analysis'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['marketing_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-cyan/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/10 flex items-center justify-center mb-4"><span class="text-2xl">📋</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['event_day_ops'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['event_day_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-rose/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-rose/20 to-brand-rose/10 flex items-center justify-center mb-4"><span class="text-2xl">📈</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['sponsor_reports'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['sponsor_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-google-blue/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-google-blue/20 to-google-blue/10 flex items-center justify-center mb-4"><span class="text-2xl">🤝</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['team_collab'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['team_collab_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-sheets-green/10 to-sheets-dark/10 rounded-3xl p-8 md:p-12 border border-sheets-green/20">
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
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-sheets-green to-sheets-dark flex items-center justify-center">
              <span class="text-white font-bold">RM</span>
            </div>
            <div>
              <div class="font-semibold text-white">Raluca M.</div>
              <div class="text-white/50">Finance Manager, Electric Castle</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-sheets-green/10 via-transparent to-sheets-dark/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(52,168,83,0.2) 0%, transparent 70%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">📊</div>
    <div class="absolute bottom-20 right-20 opacity-20 animate-float text-3xl" style="animation-delay: 1s;">📈</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Google<br><span class="text-gradient-sheets">Sheets</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-sheets-green text-white hover:bg-sheets-dark hover:scale-105 hover:shadow-glow-sheets transition-all duration-300">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
            <path d="M7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zm4-8h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6z"/>
          </svg>
          <?php echo esc_html( $t['cta_connect'] ); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          <?php echo esc_html( $t['cta_questions'] ); ?>
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3"><?php echo esc_html( $t['final_tagline'] ); ?></p>
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
