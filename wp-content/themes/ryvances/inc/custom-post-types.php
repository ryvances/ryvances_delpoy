<?php
/**
 * Custom Taxonomies
 *
 * @package Ryvances
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Register all custom taxonomies
 */
function ryvances_register_taxonomies() {

    /* ======= Blog Taxonomies ======= */
    
    // Blog (hierarchical)
    $blog_cat_labels = array(
        'name'                       => _x('Blog', 'taxonomy general name', 'ryvances'),
        'singular_name'              => _x('Blog', 'taxonomy singular name', 'ryvances'),
        'search_items'               => __('Search Blog', 'ryvances'),
        'popular_items'              => __('Popular Blog', 'ryvances'),
        'all_items'                  => __('All Blog', 'ryvances'),
        'parent_item'                => __('Parent Blog', 'ryvances'),
        'parent_item_colon'          => __('Parent Blog:', 'ryvances'),
        'edit_item'                  => __('Edit Blog', 'ryvances'),
        'update_item'                => __('Update Blog', 'ryvances'),
        'add_new_item'               => __('Add New Blog', 'ryvances'),
        'new_item_name'              => __('New Blog Name', 'ryvances'),
        'separate_items_with_commas' => __('Separate blog with commas', 'ryvances'),
        'add_or_remove_items'        => __('Add or remove blog', 'ryvances'),
        'choose_from_most_used'      => __('Choose from the most used blog', 'ryvances'),
        'menu_name'                  => __('Blog', 'ryvances'),
    );

    register_taxonomy('blog_category', 'post', array(
        'labels'             => $blog_cat_labels,
        'public'             => true,
        'show_in_rest'       => true,
        'hierarchical'       => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'blog'),
    ));

    // Blog Tags (non-hierarchical)
    $blog_tag_labels = array(
        'name'                       => _x('Blog Tags', 'taxonomy general name', 'ryvances'),
        'singular_name'              => _x('Blog Tag', 'taxonomy singular name', 'ryvances'),
        'search_items'               => __('Search Blog Tags', 'ryvances'),
        'popular_items'              => __('Popular Blog Tags', 'ryvances'),
        'all_items'                  => __('All Blog Tags', 'ryvances'),
        'edit_item'                  => __('Edit Blog Tag', 'ryvances'),
        'update_item'                => __('Update Blog Tag', 'ryvances'),
        'add_new_item'               => __('Add New Blog Tag', 'ryvances'),
        'new_item_name'              => __('New Blog Tag Name', 'ryvances'),
        'separate_items_with_commas' => __('Separate blog tags with commas', 'ryvances'),
        'add_or_remove_items'        => __('Add or remove blog tags', 'ryvances'),
        'choose_from_most_used'      => __('Choose from the most used blog tags', 'ryvances'),
        'menu_name'                  => __('Blog Tags', 'ryvances'),
    );

    register_taxonomy('blog_tag', 'post', array(
        'labels'             => $blog_tag_labels,
        'public'             => true,
        'show_in_rest'       => true,
        'hierarchical'       => false,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'blog-tag'),
    ));

    /* ======= Mẫu Website Taxonomies ======= */
    
    // Mẫu Website Categories (hierarchical)
    $mau_website_labels = array(
        'name'                       => _x('Mẫu Website', 'taxonomy general name', 'ryvances'),
        'singular_name'              => _x('Mẫu Website', 'taxonomy singular name', 'ryvances'),
        'search_items'               => __('Search Mẫu Website', 'ryvances'),
        'all_items'                  => __('All Mẫu Website', 'ryvances'),
        'parent_item'                => __('Mẫu Website cha', 'ryvances'),
        'parent_item_colon'          => __('Mẫu Website cha:', 'ryvances'),
        'edit_item'                  => __('Edit Mẫu Website', 'ryvances'),
        'update_item'                => __('Update Mẫu Website', 'ryvances'),
        'add_new_item'               => __('Add New Mẫu Website', 'ryvances'),
        'new_item_name'              => __('New Mẫu Website Name', 'ryvances'),
        'separate_items_with_commas' => __('Separate Mẫu Website with commas', 'ryvances'),
        'add_or_remove_items'        => __('Add or remove Mẫu Website', 'ryvances'),
        'choose_from_most_used'      => __('Choose from the most used Mẫu Website', 'ryvances'),
        'menu_name'                  => __('Mẫu Website', 'ryvances'),
    );

    register_taxonomy('mau_website', 'product', array(
        'labels'             => $mau_website_labels,
        'public'             => true,
        'hierarchical'       => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'mau-website'),
    ));

    // Mẫu Website Tags (non-hierarchical)
    $mau_website_tag_labels = array(
        'name'                       => _x('Mẫu Website Tags', 'taxonomy general name', 'ryvances'),
        'singular_name'              => _x('Mẫu Website Tag', 'taxonomy singular name', 'ryvances'),
        'search_items'               => __('Search Mẫu Website Tags', 'ryvances'),
        'all_items'                  => __('All Mẫu Website Tags', 'ryvances'),
        'edit_item'                  => __('Edit Mẫu Website Tag', 'ryvances'),
        'update_item'                => __('Update Mẫu Website Tag', 'ryvances'),
        'add_new_item'               => __('Add New Mẫu Website Tag', 'ryvances'),
        'new_item_name'              => __('New Mẫu Website Tag Name', 'ryvances'),
        'separate_items_with_commas' => __('Separate Mẫu Website Tag with commas', 'ryvances'),
        'add_or_remove_items'        => __('Add or remove Mẫu Website Tag', 'ryvances'),
        'choose_from_most_used'      => __('Choose from the most used Mẫu Website Tag', 'ryvances'),
        'menu_name'                  => __('Mẫu Website Tag', 'ryvances'),
    );

    register_taxonomy('mau_website_tag', 'product', array(
        'labels'             => $mau_website_tag_labels,
        'public'             => true,
        'hierarchical'       => false,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'mau-website-tag'),
    ));
}

add_action('init', 'ryvances_register_taxonomies');
?>