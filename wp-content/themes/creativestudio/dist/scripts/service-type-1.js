$(document).ready(function () {

    var $window = $(window);
    var windowsize = $window.width();
    if (windowsize > 768) {
        /*--FullPage Homepage--*/
        TweenMax.from($("#section-1 .section-image"), 1, {x: "100px",opacity:1, ease: Power2.easeInOut});
        TweenMax.from($("#section-1 .section-title"), 1, {x: "-100px",opacity:1, ease: Power2.easeInOut});
        TweenMax.set($(".section:not(:first-child) .section-image"), {opacity:0, x: "-100px"});
        TweenMax.set($(".section:not(:first-child) .section-title"), {opacity:0, x: "100px"});
        $('#fullpage').fullpage({
            navigation: false,
            navigationPosition: 'right',
            verticalCentered: true,
            responsiveWidth: 580,
            responsiveHeight: 0,
            scrollingSpeed: 1500,
            responsiveSlides: true,
            onLeave: function(index, nextIndex, direction){
                TweenMax.to($("#section-"+nextIndex+" .section-image"), 2, {x: "0",opacity:1, ease: Power2.easeInOut});
                TweenMax.to($("#section-"+nextIndex+" .section-title"), 2, {x: "0",opacity:1, ease: Power2.easeInOut});
                TweenMax.to($("#section-"+index+" .section-image"), 1, {x: "100px",opacity:1, ease: Power2.easeInOut});
                TweenMax.to($("#section-"+index+" .section-title"), 1, {x: "-100px",opacity:1, ease: Power2.easeInOut});
            },
        });
    }

});
