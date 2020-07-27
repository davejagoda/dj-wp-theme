<?php
function dj_wp_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'dj_wp_theme_scripts' );
?>
