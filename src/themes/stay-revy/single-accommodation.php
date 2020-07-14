<?php get_header(); ?>

<?php
$category = get_the_category();
$image = get_field('accommodation_banner_image');

if(get_field('frontdesk_property_id')) {
    $book_url = 'https://bookings.frontdeskanywhere.net/#account/1ZN171213A?rt=' . get_field('frontdesk_property_id') .'&source=website';
} else {
    $book_url = get_field('book_now_link', 'option');
}
?>

<section class="section accommodation-titleblock">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="ffs clr-drkgreen script-font"><?php the_title(); ?></h1>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-3 order-lg-1">
                <div class="accommodation-details">

                    <?php while ( have_rows('accommodation_specs') ) : the_row(); ?>
                        <ul class="listing-icons list-unstyled d-flex mb-4">
                            <li>
                                <i class="fas <?php the_sub_field('icon_class'); ?>"></i> <?php the_sub_field('label'); ?><br />
                                <span class="accommodation-details__desc d-block mt-1">
                                    <?php the_sub_field('description'); ?>
                                </span>
                            </li>
                        </ul><!-- listing-icons -->
                    <?php endwhile; ?>

                </div><!-- accommodation-details -->
            </div><!-- col -->
            <div class="col-12 col-lg-8 accommodation-blurb">
                <?php the_field('accommodation_blurb'); ?>
                <a target="_blank" href="<?php echo $book_url; ?>" class="btn btn-primary text-capitalize mt-4">
                    Book Now
                </a>

                <div class="mt-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php the_field('google_map_embed_code'); ?>
                    </div>
                </div>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<section class="accommodation-gallery mt-5">
    <div class="container">
        <div class="row">

            <?php if (have_rows('accommodation_gallery')): ?>

                <?php while (have_rows('accommodation_gallery')) : the_row(); ?>

                    <?php $image = get_sub_field('accommodation_gallery_image'); ?>

                    <div class="col-12 col-sm-6 col-lg-4 js-gallery">
                        <a href="<?php echo $image['sizes']['extra-large']; ?>">
                            <img src="<?php echo $image['sizes']['gallery-image']; ?>" alt="<?php bloginfo('name'); ?> - <?php the_title(); ?>"
                                 class="img-fluid d-block mb-4">
                        </a>
                    </div><!-- col -->

                <?php endwhile; ?>

            <?php endif; ?>

        </div><!-- row -->
    </div><!-- container -->
</section>

<section class="footer-ctablock text-center">
    <div class="container">
        <h3 class="script-font h1 mb-4">What Our Guests Have To Say</h3>

        <div class="row justify-content-center">
            <div class="col-md-8 accommodation-guest-review-inner">
                <div class="accommodation-guest-review-wrapper">
                    <div class="owl-carousel owl-theme">

                        <?php if (have_rows('accommodation_review')): ?>

                            <?php while (have_rows('accommodation_review')) : the_row(); ?>

                                <div class="item">
                                    <p class="mb-0"><?php echo the_sub_field('accommodation_review_burb'); ?></p>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div><!-- owl-carousel owl-theme -->
                </div><!-- accommodation-guest-review-wrapper -->

            </div><!-- col accommodation-guest-review-inner -->
        </div><!-- row -->

    </div><!-- container -->
</section><!-- footer-ctablock footer-planyourtrip-wrapper -->

<?php get_footer(); ?>
