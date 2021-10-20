<footer class="footer">
    <div class="footer__inner">
        <div class="footer__main inline">

            <div class="col-2-5">
                <h4>Why IGDC?</h4>
                <?php wp_nav_menu(array('theme_location' => 'footer-menu-1', 'menu_class' => 'unordered-list')); ?>

            </div>
            <div class="col-2-5">
                <h4>Products</h4>
                <?php wp_nav_menu(array('theme_location' => 'footer-menu-2', 'menu_class' => 'unordered-list')); ?>
            </div>
            <div class="col-2-5">
                <h4>Contact Information</h4>
                <ul class="unordered-list">
                    <li class="unordered-list__item">
                        <a href="tel:+63270015487" class="unordered-list__link">Office Landline: +632 7 001 5487</a>
                    </li>
                    <li class="unordered-list__item">
                        <a href="tel:+639178844742" class="unordered-list__link">Mobile: +63 917 884 ISHA (4742)</a>
                    </li>
                    <li class="unordered-list__item">
                        <a href="mailto:info@ishaglobal.com.ph" class="unordered-list__link">Email: info@ishaglobal.com.ph</a>
                    </li>

                </ul>
            </div>

            <div class="col-2-5">
                <h4>Office Address</h4>
                <p>Unit 1002 Alabang Business Tower</br>
                    1216 Acacia Ave., Madrigal Business Park</br>
                    Ayala Alabang, Muntinlupa City 1780 Philippines</p>

            </div>
        </div>
        <div class="footer__social-media-icons">
            <div class="social-media-icons__inner flex-align flex-justify-content-center">
                <?php

                $args = array(
                    'post_type' => 'social_media_icons',
                    'post_status' => 'publish',
                    'meta_key'            => 'order',
                    'orderby'            => 'meta_value',
                    'order' => 'ASC'
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                ?>
                    <a href="<?php the_field('link') ?>" target="_blank">
                        <div class="social-media-icons__icon">
                            <img src="<?php the_field("icon") ?>" />
                        </div>
                    </a>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>

            </div>
            <div class="footer__copyright">
                <p>Copyright <?php echo date("Y"); ?> <strong>Isha Global Distribution Corp.</strong> | <a href="http://ishav4.sysgage.com/privacy-policy/">Privacy Policy</a> | Web Design by <a href="https://sysgage.com" target="_blank" style="text-decoration:none; color: #0e72e3;">Sysgage I.T. Solutions Co.</a></p>
            </div>
            <?php wp_footer(); ?>

</footer>

</body>

</html>