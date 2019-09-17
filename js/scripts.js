$ = jQuery.noConflict();
$(document).ready(function() {
    // movil side navigation
    $('.sidenav').sidenav();

    // redes sociales
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
        } else if (enlace.includes('email')) {
            $(el).addClass('yelow darken-4');
            $(el).html('<i class="far fa-envelope fa-2x"></i>');
        }
        $(el).attr("target", "_blank");
    });

    // active menu
    $(".current-menu-item").addClass("active-menu");
    $(".current-menu-item a").addClass("light-blue-text text-darken-3");

    //tootiped
    $(document).ready(function() {
        $('.tooltipped').tooltip();
    });


    // collections
    $(".collection li").addClass("collection-item");

    // collapsible
    $('.collapsible').collapsible();

    $('.materialboxed').materialbox();

    $('.tap-target').tapTarget();

});

function closeThis(whatThis) {
    $(whatThis).slideUp(500);
}

function buscar(event) {
    event.preventDefault();
    $("#buscador").slideDown(500);
}