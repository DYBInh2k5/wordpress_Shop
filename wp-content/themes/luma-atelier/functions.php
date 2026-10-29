<?php
if (!defined('ABSPATH')) { exit; }

function luma_atelier_setup() {
    load_theme_textdomain('luma-atelier', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array('height' => 80, 'width' => 240, 'flex-height' => true, 'flex-width' => true));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    register_nav_menus(array('primary' => __('Điều hướng chính', 'luma-atelier'), 'footer' => __('Điều hướng chân trang', 'luma-atelier')));
}
add_action('after_setup_theme', 'luma_atelier_setup');

function luma_atelier_assets() {
    wp_enqueue_style('luma-atelier-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('luma-atelier-menu', get_template_directory_uri() . '/assets/js/menu.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'luma_atelier_assets');

function luma_atelier_cart_count() {
    if (!function_exists('WC') || !WC()->cart) { return '0'; }
    return (string) WC()->cart->get_cart_contents_count();
}

function luma_atelier_excerpt_length() { return 24; }
add_filter('excerpt_length', 'luma_atelier_excerpt_length');
