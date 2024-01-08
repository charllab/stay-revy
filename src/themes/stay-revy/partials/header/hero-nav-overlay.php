<header id="header" class="main-nav w-100 z-index-lvl-1">

    <nav class="navbar pb-xl-50">
        <div class="container pl-50 pr-250">
            <div class="row no-gutters w-100 justify-content-end align-items-center">
                <div class="col-6">
                    <div class="nav-logo text-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>" tabindex="-1" class="link--no-focus">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                                 alt="<?php bloginfo('name'); ?> - Logo"
                                 class="img-fluid">
                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                        </a>
                    </div><!-- nav-logo -->
                </div><!-- col -->
                <div class="col-3 text-right">
                    <button class="hamburger hamburger--elastic ml-auto my-0 menu-link d-xl-none" type="button">
                      <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                      </span>
                    </button>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </nav>

    <nav id="menu" class="panel d-xl-none" role="navigation">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container_class' => 'container main-navigation--padding',
            'container_id' => 'mainnav',
            'menu_class' => 'navbar-nav ml-auto',
            'fallback_cb' => '',
            'menu_id' => 'mobile-menu',
            'walker' => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>
    </nav>


            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'container_class' => 'container d-none d-xl-flex justify-content-center position-relative z-index-lvl-2',
                'container_id' => '',
                'menu_class' => 'navbar-nav desktop-only flex-row',
                'fallback_cb' => '',
                'menu_id' => 'desktop-menu',
                'walker' => new understrap_WP_Bootstrap_Navwalker(),
            ]); ?>

</header>
