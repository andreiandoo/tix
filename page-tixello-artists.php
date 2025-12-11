<?php
/**
 * Template Name: Tixello – Artists Directory
 * Description: Listă cu toți artiștii din Tixello, cu search și filtru după prima literă.
 */

get_header();

// ==========================
// 1. Preluare artiști din Core Tixello
// ==========================

// Ideal: definești cheia în wp-config.php:
// define( 'TIXELLO_API_KEY', 'xxx' );

$api_key   = defined( 'TIXELLO_API_KEY' )
    ? TIXELLO_API_KEY
    : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

$artists   = [];
$api_error = false;

$response = wp_remote_get(
    'https://core.tixello.com/api/v1/public/artists',
    [
        'headers' => [
            'X-API-Key' => $api_key,
        ],
        'timeout' => 15,
    ]
);

if ( is_wp_error( $response ) ) {
    $api_error = true;
} else {
    $body = wp_remote_retrieve_body( $response );
    $data = json_decode( $body, true );

    if ( is_array( $data ) ) {
        // Poate veni în diferite forme
        if ( isset( $data['data'] ) && is_array( $data['data'] ) ) {
            $artists = $data['data'];
        } elseif ( isset( $data['artists'] ) && is_array( $data['artists'] ) ) {
            $artists = $data['artists'];
        } else {
            // Cel mai probabil este un array direct de artiști
            $artists = $data;
        }
    }
}

if ( ! is_array( $artists ) ) {
    $artists = [];
}
?>
<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-12 space-y-6">

        <!-- Header + mesaj de eroare API (dacă e cazul) -->
        <header class="space-y-2 border-b border-slate-200 pb-4">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-slate-900">
                        Artists
                    </h1>
                    <p class="mt-1 text-sm text-slate-500">
                        Browse all artists in the Tixello network. Filter by first letter or search by name, genre or country.
                    </p>
                </div>

                <div class="text-right text-xs text-slate-400">
                    <span>Tixello Core · Artists API</span>
                </div>
            </div>

            <?php if ( $api_error ) : ?>
                <div class="mt-3 rounded-lg border border-red-200 bg-red-50 px-4 py-2 text-sm text-red-700">
                    Could not load artists from Tixello Core at this time. Please try again later.
                </div>
            <?php endif; ?>
        </header>

        <!-- Injectăm artiștii + base URL pentru single artist -->
        <script>
            window.tixelloArtists = <?php echo wp_json_encode( $artists ); ?>;
            window.tixelloArtistBaseUrl = "<?php echo esc_js( home_url( '/artists/' ) ); ?>";
        </script>

        <!-- LISTĂ ARTIȘTI: SEARCH + FILTRU ALFABETIC + GRID -->
        <section
            x-data="tixelloArtistsDirectory(window.tixelloArtists || [])"
            x-init="init()"
            class="space-y-6"
        >
            <!-- Search + total + filtru alfabet -->
            <div class="space-y-4">
                <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <!-- Căutare -->
                    <div class="w-full md:w-1/2">
                        <label class="block text-xs font-semibold uppercase tracking-wide text-slate-500">
                            Search artists
                        </label>
                        <div class="mt-1 relative">
                            <input
                                type="text"
                                x-model="searchQuery"
                                placeholder="Type a name, genre or country..."
                                class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm focus:border-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-500/40"
                            />
                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-slate-400">
                                <!-- simplu icon search -->
                                <span class="inline-block h-4 w-4 border border-slate-400 rounded-sm"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Statistici mici -->
                    <div class="flex flex-wrap items-center gap-3 text-xs text-slate-500">
                        <div>
                            <span class="font-semibold text-slate-900" x-text="allArtists.length"></span>
                            <span>artists total</span>
                        </div>
                        <div x-show="filteredArtists.length !== allArtists.length">
                            <span class="font-semibold text-slate-900" x-text="filteredArtists.length"></span>
                            <span>matching filters</span>
                        </div>
                    </div>
                </div>

                <!-- Filtru alfabetic -->
                <div class="flex flex-wrap items-center gap-2 text-xs">
                    <template x-for="letter in letters" :key="letter">
                        <button
                            type="button"
                            @click="if ((letterCounts[letter] || 0) > 0 || letter === 'ALL') activeLetter = letter"
                            class="inline-flex items-center rounded-full border px-3 py-1 font-medium transition"
                            :class="letterButtonClasses(letter)"
                        >
                            <span x-text="letter === 'ALL' ? 'All' : letter"></span>
                            <span
                                class="ml-1 text-[10px]"
                                :class="activeLetter === letter ? 'text-slate-200' : 'text-slate-400'"
                            >
                                (<span x-text="letterCounts[letter] || 0"></span>)
                            </span>
                        </button>
                    </template>
                </div>
            </div>

            <!-- GRID ARTIȘTI -->
            <div>
                <template x-if="filteredArtists.length === 0">
                    <p class="text-sm text-slate-500">
                        No artists match your filters. Try clearing the search or selecting another letter.
                    </p>
                </template>

                <template x-if="filteredArtists.length > 0">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        <template x-for="artist in filteredArtists" :key="artist.id">
                            <a
                                class="group flex h-full flex-col rounded-xl border border-slate-200 bg-white/80 p-3 text-sm text-slate-800 shadow-sm transition hover:border-slate-400 hover:bg-white"
                                :href="artist.url"
                            >
                                <!-- Imagine / avatar -->
                                <div class="mb-3 flex items-center gap-3">
                                    <div class="h-14 w-14 flex-shrink-0 overflow-hidden rounded-full bg-slate-100 ring-1 ring-slate-200">
                                        <template x-if="artist.imageUrl">
                                            <img
                                                :src="artist.imageUrl"
                                                :alt="artist.name"
                                                class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                                                loading="lazy"
                                            />
                                        </template>
                                        <template x-if="!artist.imageUrl">
                                            <div class="flex h-full w-full items-center justify-center text-base font-semibold text-slate-500">
                                                <span x-text="artist.initial"></span>
                                            </div>
                                        </template>
                                    </div>
                                    <div class="min-w-0">
                                        <h2 class="truncate text-sm font-semibold text-slate-900" x-text="artist.name"></h2>
                                        <p class="mt-0.5 truncate text-[11px] text-slate-500" x-text="artist.typesLabel || 'Artist'"></p>
                                    </div>
                                </div>

                                <!-- Genuri -->
                                <div class="mb-2 line-clamp-2 text-[11px] text-slate-600" x-show="artist.genresLabel">
                                    <span class="font-medium text-slate-700">Genres:</span>
                                    <span x-text="artist.genresLabel"></span>
                                </div>

                                <!-- Location -->
                                <div class="mb-2 text-[11px] text-slate-500" x-show="artist.locationLabel">
                                    <span class="font-medium text-slate-700">From:</span>
                                    <span x-text="artist.locationLabel"></span>
                                </div>

                                <!-- Social highlight (ex. YouTube subscribers) -->
                                <div class="mt-auto flex flex-wrap items-center gap-2 pt-2 text-[11px] text-slate-500">
                                    <template x-if="artist.youtubeFollowers">
                                        <span class="inline-flex items-center rounded-full bg-red-50 px-2 py-0.5 font-medium text-red-600">
                                            YT · <span class="ml-1" x-text="artist.youtubeFollowersFormatted"></span>
                                        </span>
                                    </template>
                                    <template x-if="artist.spotifyMonthly">
                                        <span class="inline-flex items-center rounded-full bg-emerald-50 px-2 py-0.5 font-medium text-emerald-700">
                                            Spotify · <span class="ml-1" x-text="artist.spotifyMonthlyFormatted"></span>
                                        </span>
                                    </template>
                                </div>
                            </a>
                        </template>
                    </div>
                </template>
            </div>
        </section>
    </div>

    <!-- LOGICA ALPINE PENTRU DIRECTORUL DE ARTIȘTI -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('tixelloArtistsDirectory', (rawArtists) => ({
                // STATE
                allArtists: [],
                letters: ['ALL', '#', 'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'],
                letterCounts: {},
                activeLetter: 'ALL',
                searchQuery: '',

                init() {
                    this.normalizeArtists(rawArtists || []);
                },

                normalizeArtists(raw) {
                    this.allArtists = [];
                    this.letterCounts = {};

                    const STORAGE_BASE = 'https://core.tixello.com/storage/';
                    const fullStorageUrl = (path) => {
                        if (!path) return '';
                        if (/^https?:\/\//i.test(path)) return path;
                        return STORAGE_BASE + String(path).replace(/^\/+/, '');
                    };

                    const baseUrl = window.tixelloArtistBaseUrl || '/artists/';

                    (raw || []).forEach((a) => {
                        if (!a || typeof a !== 'object') return;

                        const name = (a.name || 'Unknown artist').trim();
                        const initial = name.charAt(0).toUpperCase() || '?';
                        const letterBucket = this.determineLetterBucket(initial);

                        // Location
                        const city    = a.location && a.location.city ? a.location.city : '';
                        const country = a.location && a.location.country ? a.location.country : '';
                        let locationLabel = '';
                        if (city && country) {
                            locationLabel = city + ', ' + country;
                        } else if (city) {
                            locationLabel = city;
                        } else if (country) {
                            locationLabel = country;
                        }

                        // Image
                        let imagePath = '';
                        if (a.images) {
                            imagePath = a.images.main_image_url || a.images.portrait_url || a.images.logo_url || '';
                        }
                        const imageUrl = imagePath ? fullStorageUrl(imagePath) : '';

                        // Types & genres
                        const typesLabel = (a.artist_types || [])
                            .map((t) => t && t.name ? t.name : '')
                            .filter(Boolean)
                            .join(' · ');

                        const genresLabel = (a.artist_genres || [])
                            .map((g) => g && g.name ? g.name : '')
                            .filter(Boolean)
                            .join(' · ');

                        // Stats
                        const youtubeFollowers =
                            a.followers && typeof a.followers.youtube === 'number'
                                ? a.followers.youtube
                                : null;

                        const spotifyMonthly =
                            a.followers && typeof a.followers.spotify_monthly_listeners === 'number'
                                ? a.followers.spotify_monthly_listeners
                                : null;

                        const item = {
                            id: a.id || null,
                            name,
                            slug: a.slug || '',
                            url: baseUrl + (a.slug || '') + '/',
                            initial,
                            letterBucket,
                            imageUrl,
                            locationLabel,
                            typesLabel,
                            genresLabel,
                            // stats
                            youtubeFollowers,
                            youtubeFollowersFormatted: youtubeFollowers ? this.formatNumberShort(youtubeFollowers) : '',
                            spotifyMonthly,
                            spotifyMonthlyFormatted: spotifyMonthly ? this.formatNumberShort(spotifyMonthly) : '',
                        };

                        // Count pe literă
                        if (!this.letterCounts[letterBucket]) {
                            this.letterCounts[letterBucket] = 0;
                        }
                        this.letterCounts[letterBucket]++;

                        this.allArtists.push(item);
                    });

                    // Count total pentru ALL
                    this.letterCounts['ALL'] = this.allArtists.length;

                    // Sortare implicită alfabetică
                    this.allArtists.sort((a, b) => a.name.localeCompare(b.name, 'en', { sensitivity: 'base' }));
                },

                determineLetterBucket(char) {
                    if (!char) return '#';
                    const c = char.toUpperCase();
                    // Acceptăm litere latine + câteva diacritice comune
                    if (/[A-ZĂÂÎȘŞȚŢ]/.test(c)) {
                        // Dacă e diacritică, o putem mappa la litera de bază sau o lăsăm așa
                        if (c === 'Ă' || c === 'Â') return 'A';
                        if (c === 'Î') return 'I';
                        if (c === 'Ș' || c === 'Ş') return 'S';
                        if (c === 'Ț' || c === 'Ţ') return 'T';
                        return c;
                    }
                    return '#';
                },

                letterButtonClasses(letter) {
                    const isActive = this.activeLetter === letter;
                    const count = this.letterCounts[letter] || 0;

                    if (letter === 'ALL') {
                        return isActive
                            ? 'border-slate-900 bg-slate-900 text-white'
                            : 'border-slate-300 bg-white text-slate-800 hover:border-slate-400 hover:bg-slate-50';
                    }

                    if (count === 0) {
                        return 'border-slate-100 bg-slate-50 text-slate-300 cursor-not-allowed';
                    }

                    if (isActive) {
                        return 'border-slate-900 bg-slate-900 text-white';
                    }

                    return 'border-slate-200 bg-slate-50 text-slate-700 hover:border-slate-400 hover:bg-white';
                },

                // Getter: lista filtrată
                get filteredArtists() {
                    let list = [...this.allArtists];

                    // Filtru după literă
                    if (this.activeLetter && this.activeLetter !== 'ALL') {
                        list = list.filter((a) => a.letterBucket === this.activeLetter);
                    }

                    // Filtru după search
                    const q = this.searchQuery.trim().toLowerCase();
                    if (q.length > 0) {
                        list = list.filter((a) => {
                            return (
                                a.name.toLowerCase().includes(q) ||
                                (a.genresLabel && a.genresLabel.toLowerCase().includes(q)) ||
                                (a.locationLabel && a.locationLabel.toLowerCase().includes(q))
                            );
                        });
                    }

                    return list;
                },

                formatNumberShort(num) {
                    if (!num || typeof num !== 'number') return '';
                    if (num >= 1_000_000_000) {
                        return (num / 1_000_000_000).toFixed(1).replace(/\.0$/, '') + 'B';
                    }
                    if (num >= 1_000_000) {
                        return (num / 1_000_000).toFixed(1).replace(/\.0$/, '') + 'M';
                    }
                    if (num >= 1_000) {
                        return (num / 1_000).toFixed(1).replace(/\.0$/, '') + 'K';
                    }
                    return String(num);
                },
            }));
        });
    </script>
</main>

<?php
get_footer();
?>
