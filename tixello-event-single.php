<?php
/**
 * Single dynamic event page for Tixello Core events.
 * URL: /events/{slug}/
 */

get_header();

// Detectare limba curentă (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Array cu traduceri
$t = [
    // 404 / Error messages
    'event_not_found'      => $current_lang === 'ro' ? 'Eveniment negasit' : 'Event not found',
    'no_slug_provided'     => $current_lang === 'ro' ? 'Nu a fost furnizat un slug pentru eveniment.' : 'No event slug was provided.',
    'could_not_find_event' => $current_lang === 'ro' ? 'Nu am putut gasi acest eveniment.' : 'Could not find this event.',
    'back_to_events'       => $current_lang === 'ro' ? 'Inapoi la evenimente' : 'Back to events',

    // Breadcrumb
    'home'   => $current_lang === 'ro' ? 'Acasa' : 'Home',
    'events' => $current_lang === 'ro' ? 'Evenimente' : 'Events',

    // Status badges
    'cancelled'      => $current_lang === 'ro' ? 'Anulat' : 'Cancelled',
    'postponed'      => $current_lang === 'ro' ? 'Amanat' : 'Postponed',
    'sold_out'       => 'Sold Out',
    'door_tickets'   => $current_lang === 'ro' ? 'Bilete la intrare' : 'Door tickets only',

    // Date & Time
    'date'        => $current_lang === 'ro' ? 'Data' : 'Date',
    'time'        => $current_lang === 'ro' ? 'Ora' : 'Time',
    'doors_open'  => $current_lang === 'ro' ? 'Usi deschise' : 'Doors open',

    // Notices
    'event_postponed' => $current_lang === 'ro' ? 'Eveniment amanat' : 'Event postponed',
    'event_cancelled' => $current_lang === 'ro' ? 'Eveniment anulat' : 'Event cancelled',

    // About section
    'about_event' => $current_lang === 'ro' ? 'Despre eveniment' : 'About event',

    // Artists section
    'artists'       => $current_lang === 'ro' ? 'Artisti' : 'Artists',
    'headliner'     => 'Headliner',
    'special_guest' => 'Special Guest',
    'view_profile'  => $current_lang === 'ro' ? 'Vezi profil' : 'View profile',

    // Venue section
    'location'    => $current_lang === 'ro' ? 'Locatie' : 'Location',
    'event_venue' => $current_lang === 'ro' ? 'Locatie eveniment' : 'Event venue',
    'view_venue'  => $current_lang === 'ro' ? 'Vezi locatia' : 'View venue',
    'seats'       => $current_lang === 'ro' ? 'locuri' : 'seats',
    'directions'  => $current_lang === 'ro' ? 'Indicatii' : 'Directions',

    // External links section
    'more_info'        => $current_lang === 'ro' ? 'Mai multe informatii' : 'More information',
    'official_website' => $current_lang === 'ro' ? 'Website oficial' : 'Official website',
    'view_on_facebook' => $current_lang === 'ro' ? 'Vezi pe Facebook' : 'View on Facebook',
    'organizer'        => $current_lang === 'ro' ? 'Organizator' : 'Organizer',

    // Tickets sidebar
    'tickets'             => $current_lang === 'ro' ? 'Bilete' : 'Tickets',
    'select_ticket_type'  => $current_lang === 'ro' ? 'Selecteaza tipul de bilet' : 'Select ticket type',
    'available'           => $current_lang === 'ro' ? 'disponibile' : 'available',
    'starting_from'       => $current_lang === 'ro' ? 'Incepand de la' : 'Starting from',
    'buy_tickets'         => $current_lang === 'ro' ? 'Cumpara bilete' : 'Buy tickets',
    'redirect_notice'     => $current_lang === 'ro' ? 'Vei fi redirectionat catre website-ul organizatorului' : 'You will be redirected to the organizer\'s website',
    'tickets_unavailable' => $current_lang === 'ro' ? 'Link-ul pentru bilete nu este disponibil momentan.' : 'Ticket link is not available at the moment.',

    // Organizer card
    'event_organizer' => $current_lang === 'ro' ? 'Organizator evenimente' : 'Event organizer',
    'website'         => 'Website',

    // Share
    'share_event' => $current_lang === 'ro' ? 'Distribuie evenimentul' : 'Share event',

    // Mobile CTA
    'from' => $current_lang === 'ro' ? 'De la' : 'From',

    // Similar events
    'similar_events' => $current_lang === 'ro' ? 'Evenimente similare' : 'Similar events',
    'from_price'     => $current_lang === 'ro' ? 'de la' : 'from',
];

// Slug-ul din URL
$slug = get_query_var( 'tixello_event_slug' );

// Dacă nu avem slug, 404
if ( ! $slug ) {
    status_header( 404 );
    ?>
    <main id="primary" class="site-main bg-zinc-950 text-zinc-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-2xl font-bold text-white"><?php echo esc_html( $t['event_not_found'] ); ?></h1>
            <p class="mt-2 text-white/60"><?php echo esc_html( $t['no_slug_provided'] ); ?></p>
            <a href="<?php echo esc_url( home_url( '/events/' ) ); ?>" class="inline-flex items-center gap-2 mt-4 px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                <?php echo esc_html( $t['back_to_events'] ); ?>
            </a>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

// Luăm evenimentul din API
$event = tixello_get_event_by_slug( $slug );

if ( ! $event || ! is_array( $event ) ) {
    status_header( 404 );
    ?>
    <main id="primary" class="site-main bg-zinc-950 text-zinc-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-2xl font-bold text-white"><?php echo esc_html( $t['event_not_found'] ); ?></h1>
            <p class="mt-2 text-white/60"><?php echo esc_html( $t['could_not_find_event'] ); ?></p>
            <a href="<?php echo esc_url( home_url( '/events/' ) ); ?>" class="inline-flex items-center gap-2 mt-4 px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                <?php echo esc_html( $t['back_to_events'] ); ?>
            </a>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

// Helper pt. imagini
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

// Date / ora
$use_postponed = ! empty( $event['is_postponed'] ) && ! empty( $event['postponed_date'] );

$start_iso = $use_postponed
    ? ( isset( $event['postponed_date'] ) ? $event['postponed_date'] : null )
    : ( isset( $event['start_date'] ) ? $event['start_date'] : null );

$end_iso   = isset( $event['end_date'] ) ? $event['end_date'] : null;

$start_time_str = $use_postponed
    ? ( $event['postponed_start_time'] ?? null )
    : ( $event['start_time'] ?? null );

$door_time_str  = $use_postponed
    ? ( $event['postponed_door_time'] ?? null )
    : ( $event['door_time'] ?? null );

// Formatare date
function tixello_event_pretty_date( $iso ) {
    if ( ! $iso ) return '';
    try {
        $dt = new DateTime( $iso );
    } catch ( Exception $e ) {
        return '';
    }
    return $dt->format( 'j F Y' );
}

function tixello_event_pretty_time( $time_string ) {
    if ( empty( $time_string ) ) return '';
    $parts = explode( ':', $time_string );
    if ( count( $parts ) < 2 ) return esc_html( $time_string );
    return sprintf( '%02d:%02d', intval( $parts[0] ), intval( $parts[1] ) );
}

function tixello_event_day( $iso ) {
    if ( ! $iso ) return '';
    try {
        $dt = new DateTime( $iso );
    } catch ( Exception $e ) {
        return '';
    }
    return $dt->format( 'j' );
}

function tixello_event_month_short( $iso ) {
    if ( ! $iso ) return '';
    try {
        $dt = new DateTime( $iso );
    } catch ( Exception $e ) {
        return '';
    }
    return $dt->format( 'M' );
}

function tixello_event_weekday( $iso ) {
    if ( ! $iso ) return '';
    try {
        $dt = new DateTime( $iso );
    } catch ( Exception $e ) {
        return '';
    }
    return $dt->format( 'l' );
}

$start_date_pretty = tixello_event_pretty_date( $start_iso );
$end_date_pretty   = tixello_event_pretty_date( $end_iso );
$start_time_pretty = tixello_event_pretty_time( $start_time_str );
$door_time_pretty  = tixello_event_pretty_time( $door_time_str );
$event_day         = tixello_event_day( $start_iso );
$event_month       = tixello_event_month_short( $start_iso );
$event_weekday     = tixello_event_weekday( $start_iso );

// Venue
$venue_name    = $event['venue']['name'] ?? '';
$venue_slug    = $event['venue']['slug'] ?? '';
$venue_addr    = $event['venue']['address'] ?? '';
$venue_city    = $event['venue']['city'] ?? '';
$venue_country = $event['venue']['country'] ?? '';
$venue_capacity = $event['venue']['capacity']['total'] ?? null;
$venue_lat     = $event['venue']['location']['latitude'] ?? '';
$venue_lng     = $event['venue']['location']['longitude'] ?? '';
$venue_image   = '';
if ( ! empty( $event['venue']['media']['image_url'] ) ) {
    $venue_image = $full_storage_url( $event['venue']['media']['image_url'] );
}

// Preț minim
$price_from = $event['price_from'] ?? null;

// Imagini
$poster_url = $full_storage_url( $event['poster_url'] ?? '' );
$hero_url   = $full_storage_url( $event['hero_image_url'] ?? '' );

// URL event (la tenant)
$event_url = '';
if ( ! empty( $event['tenant']['event_url'] ) ) {
    $event_url = esc_url( $event['tenant']['event_url'] );
} elseif ( ! empty( $event['event_website_url'] ) ) {
    $event_url = esc_url( $event['event_website_url'] );
} elseif ( ! empty( $event['website_url'] ) ) {
    $event_url = esc_url( $event['website_url'] );
} elseif ( ! empty( $event['facebook_url'] ) ) {
    $event_url = esc_url( $event['facebook_url'] );
}

// Statusuri
$is_cancelled = ! empty( $event['is_cancelled'] );
$is_postponed = ! $is_cancelled && ! empty( $event['is_postponed'] );
$is_sold_out  = ! empty( $event['is_sold_out'] );
$door_only    = ! empty( $event['door_sales_only'] );

// Event type/category
$event_type = $event['type'] ?? $event['category'] ?? 'Event';

// Organizer
$organizer_name = $event['tenant']['public_name'] ?? $event['tenant']['name'] ?? '';
$organizer_website = $event['tenant']['website'] ?? '';

// Artists
$artists = isset( $event['artists'] ) && is_array( $event['artists'] ) ? $event['artists'] : [];

// Description
$description = '';
if ( ! empty( $event['description_translations']['ro'] ) ) {
    $description = $event['description_translations']['ro'];
} elseif ( ! empty( $event['description_translations']['en'] ) ) {
    $description = $event['description_translations']['en'];
} elseif ( ! empty( $event['description'] ) ) {
    $description = $event['description'];
}

$short_description = $event['short_description'] ?? '';

// Pentru JSON-LD
$schema_status = 'https://schema.org/EventScheduled';
if ( $is_cancelled ) {
    $schema_status = 'https://schema.org/EventCancelled';
} elseif ( $is_postponed ) {
    $schema_status = 'https://schema.org/EventPostponed';
}

// JSON-LD minimal pentru SEO
$schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'Event',
    'name'            => $event['title'] ?? '',
    'description'     => wp_strip_all_tags( $short_description ?: $description ),
    'eventStatus'     => $schema_status,
    'startDate'       => $start_iso,
    'endDate'         => $end_iso ?: $start_iso,
    'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
    'image'           => array_filter( [ $hero_url ?: $poster_url ] ),
    'location'        => [
        '@type'   => 'Place',
        'name'    => $venue_name,
        'address' => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => $venue_addr,
            'addressLocality' => $venue_city,
            'addressCountry'  => 'RO',
        ],
    ],
];

if ( ! empty( $event_url ) ) {
    $schema['url'] = $event_url;
}

// Ticket types (ptr afișare)
$ticket_types = is_array( $event['ticket_types'] ?? null ) ? $event['ticket_types'] : [];

// Similar events
$similar_events = [];
if ( function_exists( 'tixello_fetch_events_core' ) ) {
    $all_events = tixello_fetch_events_core();
    if ( is_array( $all_events ) ) {
        $current_id = $event['id'] ?? null;
        $now = time();
        foreach ( $all_events as $ev ) {
            if ( ! is_array( $ev ) ) continue;
            if ( $current_id && isset( $ev['id'] ) && $ev['id'] == $current_id ) continue;

            $ev_date = $ev['start_date'] ?? '';
            if ( $ev_date ) {
                $ev_ts = strtotime( $ev_date );
                if ( $ev_ts && $ev_ts < $now ) continue;
            }

            $similar_events[] = $ev;
            if ( count( $similar_events ) >= 4 ) break;
        }
    }
}

?>
<main id="primary" class="site-main bg-zinc-950 text-zinc-200 antialiased">

    <!-- JSON-LD pt SEO -->
    <script type="application/ld+json">
        <?php echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ); ?>
    </script>

    <!-- ==================== HERO IMAGE ==================== -->
    <section class="relative h-[60vh] min-h-[500px] max-h-[700px] overflow-hidden">
        <div class="absolute inset-0">
            <?php if ( $hero_url || $poster_url ) : ?>
                <img src="<?php echo $hero_url ? $hero_url : $poster_url; ?>"
                     alt="<?php echo esc_attr( $event['title'] ?? '' ); ?>"
                     class="w-full h-full object-cover">
            <?php else : ?>
                <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900"></div>
            <?php endif; ?>
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/60 to-zinc-950/30"></div>
        </div>

        <!-- Breadcrumb -->
        <div class="absolute top-8 left-0 right-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center gap-2 text-sm">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white/60 hover:text-white transition-colors"><?php echo esc_html( $t['home'] ); ?></a>
                    <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <a href="<?php echo esc_url( home_url( '/events/' ) ); ?>" class="text-white/60 hover:text-white transition-colors"><?php echo esc_html( $t['events'] ); ?></a>
                    <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <span class="text-white"><?php echo esc_html( $event['title'] ?? '' ); ?></span>
                </nav>
            </div>
        </div>

        <!-- Hero Content -->
        <div class="absolute bottom-0 left-0 right-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
                <!-- Badges -->
                <div class="flex flex-wrap items-center gap-2 mb-4">
                    <span class="px-3 py-1 rounded-lg bg-violet-600 text-white text-xs font-semibold">
                        <?php echo esc_html( $event_type ); ?>
                    </span>
                    <?php if ( $is_cancelled ) : ?>
                        <span class="px-3 py-1 rounded-lg bg-red-600 text-white text-xs font-semibold">
                            <?php echo esc_html( $t['cancelled'] ); ?>
                        </span>
                    <?php elseif ( $is_postponed ) : ?>
                        <span class="px-3 py-1 rounded-lg bg-amber-600 text-white text-xs font-semibold">
                            <?php echo esc_html( $t['postponed'] ); ?>
                        </span>
                    <?php endif; ?>
                    <?php if ( $is_sold_out ) : ?>
                        <span class="px-3 py-1 rounded-lg bg-zinc-600 text-white text-xs font-semibold">
                            <?php echo esc_html( $t['sold_out'] ); ?>
                        </span>
                    <?php endif; ?>
                    <?php if ( $door_only ) : ?>
                        <span class="px-3 py-1 rounded-lg bg-white/10 backdrop-blur-sm text-white text-xs font-medium">
                            <?php echo esc_html( $t['door_tickets'] ); ?>
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Title -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4">
                    <?php echo esc_html( $event['title'] ?? '' ); ?>
                </h1>

                <!-- Quick Info -->
                <div class="flex flex-wrap items-center gap-6 text-white/80">
                    <?php if ( $start_date_pretty ) : ?>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="font-medium"><?php echo esc_html( $start_date_pretty ); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ( $start_time_pretty ) : ?>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span><?php echo esc_html( $start_time_pretty ); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ( $venue_name ) : ?>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span><?php echo esc_html( $venue_name ); ?><?php if ( $venue_city ) : ?>, <?php echo esc_html( $venue_city ); ?><?php endif; ?></span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Share buttons -->
        <div class="absolute top-8 right-4 sm:right-8 flex items-center gap-2">
            <button onclick="navigator.share && navigator.share({title: '<?php echo esc_js( $event['title'] ?? '' ); ?>', url: window.location.href})" class="w-10 h-10 rounded-xl bg-black/30 backdrop-blur-sm border border-white/10 flex items-center justify-center text-white/70 hover:text-white hover:bg-black/50 transition-all">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                </svg>
            </button>
        </div>
    </section>

    <!-- ==================== MAIN CONTENT ==================== -->
    <section class="py-8 lg:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">

                <!-- Left Column - Main Content -->
                <div class="lg:col-span-2 space-y-10">

                    <!-- Date & Time Card -->
                    <div class="flex flex-wrap gap-4">
                        <?php if ( $start_date_pretty ) : ?>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-zinc-900/50 border border-white/5 flex-1 min-w-[200px]">
                            <div class="w-16 h-16 rounded-xl bg-violet-600 flex flex-col items-center justify-center text-white">
                                <span class="text-xs font-semibold uppercase"><?php echo esc_html( $event_month ); ?></span>
                                <span class="text-2xl font-bold leading-none"><?php echo esc_html( $event_day ); ?></span>
                            </div>
                            <div>
                                <p class="text-sm text-white/50"><?php echo esc_html( $t['date'] ); ?></p>
                                <p class="text-lg font-semibold text-white"><?php echo esc_html( $event_weekday ); ?>, <?php echo esc_html( $start_date_pretty ); ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ( $start_time_pretty ) : ?>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-zinc-900/50 border border-white/5 flex-1 min-w-[200px]">
                            <div class="w-16 h-16 rounded-xl bg-cyan-600 flex items-center justify-center text-white">
                                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-white/50"><?php echo esc_html( $t['time'] ); ?></p>
                                <p class="text-lg font-semibold text-white"><?php echo esc_html( $start_time_pretty ); ?></p>
                                <?php if ( $door_time_pretty ) : ?>
                                    <p class="text-sm text-white/40"><?php echo esc_html( $t['doors_open'] ); ?>: <?php echo esc_html( $door_time_pretty ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Postponed/Cancelled Notice -->
                    <?php if ( $is_postponed && ! empty( $event['postponed_reason'] ) ) : ?>
                    <div class="p-6 rounded-2xl bg-amber-600/10 border border-amber-500/20">
                        <h3 class="text-lg font-bold text-amber-400 mb-2"><?php echo esc_html( $t['event_postponed'] ); ?></h3>
                        <p class="text-white/70"><?php echo esc_html( $event['postponed_reason'] ); ?></p>
                    </div>
                    <?php endif; ?>

                    <?php if ( $is_cancelled && ! empty( $event['cancel_reason'] ) ) : ?>
                    <div class="p-6 rounded-2xl bg-red-600/10 border border-red-500/20">
                        <h3 class="text-lg font-bold text-red-400 mb-2"><?php echo esc_html( $t['event_cancelled'] ); ?></h3>
                        <p class="text-white/70"><?php echo esc_html( $event['cancel_reason'] ); ?></p>
                    </div>
                    <?php endif; ?>

                    <!-- Description -->
                    <?php if ( $description ) : ?>
                    <div>
                        <h2 class="text-2xl font-bold text-white mb-6"><?php echo esc_html( $t['about_event'] ); ?></h2>
                        <div class="prose prose-invert max-w-none">
                            <div class="text-white/70 leading-relaxed space-y-4">
                                <?php echo wp_kses_post( $description ); ?>
                            </div>
                        </div>
                    </div>
                    <?php elseif ( $short_description ) : ?>
                    <div>
                        <h2 class="text-2xl font-bold text-white mb-6"><?php echo esc_html( $t['about_event'] ); ?></h2>
                        <p class="text-white/70 leading-relaxed"><?php echo esc_html( $short_description ); ?></p>
                    </div>
                    <?php endif; ?>

                    <!-- Artists Section -->
                    <?php if ( ! empty( $artists ) ) : ?>
                    <div id="artists">
                        <h2 class="text-2xl font-bold text-white mb-6"><?php echo esc_html( $t['artists'] ); ?></h2>

                        <div class="space-y-6">
                            <?php foreach ( $artists as $index => $artist ) :
                                $artist_name = $artist['name'] ?? '';
                                $artist_slug = $artist['slug'] ?? '';
                                $artist_image = '';
                                if ( ! empty( $artist['media']['image_url'] ) ) {
                                    $artist_image = $full_storage_url( $artist['media']['image_url'] );
                                }
                                $artist_genres = $artist['genres'] ?? [];
                                $artist_bio = '';
                                if ( ! empty( $artist['bio_translations']['ro'] ) ) {
                                    $artist_bio = wp_strip_all_tags( $artist['bio_translations']['ro'] );
                                } elseif ( ! empty( $artist['bio_translations']['en'] ) ) {
                                    $artist_bio = wp_strip_all_tags( $artist['bio_translations']['en'] );
                                } elseif ( ! empty( $artist['bio'] ) ) {
                                    $artist_bio = wp_strip_all_tags( $artist['bio'] );
                                }
                                $artist_role = $index === 0 ? $t['headliner'] : $t['special_guest'];
                            ?>
                            <div class="p-6 rounded-2xl bg-zinc-900/50 border border-white/5">
                                <div class="flex flex-col sm:flex-row gap-6">
                                    <!-- Artist Image -->
                                    <div class="flex-shrink-0">
                                        <?php if ( $artist_image ) : ?>
                                            <img src="<?php echo esc_url( $artist_image ); ?>"
                                                 alt="<?php echo esc_attr( $artist_name ); ?>"
                                                 class="w-32 h-32 rounded-2xl object-cover">
                                        <?php else : ?>
                                            <div class="w-32 h-32 rounded-2xl bg-zinc-800 flex items-center justify-center">
                                                <span class="text-3xl font-bold text-white/20"><?php echo esc_html( strtoupper( mb_substr( $artist_name, 0, 1 ) ) ); ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Artist Info -->
                                    <div class="flex-1">
                                        <div class="flex items-start justify-between mb-2">
                                            <div>
                                                <?php if ( $artist_slug ) : ?>
                                                    <a href="<?php echo esc_url( home_url( '/artists/' . $artist_slug . '/' ) ); ?>" class="text-xl font-bold text-white hover:text-violet-400 transition-colors"><?php echo esc_html( $artist_name ); ?></a>
                                                <?php else : ?>
                                                    <h3 class="text-xl font-bold text-white"><?php echo esc_html( $artist_name ); ?></h3>
                                                <?php endif; ?>
                                                <p class="text-sm text-violet-400"><?php echo esc_html( $artist_role ); ?></p>
                                            </div>
                                            <?php if ( $artist_slug ) : ?>
                                            <a href="<?php echo esc_url( home_url( '/artists/' . $artist_slug . '/' ) ); ?>" class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs text-white/70 hover:text-white hover:bg-white/10 transition-all">
                                                <?php echo esc_html( $t['view_profile'] ); ?>
                                            </a>
                                            <?php endif; ?>
                                        </div>

                                        <?php if ( $artist_bio ) : ?>
                                        <p class="text-white/60 text-sm mb-4 line-clamp-3">
                                            <?php echo esc_html( $artist_bio ); ?>
                                        </p>
                                        <?php endif; ?>

                                        <?php if ( ! empty( $artist_genres ) ) : ?>
                                        <div class="flex flex-wrap gap-2">
                                            <?php foreach ( array_slice( $artist_genres, 0, 4 ) as $genre ) : ?>
                                                <span class="px-2 py-1 rounded-md bg-white/5 text-xs text-white/50"><?php echo esc_html( $genre ); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Venue Section -->
                    <?php if ( $venue_name ) : ?>
                    <div id="venue">
                        <h2 class="text-2xl font-bold text-white mb-6"><?php echo esc_html( $t['location'] ); ?></h2>

                        <div class="rounded-2xl bg-zinc-900/50 border border-white/5 overflow-hidden">
                            <!-- Venue Header -->
                            <div class="p-6">
                                <div class="flex flex-col sm:flex-row gap-6">
                                    <div class="flex-shrink-0">
                                        <?php if ( $venue_image ) : ?>
                                            <img src="<?php echo esc_url( $venue_image ); ?>"
                                                 alt="<?php echo esc_attr( $venue_name ); ?>"
                                                 class="w-32 h-32 rounded-2xl object-cover">
                                        <?php else : ?>
                                            <div class="w-32 h-32 rounded-2xl bg-zinc-800 flex items-center justify-center">
                                                <svg class="w-12 h-12 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                                </svg>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-start justify-between mb-2">
                                            <div>
                                                <?php if ( $venue_slug ) : ?>
                                                    <a href="<?php echo esc_url( home_url( '/venues/' . $venue_slug . '/' ) ); ?>" class="text-xl font-bold text-white hover:text-violet-400 transition-colors">
                                                        <?php echo esc_html( $venue_name ); ?>
                                                    </a>
                                                <?php else : ?>
                                                    <h3 class="text-xl font-bold text-white"><?php echo esc_html( $venue_name ); ?></h3>
                                                <?php endif; ?>
                                                <p class="text-sm text-white/50"><?php echo esc_html( $t['event_venue'] ); ?></p>
                                            </div>
                                            <?php if ( $venue_slug ) : ?>
                                            <a href="<?php echo esc_url( home_url( '/venues/' . $venue_slug . '/' ) ); ?>" class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs text-white/70 hover:text-white hover:bg-white/10 transition-all">
                                                <?php echo esc_html( $t['view_venue'] ); ?>
                                            </a>
                                            <?php endif; ?>
                                        </div>

                                        <?php if ( $venue_addr || $venue_city ) : ?>
                                        <div class="flex items-center gap-2 text-white/60 text-sm mb-3">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                            <span><?php echo esc_html( $venue_addr ); ?><?php if ( $venue_city ) : ?>, <?php echo esc_html( $venue_city ); ?><?php endif; ?></span>
                                        </div>
                                        <?php endif; ?>

                                        <div class="flex flex-wrap gap-4 text-sm">
                                            <?php if ( $venue_capacity ) : ?>
                                            <div class="flex items-center gap-1.5 text-white/50">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                </svg>
                                                <span><?php echo esc_html( number_format_i18n( $venue_capacity ) ); ?> <?php echo esc_html( $t['seats'] ); ?></span>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Google Map -->
                            <?php if ( $venue_lat && $venue_lng ) : ?>
                            <div class="h-64">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2000!2d<?php echo esc_attr( $venue_lng ); ?>!3d<?php echo esc_attr( $venue_lat ); ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sro"
                                    width="100%"
                                    height="100%"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    class="w-full h-full">
                                </iframe>
                            </div>

                            <!-- Directions -->
                            <div class="p-4 bg-zinc-800/50 flex flex-wrap items-center justify-end gap-4">
                                <a href="https://maps.google.com/?q=<?php echo urlencode( $venue_lat . ',' . $venue_lng ); ?>" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white/10 text-white text-sm font-medium hover:bg-white/20 transition-colors">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                    <?php echo esc_html( $t['directions'] ); ?>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- External Links -->
                    <?php if ( ! empty( $event['event_website_url'] ) || ! empty( $event['facebook_url'] ) || ! empty( $organizer_website ) ) : ?>
                    <div>
                        <h2 class="text-2xl font-bold text-white mb-6"><?php echo esc_html( $t['more_info'] ); ?></h2>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <?php if ( ! empty( $event['event_website_url'] ) ) : ?>
                            <a href="<?php echo esc_url( $event['event_website_url'] ); ?>" target="_blank" class="flex items-center gap-3 p-4 rounded-xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all group">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-white/60 group-hover:bg-violet-600/20 group-hover:text-violet-400 transition-all">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-white group-hover:text-violet-400 transition-colors"><?php echo esc_html( $t['official_website'] ); ?></p>
                                    <p class="text-xs text-white/40"><?php echo esc_html( parse_url( $event['event_website_url'], PHP_URL_HOST ) ); ?></p>
                                </div>
                            </a>
                            <?php endif; ?>
                            <?php if ( ! empty( $event['facebook_url'] ) ) : ?>
                            <a href="<?php echo esc_url( $event['facebook_url'] ); ?>" target="_blank" class="flex items-center gap-3 p-4 rounded-xl bg-zinc-900/50 border border-white/5 hover:border-blue-500/30 transition-all group">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-white/60 group-hover:bg-blue-600/20 group-hover:text-blue-400 transition-all">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-white group-hover:text-blue-400 transition-colors">Facebook</p>
                                    <p class="text-xs text-white/40"><?php echo esc_html( $t['view_on_facebook'] ); ?></p>
                                </div>
                            </a>
                            <?php endif; ?>
                            <?php if ( ! empty( $organizer_website ) ) : ?>
                            <a href="<?php echo esc_url( $organizer_website ); ?>" target="_blank" class="flex items-center gap-3 p-4 rounded-xl bg-zinc-900/50 border border-white/5 hover:border-orange-500/30 transition-all group">
                                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-white/60 group-hover:bg-orange-600/20 group-hover:text-orange-400 transition-all">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-white group-hover:text-orange-400 transition-colors"><?php echo esc_html( $t['organizer'] ); ?></p>
                                    <p class="text-xs text-white/40"><?php echo esc_html( parse_url( $organizer_website, PHP_URL_HOST ) ); ?></p>
                                </div>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>

                <!-- Right Column - Sidebar -->
                <div class="lg:col-span-1">
                    <div class="sticky top-28 space-y-6">

                        <!-- Tickets Card -->
                        <div class="rounded-2xl bg-zinc-900/80 border border-white/10 overflow-hidden">
                            <div class="p-6 border-b border-white/5">
                                <h3 class="text-lg font-bold text-white mb-1"><?php echo esc_html( $t['tickets'] ); ?></h3>
                                <p class="text-sm text-white/50"><?php echo esc_html( $t['select_ticket_type'] ); ?></p>
                            </div>

                            <!-- Ticket Options -->
                            <?php if ( ! empty( $ticket_types ) ) : ?>
                            <div class="p-4 space-y-3">
                                <?php foreach ( $ticket_types as $tt ) :
                                    $tt_name   = $tt['name'] ?? '';
                                    $tt_price  = $tt['price'] ?? null;
                                    $tt_sale   = $tt['sale_price'] ?? null;
                                    $tt_curr   = $tt['currency'] ?? 'RON';
                                    $tt_avail  = $tt['available'] ?? null;
                                    $tt_cap    = $tt['capacity'] ?? null;
                                    $tt_sold_out = ( $tt_avail !== null && $tt_avail <= 0 );
                                    $avail_percent = ( $tt_cap && $tt_avail !== null ) ? ( $tt_avail / $tt_cap * 100 ) : 100;
                                ?>
                                <div class="p-4 rounded-xl <?php echo $tt_sold_out ? 'bg-white/5 border border-white/10 opacity-50 cursor-not-allowed' : 'bg-white/5 border border-white/10 hover:border-violet-500/30 transition-all cursor-pointer group'; ?>">
                                    <div class="flex items-start justify-between mb-2">
                                        <div>
                                            <h4 class="font-semibold text-white <?php echo ! $tt_sold_out ? 'group-hover:text-violet-400 transition-colors' : ''; ?>"><?php echo esc_html( $tt_name ); ?></h4>
                                            <?php if ( $tt_sold_out ) : ?>
                                                <p class="text-xs text-red-400"><?php echo esc_html( $t['sold_out'] ); ?></p>
                                            <?php elseif ( $tt_avail !== null && $tt_cap !== null ) : ?>
                                                <p class="text-xs text-emerald-400"><?php echo intval( $tt_avail ); ?> / <?php echo intval( $tt_cap ); ?> <?php echo esc_html( $t['available'] ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="text-right">
                                            <?php if ( $tt_sale !== null && $tt_sale < $tt_price ) : ?>
                                                <p class="text-lg font-bold text-white"><?php echo esc_html( $tt_sale ); ?> <?php echo esc_html( $tt_curr ); ?></p>
                                                <p class="text-xs text-white/40 line-through"><?php echo esc_html( $tt_price ); ?> <?php echo esc_html( $tt_curr ); ?></p>
                                            <?php elseif ( $tt_price !== null ) : ?>
                                                <p class="text-lg font-bold text-white"><?php echo esc_html( $tt_price ); ?> <?php echo esc_html( $tt_curr ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php if ( ! $tt_sold_out && $tt_cap && $tt_avail !== null ) : ?>
                                    <div class="w-full bg-white/10 rounded-full h-1.5 mt-3">
                                        <div class="bg-emerald-500 h-1.5 rounded-full" style="width: <?php echo esc_attr( $avail_percent ); ?>%"></div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                            <!-- Price Summary -->
                            <div class="p-4 border-t border-white/5 bg-zinc-800/50">
                                <?php if ( ! is_null( $price_from ) ) : ?>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-white/60"><?php echo esc_html( $t['starting_from'] ); ?></span>
                                    <div class="text-right">
                                        <span class="text-2xl font-bold text-white"><?php echo esc_html( $price_from ); ?> RON</span>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <!-- Buy Button -->
                                <?php if ( $event_url && ! $is_cancelled && ! $is_sold_out ) : ?>
                                <a href="<?php echo $event_url; ?>"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="flex items-center justify-center gap-2 w-full px-6 py-4 rounded-xl bg-violet-600 text-white font-bold text-lg hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/30 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                    </svg>
                                    <?php echo esc_html( $t['buy_tickets'] ); ?>
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>

                                <p class="text-xs text-white/40 text-center mt-3">
                                    <?php echo esc_html( $t['redirect_notice'] ); ?>
                                </p>
                                <?php elseif ( $is_sold_out ) : ?>
                                <div class="flex items-center justify-center w-full px-6 py-4 rounded-xl bg-zinc-700 text-white/60 font-bold text-lg">
                                    <?php echo esc_html( $t['sold_out'] ); ?>
                                </div>
                                <?php elseif ( $is_cancelled ) : ?>
                                <div class="flex items-center justify-center w-full px-6 py-4 rounded-xl bg-red-600/20 text-red-400 font-bold text-lg">
                                    <?php echo esc_html( $t['event_cancelled'] ); ?>
                                </div>
                                <?php else : ?>
                                <p class="text-sm text-white/50 text-center">
                                    <?php echo esc_html( $t['tickets_unavailable'] ); ?>
                                </p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Organizer Card -->
                        <?php if ( $organizer_name ) : ?>
                        <div class="p-6 rounded-2xl bg-zinc-900/50 border border-white/5">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-white/50 mb-4"><?php echo esc_html( $t['organizer'] ); ?></h3>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-violet-500 to-pink-500 flex items-center justify-center text-white font-bold text-xl">
                                    <?php echo esc_html( strtoupper( mb_substr( $organizer_name, 0, 2 ) ) ); ?>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white"><?php echo esc_html( $organizer_name ); ?></h4>
                                    <p class="text-sm text-white/50"><?php echo esc_html( $t['event_organizer'] ); ?></p>
                                </div>
                            </div>
                            <?php if ( $organizer_website ) : ?>
                            <div class="flex items-center gap-3 mt-4">
                                <a href="<?php echo esc_url( $organizer_website ); ?>" target="_blank" class="flex-1 text-center px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-sm text-white/70 hover:text-white hover:bg-white/10 transition-all">
                                    <?php echo esc_html( $t['website'] ); ?>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <!-- Share -->
                        <div class="p-4 rounded-2xl bg-zinc-900/50 border border-white/5">
                            <p class="text-sm text-white/50 mb-3"><?php echo esc_html( $t['share_event'] ); ?></p>
                            <div class="flex items-center gap-2">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" class="flex-1 flex items-center justify-center gap-2 px-3 py-2 rounded-lg bg-[#1877F2]/20 text-[#1877F2] text-sm font-medium hover:bg-[#1877F2]/30 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    Share
                                </a>
                                <button onclick="navigator.clipboard.writeText(window.location.href)" class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 transition-all">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== MOBILE STICKY CTA ==================== -->
    <?php if ( $event_url && ! $is_cancelled && ! $is_sold_out ) : ?>
    <div class="fixed bottom-0 left-0 right-0 p-4 bg-zinc-950/95 backdrop-blur-xl border-t border-white/10 lg:hidden z-50">
        <div class="flex items-center justify-between gap-4">
            <div>
                <p class="text-sm text-white/50"><?php echo esc_html( $t['from'] ); ?></p>
                <p class="text-xl font-bold text-white"><?php echo ! is_null( $price_from ) ? esc_html( $price_from ) . ' RON' : '-'; ?></p>
            </div>
            <a href="<?php echo $event_url; ?>"
               target="_blank"
               class="flex items-center gap-2 px-6 py-3 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                </svg>
                <?php echo esc_html( $t['buy_tickets'] ); ?>
            </a>
        </div>
    </div>
    <?php endif; ?>

    <!-- ==================== SIMILAR EVENTS ==================== -->
    <?php if ( ! empty( $similar_events ) ) : ?>
    <section class="py-12 lg:py-16 border-t border-white/5 bg-zinc-900/30 <?php echo ( $event_url && ! $is_cancelled && ! $is_sold_out ) ? 'mb-20 lg:mb-0' : ''; ?>">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl lg:text-3xl font-bold text-white mb-8"><?php echo esc_html( $t['similar_events'] ); ?></h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ( $similar_events as $sim_ev ) :
                    $sim_slug = $sim_ev['slug'] ?? '';
                    $sim_title = $sim_ev['title'] ?? '';
                    $sim_poster = $full_storage_url( $sim_ev['poster_url'] ?? '' );
                    $sim_venue = $sim_ev['venue']['name'] ?? '';
                    $sim_price = $sim_ev['price_from'] ?? null;
                    $sim_date = $sim_ev['start_date'] ?? '';
                    $sim_day = tixello_event_day( $sim_date );
                    $sim_month = tixello_event_month_short( $sim_date );
                ?>
                <a href="<?php echo esc_url( home_url( '/events/' . $sim_slug . '/' ) ); ?>" class="group relative bg-zinc-900/50 rounded-2xl border border-white/5 overflow-hidden hover:border-violet-500/30 transition-all">
                    <div class="aspect-[3/4] relative overflow-hidden">
                        <?php if ( $sim_poster ) : ?>
                            <img src="<?php echo esc_url( $sim_poster ); ?>" alt="<?php echo esc_attr( $sim_title ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <?php else : ?>
                            <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900"></div>
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-zinc-900 via-transparent to-transparent"></div>
                        <?php if ( $sim_day && $sim_month ) : ?>
                        <div class="absolute top-3 left-3 flex flex-col items-center px-3 py-2 rounded-xl bg-violet-600 text-white">
                            <span class="text-xs font-medium uppercase"><?php echo esc_html( $sim_month ); ?></span>
                            <span class="text-xl font-bold leading-none"><?php echo esc_html( $sim_day ); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-white group-hover:text-violet-400 transition-colors mb-1 line-clamp-2"><?php echo esc_html( $sim_title ); ?></h3>
                        <p class="text-sm text-white/50 mb-3"><?php echo esc_html( $sim_venue ); ?></p>
                        <?php if ( ! is_null( $sim_price ) ) : ?>
                        <div class="flex items-center justify-between pt-3 border-t border-white/5">
                            <span class="text-sm text-white/40"><?php echo esc_html( $t['from_price'] ); ?></span>
                            <span class="text-lg font-bold text-white"><?php echo esc_html( $sim_price ); ?> RON</span>
                        </div>
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
