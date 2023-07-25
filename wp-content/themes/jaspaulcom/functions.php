<?php
//TODO: https://www.youtube.com/watch?v=-h7gOJbIpmo&t=44s&ab_channel=freeCodeCamp.org

// Enables theme support for document title tag
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

//detect if dev mode
function is_dev() {
    return boolval(getenv('DEV_MODE'));
}
        
define( 'is_dev', is_dev() );


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
        'home_clients' => "Homepage clients",
        'home_projects' => "Homepage projects",
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items",
        'social' => "Social Menu Items"
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
            'name' => 'Main menu',
            'id' => 'main-menu',
            'description' => 'Top header menu',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => ''
        )
    );


    register_sidebar(
        array(
            'name' => 'Homepage clients',
            'id' => 'home-clients',
            'description' => 'Homepage clients list',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => ''
        )
    );
    


}

add_action( 'widgets_init', 'jaspaulcom_widget_areas' );




/** TOOLS  **/
function custom_logo_with_site_name_link() {

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    

    // Get the custom logo HTML
    $custom_logo = $image[0];

    // Get the site name
    $site_name = get_bloginfo('name');

    // Get the site URL
    $site_url = esc_url(home_url('/'));

    // Create the homepage link with custom logo and site name
    $homepage_link = '<a href="' . $site_url . '" rel="home"><img src="'.$custom_logo.'" alt="logo" />' .  $site_name  . '</a>';

    // Output the homepage link
    echo $homepage_link;
}