<section class="about-us-partial mt-5">
    <div class="about-us-partial__inner container-horizontal">
        <h2 class="about-us-partial__tab">About Us</h2>
        <div class="about-us__content-wrapper">
            <div class="about-us-main-content">
                <?php the_content(); ?>
            </div>
            <div class="about-us-excerpt">
                <?php the_field('excerpt'); ?>
            </div>
        </div>
    </div>
</section>