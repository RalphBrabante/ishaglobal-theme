<section class="priority-section">
    <div class="priority-section__inner inline">
        <div class="col col-5 priority-section__product-img-container">
            <div>
                <?php the_post_thumbnail(); ?>
            </div>

        </div>

        <div class="col col-5">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>

            <div class="priority-section__cards priority-section__cards inline">
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_1'); ?>" />
                </div>
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_2'); ?>" />
                </div>
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_3'); ?>" />
                </div>
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_4'); ?>" />
                </div>
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_5'); ?>" />
                </div>
                <div class="priority-section__card--three-cols">

                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_6'); ?>" />
                </div>
            </div>

        </div>
    </div>
</section>