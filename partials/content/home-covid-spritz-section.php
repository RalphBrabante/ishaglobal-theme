<section class="solutions-section">
    <div class="solutions-section__inner">
        <div class="solutions-section__heading">
            <h2><?php the_field('heading'); ?></h2>
            <?php the_field('sub_heading'); ?>
        </div>

        <div id="home-products-row" class="row row-2 large-margin-top" style="background: url('http://ishav4.sysgage.com/wp-content/uploads/2021/09/Spritz.jpg')no-repeat right; -o-background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-size: cover;">
            <div class="row__inner inline">
                <div class="col-10">
                    <h2 class="white">When a spritz<br /> &nbsp;&nbsp;won’t suffice…</h2>
                    <div class="home-products-middle">
                        <?php the_field('spritz_text_content'); ?>
                        <a href="<?php the_field('spritz_link'); ?>" class="btn-call-to-action medium-margin-top">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
</section>