$ = jQuery.noConflict();
$(document).ready(function() {
    // MENU PRINCIPAL
    var toggleMenu = function() {
        $('header.header-principal').toggleClass('toggle');
        $('.main').toggleClass('push');
        $('.overlay').toggleClass('block');
        $('.navBtn~li').toggleClass('reveal');
        $(".acces-navmenu").toggleClass('desaparece');
    };

    //Nav
    $('.navBtn').click(function() {
        toggleMenu();
    });

    // cambiando vista de los accesos directos
    $(".acces-navmenu ul li a").each(function(i, el) {
        var enlace = $(el).attr('href');
        if (enlace.includes('portafolio')) {
            $(el).html('<i class="fas fa-briefcase fa-2x"></i>');
        } else if (enlace.includes('developer')) {
            $(el).html('<i class="fas fa-rocket fa-2x"></i>');
        } else if (enlace.includes('blog')) {
            $(el).html('<i class="fas fa-desktop fa-2x"></i>');
        } else if (enlace.includes('acerca-de')) {
            $(el).html('<i class="fas fa-info-circle fa-2x"></i>');
        } else {
            $(el).html('<i class="fas fa-home fa-2x"></i>');
        }
    });

});