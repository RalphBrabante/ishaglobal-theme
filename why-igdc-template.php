<?php

/**
 * Template Name: Why IGDC Template
 */
get_header();

?>

<div class="page-wrapper">

    <div id="about" class="page-header" style="background:linear-gradient(to right bottom, #021059, transparent), url(<?php echo the_field('header_image'); ?>); background-position:center; background-size: cover; background-attachment: fixed">
        <h1 class="page-heading"><?php the_title() ?></h1>
    </div>
    <main class="page-main" id="overview">
        <div class="breadcrumbs">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>

        </div>


    </main>
    <?php get_template_part('partials/content/about-usv2', 'section'); ?>

    <?php get_template_part('partials/content/founders', 'section'); ?>

    <?php get_template_part('partials/content/management', 'section'); ?>





    <?php get_template_part('partials/content/ambition-purpose', 'section'); ?>
    <?php get_template_part('partials/content/our-principles', 'section'); ?>

    <?php get_template_part('partials/content/upsell', 'section'); ?>

</div>

<?php get_footer(); ?>