<?php
/**
 * Template Name: Tixello – Venues Directory
 * Description: Listă venues din Tixello Core cu search + filtru după prima literă.
 */

get_header();

// Detectare limba curentă (Polylang)
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

// Array cu traduceri
$t = [
    // Breadcrumb
    'home' => $current_lang === 'ro' ? 'Acasa' : 'Home',
    'venues' => $current_lang === 'ro' ? 'Locatii' : 'Venues',

    // Hero
    'badge' => $current_lang === 'ro' ? 'Directorul Locatiilor' : 'Venues Directory',
    'hero_title' => $current_lang === 'ro' ? 'Locatii' : 'Venues',
    'hero_subtitle' => $current_lang === 'ro'
        ? 'Toate locatiile gestionate in platforma Tixello. Descopera sali de concerte, teatre, stadioane si multe altele.'
        : 'All venues managed in the Tixello platform. Discover concert halls, theaters, stadiums and more.',

    // Search & Filters
    'search_placeholder' => $current_lang === 'ro' ? 'Cauta locatii...' : 'Search venues...',
    'venues_label' => $current_lang === 'ro' ? 'locatii' : 'venues',
    'filters' => $current_lang === 'ro' ? 'Filtre' : 'Filters',
    'all' => $current_lang === 'ro' ? 'Toate' : 'All',
    'venue' => $current_lang === 'ro' ? 'Locatie' : 'Venue',
    'seats' => $current_lang === 'ro' ? 'locuri' : 'seats',

    // Results
    'venues_found' => $current_lang === 'ro' ? 'locatii gasite' : 'venues found',
    'of_total' => $current_lang === 'ro' ? 'din' : 'of',
    'total' => 'total',

    // Empty State
    'no_venue_found' => $current_lang === 'ro' ? 'Nicio locatie gasita' : 'No venue found',
    'try_modify_filters' => $current_lang === 'ro'
        ? 'Incearca sa modifici filtrele sau termenul de cautare'
        : 'Try modifying the filters or search term',
    'reset_filters' => $current_lang === 'ro' ? 'Reseteaza filtrele' : 'Reset filters',

    // Load More
    'load_more' => $current_lang === 'ro' ? 'Incarca mai multe locatii' : 'Load more venues',
    'showing' => $current_lang === 'ro' ? 'Se afiseaza' : 'Showing',

    // CTA
    'cta_title' => $current_lang === 'ro' ? 'Ai o locatie pentru evenimente?' : 'Have an event venue?',
    'cta_subtitle' => $current_lang === 'ro'
        ? 'Inregistreaza-ti locatia pe Tixello si incepe sa primesti rezervari de la organizatori din toata tara.'
        : 'Register your venue on Tixello and start receiving bookings from organizers across the country.',
    'add_venue' => $current_lang === 'ro' ? 'Adauga locatia ta' : 'Add your venue',
    'learn_more' => $current_lang === 'ro' ? 'Afla mai multe' : 'Learn more',

    // Map
    'map_title' => $current_lang === 'ro' ? 'Locatii pe harta' : 'Venues on Map',
    'map_subtitle' => $current_lang === 'ro'
        ? 'Exploreaza locatiile noastre pe harta interactiva'
        : 'Explore our venues on the interactive map',
    'show_map' => $current_lang === 'ro' ? 'Arata harta' : 'Show map',
    'hide_map' => $current_lang === 'ro' ? 'Ascunde harta' : 'Hide map',
    'view_venue' => $current_lang === 'ro' ? 'Vezi locatia' : 'View venue',
    'venues_in' => $current_lang === 'ro' ? 'locatii in' : 'venues in',
    'cities' => $current_lang === 'ro' ? 'orase' : 'cities',
];

// Luăm venues (ideal prin helperul tixello_fetch_venues_core)
$venues = [];
if ( function_exists( 'tixello_fetch_venues_core' ) ) {
    $venues = tixello_fetch_venues_core();
} else {
    // fallback direct API (dacă nu ai încă helperul în functions)
    $api_key = defined( 'TIXELLO_API_KEY' )
        ? TIXELLO_API_KEY
        : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

    $response = wp_remote_get(
        'https://core.tixello.com/api/v1/public/venues',
        [
            'headers' => [
                'X-API-Key' => $api_key,
            ],
            'timeout' => 15,
        ]
    );

    if ( ! is_wp_error( $response ) ) {
        $body = wp_remote_retrieve_body( $response );
        $data = json_decode( $body, true );
        if ( is_array( $data ) ) {
            if ( isset( $data['data'] ) && is_array( $data['data'] ) ) {
                $venues = $data['data'];
            } elseif ( isset( $data['venues'] ) && is_array( $data['venues'] ) ) {
                $venues = $data['venues'];
            } else {
                $venues = $data;
            }
        }
    }
}

if ( ! is_array( $venues ) ) {
    $venues = [];
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

// Romanian city coordinates for map display
$city_coords = [
    'București' => ['lat' => 44.4268, 'lng' => 26.1025],
    'Bucuresti' => ['lat' => 44.4268, 'lng' => 26.1025],
    'Bucharest' => ['lat' => 44.4268, 'lng' => 26.1025],
    'Cluj-Napoca' => ['lat' => 46.7712, 'lng' => 23.6236],
    'Cluj' => ['lat' => 46.7712, 'lng' => 23.6236],
    'Timișoara' => ['lat' => 45.7489, 'lng' => 21.2087],
    'Timisoara' => ['lat' => 45.7489, 'lng' => 21.2087],
    'Iași' => ['lat' => 47.1585, 'lng' => 27.6014],
    'Iasi' => ['lat' => 47.1585, 'lng' => 27.6014],
    'Constanța' => ['lat' => 44.1598, 'lng' => 28.6348],
    'Constanta' => ['lat' => 44.1598, 'lng' => 28.6348],
    'Craiova' => ['lat' => 44.3302, 'lng' => 23.7949],
    'Brașov' => ['lat' => 45.6427, 'lng' => 25.5887],
    'Brasov' => ['lat' => 45.6427, 'lng' => 25.5887],
    'Galați' => ['lat' => 45.4353, 'lng' => 28.0080],
    'Galati' => ['lat' => 45.4353, 'lng' => 28.0080],
    'Ploiești' => ['lat' => 44.9462, 'lng' => 26.0254],
    'Ploiesti' => ['lat' => 44.9462, 'lng' => 26.0254],
    'Oradea' => ['lat' => 47.0465, 'lng' => 21.9189],
    'Brăila' => ['lat' => 45.2692, 'lng' => 27.9575],
    'Braila' => ['lat' => 45.2692, 'lng' => 27.9575],
    'Arad' => ['lat' => 46.1866, 'lng' => 21.3123],
    'Pitești' => ['lat' => 44.8565, 'lng' => 24.8692],
    'Pitesti' => ['lat' => 44.8565, 'lng' => 24.8692],
    'Sibiu' => ['lat' => 45.7983, 'lng' => 24.1256],
    'Bacău' => ['lat' => 46.5670, 'lng' => 26.9146],
    'Bacau' => ['lat' => 46.5670, 'lng' => 26.9146],
    'Târgu Mureș' => ['lat' => 46.5386, 'lng' => 24.5579],
    'Targu Mures' => ['lat' => 46.5386, 'lng' => 24.5579],
    'Baia Mare' => ['lat' => 47.6567, 'lng' => 23.5850],
    'Buzău' => ['lat' => 45.1500, 'lng' => 26.8333],
    'Buzau' => ['lat' => 45.1500, 'lng' => 26.8333],
    'Satu Mare' => ['lat' => 47.7926, 'lng' => 22.8858],
    'Botoșani' => ['lat' => 47.7487, 'lng' => 26.6695],
    'Botosani' => ['lat' => 47.7487, 'lng' => 26.6695],
    'Râmnicu Vâlcea' => ['lat' => 45.1047, 'lng' => 24.3693],
    'Ramnicu Valcea' => ['lat' => 45.1047, 'lng' => 24.3693],
    'Suceava' => ['lat' => 47.6635, 'lng' => 26.2732],
    'Piatra Neamț' => ['lat' => 46.9275, 'lng' => 26.3713],
    'Piatra Neamt' => ['lat' => 46.9275, 'lng' => 26.3713],
    'Drobeta-Turnu Severin' => ['lat' => 44.6269, 'lng' => 22.6569],
    'Focșani' => ['lat' => 45.6967, 'lng' => 27.1833],
    'Focsani' => ['lat' => 45.6967, 'lng' => 27.1833],
    'Târgu Jiu' => ['lat' => 45.0378, 'lng' => 23.2747],
    'Targu Jiu' => ['lat' => 45.0378, 'lng' => 23.2747],
    'Tulcea' => ['lat' => 45.1667, 'lng' => 28.8000],
    'Reșița' => ['lat' => 45.3008, 'lng' => 21.8894],
    'Resita' => ['lat' => 45.3008, 'lng' => 21.8894],
    'Alba Iulia' => ['lat' => 46.0677, 'lng' => 23.5702],
    'Bistrița' => ['lat' => 47.1333, 'lng' => 24.5000],
    'Bistrita' => ['lat' => 47.1333, 'lng' => 24.5000],
    'Deva' => ['lat' => 45.8833, 'lng' => 22.9000],
    'Hunedoara' => ['lat' => 45.7547, 'lng' => 22.9086],
    'Mediaș' => ['lat' => 46.1667, 'lng' => 24.3500],
    'Medias' => ['lat' => 46.1667, 'lng' => 24.3500],
    'Zalău' => ['lat' => 47.1667, 'lng' => 23.0500],
    'Zalau' => ['lat' => 47.1667, 'lng' => 23.0500],
    'Sfântu Gheorghe' => ['lat' => 45.8667, 'lng' => 25.7833],
    'Sfantu Gheorghe' => ['lat' => 45.8667, 'lng' => 25.7833],
    'Miercurea Ciuc' => ['lat' => 46.3500, 'lng' => 25.8000],
    'Slobozia' => ['lat' => 44.5667, 'lng' => 27.3667],
    'Călărași' => ['lat' => 44.2000, 'lng' => 27.3333],
    'Calarasi' => ['lat' => 44.2000, 'lng' => 27.3333],
    'Giurgiu' => ['lat' => 43.9000, 'lng' => 25.9667],
    'Târgoviște' => ['lat' => 44.9333, 'lng' => 25.4500],
    'Targoviste' => ['lat' => 44.9333, 'lng' => 25.4500],
    'Alexandria' => ['lat' => 43.9833, 'lng' => 25.3333],
    'Slatina' => ['lat' => 44.4333, 'lng' => 24.3500],
    'Vaslui' => ['lat' => 46.6333, 'lng' => 27.7333],
    'Roman' => ['lat' => 46.9167, 'lng' => 26.9167],
    'Mangalia' => ['lat' => 43.8167, 'lng' => 28.5833],
    'Mamaia' => ['lat' => 44.2500, 'lng' => 28.6167],
    'Eforie' => ['lat' => 44.0500, 'lng' => 28.6333],
    'Vama Veche' => ['lat' => 43.7500, 'lng' => 28.5833],
    'Sinaia' => ['lat' => 45.3500, 'lng' => 25.5500],
    'Predeal' => ['lat' => 45.5000, 'lng' => 25.5833],
    'Poiana Brașov' => ['lat' => 45.5833, 'lng' => 25.5500],
    'Poiana Brasov' => ['lat' => 45.5833, 'lng' => 25.5500],
];

// Normalizăm pentru JS
$js_venues = [];

foreach ( $venues as $v ) {
    if ( ! is_array( $v ) ) {
        continue;
    }

    $name = isset( $v['name'] ) ? $v['name'] : '';
    if ( $name === '' ) {
        continue;
    }

    $slug   = isset( $v['slug'] ) ? $v['slug'] : '';
    $city   = isset( $v['city'] ) ? $v['city'] : '';
    $state  = isset( $v['state'] ) ? $v['state'] : '';
    $country = isset( $v['country'] ) ? $v['country'] : '';
    $address = isset( $v['address'] ) ? $v['address'] : '';

    $cap_total = isset( $v['capacity']['total'] ) ? (int) $v['capacity']['total'] : null;

    $image_url = '';
    if ( ! empty( $v['media']['image_url'] ) ) {
        $image_url = $full_storage_url( $v['media']['image_url'] );
    }

    $website  = isset( $v['contact']['website'] ) ? $v['contact']['website'] : '';
    $facebook = isset( $v['social']['facebook_url'] ) ? $v['social']['facebook_url'] : '';
    $instagram = isset( $v['social']['instagram_url'] ) ? $v['social']['instagram_url'] : '';

    // descriere scurtă (folosim limba curentă)
    $desc = '';
    if ( $current_lang === 'ro' && ! empty( $v['description_translations']['ro'] ) ) {
        $desc = wp_strip_all_tags( $v['description_translations']['ro'] );
    } elseif ( ! empty( $v['description_translations']['en'] ) ) {
        $desc = wp_strip_all_tags( $v['description_translations']['en'] );
    } elseif ( ! empty( $v['description_translations']['ro'] ) ) {
        $desc = wp_strip_all_tags( $v['description_translations']['ro'] );
    } elseif ( ! empty( $v['description'] ) ) {
        $desc = wp_strip_all_tags( $v['description'] );
    }

    // Get venue type/category
    $venue_type = isset( $v['type'] ) ? $v['type'] : '';

    $first_letter = strtoupper( mb_substr( $name, 0, 1 ) );

    // Get coordinates from city lookup
    $lat = null;
    $lng = null;
    if ( $city && isset( $city_coords[ $city ] ) ) {
        $lat = $city_coords[ $city ]['lat'];
        $lng = $city_coords[ $city ]['lng'];
    }

    $js_venues[] = [
        'id'           => isset( $v['id'] ) ? (int) $v['id'] : null,
        'name'         => $name,
        'slug'         => $slug,
        'firstLetter'  => $first_letter,
        'city'         => $city,
        'state'        => $state,
        'country'      => $country,
        'address'      => $address,
        'capacity'     => $cap_total,
        'image'        => $image_url,
        'website'      => $website,
        'facebook'     => $facebook,
        'instagram'    => $instagram,
        'description'  => $desc,
        'type'         => $venue_type,
        'lat'          => $lat,
        'lng'          => $lng,
    ];
}

$total_venues = count( $js_venues );
?>

<main id="primary" class="site-main bg-zinc-950 text-zinc-200 antialiased">

    <!-- Injectăm venues în JS -->
    <script>
        window.tixelloVenues = <?php echo wp_json_encode( $js_venues ); ?>;
    </script>

    <!-- ==================== HERO SECTION ==================== -->
    <section class="relative overflow-hidden">
        <!-- Background effects -->
        <div class="absolute inset-0 bg-gradient-to-b from-violet-600/5 via-transparent to-transparent"></div>
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-violet-600/10 rounded-full blur-3xl"></div>
        <div class="absolute top-20 right-1/4 w-80 h-80 bg-cyan-600/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm mb-8">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white/40 hover:text-white/70 transition-colors"><?php echo esc_html( $t['home'] ); ?></a>
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-white/70"><?php echo esc_html( $t['venues'] ); ?></span>
            </nav>

            <!-- Title -->
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 mb-6">
                    <span class="text-lg">🏛️</span>
                    <span class="text-sm font-medium text-indigo-400"><?php echo esc_html( $t['badge'] ); ?></span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                    <?php echo esc_html( $t['hero_title'] ); ?>
                </h1>

                <p class="text-lg sm:text-xl text-white/60 leading-relaxed">
                    <?php echo esc_html( $t['hero_subtitle'] ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== MAP SECTION ==================== -->
    <section class="py-8 border-b border-white/5" x-data="venuesMap()" x-init="initMap()">
        <!-- Leaflet CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Map Header -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-2"><?php echo esc_html( $t['map_title'] ); ?></h2>
                    <p class="text-white/60"><?php echo esc_html( $t['map_subtitle'] ); ?></p>
                </div>
                <div class="flex items-center gap-4">
                    <!-- Map Stats -->
                    <div class="flex items-center gap-4 text-sm">
                        <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-violet-600/10 border border-violet-500/20">
                            <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            <span class="text-white/70"><span class="font-semibold text-white" x-text="venuesWithCoords"></span> <?php echo esc_html( $t['venues_label'] ); ?></span>
                        </div>
                        <div class="hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-lg bg-cyan-600/10 border border-cyan-500/20">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <span class="text-white/70"><span class="font-semibold text-white" x-text="uniqueCities"></span> <?php echo esc_html( $t['cities'] ); ?></span>
                        </div>
                    </div>
                    <!-- Toggle Map Button -->
                    <button
                        @click="showMap = !showMap"
                        class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white/5 border border-white/10 text-white/70 hover:text-white hover:bg-white/10 transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                        </svg>
                        <span class="text-sm font-medium" x-text="showMap ? '<?php echo esc_js( $t['hide_map'] ); ?>' : '<?php echo esc_js( $t['show_map'] ); ?>'"></span>
                    </button>
                </div>
            </div>

            <!-- Map Container -->
            <div x-show="showMap" x-collapse>
                <div class="relative rounded-2xl overflow-hidden border border-white/10 bg-zinc-900/50">
                    <!-- Map -->
                    <div id="venues-map" class="w-full h-[400px] sm:h-[500px] lg:h-[600px]"></div>

                    <!-- Map Legend -->
                    <div class="absolute bottom-4 left-4 z-[1000] p-3 rounded-xl bg-zinc-900/90 backdrop-blur-sm border border-white/10">
                        <div class="flex items-center gap-3 text-xs text-white/70">
                            <div class="flex items-center gap-1.5">
                                <span class="w-3 h-3 rounded-full bg-violet-500"></span>
                                <span><?php echo esc_html( $t['venue'] ); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Selected Venue Card -->
                    <div x-show="selectedVenue" x-transition
                         class="absolute top-4 right-4 z-[1000] w-72 p-4 rounded-xl bg-zinc-900/95 backdrop-blur-sm border border-white/10 shadow-xl">
                        <button @click="selectedVenue = null" class="absolute top-2 right-2 p-1 rounded-lg hover:bg-white/10 text-white/40 hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                        <template x-if="selectedVenue">
                            <div>
                                <template x-if="selectedVenue.image">
                                    <img :src="selectedVenue.image" :alt="selectedVenue.name" class="w-full h-32 object-cover rounded-lg mb-3">
                                </template>
                                <h4 class="font-semibold text-white mb-1" x-text="selectedVenue.name"></h4>
                                <p class="text-sm text-white/60 mb-3">
                                    <span x-text="selectedVenue.city"></span>
                                    <template x-if="selectedVenue.country">
                                        <span>, <span x-text="selectedVenue.country"></span></span>
                                    </template>
                                </p>
                                <template x-if="selectedVenue.capacity">
                                    <p class="text-xs text-white/40 mb-3">
                                        <span x-text="selectedVenue.capacity.toLocaleString()"></span> <?php echo esc_html( $t['seats'] ); ?>
                                    </p>
                                </template>
                                <a :href="selectedVenue.slug ? '<?php echo esc_url( home_url( '/venues/' ) ); ?>' + selectedVenue.slug + '/' : '#'"
                                   class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                                    <?php echo esc_html( $t['view_venue'] ); ?>
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </a>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('venuesMap', () => ({
                    showMap: true,
                    map: null,
                    markers: [],
                    selectedVenue: null,

                    get venuesWithCoords() {
                        return (window.tixelloVenues || []).filter(v => v.lat && v.lng).length;
                    },

                    get uniqueCities() {
                        const cities = new Set();
                        (window.tixelloVenues || []).forEach(v => {
                            if (v.city && v.lat && v.lng) cities.add(v.city);
                        });
                        return cities.size;
                    },

                    initMap() {
                        this.$nextTick(() => {
                            if (this.map) return;

                            // Initialize map centered on Romania
                            this.map = L.map('venues-map', {
                                scrollWheelZoom: false,
                                zoomControl: true
                            }).setView([45.9432, 24.9668], 7);

                            // Dark theme map tiles
                            L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
                                subdomains: 'abcd',
                                maxZoom: 19
                            }).addTo(this.map);

                            // Custom marker icon
                            const venueIcon = L.divIcon({
                                className: 'custom-venue-marker',
                                html: `<div class="w-8 h-8 rounded-full bg-violet-600 border-2 border-white shadow-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>`,
                                iconSize: [32, 32],
                                iconAnchor: [16, 16]
                            });

                            // Add markers for venues with coordinates
                            const venues = window.tixelloVenues || [];
                            const bounds = [];

                            venues.forEach(venue => {
                                if (!venue.lat || !venue.lng) return;

                                const marker = L.marker([venue.lat, venue.lng], { icon: venueIcon })
                                    .addTo(this.map);

                                marker.on('click', () => {
                                    this.selectedVenue = venue;
                                });

                                // Create popup content
                                const popupContent = `
                                    <div class="venue-popup" style="min-width: 200px;">
                                        <strong style="font-size: 14px;">${venue.name}</strong><br>
                                        <span style="color: #888; font-size: 12px;">${venue.city}${venue.country ? ', ' + venue.country : ''}</span>
                                        ${venue.capacity ? '<br><span style="color: #888; font-size: 11px;">' + venue.capacity.toLocaleString() + ' <?php echo esc_js( $t['seats'] ); ?></span>' : ''}
                                    </div>
                                `;
                                marker.bindPopup(popupContent);

                                bounds.push([venue.lat, venue.lng]);
                                this.markers.push(marker);
                            });

                            // Fit map to show all markers
                            if (bounds.length > 0) {
                                this.map.fitBounds(bounds, { padding: [50, 50] });
                            }

                            // Fix map display issues
                            setTimeout(() => {
                                this.map.invalidateSize();
                            }, 100);
                        });
                    }
                }));
            });
        </script>
        <style>
            .custom-venue-marker {
                background: transparent;
                border: none;
            }
            .custom-venue-marker > div {
                display: flex;
                align-items: center;
                justify-content: center;
                transition: transform 0.2s ease;
            }
            .custom-venue-marker:hover > div {
                transform: scale(1.2);
            }
            .leaflet-popup-content-wrapper {
                background: rgba(24, 24, 27, 0.95);
                color: white;
                border-radius: 12px;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            .leaflet-popup-tip {
                background: rgba(24, 24, 27, 0.95);
            }
            .leaflet-popup-close-button {
                color: rgba(255, 255, 255, 0.5) !important;
            }
            .leaflet-popup-close-button:hover {
                color: white !important;
            }
            #venues-map .leaflet-control-zoom a {
                background: rgba(24, 24, 27, 0.9);
                color: white;
                border-color: rgba(255, 255, 255, 0.1);
            }
            #venues-map .leaflet-control-zoom a:hover {
                background: rgba(24, 24, 27, 1);
            }
            #venues-map .leaflet-control-attribution {
                background: rgba(24, 24, 27, 0.8);
                color: rgba(255, 255, 255, 0.5);
            }
            #venues-map .leaflet-control-attribution a {
                color: rgba(139, 92, 246, 0.8);
            }
        </style>
    </section>

    <!-- Main Content with Alpine.js -->
    <section
        x-data="tixelloVenuesDirectory(window.tixelloVenues || [])"
        x-init="init()"
    >
        <!-- ==================== SEARCH & FILTERS ==================== -->
        <div class="sticky top-0 z-40 bg-zinc-950/95 backdrop-blur-xl border-y border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-between">

                    <!-- Search -->
                    <div class="relative flex-1 max-w-xl w-full">
                        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <input type="text"
                               x-model="search"
                               placeholder="<?php echo esc_attr( $t['search_placeholder'] ); ?>"
                               class="w-full pl-12 pr-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/40 focus:outline-none focus:border-violet-500/50 focus:bg-white/10 transition-all">
                    </div>

                    <!-- Stats & Filters -->
                    <div class="flex items-center gap-4">
                        <!-- Stats badge -->
                        <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-violet-600/10 border border-violet-500/20">
                            <span class="text-2xl font-bold text-white" x-text="filteredVenues.length"><?php echo $total_venues; ?></span>
                            <span class="text-sm text-white/60"><?php echo esc_html( $t['venues_label'] ); ?></span>
                        </div>

                        <!-- View toggle -->
                        <div class="hidden sm:flex items-center gap-1 p-1 rounded-lg bg-white/5 border border-white/10">
                            <button
                                @click="viewMode = 'grid'"
                                :class="viewMode === 'grid' ? 'bg-violet-600 text-white' : 'text-white/40 hover:text-white hover:bg-white/10'"
                                class="p-2 rounded-md transition-colors">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                </svg>
                            </button>
                            <button
                                @click="viewMode = 'list'"
                                :class="viewMode === 'list' ? 'bg-violet-600 text-white' : 'text-white/40 hover:text-white hover:bg-white/10'"
                                class="p-2 rounded-md transition-colors">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Letter Filter button -->
                        <button
                            @click="showLetterFilter = !showLetterFilter"
                            :class="activeLetter !== 'all' ? 'bg-violet-600/20 border-violet-500/30 text-white' : 'bg-white/5 border-white/10 text-white/70 hover:text-white hover:bg-white/10'"
                            class="flex items-center gap-2 px-4 py-2.5 rounded-xl border transition-all">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                            </svg>
                            <span class="text-sm font-medium"><?php echo esc_html( $t['filters'] ); ?></span>
                            <span x-show="activeLetter !== 'all'" x-text="activeLetter" class="px-1.5 py-0.5 rounded bg-violet-600 text-xs font-bold"></span>
                        </button>
                    </div>
                </div>

                <!-- Letter Filter Row -->
                <div x-show="showLetterFilter" x-collapse class="mt-4 pt-4 border-t border-white/5">
                    <div class="flex flex-wrap gap-1.5">
                        <button
                            type="button"
                            class="px-3 py-1.5 rounded-lg text-sm font-medium transition-all"
                            :class="activeLetter === 'all'
                                ? 'bg-violet-600 text-white'
                                : 'bg-white/5 text-white/60 hover:bg-white/10 hover:text-white'"
                            @click="setLetter('all')"
                        >
                            <?php echo esc_html( $t['all'] ); ?>
                        </button>
                        <template x-for="letter in letters" :key="letter">
                            <button
                                type="button"
                                class="px-3 py-1.5 rounded-lg text-sm font-medium transition-all"
                                :class="activeLetter === letter
                                    ? 'bg-violet-600 text-white'
                                    : 'bg-white/5 text-white/60 hover:bg-white/10 hover:text-white'"
                                @click="setLetter(letter)"
                                x-text="letter"
                            ></button>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== VENUES GRID ==================== -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Results info -->
                <div class="flex items-center justify-between mb-6">
                    <p class="text-sm text-white/50">
                        <span x-text="filteredVenues.length"></span> <?php echo esc_html( $t['venues_found'] ); ?>
                        <template x-if="search || activeLetter !== 'all'">
                            <span> <?php echo esc_html( $t['of_total'] ); ?> <?php echo $total_venues; ?> <?php echo esc_html( $t['total'] ); ?></span>
                        </template>
                    </p>
                </div>

                <!-- Grid View -->
                <div x-show="viewMode === 'grid'" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <template x-for="venue in displayedVenues" :key="venue.id">
                        <a
                            :href="venue.slug ? '<?php echo esc_url( home_url( '/venues/' ) ); ?>' + venue.slug + '/' : '#'"
                            class="group relative bg-zinc-900/50 rounded-2xl border border-white/5 overflow-hidden hover:border-violet-500/30 hover:bg-zinc-900/80 transition-all duration-300"
                        >
                            <!-- Image -->
                            <div class="aspect-[4/3] relative overflow-hidden">
                                <template x-if="venue.image">
                                    <img
                                        :src="venue.image"
                                        :alt="venue.name"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        loading="lazy">
                                </template>
                                <template x-if="!venue.image">
                                    <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-zinc-900 flex items-center justify-center">
                                        <span class="text-5xl font-bold text-white/20" x-text="venue.name.charAt(0)"></span>
                                    </div>
                                </template>
                                <div class="absolute inset-0 bg-gradient-to-t from-zinc-900 via-transparent to-transparent"></div>

                                <!-- Category badge -->
                                <div class="absolute top-3 left-3">
                                    <span class="px-2.5 py-1 rounded-lg bg-black/50 backdrop-blur-sm text-xs font-medium text-white/90">
                                        🏛️ <span x-text="venue.type || '<?php echo esc_js( $t['venue'] ); ?>'"></span>
                                    </span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-4">
                                <h3 class="font-semibold text-white group-hover:text-violet-400 transition-colors mb-1 line-clamp-1" x-text="venue.name"></h3>
                                <p class="text-sm text-white/50 flex items-center gap-1.5 mb-3">
                                    <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span class="truncate">
                                        <span x-text="venue.city"></span>
                                        <template x-if="venue.country">
                                            <span>, <span x-text="venue.country"></span></span>
                                        </template>
                                    </span>
                                </p>

                                <!-- Stats -->
                                <div class="flex items-center gap-3 pt-3 border-t border-white/5">
                                    <template x-if="venue.capacity">
                                        <div class="flex items-center gap-1.5 text-xs text-white/40">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                            </svg>
                                            <span x-text="venue.capacity.toLocaleString() + ' <?php echo esc_js( $t['seats'] ); ?>'"></span>
                                        </div>
                                    </template>
                                    <div class="flex items-center gap-1.5 text-xs text-white/40 ml-auto">
                                        <template x-if="venue.website">
                                            <span class="text-violet-400">Website</span>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </template>
                </div>

                <!-- List View -->
                <div x-show="viewMode === 'list'" class="space-y-3">
                    <template x-for="venue in displayedVenues" :key="venue.id">
                        <a
                            :href="venue.slug ? '<?php echo esc_url( home_url( '/venues/' ) ); ?>' + venue.slug + '/' : '#'"
                            class="group flex items-center gap-4 p-4 bg-zinc-900/50 rounded-xl border border-white/5 hover:border-violet-500/30 hover:bg-zinc-900/80 transition-all duration-300"
                        >
                            <!-- Thumbnail -->
                            <div class="w-20 h-20 flex-shrink-0 rounded-lg overflow-hidden bg-zinc-800">
                                <template x-if="venue.image">
                                    <img :src="venue.image" :alt="venue.name" class="w-full h-full object-cover" loading="lazy">
                                </template>
                                <template x-if="!venue.image">
                                    <div class="w-full h-full flex items-center justify-center">
                                        <span class="text-2xl font-bold text-white/20" x-text="venue.name.charAt(0)"></span>
                                    </div>
                                </template>
                            </div>

                            <!-- Content -->
                            <div class="flex-1 min-w-0">
                                <h3 class="font-semibold text-white group-hover:text-violet-400 transition-colors mb-1" x-text="venue.name"></h3>
                                <p class="text-sm text-white/50 flex items-center gap-1.5">
                                    <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span x-text="venue.city"></span>
                                    <template x-if="venue.country">
                                        <span>, <span x-text="venue.country"></span></span>
                                    </template>
                                </p>
                            </div>

                            <!-- Stats -->
                            <div class="hidden sm:flex items-center gap-6 text-sm text-white/40">
                                <template x-if="venue.capacity">
                                    <div class="flex items-center gap-1.5">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                        <span x-text="venue.capacity.toLocaleString()"></span>
                                    </div>
                                </template>
                            </div>

                            <!-- Arrow -->
                            <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </template>
                </div>

                <!-- Empty State -->
                <div x-show="filteredVenues.length === 0" class="text-center py-16">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/5 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2"><?php echo esc_html( $t['no_venue_found'] ); ?></h3>
                    <p class="text-white/50 mb-6"><?php echo esc_html( $t['try_modify_filters'] ); ?></p>
                    <button @click="search = ''; activeLetter = 'all'" class="px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                        <?php echo esc_html( $t['reset_filters'] ); ?>
                    </button>
                </div>

                <!-- Load More -->
                <div x-show="displayedVenues.length < filteredVenues.length" class="mt-12 text-center">
                    <button
                        @click="loadMore()"
                        class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-medium hover:bg-violet-600/20 hover:border-violet-500/30 transition-all duration-300">
                        <?php echo esc_html( $t['load_more'] ); ?>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <p class="mt-4 text-sm text-white/40">
                        <?php echo esc_html( $t['showing'] ); ?> <span x-text="displayedVenues.length"></span> <?php echo esc_html( $t['of_total'] ); ?> <span x-text="filteredVenues.length"></span> <?php echo esc_html( $t['venues_label'] ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CTA SECTION ==================== -->
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-violet-600/20 via-indigo-600/20 to-cyan-600/20 border border-white/10 p-8 lg:p-12">
                <!-- Background pattern -->
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
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="<?php echo esc_url( home_url( '/signup/' ) ); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/25 transition-all duration-300">
                            <?php echo esc_html( $t['add_venue'] ); ?>
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/pentru-locatii/' ) ); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white/10 border border-white/20 text-white font-medium hover:bg-white/20 transition-all duration-300">
                            <?php echo esc_html( $t['learn_more'] ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('tixelloVenuesDirectory', (rawVenues) => ({
                allVenues: [],
                search: '',
                activeLetter: 'all',
                letters: [],
                viewMode: 'grid',
                showLetterFilter: false,
                itemsPerPage: 12,
                currentPage: 1,

                init() {
                    this.allVenues = rawVenues || [];

                    const letterSet = new Set();
                    this.allVenues.forEach((v) => {
                        if (v.firstLetter) {
                            letterSet.add(v.firstLetter);
                        }
                    });

                    this.letters = Array.from(letterSet).sort();
                },

                setLetter(letter) {
                    this.activeLetter = letter;
                    this.currentPage = 1;
                },

                loadMore() {
                    this.currentPage++;
                },

                get filteredVenues() {
                    let list = [...this.allVenues];

                    const q = this.search.trim().toLowerCase();
                    if (q) {
                        list = list.filter((v) => {
                            const haystack = [
                                v.name || '',
                                v.city || '',
                                v.country || '',
                                v.address || '',
                                v.description || '',
                                v.type || '',
                            ].join(' ').toLowerCase();

                            return haystack.includes(q);
                        });
                    }

                    if (this.activeLetter !== 'all') {
                        list = list.filter((v) => v.firstLetter === this.activeLetter);
                    }

                    return list.sort((a, b) => a.name.localeCompare(b.name));
                },

                get displayedVenues() {
                    return this.filteredVenues.slice(0, this.currentPage * this.itemsPerPage);
                },
            }));
        });
    </script>
</main>

<?php
get_footer();
?>
