<?php
/**
 * Template Name: Contact Us
 *
 **/

get_header();

?>

<div class="page-wrapper">

    <div class="page-header"
         style="background:linear-gradient(to right bottom, #021059, transparent), url(<?php echo the_field('header_image'); ?>); background-position:center; background-size: cover; background-attachment: fixed">
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

    <?php get_template_part( 'partials/content/upsell', 'section'); ?>
</div>

<?php get_footer(); ?>
