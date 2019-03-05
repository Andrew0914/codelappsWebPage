$ = jQuery.noConflict();
$(document).ready(function() {

    var toggleMenu = function() {
        $('header.header-principal').toggleClass('toggle');
        $('.main').toggleClass('push');
        $('.overlay').toggleClass('block');
        $('#social, .logo').toggleClass('reveal');
    };

    //Nav
    $('.navBtn').click(function() {
        toggleMenu();
    });

    Mousetrap.bind('esc', function() {
        toggleMenu();
    });

});