<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:19 AM
 */
// Register Custom Post Type
//Custom Post Types
function testimonials_post_type() {
    $labels = array(
        'name'                  => _x( 'testimonials', 'Post Type General Name', 'amf' ),
        'singular_name'         => _x( 'testimonial', 'Post Type Singular Name', 'amf' ),
        'menu_name'             => __( 'Testimonials', 'amf' ),
        'name_admin_bar'        => __( 'Testimonials', 'amf' ),
        'archives'              => __( 'testimonials Archives', 'amf' ),
        'parent_item_colon'     => __( 'Parent Item:', 'amf' ),
        'all_items'             => __( 'All testimonials', 'amf' ),
        'add_new_item'          => __( 'Add New testimonial', 'amf' ),
        'add_new'               => __( 'Add testimonial', 'amf' ),
        'new_item'              => __( 'New testimonial', 'amf' ),
        'edit_item'             => __( 'Edit testimonial', 'amf' ),
        'update_item'           => __( 'Update testimonial', 'amf' ),
        'view_item'             => __( 'View testimonial', 'amf' ),
        'search_items'          => __( 'Search testimonial', 'amf' ),
        'not_found'             => __( 'testimonial Not found', 'amf' ),
        'not_found_in_trash'    => __( 'testimonial Not found in Trash', 'amf' ),
        'featured_image'        => __( 'Featured Image', 'amf' ),
        'set_featured_image'    => __( 'Set featured image', 'amf' ),
        'remove_featured_image' => __( 'Remove featured image', 'amf' ),
        'use_featured_image'    => __( 'Use as featured image', 'amf' ),
        'insert_into_item'      => __( 'Insert into testimonial', 'amf' ),
        'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'amf' ),
        'items_list'            => __( 'testimonial list', 'amf' ),
        'items_list_navigation' => __( 'testimonial list navigation', 'amf' ),
        'filter_items_list'     => __( 'Filter testimonial list', 'amf' ),
    );
    $args = array(
        'label'                 => __( 'Testimonials', 'amf' ),
        'description'           => __( 'Testimonial Description', 'amf' ),
        'labels'                => $labels,
        'supports'              => array('title' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 22,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-awards',
        'capability_type'       => 'post',
    );
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testimonials_post_type', 0 );

