<section class="priority-section">
    <div class="priority-section__inner inline">
        <div class="col col-6">
            <h2><?php the_title(); ?></h2><br/>
            <?php the_content(); ?>
            <a href="<?php echo the_field('download_link');?>" class="btn-call-to-action medium-margin-top">Download Brochure</a>
        </div>

        <div class="col col-4">
            <h2>Our Trusted Partner</h2>
            <div class="priority-section__cards priority-section__cards inline">
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_1'); ?>"/>
                </div>
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive"  src="<?php echo the_field('trusted_partner_2'); ?>"/>
                </div>
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_3'); ?>"/>
                </div>
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_4'); ?>"/>
                </div>
                <div class="priority-section__card--three-cols">
                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_5'); ?>"/>
                </div>
                <div class="priority-section__card--three-cols">

                    <img class="img-responsive" src="<?php echo the_field('trusted_partner_6'); ?>"/>
                </div>
            </div>

        </div>
    </div>
</section>