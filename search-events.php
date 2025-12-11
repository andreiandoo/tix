<?php
/**
 * Events search component
 * Necesită Alpine.js încărcat în temă.
 */

// 1. Query evenimente
$events_query = new WP_Query([
    'post_type'      => 'event',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
]);

$events   = [];
$calendar = [];

while ( $events_query->have_posts() ) :
    $events_query->the_post();

    $post_id        = get_the_ID();
    $start_date_raw = get_post_meta( $post_id, 'start_date', true ); // dd-mm-yyyy
    $end_date_raw   = get_post_meta( $post_id, 'end_date', true );
    $start_time     = get_post_meta( $post_id, 'start_time', true ); // hh:mm
    $price_meta     = get_post_meta( $post_id, 'price', true );
    $currency       = get_post_meta( $post_id, 'currency', true );
    $poster         = get_the_post_thumbnail_url( $post_id, 'medium_large' );

    // convertim start_date în format Y-m-d pentru JS
    $start_date_iso = null;
    if ( ! empty( $start_date_raw ) ) {
        $dt = DateTime::createFromFormat( 'd-m-Y', $start_date_raw );
        if ( $dt instanceof DateTime ) {
            $start_date_iso = $dt->format( 'Y-m-d' );
        }
    }

    $end_date_iso = null;
    if ( ! empty( $end_date_raw ) ) {
        $dt_end = DateTime::createFromFormat( 'd-m-Y', $end_date_raw );
        if ( $dt_end instanceof DateTime ) {
            $end_date_iso = $dt_end->format( 'Y-m-d' );
        }
    }

    $price_number = null;
    if ( $price_meta !== '' && is_numeric( $price_meta ) ) {
        $price_number = (float) $price_meta;
    }

    $event_item = [
        'id'         => $post_id,
        'title'      => get_the_title(),
        'permalink'  => get_permalink(),
        'poster'     => $poster ?: '',
        'start_date' => $start_date_iso, // Y-m-d
        'end_date'   => $end_date_iso,
        'start_time' => $start_time,
        'price'      => $price_number,   // number sau null
        'currency'   => $currency ?: '',
        'created_at' => get_post_time( 'c', true ), // ISO 8601
    ];

    $events[] = $event_item;

    // Construim calendar doar pentru zilele în care există evenimente
    if ( $start_date_iso ) {
        try {
            $dt_day    = new DateTime( $start_date_iso );
            $month_key = $dt_day->format( 'Y-m' );
            if ( ! isset( $calendar[ $month_key ] ) ) {
                $calendar[ $month_key ] = [
                    'label' => $dt_day->format( 'F Y' ),
                    'days'  => [],
                ];
            }
            if ( ! isset( $calendar[ $month_key ]['days'][ $start_date_iso ] ) ) {
                $calendar[ $month_key ]['days'][ $start_date_iso ] = [
                    'date'          => $start_date_iso,
                    'day'           => $dt_day->format( 'j' ),
                    'weekday_short' => $dt_day->format( 'D' ),
                ];
            }
        } catch ( Exception $e ) {
            // Ignorăm erori de dată
        }
    }

endwhile;

wp_reset_postdata();

// sortăm lunile și zilele din calendar
ksort( $calendar );
foreach ( $calendar as &$month ) {
    ksort( $month['days'] );
}
unset( $month );
?>

<section
    x-data="eventBrowser()"
    x-init='init(<?php echo wp_json_encode( $events ); ?>)'
    class="px-6 py-8 border-b border-slate-200"
>
    <!-- Titlu + bară de filtre -->
    <div class="flex flex-col gap-4 border-b border-slate-200 pb-4">
        <h1 class="text-2xl font-bold tracking-tight text-slate-900">
            Search results
        </h1>

        <div class="flex flex-wrap items-center justify-between gap-4">
            <!-- Stânga: All filters + Select days -->
            <div class="flex flex-wrap items-center gap-3">
                <button
                    type="button"
                    class="inline-flex items-center gap-2 rounded-md border border-slate-300 bg-white px-4 py-2 text-sm text-slate-700"
                >
                    <!-- placeholder icon -->
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
                <div class="flex items-center gap-2 text-sm">
                    <span class="text-slate-700">Sorting</span>
                    <select
                        x-model="sortMode"
                        @change="applyFilters"
                        class="rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                        <option value="upcoming">Upcoming</option>
                        <option value="latest">Latest Events</option>
                    </select>
                </div>

                <!-- Card / Map switch -->
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

    <!-- Calendar (zile cu evenimente) -->
    <?php if ( ! empty( $calendar ) ) : ?>
        <div class="mt-6 border-b border-slate-200 pb-4">
            <div class="flex items-center justify-between mb-3">
                <div class="text-xs font-semibold uppercase tracking-[0.08em] text-slate-500">
                    Calendar
                </div>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-2">
                <?php foreach ( $calendar as $month_key => $month ) : ?>
                    <div class="min-w-[260px] shrink-0">
                        <h3 class="mb-2 text-sm font-semibold text-slate-800">
                            <?php echo esc_html( $month['label'] ); ?>
                        </h3>

                        <div class="flex flex-wrap gap-2">
                            <!-- All dates din luna respectivă -->
                            <button
                                type="button"
                                @click="selectedDate = null; dayFilter = 'all'; applyFilters()"
                                class="flex h-12 w-12 flex-col items-center justify-center rounded-lg border border-slate-200 bg-slate-100 text-[11px] text-slate-700"
                            >
                                <span class="text-base font-semibold">∞</span>
                                <span class="text-[10px]">All</span>
                            </button>

                            <?php foreach ( $month['days'] as $day ) : ?>
                                <button
                                    type="button"
                                    @click="selectCalendarDate('<?php echo esc_js( $day['date'] ); ?>')"
                                    :class="selectedDate === '<?php echo esc_js( $day['date'] ); ?>'
                                        ? 'border-blue-500 bg-blue-50 text-blue-700'
                                        : 'border-slate-200 bg-white text-slate-900'"
                                    class="flex h-12 w-12 flex-col items-center justify-center rounded-lg border text-xs shadow-sm transition"
                                >
                                    <span class="text-sm font-semibold">
                                        <?php echo esc_html( $day['day'] ); ?>
                                    </span>
                                    <span class="text-[10px] text-slate-500">
                                        <?php echo esc_html( $day['weekday_short'] ); ?>
                                    </span>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Rezultate: Card view -->
    <div class="mt-6" x-show="viewMode === 'card'">
        <template x-if="filteredEvents.length === 0">
            <p class="text-sm text-slate-500">
                No events found for the selected filters.
            </p>
        </template>

        <div
            class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3"
            x-show="filteredEvents.length > 0"
        >
            <template x-for="event in filteredEvents" :key="event.id">
                <article class="flex flex-col overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
                    <a
                        :href="event.permalink"
                        class="block aspect-[4/3] bg-slate-100"
                    >
                        <template x-if="event.poster">
                            <img
                                :src="event.poster"
                                alt=""
                                class="h-full w-full object-cover"
                            />
                        </template>
                    </a>

                    <div class="flex flex-1 flex-col gap-2 p-4">
                        <h3 class="text-base font-semibold text-slate-900" x-text="event.title"></h3>

                        <div class="text-sm text-slate-600">
                            <span x-text="formatDate(event.start_date)"></span>
                            <template x-if="event.start_time">
                                <span>
                                    · <span x-text="event.start_time"></span>
                                </span>
                            </template>
                        </div>

                        <div class="mt-auto flex items-center justify-between pt-2">
                            <div class="text-sm font-semibold text-slate-900">
                                <span
                                    x-text="event.price !== null ? formatPrice(event.price) : 'Free'"
                                ></span>
                                <span
                                    x-text="event.price !== null && event.currency ? ' ' + event.currency : ''"
                                ></span>
                            </div>

                            <a
                                :href="event.permalink"
                                class="text-sm font-medium text-blue-600 hover:text-blue-700"
                            >
                                View
                            </a>
                        </div>
                    </div>
                </article>
            </template>
        </div>
    </div>

    <!-- Rezultate: Map view (placeholder) -->
    <div class="mt-6" x-show="viewMode === 'map'">
        <div class="flex h-64 items-center justify-center rounded-xl border border-dashed border-slate-300 bg-slate-50 text-sm text-slate-500">
            Map view coming soon…
        </div>
    </div>
</section>

<script>
    function eventBrowser() {
        return {
            rawEvents: [],
            filteredEvents: [],
            dayFilter: 'all',      // all, today, tomorrow, next7, next30
            sortMode: 'upcoming',  // upcoming, latest
            viewMode: 'card',      // card, map
            selectedDate: null,    // 'YYYY-MM-DD'
            today: null,

            init(eventsFromPhp) {
                const today = new Date();
                today.setHours(0, 0, 0, 0);
                this.today = today;

                this.rawEvents = (eventsFromPhp || []).map((e) => {
                    let dateObj = null;

                    if (e.start_date) {
                        const parts = e.start_date.split('-'); // [Y, m, d]
                        if (parts.length === 3) {
                            dateObj = new Date(
                                parseInt(parts[0], 10),
                                parseInt(parts[1], 10) - 1,
                                parseInt(parts[2], 10)
                            );
                        }
                    }

                    return {
                        ...e,
                        dateObj: dateObj,
                        startTs: dateObj ? dateObj.getTime() : 0,
                        createdTs: e.created_at ? Date.parse(e.created_at) : 0,
                    };
                });

                this.applyFilters();
            },

            onDayFilterChange() {
                // când schimb filtrul de zile, deselectez data din calendar
                this.selectedDate = null;
                this.applyFilters();
            },

            selectCalendarDate(dateStr) {
                // toggle: dacă apăs din nou pe aceeași dată, o deselectez
                if (this.selectedDate === dateStr) {
                    this.selectedDate = null;
                } else {
                    this.selectedDate = dateStr;
                }
                // calendarul are prioritate față de filtrul de range
                this.dayFilter = 'all';
                this.applyFilters();
            },

            applyFilters() {
                let list = this.rawEvents.slice();

                // 1. Filtru după data selectată în calendar
                if (this.selectedDate) {
                    list = list.filter((e) => e.start_date === this.selectedDate);
                } else {
                    // 2. Filtru după interval (Select days)
                    if (this.dayFilter !== 'all') {
                        const start = new Date(this.today.getTime());
                        const end = new Date(this.today.getTime());

                        if (this.dayFilter === 'today') {
                            // deja este azi
                        } else if (this.dayFilter === 'tomorrow') {
                            start.setDate(start.getDate() + 1);
                            end.setDate(end.getDate() + 1);
                        } else if (this.dayFilter === 'next7') {
                            end.setDate(end.getDate() + 7);
                        } else if (this.dayFilter === 'next30') {
                            end.setDate(end.getDate() + 30);
                        }

                        list = list.filter((e) => {
                            if (!e.dateObj) return false;
                            const d = e.dateObj;

                            if (this.dayFilter === 'today' || this.dayFilter === 'tomorrow') {
                                return this.isSameDay(d, start);
                            } else {
                                return d >= start && d <= end;
                            }
                        });
                    }
                }

                // 3. Sortare
                if (this.sortMode === 'upcoming') {
                    list.sort((a, b) => {
                        if (a.startTs === b.startTs) return 0;
                        if (!a.startTs) return 1;
                        if (!b.startTs) return -1;
                        return a.startTs - b.startTs;
                    });
                } else if (this.sortMode === 'latest') {
                    list.sort((a, b) => b.createdTs - a.createdTs);
                }

                this.filteredEvents = list;
            },

            isSameDay(a, b) {
                return a && b &&
                    a.getFullYear() === b.getFullYear() &&
                    a.getMonth() === b.getMonth() &&
                    a.getDate() === b.getDate();
            },

            formatDate(isoDate) {
                if (!isoDate) return '';
                const parts = isoDate.split('-');
                if (parts.length !== 3) return isoDate;

                const d = new Date(
                    parseInt(parts[0], 10),
                    parseInt(parts[1], 10) - 1,
                    parseInt(parts[2], 10)
                );

                return d.toLocaleDateString(undefined, {
                    day: 'numeric',
                    month: 'short',
                    year: 'numeric',
                });
            },

            formatPrice(value) {
                if (value === null || value === undefined) return '';
                try {
                    return new Intl.NumberFormat(undefined, {
                        minimumFractionDigits: 0,
                        maximumFractionDigits: 2,
                    }).format(value);
                } catch (e) {
                    return String(value);
                }
            },
        };
    }
</script>
