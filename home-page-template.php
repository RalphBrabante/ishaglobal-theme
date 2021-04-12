<?php
/**
 * Template Name: Home Page
 *
 **/

get_header();

?>

<div class="page-wrapper">
    <?php get_template_part('partials/content/top-info', 'section-v2'); ?>
    <?php get_template_part('partials/content/priority', 'section'); ?>
    <?php get_template_part('partials/content/what-we-offer', 'section'); ?>
    <?php get_template_part('partials/content/get-started', 'section'); ?>
    <?php get_template_part('partials/content/products', 'section'); ?>
    <?php get_template_part('partials/content/featurette', 'section'); ?>
    <?php get_template_part('partials/content/platform', 'section'); ?>
    <?php get_template_part('partials/content/why-choose-us', 'section'); ?>
    <?php get_template_part('partials/content/clients-carousel', 'section'); ?>
    <?php get_template_part('partials/content/integration', 'section'); ?>
    <?php get_template_part('partials/content/upsell', 'section'); ?>
</div>

<?php get_footer(); ?>
g