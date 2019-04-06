<?php
function res_blog_resources(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');    
}
add_action('wp_enqueue_scripts', 'res_blog_resources', 999);
?>