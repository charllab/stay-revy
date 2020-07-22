<?php
/**
 *
 * Template Name: Full Width Page
 *
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>

    <main>

        <?php get_template_part('includes/title', 'banner'); ?>

        <div class="container general-sect__padding">

            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <?php the_content(); ?>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

    </main>

<?php endwhile; // end of the loop. ?>

<?php get_footer();