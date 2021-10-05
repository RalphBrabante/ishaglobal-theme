<section class="products-section">
    <div class="products-section__header">
        <div class="products-section__inner">
            <h2>Our Solutions</h2>
            <?php the_field('product_head_text'); ?>


        </div>
    </div>

    <div id="sol" class="products-section__row" style="background: url(<?php echo the_field('product_1'); ?>)no-repeat left fixed; -o-background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-size: cover;">
        <div class="products-section__inner inline">
            <div class="products-section__col col-5">
                <div class="products-section__details  products-section__details--left">
                    <h2 class="white" id="home-disinfect-h1"><?php the_field('product_title_1'); ?></h2>
                    <?php the_field('product_description_1'); ?>
                    <a href="<?php the_field('product_link_1'); ?>" class="btn-call-to-action medium-margin-top">View Products</a>
                </div>
            </div>
            <div class="products-section__col col-5">

            </div>

        </div>
    </div>

    <div class="products-section__row" style="background: url(<?php echo the_field('product_2'); ?>)no-repeat center center fixed; -o-background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-size: cover;">
        <div class="products-section__inner inline">

            <div class="products-section__col col-5">

            </div>
            <div class="products-section__col col-5">
                <div class="products-section__details">
                    <h2 class="white" id="home-core-relief-h1"><?php the_field('product_title_2'); ?></h2>
                    <?php the_field('product_description_2'); ?>
                    <a href="<?php the_field('product_link_2'); ?>" class="btn-call-to-action medium-margin-top">View Products</a>
                </div>
            </div>

        </div>
    </div>

    <div class="products-section__row" style="background:  url(<?php echo the_field('product_3'); ?>)no-repeat center center fixed; -o-background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-size: cover;">
        <div class="products-section__inner inline">

            <div class="products-section__col col-5">
                <div class="products-section__details products-section__details--left">
                    <h2 class="white" id="home-vector-h1"><?php the_field('product_title_3'); ?></h2>
                    <?php the_field('product_description_3'); ?>
                    <a href="<?php the_field('product_link_3'); ?>" class="btn-call-to-action medium-margin-top">View Products</a>
                </div>
            </div>
            <div class="products-section__col col-5">

            </div>

        </div>
    </div>


</section>