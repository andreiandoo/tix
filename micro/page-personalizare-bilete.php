<?php
/**
 * Template Name: Micro - Personalizare Bilete
 * Description: Ticket Design Editor - WYSIWYG drag-and-drop pentru bilete personalizate
 */

get_header();

$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
	// Hero
	'badge'                   => $current_lang === 'ro' ? 'Editor WYSIWYG · Drag & Drop' : 'WYSIWYG Editor · Drag & Drop',
	'hero_title'              => $current_lang === 'ro' ? 'Designează' : 'Design',
	'hero_title2'             => $current_lang === 'ro' ? 'bilete unice' : 'unique tickets',
	'hero_desc'               => $current_lang === 'ro'
		? 'Editor vizual <strong class="text-white">drag-and-drop</strong> pentru bilete profesionale. Logo, fonturi, culori, coduri QR - tot ce ai nevoie pentru bilete care reflectă <strong class="text-white">brandul tău</strong>.'
		: 'Visual <strong class="text-white">drag-and-drop</strong> editor for professional tickets. Logo, fonts, colors, QR codes - everything you need for tickets that reflect <strong class="text-white">your brand</strong>.',
	'cta_open_editor'         => $current_lang === 'ro' ? 'Deschide Editorul' : 'Open Editor',
	'cta_features'            => $current_lang === 'ro' ? 'Vezi funcționalități' : 'See features',
	'feat_mm'                 => $current_lang === 'ro' ? 'Măsurători mm precise' : 'Precise mm measurements',
	'feat_export'             => $current_lang === 'ro' ? 'Export PDF/PNG' : 'PDF/PNG Export',
	'feat_variables'          => $current_lang === 'ro' ? 'Variabile dinamice' : 'Dynamic variables',
	'saved'                   => $current_lang === 'ro' ? 'Salvat' : 'Saved',
	'layers'                  => $current_lang === 'ro' ? 'Layers' : 'Layers',
	'layer_event_name'        => $current_lang === 'ro' ? 'Event Name' : 'Event Name',
	'layer_qr'                => $current_lang === 'ro' ? 'QR Code' : 'QR Code',
	'layer_date'              => $current_lang === 'ro' ? 'Date & Time' : 'Date & Time',
	'layer_vip'               => $current_lang === 'ro' ? 'VIP Badge' : 'VIP Badge',
	'layer_venue'             => $current_lang === 'ro' ? 'Venue' : 'Venue',
	'layer_seat'              => $current_lang === 'ro' ? 'Seat Info' : 'Seat Info',

	// Layer Types Section
	'layer_types_label'       => $current_lang === 'ro' ? 'Tipuri de Layer-uri' : 'Layer Types',
	'layer_types_title'       => $current_lang === 'ro' ? 'Toate uneltele de care' : 'All the tools you',
	'layer_types_title2'      => $current_lang === 'ro' ? 'ai nevoie' : 'need',
	'layer_types_desc'        => $current_lang === 'ro' ? 'Sistem de layer-uri ca în software-ul profesional de design.' : 'Layer system like in professional design software.',
	'text_title'              => $current_lang === 'ro' ? 'Text' : 'Text',
	'text_desc'               => $current_lang === 'ro' ? 'Fonturi personalizate, dimensiuni, culori și aliniere. Suport pentru text static sau variabile dinamice.' : 'Custom fonts, sizes, colors and alignment. Support for static text or dynamic variables.',
	'images_title'            => $current_lang === 'ro' ? 'Imagini' : 'Images',
	'images_desc'             => $current_lang === 'ro' ? 'Încarcă logo-uri, fotografii și grafice. Controlează fit, poziție și opacitate.' : 'Upload logos, photos and graphics. Control fit, position and opacity.',
	'qr_title'                => $current_lang === 'ro' ? 'Cod QR' : 'QR Code',
	'qr_desc'                 => $current_lang === 'ro' ? 'Coduri QR dinamice cu nivel configurabil de corecție eroare (L, M, Q, H).' : 'Dynamic QR codes with configurable error correction level (L, M, Q, H).',
	'qr_dynamic'              => $current_lang === 'ro' ? 'Dinamic' : 'Dynamic',
	'barcode_title'           => $current_lang === 'ro' ? 'Cod de Bare' : 'Barcode',
	'barcode_desc'            => $current_lang === 'ro' ? 'Multiple formate suportate pentru compatibilitate maximă cu scanerele.' : 'Multiple formats supported for maximum scanner compatibility.',
	'shapes_title'            => $current_lang === 'ro' ? 'Forme' : 'Shapes',
	'shapes_desc'             => $current_lang === 'ro' ? 'Dreptunghiuri, cercuri și linii cu opțiuni de fill, stroke și rotație.' : 'Rectangles, circles and lines with fill, stroke and rotation options.',
	'bg_title'                => $current_lang === 'ro' ? 'Background' : 'Background',
	'bg_desc'                 => $current_lang === 'ro' ? 'Culoare solidă sau imagine de fundal pentru întregul bilet.' : 'Solid color or background image for the entire ticket.',

	// Variables Section
	'vars_label'              => $current_lang === 'ro' ? 'Variabile Dinamice' : 'Dynamic Variables',
	'vars_title'              => $current_lang === 'ro' ? 'Fiecare bilet,' : 'Each ticket,',
	'vars_title2'             => $current_lang === 'ro' ? 'unic' : 'unique',
	'vars_desc'               => $current_lang === 'ro'
		? 'Inserează placeholder-uri care se populează automat cu datele reale când biletele sunt generate. Nu mai e nevoie de editare manuală.'
		: 'Insert placeholders that automatically populate with real data when tickets are generated. No more manual editing needed.',
	'var_event'               => $current_lang === 'ro' ? 'Eveniment' : 'Event',
	'var_venue'               => $current_lang === 'ro' ? 'Locație' : 'Venue',
	'var_ticket'              => $current_lang === 'ro' ? 'Bilet' : 'Ticket',
	'var_codes'               => $current_lang === 'ro' ? 'Coduri' : 'Codes',
	'template'                => $current_lang === 'ro' ? 'Template' : 'Template',
	'generated'               => $current_lang === 'ro' ? 'Generat' : 'Generated',

	// Preset Sizes Section
	'presets_label'           => $current_lang === 'ro' ? 'Dimensiuni Prestabilite' : 'Preset Sizes',
	'presets_title'           => $current_lang === 'ro' ? 'Formate pentru' : 'Formats for',
	'presets_title2'          => $current_lang === 'ro' ? 'orice nevoie' : 'every need',
	'presets_desc'            => $current_lang === 'ro' ? 'Alege din preset-uri sau creează dimensiuni personalizate.' : 'Choose from presets or create custom dimensions.',
	'preset_standard'         => $current_lang === 'ro' ? 'Bilet Standard' : 'Standard Ticket',
	'preset_standard_note'    => $current_lang === 'ro' ? 'Cel mai popular format' : 'Most popular format',
	'preset_landscape'        => $current_lang === 'ro' ? 'Bilet Landscape' : 'Landscape Ticket',
	'preset_landscape_note'   => $current_lang === 'ro' ? 'Format vertical' : 'Vertical format',
	'preset_a6_portrait'      => $current_lang === 'ro' ? 'A6 Portrait' : 'A6 Portrait',
	'preset_a6_portrait_note' => $current_lang === 'ro' ? 'Format carte poștală' : 'Postcard format',
	'preset_a6_landscape'     => $current_lang === 'ro' ? 'A6 Landscape' : 'A6 Landscape',
	'preset_a6_land_note'     => $current_lang === 'ro' ? 'Format orizontal' : 'Horizontal format',
	'preset_a4_portrait'      => $current_lang === 'ro' ? 'A4 Portrait' : 'A4 Portrait',
	'preset_a4_note'          => $current_lang === 'ro' ? 'Format full-page' : 'Full-page format',
	'preset_custom'           => $current_lang === 'ro' ? 'Personalizat' : 'Custom',
	'preset_custom_desc'      => $current_lang === 'ro' ? 'Creează dimensiuni custom' : 'Create custom dimensions',
	'preset_custom_note'      => $current_lang === 'ro' ? 'Orice dimensiune în mm' : 'Any dimension in mm',

	// Use Cases Section
	'usecases_label'          => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
	'usecases_title'          => $current_lang === 'ro' ? 'Designuri pentru' : 'Designs for',
	'usecases_title2'         => $current_lang === 'ro' ? 'orice ocazie' : 'every occasion',
	'uc_branded'              => $current_lang === 'ro' ? 'Bilete Brandate' : 'Branded Tickets',
	'uc_branded_desc'         => $current_lang === 'ro' ? 'Culorile, fonturile și imaginile tale. Bilete care se simt ca parte din experiență.' : 'Your colors, fonts and images. Tickets that feel like part of the experience.',
	'uc_vip'                  => $current_lang === 'ro' ? 'Bilete VIP Premium' : 'Premium VIP Tickets',
	'uc_vip_desc'             => $current_lang === 'ro' ? 'Designuri distinctive cu accente aurii și layout-uri unice pentru experiențe premium.' : 'Distinctive designs with golden accents and unique layouts for premium experiences.',
	'uc_badges'               => $current_lang === 'ro' ? 'Ecusoane Conferință' : 'Conference Badges',
	'uc_badges_desc'          => $current_lang === 'ro' ? 'Informații participant, logo companie și indicatori acces într-un format printabil.' : 'Participant info, company logo and access indicators in a printable format.',
	'uc_multiday'             => $current_lang === 'ro' ? 'Abonamente Multi-Zi' : 'Multi-Day Passes',
	'uc_multiday_desc'        => $current_lang === 'ro' ? 'Layout-uri cu spațiu pentru mai multe date sau stil punch-card pentru acces multi-sesiune.' : 'Layouts with space for multiple dates or punch-card style for multi-session access.',
	'uc_promo'                => $current_lang === 'ro' ? 'Bilete Promoționale' : 'Promotional Tickets',
	'uc_promo_desc'           => $current_lang === 'ro' ? 'Logo-uri sponsori, mesaje promoționale și coduri QR pentru oferte speciale.' : 'Sponsor logos, promotional messages and QR codes for special offers.',
	'uc_collectible'          => $current_lang === 'ro' ? 'Bilete Colecționabile' : 'Collectible Tickets',
	'uc_collectible_desc'     => $current_lang === 'ro' ? 'Design memorabil pentru concerte sau evenimente speciale - bilete care merită păstrate.' : 'Memorable design for concerts or special events - tickets worth keeping.',

	// Testimonial
	'testimonial_quote'       => $current_lang === 'ro'
		? 'În sfârșit pot să fac bilete care <span class="font-semibold text-gradient-canvas">arată exact cum vreau</span>. Nu mai trebuie să rog pe nimeni să-mi facă design-ul. Drag-and-drop, salvez template-ul și gata. Clienții chiar le păstrează ca amintire!'
		: 'I can finally create tickets that <span class="font-semibold text-gradient-canvas">look exactly how I want</span>. No more asking someone to do the design. Drag-and-drop, save the template and done. Customers actually keep them as souvenirs!',
	'testimonial_author'      => 'Ioana M.',
	'testimonial_role'        => $current_lang === 'ro' ? 'Event Manager, Club Control' : 'Event Manager, Club Control',

	// Final CTA
	'cta_title'               => $current_lang === 'ro' ? 'Start' : 'Start',
	'cta_title2'              => $current_lang === 'ro' ? 'designing' : 'designing',
	'cta_desc'                => $current_lang === 'ro'
		? 'Editor vizual intuitiv. Template-uri salvate. Variabile dinamice. Bilete profesionale în minute.'
		: 'Intuitive visual editor. Saved templates. Dynamic variables. Professional tickets in minutes.',
	'cta_contact'             => $current_lang === 'ro' ? 'Întrebări? Contactează-ne' : 'Questions? Contact us',
	'cta_footer'              => $current_lang === 'ro' ? 'Achiziție unică. Creativitate nelimitată. Export PDF/PNG.' : 'One-time purchase. Unlimited creativity. PDF/PNG export.',
];
?>

<style>
  ::selection { background: #8b5cf6; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-canvas { background: linear-gradient(135deg, #8b5cf6 0%, #ec4899 50%, #f97316 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }
  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(139, 92, 246, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Editor UI Styles */
  .editor-frame { background: #1e1e2e; border: 1px solid rgba(255,255,255,0.1); }
  .editor-toolbar { background: #181825; border-bottom: 1px solid rgba(255,255,255,0.1); }
  .editor-sidebar { background: #181825; border-left: 1px solid rgba(255,255,255,0.1); }

  /* Canvas styles */
  .canvas-bg {
    background-image:
      linear-gradient(45deg, #252536 25%, transparent 25%),
      linear-gradient(-45deg, #252536 25%, transparent 25%),
      linear-gradient(45deg, transparent 75%, #252536 75%),
      linear-gradient(-45deg, transparent 75%, #252536 75%);
    background-size: 20px 20px;
    background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
    background-color: #1a1a27;
  }

  /* Ticket preview */
  .ticket-preview {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(0,0,0,0.1);
  }

  /* Selection box */
  .selection-box {
    border: 2px solid #8b5cf6;
    animation: selection 1.5s ease-in-out infinite;
  }
  .selection-handle {
    width: 10px;
    height: 10px;
    background: #8b5cf6;
    border: 2px solid white;
    border-radius: 2px;
    position: absolute;
  }
  .handle-tl { top: -5px; left: -5px; cursor: nw-resize; }
  .handle-tr { top: -5px; right: -5px; cursor: ne-resize; }
  .handle-bl { bottom: -5px; left: -5px; cursor: sw-resize; }
  .handle-br { bottom: -5px; right: -5px; cursor: se-resize; animation: resizeHandle 2s ease-in-out infinite; }

  /* Layer item */
  .layer-item { transition: all 0.2s; }
  .layer-item:hover { background: rgba(139, 92, 246, 0.1); }
  .layer-item.active { background: rgba(139, 92, 246, 0.2); border-left: 2px solid #8b5cf6; }

  /* Variable tag */
  .var-tag {
    background: linear-gradient(135deg, rgba(139, 92, 246, 0.2), rgba(236, 72, 153, 0.2));
    border: 1px solid rgba(139, 92, 246, 0.3);
    font-family: 'JetBrains Mono', monospace;
  }

  /* Rulers */
  .ruler-h, .ruler-v { background: #181825; }
  .ruler-mark { background: rgba(255,255,255,0.3); }

  /* Print guides */
  .bleed-zone { border: 1px dashed rgba(239, 68, 68, 0.5); }
  .safe-zone { border: 1px dashed rgba(34, 197, 94, 0.5); }

  /* Tool button */
  .tool-btn { transition: all 0.2s; }
  .tool-btn:hover { background: rgba(139, 92, 246, 0.2); }
  .tool-btn.active { background: rgba(139, 92, 246, 0.3); color: #8b5cf6; }

  /* Preset card */
  .preset-card { transition: all 0.3s; }
  .preset-card:hover { transform: scale(1.05); border-color: rgba(139, 92, 246, 0.5); }

  /* Custom keyframes */
  @keyframes selection {
    0%, 100% { border-color: rgba(139, 92, 246, 1); }
    50% { border-color: rgba(139, 92, 246, 0.5); }
  }
  @keyframes resizeHandle {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
  }
  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }
</style>

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #8b5cf6, #ec4899, #f97316);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-canvas-purple/20 rounded-full -top-60 -left-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-canvas-pink/15 rounded-full bottom-0 -right-40 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[400px] h-[400px] bg-canvas-orange/10 rounded-full top-1/2 left-1/2 blur-[150px] pointer-events-none"></div>

    <!-- Floating design elements -->
    <div class="absolute top-32 left-16 opacity-20 animate-float">
      <svg class="w-8 h-8 text-canvas-purple" fill="currentColor" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
    </div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float" style="animation-delay: 1s;">
      <svg class="w-6 h-6 text-canvas-pink" fill="currentColor" viewBox="0 0 24 24"><path d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zM5 15h14v3H5z"/></svg>
    </div>
    <div class="absolute top-1/2 left-10 opacity-10 animate-float" style="animation-delay: 2s;">
      <span class="font-mono text-2xl text-canvas-orange">{ }</span>
    </div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-canvas-purple/10 border-canvas-purple/20">
            <svg class="w-5 h-5 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
            <span class="text-sm font-medium text-canvas-purple"><?php echo esc_html( $t['badge'] ); ?></span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-canvas"><?php echo esc_html( $t['hero_title2'] ); ?></span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            <?php echo $t['hero_desc']; ?>
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 rounded-full group bg-gradient-to-r from-canvas-purple to-canvas-pink hover:scale-105 hover:shadow-glow-purple">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
              <?php echo esc_html( $t['cta_open_editor'] ); ?>
              <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#functionalitati" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              <?php echo esc_html( $t['cta_features'] ); ?>
            </a>
          </div>

          <!-- Features mini -->
          <div class="flex flex-wrap gap-4">
            <div class="flex items-center gap-2 text-sm text-white/50">
              <svg class="w-4 h-4 text-canvas-purple" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span><?php echo esc_html( $t['feat_mm'] ); ?></span>
            </div>
            <div class="flex items-center gap-2 text-sm text-white/50">
              <svg class="w-4 h-4 text-canvas-pink" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span><?php echo esc_html( $t['feat_export'] ); ?></span>
            </div>
            <div class="flex items-center gap-2 text-sm text-white/50">
              <svg class="w-4 h-4 text-canvas-orange" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span><?php echo esc_html( $t['feat_variables'] ); ?></span>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Editor Mockup -->
        <div class="reveal reveal-delay-1">
          <div class="relative">
            <!-- Editor Window -->
            <div class="overflow-hidden shadow-2xl editor-frame rounded-2xl">
              <!-- Title Bar -->
              <div class="flex items-center justify-between px-4 py-3 border-b bg-dark-800 border-white/10">
                <div class="flex items-center gap-2">
                  <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                  <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                  <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                </div>
                <div class="font-mono text-xs text-white/40">summer-fest-vip.tpl</div>
                <div class="flex items-center gap-2">
                  <span class="px-2 py-0.5 rounded bg-brand-green/20 text-brand-green text-xs"><?php echo esc_html( $t['saved'] ); ?></span>
                </div>
              </div>

              <!-- Toolbar -->
              <div class="flex items-center gap-1 px-3 py-2 editor-toolbar">
                <button class="p-2 rounded tool-btn"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg></button>
                <button class="p-2 rounded tool-btn active"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg></button>
                <button class="p-2 rounded tool-btn"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></button>
                <button class="p-2 rounded tool-btn"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg></button>
                <div class="w-px h-6 mx-2 bg-white/10"></div>
                <button class="p-2 rounded tool-btn"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z"/></svg></button>
                <div class="flex items-center gap-2 ml-auto">
                  <span class="text-xs text-white/40">100%</span>
                  <button class="p-1 rounded tool-btn"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg></button>
                </div>
              </div>

              <!-- Main Editor Area -->
              <div class="flex" style="height: 320px;">
                <!-- Canvas Area -->
                <div class="relative flex items-center justify-center flex-1 p-6 overflow-hidden canvas-bg">
                  <!-- Rulers -->
                  <div class="absolute top-0 right-0 flex items-end h-6 left-8 ruler-h">
                    <div class="flex gap-10 px-2">
                      <span class="text-[8px] text-white/30">0</span>
                      <span class="text-[8px] text-white/30">20</span>
                      <span class="text-[8px] text-white/30">40</span>
                      <span class="text-[8px] text-white/30">60</span>
                      <span class="text-[8px] text-white/30">80mm</span>
                    </div>
                  </div>
                  <div class="absolute bottom-0 left-0 flex flex-col items-end w-6 pt-2 top-8 ruler-v">
                    <span class="text-[8px] text-white/30 -rotate-90 origin-right">0</span>
                  </div>

                  <!-- Ticket Canvas -->
                  <div class="relative rounded-lg ticket-preview" style="width: 280px; height: 100px;">
                    <!-- Bleed guide -->
                    <div class="absolute rounded-lg pointer-events-none -inset-1 bleed-zone"></div>
                    <!-- Safe guide -->
                    <div class="absolute rounded pointer-events-none inset-2 safe-zone"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 p-3">
                      <!-- Event name with selection -->
                      <div class="relative inline-block px-1 selection-box" style="top: 4px; left: 4px;">
                        <span class="text-sm font-bold text-gray-900">SUMMER FEST 2025</span>
                        <div class="selection-handle handle-tl"></div>
                        <div class="selection-handle handle-tr"></div>
                        <div class="selection-handle handle-bl"></div>
                        <div class="selection-handle handle-br"></div>
                      </div>

                      <!-- Date -->
                      <div class="absolute text-xs text-gray-600" style="top: 32px; left: 8px;">15 Aug 2025 • 18:00</div>

                      <!-- Venue -->
                      <div class="absolute text-xs text-gray-500" style="top: 48px; left: 8px;">Romexpo, București</div>

                      <!-- Ticket type badge -->
                      <div class="absolute px-2 py-0.5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-xs font-bold rounded" style="bottom: 8px; left: 8px;">VIP PASS</div>

                      <!-- QR Code -->
                      <div class="absolute p-1 bg-white rounded" style="top: 8px; right: 8px; width: 50px; height: 50px;">
                        <div class="flex items-center justify-center w-full h-full bg-gray-900 rounded-sm">
                          <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h6v6H3V3zm2 2v2h2V5H5zm8-2h6v6h-6V3zm2 2v2h2V5h-2zM3 13h6v6H3v-6zm2 2v2h2v-2H5zm13-2h1v1h-1v-1zm-3 0h1v1h-1v-1zm6 0h1v1h-1v-1zm-3 3h1v1h-1v-1zm3 0h1v1h-1v-1zm-6 3h1v1h-1v-1zm3 0h1v1h-1v-1zm3 0h1v1h-1v-1z"/></svg>
                        </div>
                      </div>

                      <!-- Seat info -->
                      <div class="absolute text-gray-600 text-[10px] font-mono" style="bottom: 8px; right: 8px;">SEC A • ROW 3 • SEAT 15</div>
                    </div>
                  </div>
                </div>

                <!-- Sidebar - Layers -->
                <div class="w-48 p-3 editor-sidebar">
                  <div class="mb-3 text-xs tracking-wider uppercase text-white/40"><?php echo esc_html( $t['layers'] ); ?></div>
                  <div class="space-y-1">
                    <div class="layer-item active rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/></svg>
                      <span class="text-xs text-white truncate"><?php echo esc_html( $t['layer_event_name'] ); ?></span>
                      <svg class="w-3 h-3 ml-auto text-white/30" fill="currentColor" viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-canvas-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg>
                      <span class="text-xs truncate text-white/70"><?php echo esc_html( $t['layer_qr'] ); ?></span>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-canvas-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/></svg>
                      <span class="text-xs truncate text-white/70"><?php echo esc_html( $t['layer_date'] ); ?></span>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-canvas-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                      <span class="text-xs truncate text-white/70"><?php echo esc_html( $t['layer_vip'] ); ?></span>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/></svg>
                      <span class="text-xs truncate text-white/70"><?php echo esc_html( $t['layer_venue'] ); ?></span>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/></svg>
                      <span class="text-xs truncate text-white/70"><?php echo esc_html( $t['layer_seat'] ); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating Variable Badge -->
            <div class="absolute z-10 px-3 py-2 border shadow-xl -top-4 -left-4 bg-dark-800 rounded-xl border-canvas-purple/30 animate-float">
              <div class="flex items-center gap-2">
                <span class="font-mono text-sm text-canvas-purple">{{</span>
                <span class="text-sm text-white">event.name</span>
                <span class="font-mono text-sm text-canvas-purple">}}</span>
              </div>
            </div>

            <!-- Floating Dimension Badge -->
            <div class="absolute -bottom-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-canvas-pink/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <span class="text-2xl">📐</span>
                <div>
                  <div class="text-sm font-medium text-white">200 × 80 mm</div>
                  <div class="text-xs text-white/40">300 DPI</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== LAYER TYPES ==================== -->
  <section class="relative py-24 overflow-hidden" id="functionalitati">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-canvas-purple"><?php echo esc_html( $t['layer_types_label'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['layer_types_title'] ); ?><br><span class="text-gradient-canvas"><?php echo esc_html( $t['layer_types_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['layer_types_desc'] ); ?></p>
      </div>

      <!-- Layer Types Grid -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- Text Layer -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-purple/30 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-canvas-purple/20">
              <svg class="w-7 h-7 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['text_title'] ); ?></h3>
              <div class="font-mono text-xs text-canvas-purple">layer.type: "text"</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['text_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">Helvetica</span>
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">Arial</span>
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">Georgia</span>
          </div>
        </div>

        <!-- Image Layer -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-pink/30 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-canvas-pink/20">
              <svg class="w-7 h-7 text-canvas-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['images_title'] ); ?></h3>
              <div class="font-mono text-xs text-canvas-pink">layer.type: "image"</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['images_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">PNG</span>
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">JPG</span>
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">SVG</span>
          </div>
        </div>

        <!-- QR Code Layer -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-orange/30 reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-canvas-orange/20">
              <svg class="w-7 h-7 text-canvas-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['qr_title'] ); ?></h3>
              <div class="font-mono text-xs text-canvas-orange">layer.type: "qrcode"</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['qr_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-canvas-orange/10 text-canvas-orange"><?php echo esc_html( $t['qr_dynamic'] ); ?></span>
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">Error Correction</span>
          </div>
        </div>

        <!-- Barcode Layer -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-blue/30 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-canvas-blue/20">
              <svg class="w-7 h-7 text-canvas-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m-4-4v4m8-8v8m-12-4v4m16-12v12M4 8h16"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['barcode_title'] ); ?></h3>
              <div class="font-mono text-xs text-canvas-blue">layer.type: "barcode"</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['barcode_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">Code128</span>
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">EAN-13</span>
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">PDF417</span>
          </div>
        </div>

        <!-- Shape Layer -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-teal/30 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-canvas-teal/20">
              <svg class="w-7 h-7 text-canvas-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['shapes_title'] ); ?></h3>
              <div class="font-mono text-xs text-canvas-teal">layer.type: "shape"</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['shapes_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">Rectangle</span>
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">Circle</span>
            <span class="px-2 py-1 text-xs rounded bg-white/5 text-white/60">Line</span>
          </div>
        </div>

        <!-- Background Layer -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-violet/30 reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-4">
            <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-brand-violet/20">
              <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white"><?php echo esc_html( $t['bg_title'] ); ?></h3>
              <div class="font-mono text-xs text-brand-violet">template.background</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50"><?php echo esc_html( $t['bg_desc'] ); ?></p>
          <div class="flex flex-wrap gap-2">
            <span class="w-6 h-6 bg-white border rounded border-white/20"></span>
            <span class="w-6 h-6 rounded bg-gradient-to-r from-purple-500 to-pink-500"></span>
            <span class="w-6 h-6 rounded bg-gradient-to-r from-amber-500 to-orange-500"></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== VARIABLES ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-canvas-orange"><?php echo esc_html( $t['vars_label'] ); ?></span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['vars_title'] ); ?><br><span class="text-gradient-canvas"><?php echo esc_html( $t['vars_title2'] ); ?></span></h2>
          <p class="mb-8 text-lg text-white/60"><?php echo esc_html( $t['vars_desc'] ); ?></p>

          <div class="space-y-3">
            <!-- Event Variables -->
            <div class="p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center gap-2 mb-2">
                <span class="flex items-center justify-center w-6 h-6 text-xs rounded bg-canvas-purple/20 text-canvas-purple">📅</span>
                <span class="text-sm font-medium text-white"><?php echo esc_html( $t['var_event'] ); ?></span>
              </div>
              <div class="flex flex-wrap gap-2">
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-purple">{{event.name}}</code>
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-purple">{{event.date}}</code>
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-purple">{{event.time}}</code>
              </div>
            </div>

            <!-- Venue Variables -->
            <div class="p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center gap-2 mb-2">
                <span class="flex items-center justify-center w-6 h-6 text-xs rounded bg-canvas-pink/20 text-canvas-pink">📍</span>
                <span class="text-sm font-medium text-white"><?php echo esc_html( $t['var_venue'] ); ?></span>
              </div>
              <div class="flex flex-wrap gap-2">
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-pink">{{venue.name}}</code>
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-pink">{{venue.address}}</code>
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-pink">{{venue.city}}</code>
              </div>
            </div>

            <!-- Ticket Variables -->
            <div class="p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center gap-2 mb-2">
                <span class="flex items-center justify-center w-6 h-6 text-xs rounded bg-canvas-orange/20 text-canvas-orange">🎫</span>
                <span class="text-sm font-medium text-white"><?php echo esc_html( $t['var_ticket'] ); ?></span>
              </div>
              <div class="flex flex-wrap gap-2">
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-orange">{{ticket.section}}</code>
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-orange">{{ticket.row}}</code>
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-orange">{{ticket.seat}}</code>
              </div>
            </div>

            <!-- Codes Variables -->
            <div class="p-4 border rounded-xl bg-dark-800/50 border-canvas-teal/20">
              <div class="flex items-center gap-2 mb-2">
                <span class="flex items-center justify-center w-6 h-6 text-xs rounded bg-canvas-teal/20 text-canvas-teal">📱</span>
                <span class="text-sm font-medium text-white"><?php echo esc_html( $t['var_codes'] ); ?></span>
              </div>
              <div class="flex flex-wrap gap-2">
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-teal">{{codes.qr}}</code>
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-teal">{{codes.barcode}}</code>
                <code class="px-2 py-1 text-xs rounded var-tag text-canvas-teal">{{codes.ticket_ref}}</code>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Before/After -->
        <div class="reveal reveal-delay-1">
          <div class="space-y-6">
            <!-- Template View -->
            <div class="relative">
              <div class="absolute -top-3 left-4 px-2 py-0.5 bg-canvas-purple rounded text-white text-xs font-medium"><?php echo esc_html( $t['template'] ); ?></div>
              <div class="p-4 border bg-dark-800 rounded-xl border-canvas-purple/30">
                <div class="p-4 bg-white rounded-lg" style="aspect-ratio: 2.5/1;">
                  <div class="space-y-2">
                    <div class="flex items-center gap-2">
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-purple">{{event.name}}</code>
                    </div>
                    <div class="flex items-center gap-2">
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-purple">{{event.date}}</code>
                      <span class="text-xs text-gray-400">•</span>
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-purple">{{event.time}}</code>
                    </div>
                    <div class="flex items-center gap-2">
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-pink">{{venue.name}}</code>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-orange">{{ticket.type}}</code>
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-teal">{{codes.qr}}</code>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Arrow -->
            <div class="flex justify-center">
              <div class="flex items-center justify-center w-10 h-10 rounded-full bg-canvas-purple/20">
                <svg class="w-5 h-5 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
            </div>

            <!-- Rendered View -->
            <div class="relative">
              <div class="absolute -top-3 left-4 px-2 py-0.5 bg-brand-green rounded text-white text-xs font-medium"><?php echo esc_html( $t['generated'] ); ?></div>
              <div class="p-4 border bg-dark-800 rounded-xl border-brand-green/30">
                <div class="p-4 rounded-lg ticket-preview" style="aspect-ratio: 2.5/1;">
                  <div class="space-y-2">
                    <div class="text-lg font-bold text-gray-900">SUMMER FEST 2025</div>
                    <div class="text-sm text-gray-600">15 Aug 2025 • 18:00</div>
                    <div class="text-sm text-gray-500">Romexpo, București</div>
                    <div class="flex items-center justify-between mt-4">
                      <span class="px-2 py-0.5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-xs font-bold rounded">VIP PASS</span>
                      <div class="flex items-center justify-center w-10 h-10 bg-gray-900 rounded">
                        <span class="text-lg text-white">◱</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PRESET SIZES ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-canvas-pink"><?php echo esc_html( $t['presets_label'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['presets_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['presets_title2'] ); ?></span></h2>
        <p class="text-lg text-white/60"><?php echo esc_html( $t['presets_desc'] ); ?></p>
      </div>

      <!-- Presets Grid -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 reveal">
        <!-- Standard Ticket -->
        <div class="p-6 border cursor-pointer preset-card bg-dark-800 rounded-2xl border-white/10">
          <div class="flex items-center justify-center h-24 mb-4">
            <div class="rounded bg-white/10" style="width: 160px; height: 48px;"></div>
          </div>
          <h3 class="mb-1 font-semibold text-center text-white"><?php echo esc_html( $t['preset_standard'] ); ?></h3>
          <p class="font-mono text-sm text-center text-canvas-purple">200 × 80 mm</p>
          <p class="mt-2 text-xs text-center text-white/40"><?php echo esc_html( $t['preset_standard_note'] ); ?></p>
        </div>

        <!-- Ticket Landscape -->
        <div class="p-6 border cursor-pointer preset-card bg-dark-800 rounded-2xl border-white/10">
          <div class="flex items-center justify-center h-24 mb-4">
            <div class="rounded bg-white/10" style="width: 48px; height: 120px;"></div>
          </div>
          <h3 class="mb-1 font-semibold text-center text-white"><?php echo esc_html( $t['preset_landscape'] ); ?></h3>
          <p class="font-mono text-sm text-center text-canvas-pink">80 × 200 mm</p>
          <p class="mt-2 text-xs text-center text-white/40"><?php echo esc_html( $t['preset_landscape_note'] ); ?></p>
        </div>

        <!-- A6 Portrait -->
        <div class="p-6 border cursor-pointer preset-card bg-dark-800 rounded-2xl border-white/10">
          <div class="flex items-center justify-center h-24 mb-4">
            <div class="rounded bg-white/10" style="width: 63px; height: 89px;"></div>
          </div>
          <h3 class="mb-1 font-semibold text-center text-white"><?php echo esc_html( $t['preset_a6_portrait'] ); ?></h3>
          <p class="font-mono text-sm text-center text-canvas-orange">105 × 148 mm</p>
          <p class="mt-2 text-xs text-center text-white/40"><?php echo esc_html( $t['preset_a6_portrait_note'] ); ?></p>
        </div>

        <!-- A6 Landscape -->
        <div class="p-6 border cursor-pointer preset-card bg-dark-800 rounded-2xl border-white/10">
          <div class="flex items-center justify-center h-24 mb-4">
            <div class="rounded bg-white/10" style="width: 89px; height: 63px;"></div>
          </div>
          <h3 class="mb-1 font-semibold text-center text-white"><?php echo esc_html( $t['preset_a6_landscape'] ); ?></h3>
          <p class="font-mono text-sm text-center text-canvas-teal">148 × 105 mm</p>
          <p class="mt-2 text-xs text-center text-white/40"><?php echo esc_html( $t['preset_a6_land_note'] ); ?></p>
        </div>

        <!-- A4 Portrait -->
        <div class="p-6 border cursor-pointer preset-card bg-dark-800 rounded-2xl border-white/10">
          <div class="flex items-center justify-center h-24 mb-4">
            <div class="rounded bg-white/10" style="width: 63px; height: 89px;"></div>
          </div>
          <h3 class="mb-1 font-semibold text-center text-white"><?php echo esc_html( $t['preset_a4_portrait'] ); ?></h3>
          <p class="font-mono text-sm text-center text-canvas-blue">210 × 297 mm</p>
          <p class="mt-2 text-xs text-center text-white/40"><?php echo esc_html( $t['preset_a4_note'] ); ?></p>
        </div>

        <!-- Custom -->
        <div class="p-6 border border-dashed cursor-pointer preset-card bg-dark-800 rounded-2xl border-white/20 hover:border-canvas-purple/50">
          <div class="flex items-center justify-center h-24 mb-4">
            <div class="flex items-center justify-center w-16 h-16 border-2 border-dashed rounded-xl border-white/20">
              <svg class="w-8 h-8 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
            </div>
          </div>
          <h3 class="mb-1 font-semibold text-center text-white"><?php echo esc_html( $t['preset_custom'] ); ?></h3>
          <p class="text-sm text-center text-white/40"><?php echo esc_html( $t['preset_custom_desc'] ); ?></p>
          <p class="mt-2 text-xs text-center text-white/30"><?php echo esc_html( $t['preset_custom_note'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-brand-violet"><?php echo esc_html( $t['usecases_label'] ); ?></span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl"><?php echo esc_html( $t['usecases_title'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['usecases_title2'] ); ?></span></h2>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- Branded Tickets -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-purple/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500/20 to-pink-500/20">
            <span class="text-2xl">🎨</span>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_branded'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_branded_desc'] ); ?></p>
        </div>

        <!-- VIP Tickets -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-pink/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500/20 to-orange-500/20">
            <span class="text-2xl">👑</span>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_vip'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_vip_desc'] ); ?></p>
        </div>

        <!-- Conference Badges -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-orange/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-cyan-500/20">
            <span class="text-2xl">🏷️</span>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_badges'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_badges_desc'] ); ?></p>
        </div>

        <!-- Multi-Day Passes -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-teal/30 reveal">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500/20 to-emerald-500/20">
            <span class="text-2xl">📅</span>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_multiday'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_multiday_desc'] ); ?></p>
        </div>

        <!-- Promo Tickets -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-brand-violet/30 reveal reveal-delay-1">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-violet-500/20 to-purple-500/20">
            <span class="text-2xl">📢</span>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_promo'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_promo_desc'] ); ?></p>
        </div>

        <!-- Collectible Tickets -->
        <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-white/10 hover:border-canvas-blue/30 reveal reveal-delay-2">
          <div class="flex items-center justify-center mb-4 w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500/20 to-rose-500/20">
            <span class="text-2xl">⭐</span>
          </div>
          <h3 class="mb-2 text-xl font-semibold text-white"><?php echo esc_html( $t['uc_collectible'] ); ?></h3>
          <p class="text-sm text-white/50"><?php echo esc_html( $t['uc_collectible_desc'] ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-canvas-purple/10 to-canvas-pink/10 rounded-3xl md:p-12 border-canvas-purple/20">
          <!-- Stars -->
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <!-- Quote -->
          <blockquote class="mb-8 text-2xl font-light leading-relaxed text-white md:text-3xl">
            "<?php echo $t['testimonial_quote']; ?>"
          </blockquote>
          <!-- Author -->
          <div class="flex items-center gap-4">
            <div class="rounded-full w-14 h-14 bg-gradient-to-br from-canvas-purple to-canvas-pink"></div>
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
    <div class="absolute inset-0 bg-gradient-to-br from-canvas-purple/20 via-transparent to-canvas-pink/20"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(139,92,246,0.3) 0%, rgba(236,72,153,0.2) 100%);"></div>

    <!-- Floating elements -->
    <div class="absolute top-20 left-20 opacity-10 animate-float">
      <svg class="w-16 h-16 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
    </div>
    <div class="absolute bottom-32 right-20 opacity-10 animate-float" style="animation-delay: 1s;">
      <svg class="w-12 h-12 text-canvas-pink" fill="currentColor" viewBox="0 0 24 24"><path d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zM5 15h14v3H5z"/></svg>
    </div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal"><?php echo esc_html( $t['cta_title'] ); ?><br><span class="text-gradient-canvas"><?php echo esc_html( $t['cta_title2'] ); ?></span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1"><?php echo esc_html( $t['cta_desc'] ); ?></p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 rounded-full group bg-gradient-to-r from-canvas-purple to-canvas-pink hover:scale-105 hover:shadow-glow-purple">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
          <?php echo esc_html( $t['cta_open_editor'] ); ?>
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
