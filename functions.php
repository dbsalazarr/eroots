<?php
    function assets_eroots(){
        // Register Style
        wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), 'v1.2', 'all');
        wp_register_style('erootstyle', get_stylesheet_uri(), array('normalize'), 'v8.0.2', 'all');

        // Agregando el estilo
        wp_enqueue_style('normalize');
        wp_enqueue_style('erootstyle');
    }
    add_action('wp_enqueue_scripts', 'assets_eroots');

    function _eroots(){
        // 
    }
?>