<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );


// =========================================================================
// Disable the emoji's
// =========================================================================
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );    
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    
    // Remove from TinyMCE
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
// =========================================================================
// REMOVE USELESS FROM BACKEND
// =========================================================================
function remove_screenoptions() {
    echo '<style type="text/css">
    #screen-meta-links,.notice.is-dismissible, .notice.notice-warning, .wcpdf-extensions-ad{ display: none; }
    #wpcontent { background:#fff;}
    </style>';
}
//add_action('admin_head', 'remove_screenoptions');
function no_update_notification() {
    remove_action('admin_notices', 'update_nag', 3);
}
add_action('admin_notices', 'no_update_notification', 1);


function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);  //remove at-a-glance
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);    //remove WordPress-newsfeed
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);  //remove quick-draft
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

// =========================================================================
// REMOVE USELESS FROM FRONTEND
// =========================================================================
function wpbeginner_remove_version() {
    return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');

// remove wp version number from scripts and styles
function remove_css_js_version( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action ('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links_extra', 3); // Remove Every Extra Links to Rss Feeds.
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wc_products_rss_feed');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head'); // Remove pagination Previous Next Articles
// Remove API & JSON Embed
remove_action( 'wp_head','rest_output_link_wp_head');
remove_action( 'wp_head','wp_oembed_add_discovery_links');
remove_action( 'wp_head','rest_output_link_header', 11);
// Remove useless styles
add_action( 'wp_print_styles', 'remove_styles', 100 );
function remove_styles(){
    //wp_deregister_style('dashicons');
}
// Remove useless scripts
add_action('wp_enqueue_scripts', 'remove_scripts', 100);
function remove_scripts(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' );
}
// Remove global-styles-inline-css completely
add_action( 'after_setup_theme', function() {
    remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
    remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
}, 10 );

// =========================================================================
// REMOVE USELESS FROM WOOCOMMERCE
// =========================================================================
add_filter( 'woocommerce_marketing_menu_items', '__return_empty_array' );

add_filter( 'woocommerce_admin_features', 'disable_features' );
function disable_features( $features ) {
    $marketing = array_search('marketing', $features);
    unset( $features[$marketing] );
    return $features;
}

add_filter( 'woocommerce_admin_disabled', '__return_true' );

/* Disable extensions menu WooCommerce */
add_action( 'admin_menu', 'wcbloat_remove_admin_addon_submenu', 999 );
function wcbloat_remove_admin_addon_submenu() {
    remove_submenu_page( 'woocommerce', 'wc-addons');
}

add_filter( 'woocommerce_allow_marketplace_suggestions', '__return_false', 999 ); //Extension suggestions
add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' ); //Connect to woocommerce.com

/* Disable WooCommerce dashboard status widget */
add_action('wp_dashboard_setup', 'wcbloat_disable_woocommerce_status');
function wcbloat_disable_woocommerce_status() {
    remove_meta_box('woocommerce_dashboard_status', 'dashboard', 'normal');
}

/* Disable WooCommerce widgets */
add_action('widgets_init', 'wphelp_disable_widgets_woo', 99);
function wphelp_disable_widgets_woo() {
    unregister_widget('WC_Widget_Products');
    unregister_widget('WC_Widget_Product_Categories');
    unregister_widget('WC_Widget_Product_Tag_Cloud');
    unregister_widget('WC_Widget_Cart');
    unregister_widget('WC_Widget_Layered_Nav');
    unregister_widget('WC_Widget_Layered_Nav_Filters');
    unregister_widget('WC_Widget_Price_Filter');
    unregister_widget('WC_Widget_Product_Search');
    unregister_widget('WC_Widget_Recently_Viewed');
    unregister_widget('WC_Widget_Recent_Reviews');
    unregister_widget('WC_Widget_Top_Rated_Products');
    unregister_widget('WC_Widget_Rating_Filter');
}

/* Disable styles and scripts WooCommerce */
add_action('wp_enqueue_scripts', 'wphelp_disable_scripts_woocommerce', 99);
function wphelp_disable_scripts_woocommerce() {
    if(function_exists('is_woocommerce')) {
        if(!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page() && !is_product() && !is_product_category() && !is_shop()) {
            //Styles
            wp_dequeue_style('woocommerce-general');
            wp_dequeue_style('woocommerce-layout');
            wp_dequeue_style('woocommerce-smallscreen');
            wp_dequeue_style('woocommerce_frontend_styles');
            wp_dequeue_style('woocommerce_fancybox_styles');
            wp_dequeue_style('woocommerce_chosen_styles');
            wp_dequeue_style('woocommerce_prettyPhoto_css');
            //Scripts
            wp_dequeue_script('wc_price_slider');
            wp_dequeue_script('wc-single-product');
            wp_dequeue_script('wc-add-to-cart');
            wp_dequeue_script('wc-checkout');
            wp_dequeue_script('wc-add-to-cart-variation');
            wp_dequeue_script('wc-single-product');
            wp_dequeue_script('wc-cart');
            wp_dequeue_script('wc-chosen');
            wp_dequeue_script('woocommerce');
            wp_dequeue_script('prettyPhoto');
            wp_dequeue_script('prettyPhoto-init');
            wp_dequeue_script('jquery-blockui');
            wp_dequeue_script('jquery-placeholder');
            wp_dequeue_script('fancybox');
            wp_dequeue_script('jqueryui');
        }
    }
}

/* Disable password strength meter */ 
// function wphelp_disable_password_strength_meter() {
//     wp_dequeue_script( 'wc-password-strength-meter' );
// }
// add_action( 'wp_print_scripts', 'wphelp_disable_password_strength_meter', 10 );

/** Remove product data tabs */
function my_remove_product_tabs( $tabs ) {
  unset( $tabs['additional_information'] ); // Remove the additional information tab
  return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'my_remove_product_tabs', 98 );

// =========================================================================
// REMOVE USELESS FROM BACKEND
// =========================================================================
// add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
// function remove_dashboard_widgets() {
//   global $wp_meta_boxes;
//   unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);  //remove at-a-glance
//   unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);    //remove WordPress-newsfeed
//   unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);  //remove quick-draft
// }

// =========================================================================
// ADD SVG SUPPORT
// =========================================================================
/**
 * Allow SVG uploads for administrator users.
 */
add_filter(
	'upload_mimes',
	function ( $upload_mimes ) {
		// By default, only administrator users are allowed to add SVGs.
		// To enable more user types edit or comment the lines below but beware of
		// the security risks if you allow any user to upload SVG files.
		if ( ! current_user_can( 'administrator' ) ) {
			return $upload_mimes;
		}

		$upload_mimes['svg']  = 'image/svg+xml';
		$upload_mimes['svgz'] = 'image/svg+xml';

		return $upload_mimes;
	}
);

/**
 * Add SVG files mime check.
 */
add_filter(
	'wp_check_filetype_and_ext',
	function ( $wp_check_filetype_and_ext, $file, $filename, $mimes, $real_mime ) {

		if ( ! $wp_check_filetype_and_ext['type'] ) {

			$check_filetype  = wp_check_filetype( $filename, $mimes );
			$ext             = $check_filetype['ext'];
			$type            = $check_filetype['type'];
			$proper_filename = $filename;

			if ( $type && 0 === strpos( $type, 'image/' ) && 'svg' !== $ext ) {
				$ext  = false;
				$type = false;
			}

			$wp_check_filetype_and_ext = compact( 'ext', 'type', 'proper_filename' );
		}

		return $wp_check_filetype_and_ext;

	},
	10,
	5
);

/**
 * Fix Mega Menu + Polylang compatibility
 */
add_filter( 'megamenu_settings', 'tixello_megamenu_polylang_fix' );

function tixello_megamenu_polylang_fix( $settings ) {
    // Obține toate limbile Polylang
    if ( function_exists( 'pll_languages_list' ) ) {
        $languages = pll_languages_list( array( 'fields' => 'slug' ) );
        
        foreach ( $languages as $lang ) {
            // Activează Mega Menu pentru fiecare locație de limbă
            $location_key = 'primary___' . $lang;
            
            if ( ! isset( $settings[ $location_key ] ) ) {
                $settings[ $location_key ] = array();
            }
            
            $settings[ $location_key ]['enabled'] = '1';
        }
    }
    
    return $settings;
}

//#####################################################
// CUSTOM MENUS ##
//#####################################################
function register_footer_menus() {
    register_nav_menu('footer_legal', 'Footer Legal');
    register_nav_menu('footer_resources', 'Footer Resources');
    register_nav_menu('footer_company', 'Footer Company');
    register_nav_menu('footer_quicklinks', 'Footer Quicklinks');
    register_nav_menu('footer_alternatives', 'Footer Alternatives');
    register_nav_menu('mobile', 'Mobile Menu');
    register_nav_menu('secondary', 'Secondary Menu');
}
function register_top_menus() {
    register_nav_menu('top_main_menu', 'Top Main');
}
add_action('init', 'register_footer_menus');
add_action('init', 'register_top_menus');





/**
 * Fetch ALL public events from Tixello Core (paginat data + pagination)
 * Returnează un simplu array de evenimente (comasat din toate paginile).
 */
function tixello_fetch_events_core() {
    static $cached = null;

    if ( ! is_null( $cached ) ) {
        return $cached;
    }

    $api_key = defined( 'TIXELLO_API_KEY' )
        ? TIXELLO_API_KEY
        : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

    $base_url = 'https://core.tixello.com/api/v1/public/events';

    $all   = [];
    $page  = 1;
    $max_pages_safety = 50; // safety net ca să nu intrăm în buclă

    while ( $page <= $max_pages_safety ) {
        $url = add_query_arg( 'page', $page, $base_url );

        $response = wp_remote_get(
            $url,
            [
                'headers' => [
                    'X-API-Key' => $api_key,
                ],
                'timeout' => 20,
            ]
        );

        if ( is_wp_error( $response ) ) {
            break;
        }

        $body = wp_remote_retrieve_body( $response );
        $data = json_decode( $body, true );

        if ( ! is_array( $data ) ) {
            break;
        }

        // Noua structură: { "data": [...], "pagination": {...} }
        $items = [];
        if ( isset( $data['data'] ) && is_array( $data['data'] ) ) {
            $items = $data['data'];
        }

        if ( empty( $items ) ) {
            break;
        }

        foreach ( $items as $item ) {
            if ( is_array( $item ) ) {
                $all[] = $item;
            }
        }

        // Paginare: ne uităm la "pagination"
        if (
            isset( $data['pagination']['current_page'], $data['pagination']['last_page'] )
        ) {
            $current_page = (int) $data['pagination']['current_page'];
            $last_page    = (int) $data['pagination']['last_page'];

            if ( $current_page >= $last_page ) {
                break;
            }

            $page = $current_page + 1;
        } elseif ( ! empty( $data['pagination']['next_page_url'] ) ) {
            // fallback – dacă vrei, poți folosi direct next_page_url
            $page++;
        } else {
            // fără info clară de paginare -> ne oprim
            break;
        }
    }

    $cached = $all;
    return $all;
}


/**
 * Helper: formatează data din ISO în ceva uman (ex: 30 Nov 2025).
 */
function tixello_format_event_date( $iso_string ) {
    if ( empty( $iso_string ) ) {
        return '';
    }

    try {
        $dt = new DateTime( $iso_string );
    } catch ( Exception $e ) {
        return '';
    }

    return $dt->format( 'j M Y' );
}

/**
 * Helper: formatează timpul "HH:MM:SS" în "HH:MM".
 */
function tixello_format_event_time( $time_string ) {
    if ( empty( $time_string ) ) {
        return '';
    }

    $parts = explode( ':', $time_string );
    if ( count( $parts ) < 2 ) {
        return esc_html( $time_string );
    }

    return sprintf( '%02d:%02d', intval( $parts[0] ), intval( $parts[1] ) );
}

/**
 * Shortcode: [tixello_events type="Concert"]
 * Filtrează evenimentele după event_types.name și afișează:
 *  - Titlu: numele tipului + număr evenimente (click → /search?type=...)
 *  - Buton "View all" (→ /search?type=...)
 *  - Pills:
 *      - primul pill: "All (X)" = toate evenimentele din type-ul respectiv
 *      - restul: genurile (event_genres.name) + count, link → /search?genre=&type=
 *  - Grid 8 coloane (ultima se vede pe jumătate)
 */
function tixello_events_by_type_shortcode( $atts ) {
    $atts = shortcode_atts(
        [
            'type'     => '',      // poate fi UN singur type sau o listă separată prin virgulă (ex: "Concert, Music Festival")
            'limit'    => 0,       // opțional: limită maximă de evenimente
            'title'    => '',
            'theme'    => 'light', // light|dark – tema culorilor
            'icon'     => '',      // emoji pentru titlu (ex: "🎵")
            'subtitle' => '',      // subtitlu sub titlu
            'cols'     => '4',     // numărul de coloane în grid
        ],
        $atts,
        'tixello_events'
    );

    $filter_type_raw = trim( $atts['type'] );
    $section_title   = trim( $atts['title'] );
    $is_dark         = strtolower( $atts['theme'] ) === 'dark';
    $icon            = trim( $atts['icon'] );
    $subtitle        = trim( $atts['subtitle'] );
    $cols            = intval( $atts['cols'] );

    // MULTIPLE TYPES: "Concert, Music Festival, Recital"
    $filter_types = [];
    if ( $filter_type_raw !== '' ) {
        $parts = explode( ',', $filter_type_raw );
        foreach ( $parts as $part ) {
            $part = trim( $part );
            if ( $part !== '' ) {
                $filter_types[] = $part;
            }
        }
    }

    $has_type_filter = ! empty( $filter_types );
    $single_type     = $has_type_filter && count( $filter_types ) === 1;

    $limit = intval( $atts['limit'] );

    // Ia toate evenimentele din Core
    $events_raw = tixello_fetch_events_core();

    if ( empty( $events_raw ) || ! is_array( $events_raw ) ) {
        $no_events_class = $is_dark ? 'text-sm text-white/50' : 'text-sm text-slate-500';
        return '<p class="' . esc_attr( $no_events_class ) . '">No events available.</p>';
    }

    $STORAGE_BASE = 'https://core.tixello.com/storage/';

    $full_storage_url = function( $path ) use ( $STORAGE_BASE ) {
        if ( empty( $path ) ) {
            return '';
        }
        if ( preg_match( '#^https?://#i', $path ) ) {
            return esc_url( $path );
        }
        $path = ltrim( $path, '/' );
        return esc_url( $STORAGE_BASE . $path );
    };

    $filtered_events = [];
    $genre_counts    = [];

    // Filtrare după event_types.name (acceptă acum MULTIPLE types)
    foreach ( $events_raw as $ev ) {
        if ( ! is_array( $ev ) ) {
            continue;
        }

        if ( $has_type_filter ) {
            $has_type = false;

            if ( ! empty( $ev['event_types'] ) && is_array( $ev['event_types'] ) ) {
                foreach ( $ev['event_types'] as $type_obj ) {
                    if ( empty( $type_obj['name'] ) ) {
                        continue;
                    }
                    $event_type_name = $type_obj['name'];

                    // Verificăm dacă acest event_type se află în lista de filtre (case-insensitive)
                    foreach ( $filter_types as $needle ) {
                        if ( strcasecmp( $event_type_name, $needle ) === 0 ) {
                            $has_type = true;
                            break 2; // ieșim din ambele foreach
                        }
                    }
                }
            }

            if ( ! $has_type ) {
                continue;
            }
        }

        $filtered_events[] = $ev;
    }

    if ( empty( $filtered_events ) ) {
        // Empty state pentru dark theme
        if ( $is_dark ) {
            $empty_icon = $icon ? $icon : '📅';
            ob_start();
            ?>
            <div class="flex flex-col items-center justify-center py-16 text-center">
                <div class="flex items-center justify-center w-20 h-20 mb-4 rounded-2xl bg-white/5">
                    <span class="text-4xl opacity-50"><?php echo esc_html( $empty_icon ); ?></span>
                </div>
                <h3 class="mb-2 text-lg font-medium text-white/70">No events found</h3>
                <p class="max-w-md text-sm text-white/40">
                    <?php if ( $has_type_filter ) : ?>
                        There are no <?php echo esc_html( $section_title ? $section_title : implode( ', ', $filter_types ) ); ?> events scheduled at the moment. Check back soon or explore other categories.
                    <?php else : ?>
                        There are no events scheduled at the moment. Check back soon!
                    <?php endif; ?>
                </p>
            </div>
            <?php
            return ob_get_clean();
        }

        if ( $has_type_filter ) {
            return '<p class="text-sm text-slate-500">No events found for type <strong>' . esc_html( implode( ', ', $filter_types ) ) . '</strong>.</p>';
        }

        return '<p class="text-sm text-slate-500">No events available.</p>';
    }

    // Limită (dacă a fost setată)
    if ( $limit > 0 && count( $filtered_events ) > $limit ) {
        $filtered_events = array_slice( $filtered_events, 0, $limit );
    }

    // Construim counts pentru genres, pe baza evenimentelor filtrate
    foreach ( $filtered_events as $ev ) {
        if ( ! empty( $ev['event_genres'] ) && is_array( $ev['event_genres'] ) ) {
            foreach ( $ev['event_genres'] as $g ) {
                if ( empty( $g['name'] ) ) {
                    continue;
                }
                $name = $g['name'];
                if ( ! isset( $genre_counts[ $name ] ) ) {
                    $genre_counts[ $name ] = 0;
                }
                $genre_counts[ $name ]++;
            }
        }
    }

    ksort( $genre_counts );

    // Titlul de sus + View all
    $events_count = count( $filtered_events );
    $search_base  = home_url( '/search/' );

    // Label pentru titlu:
    // - dacă ai un singur type → exact numele lui (Concert)
    // - dacă ai mai multe → concatenare cu virgulă
    // - dacă nu ai niciun filtru → "All events"
    if ( $has_type_filter ) {
        $title_label = implode( ', ', $filter_types );
    } else {
        $title_label = 'All events';
    }

    // Query param pentru search:
    // - dacă ai UN SINGUR type → îl trimitem ca ?type=Concert
    // - dacă ai MULTIPLE types → nu mai trimitem type, doar mergem la /search/ (view all)
    $search_type_param = ( $single_type && ! empty( $filter_types[0] ) )
        ? $filter_types[0]
        : '';

    $type_url = $search_type_param !== ''
        ? add_query_arg( 'type', $search_type_param, $search_base )
        : $search_base;

    // Grid classes based on cols parameter
    $grid_cols_class = 'grid-cols-' . ( $cols > 0 ? $cols : 4 );
    if ( ! $is_dark ) {
        $grid_cols_class = 'grid-cols-8';
    }

    ob_start();

    if ( $is_dark ) :
    // ===== DARK THEME OUTPUT =====
    ?>
    <section class="tixello-events-by-type-dark">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <?php if ( $icon ) : ?>
                    <span class="text-3xl"><?php echo esc_html( $icon ); ?></span>
                <?php endif; ?>
                <div>
                    <h2 class="text-xl font-bold text-white lg:text-2xl"><?php echo esc_html( $section_title !== '' ? $section_title : 'Events' ); ?></h2>
                    <?php if ( $subtitle ) : ?>
                        <p class="text-sm text-white/50"><?php echo esc_html( $subtitle ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ( $single_type && $search_type_param !== '' ) : ?>
                <a href="<?php echo esc_url( $type_url ); ?>" class="text-sm transition-colors text-violet-400 hover:text-violet-300">
                    View all →
                </a>
            <?php endif; ?>
        </div>

        <!-- Genre Tags -->
        <?php if ( ! empty( $genre_counts ) ) : ?>
            <div class="flex flex-wrap gap-2 mb-6">
                <?php foreach ( $genre_counts as $genre_name => $count ) : ?>
                    <?php
                    $genre_args = [ 'genre' => $genre_name ];
                    if ( $single_type && $search_type_param !== '' ) {
                        $genre_args['type'] = $search_type_param;
                    }
                    $genre_url = add_query_arg( $genre_args, $search_base );
                    ?>
                    <a href="<?php echo esc_url( $genre_url ); ?>"
                       class="px-3 py-1 text-xs transition-all border rounded-full bg-white/5 border-white/10 text-white/60 hover:text-white hover:bg-violet-600/20 hover:border-violet-500/30">
                        <?php echo esc_html( $genre_name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Events Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:<?php echo esc_attr( $grid_cols_class ); ?> gap-6">
            <?php foreach ( $filtered_events as $ev ) : ?>
                <?php
                $poster_url   = $full_storage_url( isset( $ev['poster_url'] ) ? $ev['poster_url'] : '' );
                $start_date   = isset( $ev['start_date'] ) ? $ev['start_date'] : '';
                $title        = isset( $ev['title'] ) ? $ev['title'] : '';
                $price_from   = isset( $ev['price_from'] ) ? $ev['price_from'] : null;
                $venue_name   = isset( $ev['venue']['name'] ) ? $ev['venue']['name'] : '';

                // Parse date for badge
                $date_obj = $start_date ? DateTime::createFromFormat( 'Y-m-d', $start_date ) : null;
                $date_month = $date_obj ? $date_obj->format( 'M' ) : '';
                $date_day = $date_obj ? $date_obj->format( 'd' ) : '';

                // Link preferat
                $event_url = '';
                if ( ! empty( $ev['slug'] ) ) {
                    $event_url = home_url( '/events/' . $ev['slug'] . '/' );
                } elseif ( isset( $ev['tenant']['event_url'] ) && ! empty( $ev['tenant']['event_url'] ) ) {
                    $event_url = $ev['tenant']['event_url'];
                } elseif ( ! empty( $ev['event_website_url'] ) ) {
                    $event_url = $ev['event_website_url'];
                } elseif ( ! empty( $ev['website_url'] ) ) {
                    $event_url = $ev['website_url'];
                } elseif ( ! empty( $ev['facebook_url'] ) ) {
                    $event_url = $ev['facebook_url'];
                }
                $event_url = $event_url ? esc_url( $event_url ) : '';
                ?>
                <a href="<?php echo $event_url; ?>" class="relative overflow-hidden transition-all border group bg-zinc-900/50 rounded-2xl border-white/5 hover:border-violet-500/30">
                    <div class="aspect-[3/4] relative overflow-hidden">
                        <?php if ( $poster_url ) : ?>
                            <img src="<?php echo $poster_url; ?>"
                                 alt="<?php echo esc_attr( $title ); ?>"
                                 class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                 loading="lazy">
                        <?php else : ?>
                            <div class="w-full h-full bg-zinc-800"></div>
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-zinc-900 via-transparent to-transparent"></div>

                        <!-- Date badge -->
                        <?php if ( $date_month && $date_day ) : ?>
                            <div class="absolute flex flex-col items-center px-3 py-2 text-white top-3 left-3 rounded-xl bg-violet-600">
                                <span class="text-xs font-medium uppercase"><?php echo esc_html( $date_month ); ?></span>
                                <span class="text-xl font-bold leading-none"><?php echo esc_html( $date_day ); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="p-4">
                        <h3 class="mb-1 font-semibold text-white transition-colors group-hover:text-violet-400 line-clamp-2">
                            <?php echo esc_html( $title ); ?>
                        </h3>
                        <?php if ( $venue_name ) : ?>
                            <div class="flex items-center gap-2 mb-3 text-sm text-white/50">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="truncate"><?php echo esc_html( $venue_name ); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="flex items-center justify-between pt-3 border-t border-white/5">
                            <span class="text-sm text-white/40">from</span>
                            <span class="text-lg font-bold text-white">
                                <?php if ( is_null( $price_from ) || $price_from == 0 ) : ?>
                                    FREE
                                <?php else : ?>
                                    <?php echo esc_html( $price_from ); ?> RON
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
    <?php
    else :
    // ===== LIGHT THEME OUTPUT (original) =====
    ?>
    <section class="my-8 tixello-events-by-type">
        <!-- Titlu tip eveniment + count + View all -->
        <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
            <div class="flex flex-col items-start">
                <h3 class="mb-4 text-3xl font-bold"><?php echo esc_html( $section_title !== '' ? $section_title : 'Events' ); ?></h3>
                <div class="text-lg font-bold text-slate-800">
                    <?php if ( $single_type && $search_type_param !== '' ) : ?>
                        <a
                            href="<?php echo esc_url( $type_url ); ?>"
                            class="hover:underline decoration-slate-400 decoration-2 underline-offset-4"
                        >
                            <?php echo esc_html( $title_label ); ?>
                            <span class="ml-1 text-sm font-normal text-slate-500">
                                (<?php echo intval( $events_count ); ?>)
                            </span>
                        </a>
                    <?php else : ?>
                        <?php echo esc_html( $title_label ); ?>
                        <span class="ml-1 text-sm font-normal text-slate-500">
                            (<?php echo intval( $events_count ); ?>)
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <?php if ( $single_type && $search_type_param !== '' ) : ?>
                <div>
                    <a
                        href="<?php echo esc_url( $type_url ); ?>"
                        class="inline-flex items-center px-3 py-1 text-xs font-medium transition bg-white border rounded-full border-slate-300 text-slate-700 hover:border-slate-400 hover:bg-slate-50"
                    >
                        View all
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pills: ALL (doar dacă e un singur type) + genuri -->
        <?php if ( $events_count > 0 || ! empty( $genre_counts ) ) : ?>
            <div class="flex flex-wrap gap-2 mb-4">
                <?php if ( $single_type && $search_type_param !== '' ) : ?>
                    <?php
                    // Primul pill: ALL (numărul total de evenimente din acest type)
                    $all_url = $type_url; // /search?type=<type>
                    ?>
                    <a
                        href="<?php echo esc_url( $all_url ); ?>"
                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-white transition border rounded-full border-slate-900 bg-slate-900 hover:bg-slate-800 hover:border-slate-900"
                    >
                        <span>All</span>
                        <span class="ml-1 text-[10px] text-slate-200">
                            (<?php echo intval( $events_count ); ?>)
                        </span>
                    </a>
                <?php endif; ?>

                <?php if ( ! empty( $genre_counts ) ) : ?>
                    <?php foreach ( $genre_counts as $genre_name => $count ) : ?>
                        <?php
                        // Pentru search:
                        // - mereu trimitem 'genre'
                        // - tipul îl trimitem doar dacă avem UN singur type
                        $genre_args = [ 'genre' => $genre_name ];
                        if ( $single_type && $search_type_param !== '' ) {
                            $genre_args['type'] = $search_type_param;
                        }
                        $genre_url = add_query_arg( $genre_args, $search_base );
                        ?>
                        <a
                            href="<?php echo esc_url( $genre_url ); ?>"
                            class="inline-flex items-center px-3 py-1 text-base font-medium transition-all duration-200 ease-in-out bg-white border rounded-full border-slate-200 text-brand-dark hover:border-brand-purple hover:bg-brand-purple hover:text-white group"
                        >
                            <span><?php echo esc_html( $genre_name ); ?></span>
                            <span class="ml-1 text-sm transition-all duration-200 ease-in-out text-brand-purple group-hover:text-white">
                                (<?php echo intval( $count ); ?>)
                            </span>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- Grid 8 coloane, ultima coloană se vede doar pe jumătate -->
        <div class="relative overflow-x-hidden">
            <div class="grid grid-cols-8 gap-4 -mr-[6.25%]">
                <?php foreach ( $filtered_events as $ev ) : ?>
                    <?php
                    $poster_url   = $full_storage_url( isset( $ev['poster_url'] ) ? $ev['poster_url'] : '' );
                    $start_date   = isset( $ev['start_date'] ) ? tixello_format_event_date( $ev['start_date'] ) : '';
                    $end_date     = isset( $ev['end_date'] ) ? tixello_format_event_date( $ev['end_date'] ) : '';
                    $start_time   = isset( $ev['start_time'] ) ? tixello_format_event_time( $ev['start_time'] ) : '';
                    $title        = isset( $ev['title'] ) ? $ev['title'] : '';
                    $price_from   = isset( $ev['price_from'] ) ? $ev['price_from'] : null;
                    $venue_name   = isset( $ev['venue']['name'] ) ? $ev['venue']['name'] : '';
                    $venue_addr   = isset( $ev['venue']['address'] ) ? $ev['venue']['address'] : '';
                    $venue_city   = isset( $ev['venue']['city'] ) ? $ev['venue']['city'] : '';

                    // Link preferat: pagina Tixello /events/{slug}/, ca să ajuți indexarea
                    $event_url = '';
                    if ( ! empty( $ev['slug'] ) ) {
                        $event_url = home_url( '/events/' . $ev['slug'] . '/' );
                    } elseif ( isset( $ev['tenant']['event_url'] ) && ! empty( $ev['tenant']['event_url'] ) ) {
                        $event_url = $ev['tenant']['event_url'];
                    } elseif ( ! empty( $ev['event_website_url'] ) ) {
                        $event_url = $ev['event_website_url'];
                    } elseif ( ! empty( $ev['website_url'] ) ) {
                        $event_url = $ev['website_url'];
                    } elseif ( ! empty( $ev['facebook_url'] ) ) {
                        $event_url = $ev['facebook_url'];
                    }

                    $event_url = $event_url ? esc_url( $event_url ) : '';
                    ?>
                    <div class="flex flex-col text-sm transition bg-white border shadow-sm group rounded-xl border-slate-200 text-brand-dark hover:border-slate-300">
                        <?php if ( $event_url ) : ?>
                        <a href="<?php echo $event_url; ?>" class="flex flex-col h-full pb-3 group">
                        <?php endif; ?>

                            <!-- Poster -->
                            <div class="mb-2 aspect-[3/4] w-full overflow-hidden rounded-lg bg-slate-100 rounded-b-none">
                                <?php if ( $poster_url ) : ?>
                                    <img
                                        src="<?php echo $poster_url; ?>"
                                        alt="<?php echo esc_attr( $title ); ?>"
                                        class="object-cover w-full h-full transition duration-300 group-hover:scale-105"
                                        loading="lazy"
                                    />
                                <?php endif; ?>
                            </div>

                            <!-- Date / time -->
                            <div class="flex items-center justify-between px-3 mb-1 text-sm text-slate-600">
                                <?php if ( $start_date ) : ?>
                                    <span><?php echo esc_html( $start_date ); ?></span>
                                <?php endif; ?>

                                <?php if ( $end_date ) : ?>
                                    <span> – <?php echo esc_html( $end_date ); ?></span>
                                <?php endif; ?>

                                <?php if ( $start_time ) : ?>
                                    <span class="block"><?php echo esc_html( $start_time ); ?></span>
                                <?php endif; ?>
                            </div>

                            <!-- Title -->
                            <h3 class="px-3 mb-1 text-lg font-bold line-clamp-2 text-brand-dark group-hover:text-brand-purple">
                                <?php echo esc_html( $title ); ?>
                            </h3>

                            <!-- Price + venue -->
                            <div class="mt-auto text-sm">
                                <?php if ( ! is_null( $price_from ) ) : ?>
                                    <div class="px-3 font-semibold text-slate-800">
                                        From <?php echo esc_html( $price_from ); ?> RON
                                    </div>
                                <?php endif; ?>

                                <?php if( $venue_name || $venue_addr || $venue_city ) : ?>
                                    <div class="flex items-center justify-between pt-2 mt-2 border-t border-slate-200">
                                        <?php if ( $venue_name ) : ?>
                                            <div class="pl-3 font-medium text-slate-800">
                                                <?php echo esc_html( $venue_name ); ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ( $venue_addr || $venue_city ) : ?>
                                            <div class="pr-3 text-slate-500">
                                                <?php if ( $venue_city ) : ?>
                                                    <?php echo esc_html( $venue_city ); ?>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php if ( $event_url ) : ?>
                        </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    endif;

    return ob_get_clean();
}
add_shortcode( 'tixello_events', 'tixello_events_by_type_shortcode' );


// =========================================================================
// TIXELLO EVENTS - AJAX SEARCH
// =========================================================================

/**
 * AJAX handler for searching events
 */
function tixello_search_events_ajax() {
    // Verify nonce
    if ( ! wp_verify_nonce( $_POST['nonce'] ?? '', 'tixello_search_nonce' ) ) {
        wp_send_json_error( 'Invalid nonce' );
        return;
    }

    $query = sanitize_text_field( $_POST['query'] ?? '' );

    if ( strlen( $query ) < 2 ) {
        wp_send_json_success( [] );
        return;
    }

    // Get all events
    $events_raw = tixello_fetch_events_core();

    if ( empty( $events_raw ) || ! is_array( $events_raw ) ) {
        wp_send_json_success( [] );
        return;
    }

    $STORAGE_BASE = 'https://core.tixello.com/storage/';

    $full_storage_url = function( $path ) use ( $STORAGE_BASE ) {
        if ( empty( $path ) ) return '';
        if ( preg_match( '#^https?://#i', $path ) ) return esc_url( $path );
        return esc_url( $STORAGE_BASE . ltrim( $path, '/' ) );
    };

    $results = [];
    $query_lower = strtolower( $query );

    foreach ( $events_raw as $ev ) {
        if ( ! is_array( $ev ) ) continue;

        $title = isset( $ev['title'] ) ? $ev['title'] : '';
        $venue_name = isset( $ev['venue']['name'] ) ? $ev['venue']['name'] : '';

        // Search in title and venue
        $match = false;
        if ( stripos( $title, $query ) !== false ) {
            $match = true;
        } elseif ( stripos( $venue_name, $query ) !== false ) {
            $match = true;
        }

        // Also search in event types and genres
        if ( ! $match && ! empty( $ev['event_types'] ) ) {
            foreach ( $ev['event_types'] as $type ) {
                if ( isset( $type['name'] ) && stripos( $type['name'], $query ) !== false ) {
                    $match = true;
                    break;
                }
            }
        }

        if ( ! $match && ! empty( $ev['event_genres'] ) ) {
            foreach ( $ev['event_genres'] as $genre ) {
                if ( isset( $genre['name'] ) && stripos( $genre['name'], $query ) !== false ) {
                    $match = true;
                    break;
                }
            }
        }

        if ( $match ) {
            $poster_url = $full_storage_url( isset( $ev['poster_url'] ) ? $ev['poster_url'] : '' );
            $start_date = isset( $ev['start_date'] ) ? $ev['start_date'] : '';
            $price_from = isset( $ev['price_from'] ) ? $ev['price_from'] : null;

            // Parse date
            $date_obj = $start_date ? DateTime::createFromFormat( 'Y-m-d', $start_date ) : null;
            $date_month = $date_obj ? $date_obj->format( 'M' ) : '';
            $date_day = $date_obj ? $date_obj->format( 'd' ) : '';

            // Build event URL
            $event_url = ! empty( $ev['slug'] ) ? home_url( '/events/' . $ev['slug'] . '/' ) : '#';

            // Format price
            $price_display = ( is_null( $price_from ) || $price_from == 0 ) ? 'FREE' : $price_from . ' RON';

            $results[] = [
                'id'         => isset( $ev['id'] ) ? $ev['id'] : uniqid(),
                'title'      => $title,
                'poster'     => $poster_url,
                'url'        => $event_url,
                'venue'      => $venue_name,
                'date_month' => $date_month,
                'date_day'   => $date_day,
                'price'      => $price_display,
            ];

            // Limit to 12 results
            if ( count( $results ) >= 12 ) {
                break;
            }
        }
    }

    wp_send_json_success( $results );
}
add_action( 'wp_ajax_tixello_search_events', 'tixello_search_events_ajax' );
add_action( 'wp_ajax_nopriv_tixello_search_events', 'tixello_search_events_ajax' );


/**
 * 1) Rewrite pentru /events/{slug}/
 */
add_action( 'init', function () {
    // Tag de query pentru slug
    add_rewrite_tag( '%tixello_event_slug%', '([^&]+)' );

    // URL: /events/slug-ul-evenimentului/
    add_rewrite_rule(
        '^events/([^/]+)/?$',
        'index.php?tixello_event_slug=$matches[1]',
        'top'
    );
} );

/**
 * 2) Adăugăm query var în WP
 */
add_filter( 'query_vars', function ( $vars ) {
    $vars[] = 'tixello_event_slug';
    return $vars;
} );

/**
 * 3) Alegem template-ul pentru single event
 *    Va folosi fișierul tixello-event-single.php din tema.
 */
add_filter( 'template_include', function ( $template ) {
    $slug = get_query_var( 'tixello_event_slug' );

    if ( $slug ) {
        $new_template = locate_template( 'tixello-event-single.php' );
        if ( $new_template ) {
            return $new_template;
        }
    }

    return $template;
} );

/**
 * 4) Helper: ia un eveniment după slug din API (folosește lista generală)
 *    Se bazează că ai deja tixello_fetch_events_core() definit (din shortcode).
 */
function tixello_get_event_by_slug( $slug ) {
    if ( empty( $slug ) ) {
        return null;
    }

    // Folosim helperul global care ia toate evenimentele din API
    if ( ! function_exists( 'tixello_fetch_events_core' ) ) {
        return null; // dacă nu există, deocamdată nu avem ce face
    }

    $events = tixello_fetch_events_core();
    if ( empty( $events ) || ! is_array( $events ) ) {
        return null;
    }

    foreach ( $events as $event ) {
        if ( ! is_array( $event ) ) {
            continue;
        }

        if ( isset( $event['slug'] ) && $event['slug'] === $slug ) {
            return $event;
        }
    }

    return null;
}

/**
 * =========================================================
 * ARTISTS – Single pages: /artists/{slug}/
 * =========================================================
 */

/**
 * 1) Rewrite pentru /artists/{slug}/ and /artists/letter/{letter}/ and /artists/genre/{genre}/
 */
add_action( 'init', 'tixello_register_artist_rewrite' );

function tixello_register_artist_rewrite() {
    // Tag de query pentru slug artist
    add_rewrite_tag( '%tixello_artist_slug%', '([^&]+)' );
    // Tags for letter and genre filtering
    add_rewrite_tag( '%tixello_artist_letter%', '([^&]+)' );
    add_rewrite_tag( '%tixello_artist_genre%', '([^&]+)' );

    // URL: /artists/letter/A/ - filter by letter
    add_rewrite_rule(
        '^artists/letter/([^/]+)/?$',
        'index.php?tixello_artist_letter=$matches[1]',
        'top'
    );

    // URL: /artists/genre/rock/ - filter by genre
    add_rewrite_rule(
        '^artists/genre/([^/]+)/?$',
        'index.php?tixello_artist_genre=$matches[1]',
        'top'
    );

    // URL: /artists/slug-ul-artistului/ - single artist (must be last to avoid conflicts)
    add_rewrite_rule(
        '^artists/([^/]+)/?$',
        'index.php?tixello_artist_slug=$matches[1]',
        'top'
    );
}

/**
 * 2) Adăugăm query var în WP
 */
add_filter( 'query_vars', 'tixello_artist_query_vars' );

function tixello_artist_query_vars( $vars ) {
    $vars[] = 'tixello_artist_slug';
    $vars[] = 'tixello_artist_letter';
    $vars[] = 'tixello_artist_genre';
    return $vars;
}

/**
 * 3) Alegem template-ul pentru single artist sau listing filtrat
 *    Va folosi fișierul tixello-artist-single.php pentru artist individual
 *    sau page-tixello-artists.php pentru listing filtrat
 */
add_filter( 'template_include', 'tixello_artist_template_include' );

function tixello_artist_template_include( $template ) {
    $slug   = get_query_var( 'tixello_artist_slug' );
    $letter = get_query_var( 'tixello_artist_letter' );
    $genre  = get_query_var( 'tixello_artist_genre' );

    // If filtering by letter or genre, load the artists directory page
    if ( $letter || $genre ) {
        $new_template = locate_template( 'page-tixello-artists.php' );
        if ( $new_template ) {
            return $new_template;
        }
    }

    // If single artist slug, load single artist template
    if ( $slug ) {
        $new_template = locate_template( 'tixello-artist-single.php' );
        if ( $new_template ) {
            return $new_template;
        }
    }

    return $template;
}

/**
 * Fetch ALL artists from Tixello Core (paginat data + pagination)
 * Returnează un simplu array de artiști.
 */
function tixello_fetch_artists_core() {
    static $cached = null;

    if ( ! is_null( $cached ) ) {
        return $cached;
    }

    $api_key = defined( 'TIXELLO_API_KEY' )
        ? TIXELLO_API_KEY
        : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

    $base_url = 'https://core.tixello.com/api/v1/public/artists';

    $all   = [];
    $page  = 1;
    $max_pages_safety = 50;

    while ( $page <= $max_pages_safety ) {
        $url = add_query_arg( 'page', $page, $base_url );

        $response = wp_remote_get(
            $url,
            [
                'headers' => [
                    'X-API-Key' => $api_key,
                ],
                'timeout' => 20,
            ]
        );

        if ( is_wp_error( $response ) ) {
            break;
        }

        $body = wp_remote_retrieve_body( $response );
        $data = json_decode( $body, true );

        if ( ! is_array( $data ) ) {
            break;
        }

        $items = [];
        if ( isset( $data['data'] ) && is_array( $data['data'] ) ) {
            $items = $data['data'];
        }

        if ( empty( $items ) ) {
            break;
        }

        foreach ( $items as $item ) {
            if ( is_array( $item ) ) {
                $all[] = $item;
            }
        }

        if (
            isset( $data['pagination']['current_page'], $data['pagination']['last_page'] )
        ) {
            $current_page = (int) $data['pagination']['current_page'];
            $last_page    = (int) $data['pagination']['last_page'];

            if ( $current_page >= $last_page ) {
                break;
            }

            $page = $current_page + 1;
        } elseif ( ! empty( $data['pagination']['next_page_url'] ) ) {
            $page++;
        } else {
            break;
        }
    }

    $cached = $all;
    return $all;
}

/**
 * AJAX endpoint for loading artists dynamically with filters
 * Supports: letter, genre, search, page
 */
add_action( 'wp_ajax_tixello_load_artists', 'tixello_ajax_load_artists' );
add_action( 'wp_ajax_nopriv_tixello_load_artists', 'tixello_ajax_load_artists' );

function tixello_ajax_load_artists() {
    $letter = isset( $_GET['letter'] ) ? sanitize_text_field( $_GET['letter'] ) : '';
    $genre  = isset( $_GET['genre'] ) ? sanitize_text_field( $_GET['genre'] ) : '';
    $search = isset( $_GET['search'] ) ? sanitize_text_field( $_GET['search'] ) : '';
    $page   = isset( $_GET['page'] ) ? max( 1, intval( $_GET['page'] ) ) : 1;
    $per_page = 48;

    $api_key = defined( 'TIXELLO_API_KEY' )
        ? TIXELLO_API_KEY
        : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

    $base_url = 'https://core.tixello.com/api/v1/public/artists';

    // Build query params
    $params = [
        'page'     => $page,
        'per_page' => $per_page,
    ];

    if ( ! empty( $letter ) && $letter !== 'all' ) {
        $params['letter'] = $letter;
    }

    if ( ! empty( $genre ) && $genre !== 'all' ) {
        $params['genre'] = $genre;
    }

    if ( ! empty( $search ) ) {
        $params['search'] = $search;
    }

    $url = add_query_arg( $params, $base_url );

    $response = wp_remote_get(
        $url,
        [
            'headers' => [
                'X-API-Key' => $api_key,
            ],
            'timeout' => 20,
        ]
    );

    if ( is_wp_error( $response ) ) {
        wp_send_json_error( [ 'message' => 'API request failed' ] );
    }

    $body = wp_remote_retrieve_body( $response );
    $data = json_decode( $body, true );

    if ( ! is_array( $data ) ) {
        wp_send_json_error( [ 'message' => 'Invalid API response' ] );
    }

    // Get pagination info
    $pagination = isset( $data['pagination'] ) ? $data['pagination'] : [];
    $artists    = isset( $data['data'] ) ? $data['data'] : [];

    // Process artists for frontend
    $STORAGE_BASE = 'https://core.tixello.com/storage/';
    $processed = [];

    foreach ( $artists as $a ) {
        if ( ! is_array( $a ) || empty( $a['name'] ) ) {
            continue;
        }

        $image_url = '';
        if ( ! empty( $a['media']['image_url'] ) ) {
            $path = $a['media']['image_url'];
            if ( ! preg_match( '#^https?://#i', $path ) ) {
                $path = ltrim( $path, '/' );
                $image_url = $STORAGE_BASE . $path;
            } else {
                $image_url = $path;
            }
        }

        // Extract genres
        $genres = [];
        if ( ! empty( $a['artist_genres'] ) && is_array( $a['artist_genres'] ) ) {
            foreach ( $a['artist_genres'] as $g ) {
                if ( isset( $g['name'] ) ) {
                    $genres[] = $g['name'];
                }
            }
        }

        // Extract artist types
        $types = [];
        if ( ! empty( $a['artist_types'] ) && is_array( $a['artist_types'] ) ) {
            foreach ( $a['artist_types'] as $t ) {
                if ( isset( $t['name'] ) ) {
                    $types[] = $t['name'];
                }
            }
        }

        // Get country from location
        $country = '';
        $city = '';
        if ( ! empty( $a['location'] ) ) {
            $country = isset( $a['location']['country'] ) ? $a['location']['country'] : '';
            $city = isset( $a['location']['city'] ) ? $a['location']['city'] : '';
        }

        $first_letter = strtoupper( mb_substr( $a['name'], 0, 1 ) );
        if ( is_numeric( $first_letter ) ) {
            $first_letter = '#';
        }

        $processed[] = [
            'id'          => isset( $a['id'] ) ? (int) $a['id'] : null,
            'name'        => $a['name'],
            'slug'        => isset( $a['slug'] ) ? $a['slug'] : '',
            'firstLetter' => $first_letter,
            'country'     => $country,
            'city'        => $city,
            'image'       => $image_url,
            'genres'      => $genres,
            'types'       => $types,
            'verified'    => ! empty( $a['is_verified'] ),
        ];
    }

    wp_send_json_success( [
        'artists'    => $processed,
        'pagination' => $pagination,
    ] );
}

/**
 * Fetch artist genres list - extracts from artists data and caches
 * Returns array of genre names sorted alphabetically
 */
function tixello_fetch_artist_genres_list() {
    // Check transient cache first
    $cached = get_transient( 'tixello_artist_genres_list' );
    if ( $cached !== false && is_array( $cached ) ) {
        return $cached;
    }

    // Fetch first page of artists to extract genres
    $result = tixello_fetch_artists_paginated( [
        'page'     => 1,
        'per_page' => 200,
    ] );

    $artists = isset( $result['artists'] ) ? $result['artists'] : [];
    $genres_map = [];

    foreach ( $artists as $artist ) {
        if ( ! empty( $artist['artist_genres'] ) && is_array( $artist['artist_genres'] ) ) {
            foreach ( $artist['artist_genres'] as $genre ) {
                $name = isset( $genre['name'] ) ? trim( $genre['name'] ) : '';
                $id = isset( $genre['id'] ) ? $genre['id'] : 0;
                if ( ! empty( $name ) && ! isset( $genres_map[ $name ] ) ) {
                    $genres_map[ $name ] = [
                        'id'   => $id,
                        'name' => $name,
                    ];
                }
            }
        }
    }

    // Sort alphabetically by name
    $genres = array_values( $genres_map );
    usort( $genres, function( $a, $b ) {
        return strcasecmp( $a['name'], $b['name'] );
    } );

    // Cache for 10 minutes
    set_transient( 'tixello_artist_genres_list', $genres, 10 * MINUTE_IN_SECONDS );

    return $genres;
}

/**
 * Fetch artist types list - extracts from artists data and caches
 * Returns array of type names sorted alphabetically
 */
function tixello_fetch_artist_types_list() {
    // Check transient cache first
    $cached = get_transient( 'tixello_artist_types_list' );
    if ( $cached !== false && is_array( $cached ) ) {
        return $cached;
    }

    // Fetch first page of artists to extract types
    $result = tixello_fetch_artists_paginated( [
        'page'     => 1,
        'per_page' => 200,
    ] );

    $artists = isset( $result['artists'] ) ? $result['artists'] : [];
    $types_map = [];

    foreach ( $artists as $artist ) {
        if ( ! empty( $artist['artist_types'] ) && is_array( $artist['artist_types'] ) ) {
            foreach ( $artist['artist_types'] as $type ) {
                $name = isset( $type['name'] ) ? trim( $type['name'] ) : '';
                $id = isset( $type['id'] ) ? $type['id'] : 0;
                if ( ! empty( $name ) && ! isset( $types_map[ $name ] ) ) {
                    $types_map[ $name ] = [
                        'id'   => $id,
                        'name' => $name,
                    ];
                }
            }
        }
    }

    // Sort alphabetically by name
    $types = array_values( $types_map );
    usort( $types, function( $a, $b ) {
        return strcasecmp( $a['name'], $b['name'] );
    } );

    // Cache for 10 minutes
    set_transient( 'tixello_artist_types_list', $types, 10 * MINUTE_IN_SECONDS );

    return $types;
}

/**
 * 5) Helper: ia un artist după slug din API (folosind lista generală)
 */
if ( ! function_exists( 'tixello_get_artist_by_slug' ) ) {
    function tixello_get_artist_by_slug( $slug ) {
        if ( empty( $slug ) ) {
            return null;
        }

        $artists = tixello_fetch_artists_core();
        if ( empty( $artists ) || ! is_array( $artists ) ) {
            return null;
        }

        foreach ( $artists as $artist ) {
            if ( ! is_array( $artist ) ) {
                continue;
            }

            if ( isset( $artist['slug'] ) && $artist['slug'] === $slug ) {
                return $artist;
            }
        }

        return null;
    }
}

/**
 * 6) Helper comun: format număr scurt (K / M / B) – folosit și în single artist
 */
if ( ! function_exists( 'tixello_format_number_short' ) ) {
    function tixello_format_number_short( $num ) {
        if ( ! is_numeric( $num ) ) {
            return '';
        }

        $num = (float) $num;

        if ( $num >= 1000000000 ) {
            return rtrim( rtrim( number_format( $num / 1000000000, 1 ), '0' ), '.' ) . 'B';
        }

        if ( $num >= 1000000 ) {
            return rtrim( rtrim( number_format( $num / 1000000, 1 ), '0' ), '.' ) . 'M';
        }

        if ( $num >= 1000 ) {
            return rtrim( rtrim( number_format( $num / 1000, 1 ), '0' ), '.' ) . 'K';
        }

        return (string) intval( $num );
    }
}


/**
 * =========================================================
 * VENUES – Single pages: /venues/{slug}/
 * =========================================================
 */

/**
 * 1) Rewrite pentru /venues/{slug}/
 */
add_action( 'init', 'tixello_register_venue_rewrite' );

function tixello_register_venue_rewrite() {
    add_rewrite_tag( '%tixello_venue_slug%', '([^&]+)' );

    add_rewrite_rule(
        '^venues/([^/]+)/?$',
        'index.php?tixello_venue_slug=$matches[1]',
        'top'
    );
}

/**
 * 2) Query var
 */
add_filter( 'query_vars', 'tixello_venue_query_vars' );

function tixello_venue_query_vars( $vars ) {
    $vars[] = 'tixello_venue_slug';
    return $vars;
}

/**
 * 3) Template include – folosește tixello-venue-single.php
 */
add_filter( 'template_include', 'tixello_venue_template_include' );

function tixello_venue_template_include( $template ) {
    $slug = get_query_var( 'tixello_venue_slug' );

    if ( $slug ) {
        $new_template = locate_template( 'tixello-venue-single.php' );
        if ( $new_template ) {
            return $new_template;
        }
    }

    return $template;
}

/**
 * Fetch ALL venues from Tixello Core (paginat data + pagination)
 * Returnează un simplu array de venues.
 */
function tixello_fetch_venues_core() {
    static $cached = null;

    if ( ! is_null( $cached ) ) {
        return $cached;
    }

    $api_key = defined( 'TIXELLO_API_KEY' )
        ? TIXELLO_API_KEY
        : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

    $base_url = 'https://core.tixello.com/api/v1/public/venues';

    $all   = [];
    $page  = 1;
    $max_pages_safety = 50;

    while ( $page <= $max_pages_safety ) {
        $url = add_query_arg( 'page', $page, $base_url );

        $response = wp_remote_get(
            $url,
            [
                'headers' => [
                    'X-API-Key' => $api_key,
                ],
                'timeout' => 20,
            ]
        );

        if ( is_wp_error( $response ) ) {
            break;
        }

        $body = wp_remote_retrieve_body( $response );
        $data = json_decode( $body, true );

        if ( ! is_array( $data ) ) {
            break;
        }

        $items = [];
        if ( isset( $data['data'] ) && is_array( $data['data'] ) ) {
            $items = $data['data'];
        }

        if ( empty( $items ) ) {
            break;
        }

        foreach ( $items as $item ) {
            if ( is_array( $item ) ) {
                $all[] = $item;
            }
        }

        if (
            isset( $data['pagination']['current_page'], $data['pagination']['last_page'] )
        ) {
            $current_page = (int) $data['pagination']['current_page'];
            $last_page    = (int) $data['pagination']['last_page'];

            if ( $current_page >= $last_page ) {
                break;
            }

            $page = $current_page + 1;
        } elseif ( ! empty( $data['pagination']['next_page_url'] ) ) {
            $page++;
        } else {
            break;
        }
    }

    $cached = $all;
    return $all;
}


/**
 * 5) Helper: venue by slug
 */
if ( ! function_exists( 'tixello_get_venue_by_slug' ) ) {
    function tixello_get_venue_by_slug( $slug ) {
        if ( empty( $slug ) ) {
            return null;
        }

        $venues = tixello_fetch_venues_core();
        if ( empty( $venues ) || ! is_array( $venues ) ) {
            return null;
        }

        foreach ( $venues as $venue ) {
            if ( ! is_array( $venue ) ) {
                continue;
            }

            if ( isset( $venue['slug'] ) && $venue['slug'] === $slug ) {
                return $venue;
            }
        }

        return null;
    }
}


/**
 * Fetch public "data" (stats) din Tixello Core:
 * {
 *   "tickets_sold": 8,
 *   "customers": 4,
 *   "tenants": 1,
 *   "venues": 430,
 *   "events": 2,
 *   "artists": 12538
 * }
 *
 * Folosește transient + static cache ca să nu lovească API-ul la fiecare shortcode.
 */
function tixello_fetch_public_data_core() {
    static $static_cache = null;

    if ( ! is_null( $static_cache ) ) {
        return $static_cache;
    }

    // Încearcă din transient (cache la nivel de site, ex: 60 sec.)
    $cached = get_transient( 'tixello_public_data' );
    if ( $cached && is_array( $cached ) ) {
        $static_cache = $cached;
        return $cached;
    }

    $api_key = defined( 'TIXELLO_API_KEY' )
        ? TIXELLO_API_KEY
        : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

    $url = 'https://core.tixello.com/api/v1/public/data';

    $response = wp_remote_get(
        $url,
        [
            'headers' => [
                'X-API-Key' => $api_key,
            ],
            'timeout' => 15,
        ]
    );

    if ( is_wp_error( $response ) ) {
        $static_cache = [];
        return [];
    }

    $body = wp_remote_retrieve_body( $response );
    $data = json_decode( $body, true );

    if ( ! is_array( $data ) ) {
        $static_cache = [];
        return [];
    }

    // Cache 60 secunde (poți crește, ex. 300 pentru 5 min)
    set_transient( 'tixello_public_data', $data, 60 );
    $static_cache = $data;

    return $data;
}

/**
 * Helper intern: întoarce un singur stat (tickets_sold, customers etc.)
 * în format number_format_i18n, sau "0" dacă nu e disponibil.
 */
function tixello_get_stat_value( $key ) {
    $allowed_keys = [
        'tickets_sold',
        'customers',
        'tenants',
        'venues',
        'events',
        'artists',
        'event_genres',
        'event_types',
        'venue_categories',
        'venue_types',
        'artist_genres',
        'artist_types',
        'microservices',
        'affiliates',
        'orders',
        'orders_total_cents',
        'orders_paid_total_cents',
    ];

    if ( ! in_array( $key, $allowed_keys, true ) ) {
        return '0';
    }

    $data = tixello_fetch_public_data_core();
    if ( empty( $data ) || ! isset( $data[ $key ] ) ) {
        return '0';
    }

    $value = intval( $data[ $key ] );

    return number_format_i18n( $value );
}

/**
 * Shortcode generic:
 * [tixello_stat key="tickets_sold"]
 */
function tixello_stat_shortcode( $atts ) {
    $atts = shortcode_atts(
        [
            'key' => '',
        ],
        $atts,
        'tixello_stat'
    );

    $key = trim( $atts['key'] );
    if ( $key === '' ) {
        return '';
    }

    return tixello_get_stat_value( $key );
}
add_shortcode( 'tixello_stat', 'tixello_stat_shortcode' );

/**
 * Shortcode-uri dedicate pentru fiecare câmp:
 * [tixello_tickets_sold], [tixello_customers], etc.
 */

function tixello_tickets_sold_shortcode() {
    return tixello_get_stat_value( 'tickets_sold' );
}
add_shortcode( 'tixello_tickets_sold', 'tixello_tickets_sold_shortcode' );

function tixello_customers_shortcode() {
    return tixello_get_stat_value( 'customers' );
}
add_shortcode( 'tixello_customers', 'tixello_customers_shortcode' );

function tixello_tenants_shortcode() {
    return tixello_get_stat_value( 'tenants' );
}
add_shortcode( 'tixello_tenants', 'tixello_tenants_shortcode' );

function tixello_venues_shortcode() {
    return tixello_get_stat_value( 'venues' );
}
add_shortcode( 'tixello_venues', 'tixello_venues_shortcode' );

function tixello_events_shortcode_stat() {
    return tixello_get_stat_value( 'events' );
}
add_shortcode( 'tixello_events_stat', 'tixello_events_shortcode_stat' );

function tixello_artists_shortcode() {
    return tixello_get_stat_value( 'artists' );
}
add_shortcode( 'tixello_artists', 'tixello_artists_shortcode' );

function tixello_eventgenres_shortcode() {
    return tixello_get_stat_value( 'event_genres' );
}
add_shortcode( 'tixello_eventgenres', 'tixello_eventgenres_shortcode' );

function tixello_eventtypes_shortcode() {
    return tixello_get_stat_value( 'event_types' );
}
add_shortcode( 'tixello_eventtypes', 'tixello_eventtypes_shortcode' );

function tixello_venuecategories_shortcode() {
    return tixello_get_stat_value( 'venue_categories' );
}
add_shortcode( 'tixello_venuecategories', 'tixello_venuecategories_shortcode' );

function tixello_venuetypes_shortcode() {
    return tixello_get_stat_value( 'venue_types' );
}
add_shortcode( 'tixello_venuetypes', 'tixello_venuetypes_shortcode' );

function tixello_artisttypes_shortcode() {
    return tixello_get_stat_value( 'artist_types' );
}
add_shortcode( 'tixello_artisttypes', 'tixello_artisttypes_shortcode' );

function tixello_artistgenres_shortcode() {
    return tixello_get_stat_value( 'artist_genres' );
}
add_shortcode( 'tixello_artistgenres', 'tixello_artistgenres_shortcode' );

function tixello_microservices_shortcode() {
    return tixello_get_stat_value( 'microservices' );
}
add_shortcode( 'tixello_microservices', 'tixello_microservices_shortcode' );

function tixello_affiliates_shortcode() {
    return tixello_get_stat_value( 'affiliates' );
}
add_shortcode( 'tixello_affiliates', 'tixello_affiliates_shortcode' );

function tixello_orders_shortcode() {
    return tixello_get_stat_value( 'orders' );
}
add_shortcode( 'tixello_orders', 'tixello_orders_shortcode' );

function tixello_orderstotal_shortcode() {
    return tixello_get_stat_value( 'orders_total_cents' );
}
add_shortcode( 'tixello_orderstotal', 'tixello_orderstotal_shortcode' );

function tixello_orderspaidtotal_shortcode() {
    return tixello_get_stat_value( 'orders_paid_total_cents' );
}
add_shortcode( 'tixello_orderspaidtotal', 'tixello_orderspaidtotal_shortcode' );

/**
 * Shortcode: [tixello_stats_cards]
 *
 * Afișează toate statisticile din /public/data sub formă de carduri Tailwind.
 */
function tixello_stats_cards_shortcode( $atts ) {
    $atts = shortcode_atts(
        [
            'show_caption' => 'yes', // yes|no – dacă să arate și descrieri sub numere
            'theme'        => 'light', // light|dark – tema culorilor
        ],
        $atts,
        'tixello_stats_cards'
    );

    $show_caption = strtolower( $atts['show_caption'] ) !== 'no';
    $is_dark      = strtolower( $atts['theme'] ) === 'dark';

    // Luăm toate valorile
    $tickets_sold = tixello_get_stat_value( 'tickets_sold' );
    $customers    = tixello_get_stat_value( 'customers' );
    $tenants      = tixello_get_stat_value( 'tenants' );
    $venues       = tixello_get_stat_value( 'venues' );
    $events       = tixello_get_stat_value( 'events' );
    $artists      = tixello_get_stat_value( 'artists' );

    // Classes based on theme
    $card_class  = $is_dark
        ? 'p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center'
        : 'flex flex-col rounded-2xl border border-slate-200 bg-white/80 p-4 text-slate-900 shadow-sm backdrop-blur-sm';
    $label_class = $is_dark
        ? 'text-xs text-white/50'
        : 'text-xs font-medium uppercase tracking-wide text-slate-500';
    $value_class = $is_dark
        ? 'text-2xl font-bold text-white'
        : 'mt-2 text-2xl font-semibold tabular-nums';
    $caption_class = $is_dark
        ? 'mt-1 text-xs text-white/40'
        : 'mt-1 text-xs text-slate-500';
    $grid_class  = $is_dark
        ? 'grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4'
        : 'grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6';

    ob_start();
    ?>
    <section class="tixello-stats <?php echo $is_dark ? '' : 'my-12'; ?>">
        <div class="<?php echo $is_dark ? '' : 'mx-auto max-w-6xl'; ?>">
            <div class="<?php echo esc_attr( $grid_class ); ?>">
                <!-- Tickets sold -->
                <div class="<?php echo esc_attr( $card_class ); ?>">
                    <?php if ( $is_dark ) : ?>
                        <div class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $tickets_sold ); ?>
                        </div>
                        <div class="<?php echo esc_attr( $label_class ); ?>">Tickets Sold</div>
                    <?php else : ?>
                        <dt class="<?php echo esc_attr( $label_class ); ?>">
                            Tickets sold
                        </dt>
                        <dd class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $tickets_sold ); ?>
                        </dd>
                        <?php if ( $show_caption ) : ?>
                            <p class="<?php echo esc_attr( $caption_class ); ?>">
                                Issued directly by our tenants.
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <!-- Customers -->
                <div class="<?php echo esc_attr( $card_class ); ?>">
                    <?php if ( $is_dark ) : ?>
                        <div class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $customers ); ?>
                        </div>
                        <div class="<?php echo esc_attr( $label_class ); ?>">Happy Customers</div>
                    <?php else : ?>
                        <dt class="<?php echo esc_attr( $label_class ); ?>">
                            Customers
                        </dt>
                        <dd class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $customers ); ?>
                        </dd>
                        <?php if ( $show_caption ) : ?>
                            <p class="<?php echo esc_attr( $caption_class ); ?>">
                                Unique buyers who trusted Tixello-powered events.
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <!-- Tenants -->
                <div class="<?php echo esc_attr( $card_class ); ?>">
                    <?php if ( $is_dark ) : ?>
                        <div class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $tenants ); ?>
                        </div>
                        <div class="<?php echo esc_attr( $label_class ); ?>">Tenants</div>
                    <?php else : ?>
                        <dt class="<?php echo esc_attr( $label_class ); ?>">
                            Tenants
                        </dt>
                        <dd class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $tenants ); ?>
                        </dd>
                        <?php if ( $show_caption ) : ?>
                            <p class="<?php echo esc_attr( $caption_class ); ?>">
                                Independent organizers using Tixello as their core.
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <!-- Venues -->
                <div class="<?php echo esc_attr( $card_class ); ?>">
                    <?php if ( $is_dark ) : ?>
                        <div class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $venues ); ?>
                        </div>
                        <div class="<?php echo esc_attr( $label_class ); ?>">Venues</div>
                    <?php else : ?>
                        <dt class="<?php echo esc_attr( $label_class ); ?>">
                            Venues
                        </dt>
                        <dd class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $venues ); ?>
                        </dd>
                        <?php if ( $show_caption ) : ?>
                            <p class="<?php echo esc_attr( $caption_class ); ?>">
                                Clubs, theatres and arenas mapped in our ecosystem.
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <!-- Events -->
                <div class="<?php echo esc_attr( $card_class ); ?>">
                    <?php if ( $is_dark ) : ?>
                        <div class="text-2xl font-bold text-violet-400">
                            <?php echo esc_html( $events ); ?>
                        </div>
                        <div class="<?php echo esc_attr( $label_class ); ?>">Events</div>
                    <?php else : ?>
                        <dt class="<?php echo esc_attr( $label_class ); ?>">
                            Events
                        </dt>
                        <dd class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $events ); ?>
                        </dd>
                        <?php if ( $show_caption ) : ?>
                            <p class="<?php echo esc_attr( $caption_class ); ?>">
                                From intimate shows to large-scale festivals.
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <!-- Artists -->
                <div class="<?php echo esc_attr( $card_class ); ?>">
                    <?php if ( $is_dark ) : ?>
                        <div class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $artists ); ?>
                        </div>
                        <div class="<?php echo esc_attr( $label_class ); ?>">Artists</div>
                    <?php else : ?>
                        <dt class="<?php echo esc_attr( $label_class ); ?>">
                            Artists
                        </dt>
                        <dd class="<?php echo esc_attr( $value_class ); ?>">
                            <?php echo esc_html( $artists ); ?>
                        </dd>
                        <?php if ( $show_caption ) : ?>
                            <p class="<?php echo esc_attr( $caption_class ); ?>">
                                Profiles ready to plug into any Tixello tenant.
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php

    return ob_get_clean();
}
add_shortcode( 'tixello_stats_cards', 'tixello_stats_cards_shortcode' );

// =========================================================================
// TIXELLO ARTISTS - PAGINATED API + AJAX + CACHING
// =========================================================================

/**
 * Fetch artists from Tixello API with pagination support
 *
 * @param array $args {
 *     @type int    $page     Page number (default 1)
 *     @type int    $per_page Items per page (default 100, max 500)
 *     @type string $country  Filter by country
 *     @type string $city     Filter by city
 * }
 * @return array ['artists' => [], 'pagination' => []]
 */
function tixello_fetch_artists_paginated( $args = [] ) {
    $defaults = [
        'page'     => 1,
        'per_page' => 100,
        'country'  => '',
        'city'     => '',
    ];
    $args = wp_parse_args( $args, $defaults );

    // Enforce max per_page
    $args['per_page'] = min( (int) $args['per_page'], 500 );

    $api_key = defined( 'TIXELLO_API_KEY' )
        ? TIXELLO_API_KEY
        : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

    $base_url = 'https://core.tixello.com/api/v1/public/artists';

    $query_args = [
        'page'     => (int) $args['page'],
        'per_page' => (int) $args['per_page'],
    ];

    if ( ! empty( $args['country'] ) ) {
        $query_args['country'] = $args['country'];
    }
    if ( ! empty( $args['city'] ) ) {
        $query_args['city'] = $args['city'];
    }

    $url = add_query_arg( $query_args, $base_url );

    $response = wp_remote_get(
        $url,
        [
            'headers' => [ 'X-API-Key' => $api_key ],
            'timeout' => 20,
        ]
    );

    if ( is_wp_error( $response ) ) {
        return [ 'artists' => [], 'pagination' => [], 'error' => $response->get_error_message() ];
    }

    $body = wp_remote_retrieve_body( $response );
    $data = json_decode( $body, true );

    if ( ! is_array( $data ) ) {
        return [ 'artists' => [], 'pagination' => [] ];
    }

    $artists = isset( $data['data'] ) && is_array( $data['data'] ) ? $data['data'] : [];
    $pagination = isset( $data['pagination'] ) ? $data['pagination'] : [];

    return [
        'artists'    => $artists,
        'pagination' => $pagination,
    ];
}

/**
 * Get single artist by slug WITH CACHING
 * Cache duration: 30 minutes
 */
function tixello_get_artist_by_slug_cached( $slug ) {
    if ( empty( $slug ) ) {
        return null;
    }

    $cache_key = 'tixello_artist_' . sanitize_key( $slug );
    $cached = get_transient( $cache_key );

    if ( $cached !== false ) {
        return $cached;
    }

    // Fetch from API directly by slug
    $api_key = defined( 'TIXELLO_API_KEY' )
        ? TIXELLO_API_KEY
        : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

    $url = 'https://core.tixello.com/api/v1/public/artists/' . urlencode( $slug );

    $response = wp_remote_get(
        $url,
        [
            'headers' => [ 'X-API-Key' => $api_key ],
            'timeout' => 15,
        ]
    );

    if ( is_wp_error( $response ) ) {
        return null;
    }

    $body = wp_remote_retrieve_body( $response );
    $data = json_decode( $body, true );

    if ( ! is_array( $data ) || empty( $data ) ) {
        return null;
    }

    // Handle API response structure - might be direct or wrapped in 'data'
    $artist = isset( $data['data'] ) ? $data['data'] : $data;

    // Cache for 30 minutes
    set_transient( $cache_key, $artist, 30 * MINUTE_IN_SECONDS );

    return $artist;
}
