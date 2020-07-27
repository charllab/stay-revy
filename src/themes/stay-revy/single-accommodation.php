<?php get_header(); ?>

<?php
$category = get_the_category();
$image = get_field('accommodation_banner_image');

if (get_field('frontdesk_property_id')) {
    $book_url = 'https://bookings.frontdeskanywhere.net/#account/1ZN171213A?rt=' . get_field('frontdesk_property_id') . '&source=website';
} else {
    $book_url = get_field('book_now_link', 'option');
}
?>

<section class="section accommodation-titleblock">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="h2 mb-2"><?php the_title(); ?></h1>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<div class="container-fluid px-0 general-sect__pb">
    <div class="row no-gutters">
        <div class="col-12">
            <img src="<?php echo $image['sizes']['page-banner']; ?>" alt="<?php the_title(); ?>"
                 class="img-fluid w-100 d-block">
        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->

<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pr-lg-2">
                    <p class="text-primary font-weight-bold"> <?php echo the_field('address'); ?></p>
                </div>
            </div>
            <div class="col-11 col-lg-4 order-lg-1">
                <div class="accommodation-details">

                    <ul class="listing-icons list-unstyled mb-1 text-capitalize d-flex flex-wrap d-lg-block">
                        <li class="mb-35"><i class="listing-icons--min-width fas text-primary fa-bed"></i> <?php the_field('number_of_bedrooms'); ?> Bedrooms</li>
                        <li class="mb-35"><i class="listing-icons--min-width fas text-primary fa-bath"></i> <?php the_field('number_of_bathrooms'); ?> Baths</li>
                        <li class="mb-35"><i class="listing-icons--min-width fas text-primary fa-user-friends"></i> Max <?php the_field('max_people'); ?> People</li>
                        <li class="mb-35"><i class="listing-icons--min-width fas text-primary fa-calendar"></i> Min <?php the_field('max_people'); ?> Days</li>
                        <li class="mb-35"><i class="listing-icons--min-width fas text-primary fa-crop-alt"></i> <?php the_field('square_feet'); ?> SQ FT</li>
                        <?php if( get_field('pet_friendly') ): ?>
                            <li class="mb-35"><i class="listing-icons--min-width fas text-primary fa-paw"></i> Pet Friendly</li>
                        <?php endif; ?>
                        <?php while (have_rows('accommodation_specs')) : the_row(); ?>

                            <li class="mb-35">
                                <i class="listing-icons--min-width fas text-primary <?php the_sub_field('icon_class'); ?>"></i> <?php the_sub_field('label'); ?>
                                <br/>
                                <span class="accommodation-details__desc d-block">
                                    <?php the_sub_field('description'); ?>
                                </span>
                            </li>

                        <?php endwhile; ?>

                    </ul><!-- listing-icons -->
                </div><!-- accommodation-details -->
            </div><!-- col -->
            <div class="col-12 col-lg-8 accommodation-blurb">
                <div class="pr-lg-2">

                    <div class="mb-150">
                        <?php the_field('accommodation_description'); ?>
                    </div>

                    <a target="_blank" href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary mb-2">
                        Book Now
                    </a>

                    <div class="mb-2">
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php the_field('google_map_embed_code'); ?>
                        </div>
                    </div>
                </div
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<section class="accommodation-gallery mb-1">
    <div class="container">
        <div class="row">

            <?php if (have_rows('accommodation_gallery')): ?>

                <?php while (have_rows('accommodation_gallery')) : the_row(); ?>

                    <?php $image = get_sub_field('accommodation_gallery_image'); ?>

                    <div class="col-12 col-sm-6 col-lg-4 js-gallery">
                        <a href="<?php echo $image['sizes']['extra-large']; ?>">
                            <img src="<?php echo $image['sizes']['gallery-image']; ?>"
                                 alt="<?php bloginfo('name'); ?> - <?php the_title(); ?>"
                                 class="img-fluid d-block mb-1 mb-md-150">
                        </a>
                    </div><!-- col -->

                <?php endwhile; ?>

            <?php endif; ?>

        </div><!-- row -->
    </div><!-- container -->
</section>


<?php if (have_rows('accommodation_review')): ?>
    <section class="footer-ctablock text-center general-sect__padding bg-dark">
        <div class="container">
            <h3 class="text-white h4 mb-3">What Our Guests Have To&nbsp;Say</h3>

            <div class="row justify-content-center">
                <div class="col-lg-8 accommodation-guest-review-inner">
                    <div class="accommodation-guest-review-wrapper py-2 pt-lg-1 pb-lg-5">
                        <div class="owl-carousel owl-theme" id="testimonial-slide">

                            <?php if (have_rows('accommodation_review')): ?>

                                <?php while (have_rows('accommodation_review')) : the_row(); ?>

                                    <div class="item text-white text-center mb-150">
                                        <?php echo the_sub_field('accommodation_review_burb'); ?></p>
                                    </div>

                                <?php endwhile; ?>

                            <?php endif; ?>

                        </div><!-- owl-carousel owl-theme -->
                    </div><!-- accommodation-guest-review-wrapper -->

                </div><!-- col accommodation-guest-review-inner -->
            </div><!-- row -->

        </div><!-- container -->
    </section><!-- footer-ctablock footer-planyourtrip-wrapper -->
<?php endif; ?>

<?php get_footer(); ?>
