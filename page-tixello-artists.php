<?php
/**
 * Template Name: Tixello – Artists Directory
 * Description: Browse all artists with search, filter by letter, and infinite load more.
 */

// Country to flag emoji mapping (full names AND ISO codes)
function tixello_get_country_flag( $country ) {
    if ( empty( $country ) ) return '';

    $flags = [
        // Full names
        'Romania' => '🇷🇴', 'United States' => '🇺🇸', 'USA' => '🇺🇸', 'UK' => '🇬🇧', 'United Kingdom' => '🇬🇧',
        'Germany' => '🇩🇪', 'France' => '🇫🇷', 'Italy' => '🇮🇹', 'Spain' => '🇪🇸', 'Netherlands' => '🇳🇱',
        'Belgium' => '🇧🇪', 'Austria' => '🇦🇹', 'Switzerland' => '🇨🇭', 'Poland' => '🇵🇱', 'Hungary' => '🇭🇺',
        'Czech Republic' => '🇨🇿', 'Czechia' => '🇨🇿', 'Slovakia' => '🇸🇰', 'Bulgaria' => '🇧🇬', 'Serbia' => '🇷🇸',
        'Croatia' => '🇭🇷', 'Slovenia' => '🇸🇮', 'Greece' => '🇬🇷', 'Turkey' => '🇹🇷', 'Portugal' => '🇵🇹',
        'Sweden' => '🇸🇪', 'Norway' => '🇳🇴', 'Denmark' => '🇩🇰', 'Finland' => '🇫🇮', 'Ireland' => '🇮🇪',
        'Canada' => '🇨🇦', 'Australia' => '🇦🇺', 'New Zealand' => '🇳🇿', 'Japan' => '🇯🇵', 'South Korea' => '🇰🇷',
        'China' => '🇨🇳', 'India' => '🇮🇳', 'Brazil' => '🇧🇷', 'Mexico' => '🇲🇽', 'Argentina' => '🇦🇷',
        'Russia' => '🇷🇺', 'Ukraine' => '🇺🇦', 'Moldova' => '🇲🇩', 'Israel' => '🇮🇱', 'South Africa' => '🇿🇦',
        'Egypt' => '🇪🇬', 'Morocco' => '🇲🇦', 'Nigeria' => '🇳🇬', 'Kenya' => '🇰🇪', 'Colombia' => '🇨🇴',
        'Chile' => '🇨🇱', 'Peru' => '🇵🇪', 'Venezuela' => '🇻🇪', 'Thailand' => '🇹🇭', 'Indonesia' => '🇮🇩',
        'Philippines' => '🇵🇭', 'Malaysia' => '🇲🇾', 'Singapore' => '🇸🇬', 'Vietnam' => '🇻🇳', 'Taiwan' => '🇹🇼',
        'Hong Kong' => '🇭🇰', 'UAE' => '🇦🇪', 'Saudi Arabia' => '🇸🇦', 'Jamaica' => '🇯🇲', 'Cuba' => '🇨🇺',
        'Puerto Rico' => '🇵🇷', 'Dominican Republic' => '🇩🇴', 'Lithuania' => '🇱🇹', 'Latvia' => '🇱🇻',
        'Estonia' => '🇪🇪', 'Belarus' => '🇧🇾', 'Albania' => '🇦🇱', 'North Macedonia' => '🇲🇰', 'Bosnia' => '🇧🇦',
        'Montenegro' => '🇲🇪', 'Kosovo' => '🇽🇰', 'Iceland' => '🇮🇸', 'Luxembourg' => '🇱🇺', 'Malta' => '🇲🇹',
        'Cyprus' => '🇨🇾', 'Georgia' => '🇬🇪', 'Armenia' => '🇦🇲', 'Azerbaijan' => '🇦🇿', 'Kazakhstan' => '🇰🇿',
        // ISO country codes
        'RO' => '🇷🇴', 'US' => '🇺🇸', 'GB' => '🇬🇧', 'DE' => '🇩🇪', 'FR' => '🇫🇷', 'IT' => '🇮🇹', 'ES' => '🇪🇸',
        'NL' => '🇳🇱', 'BE' => '🇧🇪', 'AT' => '🇦🇹', 'CH' => '🇨🇭', 'PL' => '🇵🇱', 'HU' => '🇭🇺', 'CZ' => '🇨🇿',
        'SK' => '🇸🇰', 'BG' => '🇧🇬', 'RS' => '🇷🇸', 'HR' => '🇭🇷', 'SI' => '🇸🇮', 'GR' => '🇬🇷', 'TR' => '🇹🇷',
        'PT' => '🇵🇹', 'SE' => '🇸🇪', 'NO' => '🇳🇴', 'DK' => '🇩🇰', 'FI' => '🇫🇮', 'IE' => '🇮🇪', 'CA' => '🇨🇦',
        'AU' => '🇦🇺', 'NZ' => '🇳🇿', 'JP' => '🇯🇵', 'KR' => '🇰🇷', 'CN' => '🇨🇳', 'IN' => '🇮🇳', 'BR' => '🇧🇷',
        'MX' => '🇲🇽', 'AR' => '🇦🇷', 'RU' => '🇷🇺', 'UA' => '🇺🇦', 'MD' => '🇲🇩', 'IL' => '🇮🇱', 'ZA' => '🇿🇦',
        'EG' => '🇪🇬', 'MA' => '🇲🇦', 'NG' => '🇳🇬', 'KE' => '🇰🇪', 'CO' => '🇨🇴', 'CL' => '🇨🇱', 'PE' => '🇵🇪',
        'VE' => '🇻🇪', 'TH' => '🇹🇭', 'ID' => '🇮🇩', 'PH' => '🇵🇭', 'MY' => '🇲🇾', 'SG' => '🇸🇬', 'VN' => '🇻🇳',
        'TW' => '🇹🇼', 'HK' => '🇭🇰', 'AE' => '🇦🇪', 'SA' => '🇸🇦', 'JM' => '🇯🇲', 'CU' => '🇨🇺', 'PR' => '🇵🇷',
        'DO' => '🇩🇴', 'LT' => '🇱🇹', 'LV' => '🇱🇻', 'EE' => '🇪🇪', 'BY' => '🇧🇾', 'AL' => '🇦🇱', 'MK' => '🇲🇰',
        'BA' => '🇧🇦', 'ME' => '🇲🇪', 'XK' => '🇽🇰', 'IS' => '🇮🇸', 'LU' => '🇱🇺', 'MT' => '🇲🇹', 'CY' => '🇨🇾',
        'GE' => '🇬🇪', 'AM' => '🇦🇲', 'AZ' => '🇦🇿', 'KZ' => '🇰🇿',
    ];

    return $flags[ $country ] ?? '🌍';
}

get_header();

// Initial load: 100 artists from page 1
$initial_result = tixello_fetch_artists_paginated( [
    'page'     => 1,
    'per_page' => 100,
] );

$initial_artists = $initial_result['artists'] ?? [];
$pagination = $initial_result['pagination'] ?? [];

$total_artists = $pagination['total'] ?? 0;
$current_page = $pagination['current_page'] ?? 1;
$last_page = $pagination['last_page'] ?? 1;

// Generate nonce for AJAX
$ajax_nonce = wp_create_nonce( 'tixello_artists_nonce' );
?>
<main id="primary" class="site-main bg-gradient-to-b from-slate-50 to-white min-h-screen">

    <!-- Hero Header -->
    <section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%239C92AC\" fill-opacity=\"0.05\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>

        <div class="container mx-auto px-4 py-16 md:py-20 relative">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 rounded-full bg-white/10 backdrop-blur-sm px-4 py-2 text-sm font-medium text-white/90 mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span>Tixello Artists Network</span>
                </div>

                <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight mb-4">
                    Discover Artists
                </h1>

                <p class="text-lg text-slate-300 mb-8 max-w-2xl">
                    Explore <span class="text-white font-semibold" id="total-count"><?php echo number_format_i18n( $total_artists ); ?></span>
                    artists from around the world. Search by name, genre, or location.
                </p>

                <!-- Search Box -->
                <div class="relative max-w-xl">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="artist-search"
                        placeholder="Search by name, genre, or country..."
                        class="w-full pl-12 pr-4 py-4 rounded-2xl bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-white/30 focus:border-transparent transition-all"
                    />
                    <div id="search-loading" class="hidden absolute inset-y-0 right-4 flex items-center">
                        <svg class="animate-spin h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container mx-auto px-4 py-8">

        <!-- Letter Filter -->
        <div class="mb-8">
            <div class="flex flex-wrap items-center gap-2" id="letter-filter">
                <button
                    type="button"
                    data-letter="ALL"
                    class="letter-btn active px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 bg-slate-900 text-white shadow-lg shadow-slate-900/25"
                >
                    All
                </button>
                <button type="button" data-letter="#" class="letter-btn px-3 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-white border border-slate-200 text-slate-600 hover:border-slate-300 hover:bg-slate-50">#</button>
                <?php
                $letters = range( 'A', 'Z' );
                foreach ( $letters as $letter ) :
                ?>
                    <button
                        type="button"
                        data-letter="<?php echo $letter; ?>"
                        class="letter-btn px-3 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-white border border-slate-200 text-slate-600 hover:border-slate-300 hover:bg-slate-50"
                    >
                        <?php echo $letter; ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Stats Bar -->
        <div class="flex flex-wrap items-center justify-between gap-4 mb-6 pb-6 border-b border-slate-200">
            <div class="flex items-center gap-4 text-sm text-slate-600">
                <span>
                    Showing <span id="showing-count" class="font-semibold text-slate-900"><?php echo count( $initial_artists ); ?></span>
                    of <span id="total-filtered" class="font-semibold text-slate-900"><?php echo number_format_i18n( $total_artists ); ?></span> artists
                </span>
                <span id="filter-info" class="hidden text-slate-500">
                    · Filtered by: <span id="active-filter" class="font-medium text-slate-700"></span>
                </span>
            </div>

            <div id="search-results-info" class="hidden text-sm">
                <span class="px-3 py-1.5 rounded-full bg-blue-50 text-blue-700 font-medium">
                    <span id="search-results-count">0</span> results for "<span id="search-query-display"></span>"
                </span>
            </div>
        </div>

        <!-- Artists Grid - populated by JavaScript for random order -->
        <div id="artists-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4">
            <!-- Loading skeleton -->
            <div id="loading-skeleton" class="col-span-full">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4">
                    <?php for ( $i = 0; $i < 10; $i++ ) : ?>
                        <div class="animate-pulse rounded-2xl bg-white border border-slate-200 overflow-hidden">
                            <div class="aspect-square bg-slate-200"></div>
                            <div class="p-4">
                                <div class="h-5 bg-slate-200 rounded mb-2 w-3/4"></div>
                                <div class="h-4 bg-slate-100 rounded mb-2 w-1/2"></div>
                                <div class="h-3 bg-slate-100 rounded w-2/3"></div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <?php if ( $current_page < $last_page ) : ?>
            <div id="load-more-container" class="mt-10 text-center">
                <button
                    type="button"
                    id="load-more-btn"
                    class="inline-flex items-center gap-3 px-8 py-4 rounded-2xl bg-slate-900 text-white font-semibold text-lg shadow-xl shadow-slate-900/25 hover:bg-slate-800 hover:shadow-2xl hover:shadow-slate-900/30 transition-all duration-300 hover:-translate-y-0.5"
                >
                    <span>Load More Artists</span>
                    <svg id="load-more-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    <svg id="load-more-spinner" class="hidden animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>

                <p class="mt-3 text-sm text-slate-500">
                    Page <span id="current-page"><?php echo $current_page; ?></span> of <span id="total-pages"><?php echo $last_page; ?></span>
                </p>
            </div>
        <?php endif; ?>

        <!-- Empty State -->
        <div id="empty-state" class="hidden py-16 text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-slate-100 mb-6">
                <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-slate-900 mb-2">No artists found</h3>
            <p class="text-slate-500 mb-6">Try adjusting your search or filter criteria</p>
            <button
                type="button"
                id="reset-filters"
                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-slate-100 text-slate-700 font-medium hover:bg-slate-200 transition-colors"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                Reset All Filters
            </button>
        </div>
    </section>
</main>

<!-- JavaScript for AJAX functionality -->
<script>
(function() {
    const config = {
        ajaxUrl: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        nonce: '<?php echo $ajax_nonce; ?>',
        baseUrl: '<?php echo home_url( '/artists/' ); ?>',
        storageBase: 'https://core.tixello.com/storage/',
        perPage: 500, // Load 500 per page for better letter filtering
        currentPage: <?php echo $current_page; ?>,
        totalPages: <?php echo $last_page; ?>,
        totalArtists: <?php echo $total_artists; ?>,
        minResultsForLetter: 20, // Minimum results before auto-loading more
    };

    let state = {
        page: 0,
        letter: 'ALL',
        search: '',
        loading: false,
        allLoadedArtists: [],      // Raw artists in load order
        shuffledArtists: [],       // Shuffled version for display
        searchTimeout: null,
        initialLoadDone: false,
    };

    // Convert 2-letter country code to flag emoji dynamically
    // This works for ANY ISO 3166-1 alpha-2 country code (RO, US, DE, etc.)
    function countryCodeToFlag(code) {
        if (!code) return '';

        // If it's a 2-letter code, convert to flag emoji
        const upperCode = code.toUpperCase().trim();
        if (upperCode.length === 2 && /^[A-Z]{2}$/.test(upperCode)) {
            // Regional indicator symbols: A=🇦 starts at 0x1F1E6
            const codePoints = upperCode.split('').map(char => 0x1F1E6 + char.charCodeAt(0) - 65);
            return String.fromCodePoint(...codePoints);
        }

        // If it's a full country name, use mapping
        const nameToCode = {
            'Romania': 'RO', 'United States': 'US', 'USA': 'US', 'UK': 'GB', 'United Kingdom': 'GB',
            'Germany': 'DE', 'France': 'FR', 'Italy': 'IT', 'Spain': 'ES', 'Netherlands': 'NL',
            'Belgium': 'BE', 'Austria': 'AT', 'Switzerland': 'CH', 'Poland': 'PL', 'Hungary': 'HU',
            'Czech Republic': 'CZ', 'Czechia': 'CZ', 'Slovakia': 'SK', 'Bulgaria': 'BG', 'Serbia': 'RS',
            'Croatia': 'HR', 'Slovenia': 'SI', 'Greece': 'GR', 'Turkey': 'TR', 'Portugal': 'PT',
            'Sweden': 'SE', 'Norway': 'NO', 'Denmark': 'DK', 'Finland': 'FI', 'Ireland': 'IE',
            'Canada': 'CA', 'Australia': 'AU', 'New Zealand': 'NZ', 'Japan': 'JP', 'South Korea': 'KR',
            'China': 'CN', 'India': 'IN', 'Brazil': 'BR', 'Mexico': 'MX', 'Argentina': 'AR',
            'Russia': 'RU', 'Ukraine': 'UA', 'Moldova': 'MD', 'Israel': 'IL', 'South Africa': 'ZA',
        };

        const isoCode = nameToCode[code];
        if (isoCode) {
            const codePoints = isoCode.split('').map(char => 0x1F1E6 + char.charCodeAt(0) - 65);
            return String.fromCodePoint(...codePoints);
        }

        return '';
    }

    // DOM Elements
    const grid = document.getElementById('artists-grid');
    const loadMoreBtn = document.getElementById('load-more-btn');
    const loadMoreContainer = document.getElementById('load-more-container');
    const searchInput = document.getElementById('artist-search');
    const searchLoading = document.getElementById('search-loading');
    const letterBtns = document.querySelectorAll('.letter-btn');
    const showingCount = document.getElementById('showing-count');
    const totalFiltered = document.getElementById('total-filtered');
    const filterInfo = document.getElementById('filter-info');
    const activeFilter = document.getElementById('active-filter');
    const searchResultsInfo = document.getElementById('search-results-info');
    const searchResultsCount = document.getElementById('search-results-count');
    const searchQueryDisplay = document.getElementById('search-query-display');
    const currentPageEl = document.getElementById('current-page');
    const totalPagesEl = document.getElementById('total-pages');
    const loadMoreIcon = document.getElementById('load-more-icon');
    const loadMoreSpinner = document.getElementById('load-more-spinner');
    const emptyState = document.getElementById('empty-state');
    const resetFiltersBtn = document.getElementById('reset-filters');

    // Shuffle array (Fisher-Yates)
    function shuffleArray(array) {
        const arr = [...array];
        for (let i = arr.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [arr[i], arr[j]] = [arr[j], arr[i]];
        }
        return arr;
    }

    // Create artist card HTML
    function createArtistCard(artist) {
        const imageHtml = artist.imageUrl
            ? `<img src="${artist.imageUrl}" alt="${artist.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy" />`
            : `<div class="w-full h-full flex items-center justify-center"><span class="text-5xl font-bold text-slate-300">${artist.initial}</span></div>`;

        // Flag in top-left corner (dynamically generated from country code)
        const flag = countryCodeToFlag(artist.country);
        const flagHtml = flag ? `<span class="absolute top-3 left-3 text-2xl drop-shadow-lg" title="${artist.country}">${flag}</span>` : '';

        // Stats in top-right
        const statsHtml = (artist.spMonthlyFmt || artist.ytFollowersFmt) ? `
            <div class="absolute top-3 right-3 flex flex-col gap-1.5">
                ${artist.spMonthlyFmt ? `<span class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-emerald-500/90 backdrop-blur-sm text-white text-xs font-medium">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
                    ${artist.spMonthlyFmt}
                </span>` : ''}
                ${artist.ytFollowersFmt ? `<span class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-red-500/90 backdrop-blur-sm text-white text-xs font-medium">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    ${artist.ytFollowersFmt}
                </span>` : ''}
            </div>
        ` : '';

        // Location with city only (flag is now on card image)
        const locationHtml = artist.city ? `
            <div class="mt-auto pt-2 flex items-center gap-1.5 text-xs text-slate-500">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span>${artist.city}</span>
            </div>
        ` : '';

        return `
            <a href="${config.baseUrl}${artist.slug}/" class="artist-card group relative flex flex-col rounded-2xl bg-white border border-slate-200 overflow-hidden transition-all duration-300 hover:shadow-xl hover:shadow-slate-200/50 hover:border-slate-300 hover:-translate-y-1" data-id="${artist.id}">
                <div class="relative aspect-square bg-gradient-to-br from-slate-100 to-slate-200 overflow-hidden">
                    ${imageHtml}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    ${flagHtml}
                    ${statsHtml}
                </div>
                <div class="p-4 flex-1 flex flex-col">
                    <h2 class="font-bold text-slate-900 text-lg mb-1 line-clamp-1 group-hover:text-blue-600 transition-colors">${artist.name}</h2>
                    <p class="text-sm text-slate-500 mb-2">${artist.typesLabel}</p>
                    ${artist.genresLabel ? `<p class="text-xs text-slate-400 mb-2 line-clamp-1">${artist.genresLabel}</p>` : ''}
                    ${locationHtml}
                </div>
            </a>
        `;
    }

    // Filter artists from loaded pool
    function filterArtists(artists) {
        return artists.filter(artist => {
            // Letter filter
            if (state.letter !== 'ALL') {
                // Get artist's letter bucket, fallback to first char of name
                const bucket = artist.letterBucket || (artist.name ? artist.name.charAt(0).toUpperCase() : '#');
                if (bucket !== state.letter) return false;
            }

            // Search filter
            if (state.search) {
                const q = state.search.toLowerCase();
                const nameMatch = artist.name && artist.name.toLowerCase().includes(q);
                const locationMatch = artist.locationLabel && artist.locationLabel.toLowerCase().includes(q);
                const genreMatch = artist.genresArray && artist.genresArray.some(g => g.toLowerCase().includes(q));

                if (!nameMatch && !locationMatch && !genreMatch) return false;
            }

            return true;
        });
    }

    // Render filtered artists (filters from pre-shuffled list)
    function renderFilteredArtists() {
        console.log('renderFilteredArtists called. Letter:', state.letter, 'Search:', state.search);
        console.log('Total shuffled artists:', state.shuffledArtists.length);

        // Debug: show unique letter buckets
        if (state.shuffledArtists.length > 0) {
            const buckets = [...new Set(state.shuffledArtists.map(a => a.letterBucket))].sort();
            console.log('Available letter buckets:', buckets);
        }

        // Filter from the already-shuffled list to maintain random order
        let filtered = filterArtists(state.shuffledArtists);
        console.log('Filtered results:', filtered.length);

        // Remove loading skeleton on first render
        const skeleton = document.getElementById('loading-skeleton');
        if (skeleton) skeleton.remove();

        grid.innerHTML = '';

        if (filtered.length > 0) {
            const html = filtered.map(createArtistCard).join('');
            grid.innerHTML = html;
            emptyState.classList.add('hidden');
            grid.classList.remove('hidden');
        } else {
            grid.classList.add('hidden');
            emptyState.classList.remove('hidden');
        }

        // Update counts
        showingCount.textContent = filtered.length;

        // Update search results info
        if (state.search) {
            searchResultsCount.textContent = filtered.length;
        }

        return filtered.length;
    }

    // Load artists via AJAX - adds to pool
    async function loadArtists(page = 1, autoLoadForLetter = false) {
        if (state.loading) return 0;

        state.loading = true;

        if (loadMoreBtn) {
            loadMoreBtn.disabled = true;
            loadMoreIcon.classList.add('hidden');
            loadMoreSpinner.classList.remove('hidden');
        }

        if (searchLoading && !autoLoadForLetter) {
            searchLoading.classList.remove('hidden');
        }

        const formData = new FormData();
        formData.append('action', 'tixello_load_artists');
        formData.append('nonce', config.nonce);
        formData.append('page', page);
        formData.append('per_page', config.perPage);

        let newCount = 0;

        try {
            const response = await fetch(config.ajaxUrl, {
                method: 'POST',
                body: formData,
            });

            const result = await response.json();

            if (result.success) {
                const { artists, pagination } = result.data;

                // Add to pool (avoid duplicates)
                const existingIds = new Set(state.allLoadedArtists.map(a => a.id));
                const newArtists = artists.filter(a => !existingIds.has(a.id));
                state.allLoadedArtists = [...state.allLoadedArtists, ...newArtists];

                // Re-shuffle ALL loaded artists for true random order
                state.shuffledArtists = shuffleArray([...state.allLoadedArtists]);

                newCount = newArtists.length;

                console.log('Loaded', newCount, 'new artists. Total:', state.allLoadedArtists.length);
                console.log('Sample artist:', artists[0]);

                // Update state
                state.page = pagination.current_page || page;
                config.totalPages = pagination.last_page || 1;

                // Update UI counts
                totalFiltered.textContent = config.totalArtists.toLocaleString();
                if (currentPageEl) currentPageEl.textContent = state.page;
                if (totalPagesEl) totalPagesEl.textContent = config.totalPages;

                // Show/hide load more
                if (loadMoreContainer) {
                    if (state.page >= config.totalPages) {
                        loadMoreContainer.classList.add('hidden');
                    } else {
                        loadMoreContainer.classList.remove('hidden');
                    }
                }

                // Re-render with filters
                renderFilteredArtists();
            }
        } catch (error) {
            console.error('Error loading artists:', error);
        } finally {
            state.loading = false;

            if (loadMoreBtn) {
                loadMoreBtn.disabled = false;
                loadMoreIcon.classList.remove('hidden');
                loadMoreSpinner.classList.add('hidden');
            }

            if (searchLoading) {
                searchLoading.classList.add('hidden');
            }
        }

        return newCount;
    }

    // Search handler with debounce
    function handleSearch(query) {
        state.search = query.trim();

        if (state.search) {
            searchResultsInfo.classList.remove('hidden');
            searchQueryDisplay.textContent = state.search;
        } else {
            searchResultsInfo.classList.add('hidden');
        }

        // Just re-render from loaded pool
        renderFilteredArtists();
    }

    // Letter filter handler - filters from currently loaded artists only
    function handleLetterFilter(letter) {
        console.log('Letter filter clicked:', letter);
        state.letter = letter;

        // Update button styles
        letterBtns.forEach(btn => {
            if (btn.dataset.letter === letter) {
                btn.classList.remove('bg-white', 'border-slate-200', 'text-slate-600');
                btn.classList.add('bg-slate-900', 'text-white', 'shadow-lg', 'shadow-slate-900/25', 'active');
            } else {
                btn.classList.add('bg-white', 'border-slate-200', 'text-slate-600');
                btn.classList.remove('bg-slate-900', 'text-white', 'shadow-lg', 'shadow-slate-900/25', 'active');
            }
        });

        // Update filter info
        if (letter !== 'ALL') {
            filterInfo.classList.remove('hidden');
            activeFilter.textContent = letter === '#' ? 'Numbers/Symbols' : `Letter "${letter}"`;
        } else {
            filterInfo.classList.add('hidden');
        }

        // Render from currently loaded artists
        const count = renderFilteredArtists();
        console.log('Letter filter result count:', count);
    }

    // Reset all filters
    function resetFilters() {
        state.letter = 'ALL';
        state.search = '';

        searchInput.value = '';
        searchResultsInfo.classList.add('hidden');
        filterInfo.classList.add('hidden');

        letterBtns.forEach(btn => {
            if (btn.dataset.letter === 'ALL') {
                btn.classList.remove('bg-white', 'border-slate-200', 'text-slate-600');
                btn.classList.add('bg-slate-900', 'text-white', 'shadow-lg', 'shadow-slate-900/25', 'active');
            } else {
                btn.classList.add('bg-white', 'border-slate-200', 'text-slate-600');
                btn.classList.remove('bg-slate-900', 'text-white', 'shadow-lg', 'shadow-slate-900/25', 'active');
            }
        });

        renderFilteredArtists();
    }

    // Event listeners
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            clearTimeout(state.searchTimeout);
            state.searchTimeout = setTimeout(() => {
                handleSearch(e.target.value);
            }, 300);
        });
    }

    letterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            handleLetterFilter(btn.dataset.letter);
        });
    });

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
            loadArtists(state.page + 1);
        });
    }

    if (resetFiltersBtn) {
        resetFiltersBtn.addEventListener('click', resetFilters);
    }

    // Initial load - fetch page 1 via AJAX to populate state.allLoadedArtists
    loadArtists(1);
})();
</script>

<?php
get_footer();
?>
