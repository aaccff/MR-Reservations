<?php
function mr_reservations_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'mr_reservations'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'mr_reservations'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 1', 'mr_reservations'),
        'id' => 'footer-1',
        'description' => __('Add widgets here to appear in your footer.', 'mr_reservations'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'mr_reservations'),
        'id' => 'footer-2',
        'description' => __('Add widgets here to appear in your footer.', 'mr_reservations'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'mr_reservations'),
        'id' => 'footer-3',
        'description' => __('Add widgets here to appear in your footer.', 'mr_reservations'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'mr_reservations_widgets_init');

function mr_reservations_enqueue_styles() {
    wp_enqueue_style('mr-reservations-style', get_stylesheet_uri());
    wp_enqueue_style('mr-reservations-responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('mr-reservations-styles', get_template_directory_uri() . '/css/styles.css');
}
add_action('wp_enqueue_scripts', 'mr_reservations_enqueue_styles');
?>
