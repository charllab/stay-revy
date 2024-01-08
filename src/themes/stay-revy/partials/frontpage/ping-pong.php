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
                <?php $featuredpropertyimageurl = get_sub_field('featured_property_image'); ?>
                <div class="col-md-6 order-1 order-md-2"
                     style="background: #666 url(<?php echo $featuredpropertyimageurl['sizes']['large'] ?>) no-repeat center bottom; background-size: cover;">
                    <img src="<?php echo $featuredpropertyimageurl['sizes']['large'] ?>" alt=" "
                         class="d-md-none img-fluid">
                </div>
            </div>
        <?php elseif (get_row_layout() == 'text_right_and_image_pingpong'): ?>
            <div class="row pb-150">
                <?php $featuredpropertyimageurl = get_sub_field('featured_property_image'); ?>
                <div class="col-md-6"
                     style="background: #666 url(<?php echo $featuredpropertyimageurl['sizes']['large'] ?>) no-repeat center bottom; background-size: cover;">
                    <img src="<?php echo $featuredpropertyimageurl['sizes']['large'] ?>" alt=" "
                         class="d-md-none img-fluid">
                </div>
                <div class="col-md-6 layout__pingpong--py px-xs-2 px-md-150 px-lg-25">
                    <div class="layout--pingpong--maxwidth">
                        <h2><?php the_sub_field('featured_property_title') ?></h2>
                        <?php the_sub_field('featured_property_blurb') ?>
                        <?php if (get_sub_field('featured_property_button_link')): ?>
                            <a href="<?php the_sub_field('featured_property_button_link') ?>"
                               class="btn btn-primary mb-0"><?php the_sub_field('featured_property_button_text') ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif;
    endwhile;?>
<?php endif;?>
