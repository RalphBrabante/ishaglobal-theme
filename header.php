<html>

<head>
    <?php wp_head(); ?>
    <meta name="theme-color" content="#021059" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

</head>

<body <?php body_class() ?>>

    <?php if (current_user_can('activate_plugins') && is_user_logged_in()) : ?>
        <div id="knowledgebase-box">
            <a href="<?php echo get_home_url() . '/knowledge-base-video-guides/' ?>">Knowledgebase</a>
        </div>
    <?php endif; ?>
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
            <div class="mobile-menu-btn">
                <div class="mobile-menu-btn__line"></div>
                <div class="mobile-menu-btn__line"></div>
                <div class="mobile-menu-btn__line"></div>
            </div>
        </div>

    </header>
    <aside class="sidebar">
        <div class="sidebar__close-btn">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <path fill="#ffffff" d="M19.414 27.414l10-10c0.781-0.781 0.781-2.047 0-2.828l-10-10c-0.781-0.781-2.047-0.781-2.828 0s-0.781 2.047 0 2.828l6.586 6.586h-19.172c-1.105 0-2 0.895-2 2s0.895 2 2 2h19.172l-6.586 6.586c-0.39 0.39-0.586 0.902-0.586 1.414s0.195 1.024 0.586 1.414c0.781 0.781 2.047 0.781 2.828 0z"></path>
            </svg>

        </div>
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </aside>