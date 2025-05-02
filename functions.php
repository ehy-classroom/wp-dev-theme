<?php

// Enqueue von CSS und JS
function theme_dev_classic_enqueue_scripts() {
    // Haupt-CSS-Datei
    wp_enqueue_style('theme-dev-classic-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_dev_classic_enqueue_scripts');

function enqueue_local_fonts() {
    wp_enqueue_style(
        'local-fonts',
        get_template_directory_uri() . '/assets/fonts/work-sans/font-style.css',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'enqueue_local_fonts');


// Registrierung von Navigationsmenüs
function theme_dev_classic_register_menus() {
    register_nav_menus([
        'main' => __('Main Menu', 'theme-dev-classic'),
        'secondary' => __('Secondary Menu', 'theme-dev-classic'),
        'mobile' => __('Mobile Menu', 'theme-dev-classic'),
    ]);
}
add_action('after_setup_theme', 'theme_dev_classic_register_menus');

// Theme Support Funktionen
function theme_dev_classic_setup() {
    // Unterstützung für Beitragsbilder
    add_theme_support('post-thumbnails');
    // Unterstützung für HTML5-Markup
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    // Unterstützung für dynamische Titel-Tags
    add_theme_support('title-tag');
    // Unterstützung für benutzerdefiniertes Logo
    add_theme_support('custom-logo', [
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ]);
    // Unterstützung für benutzerdefinierten Hintergrund
    add_theme_support('custom-background', [
        'default-color' => 'ffffff',
        'default-image' => '',
    ]);
    // Unterstützung für Editor-Styles
    add_theme_support('editor-styles');
    add_editor_style('style.css');
    // Unterstützung für responsive Embeds
    add_theme_support('responsive-embeds');
    // Unterstützung für WooCommerce
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'theme_dev_classic_setup');