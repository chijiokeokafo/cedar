<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
 // add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

add_theme_support( 'custom-header' );

// function whitecedar_custom_header_setup() {
//     $defaults = array(
//         // Default Header Image to display
//         'default-image'         => get_template_directory_uri() . '/images/header.jpg',
//         // Display the header text along with the image
//         'header-text'           => false,
//         // Header text color default
//         'default-text-color'        => '000',
//         // Header image width (in pixels)
//         'flex-width'             => 1000,
//         // Header image height (in pixels)
//         'flex-height'            => 198,
//         // Header image random rotation default
//         'random-default'        => false,
//         // Enable upload of image file in admin 
//         'uploads'       => true,
//         // function to be called in theme head section
//         'wp-head-callback'      => 'wphead_cb',
//         //  function to be called in preview page head section
//         'admin-head-callback'       => 'adminhead_cb',
//         // function to produce preview markup in the admin screen
//         'admin-preview-callback'    => 'adminpreview_cb',
//         );
// }
// add_action( 'after_setup_theme', 'whitecedar_custom_header_setup' );

$args = array(
    'flex-width'    => true,
    'width'         => 980,
    'flex-height'   => true,
    'height'        => 352,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

function wpb_hidetitle_class($classes) {
	if ( is_single() || is_page() ) :
    $classes[] = 'hidetitle';
	return $classes;
	endif;
	return $classes;
}

add_filter('post_class', 'wpb_hidetitle_class');

