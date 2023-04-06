<?php

//TODO: https://www.youtube.com/watch?v=-h7gOJbIpmo&t=44s&ab_channel=freeCodeCamp.org

$is_dev = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;



// Enables theme support for document title tag
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );



//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types; 
} 
add_action('upload_mimes', 'add_file_types_to_uploads');

function jaspaulcom_menus() {
    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items",
        'socia;' => "Social Menu Items"
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'jaspaulcom_menus' );

function jaspaulcom_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'jaspaulcom-style', get_template_directory_uri() . '/style.css', array(), $version, 'all' );
}


add_action( 'wp_enqueue_scripts', 'jaspaulcom_register_styles' );

function jaspaulcom_register_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script( 'jaspaulcom-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true );
}


add_action( 'wp_enqueue_scripts', 'jaspaulcom_register_scripts' );


function jaspaulcom_widget_areas() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
}

add_action( 'widgets_init', 'jaspaulcom_widget_areas' );