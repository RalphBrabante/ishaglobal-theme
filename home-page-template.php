<?php
/**
 * Template Name: Home Page
 *
 **/

get_header();

?>


<div class="page-wrapper">


    <section class="home-top-info"
             style="background: linear-gradient(to right, white 45%, transparent 75%), url(<?php echo the_field('top_info_background_image'); ?>); background-position:center; background-size: cover;">
        <div class="home-top-info__inner inline">
            <div class="col col-4 ">
                <h1>OPTIMIZE, CONTROL, AND AUTOMATE YOUR REPORTING AND BUDGETING PROCESS</h1>
                <h2 class="medium-margin-top">Your cloud subscription to Innovation, Quality, and Automation.</h2>
                <div class="home-top-info__button-set large-margin-top">
                    <a href="#" class="btn btn-blue">Watch Video</a>
                    <a href="#" class="btn btn-orange">Request a Demo</a>
                </div>
            </div>
            <div class="col col-6">
                test
            </div>

        </div>

    </section>

    <section class="get-started-section">
        <div class="get-started-section__inner">
            <div class="col col-10">
                <h1>Performance Canvas Financials</h1>
                <h3 class="medium-margin-top">Top-rated Financial Budgeting and Planning Software + Financial Reporting & Analysis Software</h3>
                <p class="medium-margin-top"><strong>This Financial Budgeting and Planning software + Financial Forecasting and Reporting Software in one, unified platform improves your FP&A process by streamlining and automating financial reporting, budgeting, planning, and consolidation. When you subscribe to our solution, you subscribe to an evolving FP&A business process innovation, quality, and automation. You don´t just gain a new software; you gain new and effective team helpers.</strong></p>
                <a href="#" class="btn-call-to-action large-margin-top">Get Started</a>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
