<?php
/**
 * Template Name: Why IGDC Template
 */
get_header();

?>

<div class="page-wrapper">

    <div class="page-header"
         style="background:linear-gradient(to right bottom, #021059, transparent), url(<?php echo the_field('header_image'); ?>); background-position:center; background-size: cover; background-attachment: fixed">
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
    <section class="overview-section extra-large-margin-top">

        <div class="overview-section__inner inline">
            <div class="col-5">
                <div class="overview-section__btn-set">
                    <button id="overview-btn" class="section-tab overview-btn-set__active">Overview</button>
                    <button id="trusted-partners-btn" class="section-tab">Trusted Partners</button>
                </div>
                <div class="overview-section__text large-margin-top">
                    <?php the_field('overview_text') ?>
                </div>

                <div class="trusted-partners-section__text large-margin-top">
                    <?php the_field('trusted_partners_text') ?>
                    <?php echo do_shortcode('[sp_wpcarousel id="462"]'); ?>
                </div>
            </div>
            <div class="col-5 overview-section-img-container">
                <img class="solutions-home-img" id="overview-right-img" src="<?php the_field('overview_image') ?>">
                <img class="solutions-home-img" id="trusted-partners-right-img" src="<?php the_field('trusted_partners_image') ?>">
            </div>
        </div>

    </section>

    <section class="mission-vision">
        <div class="mission-vision__inner inline">
            <div class="col-5 mission-vision__left-image-container">
                <img src="<?php the_field('mv_left_image'); ?>"/>
            </div>
            <div class="col-5 mission-vision__text-container">
                <h2><?php the_field('mv_mission_heading'); ?></h2>
                <?php the_field('mv_mission_text'); ?>

                <h2><?php the_field('mv_vision_heading'); ?></h2>
                <?php the_field('mv_vision_text'); ?>
            </div>
        </div>
    </section>

    <section class="overview-section">

        <div class="overview-section__inner inline">

            <div class="col-5">
                <div class="overview-section__container">
                    <button class="section-tab">
                    <?php the_field('cv_heading') ?>
                    </button>
                </div>
                <div class="core-valus-container">
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
            </div>
            <div class="col-5 overview-section-img-container">
                <img class="solutions-home-img" src="<?php the_field('cv_right_image') ?>">
            </div>

        </div>
    </section>

    <?php get_template_part('partials/content/upsell', 'section'); ?>

</div>

<?php get_footer(); ?>
