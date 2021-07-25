<?php 

    function Test_Blog_Support(){
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'Test_Blog_Support');

    function Test_Blog_Enqueue_Style(){
        wp_register_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '4.4.1', 'all');
        wp_register_style('fontawesome', get_template_directory_uri() .'/assets/css/all.css', array(), '5.15.3', 'all');
        wp_register_style('stylesheet', get_template_directory_uri() .'/assets/css/style.css', array('bootstrap'), filemtime( get_template_directory(). '/assets/css/style.css' ), 'all');

        wp_register_script('jquery-js', get_template_directory_uri() .'/assets/js/jquery-3.4.1.js', array(), '3.4.1', true);
        wp_register_script('bootstrap', get_template_directory_uri() .'/assets/js/bootstrap-4.4.1.min.js', array(), '4.4.1', true);

        wp_enqueue_style('bootstrap');
        wp_enqueue_style('fontawesome');
        wp_enqueue_style('stylesheet');

        wp_enqueue_script('bootstrap');
        wp_enqueue_script('jquery-js');
    }

    add_action('wp_enqueue_scripts', 'Test_Blog_Enqueue_Style')
   
?>