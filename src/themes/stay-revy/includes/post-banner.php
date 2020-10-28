<?php
if( get_field('banner_image') ) {
    $headerimg = get_field('banner_image');
}
else {
    $headerimg = get_field('default_header', 'options');
}
?>

<section class="py-4 py-md-8 position-relative post-banner--bg-pos" style="background: #202020 url(<?php echo $headerimg['sizes']['large']; ?>)no-repeat center center; background-size: cover;">
    <div class="block__tint-overlay position-absolute"></div>
    <div class="container position-relative z-index-lvl-1">
        <div class="row justify-content-center">
            <div class="col-12 text-center col-lg-8">
                <p class="h6 text-white mb-2"><span><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date('M, d, Y'); ?></time></p>
                <h1 class="h2 text-capitalize script-font text-white mb-0">
                    <?php echo(get_field('heading') ? get_field('heading') : get_the_title()); ?>
                </h1>
            </div>
        </div>
    </div>
</section>