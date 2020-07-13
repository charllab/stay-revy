<?php $footerimageurl = get_field('footer_image', 'options'); ?>

<footer style="background: #000 url(<?php echo $footerimageurl['sizes']['large'] ?>) no-repeat center center; background-size: cover;"">
    <section class="layout__footer">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-11 col-md-5">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                             alt="<?php bloginfo('name'); ?> - Logo"
                             class="footer__logo img-fluid mb-2 mb-md-0">
                        <span class="sr-only"><?php bloginfo('name'); ?></span>
                    </a>
                </div>
                <div class="col-md-5 text-center text-md-left">
                    <p class="text-white lead">
                        <i class="fas fa-phone-alt mr-35"></i> Phone: <a href="tel:+1<?php echo strip_tel(get_field('phone_number', 'options')); ?>" class="text-white"><?php the_field('phone_number', 'options'); ?></a>
                    </p>
                    <p class="text-white lead">
                        <i class="fas fa-envelope mr-35"></i> Email: <a href="mailto:<?php the_field('email_address', 'options'); ?>" class="text-white"><?php the_field('email_address', 'options'); ?></a>
                    </p>
                    <p class="text-white lead mb-2">
                        <i class="fas fa-map-marker-alt align-top pt-250 mr-35"></i> <span class="d-inline-block"> <?php echo the_field('postal_address', 'options')?></span>
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact-stay-revy')); ?>" class="btn btn-light mb-0">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary text-white py-125">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-left">
                    <p class="mb-md-0">&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                </div>
                <div class="col-md-8 text-center text-md-right">
                    <p class="mb-0">Designed, Developed and Hosted by <a href="https://sproing.ca" target="_blank" class="text-white">Sproing&nbsp;Creative</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</footer>

<?php wp_footer(); ?>

</body>

</html>