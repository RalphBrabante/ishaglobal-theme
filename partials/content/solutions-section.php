<section class="solutions-section">
    <div class="solutions-section__inner">
        <div class="solutions-section__heading">
            <h2>Our Solutions</h2>
            <p><strong>While we specialize in Vector Control, our philosophy and industry partnerships advocate a
                    forward-thinking approach to public health and safety. We believe in building a community that can
                    mobilize effectively in the face of public safety risks, and therefore creating a sustainable and
                    localized solution dedicated to communal health.</strong></p>
        </div>
        <div class="row extra-large-margin-top">
            <div class="row__inner inline">
                <div class="col col-5 col-5-meta2-img">
                    <img class="solutions-home-img solutions-home-img--vc"
                         src="<?php the_field('home_solutions_vc_image'); ?>">
                    <img class="solutions-home-img solutions-home-img--ds"
                         src="<?php the_field('home_solutions_ds_image'); ?>">
                </div>
                <div class="col col-5 col-5-meta2">
                    <div class="solutions-btn-set">
                        <button id="home-vc-btn" class="solutions-btn-set__active">Vector Control</button>
                        <button id="home-ds-btn">Disinfection and Sanitation</button>
                    </div>
                    <div class="solutions-section__meta solutions-section__meta--vc">
                        <?php the_field('home_solutions_vc_text'); ?>
                    </div>
                    <div class="solutions-section__meta solutions-section__meta--ds">
                        <?php the_field('home_solutions_ds_text'); ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="row extra-large-margin-top">
            <div class="row__inner inline">
                <div class="col col-5 col-5-meta1">
                    <div class="solutions-btn-set">
                        <button class="">Disaster Preparedness</button>
                    </div>
                    <div class="solutions-section__meta">
                        <?php the_field('home_solutions_dp_text'); ?>
                    </div>
                </div>
                <div class="col col-5 col-5-meta2-img">
                    <img class="solutions-home-img"
                         src="<?php the_field('home_solutions_dp_image'); ?>">
                </div>
            </div>
        </div>

    </div>
</section>