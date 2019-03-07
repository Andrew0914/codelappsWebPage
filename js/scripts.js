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

    // modificando la visualizacion de las redes sociales
    $(".redes-sociales li a").each(function(i, el) {
        $(el).addClass('btn left mr1');
        var enlace = $(el).attr('href');
        if (enlace.includes('instagram')) {
            $(el).addClass('instagram-bg');
            $(el).html('<i class="fab fa-instagram fa-2x"></i>');
        } else if (enlace.includes('twitter')) {
            $(el).addClass('light-blue lighten-2');
            $(el).html('<i class="fab fa-twitter fa-2x"></i>');
        } else if (enlace.includes('youtube')) {
            $(el).addClass('red darken-4');
            $(el).html('<i class="fab fa-youtube fa-2x"></i>');
        } else if (enlace.includes('facebook')) {
            $(el).addClass('light-blue darken-4');
            $(el).html('<i class="fab fa-facebook fa-2x"></i>');
        }
    });

});