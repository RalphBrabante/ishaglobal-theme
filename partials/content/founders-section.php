<section class="founders-section" id="org">
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
                        <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" />
                        <div class="founders-section__inner-text">
                            <h3><?php the_title(); ?></h3>
                            <h4><?php the_field('sub_title'); ?></h4>
                            <div class="founders-section__bio">
                                <p><?php the_field('text'); ?></p>
                            </div>
                        </div>


                        <div class="founders-section__bio-img">

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