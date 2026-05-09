<?php
/**
 * Template Name: Article (Narrow)
 */
get_header(); ?>

<main class="article min-h-screen bg-black">
    <?php while (have_posts()) : the_post(); ?>

        <article class="article__container px-3 py-6 lg:py-12">
            
            <header class="article__header max-w-[720px] mx-auto mb-6">
                <h1 class="article__title text-3xl lg:text-6xl font-black text-white leading-tight">
                    <?php the_title(); ?>
                </h1>
            </header>

            <div class="article__content max-w-[720px] mx-auto">
                <div class="prose prose-invert prose-lg max-w-none 
                    /* High-specificity overrides for dynamic content */
                    [&_h2]:mt-20 [&_h2]:mb-8 [&_h2]:text-3xl [&_h2]:font-black [&_h2]:text-white
                    [&_h3]:mt-14 [&_h3]:mb-6 [&_h3]:text-2xl [&_h3]:font-black [&_h3]:text-white
                    [&_p]:mb-10 [&_p]:text-slate-300 [&_p]:leading-relaxed
                    /* General prose styles */
                    prose-headings:font-black prose-headings:text-white
                    prose-img:rounded-xl prose-img:my-16">
                    
                    <?php the_content(); ?>
                </div>
            </div>

        </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>