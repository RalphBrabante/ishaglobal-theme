<section class="solutions-section">
    <div class="solutions-section__inner">
        <div class="solutions-section__heading">
            <h2>Our Solutions</h2>
            <!-- TODO: Custom Field -->
            <p><strong>We provide health and safety solutions especially concerning suppression and mitigation of disease-spreading factors like pests, viruses and bacteria. To achieve this, we specialize in Vector Control measures which aim to minimize the risk of catching disease spread by mosquitoes. We also offer Disinfection and Sanitization solutions to protect spaces from Covid-19, other viruses and harmful bacteria as well as multi-purpose tents that can be used for various emergency response situations.</strong></p>
        </div>
        <div class="row extra-large-margin-top">
            <div class="row__inner inline">
                <div class="col col-5 col-5-meta2-img">
                    <img class="solutions-home-img solutions-home-img--vc img-responsive" src="<?php the_field('home_solutions_vc_image'); ?>">
                    <img class="solutions-home-img solutions-home-img--ds img-responsive" src="<?php the_field('home_solutions_ds_image'); ?>">
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
        <div class="row row-2 extra-large-margin-top">
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
                    <img class="solutions-home-img img-responsive" src="<?php the_field('home_solutions_dp_image'); ?>">
                </div>
            </div>
        </div>

    </div>
</section>