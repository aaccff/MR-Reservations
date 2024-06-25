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
