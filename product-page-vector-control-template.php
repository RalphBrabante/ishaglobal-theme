<?php
/**
 * Template Name: Product Page for Vector Control
 */

get_header();

?>

<div class="page-wrapper">

    <div class="page-header"
         style="background:linear-gradient(to right bottom, rgba(171, 172, 173, .6), rgba(171, 172, 173, .6)), url(<?php echo the_field('header_image'); ?>); background-position:center; background-size: cover; background-attachment: fixed">
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

        <?php get_template_part('partials/content/products-vector-control', 'section'); ?>
    </main>

</div>

<?php get_footer(); ?>
