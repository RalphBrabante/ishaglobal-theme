<?php
/**
 * Template Name: Products Page
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
        <div class="products-categories">
            <?php

            $args = array(
                "post_type" => "product"
            );
            // The Query
            $the_query = new WP_Query($args);

            // The Loop
            if ($the_query->have_posts()) {
                echo '<div class="products__cards">';
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    echo '<a href="' . get_field('product_page_link') . '">';
                    echo '<div class="products__card">';
                    echo '<div class="products__card--front">';
                    echo '<div class="product-inner-content">';
                    echo '<img class="img-responsive" src="' . get_field('product_icon') . '"/>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="products__card--back">';
                    echo '<div class="product-inner-content">';
                    echo '<h2>' . get_the_title() . '</h2>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';

                }
                echo '</div>';
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
        </div>
        <?php the_content(); ?>
    </main>
</div>

<?php get_footer(); ?>
