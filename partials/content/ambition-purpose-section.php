<section class="ambition-and-purpose" id="ap">
    <div class="ambition-and-purpose__inner container-horizontal">
        <div class="row mt-3">
            <div class="col col-10">
                <h2 class="mt-3">“Our team is focused in finding sustainable solutions to create a wonderful community” </h2>
            </div>
        </div>
        <div class="row flex-align flex-align-center mb-2">
            <div class="col col-4">
                <?php the_field('ap_heading_1'); ?>
                <?php the_field('ap_textbox_1'); ?>


            </div>
            <div class="col col-6">
                <div class="img-container">
                    <img class="img-responsive" src="<?php the_field('ap_image_box_1'); ?>" />
                </div>
            </div>
        </div>

        <div class="row flex-align flex-align-center our-purpose">
            <div class="col col-6">
                <div class="img-container">
                    <img class="img-responsive" src="<?php the_field('ap_image_box_2'); ?>" />
                </div>
            </div>
            <div class="col col-4">
                <?php the_field('ap_heading_2'); ?>
                <?php the_field('ap_textbox_2'); ?>
            </div>
        </div>
    </div>

</section>