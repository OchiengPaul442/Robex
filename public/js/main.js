$(document).ready(function () {
    // Initiate the wowjs
    new WOW().init();

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 90) {
            $(".nav-bar").addClass("nav-sticky");
            $(".carousel, .page-header").css("margin-top", "73px");
        } else {
            $(".nav-bar").removeClass("nav-sticky");
            $(".carousel, .page-header").css("margin-top", "0");
        }
    });

    // add active to tab when click
    $(".nav-item").each(function () {
        $(this).click(function () {
            $(".nav-item").removeClass("active");
            $(this).addClass("active");
            // return false;
        });
    });
    $(".carousel-caption a").click(function () {
        $(".nav-item").removeClass("active");
        $(".nav-item").eq(1).addClass("active");
    });

    // open mobile menu
    $(".navbar-toggler").click(function () {
        $(".navbar-collapse").slideDown(200);
    });

    // close div when click outside
    $(document).mouseup(function (e) {
        var container = $(".nav-bar");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".navbar-collapse").slideUp(200);
        }
    });

    // jQuery counterUp
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
    });

    // Testimonial Slider
    $(".testimonial-slider").slick({
        infinite: true,
        autoplay: true,
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: ".testimonial-slider-nav",
    });
    $(".testimonial-slider-nav").slick({
        arrows: false,
        dots: false,
        focusOnSelect: true,
        centerMode: true,
        centerPadding: "22px",
        slidesToShow: 3,
        asNavFor: ".testimonial-slider",
    });
    $(".testimonial .slider-nav").css({
        position: "relative",
        height: "160px",
    });

    //more about us
    $(".tabLink").each(function () {
        $(this).click(function () {
            tabeId = $(this).attr("id");
            $(".tabLink").removeClass("activeLink");
            $(this).addClass("activeLink");
            $(".tabcontent").addClass("hide");
            $("#" + tabeId + "-1").removeClass("hide");
            return false;
        });
    });

    // Complete page is fully loaded, including all frames, objects and images
    setTimeout(function () {
        $("body").addClass("loaded");
        // scroll to top once loaded
        $(window).scrollTop(0);
    }, 3000);
});
