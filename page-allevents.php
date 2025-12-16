<?php
/**
 * Template Name: Tixello – Events Page (Dark)
 *
 * Dark theme events page with search, filters, and category sections
 */

get_header();

// Get all events for featured section
$events_raw = tixello_fetch_events_core();
$STORAGE_BASE = 'https://core.tixello.com/storage/';

$full_storage_url = function( $path ) use ( $STORAGE_BASE ) {
    if ( empty( $path ) ) return '';
    if ( preg_match( '#^https?://#i', $path ) ) return esc_url( $path );
    return esc_url( $STORAGE_BASE . ltrim( $path, '/' ) );
};

// Get first 2 events for featured section
$featured_events = array_slice( $events_raw, 0, 2 );

// Define event categories with their types
$event_categories = [
    'music' => [
        'icon' => '🎵',
        'title' => 'Music & Concerts',
        'subtitle' => 'Concert, Festival, Club Night, Open Air',
        'types' => 'Concert, Music Festival, Recital, Symphonic Concert, Chamber Concert, Club Night / DJ Set, Open Air / Outdoor, Acoustic Concert, Choral Concert'
    ],
    'theater' => [
        'icon' => '🎭',
        'title' => 'Theater & Dance',
        'subtitle' => 'Theater Play, Musical, Opera, Ballet',
        'types' => 'Theater Play, Musical, Opera, Operetta, Ballet, Contemporary Dance, Circus Show, Improvisation, Pantomime, Pupettry / Marrionettes'
    ],
    'comedy' => [
        'icon' => '😂',
        'title' => 'Comedy & Entertainment',
        'subtitle' => 'Stand-up, One-man Show, Magic',
        'types' => 'Stand-up Comedy, One-man Show, Sketch Comedy, Roast, Variety / Cabaret, Magic / Illusion, Mentalism'
    ],
    'film' => [
        'icon' => '🎬',
        'title' => 'Film & Cinema',
        'subtitle' => 'Premiere, Festival, Documentary',
        'types' => 'Film Premiere, Film Festival, Special Screening, Documentary, Cine-concert'
    ],
    'literature' => [
        'icon' => '📚',
        'title' => 'Literature & Poetry',
        'subtitle' => 'Book Launch, Reading, Poetry Slam',
        'types' => 'Book Launch, Public Reading, Poetry Slam, Spoken Word, Book Fair'
    ],
    'visual' => [
        'icon' => '🎨',
        'title' => 'Visual Arts',
        'subtitle' => 'Exhibition, Installation, Digital Art',
        'types' => 'Vernissage / Exhibition, Art Installation, Performance Art, Digital Art / New Media, Street Art'
    ],
    'conferences' => [
        'icon' => '💼',
        'title' => 'Conferences & Business',
        'subtitle' => 'Conference, Summit, Expo, Networking',
        'types' => 'Conference, Seminar, Workshop, Networking Event, Summit, Hackathon, Pitch / Demo Day, Trade fair / Expo'
    ],
    'education' => [
        'icon' => '📖',
        'title' => 'Education & Learning',
        'subtitle' => 'Course, Masterclass, Webinar',
        'types' => 'Course / Training, Masterclass, Webinar, Guided Tour, Lecture / Talk'
    ]
];
?>

<div class="bg-zinc-950 text-zinc-200 min-h-screen" x-data="eventsPage()">

    <!-- ==================== HERO SECTION ==================== -->
    <section class="relative overflow-hidden">
        <!-- Background effects -->
        <div class="absolute inset-0 bg-gradient-to-b from-violet-600/5 via-transparent to-transparent"></div>
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-violet-600/10 rounded-full blur-3xl"></div>
        <div class="absolute top-20 right-1/4 w-80 h-80 bg-cyan-600/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-8">
            <!-- Title -->
            <div class="max-w-3xl mb-8">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-pink-500/10 border border-pink-500/20 mb-6">
                    <span class="text-lg">🎫</span>
                    <span class="text-sm font-medium text-pink-400"><?php esc_html_e( 'Discover Events', 'tixello' ); ?></span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                    <?php esc_html_e( 'Events', 'tixello' ); ?>
                </h1>

                <p class="text-lg sm:text-xl text-white/60 leading-relaxed">
                    <?php esc_html_e( 'Discover concerts, festivals, theater shows, and more. Find your next unforgettable experience.', 'tixello' ); ?>
                </p>
            </div>

            <!-- Stats Bar -->
            <?php echo do_shortcode('[tixello_stats_cards theme="dark" show_caption="no"]'); ?>
        </div>
    </section>

    <!-- ==================== SEARCH & FILTERS BAR ==================== -->
    <section class="sticky top-20 z-40 bg-zinc-950/95 backdrop-blur-xl border-y border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-col lg:flex-row gap-4">

                <!-- Search -->
                <div class="relative flex-1">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input type="text"
                           x-model="searchQuery"
                           @input.debounce.300ms="performSearch"
                           placeholder="<?php esc_attr_e( 'Search events, artists, venues...', 'tixello' ); ?>"
                           class="w-full pl-12 pr-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/40 focus:outline-none focus:border-violet-500/50 focus:bg-white/10 transition-all">
                </div>

                <!-- Date Range -->
                <div class="flex items-center gap-2">
                    <button @click="showDatePicker = !showDatePicker"
                            class="flex items-center gap-2 px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white/70 hover:text-white hover:bg-white/10 transition-all"
                            :class="selectedDate !== 'any' && 'bg-violet-600/20 border-violet-500/30 text-violet-400'">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-sm font-medium" x-text="dateLabel"></span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                </div>

                <!-- Location -->
                <div class="flex items-center gap-2">
                    <button @click="showLocationPicker = !showLocationPicker"
                            class="flex items-center gap-2 px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white/70 hover:text-white hover:bg-white/10 transition-all"
                            :class="selectedLocation !== 'any' && 'bg-violet-600/20 border-violet-500/30 text-violet-400'">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-sm font-medium" x-text="locationLabel"></span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                </div>

                <!-- More Filters -->
                <button @click="showFilters = !showFilters"
                        class="flex items-center gap-2 px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white/70 hover:text-white hover:bg-white/10 transition-all"
                        :class="showFilters && 'bg-violet-600/20 border-violet-500/30 text-violet-400'">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    <span class="text-sm font-medium"><?php esc_html_e( 'Filters', 'tixello' ); ?></span>
                </button>

                <!-- View Toggle -->
                <div class="hidden sm:flex items-center gap-1 p-1 rounded-lg bg-white/5 border border-white/10">
                    <button @click="viewMode = 'grid'"
                            class="p-2 rounded-md transition-colors"
                            :class="viewMode === 'grid' ? 'bg-violet-600 text-white' : 'text-white/40 hover:text-white hover:bg-white/10'">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                    </button>
                    <button @click="viewMode = 'calendar'"
                            class="p-2 rounded-md transition-colors"
                            :class="viewMode === 'calendar' ? 'bg-violet-600 text-white' : 'text-white/40 hover:text-white hover:bg-white/10'">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </button>
                    <button @click="viewMode = 'list'"
                            class="p-2 rounded-md transition-colors"
                            :class="viewMode === 'list' ? 'bg-violet-600 text-white' : 'text-white/40 hover:text-white hover:bg-white/10'">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Extended Filters Panel -->
            <div x-show="showFilters"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-2"
                 class="mt-4 p-4 rounded-xl bg-zinc-900/50 border border-white/5"
                 style="display: none;">

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Price Range -->
                    <div>
                        <label class="block text-xs text-white/50 uppercase tracking-wider mb-2"><?php esc_html_e( 'Price Range', 'tixello' ); ?></label>
                        <select x-model="priceRange" class="w-full px-4 py-2.5 rounded-lg bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-violet-500/50">
                            <option value="any"><?php esc_html_e( 'Any Price', 'tixello' ); ?></option>
                            <option value="free"><?php esc_html_e( 'Free', 'tixello' ); ?></option>
                            <option value="0-50"><?php esc_html_e( 'Under 50 RON', 'tixello' ); ?></option>
                            <option value="50-100">50 - 100 RON</option>
                            <option value="100-200">100 - 200 RON</option>
                            <option value="200+">200+ RON</option>
                        </select>
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-xs text-white/50 uppercase tracking-wider mb-2"><?php esc_html_e( 'Category', 'tixello' ); ?></label>
                        <select x-model="selectedCategory" class="w-full px-4 py-2.5 rounded-lg bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-violet-500/50">
                            <option value="all"><?php esc_html_e( 'All Categories', 'tixello' ); ?></option>
                            <option value="music">🎵 <?php esc_html_e( 'Music & Concerts', 'tixello' ); ?></option>
                            <option value="theater">🎭 <?php esc_html_e( 'Theater & Dance', 'tixello' ); ?></option>
                            <option value="comedy">😂 <?php esc_html_e( 'Comedy', 'tixello' ); ?></option>
                            <option value="film">🎬 <?php esc_html_e( 'Film & Cinema', 'tixello' ); ?></option>
                            <option value="literature">📚 <?php esc_html_e( 'Literature', 'tixello' ); ?></option>
                            <option value="visual">🎨 <?php esc_html_e( 'Visual Arts', 'tixello' ); ?></option>
                            <option value="conferences">💼 <?php esc_html_e( 'Conferences', 'tixello' ); ?></option>
                            <option value="education">📖 <?php esc_html_e( 'Education', 'tixello' ); ?></option>
                        </select>
                    </div>

                    <!-- Genre -->
                    <div>
                        <label class="block text-xs text-white/50 uppercase tracking-wider mb-2"><?php esc_html_e( 'Genre', 'tixello' ); ?></label>
                        <select x-model="selectedGenre" class="w-full px-4 py-2.5 rounded-lg bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-violet-500/50">
                            <option value="all"><?php esc_html_e( 'All Genres', 'tixello' ); ?></option>
                            <option value="rock">Rock</option>
                            <option value="pop">Pop</option>
                            <option value="electronic">Electronic</option>
                            <option value="classical">Classical</option>
                            <option value="jazz">Jazz</option>
                            <option value="hiphop">Hip Hop</option>
                            <option value="metal">Metal</option>
                        </select>
                    </div>

                    <!-- Sort By -->
                    <div>
                        <label class="block text-xs text-white/50 uppercase tracking-wider mb-2"><?php esc_html_e( 'Sort By', 'tixello' ); ?></label>
                        <select x-model="sortBy" class="w-full px-4 py-2.5 rounded-lg bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-violet-500/50">
                            <option value="date_asc"><?php esc_html_e( 'Date (Soonest)', 'tixello' ); ?></option>
                            <option value="date_desc"><?php esc_html_e( 'Date (Latest)', 'tixello' ); ?></option>
                            <option value="price_asc"><?php esc_html_e( 'Price (Low to High)', 'tixello' ); ?></option>
                            <option value="price_desc"><?php esc_html_e( 'Price (High to Low)', 'tixello' ); ?></option>
                            <option value="popularity"><?php esc_html_e( 'Popularity', 'tixello' ); ?></option>
                            <option value="recent"><?php esc_html_e( 'Recently Added', 'tixello' ); ?></option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center justify-between mt-4 pt-4 border-t border-white/5">
                    <button @click="clearFilters" class="text-sm text-white/50 hover:text-white transition-colors">
                        <?php esc_html_e( 'Clear all filters', 'tixello' ); ?>
                    </button>
                    <button @click="applyFilters" class="px-6 py-2 rounded-lg bg-violet-600 text-white text-sm font-semibold hover:bg-violet-500 transition-colors">
                        <?php esc_html_e( 'Apply Filters', 'tixello' ); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CATEGORY TABS ==================== -->
    <section class="border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 py-4 overflow-x-auto scrollbar-hide">
                <button @click="activeTab = 'all'"
                        class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium transition-colors"
                        :class="activeTab === 'all' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/70 hover:bg-white/10 hover:text-white'">
                    <?php esc_html_e( 'All Events', 'tixello' ); ?>
                </button>
                <?php foreach ( $event_categories as $key => $cat ) : ?>
                    <button @click="activeTab = '<?php echo esc_attr( $key ); ?>'"
                            class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium transition-colors"
                            :class="activeTab === '<?php echo esc_attr( $key ); ?>' ? 'bg-violet-600 text-white' : 'bg-white/5 text-white/70 hover:bg-white/10 hover:text-white'">
                        <?php echo esc_html( $cat['icon'] . ' ' . $cat['title'] ); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ==================== SEARCH RESULTS (shown when searching) ==================== -->
    <section x-show="searchQuery.length > 0" x-cloak class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-white"><?php esc_html_e( 'Search Results', 'tixello' ); ?></h2>
                    <p class="text-white/50 mt-1" x-text="'Results for: ' + searchQuery"></p>
                </div>
            </div>

            <!-- Search Results Container -->
            <div id="search-results" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Results loaded via AJAX -->
                <template x-if="isSearching">
                    <div class="col-span-full flex items-center justify-center py-12">
                        <svg class="animate-spin h-8 w-8 text-violet-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </template>
                <template x-if="!isSearching && searchResults.length === 0 && searchQuery.length > 0">
                    <div class="col-span-full flex flex-col items-center justify-center py-16 text-center">
                        <div class="w-20 h-20 rounded-2xl bg-white/5 flex items-center justify-center mb-4">
                            <span class="text-4xl opacity-50">🔍</span>
                        </div>
                        <h3 class="text-lg font-medium text-white/70 mb-2"><?php esc_html_e( 'No results found', 'tixello' ); ?></h3>
                        <p class="text-sm text-white/40 max-w-md">
                            <?php esc_html_e( 'Try adjusting your search or filters to find what you\'re looking for.', 'tixello' ); ?>
                        </p>
                    </div>
                </template>
                <template x-for="event in searchResults" :key="event.id">
                    <a :href="event.url" class="group relative bg-zinc-900/50 rounded-2xl border border-white/5 overflow-hidden hover:border-violet-500/30 transition-all">
                        <div class="aspect-[3/4] relative overflow-hidden">
                            <img :src="event.poster" :alt="event.title" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-900 via-transparent to-transparent"></div>
                            <div class="absolute top-3 left-3 flex flex-col items-center px-3 py-2 rounded-xl bg-violet-600 text-white">
                                <span class="text-xs font-medium uppercase" x-text="event.date_month"></span>
                                <span class="text-xl font-bold leading-none" x-text="event.date_day"></span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-white group-hover:text-violet-400 transition-colors mb-1 line-clamp-2" x-text="event.title"></h3>
                            <div class="flex items-center gap-2 text-sm text-white/50 mb-3" x-show="event.venue">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                                <span class="truncate" x-text="event.venue"></span>
                            </div>
                            <div class="flex items-center justify-between pt-3 border-t border-white/5">
                                <span class="text-sm text-white/40">from</span>
                                <span class="text-lg font-bold text-white" x-text="event.price"></span>
                            </div>
                        </div>
                    </a>
                </template>
            </div>
        </div>
    </section>

    <!-- ==================== FEATURED EVENTS ==================== -->
    <section x-show="searchQuery.length === 0 && activeTab === 'all'" class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-white"><?php esc_html_e( 'Featured Events', 'tixello' ); ?></h2>
                    <p class="text-white/50 mt-1"><?php esc_html_e( 'Don\'t miss these popular events', 'tixello' ); ?></p>
                </div>
                <a href="#all-events" class="hidden sm:inline-flex items-center gap-2 text-sm text-violet-400 hover:text-violet-300 transition-colors">
                    <?php esc_html_e( 'View all', 'tixello' ); ?>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <!-- Featured Grid - Large cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <?php foreach ( $featured_events as $index => $ev ) :
                    $poster_url = $full_storage_url( isset( $ev['poster_url'] ) ? $ev['poster_url'] : '' );
                    $title = isset( $ev['title'] ) ? $ev['title'] : '';
                    $start_date = isset( $ev['start_date'] ) ? $ev['start_date'] : '';
                    $start_time = isset( $ev['start_time'] ) ? substr( $ev['start_time'], 0, 5 ) : '';
                    $price_from = isset( $ev['price_from'] ) ? $ev['price_from'] : null;
                    $venue_name = isset( $ev['venue']['name'] ) ? $ev['venue']['name'] : '';
                    $venue_city = isset( $ev['venue']['city'] ) ? $ev['venue']['city'] : '';

                    $date_obj = $start_date ? DateTime::createFromFormat( 'Y-m-d', $start_date ) : null;
                    $date_month = $date_obj ? $date_obj->format( 'M' ) : '';
                    $date_day = $date_obj ? $date_obj->format( 'd' ) : '';

                    $event_url = ! empty( $ev['slug'] ) ? home_url( '/events/' . $ev['slug'] . '/' ) : '#';

                    $badge_class = $index === 0 ? 'bg-violet-600' : 'bg-pink-600';
                    $badge_text = $index === 0 ? '⭐ Featured' : '🔥 Hot';
                ?>
                    <a href="<?php echo esc_url( $event_url ); ?>" class="group relative rounded-2xl overflow-hidden aspect-[16/9] lg:aspect-[4/3]">
                        <?php if ( $poster_url ) : ?>
                            <img src="<?php echo esc_url( $poster_url ); ?>"
                                 alt="<?php echo esc_attr( $title ); ?>"
                                 class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <?php else : ?>
                            <div class="absolute inset-0 bg-zinc-800"></div>
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>

                        <!-- Badges -->
                        <div class="absolute top-4 left-4 flex items-center gap-2">
                            <span class="px-3 py-1 rounded-lg <?php echo esc_attr( $badge_class ); ?> text-white text-xs font-semibold">
                                <?php echo esc_html( $badge_text ); ?>
                            </span>
                        </div>

                        <!-- Date Badge -->
                        <?php if ( $date_month && $date_day ) : ?>
                            <div class="absolute top-4 right-4 flex flex-col items-center px-3 py-2 rounded-xl bg-white text-zinc-900">
                                <span class="text-xs font-semibold uppercase"><?php echo esc_html( $date_month ); ?></span>
                                <span class="text-2xl font-bold leading-none"><?php echo esc_html( $date_day ); ?></span>
                            </div>
                        <?php endif; ?>

                        <!-- Content -->
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-2xl lg:text-3xl font-bold text-white mb-2 group-hover:text-violet-300 transition-colors">
                                <?php echo esc_html( $title ); ?>
                            </h3>
                            <div class="flex flex-wrap items-center gap-4 text-white/80 mb-4">
                                <?php if ( $start_time ) : ?>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-sm"><?php echo esc_html( $start_time ); ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $venue_name ) : ?>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        <span class="text-sm"><?php echo esc_html( $venue_name . ( $venue_city ? ', ' . $venue_city : '' ) ); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-sm text-white/50"><?php esc_html_e( 'From', 'tixello' ); ?></span>
                                    <span class="text-xl font-bold text-white ml-2">
                                        <?php if ( is_null( $price_from ) || $price_from == 0 ) : ?>
                                            FREE
                                        <?php else : ?>
                                            <?php echo esc_html( $price_from ); ?> RON
                                        <?php endif; ?>
                                    </span>
                                </div>
                                <span class="px-4 py-2 rounded-lg bg-white/20 backdrop-blur-sm text-white text-sm font-medium group-hover:bg-violet-600 transition-colors">
                                    <?php esc_html_e( 'Get Tickets', 'tixello' ); ?> →
                                </span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ==================== CATEGORY SECTIONS ==================== -->
    <?php foreach ( $event_categories as $key => $cat ) : ?>
        <section x-show="searchQuery.length === 0 && (activeTab === 'all' || activeTab === '<?php echo esc_attr( $key ); ?>')"
                 class="py-12 border-t border-white/5"
                 id="<?php echo esc_attr( $key ); ?>">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <?php
                echo do_shortcode( sprintf(
                    '[tixello_events type="%s" title="%s" theme="dark" icon="%s" subtitle="%s" cols="4" limit="4"]',
                    esc_attr( $cat['types'] ),
                    esc_attr( $cat['title'] ),
                    esc_attr( $cat['icon'] ),
                    esc_attr( $cat['subtitle'] )
                ) );
                ?>
            </div>
        </section>
    <?php endforeach; ?>

    <!-- ==================== CTA SECTION ==================== -->
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-violet-600/20 via-pink-600/20 to-cyan-600/20 border border-white/10 p-8 lg:p-12">
                <div class="absolute inset-0 opacity-30">
                    <div class="absolute top-0 right-0 w-96 h-96 bg-violet-500/20 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 w-80 h-80 bg-cyan-500/20 rounded-full blur-3xl"></div>
                </div>

                <div class="relative flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
                    <div class="max-w-xl">
                        <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4">
                            <?php esc_html_e( 'Can\'t find what you\'re looking for?', 'tixello' ); ?>
                        </h2>
                        <p class="text-white/60 text-lg">
                            <?php esc_html_e( 'Subscribe to our newsletter and be the first to know about new events in your area.', 'tixello' ); ?>
                        </p>
                    </div>
                    <form class="flex flex-col sm:flex-row gap-4" action="#" method="post">
                        <input type="email"
                               name="email"
                               placeholder="<?php esc_attr_e( 'your@email.com', 'tixello' ); ?>"
                               class="px-6 py-4 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:outline-none focus:border-violet-500/50 transition-all">
                        <button type="submit" class="px-8 py-4 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/25 transition-all duration-300 whitespace-nowrap">
                            <?php esc_html_e( 'Notify Me', 'tixello' ); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
function eventsPage() {
    return {
        // Search
        searchQuery: '',
        searchResults: [],
        isSearching: false,

        // Filters
        showFilters: false,
        showDatePicker: false,
        showLocationPicker: false,
        selectedDate: 'any',
        selectedLocation: 'any',
        priceRange: 'any',
        selectedCategory: 'all',
        selectedGenre: 'all',
        sortBy: 'date_asc',

        // View
        viewMode: 'grid',
        activeTab: 'all',

        // Computed labels
        get dateLabel() {
            const labels = {
                'any': '<?php esc_html_e( 'Any Date', 'tixello' ); ?>',
                'today': '<?php esc_html_e( 'Today', 'tixello' ); ?>',
                'tomorrow': '<?php esc_html_e( 'Tomorrow', 'tixello' ); ?>',
                'weekend': '<?php esc_html_e( 'This Weekend', 'tixello' ); ?>',
                'week': '<?php esc_html_e( 'This Week', 'tixello' ); ?>',
                'month': '<?php esc_html_e( 'This Month', 'tixello' ); ?>'
            };
            return labels[this.selectedDate] || '<?php esc_html_e( 'Any Date', 'tixello' ); ?>';
        },

        get locationLabel() {
            return this.selectedLocation === 'any' ? '<?php esc_html_e( 'Any Location', 'tixello' ); ?>' : this.selectedLocation;
        },

        // Methods
        performSearch() {
            if (this.searchQuery.length < 2) {
                this.searchResults = [];
                return;
            }

            this.isSearching = true;

            // AJAX search
            fetch('<?php echo admin_url( 'admin-ajax.php' ); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    action: 'tixello_search_events',
                    query: this.searchQuery,
                    nonce: '<?php echo wp_create_nonce( 'tixello_search_nonce' ); ?>'
                })
            })
            .then(response => response.json())
            .then(data => {
                this.isSearching = false;
                if (data.success) {
                    this.searchResults = data.data;
                } else {
                    this.searchResults = [];
                }
            })
            .catch(error => {
                this.isSearching = false;
                this.searchResults = [];
                console.error('Search error:', error);
            });
        },

        clearFilters() {
            this.selectedDate = 'any';
            this.selectedLocation = 'any';
            this.priceRange = 'any';
            this.selectedCategory = 'all';
            this.selectedGenre = 'all';
            this.sortBy = 'date_asc';
        },

        applyFilters() {
            // Build URL with filters and redirect
            const params = new URLSearchParams();
            if (this.selectedDate !== 'any') params.append('date', this.selectedDate);
            if (this.selectedLocation !== 'any') params.append('location', this.selectedLocation);
            if (this.priceRange !== 'any') params.append('price', this.priceRange);
            if (this.selectedCategory !== 'all') params.append('category', this.selectedCategory);
            if (this.selectedGenre !== 'all') params.append('genre', this.selectedGenre);
            if (this.sortBy !== 'date_asc') params.append('sort', this.sortBy);

            const queryString = params.toString();
            if (queryString) {
                window.location.href = '<?php echo esc_url( home_url( '/search/' ) ); ?>?' + queryString;
            }

            this.showFilters = false;
        }
    }
}
</script>

<style>
[x-cloak] { display: none !important; }
.scrollbar-hide::-webkit-scrollbar { display: none; }
.scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<?php get_footer(); ?>
