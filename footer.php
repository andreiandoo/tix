
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<div class="">

</div>

<footer id="colophon" class="site-footer bg-slate-100" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="bg-white">
		<div class="container py-6 mx-auto border-t border-slate-200">
			<div class="grid grid-cols-6 gap-x-8">
				<div class="fmenu">
					<h4 class="mb-4 text-xl font-bold">Company</h4>
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
					<h4 class="mb-4 text-xl font-bold">Resources</h4>
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
					<h4 class="mb-4 text-xl font-bold">Quick Links</h4>
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
					<h4 class="mb-4 text-xl font-bold">Legal</h4>
					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'footer-legal',
							'container_class' => '',
							'menu_class'      => 'flex flex-col gap-y-2',
							'theme_location'  => 'footer_legal',
							'li_class'        => '',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
				<div class="fmenu">
					<h4 class="mb-4 text-xl font-bold">Resources</h4>
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
				<div class="fmenu">
					<h4 class="mb-4 text-xl font-bold">Company</h4>
					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'footer-company-2',
							'container_class' => '',
							'menu_class'      => 'flex flex-col gap-y-2 text-base',
							'theme_location'  => 'footer_company',
							'li_class'        => '',
							'fallback_cb'     => false,
						)
					);
					?>
					<div class="">
						<img src="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/GDPR.svg" alt="GDPR icon" class="inline w-24 h-16">
						<img src="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/ISO.svg" alt="ISO icon" class="inline w-24 h-16 ml-1">
					</div>
				</div>
			</div>

			<div class="flex items-center justify-between pt-6 mt-6 border-t gap-x-8 border-slate-200">
				<span class="font-bold uppercase">Compare Tixello with:</span>
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'footer-alternatives',
						'container_class' => '',
						'menu_class'      => 'flex flex-wrap items-center gap-x-6 gap-y-2 font-semibold text-slate-800 hover:text-slate-900',
						'theme_location'  => 'footer_alternatives',
						'li_class'        => '',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
			
			<div class="flex items-center justify-between pt-6 mt-6 border-t border-slate-200">
				<div class="flex items-center gap-x-4">
					<a href="<?php echo get_bloginfo( 'url' ); ?>" class="text-lg font-extrabold text-gray-900 uppercase">
						<?php echo get_bloginfo( 'name' ); ?>
					</a>
					<div class="">
						<span class="">
							Made with love for events, in the EU <img src="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/eu-flag.svg" alt="EU Flag" class="inline w-6 h-4 ml-1">
						</span>
						<span class="">Copyright &copy; <?php echo date_i18n( 'Y' );?> <?php echo get_bloginfo( 'name' );?></span>
					</div>
				</div>
				<div class=""></div>
			</div>
		</div>
	</div>

	<div class="container py-6 mx-auto">
		<div class="flex items-center justify-between">
			<div class="">
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
			<ul class="">
				<li>
					<a href="" class="">

					</a>
				</li>
				<li>
					<a href="" class="">
						
					</a>
				</li>
				<li>
					<a href="" class="">
						
					</a>
				</li>
				<li>
					<a href="" class="">
						
					</a>
				</li>
				<li>
					<a href="" class="">
						
					</a>
				</li>
			</ul>
		</div>
	</div>
</footer>

</div>


<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
