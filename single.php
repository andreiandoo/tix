<?php
/**
 * Single Post Template
 * Dark theme blog article template
 */

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

    // Post data
    $post_id       = get_the_ID();
    $post_title    = get_the_title();
    $post_content  = get_the_content();
    $post_excerpt  = get_the_excerpt();
    $post_date     = get_the_date( 'F j, Y' );
    $modified_date = get_the_modified_date( 'M j, Y' );
    $author_id     = get_the_author_meta( 'ID' );
    $author_name   = get_the_author();
    $author_bio    = get_the_author_meta( 'description' );
    $author_avatar = get_avatar_url( $author_id, array( 'size' => 150 ) );
    $author_role   = get_the_author_meta( 'user_description' ) ?: __( 'Author', 'tixello' );

    // Featured image
    $featured_image = get_the_post_thumbnail_url( $post_id, 'full' );

    // Categories and tags
    $categories = get_the_category();
    $tags       = get_the_tags();
    $primary_cat = $categories ? $categories[0] : null;

    // Reading time
    $reading_time = ceil( str_word_count( strip_tags( $post_content ) ) / 200 );

    // Category colors
    $category_colors = array(
        'product-updates'   => 'violet',
        'industry-insights' => 'amber',
        'event-tips'        => 'emerald',
        'case-studies'      => 'cyan',
        'company-news'      => 'pink',
    );
    $cat_color = $primary_cat ? ( $category_colors[ $primary_cat->slug ] ?? 'violet' ) : 'violet';

    // Social share URLs
    $share_url   = urlencode( get_permalink() );
    $share_title = urlencode( $post_title );
    $share_fb    = "https://www.facebook.com/sharer/sharer.php?u={$share_url}";
    $share_tw    = "https://twitter.com/intent/tweet?url={$share_url}&text={$share_title}";
    $share_li    = "https://www.linkedin.com/shareArticle?mini=true&url={$share_url}&title={$share_title}";

    // Get table of contents from headings
    $toc_items = array();
    if ( preg_match_all( '/<h2[^>]*id=["\']([^"\']+)["\'][^>]*>(.*?)<\/h2>/is', $post_content, $matches, PREG_SET_ORDER ) ) {
        foreach ( $matches as $match ) {
            $toc_items[] = array(
                'id'    => $match[1],
                'title' => strip_tags( $match[2] ),
            );
        }
    }

    // Related posts
    $related_args = array(
        'posts_per_page' => 3,
        'post__not_in'   => array( $post_id ),
        'orderby'        => 'rand',
    );
    if ( $primary_cat ) {
        $related_args['category__in'] = array( $primary_cat->term_id );
    }
    $related_posts = new WP_Query( $related_args );
?>

<main class="font-body bg-zinc-950 text-zinc-200 antialiased min-h-screen">

    <!-- Reading Progress Bar -->
    <div class="fixed top-20 left-0 right-0 h-1 bg-white/5 z-40">
        <div id="reading-progress" class="h-full bg-gradient-to-r from-violet-600 to-cyan-500 transition-all duration-150" style="width: 0%"></div>
    </div>

    <!-- Article Header -->
    <section class="py-12 sm:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm mb-8">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white/50 hover:text-white transition-colors"><?php esc_html_e( 'Home', 'tixello' ); ?></a>
                <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="text-white/50 hover:text-white transition-colors"><?php esc_html_e( 'Blog', 'tixello' ); ?></a>
                <?php if ( $primary_cat ) : ?>
                    <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <span class="text-white/70"><?php echo esc_html( $primary_cat->name ); ?></span>
                <?php endif; ?>
            </nav>

            <!-- Category & Read Time -->
            <div class="flex items-center gap-3 mb-6">
                <?php if ( $primary_cat ) : ?>
                    <a href="<?php echo esc_url( get_category_link( $primary_cat->term_id ) ); ?>" class="px-3 py-1 rounded-full bg-<?php echo esc_attr( $cat_color ); ?>-600/20 border border-<?php echo esc_attr( $cat_color ); ?>-500/30 text-<?php echo esc_attr( $cat_color ); ?>-400 text-sm font-medium hover:bg-<?php echo esc_attr( $cat_color ); ?>-600/30 transition-colors">
                        <?php echo esc_html( $primary_cat->name ); ?>
                    </a>
                <?php endif; ?>
                <span class="text-white/40">·</span>
                <span class="text-white/50 text-sm"><?php echo esc_html( $reading_time ); ?> <?php esc_html_e( 'min read', 'tixello' ); ?></span>
            </div>

            <!-- Title -->
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight mb-6">
                <?php echo esc_html( $post_title ); ?>
            </h1>

            <!-- Excerpt -->
            <?php if ( $post_excerpt ) : ?>
            <p class="text-xl text-white/60 leading-relaxed mb-8">
                <?php echo esc_html( $post_excerpt ); ?>
            </p>
            <?php endif; ?>

            <!-- Author & Meta -->
            <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 pb-8 border-b border-white/10">
                <div class="flex items-center gap-4">
                    <img src="<?php echo esc_url( $author_avatar ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <p class="font-semibold text-white"><?php echo esc_html( $author_name ); ?></p>
                        <?php if ( $author_role ) : ?>
                            <p class="text-sm text-white/50"><?php echo esc_html( $author_role ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="flex items-center gap-4 text-sm text-white/50 sm:ml-auto">
                    <span><?php echo esc_html( $post_date ); ?></span>
                    <?php if ( get_the_date() !== get_the_modified_date() ) : ?>
                        <span>·</span>
                        <span><?php printf( esc_html__( 'Updated %s', 'tixello' ), esc_html( $modified_date ) ); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Image -->
    <?php if ( $featured_image ) : ?>
    <section class="pb-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="aspect-[21/9] rounded-3xl overflow-hidden bg-zinc-900">
                <img src="<?php echo esc_url( $featured_image ); ?>" alt="<?php echo esc_attr( $post_title ); ?>" class="w-full h-full object-cover">
            </div>
            <?php if ( get_the_post_thumbnail_caption() ) : ?>
                <p class="text-center text-sm text-white/40 mt-4"><?php echo esc_html( get_the_post_thumbnail_caption() ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <!-- Article Content -->
    <article class="pb-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- Sidebar - Table of Contents -->
                <aside class="hidden lg:block lg:col-span-3">
                    <div class="sticky top-32">
                        <?php if ( ! empty( $toc_items ) ) : ?>
                        <p class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-4"><?php esc_html_e( 'On this page', 'tixello' ); ?></p>
                        <nav class="space-y-2 mb-8">
                            <?php foreach ( $toc_items as $index => $item ) : ?>
                                <a href="#<?php echo esc_attr( $item['id'] ); ?>" class="block text-sm <?php echo $index === 0 ? 'text-violet-400' : 'text-white/50'; ?> hover:text-white transition-colors toc-link" data-target="<?php echo esc_attr( $item['id'] ); ?>">
                                    <?php echo esc_html( $item['title'] ); ?>
                                </a>
                            <?php endforeach; ?>
                        </nav>
                        <?php endif; ?>

                        <!-- Share -->
                        <div class="pt-8 border-t border-white/10">
                            <p class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-4"><?php esc_html_e( 'Share', 'tixello' ); ?></p>
                            <div class="flex items-center gap-2">
                                <a href="<?php echo esc_url( $share_fb ); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 transition-all" title="<?php esc_attr_e( 'Share on Facebook', 'tixello' ); ?>">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </a>
                                <a href="<?php echo esc_url( $share_tw ); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 transition-all" title="<?php esc_attr_e( 'Share on Twitter', 'tixello' ); ?>">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                </a>
                                <a href="<?php echo esc_url( $share_li ); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 transition-all" title="<?php esc_attr_e( 'Share on LinkedIn', 'tixello' ); ?>">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                                <button onclick="navigator.clipboard.writeText('<?php echo esc_url( get_permalink() ); ?>');this.classList.add('!text-emerald-400');setTimeout(()=>this.classList.remove('!text-emerald-400'),2000)" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 transition-all" title="<?php esc_attr_e( 'Copy link', 'tixello' ); ?>">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Main Content -->
                <div class="lg:col-span-9 prose prose-lg prose-invert max-w-none article-content">
                    <?php the_content(); ?>

                    <!-- CTA Box -->
                    <div class="my-12 p-8 rounded-2xl bg-gradient-to-br from-violet-600/20 via-pink-600/10 to-cyan-600/20 border border-violet-500/20 not-prose">
                        <h3 class="text-xl font-bold text-white mb-3"><?php esc_html_e( 'Ready to modernize your ticketing?', 'tixello' ); ?></h3>
                        <p class="text-white/60 mb-6"><?php esc_html_e( "Join thousands of organizers already using Tixello's next-generation ticketing platform.", 'tixello' ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/signup' ) ); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 transition-colors">
                            <?php esc_html_e( 'Start Free Trial', 'tixello' ); ?>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </article>

    <!-- Author Bio -->
    <section class="py-12 border-t border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row gap-6 p-6 rounded-2xl bg-zinc-900/50 border border-white/5">
                <img src="<?php echo esc_url( $author_avatar ); ?>" alt="<?php echo esc_attr( $author_name ); ?>" class="w-20 h-20 rounded-xl object-cover flex-shrink-0">
                <div>
                    <p class="text-sm text-white/40 mb-1"><?php esc_html_e( 'Written by', 'tixello' ); ?></p>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo esc_html( $author_name ); ?></h3>
                    <?php if ( $author_bio ) : ?>
                        <p class="text-white/60 mb-4"><?php echo esc_html( $author_bio ); ?></p>
                    <?php endif; ?>
                    <div class="flex items-center gap-3">
                        <?php
                        $author_twitter = get_the_author_meta( 'twitter' );
                        $author_linkedin = get_the_author_meta( 'linkedin' );
                        ?>
                        <?php if ( $author_twitter ) : ?>
                        <a href="<?php echo esc_url( $author_twitter ); ?>" target="_blank" rel="noopener noreferrer" class="text-white/50 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <?php endif; ?>
                        <?php if ( $author_linkedin ) : ?>
                        <a href="<?php echo esc_url( $author_linkedin ); ?>" target="_blank" rel="noopener noreferrer" class="text-white/50 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tags -->
    <?php if ( $tags ) : ?>
    <section class="py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center gap-2">
                <span class="text-sm text-white/40"><?php esc_html_e( 'Tags:', 'tixello' ); ?></span>
                <?php foreach ( $tags as $tag ) : ?>
                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-sm text-white/60 hover:text-white hover:border-white/20 transition-all">
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Related Articles -->
    <?php if ( $related_posts->have_posts() ) : ?>
    <section class="py-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-white mb-8"><?php esc_html_e( 'Related Articles', 'tixello' ); ?></h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <?php while ( $related_posts->have_posts() ) : $related_posts->the_post();
                    $rel_cat = get_the_category();
                    $rel_cat_name = $rel_cat ? $rel_cat[0]->name : '';
                    $rel_cat_slug = $rel_cat ? $rel_cat[0]->slug : '';
                    $rel_image = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    $rel_reading = ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 );
                    $rel_color = $category_colors[ $rel_cat_slug ] ?? 'violet';
                ?>
                <a href="<?php the_permalink(); ?>" class="group block">
                    <article class="h-full flex flex-col rounded-2xl bg-zinc-900/50 border border-white/5 overflow-hidden hover:border-violet-500/30 transition-all">
                        <div class="aspect-[16/10] overflow-hidden bg-zinc-800">
                            <?php if ( $rel_image ) : ?>
                                <img src="<?php echo esc_url( $rel_image ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <?php else : ?>
                                <div class="w-full h-full flex items-center justify-center text-white/20">
                                    <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                    </svg>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="flex-1 p-6 flex flex-col">
                            <?php if ( $rel_cat_name ) : ?>
                                <span class="self-start px-3 py-1 rounded-full bg-<?php echo esc_attr( $rel_color ); ?>-600/20 text-<?php echo esc_attr( $rel_color ); ?>-400 text-xs font-medium mb-4">
                                    <?php echo esc_html( $rel_cat_name ); ?>
                                </span>
                            <?php endif; ?>
                            <h3 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-3">
                                <?php the_title(); ?>
                            </h3>
                            <p class="text-sm text-white/50 flex-1 line-clamp-2 mb-4">
                                <?php echo esc_html( wp_trim_words( get_the_excerpt(), 15 ) ); ?>
                            </p>
                            <span class="text-sm text-white/40"><?php echo esc_html( $rel_reading ); ?> <?php esc_html_e( 'min read', 'tixello' ); ?></span>
                        </div>
                    </article>
                </a>
                <?php endwhile; wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Newsletter -->
    <section class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="p-8 rounded-3xl bg-gradient-to-br from-violet-600/20 via-pink-600/10 to-cyan-600/20 border border-violet-500/20 text-center">
                <h2 class="text-2xl font-bold text-white mb-3"><?php esc_html_e( 'Enjoyed this article?', 'tixello' ); ?></h2>
                <p class="text-white/60 mb-6"><?php esc_html_e( 'Get more insights delivered to your inbox weekly.', 'tixello' ); ?></p>
                <?php
                if ( shortcode_exists( 'fluentform' ) ) :
                    echo do_shortcode( '[fluentform id="newsletter"]' );
                else :
                ?>
                <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="<?php esc_attr_e( 'Enter your email', 'tixello' ); ?>" class="flex-1 px-5 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:outline-none focus:border-violet-500/50 transition-all">
                    <button type="submit" class="px-6 py-3 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 transition-colors"><?php esc_html_e( 'Subscribe', 'tixello' ); ?></button>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Post Navigation -->
    <section class="py-8 border-t border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                <?php if ( $prev_post ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="flex items-center gap-3 text-white/60 hover:text-white transition-colors group">
                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        <span class="text-sm hidden sm:block"><?php echo esc_html( wp_trim_words( $prev_post->post_title, 5 ) ); ?></span>
                    </a>
                <?php else : ?>
                    <div></div>
                <?php endif; ?>

                <?php if ( $next_post ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="flex items-center gap-3 text-white/60 hover:text-white transition-colors group">
                        <span class="text-sm hidden sm:block"><?php echo esc_html( wp_trim_words( $next_post->post_title, 5 ) ); ?></span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                <?php else : ?>
                    <div></div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Comments -->
    <?php if ( comments_open() || get_comments_number() ) : ?>
    <section class="py-12 border-t border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php comments_template(); ?>
        </div>
    </section>
    <?php endif; ?>

</main>

<style>
/* Article content styling */
.article-content p {
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.8;
    margin-bottom: 1.5rem;
}

.article-content h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #fff;
    margin-top: 3rem;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.article-content h3 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #fff;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.article-content a {
    color: #a78bfa;
    text-decoration: underline;
    text-underline-offset: 2px;
}

.article-content a:hover {
    color: #c4b5fd;
}

.article-content ul,
.article-content ol {
    margin: 1.5rem 0;
    padding-left: 1.5rem;
}

.article-content li {
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 0.5rem;
}

.article-content blockquote {
    border-left: 4px solid #7c3aed;
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: rgba(255, 255, 255, 0.6);
}

.article-content blockquote footer {
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.4);
    margin-top: 0.5rem;
    font-style: normal;
}

.article-content figure {
    margin: 2rem 0;
}

.article-content figure img {
    border-radius: 1rem;
    width: 100%;
}

.article-content figcaption {
    text-align: center;
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.4);
    margin-top: 0.75rem;
}

.article-content img {
    border-radius: 1rem;
    max-width: 100%;
    height: auto;
}

.article-content pre {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 0.75rem;
    padding: 1.5rem;
    overflow-x: auto;
    margin: 1.5rem 0;
}

.article-content code {
    font-family: 'JetBrains Mono', 'Fira Code', monospace;
    font-size: 0.875rem;
}

.article-content :not(pre) > code {
    background: rgba(255, 255, 255, 0.1);
    padding: 0.125rem 0.375rem;
    border-radius: 0.25rem;
}

/* Line clamp utility */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<script>
// Reading progress bar
document.addEventListener('DOMContentLoaded', function() {
    const progressBar = document.getElementById('reading-progress');
    if (progressBar) {
        window.addEventListener('scroll', function() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            progressBar.style.width = scrolled + '%';
        });
    }

    // TOC active state
    const tocLinks = document.querySelectorAll('.toc-link');
    const headings = [];

    tocLinks.forEach(link => {
        const target = document.getElementById(link.dataset.target);
        if (target) headings.push({ el: target, link: link });
    });

    if (headings.length > 0) {
        window.addEventListener('scroll', function() {
            let current = headings[0];
            const scrollPos = window.scrollY + 150;

            headings.forEach(h => {
                if (h.el.offsetTop <= scrollPos) {
                    current = h;
                }
            });

            tocLinks.forEach(link => {
                link.classList.remove('text-violet-400');
                link.classList.add('text-white/50');
            });

            current.link.classList.remove('text-white/50');
            current.link.classList.add('text-violet-400');
        });
    }
});
</script>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
