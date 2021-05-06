<html>

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body <?php body_class() ?>>

    <header class="header">
        <div class="header__inner inline">
            <div class="col-2 header__logo-container">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="col-8 header__contact">
                <div class="header__menu inline">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    <div class="search-form-wrapper">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>

    </header>