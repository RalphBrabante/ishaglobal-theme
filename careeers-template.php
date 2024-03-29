<?php

/**
 * Template Name: Careers Template
 */
get_header();

?>

<div class="page-wrapper">

    <div class="page-header" style="background:linear-gradient(to right bottom, #021059, transparent), url(<?php echo the_field('header_image'); ?>); background-position:center; background-size: cover; background-attachment: fixed">
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


        <div class="careers inline">
            <div class="careers__col col-5">
                <?php the_content(); ?>
                <div class="careers__list-container">


                    <?php

                    $args = array(
                        'post_type' => 'career-item',
                        'post_status' => 'publish',
                        'orderby' => 'publish_date',
                        'order' => 'DESC'
                    );

                    $loop = new WP_Query($args);

                    while ($loop->have_posts()) : $loop->the_post();
                    ?>
                        <div class="careers__list-header">
                            <h2> <?php the_title(); ?> </h2>
                        </div>
                        <div class="careers__list-item">

                            <div class="careers__position-desc">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <a class="btn btn-orange" style="align-self:flex-end;" href="mailto:info@ishaglobal.com.ph?subject=Application: <?php the_title(); ?>">Apply Now</a>
                    <?php

                    endwhile;

                    wp_reset_postdata();
                    ?>

                </div>

            </div>
            <div class=" careers__col col-5">

                <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" />

            </div>

        </div>

    </main>




</div>

<?php get_footer(); ?>