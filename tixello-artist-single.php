<?php
/**
 * Template: Tixello – Single Artist (API driven)
 * Este ales via template_include când avem query var tixello_artist_slug.
 */

get_header();

$slug = get_query_var( 'tixello_artist_slug' );

// Dacă nu avem slug, 404 simplu
if ( ! $slug ) {
    status_header( 404 );
    ?>
    <main id="primary" class="site-main">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-2xl font-bold text-slate-900">Artist not found</h1>
            <p class="mt-2 text-sm text-slate-600">No artist slug provided.</p>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

// Luăm artistul din API (prin helper)
if ( ! function_exists( 'tixello_get_artist_by_slug' ) ) {
    // Dacă helperul nu există, nu avem ce face corect
    status_header( 500 );
    ?>
    <main id="primary" class="site-main">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-2xl font-bold text-slate-900">Artist page error</h1>
            <p class="mt-2 text-sm text-slate-600">Artist helper function is missing.</p>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

$artist = tixello_get_artist_by_slug( $slug );

if ( ! $artist ) {
    status_header( 404 );
    ?>
    <main id="primary" class="site-main">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-2xl font-bold text-slate-900">Artist not found</h1>
            <p class="mt-2 text-sm text-slate-600">We couldn’t find any artist with this slug in Tixello Core.</p>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

/**
 * Normalizăm datele artistului pentru afișare
 */

// Nume
$name = isset( $artist['name'] ) ? $artist['name'] : 'Unknown artist';

// Bio – încercăm ro, apoi en, apoi bio
$bio_html = '';

if ( ! empty( $artist['bio_translations'] ) && is_array( $artist['bio_translations'] ) ) {
    if ( ! empty( $artist['bio_translations']['ro'] ) ) {
        $bio_html = $artist['bio_translations']['ro'];
    } elseif ( ! empty( $artist['bio_translations']['en'] ) ) {
        $bio_html = $artist['bio_translations']['en'];
    }
}

if ( empty( $bio_html ) && ! empty( $artist['bio'] ) ) {
    $bio_html = $artist['bio'];
}

// Location
$city    = isset( $artist['location']['city'] ) ? $artist['location']['city'] : '';
$country = isset( $artist['location']['country'] ) ? $artist['location']['country'] : '';
$location_label = '';
if ( $city && $country ) {
    $location_label = $city . ', ' . $country;
} elseif ( $city ) {
    $location_label = $city;
} elseif ( $country ) {
    $location_label = $country;
}

// Tipuri artist
$types = [];
if ( ! empty( $artist['artist_types'] ) && is_array( $artist['artist_types'] ) ) {
    foreach ( $artist['artist_types'] as $t ) {
        if ( ! empty( $t['name'] ) ) {
            $types[] = $t['name'];
        }
    }
}
$types_label = ! empty( $types ) ? implode( ' · ', $types ) : 'Artist';

// Genuri
$genres = [];
if ( ! empty( $artist['artist_genres'] ) && is_array( $artist['artist_genres'] ) ) {
    foreach ( $artist['artist_genres'] as $g ) {
        if ( ! empty( $g['name'] ) ) {
            $genres[] = $g['name'];
        }
    }
}
$genres_label = ! empty( $genres ) ? implode( ' · ', $genres ) : '';

// Imagini
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

$main_image   = '';
$portrait_img = '';
$logo_img     = '';

if ( ! empty( $artist['images'] ) && is_array( $artist['images'] ) ) {
    if ( ! empty( $artist['images']['main_image_url'] ) ) {
        $main_image = $full_storage_url( $artist['images']['main_image_url'] );
    }
    if ( ! empty( $artist['images']['portrait_url'] ) ) {
        $portrait_img = $full_storage_url( $artist['images']['portrait_url'] );
    }
    if ( ! empty( $artist['images']['logo_url'] ) ) {
        $logo_img = $full_storage_url( $artist['images']['logo_url'] );
    }
}

// Social & site
$website     = isset( $artist['contact']['website'] ) ? $artist['contact']['website'] : '';
$facebook    = isset( $artist['social']['facebook_url'] ) ? $artist['social']['facebook_url'] : '';
$instagram   = isset( $artist['social']['instagram_url'] ) ? $artist['social']['instagram_url'] : '';
$tiktok      = isset( $artist['social']['tiktok_url'] ) ? $artist['social']['tiktok_url'] : '';
$youtube     = isset( $artist['social']['youtube_url'] ) ? $artist['social']['youtube_url'] : '';
$spotify_url = isset( $artist['social']['spotify_url'] ) ? $artist['social']['spotify_url'] : '';

// Followers / stats
$yt_subs = null;
$sp_month = null;
$yt_views = null;
$spotify_popularity = null;

if ( ! empty( $artist['followers'] ) && is_array( $artist['followers'] ) ) {
    if ( isset( $artist['followers']['youtube'] ) ) {
        $yt_subs = $artist['followers']['youtube'];
    }
    if ( isset( $artist['followers']['spotify_monthly_listeners'] ) ) {
        $sp_month = $artist['followers']['spotify_monthly_listeners'];
    }
}

if ( ! empty( $artist['youtube_stats'] ) && is_array( $artist['youtube_stats'] ) ) {
    if ( isset( $artist['youtube_stats']['total_views'] ) ) {
        $yt_views = $artist['youtube_stats']['total_views'];
    }
}

if ( isset( $artist['spotify_popularity'] ) ) {
    $spotify_popularity = $artist['spotify_popularity'];
}

// Format numere (helper comun)
if ( ! function_exists( 'tixello_format_number_short' ) ) {
    function tixello_format_number_short( $num ) {
        if ( ! is_numeric( $num ) ) {
            return '';
        }
        $num = (float) $num;
        if ( $num >= 1000000000 ) return rtrim( rtrim( number_format( $num / 1000000000, 1 ), '0' ), '.' ) . 'B';
        if ( $num >= 1000000 )    return rtrim( rtrim( number_format( $num / 1000000, 1 ), '0' ), '.' ) . 'M';
        if ( $num >= 1000 )       return rtrim( rtrim( number_format( $num / 1000, 1 ), '0' ), '.' ) . 'K';
        return (string) intval( $num );
    }
}

$yt_subs_fmt  = ! is_null( $yt_subs ) ? tixello_format_number_short( $yt_subs ) : null;
$sp_month_fmt = ! is_null( $sp_month ) ? tixello_format_number_short( $sp_month ) : null;
$yt_views_fmt = ! is_null( $yt_views ) ? tixello_format_number_short( $yt_views ) : null;

// YouTube videos
$youtube_videos = [];
if ( ! empty( $artist['youtube_videos'] ) && is_array( $artist['youtube_videos'] ) ) {
    foreach ( $artist['youtube_videos'] as $v ) {
        if ( ! empty( $v['url'] ) ) {
            $youtube_videos[] = $v['url'];
        }
    }
}

/**
 * Helper mic pentru extragere ID YouTube
 */
if ( ! function_exists( 'tixello_extract_youtube_id' ) ) {
    function tixello_extract_youtube_id( $url ) {
        if ( empty( $url ) ) {
            return '';
        }

        $parts = wp_parse_url( $url );
        if ( empty( $parts['host'] ) ) {
            return '';
        }

        // youtu.be/VIDEO
        if ( false !== strpos( $parts['host'], 'youtu.be' ) ) {
            return isset( $parts['path'] ) ? ltrim( $parts['path'], '/' ) : '';
        }

        // youtube.com/watch?v=VIDEO
        if ( false !== strpos( $parts['host'], 'youtube.com' ) ) {
            if ( ! empty( $parts['query'] ) ) {
                parse_str( $parts['query'], $q );
                if ( ! empty( $q['v'] ) ) {
                    return $q['v'];
                }
            }
            // youtube.com/embed/VIDEO
            if ( ! empty( $parts['path'] ) && strpos( $parts['path'], '/embed/' ) === 0 ) {
                return substr( $parts['path'], strlen('/embed/') );
            }
        }

        return '';
    }
}

/**
 * Helper pentru dată/ora unui event (postponed vs start_date)
 */
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
        // folosim start_time / postponed_start_time doar pentru afisare
        $time_raw = null;

        if ( ! empty( $ev['is_postponed'] ) && ! empty( $ev['postponed_start_time'] ) ) {
            $time_raw = $ev['postponed_start_time'];
        } elseif ( ! empty( $ev['start_time'] ) ) {
            $time_raw = $ev['start_time'];
        }

        if ( ! $time_raw ) {
            return '';
        }

        // HH:MM:SS
        $parts = explode( ':', $time_raw );
        $hh = isset( $parts[0] ) ? intval( $parts[0] ) : 0;
        $mm = isset( $parts[1] ) ? intval( $parts[1] ) : 0;

        $ts = mktime( $hh, $mm, 0 );
        return date_i18n( 'H:i', $ts );
    }
}

/**
 * Evenimente pentru acest artist (din tixello_fetch_events_core)
 */
$artist_events = [];
if ( function_exists( 'tixello_fetch_events_core' ) ) {
    $all_events = tixello_fetch_events_core();
    if ( is_array( $all_events ) ) {
        $artist_id   = isset( $artist['id'] ) ? $artist['id'] : null;
        $artist_slug = isset( $artist['slug'] ) ? $artist['slug'] : null;
        $now         = time();

        foreach ( $all_events as $ev ) {
            if ( ! is_array( $ev ) || empty( $ev['artists'] ) || ! is_array( $ev['artists'] ) ) {
                continue;
            }

            $matches_artist = false;
            foreach ( $ev['artists'] as $ev_artist ) {
                if ( ! is_array( $ev_artist ) ) {
                    continue;
                }

                if ( $artist_id && isset( $ev_artist['id'] ) && (int) $ev_artist['id'] === (int) $artist_id ) {
                    $matches_artist = true;
                    break;
                }

                if ( $artist_slug && isset( $ev_artist['slug'] ) && $ev_artist['slug'] === $artist_slug ) {
                    $matches_artist = true;
                    break;
                }
            }

            if ( ! $matches_artist ) {
                continue;
            }

            $ts = tixello_get_event_timestamp( $ev );
            if ( $ts && $ts < $now ) {
                // doar viitoare; dacă vrei și trecute, scoate condiția asta
                continue;
            }

            $artist_events[] = $ev;
        }

        // sortăm by date asc
        usort(
            $artist_events,
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
    <!-- HERO ARTIST -->
    <section class="border-b border-slate-200 bg-slate-950/90 text-white">
        <div class="container mx-auto px-4 py-10 md:py-14">
            <div class="grid gap-8 md:grid-cols-[minmax(0,2fr)_minmax(0,1.3fr)] md:items-center">
                <!-- Info principală -->
                <div class="space-y-4">
                    <div class="inline-flex items-center rounded-full bg-slate-800/70 px-3 py-1 text-xs font-medium uppercase tracking-wide text-slate-200">
                        Tixello Artist
                    </div>

                    <h1 class="text-3xl font-bold tracking-tight md:text-4xl">
                        <?php echo esc_html( $name ); ?>
                    </h1>

                    <p class="text-sm font-medium text-slate-200/90">
                        <?php echo esc_html( $types_label ); ?>
                        <?php if ( $location_label ) : ?>
                            · <span class="text-slate-300"><?php echo esc_html( $location_label ); ?></span>
                        <?php endif; ?>
                    </p>

                    <?php if ( $genres_label ) : ?>
                        <p class="text-sm text-slate-300">
                            <span class="font-semibold text-slate-100">Genres:</span>
                            <?php echo esc_html( $genres_label ); ?>
                        </p>
                    <?php endif; ?>

                    <!-- Bio scurtă -->
                    <?php if ( $bio_html ) : ?>
                        <div class="prose prose-invert prose-sm max-w-none">
                            <?php echo wp_kses_post( $bio_html ); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Social / website -->
                    <div class="mt-4 flex flex-wrap gap-2 text-xs">
                        <?php if ( $website ) : ?>
                            <a
                                href="<?php echo esc_url( $website ); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 font-medium text-slate-50 hover:bg-white/20"
                            >
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

                        <?php if ( $youtube ) : ?>
                            <a href="<?php echo esc_url( $youtube ); ?>" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 font-medium text-slate-50 hover:bg-white/20">
                                YouTube
                            </a>
                        <?php endif; ?>

                        <?php if ( $spotify_url ) : ?>
                            <a href="<?php echo esc_url( $spotify_url ); ?>" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 font-medium text-slate-50 hover:bg-white/20">
                                Spotify
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Imagine artist / logo -->
                <div class="relative flex justify-center md:justify-end">
                    <div class="relative h-52 w-52 overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-900 shadow-2xl shadow-slate-900/50 md:h-64 md:w-64">
                        <?php if ( $main_image || $portrait_img ) : ?>
                            <img
                                src="<?php echo esc_url( $main_image ? $main_image : $portrait_img ); ?>"
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

                        <?php if ( $logo_img ) : ?>
                            <div class="absolute bottom-3 left-3 rounded-xl bg-slate-950/70 p-2">
                                <img
                                    src="<?php echo esc_url( $logo_img ); ?>"
                                    alt="<?php echo esc_attr( $name ); ?> logo"
                                    class="h-8 w-auto object-contain"
                                />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS + DETALII -->
    <section class="border-b border-slate-100 bg-slate-50/60">
        <div class="container mx-auto px-4 py-8">
            <div class="grid gap-6 md:grid-cols-[minmax(0,2fr)_minmax(0,1.2fr)]">
                <!-- Stats -->
                <div>
                    <h2 class="mb-3 text-sm font-semibold uppercase tracking-wide text-slate-600">
                        Reach & Stats
                    </h2>
                    <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                        <?php if ( $yt_subs_fmt ) : ?>
                            <div class="rounded-xl border border-red-100 bg-white p-3">
                                <p class="text-[11px] font-semibold text-red-700">YouTube subscribers</p>
                                <p class="mt-1 text-xl font-bold text-slate-900"><?php echo esc_html( $yt_subs_fmt ); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ( $yt_views_fmt ) : ?>
                            <div class="rounded-xl border border-red-100 bg-white p-3">
                                <p class="text-[11px] font-semibold text-red-700">YouTube total views</p>
                                <p class="mt-1 text-xl font-bold text-slate-900"><?php echo esc_html( $yt_views_fmt ); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ( $sp_month_fmt ) : ?>
                            <div class="rounded-xl border border-emerald-100 bg-white p-3">
                                <p class="text-[11px] font-semibold text-emerald-700">Spotify monthly listeners</p>
                                <p class="mt-1 text-xl font-bold text-slate-900"><?php echo esc_html( $sp_month_fmt ); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ( ! is_null( $spotify_popularity ) ) : ?>
                            <div class="rounded-xl border border-emerald-100 bg-white p-3">
                                <p class="text-[11px] font-semibold text-emerald-700">Spotify popularity</p>
                                <p class="mt-1 text-xl font-bold text-slate-900">
                                    <?php echo intval( $spotify_popularity ); ?>/100
                                </p>
                            </div>
                        <?php endif; ?>

                        <div class="rounded-xl border border-slate-100 bg-white p-3">
                            <p class="text-[11px] font-semibold text-slate-600">Created in Tixello</p>
                            <p class="mt-1 text-sm font-medium text-slate-900">
                                <?php
                                if ( ! empty( $artist['created_at'] ) ) {
                                    $dt = date_i18n( 'j F Y', strtotime( $artist['created_at'] ) );
                                    echo esc_html( $dt );
                                } else {
                                    echo 'N/A';
                                }
                                ?>
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-100 bg-white p-3">
                            <p class="text-[11px] font-semibold text-slate-600">Last updated</p>
                            <p class="mt-1 text-sm font-medium text-slate-900">
                                <?php
                                if ( ! empty( $artist['updated_at'] ) ) {
                                    $dt = date_i18n( 'j F Y', strtotime( $artist['updated_at'] ) );
                                    echo esc_html( $dt );
                                } else {
                                    echo 'N/A';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div>
                    <h2 class="mb-3 text-sm font-semibold uppercase tracking-wide text-slate-600">
                        Contact & Representation
                    </h2>
                    <div class="space-y-3 rounded-2xl border border-slate-100 bg-white p-4 text-sm text-slate-700">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Manager</p>
                            <?php
                            $mgr = isset( $artist['manager'] ) && is_array( $artist['manager'] ) ? $artist['manager'] : [];
                            $mgr_name = trim(
                                ( isset( $mgr['first_name'] ) ? $mgr['first_name'] . ' ' : '' ) .
                                ( isset( $mgr['last_name'] ) ? $mgr['last_name'] : '' )
                            );
                            ?>
                            <p class="mt-1">
                                <?php echo $mgr_name ? esc_html( $mgr_name ) : 'Not specified'; ?>
                            </p>
                            <?php if ( ! empty( $mgr['email'] ) ) : ?>
                                <p class="text-xs text-slate-500">
                                    Email: <a href="mailto:<?php echo esc_attr( $mgr['email'] ); ?>" class="text-slate-800 underline">
                                        <?php echo esc_html( $mgr['email'] ); ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                            <?php if ( ! empty( $mgr['phone'] ) ) : ?>
                                <p class="text-xs text-slate-500">
                                    Phone: <span class="text-slate-800"><?php echo esc_html( $mgr['phone'] ); ?></span>
                                </p>
                            <?php endif; ?>
                        </div>

                        <div class="border-t border-slate-100 pt-3">
                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Agent</p>
                            <?php
                            $ag = isset( $artist['agent'] ) && is_array( $artist['agent'] ) ? $artist['agent'] : [];
                            $ag_name = trim(
                                ( isset( $ag['first_name'] ) ? $ag['first_name'] . ' ' : '' ) .
                                ( isset( $ag['last_name'] ) ? $ag['last_name'] : '' )
                            );
                            ?>
                            <p class="mt-1">
                                <?php echo $ag_name ? esc_html( $ag_name ) : 'Not specified'; ?>
                            </p>
                            <?php if ( ! empty( $ag['email'] ) ) : ?>
                                <p class="text-xs text-slate-500">
                                    Email: <a href="mailto:<?php echo esc_attr( $ag['email'] ); ?>" class="text-slate-800 underline">
                                        <?php echo esc_html( $ag['email'] ); ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                            <?php if ( ! empty( $ag['phone'] ) ) : ?>
                                <p class="text-xs text-slate-500">
                                    Phone: <span class="text-slate-800"><?php echo esc_html( $ag['phone'] ); ?></span>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS CU ACEST ARTIST -->
    <?php if ( ! empty( $artist_events ) ) : ?>
        <section class="bg-white border-b border-slate-100">
            <div class="container mx-auto px-4 py-10 space-y-4">
                <div class="flex items-center justify-between gap-2">
                    <h2 class="text-lg font-semibold text-slate-900">
                        Upcoming events with <?php echo esc_html( $name ); ?>
                    </h2>
                    <a
                        href="<?php echo esc_url( home_url( '/search/?artist=' . urlencode( $name ) ) ); ?>"
                        class="text-xs font-medium text-slate-600 underline underline-offset-4 hover:text-slate-900"
                    >
                        View all events
                    </a>
                </div>

                <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-4">
                    <?php
                    $max_events = 8;
                    $count = 0;
                    foreach ( $artist_events as $ev ) :
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

                        $venue_name = isset( $ev['venue']['name'] ) ? $ev['venue']['name'] : '';
                        $venue_city = isset( $ev['venue']['city'] ) ? $ev['venue']['city'] : '';
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

                                    <?php if ( $venue_name ) : ?>
                                        <div class="font-medium text-slate-800">
                                            <?php echo esc_html( $venue_name ); ?>
                                            <?php if ( $venue_city ) : ?>
                                                <span class="text-slate-500"> · <?php echo esc_html( $venue_city ); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            <?php if ( $card_url ) : ?>
                                </a>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- YOUTUBE VIDEOS (opțional, pentru SEO & engagement) -->
    <?php if ( ! empty( $youtube_videos ) ) : ?>
        <section class="bg-white">
            <div class="container mx-auto px-4 py-10 space-y-4">
                <div class="flex items-center justify-between gap-2">
                    <h2 class="text-lg font-semibold text-slate-900">
                        Featured videos
                    </h2>
                    <?php if ( $youtube ) : ?>
                        <a
                            href="<?php echo esc_url( $youtube ); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-xs font-medium text-slate-600 underline underline-offset-4 hover:text-slate-900"
                        >
                            View full YouTube channel
                        </a>
                    <?php endif; ?>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    <?php
                    $max_videos = 3;
                    $i = 0;
                    foreach ( $youtube_videos as $url ) :
                        if ( $i >= $max_videos ) {
                            break;
                        }
                        $video_id = tixello_extract_youtube_id( $url );
                        if ( ! $video_id ) {
                            continue;
                        }
                        $i++;
                        ?>
                        <div class="overflow-hidden rounded-xl border border-slate-200 bg-slate-50">
                            <div class="aspect-video w-full bg-black">
                                <iframe
                                    src="https://www.youtube.com/embed/<?php echo esc_attr( $video_id ); ?>"
                                    title="<?php echo esc_attr( $name . ' video ' . $i ); ?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen
                                    loading="lazy"
                                    class="h-full w-full"
                                ></iframe>
                            </div>
                            <div class="px-3 py-2 text-xs text-slate-600">
                                <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" class="line-clamp-2 hover:text-slate-900">
                                    <?php echo esc_html( $name ); ?> – YouTube video
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php
get_footer();
?>