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

//#####################################################
// CUSTOM MENUS ##
//#####################################################
function register_footer_menus() {
    register_nav_menu('footer_legal', 'Footer Legal');
    register_nav_menu('footer_resources', 'Footer Resources');
    register_nav_menu('footer_company', 'Footer Company');
    register_nav_menu('footer_quicklinks', 'Footer Quicklinks');
    register_nav_menu('footer_alternatives', 'Footer Alternatives');
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
            'type'  => '',   // poate fi UN singur type sau o listă separată prin virgulă (ex: "Concert, Music Festival")
            'limit' => 0,    // opțional: limită maximă de evenimente
            'title' => ''
        ],
        $atts,
        'tixello_events'
    );

    $filter_type_raw = trim( $atts['type'] );
    $section_title = trim( $atts['title'] );

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
        return '<p class="text-sm text-slate-500">No events available.</p>';
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

    ob_start();
    ?>
    <section class="tixello-events-by-type my-8">
        <!-- Titlu tip eveniment + count + View all -->
        <div class="mb-4 flex flex-wrap items-center justify-between gap-4">
            <div class="flex flex-col items-start">
                <h3 class="text-3xl font-bold mb-4"><?php echo esc_html( $section_title !== '' ? $section_title : 'Events' ); ?></h3>
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
                        class="inline-flex items-center rounded-full border border-slate-300 bg-white px-3 py-1 text-xs font-medium text-slate-700 hover:border-slate-400 hover:bg-slate-50 transition"
                    >
                        View all
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pills: ALL (doar dacă e un singur type) + genuri -->
        <?php if ( $events_count > 0 || ! empty( $genre_counts ) ) : ?>
            <div class="mb-4 flex flex-wrap gap-2">
                <?php if ( $single_type && $search_type_param !== '' ) : ?>
                    <?php
                    // Primul pill: ALL (numărul total de evenimente din acest type)
                    $all_url = $type_url; // /search?type=<type>
                    ?>
                    <a
                        href="<?php echo esc_url( $all_url ); ?>"
                        class="inline-flex items-center rounded-full border border-slate-900 bg-slate-900 px-3 py-1 text-xs font-medium text-white hover:bg-slate-800 hover:border-slate-900 transition"
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
                            class="inline-flex items-center rounded-full border border-slate-200 bg-white px-3 py-1 text-base font-medium text-brand-dark hover:border-brand-purple hover:bg-brand-purple hover:text-white transition-all ease-in-out duration-200 group"
                        >
                            <span><?php echo esc_html( $genre_name ); ?></span>
                            <span class="ml-1 text-sm text-brand-purple group-hover:text-white transition-all ease-in-out duration-200">
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
                    <div class="group flex flex-col rounded-xl border border-slate-200 bg-white text-sm text-brand-dark shadow-sm transition hover:border-slate-300">
                        <?php if ( $event_url ) : ?>
                        <a href="<?php echo $event_url; ?>" class="flex flex-col h-full pb-3 group">
                        <?php endif; ?>

                            <!-- Poster -->
                            <div class="mb-2 aspect-[3/4] w-full overflow-hidden rounded-lg bg-slate-100 rounded-b-none">
                                <?php if ( $poster_url ) : ?>
                                    <img
                                        src="<?php echo $poster_url; ?>"
                                        alt="<?php echo esc_attr( $title ); ?>"
                                        class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                                        loading="lazy"
                                    />
                                <?php endif; ?>
                            </div>

                            <!-- Date / time -->
                            <div class="flex items-center justify-between mb-1 text-sm text-slate-600 px-3">
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
                            <h3 class="mb-1 line-clamp-2 text-lg font-bold text-brand-dark px-3 group-hover:text-brand-purple">
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
                                    <div class="border-t border-slate-200 flex items-center justify-between pt-2 mt-2">
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

    return ob_get_clean();
}
add_shortcode( 'tixello_events', 'tixello_events_by_type_shortcode' );


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
 * 1) Rewrite pentru /artists/{slug}/
 */
add_action( 'init', 'tixello_register_artist_rewrite' );

function tixello_register_artist_rewrite() {
    // Tag de query pentru slug artist
    add_rewrite_tag( '%tixello_artist_slug%', '([^&]+)' );

    // URL: /artists/slug-ul-artistului/
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
    return $vars;
}

/**
 * 3) Alegem template-ul pentru single artist
 *    Va folosi fișierul tixello-artist-single.php din tema.
 */
add_filter( 'template_include', 'tixello_artist_template_include' );

function tixello_artist_template_include( $template ) {
    $slug = get_query_var( 'tixello_artist_slug' );

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

/**
 * Shortcode: [tixello_stats_cards]
 *
 * Afișează toate statisticile din /public/data sub formă de carduri Tailwind.
 */
function tixello_stats_cards_shortcode( $atts ) {
    $atts = shortcode_atts(
        [
            'show_caption' => 'yes', // yes|no – dacă să arate și descrieri sub numere
        ],
        $atts,
        'tixello_stats_cards'
    );

    $show_caption = strtolower( $atts['show_caption'] ) !== 'no';

    // Luăm toate valorile
    $tickets_sold = tixello_get_stat_value( 'tickets_sold' );
    $customers    = tixello_get_stat_value( 'customers' );
    $tenants      = tixello_get_stat_value( 'tenants' );
    $venues       = tixello_get_stat_value( 'venues' );
    $events       = tixello_get_stat_value( 'events' );
    $artists      = tixello_get_stat_value( 'artists' );

    ob_start();
    ?>
    <section class="tixello-stats my-12">
        <div class="mx-auto max-w-6xl">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
                <!-- Tickets sold -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white/80 p-4 text-slate-900 shadow-sm backdrop-blur-sm">
                    <dt class="text-xs font-medium uppercase tracking-wide text-slate-500">
                        Tickets sold
                    </dt>
                    <dd class="mt-2 text-2xl font-semibold tabular-nums">
                        <?php echo esc_html( $tickets_sold ); ?>
                    </dd>
                    <?php if ( $show_caption ) : ?>
                        <p class="mt-1 text-xs text-slate-500">
                            Issued directly by our tenants.
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Customers -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white/80 p-4 text-slate-900 shadow-sm backdrop-blur-sm">
                    <dt class="text-xs font-medium uppercase tracking-wide text-slate-500">
                        Customers
                    </dt>
                    <dd class="mt-2 text-2xl font-semibold tabular-nums">
                        <?php echo esc_html( $customers ); ?>
                    </dd>
                    <?php if ( $show_caption ) : ?>
                        <p class="mt-1 text-xs text-slate-500">
                            Unique buyers who trusted Tixello-powered events.
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Tenants -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white/80 p-4 text-slate-900 shadow-sm backdrop-blur-sm">
                    <dt class="text-xs font-medium uppercase tracking-wide text-slate-500">
                        Tenants
                    </dt>
                    <dd class="mt-2 text-2xl font-semibold tabular-nums">
                        <?php echo esc_html( $tenants ); ?>
                    </dd>
                    <?php if ( $show_caption ) : ?>
                        <p class="mt-1 text-xs text-slate-500">
                            Independent organizers using Tixello as their core.
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Venues -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white/80 p-4 text-slate-900 shadow-sm backdrop-blur-sm">
                    <dt class="text-xs font-medium uppercase tracking-wide text-slate-500">
                        Venues
                    </dt>
                    <dd class="mt-2 text-2xl font-semibold tabular-nums">
                        <?php echo esc_html( $venues ); ?>
                    </dd>
                    <?php if ( $show_caption ) : ?>
                        <p class="mt-1 text-xs text-slate-500">
                            Clubs, theatres and arenas mapped in our ecosystem.
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Events -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white/80 p-4 text-slate-900 shadow-sm backdrop-blur-sm">
                    <dt class="text-xs font-medium uppercase tracking-wide text-slate-500">
                        Events
                    </dt>
                    <dd class="mt-2 text-2xl font-semibold tabular-nums">
                        <?php echo esc_html( $events ); ?>
                    </dd>
                    <?php if ( $show_caption ) : ?>
                        <p class="mt-1 text-xs text-slate-500">
                            From intimate shows to large-scale festivals.
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Artists -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white/80 p-4 text-slate-900 shadow-sm backdrop-blur-sm">
                    <dt class="text-xs font-medium uppercase tracking-wide text-slate-500">
                        Artists
                    </dt>
                    <dd class="mt-2 text-2xl font-semibold tabular-nums">
                        <?php echo esc_html( $artists ); ?>
                    </dd>
                    <?php if ( $show_caption ) : ?>
                        <p class="mt-1 text-xs text-slate-500">
                            Profiles ready to plug into any Tixello tenant.
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php

    return ob_get_clean();
}
add_shortcode( 'tixello_stats_cards', 'tixello_stats_cards_shortcode' );
