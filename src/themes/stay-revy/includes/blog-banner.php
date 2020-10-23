<?php
if( get_field('blog_header_image') ) {
    $blogheaderimg = get_field('blog_header_image');
}
else {
    $blogheaderimg = get_field('default_header', 'options');
}
?>


<section class="py-6 position-relative " style="background: #202020 url(<?php echo $blogheaderimg['sizes']['large']; ?>)no-repeat center center; background-size: cover;">
    <div class="block__tint-overlay position-absolute"></div>
    <div class="container position-relative z-index-lvl-1">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 text-center">
                <h1 class="text-capitalize script-font text-white mb-0">
                    <?php echo(get_field('blog_heading') ? get_field('blog_heading') : get_the_title()); ?>
                </h1>
                <?php if (get_field('blog_sub_heading')) { ?>
                    <p class="lead text-white mt-2"><?php the_field('blog_sub_heading'); ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>