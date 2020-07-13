<header id="header" class="main-nav position-absolute w-100 z-index-lvl-1 bg-success">

    <nav class="navbar navbar-dark">
        <div class="container bg-warning px-50">

            <div class="row no-gutters w-100 justify-content-end align-items-center">
                <div class="col-6 bg-success">
                    <div class="nav-logo text-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                                 alt="<?php bloginfo('name'); ?> - Logo"
                                 class="img-fluid">
                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-3 text-right bg-info">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

        </div>
    </nav>

    <div class="main-navigation collapse navbar-collapse">

        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container_class' => 'container main-navigation--padding',
            'container_id' => 'mainnav',
            'menu_class' => 'navbar-nav ml-auto',
            'fallback_cb' => '',
            'menu_id' => 'mobile-menu',
            'walker' => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>

        <div class="container">
            <a class="btn btn-link text-white px-0" href="tel:<?php echo strip_tel(get_field('phone_number', 'options')); ?>"><?php the_field('phone_number', 'options'); ?></a>

            <div class="social-links">
                <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                    <a class="social-link btn btn-link text-white px-0 mr-2" target="_blank" href="<?php the_sub_field('url'); ?>">
                        <i class="<?php the_sub_field('icon_class'); ?> fa-2x">
                            <span class="sr-only"><?php the_sub_field('label'); ?></span>
                        </i>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

</header>