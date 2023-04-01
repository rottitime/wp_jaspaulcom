<?php

// Enables theme support for document title tag
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

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