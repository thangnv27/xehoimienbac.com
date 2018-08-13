<?php

/**
 * Products Menu Page
 */

# Custom product post type
add_action('init', 'create_product_post_type');

function create_product_post_type(){
    register_post_type('product', array(
        'labels' => array(
            'name' => __('Products'),
            'singular_name' => __('Products'),
            'add_new' => __('Add new'),
            'add_new_item' => __('Add new Product'),
            'new_item' => __('New Product'),
            'edit' => __('Edit'),
            'edit_item' => __('Edit Product'),
            'view' => __('View Product'),
            'view_item' => __('View Product'),
            'search_items' => __('Search Products'),
            'not_found' => __('No Product found'),
            'not_found_in_trash' => __('No Product found in trash'),
        ),
        'public' => true,
        'show_ui' => true,
        'publicy_queryable' => true,
        'exclude_from_search' => false,
        'menu_position' => 5,
        'hierarchical' => false,
        'query_var' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail', 'comments', 
            //'custom-fields', 'author', 'excerpt',
        ),
        'rewrite' => array('slug' => 'product', 'with_front' => false),
        'can_export' => true,
        'has_archive' => true,
        'description' => __('Product description here.')
    ));
}

# Custom product taxonomies
//add_action('init', 'create_product_taxonomies');
//
//function create_product_taxonomies(){
//    register_taxonomy('product_cat', 'product', array(
//        'hierarchical' => true,
//        'labels' => array(
//            'name' => __('Product Categories'),
//            'singular_name' => __('Product Categories'),
//            'add_new' => __('Add New'),
//            'add_new_item' => __('Add New Category'),
//            'new_item' => __('New Category'),
//            'search_items' => __('Search Categories'),
//        ),
//    ));
//}