<section class="priority-section">
    <div class="priority-section__inner inline">
        <div class="col col-5">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="col col-5">
            <h2><?php the_title(); ?></h2><br />
            <?php the_content(); ?>
            <div class="priority-section__cards inline">
                <div class="priority-section__card">
                    <div class="product-partners flex-align flex-align-center flex-justify-content-center">


                        <div class="col">
                            <img src="<?php the_field('trusted_partner'); ?>" />
                        </div>


                        <div class="col">
                            <img src="<?php echo the_field('trusted_partner_2'); ?>" />
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>