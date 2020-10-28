<?php
if( get_field('banner_image') ) {
    $headerimg = get_field('banner_image');
} else {
    $headerimg = get_field('default_page_header', 'options');
}
?>

<section class="py-8 py-lg-12 position-relative" style="background: #202020 url(<?php echo $headerimg['sizes']['large']; ?>)no-repeat center center; background-size: cover;">
    <div class="block__tint-overlay position-absolute"></div>
    <div class="container position-relative z-index-lvl-1">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="text-capitalize script-font text-white mb-0">
                    <?php the_title();?>
                </h1>
            </div>
        </div>
    </div>
</section>