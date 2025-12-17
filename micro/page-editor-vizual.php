<?php
/**
 * Template Name: Micro - Editor Vizual
 * Description: Landing page for Visual Website Builder
 */

get_header();

$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
    // Hero
    'badge'                   => $current_lang === 'ro' ? 'Editor Vizual Drag & Drop' : 'Visual Drag & Drop Editor',
    'hero_title'              => $current_lang === 'ro' ? 'Designeaza' : 'Design',
    'hero_title2'             => $current_lang === 'ro' ? 'fara limite' : 'without limits',
    'hero_desc'               => $current_lang === 'ro' ? 'Construieste website-uri de evenimente spectaculoase cu drag & drop. <strong class="text-white">Zero cod necesar.</strong> 25+ blocuri, teme personalizabile, previzualizare instant.' : 'Build spectacular event websites with drag & drop. <strong class="text-white">Zero code required.</strong> 25+ blocks, customizable themes, instant preview.',
    'cta_try_free'            => $current_lang === 'ro' ? 'Incearca Gratuit' : 'Try Free',
    'cta_demo'                => $current_lang === 'ro' ? 'Vezi Demo' : 'See Demo',
    'pill_dragdrop'           => 'Drag & Drop',
    'pill_blocks'             => $current_lang === 'ro' ? '25+ Blocuri' : '25+ Blocks',
    'pill_preview'            => 'Live Preview',
    'pill_multilang'          => $current_lang === 'ro' ? 'Multi-limba' : 'Multi-language',
    'instant'                 => 'Instant',
    'drop_block'              => $current_lang === 'ro' ? 'Drop bloc aici' : 'Drop block here',
    'theme_label'             => $current_lang === 'ro' ? 'Tema' : 'Theme',
    'colors_label'            => $current_lang === 'ro' ? 'Culori' : 'Colors',
    'font_label'              => 'Font',
    'lang_label'              => $current_lang === 'ro' ? 'Limba' : 'Language',

    // Stats
    'block_types'             => $current_lang === 'ro' ? 'Tipuri de Blocuri' : 'Block Types',
    'theme_presets'           => $current_lang === 'ro' ? 'Preseturi Tema' : 'Theme Presets',
    'unlimited_pages'         => $current_lang === 'ro' ? 'Pagini Nelimitate' : 'Unlimited Pages',
    'lines_of_code'           => $current_lang === 'ro' ? 'Linii de Cod' : 'Lines of Code',

    // Why Visual Editor
    'why_visual'              => $current_lang === 'ro' ? 'De Ce Editor Vizual' : 'Why Visual Editor',
    'no_agencies'             => $current_lang === 'ro' ? 'Fara agentii.' : 'No agencies.',
    'no_freelancers'          => $current_lang === 'ro' ? 'Fara freelanceri.' : 'No freelancers.',
    'you_designer'            => $current_lang === 'ro' ? 'Tu esti designerul. Modifici oricand vrei, publici instant.' : 'You are the designer. Edit whenever you want, publish instantly.',
    'agency'                  => $current_lang === 'ro' ? 'Agentie Web' : 'Web Agency',
    'freelancer'              => 'Freelancer',
    'visual_editor'           => $current_lang === 'ro' ? 'Editor Vizual' : 'Visual Editor',
    'recommended'             => $current_lang === 'ro' ? 'RECOMANDAT' : 'RECOMMENDED',
    'agency_cost'             => $current_lang === 'ro' ? '2.000 - 10.000 EUR per proiect' : '2,000 - 10,000 EUR per project',
    'agency_time'             => $current_lang === 'ro' ? '2-4 saptamani timp de livrare' : '2-4 weeks delivery time',
    'agency_changes'          => $current_lang === 'ro' ? 'Modificari = costuri extra' : 'Changes = extra costs',
    'agency_depend'           => $current_lang === 'ro' ? 'Dependent de disponibilitate' : 'Dependent on availability',
    'free_cost'               => $current_lang === 'ro' ? '500 - 2.000 EUR per proiect' : '500 - 2,000 EUR per project',
    'free_time'               => $current_lang === 'ro' ? '1-2 saptamani (daca e disponibil)' : '1-2 weeks (if available)',
    'free_quality'            => $current_lang === 'ro' ? 'Calitate inconsistenta' : 'Inconsistent quality',
    'free_comm'               => $current_lang === 'ro' ? 'Comunicare dificila' : 'Difficult communication',
    'included_platform'       => $current_lang === 'ro' ? 'Inclus in platforma' : 'Included in platform',
    'minutes_not_weeks'       => $current_lang === 'ro' ? 'Minute' : 'Minutes',
    'not_weeks'               => $current_lang === 'ro' ? ', nu saptamani' : ', not weeks',
    'unlimited_free_changes'  => $current_lang === 'ro' ? 'Modificari <strong class="text-white">nelimitate & gratuite</strong>' : '<strong class="text-white">Unlimited & free</strong> changes',
    'you_control'             => $current_lang === 'ro' ? '<strong class="text-white">Tu controlezi</strong> totul' : '<strong class="text-white">You control</strong> everything',

    // Blocks
    'blocks_library'          => $current_lang === 'ro' ? 'Biblioteca de Blocuri' : 'Block Library',
    'blocks_ready'            => $current_lang === 'ro' ? '25+ blocuri' : '25+ blocks',
    'blocks_ready2'           => $current_lang === 'ro' ? 'gata de folosit' : 'ready to use',
    'blocks_desc'             => $current_lang === 'ro' ? 'Fiecare bloc e optimizat pentru evenimente. Drag, drop, personalizeaza.' : 'Each block is optimized for events. Drag, drop, customize.',
    'hero_section'            => $current_lang === 'ro' ? 'Sectiune Hero' : 'Hero Section',
    'hero_section_desc'       => $current_lang === 'ro' ? 'Fundaluri uimitoare cu titlu, subtitlu si CTA.' : 'Amazing backgrounds with title, subtitle and CTA.',
    'events_grid'             => $current_lang === 'ro' ? 'Grila Evenimente' : 'Events Grid',
    'events_grid_desc'        => $current_lang === 'ro' ? 'Se populeaza automat cu evenimentele tale.' : 'Auto-populates with your events.',
    'countdown'               => $current_lang === 'ro' ? 'Cronometru' : 'Countdown',
    'countdown_desc'          => $current_lang === 'ro' ? 'Construieste anticiparea pentru evenimente.' : 'Build anticipation for events.',
    'gallery_masonry'         => $current_lang === 'ro' ? 'Galerie Masonry' : 'Masonry Gallery',
    'gallery_desc'            => $current_lang === 'ro' ? 'Prezinta locatiile cu lightbox elegant.' : 'Showcase venues with elegant lightbox.',
    'video_embed'             => 'Video Embed',
    'video_desc'              => $current_lang === 'ro' ? 'YouTube sau Vimeo cu autoplay.' : 'YouTube or Vimeo with autoplay.',
    'faq_accordion'           => $current_lang === 'ro' ? 'Acordeon FAQ' : 'FAQ Accordion',
    'faq_desc'                => $current_lang === 'ro' ? 'Raspunde la intrebarile frecvente.' : 'Answer frequently asked questions.',
    'testimonials'            => $current_lang === 'ro' ? 'Testimoniale' : 'Testimonials',
    'testimonials_desc'       => $current_lang === 'ro' ? 'Carusel cu review-uri de la clienti.' : 'Carousel with customer reviews.',
    'partner_logos'           => $current_lang === 'ro' ? 'Logo-uri Parteneri' : 'Partner Logos',
    'partner_desc'            => $current_lang === 'ro' ? 'Grila cu sponsori si parteneri.' : 'Grid with sponsors and partners.',
    'more_blocks'             => $current_lang === 'ro' ? '+17 blocuri aditionale:' : '+17 additional blocks:',
    'more_blocks_list'        => $current_lang === 'ro' ? 'Slider, Harti, Newsletter, CTA, Alert Banner, HTML Custom si altele' : 'Slider, Maps, Newsletter, CTA, Alert Banner, Custom HTML and more',
    'days'                    => $current_lang === 'ro' ? 'ZILE' : 'DAYS',
    'hours'                   => $current_lang === 'ro' ? 'ORE' : 'HRS',
    'mins'                    => 'MIN',

    // Theme Customization
    'customization'           => $current_lang === 'ro' ? 'Personalizare Completa' : 'Full Customization',
    'your_brand'              => $current_lang === 'ro' ? 'Brandul tau,' : 'Your brand,',
    'your_rules'              => $current_lang === 'ro' ? 'regulile tale' : 'your rules',
    'customization_desc'      => $current_lang === 'ro' ? 'Defineste identitatea vizuala cu cateva click-uri. Culori, fonturi, layout-uri - totul sub controlul tau.' : 'Define your visual identity with a few clicks. Colors, fonts, layouts - everything under your control.',
    'color_schemes'           => $current_lang === 'ro' ? 'Scheme de Culori' : 'Color Schemes',
    'color_schemes_desc'      => $current_lang === 'ro' ? 'Culori primare si secundare cu previzualizare instant. Mod intunecat inclus.' : 'Primary and secondary colors with instant preview. Dark mode included.',
    'google_fonts'            => 'Google Fonts',
    'google_fonts_desc'       => $current_lang === 'ro' ? 'Alege din sute de fonturi gratuite. Preview in timp real pe masura ce selectezi.' : 'Choose from hundreds of free fonts. Real-time preview as you select.',
    'header_footer'           => $current_lang === 'ro' ? 'Layout-uri Header/Footer' : 'Header/Footer Layouts',
    'header_footer_desc'      => $current_lang === 'ro' ? 'Default, centrat sau minimal. Linkuri sociale configurabile.' : 'Default, centered or minimal. Configurable social links.',
    'custom_css'              => 'CSS Custom',
    'custom_css_desc'         => $current_lang === 'ro' ? 'Pentru dezvoltatorii care vor control total. Suprascrie orice stil.' : 'For developers who want total control. Override any style.',
    'theme_modern'            => 'Modern',
    'theme_minimal'           => 'Minimal',
    'theme_bold'              => 'Bold',
    'theme_default'           => 'Default',
    'gradient_bold'           => $current_lang === 'ro' ? 'Gradient bold, vibratii moderne' : 'Bold gradient, modern vibes',
    'clean_elegant'           => $current_lang === 'ro' ? 'Curat, elegant, profesional' : 'Clean, elegant, professional',
    'strong_impact'           => $current_lang === 'ro' ? 'Impact puternic, energie' : 'Strong impact, energy',
    'balanced_trust'          => $current_lang === 'ro' ? 'Echilibrat, de incredere' : 'Balanced, trustworthy',
    'dark_mode'               => $current_lang === 'ro' ? 'Mod Intunecat' : 'Dark Mode',
    'activated'               => $current_lang === 'ro' ? 'Activat' : 'Enabled',

    // Multi-Language
    'multi_lang_support'      => $current_lang === 'ro' ? 'Suport Multi-Limba' : 'Multi-Language Support',
    'international_events'    => $current_lang === 'ro' ? 'Evenimente' : 'Events',
    'international_events2'   => $current_lang === 'ro' ? 'internationale' : 'international',
    'multi_lang_desc'         => $current_lang === 'ro' ? 'Creeaza continut in mai multe limbi si lasa vizitatorii sa aleaga. Perfect pentru evenimente cu audiente diverse.' : 'Create content in multiple languages and let visitors choose. Perfect for events with diverse audiences.',
    'romanian'                => $current_lang === 'ro' ? 'Romana' : 'Romanian',
    'primary_lang'            => $current_lang === 'ro' ? 'Limba principala' : 'Primary language',
    'english'                 => 'English',
    'secondary_lang'          => $current_lang === 'ro' ? 'Limba secundara' : 'Secondary language',
    'other_langs'             => $current_lang === 'ro' ? 'Alte limbi' : 'Other languages',
    'extensible'              => $current_lang === 'ro' ? 'Extensibil la cerere' : 'Extensible on request',

    // SEO & Performance
    'under_the_hood'          => $current_lang === 'ro' ? 'Sub Capota' : 'Under The Hood',
    'beautiful_and'           => $current_lang === 'ro' ? 'Frumos si' : 'Beautiful and',
    'performant'              => $current_lang === 'ro' ? 'performant' : 'performant',
    'seo_desc'                => $current_lang === 'ro' ? 'Output SEO-friendly, cod curat, incarcare rapida. Tot ce Google adora.' : 'SEO-friendly output, clean code, fast loading. Everything Google loves.',
    'seo_optimized'           => $current_lang === 'ro' ? 'SEO Optimizat' : 'SEO Optimized',
    'seo_optimized_desc'      => $current_lang === 'ro' ? 'Meta tags, structured data, sitemap generat automat. Website-ul tau e gata sa fie gasit.' : 'Meta tags, structured data, auto-generated sitemap. Your website is ready to be found.',
    'schema_events'           => $current_lang === 'ro' ? 'Schema.org pentru evenimente' : 'Schema.org for events',
    'fast_loading'            => $current_lang === 'ro' ? 'Incarcare Rapida' : 'Fast Loading',
    'fast_loading_desc'       => $current_lang === 'ro' ? 'Imagini optimizate, CSS minimal, lazy loading. Sub 3 secunde pe orice dispozitiv.' : 'Optimized images, minimal CSS, lazy loading. Under 3 seconds on any device.',
    'responsive'              => '100% Responsive',
    'responsive_desc'         => $current_lang === 'ro' ? 'Arata perfect pe telefon, tableta si desktop. Testat pe toate dispozitivele.' : 'Looks perfect on phone, tablet and desktop. Tested on all devices.',
    'mobile_first'            => 'Mobile-first design',

    // Testimonial
    'testimonial_text'        => $current_lang === 'ro' ? 'Am construit website-ul festivalului in 2 ore. <span class="text-gradient-creative font-semibold">Literalmente 2 ore.</span> Inainte asteptam saptamani dupa agentie. Acum modific orice vreau, cand vreau. Game changer.' : 'I built the festival website in 2 hours. <span class="text-gradient-creative font-semibold">Literally 2 hours.</span> Before I waited weeks for the agency. Now I change whatever I want, whenever I want. Game changer.',
    'testimonial_author'      => 'Mihai P.',
    'testimonial_role'        => $current_lang === 'ro' ? 'Director Festival, Transylvania Calling' : 'Festival Director, Transylvania Calling',

    // Final CTA
    'start_creating'          => $current_lang === 'ro' ? 'Incepe sa' : 'Start',
    'create'                  => $current_lang === 'ro' ? 'creezi' : 'creating',
    'final_desc'              => $current_lang === 'ro' ? 'Website-ul evenimentului tau, designat de tine. Fara cod, fara asteptari, fara limite.' : 'Your event website, designed by you. No code, no waiting, no limits.',
    'try_free_now'            => $current_lang === 'ro' ? 'Incearca Gratuit Acum' : 'Try Free Now',
    'see_live_demo'           => $current_lang === 'ro' ? 'Vezi Demo Live' : 'See Live Demo',
    'footer_note'             => $current_lang === 'ro' ? 'Inclus gratuit in toate planurile Tixello. Pagini nelimitate, modificari nelimitate.' : 'Included free in all Tixello plans. Unlimited pages, unlimited changes.',

    // Demo content
    'summer_festival'         => $current_lang === 'ro' ? 'Festival de Vara 2025' : 'Summer Festival 2025',
    'demo_desc_ro'            => 'Cel mai mare eveniment muzical al anului te asteapta! Artisti internationali, experiente unice si amintiri de neuitat.',
    'demo_desc_en'            => 'The biggest music event of the year awaits you! International artists, unique experiences and unforgettable memories.',
    'buy_tickets'             => $current_lang === 'ro' ? 'Cumpara Bilete' : 'Buy Tickets',
];
?>

<style>
  /* Selection */
  ::selection { background: #8B5CF6; color: white; }

  /* Text gradients */
  .text-gradient {
    @apply bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-cyan-400 to-purple-400 bg-[length:200%_auto] animate-shimmer;
  }
  .text-gradient-editor {
    background: linear-gradient(135deg, #8B5CF6 0%, #EC4899 33%, #3B82F6 66%, #8B5CF6 100%);
    background-size: 300% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shimmer 4s linear infinite;
  }
  .text-gradient-creative {
    background: linear-gradient(90deg, #F472B6, #818CF8, #22D3EE, #F472B6);
    background-size: 300% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: gradientX 3s ease infinite;
  }

  @keyframes gradientX {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
  }

  /* Reveal animations */
  .reveal {
    @apply opacity-0 translate-y-10 transition-all duration-700;
    transition-timing-function: cubic-bezier(0.16, 1, 0.3, 1);
  }
  .reveal.revealed { @apply opacity-100 translate-y-0; }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  /* Feature card glow */
  .feature-card::before {
    content: '';
    @apply absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-500;
    background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(139, 92, 246, 0.15), transparent 50%);
  }
  .feature-card:hover::before { @apply opacity-100; }

  /* Block card hover effects */
  .block-card {
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .block-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px -15px rgba(139, 92, 246, 0.3);
  }

  /* Editor mockup styles */
  .editor-frame {
    background: linear-gradient(145deg, #1a1a27 0%, #0f0f16 100%);
    border-radius: 16px;
    box-shadow:
      0 50px 100px -20px rgba(0, 0, 0, 0.5),
      0 0 0 1px rgba(255, 255, 255, 0.1),
      inset 0 1px 0 rgba(255, 255, 255, 0.1);
  }

  /* Draggable block animation */
  .draggable-block {
    cursor: grab;
    transition: all 0.3s ease;
  }
  .draggable-block:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px -10px rgba(139, 92, 246, 0.5);
  }

  /* Color picker dot */
  .color-dot {
    transition: all 0.3s ease;
  }
  .color-dot:hover {
    transform: scale(1.3);
    box-shadow: 0 0 20px currentColor;
  }
  .color-dot.active {
    transform: scale(1.2);
    box-shadow: 0 0 0 3px rgba(255,255,255,0.3), 0 0 20px currentColor;
  }

  /* Browser dot */
  .browser-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
  }

  /* Grid pattern for canvas */
  .canvas-grid {
    background-image:
      linear-gradient(rgba(139, 92, 246, 0.03) 1px, transparent 1px),
      linear-gradient(90deg, rgba(139, 92, 246, 0.03) 1px, transparent 1px);
    background-size: 20px 20px;
  }

  /* Drop zone highlight */
  .drop-zone {
    border: 2px dashed rgba(139, 92, 246, 0.3);
    background: rgba(139, 92, 246, 0.05);
  }

  /* Rainbow border */
  .rainbow-border {
    position: relative;
    background: linear-gradient(#13131c, #13131c) padding-box,
                linear-gradient(135deg, #8B5CF6, #EC4899, #3B82F6, #8B5CF6) border-box;
    border: 2px solid transparent;
    background-size: 100% 100%, 300% 300%;
    animation: gradientX 3s ease infinite;
  }

  /* Theme preview card */
  .theme-card {
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .theme-card:hover {
    transform: translateY(-5px);
  }
  .theme-card.active {
    box-shadow: 0 0 0 3px #8B5CF6, 0 20px 40px -15px rgba(139, 92, 246, 0.4);
  }

  /* Stat number style */
  .stat-number {
    font-variant-numeric: tabular-nums;
    text-shadow: 0 0 60px rgba(139, 92, 246, 0.5);
  }

  /* Drag animation */
  @keyframes drag {
    0%, 100% { transform: translate(0, 0); }
    25% { transform: translate(10px, -5px); }
    50% { transform: translate(20px, 0); }
    75% { transform: translate(10px, 5px); }
  }
  .animate-drag {
    animation: drag 3s ease-in-out infinite;
  }

  /* Background size utilities */
  .bg-size-200 { background-size: 200% auto; }
  .bg-pos-0 { background-position: 0% center; }
  .bg-pos-100 { background-position: 100% center; }
</style>

<!-- ==================== HERO ==================== -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
  <!-- Background Effects -->
  <div class="absolute w-[800px] h-[800px] bg-editor-purple/20 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[600px] h-[600px] bg-editor-pink/15 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[400px] h-[400px] bg-editor-blue/10 rounded-full top-1/3 left-1/3 blur-[120px] pointer-events-none"></div>

  <!-- Floating geometric shapes -->
  <div class="absolute top-32 left-20 w-20 h-20 border border-editor-purple/20 rounded-xl rotate-12 animate-float opacity-30"></div>
  <div class="absolute bottom-40 right-32 w-16 h-16 border border-editor-pink/20 rounded-full animate-float opacity-30" style="animation-delay: 1s;"></div>
  <div class="absolute top-1/2 left-10 w-12 h-12 bg-gradient-to-br from-editor-purple/10 to-editor-pink/10 rounded-lg rotate-45 animate-float" style="animation-delay: 2s;"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Hero Content -->
      <div class="reveal">
        <!-- Badge -->
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-gradient-to-r from-editor-purple/10 to-editor-pink/10 border border-editor-purple/20 mb-6">
          <div class="flex -space-x-1">
            <div class="w-2 h-2 rounded-full bg-editor-purple"></div>
            <div class="w-2 h-2 rounded-full bg-editor-pink"></div>
            <div class="w-2 h-2 rounded-full bg-editor-blue"></div>
          </div>
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-editor-purple to-editor-pink text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
        </div>

        <!-- Heading -->
        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
          <?php echo esc_html( $t['hero_title'] ); ?><br>
          <span class="text-gradient-editor"><?php echo esc_html( $t['hero_title2'] ); ?></span>
        </h1>

        <!-- Description -->
        <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
          <?php echo $t['hero_desc']; ?>
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-editor-purple via-editor-pink to-editor-blue bg-size-200 bg-pos-0 hover:bg-pos-100 text-white transition-all duration-500 hover:scale-105 hover:shadow-glow-multi">
            <?php echo esc_html( $t['cta_try_free'] ); ?>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#demo" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <?php echo esc_html( $t['cta_demo'] ); ?>
          </a>
        </div>

        <!-- Feature Pills -->
        <div class="flex flex-wrap gap-3">
          <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10">
            <div class="w-2 h-2 rounded-full bg-brand-green"></div>
            <span class="text-white/70 text-sm"><?php echo esc_html( $t['pill_dragdrop'] ); ?></span>
          </div>
          <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10">
            <div class="w-2 h-2 rounded-full bg-editor-purple"></div>
            <span class="text-white/70 text-sm"><?php echo esc_html( $t['pill_blocks'] ); ?></span>
          </div>
          <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10">
            <div class="w-2 h-2 rounded-full bg-editor-pink"></div>
            <span class="text-white/70 text-sm"><?php echo esc_html( $t['pill_preview'] ); ?></span>
          </div>
          <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10">
            <div class="w-2 h-2 rounded-full bg-editor-blue"></div>
            <span class="text-white/70 text-sm"><?php echo esc_html( $t['pill_multilang'] ); ?></span>
          </div>
        </div>
      </div>

      <!-- Hero Visual - Editor Mockup -->
      <div class="reveal reveal-delay-1">
        <div class="relative" x-data="{ activeTheme: 'modern' }">
          <!-- Main Editor Frame -->
          <div class="editor-frame overflow-hidden">
            <!-- Browser Chrome -->
            <div class="bg-dark-700 px-4 py-3 flex items-center gap-4 border-b border-white/10">
              <div class="flex gap-2">
                <div class="browser-dot bg-red-500"></div>
                <div class="browser-dot bg-yellow-500"></div>
                <div class="browser-dot bg-green-500"></div>
              </div>
              <div class="flex-1 bg-dark-800 rounded-lg px-4 py-1.5 text-white/40 text-sm">
                tixello.com/editor
              </div>
            </div>

            <!-- Editor Interface -->
            <div class="flex h-[420px]">
              <!-- Left Sidebar - Blocks -->
              <div class="w-16 bg-dark-800 border-r border-white/10 p-2 space-y-2">
                <div class="w-full aspect-square rounded-lg bg-editor-purple/20 flex items-center justify-center text-editor-purple cursor-pointer hover:bg-editor-purple/30 transition-colors draggable-block">
                  <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5z"/></svg>
                </div>
                <div class="w-full aspect-square rounded-lg bg-editor-pink/20 flex items-center justify-center text-editor-pink cursor-pointer hover:bg-editor-pink/30 transition-colors">
                  <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <div class="w-full aspect-square rounded-lg bg-editor-blue/20 flex items-center justify-center text-editor-blue cursor-pointer hover:bg-editor-blue/30 transition-colors">
                  <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <div class="w-full aspect-square rounded-lg bg-brand-amber/20 flex items-center justify-center text-brand-amber cursor-pointer hover:bg-brand-amber/30 transition-colors">
                  <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                </div>
                <div class="w-full aspect-square rounded-lg bg-brand-green/20 flex items-center justify-center text-brand-green cursor-pointer hover:bg-brand-green/30 transition-colors">
                  <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
              </div>

              <!-- Canvas Area -->
              <div class="flex-1 bg-dark-900 canvas-grid p-4 overflow-hidden relative">
                <!-- Preview Content -->
                <div class="bg-dark-800 rounded-xl overflow-hidden shadow-2xl h-full">
                  <!-- Mini Hero -->
                  <div class="h-32 bg-gradient-to-br from-editor-purple/30 via-editor-pink/20 to-editor-blue/30 flex items-center justify-center relative">
                    <div class="text-center">
                      <div class="text-white/80 text-xs font-semibold mb-1">SUMMER FESTIVAL</div>
                      <div class="text-white text-lg font-display font-bold">2025</div>
                    </div>
                    <!-- Selection indicator -->
                    <div class="absolute inset-0 border-2 border-editor-purple rounded-t-xl"></div>
                    <div class="absolute -top-2 left-1/2 -translate-x-1/2 px-2 py-0.5 bg-editor-purple rounded text-white text-[10px] font-medium">Hero</div>
                  </div>

                  <!-- Mini Events Grid -->
                  <div class="p-3 space-y-2">
                    <div class="flex gap-2">
                      <div class="flex-1 h-16 bg-white/5 rounded-lg"></div>
                      <div class="flex-1 h-16 bg-white/5 rounded-lg"></div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-1 h-16 bg-white/5 rounded-lg"></div>
                      <div class="flex-1 h-16 bg-white/5 rounded-lg"></div>
                    </div>
                  </div>

                  <!-- Drop zone indicator -->
                  <div class="mx-3 mb-3 p-4 drop-zone rounded-lg text-center">
                    <div class="text-editor-purple/50 text-xs"><?php echo esc_html( $t['drop_block'] ); ?></div>
                  </div>
                </div>

                <!-- Animated cursor -->
                <div class="absolute w-6 h-6 animate-drag pointer-events-none" style="top: 30%; left: 20%;">
                  <svg class="w-6 h-6 text-white drop-shadow-lg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M4 4l7.07 17 2.51-7.39L21 11.07z"/>
                  </svg>
                </div>
              </div>

              <!-- Right Sidebar - Properties -->
              <div class="w-48 bg-dark-800 border-l border-white/10 p-3 space-y-4">
                <div>
                  <div class="text-white/40 text-[10px] uppercase tracking-wider mb-2"><?php echo esc_html( $t['theme_label'] ); ?></div>
                  <div class="grid grid-cols-2 gap-2">
                    <button @click="activeTheme = 'modern'" :class="activeTheme === 'modern' ? 'border-editor-purple' : 'border-white/10'" class="p-2 rounded-lg bg-white/5 border transition-colors">
                      <div class="h-8 rounded bg-gradient-to-br from-editor-purple to-editor-pink mb-1"></div>
                      <div class="text-white/60 text-[9px]">Modern</div>
                    </button>
                    <button @click="activeTheme = 'minimal'" :class="activeTheme === 'minimal' ? 'border-editor-purple' : 'border-white/10'" class="p-2 rounded-lg bg-white/5 border transition-colors">
                      <div class="h-8 rounded bg-gradient-to-br from-gray-600 to-gray-800 mb-1"></div>
                      <div class="text-white/60 text-[9px]">Minimal</div>
                    </button>
                  </div>
                </div>

                <div>
                  <div class="text-white/40 text-[10px] uppercase tracking-wider mb-2"><?php echo esc_html( $t['colors_label'] ); ?></div>
                  <div class="flex gap-2">
                    <div class="w-6 h-6 rounded-full bg-editor-purple color-dot active cursor-pointer"></div>
                    <div class="w-6 h-6 rounded-full bg-editor-pink color-dot cursor-pointer"></div>
                    <div class="w-6 h-6 rounded-full bg-editor-blue color-dot cursor-pointer"></div>
                    <div class="w-6 h-6 rounded-full bg-brand-green color-dot cursor-pointer"></div>
                  </div>
                </div>

                <div>
                  <div class="text-white/40 text-[10px] uppercase tracking-wider mb-2"><?php echo esc_html( $t['font_label'] ); ?></div>
                  <select class="w-full bg-white/5 border border-white/10 rounded-lg px-2 py-1.5 text-white text-xs">
                    <option>Inter</option>
                    <option>Poppins</option>
                    <option>Montserrat</option>
                  </select>
                </div>

                <div>
                  <div class="text-white/40 text-[10px] uppercase tracking-wider mb-2"><?php echo esc_html( $t['lang_label'] ); ?></div>
                  <div class="flex gap-1">
                    <button class="flex-1 px-2 py-1 rounded bg-editor-purple/20 text-editor-purple text-[10px] font-medium">RO</button>
                    <button class="flex-1 px-2 py-1 rounded bg-white/5 text-white/40 text-[10px]">EN</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Floating Badges -->
          <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-editor-purple/20 shadow-xl animate-float z-10">
            <div class="flex items-center gap-2">
              <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-editor-purple to-editor-pink flex items-center justify-center">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg>
              </div>
              <div>
                <div class="text-white text-sm font-medium"><?php echo esc_html( $t['pill_dragdrop'] ); ?></div>
                <div class="text-white/40 text-xs"><?php echo esc_html( $t['instant'] ); ?></div>
              </div>
            </div>
          </div>

          <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-brand-green/20 shadow-xl animate-float z-10" style="animation-delay: 1.5s;">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></div>
              <span class="text-brand-green text-sm font-medium"><?php echo esc_html( $t['pill_preview'] ); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== STATS BAR ==================== -->
<section class="py-12 border-y border-white/5 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-r from-editor-purple/5 via-editor-pink/5 to-editor-blue/5"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="text-center reveal">
        <div class="text-4xl md:text-5xl font-display font-bold text-transparent bg-clip-text bg-gradient-to-r from-editor-purple to-editor-pink stat-number">25+</div>
        <div class="text-white/40 text-sm mt-1"><?php echo esc_html( $t['block_types'] ); ?></div>
      </div>
      <div class="text-center reveal reveal-delay-1">
        <div class="text-4xl md:text-5xl font-display font-bold text-white stat-number">4</div>
        <div class="text-white/40 text-sm mt-1"><?php echo esc_html( $t['theme_presets'] ); ?></div>
      </div>
      <div class="text-center reveal reveal-delay-2">
        <div class="text-4xl md:text-5xl font-display font-bold text-white stat-number">&#8734;</div>
        <div class="text-white/40 text-sm mt-1"><?php echo esc_html( $t['unlimited_pages'] ); ?></div>
      </div>
      <div class="text-center reveal reveal-delay-3">
        <div class="text-4xl md:text-5xl font-display font-bold text-transparent bg-clip-text bg-gradient-to-r from-editor-pink to-editor-blue stat-number">0</div>
        <div class="text-white/40 text-sm mt-1"><?php echo esc_html( $t['lines_of_code'] ); ?></div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== WHY VISUAL EDITOR ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-editor-purple text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['why_visual'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['no_agencies'] ); ?><br><span class="text-gradient-editor"><?php echo esc_html( $t['no_freelancers'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['you_designer'] ); ?></p>
    </div>

    <!-- Comparison Grid -->
    <div class="grid lg:grid-cols-3 gap-6">
      <!-- Traditional Way -->
      <div class="reveal">
        <div class="bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-3xl p-8 border border-brand-rose/20 h-full">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </div>
            <span class="text-brand-rose font-semibold"><?php echo esc_html( $t['agency'] ); ?></span>
          </div>
          <ul class="space-y-3 text-white/60 text-sm">
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-rose flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
              <?php echo esc_html( $t['agency_cost'] ); ?>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-rose flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
              <?php echo esc_html( $t['agency_time'] ); ?>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-rose flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
              <?php echo esc_html( $t['agency_changes'] ); ?>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-rose flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
              <?php echo esc_html( $t['agency_depend'] ); ?>
            </li>
          </ul>
        </div>
      </div>

      <!-- Freelancer -->
      <div class="reveal reveal-delay-1">
        <div class="bg-gradient-to-br from-brand-amber/10 to-brand-amber/5 rounded-3xl p-8 border border-brand-amber/20 h-full">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center">
              <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <span class="text-brand-amber font-semibold"><?php echo esc_html( $t['freelancer'] ); ?></span>
          </div>
          <ul class="space-y-3 text-white/60 text-sm">
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-amber flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <?php echo esc_html( $t['free_cost'] ); ?>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-amber flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <?php echo esc_html( $t['free_time'] ); ?>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-amber flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <?php echo esc_html( $t['free_quality'] ); ?>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-amber flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <?php echo esc_html( $t['free_comm'] ); ?>
            </li>
          </ul>
        </div>
      </div>

      <!-- Visual Editor -->
      <div class="reveal reveal-delay-2">
        <div class="rainbow-border rounded-3xl p-8 h-full relative overflow-hidden">
          <div class="absolute top-4 right-4 px-3 py-1 bg-gradient-to-r from-editor-purple to-editor-pink text-white text-xs font-semibold rounded-full">
            <?php echo esc_html( $t['recommended'] ); ?>
          </div>
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-editor-purple to-editor-pink flex items-center justify-center">
              <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-editor-purple to-editor-pink font-semibold"><?php echo esc_html( $t['visual_editor'] ); ?></span>
          </div>
          <ul class="space-y-3 text-white/80 text-sm">
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <strong class="text-white"><?php echo esc_html( $t['included_platform'] ); ?></strong>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <strong class="text-white"><?php echo esc_html( $t['minutes_not_weeks'] ); ?></strong><?php echo esc_html( $t['not_weeks'] ); ?>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?php echo $t['unlimited_free_changes']; ?>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-green flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?php echo $t['you_control']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== BLOCKS SHOWCASE ==================== -->
<section class="py-24 bg-dark-850 relative" id="blocuri">
  <div class="absolute w-[600px] h-[600px] bg-editor-purple/15 rounded-full top-1/2 -right-80 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[400px] h-[400px] bg-editor-pink/10 rounded-full top-1/4 -left-40 blur-[120px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-editor-pink text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['blocks_library'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['blocks_ready'] ); ?><br><span class="text-gradient-creative"><?php echo esc_html( $t['blocks_ready2'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['blocks_desc'] ); ?></p>
    </div>

    <!-- Blocks Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
      <!-- Hero Block -->
      <div class="block-card bg-dark-800 rounded-2xl p-5 border border-white/10 reveal group">
        <div class="h-24 rounded-xl bg-gradient-to-br from-editor-purple/30 via-editor-pink/20 to-editor-blue/30 mb-4 flex items-center justify-center relative overflow-hidden">
          <div class="text-center">
            <div class="text-white/60 text-[10px] font-medium">EVENT NAME</div>
            <div class="text-white text-sm font-bold">2025</div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-dark-800/80 to-transparent"></div>
        </div>
        <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['hero_section'] ); ?></h3>
        <p class="text-white/40 text-sm"><?php echo esc_html( $t['hero_section_desc'] ); ?></p>
      </div>

      <!-- Events Grid -->
      <div class="block-card bg-dark-800 rounded-2xl p-5 border border-white/10 reveal reveal-delay-1 group">
        <div class="h-24 rounded-xl bg-dark-700 mb-4 p-2 grid grid-cols-2 gap-1">
          <div class="bg-editor-purple/20 rounded-lg"></div>
          <div class="bg-editor-pink/20 rounded-lg"></div>
          <div class="bg-editor-blue/20 rounded-lg"></div>
          <div class="bg-brand-amber/20 rounded-lg"></div>
        </div>
        <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['events_grid'] ); ?></h3>
        <p class="text-white/40 text-sm"><?php echo esc_html( $t['events_grid_desc'] ); ?></p>
      </div>

      <!-- Countdown -->
      <div class="block-card bg-dark-800 rounded-2xl p-5 border border-white/10 reveal reveal-delay-2 group">
        <div class="h-24 rounded-xl bg-dark-700 mb-4 flex items-center justify-center gap-2">
          <div class="text-center">
            <div class="text-2xl font-bold text-editor-purple">12</div>
            <div class="text-white/30 text-[8px]"><?php echo esc_html( $t['days'] ); ?></div>
          </div>
          <span class="text-white/20">:</span>
          <div class="text-center">
            <div class="text-2xl font-bold text-editor-pink">08</div>
            <div class="text-white/30 text-[8px]"><?php echo esc_html( $t['hours'] ); ?></div>
          </div>
          <span class="text-white/20">:</span>
          <div class="text-center">
            <div class="text-2xl font-bold text-editor-blue">45</div>
            <div class="text-white/30 text-[8px]"><?php echo esc_html( $t['mins'] ); ?></div>
          </div>
        </div>
        <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['countdown'] ); ?></h3>
        <p class="text-white/40 text-sm"><?php echo esc_html( $t['countdown_desc'] ); ?></p>
      </div>

      <!-- Gallery -->
      <div class="block-card bg-dark-800 rounded-2xl p-5 border border-white/10 reveal reveal-delay-3 group">
        <div class="h-24 rounded-xl bg-dark-700 mb-4 p-2 grid grid-cols-3 gap-1">
          <div class="col-span-2 row-span-2 bg-gradient-to-br from-editor-purple/30 to-editor-pink/30 rounded-lg"></div>
          <div class="bg-white/10 rounded-lg"></div>
          <div class="bg-white/10 rounded-lg"></div>
        </div>
        <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['gallery_masonry'] ); ?></h3>
        <p class="text-white/40 text-sm"><?php echo esc_html( $t['gallery_desc'] ); ?></p>
      </div>

      <!-- Video Embed -->
      <div class="block-card bg-dark-800 rounded-2xl p-5 border border-white/10 reveal group">
        <div class="h-24 rounded-xl bg-dark-700 mb-4 flex items-center justify-center relative">
          <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
          </div>
        </div>
        <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['video_embed'] ); ?></h3>
        <p class="text-white/40 text-sm"><?php echo esc_html( $t['video_desc'] ); ?></p>
      </div>

      <!-- FAQ -->
      <div class="block-card bg-dark-800 rounded-2xl p-5 border border-white/10 reveal reveal-delay-1 group">
        <div class="h-24 rounded-xl bg-dark-700 mb-4 p-3 space-y-2">
          <div class="flex items-center justify-between p-2 bg-white/5 rounded-lg">
            <div class="w-20 h-2 bg-white/20 rounded"></div>
            <svg class="w-3 h-3 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </div>
          <div class="flex items-center justify-between p-2 bg-editor-purple/10 rounded-lg">
            <div class="w-16 h-2 bg-editor-purple/30 rounded"></div>
            <svg class="w-3 h-3 text-editor-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
          </div>
        </div>
        <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['faq_accordion'] ); ?></h3>
        <p class="text-white/40 text-sm"><?php echo esc_html( $t['faq_desc'] ); ?></p>
      </div>

      <!-- Testimonials -->
      <div class="block-card bg-dark-800 rounded-2xl p-5 border border-white/10 reveal reveal-delay-2 group">
        <div class="h-24 rounded-xl bg-dark-700 mb-4 p-3 flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-gradient-to-br from-editor-pink to-editor-purple flex-shrink-0"></div>
          <div class="flex-1">
            <div class="flex gap-0.5 mb-1">
              <svg class="w-3 h-3 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              <svg class="w-3 h-3 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              <svg class="w-3 h-3 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              <svg class="w-3 h-3 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              <svg class="w-3 h-3 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div class="w-full h-2 bg-white/10 rounded"></div>
          </div>
        </div>
        <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['testimonials'] ); ?></h3>
        <p class="text-white/40 text-sm"><?php echo esc_html( $t['testimonials_desc'] ); ?></p>
      </div>

      <!-- Partner Logos -->
      <div class="block-card bg-dark-800 rounded-2xl p-5 border border-white/10 reveal reveal-delay-3 group">
        <div class="h-24 rounded-xl bg-dark-700 mb-4 p-3 flex items-center justify-center gap-4">
          <div class="w-12 h-6 bg-white/10 rounded"></div>
          <div class="w-12 h-6 bg-white/10 rounded"></div>
          <div class="w-12 h-6 bg-white/10 rounded"></div>
        </div>
        <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['partner_logos'] ); ?></h3>
        <p class="text-white/40 text-sm"><?php echo esc_html( $t['partner_desc'] ); ?></p>
      </div>
    </div>

    <!-- More blocks indicator -->
    <div class="mt-12 text-center reveal">
      <div class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gradient-to-r from-editor-purple/10 to-editor-pink/10 border border-white/10">
        <span class="text-white/60"><?php echo esc_html( $t['more_blocks'] ); ?></span>
        <span class="text-white/40 text-sm"><?php echo esc_html( $t['more_blocks_list'] ); ?></span>
      </div>
    </div>
  </div>
</section>

<!-- ==================== THEME CUSTOMIZATION ==================== -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Content -->
      <div class="reveal">
        <span class="text-editor-blue text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['customization'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['your_brand'] ); ?><br><span class="text-gradient-editor"><?php echo esc_html( $t['your_rules'] ); ?></span></h2>
        <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['customization_desc'] ); ?></p>

        <div class="space-y-6">
          <div class="flex gap-4">
            <div class="w-12 h-12 rounded-xl bg-editor-purple/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-editor-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
            </div>
            <div>
              <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['color_schemes'] ); ?></h3>
              <p class="text-white/50 text-sm"><?php echo esc_html( $t['color_schemes_desc'] ); ?></p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="w-12 h-12 rounded-xl bg-editor-pink/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-editor-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
            </div>
            <div>
              <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['google_fonts'] ); ?></h3>
              <p class="text-white/50 text-sm"><?php echo esc_html( $t['google_fonts_desc'] ); ?></p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="w-12 h-12 rounded-xl bg-editor-blue/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-editor-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
            </div>
            <div>
              <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['header_footer'] ); ?></h3>
              <p class="text-white/50 text-sm"><?php echo esc_html( $t['header_footer_desc'] ); ?></p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
            </div>
            <div>
              <h3 class="text-white font-semibold mb-1"><?php echo esc_html( $t['custom_css'] ); ?></h3>
              <p class="text-white/50 text-sm"><?php echo esc_html( $t['custom_css_desc'] ); ?></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Theme Presets Visual -->
      <div class="reveal reveal-delay-1" x-data="{ activePreset: 'modern' }">
        <div class="grid grid-cols-2 gap-4">
          <!-- Modern Theme -->
          <div @click="activePreset = 'modern'" :class="activePreset === 'modern' ? 'active' : ''" class="theme-card cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent">
            <div class="h-32 bg-gradient-to-br from-violet-600 via-purple-600 to-pink-500 p-4 flex items-end">
              <div>
                <div class="text-white/60 text-[8px] uppercase tracking-wider"><?php echo esc_html( $t['theme_label'] ); ?></div>
                <div class="text-white font-bold text-sm"><?php echo esc_html( $t['theme_modern'] ); ?></div>
              </div>
            </div>
            <div class="bg-dark-800 p-3">
              <div class="flex gap-2 mb-2">
                <div class="w-4 h-4 rounded-full bg-violet-500"></div>
                <div class="w-4 h-4 rounded-full bg-pink-500"></div>
              </div>
              <div class="text-white/40 text-[10px]"><?php echo esc_html( $t['gradient_bold'] ); ?></div>
            </div>
          </div>

          <!-- Minimal Theme -->
          <div @click="activePreset = 'minimal'" :class="activePreset === 'minimal' ? 'active' : ''" class="theme-card cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent">
            <div class="h-32 bg-gradient-to-br from-gray-100 to-gray-200 p-4 flex items-end">
              <div>
                <div class="text-gray-500 text-[8px] uppercase tracking-wider"><?php echo esc_html( $t['theme_label'] ); ?></div>
                <div class="text-gray-900 font-bold text-sm"><?php echo esc_html( $t['theme_minimal'] ); ?></div>
              </div>
            </div>
            <div class="bg-dark-800 p-3">
              <div class="flex gap-2 mb-2">
                <div class="w-4 h-4 rounded-full bg-gray-800"></div>
                <div class="w-4 h-4 rounded-full bg-gray-400"></div>
              </div>
              <div class="text-white/40 text-[10px]"><?php echo esc_html( $t['clean_elegant'] ); ?></div>
            </div>
          </div>

          <!-- Bold Theme -->
          <div @click="activePreset = 'bold'" :class="activePreset === 'bold' ? 'active' : ''" class="theme-card cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent">
            <div class="h-32 bg-gradient-to-br from-orange-500 via-red-500 to-rose-500 p-4 flex items-end">
              <div>
                <div class="text-white/60 text-[8px] uppercase tracking-wider"><?php echo esc_html( $t['theme_label'] ); ?></div>
                <div class="text-white font-bold text-sm"><?php echo esc_html( $t['theme_bold'] ); ?></div>
              </div>
            </div>
            <div class="bg-dark-800 p-3">
              <div class="flex gap-2 mb-2">
                <div class="w-4 h-4 rounded-full bg-orange-500"></div>
                <div class="w-4 h-4 rounded-full bg-rose-500"></div>
              </div>
              <div class="text-white/40 text-[10px]"><?php echo esc_html( $t['strong_impact'] ); ?></div>
            </div>
          </div>

          <!-- Default Theme -->
          <div @click="activePreset = 'default'" :class="activePreset === 'default' ? 'active' : ''" class="theme-card cursor-pointer rounded-2xl overflow-hidden border-2 border-transparent">
            <div class="h-32 bg-gradient-to-br from-blue-600 via-indigo-600 to-cyan-500 p-4 flex items-end">
              <div>
                <div class="text-white/60 text-[8px] uppercase tracking-wider"><?php echo esc_html( $t['theme_label'] ); ?></div>
                <div class="text-white font-bold text-sm"><?php echo esc_html( $t['theme_default'] ); ?></div>
              </div>
            </div>
            <div class="bg-dark-800 p-3">
              <div class="flex gap-2 mb-2">
                <div class="w-4 h-4 rounded-full bg-blue-500"></div>
                <div class="w-4 h-4 rounded-full bg-cyan-500"></div>
              </div>
              <div class="text-white/40 text-[10px]"><?php echo esc_html( $t['balanced_trust'] ); ?></div>
            </div>
          </div>
        </div>

        <!-- Dark mode toggle -->
        <div class="mt-6 flex items-center justify-center gap-4 p-4 bg-dark-800 rounded-xl border border-white/10">
          <span class="text-white/60 text-sm"><?php echo esc_html( $t['dark_mode'] ); ?></span>
          <button class="w-12 h-6 rounded-full bg-editor-purple relative">
            <div class="absolute right-1 top-1 w-4 h-4 rounded-full bg-white shadow-lg"></div>
          </button>
          <span class="text-white text-sm"><?php echo esc_html( $t['activated'] ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== MULTI-LANGUAGE ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Visual -->
      <div class="order-2 lg:order-1 reveal">
        <div class="relative">
          <!-- Browser frame -->
          <div class="editor-frame overflow-hidden">
            <div class="bg-dark-700 px-4 py-3 flex items-center gap-4 border-b border-white/10">
              <div class="flex gap-2">
                <div class="browser-dot bg-red-500"></div>
                <div class="browser-dot bg-yellow-500"></div>
                <div class="browser-dot bg-green-500"></div>
              </div>
              <div class="flex-1 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full bg-dark-800 border border-white/10">
                  <span class="text-white/40 text-sm">RO</span>
                  <span class="text-white/20">|</span>
                  <span class="text-white/60 text-sm">EN</span>
                </div>
              </div>
            </div>

            <!-- Content preview -->
            <div class="p-6 bg-dark-900" x-data="{ lang: 'ro' }">
              <div class="flex gap-2 mb-6">
                <button @click="lang = 'ro'" :class="lang === 'ro' ? 'bg-editor-purple text-white' : 'bg-white/5 text-white/40'" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors"><?php echo esc_html( $t['romanian'] ); ?></button>
                <button @click="lang = 'en'" :class="lang === 'en' ? 'bg-editor-purple text-white' : 'bg-white/5 text-white/40'" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors"><?php echo esc_html( $t['english'] ); ?></button>
              </div>

              <!-- Romanian content -->
              <div x-show="lang === 'ro'" x-transition class="space-y-4">
                <h3 class="text-2xl font-display font-bold text-white"><?php echo esc_html( $t['summer_festival'] ); ?></h3>
                <p class="text-white/60"><?php echo esc_html( $t['demo_desc_ro'] ); ?></p>
                <button class="px-6 py-3 rounded-full bg-gradient-to-r from-editor-purple to-editor-pink text-white font-semibold text-sm"><?php echo esc_html( $t['buy_tickets'] ); ?></button>
              </div>

              <!-- English content -->
              <div x-show="lang === 'en'" x-transition class="space-y-4">
                <h3 class="text-2xl font-display font-bold text-white">Summer Festival 2025</h3>
                <p class="text-white/60"><?php echo esc_html( $t['demo_desc_en'] ); ?></p>
                <button class="px-6 py-3 rounded-full bg-gradient-to-r from-editor-purple to-editor-pink text-white font-semibold text-sm">Buy Tickets</button>
              </div>
            </div>
          </div>

          <!-- Flag badges -->
          <div class="absolute -top-4 -right-4 flex gap-2">
            <div class="w-10 h-10 rounded-full bg-dark-800 border border-white/10 flex items-center justify-center text-lg shadow-xl">🇷🇴</div>
            <div class="w-10 h-10 rounded-full bg-dark-800 border border-white/10 flex items-center justify-center text-lg shadow-xl">🇬🇧</div>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="order-1 lg:order-2 reveal reveal-delay-1">
        <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['multi_lang_support'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['international_events'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['international_events2'] ); ?></span></h2>
        <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['multi_lang_desc'] ); ?></p>

        <div class="space-y-4">
          <div class="flex items-center gap-3 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="text-2xl">🇷🇴</div>
            <div>
              <div class="text-white font-medium"><?php echo esc_html( $t['romanian'] ); ?></div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['primary_lang'] ); ?></div>
            </div>
            <div class="ml-auto w-2 h-2 rounded-full bg-brand-green"></div>
          </div>

          <div class="flex items-center gap-3 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="text-2xl">🇬🇧</div>
            <div>
              <div class="text-white font-medium"><?php echo esc_html( $t['english'] ); ?></div>
              <div class="text-white/40 text-sm"><?php echo esc_html( $t['secondary_lang'] ); ?></div>
            </div>
            <div class="ml-auto w-2 h-2 rounded-full bg-brand-green"></div>
          </div>

          <div class="flex items-center gap-3 p-4 rounded-xl bg-dark-800/30 border border-dashed border-white/10">
            <div class="text-2xl opacity-50">🌍</div>
            <div>
              <div class="text-white/50 font-medium"><?php echo esc_html( $t['other_langs'] ); ?></div>
              <div class="text-white/30 text-sm"><?php echo esc_html( $t['extensible'] ); ?></div>
            </div>
            <div class="ml-auto text-white/30 text-sm">+</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== SEO & PERFORMANCE ==================== -->
<section class="py-24 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['under_the_hood'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['beautiful_and'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['performant'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['seo_desc'] ); ?></p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-green/30 transition-all duration-500 reveal">
        <div class="w-14 h-14 rounded-2xl bg-brand-green/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['seo_optimized'] ); ?></h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['seo_optimized_desc'] ); ?></p>
        <div class="flex items-center gap-2 text-brand-green text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
          <?php echo esc_html( $t['schema_events'] ); ?>
        </div>
      </div>

      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-editor-purple/30 transition-all duration-500 reveal reveal-delay-1">
        <div class="w-14 h-14 rounded-2xl bg-editor-purple/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-editor-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['fast_loading'] ); ?></h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['fast_loading_desc'] ); ?></p>
        <div class="flex items-center gap-2 text-editor-purple text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
          Core Web Vitals
        </div>
      </div>

      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-editor-pink/30 transition-all duration-500 reveal reveal-delay-2">
        <div class="w-14 h-14 rounded-2xl bg-editor-pink/20 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-editor-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['responsive'] ); ?></h3>
        <p class="text-white/50 text-sm mb-4"><?php echo esc_html( $t['responsive_desc'] ); ?></p>
        <div class="flex items-center gap-2 text-editor-pink text-sm">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
          <?php echo esc_html( $t['mobile_first'] ); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== TESTIMONIAL ==================== -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-4xl mx-auto px-6 lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="rainbow-border rounded-3xl p-8 md:p-12">
        <!-- Stars -->
        <div class="flex items-center gap-1 mb-6">
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <!-- Quote -->
        <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
          "<?php echo $t['testimonial_text']; ?>"
        </blockquote>
        <!-- Author -->
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-full bg-gradient-to-br from-editor-purple via-editor-pink to-editor-blue"></div>
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
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-editor-purple/20 via-editor-pink/10 to-editor-blue/20"></div>
  <div class="absolute w-[800px] h-[800px] bg-gradient-to-br from-editor-purple/30 to-editor-pink/30 rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none"></div>

  <!-- Floating blocks -->
  <div class="absolute top-20 left-20 w-16 h-16 bg-dark-800 rounded-2xl border border-white/10 flex items-center justify-center animate-float opacity-50">
    <svg class="w-8 h-8 text-editor-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5z"/></svg>
  </div>
  <div class="absolute bottom-32 right-20 w-14 h-14 bg-dark-800 rounded-2xl border border-white/10 flex items-center justify-center animate-float opacity-50" style="animation-delay: 1s;">
    <svg class="w-7 h-7 text-editor-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
  </div>
  <div class="absolute top-1/3 right-32 w-12 h-12 bg-dark-800 rounded-2xl border border-white/10 flex items-center justify-center animate-float opacity-50" style="animation-delay: 2s;">
    <svg class="w-6 h-6 text-editor-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
  </div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
    <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['start_creating'] ); ?><br><span class="text-gradient-creative"><?php echo esc_html( $t['create'] ); ?></span></h2>
    <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-editor-purple via-editor-pink to-editor-blue bg-size-200 bg-pos-0 hover:bg-pos-100 text-white transition-all duration-500 hover:scale-105 hover:shadow-glow-multi">
        <?php echo esc_html( $t['try_free_now'] ); ?>
        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/demo')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 hover:border-white/40 transition-all duration-300">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <?php echo esc_html( $t['see_live_demo'] ); ?>
      </a>
    </div>

    <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3"><?php echo esc_html( $t['footer_note'] ); ?></p>
  </div>
</section>

<script>
  // Intersection Observer for Reveal Animations
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Feature Card Mouse Tracking
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
      card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
    });
  });
</script>

<?php get_footer(); ?>
