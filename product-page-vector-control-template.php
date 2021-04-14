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
        <div class="breadcrumbs">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>

        </div>
        <?php the_content(); ?>
    </main>
    <?php get_template_part('partials/content/products-vector-control', 'section'); ?>
</div>

<?php get_footer(); ?>
