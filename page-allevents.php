<?php
/**
 * Template Name: Tixello – Events Page (Dark)
 *
 * Dark theme events page with search, filters, and category sections
 */

get_header();

// Detectare limba curentă (Polylang)
$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'en';

// Array cu traduceri
$t = [
    // Hero
    'badge' => $current_lang === 'ro' ? 'Descoperă Evenimente' : 'Discover Events',
    'title' => $current_lang === 'ro' ? 'Evenimente' : 'Events',
    'subtitle' => $current_lang === 'ro'
        ? 'Descoperă concerte, festivaluri, spectacole de teatru și multe altele. Găsește următoarea ta experiență de neuitat.'
        : 'Discover concerts, festivals, theater shows, and more. Find your next unforgettable experience.',

    // Search & Filters
    'search_placeholder' => $current_lang === 'ro' ? 'Caută evenimente, artiști, locații...' : 'Search events, artists, venues...',
    'filters' => $current_lang === 'ro' ? 'Filtre' : 'Filters',
    'price_range' => $current_lang === 'ro' ? 'Interval Preț' : 'Price Range',
    'any_price' => $current_lang === 'ro' ? 'Orice Preț' : 'Any Price',
    'free' => $current_lang === 'ro' ? 'Gratuit' : 'Free',
    'under_50' => $current_lang === 'ro' ? 'Sub 50 RON' : 'Under 50 RON',
    'category' => $current_lang === 'ro' ? 'Categorie' : 'Category',
    'all_categories' => $current_lang === 'ro' ? 'Toate Categoriile' : 'All Categories',
    'genre' => $current_lang === 'ro' ? 'Gen' : 'Genre',
    'all_genres' => $current_lang === 'ro' ? 'Toate Genurile' : 'All Genres',
    'sort_by' => $current_lang === 'ro' ? 'Sortează După' : 'Sort By',
    'date_soonest' => $current_lang === 'ro' ? 'Dată (Cele mai apropiate)' : 'Date (Soonest)',
    'date_latest' => $current_lang === 'ro' ? 'Dată (Cele mai îndepărtate)' : 'Date (Latest)',
    'price_low_high' => $current_lang === 'ro' ? 'Preț (Mic la Mare)' : 'Price (Low to High)',
    'price_high_low' => $current_lang === 'ro' ? 'Preț (Mare la Mic)' : 'Price (High to Low)',
    'popularity' => $current_lang === 'ro' ? 'Popularitate' : 'Popularity',
    'recently_added' => $current_lang === 'ro' ? 'Recent Adăugate' : 'Recently Added',
    'clear_filters' => $current_lang === 'ro' ? 'Șterge toate filtrele' : 'Clear all filters',
    'apply_filters' => $current_lang === 'ro' ? 'Aplică Filtre' : 'Apply Filters',
    'all_events' => $current_lang === 'ro' ? 'Toate Evenimentele' : 'All Events',

    // Categories
    'music_concerts' => $current_lang === 'ro' ? 'Muzică & Concerte' : 'Music & Concerts',
    'theater_dance' => $current_lang === 'ro' ? 'Teatru & Dans' : 'Theater & Dance',
    'comedy' => $current_lang === 'ro' ? 'Comedie' : 'Comedy',
    'film_cinema' => $current_lang === 'ro' ? 'Film & Cinema' : 'Film & Cinema',
    'literature' => $current_lang === 'ro' ? 'Literatură' : 'Literature',
    'visual_arts' => $current_lang === 'ro' ? 'Arte Vizuale' : 'Visual Arts',
    'conferences' => $current_lang === 'ro' ? 'Conferințe' : 'Conferences',
    'education' => $current_lang === 'ro' ? 'Educație' : 'Education',

    // Search Results
    'search_results' => $current_lang === 'ro' ? 'Rezultate Căutare' : 'Search Results',
    'results_for' => $current_lang === 'ro' ? 'Rezultate pentru: ' : 'Results for: ',
    'no_results' => $current_lang === 'ro' ? 'Niciun rezultat găsit' : 'No results found',
    'no_results_hint' => $current_lang === 'ro'
        ? 'Încearcă să ajustezi căutarea sau filtrele pentru a găsi ceea ce cauți.'
        : 'Try adjusting your search or filters to find what you\'re looking for.',

    // Featured Events
    'featured_events' => $current_lang === 'ro' ? 'Evenimente Recomandate' : 'Featured Events',
    'featured_subtitle' => $current_lang === 'ro' ? 'Nu rata aceste evenimente populare' : 'Don\'t miss these popular events',
    'view_all' => $current_lang === 'ro' ? 'Vezi toate' : 'View all',
    'from' => $current_lang === 'ro' ? 'De la' : 'From',
    'get_tickets' => $current_lang === 'ro' ? 'Cumpără Bilete' : 'Get Tickets',

    // CTA Section
    'cta_title' => $current_lang === 'ro' ? 'Nu găsești ce cauți?' : 'Can\'t find what you\'re looking for?',
    'cta_subtitle' => $current_lang === 'ro'
        ? 'Abonează-te la newsletter și fii primul care află despre evenimente noi din zona ta.'
        : 'Subscribe to our newsletter and be the first to know about new events in your area.',
    'notify_me' => $current_lang === 'ro' ? 'Notifică-mă' : 'Notify Me',

    // Date Labels (for JS)
    'any_date' => $current_lang === 'ro' ? 'Orice Dată' : 'Any Date',
    'today' => $current_lang === 'ro' ? 'Astăzi' : 'Today',
    'tomorrow' => $current_lang === 'ro' ? 'Mâine' : 'Tomorrow',
    'this_weekend' => $current_lang === 'ro' ? 'Weekend-ul Acesta' : 'This Weekend',
    'this_week' => $current_lang === 'ro' ? 'Săptămâna Aceasta' : 'This Week',
    'this_month' => $current_lang === 'ro' ? 'Luna Aceasta' : 'This Month',
    'any_location' => $current_lang === 'ro' ? 'Orice Locație' : 'Any Location',
];

// Categorii evenimente cu traduceri
$event_categories = $current_lang === 'ro' ? [
    'music' => [
        'icon' => '🎵',
        'title' => 'Muzică & Concerte',
        'subtitle' => 'Concert, Festival, Club Night, Open Air',
        'types' => 'Concert, Music Festival, Recital, Symphonic Concert, Chamber Concert, Club Night / DJ Set, Open Air / Outdoor, Acoustic Concert, Choral Concert'
    ],
    'theater' => [
        'icon' => '🎭',
        'title' => 'Teatru & Dans',
        'subtitle' => 'Piesă de Teatru, Musical, Operă, Balet',
        'types' => 'Theater Play, Musical, Opera, Operetta, Ballet, Contemporary Dance, Circus Show, Improvisation, Pantomime, Pupettry / Marrionettes'
    ],
    'comedy' => [
        'icon' => '😂',
        'title' => 'Comedie & Entertainment',
        'subtitle' => 'Stand-up, One-man Show, Magie',
        'types' => 'Stand-up Comedy, One-man Show, Sketch Comedy, Roast, Variety / Cabaret, Magic / Illusion, Mentalism'
    ],
    'film' => [
        'icon' => '🎬',
        'title' => 'Film & Cinema',
        'subtitle' => 'Premieră, Festival, Documentar',
        'types' => 'Film Premiere, Film Festival, Special Screening, Documentary, Cine-concert'
    ],
    'literature' => [
        'icon' => '📚',
        'title' => 'Literatură & Poezie',
        'subtitle' => 'Lansare Carte, Lectură, Poetry Slam',
        'types' => 'Book Launch, Public Reading, Poetry Slam, Spoken Word, Book Fair'
    ],
    'visual' => [
        'icon' => '🎨',
        'title' => 'Arte Vizuale',
        'subtitle' => 'Expoziție, Instalație, Artă Digitală',
        'types' => 'Vernissage / Exhibition, Art Installation, Performance Art, Digital Art / New Media, Street Art'
    ],
    'conferences' => [
        'icon' => '💼',
        'title' => 'Conferințe & Business',
        'subtitle' => 'Conferință, Summit, Expo, Networking',
        'types' => 'Conference, Seminar, Workshop, Networking Event, Summit, Hackathon, Pitch / Demo Day, Trade fair / Expo'
    ],
    'education' => [
        'icon' => '📖',
        'title' => 'Educație & Învățare',
        'subtitle' => 'Curs, Masterclass, Webinar',
        'types' => 'Course / Training, Masterclass, Webinar, Guided Tour, Lecture / Talk'
    ]
] : [
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
                    <span class="text-sm font-medium text-pink-400"><?php echo esc_html( $t['badge'] ); ?></span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                    <?php echo esc_html( $t['title'] ); ?>
                </h1>

                <p class="text-lg sm:text-xl text-white/60 leading-relaxed">
                    <?php echo esc_html( $t['subtitle'] ); ?>
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
                           placeholder="<?php echo esc_attr( $t['search_placeholder'] ); ?>"
                           class="w-full pl-12 pr-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/40 focus:outline-none focus:border-violet-500/50 focus:bg-white/10 transition-all">
                </div>

                <!-- Date Range -->
                <div class="relative">
                    <button @click="showDatePicker = !showDatePicker; showLocationPicker = false"
                            class="flex items-center gap-2 px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white/70 hover:text-white hover:bg-white/10 transition-all"
                            :class="selectedDate !== 'any' && 'bg-violet-600/20 border-violet-500/30 text-violet-400'">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-sm font-medium" x-text="dateLabel"></span>
                        <svg class="w-4 h-4 transition-transform" :class="showDatePicker && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- Date Picker Dropdown -->
                    <div x-show="showDatePicker"
                         @click.away="showDatePicker = false"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-2"
                         class="absolute top-full left-0 mt-2 w-56 rounded-xl bg-zinc-900 border border-white/10 shadow-xl z-50 overflow-hidden"
                         style="display: none;">
                        <button @click="selectedDate = 'any'; showDatePicker = false"
                                class="w-full px-4 py-3 text-left text-sm transition-colors"
                                :class="selectedDate === 'any' ? 'bg-violet-600/20 text-violet-400' : 'text-white/70 hover:bg-white/5 hover:text-white'">
                            <?php echo esc_html( $t['any_date'] ); ?>
                        </button>
                        <button @click="selectedDate = 'today'; showDatePicker = false"
                                class="w-full px-4 py-3 text-left text-sm transition-colors"
                                :class="selectedDate === 'today' ? 'bg-violet-600/20 text-violet-400' : 'text-white/70 hover:bg-white/5 hover:text-white'">
                            <?php echo esc_html( $t['today'] ); ?>
                        </button>
                        <button @click="selectedDate = 'tomorrow'; showDatePicker = false"
                                class="w-full px-4 py-3 text-left text-sm transition-colors"
                                :class="selectedDate === 'tomorrow' ? 'bg-violet-600/20 text-violet-400' : 'text-white/70 hover:bg-white/5 hover:text-white'">
                            <?php echo esc_html( $t['tomorrow'] ); ?>
                        </button>
                        <button @click="selectedDate = 'weekend'; showDatePicker = false"
                                class="w-full px-4 py-3 text-left text-sm transition-colors"
                                :class="selectedDate === 'weekend' ? 'bg-violet-600/20 text-violet-400' : 'text-white/70 hover:bg-white/5 hover:text-white'">
                            <?php echo esc_html( $t['this_weekend'] ); ?>
                        </button>
                        <button @click="selectedDate = 'week'; showDatePicker = false"
                                class="w-full px-4 py-3 text-left text-sm transition-colors"
                                :class="selectedDate === 'week' ? 'bg-violet-600/20 text-violet-400' : 'text-white/70 hover:bg-white/5 hover:text-white'">
                            <?php echo esc_html( $t['this_week'] ); ?>
                        </button>
                        <button @click="selectedDate = 'month'; showDatePicker = false"
                                class="w-full px-4 py-3 text-left text-sm transition-colors"
                                :class="selectedDate === 'month' ? 'bg-violet-600/20 text-violet-400' : 'text-white/70 hover:bg-white/5 hover:text-white'">
                            <?php echo esc_html( $t['this_month'] ); ?>
                        </button>
                    </div>
                </div>

                <!-- Location -->
                <div class="relative">
                    <button @click="showLocationPicker = !showLocationPicker; showDatePicker = false"
                            class="flex items-center gap-2 px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white/70 hover:text-white hover:bg-white/10 transition-all"
                            :class="selectedLocation !== 'any' && 'bg-violet-600/20 border-violet-500/30 text-violet-400'">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-sm font-medium" x-text="locationLabel"></span>
                        <svg class="w-4 h-4 transition-transform" :class="showLocationPicker && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- Location Picker Dropdown -->
                    <div x-show="showLocationPicker"
                         @click.away="showLocationPicker = false"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-2"
                         class="absolute top-full left-0 mt-2 w-56 max-h-80 overflow-y-auto rounded-xl bg-zinc-900 border border-white/10 shadow-xl z-50"
                         style="display: none;">
                        <button @click="selectedLocation = 'any'; showLocationPicker = false"
                                class="w-full px-4 py-3 text-left text-sm transition-colors"
                                :class="selectedLocation === 'any' ? 'bg-violet-600/20 text-violet-400' : 'text-white/70 hover:bg-white/5 hover:text-white'">
                            <?php echo esc_html( $t['any_location'] ); ?>
                        </button>
                        <template x-for="location in availableLocations" :key="location">
                            <button @click="selectedLocation = location; showLocationPicker = false"
                                    class="w-full px-4 py-3 text-left text-sm transition-colors"
                                    :class="selectedLocation === location ? 'bg-violet-600/20 text-violet-400' : 'text-white/70 hover:bg-white/5 hover:text-white'"
                                    x-text="location">
                            </button>
                        </template>
                    </div>
                </div>

                <!-- More Filters -->
                <button @click="showFilters = !showFilters"
                        class="flex items-center gap-2 px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white/70 hover:text-white hover:bg-white/10 transition-all"
                        :class="showFilters && 'bg-violet-600/20 border-violet-500/30 text-violet-400'">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    <span class="text-sm font-medium"><?php echo esc_html( $t['filters'] ); ?></span>
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
                        <label class="block text-xs text-white/50 uppercase tracking-wider mb-2"><?php echo esc_html( $t['price_range'] ); ?></label>
                        <select x-model="priceRange" class="w-full px-4 py-2.5 rounded-lg bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-violet-500/50">
                            <option value="any"><?php echo esc_html( $t['any_price'] ); ?></option>
                            <option value="free"><?php echo esc_html( $t['free'] ); ?></option>
                            <option value="0-50"><?php echo esc_html( $t['under_50'] ); ?></option>
                            <option value="50-100">50 - 100 RON</option>
                            <option value="100-200">100 - 200 RON</option>
                            <option value="200+">200+ RON</option>
                        </select>
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-xs text-white/50 uppercase tracking-wider mb-2"><?php echo esc_html( $t['category'] ); ?></label>
                        <select x-model="selectedCategory" class="w-full px-4 py-2.5 rounded-lg bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-violet-500/50">
                            <option value="all"><?php echo esc_html( $t['all_categories'] ); ?></option>
                            <option value="music">🎵 <?php echo esc_html( $t['music_concerts'] ); ?></option>
                            <option value="theater">🎭 <?php echo esc_html( $t['theater_dance'] ); ?></option>
                            <option value="comedy">😂 <?php echo esc_html( $t['comedy'] ); ?></option>
                            <option value="film">🎬 <?php echo esc_html( $t['film_cinema'] ); ?></option>
                            <option value="literature">📚 <?php echo esc_html( $t['literature'] ); ?></option>
                            <option value="visual">🎨 <?php echo esc_html( $t['visual_arts'] ); ?></option>
                            <option value="conferences">💼 <?php echo esc_html( $t['conferences'] ); ?></option>
                            <option value="education">📖 <?php echo esc_html( $t['education'] ); ?></option>
                        </select>
                    </div>

                    <!-- Genre -->
                    <div>
                        <label class="block text-xs text-white/50 uppercase tracking-wider mb-2"><?php echo esc_html( $t['genre'] ); ?></label>
                        <select x-model="selectedGenre" class="w-full px-4 py-2.5 rounded-lg bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-violet-500/50">
                            <option value="all"><?php echo esc_html( $t['all_genres'] ); ?></option>
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
                        <label class="block text-xs text-white/50 uppercase tracking-wider mb-2"><?php echo esc_html( $t['sort_by'] ); ?></label>
                        <select x-model="sortBy" class="w-full px-4 py-2.5 rounded-lg bg-white/5 border border-white/10 text-white text-sm focus:outline-none focus:border-violet-500/50">
                            <option value="date_asc"><?php echo esc_html( $t['date_soonest'] ); ?></option>
                            <option value="date_desc"><?php echo esc_html( $t['date_latest'] ); ?></option>
                            <option value="price_asc"><?php echo esc_html( $t['price_low_high'] ); ?></option>
                            <option value="price_desc"><?php echo esc_html( $t['price_high_low'] ); ?></option>
                            <option value="popularity"><?php echo esc_html( $t['popularity'] ); ?></option>
                            <option value="recent"><?php echo esc_html( $t['recently_added'] ); ?></option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center justify-between mt-4 pt-4 border-t border-white/5">
                    <button @click="clearFilters" class="text-sm text-white/50 hover:text-white transition-colors">
                        <?php echo esc_html( $t['clear_filters'] ); ?>
                    </button>
                    <button @click="applyFilters" class="px-6 py-2 rounded-lg bg-violet-600 text-white text-sm font-semibold hover:bg-violet-500 transition-colors">
                        <?php echo esc_html( $t['apply_filters'] ); ?>
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
                    <?php echo esc_html( $t['all_events'] ); ?>
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
                    <h2 class="text-2xl lg:text-3xl font-bold text-white"><?php echo esc_html( $t['search_results'] ); ?></h2>
                    <p class="text-white/50 mt-1" x-text="'<?php echo esc_js( $t['results_for'] ); ?>' + searchQuery"></p>
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
                        <h3 class="text-lg font-medium text-white/70 mb-2"><?php echo esc_html( $t['no_results'] ); ?></h3>
                        <p class="text-sm text-white/40 max-w-md">
                            <?php echo esc_html( $t['no_results_hint'] ); ?>
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
                    <h2 class="text-2xl lg:text-3xl font-bold text-white"><?php echo esc_html( $t['featured_events'] ); ?></h2>
                    <p class="text-white/50 mt-1"><?php echo esc_html( $t['featured_subtitle'] ); ?></p>
                </div>
                <a href="#all-events" class="hidden sm:inline-flex items-center gap-2 text-sm text-violet-400 hover:text-violet-300 transition-colors">
                    <?php echo esc_html( $t['view_all'] ); ?>
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
                    $price_from = function_exists( 'tixello_get_min_price_excluding_invitations' )
                        ? tixello_get_min_price_excluding_invitations( $ev )
                        : ( isset( $ev['price_from'] ) ? $ev['price_from'] : null );
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
                                    <span class="text-sm text-white/50"><?php echo esc_html( $t['from'] ); ?></span>
                                    <span class="text-xl font-bold text-white ml-2">
                                        <?php if ( is_null( $price_from ) || $price_from == 0 ) : ?>
                                            <?php echo esc_html( $t['free'] ); ?>
                                        <?php else : ?>
                                            <?php echo esc_html( $price_from ); ?> RON
                                        <?php endif; ?>
                                    </span>
                                </div>
                                <span class="px-4 py-2 rounded-lg bg-white/20 backdrop-blur-sm text-white text-sm font-medium group-hover:bg-violet-600 transition-colors">
                                    <?php echo esc_html( $t['get_tickets'] ); ?> →
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
                            <?php echo esc_html( $t['cta_title'] ); ?>
                        </h2>
                        <p class="text-white/60 text-lg">
                            <?php echo esc_html( $t['cta_subtitle'] ); ?>
                        </p>
                    </div>
                    <form class="flex flex-col sm:flex-row gap-4" action="#" method="post">
                        <input type="email"
                               name="email"
                               placeholder="your@email.com"
                               class="px-6 py-4 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:outline-none focus:border-violet-500/50 transition-all">
                        <button type="submit" class="px-8 py-4 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/25 transition-all duration-300 whitespace-nowrap">
                            <?php echo esc_html( $t['notify_me'] ); ?>
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

        // Available locations (extracted from events)
        availableLocations: [
            'București',
            'Cluj-Napoca',
            'Timișoara',
            'Iași',
            'Constanța',
            'Brașov',
            'Sibiu',
            'Oradea',
            'Craiova',
            'Galați',
            'Arad',
            'Ploiești',
            'Târgu Mureș',
            'Baia Mare',
            'Buzău',
        ],

        // View
        viewMode: 'grid',
        activeTab: 'all',

        // Computed labels
        get dateLabel() {
            const labels = {
                'any': '<?php echo esc_js( $t['any_date'] ); ?>',
                'today': '<?php echo esc_js( $t['today'] ); ?>',
                'tomorrow': '<?php echo esc_js( $t['tomorrow'] ); ?>',
                'weekend': '<?php echo esc_js( $t['this_weekend'] ); ?>',
                'week': '<?php echo esc_js( $t['this_week'] ); ?>',
                'month': '<?php echo esc_js( $t['this_month'] ); ?>'
            };
            return labels[this.selectedDate] || '<?php echo esc_js( $t['any_date'] ); ?>';
        },

        get locationLabel() {
            return this.selectedLocation === 'any' ? '<?php echo esc_js( $t['any_location'] ); ?>' : this.selectedLocation;
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
