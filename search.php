<?php get_header() ?>
<div class="page-wrapper">
    <main class="page-main">


        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php printf(__('Search Results for: %s', 'shape'), '<span>' . get_search_query() . '</span>'); ?></h1>
            </header><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>


                <div class="search-result-box">
                    <a href="<?php the_permalink(); ?>">
                        <h3><strong><?php the_title(); ?></strong></h3>
                    </a>

                    <div class="search-result-box__content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>


            <?php endwhile; ?>



        <?php else : ?>
            <p>No results found.</p>


        <?php endif; ?>
    </main>
</div>
<?php get_footer() ?>