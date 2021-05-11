// MENU ANIMATION
jQuery(window).scroll(function () {
        if (window.pageYOffset > 0 && !window.pageYOffset < 1) {

            jQuery("#menu-main-menu li a").css({
                "padding": "1rem 2rem"
            })
            jQuery(".header").removeClass("background-gradient")
            jQuery(".header").css({"padding": "1rem", "background": "white"})
            jQuery(".custom-logo-link").css({"width": "4rem"})
            jQuery(".custom-logo-link").hide();
            jQuery(".custom-logo-link").show();
            jQuery(".custom-logo-link img").attr({"src": "http://localhost/ishaglobal/wp-content/uploads/2021/05/globeonly-isha-logo.png"})
        }
        if (window.pageYOffset == 0) {
            jQuery(".custom-logo-link").show();
            jQuery(".header").addClass("background-gradient")

            jQuery("#menu-main-menu li a").css({
                "padding": "3rem"
            })
            jQuery(".header").css({
                "padding": "1rem"
            })
            jQuery(".custom-logo-link").css({"width": "auto"})
            jQuery(".custom-logo-link img").attr({"src": "http://localhost/ishaglobal/wp-content/uploads/2021/04/isha-global-logo-small.png"})
        }
    }
)


// Home Solutions Animations

jQuery("#home-ds-btn").click(function () {
    console.log('rm class')

    jQuery("#home-vc-btn").removeClass("solutions-btn-set__active")
    jQuery(this).addClass("solutions-btn-set__active")

    // Image Out and In
    jQuery(".solutions-home-img--vc").fadeOut(200, function () {
        jQuery(".solutions-home-img--ds").fadeIn(200)
    });

    // Text Out and In
    jQuery(".solutions-section__meta--vc").fadeOut(200, function () {
        jQuery(".solutions-section__meta--ds").fadeIn(200);
    });
})

jQuery("#home-vc-btn").click(function () {
    jQuery("#home-ds-btn").removeClass("solutions-btn-set__active")
    jQuery(this).addClass("solutions-btn-set__active")

    //Image Out and In
    jQuery(".solutions-home-img--ds").fadeOut(200, function () {
        jQuery(".solutions-home-img--vc").fadeIn(200)
    });


    jQuery(".solutions-section__meta--ds").fadeOut(200, function () {
        jQuery(".solutions-home-img--vc").fadeIn(200)
        jQuery(".solutions-section__meta--vc").fadeIn(200);
    });
})

// Why IGDC Overview Section

jQuery("#overview-btn").click(function () {
    console.log('rm class')
    jQuery("#trusted-partners-btn").removeClass("overview-btn-set__active")
    jQuery(this).addClass("overview-btn-set__active")
    jQuery(".trusted-partners-section__text").fadeOut(200, function () {
        jQuery(".overview-section__text").fadeIn(200);
    });
})

jQuery("#trusted-partners-btn").click(function () {
    console.log('rm class')
    jQuery("#overview-btn").removeClass("overview-btn-set__active")
    jQuery(this).addClass("overview-btn-set__active")
    jQuery(".overview-section__text").fadeOut(200, function () {
        jQuery(".trusted-partners-section__text").fadeIn(200);
    });
})