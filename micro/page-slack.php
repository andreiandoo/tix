<?php
/**
 * Template Name: Micro - Slack Integration
 * Description: Slack Integration - Notificări în timp real pentru echipa ta
 */

get_header();

// Multilingual support
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'               => $current_lang === 'ro' ? 'Notificări în Timp Real' : 'Real-Time Notifications',
	'hero_title'          => $current_lang === 'ro' ? 'Echipa ta,' : 'Your team,',
	'hero_title2'         => $current_lang === 'ro' ? 'mereu la curent' : 'always in sync',
	'hero_desc'           => $current_lang === 'ro' ? 'Comenzi noi, achiziții VIP, sumare zilnice - <strong class="text-white">direct în Slack</strong>. Echipa răspunde mai rapid, nu ratează nimic. Fără a părăsi workspace-ul.' : 'New orders, VIP purchases, daily summaries - <strong class="text-white">directly in Slack</strong>. The team responds faster, misses nothing. Without leaving the workspace.',
	'cta_connect'         => $current_lang === 'ro' ? 'Conectează Slack' : 'Connect Slack',
	'cta_see_notif'       => $current_lang === 'ro' ? 'Vezi notificările' : 'See notifications',
	'realtime_notif'      => $current_lang === 'ro' ? 'Notificări real-time' : 'Real-time notifications',
	'secure_conn'         => $current_lang === 'ro' ? 'Conexiune securizată' : 'Secure connection',
	'channels_workspaces' => $current_lang === 'ro' ? 'Canale & workspace-uri' : 'Channels & workspaces',

	// Sidebar
	'channels'            => $current_lang === 'ro' ? 'Canale' : 'Channels',
	'apps'                => $current_lang === 'ro' ? 'Aplicații' : 'Apps',
	'order_notif'         => $current_lang === 'ro' ? 'Notificări comenzi noi' : 'New order notifications',
	'channels_connected'  => $current_lang === 'ro' ? 'conectate' : 'connected',

	// Messages
	'new_order'           => $current_lang === 'ro' ? 'Comandă Nouă' : 'New Order',
	'vip_purchase'        => $current_lang === 'ro' ? 'Achiziție VIP' : 'VIP Purchase',
	'client'              => $current_lang === 'ro' ? 'Client:' : 'Client:',
	'total'               => $current_lang === 'ro' ? 'Total:' : 'Total:',
	'tickets'             => $current_lang === 'ro' ? 'Bilete:' : 'Tickets:',
	'view_order'          => $current_lang === 'ro' ? 'Vezi Comanda' : 'View Order',
	'contact'             => $current_lang === 'ro' ? 'Contactează' : 'Contact',
	'contact_client'      => $current_lang === 'ro' ? 'Contactează Clientul' : 'Contact Client',
	'now'                 => $current_lang === 'ro' ? 'acum' : 'now',
	'sold_out_alert'      => $current_lang === 'ro' ? 'Sold Out Alert!' : 'Sold Out Alert!',
	'early_bird_sold'     => $current_lang === 'ro' ? 'Early Bird tickets sunt acum sold out!' : 'Early Bird tickets are now sold out!',
	'preparing_report'    => $current_lang === 'ro' ? 'Tixello pregătește raportul zilnic...' : 'Tixello is preparing the daily report...',
	'connected_secure'    => $current_lang === 'ro' ? 'Conectat securizat' : 'Securely connected',

	// Notification Types
	'notif_badge'         => $current_lang === 'ro' ? 'Tipuri de Notificări' : 'Notification Types',
	'notif_title'         => $current_lang === 'ro' ? 'Tot ce contează,' : 'Everything that matters,',
	'notif_title2'        => $current_lang === 'ro' ? 'într-un singur loc' : 'in one place',
	'notif_desc'          => $current_lang === 'ro' ? 'De la comenzi noi până la sumare zilnice. Fiecare eveniment important ajunge la echipă.' : 'From new orders to daily summaries. Every important event reaches the team.',
	'order_desc'          => $current_lang === 'ro' ? 'Detalii complete: client, articole, total, link direct la comandă.' : 'Complete details: client, items, total, direct link to order.',
	'vip_desc'            => $current_lang === 'ro' ? 'Alertă specială pentru comenzi de mare valoare. Priorități highlight.' : 'Special alert for high-value orders. Priority highlights.',
	'refund'              => $current_lang === 'ro' ? 'Rambursare' : 'Refund',
	'refund_desc'         => $current_lang === 'ro' ? 'Sumă, motiv, detalii client. Echipa de suport știe imediat.' : 'Amount, reason, client details. Support team knows immediately.',
	'event_published'     => $current_lang === 'ro' ? 'Eveniment Publicat' : 'Event Published',
	'event_pub_desc'      => $current_lang === 'ro' ? 'Anunță marketing-ul când un eveniment nou e live. Link direct la pagina de bilete.' : 'Notify marketing when a new event is live. Direct link to ticket page.',
	'low_inventory'       => $current_lang === 'ro' ? 'Inventar Scăzut' : 'Low Inventory',
	'low_inv_desc'        => $current_lang === 'ro' ? 'Avertisment când biletele se apropie de sold out. Timp să reacționezi.' : 'Warning when tickets approach sold out. Time to react.',
	'daily_summary'       => $current_lang === 'ro' ? 'Sumar Zilnic' : 'Daily Summary',
	'daily_desc'          => $current_lang === 'ro' ? 'Recapitulare vânzări, numere participare, top evenimente. Fiecare dimineață.' : 'Sales recap, attendance numbers, top events. Every morning.',

	// Channel Routing
	'routing_badge'       => $current_lang === 'ro' ? 'Rutare Canale' : 'Channel Routing',
	'routing_title'       => $current_lang === 'ro' ? 'Mesajul potrivit,' : 'The right message,',
	'routing_title2'      => $current_lang === 'ro' ? 'în canalul potrivit' : 'in the right channel',
	'routing_desc'        => $current_lang === 'ro' ? 'Configurează ce notificări ajung unde. Vânzări în #sales, suport în #support, sărbătoriri în #general.' : 'Configure which notifications go where. Sales in #sales, support in #support, celebrations in #general.',
	'new_orders'          => $current_lang === 'ro' ? 'Comenzi noi' : 'New orders',
	'vip_purchases'       => $current_lang === 'ro' ? 'Achiziții VIP' : 'VIP Purchases',
	'refunds'             => $current_lang === 'ro' ? 'Rambursări' : 'Refunds',
	'events_published'    => $current_lang === 'ro' ? 'Evenimente publicate' : 'Published events',
	'routing_config'      => $current_lang === 'ro' ? 'Configurare Rutare' : 'Routing Configuration',

	// Block Kit
	'blockkit_badge'      => 'Block Kit',
	'blockkit_title'      => $current_lang === 'ro' ? 'Mesaje' : 'Messages',
	'blockkit_title2'     => $current_lang === 'ro' ? 'acționabile' : 'actionable',
	'blockkit_desc'       => $current_lang === 'ro' ? 'Formatare avansată cu Block Kit. Headers, butoane, câmpuri - totul nativ Slack.' : 'Advanced formatting with Block Kit. Headers, buttons, fields - all native Slack.',
	'event_label'         => $current_lang === 'ro' ? 'Eveniment' : 'Event',
	'tickets_label'       => $current_lang === 'ro' ? 'Bilete' : 'Tickets',
	'orders_label'        => $current_lang === 'ro' ? 'Comenzi' : 'Orders',
	'revenue'             => $current_lang === 'ro' ? 'Venituri' : 'Revenue',
	'tickets_sold'        => $current_lang === 'ro' ? 'Bilete vândute' : 'Tickets sold',
	'view_full_report'    => $current_lang === 'ro' ? 'Vezi Raport Complet' : 'View Full Report',
	'standard_notif'      => $current_lang === 'ro' ? 'Notificare comandă standard' : 'Standard order notification',
	'auto_daily'          => $current_lang === 'ro' ? 'Sumar zilnic automat' : 'Automatic daily summary',

	// Use Cases
	'usecases_badge'      => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
	'usecases_title'      => $current_lang === 'ro' ? 'Pentru' : 'For',
	'usecases_title2'     => $current_lang === 'ro' ? 'fiecare echipă' : 'every team',
	'sales_alerts'        => $current_lang === 'ro' ? 'Alerte Vânzări' : 'Sales Alerts',
	'sales_alerts_desc'   => $current_lang === 'ro' ? 'Notificări instant când intră comenzi. Achizițiile VIP alertează echipa de vânzări.' : 'Instant notifications when orders come in. VIP purchases alert the sales team.',
	'ops_coord'           => $current_lang === 'ro' ? 'Coordonare Operațiuni' : 'Operations Coordination',
	'ops_desc'            => $current_lang === 'ro' ? 'Actualizări în timp real în ziua evenimentului. Scanări, participare, capacitate.' : 'Real-time updates on event day. Scans, attendance, capacity.',
	'customer_service'    => $current_lang === 'ro' ? 'Serviciu Clienți' : 'Customer Service',
	'cs_desc'             => $current_lang === 'ro' ? 'Notificări rambursări și probleme clienți direct în canalele de suport.' : 'Refund and customer issue notifications directly in support channels.',
	'exec_visibility'     => $current_lang === 'ro' ? 'Vizibilitate Executivi' : 'Executive Visibility',
	'exec_desc'           => $current_lang === 'ro' ? 'Sumare în canalele de leadership. Milestone-uri sărbătorite company-wide.' : 'Summaries in leadership channels. Milestones celebrated company-wide.',
	'multi_team'          => $current_lang === 'ro' ? 'Multi-Echipă' : 'Multi-Team',
	'multi_team_desc'     => $current_lang === 'ro' ? 'Marketing, Finance, Ops - fiecare echipă primește informații relevante în canalele lor.' : 'Marketing, Finance, Ops - each team gets relevant information in their channels.',
	'remote_team'         => $current_lang === 'ro' ? 'Echipă Remote' : 'Remote Team',
	'remote_desc'         => $current_lang === 'ro' ? 'Echipe distribuite rămân conectate. Awareness asincron prin mesaje persistente.' : 'Distributed teams stay connected. Async awareness through persistent messages.',

	// Testimonial
	'testimonial'         => $current_lang === 'ro' ? 'Înainte verificam dashboard-ul de 20 de ori pe zi. Acum <span class="font-semibold text-gradient-slack">totul vine în Slack</span>. Echipa reacționează instant la comenzi VIP, iar sumarul de dimineață ne aliniază pe toți.' : 'Before I checked the dashboard 20 times a day. Now <span class="font-semibold text-gradient-slack">everything comes to Slack</span>. The team reacts instantly to VIP orders, and the morning summary aligns everyone.',

	// Final CTA
	'final_title'         => $current_lang === 'ro' ? 'Conectează' : 'Connect',
	'final_desc'          => $current_lang === 'ro' ? 'Notificări în timp real. Rutare inteligentă. Echipa ta, mereu la curent.' : 'Real-time notifications. Smart routing. Your team, always in sync.',
	'add_to_slack'        => $current_lang === 'ro' ? 'Adaugă la Slack' : 'Add to Slack',
	'cta_questions'       => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
	'final_tagline'       => $current_lang === 'ro' ? 'OAuth 2.0 securizat. Multi-workspace. Configurare în minute.' : 'Secure OAuth 2.0. Multi-workspace. Configure in minutes.',
];
?>

<style>
  ::selection { background: #4A154B; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-slack { background: linear-gradient(135deg, #E01E5A 0%, #ECB22E 25%, #2EB67D 50%, #36C5F0 75%, #4A154B 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(74, 21, 75, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Slack UI Styles */
  .slack-window { background: #1A1D21; border-radius: 12px; overflow: hidden; }
  .slack-sidebar { background: #3F0E40; }
  .slack-channel { transition: all 0.2s; }
  .slack-channel:hover { background: rgba(255,255,255,0.05); }
  .slack-channel.active { background: #1164A3; }
  .slack-channel.unread::before { content: ''; position: absolute; left: 0; top: 50%; transform: translateY(-50%); width: 4px; height: 8px; background: white; border-radius: 0 4px 4px 0; }

  /* Message styles */
  .slack-message { transition: background 0.2s; }
  .slack-message:hover { background: rgba(255,255,255,0.02); }
  .slack-avatar { width: 36px; height: 36px; border-radius: 4px; flex-shrink: 0; }
  .slack-username { color: #D1D2D3; font-weight: 700; }
  .slack-time { color: #ABABAD; font-size: 12px; }
  .slack-text { color: #D1D2D3; line-height: 1.5; }

  /* Block Kit styles */
  .block-header { color: white; font-weight: 900; font-size: 16px; }
  .block-section { background: rgba(255,255,255,0.03); border-left: 4px solid; padding: 8px 12px; border-radius: 0 4px 4px 0; }
  .block-field-label { color: #ABABAD; font-size: 12px; font-weight: 700; }
  .block-field-value { color: #D1D2D3; }
  .block-button { background: #007A5A; color: white; padding: 4px 12px; border-radius: 4px; font-size: 13px; font-weight: 700; transition: all 0.2s; }
  .block-button:hover { background: #148567; }
  .block-button.secondary { background: transparent; border: 1px solid rgba(255,255,255,0.2); }
  .block-button.secondary:hover { background: rgba(255,255,255,0.05); }

  /* Notification badge */
  .notification-badge { background: #E01E5A; color: white; font-size: 11px; font-weight: 700; min-width: 18px; height: 18px; border-radius: 9px; display: flex; align-items: center; justify-content: center; }

  /* Typing indicator */
  .typing-dot { width: 6px; height: 6px; background: #ABABAD; border-radius: 50%; }
  .typing-dot:nth-child(1) { animation-delay: 0s; }
  .typing-dot:nth-child(2) { animation-delay: 0.2s; }
  .typing-dot:nth-child(3) { animation-delay: 0.4s; }

  /* Emoji reactions */
  .slack-reaction { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 2px 8px; display: inline-flex; align-items: center; gap: 4px; font-size: 12px; transition: all 0.2s; }
  .slack-reaction:hover { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.2); }
  .slack-reaction.active { background: rgba(46, 182, 125, 0.2); border-color: #2EB67D; }

  /* Custom keyframes */
  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }
  @keyframes messageIn {
    0% { transform: translateY(10px); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
  }
  @keyframes channelPulse {
    0%, 100% { background-color: rgba(46, 182, 125, 0.1); }
    50% { background-color: rgba(46, 182, 125, 0.2); }
  }
  @keyframes dotBounce {
    0%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-6px); }
  }
  .animate-message-in { animation: messageIn 0.3s ease-out forwards; }
  .animate-channel-pulse { animation: channelPulse 2s ease-in-out infinite; }
  .animate-dot-bounce { animation: dotBounce 1.4s ease-in-out infinite; }
</style>

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200" x-data="{ mobileMenu: false }">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #E01E5A, #ECB22E, #2EB67D, #36C5F0);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-slack-aubergine/30 rounded-full -top-60 -left-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-slack-green/15 rounded-full bottom-0 -right-40 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[400px] h-[400px] bg-slack-blue/10 rounded-full top-1/2 left-1/2 blur-[150px] pointer-events-none"></div>

    <!-- Floating Slack elements -->
    <div class="absolute text-2xl top-32 left-16 opacity-20 animate-float">#️⃣</div>
    <div class="absolute text-xl bottom-40 right-24 opacity-20 animate-float" style="animation-delay: 1s;">🔔</div>
    <div class="absolute text-3xl top-1/2 right-16 opacity-10 animate-float" style="animation-delay: 2s;">💬</div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-slack-aubergine/20 border-slack-aubergine/30">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
              <path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313zM8.834 5.042a2.528 2.528 0 0 1-2.521-2.52A2.528 2.528 0 0 1 8.834 0a2.528 2.528 0 0 1 2.521 2.522v2.52H8.834zM8.834 6.313a2.528 2.528 0 0 1 2.521 2.521 2.528 2.528 0 0 1-2.521 2.521H2.522A2.528 2.528 0 0 1 0 8.834a2.528 2.528 0 0 1 2.522-2.521h6.312zM18.956 8.834a2.528 2.528 0 0 1 2.522-2.521A2.528 2.528 0 0 1 24 8.834a2.528 2.528 0 0 1-2.522 2.521h-2.522V8.834zM17.688 8.834a2.528 2.528 0 0 1-2.523 2.521 2.527 2.527 0 0 1-2.52-2.521V2.522A2.527 2.527 0 0 1 15.165 0a2.528 2.528 0 0 1 2.523 2.522v6.312zM15.165 18.956a2.528 2.528 0 0 1 2.523 2.522A2.528 2.528 0 0 1 15.165 24a2.527 2.527 0 0 1-2.52-2.522v-2.522h2.52zM15.165 17.688a2.527 2.527 0 0 1-2.52-2.523 2.526 2.526 0 0 1 2.52-2.52h6.313A2.527 2.527 0 0 1 24 15.165a2.528 2.528 0 0 1-2.522 2.523h-6.313z" fill="#E01E5A"/>
              <path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52z" fill="#E01E5A"/>
              <path d="M6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313z" fill="#E01E5A"/>
              <path d="M8.834 5.042a2.528 2.528 0 0 1-2.521-2.52A2.528 2.528 0 0 1 8.834 0a2.528 2.528 0 0 1 2.521 2.522v2.52H8.834z" fill="#36C5F0"/>
              <path d="M8.834 6.313a2.528 2.528 0 0 1 2.521 2.521 2.528 2.528 0 0 1-2.521 2.521H2.522A2.528 2.528 0 0 1 0 8.834a2.528 2.528 0 0 1 2.522-2.521h6.312z" fill="#36C5F0"/>
              <path d="M18.956 8.834a2.528 2.528 0 0 1 2.522-2.521A2.528 2.528 0 0 1 24 8.834a2.528 2.528 0 0 1-2.522 2.521h-2.522V8.834z" fill="#2EB67D"/>
              <path d="M17.688 8.834a2.528 2.528 0 0 1-2.523 2.521 2.527 2.527 0 0 1-2.52-2.521V2.522A2.527 2.527 0 0 1 15.165 0a2.528 2.528 0 0 1 2.523 2.522v6.312z" fill="#2EB67D"/>
              <path d="M15.165 18.956a2.528 2.528 0 0 1 2.523 2.522A2.528 2.528 0 0 1 15.165 24a2.527 2.527 0 0 1-2.52-2.522v-2.522h2.52z" fill="#ECB22E"/>
              <path d="M15.165 17.688a2.527 2.527 0 0 1-2.52-2.523 2.526 2.526 0 0 1 2.52-2.52h6.313A2.527 2.527 0 0 1 24 15.165a2.528 2.528 0 0 1-2.522 2.523h-6.313z" fill="#ECB22E"/>
            </svg>
            <span class="text-sm font-medium text-white/70"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-slack"><?php echo esc_html( $t['hero_title2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 rounded-full group bg-slack-aubergine hover:bg-slack-sidebar hover:scale-105 hover:shadow-glow-slack">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313z"/></svg>
              <?php echo esc_html( $t['cta_connect'] ); ?>
              <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#notificari" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              <?php echo esc_html( $t['cta_see_notif'] ); ?>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-bold font-display text-slack-green">Instant</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['realtime_notif'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold text-white font-display">OAuth</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['secure_conn'] ); ?></div>
            </div>
            <div>
              <div class="text-3xl font-bold font-display text-slack-blue">∞</div>
              <div class="text-sm text-white/40"><?php echo esc_html( $t['channels_workspaces'] ); ?></div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Slack Window Mockup -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            messages: [
              { id: 1, visible: true },
              { id: 2, visible: true },
              { id: 3, visible: false }
            ],
            showNew: false
          }" x-init="setTimeout(() => { messages[2].visible = true; showNew = true; }, 2000)">

            <!-- Slack Window -->
            <div class="border shadow-2xl slack-window border-white/10">
              <!-- Title Bar -->
              <div class="flex items-center justify-between px-4 py-3 border-b bg-slack-sidebar border-white/10">
                <div class="flex items-center gap-2">
                  <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                  <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                  <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                </div>
                <div class="text-sm text-white/40">Tixello Events</div>
                <div class="w-16"></div>
              </div>

              <div class="flex" style="height: 380px;">
                <!-- Sidebar -->
                <div class="flex-shrink-0 w-56 p-3 border-r slack-sidebar border-white/10">
                  <!-- Workspace -->
                  <div class="flex items-center gap-2 px-2 mb-4">
                    <div class="flex items-center justify-center w-8 h-8 text-sm font-bold text-white rounded-lg bg-gradient-to-br from-slack-pink to-slack-yellow">TE</div>
                    <div>
                      <div class="text-sm font-bold text-white">Tixello Events</div>
                      <div class="flex items-center gap-1 text-xs text-slack-muted">
                        <span class="w-2 h-2 rounded-full bg-slack-green"></span>
                        Online
                      </div>
                    </div>
                  </div>

                  <!-- Channels -->
                  <div class="mb-4">
                    <div class="px-2 mb-2 text-xs tracking-wider uppercase text-slack-muted"><?php echo esc_html( $t['channels'] ); ?></div>
                    <div class="space-y-0.5">
                      <div class="relative flex items-center gap-2 px-2 py-1 rounded cursor-pointer slack-channel">
                        <span class="text-slack-muted">#</span>
                        <span class="text-sm text-slack-text">general</span>
                      </div>
                      <div class="relative flex items-center gap-2 px-2 py-1 rounded cursor-pointer slack-channel active">
                        <span class="text-white">#</span>
                        <span class="text-sm font-bold text-white">sales</span>
                        <span class="ml-auto notification-badge" x-show="showNew" x-transition>3</span>
                      </div>
                      <div class="relative flex items-center gap-2 px-2 py-1 rounded cursor-pointer slack-channel unread">
                        <span class="text-white">#</span>
                        <span class="text-sm font-bold text-white">vip-alerts</span>
                      </div>
                      <div class="relative flex items-center gap-2 px-2 py-1 rounded cursor-pointer slack-channel">
                        <span class="text-slack-muted">#</span>
                        <span class="text-sm text-slack-text">support</span>
                      </div>
                      <div class="relative flex items-center gap-2 px-2 py-1 rounded cursor-pointer slack-channel">
                        <span class="text-slack-muted">#</span>
                        <span class="text-sm text-slack-text">marketing</span>
                      </div>
                    </div>
                  </div>

                  <!-- Apps -->
                  <div>
                    <div class="px-2 mb-2 text-xs tracking-wider uppercase text-slack-muted"><?php echo esc_html( $t['apps'] ); ?></div>
                    <div class="relative flex items-center gap-2 px-2 py-1 rounded cursor-pointer slack-channel animate-channel-pulse">
                      <div class="flex items-center justify-center w-5 h-5 rounded bg-gradient-to-br from-brand-violet to-brand-cyan">
                        <span class="text-xs font-bold text-white">T</span>
                      </div>
                      <span class="text-sm text-slack-text">Tixello</span>
                      <span class="w-2 h-2 ml-auto rounded-full bg-slack-green"></span>
                    </div>
                  </div>
                </div>

                <!-- Main Content -->
                <div class="flex flex-col flex-1 bg-slack-dark">
                  <!-- Channel Header -->
                  <div class="flex items-center justify-between px-4 py-3 border-b border-white/10">
                    <div class="flex items-center gap-2">
                      <span class="font-bold text-white"># sales</span>
                      <span class="text-sm text-slack-muted">|</span>
                      <span class="text-sm text-slack-muted"><?php echo esc_html( $t['order_notif'] ); ?></span>
                    </div>
                    <div class="flex items-center gap-2">
                      <span class="text-sm text-slack-muted">👥 12</span>
                    </div>
                  </div>

                  <!-- Messages -->
                  <div class="flex-1 p-4 space-y-4 overflow-y-auto">
                    <!-- Message 1 -->
                    <div class="px-2 py-1 rounded slack-message" x-show="messages[0].visible">
                      <div class="flex gap-3">
                        <div class="flex items-center justify-center slack-avatar bg-gradient-to-br from-brand-violet to-brand-cyan">
                          <span class="text-xs font-bold text-white">T</span>
                        </div>
                        <div class="flex-1 min-w-0">
                          <div class="flex items-center gap-2 mb-1">
                            <span class="slack-username">Tixello</span>
                            <span class="px-1.5 py-0.5 rounded bg-slack-green/20 text-slack-green text-xs">APP</span>
                            <span class="slack-time">10:23</span>
                          </div>
                          <div class="mb-2 block-section border-slack-green">
                            <div class="mb-2 block-header">🎫 <?php echo esc_html( $t['new_order'] ); ?> #1847</div>
                            <div class="grid grid-cols-2 gap-2 text-sm">
                              <div><span class="block-field-label"><?php echo esc_html( $t['client'] ); ?></span><br><span class="block-field-value">Maria Ionescu</span></div>
                              <div><span class="block-field-label"><?php echo esc_html( $t['total'] ); ?></span><br><span class="font-bold block-field-value text-slack-green">€75.00</span></div>
                            </div>
                          </div>
                          <div class="flex gap-2">
                            <button class="block-button"><?php echo esc_html( $t['view_order'] ); ?></button>
                            <button class="block-button secondary"><?php echo esc_html( $t['contact'] ); ?></button>
                          </div>
                          <div class="flex gap-2 mt-2">
                            <span class="slack-reaction active">✅ <span class="text-slack-text">2</span></span>
                            <span class="slack-reaction">👀 <span class="text-slack-text">1</span></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Message 2 -->
                    <div class="px-2 py-1 rounded slack-message" x-show="messages[1].visible">
                      <div class="flex gap-3">
                        <div class="flex items-center justify-center slack-avatar bg-gradient-to-br from-brand-violet to-brand-cyan">
                          <span class="text-xs font-bold text-white">T</span>
                        </div>
                        <div class="flex-1 min-w-0">
                          <div class="flex items-center gap-2 mb-1">
                            <span class="slack-username">Tixello</span>
                            <span class="px-1.5 py-0.5 rounded bg-slack-green/20 text-slack-green text-xs">APP</span>
                            <span class="slack-time">10:45</span>
                          </div>
                          <div class="mb-2 block-section border-slack-yellow">
                            <div class="mb-2 block-header">👑 <?php echo esc_html( $t['vip_purchase'] ); ?> #1848</div>
                            <div class="grid grid-cols-2 gap-2 text-sm">
                              <div><span class="block-field-label"><?php echo esc_html( $t['client'] ); ?></span><br><span class="block-field-value">Alexandru Popa</span></div>
                              <div><span class="block-field-label"><?php echo esc_html( $t['total'] ); ?></span><br><span class="font-bold block-field-value text-slack-yellow">€450.00</span></div>
                            </div>
                            <div class="mt-2 text-sm"><span class="block-field-label"><?php echo esc_html( $t['tickets'] ); ?></span> 3x VIP Pass - Summer Fest</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Message 3 - New -->
                    <div class="px-2 py-1 rounded slack-message animate-message-in" x-show="messages[2].visible" x-transition>
                      <div class="flex gap-3">
                        <div class="flex items-center justify-center slack-avatar bg-gradient-to-br from-brand-violet to-brand-cyan">
                          <span class="text-xs font-bold text-white">T</span>
                        </div>
                        <div class="flex-1 min-w-0">
                          <div class="flex items-center gap-2 mb-1">
                            <span class="slack-username">Tixello</span>
                            <span class="px-1.5 py-0.5 rounded bg-slack-green/20 text-slack-green text-xs">APP</span>
                            <span class="slack-time"><?php echo esc_html( $t['now'] ); ?></span>
                            <span class="px-1.5 py-0.5 rounded bg-slack-pink/20 text-slack-pink text-xs animate-pulse"><?php echo $current_lang === 'ro' ? 'NOU' : 'NEW'; ?></span>
                          </div>
                          <div class="mb-2 block-section border-slack-blue">
                            <div class="mb-2 block-header">🎉 <?php echo esc_html( $t['sold_out_alert'] ); ?></div>
                            <div class="text-sm text-slack-text">
                              <strong>Summer Fest 2025</strong> - <?php echo esc_html( $t['early_bird_sold'] ); ?> 🔥
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Typing indicator -->
                  <div class="px-4 py-2 border-t border-white/10">
                    <div class="flex items-center gap-2 text-sm text-slack-muted">
                      <div class="flex gap-1">
                        <span class="typing-dot animate-dot-bounce"></span>
                        <span class="typing-dot animate-dot-bounce"></span>
                        <span class="typing-dot animate-dot-bounce"></span>
                      </div>
                      <span><?php echo esc_html( $t['preparing_report'] ); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating OAuth Badge -->
            <div class="absolute z-10 px-4 py-3 border shadow-xl -top-4 -left-4 bg-dark-800 rounded-xl border-slack-green/30 animate-float">
              <div class="flex items-center gap-2">
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-slack-green/20">
                  <svg class="w-4 h-4 text-slack-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-slack-green">OAuth 2.0</div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['connected_secure'] ); ?></div>
                </div>
              </div>
            </div>

            <!-- Floating Channel Badge -->
            <div class="absolute -bottom-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-slack-aubergine/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <span class="text-2xl">#️⃣</span>
                <div>
                  <div class="text-sm font-medium text-white">15 <?php echo $current_lang === 'ro' ? 'canale' : 'channels'; ?></div>
                  <div class="text-xs text-white/40"><?php echo esc_html( $t['channels_connected'] ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== NOTIFICATION TYPES ==================== -->
  <section class="relative py-24 overflow-hidden" id="notificari">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-slack-green"><?php echo esc_html( $t['notif_badge'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['notif_title'] ); ?><br><span class="text-gradient-slack"><?php echo esc_html( $t['notif_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['notif_desc'] ); ?></p>
      </div>

      <!-- Notification Types Grid -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- Order Created -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-slack-green/30 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-slack-green/20">
              <span class="text-2xl">🎫</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['new_order'] ); ?></h3>
              <div class="font-mono text-xs text-slack-green">order_created</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['order_desc'] ); ?></p>
          <div class="flex items-center gap-2 text-xs text-white/30">
            <span class="px-2 py-1 rounded bg-white/5">#sales</span>
            <span class="px-2 py-1 rounded bg-white/5">#orders</span>
          </div>
        </div>

        <!-- VIP Purchase -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-slack-yellow/30 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-slack-yellow/20">
              <span class="text-2xl">👑</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['vip_purchase'] ); ?></h3>
              <div class="font-mono text-xs text-slack-yellow">vip_purchase</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['vip_desc'] ); ?></p>
          <div class="flex items-center gap-2 text-xs text-white/30">
            <span class="px-2 py-1 rounded bg-white/5">#vip-alerts</span>
          </div>
        </div>

        <!-- Refund Issued -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-slack-pink/30 reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-slack-pink/20">
              <span class="text-2xl">↩️</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['refund'] ); ?></h3>
              <div class="font-mono text-xs text-slack-pink">refund_issued</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['refund_desc'] ); ?></p>
          <div class="flex items-center gap-2 text-xs text-white/30">
            <span class="px-2 py-1 rounded bg-white/5">#support</span>
            <span class="px-2 py-1 rounded bg-white/5">#finance</span>
          </div>
        </div>

        <!-- Event Published -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-slack-blue/30 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-slack-blue/20">
              <span class="text-2xl">🚀</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['event_published'] ); ?></h3>
              <div class="font-mono text-xs text-slack-blue">event_published</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['event_pub_desc'] ); ?></p>
          <div class="flex items-center gap-2 text-xs text-white/30">
            <span class="px-2 py-1 rounded bg-white/5">#marketing</span>
          </div>
        </div>

        <!-- Low Inventory -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-amber/30 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-brand-amber/20">
              <span class="text-2xl">⚠️</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['low_inventory'] ); ?></h3>
              <div class="font-mono text-xs text-brand-amber">low_inventory</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['low_inv_desc'] ); ?></p>
          <div class="flex items-center gap-2 text-xs text-white/30">
            <span class="px-2 py-1 rounded bg-white/5">#operations</span>
          </div>
        </div>

        <!-- Daily Summary -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-violet/30 reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-brand-violet/20">
              <span class="text-2xl">📊</span>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['daily_summary'] ); ?></h3>
              <div class="font-mono text-xs text-brand-violet">daily_summary</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['daily_desc'] ); ?></p>
          <div class="flex items-center gap-2 text-xs text-white/30">
            <span class="px-2 py-1 rounded bg-white/5">#leadership</span>
            <span class="px-2 py-1 rounded bg-white/5">#general</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CHANNEL ROUTING ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-slack-blue"><?php echo esc_html( $t['routing_badge'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['routing_title'] ); ?><br><span class="text-gradient-slack"><?php echo esc_html( $t['routing_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['routing_desc'] ); ?></p>

          <div class="space-y-4">
            <!-- Sales Route -->
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-slack-green/20">
                <span class="text-lg">🎫</span>
              </div>
              <div class="flex-1">
                <span class="font-medium text-white"><?php echo esc_html( $t['new_orders'] ); ?></span>
              </div>
              <svg class="w-5 h-5 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
              <span class="px-3 py-1 text-sm font-medium text-white rounded-full bg-slack-active"># sales</span>
            </div>

            <!-- VIP Route -->
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-slack-yellow/20">
                <span class="text-lg">👑</span>
              </div>
              <div class="flex-1">
                <span class="font-medium text-white"><?php echo esc_html( $t['vip_purchases'] ); ?></span>
              </div>
              <svg class="w-5 h-5 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
              <span class="px-3 py-1 text-sm font-medium text-white rounded-full bg-slack-active"># vip-alerts</span>
            </div>

            <!-- Support Route -->
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-slack-pink/20">
                <span class="text-lg">↩️</span>
              </div>
              <div class="flex-1">
                <span class="font-medium text-white"><?php echo esc_html( $t['refunds'] ); ?></span>
              </div>
              <svg class="w-5 h-5 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
              <span class="px-3 py-1 text-sm font-medium text-white rounded-full bg-slack-active"># support</span>
            </div>

            <!-- Marketing Route -->
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-slack-blue/20">
                <span class="text-lg">🚀</span>
              </div>
              <div class="flex-1">
                <span class="font-medium text-white"><?php echo esc_html( $t['events_published'] ); ?></span>
              </div>
              <svg class="w-5 h-5 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
              <span class="px-3 py-1 text-sm font-medium text-white rounded-full bg-slack-active"># marketing</span>
            </div>
          </div>
        </div>

        <!-- Visual - Config Preview -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <div class="flex items-center gap-3 mb-4">
              <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-slack-aubergine/20">
                <svg class="w-5 h-5 text-slack-aubergine" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </div>
              <div>
                <div class="font-semibold text-white"><?php echo esc_html( $t['routing_config'] ); ?></div>
                <div class="text-xs text-white/40">slack_routing.php</div>
              </div>
            </div>

            <div class="p-4 overflow-x-auto font-mono text-sm bg-dark-900 rounded-xl">
              <div class="text-slack-pink">'slack_routing'</div>
              <div class="ml-4 text-white/50">=&gt; [</div>
              <div class="ml-8">
                <span class="text-slack-green">'order_created'</span>
                <span class="text-white/50"> =&gt; [</span>
                <span class="text-slack-yellow">'#sales'</span>
                <span class="text-white/50">],</span>
              </div>
              <div class="ml-8">
                <span class="text-slack-green">'vip_purchase'</span>
                <span class="text-white/50"> =&gt; [</span>
                <span class="text-slack-yellow">'#vip-alerts'</span>
                <span class="text-white/50">],</span>
              </div>
              <div class="ml-8">
                <span class="text-slack-green">'refund_issued'</span>
                <span class="text-white/50"> =&gt; [</span>
                <span class="text-slack-yellow">'#support'</span>
                <span class="text-white/50">,</span>
                <span class="text-slack-yellow">'#finance'</span>
                <span class="text-white/50">],</span>
              </div>
              <div class="ml-8">
                <span class="text-slack-green">'event_published'</span>
                <span class="text-white/50"> =&gt; [</span>
                <span class="text-slack-yellow">'#marketing'</span>
                <span class="text-white/50">],</span>
              </div>
              <div class="ml-8">
                <span class="text-slack-green">'daily_summary'</span>
                <span class="text-white/50"> =&gt; [</span>
                <span class="text-slack-yellow">'#leadership'</span>
                <span class="text-white/50">],</span>
              </div>
              <div class="ml-4 text-white/50">]</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== BLOCK KIT ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-slack-aubergine"><?php echo esc_html( $t['blockkit_badge'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['blockkit_title'] ); ?><br><span class="text-gradient-slack"><?php echo esc_html( $t['blockkit_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['blockkit_desc'] ); ?></p>
      </div>

      <!-- Block Kit Examples -->
      <div class="grid gap-8 md:grid-cols-2">
        <!-- Order Notification -->
        <div class="reveal">
          <div class="p-4 border bg-slack-dark rounded-xl border-white/10">
            <div class="flex gap-3">
              <div class="flex items-center justify-center flex-shrink-0 slack-avatar bg-gradient-to-br from-brand-violet to-brand-cyan">
                <span class="text-xs font-bold text-white">T</span>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2 mb-2">
                  <span class="slack-username">Tixello</span>
                  <span class="px-1.5 py-0.5 rounded bg-slack-green/20 text-slack-green text-xs">APP</span>
                  <span class="slack-time">14:32</span>
                </div>

                <!-- Block: Header -->
                <div class="mb-3 block-header">🎫 <?php echo esc_html( $t['new_order'] ); ?> #1847</div>

                <!-- Block: Divider -->
                <div class="my-3 border-t border-white/10"></div>

                <!-- Block: Section with fields -->
                <div class="grid grid-cols-2 gap-4 mb-3">
                  <div>
                    <div class="block-field-label"><?php echo esc_html( $t['client'] ); ?></div>
                    <div class="block-field-value">Maria Ionescu</div>
                  </div>
                  <div>
                    <div class="block-field-label"><?php echo esc_html( $t['total'] ); ?></div>
                    <div class="font-bold block-field-value text-slack-green">€75.00</div>
                  </div>
                  <div>
                    <div class="block-field-label"><?php echo esc_html( $t['event_label'] ); ?></div>
                    <div class="block-field-value">Summer Fest 2025</div>
                  </div>
                  <div>
                    <div class="block-field-label"><?php echo esc_html( $t['tickets_label'] ); ?></div>
                    <div class="block-field-value">2x General Admission</div>
                  </div>
                </div>

                <!-- Block: Actions -->
                <div class="flex gap-2">
                  <button class="block-button"><?php echo esc_html( $t['view_order'] ); ?></button>
                  <button class="block-button secondary"><?php echo esc_html( $t['contact_client'] ); ?></button>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-3 text-sm text-center text-white/40"><?php echo esc_html( $t['standard_notif'] ); ?></div>
        </div>

        <!-- Daily Summary -->
        <div class="reveal reveal-delay-1">
          <div class="p-4 border bg-slack-dark rounded-xl border-white/10">
            <div class="flex gap-3">
              <div class="flex items-center justify-center flex-shrink-0 slack-avatar bg-gradient-to-br from-brand-violet to-brand-cyan">
                <span class="text-xs font-bold text-white">T</span>
              </div>
              <div class="flex-1">
                <div class="flex items-center gap-2 mb-2">
                  <span class="slack-username">Tixello</span>
                  <span class="px-1.5 py-0.5 rounded bg-slack-green/20 text-slack-green text-xs">APP</span>
                  <span class="slack-time">09:00</span>
                </div>

                <!-- Block: Header -->
                <div class="mb-3 block-header">📊 <?php echo esc_html( $t['daily_summary'] ); ?> - 14 Dec 2025</div>

                <!-- Block: Section -->
                <div class="mb-3 block-section border-brand-violet">
                  <div class="grid grid-cols-3 gap-4 text-center">
                    <div>
                      <div class="text-2xl font-bold text-white">47</div>
                      <div class="block-field-label"><?php echo esc_html( $t['orders_label'] ); ?></div>
                    </div>
                    <div>
                      <div class="text-2xl font-bold text-slack-green">€3,420</div>
                      <div class="block-field-label"><?php echo esc_html( $t['revenue'] ); ?></div>
                    </div>
                    <div>
                      <div class="text-2xl font-bold text-slack-blue">156</div>
                      <div class="block-field-label"><?php echo esc_html( $t['tickets_sold'] ); ?></div>
                    </div>
                  </div>
                </div>

                <!-- Block: Context -->
                <div class="mb-3 text-sm text-slack-muted">
                  📈 +12% vs. <?php echo $current_lang === 'ro' ? 'ieri' : 'yesterday'; ?> | Top: Summer Fest (89 <?php echo $current_lang === 'ro' ? 'bilete' : 'tickets'; ?>)
                </div>

                <!-- Block: Actions -->
                <div class="flex gap-2">
                  <button class="block-button"><?php echo esc_html( $t['view_full_report'] ); ?></button>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-3 text-sm text-center text-white/40"><?php echo esc_html( $t['auto_daily'] ); ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-brand-violet"><?php echo esc_html( $t['usecases_badge'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['usecases_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['usecases_title2'] ); ?></span></h2>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-slack-green/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-slack-green/20"><span class="text-2xl">💰</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['sales_alerts'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['sales_alerts_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-slack-blue/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-slack-blue/20"><span class="text-2xl">⚙️</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['ops_coord'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['ops_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-slack-pink/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-slack-pink/20"><span class="text-2xl">🎧</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['customer_service'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['cs_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-violet/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-violet/20"><span class="text-2xl">📈</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['exec_visibility'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['exec_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-slack-yellow/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-slack-yellow/20"><span class="text-2xl">👥</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['multi_team'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['multi_team_desc'] ); ?></p>
        </div>

        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-cyan/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-brand-cyan/20"><span class="text-2xl">🌍</span></div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['remote_team'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['remote_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-slack-aubergine/20 to-slack-green/10 rounded-3xl md:p-12 border-slack-aubergine/20">
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
            <div class="rounded-full w-14 h-14 bg-gradient-to-br from-slack-aubergine to-slack-green"></div>
            <div>
              <div class="font-semibold text-white">Cristina B.</div>
              <div class="text-white/50">Head of Operations, Neversea</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-slack-aubergine/20 via-transparent to-slack-green/20"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(74,21,75,0.3) 0%, rgba(46,182,125,0.2) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-10 animate-float">
      <svg class="w-16 h-16" viewBox="0 0 24 24" fill="#4A154B"><path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313z"/></svg>
    </div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal"><?php echo esc_html( $t['final_title'] ); ?><br><span class="text-gradient-slack">Slack</span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 rounded-full group bg-slack-aubergine hover:bg-slack-sidebar hover:scale-105 hover:shadow-glow-slack">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52z"/></svg>
          <?php echo esc_html( $t['add_to_slack'] ); ?>
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
