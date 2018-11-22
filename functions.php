<?php

require_once(get_template_directory() .'/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php');

function bootstrapstarter_enqueue_styles() {
   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
   wp_register_style('open-iconic', get_template_directory_uri() . '/assets/open-iconic/font/css/open-iconic-bootstrap.css' );
   $dependencies = array('bootstrap', 'open-iconic');
   wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

function bootstrapstarter_enqueue_scripts() {
   $dependencies = array('jquery');
   wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', $dependencies, '1.14.3', true );
   wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', $dependencies, '4.1.3', true );
}

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js", array(), '3.3.1' );
}

//add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

/* Theme setup */
function wpt_setup() {
    register_nav_menu( 'primary', __( 'Primary navigation', 'farafeit' ) );
    register_nav_menu( 'footer', __( 'Footer navigation', 'farafeit' ) );
}
add_action( 'after_setup_theme', 'wpt_setup' );

function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'farafeit' ),
        'id'            => 'sidebar-right',
        'before_widget' => '<div id="%1$s" class="card my-2"><div class="card-body">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<p class="text-secondary font-weight-bold">',
        'after_title'   => '</p>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widgets', 'farafeit' ),
        'id'            => 'footer-widgets',
        'before_widget' => '<div id="%1$s" class="row"><div class="col-lg-10 mx-auto text-center">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h2 class="d-none">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'themename_widgets_init' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 48,
        'width'       => 48,
        'flex-height' => false,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function themename_custom_header_setup() {
    $args = array(
        /*'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',*/
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'         => true
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

?>
