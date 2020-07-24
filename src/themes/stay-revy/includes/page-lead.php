<?php if (get_field('lead_text')): ?>
    <div class="container pt-3">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-6 text-center">
                <p class="lead-xl mb-0">
                    <?php the_field('lead_text') ?>
                </p>
            </div>
        </div>

        <?php if (get_field('lead_paragraphs')): ?>
            <div class="row justify-content-center">
                <div class="col-11 col-lg-8 text-center mt-1 lead-paragraph__last-p--mb0">
                        <?php the_field('lead_paragraphs') ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>