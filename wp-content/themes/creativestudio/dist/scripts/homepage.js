
// Parallax
var ss1_img1 = document.getElementById("parallax-1");
var parallax_ss1_1 = new Parallax(ss1_img1, {
    relativeInput: true
});

var ss1_img2 = document.getElementById("parallax-2");
var parallax_ss1_2 = new Parallax(ss1_img2, {
    relativeInput: true
});
var ss3_img = document.getElementById("parallax-3");
var parallax_ss3 = new Parallax(ss3_img, {
    relativeInput: true
});


var ss3_img1 = document.getElementById("parallax-4");
var parallax_ss3_1 = new Parallax(ss3_img1, {
    relativeInput: true
});

var ss3_img2 = document.getElementById("parallax-5");
var parallax_ss3_2 = new Parallax(ss3_img2, {
    relativeInput: true
});

var ss4_img1 = document.getElementById("parallax-6");
var parallax_ss4_1 = new Parallax(ss4_img1, {
    relativeInput: true
});
//End Parallax

var width = $( window ).width();
if(width > 800){
    $('body').niceScroll({
        cursorwidth: "0px",
    });
}

// Init swiper slider
var swiper = new Swiper('.box1 .swiper-container', {
    // If we need pagination
    speed: 2000,
    mousewheel: {
        releaseOnEdges: true,
    }
});

// Gsap
swiper.on("slideNextTransitionStart", function () {
    if (swiper.activeIndex == 1) {
        TweenMax.from($(".ss2-main"), 2, {x: "+=20%", ease: Power2.easeInOut});
        TweenMax.from($(".ss2-main-content"), 2, {x: "+=10%", autoAlpha: 0, opacity: 0, ease: Power2.easeInOut});
    }

    if (swiper.activeIndex == 2) {
        TweenMax.from($(".ss3-main"), 2, {x: "+=20%", ease: Power2.easeInOut});
        TweenMax.from($(".ss3-main-content"), 2, {x: "+=10%", autoAlpha: 0, opacity: 0, ease: Power2.easeInOut});

        TweenMax.from($(".ss3-banner-img-2"), 2, {x: "+=200px", ease: Power2.easeInOut});
        TweenMax.from($(".ss3-banner-img-3"), 2, {x: "+=200px", ease: Power2.easeInOut});
    }
    if (swiper.activeIndex == 3) {
        TweenMax.from($(".ss4-main"), 2, {x: "+=20%", ease: Power2.easeInOut});
        TweenMax.from($(".ss4-main-content"), 2, {x: "+=10%", autoAlpha: 0, opacity: 0, ease: Power2.easeInOut}, "-=1");
        TweenMax.from($(".ss4-banner-img-2"), 2, {x: "+=200px", ease: Power2.easeInOut});
        TweenMax.from($(".ss4-banner-img-3"), 2, {x: "+=200px", ease: Power2.easeInOut});

    }
});

swiper.on("slidePrevTransitionStart", function () {
    if (swiper.activeIndex == 1) {
        TweenMax.from($(".ss2-main"), 2, {x: "-=20%", ease: Power2.easeInOut});
        TweenMax.from($(".ss2-main-content"), 2, {x: "-=10%", autoAlpha: 0, opacity: 0, ease: Power2.easeInOut});

    }

    if (swiper.activeIndex == 2) {
        TweenMax.from($(".ss3-main"), 2, {x: "-=20%", ease: Power2.easeInOut});
        TweenMax.from($(".ss3-main-content"), 2, {x: "-=10%", autoAlpha: 0, opacity: 0, ease: Power2.easeInOut});
    }
});

//Variable
var homepage = $("#homepage");

//Disable Scrollbar


$(document).ready(function () {
    homepage.css("overflow", "hidden");
    var box1 = $(".box1").offset().top;
    var box2 = $(".box2").offset().top;
    var box3 = $(".box3").offset().top;
    var $window = $(window);


    $(window).scroll(function (e) {
        e.preventDefault();
        var scrollDistance = $(this).scrollTop();
        var position = homepage.position();

        // set overflow hidden when scroll back to top
        if (scrollDistance === position.top) {
            $(".box2").addClass("hidden");
            $(".box3").addClass("hidden");
            homepage.css("overflow", "hidden");
        } else {
            homepage.css("overflow", "");
        }

    });


    // // bind mousewheel event to element
    $("#last").bind("wheel", _.debounce(function (e) {
        if (e.originalEvent.deltaY < 0) {
            console.log('scrolling up !');
        } else {
            homepage.css("overflow", "");
            $(".box2").removeClass("hidden");
            $(".box3").removeClass("hidden");

            // gsap scrollto plugin
            TweenMax.to($window, 1, {
                scrollTo: {
                    y: box2,
                    autoKill: true
                },
                ease: Power2.ease
            });
            return false;


        }
    }, 100));
    $(".box2").bind("wheel", _.debounce(function (e) {
        if (e.originalEvent.deltaY < 0) {

            // gsap scrollto plugin
            TweenMax.to($window, 1, {
                scrollTo: {
                    y: box1,
                    autoKill: true
                },
                ease: Power3.ease
            });
            return false;
        } else {

            // gsap scrollto plugin
            TweenMax.to($window, 1, {
                scrollTo: {
                    y: box3,
                    autoKill: true
                },
                ease: Power3.ease
            });
            return false;
        }

    }, 100));
    $(".box3").bind("wheel", _.debounce(function (e) {
        if (e.originalEvent.deltaY < 0) {

            // gsap scrollto plugin
            TweenMax.to($window, 1, {
                scrollTo: {
                    y: box2,
                    autoKill: true
                },
                ease: Power3.ease
            });
            return false;
        } else {
        }

    }, 100));

});

