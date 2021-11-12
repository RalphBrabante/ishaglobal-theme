<?php

/**
 * Template Name: Covid 19 Template
 */

get_header();

?>
<div class="back-to-top">
    <div class="back-to-top__inner">
        <img src="<?php echo get_template_directory_uri() . '/assets/media//SVG/circle-up.svg' ?>" /> <span>Top</span>
    </div>

</div>
<div class="page-wrapper">


    <section class="content content-wrap">
        <?php the_field('covid_top_heading'); ?>

        <div>
            <?php the_field('covid_top_text'); ?>
        </div>
    </section>

    <section class="covid-full-width-image-row" style="background: url('<?php the_field('covid_top_banner_bg'); ?>') no-repeat center center">
        <div class="covid-full-width-image-row__footer">
            <div class="wider-content-wrap">
                <?php the_field('covid_top_banner_footer_text'); ?>

            </div>

        </div>
    </section>


    <section class="content content-wrap mt-3">
        <?php the_field('covid_where_we_are_heading'); ?>
        <div>
            <?php the_field('covid_where_we_are_text'); ?>

        </div>
    </section>



    <section class="content content-wrap">
        <img class="img-responsive" src="<?php the_field('covid_where_we_are_sub_image'); ?>" />
    </section>

    <?php get_template_part('partials/content/timeline', 'block'); ?>

    <section class="content content-wrap">
        <h2 class="bold-and-uppercase">Our Response</h2>
        <div class="inner-response">
            <?php the_field("response_content") ?>
        </div>
    </section>

    <section class="covid-upsell-section">
        <div class="content content-wrap">
            <div class="flex-align">
                <div class="col-4">

                    <img class="img-responsive" src="<?php the_field('covid_upsell_left_image'); ?>" />
                </div>
                <div class="col-6">
                    <?php the_field('covid_upsell_right_text'); ?>
                    <a class="btn-call-to-action medium-margin-top" href="<?php the_field('button_link'); ?>">
                        <?php the_field('button_text'); ?>
                    </a>
                </div>

            </div>
        </div>

    </section>



</div>

<?php get_footer(); ?>