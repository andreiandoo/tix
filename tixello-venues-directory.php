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
    ];
}

?>
<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-10 space-y-6">
        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-200 pb-4">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-slate-900">
                    Venues
                </h1>
                <p class="mt-1 text-sm text-slate-500">
                    All venues currently managed in Tixello Core.
                </p>
            </div>

            <div class="text-sm text-slate-500">
                Total venues:
                <span class="font-semibold text-slate-900">
                    <?php echo count( $js_venues ); ?>
                </span>
            </div>
        </div>

        <!-- Injectăm venues în JS -->
        <script>
            window.tixelloVenues = <?php echo wp_json_encode( $js_venues ); ?>;
        </script>

        <section
            x-data="tixelloVenuesDirectory(window.tixelloVenues || [])"
            x-init="init()"
            class="space-y-5"
        >
            <!-- Search + filtru literă -->
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div class="relative w-full max-w-md">
                    <input
                        type="text"
                        x-model="search"
                        placeholder="Search venues..."
                        class="w-full rounded-full border border-slate-300 bg-white px-4 py-2 pr-10 text-sm text-slate-800 focus:border-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-200"
                    />
                    <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-slate-400">
                        🔍
                    </span>
                </div>

                <div class="flex flex-wrap gap-1 text-xs">
                    <button
                        type="button"
                        class="rounded-full px-3 py-1 font-medium transition"
                        :class="activeLetter === 'all'
                            ? 'bg-slate-900 text-white'
                            : 'bg-slate-100 text-slate-700 hover:bg-slate-200'"
                        @click="setLetter('all')"
                    >
                        All
                    </button>

                    <template x-for="letter in letters" :key="letter">
                        <button
                            type="button"
                            class="rounded-full px-3 py-1 font-medium transition"
                            :class="activeLetter === letter
                                ? 'bg-slate-900 text-white'
                                : 'bg-slate-100 text-slate-700 hover:bg-slate-200'"
                            @click="setLetter(letter)"
                            x-text="letter"
                        ></button>
                    </template>
                </div>
            </div>

            <!-- Results count -->
            <div class="text-xs text-slate-500">
                <span x-text="filteredVenues.length"></span>
                <span>venue(s) match your filters.</span>
            </div>

            <!-- Lista venues -->
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <template x-for="venue in filteredVenues" :key="venue.id">
                    <article
                        class="group flex flex-col rounded-xl border border-slate-200 bg-white/80 p-3 text-xs text-slate-700 shadow-sm transition hover:border-slate-400 hover:bg-white"
                    >
                        <a
                            :href="venue.slug ? '<?php echo esc_url( home_url( '/venues/' ) ); ?>' + venue.slug + '/' : '#'"
                            class="flex h-full flex-col"
                        >
                            <div class="mb-2 aspect-[4/3] w-full overflow-hidden rounded-lg bg-slate-100">
                                <template x-if="venue.image">
                                    <img
                                        :src="venue.image"
                                        :alt="venue.name"
                                        class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                                        loading="lazy"
                                    />
                                </template>

                                <template x-if="!venue.image">
                                    <div class="flex h-full w-full items-center justify-center text-2xl font-bold text-slate-300">
                                        <span x-text="venue.name.charAt(0)"></span>
                                    </div>
                                </template>
                            </div>

                            <h2 class="mb-1 line-clamp-2 text-sm font-semibold text-slate-900" x-text="venue.name"></h2>

                            <p class="mb-1 text-[11px] text-slate-500">
                                <span x-text="venue.city"></span>
                                <span x-show="venue.country">
                                    · <span x-text="venue.country"></span>
                                </span>
                            </p>

                            <p class="line-clamp-2 text-[11px] text-slate-500" x-text="venue.description"></p>

                            <div class="mt-auto flex items-center justify-between pt-2 text-[11px] text-slate-600">
                                <div>
                                    <template x-if="venue.capacity">
                                        <span x-text="'Capacity: ' + venue.capacity"></span>
                                    </template>
                                </div>

                                <div class="flex gap-2">
                                    <template x-if="venue.website">
                                        <span class="text-[11px] text-slate-500">Website</span>
                                    </template>
                                    <template x-if="venue.facebook || venue.instagram">
                                        <span class="text-[11px] text-slate-400">Social</span>
                                    </template>
                                </div>
                            </div>
                        </a>
                    </article>
                </template>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('tixelloVenuesDirectory', (rawVenues) => ({
                allVenues: [],
                search: '',
                activeLetter: 'all',
                letters: [],

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
                            ].join(' ').toLowerCase();

                            return haystack.includes(q);
                        });
                    }

                    if (this.activeLetter !== 'all') {
                        list = list.filter((v) => v.firstLetter === this.activeLetter);
                    }

                    return list.sort((a, b) => a.name.localeCompare(b.name));
                },
            }));
        });
    </script>
</main>

<?php
get_footer();
?>