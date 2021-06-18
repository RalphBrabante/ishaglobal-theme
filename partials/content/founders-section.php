<section class="founders-section">
    <div class="founders-section__inner inner-container">
        <h2>The Founders</h2>
        <div class="founders-section__inner__inner inline">


            <?php

            $args = array(
                'post_type' => 'founders',
                'post_status' => 'publish',
                'posts_per_page' => 2,
                'orderby' => 'publish_date',
                'order' => 'ASC'
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();

            ?>

                <div class="founders-section__col col-5">
                    <div class="founders-section__col__inner ">
                        <h3><?php the_title(); ?></h3>
                        <div class="founders-section__bio">
                            <p><?php the_field('text_1'); ?></p>
                        </div>
                        <div class="founders-section__small-bio">
                            <p><?php the_field('text_2'); ?></p>
                        </div>
                        <div class="founders-section__bio-img">
                            <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" />
                        </div>
                    </div>
                </div>

            <?php
            endwhile;

            wp_reset_postdata();
            ?>



        </div>
    </div>
</section>

<section class="founders-section-text inner-container">
    <h3>Isha Global Distribution Corp. was founded by Dennis & Stacey. We care about quality, craft and disciplined experimentation. We are active contributors to the welfare of our members, partners and the society.</h3>
</section>