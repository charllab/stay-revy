<?php $image = get_field('accommodation_banner_image'); ?>

<!--Old listing-block-img disable right now *Start*-->
<div class="listing-block-img d-none" style="background-image: url(<?php echo $image['sizes']['large']; ?>)"></div>
<!--*End*-->

    <div class="listing-block-wrapper mb-lg-1 d-xxl-flex">
        <?php
        //code to display the banners
        //check that the page has banners
        if (have_rows('banners')):
            //count the number of banners
            $count = count(get_field('banners'));

            // generate unique id for carousel
            $carousel_id = "banner-carousel-" . uniqid();
            ?>
            <div id="<?php echo $carousel_id; ?>" class="carousel slide listing-block-img border-0" data-interval="false">
                <?php
                //add the indicators only if there is more than one banner
                if ($count > 1) { ?>
                    <div class="carousel-indicators listing-block-indicators pb-1">
                        <?php $i = 0; ?>
                        <?php while ($i < $count) { ?>
                            <li data-target="#<?php echo $carousel_id; ?>" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) {
                                echo 'active';
                            } ?> bg-primary" aria-label="Slide <?php echo $i; ?>"></li>
                            <?php $i++;
                        } ?>
                    </div>
                <?php } ?>
                <?php //loop through all the banners ?>
                <?php $i = 0; ?>
                <div class="carousel-inner h-100">
                    <?php while (have_rows('banners')): the_row();
                        //get the banner variables.
                        $banner_image = get_sub_field('banner_image');
                        ?>
                        <div class="carousel-item h-100 <?php if ($i == 0) {
                            echo 'active';
                        } ?>">
                            <div
                                style="background: url('<?php echo $banner_image['sizes']['large']; ?>'); background-size: cover;
                                    background-position: 50%;
                                    background-repeat: no-repeat;" class="h-100 listing-block-img pt-2">
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                </div>
                <?php if ($count > 1) { ?>
                    <a class="carousel-control-prev" href="#<?php echo $carousel_id; ?>" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left fa-2x text-primary"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#<?php echo $carousel_id; ?>" role="button" data-slide="next">
                        <i class="fas fa-chevron-right fa-2x text-primary"></i>
                        <span class="sr-only">Next</span>
                    </a>
                <?php } ?>
            </div>
        <?php else: ?>
            <div class="listing-block-img" style="background-image: url(<?php echo $image['sizes']['large']; ?>)"></div>
        <?php endif;
        //And that's it!!!
        ?>

    <!-- listing-block-img -->
    <div class="listing-block-content p-1 py-lg-2">
        <h2 class="h3 clr-secondary"><?php the_title(); ?></h2>
        <div class="listing-block-copy">
            <p>
                <?php echo wp_trim_words(get_field('accommodation_summary'), 18); ?>
            </p>
            <?php $category = get_the_category(); ?>
            <span class="badge badge-info mb-1"><?php echo $category[0]->name; ?></span>
            <ul class="listing-icons list-unstyled d-flex flex-wrap mb-1">
                <li class="mb-35 mb-lg-250"><i class="fas fa-bed"></i> <?php the_field('number_of_bedrooms'); ?>Bedrooms
                </li>
                <li class="mb-35 mb-lg-250"><i class="fas fa-bath"></i> <?php the_field('number_of_bathrooms'); ?> Baths
                </li>
                <li class="mb-35 mb-lg-250"><i class="fas fa-user-friends"></i> <?php the_field('max_people'); ?> People
                </li>
                <li class="mb-35 mb-lg-250"><i class="fas fa-crop-alt"></i> <?php the_field('square_feet'); ?> SQ FT
                </li>
                <?php if (get_field('pet_friendly')): ?>
                    <li class="mb-35 mb-lg-250"><i class="fas fa-paw"></i> Pet Friendly</li>
                <?php endif; ?>
                <?php if (get_field('private_hub_tub')): ?>
                    <li class="mb-35 mb-lg-250"><i class="fas fa-hot-tub"></i> Private Hot Tub</li>
                <?php endif; ?>
            </ul><!-- listing-icons -->
        </div><!-- listing-block-copy -->
        <div class="listing-block-button">
            <a href="<?php the_permalink(); ?>" class="btn btn-primary mb-150 mb-lg-0">View Details</a>
        </div><!-- listing-block-button -->
    </div><!-- listing-block-content -->
</div><!-- listing-block-wrapper -->