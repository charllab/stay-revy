<?php
/**
 *
 * Template Name: Contact Page
 *
 **/
get_header(); ?>

    <main>

        <?php get_template_part('includes/title', 'banner'); ?>

        <div class="general-sect__padding">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-4 order-lg-1">
                        <div class="px-lg-2">
                            <p class="lead">Contact Details</p>
                            <p class="text-body">
                                <i class="fas fa-phone-alt mr-35"></i> <strong>Tel</strong>: <a
                                    href="tel:+1<?php echo strip_tel(get_field('phone_number', 'options')); ?>"
                                    class="text-body"><?php the_field('phone_number', 'options'); ?></a>
                            </p>
                            <p class="text-body">
                                <i class="fas fa-envelope mr-35"></i> <strong>Email</strong>: <a
                                    href="mailto:<?php the_field('email_address', 'options'); ?>"
                                    class="text-body"><?php the_field('email_address', 'options'); ?></a>
                            </p>
                            <p class="text-body mb-2">
                                <i class="fas fa-map-marker-alt align-top pt-250 mr-35"></i> <span
                                    class="d-inline-block"> <strong>Address</strong>: <?php echo the_field('postal_address', 'options') ?></span>
                            </p>
                        </div>
                    </div>

                    <?php if (have_posts()) : ?>
                        <?php /* Start the Loop */ ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="col-lg-7">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </main>

<?php get_footer();