<?php get_header(); ?>

<article>
    <div class="max-w-[820px] mx-auto px-4 py-12 lg:py-16">
        <div class="prose prose-lg max-w-none prose-headings:font-black prose-headings:text-slate-900 dark:prose-headings:text-slate-50 prose-p:text-slate-900 dark:prose-p:text-slate-50 prose-p:leading-relaxed prose-a:text-orange-600 prose-a:font-semibold hover:prose-a:opacity-70 prose-strong:text-slate-900 dark:prose-strong:text-slate-50 prose-strong:font-bold prose-img:rounded-xl">
            <?php the_content(); ?>
        </div>
    </div>
</article>

<?php
get_footer();

