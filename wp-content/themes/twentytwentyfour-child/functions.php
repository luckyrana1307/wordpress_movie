<?php
function my_theme_enqueue_styles() {
    $parent_style = 'twentytwentyfour-style'; // This is 'parent-style' for the Twenty Seventeen theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


add_action('init', 'create_movie_post_type');
function create_movie_post_type() {
    register_post_type('movie',
        array(
            'labels' => array(
                'name' => __('Movies'),
                'singular_name' => __('Movie')
            ),
            'public' => true,
            'publicly_queryable'=>true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies'),
            'supports' => array('title', 'editor', 'thumbnail'),
           
            
        )
    );
}

add_action('init','register_movie_Categorie_taxonomy');

function register_movie_Categorie_taxonomy(){
    $labels = array(
        'name'              => _x( '    ', 'taxonomy general name' ),
        'singular_name'     => _x( 'Categorie', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Categorie' ),
        'parent_item_colon' => __( 'Parent Categorie:' ),
        'edit_item'         => __( 'Edit Categorie' ),
        'update_item'       => __( 'Update Categorie' ),
        'add_new_item'      => __( 'Add New Categorie' ),
        'new_item_name'     => __( 'New Categorie Name' ),
        'menu_name'         => __( 'Categorie' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'category'),
    );
    register_taxonomy( 'category', array( 'movie' ), $args );

}
