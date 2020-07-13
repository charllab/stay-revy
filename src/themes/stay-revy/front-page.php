<?php get_header(); ?>

    <main>

        <div class="alignfull container px-0 hero-outer--fullheight position-relative">

            <?php if (have_rows('hero_slide')): ?>

                <div class="owl-carousel" id="hero-slide">

                    <?php while (have_rows('hero_slide')) : the_row(); ?>

                        <?php $herosliderimageurl = get_sub_field('hero_slide_image'); ?>

                        <div class="hero-slide--fullheight"
                             style="background: #666 url(<?php echo $herosliderimageurl['sizes']['large'] ?>) no-repeat center center; background-size: cover;">
                            <div class="block__tint-overlay position-absolute"></div>
                            <div class="item text-center h-100">
                                <div class="container hero-slide__container h-100">
                                    <div class="row justify-content-center align-items-center h-100">
                                        <div class="col-md-10">
                                            <h1 class="slider__title text-uppercase text-center">
                                                <span
                                                    class="slider__title--intro-line"><?php the_sub_field('title_intro_line'); ?></span>
                                                <?php the_sub_field('title_main_line'); ?>
                                                <span
                                                    class="slider__title--sub-line"><?php the_sub_field('title_sub_line'); ?></span>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div><!-- owl-carousel -->

            <?php endif; ?>

            <div class="layout__banner-check-in w-100 text-center position-absolute z-index-lvl-1 bg-danger">
                <div class="container bg-info">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">

                            <form method="post" class="check-in__form bg-dark text-white p-1" id="checkInForm">
                                <div class="row align-items-end">
                                    <div class="col-12 col-md-5 datePickW">
                                        <label class="text-uppercase" for="checkInAndOut">Check in - check out</label>
                                        <input type="text" class="form-control text-center" id="checkInAndOut"
                                               placeholder="Please choose…" value="" required>
                                    </div>
                                    <div class="col-12 col-md">
                                        <label class="text-uppercase" for="numberOfAdults">Adults</label>
                                        <select class="custom-select" name="adults" id="numberOfAdults">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md">
                                        <label class="text-uppercase" for="numberOfChildren">Children</label>
                                        <select class="custom-select" name="children" id="numberOfChildren">
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <button class="btn btn-primary">CHECK AVAILABILITY</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div><!-- alignfull container -->

        <div class="container general-sect__pb">
            <div class="row">
                <div class="col-md-10 col-lg-6">
                    Amazing accommodations in Revelstoke.
                    Welcome to your home away from home.
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">left</div>
                <div class="col-md-6">right</div>
            </div>
        </div>


    <?php if (have_rows('activity_card')): ?>

        <div class="container general-sect__pb">
            <div class="row justify-content-center">

                <?php while (have_rows('activity_card')) : the_row(); ?>

                <?php $activitycardimageurl = get_sub_field('activity_card_image'); ?>

                <div class="col-lg-4 mb-1">
                <a href="<?php the_sub_field('activity_card_link'); ?>" class="activity-card__link">
                    <div class="card activity-card__card position-relative border-0 rounded-0" style="background: #666 url(<?php echo $activitycardimageurl['sizes']['large'] ?>) no-repeat center center; background-size: cover;">
                        <div class="card-body activity-card__card-body position-absolute text-center w-100 p-1 border-0 rounded-0">
                            <h2 class="text-white mb-0">
                                <?php the_sub_field('activity_card_title_line_1'); ?>
                                <span class="font-family-body lead text-white text-center d-block font-weight-bold"><?php the_sub_field('activity_card_title_line_2'); ?></span>
                            </h2>
                        </div>
                    </div>
                </a>
                </div>

                <?php endwhile; ?>

            </div>
        </div>

    <?php endif; ?>

        <section class="bg-danger">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-white">HOMEOWNER?</h2>
                        <p class="lead text-white">Stay Revy is a property management company, offering
                            exceptional service that will have your guests returning
                            year after year. Learn more how our personal approach
                            takes care of all your home rental needs.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer();
