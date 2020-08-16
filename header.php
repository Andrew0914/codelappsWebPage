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
            <nav class="blue-grey darken-4">

                <div class="nav-wrapper contenedor">
                    <a href="<?php echo home_url(); ?>" class="mbrand center-align">
                        Codelapps
                    </a>
                    <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
                    <a class="right mobile-search" href="#" onclick="buscar(event)"><i class="material-icons">search</i></a>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="#"><i class="material-icons" onclick="buscar(event)">search</i></a></li>
                    </ul>

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
        <!-- SEARCH -->
        <div class="contenedor mt1" id="buscador">
            <form role="search" method="get" id="searchform"  action="<?php echo home_url(); ?>">
                <div class="input-field">
                    <input id="s" type="search" name="s" class="input-search white z-depth-5" placeholder="Buscar..." required >
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons search-close" onclick="closeThis('#buscador')">close</i>
                </div>
            </form>
        </div>
        
        
        <!-- MENU MOVIL -->
        <?php
            // argumentos para desplegar el menu
            $args= array(
                "theme_location"=> "header-menu",
                "container_class"=>"blue-grey darken-4 sidenav mt3",
                "container_id" => "mobile-menu"
            );

            // imprime el menu
            wp_nav_menu($args);
        ?>
        
        <!-- SECCION PARA EL CONTENIDO PRINCIPAL -->
        <section class="main contenedor">  