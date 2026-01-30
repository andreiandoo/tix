<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-3QWH3K2WB2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-3QWH3K2WB2');
	</script>
	<meta name='impact-site-verification' value='bcae8305-997a-4d18-bd8c-cbe1033a9b1e'>
	<!-- Alpine.js Plugins (must load before Alpine core) -->
	<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<!-- Tixello Mega Menu Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<?php
// ==========================
// Header Multilanguage Support (Polylang)
// ==========================
$header_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'ro';

$header_t = [
	'search' => $header_lang === 'ro' ? 'Cauta' : 'Search',
	'login' => $header_lang === 'ro' ? 'Conectare' : 'Login',
	'start_free' => $header_lang === 'ro' ? 'Incepe Gratuit' : 'Start Free',
	'open_menu' => $header_lang === 'ro' ? 'Deschide meniul' : 'Open menu',
	'close_menu' => $header_lang === 'ro' ? 'Inchide meniul' : 'Close menu',
];
?>

<body <?php body_class( 'text-gray-900 antialiased font-body bg-dark-900 text-zinc-200 overflow-x-hidden' ); ?> x-data="{ mobileMenu: false }">
<!-- Scroll Progress Bar -->
<div class="fixed top-0 left-0 h-0.5 bg-gradient-to-r from-meta-blue to-cyan-400 z-[1001]" id="scroll-progress"></div>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="flex flex-col min-h-screen bg-dark-850">

	<?php do_action( 'tailpress_header' ); ?>

	<header id="masthead" 
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" 
            x-data="{ mobileMenu: false, scrolled: false }" 
            x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
            :class="scrolled ? 'bg-zinc-950/95 backdrop-blur-xl shadow-lg shadow-black/20' : 'bg-transparent'">
		
		<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
			<nav class="flex items-center justify-between h-20">
				
				<!-- ====== LOGO ====== -->
				<div class="flex items-center flex-shrink-0 site-branding gap-x-4">
					<?php if ( has_custom_logo() ) : ?>
						<div class="block w-8 custom-logo-link">
							<?php the_custom_logo(); ?>
						</div>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2.5 group" rel="home">
							<div class="flex items-center justify-center transition-shadow shadow-lg w-9 h-9 rounded-xl bg-gradient-to-br from-violet-600 to-cyan-500 shadow-violet-600/20 group-hover:shadow-violet-600/40">
								<span class="text-base font-bold text-white">tx</span>
							</div>
							<span class="text-xl font-bold text-white">Tixello</span>
						</a>
					<?php endif; ?>

					<?php 
					if ( function_exists('pll_the_languages') ) :
						$langs = pll_the_languages([
							'raw'           => 1,
							'echo'          => 0,
							'hide_current'  => 0,
							'hide_if_empty' => 0, // show all languages even if a page translation is missing
						]);

						// Check if we're on a dynamic API page (artists, events, venues)
						$dynamic_page_type = null;
						$dynamic_slug = null;

						if ( $artist_slug = get_query_var( 'tixello_artist_slug' ) ) {
							$dynamic_page_type = 'artists';
							$dynamic_slug = $artist_slug;
						} elseif ( $event_slug = get_query_var( 'tixello_event_slug' ) ) {
							$dynamic_page_type = 'events';
							$dynamic_slug = $event_slug;
						} elseif ( $venue_slug = get_query_var( 'tixello_venue_slug' ) ) {
							$dynamic_page_type = 'venues';
							$dynamic_slug = $venue_slug;
						}

						// Get default language for URL construction
						$default_lang = function_exists('pll_default_language') ? pll_default_language() : 'ro';

						if ( ! empty($langs) && count($langs) > 1 ) :?>
							<!-- Language Switcher -->
							<div class="flex items-center gap-1 px-1 py-1 ml-2 rounded-lg bg-white/5">
								<?php foreach ( $langs as $lang ) :
									$is_current = ! empty($lang['current_lang']);

									$classes = $is_current
										? 'px-2.5 py-1 text-xs font-semibold rounded-md transition-colors bg-violet-600 text-white'
										: 'px-2.5 py-1 text-xs font-semibold rounded-md transition-colors text-white/60 hover:text-white hover:bg-white/10';

									$label = strtoupper($lang['slug']); // RO / EN if your slugs are ro/en

									// For dynamic pages, construct the URL manually
									if ( $dynamic_page_type && $dynamic_slug ) {
										// If target language is the default, no prefix needed
										if ( $lang['slug'] === $default_lang ) {
											$lang_url = home_url( '/' . $dynamic_page_type . '/' . $dynamic_slug . '/' );
										} else {
											// Add language prefix for non-default languages
											$lang_url = home_url( '/' . $lang['slug'] . '/' . $dynamic_page_type . '/' . $dynamic_slug . '/' );
										}
									} else {
										// Use Polylang's URL for regular pages
										$lang_url = $lang['url'];
									}
								?>
									<a
										href="<?php echo esc_url($lang_url); ?>"
										class="<?php echo esc_attr($classes); ?>"
										hreflang="<?php echo esc_attr($lang['slug']); ?>"
										lang="<?php echo esc_attr($lang['slug']); ?>"
									>
										<?php echo esc_html($label); ?>
									</a>
								<?php endforeach; ?>
							</div>
						<?php endif;
					endif; ?>
				</div>

				<!-- ====== MAIN NAVIGATION (Desktop) ====== -->
				<div id="site-navigation" class="items-center hidden gap-1 main-navigation xl:flex">
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'primary',
					) );
					?>
					
					<!-- Separator -->
					<div class="w-px h-5 mx-3 bg-white/10"></div>
					
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'secondary',
					) );
					?>
				</div>

				<!-- ====== RIGHT SIDE ACTIONS ====== -->
				<div class="flex items-center gap-3">
					<?php //include get_template_directory() . '/bits/top-search.php'; ?>
					
					<!-- Search Button -->
					<a class="hidden" href="<?php echo esc_url( home_url( '/cauta/' ) ); ?>"
					   class="flex items-center justify-center w-10 h-10 transition-all border search-trigger rounded-xl bg-white/5 border-white/10 hover:bg-brand-violet/20 hover:border-brand-violet/30 group"
					   title="<?php echo esc_attr( $header_t['search'] ); ?>">
						<svg class="w-5 h-5 transition-colors text-white/60 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
						</svg>
					</a>

					<!-- Login (Desktop) -->
					<a href="https://core.tixello.com/tenant/login" target="_blank"
					   class="hidden px-4 py-2 text-sm font-medium transition-colors xl:block text-white/80 hover:text-white">
						<?php echo esc_html( $header_t['login'] ); ?>
					</a>

					<!-- CTA: Start Free (Desktop) -->
					<a href="https://core.tixello.com/register" target="_blank"
					   class="hidden xl:inline-flex cta-button items-center gap-2 px-5 py-2.5 rounded-full bg-brand-violet text-white text-sm font-semibold hover:bg-brand-violet/90 hover:shadow-lg hover:shadow-brand-violet/30 transition-all duration-300">
						<?php echo esc_html( $header_t['start_free'] ); ?>
						<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
						</svg>
					</a>

					<!-- Mobile Menu Toggle -->
					<button @click="mobileMenu = true"
							class="p-2 transition-colors xl:hidden text-white/80 hover:text-white"
							aria-label="<?php echo esc_attr( $header_t['open_menu'] ); ?>">
						<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
						</svg>
					</button>
				</div>
				
			</nav>
		</div>
		
		<!-- MOBILE MENU OVERLAY -->
        <div class="fixed inset-0 bg-black/60 z-[100] transition-opacity duration-300"
             x-show="mobileMenu"
             x-transition:enter="ease-out"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="mobileMenu = false"
             style="display: none;"></div>
        
        <!-- MOBILE MENU PANEL -->
        <div class="fixed top-0 right-0 w-full h-full bg-zinc-900/98 backdrop-blur-xl z-[101] transform transition-transform duration-300 overflow-y-auto"
             x-show="mobileMenu"
             x-transition:enter="ease-out"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="ease-in"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             style="display: none;">
            
            <div class="py-6">
				<!-- Mobile Header -->
                <div class="flex items-center justify-between px-6 mb-6">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center gap-2.5 mb-6 group">
						<img src="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/tixello-white.svg" alt="<?php echo get_bloginfo( 'name' ); ?> Logo" class="w-32 h-auto transition-opacity duration-300 group-hover:opacity-90">
					</a>
                    <button @click="mobileMenu = false" class="p-2 transition-colors text-white/60 hover:text-white" aria-label="<?php echo esc_attr( $header_t['close_menu'] ); ?>">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

				<!-- Mobile CTAs -->
				<div class="flex gap-3 px-6 mb-8">
					<a href="https://core.tixello.com/register" target="_blank"
					   class="flex-1 px-4 py-3 text-sm font-semibold text-center text-white transition-colors rounded-xl bg-brand-violet hover:bg-brand-violet/80">
						<?php echo esc_html( $header_t['start_free'] ); ?>
					</a>
					<a href="https://core.tixello.com/tenant/login" target="_blank"
					   class="flex-1 px-4 py-3 text-sm font-medium text-center text-white transition-colors border rounded-xl bg-white/10 border-white/10 hover:bg-white/20">
						<?php echo esc_html( $header_t['login'] ); ?>
					</a>
				</div>
				
				<!-- Mobile Navigation -->
				<div class="space-y-1 mobile-nav" x-data="{ activeSubmenu: null }">
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'mobile',
						'menu_id'         => 'mobile-menu',
						'menu_class'      => 'mobile-menu-list space-y-1',
						'container'       => false,
						'fallback_cb'     => false,
						'depth'           => 2,
					) );
					?>
				</div>
			</div>
		</div>
		
	</header>

	<div id="content" class="flex-grow site-content">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
