<?php
/**
 * Template Name: Why IGDC Template
 */
get_header();

?>

<div class="page-wrapper">

    <div class="page-header"
         style="background:linear-gradient(to right bottom, rgba(171, 172, 173, .6), rgba(171, 172, 173, .6)), url(<?php echo the_field('header_image'); ?>); background-position:center; background-size: cover; background-attachment: fixed">
        <h1 class="page-heading"><?php the_title() ?></h1>
    </div>
    <main class="page-main">
        <div class="breadcrumbs">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>

        </div>
        <?php the_content(); ?>

        <div class="core-valus-container">
            <h3><strong>Our Core Values</strong></h3>
            <?php

            $args = array(
                "post_type" => "core-values",
                'orderby' => 'post_date',
                'order' => 'ASC'
            );
            // The Query
            $the_query = new WP_Query($args);

            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>
                    <div class="row inline small-margin-top">
                        <div class="col col-1 value-icon">
                            <?php echo the_post_thumbnail(); ?>
                        </div>
                        <div class="col col-9">
                            <?php echo the_content(); ?>
                        </div>
                    </div>


                    <?php
                }
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
        </div>


    </main>
</div>

<?php get_footer(); ?>
