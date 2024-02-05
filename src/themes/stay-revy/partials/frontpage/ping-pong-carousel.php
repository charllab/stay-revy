<?php
// check if the flexible content field has rows of data
if (have_rows('content_layout')):
    // loop through the rows of data
    while (have_rows('content_layout')) : the_row();
        if (get_row_layout() == 'text_left_and_image_pingpong'): ?>
            <div class="row pb-150">
                <div class="order-2 order-md-1 col-md-6 layout__pingpong--py px-xs-2 px-md-150 px-lg-25">
                    <div class="layout--pingpong--maxwidth">
                        <h2><?php the_sub_field('featured_property_title') ?></h2>
                        <?php the_sub_field('featured_property_blurb') ?>
                        <?php if (get_sub_field('featured_property_button_link')): ?>
                            <a href="<?php the_sub_field('featured_property_button_link') ?>"
                               class="btn btn-primary mb-0"><?php the_sub_field('featured_property_button_text') ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <?php $banners = get_sub_field('banners');
                    if ($banners): ?>
                        <div class="owl-carousel owl-theme our-properties--slider">
                            <?php foreach ($banners as $banner):
                                $slide = $banner['banner_image']
                                ?>
                                <div class="item gallery-item">
                                    <img src="<?php echo $slide['url'] ?>" alt="<?php echo $slide['alt'] ?>"
                                         class="img-fluid accommodation-img our-properties-img">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div><!-- col -->
            </div><!-- row -->
        <?php elseif (get_row_layout() == 'text_right_and_image_pingpong'): ?>
            <div class="row pb-150">
                <div class="col-md-6">
                    <?php $banners = get_sub_field('banners');
                    if ($banners): ?>
                        <div class="owl-carousel owl-theme our-properties--slider">
                            <?php foreach ($banners as $banner):
                                $slide = $banner['banner_image']
                                ?>
                                <div class="item gallery-item">
                                    <img src="<?php echo $slide['url'] ?>" alt="<?php echo $slide['alt'] ?>"
                                         class="img-fluid accommodation-img our-properties-img">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div><!-- col -->
                <div class="col-md-6 layout__pingpong--py px-xs-2 px-md-150 px-lg-25">
                    <div class="layout--pingpong--maxwidth">
                        <h2><?php the_sub_field('featured_property_title') ?></h2>
                        <?php the_sub_field('featured_property_blurb') ?>
                        <?php if (get_sub_field('featured_property_button_link')): ?>
                            <a href="<?php the_sub_field('featured_property_button_link') ?>"
                               class="btn btn-primary mb-0"><?php the_sub_field('featured_property_button_text') ?></a>
                        <?php endif; ?>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        <?php endif;
    endwhile; ?>
<?php endif; ?>
