<?php
/**
 * Template Name: Page Clean
 * Template Post Type: page
 *
 * A minimal full-width template for Breakdance-managed pages.
 * No title, no prose wrapper — content is handled entirely by Breakdance.
 */

get_header(); ?>

<main class="min-h-screen">
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer();