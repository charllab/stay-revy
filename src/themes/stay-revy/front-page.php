<?php get_header(); ?>

    <main>

        <div class="alignfull container px-0 hero-outer--fullheight position-relative">

            <?php if (have_rows('hero_slide')): ?>

                <div class="owl-carousel" id="hero-slide">

                    <?php while (have_rows('hero_slide')) : the_row(); ?>

                        <?php $herosliderimageurl = get_sub_field('hero_slide_image'); ?>

                        <div class="hero-slide--fullheight"
                             style="background: #666 url(<?php echo $herosliderimageurl['sizes']['large'] ?>) no-repeat center center; background-size: cover;">
                            <div class="block__tint-overlay position-absolute"></div>
                            <div class="item text-center h-100">
                                <div class="container hero-slide__container h-100">
                                    <div class="row justify-content-center align-items-center h-100">
                                        <div class="col-md-10">
                                            <h1 class="slider__title text-uppercase text-center">
                                                <span
                                                    class="slider__title--intro-line"><?php the_sub_field('title_intro_line'); ?></span>
                                                <?php the_sub_field('title_main_line'); ?>
                                                <span
                                                    class="slider__title--sub-line"><?php the_sub_field('title_sub_line'); ?></span>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div><!-- owl-carousel -->

            <?php endif; ?>

            <?php get_template_part('includes/book', 'link'); ?>

        </div><!-- alignfull container -->

        <?php get_template_part('includes/page', 'lead'); ?>

        <div class="container-fluid pt-3 pb-md-4">
            <div class="row">
                <?php $featuredpropertyimageurl = get_field('featured_property_image'); ?>
                <div class="col-md-6"
                     style="background: #666 url(<?php echo $featuredpropertyimageurl['sizes']['large'] ?>) no-repeat center bottom; background-size: cover;">
                    <img src="<?php echo $featuredpropertyimageurl['sizes']['large'] ?>" alt=" "
                         class="d-md-none img-fluid">
                </div>
                <div class="col-md-6 layout__pingpong--py px-xs-2 px-md-150 px-lg-25">
                    <div class="layout--pingpong--maxwidth">
                        <h2><?php the_field('featured_property_title') ?></h2>
                        <?php the_field('featured_property_blurb') ?>
                        <?php if (get_field('featured_property_button_link')): ?>
                            <a href="<?php the_field('featured_property_button_link') ?>"
                               class="btn btn-primary mb-0"><?php the_field('featured_property_button_text') ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if (have_rows('activity_card')): ?>

            <div class="container general-sect__pb">
                <div class="row justify-content-center">

                    <?php while (have_rows('activity_card')) : the_row(); ?>

                        <?php $activitycardimageurl = get_sub_field('activity_card_image'); ?>

                        <div class="col-lg-4 mb-1 mb-lg-0">
                            <a href="<?php the_sub_field('activity_card_link'); ?>" class="activity-card__link">
                                <div class="card activity-card__card position-relative border-0 rounded-0"
                                     style="background: #666 url(<?php echo $activitycardimageurl['sizes']['large'] ?>) no-repeat center center; background-size: cover;">
                                    <div
                                        class="card-body activity-card__card-body position-absolute text-center w-100 p-1 border-0 rounded-0">
                                        <h2 class="text-white mb-0">
                                            <?php the_sub_field('activity_card_title_line_1'); ?>
                                            <span
                                                class="font-family-body lead text-white text-center d-block font-weight-bold"><?php the_sub_field('activity_card_title_line_2'); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>

        <?php endif; ?>

        <?php $frontpagectaimageurl = get_field('frontpagecta_image'); ?>
        <section class="py-2 py-lg-3" style="background: #666 url(<?php echo $frontpagectaimageurl['sizes']['large'] ?>) no-repeat center center; background-size: cover;">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-xl-start">
                    <div class="col-11 col-xl-6 position-relative">
                        <div class="block__tint-overlay position-absolute"></div>
                        <div
                            class="layout--pingpong--maxwidth ml-auto px-50 px-sm-2 px-md-4 pl-lg-3 pl-xxxl-0 pr-lg-4 py-2 py-lg-3 position-relative z-index-lvl-1">
                            <h2 class="text-white hyphens--auto"><?php the_field('frontpagecta_title'); ?></h2>
                            <p class="lead text-white mb-0"><?php the_field('frontpagecta_blurbage'); ?></p>
                            <?php if (get_field('ctabutton_link')): ?>
                                <a href="<?php the_field('ctabutton_link') ?>"
                                   class="btn btn-primary mb-0 mt-1"><?php the_field('ctabutton_text') ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer();
