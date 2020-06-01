$(document).mouseup(function (e) {
    var container = $('#main-menu-content');


    if (!container.is(e.target) && container.has(e.target).length === 0 && container.hasClass("menu-active")) {
        container.removeClass('menu-active');
        $("body").removeClass("hideall");
    }

    // if the target of the click isn't the container nor a descendant of the container

});
function openMenu() {
    $('#main-menu-content').addClass('menu-active');
    $("body").addClass("hideall");
}
function closeMenu() {
    $('#main-menu-content').removeClass('menu-active');
    $("body").removeClass("hideall");
}
var wrapper_master = $("#wrapper-master");
if (wrapper_master.length) {

    $(window).on('load', function () {
        setTimeout(removeLoader, 500); //wait for page load PLUS two seconds.
    });

    function removeLoader() {
        // fadeOut complete. Remove the loading div
        wrapper_master.addClass('load-done');
    }
}
