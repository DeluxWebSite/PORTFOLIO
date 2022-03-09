<?php
add_action( 'wp_enqueue_scripts', 'galant_scripts' );
function galant_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
}