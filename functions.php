<?php 
    function test_blog_enqueue_script(){

        wp_register_style('stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory(). '/style.css'), 'all');
        wp_register_style('bootstrap-css', get_template_directory_uri(). '/assets/css/bootstrap.min.css', [], false, 'all');

        wp_register_script('main-js', get_template_directory_uri(). '/assets/main.js', [], '1.0', true);
        wp_register_script('bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.min.js', [], false, true);

        wp_enqueue_style('stylesheet');
        wp_enqueue_style('bootstrap-css');

        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
        
    }

    add_action('wp_enqueue_scripts', 'test_blog_enqueue_script');
?>