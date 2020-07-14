<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php if (is_page(21)) : ?>

        <?php get_template_part('loop-templates/content', 'accommodations'); ?>

    <?php else : ?>

        <?php get_template_part('loop-templates/content', 'page'); ?>

    <?php endif; ?>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
