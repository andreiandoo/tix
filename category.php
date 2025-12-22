<?php
/**
 * Template: Category Archive
 * Description: Category archive page with dark theme
 */

get_header();

// ==========================
// Multilanguage Support (Polylang)
// ==========================
$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';

$t = [
    // Hero
    'badge' => $current_lang === 'ro' ? 'Categorie' : 'Category',
    'articles_in' => $current_lang === 'ro' ? 'articole in' : 'articles in',

    // Search
    'search_placeholder' => $current_lang === 'ro' ? 'Cauta in aceasta categorie...' : 'Search in this category...',

    // Categories
    'all_posts' => $current_lang === 'ro' ? 'Toate articolele' : 'All Posts',
    'blog_home' => $current_lang === 'ro' ? 'Blog' : 'Blog',

    // Reading time
    'min_read' => $current_lang === 'ro' ? 'min lectura' : 'min read',

    // Empty state
    'no_articles' => $current_lang === 'ro' ? 'Niciun articol in aceasta categorie' : 'No articles in this category',
    'check_back' => $current_lang === 'ro' ? 'Revino in curand pentru continut nou!' : 'Check back soon for new content!',

    // Pagination
    'previous' => $current_lang === 'ro' ? 'Inapoi' : 'Previous',
    'next' => $current_lang === 'ro' ? 'Inainte' : 'Next',

    // Newsletter
    'newsletter_title' => $current_lang === 'ro' ? 'Fii la curent' : 'Stay in the Loop',
    'newsletter_subtitle' => $current_lang === 'ro'
        ? 'Primeste cele mai recente articole, actualizari de produs si informatii din industrie saptamanal.'
        : 'Get the latest articles, product updates, and industry insights delivered to your inbox weekly.',
    'email_placeholder' => $current_lang === 'ro' ? 'Introdu email-ul tau' : 'Enter your email',
    'subscribe' => $current_lang === 'ro' ? 'Aboneaza-te' : 'Subscribe',
    'no_spam' => $current_lang === 'ro' ? 'Fara spam, te poti dezabona oricand.' : 'No spam, unsubscribe anytime.',
];

// Get current category
$category = get_queried_object();
$category_name = $category->name;
$category_description = $category->description;
$category_count = $category->count;
$category_slug = $category->slug;

// Get all categories for navigation
$categories = get_categories( array(
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => true,
) );

// Category colors mapping
$category_colors = array(
    'product-updates'    => 'violet',
    'industry-insights'  => 'amber',
    'event-tips'         => 'emerald',
    'case-studies'       => 'cyan',
    'company-news'       => 'pink',
    'taxe-impozite'      => 'orange',
    'ghiduri'            => 'blue',
    'noutati'            => 'green',
    'tutoriale'          => 'purple',
);

// Get current category color
$cat_color = $category_colors[ $category_slug ] ?? 'violet';

// Pagination
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

// Main query for category articles
$args = array(
    'posts_per_page' => 12,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'cat'            => $category->term_id,
);

$category_query = new WP_Query( $args );
?>

<main class="font-body bg-zinc-950 text-zinc-200 antialiased min-h-screen">

    <!-- Hero Section -->
    <section class="relative py-16 sm:py-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-<?php echo esc_attr( $cat_color ); ?>-950/30 via-transparent to-transparent"></div>

        <!-- Floating accent -->
        <div class="absolute top-32 right-1/4 w-64 h-64 bg-<?php echo esc_attr( $cat_color ); ?>-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <!-- Breadcrumb -->
                <div class="flex items-center justify-center gap-2 text-sm text-white/40 mb-6">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-white/60 transition-colors"><?php echo $current_lang === 'ro' ? 'Acasa' : 'Home'; ?></a>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="hover:text-white/60 transition-colors"><?php echo esc_html( $t['blog_home'] ); ?></a>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    <span class="text-white/60"><?php echo esc_html( $category_name ); ?></span>
                </div>

                <!-- Badge -->
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-<?php echo esc_attr( $cat_color ); ?>-600/10 border border-<?php echo esc_attr( $cat_color ); ?>-500/20 text-<?php echo esc_attr( $cat_color ); ?>-400 text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                    <?php echo esc_html( $t['badge'] ); ?>
                </span>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                    <?php echo esc_html( $category_name ); ?>
                </h1>

                <?php if ( $category_description ) : ?>
                <p class="text-lg sm:text-xl text-white/60 max-w-2xl mx-auto mb-4">
                    <?php echo esc_html( $category_description ); ?>
                </p>
                <?php endif; ?>

                <p class="text-sm text-white/40">
                    <?php echo esc_html( $category_count ); ?> <?php echo esc_html( $t['articles_in'] ); ?> <?php echo esc_html( strtolower( $category_name ) ); ?>
                </p>
            </div>

            <!-- Search -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 max-w-3xl mx-auto">
                <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="relative flex-1 w-full sm:max-w-md">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input type="search" name="s" placeholder="<?php echo esc_attr( $t['search_placeholder'] ); ?>" class="w-full pl-12 pr-4 py-3 rounded-xl bg-zinc-900/80 border border-white/10 text-white placeholder-white/40 focus:outline-none focus:border-<?php echo esc_attr( $cat_color ); ?>-500/50 transition-all">
                    <input type="hidden" name="post_type" value="post">
                    <input type="hidden" name="cat" value="<?php echo esc_attr( $category->term_id ); ?>">
                </form>
            </div>
        </div>
    </section>

    <!-- Categories Navigation -->
    <section class="py-6 border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-3 overflow-x-auto pb-2 custom-scrollbar">
                <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-white/70 hover:text-white hover:border-white/20 text-sm font-medium whitespace-nowrap transition-all">
                    <?php echo esc_html( $t['all_posts'] ); ?>
                </a>
                <?php foreach ( $categories as $cat ) :
                    $is_current = $cat->term_id === $category->term_id;
                    $this_color = $category_colors[ $cat->slug ] ?? 'violet';
                ?>
                    <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                       class="px-4 py-2 rounded-full <?php echo $is_current ? 'bg-' . $this_color . '-600 text-white' : 'bg-white/5 border border-white/10 text-white/70 hover:text-white hover:border-white/20'; ?> text-sm font-medium whitespace-nowrap transition-all">
                        <?php echo esc_html( $cat->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <?php if ( $category_query->have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <?php while ( $category_query->have_posts() ) : $category_query->the_post();
                    $post_image = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    $reading_time = ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 );
                ?>
                <a href="<?php the_permalink(); ?>" class="group block">
                    <article class="h-full flex flex-col rounded-2xl bg-zinc-900/50 border border-white/5 overflow-hidden hover:border-<?php echo esc_attr( $cat_color ); ?>-500/30 transition-all">
                        <div class="aspect-[16/10] overflow-hidden bg-zinc-800">
                            <?php if ( $post_image ) : ?>
                                <img src="<?php echo esc_url( $post_image ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <?php else : ?>
                                <div class="w-full h-full flex items-center justify-center text-white/20">
                                    <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                    </svg>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="flex-1 p-6 flex flex-col">
                            <span class="self-start px-3 py-1 rounded-full bg-<?php echo esc_attr( $cat_color ); ?>-600/20 text-<?php echo esc_attr( $cat_color ); ?>-400 text-xs font-medium mb-4">
                                <?php echo esc_html( $category_name ); ?>
                            </span>
                            <h3 class="text-lg font-bold text-white group-hover:text-<?php echo esc_attr( $cat_color ); ?>-400 transition-colors mb-3">
                                <?php the_title(); ?>
                            </h3>
                            <p class="text-sm text-white/50 flex-1 line-clamp-2 mb-4">
                                <?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?>
                            </p>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-white/40"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
                                <span class="text-white/40"><?php echo esc_html( $reading_time ); ?> <?php echo esc_html( $t['min_read'] ); ?></span>
                            </div>
                        </div>
                    </article>
                </a>
                <?php endwhile; ?>

            </div>

            <!-- Pagination -->
            <?php if ( $category_query->max_num_pages > 1 ) : ?>
            <div class="text-center mt-12">
                <?php
                $big = 999999999;
                echo paginate_links( array(
                    'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format'    => '?paged=%#%',
                    'current'   => max( 1, $paged ),
                    'total'     => $category_query->max_num_pages,
                    'prev_text' => '&larr; ' . esc_html( $t['previous'] ),
                    'next_text' => esc_html( $t['next'] ) . ' &rarr;',
                    'type'      => 'list',
                    'before_page_number' => '',
                    'after_page_number'  => '',
                ) );
                ?>
            </div>
            <?php endif; ?>

            <?php else : ?>
            <div class="text-center py-16">
                <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-white/5 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['no_articles'] ); ?></h3>
                <p class="text-white/50"><?php echo esc_html( $t['check_back'] ); ?></p>
            </div>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative p-8 sm:p-12 rounded-3xl bg-gradient-to-br from-<?php echo esc_attr( $cat_color ); ?>-600/20 via-pink-600/10 to-cyan-600/20 border border-<?php echo esc_attr( $cat_color ); ?>-500/20 overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-<?php echo esc_attr( $cat_color ); ?>-600/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-cyan-600/20 rounded-full blur-3xl"></div>

                <div class="relative text-center max-w-2xl mx-auto">
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">
                        <?php echo esc_html( $t['newsletter_title'] ); ?>
                    </h2>
                    <p class="text-white/60 mb-8">
                        <?php echo esc_html( $t['newsletter_subtitle'] ); ?>
                    </p>

                    <?php
                    // Check if Fluent Forms shortcode exists
                    if ( shortcode_exists( 'fluentform' ) ) :
                        echo do_shortcode( '[fluentform id="newsletter"]' );
                    else :
                    ?>
                    <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                        <input type="email" placeholder="<?php echo esc_attr( $t['email_placeholder'] ); ?>" class="flex-1 px-5 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:outline-none focus:border-<?php echo esc_attr( $cat_color ); ?>-500/50 focus:ring-2 focus:ring-<?php echo esc_attr( $cat_color ); ?>-500/20 transition-all">
                        <button type="submit" class="px-6 py-3 rounded-xl bg-<?php echo esc_attr( $cat_color ); ?>-600 text-white font-semibold hover:bg-<?php echo esc_attr( $cat_color ); ?>-500 transition-colors whitespace-nowrap">
                            <?php echo esc_html( $t['subscribe'] ); ?>
                        </button>
                    </form>
                    <?php endif; ?>

                    <p class="text-xs text-white/40 mt-4"><?php echo esc_html( $t['no_spam'] ); ?></p>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
.custom-scrollbar::-webkit-scrollbar {
    height: 4px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: rgba(255,255,255,0.05);
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.2);
    border-radius: 10px;
}

/* Pagination styling */
.page-numbers {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    list-style: none;
    padding: 0;
    margin: 0;
}
.page-numbers li {
    display: inline-block;
}
.page-numbers a,
.page-numbers span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 2.5rem;
    height: 2.5rem;
    padding: 0 0.75rem;
    border-radius: 0.75rem;
    font-size: 0.875rem;
    font-weight: 500;
    transition: all 0.2s;
}
.page-numbers a {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    color: rgba(255,255,255,0.7);
}
.page-numbers a:hover {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.2);
    color: #fff;
}
.page-numbers .current {
    background: #7c3aed;
    border: 1px solid #7c3aed;
    color: #fff;
}
.page-numbers .dots {
    color: rgba(255,255,255,0.4);
}
</style>

<?php get_footer(); ?>
