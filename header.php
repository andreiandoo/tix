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
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<!-- Tixello Mega Menu Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden' ); ?> x-data="{ mobileMenu: false }">
<!-- Scroll Progress Bar -->
<div class="fixed top-0 left-0 h-0.5 bg-gradient-to-r from-meta-blue to-cyan-400 z-[1001]" id="scroll-progress"></div>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="flex flex-col min-h-screen bg-white">

	<?php do_action( 'tailpress_header' ); ?>

	<header id="masthead" class="site-header fixed top-0 left-0 right-0 z-50 transition-all duration-300" 
			x-data="{ mobileMenu: false, scrolled: false }" 
			x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
			:class="scrolled ? 'bg-dark-900/95 backdrop-blur-xl shadow-lg shadow-black/20' : 'bg-transparent'">
		
		<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
			<nav class="flex items-center justify-between h-20">
				
				<!-- ====== LOGO ====== -->
				<div class="site-branding flex-shrink-0">
					<?php if ( has_custom_logo() ) : ?>
						<div class="custom-logo-link">
							<?php the_custom_logo(); ?>
						</div>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2.5 group" rel="home">
							<div class="w-9 h-9 rounded-xl bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center shadow-lg shadow-brand-violet/20 group-hover:shadow-brand-violet/40 transition-shadow">
								<span class="text-white font-display font-bold text-base">T</span>
							</div>
							<span class="font-display font-bold text-xl text-white">
								<?php bloginfo( 'name' ); ?>
							</span>
						</a>
					<?php endif; ?>
				</div>

				<!-- ====== MAIN NAVIGATION (Desktop) ====== -->
				<div id="site-navigation" class="main-navigation hidden xl:flex items-center gap-1">
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu_id'         => 'primary-menu',
						'menu_class'      => 'flex items-center gap-1',
						'container'       => false,
						'fallback_cb'     => false,
						'depth'           => 2,
						'walker'          => new Tixello_Nav_Walker(),
					) );
					?>
					
					<!-- Separator -->
					<div class="w-px h-5 bg-white/10 mx-3"></div>
					
					<!-- Secondary Menu (Artiști, Evenimente, Locații) -->
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'secondary',
						'menu_id'         => 'secondary-menu',
						'menu_class'      => 'flex items-center gap-1',
						'container'       => false,
						'fallback_cb'     => false,
						'depth'           => 1,
						'link_class'      => 'nav-link px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors',
					) );
					?>
				</div>

				<!-- ====== RIGHT SIDE ACTIONS ====== -->
				<div class="flex items-center gap-3">
					
					<!-- Search Button -->
					<a href="<?php echo esc_url( home_url( '/cauta/' ) ); ?>" 
					   class="search-trigger w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-brand-violet/20 hover:border-brand-violet/30 transition-all group"
					   title="<?php esc_attr_e( 'Caută', 'tixello' ); ?>">
						<svg class="w-5 h-5 text-white/60 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
						</svg>
					</a>
					
					<!-- Conectare (Desktop) -->
					<a href="<?php echo esc_url( home_url( '/login/' ) ); ?>" 
					   class="hidden xl:block px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors">
						<?php esc_html_e( 'Conectare', 'tixello' ); ?>
					</a>
					
					<!-- CTA: Începe Gratuit (Desktop) -->
					<a href="<?php echo esc_url( home_url( '/signup/' ) ); ?>" 
					   class="hidden xl:inline-flex cta-button items-center gap-2 px-5 py-2.5 rounded-full bg-brand-violet text-white text-sm font-semibold hover:bg-brand-violet/90 hover:shadow-lg hover:shadow-brand-violet/30 transition-all duration-300">
						<?php esc_html_e( 'Începe Gratuit', 'tixello' ); ?>
						<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
						</svg>
					</a>
					
					<!-- Mobile Menu Toggle -->
					<button @click="mobileMenu = true" 
							class="xl:hidden p-2 text-white/80 hover:text-white transition-colors"
							aria-label="<?php esc_attr_e( 'Deschide meniul', 'tixello' ); ?>">
						<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
						</svg>
					</button>
				</div>
				
			</nav>
		</div>
		
		<!-- ====== MOBILE MENU ====== -->
		<div class="mobile-overlay fixed inset-0 bg-black/60 z-[100] transition-opacity duration-300"
			 x-show="mobileMenu"
			 x-transition:enter="ease-out"
			 x-transition:enter-start="opacity-0"
			 x-transition:enter-end="opacity-100"
			 x-transition:leave="ease-in"
			 x-transition:leave-start="opacity-100"
			 x-transition:leave-end="opacity-0"
			 @click="mobileMenu = false"
			 style="display: none;"></div>
		
		<div class="mobile-menu fixed top-0 right-0 w-full max-w-[400px] h-full bg-dark-900/98 backdrop-blur-xl z-[101] transform transition-transform duration-300 overflow-y-auto"
			 x-show="mobileMenu"
			 x-transition:enter="ease-out"
			 x-transition:enter-start="translate-x-full"
			 x-transition:enter-end="translate-x-0"
			 x-transition:leave="ease-in"
			 x-transition:leave-start="translate-x-0"
			 x-transition:leave-end="translate-x-full"
			 style="display: none;">
			
			<div class="p-6">
				<!-- Mobile Header -->
				<div class="flex items-center justify-between mb-8">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2">
						<div class="w-8 h-8 rounded-lg bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center">
							<span class="text-white font-display font-bold text-sm">T</span>
						</div>
						<span class="font-display font-bold text-lg text-white"><?php bloginfo( 'name' ); ?></span>
					</a>
					<button @click="mobileMenu = false" class="p-2 text-white/60 hover:text-white transition-colors">
						<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
						</svg>
					</button>
				</div>
				
				<!-- Mobile CTAs -->
				<div class="flex gap-3 mb-8">
					<a href="<?php echo esc_url( home_url( '/signup/' ) ); ?>" 
					   class="flex-1 text-center px-4 py-3 rounded-xl bg-brand-violet text-white text-sm font-semibold hover:bg-brand-violet/80 transition-colors">
						<?php esc_html_e( 'Începe Gratuit', 'tixello' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/login/' ) ); ?>" 
					   class="flex-1 text-center px-4 py-3 rounded-xl bg-white/10 text-white text-sm font-medium border border-white/10 hover:bg-white/20 transition-colors">
						<?php esc_html_e( 'Conectare', 'tixello' ); ?>
					</a>
				</div>
				
				<!-- Mobile Navigation -->
				<div class="mobile-nav" x-data="{ activeSubmenu: null }">
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'mobile',
						'menu_id'         => 'mobile-menu',
						'menu_class'      => 'mobile-menu-list space-y-1',
						'container'       => false,
						'fallback_cb'     => false,
						'depth'           => 2,
						// 'walker'          => new Tixello_Mobile_Nav_Walker(),
					) );
					?>
				</div>
			</div>
		</div>
		
	</header>

	<header class="bg-black">

		<div class="container mx-auto">
			<div class="py-6 border-b lg:flex lg:justify-between lg:items-center">
				<div class="flex items-center justify-between">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="text-lg font-extrabold uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php include get_template_directory() . '/bits/top-search.php'; ?>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="header">
		<div class="max-w-7xl mx-auto px-6 lg:px-8">
		<nav class="flex items-center justify-between h-20">
			<a href="/" class="flex items-center gap-2">
			<div class="w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-cyan-500 flex items-center justify-center">
				<span class="text-white font-display font-bold text-sm">T</span>
			</div>
			<span class="font-display font-bold text-xl text-white">Tixello</span>
			</a>
			<div class="hidden lg:flex items-center gap-8">
			<a href="/functionalitati" class="text-sm text-white/70 hover:text-white transition-colors">Funcționalități</a>
			<a href="/preturi" class="text-sm text-white/70 hover:text-white transition-colors">Prețuri</a>
			<a href="/pentru-artisti" class="text-sm text-white/70 hover:text-white transition-colors">Pentru Artiști</a>
			<a href="/pentru-locatii" class="text-sm text-white/70 hover:text-white transition-colors">Pentru Locații</a>
			<a href="/despre" class="text-sm text-white/70 hover:text-white transition-colors">Despre</a>
			</div>
			<div class="hidden lg:flex items-center gap-4">
			<a href="/login" class="text-sm text-white/70 hover:text-white transition-colors">Conectare</a>
			<a href="/signup" class="btn btn-primary text-sm py-2.5 px-5">Începe Gratuit</a>
			</div>
			<button @click="mobileMenu = !mobileMenu" class="lg:hidden text-white p-2">
			<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
			</button>
		</nav>
		</div>
		<div x-show="mobileMenu" x-transition class="lg:hidden bg-dark-800 border-t border-white/10">
		<div class="px-6 py-4 space-y-3">
			<a href="/functionalitati" class="block py-2 text-white/70">Funcționalități</a>
			<a href="/preturi" class="block py-2 text-white/70">Prețuri</a>
			<a href="/despre" class="block py-2 text-white/70">Despre</a>
			<a href="/signup" class="btn btn-primary w-full justify-center mt-4">Începe Gratuit</a>
		</div>
		</div>
	</header>

	<div id="content" class="flex-grow site-content">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
