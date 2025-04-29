<?php

// Enqueue von CSS und JS
function theme_dev_classic_enqueue_scripts() {
    // Haupt-CSS-Datei
    wp_enqueue_style('theme-dev-classic-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_dev_classic_enqueue_scripts');


// Registrierung von Navigationsmenüs
function theme_dev_classic_register_menus() {
    register_nav_menus([
        'main' => __('Main Menu', 'theme-dev-classic'),
        'secondary' => __('Secondary Menu', 'theme-dev-classic'),
        'mobile' => __('Mobile Menu', 'theme-dev-classic'),
    ]);
}
add_action('after_setup_theme', 'theme_dev_classic_register_menus');