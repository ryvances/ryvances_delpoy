<?php
// ---------- config tailwind css ----------
function theme_enqueue_styles()
{
  wp_enqueue_style('theme-styles', get_template_directory_uri() . '/css/app.css', array(), '1.0.0');
  wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// ---------- For editor styles ----------
function theme_add_editor_styles()
{
  add_editor_style('css/editor-style.css');
}
add_action('admin_init', 'theme_add_editor_styles');
?>