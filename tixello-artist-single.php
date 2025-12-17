<?php
/**
 * Template: Tixello – Single Artist (Dark Theme)
 * URL: /artists/{slug}/
 */

get_header();

// Detectare limba curentă (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Array cu traduceri
$t = [
    // 404 / Not Found
    'artist_not_found' => $current_lang === 'ro' ? 'Artist negasit' : 'Artist not found',
    'no_slug_provided' => $current_lang === 'ro' ? 'Nu a fost furnizat un slug pentru artist.' : 'No artist slug was provided.',
    'could_not_find_artist' => $current_lang === 'ro' ? 'Nu am putut gasi acest artist.' : 'Could not find this artist.',
    'back_to_artists' => $current_lang === 'ro' ? 'Inapoi la artisti' : 'Back to artists',

    // Breadcrumb
    'home' => $current_lang === 'ro' ? 'Acasa' : 'Home',
    'artists' => $current_lang === 'ro' ? 'Artisti' : 'Artists',

    // Section Headers
    'about' => $current_lang === 'ro' ? 'Despre' : 'About',
    'videos' => $current_lang === 'ro' ? 'Videoclipuri' : 'Videos',
    'view_all_youtube' => $current_lang === 'ro' ? 'Vezi toate pe YouTube' : 'View all on YouTube',
    'upcoming_events' => $current_lang === 'ro' ? 'Evenimente viitoare' : 'Upcoming Events',
    'events_scheduled' => $current_lang === 'ro' ? 'evenimente programate' : 'events scheduled',
    'from' => $current_lang === 'ro' ? 'de la' : 'from',
    'tickets' => $current_lang === 'ro' ? 'Bilete' : 'Tickets',

    // Booking Sidebar
    'hire_artist' => $current_lang === 'ro' ? 'Angajeaza acest artist' : 'Hire this artist',
    'hire_artist_desc' => $current_lang === 'ro'
        ? 'Interesat sa angajezi %s pentru evenimentul tau? Contacteaza echipa de booking.'
        : 'Interested in hiring %s for your event? Contact the booking team.',
    'request_booking' => $current_lang === 'ro' ? 'Solicita Booking' : 'Request Booking',
    'avg_response_time' => $current_lang === 'ro' ? 'Timp mediu de raspuns: 24-48 ore' : 'Average response time: 24-48 hours',

    // Contact Info
    'contact_info' => $current_lang === 'ro' ? 'Informatii contact' : 'Contact Information',
    'management' => 'Management',
    'booking_agent' => 'Booking Agent',

    // Stats
    'statistics' => $current_lang === 'ro' ? 'Statistici' : 'Statistics',

    // Share
    'share_artist' => $current_lang === 'ro' ? 'Distribuie acest artist' : 'Share this artist',

    // Similar Artists
    'similar_artists' => $current_lang === 'ro' ? 'Artisti similari' : 'Similar Artists',

    // Social Stats Labels
    'monthly_listeners' => 'Monthly Listeners',
    'subscribers' => 'Subscribers',
    'followers' => 'Followers',
    'total_reach' => 'Total Reach',
];

$slug = get_query_var( 'tixello_artist_slug' );

if ( ! $slug ) {
    status_header( 404 );
    ?>
    <main id="primary" class="site-main bg-zinc-950 text-zinc-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-2xl font-bold text-white"><?php echo esc_html( $t['artist_not_found'] ); ?></h1>
            <p class="mt-2 text-white/60"><?php echo esc_html( $t['no_slug_provided'] ); ?></p>
            <a href="<?php echo esc_url( home_url( '/artists/' ) ); ?>" class="inline-flex items-center gap-2 mt-4 px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                <?php echo esc_html( $t['back_to_artists'] ); ?>
            </a>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

$artist = function_exists( 'tixello_get_artist_by_slug_cached' )
    ? tixello_get_artist_by_slug_cached( $slug )
    : ( function_exists( 'tixello_get_artist_by_slug' ) ? tixello_get_artist_by_slug( $slug ) : null );

if ( ! $artist || ! is_array( $artist ) ) {
    status_header( 404 );
    ?>
    <main id="primary" class="site-main bg-zinc-950 text-zinc-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-2xl font-bold text-white"><?php echo esc_html( $t['artist_not_found'] ); ?></h1>
            <p class="mt-2 text-white/60"><?php echo esc_html( $t['could_not_find_artist'] ); ?></p>
            <a href="<?php echo esc_url( home_url( '/artists/' ) ); ?>" class="inline-flex items-center gap-2 mt-4 px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                <?php echo esc_html( $t['back_to_artists'] ); ?>
            </a>
        </div>
    </main>
    <?php
    get_footer();
    return;
}

// =====================
// Data Extraction
// =====================
$STORAGE_BASE = 'https://core.tixello.com/storage/';

$full_url = function( $path ) use ( $STORAGE_BASE ) {
    if ( empty( $path ) ) return '';
    if ( preg_match( '#^https?://#i', $path ) ) return esc_url( $path );
    return esc_url( $STORAGE_BASE . ltrim( $path, '/' ) );
};

$name = $artist['name'] ?? 'Unknown Artist';
$initial = mb_strtoupper( mb_substr( $name, 0, 1 ) );

// Bio (use current language)
$bio = '';
if ( $current_lang === 'ro' && ! empty( $artist['bio_translations']['ro'] ) ) {
    $bio = $artist['bio_translations']['ro'];
} elseif ( ! empty( $artist['bio_translations']['en'] ) ) {
    $bio = $artist['bio_translations']['en'];
} elseif ( ! empty( $artist['bio_translations']['ro'] ) ) {
    $bio = $artist['bio_translations']['ro'];
} elseif ( ! empty( $artist['bio'] ) ) {
    $bio = $artist['bio'];
}

// Images
$main_img = $full_url( $artist['images']['main_image_url'] ?? $artist['media']['image_url'] ?? '' );
$portrait = $full_url( $artist['images']['portrait_url'] ?? '' );
$logo = $full_url( $artist['images']['logo_url'] ?? '' );
$hero_img = $full_url( $artist['images']['hero_image_url'] ?? '' );
$primary_img = $main_img ?: $portrait ?: '';
$bg_img = $hero_img ?: $main_img ?: $portrait ?: '';

// Location
$city = $artist['location']['city'] ?? $artist['city'] ?? '';
$country = $artist['location']['country'] ?? $artist['country'] ?? '';
$location = $city && $country ? "$city, $country" : ( $city ?: $country );

// Types & Genres
$types = [];
if ( ! empty( $artist['artist_types'] ) ) {
    foreach ( $artist['artist_types'] as $t ) {
        if ( ! empty( $t['name'] ) ) $types[] = $t['name'];
    }
}
$types_label = $types ? implode( ' · ', $types ) : 'Artist';

$genres = [];
if ( ! empty( $artist['artist_genres'] ) ) {
    foreach ( $artist['artist_genres'] as $g ) {
        if ( ! empty( $g['name'] ) ) $genres[] = $g['name'];
    }
} elseif ( ! empty( $artist['genres'] ) && is_array( $artist['genres'] ) ) {
    $genres = $artist['genres'];
}

// Social Links
$social = [
    'website' => $artist['contact']['website'] ?? '',
    'facebook' => $artist['social']['facebook_url'] ?? '',
    'instagram' => $artist['social']['instagram_url'] ?? '',
    'tiktok' => $artist['social']['tiktok_url'] ?? '',
    'youtube' => $artist['social']['youtube_url'] ?? '',
    'spotify' => $artist['social']['spotify_url'] ?? '',
    'twitter' => $artist['social']['twitter_url'] ?? '',
];

// Stats
$stats = [
    'spotify_monthly' => $artist['followers']['spotify_monthly_listeners'] ?? null,
    'youtube' => $artist['followers']['youtube'] ?? null,
    'instagram' => $artist['followers']['instagram'] ?? null,
    'facebook' => $artist['followers']['facebook'] ?? null,
    'tiktok' => $artist['followers']['tiktok'] ?? null,
    'youtube_views' => $artist['youtube_stats']['total_views'] ?? null,
    'spotify_popularity' => $artist['spotify_popularity'] ?? null,
];

// Manager & Agent
$manager = $artist['manager'] ?? [];
$agent = $artist['agent'] ?? [];
$manager_name = trim( ( $manager['first_name'] ?? '' ) . ' ' . ( $manager['last_name'] ?? '' ) );
$agent_name = trim( ( $agent['first_name'] ?? '' ) . ' ' . ( $agent['last_name'] ?? '' ) );

// YouTube Videos
$yt_videos = [];
if ( ! empty( $artist['youtube_videos'] ) ) {
    foreach ( $artist['youtube_videos'] as $v ) {
        if ( ! empty( $v['url'] ) ) $yt_videos[] = $v['url'];
    }
}

// Upcoming Events
$upcoming = $artist['upcoming_events'] ?? [];

// Photo Gallery
$gallery = $artist['gallery'] ?? [];

// Format number
$fmt = function( $n ) {
    if ( ! $n ) return '';
    if ( $n >= 1e9 ) return number_format( $n / 1e9, 1 ) . 'B';
    if ( $n >= 1e6 ) return number_format( $n / 1e6, 1 ) . 'M';
    if ( $n >= 1e3 ) return number_format( $n / 1e3, 1 ) . 'K';
    return number_format( $n );
};

// Extract YT video ID
function tixello_get_yt_id( $url ) {
    if ( empty( $url ) ) return '';
    $parts = wp_parse_url( $url );
    if ( ! empty( $parts['host'] ) && strpos( $parts['host'], 'youtu.be' ) !== false ) {
        return ltrim( $parts['path'] ?? '', '/' );
    }
    if ( ! empty( $parts['query'] ) ) {
        parse_str( $parts['query'], $q );
        if ( ! empty( $q['v'] ) ) return $q['v'];
    }
    if ( ! empty( $parts['path'] ) && strpos( $parts['path'], '/embed/' ) === 0 ) {
        return substr( $parts['path'], 7 );
    }
    return '';
}

// Similar artists
$similar_artists = [];
if ( function_exists( 'tixello_fetch_artists_core' ) ) {
    $all_artists = tixello_fetch_artists_core();
    if ( is_array( $all_artists ) ) {
        $current_id = $artist['id'] ?? null;
        foreach ( $all_artists as $a ) {
            if ( ! is_array( $a ) ) continue;
            if ( $current_id && isset( $a['id'] ) && $a['id'] == $current_id ) continue;
            if ( empty( $a['name'] ) ) continue;
            $similar_artists[] = $a;
            if ( count( $similar_artists ) >= 6 ) break;
        }
    }
}

// Total reach
$total_reach = 0;
foreach ( $stats as $key => $val ) {
    if ( $val && in_array( $key, [ 'spotify_monthly', 'youtube', 'instagram', 'facebook', 'tiktok' ] ) ) {
        $total_reach += intval( $val );
    }
}

// JSON-LD Schema
$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'MusicGroup',
    'name' => $name,
    'url' => home_url( '/artists/' . $slug . '/' ),
];
if ( $primary_img ) $schema['image'] = $primary_img;
if ( $bio ) $schema['description'] = wp_strip_all_tags( $bio );
if ( $genres ) $schema['genre'] = $genres;
$same_as = array_filter( array_values( $social ) );
if ( $same_as ) $schema['sameAs'] = $same_as;
?>
<script type="application/ld+json"><?php echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); ?></script>

<main id="primary" class="site-main bg-zinc-950 text-zinc-200 antialiased">

    <!-- ==================== HERO SECTION ==================== -->
    <section class="relative">
        <!-- Cover Image -->
        <div class="h-[300px] sm:h-[400px] relative overflow-hidden">
            <?php if ( $bg_img ) : ?>
                <img src="<?php echo $bg_img; ?>" alt="<?php echo esc_attr( $name ); ?>" class="w-full h-full object-cover">
            <?php else : ?>
                <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900"></div>
            <?php endif; ?>
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/50 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-zinc-950/80 via-transparent to-zinc-950/80"></div>
        </div>

        <!-- Profile Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-32 relative z-10">
            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 items-start lg:items-end">

                <!-- Profile Image -->
                <div class="relative">
                    <div class="w-40 h-40 sm:w-52 sm:h-52 rounded-2xl overflow-hidden border-4 border-zinc-950 shadow-2xl">
                        <?php if ( $primary_img ) : ?>
                            <img src="<?php echo $primary_img; ?>" alt="<?php echo esc_attr( $name ); ?>" class="w-full h-full object-cover">
                        <?php else : ?>
                            <div class="w-full h-full bg-gradient-to-br from-violet-600 to-pink-600 flex items-center justify-center">
                                <span class="text-6xl font-bold text-white"><?php echo esc_html( $initial ); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- Verified Badge -->
                    <?php if ( ! empty( $artist['is_verified'] ) ) : ?>
                    <div class="absolute -bottom-2 -right-2 w-10 h-10 rounded-full bg-blue-500 border-4 border-zinc-950 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                        </svg>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Artist Info -->
                <div class="flex-1 pb-4">
                    <!-- Breadcrumb -->
                    <nav class="flex items-center gap-2 text-sm mb-3">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white/50 hover:text-white transition-colors"><?php echo esc_html( $t['home'] ); ?></a>
                        <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <a href="<?php echo esc_url( home_url( '/artists/' ) ); ?>" class="text-white/50 hover:text-white transition-colors"><?php echo esc_html( $t['artists'] ); ?></a>
                        <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span class="text-white"><?php echo esc_html( $name ); ?></span>
                    </nav>

                    <!-- Badges -->
                    <div class="flex flex-wrap items-center gap-2 mb-3">
                        <?php if ( ! empty( $artist['is_featured'] ) ) : ?>
                        <span class="px-3 py-1 rounded-lg bg-pink-600/20 border border-pink-500/30 text-xs font-semibold text-pink-400">
                            🌟 Featured
                        </span>
                        <?php endif; ?>
                        <span class="px-3 py-1 rounded-lg bg-violet-600/20 border border-violet-500/30 text-xs font-semibold text-violet-400">
                            <?php echo esc_html( $types_label ); ?>
                        </span>
                        <?php if ( ! empty( $artist['is_verified'] ) ) : ?>
                        <span class="px-3 py-1 rounded-lg bg-emerald-600/20 border border-emerald-500/30 text-xs font-semibold text-emerald-400">
                            ✓ Verified
                        </span>
                        <?php endif; ?>
                    </div>

                    <!-- Name -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-3"><?php echo esc_html( $name ); ?></h1>

                    <!-- Quick Info -->
                    <div class="flex flex-wrap items-center gap-4 text-white/70">
                        <?php if ( $country ) : ?>
                        <div class="flex items-center gap-2">
                            <span class="text-lg">🌍</span>
                            <span><?php echo esc_html( $location ); ?></span>
                        </div>
                        <span class="text-white/30">•</span>
                        <?php endif; ?>
                        <?php if ( $genres ) : ?>
                        <div class="flex items-center gap-2">
                            <span>🎵</span>
                            <span><?php echo esc_html( implode( ', ', array_slice( $genres, 0, 3 ) ) ); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center gap-3 pb-4">
                    <?php if ( $social['spotify'] ) : ?>
                    <a href="<?php echo esc_url( $social['spotify'] ); ?>" target="_blank" class="flex items-center gap-2 px-6 py-3 rounded-xl bg-[#1DB954] text-white font-semibold hover:bg-[#1ed760] transition-all">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
                        Spotify
                    </a>
                    <?php endif; ?>
                    <button onclick="navigator.share && navigator.share({title: '<?php echo esc_js( $name ); ?>', url: window.location.href})" class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/70 hover:text-white hover:bg-white/10 transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== SOCIAL STATS BAR ==================== -->
    <?php if ( array_filter( $stats ) || array_filter( $social ) ) : ?>
    <section class="py-8 border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">

                <?php if ( $stats['spotify_monthly'] ) : ?>
                <a href="<?php echo esc_url( $social['spotify'] ?: '#' ); ?>" target="_blank" class="flex items-center gap-3 p-4 rounded-xl bg-[#1DB954]/10 border border-[#1DB954]/20 hover:bg-[#1DB954]/20 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-[#1DB954] flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold text-white"><?php echo $fmt( $stats['spotify_monthly'] ); ?></p>
                        <p class="text-xs text-white/50">Monthly Listeners</p>
                    </div>
                </a>
                <?php endif; ?>

                <?php if ( $stats['youtube'] ) : ?>
                <a href="<?php echo esc_url( $social['youtube'] ?: '#' ); ?>" target="_blank" class="flex items-center gap-3 p-4 rounded-xl bg-[#FF0000]/10 border border-[#FF0000]/20 hover:bg-[#FF0000]/20 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-[#FF0000] flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold text-white"><?php echo $fmt( $stats['youtube'] ); ?></p>
                        <p class="text-xs text-white/50">Subscribers</p>
                    </div>
                </a>
                <?php endif; ?>

                <?php if ( $stats['instagram'] ) : ?>
                <a href="<?php echo esc_url( $social['instagram'] ?: '#' ); ?>" target="_blank" class="flex items-center gap-3 p-4 rounded-xl bg-[#E4405F]/10 border border-[#E4405F]/20 hover:bg-[#E4405F]/20 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-[#833AB4] via-[#E4405F] to-[#FCAF45] flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold text-white"><?php echo $fmt( $stats['instagram'] ); ?></p>
                        <p class="text-xs text-white/50">Followers</p>
                    </div>
                </a>
                <?php endif; ?>

                <?php if ( $stats['facebook'] ) : ?>
                <a href="<?php echo esc_url( $social['facebook'] ?: '#' ); ?>" target="_blank" class="flex items-center gap-3 p-4 rounded-xl bg-[#1877F2]/10 border border-[#1877F2]/20 hover:bg-[#1877F2]/20 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-[#1877F2] flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold text-white"><?php echo $fmt( $stats['facebook'] ); ?></p>
                        <p class="text-xs text-white/50">Followers</p>
                    </div>
                </a>
                <?php endif; ?>

                <?php if ( $stats['tiktok'] ) : ?>
                <a href="<?php echo esc_url( $social['tiktok'] ?: '#' ); ?>" target="_blank" class="flex items-center gap-3 p-4 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all">
                    <div class="w-10 h-10 rounded-lg bg-black flex items-center justify-center flex-shrink-0 border border-white/20">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold text-white"><?php echo $fmt( $stats['tiktok'] ); ?></p>
                        <p class="text-xs text-white/50">Followers</p>
                    </div>
                </a>
                <?php endif; ?>

                <?php if ( $total_reach ) : ?>
                <div class="flex items-center gap-3 p-4 rounded-xl bg-gradient-to-br from-violet-600/20 to-pink-600/20 border border-violet-500/20">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-violet-600 to-pink-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold text-white"><?php echo $fmt( $total_reach ); ?>+</p>
                        <p class="text-xs text-white/50">Total Reach</p>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- ==================== MAIN CONTENT ==================== -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">

                <!-- Left Column - Main Content -->
                <div class="lg:col-span-2 space-y-12">

                    <!-- About -->
                    <?php if ( $bio ) : ?>
                    <div>
                        <h2 class="text-2xl font-bold text-white mb-6"><?php echo esc_html( $t['about'] ); ?></h2>
                        <div class="prose prose-invert max-w-none">
                            <div class="text-white/70 leading-relaxed space-y-4">
                                <?php echo wp_kses_post( $bio ); ?>
                            </div>
                        </div>

                        <!-- Genres -->
                        <?php if ( $genres ) : ?>
                        <div class="flex flex-wrap gap-2 mt-6">
                            <?php
                            $genre_colors = [ 'violet', 'pink', 'cyan', 'amber', 'emerald' ];
                            $i = 0;
                            foreach ( $genres as $genre ) :
                                $color = $genre_colors[ $i % count( $genre_colors ) ];
                                $i++;
                            ?>
                                <span class="px-4 py-2 rounded-xl bg-<?php echo $color; ?>-600/20 border border-<?php echo $color; ?>-500/30 text-sm font-medium text-<?php echo $color; ?>-400">
                                    <?php echo esc_html( $genre ); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Featured Videos -->
                    <?php if ( $yt_videos ) : ?>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-2xl font-bold text-white"><?php echo esc_html( $t['videos'] ); ?></h2>
                            <?php if ( $social['youtube'] ) : ?>
                            <a href="<?php echo esc_url( $social['youtube'] ); ?>" target="_blank" class="text-sm text-violet-400 hover:text-violet-300 transition-colors">
                                <?php echo esc_html( $t['view_all_youtube'] ); ?> →
                            </a>
                            <?php endif; ?>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <?php
                            $i = 0;
                            foreach ( $yt_videos as $url ) :
                                if ( $i >= 4 ) break;
                                $vid = tixello_get_yt_id( $url );
                                if ( ! $vid ) continue;
                                $i++;
                            ?>
                                <div class="aspect-video rounded-xl overflow-hidden bg-zinc-800">
                                    <iframe
                                        width="100%"
                                        height="100%"
                                        src="https://www.youtube.com/embed/<?php echo esc_attr( $vid ); ?>"
                                        title="Video <?php echo $i; ?>"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        loading="lazy"
                                        class="w-full h-full">
                                    </iframe>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Upcoming Events -->
                    <?php if ( $upcoming ) : ?>
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-2xl font-bold text-white"><?php echo esc_html( $t['upcoming_events'] ); ?></h2>
                            <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-sm font-medium">
                                <?php echo count( $upcoming ); ?> <?php echo esc_html( $t['events_scheduled'] ); ?>
                            </span>
                        </div>

                        <div class="space-y-4">
                            <?php foreach ( array_slice( $upcoming, 0, 4 ) as $ev ) :
                                $ev_title = $ev['title'] ?? '';
                                $ev_slug = $ev['slug'] ?? '';
                                $ev_date = ! empty( $ev['event_date'] ) ? date_i18n( 'j M Y', strtotime( $ev['event_date'] ) ) : '';
                                $ev_time = $ev['start_time'] ?? '';
                                $ev_poster = ! empty( $ev['poster_url'] ) ? $full_url( $ev['poster_url'] ) : '';
                                $ev_venue = $ev['venue']['name'] ?? '';
                                $ev_city = $ev['venue']['city'] ?? '';
                                $ev_price = $ev['price_from'] ?? null;
                                $ev_url = $ev_slug ? home_url( '/events/' . $ev_slug . '/' ) : '#';
                            ?>
                            <a href="<?php echo esc_url( $ev_url ); ?>" class="flex flex-col sm:flex-row gap-4 p-4 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all group">
                                <div class="w-full sm:w-48 aspect-video sm:aspect-square rounded-xl overflow-hidden flex-shrink-0">
                                    <?php if ( $ev_poster ) : ?>
                                        <img src="<?php echo esc_url( $ev_poster ); ?>" alt="<?php echo esc_attr( $ev_title ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <?php else : ?>
                                        <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900 flex items-center justify-center">
                                            <svg class="w-10 h-10 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="px-2 py-1 rounded-md bg-violet-600/20 text-violet-400 text-xs font-medium">🎵 Concert</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-2"><?php echo esc_html( $ev_title ); ?></h3>
                                    <div class="flex flex-wrap items-center gap-4 text-sm text-white/60 mb-4">
                                        <?php if ( $ev_date ) : ?>
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            <span><?php echo esc_html( $ev_date ); ?><?php if ( $ev_time ) echo ' • ' . esc_html( substr( $ev_time, 0, 5 ) ); ?></span>
                                        </div>
                                        <?php endif; ?>
                                        <?php if ( $ev_venue ) : ?>
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            </svg>
                                            <span><?php echo esc_html( $ev_venue ); ?><?php if ( $ev_city ) echo ', ' . esc_html( $ev_city ); ?></span>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <?php if ( ! is_null( $ev_price ) ) : ?>
                                                <span class="text-sm text-white/40"><?php echo esc_html( $t['from'] ); ?></span>
                                                <span class="text-lg font-bold text-white ml-2"><?php echo esc_html( $ev_price ); ?> RON</span>
                                            <?php else : ?>
                                                <span class="text-lg font-bold text-white">FREE</span>
                                            <?php endif; ?>
                                        </div>
                                        <span class="px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium"><?php echo esc_html( $t['tickets'] ); ?></span>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>

                <!-- Right Column - Sidebar -->
                <div class="lg:col-span-1">
                    <div class="sticky top-28 space-y-6">

                        <!-- Book This Artist -->
                        <div class="p-6 rounded-2xl bg-gradient-to-br from-violet-600/20 via-pink-600/20 to-transparent border border-violet-500/20">
                            <h3 class="text-lg font-bold text-white mb-2"><?php echo esc_html( $t['hire_artist'] ); ?></h3>
                            <p class="text-sm text-white/60 mb-6"><?php echo sprintf( esc_html( $t['hire_artist_desc'] ), esc_html( $name ) ); ?></p>
                            <?php if ( ! empty( $agent['email'] ) || ! empty( $manager['email'] ) ) : ?>
                            <a href="mailto:<?php echo esc_attr( $agent['email'] ?: $manager['email'] ); ?>" class="flex items-center justify-center gap-2 w-full px-6 py-4 rounded-xl bg-violet-600 text-white font-bold hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/30 transition-all">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                                <?php echo esc_html( $t['request_booking'] ); ?>
                            </a>
                            <?php else : ?>
                            <button class="flex items-center justify-center gap-2 w-full px-6 py-4 rounded-xl bg-violet-600 text-white font-bold hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/30 transition-all">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                                <?php echo esc_html( $t['request_booking'] ); ?>
                            </button>
                            <?php endif; ?>
                            <p class="text-xs text-white/40 text-center mt-3"><?php echo esc_html( $t['avg_response_time'] ); ?></p>
                        </div>

                        <!-- Contact Information -->
                        <?php if ( $manager_name || $agent_name || $social['website'] ) : ?>
                        <div class="rounded-2xl bg-zinc-900/50 border border-white/5 overflow-hidden">
                            <div class="p-4 border-b border-white/5 bg-zinc-800/50">
                                <h3 class="font-bold text-white"><?php echo esc_html( $t['contact_info'] ); ?></h3>
                            </div>

                            <?php if ( $social['website'] ) : ?>
                            <div class="p-4 border-b border-white/5">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-pink-600/20 flex items-center justify-center">
                                        <span class="text-lg">👤</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-white/40 uppercase tracking-wider">Artist</p>
                                        <p class="font-semibold text-white"><?php echo esc_html( $name ); ?></p>
                                    </div>
                                </div>
                                <div class="space-y-2 ml-13">
                                    <a href="<?php echo esc_url( $social['website'] ); ?>" target="_blank" class="flex items-center gap-2 text-sm text-white/60 hover:text-violet-400 transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/>
                                        </svg>
                                        <?php echo esc_html( parse_url( $social['website'], PHP_URL_HOST ) ); ?>
                                    </a>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if ( $manager_name ) : ?>
                            <div class="p-4 border-b border-white/5">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-violet-600/20 flex items-center justify-center">
                                        <span class="text-lg">💼</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-white/40 uppercase tracking-wider">Management</p>
                                        <p class="font-semibold text-white"><?php echo esc_html( $manager_name ); ?></p>
                                    </div>
                                </div>
                                <?php if ( ! empty( $manager['email'] ) ) : ?>
                                <div class="space-y-2 ml-13">
                                    <a href="mailto:<?php echo esc_attr( $manager['email'] ); ?>" class="flex items-center gap-2 text-sm text-white/60 hover:text-violet-400 transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <?php echo esc_html( $manager['email'] ); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>

                            <?php if ( $agent_name ) : ?>
                            <div class="p-4">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-cyan-600/20 flex items-center justify-center">
                                        <span class="text-lg">🎫</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-white/40 uppercase tracking-wider">Booking Agent</p>
                                        <p class="font-semibold text-white"><?php echo esc_html( $agent_name ); ?></p>
                                    </div>
                                </div>
                                <?php if ( ! empty( $agent['email'] ) ) : ?>
                                <div class="space-y-2 ml-13">
                                    <a href="mailto:<?php echo esc_attr( $agent['email'] ); ?>" class="flex items-center gap-2 text-sm text-white/60 hover:text-violet-400 transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <?php echo esc_html( $agent['email'] ); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <!-- Quick Stats -->
                        <?php if ( $stats['youtube_views'] || $stats['spotify_popularity'] ) : ?>
                        <div class="p-4 rounded-2xl bg-zinc-900/50 border border-white/5">
                            <h3 class="font-bold text-white mb-4"><?php echo esc_html( $t['statistics'] ); ?></h3>
                            <div class="space-y-3">
                                <?php if ( $stats['youtube_views'] ) : ?>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-white/50">YouTube Views</span>
                                    <span class="text-sm font-semibold text-white"><?php echo $fmt( $stats['youtube_views'] ); ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if ( $stats['spotify_popularity'] ) : ?>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-white/50">Spotify Popularity</span>
                                    <span class="text-sm font-semibold text-white"><?php echo intval( $stats['spotify_popularity'] ); ?>/100</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Share -->
                        <div class="p-4 rounded-2xl bg-zinc-900/50 border border-white/5">
                            <p class="text-sm text-white/50 mb-3"><?php echo esc_html( $t['share_artist'] ); ?></p>
                            <div class="flex items-center gap-2">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" class="flex-1 flex items-center justify-center gap-2 px-3 py-2 rounded-lg bg-[#1877F2]/20 text-[#1877F2] text-sm font-medium hover:bg-[#1877F2]/30 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
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

    <!-- ==================== SIMILAR ARTISTS ==================== -->
    <?php if ( ! empty( $similar_artists ) ) : ?>
    <section class="py-12 border-t border-white/5 bg-zinc-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-white mb-8"><?php echo esc_html( $t['similar_artists'] ); ?></h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 lg:gap-6">
                <?php foreach ( $similar_artists as $sa ) :
                    $sa_name = $sa['name'] ?? '';
                    $sa_slug = $sa['slug'] ?? '';
                    $sa_img = '';
                    if ( ! empty( $sa['images']['main_image_url'] ) ) {
                        $sa_img = $full_url( $sa['images']['main_image_url'] );
                    } elseif ( ! empty( $sa['media']['image_url'] ) ) {
                        $sa_img = $full_url( $sa['media']['image_url'] );
                    }
                    $sa_genres = $sa['genres'] ?? [];
                    if ( empty( $sa_genres ) && ! empty( $sa['artist_genres'] ) ) {
                        foreach ( $sa['artist_genres'] as $g ) {
                            if ( ! empty( $g['name'] ) ) $sa_genres[] = $g['name'];
                        }
                    }
                ?>
                <a href="<?php echo esc_url( home_url( '/artists/' . $sa_slug . '/' ) ); ?>" class="group">
                    <div class="relative aspect-square rounded-2xl overflow-hidden mb-3">
                        <?php if ( $sa_img ) : ?>
                            <img src="<?php echo esc_url( $sa_img ); ?>" alt="<?php echo esc_attr( $sa_name ); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <?php else : ?>
                            <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900 flex items-center justify-center">
                                <span class="text-4xl font-bold text-white/20"><?php echo esc_html( strtoupper( mb_substr( $sa_name, 0, 1 ) ) ); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="w-12 h-12 rounded-full bg-violet-600 flex items-center justify-center">
                                <svg class="w-5 h-5 text-white ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="font-semibold text-white group-hover:text-violet-400 transition-colors truncate"><?php echo esc_html( $sa_name ); ?></h3>
                    <p class="text-sm text-white/50 truncate"><?php echo esc_html( implode( ', ', array_slice( $sa_genres, 0, 2 ) ) ); ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
