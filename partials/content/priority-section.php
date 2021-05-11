<section class="priority-section">
    <div class="priority-section__inner inline">
        <div class="col col-5">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="col col-5">
            <h2><?php the_title(); ?></h2><br/>
            <?php the_content(); ?>
            <div class="priority-section__cards inline">
                <div class="priority-section__card">
                    <img src="<?php echo the_field('trusted_partner'); ?>"/>
                </div>
            </div>

        </div>
    </div>
</section>