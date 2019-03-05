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
            <ul class='acces-navmenu'>
                <li class="navBtn">
                    <i class="fa fa-plus fa-2x"></i>
                </li>
                <li><i class="fas fa-briefcase fa-2x"></i></li>
                <li><i class="fa fa-rocket fa-2x"></i></li>
                <li><i class="fa fa-desktop fa-2x"></i></li>
                <li>
                    <i class="fas fa-info-circle fa-2x"></i>
                </li>
            </ul>
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
        </header>
        <div class="main"> 
            <article>

         
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
        
                        
            </article>

            
        </div>
    </div>