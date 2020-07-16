<header id="header" class="main-nav w-100 z-index-lvl-1">

    <nav class="navbar">
        <div class="container px-50">

            <div class="row no-gutters w-100 justify-content-end align-items-center">
                <div class="col-6">
                    <div class="nav-logo text-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>" tabindex="-1" class="link--no-focus">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                                 alt="<?php bloginfo('name'); ?> - Logo"
                                 class="img-fluid">
                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-3 text-right">
                    <button class="navbar-toggler ml-auto my-0" type="button" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="<?php bloginfo('template_url'); ?>/images/skinny-burger.svg"
                             alt="<?php bloginfo('name'); ?> - menu" class="nav__skinny-burger py-250">
                    </button>
                </div>
            </div>

        </div>
    </nav>

    <div class="main-navigation collapse navbar-collapse bg-warning">

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