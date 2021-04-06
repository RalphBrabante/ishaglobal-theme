<?php get_header(); ?>


<h1>Index </h1>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        //
        // Post Content here
        //
    } // end while
} // end if
?>


<?php get_footer(); ?>
