<?php
if( get_field('page_header_image') ) {
    $headerimg = get_field('page_header_image');
} else {
    $headerimg = get_field('default_header', 'options');
}
?>

<section class="general-sect__padding position-relative" style="background: #202020 url(<?php echo $headerimg['sizes']['large']; ?>)no-repeat center center; background-size: cover;">
    <div class="block__tint-overlay position-absolute"></div>
    <div class="container position-relative z-index-lvl-1">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 text-center">
                <h1 class="text-capitalize script-font text-white mb-0">
                    <?php echo(get_field('heading') ? get_field('heading') : get_the_title()); ?>
                </h1>
                <?php if (get_field('sub_heading')) { ?>
                    <p class="lead text-white mt-2"><?php the_field('sub_heading'); ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>