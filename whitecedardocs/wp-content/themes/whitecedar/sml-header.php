<?php
$args = array(
    'width'         => 980,
    'height'        => 60,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'uploads'       => true,
);
add_theme_support( 'custom-header', $args );
?>