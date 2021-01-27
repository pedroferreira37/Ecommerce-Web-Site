<?php

function ars_add_woocommerce_support() {
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'ars_add_woocommerce_support', 'register_features_taxonomy_event_category');

function amaralshoes_css() {
    wp_register_style('as-style', get_template_directory_uri() . '/style.css', [], '1.0.0',);
    wp_enqueue_style('as-style');

}

add_action('wp_enqueue_scripts', 'amaralshoes_css');


function amaral_custom_images() {
    add_image_size('slide',973, 1300);
    update_option('max_crop', 1);
}

add_action('after_setup_theme', 'amaral_custom_images' );

function as_loop_shop_per_page() {
    return 12;
}


add_filter('loop_shop_per_page', 'as_loop_shop_per_page');


function remove_some_body_class($classes) {
    $woo_class = array_search('woocommerce', $classes);
    $woo_page = array_search('woocommerce-page', $classes);
    $search = in_array('archive', $classes) || in_array('product-template-default', $classes);
    if($woo_class && $woo_page && $search) {
        unset($classes[$woo_class]);
        unset($classes[$woo_page]);
    }
    return $classes;
}


add_filter('body_class', 'remove_some_body_class');


include(get_template_directory() . '/inc/product-list.php');


include(get_template_directory() . '/inc/user-custom-menu.php');







?>