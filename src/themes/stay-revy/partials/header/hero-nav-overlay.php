<header id="header" class="main-nav w-100 z-index-lvl-1">

    <nav class="navbar">
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
                    </div>
                </div>
                <div class="col-3 text-right">

                    <button class="hamburger hamburger--elastic ml-auto my-0 menu-link" type="button">
                      <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                      </span>
                    </button>

                </div>
            </div>

        </div>
    </nav>

    <nav id="menu" class="panel" role="navigation">
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

</header>