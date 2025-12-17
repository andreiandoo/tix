<?php
/**
 * Template Name: Micro - HubSpot
 * Description: HubSpot CRM integration landing page
 */

get_header();

// Language detection (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Translations array
$t = [
    // Hero section
    'badge'              => 'CRM & Marketing Automation',
    'hero_title'         => $current_lang === 'ro' ? 'conectat' : 'connected',
    'hero_desc'          => $current_lang === 'ro' ? 'Sincronizează <strong class="text-white">contacte, deal-uri și companii</strong> bidirecțional cu HubSpot CRM. Automatizare marketing bazată pe comportamentul real de achiziție.' : 'Sync <strong class="text-white">contacts, deals, and companies</strong> bidirectionally with HubSpot CRM. Marketing automation based on real purchase behavior.',
    'cta_connect'        => $current_lang === 'ro' ? 'Conectează HubSpot' : 'Connect HubSpot',
    'see_objects'        => $current_lang === 'ro' ? 'Vezi obiectele suportate' : 'See supported objects',
    'bidirectional'      => $current_lang === 'ro' ? 'Direcțional' : 'Directional',
    'secured'            => $current_lang === 'ro' ? '2.0 Securizat' : '2.0 Secured',
    'real_time_sync'     => $current_lang === 'ro' ? 'Time Sync' : 'Time Sync',
    'bi_sync'            => $current_lang === 'ro' ? 'Sincronizare bidirecțională' : 'Bidirectional sync',
    'syncing'            => $current_lang === 'ro' ? 'Sincronizare...' : 'Syncing...',
    'connected'          => $current_lang === 'ro' ? 'Conectat' : 'Connected',
    'total_purchases'    => $current_lang === 'ro' ? 'Total achiziții' : 'Total purchases',
    'automation'         => $current_lang === 'ro' ? 'Automatizare' : 'Automation',

    // Objects section
    'objects_label'      => $current_lang === 'ro' ? 'Obiecte HubSpot' : 'HubSpot Objects',
    'objects_title'      => $current_lang === 'ro' ? 'Contacte, Deals,' : 'Contacts, Deals,',
    'objects_desc'       => $current_lang === 'ro' ? 'Sincronizează toate obiectele HubSpot principale cu datele tale de ticketing.' : 'Sync all major HubSpot objects with your ticketing data.',
    'contacts_desc'      => $current_lang === 'ro' ? 'Persoane care cumpără bilete sau se înregistrează la evenimente.' : 'People who buy tickets or register for events.',
    'deals_desc'         => $current_lang === 'ro' ? 'Oportunități de vânzări pentru pachete și sponsorizări.' : 'Sales opportunities for packages and sponsorships.',
    'companies_desc'     => $current_lang === 'ro' ? 'Organizații pentru achiziții bulk și facturare B2B.' : 'Organizations for bulk purchases and B2B invoicing.',
    'tickets_desc'       => $current_lang === 'ro' ? 'Tichete de suport cu context achiziții.' : 'Support tickets with purchase context.',
    'domain'             => $current_lang === 'ro' ? 'Domeniu' : 'Domain',
    'industry'           => $current_lang === 'ro' ? 'Industrie' : 'Industry',
    'status'             => 'Status',
    'priority'           => $current_lang === 'ro' ? 'Prioritate' : 'Priority',

    // Property Mapping section
    'mapping_label'      => $current_lang === 'ro' ? 'Mapare Proprietăți' : 'Property Mapping',
    'mapping_title_1'    => $current_lang === 'ro' ? 'Conectează' : 'Connect',
    'mapping_title_2'    => $current_lang === 'ro' ? 'orice câmp' : 'any field',
    'mapping_desc'       => $current_lang === 'ro' ? 'Mapează datele biletelor la orice proprietate HubSpot - standard sau personalizată. Total control asupra ce date ajung unde.' : 'Map ticket data to any HubSpot property - standard or custom. Total control over what data goes where.',
    'standard_props'     => $current_lang === 'ro' ? 'Proprietăți Standard' : 'Standard Properties',
    'custom_props'       => $current_lang === 'ro' ? 'Proprietăți Custom' : 'Custom Properties',
    'custom_props_desc'  => $current_lang === 'ro' ? 'Creează câmpuri personalizate în HubSpot' : 'Create custom fields in HubSpot',
    'calc_props'         => $current_lang === 'ro' ? 'Proprietăți Calculate' : 'Calculated Properties',
    'calc_props_desc'    => $current_lang === 'ro' ? 'Calculează valori din datele biletelor' : 'Calculate values from ticket data',
    'field_mapping'      => $current_lang === 'ro' ? 'Mapare Câmpuri' : 'Field Mapping',
    'add_mapping'        => $current_lang === 'ro' ? '+ Adaugă mapare nouă' : '+ Add new mapping',

    // Pipeline section
    'pipeline_label'     => $current_lang === 'ro' ? 'Pipeline Vânzări' : 'Sales Pipeline',
    'pipeline_title_1'   => $current_lang === 'ro' ? 'Urmărește' : 'Track',
    'pipeline_title_2'   => $current_lang === 'ro' ? 'deal-urile' : 'deals',
    'pipeline_desc'      => $current_lang === 'ro' ? 'Vânzările de bilete corporative devin Deal-uri în HubSpot. Prognozează veniturile alături de restul afacerii.' : 'Corporate ticket sales become Deals in HubSpot. Forecast revenue alongside the rest of your business.',
    'corp_tickets'       => $current_lang === 'ro' ? 'Bilete Corporative - Summer Festival' : 'Corporate Tickets - Summer Festival',
    'tickets_count'      => $current_lang === 'ro' ? '50 bilete' : '50 tickets',
    'proposal_sent'      => $current_lang === 'ro' ? 'Proposal Sent' : 'Proposal Sent',
    'close_date'         => $current_lang === 'ro' ? 'Close: 30 Ian 2025' : 'Close: Jan 30 2025',

    // Marketing Automation section
    'mkt_label'          => 'Marketing Automation',
    'mkt_title_1'        => 'Workflow-uri',
    'mkt_title_2'        => $current_lang === 'ro' ? 'inteligente' : 'intelligent',
    'mkt_desc'           => $current_lang === 'ro' ? 'Declanșează automatizări HubSpot bazate pe comportamentul real de achiziție. Emailuri personalizate, segmentare dinamică, nurturing automat.' : 'Trigger HubSpot automations based on real purchase behavior. Personalized emails, dynamic segmentation, automatic nurturing.',
    'workflow_auto'      => $current_lang === 'ro' ? 'Workflow Automatizat' : 'Automated Workflow',
    'triggered_by'       => $current_lang === 'ro' ? 'Declanșat de achiziția biletului' : 'Triggered by ticket purchase',
    'trigger_ticket'     => $current_lang === 'ro' ? 'Trigger: Bilet cumpărat' : 'Trigger: Ticket purchased',
    'trigger_desc'       => $current_lang === 'ro' ? 'Contact creat/actualizat în HubSpot' : 'Contact created/updated in HubSpot',
    'email_confirm'      => $current_lang === 'ro' ? 'Email: Confirmare achiziție' : 'Email: Purchase confirmation',
    'email_confirm_desc' => $current_lang === 'ro' ? 'Trimis automat în 1 minut' : 'Sent automatically in 1 minute',
    'delay_3days'        => $current_lang === 'ro' ? 'Delay: 3 zile înainte' : 'Delay: 3 days before',
    'delay_desc'         => $current_lang === 'ro' ? 'Așteaptă până aproape de eveniment' : 'Wait until close to event',
    'email_preevent'     => $current_lang === 'ro' ? 'Email: Info pre-eveniment' : 'Email: Pre-event info',
    'email_preevent_desc'=> $current_lang === 'ro' ? 'Locație, program, ce să aduci' : 'Location, schedule, what to bring',
    'email_sequences'    => $current_lang === 'ro' ? 'Secvențe Email' : 'Email Sequences',
    'sequences_desc'     => $current_lang === 'ro' ? 'Confirmare, reminder, follow-up post-eveniment' : 'Confirmation, reminder, post-event follow-up',
    'dynamic_segment'    => $current_lang === 'ro' ? 'Segmentare Dinamică' : 'Dynamic Segmentation',
    'segment_desc'       => $current_lang === 'ro' ? 'Liste bazate pe evenimente, cheltuieli, frecvență' : 'Lists based on events, spending, frequency',
    'lifecycle'          => 'Lifecycle Tracking',
    'lifecycle_desc'     => $current_lang === 'ro' ? 'De la prima achiziție la client fidel recurent' : 'From first purchase to loyal recurring customer',

    // Use Cases section
    'use_cases'          => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
    'hubspot_for'        => 'HubSpot',
    'for_events'         => $current_lang === 'ro' ? 'evenimente' : 'events',
    'mkt_segmentation'   => $current_lang === 'ro' ? 'Segmentare Marketing' : 'Marketing Segmentation',
    'segment_mkt_desc'   => $current_lang === 'ro' ? 'Segmentează contactele după participare, valoare achiziții sau tipuri bilete. Campanii targetate.' : 'Segment contacts by attendance, purchase value or ticket types. Targeted campaigns.',
    'sales_pipeline'     => 'Pipeline Vânzări',
    'pipeline_case_desc' => $current_lang === 'ro' ? 'Urmărește vânzările corporative ca Deal-uri. Prognozează venituri din evenimente.' : 'Track corporate sales as Deals. Forecast event revenue.',
    'client_lifecycle'   => $current_lang === 'ro' ? 'Lifecycle Client' : 'Client Lifecycle',
    'lifecycle_case_desc'=> $current_lang === 'ro' ? 'Urmărește de la prima achiziție la cumpărător fidel. Automatizează etapele lifecycle.' : 'Track from first purchase to loyal buyer. Automate lifecycle stages.',
    'mkt_automation'     => $current_lang === 'ro' ? 'Automatizare Marketing' : 'Marketing Automation',
    'auto_case_desc'     => $current_lang === 'ro' ? 'Declanșează workflow-uri când clienții cumpără. Secvențe automate.' : 'Trigger workflows when customers buy. Automatic sequences.',
    'company_mgmt'       => $current_lang === 'ro' ? 'Gestionare Companii' : 'Company Management',
    'company_desc'       => $current_lang === 'ro' ? 'Leagă contacte de Companies. Urmărește vânzările B2B per organizație.' : 'Link contacts to Companies. Track B2B sales per organization.',
    'support_integration'=> $current_lang === 'ro' ? 'Integrare Suport' : 'Support Integration',
    'support_desc'       => $current_lang === 'ro' ? 'Creează tichete HubSpot cu context achiziții. Suport informat.' : 'Create HubSpot tickets with purchase context. Informed support.',

    // Testimonial
    'testimonial_text'   => $current_lang === 'ro' ? 'Echipa de marketing vede acum <span class="text-gradient-hubspot font-semibold">istoricul complet</span> al fiecărui client direct în HubSpot. Campaniile sunt mult mai targetate, iar rata de conversie a crescut cu 35%.' : 'The marketing team now sees the <span class="text-gradient-hubspot font-semibold">complete history</span> of each customer directly in HubSpot. Campaigns are much more targeted, and conversion rate increased by 35%.',
    'testimonial_role'   => 'Marketing Director, Untold Festival',

    // Final CTA
    'cta_title_1'        => $current_lang === 'ro' ? 'Conectează' : 'Connect',
    'cta_desc'           => $current_lang === 'ro' ? 'Sincronizare bidirecțională, mapare proprietăți, automatizare marketing. CRM-ul tău de evenimente, complet.' : 'Bidirectional sync, property mapping, marketing automation. Your event CRM, complete.',
    'questions_contact'  => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
    'final_tagline'      => $current_lang === 'ro' ? 'OAuth 2.0 • Sincronizare Bidirecțională • Webhook Support' : 'OAuth 2.0 • Bidirectional Sync • Webhook Support',
];
?>

<style>
  ::selection { background: #FF7A59; color: white; }

  .text-gradient-hubspot { background: linear-gradient(135deg, #FF7A59 0%, #FF8F73 50%, #00BDA5 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(255, 122, 89, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* HubSpot sprocket logo */
  .hubspot-sprocket {
    width: 40px;
    height: 40px;
    background: #FF7A59;
    border-radius: 50%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .hubspot-sprocket::before {
    content: '';
    width: 16px;
    height: 16px;
    background: white;
    border-radius: 50%;
  }

  /* Contact card */
  .contact-card {
    background: rgba(255, 122, 89, 0.05);
    border: 1px solid rgba(255, 122, 89, 0.2);
    border-left: 3px solid #FF7A59;
    transition: all 0.3s;
  }
  .contact-card:hover {
    background: rgba(255, 122, 89, 0.1);
    transform: translateX(4px);
  }

  /* Deal stage badge */
  .deal-stage {
    position: relative;
  }
  .deal-stage::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 8px;
    height: 8px;
    border-radius: 50%;
  }
  .deal-stage.qualified::before { background: #FF7A59; }
  .deal-stage.proposal::before { background: #00BDA5; }
  .deal-stage.won::before { background: #10b981; }
  .deal-stage.lost::before { background: #ef4444; }

  /* Sync arrow */
  .sync-arrow {
    position: relative;
  }
  .sync-arrow::after {
    content: '';
    position: absolute;
    top: 50%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #FF7A59, transparent);
    animation: dataFlow 2s linear infinite;
  }

  /* Property mapping */
  .property-pill {
    background: rgba(255, 122, 89, 0.1);
    border: 1px solid rgba(255, 122, 89, 0.2);
  }
  .property-pill.hubspot {
    background: rgba(0, 189, 165, 0.1);
    border-color: rgba(0, 189, 165, 0.3);
  }

  /* Lifecycle stage */
  .lifecycle-stage {
    position: relative;
    padding-left: 20px;
  }
  .lifecycle-stage::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: currentColor;
  }

  /* Pipeline visual */
  .pipeline-stage {
    position: relative;
    flex: 1;
    text-align: center;
    padding: 12px 8px;
    background: rgba(255, 122, 89, 0.1);
    border-radius: 8px;
    transition: all 0.3s;
  }
  .pipeline-stage:not(:last-child)::after {
    content: '';
    position: absolute;
    right: -12px;
    top: 50%;
    transform: translateY(-50%);
    border: 6px solid transparent;
    border-left-color: rgba(255, 122, 89, 0.3);
  }
  .pipeline-stage.active {
    background: #FF7A59;
    color: white;
  }
  .pipeline-stage.completed {
    background: rgba(0, 189, 165, 0.2);
    border: 1px solid rgba(0, 189, 165, 0.3);
  }

  /* OAuth badge */
  .oauth-badge {
    background: linear-gradient(135deg, rgba(255, 122, 89, 0.1), rgba(0, 189, 165, 0.1));
    border: 1px solid rgba(255, 122, 89, 0.2);
  }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #FF7A59, #FF8F73, #00BDA5);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-hubspot-orange/15 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-hubspot-teal/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">👤</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">💼</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">🏢</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-hubspot-orange/10 border border-hubspot-orange/20 mb-6">
            <div class="hubspot-sprocket w-6 h-6" style="width: 24px; height: 24px;">
              <div class="w-2 h-2 bg-white rounded-full"></div>
            </div>
            <span class="text-hubspot-orange text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            HubSpot<br><span class="text-gradient-hubspot"><?php echo esc_html( $t['hero_title'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-hubspot-orange to-hubspot-coral text-white hover:scale-105 hover:shadow-glow-hubspot transition-all duration-300">
              <?php echo esc_html( $t['cta_connect'] ); ?>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#obiecte" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              <?php echo esc_html( $t['see_objects'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-display font-bold text-hubspot-orange">Bi</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['bidirectional'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-white">OAuth</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['secured'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-hubspot-teal">Real</div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['real_time_sync'] ); ?></div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - CRM Sync Visualization -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            syncing: false,
            contactsSynced: 1247,
            dealsSynced: 89
          }" x-init="setInterval(() => {
            syncing = true;
            setTimeout(() => {
              syncing = false;
              contactsSynced++;
            }, 1500);
          }, 3000)">

            <!-- Main Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-3xl p-6 border border-hubspot-orange/20 shadow-2xl">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="hubspot-sprocket animate-hubspot-glow">
                    <div class="w-4 h-4 bg-white rounded-full"></div>
                  </div>
                  <div>
                    <div class="text-white font-semibold">HubSpot CRM</div>
                    <div class="text-white/40 text-xs"><?php echo esc_html( $t['bi_sync'] ); ?></div>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <span class="w-2 h-2 rounded-full animate-pulse" :class="syncing ? 'bg-hubspot-orange' : 'bg-brand-green'"></span>
                  <span class="text-xs" :class="syncing ? 'text-hubspot-orange' : 'text-brand-green'" x-text="syncing ? '<?php echo esc_attr( $t['syncing'] ); ?>' : '<?php echo esc_attr( $t['connected'] ); ?>'"></span>
                </div>
              </div>

              <!-- Sync Visual -->
              <div class="flex items-center justify-between mb-6 py-4">
                <!-- Tixello Side -->
                <div class="flex items-center gap-3">
                  <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center">
                    <span class="text-white font-display font-bold">T</span>
                  </div>
                  <div>
                    <div class="text-white font-medium">Tixello</div>
                    <div class="text-white/40 text-xs">Ticketing</div>
                  </div>
                </div>

                <!-- Sync Arrows -->
                <div class="flex-1 mx-4 relative h-8">
                  <div class="absolute inset-y-0 left-0 right-0 flex items-center">
                    <!-- Arrow Right -->
                    <div class="flex-1 h-0.5 bg-gradient-to-r from-brand-violet/50 to-hubspot-orange/50 relative">
                      <div class="absolute inset-0" :class="syncing ? 'animate-data-flow' : ''">
                        <div class="h-full bg-gradient-to-r from-transparent via-hubspot-orange to-transparent"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Bidirectional indicator -->
                  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center gap-1">
                    <svg class="w-4 h-4 text-hubspot-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                    <svg class="w-4 h-4 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                  </div>
                </div>

                <!-- HubSpot Side -->
                <div class="flex items-center gap-3">
                  <div class="hubspot-sprocket">
                    <div class="w-4 h-4 bg-white rounded-full"></div>
                  </div>
                  <div>
                    <div class="text-white font-medium">HubSpot</div>
                    <div class="text-white/40 text-xs">CRM</div>
                  </div>
                </div>
              </div>

              <!-- Synced Objects -->
              <div class="grid grid-cols-3 gap-3 mb-6">
                <div class="bg-dark-900/50 rounded-xl p-3 text-center">
                  <div class="w-8 h-8 rounded-lg bg-hubspot-orange/20 flex items-center justify-center mx-auto mb-2">
                    <svg class="w-4 h-4 text-hubspot-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                  </div>
                  <div class="text-lg font-bold text-white" x-text="contactsSynced.toLocaleString()">1,247</div>
                  <div class="text-white/40 text-xs">Contacts</div>
                </div>
                <div class="bg-dark-900/50 rounded-xl p-3 text-center">
                  <div class="w-8 h-8 rounded-lg bg-hubspot-teal/20 flex items-center justify-center mx-auto mb-2">
                    <svg class="w-4 h-4 text-hubspot-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  </div>
                  <div class="text-lg font-bold text-white" x-text="dealsSynced">89</div>
                  <div class="text-white/40 text-xs">Deals</div>
                </div>
                <div class="bg-dark-900/50 rounded-xl p-3 text-center">
                  <div class="w-8 h-8 rounded-lg bg-hubspot-blue/20 flex items-center justify-center mx-auto mb-2">
                    <svg class="w-4 h-4 text-hubspot-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                  </div>
                  <div class="text-lg font-bold text-white">34</div>
                  <div class="text-white/40 text-xs">Companies</div>
                </div>
              </div>

              <!-- Recent Synced Contact -->
              <div class="contact-card rounded-xl p-3">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-full bg-hubspot-orange/20 flex items-center justify-center">
                    <span class="text-hubspot-orange font-medium">MI</span>
                  </div>
                  <div class="flex-1">
                    <div class="text-white font-medium">Maria Ionescu</div>
                    <div class="text-white/40 text-xs">maria@exemplu.ro</div>
                  </div>
                  <div class="text-right">
                    <div class="text-hubspot-teal text-sm font-medium">€450</div>
                    <div class="text-white/40 text-xs"><?php echo esc_html( $t['total_purchases'] ); ?></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating OAuth Badge -->
            <div class="absolute -top-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/30 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div>
                  <div class="text-brand-green text-sm font-medium">OAuth 2.0</div>
                  <div class="text-white/40 text-xs">Securizat</div>
                </div>
              </div>
            </div>

            <!-- Floating Automation Badge -->
            <div class="absolute -bottom-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-hubspot-teal/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-hubspot-teal/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-hubspot-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <div>
                  <div class="text-hubspot-teal text-sm font-medium">Workflows</div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['automation'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== HUBSPOT OBJECTS ==================== -->
  <section class="py-24 relative overflow-hidden" id="obiecte">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-hubspot-orange text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['objects_label'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['objects_title'] ); ?><br><span class="text-gradient-hubspot">Companies</span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['objects_desc'] ); ?></p>
      </div>

      <!-- Objects Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Contacts -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-hubspot-orange/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-hubspot-orange/20 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-hubspot-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Contacts</h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['contacts_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-hubspot-orange/10 text-hubspot-orange text-xs">Email</span>
            <span class="px-2 py-1 rounded bg-hubspot-orange/10 text-hubspot-orange text-xs">Name</span>
            <span class="px-2 py-1 rounded bg-hubspot-orange/10 text-hubspot-orange text-xs">Phone</span>
          </div>
        </div>

        <!-- Deals -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-hubspot-teal/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-hubspot-teal/20 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-hubspot-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Deals</h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['deals_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-hubspot-teal/10 text-hubspot-teal text-xs">Amount</span>
            <span class="px-2 py-1 rounded bg-hubspot-teal/10 text-hubspot-teal text-xs">Stage</span>
            <span class="px-2 py-1 rounded bg-hubspot-teal/10 text-hubspot-teal text-xs">Pipeline</span>
          </div>
        </div>

        <!-- Companies -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-hubspot-blue/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-hubspot-blue/20 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-hubspot-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Companies</h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['companies_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-hubspot-blue/10 text-hubspot-blue text-xs"><?php echo esc_html( $t['domain'] ); ?></span>
            <span class="px-2 py-1 rounded bg-hubspot-blue/10 text-hubspot-blue text-xs"><?php echo esc_html( $t['industry'] ); ?></span>
          </div>
        </div>

        <!-- Tickets -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal reveal-delay-3">
          <div class="w-14 h-14 rounded-2xl bg-brand-violet/20 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Tickets</h3>
          <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['tickets_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-brand-violet/10 text-brand-violet text-xs"><?php echo esc_html( $t['status'] ); ?></span>
            <span class="px-2 py-1 rounded bg-brand-violet/10 text-brand-violet text-xs"><?php echo esc_html( $t['priority'] ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PROPERTY MAPPING ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-hubspot-teal text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['mapping_label'] ); ?></span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['mapping_title_1'] ); ?><br><span class="text-gradient-hubspot"><?php echo esc_html( $t['mapping_title_2'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['mapping_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-hubspot-orange/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-hubspot-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['standard_props'] ); ?></span>
                <p class="text-white/50 text-sm">email, firstname, lastname, phone</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-hubspot-teal/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-hubspot-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['custom_props'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['custom_props_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium"><?php echo esc_html( $t['calc_props'] ); ?></span>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['calc_props_desc'] ); ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Property Mapping UI -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-10 h-10 rounded-xl bg-hubspot-orange/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-hubspot-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold"><?php echo esc_html( $t['field_mapping'] ); ?></div>
                <div class="text-white/40 text-xs">Tixello → HubSpot</div>
              </div>
            </div>

            <!-- Mappings -->
            <div class="space-y-3">
              <div class="flex items-center gap-3">
                <div class="flex-1 property-pill rounded-lg px-3 py-2">
                  <div class="text-white/40 text-xs">Tixello</div>
                  <div class="text-white font-mono text-sm">total_purchases</div>
                </div>
                <svg class="w-5 h-5 text-hubspot-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                <div class="flex-1 property-pill hubspot rounded-lg px-3 py-2">
                  <div class="text-hubspot-teal/60 text-xs">HubSpot</div>
                  <div class="text-hubspot-teal font-mono text-sm">total_event_purchases</div>
                </div>
              </div>

              <div class="flex items-center gap-3">
                <div class="flex-1 property-pill rounded-lg px-3 py-2">
                  <div class="text-white/40 text-xs">Tixello</div>
                  <div class="text-white font-mono text-sm">last_event_date</div>
                </div>
                <svg class="w-5 h-5 text-hubspot-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                <div class="flex-1 property-pill hubspot rounded-lg px-3 py-2">
                  <div class="text-hubspot-teal/60 text-xs">HubSpot</div>
                  <div class="text-hubspot-teal font-mono text-sm">last_event_attended</div>
                </div>
              </div>

              <div class="flex items-center gap-3">
                <div class="flex-1 property-pill rounded-lg px-3 py-2">
                  <div class="text-white/40 text-xs">Tixello</div>
                  <div class="text-white font-mono text-sm">favorite_type</div>
                </div>
                <svg class="w-5 h-5 text-hubspot-orange flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                <div class="flex-1 property-pill hubspot rounded-lg px-3 py-2">
                  <div class="text-hubspot-teal/60 text-xs">HubSpot</div>
                  <div class="text-hubspot-teal font-mono text-sm">preferred_category</div>
                </div>
              </div>
            </div>

            <!-- Add mapping button -->
            <button class="w-full mt-4 py-2 rounded-lg border border-dashed border-hubspot-orange/30 text-hubspot-orange/60 text-sm hover:border-hubspot-orange hover:text-hubspot-orange transition-colors">
              <?php echo esc_html( $t['add_mapping'] ); ?>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== DEAL PIPELINE ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-hubspot-teal text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['pipeline_label'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['pipeline_title_1'] ); ?><br><span class="text-gradient-hubspot"><?php echo esc_html( $t['pipeline_title_2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['pipeline_desc'] ); ?></p>
      </div>

      <!-- Pipeline Visual -->
      <div class="max-w-4xl mx-auto reveal">
        <div class="flex gap-6 mb-8 overflow-x-auto pb-4">
          <div class="pipeline-stage completed">
            <div class="text-sm font-medium mb-1">Qualified</div>
            <div class="text-xs text-white/40">12 deals</div>
          </div>
          <div class="pipeline-stage completed">
            <div class="text-sm font-medium mb-1">Meeting</div>
            <div class="text-xs text-white/40">8 deals</div>
          </div>
          <div class="pipeline-stage active">
            <div class="text-sm font-medium mb-1">Proposal</div>
            <div class="text-xs opacity-80">5 deals</div>
          </div>
          <div class="pipeline-stage">
            <div class="text-sm font-medium text-white mb-1">Negotiation</div>
            <div class="text-xs text-white/40">3 deals</div>
          </div>
          <div class="pipeline-stage">
            <div class="text-sm font-medium text-white mb-1">Closed Won</div>
            <div class="text-xs text-white/40">€45,000</div>
          </div>
        </div>

        <!-- Sample Deal -->
        <div class="bg-dark-800 rounded-2xl p-6 border border-hubspot-orange/20">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-hubspot-teal/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-hubspot-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold"><?php echo esc_html( $t['corp_tickets'] ); ?></div>
                <div class="text-white/40 text-xs">TechCorp SRL • <?php echo esc_html( $t['tickets_count'] ); ?></div>
              </div>
            </div>
            <div class="text-right">
              <div class="text-2xl font-bold text-hubspot-teal">€5,000</div>
              <div class="text-white/40 text-xs">Amount</div>
            </div>
          </div>

          <div class="flex items-center gap-4">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 rounded-full bg-hubspot-orange/20 flex items-center justify-center">
                <span class="text-hubspot-orange text-xs">AP</span>
              </div>
              <span class="text-white/60 text-sm">Alexandru P.</span>
            </div>
            <div class="flex-1"></div>
            <span class="px-3 py-1 rounded-full bg-hubspot-orange/20 text-hubspot-orange text-xs font-medium"><?php echo esc_html( $t['proposal_sent'] ); ?></span>
            <span class="text-white/40 text-xs"><?php echo esc_html( $t['close_date'] ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== MARKETING AUTOMATION ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Visual - Workflow -->
        <div class="reveal order-2 lg:order-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-10 h-10 rounded-xl bg-hubspot-teal/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-hubspot-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold"><?php echo esc_html( $t['workflow_auto'] ); ?></div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['triggered_by'] ); ?></div>
              </div>
            </div>

            <!-- Workflow Steps -->
            <div class="space-y-3">
              <div class="flex items-center gap-4 p-3 rounded-lg bg-hubspot-orange/10 border border-hubspot-orange/30">
                <div class="w-8 h-8 rounded-full bg-hubspot-orange flex items-center justify-center text-white text-sm font-bold">1</div>
                <div>
                  <div class="text-white font-medium"><?php echo esc_html( $t['trigger_ticket'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['trigger_desc'] ); ?></div>
                </div>
              </div>

              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <div class="w-8 h-8 rounded-full bg-hubspot-teal/20 flex items-center justify-center text-hubspot-teal text-sm font-bold">2</div>
                <div>
                  <div class="text-white font-medium"><?php echo esc_html( $t['email_confirm'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['email_confirm_desc'] ); ?></div>
                </div>
              </div>

              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-3 rounded-lg bg-dark-900/50">
                <div class="w-8 h-8 rounded-full bg-hubspot-teal/20 flex items-center justify-center text-hubspot-teal text-sm font-bold">3</div>
                <div>
                  <div class="text-white font-medium"><?php echo esc_html( $t['delay_3days'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['delay_desc'] ); ?></div>
                </div>
              </div>

              <div class="flex justify-center">
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>

              <div class="flex items-center gap-4 p-3 rounded-lg bg-brand-green/10 border border-brand-green/30">
                <div class="w-8 h-8 rounded-full bg-brand-green/20 flex items-center justify-center text-brand-green text-sm font-bold">4</div>
                <div>
                  <div class="text-white font-medium"><?php echo esc_html( $t['email_preevent'] ); ?></div>
                  <div class="text-white/40 text-xs"><?php echo esc_html( $t['email_preevent_desc'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="reveal order-1 lg:order-2">
          <span class="text-hubspot-teal text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['mkt_label'] ); ?></span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['mkt_title_1'] ); ?><br><span class="text-gradient-hubspot"><?php echo esc_html( $t['mkt_title_2'] ); ?></span></h2>
          <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['mkt_desc'] ); ?></p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-hubspot-orange/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-hubspot-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['email_sequences'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['sequences_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-hubspot-teal/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-hubspot-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['dynamic_segment'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['segment_desc'] ); ?></p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-violet/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium"><?php echo esc_html( $t['lifecycle'] ); ?></div>
                <p class="text-white/50 text-sm"><?php echo esc_html( $t['lifecycle_desc'] ); ?></p>
              </div>
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
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['use_cases'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['hubspot_for'] ); ?> for<br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['for_events'] ); ?></span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-hubspot-orange/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-hubspot-orange/20 to-hubspot-coral/20 flex items-center justify-center mb-4"><span class="text-2xl">📊</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['mkt_segmentation'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['segment_mkt_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-hubspot-teal/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-hubspot-teal/20 to-hubspot-teal/10 flex items-center justify-center mb-4"><span class="text-2xl">💼</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['sales_pipeline'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['pipeline_case_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-hubspot-blue/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-hubspot-blue/20 to-hubspot-blue/10 flex items-center justify-center mb-4"><span class="text-2xl">🔄</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['client_lifecycle'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['lifecycle_case_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-violet/20 to-brand-violet/10 flex items-center justify-center mb-4"><span class="text-2xl">⚡</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['mkt_automation'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['auto_case_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-amber/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10 flex items-center justify-center mb-4"><span class="text-2xl">🏢</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['company_mgmt'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['company_desc'] ); ?></p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-green/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-green/20 to-brand-green/10 flex items-center justify-center mb-4"><span class="text-2xl">🎫</span></div>
          <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['support_integration'] ); ?></h3>
          <p class="text-white/50 text-sm"><?php echo esc_html( $t['support_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-hubspot-orange/10 to-hubspot-teal/10 rounded-3xl p-8 md:p-12 border border-hubspot-orange/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "<?php echo $t['testimonial_text']; ?>"
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-hubspot-orange to-hubspot-teal"></div>
            <div>
              <div class="font-semibold text-white">Elena D.</div>
              <div class="text-white/50"><?php echo esc_html( $t['testimonial_role'] ); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-hubspot-orange/15 via-transparent to-hubspot-teal/15"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(255,122,89,0.2) 0%, rgba(0,189,165,0.1) 100%);"></div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['cta_title_1'] ); ?><br><span class="text-gradient-hubspot">HubSpot</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['cta_desc'] ); ?></p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-hubspot-orange to-hubspot-coral text-white hover:scale-105 hover:shadow-glow-hubspot transition-all duration-300">
          <?php echo esc_html( $t['cta_connect'] ); ?>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          <?php echo esc_html( $t['questions_contact'] ); ?>
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3"><?php echo esc_html( $t['final_tagline'] ); ?></p>
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
