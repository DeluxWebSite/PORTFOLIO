<?php

if (!function_exists('delux_website_setup')) {
    function delux_website_setup()
    {
        add_theme_support('custom-logo', [
            'height' => 50,
            'width' => 50,
            'flex-width' => true,
            'flex-height' => true,
            'header-text' => '',
            'unlink-homepage-logo' => false, // WP 5.5
        ]);
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'delux_website_setup');
}

add_action('wp_enqueue_scripts', 'delux_website_scripts');

function delux_website_scripts()
{
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style(
        'delux-website-style',
        get_template_directory_uri() . '/css/style.css',
        ['main'],
        null
    );
    wp_enqueue_style(
        'font-awesome',
        get_template_directory_uri() .
            'plugins/font-awesome/css/font-awesome.css',
        ['main'],
        null
    );

    // wp_enqueue_script(
    //     'script-name',
    //     get_template_directory_uri() . '/js/example.js',
    //     [],
    //     '1.0.0',
    //     true
    // );
}

function delux_website_menus()
{
    $locations = [
        'header' => __('Header Menu', 'delux_website'),
        'footer' => __('Footer Menu', 'delux_website'),
    ];

    register_nav_menus($locations);
}

add_action('init', 'delux_website_menus');

add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 1);
function custom_nav_menu_css_class($classes)
{
    $classes[] = 'list-item';
    return $classes;
}

add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10);
function custom_nav_menu_link_attributes($atts)
{
    $atts['class'] = 'list-item__link';
    return $atts;
}

add_action('widgets_init', 'delux_website_widgets_init');
function delux_website_widgets_init()
{
    register_sidebar([
        'name' => esc_html__('Сайдбар в подвале', 'delux_website'),
        'id' => 'sidebar-footer',
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget' => "</section>\n",
        'before_title' => '<h4>',
        'after_title' => "</h4>\n",
    ]);
}