<?php
/**
 * Template Name: Home Page
 *
 **/

get_header();

?>

<div class="page-wrapper">
    <?php get_template_part('partials/content/top-info', 'section-v2'); ?>
    <?php get_template_part('partials/content/products', 'section'); ?>

</div>

<?php get_footer(); ?>
g