<?php
/**
 * Template Name: LP Lesson
 * Template Post Type: lp_lesson
 * ARCWP Lesson Layout: Fixed 720px BEM structure.
 * Bypasses Tailwind typography plugin.
 */

get_header(); ?>

<main class="lp-lesson">
    <?php while (have_posts()) : the_post(); ?>

        <article class="lp-lesson__container">
            
            <header class="lp-lesson__header">
                <h1 class="lp-lesson__title">
                    <?php the_title(); ?>
                </h1>
            </header>

            <div class="lp-lesson__body">
                <div class="articles">
                    <?php the_content(); ?>
                </div>
            </div>

        </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>