<?php
get_header();
?>

<main class="min-h-screen">
    <?php while (have_posts()) : the_post(); ?>

        <!-- Article Header -->
        <article>
            <div class="max-w-[820px] mx-auto px-4 py-16 lg:py-20">
                <!-- Meta Info -->
                <div class="flex items-center gap-4 text-sm text-slate-900 dark:text-slate-50 mb-6">
                    <time datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date('F j, Y'); ?>
                    </time>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        $category = $categories[0];
                    ?>
                        <span class="flex items-center gap-2">
                            <span class="w-1 h-1 bg-slate-900 dark:bg-slate-50 rounded-full"></span>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="hover:text-orange-600 transition-colors">
                                <?php echo esc_html($category->name); ?>
                            </a>
                        </span>
                    <?php endif; ?>
                    <span class="flex items-center gap-2">
                        <span class="w-1 h-1 bg-slate-900 dark:bg-slate-50 rounded-full"></span>
                        <span><?php echo get_the_author(); ?></span>
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-4xl lg:text-5xl font-black text-slate-900 dark:text-slate-50 mb-8 leading-tight">
                    <?php the_title(); ?>
                </h1>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-12 rounded-xl overflow-hidden">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                    </div>
                <?php endif; ?>
            </div>
        </article>


        <!-- Article Content -->
        <article class="border-t border-slate-900 dark:border-slate-50">
            <div class="max-w-[820px] mx-auto px-4 py-12 lg:py-16">
                <div class="post-content prose prose-lg max-w-none prose-headings:font-black prose-headings:text-slate-900 dark:prose-headings:text-slate-50 prose-p:text-slate-900 dark:prose-p:text-slate-50 prose-p:leading-relaxed prose-a:text-orange-600 prose-a:font-semibold hover:prose-a:opacity-70 prose-strong:text-slate-900 dark:prose-strong:text-slate-50 prose-strong:font-bold prose-img:rounded-xl">
                    <?php the_content(); ?>
                </div>

                <!-- Tags -->
                <?php
                $tags = get_the_tags();
                if ($tags) :
                ?>
                    <div class="mt-12 pt-8 border-t border-slate-900 dark:border-slate-50">
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($tags as $tag) : ?>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="inline-block px-4 py-2 bg-slate-900 dark:bg-slate-50 text-slate-50 dark:text-slate-900 text-sm rounded-md hover:bg-orange-600 hover:text-slate-50 transition-colors">
                                    <?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </article>


        <!-- Author Info Section -->
        <section class="border-t border-slate-900 dark:border-slate-50">
            <div class="max-w-[820px] mx-auto px-4 py-12 lg:py-16">
                <div class="flex flex-col sm:flex-row gap-6 items-start">
                    <!-- Avatar -->
                    <div class="flex-shrink-0">
                        <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'rounded-full')); ?>
                    </div>

                    <!-- Author Details -->
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-slate-50 mb-2">
                            <?php echo get_the_author(); ?>
                        </h3>

                        <?php if (get_the_author_meta('description')) : ?>
                            <p class="text-slate-900 dark:text-slate-50 leading-relaxed mb-4">
                                <?php echo get_the_author_meta('description'); ?>
                            </p>
                        <?php endif; ?>

                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="inline-flex items-center text-sm font-semibold text-orange-600 hover:gap-2 transition-all">
                            More by <?php echo get_the_author(); ?>
                            <svg class="w-4 h-4 ml-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Related Posts -->
        <?php
        $related_posts = get_posts(array(
            'category__in' => wp_get_post_categories(get_the_ID()),
            'numberposts' => 3,
            'post__not_in' => array(get_the_ID()),
        ));

        if ($related_posts) :
        ?>
            <section class="py-16 lg:py-20">
                <div class="max-w-[1120px] mx-auto px-4">
                    <h2 class="text-3xl font-black text-slate-900 dark:text-slate-50 mb-12">Related Posts</h2>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php foreach ($related_posts as $post) : setup_postdata($post); ?>
                            <article class="group rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                <!-- Featured Image -->
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="block aspect-[16/9] overflow-hidden">
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink(); ?>" class="block aspect-[16/9] bg-gradient-to-br from-slate-900 to-slate-900 dark:from-slate-50 dark:to-slate-50 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-slate-50 dark:text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </a>
                                <?php endif; ?>

                                <!-- Post Content -->
                                <div class="p-6">
                                    <!-- Meta -->
                                    <div class="flex items-center gap-4 text-sm text-slate-900 dark:text-slate-50 mb-3">
                                        <time datetime="<?php echo get_the_date('c'); ?>">
                                            <?php echo get_the_date('M j, Y'); ?>
                                        </time>
                                    </div>

                                    <!-- Title -->
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-slate-50 mb-3 leading-tight">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-orange-600 transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <!-- Read More -->
                                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-semibold text-orange-600 hover:gap-2 transition-all">
                                        Read More
                                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    <?php endwhile; ?>
</main>

<?php
get_footer();
