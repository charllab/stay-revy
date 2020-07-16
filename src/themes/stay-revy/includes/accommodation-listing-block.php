<?php $image = get_field('accommodation_banner_image'); ?>

<div class="listing-block-wrapper mb-lg-1 d-lg-flex">
    <div class="listing-block-img" style="background-image: url(<?php echo $image['sizes']['large']; ?>)"></div><!-- listing-block-img -->

    <div class="listing-block-content p-1 py-lg-2">

        <h2 class="h3 clr-secondary"><?php the_title(); ?></h2>

        <div class="listing-block-copy">
            <p><?php the_field('accommodation_excerpt'); ?></p>

            <?php $category = get_the_category(); ?>

            <span class="badge badge-info mb-1"><?php echo $category[0]->name; ?></span>

            <ul class="listing-icons list-unstyled d-flex flex-wrap mb-1">
                <li class="mb-35 mb-lg-250"><i class="fas fa-bed"></i> <?php the_field('number_of_bedrooms'); ?> Bedrooms</li>
                <li class="mb-35 mb-lg-250"><i class="fas fa-bath"></i> <?php the_field('number_of_bathrooms'); ?> Baths</li>
                <li class="mb-35 mb-lg-250"><i class="fas fa-user-friends"></i> <?php the_field('max_people'); ?> People</li>
                <li class="mb-35 mb-lg-250"><i class="fas fa-crop-alt"></i> <?php the_field('square_feet'); ?> SQ FT</li>
                <?php if( get_field('pet_friendly') ): ?>
                    <li class="mb-35 mb-lg-250"><i class="fas fa-paw"></i> Pet Friendly</li>
                <?php endif; ?>

            </ul><!-- listing-icons -->
        </div><!-- listing-block-copy -->

        <div class="listing-block-button">
            <a href="<?php the_permalink(); ?>" class="btn btn-primary mb-150 mb-lg-0">View Details</a>
        </div><!-- listing-block-button -->

    </div><!-- listing-block-content -->

</div><!-- listing-block-wrapper -->