<!DOCTYPE html>
<html>
    <head>
        <title>CODELAPPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php
            wp_head();
        ?>
    </head>
    <body class="grey lighten-4">
        <!-- MENU PRINCIPAL -->
        <header class='header-principal navbar-fixed'>
            <nav class="purple darken-4">
                <div class="nav-wrapper contenedor">
                    <a href="#!" class="mbrand center-align">
                        <img class="responsive-img logo" src="<?php echo get_template_directory_uri().'/images/andrew.png'; ?>" >
                        Codelapps
                    </a>
                    <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
                    <?php
                        // argumentos para desplegar el menu
                        $args= array(
                            "theme_location"=> "header-menu",
                            "container_class"=>"right hide-on-med-and-down"
                        );

                        // imprime el menu
                        wp_nav_menu($args);
                    ?>
                </div>
            </nav>
        </header>
        <!-- MENU MOVIL -->
        <?php
            // argumentos para desplegar el menu
            $args= array(
                "theme_location"=> "header-menu",
                "container_class"=>"sidenav",
                "container_id" => "mobile-menu"
            );

            // imprime el menu
            wp_nav_menu($args);
        ?>
        <!-- SECCION PARA EL CONTENIDO PRINCIPAL -->
        <section class="main contenedor">  