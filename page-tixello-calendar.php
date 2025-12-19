<?php
/**
 * Template Name: Tixello – Event Calendar
 * Description: Timeline + search results cu filtre (type, genre, date ranges).
 */

get_header();

// ==========================
// 1. Preluare evenimente din Core Tixello
// ==========================

$api_key = defined('TIXELLO_API_KEY')
    ? TIXELLO_API_KEY
    : '4Ln4AsAdwe63AjIuNVVx3kPFlhyc1JPHXbNTkynDFsg85XUPgMgDrTCAzFbf4nut';

$events    = [];
$api_error = false;

$response = wp_remote_get(
    'https://core.tixello.com/api/v1/public/events',
    [
        'headers' => [
            'X-API-Key' => $api_key,
        ],
        'timeout' => 10,
    ]
);

if ( is_wp_error( $response ) ) {
    $api_error = true;
} else {
    $body = wp_remote_retrieve_body( $response );
    $data = json_decode( $body, true );

    if ( is_array( $data ) ) {
        if ( isset( $data['data'] ) && is_array( $data['data'] ) ) {
            $events = $data['data'];
        } elseif ( isset( $data['events'] ) && is_array( $data['events'] ) ) {
            $events = $data['events'];
        } else {
            $events = $data;
        }
    }
}

if ( ! is_array( $events ) ) {
    $events = [];
}

// Pre-calculate price excluding invitation tickets for each event
if ( function_exists( 'tixello_get_min_price_excluding_invitations' ) ) {
    foreach ( $events as &$ev ) {
        $ev['price_from'] = tixello_get_min_price_excluding_invitations( $ev );
    }
    unset( $ev );
}

// Parametri din URL pentru afișare lângă titlu
$type_param  = isset( $_GET['type'] ) ? sanitize_text_field( wp_unslash( $_GET['type'] ) ) : '';
$genre_param = isset( $_GET['genre'] ) ? sanitize_text_field( wp_unslash( $_GET['genre'] ) ) : '';

$filter_badges = [];

if ( $type_param ) {
    $filter_badges[] = 'type: ' . $type_param;
}
if ( $genre_param ) {
    $filter_badges[] = 'genre: ' . $genre_param;
}

$has_filters   = ! empty( $filter_badges );
$filters_label = $has_filters ? implode( ', ', $filter_badges ) : '';

$view_all_url  = esc_url( home_url( '/search/' ) );
?>
<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-12 space-y-4">

        <!-- Titlu + parametri + buton View all -->
        <div class="flex flex-col gap-4 border-b border-slate-200 pb-4">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-slate-900">
                        Search results
                    </h1>

                    <?php if ( $has_filters ) : ?>
                        <p class="mt-1 text-sm text-slate-500">
                            Filters:
                            <span class="font-medium text-slate-700">
                                <?php echo esc_html( $filters_label ); ?>
                            </span>
                        </p>
                    <?php endif; ?>
                </div>

                <div class="flex flex-wrap items-center gap-2">
                    <?php if ( $has_filters ) : ?>
                        <a
                            href="<?php echo $view_all_url; ?>"
                            class="inline-flex items-center rounded-full border border-slate-300 bg-white px-3 py-1 text-xs font-medium text-slate-700 hover:border-slate-400 hover:bg-slate-50 transition"
                        >
                            View all
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Bara de filtre (days, sorting, view mode) -->
            <div class="flex flex-wrap items-center justify-between gap-4">
                <!-- Stânga: All filters + Select days -->
                <div class="flex flex-wrap items-center gap-3">
                    <button
                        type="button"
                        class="inline-flex items-center gap-2 rounded-md border border-slate-300 bg-white px-4 py-2 text-sm text-slate-700"
                    >
                        <span class="inline-block h-4 w-4 rounded-sm border border-slate-400"></span>
                        <span>All filters</span>
                        <span class="inline-flex h-5 min-w-[20px] items-center justify-center rounded-full bg-blue-600 px-2 text-xs font-medium text-white">
                            1
                        </span>
                    </button>

                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-700">Select days</span>
                        <select
                            x-model="dayFilter"
                            @change="onDayFilterChange"
                            class="rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                            <option value="all">All days</option>
                            <option value="today">Today</option>
                            <option value="tomorrow">Tomorrow</option>
                            <option value="next7">Next 7 days</option>
                            <option value="next30">Next 30 days</option>
                        </select>
                    </div>
                </div>

                <!-- Dreapta: Sorting + Card/Map switch -->
                <div class="flex flex-wrap items-center gap-3">
                    <div class="flex items-center">
                        <select
                            x-model="sortMode"
                            @change="applyFilters"
                            class="rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                            <option value="upcoming">Upcoming</option>
                            <option value="latest">Latest Events</option>
                        </select>
                    </div>

                    <!-- Card / Map switch (momentan doar vizual, viewMode folosit la nevoie) -->
                    <div class="relative inline-flex rounded-lg bg-slate-200 p-1 text-xs">
                        <button
                            type="button"
                            @click="viewMode = 'card'"
                            :class="viewMode === 'card' ? 'bg-white text-slate-900 shadow-sm' : 'text-slate-500'"
                            class="flex items-center gap-1 rounded-md px-3 py-1 transition"
                        >
                            <span class="inline-block h-3 w-3 rounded-sm border border-slate-500"></span>
                            <span>Card</span>
                        </button>
                        <button
                            type="button"
                            @click="viewMode = 'map'"
                            :class="viewMode === 'map' ? 'bg-white text-slate-900 shadow-sm' : 'text-slate-500'"
                            class="flex items-center gap-1 rounded-md px-3 py-1 transition"
                        >
                            <span class="inline-block h-3 w-3 rounded-full border border-slate-500"></span>
                            <span>Map</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Injectăm evenimentele în JS -->
        <script>
            window.tixelloEvents = <?php echo wp_json_encode( $events ); ?>;
        </script>

        <!-- CALENDAR / TIMELINE + SEARCH RESULTS -->
        <section
            x-data="tixelloCalendar(window.tixelloEvents || [])"
            x-init="init()"
            class="space-y-4"
        >
            <!-- NAVIGATOR LUNI GRUPATE PE ANI -->
            <div class="flex items-center gap-2">
                <template x-for="year in years" :key="year.year">
                    <div class="flex items-center gap-x-4">
                        <div class="w-10 text-xs font-bold text-slate-800" x-text="year.year"></div>
                        <div class="flex flex-wrap gap-2">
                            <template x-for="month in year.months" :key="year.year + '-' + month.index">
                                <button
                                    type="button"
                                    class="px-2 py-1 rounded-lg text-[11px] uppercase font-semibold transition"
                                    :class="isSelectedMonth(year.year, month.index)
                                        ? 'bg-slate-900 text-white border border-slate-900'
                                        : 'border border-slate-200 text-slate-600 hover:border-slate-400 hover:bg-slate-50'"
                                    @click="selectMonth(year.year, month.index)"
                                >
                                    <span x-text="month.label"></span>
                                    <span
                                        x-show="month.eventCount"
                                        class="ml-1 text-[9px] font-semibold text-slate-400"
                                    >
                                        · <span x-text="month.eventCount"></span>
                                    </span>
                                </button>
                            </template>
                        </div>
                    </div>
                </template>
            </div>

            <!-- STRIP ZILE (TOATE ZILELE DIN URMĂTOARELE 3 LUNI) GRUPATE PE LUNI -->
            <div class="relative">
                <div
                    class="flex items-stretch gap-6 overflow-x-auto pb-2 whitespace-nowrap scrollbar-thin"
                    x-ref="daysScroller"
                >
                    <template x-for="month in monthBlocks" :key="month.year + '-' + month.monthIndex">
                        <div class="flex flex-col items-start gap-1 shrink-0">
                            <div
                                class="text-xs font-semibold text-slate-600 capitalize"
                                x-text="month.label"
                            ></div>

                            <div class="flex items-stretch gap-2">
                                <template x-for="day in month.days" :key="day.dateStr">
                                    <button
                                        type="button"
                                        class="flex flex-col items-center justify-between w-14 h-16 p-3 rounded-xl border text-xs leading-tight shrink-0 transition"
                                        :class="dayClasses(day)"
                                        @click="selectDay(day)"
                                        :data-date="day.dateStr"
                                    >
                                        <span class="text-xl font-bold" x-text="day.day"></span>
                                        <span class="text-[11px] capitalize" x-text="day.weekdayShort"></span>

                                        <span
                                            x-show="day.isToday"
                                            class="mt-0.5 text-[9px] uppercase tracking-wide"
                                            :class="isSelectedDay(day) ? 'text-white' : 'text-blue-600'"
                                        >
                                            Azi
                                        </span>

                                        <span
                                            class="mt-0.5 h-1.5 w-1.5 rounded-full"
                                            :class="
                                                day.hasCancelled
                                                    ? 'bg-red-500'
                                                    : (day.hasPostponed
                                                        ? 'bg-amber-500'
                                                        : (day.hasEvents
                                                            ? 'bg-emerald-500'
                                                            : 'bg-transparent'))
                                            "
                                        ></span>
                                    </button>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- LISTA EVENIMENTE (filtrate după date + type + genre) -->
            <div class="border border-slate-200 rounded-2xl p-4 min-h-[80px] bg-white/70">
                <template x-if="filteredEvents.length === 0">
                    <p class="text-sm text-slate-500">
                        Nu există evenimente care să corespundă filtrelor selectate.
                    </p>
                </template>

                <template x-if="filteredEvents.length > 0">
                    <ul class="space-y-3">
                        <template x-for="event in filteredEvents" :key="event.id">
                            <li
                                class="flex items-start gap-3 rounded-xl border border-slate-200 bg-white p-3 hover:border-slate-400 hover:bg-slate-50 transition"
                                :class="event.url ? 'cursor-pointer' : 'cursor-default'"
                                @click="if (event.url) { window.open(event.url, '_blank'); }"
                            >
                                <!-- Poster -->
                                <div
                                    class="h-16 w-12 flex-shrink-0 overflow-hidden rounded-lg bg-slate-100"
                                    x-show="event.posterUrl"
                                >
                                    <img
                                        :src="event.posterUrl"
                                        :alt="event.title"
                                        class="h-full w-full object-cover"
                                        loading="lazy"
                                    />
                                </div>

                                <!-- Detalii -->
                                <div class="flex-1 flex items-start justify-between gap-3">
                                    <div>
                                        <p class="text-sm font-semibold text-slate-900" x-text="event.title"></p>

                                        <p class="mt-0.5 text-xs text-slate-500">
                                            <span x-text="event.venue"></span>
                                            <span x-show="event.city">
                                                · <span x-text="event.city"></span>
                                            </span>
                                            <span x-show="event.tenantName">
                                                · <span x-text="event.tenantName"></span>
                                            </span>
                                        </p>

                                        <!-- Status badges -->
                                        <div class="mt-1 flex flex-wrap gap-1">
                                            <span
                                                x-show="event.isCancelled"
                                                class="inline-flex items-center rounded-full bg-red-100 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-red-700"
                                            >
                                                Anulat
                                            </span>
                                            <span
                                                x-show="!event.isCancelled && event.isPostponed"
                                                class="inline-flex items-center rounded-full bg-amber-100 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-amber-700"
                                            >
                                                Amânat
                                            </span>
                                            <span
                                                x-show="event.isSoldOut"
                                                class="inline-flex items-center rounded-full bg-slate-200 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-slate-800"
                                            >
                                                Sold-out
                                            </span>
                                            <span
                                                x-show="event.doorSalesOnly"
                                                class="inline-flex items-center rounded-full bg-blue-50 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-blue-700"
                                            >
                                                Doar la intrare
                                            </span>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <p class="text-xs font-medium text-slate-700" x-text="event.timeLabel"></p>
                                        <p class="text-[11px] text-slate-400" x-text="event.dateLabel"></p>

                                        <p
                                            x-show="event.priceFrom"
                                            class="mt-1 text-xs text-slate-600"
                                        >
                                            De la
                                            <span class="font-semibold" x-text="event.priceFrom + ' RON'"></span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </template>
                    </ul>
                </template>
            </div>
        </section>
    </div>

    <!-- LOGICA ALPINE PENTRU CALENDAR + FILTRE TYPE/GENRE -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('tixelloCalendar', (rawEvents) => ({
                // CONFIG
                monthsAhead: 3,

                // STATE
                today: null,
                days: [],
                years: [],
                eventsByDate: {},
                allEvents: [],
                selected: {
                    type: 'all',      // 'all' | 'day' | 'month'
                    dateStr: null,
                    year: null,
                    monthIndex: null,
                },

                // filtre / view
                dayFilter: 'all',
                sortMode: 'upcoming',
                viewMode: 'card',

                // filtre venite din URL
                typeFilter: null,   // event_types.name
                genreFilter: null,  // event_genres.name

                init() {
                    this.today = this.stripTime(new Date());

                    this.normalizeEvents(rawEvents || []);
                    this.buildDaysRange();
                    this.buildYearMonthGroups();

                    // citim parametrii din URL (type, genre) pentru prefiltrare
                    const params    = new URLSearchParams(window.location.search);
                    const typeParam  = params.get('type');
                    const genreParam = params.get('genre');

                    this.typeFilter  = typeParam ? typeParam.trim() : null;
                    this.genreFilter = genreParam ? genreParam.trim() : null;

                    // start: toate evenimentele
                    this.selected.type       = 'all';
                    this.selected.dateStr    = null;
                    this.selected.year       = null;
                    this.selected.monthIndex = null;

                    this.$nextTick(() => {
                        this.scrollToToday();
                    });
                },

                // Transformă evenimentele brute într-un format intern + index pe zi + liste de type/genre
                normalizeEvents(rawEvents) {
                    this.eventsByDate = {};

                    const STORAGE_BASE = 'https://core.tixello.com/storage/';

                    const fullStorageUrl = (path) => {
                        if (!path) return null;
                        if (/^https?:\/\//.test(path)) return path;
                        return STORAGE_BASE + String(path).replace(/^\/+/, '');
                    };

                    this.allEvents = (rawEvents || []).map((ev) => {
                        const date    = this.parseEventDate(ev);
                        const dateStr = this.formatYmd(date);

                        const prettyDate = date.toLocaleDateString('ro-RO', {
                            day: 'numeric',
                            month: 'short',
                            year: 'numeric',
                        });
                        const prettyTime = date.toLocaleTimeString('ro-RO', {
                            hour: '2-digit',
                            minute: '2-digit',
                        });

                        const venueName  = ev.venue && ev.venue.name ? ev.venue.name : '';
                        const venueCity  = ev.venue && ev.venue.city ? ev.venue.city : '';
                        const tenantName = ev.tenant
                            ? (ev.tenant.public_name || ev.tenant.name || '')
                            : '';

                        const url = ev.tenant && ev.tenant.event_url
                            ? ev.tenant.event_url
                            : null;

                        const typeNames = Array.isArray(ev.event_types)
                            ? ev.event_types
                                .map(t => t && t.name ? String(t.name) : null)
                                .filter(Boolean)
                            : [];

                        const genreNames = Array.isArray(ev.event_genres)
                            ? ev.event_genres
                                .map(g => g && g.name ? String(g.name) : null)
                                .filter(Boolean)
                            : [];

                        const normalized = {
                            id: ev.id ?? (dateStr + '-' + Math.random().toString(16).slice(2)),

                            title: ev.title ?? ev.name ?? 'Untitled event',
                            slug: ev.slug ?? null,
                            url,

                            venue: venueName,
                            city: venueCity,
                            tenantName: tenantName,

                            posterUrl: fullStorageUrl(ev.poster_url),
                            heroImageUrl: fullStorageUrl(ev.hero_image_url),

                            date,
                            dateStr,
                            dateLabel: prettyDate,
                            timeLabel: prettyTime,

                            isPostponed: !!ev.is_postponed,
                            isCancelled: !!ev.is_cancelled,
                            postponedReason: ev.postponed_reason || null,
                            cancelReason: ev.cancel_reason || null,
                            isSoldOut: !!ev.is_sold_out,
                            doorSalesOnly: !!ev.door_sales_only,

                            priceFrom: ev.price_from ?? null,

                            // pentru filtrare după type & genre
                            eventTypes: typeNames,
                            eventGenres: genreNames,
                        };

                        if (!this.eventsByDate[dateStr]) {
                            this.eventsByDate[dateStr] = [];
                        }
                        this.eventsByDate[dateStr].push(normalized);

                        return normalized;
                    });
                },

                // Citește data din câmpurile corecte (postponed vs start)
                parseEventDate(ev) {
                    const usePostponed = ev.is_postponed && ev.postponed_date;

                    const dateRaw = (usePostponed ? ev.postponed_date : ev.start_date) || null;
                    const timeRaw = (usePostponed ? ev.postponed_start_time : ev.start_time) || null;

                    if (!dateRaw) return this.today;

                    const datePart = String(dateRaw).split('T')[0];
                    const parts    = datePart.split('-').map(Number);
                    if (parts.length !== 3) return this.today;

                    const [y, m, d] = parts;

                    let hh = 0, mm = 0;
                    if (timeRaw) {
                        const tParts = String(timeRaw).split(':');
                        if (tParts.length >= 2) {
                            hh = parseInt(tParts[0]) || 0;
                            mm = parseInt(tParts[1]) || 0;
                        }
                    }

                    return new Date(y, m - 1, d, hh, mm);
                },

                // Construiește toate zilele din intervalul [azi, azi + 3 luni]
                buildDaysRange() {
                    this.days = [];

                    const start = new Date(this.today);
                    const end   = new Date(this.today);
                    end.setMonth(end.getMonth() + this.monthsAhead);

                    let lastMonthKey = null;

                    for (let d = new Date(start); d <= end; d.setDate(d.getDate() + 1)) {
                        const date       = new Date(d);
                        const dateStr    = this.formatYmd(date);
                        const year       = date.getFullYear();
                        const monthIndex = date.getMonth();
                        const monthKey   = year + '-' + monthIndex;

                        const showMonthLabel = monthKey !== lastMonthKey;
                        lastMonthKey = monthKey;

                        const eventsForDay = this.eventsByDate[dateStr] || [];
                        const hasEvents    = eventsForDay.length > 0;
                        const hasPostponed = eventsForDay.some((ev) => ev.isPostponed);
                        const hasCancelled = eventsForDay.some((ev) => ev.isCancelled);

                        this.days.push({
                            date,
                            dateStr,
                            year,
                            monthIndex,
                            weekdayShort: date.toLocaleDateString('ro-RO', { weekday: 'short' }),
                            day: date.getDate(),
                            isToday: dateStr === this.formatYmd(this.today),
                            hasEvents,
                            hasPostponed,
                            hasCancelled,
                            showMonthLabel,
                            monthLabelFull: date.toLocaleDateString('ro-RO', { month: 'long' }),
                        });
                    }
                },

                // Grupează lunile pe ani, pentru navigatorul de sus
                buildYearMonthGroups() {
                    const byYear = {};

                    this.days.forEach((day) => {
                        if (!byYear[day.year]) byYear[day.year] = {};

                        if (!byYear[day.year][day.monthIndex]) {
                            byYear[day.year][day.monthIndex] = {
                                index: day.monthIndex,
                                label: day.date.toLocaleDateString('ro-RO', { month: 'short' }),
                                eventCount: 0,
                            };
                        }

                        const dateStr = day.dateStr;
                        if (this.eventsByDate[dateStr]) {
                            byYear[day.year][day.monthIndex].eventCount += this.eventsByDate[dateStr].length;
                        }
                    });

                    this.years = Object.keys(byYear)
                        .sort()
                        .map((yearStr) => {
                            const yearNum   = Number(yearStr);
                            const monthsObj = byYear[yearNum];
                            const months    = Object.values(monthsObj).sort((a, b) => a.index - b.index);

                            return { year: yearNum, months };
                        });
                },

                // Structura pentru strip-ul de jos, grupat pe luni
                get monthBlocks() {
                    const blocks = {};

                    this.days.forEach((day) => {
                        const key = day.year + '-' + day.monthIndex;

                        if (!blocks[key]) {
                            blocks[key] = {
                                year: day.year,
                                monthIndex: day.monthIndex,
                                label: day.date.toLocaleDateString('ro-RO', { month: 'long' }),
                                days: [],
                            };
                        }

                        blocks[key].days.push(day);
                    });

                    return Object.values(blocks).sort((a, b) => {
                        if (a.year !== b.year) return a.year - b.year;
                        return a.monthIndex - b.monthIndex;
                    });
                },

                // Asigură că "azi" e vizibil în timeline
                scrollToToday() {
                    const todayDay = this.days.find((day) => day.isToday);
                    if (!todayDay) return;

                    const scroller = this.$refs.daysScroller;
                    if (!scroller) return;

                    const el = scroller.querySelector('[data-date="' + todayDay.dateStr + '"]');
                    if (!el) return;

                    scroller.scrollLeft = el.offsetLeft - 24;
                },

                // Selectează o zi anume
                selectDay(day) {
                    this.selected = {
                        type: 'day',
                        dateStr: day.dateStr,
                        year: day.year,
                        monthIndex: day.monthIndex,
                    };
                    this.dayFilter   = 'all';
                },

                // Selectează o lună anume
                selectMonth(year, monthIndex) {
                    this.selected = {
                        type: 'month',
                        year,
                        monthIndex,
                        dateStr: null,
                    };
                    this.dayFilter = 'all';

                    const firstDay = this.days.find(
                        (d) => d.year === year && d.monthIndex === monthIndex
                    );
                    if (!firstDay) return;

                    const scroller = this.$refs.daysScroller;
                    if (!scroller) return;

                    const el = scroller.querySelector('[data-date="' + firstDay.dateStr + '"]');
                    if (!el) return;

                    el.scrollIntoView({
                        behavior: 'smooth',
                        inline: 'start',
                        block: 'nearest',
                    });
                },

                isSelectedDay(day) {
                    return this.selected.type === 'day' && this.selected.dateStr === day.dateStr;
                },

                isSelectedMonth(year, monthIndex) {
                    return (
                        this.selected.type === 'month' &&
                        this.selected.year === year &&
                        this.selected.monthIndex === monthIndex
                    );
                },

                dayClasses(day) {
                    if (this.isSelectedDay(day)) {
                        return 'border-slate-900 bg-slate-900 text-white';
                    }
                    if (day.hasCancelled) {
                        return 'border-red-300 bg-red-50 text-red-900';
                    }
                    if (day.hasPostponed) {
                        return 'border-amber-300 bg-amber-50 text-amber-900';
                    }
                    if (day.hasEvents) {
                        return 'border-emerald-300 bg-emerald-50 text-slate-900';
                    }
                    return 'border-slate-200 text-slate-700 hover:border-slate-400';
                },

                // Evenimentele afișate (date + dayFilter + typeFilter + genreFilter + sort)
                get filteredEvents() {
                    let list = [...this.allEvents];

                    // Filtru după zi/lună selectate
                    if (this.selected.type === 'day' && this.selected.dateStr) {
                        list = this.eventsByDate[this.selected.dateStr] || [];
                    } else if (this.selected.type === 'month') {
                        list = this.allEvents.filter((ev) => {
                            return (
                                ev.date.getFullYear() === this.selected.year &&
                                ev.date.getMonth() === this.selected.monthIndex
                            );
                        });
                    }

                    // Filtru după range (today/tomorrow/next7/next30)
                    const start      = this.today;
                    const evDateYmd  = (ev) => this.formatYmd(ev.date);

                    if (this.dayFilter === 'today') {
                        const todayStr = this.formatYmd(start);
                        list = list.filter((ev) => evDateYmd(ev) === todayStr);
                    } else if (this.dayFilter === 'tomorrow') {
                        const tomorrow = new Date(start);
                        tomorrow.setDate(tomorrow.getDate() + 1);
                        const tStr = this.formatYmd(tomorrow);
                        list = list.filter((ev) => evDateYmd(ev) === tStr);
                    } else if (this.dayFilter === 'next7') {
                        const end7 = new Date(start);
                        end7.setDate(end7.getDate() + 7);
                        list = list.filter((ev) => ev.date >= start && ev.date <= end7);
                    } else if (this.dayFilter === 'next30') {
                        const end30 = new Date(start);
                        end30.setDate(end30.getDate() + 30);
                        list = list.filter((ev) => ev.date >= start && ev.date <= end30);
                    }

                    // Filtru după type (event_types.name)
                    if (this.typeFilter) {
                        const t = this.typeFilter.toLowerCase();
                        list = list.filter((ev) => {
                            if (!Array.isArray(ev.eventTypes)) return false;
                            return ev.eventTypes.some((name) =>
                                String(name).toLowerCase() === t
                            );
                        });
                    }

                    // Filtru după genre (event_genres.name)
                    if (this.genreFilter) {
                        const g = this.genreFilter.toLowerCase();
                        list = list.filter((ev) => {
                            if (!Array.isArray(ev.eventGenres)) return false;
                            return ev.eventGenres.some((name) =>
                                String(name).toLowerCase() === g
                            );
                        });
                    }

                    // Sortare
                    if (this.sortMode === 'latest') {
                        return [...list].sort((a, b) => b.date - a.date);
                    }
                    return [...list].sort((a, b) => a.date - b.date);
                },

                onDayFilterChange() {
                    if (this.dayFilter === 'all') {
                        return;
                    }

                    this.selected.type       = 'all';
                    this.selected.dateStr    = null;
                    this.selected.year       = null;
                    this.selected.monthIndex = null;
                },

                applyFilters() {
                    // sortarea se face în getter-ul filteredEvents
                },

                // Helpers
                stripTime(date) {
                    return new Date(date.getFullYear(), date.getMonth(), date.getDate());
                },

                formatYmd(date) {
                    const y = date.getFullYear();
                    const m = String(date.getMonth() + 1).padStart(2, '0');
                    const d = String(date.getDate()).padStart(2, '0');
                    return `${y}-${m}-${d}`;
                },
            }));
        });
    </script>
</main>

<?php
get_footer();
?>
