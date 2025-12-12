<?php
/**
 * Template: Tixello – Single Artist (Modern Design)
 * URL: /artists/{slug}/
 * Uses cached API calls for performance
 */

get_header();

$slug = get_query_var( 'tixello_artist_slug' );

if ( ! $slug ) {
    status_header( 404 );
    get_template_part( '404' );
    get_footer();
    return;
}

// Use cached function for performance
$artist = function_exists( 'tixello_get_artist_by_slug_cached' )
    ? tixello_get_artist_by_slug_cached( $slug )
    : ( function_exists( 'tixello_get_artist_by_slug' ) ? tixello_get_artist_by_slug( $slug ) : null );

if ( ! $artist || ! is_array( $artist ) ) {
    status_header( 404 );
    get_template_part( '404' );
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

// Bio
$bio = '';
if ( ! empty( $artist['bio_translations']['ro'] ) ) {
    $bio = $artist['bio_translations']['ro'];
} elseif ( ! empty( $artist['bio_translations']['en'] ) ) {
    $bio = $artist['bio_translations']['en'];
} elseif ( ! empty( $artist['bio'] ) ) {
    $bio = $artist['bio'];
}

// Images
$main_img = $full_url( $artist['images']['main_image_url'] ?? '' );
$portrait = $full_url( $artist['images']['portrait_url'] ?? '' );
$logo = $full_url( $artist['images']['logo_url'] ?? '' );
$hero_img = $full_url( $artist['images']['hero_image_url'] ?? '' );
$primary_img = $main_img ?: $portrait ?: '';
$bg_img = $hero_img ?: $main_img ?: $portrait ?: '';

// Location
$city = $artist['location']['city'] ?? '';
$country = $artist['location']['country'] ?? '';
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

// Extract YT video ID
function get_yt_id( $url ) {
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

// Format number
$fmt = function( $n ) {
    if ( ! $n ) return '';
    if ( $n >= 1e9 ) return number_format( $n / 1e9, 1 ) . 'B';
    if ( $n >= 1e6 ) return number_format( $n / 1e6, 1 ) . 'M';
    if ( $n >= 1e3 ) return number_format( $n / 1e3, 1 ) . 'K';
    return number_format( $n );
};

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

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="relative min-h-[70vh] flex items-end overflow-hidden">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 z-0">
            <?php if ( $bg_img ) : ?>
                <img
                    src="<?php echo $bg_img; ?>"
                    alt="<?php echo esc_attr( $name ); ?>"
                    class="w-full h-full object-cover scale-105"
                    style="filter: blur(0px);"
                />
            <?php else : ?>
                <div class="w-full h-full bg-gradient-to-br from-slate-800 via-slate-900 to-black"></div>
            <?php endif; ?>

            <!-- Gradient Overlays -->
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-transparent to-transparent"></div>
        </div>

        <!-- Content -->
        <div class="container mx-auto px-4 py-16 relative z-10">
            <!-- Breadcrumb -->
            <nav class="mb-8 flex items-center gap-2 text-sm text-white/60">
                <a href="<?php echo home_url(); ?>" class="hover:text-white transition">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <a href="<?php echo home_url( '/artists/' ); ?>" class="hover:text-white transition">Artists</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-white"><?php echo esc_html( $name ); ?></span>
            </nav>

            <div class="grid lg:grid-cols-[1fr,auto] gap-8 items-end">
                <!-- Left: Artist Info -->
                <div class="space-y-6">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-sm font-medium text-white"><?php echo esc_html( $types_label ); ?></span>
                    </div>

                    <!-- Name -->
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white tracking-tight leading-none">
                        <?php echo esc_html( $name ); ?>
                    </h1>

                    <!-- Location & Genres -->
                    <div class="flex flex-wrap items-center gap-4 text-white/80">
                        <?php if ( $location ) : ?>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-lg"><?php echo esc_html( $location ); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if ( $genres ) : ?>
                            <div class="flex items-center gap-2">
                                <span class="w-1 h-1 rounded-full bg-white/40"></span>
                                <span class="text-lg"><?php echo esc_html( implode( ', ', array_slice( $genres, 0, 3 ) ) ); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Quick Stats -->
                    <?php if ( $stats['spotify_monthly'] || $stats['youtube'] ) : ?>
                        <div class="flex flex-wrap gap-3 pt-2">
                            <?php if ( $stats['spotify_monthly'] ) : ?>
                                <div class="flex items-center gap-2 px-4 py-2.5 rounded-2xl bg-emerald-500/20 backdrop-blur-sm border border-emerald-500/30">
                                    <svg class="w-5 h-5 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
                                    <div>
                                        <p class="text-xl font-bold text-white"><?php echo $fmt( $stats['spotify_monthly'] ); ?></p>
                                        <p class="text-xs text-emerald-300/80">Monthly Listeners</p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ( $stats['youtube'] ) : ?>
                                <div class="flex items-center gap-2 px-4 py-2.5 rounded-2xl bg-red-500/20 backdrop-blur-sm border border-red-500/30">
                                    <svg class="w-5 h-5 text-red-400" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                    <div>
                                        <p class="text-xl font-bold text-white"><?php echo $fmt( $stats['youtube'] ); ?></p>
                                        <p class="text-xs text-red-300/80">Subscribers</p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Social Links -->
                    <div class="flex flex-wrap gap-3 pt-4">
                        <?php if ( $social['spotify'] ) : ?>
                            <a href="<?php echo esc_url( $social['spotify'] ); ?>" target="_blank" rel="noopener" class="group inline-flex items-center gap-2 px-5 py-3 rounded-full bg-[#1DB954] text-white font-semibold hover:bg-[#1ed760] transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-emerald-500/30">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
                                <span>Listen on Spotify</span>
                            </a>
                        <?php endif; ?>

                        <?php if ( $social['youtube'] ) : ?>
                            <a href="<?php echo esc_url( $social['youtube'] ); ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-white/10 backdrop-blur-sm text-white font-medium hover:bg-white/20 transition-all duration-300 border border-white/20">
                                <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                <span>YouTube</span>
                            </a>
                        <?php endif; ?>

                        <?php if ( $social['instagram'] ) : ?>
                            <a href="<?php echo esc_url( $social['instagram'] ); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm text-white hover:bg-gradient-to-br hover:from-purple-500 hover:to-pink-500 transition-all duration-300 border border-white/20 hover:border-transparent">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                            </a>
                        <?php endif; ?>

                        <?php if ( $social['facebook'] ) : ?>
                            <a href="<?php echo esc_url( $social['facebook'] ); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm text-white hover:bg-blue-600 transition-all duration-300 border border-white/20 hover:border-transparent">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                        <?php endif; ?>

                        <?php if ( $social['tiktok'] ) : ?>
                            <a href="<?php echo esc_url( $social['tiktok'] ); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm text-white hover:bg-black transition-all duration-300 border border-white/20 hover:border-transparent">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                            </a>
                        <?php endif; ?>

                        <?php if ( $social['website'] ) : ?>
                            <a href="<?php echo esc_url( $social['website'] ); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm text-white hover:bg-white hover:text-slate-900 transition-all duration-300 border border-white/20 hover:border-transparent">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Right: Artist Photo -->
                <?php if ( $primary_img ) : ?>
                    <div class="hidden lg:block">
                        <div class="relative">
                            <div class="w-72 h-72 rounded-3xl overflow-hidden border-4 border-white/20 shadow-2xl shadow-black/50 transform rotate-3 hover:rotate-0 transition-transform duration-500">
                                <img
                                    src="<?php echo $primary_img; ?>"
                                    alt="<?php echo esc_attr( $name ); ?>"
                                    class="w-full h-full object-cover"
                                />
                            </div>
                            <?php if ( $logo ) : ?>
                                <div class="absolute -bottom-4 -left-4 w-20 h-20 rounded-2xl bg-white p-2 shadow-xl">
                                    <img src="<?php echo $logo; ?>" alt="<?php echo esc_attr( $name ); ?> logo" class="w-full h-full object-contain" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- CONTENT SECTIONS -->
    <div class="bg-white">

        <!-- Bio Section -->
        <?php if ( $bio ) : ?>
            <section class="py-16 border-b border-slate-100">
                <div class="container mx-auto px-4">
                    <div class="max-w-4xl">
                        <h2 class="text-sm font-bold uppercase tracking-widest text-slate-400 mb-6">About</h2>
                        <div class="prose prose-lg prose-slate max-w-none prose-p:text-slate-600 prose-headings:text-slate-900">
                            <?php echo wp_kses_post( $bio ); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Genres Section -->
        <?php if ( $genres ) : ?>
            <section class="py-12 border-b border-slate-100 bg-slate-50/50">
                <div class="container mx-auto px-4">
                    <h2 class="text-sm font-bold uppercase tracking-widest text-slate-400 mb-6">Genres</h2>
                    <div class="flex flex-wrap gap-3">
                        <?php foreach ( $genres as $genre ) : ?>
                            <span class="px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-700 font-medium shadow-sm hover:border-slate-300 hover:shadow transition-all">
                                <?php echo esc_html( $genre ); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Stats Grid -->
        <?php if ( array_filter( $stats ) ) : ?>
            <section class="py-16 border-b border-slate-100">
                <div class="container mx-auto px-4">
                    <h2 class="text-sm font-bold uppercase tracking-widest text-slate-400 mb-8">Statistics & Reach</h2>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                        <?php if ( $stats['spotify_monthly'] ) : ?>
                            <div class="group relative p-6 rounded-3xl bg-gradient-to-br from-emerald-50 to-emerald-100/50 border border-emerald-200/50 hover:shadow-lg hover:shadow-emerald-500/10 transition-all duration-300">
                                <div class="absolute top-4 right-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                    <svg class="w-12 h-12 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
                                </div>
                                <p class="text-3xl font-black text-emerald-600"><?php echo $fmt( $stats['spotify_monthly'] ); ?></p>
                                <p class="text-sm text-emerald-700/70 mt-1">Monthly Listeners</p>
                            </div>
                        <?php endif; ?>

                        <?php if ( $stats['youtube'] ) : ?>
                            <div class="group relative p-6 rounded-3xl bg-gradient-to-br from-red-50 to-red-100/50 border border-red-200/50 hover:shadow-lg hover:shadow-red-500/10 transition-all duration-300">
                                <div class="absolute top-4 right-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                    <svg class="w-12 h-12 text-red-600" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                </div>
                                <p class="text-3xl font-black text-red-600"><?php echo $fmt( $stats['youtube'] ); ?></p>
                                <p class="text-sm text-red-700/70 mt-1">Subscribers</p>
                            </div>
                        <?php endif; ?>

                        <?php if ( $stats['youtube_views'] ) : ?>
                            <div class="group relative p-6 rounded-3xl bg-gradient-to-br from-rose-50 to-rose-100/50 border border-rose-200/50 hover:shadow-lg hover:shadow-rose-500/10 transition-all duration-300">
                                <p class="text-3xl font-black text-rose-600"><?php echo $fmt( $stats['youtube_views'] ); ?></p>
                                <p class="text-sm text-rose-700/70 mt-1">Total Views</p>
                            </div>
                        <?php endif; ?>

                        <?php if ( $stats['instagram'] ) : ?>
                            <div class="group relative p-6 rounded-3xl bg-gradient-to-br from-pink-50 to-purple-100/50 border border-pink-200/50 hover:shadow-lg hover:shadow-pink-500/10 transition-all duration-300">
                                <p class="text-3xl font-black text-pink-600"><?php echo $fmt( $stats['instagram'] ); ?></p>
                                <p class="text-sm text-pink-700/70 mt-1">Instagram</p>
                            </div>
                        <?php endif; ?>

                        <?php if ( $stats['facebook'] ) : ?>
                            <div class="group relative p-6 rounded-3xl bg-gradient-to-br from-blue-50 to-blue-100/50 border border-blue-200/50 hover:shadow-lg hover:shadow-blue-500/10 transition-all duration-300">
                                <p class="text-3xl font-black text-blue-600"><?php echo $fmt( $stats['facebook'] ); ?></p>
                                <p class="text-sm text-blue-700/70 mt-1">Facebook</p>
                            </div>
                        <?php endif; ?>

                        <?php if ( $stats['tiktok'] ) : ?>
                            <div class="group relative p-6 rounded-3xl bg-gradient-to-br from-slate-50 to-slate-100/50 border border-slate-200/50 hover:shadow-lg hover:shadow-slate-500/10 transition-all duration-300">
                                <p class="text-3xl font-black text-slate-800"><?php echo $fmt( $stats['tiktok'] ); ?></p>
                                <p class="text-sm text-slate-600/70 mt-1">TikTok</p>
                            </div>
                        <?php endif; ?>

                        <?php if ( $stats['spotify_popularity'] ) : ?>
                            <div class="group relative p-6 rounded-3xl bg-gradient-to-br from-emerald-50 to-teal-100/50 border border-emerald-200/50 hover:shadow-lg hover:shadow-emerald-500/10 transition-all duration-300">
                                <p class="text-3xl font-black text-emerald-600"><?php echo intval( $stats['spotify_popularity'] ); ?><span class="text-lg">/100</span></p>
                                <p class="text-sm text-emerald-700/70 mt-1">Spotify Popularity</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- YouTube Videos -->
        <?php if ( $yt_videos ) : ?>
            <section class="py-16 border-b border-slate-100 bg-slate-900 text-white">
                <div class="container mx-auto px-4">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-sm font-bold uppercase tracking-widest text-white/60">Featured Videos</h2>
                        <?php if ( $social['youtube'] ) : ?>
                            <a href="<?php echo esc_url( $social['youtube'] ); ?>" target="_blank" rel="noopener" class="text-sm text-white/60 hover:text-white flex items-center gap-2 transition-colors">
                                <span>View all on YouTube</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php
                        $i = 0;
                        foreach ( $yt_videos as $url ) :
                            if ( $i >= 3 ) break;
                            $vid = get_yt_id( $url );
                            if ( ! $vid ) continue;
                            $i++;
                        ?>
                            <div class="group rounded-2xl overflow-hidden bg-slate-800 border border-slate-700 hover:border-slate-600 transition-all duration-300 hover:shadow-xl hover:shadow-red-500/10">
                                <div class="aspect-video">
                                    <iframe
                                        src="https://www.youtube.com/embed/<?php echo esc_attr( $vid ); ?>"
                                        title="Video <?php echo $i; ?>"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        loading="lazy"
                                        class="w-full h-full"
                                    ></iframe>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Upcoming Events -->
        <?php if ( $upcoming ) : ?>
            <section class="py-16 border-b border-slate-100">
                <div class="container mx-auto px-4">
                    <h2 class="text-sm font-bold uppercase tracking-widest text-slate-400 mb-8">Upcoming Events</h2>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <?php foreach ( array_slice( $upcoming, 0, 8 ) as $ev ) :
                            $ev_title = $ev['title'] ?? '';
                            $ev_slug = $ev['slug'] ?? '';
                            $ev_date = ! empty( $ev['event_date'] ) ? date_i18n( 'j M Y', strtotime( $ev['event_date'] ) ) : '';
                            $ev_time = $ev['start_time'] ?? '';
                            $ev_poster = ! empty( $ev['poster_url'] ) ? $full_url( $ev['poster_url'] ) : '';
                            $ev_venue = $ev['venue']['name'] ?? '';
                            $ev_city = $ev['venue']['city'] ?? '';
                            $ev_url = $ev_slug ? home_url( '/events/' . $ev_slug . '/' ) : '#';
                        ?>
                            <a href="<?php echo esc_url( $ev_url ); ?>" class="group flex flex-col rounded-2xl border border-slate-200 bg-white overflow-hidden hover:shadow-xl hover:shadow-slate-200/50 hover:border-slate-300 transition-all duration-300 hover:-translate-y-1">
                                <div class="aspect-[3/4] bg-slate-100 overflow-hidden">
                                    <?php if ( $ev_poster ) : ?>
                                        <img src="<?php echo $ev_poster; ?>" alt="<?php echo esc_attr( $ev_title ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                                    <?php endif; ?>
                                </div>
                                <div class="p-4 flex-1 flex flex-col">
                                    <p class="text-xs font-semibold text-blue-600 mb-1"><?php echo esc_html( $ev_date ); ?><?php if ( $ev_time ) echo ' · ' . esc_html( substr( $ev_time, 0, 5 ) ); ?></p>
                                    <h3 class="font-bold text-slate-900 line-clamp-2 mb-2 group-hover:text-blue-600 transition-colors"><?php echo esc_html( $ev_title ); ?></h3>
                                    <?php if ( $ev_venue ) : ?>
                                        <p class="mt-auto text-sm text-slate-500"><?php echo esc_html( $ev_venue ); ?><?php if ( $ev_city ) echo ' · ' . esc_html( $ev_city ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Contact / Management -->
        <?php if ( $manager_name || $agent_name ) : ?>
            <section class="py-16 bg-slate-50">
                <div class="container mx-auto px-4">
                    <h2 class="text-sm font-bold uppercase tracking-widest text-slate-400 mb-8">Management & Booking</h2>

                    <div class="grid md:grid-cols-2 gap-6 max-w-3xl">
                        <?php if ( $manager_name ) : ?>
                            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-3">Manager</p>
                                <p class="text-lg font-semibold text-slate-900 mb-2"><?php echo esc_html( $manager_name ); ?></p>
                                <?php if ( ! empty( $manager['email'] ) ) : ?>
                                    <a href="mailto:<?php echo esc_attr( $manager['email'] ); ?>" class="inline-flex items-center gap-2 text-sm text-blue-600 hover:text-blue-700 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        <span><?php echo esc_html( $manager['email'] ); ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( $agent_name ) : ?>
                            <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-3">Booking Agent</p>
                                <p class="text-lg font-semibold text-slate-900 mb-2"><?php echo esc_html( $agent_name ); ?></p>
                                <?php if ( ! empty( $agent['email'] ) ) : ?>
                                    <a href="mailto:<?php echo esc_attr( $agent['email'] ); ?>" class="inline-flex items-center gap-2 text-sm text-blue-600 hover:text-blue-700 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        <span><?php echo esc_html( $agent['email'] ); ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Back to Artists -->
        <section class="py-12 border-t border-slate-100">
            <div class="container mx-auto px-4 text-center">
                <a href="<?php echo esc_url( home_url( '/artists/' ) ); ?>" class="inline-flex items-center gap-3 px-8 py-4 rounded-2xl bg-slate-900 text-white font-semibold hover:bg-slate-800 transition-all duration-300 hover:shadow-xl hover:shadow-slate-900/25">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    <span>Back to All Artists</span>
                </a>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
