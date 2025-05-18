<?php
/**
 * Custom Taxonomies
 *
 * @package Ryvances
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Register custom taxonomies
 */
function ryvances_register_taxonomies() {
    
    // Register Blog Taxonomy
    $labels = array(
        'name'                       => _x( 'Blog Categories', 'taxonomy general name', 'ryvances' ),
        'singular_name'              => _x( 'Blog Category', 'taxonomy singular name', 'ryvances' ),
        'search_items'               => __( 'Search Blog Categories', 'ryvances' ),
        'popular_items'              => __( 'Popular Blog Categories', 'ryvances' ),
        'all_items'                  => __( 'All Blog Categories', 'ryvances' ),
        'parent_item'                => __( 'Parent Blog Category', 'ryvances' ),
        'parent_item_colon'          => __( 'Parent Blog Category:', 'ryvances' ),
        'edit_item'                  => __( 'Edit Blog Category', 'ryvances' ),
        'update_item'                => __( 'Update Blog Category', 'ryvances' ),
        'add_new_item'               => __( 'Add New Blog Category', 'ryvances' ),
        'new_item_name'              => __( 'New Blog Category Name', 'ryvances' ),
        'separate_items_with_commas' => __( 'Separate blog categories with commas', 'ryvances' ),
        'add_or_remove_items'        => __( 'Add or remove blog categories', 'ryvances' ),
        'choose_from_most_used'      => __( 'Choose from the most used blog categories', 'ryvances' ),
        'menu_name'                  => __( 'Blog Categories', 'ryvances' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true,
        'hierarchical'       => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'blog' ),
    );

    register_taxonomy( 'blog_category', 'post', $args );

    // Register Blog Tag Taxonomy
    $tag_labels = array(
        'name'                       => _x( 'Blog Tags', 'taxonomy general name', 'ryvances' ),
        'singular_name'              => _x( 'Blog Tag', 'taxonomy singular name', 'ryvances' ),
        'search_items'               => __( 'Search Blog Tags', 'ryvances' ),
        'popular_items'              => __( 'Popular Blog Tags', 'ryvances' ),
        'all_items'                  => __( 'All Blog Tags', 'ryvances' ),
        'edit_item'                  => __( 'Edit Blog Tag', 'ryvances' ),
        'update_item'                => __( 'Update Blog Tag', 'ryvances' ),
        'add_new_item'               => __( 'Add New Blog Tag', 'ryvances' ),
        'new_item_name'              => __( 'New Blog Tag Name', 'ryvances' ),
        'separate_items_with_commas' => __( 'Separate blog tags with commas', 'ryvances' ),
        'add_or_remove_items'        => __( 'Add or remove blog tags', 'ryvances' ),
        'choose_from_most_used'      => __( 'Choose from the most used blog tags', 'ryvances' ),
        'menu_name'                  => __( 'Blog Tags', 'ryvances' ),
    );

    $tag_args = array(
        'labels'             => $tag_labels,
        'public'             => true,
        'show_in_rest'       => true,
        'hierarchical'       => false,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'blog-tag' ),
    );

    register_taxonomy( 'blog_tag', 'post', $tag_args );
}

add_action( 'init', 'ryvances_register_taxonomies' );
?>