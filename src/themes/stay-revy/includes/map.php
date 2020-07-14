<?php
global $accom_query, $view;
?>

<section id="map-anchor" <?php echo($view == 'list' ? 'style="display: none;"' : ''); ?> class="section--map js-view-map">
    <div id="map" class="mr-auto ml-auto mb-5"></div>
</section>

<script>
    var pin = '<?php echo get_stylesheet_directory_uri().'/images/map-pin.svg'; ?>';
    var pins = [
        <?php while ( $accom_query->have_posts() ) { $accom_query->the_post(); ?>
        <?php $lat = get_field('latitude'); ?>
        <?php $long = get_field('longitude'); ?>
        <?php $category = get_the_category(); ?>
        <?php $image = get_field('accommodation_banner_image'); ?>

        [
            '<?php the_title(); ?>',
            <?php echo $lat; ?>,
            <?php echo $long; ?>,
            pin,
            '',
            'default',
            <?php echo $post->ID; ?>,
            '<div class="listing-block-img" style="background-image: url(<?php echo $image['sizes']['large']; ?>)"></div>'+
            '<h5 class="mb-2"><?php the_title(); ?></h4>' +
            '<span class="badge badge-info"><?php echo $category[0]->name; ?></span>'+
            '<ul class="listing-icons list-unstyled d-flex mt-3 mb-0">'+
            '<li><i class="fas fa-bed"></i> <?php the_field('number_of_bedrooms'); ?> Rooms</li>'+
            '<li><i class="fas fa-bath"></i> <?php the_field('number_of_bedrooms'); ?> Baths</li>'+
            '<li><i class="fas fa-user-friends"></i> <?php the_field('max_people'); ?> People</li>'+
            '<li><i class="fas fa-crop-alt"></i> <?php the_field('square_feet'); ?> SQ FT</li>'+
            '</ul><a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm d-block w-100 mt-4">View Details</a>'
        ],
        <?php } wp_reset_postdata(); ?>
    ];
</script>