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
//    'orderby' => 'meta_value_num',
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

<main>

    <?php get_template_part('includes/page', 'banner'); ?>

    <section class="general-sect__padding">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-xxl-3">
                    <div class="page-leftside listing-page-sidemenu py-1">

                        <div class="px-1">
                            <a class="d-flex listing__filter-h listing__filter--h1 text-decoration--none w-100 d-lg-none"
                               data-toggle="collapse" href="#hideShowFilters" role="button"
                               aria-expanded="false" aria-controls="hideShowFilters">Search Filters <i
                                    class="fas fa-chevron-down ml-auto"></i></a>
                            <h5 class="d-none d-lg-block">Filtering</h5>
                        </div>

                        <div class="collapse d-lg-block" id="hideShowFilters">

                            <form class="listing-page-sidemenu-form js-search-form px-1">

                                <div class="listing-page-sidemenu-block mb-150">

                                </div><!-- listing-page-sidemenu-block -->

                                <div class="listing-page-sidemenu-block">

                                    <div class="increment-filters">
                                        <div class="d-flex align-items-center js-num-increment">
                                            <label for="numberOfGuests"
                                                   class="listing-page-sidemenu__label">Guests</label>
                                            <div class="num-increment-wrap">
                                                <input class="form-control" readonly type="text" name="g"
                                                       id="numberOfGuests"
                                                       value="<?php echo(isset($query['g']) && $query['g'] ? $query['g'] : '0+'); ?>">
                                            </div>
                                        </div><!-- flex -->
                                        <div class="d-flex align-items-center js-num-increment">
                                            <label for="numberOfBedrooms"
                                                   class="listing-page-sidemenu__label">Bedrooms</label>
                                            <div class="num-increment-wrap">
                                                <input class="form-control" readonly type="text" name="b"
                                                       id="numberOfBedrooms"
                                                       value="<?php echo(isset($query['b']) && $query['b'] ? $query['b'] : '0+'); ?>">
                                            </div>
                                        </div><!-- flex -->
                                        <div class="d-flex align-items-center js-num-increment">
                                            <label for="numberOfWashrooms" class="listing-page-sidemenu__label">Washrooms</label>
                                            <div class="num-increment-wrap">
                                                <input class="form-control" readonly type="text" name="wr"
                                                       id="numberOfWashrooms"
                                                       value="<?php echo(isset($query['wr']) && $query['wr'] ? $query['wr'] : '0+'); ?>">
                                            </div>
                                        </div><!-- flex -->
                                    </div>


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
                                    <div class="custom-control custom-checkbox mb-250 mb-lg-0">
                                            <input type="checkbox" <?php echo($isChecked ? 'checked' : ''); ?>
                                                   name="c[]"
                                                   value="<?php echo $category->term_taxonomy_id ?>"
                                                   class="custom-control-input"
                                                   id="cat-<?php echo $category->name; ?>">
                                            <label class="custom-control-label mb-lg-0"
                                                   for="cat-<?php echo $category->name ?>"><?php echo $category->name ?></label>
                                    </div>
                                        <?php } ?>

                                    <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox" <?php echo(isset($query['pets']) && $query['pets'] == 1 ? 'checked' : ''); ?>
                                            name="pets" value="1" class="custom-control-input" id="isPetFriendly">
                                        <label class="custom-control-label" for="isPetFriendly">Pet Friendly</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" <?php echo(isset($query['hottub']) && $query['hottub'] == 1 ? 'checked' : ''); ?>
                                               name="hottub" value="1" class="custom-control-input" id="privateHotTub">
                                        <label class="custom-control-label" for="privateHotTub">Private Hot Tub</label>
                                    </div>


                                </div><!-- listing-page-sidemenu-block -->
                                <div class="text-center">
                                    <button class="btn btn-primary js-update-search d-block w-100 mb-75 px-1"
                                            type="submit">
                                        Update Search &nbsp;<i class="fas fa-search d-lg-none"></i>
                                    </button>
                                    <button href="<?php bloginfo('url'); ?>/vacation-rentals"
                                            class="btn btn-secondary d-block w-100 mb-0 px-1">
                                        Reset
                                    </button>
                                </div>

                            </form>

                        </div><!-- collapse -->


                    </div><!-- page-leftside -->
                </div>

                <div class="col-lg-8 col-xxl-9">
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
                                        href="<?php bloginfo('url'); ?>/vacation-rentals" class="alert-link">Click
                                        here</a>
                                    to reset and view
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

</main>