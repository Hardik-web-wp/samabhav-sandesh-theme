<?php
/**
 * Samabhav Sandesh Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function samabhav_sandesh_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'samabhav-sandesh' ),
    ) );
}
add_action( 'after_setup_theme', 'samabhav_sandesh_setup' );

function samabhav_sandesh_scripts() {
    wp_enqueue_style( 'samabhav-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'samabhav_sandesh_scripts' );
