<?php
/**
 * Single dynamic event page for Tixello Core events.
 * URL: /events/{slug}/
 */

get_header();

// Slug-ul din URL
$slug = get_query_var( 'tixello_event_slug' );

// Dacă nu avem slug, 404
if ( ! $slug ) {
    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    get_template_part( '404' );
    get_footer();
    exit;
}

// Luăm evenimentul din API
$event = tixello_get_event_by_slug( $slug );

if ( ! $event || ! is_array( $event ) ) {
    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    get_template_part( '404' );
    get_footer();
    exit;
}

// Helper pt. imagini
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

// Date / ora
$use_postponed = ! empty( $event['is_postponed'] ) && ! empty( $event['postponed_date'] );

$start_iso = $use_postponed
    ? ( isset( $event['postponed_date'] ) ? $event['postponed_date'] : null )
    : ( isset( $event['start_date'] ) ? $event['start_date'] : null );

$end_iso   = isset( $event['end_date'] ) ? $event['end_date'] : null;

$start_time_str = $use_postponed
    ? ( $event['postponed_start_time'] ?? null )
    : ( $event['start_time'] ?? null );

$door_time_str  = $use_postponed
    ? ( $event['postponed_door_time'] ?? null )
    : ( $event['door_time'] ?? null );

// Formatare date
function tixello_event_pretty_date( $iso ) {
    if ( ! $iso ) return '';
    try {
        $dt = new DateTime( $iso );
    } catch ( Exception $e ) {
        return '';
    }
    return $dt->format( 'j F Y' ); // ex: 30 November 2025
}

function tixello_event_pretty_time( $time_string ) {
    if ( empty( $time_string ) ) return '';
    $parts = explode( ':', $time_string );
    if ( count( $parts ) < 2 ) return esc_html( $time_string );
    return sprintf( '%02d:%02d', intval( $parts[0] ), intval( $parts[1] ) );
}

$start_date_pretty = tixello_event_pretty_date( $start_iso );
$end_date_pretty   = tixello_event_pretty_date( $end_iso );
$start_time_pretty = tixello_event_pretty_time( $start_time_str );
$door_time_pretty  = tixello_event_pretty_time( $door_time_str );

// Venue
$venue_name = $event['venue']['name']    ?? '';
$venue_addr = $event['venue']['address'] ?? '';
$venue_city = $event['venue']['city']    ?? '';

// Preț minim
$price_from = $event['price_from'] ?? null;

// Imagini
$poster_url = $full_storage_url( $event['poster_url'] ?? '' );
$hero_url   = $full_storage_url( $event['hero_image_url'] ?? '' );

// URL event (la tenant)
$event_url = '';
if ( ! empty( $event['tenant']['event_url'] ) ) {
    $event_url = esc_url( $event['tenant']['event_url'] );
} elseif ( ! empty( $event['event_website_url'] ) ) {
    $event_url = esc_url( $event['event_website_url'] );
} elseif ( ! empty( $event['website_url'] ) ) {
    $event_url = esc_url( $event['website_url'] );
} elseif ( ! empty( $event['facebook_url'] ) ) {
    $event_url = esc_url( $event['facebook_url'] );
}

// Statusuri
$is_cancelled = ! empty( $event['is_cancelled'] );
$is_postponed = ! $is_cancelled && ! empty( $event['is_postponed'] );
$is_sold_out  = ! empty( $event['is_sold_out'] );
$door_only    = ! empty( $event['door_sales_only'] );

// Pentru JSON-LD
$schema_status = 'https://schema.org/EventScheduled';
if ( $is_cancelled ) {
    $schema_status = 'https://schema.org/EventCancelled';
} elseif ( $is_postponed ) {
    $schema_status = 'https://schema.org/EventPostponed';
}

// JSON-LD minimal pentru SEO
$schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'Event',
    'name'            => $event['title'] ?? '',
    'description'     => wp_strip_all_tags( $event['short_description'] ?? $event['description'] ?? '' ),
    'eventStatus'     => $schema_status,
    'startDate'       => $start_iso,
    'endDate'         => $end_iso ?: $start_iso,
    'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
    'image'           => array_filter( [ $hero_url ?: $poster_url ] ),
    'location'        => [
        '@type'   => 'Place',
        'name'    => $venue_name,
        'address' => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => $venue_addr,
            'addressLocality' => $venue_city,
            'addressCountry'  => 'RO',
        ],
    ],
];

if ( ! empty( $event_url ) ) {
    $schema['url'] = $event_url;
}

// Ticket types (ptr afișare)
$ticket_types = is_array( $event['ticket_types'] ?? null ) ? $event['ticket_types'] : [];

?>
<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-10 space-y-8">

        <!-- JSON-LD pt SEO -->
        <script type="application/ld+json">
            <?php echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ); ?>
        </script>

        <!-- Breadcrumb simplu -->
        <nav class="text-xs text-slate-500 mb-2">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:underline">Home</a>
            <span class="mx-1">/</span>
            <a href="<?php echo esc_url( home_url( '/search/' ) ); ?>" class="hover:underline">Events</a>
            <span class="mx-1">/</span>
            <span class="text-slate-700">
                <?php echo esc_html( $event['title'] ?? '' ); ?>
            </span>
        </nav>

        <!-- Hero + info -->
        <div class="grid gap-8 md:grid-cols-[2fr,1fr] items-start">
            <!-- Stânga: imagine + descriere -->
            <div class="space-y-6">
                <!-- Hero image -->
                <?php if ( $hero_url || $poster_url ) : ?>
                    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-slate-100 max-h-[420px]">
                        <img
                            src="<?php echo $hero_url ? $hero_url : $poster_url; ?>"
                            alt="<?php echo esc_attr( $event['title'] ?? '' ); ?>"
                            class="h-full w-full object-cover"
                            loading="lazy"
                        />
                    </div>
                <?php endif; ?>

                <!-- Titlu + status -->
                <header class="space-y-3">
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900">
                        <?php echo esc_html( $event['title'] ?? '' ); ?>
                    </h1>

                    <div class="flex flex-wrap items-center gap-2 text-xs">
                        <?php if ( $is_cancelled ) : ?>
                            <span class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 font-semibold uppercase tracking-wide text-red-700">
                                Event cancelled
                            </span>
                        <?php elseif ( $is_postponed ) : ?>
                            <span class="inline-flex items-center rounded-full bg-amber-100 px-3 py-1 font-semibold uppercase tracking-wide text-amber-700">
                                Event postponed
                            </span>
                        <?php endif; ?>

                        <?php if ( $is_sold_out ) : ?>
                            <span class="inline-flex items-center rounded-full bg-slate-200 px-3 py-1 font-semibold uppercase tracking-wide text-slate-800">
                                Sold-out
                            </span>
                        <?php endif; ?>

                        <?php if ( $door_only ) : ?>
                            <span class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 font-semibold uppercase tracking-wide text-blue-700">
                                Tickets at the door
                            </span>
                        <?php endif; ?>
                    </div>
                </header>

                <!-- Info scurtă: dată, venue -->
                <section class="space-y-3 rounded-2xl border border-slate-200 bg-white p-4 text-sm text-slate-700">
                    <div class="flex flex-col gap-1">
                        <div class="font-semibold text-slate-900">Date & time</div>
                        <div>
                            <?php if ( $start_date_pretty ) : ?>
                                <div>
                                    <?php echo esc_html( $start_date_pretty ); ?>
                                    <?php if ( $end_date_pretty ) : ?>
                                        – <?php echo esc_html( $end_date_pretty ); ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ( $start_time_pretty ) : ?>
                                <div>
                                    <span class="font-medium">Show time:</span>
                                    <?php echo esc_html( $start_time_pretty ); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ( $door_time_pretty ) : ?>
                                <div>
                                    <span class="font-medium">Doors:</span>
                                    <?php echo esc_html( $door_time_pretty ); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if ( $is_postponed && ! empty( $event['postponed_reason'] ) ) : ?>
                            <p class="mt-2 text-xs text-amber-700 bg-amber-50 border border-amber-100 rounded-lg px-3 py-2">
                                <strong>Postponed:</strong>
                                <?php echo esc_html( $event['postponed_reason'] ); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ( $is_cancelled && ! empty( $event['cancel_reason'] ) ) : ?>
                            <p class="mt-2 text-xs text-red-700 bg-red-50 border border-red-100 rounded-lg px-3 py-2">
                                <strong>Cancelled:</strong>
                                <?php echo esc_html( $event['cancel_reason'] ); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <?php if ( $venue_name || $venue_addr || $venue_city ) : ?>
                        <div class="pt-3 border-t border-slate-100">
                            <div class="font-semibold text-slate-900">Venue</div>
                            <div class="mt-1">
                                <?php if ( $venue_name ) : ?>
                                    <div class="font-medium"><?php echo esc_html( $venue_name ); ?></div>
                                <?php endif; ?>
                                <?php if ( $venue_addr || $venue_city ) : ?>
                                    <div class="text-slate-600">
                                        <?php echo esc_html( $venue_addr ); ?>
                                        <?php if ( $venue_city ) : ?>
                                            <?php echo $venue_addr ? ', ' : ''; ?>
                                            <?php echo esc_html( $venue_city ); ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ( ! empty( $event['tenant']['public_name'] ) ) : ?>
                        <div class="pt-3 border-t border-slate-100">
                            <div class="font-semibold text-slate-900">Organizer</div>
                            <div class="mt-1 text-slate-700">
                                <?php echo esc_html( $event['tenant']['public_name'] ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </section>

                <!-- Descriere lungă -->
                <?php if ( ! empty( $event['description'] ) ) : ?>
                    <section class="prose prose-sm max-w-none prose-headings:text-slate-900 prose-p:text-slate-700 prose-a:text-blue-600 prose-a:no-underline hover:prose-a:underline">
                        <?php echo wp_kses_post( $event['description'] ); ?>
                    </section>
                <?php elseif ( ! empty( $event['short_description'] ) ) : ?>
                    <section class="text-sm text-slate-700">
                        <?php echo esc_html( $event['short_description'] ); ?>
                    </section>
                <?php endif; ?>
            </div>

            <!-- Dreapta: card bilete / preț -->
            <aside class="space-y-4">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm space-y-4">
                    <?php if ( ! is_null( $price_from ) ) : ?>
                        <div>
                            <p class="text-xs uppercase tracking-wide text-slate-500">Tickets from</p>
                            <p class="text-2xl font-bold text-slate-900">
                                <?php echo esc_html( $price_from ); ?> RON
                            </p>
                        </div>
                    <?php endif; ?>

                    <?php if ( $event_url ) : ?>
                        <a
                            href="<?php echo $event_url; ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex w-full items-center justify-center rounded-full bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 focus:ring-offset-slate-50"
                        >
                            Buy tickets
                        </a>
                    <?php else : ?>
                        <p class="text-xs text-slate-500">
                            Ticket link is not available at the moment.
                        </p>
                    <?php endif; ?>

                    <!-- Ticket types -->
                    <?php if ( ! empty( $ticket_types ) ) : ?>
                        <div class="pt-3 border-t border-slate-100 space-y-2">
                            <h2 class="text-xs font-semibold uppercase tracking-wide text-slate-500">
                                Ticket options
                            </h2>
                            <ul class="space-y-2 text-xs">
                                <?php foreach ( $ticket_types as $tt ) : ?>
                                    <?php
                                    $tt_name   = $tt['name'] ?? '';
                                    $tt_price  = $tt['price'] ?? null;
                                    $tt_sale   = $tt['sale_price'] ?? null;
                                    $tt_curr   = $tt['currency'] ?? 'RON';
                                    $tt_avail  = $tt['available'] ?? null;
                                    $tt_cap    = $tt['capacity'] ?? null;
                                    ?>
                                    <li class="flex items-center justify-between rounded-lg bg-slate-50 px-3 py-2">
                                        <div class="space-y-0.5">
                                            <div class="font-medium text-slate-900">
                                                <?php echo esc_html( $tt_name ); ?>
                                            </div>
                                            <div class="text-[11px] text-slate-500">
                                                <?php if ( ! is_null( $tt_avail ) && ! is_null( $tt_cap ) ) : ?>
                                                    <?php echo intval( $tt_avail ); ?> / <?php echo intval( $tt_cap ); ?> available
                                                <?php elseif ( ! is_null( $tt_cap ) ) : ?>
                                                    Capacity: <?php echo intval( $tt_cap ); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="text-right text-xs">
                                            <?php if ( ! is_null( $tt_sale ) && $tt_sale < $tt_price ) : ?>
                                                <div class="font-semibold text-slate-900">
                                                    <?php echo esc_html( $tt_sale ); ?> <?php echo esc_html( $tt_curr ); ?>
                                                </div>
                                                <div class="text-[10px] text-slate-400 line-through">
                                                    <?php echo esc_html( $tt_price ); ?> <?php echo esc_html( $tt_curr ); ?>
                                                </div>
                                            <?php elseif ( ! is_null( $tt_price ) ) : ?>
                                                <div class="font-semibold text-slate-900">
                                                    <?php echo esc_html( $tt_price ); ?> <?php echo esc_html( $tt_curr ); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Shortcut: la event website / social -->
                <div class="rounded-2xl border border-dashed border-slate-200 bg-slate-50 p-4 text-xs text-slate-600 space-y-1">
                    <?php if ( ! empty( $event['event_website_url'] ) ) : ?>
                        <p>
                            Official event page:
                            <a href="<?php echo esc_url( $event['event_website_url'] ); ?>" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
                                <?php echo esc_html( $event['event_website_url'] ); ?>
                            </a>
                        </p>
                    <?php endif; ?>

                    <?php if ( ! empty( $event['facebook_url'] ) ) : ?>
                        <p>
                            Facebook event:
                            <a href="<?php echo esc_url( $event['facebook_url'] ); ?>" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
                                View on Facebook
                            </a>
                        </p>
                    <?php endif; ?>

                    <?php if ( ! empty( $event['tenant']['website'] ) ) : ?>
                        <p>
                            Organizer website:
                            <a href="<?php echo esc_url( $event['tenant']['website'] ); ?>" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
                                <?php echo esc_html( $event['tenant']['website'] ); ?>
                            </a>
                        </p>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php
get_footer();
