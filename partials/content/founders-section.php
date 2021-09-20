<section class="founders-section" id="org">
    <div class="founders-section__inner">
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
                                <div class="founders-text"><?php the_field('text'); ?></div>
                                <?php if (!empty(get_field('excerpt'))) : ?>
                                    <div class="founders-excerpt"><?php the_field('excerpt'); ?></div>
                                    <div class="founder-read-more mt-2"><span>Read More</span> &darr;</div>
                                    <div class="founder-read-less mt-2">&uarr;<span> Read Less </span></div>


                                <?php else : ?>
                                    <div class="founders-full-text"><?php the_field('text'); ?></div>
                                <?php endif; ?>
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