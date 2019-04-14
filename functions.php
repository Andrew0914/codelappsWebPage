<?php
    /**
     * REGISTRO DE SCRIPTS CSS Y JS
     */
    function cp_scripts(){
        //registramos css ,
        wp_register_style("fontmaterial", "https://fonts.googleapis.com/icon?family=Material+Icons", array(), "1.0.0");
        wp_register_style("materialcss", 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' ,array('fontmaterial'), '1.0.0');
        wp_register_style('fontawesome', "https://use.fontawesome.com/releases/v5.7.2/css/all.css", array() , '5.7.2');
        wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Roboto', array(), '1.0.0');
        wp_register_style("animate", get_template_directory_uri() . '/css/animate.css' ,array(), '1.0.0');
        wp_register_style("principal", get_template_directory_uri() . '/style.css' ,array('fonts','materialcss'), '1.0.0');
        
        //agregamos
        wp_enqueue_style("fontmaterial");
        wp_enqueue_style("materialcss");
        wp_enqueue_style("fontawesome");
        wp_enqueue_style("font");
        wp_enqueue_style("animate");
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
            'header-menu' => __('Header Menu', 'Codelapps'), // Main Navigation
            'acces-menu' => __('Accesos directos','Codelapps'), // menu de accesos directos
            'redes-sociales' => __('Redes sociales','Codelapps') // menu de redes sociales
        ));
    }

    add_action('init', 'cp_registro_menus');

    /**
     * Registra el tipo de post para los trabajos en el portafolio
     */
    function cp_posts_trabajo() {
        register_taxonomy_for_object_type('category', 'trabajo'); 
        register_taxonomy_for_object_type('post_tag', 'trabajo');
        register_post_type('trabajo', 
            array(
            'labels' => array(
                'name' => __('Portafolio', 'Codelapps'), 
                'singular_name' => __('trabajo', 'Codelapps'),
                'add_new' => __('Agregar Nuevo', 'Codelapps'),
                'add_new_item' => __('Agregar Nuevo Trabajo', 'Codelapps'),
                'edit' => __('Edit', 'Codelapps'),
                'edit_item' => __('Editar trabajo', 'Codelapps'),
                'new_item' => __('Nuevo trabajo', 'Codelapps'),
                'view' => __('Ver portafolio', 'Codelapps'),
                'view_item' => __('Ver trabajo', 'Codelapps'),
                'search_items' => __('Buscar trabajos', 'Codelapps'),
                'not_found' => __('No se encontraron trabajos', 'Codelapps'),
                'not_found_in_trash' => __('No hay trabajos en la papelera', 'Codelapps')
            ),
            'public' => true,
            'menu_icon' => get_template_directory_uri() . "/images/portfolio.png",
            'hierarchical' => true, 
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ), 
            'can_export' => true, 
            'taxonomies' => array(
                'post_tag','category'
            ) 
        ));
        
    }

    add_action('init', 'cp_posts_trabajo');

    /**
     * Soporte y tamaños para imagen destacada
     */
    function cp_setup(){
        add_image_size('512px2', 512, 512, false);
        add_image_size('256px2', 256, 256, false);
        add_theme_support("post-thumbnails");
    }

    add_action('after_setup_theme','cp_setup');

    /**
     * Registra el tipo de post para las publicaciones de developer
     */
    function cp_posts_code() {
        register_taxonomy_for_object_type('category', 'code'); 
        register_taxonomy_for_object_type('post_tag', 'code');
        register_post_type('code', 
            array(
            'labels' => array(
                'name' => __('Developer', 'Codelapps'), 
                'singular_name' => __('code', 'Codelapps'),
                'add_new' => __('Agregar Nuevo', 'Codelapps'),
                'add_new_item' => __('Agregar Nuevo code', 'Codelapps'),
                'edit' => __('Edit', 'Codelapps'),
                'edit_item' => __('Editar code', 'Codelapps'),
                'new_item' => __('Nuevo code', 'Codelapps'),
                'view' => __('Ver Developer', 'Codelapps'),
                'view_item' => __('Ver code', 'Codelapps'),
                'search_items' => __('Buscar codes', 'Codelapps'),
                'not_found' => __('No se encontraron codes', 'Codelapps'),
                'not_found_in_trash' => __('No hay codes en la papelera', 'Codelapps')
            ),
            'public' => true,
            'menu_icon' => get_template_directory_uri() . "/images/launch.png",
            'hierarchical' => true, 
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ), 
            'can_export' => true, 
            'taxonomies' => array(
                'post_tag','category'
            ) 
        ));
        
    }

    add_action('init', 'cp_posts_code');
?>