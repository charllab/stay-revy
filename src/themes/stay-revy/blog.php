<?php
/**
 *
 * Template Name: Blog
 *
 */
global $post;
get_header(); ?>

<main>
    <?php get_template_part('includes/blog', 'banner'); ?>

    <section class="general-sect__padding">

        <div class="container">

                    <?php
                    $limit = 10;

                    $temp = $wp_query;
                    $wp_query = null;

                    $wp_query = new WP_Query();
                    $wp_query->query('posts_per_page=' . $limit . '&paged=' . $paged);

                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


                     <div class="row justify-content-center align-items-center pb-2">

                        <div class="col-lg-6 js-img-obj-fit__container">
                            <div class="blog-listing__item">

                                <a href="<?php the_permalink(); ?>" title="Read more">

                                    <?php
                                    if( get_field('banner_image') ) {
                                        $headerimg = get_field('banner_image');
                                    }
                                    else {
                                        $headerimg = get_field('default_header', 'options');
                                    }
                                    ?>

                                    <img src="<?php echo $headerimg['sizes']['large']; ?>" alt="<?php the_title(); ?>" class="img-fluid d-block blog-listing__img">
                                </a>
                            </div>

                        </div>

                        <div class="col-lg-6">


                    <div class="listing-block-wrapper d-xxl-flex">

                        <div class="listing-block-content p-1 py-lg-0">

                            <h2 class="h4 clr-secondary"><?php the_title(); ?></h2>

                            <div class="listing-block-copy">

                                <p>
                                    <?php echo get_excerpt(); ?>
                                </p>

                            </div><!-- listing-block-copy -->

                            <div class="listing-block-button">
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary mb-150 mb-lg-0">View Details</a>
                            </div><!-- listing-block-button -->

                        </div><!-- listing-block-content -->
                    </div><!-- listing-block-wrapper -->

                </div><!-- col-->
            </div><!-- row -->

                <?php endwhile; ?>


            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8 text-center">
                    <nav aria-label="Page navigation">

                        <?php bootstrap_pagination(); ?>

                    </nav>
                </div><!-- col-->
            </div><!-- row -->

        </div><!-- container -->
    </section><!-- .section -->


</main>

<?php get_footer(); ?>