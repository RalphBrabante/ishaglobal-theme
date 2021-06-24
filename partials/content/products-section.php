<section class="products-section">
    <div class="products-section__header">
        <div class="products-section__inner">
            <h2>Our Products</h2>
            <?php the_field('product_head_text'); ?>


        </div>
    </div>

    <div class="products-section__row" style="background: linear-gradient(to left, white 30%, transparent 70%), url(<?php echo the_field('product_1'); ?>)no-repeat center center fixed; -o-background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-size: cover;">
        <div class="products-section__inner inline">
            <div class="products-section__col col-4">

            </div>
            <div class="products-section__col col-6">
                <div class="products-section__details  products-section__details--right">
                    <h2><?php the_field('product_title_1'); ?></h2>
                    <?php the_field('product_description_1'); ?>
                    <a href="http://google.com" class="btn-call-to-action medium-margin-top">View Products</a>
                </div>
            </div>
        </div>
    </div>

    <div class="products-section__row" style="background: linear-gradient(to right, white 30%, transparent 70%), url(<?php echo the_field('product_2'); ?>)no-repeat center center fixed; -o-background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-size: cover;">
        <div class="products-section__inner inline">
            <div class="products-section__col col-6">
                <div class="products-section__details">
                    <h2><?php the_field('product_title_2'); ?></h2>
                    <?php the_field('product_description_2'); ?>
                    <a href="http://google.com" class="btn-call-to-action medium-margin-top">View Products</a>
                </div>
            </div>
            <div class="products-section__col col-4">

            </div>
        </div>
    </div>

    <div class="products-section__row" style="background: linear-gradient(to left, white 30%, transparent 70%), url(<?php echo the_field('product_3'); ?>)no-repeat center center fixed; -o-background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-size: cover;">
        <div class="products-section__inner inline">
            <div class="products-section__col col-4">

            </div>
            <div class="products-section__col col-6">
                <div class="products-section__details products-section__details--right">
                    <h2><?php the_field('product_title_3'); ?></h2>
                    <?php the_field('product_description_3'); ?>
                    <a href="http://google.com" class="btn-call-to-action medium-margin-top">View Products</a>
                </div>
            </div>
        </div>
    </div>


</section>