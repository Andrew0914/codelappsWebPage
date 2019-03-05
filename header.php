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
    <body>
    <div class="contenedor">
        
        <div class="overlay"></div>

        <header class='header-principal'>

            <!-- BOTON PARA NAVEGACION COMPLETA -->
            <div class="navBtn">
                <i class="fas fa-plus-circle fa-2x"></i>
            </div>
            <!-- MENU DE ACCESOS DIRECTOS -->
            <?php
                // argumentos para desplegar el menu
                $args= array(
                    "theme_location"=> "header-menu",
                    "container"=> "nav",
                    "container_class"=>"nav-principal"
                );

                // imprime el menu
                wp_nav_menu($args);
            ?>
            <!-- MENU COMPLETO -->
            <?php
                // argumentos para desplegar el menu
                $args= array(
                    "theme_location"=> "acces-menu",
                    "container"=> "div",
                    "container_class"=>"acces-navmenu"
                );

                // imprime el menu
                wp_nav_menu($args);
            ?>
        </header>
        <!-- SECCION PARA EL CONTENIDO PRINCIPAL -->
        <section class="main"> 