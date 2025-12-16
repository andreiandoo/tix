<?php
/**
 * Template Name: Tixello – Venues Directory
 * Description: Listă venues din Tixello Core cu search + filtru după prima literă.
 */

get_header();

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

    // descriere scurtă (luăm RO, dacă există)
    $desc = '';
    if ( ! empty( $v['description_translations']['ro'] ) ) {
        $desc = wp_strip_all_tags( $v['description_translations']['ro'] );
    } elseif ( ! empty( $v['description_translations']['en'] ) ) {
        $desc = wp_strip_all_tags( $v['description_translations']['en'] );
    } elseif ( ! empty( $v['description'] ) ) {
        $desc = wp_strip_all_tags( $v['description'] );
    }

    // Get venue type/category
    $venue_type = isset( $v['type'] ) ? $v['type'] : '';

    $first_letter = strtoupper( mb_substr( $name, 0, 1 ) );

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
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white/40 hover:text-white/70 transition-colors">Acasa</a>
                <svg class="w-4 h-4 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-white/70">Locatii</span>
            </nav>

            <!-- Title -->
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 mb-6">
                    <span class="text-lg">🏛️</span>
                    <span class="text-sm font-medium text-indigo-400">Directorul Locatiilor</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Locatii
                </h1>

                <p class="text-lg sm:text-xl text-white/60 leading-relaxed">
                    Toate locatiile gestionate in platforma Tixello. Descopera sali de concerte, teatre, stadioane si multe altele.
                </p>
            </div>
        </div>
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
                               placeholder="Cauta locatii..."
                               class="w-full pl-12 pr-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/40 focus:outline-none focus:border-violet-500/50 focus:bg-white/10 transition-all">
                    </div>

                    <!-- Stats & Filters -->
                    <div class="flex items-center gap-4">
                        <!-- Stats badge -->
                        <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-violet-600/10 border border-violet-500/20">
                            <span class="text-2xl font-bold text-white" x-text="filteredVenues.length"><?php echo $total_venues; ?></span>
                            <span class="text-sm text-white/60">locatii</span>
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
                            <span class="text-sm font-medium">Filtre</span>
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
                            Toate
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
                        <span x-text="filteredVenues.length"></span> locatii gasite
                        <template x-if="search || activeLetter !== 'all'">
                            <span> din <?php echo $total_venues; ?> total</span>
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
                                        🏛️ <span x-text="venue.type || 'Locatie'"></span>
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
                                            <span x-text="venue.capacity.toLocaleString() + ' locuri'"></span>
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
                    <h3 class="text-lg font-semibold text-white mb-2">Nicio locatie gasita</h3>
                    <p class="text-white/50 mb-6">Incearca sa modifici filtrele sau termenul de cautare</p>
                    <button @click="search = ''; activeLetter = 'all'" class="px-4 py-2 rounded-lg bg-violet-600 text-white text-sm font-medium hover:bg-violet-500 transition-colors">
                        Reseteaza filtrele
                    </button>
                </div>

                <!-- Load More -->
                <div x-show="displayedVenues.length < filteredVenues.length" class="mt-12 text-center">
                    <button
                        @click="loadMore()"
                        class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-medium hover:bg-violet-600/20 hover:border-violet-500/30 transition-all duration-300">
                        Incarca mai multe locatii
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <p class="mt-4 text-sm text-white/40">
                        Se afiseaza <span x-text="displayedVenues.length"></span> din <span x-text="filteredVenues.length"></span> locatii
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
                            Ai o locatie pentru evenimente?
                        </h2>
                        <p class="text-white/60 text-lg">
                            Inregistreaza-ti locatia pe Tixello si incepe sa primesti rezervari de la organizatori din toata tara.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="<?php echo esc_url( home_url( '/signup/' ) ); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 hover:shadow-lg hover:shadow-violet-600/25 transition-all duration-300">
                            Adauga locatia ta
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/pentru-locatii/' ) ); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white/10 border border-white/20 text-white font-medium hover:bg-white/20 transition-all duration-300">
                            Afla mai multe
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
