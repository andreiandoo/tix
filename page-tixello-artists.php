<?php
/**
 * Template Name: Tixello – Artists Directory
 * Description: Lista artisti din Tixello Core cu search si filtre - Dynamic Loading
 */

get_header();

// Detectare limba curentă (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Check for URL-based filters
$url_letter = get_query_var( 'tixello_artist_letter', '' );
$url_genre  = get_query_var( 'tixello_artist_genre', '' );

// Get stats from API (cached)
$total_artists = function_exists( 'tixello_get_stat_value' ) ? tixello_get_stat_value( 'artists' ) : '0';
$total_genres  = function_exists( 'tixello_get_stat_value' ) ? tixello_get_stat_value( 'artist_genres' ) : '0';
$total_types   = function_exists( 'tixello_get_stat_value' ) ? tixello_get_stat_value( 'artist_types' ) : '0';

// Fetch genres list for filter pills
$genres_list = [];
if ( function_exists( 'tixello_fetch_artist_genres_list' ) ) {
    $genres_list = tixello_fetch_artist_genres_list();
}

// Fetch types list
$types_list = [];
if ( function_exists( 'tixello_fetch_artist_types_list' ) ) {
    $types_list = tixello_fetch_artist_types_list();
}

// Translations array - all strings for both languages
$translations = [
    'ro' => [
        // Breadcrumb
        'home' => 'Acasa',
        'artists' => 'Artisti',
        // Hero
        'badge' => 'Reteaua de Artisti Tixello',
        'hero_title' => 'Descopera Artisti',
        'hero_subtitle' => 'Exploreaza %s artisti din Romania si din intreaga lume. Cauta dupa nume, gen sau locatie.',
        // Stats
        'total_artists' => 'Total Artisti',
        'genres' => 'Genuri',
        'artist_types' => 'Tipuri Artisti',
        'showing' => 'Afisati',
        // Search & Filters
        'search_placeholder' => 'Cauta artisti dupa nume...',
        'all_genres' => 'Toate genurile',
        'all' => 'Toate',
        // All Artists Section
        'all_artists' => 'Toti artistii',
        'showing_of' => 'Se afiseaza',
        'of' => 'din',
        'artists_label' => 'artisti',
        'loading' => 'Se incarca...',
        // Empty State
        'no_artist_found' => 'Niciun artist gasit',
        'try_modify_filters' => 'Incearca sa modifici filtrele sau termenul de cautare',
        'reset_filters' => 'Reseteaza filtrele',
        // Load More
        'load_more' => 'Incarca mai multi artisti',
        // CTA Section
        'are_you_artist' => 'Esti artist?',
        'cta_subtitle' => 'Alatura-te retelei de artisti Tixello si conecteaza-te cu organizatori de evenimente din toata Europa. Fii descoperit de milioane de fani.',
        'register_as_artist' => 'Inregistreaza-te ca artist',
        'learn_more' => 'Afla mai multe',
        // Filter labels
        'filter_by_letter' => 'Artisti cu litera',
        'filter_by_genre' => 'Artisti gen',
    ],
    'en' => [
        // Breadcrumb
        'home' => 'Home',
        'artists' => 'Artists',
        // Hero
        'badge' => 'Tixello Artists Network',
        'hero_title' => 'Discover Artists',
        'hero_subtitle' => 'Explore %s artists from Romania and around the world. Search by name, genre or location.',
        // Stats
        'total_artists' => 'Total Artists',
        'genres' => 'Genres',
        'artist_types' => 'Artist Types',
        'showing' => 'Showing',
        // Search & Filters
        'search_placeholder' => 'Search artists by name...',
        'all_genres' => 'All Genres',
        'all' => 'All',
        // All Artists Section
        'all_artists' => 'All Artists',
        'showing_of' => 'Showing',
        'of' => 'of',
        'artists_label' => 'artists',
        'loading' => 'Loading...',
        // Empty State
        'no_artist_found' => 'No artist found',
        'try_modify_filters' => 'Try modifying the filters or search term',
        'reset_filters' => 'Reset filters',
        // Load More
        'load_more' => 'Load more artists',
        // CTA Section
        'are_you_artist' => 'Are you an artist?',
        'cta_subtitle' => 'Join the Tixello artist network and connect with event organizers across Europe. Be discovered by millions of fans.',
        'register_as_artist' => 'Register as an artist',
        'learn_more' => 'Learn more',
        // Filter labels
        'filter_by_letter' => 'Artists starting with',
        'filter_by_genre' => 'Artists in genre',
    ],
];

// Get translations for current language
$t = isset( $translations[ $current_lang ] ) ? $translations[ $current_lang ] : $translations['en'];

// Prepare genres for JavaScript
$js_genres = [];
foreach ( $genres_list as $genre ) {
    $name = is_array( $genre ) ? ( $genre['name'] ?? '' ) : $genre;
    if ( ! empty( $name ) ) {
        $js_genres[] = $name;
    }
}

?>

<main id="primary" class="site-main bg-zinc-950 text-zinc-200 antialiased">

    <!-- ==================== HERO SECTION ==================== -->
    <section class="relative overflow-hidden">
        <!-- Background effects -->
        <div class="absolute inset-0 bg-gradient-to-b from-pink-600/5 via-transparent to-transparent"></div>
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-pink-600/10 rounded-full blur-3xl"></div>
        <div class="absolute top-20 right-1/4 w-80 h-80 bg-violet-600/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm mb-8">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white/40 hover:text-white/70 transition-colors"><?php echo esc_html( $t['home'] ); ?></a>
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-white/70"><?php echo esc_html( $t['artists'] ); ?></span>
                <?php if ( $url_letter ) : ?>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <span class="text-white/70"><?php echo esc_html( strtoupper( urldecode( $url_letter ) ) ); ?></span>
                <?php endif; ?>
                <?php if ( $url_genre ) : ?>
                    <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <span class="text-white/70"><?php echo esc_html( urldecode( $url_genre ) ); ?></span>
                <?php endif; ?>
            </nav>

            <!-- Title -->
            <div class="max-w-3xl mb-8">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-pink-500/10 border border-pink-500/20 mb-6">
                    <span class="text-lg">🎤</span>
                    <span class="text-sm font-medium text-pink-400"><?php echo esc_html( $t['badge'] ); ?></span>
                </div>

                <?php if ( $url_letter ) : ?>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                        <?php echo esc_html( $t['filter_by_letter'] ); ?> "<?php echo esc_html( strtoupper( urldecode( $url_letter ) ) ); ?>"
                    </h1>
                <?php elseif ( $url_genre ) : ?>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                        <?php echo esc_html( $t['filter_by_genre'] ); ?>: <?php echo esc_html( urldecode( $url_genre ) ); ?>
                    </h1>
                <?php else : ?>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                        <?php echo esc_html( $t['hero_title'] ); ?>
                    </h1>
                <?php endif; ?>

                <p class="text-lg sm:text-xl text-white/60 leading-relaxed">
                    <?php echo sprintf( $t['hero_subtitle'], '<span class="text-white font-semibold">' . esc_html( $total_artists ) . '</span>' ); ?>
                </p>
            </div>

            <!-- Stats - Instant Load from API stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div class="p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center">
                    <div class="text-2xl font-bold text-white"><?php echo esc_html( $total_artists ); ?></div>
                    <div class="text-xs text-white/50"><?php echo esc_html( $t['total_artists'] ); ?></div>
                </div>
                <div class="p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center">
                    <div class="text-2xl font-bold text-white"><?php echo esc_html( $total_genres ); ?></div>
                    <div class="text-xs text-white/50"><?php echo esc_html( $t['genres'] ); ?></div>
                </div>
                <div class="p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center">
                    <div class="text-2xl font-bold text-white"><?php echo esc_html( $total_types ); ?></div>
                    <div class="text-xs text-white/50"><?php echo esc_html( $t['artist_types'] ); ?></div>
                </div>
                <div class="p-4 rounded-xl bg-zinc-900/50 border border-white/5 text-center">
                    <div class="text-2xl font-bold text-pink-400" id="filtered-count">-</div>
                    <div class="text-xs text-white/50"><?php echo esc_html( $t['showing'] ); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alpine.js Component for Dynamic Loading -->
    <div x-data="tixelloArtistsDirectory()" x-init="init()">

        <!-- ==================== SEARCH & FILTERS ==================== -->
        <section class="sticky top-0 z-40 bg-zinc-950/95 backdrop-blur-xl border-y border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex flex-col lg:flex-row gap-4">

                    <!-- Search -->
                    <div class="relative flex-1">
                        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <input type="text"
                               x-model="search"
                               @input.debounce.300ms="filterArtists()"
                               placeholder="<?php echo esc_attr( $t['search_placeholder'] ); ?>"
                               class="w-full pl-12 pr-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/40 focus:outline-none focus:border-violet-500/50 focus:bg-white/10 transition-all">
                    </div>

                    <!-- Genre Filter Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center gap-2 px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white/70 hover:text-white hover:bg-white/10 transition-all min-w-[180px]">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                            </svg>
                            <span class="text-sm font-medium truncate" x-text="activeGenre === 'all' ? '<?php echo esc_js( $t['all_genres'] ); ?>' : activeGenre"></span>
                            <svg class="w-4 h-4 ml-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition class="absolute top-full left-0 mt-2 w-64 max-h-80 overflow-y-auto rounded-xl bg-zinc-900 border border-white/10 shadow-xl z-50">
                            <button @click="setGenre('all'); open = false" class="block w-full px-4 py-2.5 text-left text-sm hover:bg-white/5 transition-colors" :class="activeGenre === 'all' ? 'text-violet-400' : 'text-white/70'">
                                <?php echo esc_html( $t['all_genres'] ); ?>
                            </button>
                            <template x-for="genre in genres" :key="genre">
                                <button @click="setGenre(genre); open = false" class="block w-full px-4 py-2.5 text-left text-sm hover:bg-white/5 transition-colors" :class="activeGenre === genre ? 'text-violet-400' : 'text-white/70'" x-text="genre"></button>
                            </template>
                        </div>
                    </div>

                    <!-- View Toggle -->
                    <div class="hidden sm:flex items-center gap-1 p-1 rounded-lg bg-white/5 border border-white/10">
                        <button @click="viewMode = 'grid'" :class="viewMode === 'grid' ? 'bg-violet-600 text-white' : 'text-white/40 hover:text-white hover:bg-white/10'" class="p-2 rounded-md transition-colors">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                            </svg>
                        </button>
                        <button @click="viewMode = 'list'" :class="viewMode === 'list' ? 'bg-violet-600 text-white' : 'text-white/40 hover:text-white hover:bg-white/10'" class="p-2 rounded-md transition-colors">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== ALPHABETICAL FILTER ==================== -->
        <section class="border-b border-white/5 bg-zinc-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-1 py-3 overflow-x-auto scrollbar-hide">
                    <button @click="setLetter('all')"
                       :class="activeLetter === 'all' ? 'bg-violet-600 text-white' : 'text-white/50 hover:text-white hover:bg-white/5'"
                       class="flex-shrink-0 w-10 h-10 rounded-lg text-sm font-semibold transition-all flex items-center justify-center">
                        <?php echo esc_html( $t['all'] ); ?>
                    </button>
                    <button @click="setLetter('#')"
                       :class="activeLetter === '#' ? 'bg-violet-600 text-white' : 'text-white/50 hover:text-white hover:bg-white/5'"
                       class="flex-shrink-0 w-10 h-10 rounded-lg text-sm font-semibold transition-all flex items-center justify-center">
                        #
                    </button>
                    <?php foreach ( range( 'A', 'Z' ) as $letter ) : ?>
                        <button @click="setLetter('<?php echo $letter; ?>')"
                           :class="activeLetter === '<?php echo $letter; ?>' ? 'bg-violet-600 text-white' : 'text-white/50 hover:text-white hover:bg-white/5'"
                           class="flex-shrink-0 w-10 h-10 rounded-lg text-sm font-semibold transition-all flex items-center justify-center">
                            <?php echo $letter; ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ==================== GENRE PILLS ==================== -->
        <section class="border-b border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-2 py-4 overflow-x-auto scrollbar-hide">
                    <button @click="setGenre('all')"
                       :class="activeGenre === 'all' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/70 hover:bg-white/10 hover:text-white'"
                       class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium transition-colors">
                        <?php echo esc_html( $t['all_genres'] ); ?>
                    </button>
                    <template x-for="genre in genres.slice(0, 15)" :key="genre">
                        <button @click="setGenre(genre)"
                           :class="activeGenre === genre ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/70 hover:bg-white/10 hover:text-white'"
                           class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium transition-colors"
                           x-text="genre">
                        </button>
                    </template>
                </div>
            </div>
        </section>

        <!-- ==================== ALL ARTISTS GRID ==================== -->
        <section class="py-12 border-t border-white/5" id="all-artists">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Results Header -->
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-2xl font-bold text-white"><?php echo esc_html( $t['all_artists'] ); ?></h2>
                        <p class="text-white/50 mt-1">
                            <span x-show="!loading">
                                <?php echo esc_html( $t['showing_of'] ); ?> <span class="text-white" x-text="displayedArtists.length"></span> <?php echo esc_html( $t['of'] ); ?> <span class="text-white" x-text="filteredArtists.length"></span> <?php echo esc_html( $t['artists_label'] ); ?>
                            </span>
                            <span x-show="loading" class="flex items-center gap-2">
                                <svg class="animate-spin h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <?php echo esc_html( $t['loading'] ); ?>
                            </span>
                        </p>
                    </div>
                </div>

                <!-- Loading Skeleton -->
                <div x-show="loading && allArtists.length === 0" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 lg:gap-6">
                    <?php for ( $i = 0; $i < 12; $i++ ) : ?>
                    <div class="animate-pulse">
                        <div class="aspect-square rounded-2xl bg-zinc-800/50 mb-3"></div>
                        <div class="h-4 bg-zinc-800/50 rounded w-3/4 mb-2"></div>
                        <div class="h-3 bg-zinc-800/50 rounded w-1/2"></div>
                    </div>
                    <?php endfor; ?>
                </div>

                <!-- Grid View -->
                <div x-show="viewMode === 'grid' && displayedArtists.length > 0" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 lg:gap-6">
                    <template x-for="artist in displayedArtists" :key="artist.id">
                        <a :href="artist.slug ? '<?php echo esc_url( home_url( '/artists/' ) ); ?>' + artist.slug + '/' : '#'" class="group">
                            <div class="relative aspect-square rounded-2xl overflow-hidden mb-3">
                                <template x-if="artist.image">
                                    <img :src="artist.image" :alt="artist.name" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
                                </template>
                                <template x-if="!artist.image">
                                    <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900 flex items-center justify-center">
                                        <span class="text-4xl font-bold text-white/20" x-text="artist.name.charAt(0).toUpperCase()"></span>
                                    </div>
                                </template>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                                <!-- Verified badge -->
                                <template x-if="artist.verified">
                                    <div class="absolute top-2 right-2 w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
                                    </div>
                                </template>

                                <!-- Play button on hover -->
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="w-12 h-12 rounded-full bg-violet-600 flex items-center justify-center shadow-lg shadow-violet-600/30">
                                        <svg class="w-5 h-5 text-white ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <h3 class="font-semibold text-white group-hover:text-violet-400 transition-colors truncate" x-text="artist.name"></h3>
                            <p class="text-sm text-white/50 truncate" x-text="artist.genres.slice(0, 2).join(', ') || artist.country"></p>
                        </a>
                    </template>
                </div>

                <!-- List View -->
                <div x-show="viewMode === 'list' && displayedArtists.length > 0" class="space-y-3">
                    <template x-for="artist in displayedArtists" :key="artist.id">
                        <a :href="artist.slug ? '<?php echo esc_url( home_url( '/artists/' ) ); ?>' + artist.slug + '/' : '#'" class="group flex items-center gap-4 p-4 bg-zinc-900/50 rounded-xl border border-white/5 hover:border-violet-500/30 hover:bg-zinc-900/80 transition-all duration-300">
                            <!-- Thumbnail -->
                            <div class="w-16 h-16 flex-shrink-0 rounded-xl overflow-hidden bg-zinc-800">
                                <template x-if="artist.image">
                                    <img :src="artist.image" :alt="artist.name" class="w-full h-full object-cover" loading="lazy">
                                </template>
                                <template x-if="!artist.image">
                                    <div class="w-full h-full flex items-center justify-center">
                                        <span class="text-xl font-bold text-white/20" x-text="artist.name.charAt(0).toUpperCase()"></span>
                                    </div>
                                </template>
                            </div>

                            <!-- Content -->
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2">
                                    <h3 class="font-semibold text-white group-hover:text-violet-400 transition-colors" x-text="artist.name"></h3>
                                    <template x-if="artist.verified">
                                        <div class="w-4 h-4 rounded-full bg-blue-500 flex items-center justify-center">
                                            <svg class="w-2.5 h-2.5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
                                        </div>
                                    </template>
                                </div>
                                <p class="text-sm text-white/50" x-text="artist.genres.slice(0, 3).join(', ')"></p>
                            </div>

                            <!-- Location -->
                            <div class="hidden sm:block text-sm text-white/40" x-text="[artist.city, artist.country].filter(Boolean).join(', ')"></div>

                            <!-- Arrow -->
                            <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </template>
                </div>

                <!-- Empty State -->
                <div x-show="!loading && filteredArtists.length === 0" class="text-center py-16">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/5 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2"><?php echo esc_html( $t['no_artist_found'] ); ?></h3>
                    <p class="text-white/50 mb-6"><?php echo esc_html( $t['try_modify_filters'] ); ?></p>
                    <button @click="resetFilters()" class="inline-block px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                        <?php echo esc_html( $t['reset_filters'] ); ?>
                    </button>
                </div>

                <!-- Load More -->
                <div x-show="hasMore && !loading" class="flex flex-col items-center mt-12">
                    <button @click="loadMore()" class="flex items-center gap-2 px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-semibold hover:bg-white/10 transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <?php echo esc_html( $t['load_more'] ); ?>
                    </button>
                    <p class="text-sm text-white/40 mt-3">
                        <?php echo esc_html( $t['showing_of'] ); ?> <span x-text="displayedArtists.length"></span> <?php echo esc_html( $t['of'] ); ?> <span x-text="filteredArtists.length"></span> <?php echo esc_html( $t['artists_label'] ); ?>
                    </p>
                </div>

                <!-- Loading More Indicator -->
                <div x-show="loadingMore" class="flex justify-center mt-8">
                    <svg class="animate-spin h-8 w-8 text-violet-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>

            </div>
        </section>

    </div>

    <!-- ==================== CTA SECTION ==================== -->
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-pink-600/20 via-violet-600/20 to-cyan-600/20 border border-white/10 p-8 lg:p-12">
                <div class="absolute inset-0 opacity-30">
                    <div class="absolute top-0 right-0 w-96 h-96 bg-pink-500/20 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 w-80 h-80 bg-violet-500/20 rounded-full blur-3xl"></div>
                </div>

                <div class="relative text-center max-w-2xl mx-auto">
                    <h2 class="text-2xl lg:text-4xl font-bold text-white mb-4">
                        <?php echo esc_html( $t['are_you_artist'] ); ?>
                    </h2>
                    <p class="text-white/60 text-lg mb-8">
                        <?php echo esc_html( $t['cta_subtitle'] ); ?>
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="<?php echo esc_url( home_url( '/signup/' ) ); ?>" class="px-8 py-4 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/25 transition-all duration-300">
                            <?php echo esc_html( $t['register_as_artist'] ); ?>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/pentru-artisti/' ) ); ?>" class="px-8 py-4 rounded-xl bg-white/10 border border-white/20 text-white font-semibold hover:bg-white/20 transition-all duration-300">
                            <?php echo esc_html( $t['learn_more'] ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('tixelloArtistsDirectory', () => ({
                allArtists: [],
                genres: <?php echo wp_json_encode( $js_genres ); ?>,
                totalFromApi: 0,
                currentPage: 1,
                lastPage: 1,
                perPage: 48,
                loading: true,
                loadingMore: false,
                search: '',
                activeLetter: '<?php echo esc_js( $url_letter ?: 'all' ); ?>',
                activeGenre: '<?php echo esc_js( urldecode( $url_genre ) ?: 'all' ); ?>',
                viewMode: 'grid',
                displayCount: 48,
                ajaxUrl: '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>',

                init() {
                    this.loadArtists();
                },

                async loadArtists(append = false) {
                    if (append) {
                        this.loadingMore = true;
                    } else {
                        this.loading = true;
                        if (!append) {
                            this.allArtists = [];
                            this.currentPage = 1;
                        }
                    }

                    const params = new URLSearchParams({
                        action: 'tixello_load_artists',
                        page: this.currentPage,
                    });

                    // Only send letter filter to API if not searching
                    if (this.activeLetter && this.activeLetter !== 'all' && !this.search.trim()) {
                        params.append('letter', this.activeLetter);
                    }

                    try {
                        const response = await fetch(`${this.ajaxUrl}?${params.toString()}`);
                        const result = await response.json();

                        if (result.success) {
                            if (append) {
                                this.allArtists = [...this.allArtists, ...result.data.artists];
                            } else {
                                this.allArtists = result.data.artists;
                            }

                            if (result.data.pagination) {
                                this.totalFromApi = result.data.pagination.total || this.allArtists.length;
                                this.lastPage = result.data.pagination.last_page || 1;
                                this.currentPage = result.data.pagination.current_page || 1;
                            }

                            // Extract genres from artists if we don't have them
                            if (this.genres.length === 0) {
                                const genreSet = new Set();
                                this.allArtists.forEach(a => {
                                    if (a.genres) {
                                        a.genres.forEach(g => genreSet.add(g));
                                    }
                                });
                                this.genres = Array.from(genreSet).sort();
                            }

                            this.updateFilteredCount();
                        }
                    } catch (error) {
                        console.error('Error loading artists:', error);
                    } finally {
                        this.loading = false;
                        this.loadingMore = false;
                    }
                },

                get filteredArtists() {
                    let list = [...this.allArtists];
                    const searchTerm = this.search.trim().toLowerCase();

                    // Search filter (client-side)
                    if (searchTerm) {
                        list = list.filter(a => {
                            const haystack = [
                                a.name || '',
                                a.city || '',
                                a.country || '',
                                ...(a.genres || [])
                            ].join(' ').toLowerCase();
                            return haystack.includes(searchTerm);
                        });
                    }

                    // Letter filter (client-side when searching)
                    if (this.activeLetter !== 'all' && searchTerm) {
                        list = list.filter(a => {
                            const firstChar = (a.name || '').charAt(0).toUpperCase();
                            if (this.activeLetter === '#') {
                                return /[0-9]/.test(firstChar);
                            }
                            return firstChar === this.activeLetter;
                        });
                    }

                    // Genre filter (client-side)
                    if (this.activeGenre !== 'all') {
                        list = list.filter(a => {
                            return a.genres && a.genres.some(g =>
                                g.toLowerCase() === this.activeGenre.toLowerCase()
                            );
                        });
                    }

                    return list;
                },

                get displayedArtists() {
                    return this.filteredArtists.slice(0, this.displayCount);
                },

                get hasMore() {
                    // Has more if: more filtered results to show OR more pages to load from API
                    return this.displayCount < this.filteredArtists.length || this.currentPage < this.lastPage;
                },

                loadMore() {
                    if (this.displayCount < this.filteredArtists.length) {
                        // Show more from current data
                        this.displayCount += 48;
                    } else if (this.currentPage < this.lastPage) {
                        // Fetch next page from API
                        this.currentPage++;
                        this.loadArtists(true);
                    }
                },

                setLetter(letter) {
                    this.activeLetter = letter;
                    this.displayCount = 48;

                    // If searching, filter client-side
                    if (this.search.trim()) {
                        this.updateFilteredCount();
                    } else {
                        // Otherwise reload from API
                        this.loadArtists();
                    }
                },

                setGenre(genre) {
                    this.activeGenre = genre;
                    this.displayCount = 48;
                    this.updateFilteredCount();
                },

                filterArtists() {
                    this.displayCount = 48;
                    this.updateFilteredCount();
                },

                resetFilters() {
                    this.search = '';
                    this.activeLetter = 'all';
                    this.activeGenre = 'all';
                    this.displayCount = 48;
                    this.loadArtists();
                },

                updateFilteredCount() {
                    const el = document.getElementById('filtered-count');
                    if (el) {
                        el.textContent = this.filteredArtists.length;
                    }
                }
            }));
        });
    </script>
</main>

<?php
get_footer();
?>
