<?php
/**
 * Template Name: Home Page
 *
 **/

get_header();

?>

<div class="page-wrapper">

    <div class="page-header"
         style="background:linear-gradient(to right bottom, rgba(171, 172, 173, .6), rgba(171, 172, 173, .6)), url(<?php echo the_field('header_image'); ?>); background-position:center; background-size: cover;">
        <h2 class="page-heading"><?php the_title() ?></h2>
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
</div>

<?php get_footer(); ?>
