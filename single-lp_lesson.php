<?php get_header(); ?>

<main class="article">
    <?php while (have_posts()) : the_post(); ?>

        <article class="article__container">
            
            <header class="article__header">
                <h1 class="article__title">
                    <?php the_title(); ?>
                </h1>
            </header>

            <div class="article__body">
                <div class="articles">
                    <?php the_content(); ?>
                </div>
            </div>

        </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
