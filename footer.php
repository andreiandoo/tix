
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<div class="">

</div>

<?php
// ==========================
// Footer Multilanguage Support (Polylang)
// ==========================
$footer_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'ro';

$footer_t = [
	'brand_desc' => $footer_lang === 'ro'
		? 'Platforma completa de ticketing pentru organizatori de evenimente din Romania si Europa.'
		: 'The complete ticketing platform for event organizers in Romania and Europe.',
	'company' => $footer_lang === 'ro' ? 'Companie' : 'Company',
	'resources' => $footer_lang === 'ro' ? 'Resurse' : 'Resources',
	'quick_links' => $footer_lang === 'ro' ? 'Link-uri rapide' : 'Quick Links',
	'compare_title' => $footer_lang === 'ro' ? 'Compara Tixello cu' : 'Compare Tixello with',
	'made_with_love' => $footer_lang === 'ro' ? 'Facut cu dragoste pentru evenimente, in UE' : 'Made with love for events, in the EU',
];

// Carousel items for Compare section
$carousel_items = [
	[
		'slug' => 'iabilet',
		'name' => 'iaBilet',
		'icon_bg' => 'bg-yellow-500/20',
		'icon_text' => 'text-yellow-400',
		'icon_letter' => 'ia',
	],
	[
		'slug' => 'bilete-ro',
		'name' => 'Bilete.ro',
		'icon_bg' => 'bg-red-500/20',
		'icon_text' => 'text-red-400',
		'icon_letter' => 'B',
	],
	[
		'slug' => 'livetickets',
		'name' => 'LiveTickets',
		'icon_bg' => 'bg-lime-500/20',
		'icon_text' => 'text-lime-400',
		'icon_letter' => 'L',
	],
	[
		'slug' => 'ambilet',
		'name' => 'amBilet',
		'icon_bg' => 'bg-fuchsia-500/20',
		'icon_text' => 'text-fuchsia-400',
		'icon_letter' => 'a',
	],
	[
		'slug' => 'getin',
		'name' => 'get-in.ro',
		'icon_bg' => 'bg-orange-500/20',
		'icon_text' => 'text-orange-400',
		'icon_letter' => 'G',
	],
	[
		'slug' => 'eventim',
		'name' => 'Eventim',
		'icon_bg' => 'bg-blue-500/20',
		'icon_text' => 'text-blue-400',
		'icon_letter' => 'Ev',
	],
	[
		'slug' => 'iticket',
		'name' => 'iTicket',
		'icon_bg' => 'bg-sky-500/20',
		'icon_text' => 'text-sky-400',
		'icon_letter' => 'iT',
	],
	[
		'slug' => 'myticket',
		'name' => 'MyTicket',
		'icon_bg' => 'bg-teal-500/20',
		'icon_text' => 'text-teal-400',
		'icon_letter' => 'M',
	],
	[
		'slug' => 'oveit',
		'name' => 'Oveit',
		'icon_bg' => 'bg-indigo-500/20',
		'icon_text' => 'text-indigo-400',
		'icon_letter' => 'O',
	],
	[
		'slug' => 'entertix',
		'name' => 'Entertix',
		'icon_bg' => 'bg-amber-500/20',
		'icon_text' => 'text-amber-400',
		'icon_letter' => 'E',
	],
];
?>

<footer id="colophon" class="relative border-t site-footer bg-zinc-950 border-white/5" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<!-- Gradient accent line -->
	<div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-violet-500/50 to-transparent"></div>

	<div class="px-4 py-12 mx-auto container-site sm:px-6 lg:px-8">
		<div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-6 lg:gap-12">
			<!-- Brand Column -->
			<div class="col-span-2 md:col-span-3 lg:col-span-2">
				<!-- Logo -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center gap-2.5 mb-6 group">
					<img src="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/tixello-white.svg" alt="<?php echo get_bloginfo( 'name' ); ?> Logo" class="w-32 h-auto transition-opacity duration-300 group-hover:opacity-90">
				</a>

				<p class="max-w-xs mb-6 text-sm leading-relaxed text-white/50">
					<?php echo esc_html( $footer_t['brand_desc'] ); ?>
				</p>

				<!-- Trust Badges -->
				<div class="flex items-center gap-4 mb-6">
					<img src="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/GDPR.svg" alt="GDPR icon" class="inline w-24 h-16">
					<img src="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/ISO.svg" alt="ISO icon" class="inline w-24 h-16 ml-1">
				</div>

				<!-- Social Links -->
				<div class="flex items-center gap-3">
					<a href="#" class="flex items-center justify-center w-10 h-10 transition-all border rounded-xl bg-white/5 border-white/10 text-white/60 hover:text-white hover:bg-violet-600/20 hover:border-violet-500/30">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
					</a>
					<a href="#" class="flex items-center justify-center w-10 h-10 transition-all border rounded-xl bg-white/5 border-white/10 text-white/60 hover:text-white hover:bg-violet-600/20 hover:border-violet-500/30">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
					</a>
					<a href="#" class="flex items-center justify-center w-10 h-10 transition-all border rounded-xl bg-white/5 border-white/10 text-white/60 hover:text-white hover:bg-violet-600/20 hover:border-violet-500/30">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
					</a>
					<a href="#" class="flex items-center justify-center w-10 h-10 transition-all border rounded-xl bg-white/5 border-white/10 text-white/60 hover:text-white hover:bg-violet-600/20 hover:border-violet-500/30">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
					</a>
				</div>
			</div>

			<div class="fmenu">
				<h4 class="mb-4 text-sm font-bold tracking-wider text-white uppercase"><?php echo esc_html( $footer_t['company'] ); ?></h4>
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'footer-company',
						'container_class' => '',
						'menu_class'      => 'flex flex-col gap-y-2 text-base',
						'theme_location'  => 'footer_company',
						'li_class'        => '',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
			<div class="fmenu">
				<h4 class="mb-4 text-sm font-bold tracking-wider text-white uppercase"><?php echo esc_html( $footer_t['resources'] ); ?></h4>
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'footer-resources',
						'container_class' => '',
						'menu_class'      => 'flex flex-col gap-y-2',
						'theme_location'  => 'footer_resources',
						'li_class'        => '',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
			<div class="fmenu">
				<h4 class="mb-4 text-sm font-bold tracking-wider text-white uppercase"><?php echo esc_html( $footer_t['quick_links'] ); ?></h4>
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'footer-quicklinks',
						'container_class' => '',
						'menu_class'      => 'flex flex-col gap-y-2',
						'theme_location'  => 'footer_quicklinks',
						'li_class'        => '',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
			<div class="fmenu">
				<h4 class="mb-4 text-sm font-bold tracking-wider text-white uppercase"><?php echo esc_html( $footer_t['resources'] ); ?></h4>
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'footer-resources-2',
						'container_class' => '',
						'menu_class'      => 'flex flex-col gap-y-2',
						'theme_location'  => 'footer_resources',
						'li_class'        => '',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>

		<!-- Compare Section -->
		<div class="pt-8 mt-12 border-t border-white/5">
			<h4 class="mb-4 text-sm font-bold tracking-wider text-white uppercase"><?php echo esc_html( $footer_t['compare_title'] ); ?></h4>
			<div class="flex overflow-hidden">
				<div class="flex animate-scroll-x gap-4 hover:[animation-play-state:paused]">
					<?php
					// Render carousel items twice for infinite scroll effect
					for ($i = 0; $i < 2; $i++) :
						foreach ($carousel_items as $item) :
					?>
					<a href="<?php echo home_url('/compare/' . $item['slug']); ?>" class="flex-shrink-0 w-56 p-4 rounded-xl bg-white/[0.03] border border-white/10 hover:border-violet-500/30 hover:bg-white/[0.05] transition-all group">
						<div class="flex items-center gap-3 mb-2">
							<div class="flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-cyan-500"><span class="text-xs font-bold text-white">T</span></div>
							<span class="text-sm text-white/40">vs</span>
							<div class="w-8 h-8 rounded-lg <?php echo esc_attr($item['icon_bg']); ?> flex items-center justify-center"><span class="<?php echo esc_attr($item['icon_text']); ?> font-bold text-xs"><?php echo esc_html($item['icon_letter']); ?></span></div>
						</div>
						<p class="text-sm font-medium text-white transition-colors group-hover:text-violet-400"><?php echo esc_html($item['name']); ?></p>
					</a>
					<?php
						endforeach;
					endfor;
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="border-t border-white/5 bg-zinc-950/50">
		<div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
				<div class="flex items-center gap-x-4">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center gap-2.5 group">
						<img src="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/tx-white.svg" alt="<?php echo get_bloginfo( 'name' ); ?> Logo" class="w-8 h-auto transition-opacity duration-300 group-hover:opacity-90">
					</a>
					<div class="">
						<span class="text-slate-500">
							<?php echo esc_html( $footer_t['made_with_love'] ); ?> <img src="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/eu-flag.svg" alt="EU Flag" class="inline w-6 h-4 ml-1">
						</span>
					</div>
				</div>
				<div class="flex flex-col gap-4 sm:flex-row sm:items-center">
					<span class="text-sm text-white/40">Copyright &copy; <?php echo date_i18n( 'Y' );?> <?php echo get_bloginfo( 'name' );?></span>
					<div class="fmenu">
						<?php
						wp_nav_menu(
							array(
								'container_id'    => 'footer-legal',
								'container_class' => '',
								'menu_class'      => 'flex flex-wrap items-center gap-x-6 gap-y-2 text-slate-600 text-sm',
								'theme_location'  => 'footer_legal',
								'li_class'        => 'hover:text-slate-800',
								'fallback_cb'     => false,
							)
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>


<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
