<?php
    function assets_eroots(){
        // Register Style
        wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), 'v1.2', 'all');
        wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap', array(), 'v0.1', 'all');
        wp_register_style('opensans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap', array(), 'v0.2', 'all');

        wp_register_style('erootstyle', get_stylesheet_uri(), array('normalize', 'montserrat', 'opensans'), 'v8.0.2', 'all');

        // Agregando el estilo
        wp_enqueue_style('normalize');
        wp_enqueue_style('montserrat');
        wp_enqueue_style('opensans');

        wp_enqueue_style('erootstyle');
    }
    add_action('wp_enqueue_scripts', 'assets_eroots');

    function setup_eroots(){
        // Agregar una imagen a cada entrada
        add_theme_support('post-thumbnails');
        
        // Agregar los titulos personalizados en la etiqueta title
        add_theme_support('title-tag');

        // Activar la configuración de logos en el theme
        $image = array(
            'height' => 64,
            'width' => 106
        );
        add_theme_support('custom-logo', $image);

        // Registrando las dimensiones de imagen a recortar por wordpress
        # El registro queda pendiente
        // add_image_size();
    }
    add_action('after_setup_theme', 'setup_eroots');

    function eroots_menus(){
        register_nav_menus(array(
            'menu_principal' => __('Menu Principal', 'eroots'),
            'menu_social' => __('Social Media', 'eroots')
        ));
    }
    add_action('init', 'eroots_menus');
?>