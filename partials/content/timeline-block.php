<section>
    <div class="content content-wrap timeline">
        <?php

        // LOOP to get UNIQUE Years START
        $args = array(
            'post_type' => 'timeline',
            'post_status' => 'publish',
            'orderby' => 'publish_date',
            'order' => 'ASC',
            'posts_per_page' => -1
        );

        $loop = new WP_Query($args);
        $years = array();

        while ($loop->have_posts()) : $loop->the_post();
            array_push($years, the_date('Y', '', '', false));
        endwhile;

        wp_reset_postdata();

        $uniqueYears = array_unique($years);

        //LOOP to get UNIQUE Years END
        ?>

        <?php
        // LOOP Echo Year and get posts under that year START

        // var_dump($uniqueYears);

        foreach ($uniqueYears as $year) {
        ?>

            <div class="timeline__year-wrapper">
                <div class="timeline__year">
                    <h2><?php echo $year; ?></h2>
                </div>

                <?php

                $args = array(
                    'post_type' => 'timeline',
                    'post_status' => 'publish',
                    'orderby' => 'publish_date',
                    'order' => 'ASC',
                    'posts_per_page' => -1,
                    'date_query' => array(
                        'relation' => "AND",
                        array('year' => $year)
                    )

                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();
                ?>

                    <div class="timeline__circle-container">
                        <div class="timeline__inner-circle"></div>
                        <div class="timeline__content-container">
                            <h3 class="timeline-header"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- <div class="timeline__title">
                   
                    <div> -->
            <?php endwhile;
                echo "</div>";

                wp_reset_postdata();
            }



            // LOOP Echo Year and get posts under that year END
            ?>





            </div>
</section>