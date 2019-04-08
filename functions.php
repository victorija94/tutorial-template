<?php

function learningWordPress_setup() {
    //Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu '),
));
}
add_action('after_setup_theme' , 'learningWordPress_setup');

function res_blog_resources(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');    
}
add_action('wp_enqueue_scripts', 'res_blog_resources', 999);
?>