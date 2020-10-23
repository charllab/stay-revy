<?php
/**
 *
 * Template Name: Blog
 *
 */
global $post;
get_header(); ?>

    <main class="blog-php">

        <div class="container-a--maxwidth position-relative">

            <div class="bg-vector__a bg-vector--light-a position-absolute"></div>

            <section class="general-sect__padding">
                <div class="container position-relative">

                    <div class="row justify-content-center">
                        <div class="col-xl-10 text-center">
                            <h1><?php the_field('blog_listing'); ?></h1>
                            <h2 class="h4 mb-2"><?php the_field('blog_subline'); ?></h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card-deck">

                                <?php
                                $limit = 10;

                                $temp = $wp_query;
                                $wp_query = null;

                                $wp_query = new WP_Query();
                                $wp_query->query('posts_per_page=' . $limit . '&paged=' . $paged);

                                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                                    <div class="card card--styled mb-1 mb-md-2 rounded-0"
                                         id="post-<?php the_ID(); ?>">

                                        <a href="<?php the_permalink(); ?>" title="Read more" class="ie-flex__a-min-height--fix">
                                            <img class="card-img-top"
                                                 src="<?php the_post_thumbnail_url(); ?>"
                                                 alt="<?php the_title(); ?>"
                                            >
                                        </a>

                                        <div class="card-body pb-0">
                                            <h4 class="card-title"><?php the_title(); ?></h4>
                                            <p class="card-text"><?php echo the_excerpt(); ?></p>
                                        </div>
                                        <div class="card-footer card-footer--styled border-0 pt-0">
                                            <a class="inline-link--primary d-block mb-50"
                                               href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>

                                <?php endwhile; ?>

                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8 text-center">
                            <nav aria-label="Page navigation">

                                <?php bootstrap_pagination(); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </main>

<?php get_footer(); ?>