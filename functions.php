<?php
function mr_reservations_enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('responsive-styles', get_template_directory_uri() . '/css/responsive.css');
}
add_action('wp_enqueue_scripts', 'mr_reservations_enqueue_styles');

function mr_reservations_enqueue_scripts() {
    wp_enqueue_script('fetch-resorts', get_template_directory_uri() . '/js/fetchResorts.js', array(), null, true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/js/slider.js', array(), null, true);
    wp_enqueue_script('filters', get_template_directory_uri() . '/js/filters.js', array(), null, true);
    wp_enqueue_script('resort-details', get_template_directory_uri() . '/js/resortDetails.js', array(), null, true);
    wp_enqueue_script('booking-form', get_template_directory_uri() . '/js/bookingForm.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mr_reservations_enqueue_scripts');
?>

function mr_reservations_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'mr_reservations' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'mr_reservations' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'mr_reservations' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'mr_reservations' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'mr_reservations' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'mr_reservations' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'mr_reservations' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'mr_reservations' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mr_reservations_widgets_init' );
