<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/files/class-wp-bootstrap-navwalker.php';
/**
 * Customizer Custom Functions.
 */
require get_template_directory() . '/inc/files/custom-functions.php';

/**
 * Custom Setup.
 */
require get_template_directory() . '/inc/files/setup.php';

/**
 * Custom Menus.
 */
require get_template_directory() . '/inc/files/menu.php';


// Import Image Crop
require_once get_template_directory() . '/inc/files/image-crop.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/files/jetpack.php';
}

// Import Custom Fields
require_once get_template_directory() . '/inc/files/acf.php';
