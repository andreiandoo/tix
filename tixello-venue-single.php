<?php
/**
 * Template: Tixello – Single Venue (API driven)
 */

get_header();

// Detectare limba curentă (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Array cu traduceri
$t = [
    // 404 / Error messages
    'venue_not_found' => $current_lang === 'ro' ? 'Locatie negasita' : 'Venue not found',
    'no_slug_provided' => $current_lang === 'ro' ? 'Nu a fost furnizat un slug pentru locatie.' : 'No venue slug was provided.',
    'could_not_find_venue' => $current_lang === 'ro' ? 'Nu am putut gasi aceasta locatie in Tixello Core.' : 'Could not find this venue in Tixello Core.',
    'back_to_venues' => $current_lang === 'ro' ? 'Inapoi la locatii' : 'Back to venues',
    'page_error' => $current_lang === 'ro' ? 'Eroare pagina locatie' : 'Venue page error',
    'helper_missing' => $current_lang === 'ro' ? 'Functia helper pentru locatii lipseste.' : 'Venue helper function is missing.',

    // Breadcrumb
    'home' => $current_lang === 'ro' ? 'Acasa' : 'Home',
    'venues' => $current_lang === 'ro' ? 'Locatii' : 'Venues',
    'venue' => $current_lang === 'ro' ? 'Locatie' : 'Venue',

    // Hero & Map
    'open_google_maps' => $current_lang === 'ro' ? 'Deschide in Google Maps' : 'Open in Google Maps',

    // Stats
    'capacity' => $current_lang === 'ro' ? 'Capacitate' : 'Capacity',
    'events' => $current_lang === 'ro' ? 'Evenimente' : 'Events',
    'established_year' => $current_lang === 'ro' ? 'Anul infiintarii' : 'Established',
    'seated' => $current_lang === 'ro' ? 'Locuri sezut' : 'Seated',
    'standing' => $current_lang === 'ro' ? 'Locuri in picioare' : 'Standing',
    'seats' => $current_lang === 'ro' ? 'locuri' : 'seats',

    // Content sections
    'about_venue' => $current_lang === 'ro' ? 'Despre locatie' : 'About venue',
    'location' => $current_lang === 'ro' ? 'Localizare' : 'Location',

    // Sidebar - Action
    'organizing_event' => $current_lang === 'ro' ? 'Organizezi un eveniment?' : 'Organizing an event?',
    'contact_venue_desc' => $current_lang === 'ro'
        ? 'Contacteaza locatia pentru disponibilitate si preturi.'
        : 'Contact the venue for availability and pricing.',
    'request_quote' => $current_lang === 'ro' ? 'Solicita oferta' : 'Request quote',
    'call_now' => $current_lang === 'ro' ? 'Suna acum' : 'Call now',

    // Sidebar - Contact
    'contact' => 'Contact',
    'phone' => $current_lang === 'ro' ? 'Telefon' : 'Phone',
    'email' => 'Email',
    'website' => 'Website',
    'social_media' => 'Social Media',

    // Share
    'share_venue' => $current_lang === 'ro' ? 'Distribuie locatia' : 'Share venue',

    // Events section
    'events_at_venue' => $current_lang === 'ro' ? 'Evenimente la aceasta locatie' : 'Events at this venue',
    'events_scheduled' => $current_lang === 'ro' ? 'evenimente programate' : 'events scheduled',
    'view_all' => $current_lang === 'ro' ? 'Vezi toate' : 'View all',
    'from' => $current_lang === 'ro' ? 'de la' : 'from',
    'view_all_events' => $current_lang === 'ro' ? 'Vezi toate evenimentele' : 'View all events',

    // Similar venues
    'similar_venues' => $current_lang === 'ro' ? 'Locatii similare' : 'Similar Venues',
];

$slug = get_query_var( 'tixello_venue_slug' );

if ( ! $slug ) {
    status_header( 404 );
    ?>
    <main id="primary" class="site-main bg-zinc-950 text-zinc-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-2xl font-bold text-white"><?php echo esc_html( $t['venue_not_found'] ); ?></h1>
            <p class="mt-2 text-white/60"><?php echo esc_html( $t['no_slug_provided'] ); ?></p>
            <a href="<?php echo esc_url( home_url( '/venues/' ) ); ?>" class="inline-flex items-center gap-2 mt-4 px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                <?php echo esc_html( $t['back_to_venues'] ); ?>
            </a>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

if ( ! function_exists( 'tixello_get_venue_by_slug' ) ) {
    status_header( 500 );
    ?>
    <main id="primary" class="site-main bg-zinc-950 text-zinc-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-2xl font-bold text-white"><?php echo esc_html( $t['page_error'] ); ?></h1>
            <p class="mt-2 text-white/60"><?php echo esc_html( $t['helper_missing'] ); ?></p>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

$venue = tixello_get_venue_by_slug( $slug );

if ( ! $venue ) {
    status_header( 404 );
    ?>
    <main id="primary" class="site-main bg-zinc-950 text-zinc-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-2xl font-bold text-white"><?php echo esc_html( $t['venue_not_found'] ); ?></h1>
            <p class="mt-2 text-white/60"><?php echo esc_html( $t['could_not_find_venue'] ); ?></p>
            <a href="<?php echo esc_url( home_url( '/venues/' ) ); ?>" class="inline-flex items-center gap-2 mt-4 px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                <?php echo esc_html( $t['back_to_venues'] ); ?>
            </a>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

// Normalizare venue
$name = isset( $venue['name'] ) ? $venue['name'] : 'Unknown venue';

// Description (use current language)
$desc_html = '';
if ( $current_lang === 'ro' && ! empty( $venue['description_translations']['ro'] ) ) {
    $desc_html = $venue['description_translations']['ro'];
} elseif ( ! empty( $venue['description_translations']['en'] ) ) {
    $desc_html = $venue['description_translations']['en'];
} elseif ( ! empty( $venue['description_translations']['ro'] ) ) {
    $desc_html = $venue['description_translations']['ro'];
} elseif ( ! empty( $venue['description'] ) ) {
    $desc_html = $venue['description'];
}

$address = isset( $venue['address'] ) ? $venue['address'] : '';
$city    = isset( $venue['city'] ) ? $venue['city'] : '';
$state   = isset( $venue['state'] ) ? $venue['state'] : '';
$country = isset( $venue['country'] ) ? $venue['country'] : '';

$location_label = '';
if ( $city && $country ) {
    $location_label = $city . ', ' . $country;
} elseif ( $city ) {
    $location_label = $city;
} elseif ( $country ) {
    $location_label = $country;
}

$cap_total    = isset( $venue['capacity']['total'] ) ? (int) $venue['capacity']['total'] : null;
$cap_standing = isset( $venue['capacity']['standing'] ) ? $venue['capacity']['standing'] : null;
$cap_seated   = isset( $venue['capacity']['seated'] ) ? $venue['capacity']['seated'] : null;

$lat  = isset( $venue['location']['latitude'] ) ? $venue['location']['latitude'] : '';
$lng  = isset( $venue['location']['longitude'] ) ? $venue['location']['longitude'] : '';
$gmaps_url = isset( $venue['location']['google_maps_url'] ) ? $venue['location']['google_maps_url'] : '';

$website = isset( $venue['contact']['website'] ) ? $venue['contact']['website'] : '';
$phone   = isset( $venue['contact']['phone'] ) ? $venue['contact']['phone'] : '';
$email   = isset( $venue['contact']['email'] ) ? $venue['contact']['email'] : '';

$facebook  = isset( $venue['social']['facebook_url'] ) ? $venue['social']['facebook_url'] : '';
$instagram = isset( $venue['social']['instagram_url'] ) ? $venue['social']['instagram_url'] : '';
$tiktok    = isset( $venue['social']['tiktok_url'] ) ? $venue['social']['tiktok_url'] : '';

$venue_type = isset( $venue['type'] ) ? $venue['type'] : $t['venue'];

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

$image_url = '';
if ( ! empty( $venue['media']['image_url'] ) ) {
    $image_url = $full_storage_url( $venue['media']['image_url'] );
}

// Gallery images
$gallery_images = [];
if ( ! empty( $venue['media']['gallery'] ) && is_array( $venue['media']['gallery'] ) ) {
    foreach ( $venue['media']['gallery'] as $img ) {
        $url = $full_storage_url( $img );
        if ( $url ) {
            $gallery_images[] = $url;
        }
    }
}

$established_at = isset( $venue['established_at'] ) ? $venue['established_at'] : null;
$established_year = $established_at ? date( 'Y', strtotime( $established_at ) ) : null;

// Helper events date/time (folosim aceiași ca la artist dacă nu există deja)
if ( ! function_exists( 'tixello_get_event_timestamp' ) ) {
    function tixello_get_event_timestamp( $ev ) {
        $use_postponed = ! empty( $ev['is_postponed'] ) && ! empty( $ev['postponed_date'] );
        $raw = null;

        if ( $use_postponed && ! empty( $ev['postponed_date'] ) ) {
            $raw = $ev['postponed_date'];
        } elseif ( ! empty( $ev['start_date'] ) ) {
            $raw = $ev['start_date'];
        }

        if ( ! $raw ) {
            return null;
        }

        $ts = strtotime( $raw );
        return $ts ? $ts : null;
    }
}

if ( ! function_exists( 'tixello_format_event_date_display' ) ) {
    function tixello_format_event_date_display( $ev ) {
        $ts = tixello_get_event_timestamp( $ev );
        if ( ! $ts ) {
            return '';
        }
        return date_i18n( 'j M Y', $ts );
    }
}

if ( ! function_exists( 'tixello_format_event_time_display' ) ) {
    function tixello_format_event_time_display( $ev ) {
        $time_raw = null;

        if ( ! empty( $ev['is_postponed'] ) && ! empty( $ev['postponed_start_time'] ) ) {
            $time_raw = $ev['postponed_start_time'];
        } elseif ( ! empty( $ev['start_time'] ) ) {
            $time_raw = $ev['start_time'];
        }

        if ( ! $time_raw ) {
            return '';
        }

        $parts = explode( ':', $time_raw );
        $hh = isset( $parts[0] ) ? intval( $parts[0] ) : 0;
        $mm = isset( $parts[1] ) ? intval( $parts[1] ) : 0;

        $ts = mktime( $hh, $mm, 0 );
        return date_i18n( 'H:i', $ts );
    }
}

// Evenimente în acest venue
$venue_events = [];
if ( function_exists( 'tixello_fetch_events_core' ) ) {
    $all_events = tixello_fetch_events_core();
    if ( is_array( $all_events ) ) {
        $venue_id   = isset( $venue['id'] ) ? $venue['id'] : null;
        $venue_slug = isset( $venue['slug'] ) ? $venue['slug'] : null;
        $now        = time();

        foreach ( $all_events as $ev ) {
            if ( ! is_array( $ev ) || empty( $ev['venue'] ) || ! is_array( $ev['venue'] ) ) {
                continue;
            }

            $match = false;
            if ( $venue_id && isset( $ev['venue']['id'] ) && (int) $ev['venue']['id'] === (int) $venue_id ) {
                $match = true;
            } elseif ( $venue_slug && isset( $ev['venue']['slug'] ) && $ev['venue']['slug'] === $venue_slug ) {
                $match = true;
            }

            if ( ! $match ) {
                continue;
            }

            $ts = tixello_get_event_timestamp( $ev );
            if ( $ts && $ts < $now ) {
                continue; // doar viitoare
            }

            $venue_events[] = $ev;
        }

        usort(
            $venue_events,
            function( $a, $b ) {
                $tsA = tixello_get_event_timestamp( $a ) ?: PHP_INT_MAX;
                $tsB = tixello_get_event_timestamp( $b ) ?: PHP_INT_MAX;
                return $tsA <=> $tsB;
            }
        );
    }
}

$events_count = count( $venue_events );

// Similar venues
$similar_venues = [];
if ( function_exists( 'tixello_fetch_venues_core' ) ) {
    $all_venues = tixello_fetch_venues_core();
    if ( is_array( $all_venues ) ) {
        $current_venue_id = isset( $venue['id'] ) ? $venue['id'] : null;
        foreach ( $all_venues as $v ) {
            if ( ! is_array( $v ) ) continue;
            if ( $current_venue_id && isset( $v['id'] ) && $v['id'] == $current_venue_id ) continue;
            if ( empty( $v['name'] ) ) continue;
            $similar_venues[] = $v;
            if ( count( $similar_venues ) >= 4 ) break;
        }
    }
}

?>
<main id="primary" class="site-main bg-zinc-950 text-zinc-200 antialiased">

    <!-- ==================== HERO IMAGE ==================== -->
    <section class="relative h-[50vh] min-h-[400px] max-h-[600px] overflow-hidden">
        <!-- Main Image -->
        <div class="absolute inset-0">
            <?php if ( $image_url ) : ?>
                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="w-full h-full object-cover">
            <?php else : ?>
                <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900 flex items-center justify-center">
                    <span class="text-8xl font-bold text-white/10"><?php echo esc_html( strtoupper( mb_substr( $name, 0, 1 ) ) ); ?></span>
                </div>
            <?php endif; ?>
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/50 to-transparent"></div>
        </div>

        <!-- Breadcrumb overlay -->
        <div class="absolute top-8 left-0 right-0 z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center gap-2 text-sm">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white/60 hover:text-white transition-colors"><?php echo esc_html( $t['home'] ); ?></a>
                    <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <a href="<?php echo esc_url( home_url( '/venues/' ) ); ?>" class="text-white/60 hover:text-white transition-colors"><?php echo esc_html( $t['venues'] ); ?></a>
                    <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <span class="text-white"><?php echo esc_html( $name ); ?></span>
                </nav>
            </div>
        </div>

        <!-- Gallery thumbnails -->
        <?php if ( ! empty( $gallery_images ) || $image_url ) : ?>
        <div class="absolute bottom-8 left-0 right-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-end justify-between">
                    <?php if ( count( $gallery_images ) > 0 ) : ?>
                    <div class="hidden sm:flex items-center gap-2">
                        <?php
                        $thumb_count = 0;
                        foreach ( $gallery_images as $gimg ) :
                            if ( $thumb_count >= 4 ) break;
                            $thumb_count++;
                            ?>
                            <button class="w-16 h-12 rounded-lg overflow-hidden border-2 <?php echo $thumb_count === 1 ? 'border-white ring-2 ring-violet-500' : 'border-white/30 hover:border-white/60'; ?> transition-colors">
                                <img src="<?php echo esc_url( $gimg ); ?>" class="w-full h-full object-cover" alt="">
                            </button>
                        <?php endforeach; ?>
                        <?php if ( count( $gallery_images ) > 4 ) : ?>
                            <button class="w-16 h-12 rounded-lg overflow-hidden border-2 border-white/30 hover:border-white/60 transition-colors relative">
                                <img src="<?php echo esc_url( $gallery_images[4] ?? $gallery_images[0] ); ?>" class="w-full h-full object-cover" alt="">
                                <div class="absolute inset-0 bg-black/60 flex items-center justify-center">
                                    <span class="text-white text-xs font-semibold">+<?php echo count( $gallery_images ) - 4; ?></span>
                                </div>
                            </button>
                        <?php endif; ?>
                    </div>
                    <?php else : ?>
                        <div></div>
                    <?php endif; ?>

                    <?php if ( $gmaps_url || ( $lat && $lng ) ) : ?>
                    <a href="<?php echo esc_url( $gmaps_url ? $gmaps_url : 'https://www.google.com/maps?q=' . urlencode( $lat . ',' . $lng ) ); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-black/50 backdrop-blur-sm border border-white/20 text-white text-sm font-medium hover:bg-black/70 transition-colors">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <?php echo esc_html( $t['open_google_maps'] ); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </section>

    <!-- ==================== MAIN CONTENT ==================== -->
    <section class="py-8 lg:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">

                <!-- Left Column - Main Info -->
                <div class="lg:col-span-2 space-y-8">

                    <!-- Title & Basic Info -->
                    <div>
                        <div class="flex flex-wrap items-center gap-3 mb-4">
                            <span class="px-3 py-1 rounded-lg bg-violet-600/20 border border-violet-500/30 text-sm font-medium text-violet-400">
                                🏛️ <?php echo esc_html( $venue_type ); ?>
                            </span>
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">
                            <?php echo esc_html( $name ); ?>
                        </h1>

                        <div class="flex flex-wrap items-center gap-4 text-white/60">
                            <?php if ( $location_label ) : ?>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span><?php echo esc_html( $location_label ); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if ( $cap_total ) : ?>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                <span><?php echo esc_html( number_format_i18n( $cap_total ) ); ?> <?php echo esc_html( $t['seats'] ); ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center">
                            <div class="text-2xl font-bold text-white"><?php echo $cap_total ? esc_html( number_format_i18n( $cap_total ) ) : '-'; ?></div>
                            <div class="text-sm text-white/50"><?php echo esc_html( $t['capacity'] ); ?></div>
                        </div>
                        <div class="p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center">
                            <div class="text-2xl font-bold text-white"><?php echo $events_count > 0 ? $events_count : '-'; ?></div>
                            <div class="text-sm text-white/50"><?php echo esc_html( $t['events'] ); ?></div>
                        </div>
                        <?php if ( $established_year ) : ?>
                        <div class="p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center">
                            <div class="text-2xl font-bold text-white"><?php echo esc_html( $established_year ); ?></div>
                            <div class="text-sm text-white/50"><?php echo esc_html( $t['established_year'] ); ?></div>
                        </div>
                        <?php endif; ?>
                        <?php if ( $cap_seated ) : ?>
                        <div class="p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center">
                            <div class="text-2xl font-bold text-white"><?php echo esc_html( number_format_i18n( $cap_seated ) ); ?></div>
                            <div class="text-sm text-white/50"><?php echo esc_html( $t['seated'] ); ?></div>
                        </div>
                        <?php elseif ( $cap_standing ) : ?>
                        <div class="p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center">
                            <div class="text-2xl font-bold text-white"><?php echo esc_html( number_format_i18n( $cap_standing ) ); ?></div>
                            <div class="text-sm text-white/50"><?php echo esc_html( $t['standing'] ); ?></div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Description -->
                    <?php if ( $desc_html ) : ?>
                    <div class="prose prose-invert max-w-none">
                        <h2 class="text-xl font-bold text-white mb-4"><?php echo esc_html( $t['about_venue'] ); ?></h2>
                        <div class="text-white/70 leading-relaxed space-y-4">
                            <?php echo wp_kses_post( $desc_html ); ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Google Maps -->
                    <?php if ( $lat && $lng ) : ?>
                    <div>
                        <h2 class="text-xl font-bold text-white mb-4"><?php echo esc_html( $t['location'] ); ?></h2>
                        <div class="rounded-2xl overflow-hidden border border-white/10">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2000!2d<?php echo esc_attr( $lng ); ?>!3d<?php echo esc_attr( $lat ); ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sro"
                                width="100%"
                                height="400"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                class="w-full">
                            </iframe>
                        </div>
                        <?php if ( $address ) : ?>
                        <div class="mt-4 p-4 rounded-xl bg-zinc-900/50 border border-white/5">
                            <div class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-violet-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <div>
                                    <p class="text-white font-medium"><?php echo esc_html( $address ); ?></p>
                                    <?php if ( $city || $country ) : ?>
                                    <p class="text-white/50 text-sm"><?php echo esc_html( $location_label ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if ( $gmaps_url || ( $lat && $lng ) ) : ?>
                            <div class="flex flex-wrap gap-3 mt-4">
                                <a href="<?php echo esc_url( $gmaps_url ? $gmaps_url : 'https://www.google.com/maps?q=' . urlencode( $lat . ',' . $lng ) ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-sm text-white/70 hover:text-white hover:bg-white/10 transition-colors">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                    <?php echo esc_html( $t['open_google_maps'] ); ?>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                </div>

                <!-- Right Column - Sidebar -->
                <div class="lg:col-span-1">
                    <div class="sticky top-28 space-y-6">

                        <!-- Action Card -->
                        <div class="p-6 rounded-2xl bg-zinc-900/80 border border-white/10">
                            <h3 class="text-lg font-bold text-white mb-4"><?php echo esc_html( $t['organizing_event'] ); ?></h3>
                            <p class="text-sm text-white/60 mb-6">
                                <?php echo esc_html( $t['contact_venue_desc'] ); ?>
                            </p>
                            <div class="space-y-3">
                                <?php if ( $email ) : ?>
                                <a href="mailto:<?php echo esc_attr( $email ); ?>" class="flex items-center justify-center gap-2 w-full px-6 py-3 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/25 transition-all">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    <?php echo esc_html( $t['request_quote'] ); ?>
                                </a>
                                <?php endif; ?>
                                <?php if ( $phone ) : ?>
                                <a href="tel:<?php echo esc_attr( $phone ); ?>" class="flex items-center justify-center gap-2 w-full px-6 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-all">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <?php echo esc_html( $t['call_now'] ); ?>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="p-6 rounded-2xl bg-zinc-900/50 border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-4"><?php echo esc_html( $t['contact'] ); ?></h3>
                            <div class="space-y-4">
                                <?php if ( $phone ) : ?>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-white/40"><?php echo esc_html( $t['phone'] ); ?></p>
                                        <a href="tel:<?php echo esc_attr( $phone ); ?>" class="text-sm text-white hover:text-violet-400 transition-colors"><?php echo esc_html( $phone ); ?></a>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if ( $email ) : ?>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-white/40"><?php echo esc_html( $t['email'] ); ?></p>
                                        <a href="mailto:<?php echo esc_attr( $email ); ?>" class="text-sm text-white hover:text-violet-400 transition-colors"><?php echo esc_html( $email ); ?></a>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if ( $website ) : ?>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-white/40"><?php echo esc_html( $t['website'] ); ?></p>
                                        <a href="<?php echo esc_url( $website ); ?>" target="_blank" rel="noopener noreferrer" class="text-sm text-white hover:text-violet-400 transition-colors"><?php echo esc_html( parse_url( $website, PHP_URL_HOST ) ); ?></a>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>

                            <!-- Social Links -->
                            <?php if ( $facebook || $instagram || $tiktok ) : ?>
                            <div class="mt-6 pt-4 border-t border-white/5">
                                <p class="text-xs text-white/40 mb-3"><?php echo esc_html( $t['social_media'] ); ?></p>
                                <div class="flex items-center gap-2">
                                    <?php if ( $facebook ) : ?>
                                    <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/60 hover:text-white hover:bg-violet-600/20 transition-all">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    </a>
                                    <?php endif; ?>
                                    <?php if ( $instagram ) : ?>
                                    <a href="<?php echo esc_url( $instagram ); ?>" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/60 hover:text-white hover:bg-violet-600/20 transition-all">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                    </a>
                                    <?php endif; ?>
                                    <?php if ( $tiktok ) : ?>
                                    <a href="<?php echo esc_url( $tiktok ); ?>" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/60 hover:text-white hover:bg-violet-600/20 transition-all">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Share -->
                        <div class="p-4 rounded-2xl bg-zinc-900/50 border border-white/5">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-white/60"><?php echo esc_html( $t['share_venue'] ); ?></span>
                                <div class="flex items-center gap-2">
                                    <button onclick="navigator.share && navigator.share({title: '<?php echo esc_js( $name ); ?>', url: window.location.href})" class="w-9 h-9 rounded-lg bg-white/5 flex items-center justify-center text-white/60 hover:text-white hover:bg-white/10 transition-all">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== UPCOMING EVENTS ==================== -->
    <?php if ( ! empty( $venue_events ) ) : ?>
    <section class="py-12 lg:py-16 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-white"><?php echo esc_html( $t['events_at_venue'] ); ?></h2>
                    <p class="text-white/60 mt-1"><?php echo $events_count; ?> <?php echo esc_html( $t['events_scheduled'] ); ?></p>
                </div>
                <a href="<?php echo esc_url( home_url( '/search/?venue=' . urlencode( $name ) ) ); ?>" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-sm text-white/70 hover:text-white hover:bg-white/10 transition-all">
                    <?php echo esc_html( $t['view_all'] ); ?>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $max_events = 6;
                $count = 0;
                foreach ( $venue_events as $ev ) :
                    if ( $count >= $max_events ) {
                        break;
                    }
                    $count++;

                    $event_slug = ! empty( $ev['slug'] ) ? $ev['slug'] : '';
                    $internal_url = $event_slug ? home_url( '/events/' . $event_slug . '/' ) : '';
                    $external_url = '';

                    if ( ! empty( $ev['tenant']['event_url'] ) ) {
                        $external_url = $ev['tenant']['event_url'];
                    } elseif ( ! empty( $ev['event_website_url'] ) ) {
                        $external_url = $ev['event_website_url'];
                    } elseif ( ! empty( $ev['website_url'] ) ) {
                        $external_url = $ev['website_url'];
                    } elseif ( ! empty( $ev['facebook_url'] ) ) {
                        $external_url = $ev['facebook_url'];
                    }

                    $card_url = $internal_url ? $internal_url : $external_url;

                    $poster_url = '';
                    if ( ! empty( $ev['poster_url'] ) ) {
                        $poster_url = $full_storage_url( $ev['poster_url'] );
                    }

                    $date_label = tixello_format_event_date_display( $ev );
                    $time_label = tixello_format_event_time_display( $ev );
                    $price_from = function_exists( 'tixello_get_min_price_excluding_invitations' )
                        ? tixello_get_min_price_excluding_invitations( $ev )
                        : ( isset( $ev['price_from'] ) ? $ev['price_from'] : null );

                    // Get event timestamp for date badge
                    $ts = tixello_get_event_timestamp( $ev );
                    $month_short = $ts ? date_i18n( 'M', $ts ) : '';
                    $day = $ts ? date_i18n( 'j', $ts ) : '';
                    ?>
                    <a href="<?php echo esc_url( $card_url ); ?>" class="group relative bg-zinc-900/50 rounded-2xl border border-white/5 overflow-hidden hover:border-violet-500/30 transition-all" <?php echo $card_url && ! $internal_url ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
                        <div class="aspect-[16/10] relative overflow-hidden">
                            <?php if ( $poster_url ) : ?>
                                <img src="<?php echo esc_url( $poster_url ); ?>" alt="<?php echo esc_attr( $ev['title'] ?? '' ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <?php else : ?>
                                <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            <?php endif; ?>
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-900 via-transparent to-transparent"></div>

                            <!-- Date badge -->
                            <?php if ( $month_short && $day ) : ?>
                            <div class="absolute top-3 left-3 flex flex-col items-center px-3 py-2 rounded-xl bg-violet-600 text-white">
                                <span class="text-xs font-medium uppercase"><?php echo esc_html( $month_short ); ?></span>
                                <span class="text-xl font-bold leading-none"><?php echo esc_html( $day ); ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-white group-hover:text-violet-400 transition-colors mb-2 line-clamp-2">
                                <?php echo esc_html( $ev['title'] ?? 'Untitled event' ); ?>
                            </h3>
                            <?php if ( $time_label ) : ?>
                            <div class="flex items-center gap-2 text-sm text-white/50">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><?php echo esc_html( $time_label ); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if ( ! is_null( $price_from ) ) : ?>
                            <div class="flex items-center justify-between mt-4 pt-3 border-t border-white/5">
                                <span class="text-sm text-white/40"><?php echo esc_html( $t['from'] ); ?></span>
                                <span class="text-lg font-bold text-white"><?php echo esc_html( $price_from ); ?> RON</span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Mobile see all link -->
            <div class="mt-6 sm:hidden text-center">
                <a href="<?php echo esc_url( home_url( '/search/?venue=' . urlencode( $name ) ) ); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-white/5 border border-white/10 text-white font-medium">
                    <?php echo esc_html( $t['view_all_events'] ); ?>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- ==================== SIMILAR VENUES ==================== -->
    <?php if ( ! empty( $similar_venues ) ) : ?>
    <section class="py-12 lg:py-16 border-t border-white/5 bg-zinc-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl lg:text-3xl font-bold text-white mb-8"><?php echo esc_html( $t['similar_venues'] ); ?></h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ( $similar_venues as $sv ) :
                    $sv_name = isset( $sv['name'] ) ? $sv['name'] : '';
                    $sv_slug = isset( $sv['slug'] ) ? $sv['slug'] : '';
                    $sv_cap = isset( $sv['capacity']['total'] ) ? (int) $sv['capacity']['total'] : null;
                    $sv_image = '';
                    if ( ! empty( $sv['media']['image_url'] ) ) {
                        $sv_image = $full_storage_url( $sv['media']['image_url'] );
                    }
                    ?>
                    <a href="<?php echo esc_url( home_url( '/venues/' . $sv_slug . '/' ) ); ?>" class="group relative bg-zinc-900/50 rounded-2xl border border-white/5 overflow-hidden hover:border-violet-500/30 transition-all">
                        <div class="aspect-[4/3] relative overflow-hidden">
                            <?php if ( $sv_image ) : ?>
                                <img src="<?php echo esc_url( $sv_image ); ?>" alt="<?php echo esc_attr( $sv_name ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <?php else : ?>
                                <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900 flex items-center justify-center">
                                    <span class="text-4xl font-bold text-white/10"><?php echo esc_html( strtoupper( mb_substr( $sv_name, 0, 1 ) ) ); ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-900 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-white group-hover:text-violet-400 transition-colors"><?php echo esc_html( $sv_name ); ?></h3>
                            <?php if ( $sv_cap ) : ?>
                                <p class="text-sm text-white/50"><?php echo esc_html( number_format_i18n( $sv_cap ) ); ?> <?php echo esc_html( $t['seats'] ); ?></p>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

</main>

<?php
get_footer();
?>
