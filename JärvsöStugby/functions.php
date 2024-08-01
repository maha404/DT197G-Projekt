<?php

// Registrera menyer
add_action('init', 'register_my_menus');
function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => __('Huvudmeny')
    ));
}

// Skapa en widgetarea
function skogab_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer'),
        'id' => 'footer',
        'before_widget' => '<div>', // Elementet som widgeten ska vara inuti
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer_widget">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'skogab_widgets_init');

// Aktivera anpassad header
$header_settings = array(
    'header-text' => false,
    'width' => 1920,
    'flex-width' => true,
    'height' => 497,
    'flex-height' => true,
    'default-image' => get_template_directory_uri() . '/images/background.png',
);
add_theme_support('custom-header', $header_settings);

// Aktivera anpassad logotyp
function custom_logo_setup() {
    $logo_settings = array(
        'width' => 471,
        'flex-width' => true,
        'height' => 217,
        'flex-height' => true,
    );
    add_theme_support('custom-logo', $logo_settings);
}
add_action('after_setup_theme', 'custom_logo_setup');

// Aktivera postbilder
add_theme_support('post-thumbnails');

// Anpassade bildstorlekar
add_image_size('cabin', 376, 257, true);
add_image_size('round-image', 500, 500, true);
add_image_size('single', 300, 300, true);
add_image_size('news', 300, 300, true);

?>
