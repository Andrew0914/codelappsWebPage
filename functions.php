<?php
    /**
     * REGISTRO DE SCRIPTS CSS Y JS
     */
    function cp_scripts(){
        //registramos css 
        wp_register_style("materialcss", 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' ,array(), '1.0.0');
        wp_register_style('fontawesome', "https://use.fontawesome.com/releases/v5.7.2/css/all.css", array() , '5.7.2');
        wp_register_style("principal", get_template_directory_uri() . '/style.css' ,array(), '1.0.0');
        
        //agregamos
        wp_enqueue_style("materialcss");
        wp_enqueue_style("fontawesome");
        wp_enqueue_style("principal");
        

        // registramos js´s
        wp_register_script('materialjs','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(), '1.0.0',true);
        wp_register_script('scripts',get_template_directory_uri() . '/js/scripts.js', array('materialjs','jquery'), '1.0.0',true);

        // agregamos
        wp_enqueue_script("jquery");
        wp_enqueue_script("materialjs");
        wp_enqueue_script("scripts");
    }

    // registramos los scripts de estilo y js
    add_action('wp_enqueue_scripts','cp_scripts');

    /**
     * REGISTRO DE MENUS
     */

    function cp_registro_menus(){
        register_nav_menus(array( 
            'header-menu' => __('Header Menu', 'Codelapps') // Main Navigation
        ));
    }

    add_action('init', 'cp_registro_menus');
?>