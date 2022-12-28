<?php
if (! function_exists('galant_setup')){
	function galant_setup(){
    	add_theme_support('custom-logo', [
        'height'      => 42,
		'width'       => 236,
		'flex-width'  => true,
		'flex-height' => true,
		'header-text' => '',
		'unlink-homepage-logo' => false, 
        ]);
      add_theme_support('title-tag');
    }
  add_action('after_setup_theme', 'galant_setup');
}

add_action( 'wp_enqueue_scripts', 'galant_scripts' );
function galant_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
}


function galant_menus() {

	$locations = array(
		'header'  => __( 'Header Menu', 'galant' ),
		'footer'  => __( 'Footer Menu', 'galant' ),
		
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'galant_menus' );

add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 1);
	function custom_nav_menu_css_class($classes){
    		$classes[] = 'nav-item';
      return $classes;
    }

add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10);
	function custom_nav_menu_link_attributes($attr){
    	$attr['class']	= 'nav-link';
      return $attr;
    }



