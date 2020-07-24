<main>

    <?php get_template_part('includes/title', 'banner'); ?>

    <?php get_template_part('includes/page', 'lead'); ?>

    <div class="container general-sect__padding">

        <div class="row">
            <div class="col-12">

                <?php the_content(); ?>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

</main>