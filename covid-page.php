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
        <h1 class="bold-and-uppercase"> Covid-19 </br> A Brief Overview</h1>
        <div>
            <p>The world experienced drastic changes since the emergence and spread of COVID-19. The virus’ high infection rate essentially prohibits close human interaction, leading to severe repercussions on the global economy.</p>
            <p>Here is a broad breakdown of how it began, how we adapted, and where we are now in this global health crisis.</p>
        </div>
    </section>

    <section class="covid-full-width-image-row">
        <div class="covid-full-width-image-row__footer">
            <div class="wider-content-wrap">
                <p>Wuhan, China – Still unknown of its true origin but it is the place where the novel coronavirus was first identified
                    causing viral pneumonia in December 2019, eventually earning the COVID-19 designation as rapid spread of the
                    virus led to the onset of a global pandemic in early 2020</p>
            </div>

        </div>
    </section>


    <section class="content content-wrap mt-3">
        <h2 class="bold-and-uppercase">Where we are</h2>
        <div>
            <p>The WHO recorded 4.9 million deaths from COVID-19 as of October 2021. Economic crises, job losses, and pause in education are just a few of the glaring consequences facing most countries. Several vaccines have been approved for “emergency use”, with some countries achieving high vaccination rates while others are managing uneven vaccination rollout. The virus has mutated into new variants like the Delta variant, currently responsible for a spike in new infections and hospitalization and mortality.</p>
        </div>
    </section>



    <section class="content content-wrap">
        <img class="img-responsive" src="http://ishav4.sysgage.com/wp-content/uploads/2021/10/covid-19-timeline-img.png" />
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

                    <img class="img-responsive" src="http://ishav4.sysgage.com/wp-content/uploads/2021/10/disinfection-image.png" />
                </div>
                <div class="col-6">
                    <p>It is expected that COVID-19 situation will remain </br>a primary healthcare challenge in the next 2 to 3 years.</p>
                    <p>ISHA GLOBAL Distribution Corp. can help prevent the spread of COVID cases in the country</p>
                    <a href="#" class="btn-call-to-action medium-margin-top">
                        OUR PRODUCTS FOR COVID-19
                    </a>
                </div>

            </div>
        </div>

    </section>



</div>

<?php get_footer(); ?>