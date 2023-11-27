<?php
/* Load Styles */
function custom_load_styles()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
  wp_enqueue_style('content', get_template_directory_uri() . '/css/content.css');
  wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');
}
 
add_action('wp_enqueue_scripts', 'custom_load_styles', 10);

 