<?php

/**
 * Template Name: Core Relief
 */

get_header();

?>

<div class="page-wrapper">

    <div class="page-header" style="background:linear-gradient(to right bottom, #068509, transparent), url(<?php echo the_field('header_image'); ?>); background-position:top; background-size: cover; background-attachment: fixed">
        <h1 class="page-heading"><?php the_title() ?></h1>
    </div>
    <main class="page-main">
        <div class="page-main__breadcrumbs-and-products inline">
            <div class="col-5">
                <div class="breadcrumbs">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
            </div>
            <div class="col-5">

                <?php wp_nav_menu(array('theme_location' => 'products-menu')); ?>
            </div>
        </div>
        <?php get_template_part('partials/content/priority', 'section'); ?>
    </main>
    <section class="featured-products">
        <div class="featured-products__inner">
            <h2 style="text-align: center">Featured Products</h2>
            <?php
            echo do_shortcode('[smartslider3 slider="5"]');
            ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>