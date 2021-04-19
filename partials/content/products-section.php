<section class="products-section"
         style="background:linear-gradient(to bottom,transparent 40%, white 90%), url('http://localhost/ishaglobal/wp-content/uploads/2021/04/about-2.jpg'); background-position:center; background-size: cover;">
    <div class="products-section__inner">
        <h2>Our Products</h2>
        <div class="col-10 inline large-margin-top">
            <div class="col-3 products-section__left">
                <div class="product-section__text-container">
                    <div class="priority-section__text-wrapper">
                        <h3>While we specialize in Vector Control, our philosophy and industry partnerships advocate a
                            forward-thinking approach to public health and safety.</h3>
                    </div>
                    <div class="product-section__arrow-path"></div>
                    <div class="product-section__arrow-path-2"></div>
                </div>
            </div>
            <div class="col-7 products-section__right">
                <div class="products-section__cards inline">

                    <?php

                    $args = array(
                        "post_type" => "product",
                        'orderby' => 'post_date',
                        'order' => 'ASC'
                    );
                    // The Query
                    $the_query = new WP_Query($args);

                    // The Loop
                    if ($the_query->have_posts()) {
                        echo '<div class="products__cards">';
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            ?>
                            <div class="product-section__card">
                                <div class="product-section__card--front">
                                    <img class="img-responsive"
                                         src="<?php echo get_field('product_icon'); ?>"/>
                                </div>
                                <div class="product-section__card--back">
                                    <h3><?php echo the_title(); ?></h3>
                                </div>
                            </div>
                            <?php

                        }
                        echo '</div>';
                    } else {
                        // no posts found
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                    ?>


                </div>
                <a href="<?php echo get_home_url(); ?>/products/"
                   class="product-section__catalogue-btn small-margin-top">
                    <h3>View All Products</h3>
                </a>
            </div>

        </div>
        <div class="products-section__carousel">
            <?php echo do_shortcode('[sp_wpcarousel id="55"]'); ?>
        </div>

    </div>
</section>