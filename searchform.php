<form role="search" method="get" class="search-form" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search', 'label' ) ?></span></label>
        <input type="search" class="search-field"
               placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
               value="<?php echo get_search_query() ?>" name="s"
               title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

    <input type="image" class="search-submit" id="searchsubmit"
           value="<?php echo esc_attr_x( ' ', 'submit button' ) ?>" src="<?php bloginfo( 'template_url' ); ?>/assets/media/SVG/search.svg" style="width:2rem"/>
</form>