<?php
// This theme uses wp_nav_menu() in one location.
register_nav_menus(array(
    'menu_header' => esc_html__('Header', 'menu_header'),
    'menu_header_mobile' => esc_html__('Header Mobile', 'menu_header_mobile'),
    'menu_footer' => esc_html__('Footer', 'menu_footer'),
    'menu_uteis' => esc_html__('Úteis', 'menu_uteis'),
));
