<?php
if(get_field('header_image')) {
    $header_img = get_field('header_image')['sizes']['page-banner'];
} else {
    $header_img = get_field('default_header', 'option')['sizes']['page-banner'];
}
?>

<section class="section banner">
    <div class="banner__bg-img" style="background-image: url(<?php echo $header_img; ?>);"></div>
    <div class="container">
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