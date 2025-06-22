<?php
// ---------- config tailwind css ----------
function theme_enqueue_styles()
{
  wp_enqueue_style('theme-styles', get_template_directory_uri() . '/css/app.css', array(), '1.0.6');
  wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/resources/js/app.js', array('jquery'), '1.0.6', true);
  wp_enqueue_script('toastify', 'https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js', array(), '1.0.0', true);
  wp_enqueue_style('toastify', 'https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css', array(), '1.0.0');
  wp_enqueue_script('custom-toastify', get_template_directory_uri() . '/resources/js/toastify.js', array('toastify'), '1.0.0', true);
  // social media icons
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', array(), '1.0.0');
  // swiper
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.0.0');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// ---------- For editor styles ----------
function theme_add_editor_styles()
{
  add_editor_style('css/editor-style.css');
}
add_action('admin_init', 'theme_add_editor_styles');
?>