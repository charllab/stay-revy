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

<!--Old listing page banner image disable right now *Start*-->
<div class="container-fluid px-0 pb-3 d-none">
    <div class="row no-gutters">
        <div class="col-12">
            <img src="<?php echo $image['sizes']['page-banner']; ?>" alt="<?php the_title(); ?>"
                 class="img-fluid w-100 d-block">
        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->
<!-- *End*-->


<div class="container-fluid px-0 pb-3">
    <div class="row no-gutters">
        <div class="col-12">


            <?php
            //code to display the banners
            //check that the page has banners
            if( have_rows('banners') ):
                //count the number of banners
                $count = count(get_field('banners'));?>
                <div id="banner-carousel" class="carousel slide" data-ride="carousel">
                    <?php
                    //add the indicators only if there is more than one banner
                    if ($count > 1) {?>
                        <div class="carousel-indicators pb-1">
                            <?php $i=0; ?>
                            <?php while ($i < $count) { ?>
                                <li data-target="#banner-carousel" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) {echo'active';} ?> bg-primary" aria-label="Slide <?php echo $i; ?>"></li>
                                <?php $i++; } ?>
                        </div>
                    <?php } ?>
                    <?php //loop through all the banners ?>
                    <?php $i=0; ?>
                    <div class="carousel-inner">
                        <?php while( have_rows('banners') ): the_row();

                            //get the banner variables.
                            $banner_image = get_sub_field('banner_image');


                            ?>
                            <div class="carousel-item  <?php if ($i == 0) {echo'active';} ?>">


                                <img src="<?php echo $banner_image['sizes']['page-banner']; ?>" alt="<?php the_title(); ?>"
                                     class="img-fluid w-100 d-block">

                            </div>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>

                    <?php if ($count > 1) {?>
                        <a class="carousel-control-prev" href="#banner-carousel" role="button" data-slide="prev">
                            <i class="fas fa-chevron-left fa-2x text-primary"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#banner-carousel" role="button" data-slide="next">
                            <i class="fas fa-chevron-right fa-2x text-primary"></i>
                            <span class="sr-only">Next</span>
                        </a>

                    <?php } ?>
                </div>
            <?php else:?>
                <img src="<?php echo $image['sizes']['page-banner']; ?>" alt="<?php the_title(); ?>"
                     class="img-fluid w-100 d-block">

            <?php endif;
            //And that's it!!!

            ?>





        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->





<section class="section pb-0">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-8 order-0">

                <?php
                $link = get_field('airbnb_link');
                if ($link) : ?>
                    <a target="_blank" href="<?php echo esc_url($link); ?>" class="btn btn-primary mb-2">
                        Book Now
                    </a>
                <?php else : ?>
                    <a target="_blank" href="<?php the_field('guestylink'); ?>" class="btn btn-primary mb-2">
                        Book Now
                    </a>
                <?php endif; ?>

            </div>

            <div class="col-11 col-lg-4 order-lg-1">
                <div class="accommodation-details">

                    <ul class="listing-icons list-unstyled mb-1 text-capitalize d-flex flex-wrap d-lg-block">
                        <li class="mb-35"><i
                                class="listing-icons--min-width fas text-primary fa-bed"></i> <?php the_field('number_of_bedrooms'); ?>
                            Bedrooms
                        </li>
                        <li class="mb-35"><i
                                class="listing-icons--min-width fas text-primary fa-bath"></i> <?php the_field('number_of_bathrooms'); ?>
                            Baths
                        </li>
                        <li class="mb-35"><i
                                class="listing-icons--min-width fas text-primary fa-user-friends"></i> <?php the_field('max_people'); ?>
                            People
                        </li>
                        <li class="mb-35"><i class="listing-icons--min-width fas text-primary fa-calendar"></i>
                            Min <?php the_field('min_stay'); ?> Days
                        </li>
                        <li class="mb-35"><i
                                class="listing-icons--min-width fas text-primary fa-crop-alt"></i> <?php the_field('square_feet'); ?>
                            SQ FT
                        </li>
                        <?php if (get_field('pet_friendly')): ?>
                            <li class="mb-35"><i class="listing-icons--min-width fas text-primary fa-paw"></i> Pet
                                Friendly
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('private_hub_tub')): ?>
                            <li class="mb-35 mb-lg-250"><i class="text-primary fas fa-hot-tub"></i> Hot Tub</li>
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

                    <?php
                    $link = get_field('airbnb_link');
                    if ($link) : ?>
                        <a target="_blank" href="<?php echo esc_url($link); ?>" class="btn btn-primary mb-2">
                            Book Now
                        </a>
                    <?php else : ?>
                        <a target="_blank" href="<?php the_field('guestylink'); ?>" class="btn btn-primary mb-2">
                            Book Now
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('google_map_embed_code')): ?>
                        <div class="mb-2">
                            <div class="embed-responsive embed-responsive-16by9">
                                <?php the_field('google_map_embed_code'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

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

                    <div class="col-12 col-sm-6 col-lg-4 js-gallery js-img-obj-fit__container">
                        <a href="<?php echo $image['sizes']['extra-large']; ?>" class="gallery-item">
                            <img src="<?php echo $image['sizes']['gallery-image']; ?>"
                                 alt="<?php bloginfo('name'); ?> - <?php the_title(); ?>"
                                 class="img-fluid d-block mb-1 mb-md-150 accommodation-img">
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
