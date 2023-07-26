<?php get_header(); ?>

<section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="font-lato text-[#1C2126] text-5xl">
            <?php the_title() ?>
        </h1>

        <div class="flex flex-col gap-3">
            <?php the_content() ?>
        </div>

        <div>
            <?php the_excerpt(); ?>
        </div>
    <?php endwhile; ?>
    <?php else : ?>
        <article> 
            <h2>
                <?php _e('Sorry, nothing to display.', 'wp-blank'); ?>
            </h2>
        </article>
    <?php endif; ?>
</section>

<?php get_footer(); ?>