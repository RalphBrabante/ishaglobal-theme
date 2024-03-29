// MENU ANIMATION
jQuery(window).scroll(function () {
  jQuery(".solutions-home-img").each(function () {
    const Yoffset = jQuery(this).offset().top - jQuery(window).scrollTop();
    console.log(Yoffset);
    // console.log(Yoffset < 150);
    if (Yoffset < 150) {
      jQuery(this).css({ "-webkit-transform": "translate(0)" });
    }

    if (Yoffset > 150) {
      jQuery(this).css({ "-webkit-transform": "translateY(-20%)" });
    }
  });

  if (window.pageYOffset > 600) {
    jQuery(".back-to-top").fadeIn();
  } else {
    jQuery(".back-to-top").fadeOut();
  }

  if (window.pageYOffset > 0 && !window.pageYOffset < 1) {
    jQuery("#menu-main-menu li a").css({
      padding: "1rem 2rem",
    });
    jQuery(".header").css({ padding: "1rem", background: "white" });
    jQuery(".custom-logo-link").css({ width: "4rem" });
    jQuery(".custom-logo-link").hide();
    jQuery(".custom-logo-link").show();
    jQuery(".custom-logo-link img").attr({
      src: "http://igdc.ishaglobal.com.ph/wp-content/uploads/2021/05/globeonly-isha-logo.png",
    });
  }
  if (window.pageYOffset == 0) {
    jQuery(".custom-logo-link").show();

    jQuery("#menu-main-menu li a").css({
      padding: "3rem",
    });
    jQuery(".header").css({
      padding: "1rem",
    });
    jQuery(".custom-logo-link").css({ width: "auto" });
    jQuery(".custom-logo-link img").attr({
      src: "http://igdc.ishaglobal.com.ph/wp-content/uploads/2021/04/isha-global-logo-small.png",
    });
  }
});

// Home Solutions Animations

jQuery("#home-ds-btn").click(function () {
  jQuery("#home-vc-btn").removeClass("solutions-btn-set__active");
  jQuery(this).addClass("solutions-btn-set__active");

  // Image Out and In
  jQuery(".solutions-home-img--vc").fadeOut(200, function () {
    jQuery(".solutions-home-img--ds").fadeIn(200);
  });

  // Text Out and In
  jQuery(".solutions-section__meta--vc").fadeOut(200, function () {
    jQuery(".solutions-section__meta--ds").fadeIn(200);
  });
});

jQuery("#home-vc-btn").click(function () {
  jQuery("#home-ds-btn").removeClass("solutions-btn-set__active");
  jQuery(this).addClass("solutions-btn-set__active");

  //Image Out and In
  jQuery(".solutions-home-img--ds").fadeOut(200, function () {
    jQuery(".solutions-home-img--vc").fadeIn(200);
  });

  jQuery(".solutions-section__meta--ds").fadeOut(200, function () {
    jQuery(".solutions-home-img--vc").fadeIn(200);
    jQuery(".solutions-section__meta--vc").fadeIn(200);
  });
});

// Why IGDC Overview Section

jQuery("#overview-btn").click(function () {
  jQuery("#trusted-partners-btn").removeClass("overview-btn-set__active");
  jQuery(this).addClass("overview-btn-set__active");
  jQuery(".trusted-partners-section__text").fadeOut(200, function () {
    jQuery("#trusted-partners-right-img").hide();
    jQuery("#overview-right-img").fadeIn(200);
    jQuery(".overview-section__text").fadeIn(200);
  });
});

jQuery("#trusted-partners-btn").click(function () {
  jQuery("#overview-btn").removeClass("overview-btn-set__active");
  jQuery(this).addClass("overview-btn-set__active");
  jQuery(".overview-section__text").fadeOut(200, function () {
    jQuery(".trusted-partners-section__text").fadeIn(200);
    jQuery("#overview-right-img").hide();
    jQuery(".why-igdc-slider").show();
    jQuery("#trusted-partners-right-img").fadeIn(200);
  });
});

//Menu Script

jQuery(".mobile-menu-btn").click(function () {
  jQuery(".sidebar").css({ right: 0 });
});

jQuery(".sidebar__close-btn").click(function () {
  jQuery(".sidebar").css({ right: "-70%" });
});

//About us Read more

jQuery(".founders-section__col .founder-read-more").on("click", function () {
  jQuery(".management-section").css({ marginTop: "104rem" });

  jQuery(this).parent().children(".founders-excerpt").hide();
  jQuery(this).parent().children(".founders-text").show();

  jQuery(this).parent().children(".founder-read-more").hide();
  jQuery(this).parent().children(".founder-read-less").show();
});

jQuery(".founders-section__col .founder-read-less").on("click", function () {
  jQuery(this).parent().children(".founders-excerpt").show();
  jQuery(this).parent().children(".founders-text").hide();
  jQuery(".management-section").css({ marginTop: "55rem" });

  jQuery(this).parent().children(".founder-read-more").show();
  jQuery(this).parent().children(".founder-read-less").hide();
});

jQuery(".about-read-more").on("click", function () {
  jQuery(this).parents(".about-us-excerpt").hide();
  jQuery(this)
    .parents(".about-us-excerpt")
    .siblings(".about-us-main-content")
    .show();
});

jQuery(".about-read-less span").on("click", function () {
  jQuery(this).parents(".about-us-main-content").hide();
  jQuery(this)
    .parents(".about-us-main-content")
    .siblings(".about-us-excerpt")
    .show();
});

// Animations for Covid 19 Tabs

jQuery(".covid-btn").on("click", function () {
  jQuery(".covid-btn").removeClass("covid-btn--active");
  jQuery(this).addClass("covid-btn--active");
});

// Animations for Covid 19 Tabs END

// const totalTabs = 5;
// let ctr = 1;
// while (ctr < 5) {
//   jQuery(`.covid-btn--${ctr}`).on("click", function () {
//     jQuery(".covid-text-container").css({ display: "none" });
//     jQuery(`.covid-text-container--${ctr}`).css({ display: "block" });
//   });
//   ctr++;
// }

jQuery(".covid-btn--1").on("click", function () {
  jQuery(".covid-text-container").css({ display: "none" });
  jQuery(".covid-text-container--1").css({ display: "block" });
});

jQuery(".covid-btn--2").on("click", function () {
  jQuery(".covid-text-container").css({ display: "none" });
  jQuery(".covid-text-container--2").css({ display: "block" });
});

jQuery(".covid-btn--3").on("click", function () {
  jQuery(".covid-text-container").css({ display: "none" });
  jQuery(".covid-text-container--3").css({ display: "block" });
});

jQuery(".covid-btn--4").on("click", function () {
  jQuery(".covid-text-container").css({ display: "none" });
  jQuery(".covid-text-container--4").css({ display: "block" });
});

jQuery(".covid-btn--5").on("click", function () {
  jQuery(".covid-text-container").css({ display: "none" });
  jQuery(".covid-text-container--5").css({ display: "block" });
});

//Scroll to top

jQuery(".back-to-top").on("click", function () {
  document.body.scrollTop = 0;
});

// Sidebar Script

jQuery(".sidebar .menu-item-has-children").each(function () {
  jQuery(this).append("<div class='menu-accordion-btn'>+</div>");
});

jQuery(".menu-accordion-btn").on("click", function () {
  jQuery(".menu-accordion-btn").css({ display: "block" });
  jQuery(this).css({ display: "none" });
  jQuery(".sub-menu").css({ height: "0", display: "none" });
  jQuery(this).siblings(".sub-menu").css({ height: "auto", display: "block" });
});
