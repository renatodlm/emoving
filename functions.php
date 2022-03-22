<?php

/**
 * emoving functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package emoving
 */

function theme_styles()
{
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), null, false);
    wp_enqueue_style('aos_css', get_template_directory_uri() . '/vendor/aos/aos.css', array(), null, false);
    wp_enqueue_style('style_css', get_template_directory_uri() . '/css/main-style.css', array(), null, false);
    wp_enqueue_style('swiper_css', get_template_directory_uri() . '/vendor/swiper-bundle/swiper-bundle.min.css', array(), null, false);
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), null, false);
    wp_enqueue_script('swiper_js', get_template_directory_uri() . '/vendor/swiper-bundle/swiper-bundle.min.js', array(), null, false);
    wp_enqueue_script('rellax_js', get_template_directory_uri() . '/vendor/rellax/rellax.min.js', array(), null, false);
    wp_enqueue_script('aos_js', get_template_directory_uri() . '/vendor/aos/aos.js', array(), null, false);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'theme_js');

/**
 * Import Includes.
 */
require get_template_directory() . '/inc/includes.php';