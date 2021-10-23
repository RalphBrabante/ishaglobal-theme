<?php

/**
 * Template Name: Covid 19 Template
 */

get_header();

?>

<div class="page-wrapper">

    <section class="content content-wrap">
        <h1 class="bold-and-uppercase"> Covid-19 </br> A Brief Overview</h1>
        <div>
            <p>The world experienced drastic changes since the discovery and spread of Covid-19. The virus’ high infectionrate
                essentially prohibits close human contact, leading to severe repercussions on all aspects of living.</p>
            <p>Here is a broad breakdown of how it began, how we adapted, and where we are now in this global health crisis.</p>
        </div>
    </section>

    <section class="covid-full-width-image-row">
        <div class="covid-full-width-image-row__footer">
            <div class="content-wrap">
                <p>Wuhan, China – Still unknown of its true origin but it is the place where the novel coronaviruswas first identified
                    causing viral pneumonia in December 2019, eventually earning the Covid-19designation as rapid spread of the
                    virus led to the onset of a global pandemic in early 2020</p>
            </div>

        </div>
    </section>


    <section class="content content-wrap">
        <h2 class="bold-and-uppercase">Where we are</h2>
        <div>
            <p>The WHO recorded 2.7 million deaths from Covid-19 between March 2020 - March 2021, becoming the 4th leading cause ofdeath. Economic crises, job losses, and pause in education are just a few of the glaring consequences facing most countries.Several vaccines have been approved for “emergency use”, with some countries achieving high vaccination rates (Israel, NewZealand), others managing uneven vaccination rate/rollout (USA, Philippines). The virus has mutated into new variants like theDelta variant, currently responsible for a spike in new infections and hospitalization and mortality.</p>
        </div>
    </section>

    <section class="content content-wrap">
        <h2 class="bold-and-uppercase">Our Response</h2>
        <div class="mt-2 flex-align">
            <div class="col-4">
                <div class="covid-button-sets">
                    <button class="covid-btn covid-btn--active btn covid-btn--1">
                        <?php the_field('heading_1'); ?>
                    </button>
                    <button class="covid-btn  btn covid-btn--2">
                        <?php the_field('heading_2'); ?>
                    </button>
                    <button class="covid-btn btn covid-btn--3">
                        <?php the_field('heading_3'); ?>
                    </button>
                    <button class="covid-btn btn covid-btn--4">
                        <?php the_field('heading_4'); ?>
                    </button>
                    <button class="covid-btn btn covid-btn--5">
                        <?php the_field('heading_5'); ?>
                    </button>
                </div>
            </div>
            <div class="col-6">
                <div class="covid-text-container covid-text-container--1 covid-text-container--visible">
                    <?php the_field('content_1'); ?>
                </div>
                <div class="covid-text-container covid-text-container--2">
                    <?php the_field('content_2'); ?>
                </div>

                <div class="covid-text-container covid-text-container--3">
                    <?php the_field('content_3'); ?>
                </div>

                <div class="covid-text-container covid-text-container--4">
                    <?php the_field('content_4'); ?>
                </div>

                <div class="covid-text-container covid-text-container--5">
                    <?php the_field('content_5'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="content content-wrap">
        <img class="img-responsive" src="http://ishav4.sysgage.com/wp-content/uploads/2021/10/covid-19-timeline-img.png" />
    </section>

    <?php get_template_part('partials/content/timeline', 'block'); ?>

    <section class="covid-upsell-section">
        <div class="content content-wrap">
            <div class="flex-align">
                <div class="col-5">

                    <img class="img-responsive" src="http://ishav4.sysgage.com/wp-content/uploads/2021/10/disinfection-image.png" />
                </div>
                <div class="col-5">
                    <p>It is expected that COVID-19 situation will</br> remain a primary healthcare challenge in the</br> next 2 to 3 years.</p>
                    <p>We at ISHA GLOBAL Distribution Corp.</br>
                        can help prevent the spread of COVID</br> cases in the country</p>
                    <a href="#" class="btn-call-to-action medium-margin-top">
                        Learn more about our products</br> for COVID-19
                    </a>
                </div>

            </div>
        </div>

    </section>



</div>

<?php get_footer(); ?>