<section class="management-section">
    <div class="management-section__inner inner-container ">
        <h2>The Management</h2>
        <div class="management-section__cols-wrapper inline flex-wrap">



            <?php

            $args = array(
                'post_type' => 'management',
                'post_status' => 'publish',
                'posts_per_page' => 5,
                'orderby' => 'publish_date',
                'order' => 'ASC'
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();

            ?>

                <div class="management-section__col-wrapper col-3-5">
                    <div class="management-section__col-inner">

                        <div class="management-section__row management-section__row--1">
                            <div class="management-section__bio-img">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" />
                            </div>
                        </div>
                        <div class="management-section__row management-section__row--2">
                            <h3><?php the_title(); ?></h3>
                            <span class="management-section__position"><?php the_field('position'); ?></span>
                        </div>
                        <div class="management-section__row management-section__row--3">
                            <p><?php the_field('text'); ?></p>
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