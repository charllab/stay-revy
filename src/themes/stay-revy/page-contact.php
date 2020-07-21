<?php
/**
 *
 * Template Name: Contact Page
 *
 **/
get_header(); ?>

    <main>
        <div class="py-3">
            <div class="container">
                <div class="row justify-content-between">


                        <?php if (have_posts()) : ?>
                            <?php /* Start the Loop */ ?>
                            <?php while (have_posts()) : the_post(); ?>
                    <div class="col-12">
                                <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="col-lg-7">
                                <?php the_content(); ?>
                    </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


                    <div class="col-lg-4">
                        <div class="px-2 py-1">
                            <p class="text-body">
                                <i class="fas fa-phone-alt mr-35"></i> <strong>Tel</strong>: <a href="tel:+1<?php echo strip_tel(get_field('phone_number', 'options')); ?>" class="text-body"><?php the_field('phone_number', 'options'); ?></a>
                            </p>
                            <p class="text-body">
                                <i class="fas fa-envelope mr-35"></i> <strong>Email</strong>: <a href="mailto:<?php the_field('email_address', 'options'); ?>" class="text-body"><?php the_field('email_address', 'options'); ?></a>
                            </p>
                            <p class="text-body mb-2">
                                <i class="fas fa-map-marker-alt align-top pt-250 mr-35"></i> <span class="d-inline-block"> <strong>Address</strong>: <?php echo the_field('postal_address', 'options')?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer();