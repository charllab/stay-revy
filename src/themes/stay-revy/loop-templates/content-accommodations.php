<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

<?php
// Build query
global $accom_query, $view;

// Get param data
parse_str($_SERVER['QUERY_STRING'], $query);

// Init args
$args = [
    'post_type' => 'accommodation',
    'posts_per_page' => -1,
    'meta_key' => 'max_people',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
];

$useDefaultCats = true;
$meta_query = ['relation' => 'AND'];
$tax_query = ['relation' => 'OR'];
$view = 'list';


// View
if (isset($query['v'])) {
    $view = $query['v'];
}

// Categories
if (isset($query['c'])) {
    $useDefaultCats = false;

    $tax_query[] = array_merge($tax_query, [
        'taxonomy' => 'category',
        'field' => 'term_id',
        'terms' => $query['c'],
        'operator' => 'IN'
    ]);
}

// Nums
if (isset($query['g'])) {
    $meta_query[] = [
        'key' => 'max_people',
        'value' => str_replace('+', '', $query['g']),
        'compare' => '>=',
        'type' => 'numeric'
    ];
}

if (isset($query['b'])) {
    $meta_query[] = [
        'key' => 'number_of_bedrooms',
        'value' => str_replace('+', '', $query['b']),
        'compare' => '>=',
        'type' => 'numeric'
    ];
}

if (isset($query['wr'])) {
    $meta_query[] = [
        'key' => 'number_of_bathrooms',
        'value' => str_replace('+', '', $query['wr']),
        'compare' => '>=',
        'type' => 'numeric'
    ];
}

// Pets
if (isset($query['pets'])) {
    $meta_query[] = [
        'key' => 'pet_friendly',
        'value' => $query['pets'],
        'compare' => 'LIKE'
    ];
}

// Hot tub
if (isset($query['hottub'])) {
    $meta_query[] = [
        'key' => 'private_hub_tub',
        'value' => $query['hottub'],
        'compare' => 'LIKE'
    ];
}

$args = array_merge($args, [
    'meta_query' => $meta_query,
    'tax_query' => $tax_query
]);

$accom_query = new WP_Query($args);
?>

<?php get_template_part('includes/page', 'banner'); ?>

<section class="section listing-page-pd">

    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-xxl-3">
                <div class="page-leftside listing-page-sidemenu">
                    <div class="listing-page-sidemenu-content-maxwidth">
                        <form class="listing-page-sidemenu-form js-search-form">
                            <div class="btn-group btn-group-toggle w-100 listing-page-toggle js-listing-page-toggle" data-toggle="buttons">
                                <label class="btn btn-primary <?php echo($view == 'list' ? 'active' : ''); ?> px-0 w-50">
                                    <input type="radio" name="v" id="listView" value="list" rel="js-view-list" <?php echo($view == 'list' ? 'checked' : ''); ?>>
                                    <i class="fas fa-list"></i> List
                                </label>
                                <label class="btn btn-primary <?php echo($view == 'map' ? 'active' : ''); ?> px-0 w-50">
                                    <input type="radio" name="v" id="mapView" value="map" rel="js-view-map" <?php echo($view == 'map' ? 'checked' : ''); ?>>
                                    <i class="fas fa-map"></i> Map
                                </label>
                            </div>

                            <h3 class="h5 clr-drkgreen">Accommodations</h3>
                            <div class="listing-page-sidemenu-block">
                                <?php
                                $cat_args = [
                                    'orderby' => 'name',
                                    'order' => 'ASC'
                                ];

                                $categories = get_categories($cat_args);
                                $rowCount = 0;

                                foreach ($categories as $category) { ?>

                                    <?php
                                    $isChecked = true;

                                    if (!$useDefaultCats) {
                                        $isChecked = in_array($category->term_taxonomy_id, $query['c']);
                                    }
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?php echo($isChecked ? 'checked' : ''); ?> name="c[]"
                                               value="<?php echo $category->term_taxonomy_id ?>" class="custom-control-input"
                                               id="cat-<?php echo $category->name; ?>">
                                        <label class="custom-control-label"
                                               for="cat-<?php echo $category->name ?>"><?php echo $category->name ?></label>
                                    </div>
                                <?php } ?>
                            </div><!-- listing-page-sidemenu-block -->

                            <div class="listing-page-sidemenu-block">
                                <h4 class="h5 clr-drkgreen">Filters</h4>

                                <div class="increment-filters mb-3">
                                    <div class="d-flex align-items-center js-num-increment">
                                        <label for="numberOfGuests">Guests</label>
                                        <div class="num-increment-wrap">
                                            <input class="form-control" readonly type="text" name="g" id="numberOfGuests"
                                                   value="<?php echo(isset($query['g']) && $query['g'] ? $query['g'] : '0+'); ?>">
                                        </div>
                                    </div><!-- flex -->
                                    <div class="d-flex align-items-center js-num-increment">
                                        <label for="numberOfBedrooms">Bedrooms</label>
                                        <div class="num-increment-wrap">
                                            <input class="form-control" readonly type="text" name="b" id="numberOfBedrooms"
                                                   value="<?php echo(isset($query['b']) && $query['b'] ? $query['b'] : '0+'); ?>">
                                        </div>
                                    </div><!-- flex -->
                                    <div class="d-flex align-items-center js-num-increment">
                                        <label for="numberOfWashrooms">Washrooms</label>
                                        <div class="num-increment-wrap">
                                            <input class="form-control" readonly type="text" name="wr" id="numberOfWashrooms"
                                                   value="<?php echo(isset($query['wr']) && $query['wr'] ? $query['wr'] : '0+'); ?>">
                                        </div>
                                    </div><!-- flex -->
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" <?php echo(isset($query['pets']) && $query['pets'] == 1 ? 'checked' : ''); ?>
                                           name="pets" value="1" class="custom-control-input" id="isPetFriendly">
                                    <label class="custom-control-label" for="isPetFriendly">Pet Friendly</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" <?php echo(isset($query['hottub']) && $query['hottub'] == 1 ? 'checked' : ''); ?>
                                           name="hottub" value="1" class="custom-control-input" id="privateHotTub">
                                    <label class="custom-control-label" for="privateHotTub">Private Hot Tub</label>
                                </div>

                            </div><!-- listing-page-sidemenu-block -->
                            <div class="text-center">
                                <button class="btn btn-primary mb-0 js-update-search d-block w-100" type="submit">
                                    Update Search &nbsp;<i class="fas fa-search"></i>
                                </button>
                                <a href="<?php bloginfo('url'); ?>/vacation-rentals" class="btn btn-secondary mt-2 d-block w-100">
                                    Reset
                                </a>
                            </div>
                        </form>
                    </div><!-- listing-page-sidemenu-content-maxwidth -->
                </div><!-- page-leftside -->
            </div>

            <div class="col-xl-8 col-xxl-9">
                <div class="page-rightside">
                    <?php get_template_part('includes/map'); ?>

                    <div class="js-view-list" <?php echo($view == 'map' ? 'style="display: none;"' : ''); ?>>
                        <?php
                        if ($accom_query->have_posts()) {
                            while ($accom_query->have_posts()) {
                                $accom_query->the_post();
                                get_template_part('includes/accommodation-listing-block');
                            }
                            wp_reset_postdata();
                        } else { ?>

                            <div class="alert alert-primary" role="alert">
                                There were no properties found using the current filter. <a
                                    href="<?php bloginfo('url'); ?>/vacation-rentals" class="alert-link">Click here</a> to reset and view
                                all.
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div><!-- page-rightside -->
            </div>
        </div>
    </div>

</section>