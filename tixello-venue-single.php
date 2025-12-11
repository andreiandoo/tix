<?php
/**
 * Template: Tixello – Single Venue (API driven)
 */

get_header();

$slug = get_query_var( 'tixello_venue_slug' );

if ( ! $slug ) {
    status_header( 404 );
    ?>
    <main id="primary" class="site-main">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-2xl font-bold text-slate-900">Venue not found</h1>
            <p class="mt-2 text-sm text-slate-600">No venue slug provided.</p>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

if ( ! function_exists( 'tixello_get_venue_by_slug' ) ) {
    status_header( 500 );
    ?>
    <main id="primary" class="site-main">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-2xl font-bold text-slate-900">Venue page error</h1>
            <p class="mt-2 text-sm text-slate-600">Venue helper function is missing.</p>
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
    <main id="primary" class="site-main">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-2xl font-bold text-slate-900">Venue not found</h1>
            <p class="mt-2 text-sm text-slate-600">We couldn’t find this venue in Tixello Core.</p>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

// Normalizare venue
$name = isset( $venue['name'] ) ? $venue['name'] : 'Unknown venue';

// Description
$desc_html = '';
if ( ! empty( $venue['description_translations']['ro'] ) ) {
    $desc_html = $venue['description_translations']['ro'];
} elseif ( ! empty( $venue['description_translations']['en'] ) ) {
    $desc_html = $venue['description_translations']['en'];
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

$established_at = isset( $venue['established_at'] ) ? $venue['established_at'] : null;

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

?>
<main id="primary" class="site-main">
    <!-- HERO VENUE -->
    <section class="border-b border-slate-200 bg-slate-950/95 text-white">
        <div class="container mx-auto px-4 py-10 md:py-14">
            <div class="grid gap-8 md:grid-cols-[minmax(0,2fr)_minmax(0,1.4fr)] md:items-center">
                <div class="space-y-4">
                    <div class="inline-flex items-center rounded-full bg-slate-800/70 px-3 py-1 text-xs font-medium uppercase tracking-wide text-slate-200">
                        Tixello Venue
                    </div>

                    <h1 class="text-3xl font-bold tracking-tight md:text-4xl">
                        <?php echo esc_html( $name ); ?>
                    </h1>

                    <?php if ( $location_label ) : ?>
                        <p class="text-sm font-medium text-slate-200/90">
                            <?php echo esc_html( $location_label ); ?>
                        </p>
                    <?php endif; ?>

                    <?php if ( $address ) : ?>
                        <p class="text-xs text-slate-300">
                            <?php echo esc_html( $address ); ?>
                        </p>
                    <?php endif; ?>

                    <?php if ( $desc_html ) : ?>
                        <div class="prose prose-invert prose-sm max-w-none">
                            <?php echo wp_kses_post( $desc_html ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="mt-4 flex flex-wrap gap-2 text-xs">
                        <?php if ( $website ) : ?>
                            <a href="<?php echo esc_url( $website ); ?>" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 font-medium text-slate-50 hover:bg-white/20">
                                Website
                            </a>
                        <?php endif; ?>

                        <?php if ( $facebook ) : ?>
                            <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 font-medium text-slate-50 hover:bg-white/20">
                                Facebook
                            </a>
                        <?php endif; ?>

                        <?php if ( $instagram ) : ?>
                            <a href="<?php echo esc_url( $instagram ); ?>" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 font-medium text-slate-50 hover:bg-white/20">
                                Instagram
                            </a>
                        <?php endif; ?>

                        <?php if ( $tiktok ) : ?>
                            <a href="<?php echo esc_url( $tiktok ); ?>" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 font-medium text-slate-50 hover:bg-white/20">
                                TikTok
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="relative flex justify-center md:justify-end">
                    <div class="relative h-56 w-full max-w-md overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-900 shadow-2xl shadow-slate-900/60">
                        <?php if ( $image_url ) : ?>
                            <img
                                src="<?php echo esc_url( $image_url ); ?>"
                                alt="<?php echo esc_attr( $name ); ?>"
                                class="h-full w-full object-cover"
                                loading="lazy"
                            />
                        <?php else : ?>
                            <div class="flex h-full w-full flex-col items-center justify-center gap-2 text-center">
                                <div class="text-2xl font-bold text-slate-200">
                                    <?php echo esc_html( strtoupper( mb_substr( $name, 0, 1 ) ) ); ?>
                                </div>
                                <div class="text-xs text-slate-400">
                                    No image available
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ( $gmaps_url || ( $lat && $lng ) ) : ?>
                            <a
                                href="<?php echo esc_url( $gmaps_url ? $gmaps_url : 'https://www.google.com/maps?q=' . urlencode( $lat . ',' . $lng ) ); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="absolute bottom-3 left-3 rounded-full bg-slate-950/80 px-3 py-1 text-[11px] font-medium text-slate-50 hover:bg-slate-900"
                            >
                                Open in Google Maps
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CAPACITY / CONTACT -->
    <section class="border-b border-slate-100 bg-slate-50/80">
        <div class="container mx-auto px-4 py-8">
            <div class="grid gap-6 md:grid-cols-[minmax(0,2fr)_minmax(0,1.2fr)]">
                <div class="space-y-3">
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-600">
                        Capacity & Details
                    </h2>
                    <div class="grid gap-3 sm:grid-cols-3">
                        <div class="rounded-xl border border-slate-100 bg-white p-3 text-sm">
                            <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-500">Total capacity</p>
                            <p class="mt-1 text-lg font-bold text-slate-900">
                                <?php echo $cap_total ? esc_html( number_format_i18n( $cap_total ) ) : 'N/A'; ?>
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-100 bg-white p-3 text-sm">
                            <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-500">Seated</p>
                            <p class="mt-1 text-lg font-bold text-slate-900">
                                <?php echo $cap_seated !== null ? esc_html( number_format_i18n( $cap_seated ) ) : 'N/A'; ?>
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-100 bg-white p-3 text-sm">
                            <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-500">Standing</p>
                            <p class="mt-1 text-lg font-bold text-slate-900">
                                <?php echo $cap_standing !== null ? esc_html( number_format_i18n( $cap_standing ) ) : 'N/A'; ?>
                            </p>
                        </div>
                    </div>

                    <?php if ( $established_at ) : ?>
                        <p class="text-xs text-slate-600">
                            Established:
                            <span class="font-medium text-slate-900">
                                <?php echo esc_html( date_i18n( 'j F Y', strtotime( $established_at ) ) ); ?>
                            </span>
                        </p>
                    <?php endif; ?>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold uppercase tracking-wide text-slate-600">
                        Contact
                    </h2>
                    <div class="space-y-3 rounded-2xl border border-slate-100 bg-white p-4 text-sm text-slate-700">
                        <?php if ( $phone ) : ?>
                            <p>
                                <span class="text-xs font-semibold uppercase tracking-wide text-slate-500">Phone</span><br>
                                <a href="tel:<?php echo esc_attr( $phone ); ?>" class="text-slate-900">
                                    <?php echo esc_html( $phone ); ?>
                                </a>
                            </p>
                        <?php endif; ?>

                        <?php if ( $email ) : ?>
                            <p>
                                <span class="text-xs font-semibold uppercase tracking-wide text-slate-500">Email</span><br>
                                <a href="mailto:<?php echo esc_attr( $email ); ?>" class="text-slate-900 underline">
                                    <?php echo esc_html( $email ); ?>
                                </a>
                            </p>
                        <?php endif; ?>

                        <?php if ( $website ) : ?>
                            <p>
                                <span class="text-xs font-semibold uppercase tracking-wide text-slate-500">Website</span><br>
                                <a href="<?php echo esc_url( $website ); ?>" target="_blank" rel="noopener noreferrer" class="text-slate-900 underline">
                                    <?php echo esc_html( $website ); ?>
                                </a>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS ÎN ACEST VENUE -->
    <section class="bg-white">
        <div class="container mx-auto px-4 py-10 space-y-4">
            <div class="flex items-center justify-between gap-2">
                <h2 class="text-lg font-semibold text-slate-900">
                    Upcoming events at <?php echo esc_html( $name ); ?>
                </h2>

                <a
                    href="<?php echo esc_url( home_url( '/search/?venue=' . urlencode( $name ) ) ); ?>"
                    class="text-xs font-medium text-slate-600 underline underline-offset-4 hover:text-slate-900"
                >
                    View all events
                </a>
            </div>

            <?php if ( empty( $venue_events ) ) : ?>
                <p class="text-sm text-slate-500">
                    There are no upcoming events at this venue right now.
                </p>
            <?php else : ?>
                <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-4">
                    <?php
                    $max_events = 8;
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
                        $price_from = isset( $ev['price_from'] ) ? $ev['price_from'] : null;
                        ?>
                        <article class="group flex flex-col rounded-xl border border-slate-200 bg-slate-50/80 p-3 text-xs text-slate-700 shadow-sm transition hover:border-slate-400 hover:bg-white">
                            <?php if ( $card_url ) : ?>
                                <a href="<?php echo esc_url( $card_url ); ?>" class="flex h-full flex-col" target="_blank" rel="noopener noreferrer">
                            <?php endif; ?>

                                <div class="mb-2 aspect-[3/4] w-full overflow-hidden rounded-lg bg-slate-200">
                                    <?php if ( $poster_url ) : ?>
                                        <img
                                            src="<?php echo esc_url( $poster_url ); ?>"
                                            alt="<?php echo esc_attr( $ev['title'] ?? '' ); ?>"
                                            class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                                            loading="lazy"
                                        />
                                    <?php endif; ?>
                                </div>

                                <div class="mb-1 text-[11px] text-slate-500">
                                    <?php if ( $date_label ) : ?>
                                        <span><?php echo esc_html( $date_label ); ?></span>
                                    <?php endif; ?>
                                    <?php if ( $time_label ) : ?>
                                        <span class="ml-1">· <?php echo esc_html( $time_label ); ?></span>
                                    <?php endif; ?>
                                </div>

                                <h3 class="mb-1 line-clamp-2 text-sm font-semibold text-slate-900">
                                    <?php echo esc_html( $ev['title'] ?? 'Untitled event' ); ?>
                                </h3>

                                <div class="mt-auto space-y-1 text-[11px]">
                                    <?php if ( ! is_null( $price_from ) ) : ?>
                                        <div class="font-semibold text-slate-800">
                                            From <?php echo esc_html( $price_from ); ?> RON
                                        </div>
                                    <?php endif; ?>
                                </div>

                            <?php if ( $card_url ) : ?>
                                </a>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>