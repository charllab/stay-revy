<?php
//Package One Carousel shortcode
function wp_create_shortcode_package_one_carousel(){

    ob_start();
//code to display the banners
    //check that the page has banners
    if( have_rows('package_1_carousel') ):
        //count the number of banners
        $count = count(get_field('package_1_carousel'));?>
        <div id="package-1-carousel" class="carousel slide" data-ride="carousel">
            <?php
            //add the indicators only if there is more than one banner
            if ($count > 1) {?>
                <div class="carousel-indicators pb-1">
                    <?php $i=0; ?>
                    <?php while ($i < $count) { ?>
                        <li data-target="#package-1-carousel" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) {echo'active';} ?> bg-primary" aria-label="Slide <?php echo $i; ?>"></li>
                        <?php $i++; } ?>
                </div>
            <?php } ?>
            <?php //loop through all the banners ?>
            <?php $i=0; ?>
            <div class="carousel-inner">
                <?php while( have_rows('package_1_carousel') ): the_row();

                    //get the banner variables.
                    $banner_image = get_sub_field('package_carousel_1');


                    ?>
                    <div class="carousel-item  <?php if ($i == 0) {echo'active';} ?>">


                        <img src="<?php echo $banner_image['sizes']['2048x2048']; ?>" alt="<?php the_title(); ?>"
                             class="img-fluid w-100 d-block">




                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>

            <?php if ($count > 1) {?>
                <a class="carousel-control-prev" href="#package-1-carousel" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-2x text-primary"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#package-1-carousel" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-2x text-primary"></i>
                    <span class="sr-only">Next</span>
                </a>

            <?php } ?>
        </div>


    <?php endif;
    //And that's it!!!

    return ob_get_clean();

}

add_shortcode( 'Package-1-Carousel', 'wp_create_shortcode_package_one_carousel' );

//Package Two Carousel shortcode
function wp_create_shortcode_package_two_carousel(){

    ob_start();
//code to display the banners
    //check that the page has banners
    if( have_rows('package_2_carousel') ):
        //count the number of banners
        $count = count(get_field('package_2_carousel'));?>
        <div id="package-2-carousel" class="carousel slide" data-ride="carousel">
            <?php
            //add the indicators only if there is more than one banner
            if ($count > 1) {?>
                <div class="carousel-indicators pb-1">
                    <?php $i=0; ?>
                    <?php while ($i < $count) { ?>
                        <li data-target="#package-2-carousel" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) {echo'active';} ?> bg-primary" aria-label="Slide <?php echo $i; ?>"></li>
                        <?php $i++; } ?>
                </div>
            <?php } ?>
            <?php //loop through all the banners ?>
            <?php $i=0; ?>
            <div class="carousel-inner">
                <?php while( have_rows('package_2_carousel') ): the_row();

                    //get the banner variables.
                    $banner_image = get_sub_field('package_carousel_2');


                    ?>
                    <div class="carousel-item  <?php if ($i == 0) {echo'active';} ?>">


                        <img src="<?php echo $banner_image['sizes']['2048x2048']; ?>" alt="<?php the_title(); ?>"
                             class="img-fluid w-100 d-block">




                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>

            <?php if ($count > 1) {?>
                <a class="carousel-control-prev" href="#package-2-carousel" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-2x text-primary"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#package-2-carousel" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-2x text-primary"></i>
                    <span class="sr-only">Next</span>
                </a>

            <?php } ?>
        </div>


    <?php endif;
    //And that's it!!!

    return ob_get_clean();

}

add_shortcode( 'Package-2-Carousel', 'wp_create_shortcode_package_two_carousel' );

//Package Three Carousel shortcode
function wp_create_shortcode_package_three_carousel(){

    ob_start();
//code to display the banners
    //check that the page has banners
    if( have_rows('package_3_carousel') ):
        //count the number of banners
        $count = count(get_field('package_3_carousel'));?>
        <div id="package-3-carousel" class="carousel slide" data-ride="carousel">
            <?php
            //add the indicators only if there is more than one banner
            if ($count > 1) {?>
                <div class="carousel-indicators pb-1">
                    <?php $i=0; ?>
                    <?php while ($i < $count) { ?>
                        <li data-target="#package-3-carousel" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) {echo'active';} ?> bg-primary" aria-label="Slide <?php echo $i; ?>"></li>
                        <?php $i++; } ?>
                </div>
            <?php } ?>
            <?php //loop through all the banners ?>
            <?php $i=0; ?>
            <div class="carousel-inner">
                <?php while( have_rows('package_3_carousel') ): the_row();

                    //get the banner variables.
                    $banner_image = get_sub_field('package_carousel_3');


                    ?>
                    <div class="carousel-item  <?php if ($i == 0) {echo'active';} ?>">


                        <img src="<?php echo $banner_image['sizes']['2048x2048']; ?>" alt="<?php the_title(); ?>"
                             class="img-fluid w-100 d-block">




                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </div>

            <?php if ($count > 1) {?>
                <a class="carousel-control-prev" href="#package-3-carousel" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-2x text-primary"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#package-3-carousel" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-2x text-primary"></i>
                    <span class="sr-only">Next</span>
                </a>

            <?php } ?>
        </div>


    <?php endif;
    //And that's it!!!

    return ob_get_clean();

}

add_shortcode( 'Package-3-Carousel', 'wp_create_shortcode_package_three_carousel' );