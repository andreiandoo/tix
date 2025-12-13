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
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden' ); ?> x-data="{ mobileMenu: false }">
<!-- Scroll Progress Bar -->
<div class="fixed top-0 left-0 h-0.5 bg-gradient-to-r from-meta-blue to-cyan-400 z-[1001]" id="scroll-progress"></div>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="flex flex-col min-h-screen bg-white">

	<?php do_action( 'tailpress_header' ); ?>

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
