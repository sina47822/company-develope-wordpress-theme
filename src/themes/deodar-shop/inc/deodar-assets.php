<?php

defined('ABSPATH') || exit('No access !!!');

function Deodar_Theme_enqueue_styles() {

    $theme_obj = wp_get_theme(); // change from style.css file in root folder
    $theme_ver = $theme_obj->get('Version');

	wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap.min', DEODAR_THEMEURL . 'assets/vendor/bootstrap/css/bootstrap.css');
	wp_enqueue_style('owl.carousel', DEODAR_THEMEURL . 'assets/vendor/owl-carousel/assets/owl.carousel.min.css');
    wp_enqueue_style('photoswipe', DEODAR_THEMEURL . 'assets/vendor/photoswipe/photoswipe.css');
	wp_enqueue_style('photoswipe-default-skin', DEODAR_THEMEURL . 'assets/vendor/photoswipe/default-skin/default-skin.css');
	wp_enqueue_style('select2.css', DEODAR_THEMEURL . 'assets/endor/select2/css/select2.min.css');
    wp_enqueue_style('style.css', DEODAR_THEMEURL . 'assets/css/style.rtl.css');
    wp_enqueue_style('nav.css', DEODAR_THEMEURL . 'assets/css/nav.css');
    wp_enqueue_style('style.header-spaceship.css', DEODAR_THEMEURL . 'assets/css/style.header-spaceship-variant-one.css');
    wp_enqueue_style('style.mobile-header.css', DEODAR_THEMEURL . 'assets/css/style.mobile-header-variant-one.css');
    wp_enqueue_style('fontawesome', DEODAR_THEMEURL . 'assets/vendor/fontawesome/css/all.min.css');
    wp_enqueue_style('deodar-main-style', DEODAR_THEMEURL . 'assets/css/app.css');
    
    // Load font dynamically based on theme settings
    $font_select = deodar_settings('font-select');
    wp_enqueue_style( 'deodar_font_select', DEODAR_THEMEURL . 'assets/fonts/' . $font_select . '.css' , null ) ;
}
add_action('wp_enqueue_scripts', 'Deodar_Theme_enqueue_styles');


function Deodar_Theme_enqueue_scripts() {
    // Get theme version for cache busting
    $theme_obj = wp_get_theme();
    $theme_ver = $theme_obj->get('Version');
	wp_enqueue_script('jquery', DEODAR_THEMEURL . 'assets/vendor/jquery/jquery.min.js' , [], $theme_ver, true);
    wp_enqueue_script('bootstrap', DEODAR_THEMEURL . 'assets/bootstrap/js/bootstrap.bundle.min.js' , [], $theme_ver, true);
	wp_enqueue_script('owl.carousel', DEODAR_THEMEURL . 'assets/vendor/owl-carousel/owl.carousel.min.js' , [], $theme_ver, true);
    wp_enqueue_script('nouislider', DEODAR_THEMEURL . 'assets/vendor/nouislider/nouislider.min.js' , [], $theme_ver, true);
	wp_enqueue_script('photoswipe', DEODAR_THEMEURL . 'assets/vendor/photoswipe/photoswipe.min.js' , [], $theme_ver, true);
	wp_enqueue_script('photoswipe-ui', DEODAR_THEMEURL . 'assets/vendor/photoswipe/photoswipe-ui-default.min.js' , [], $theme_ver, true);
	wp_enqueue_script('select2', DEODAR_THEMEURL . 'assets/vendor/select2/js/select2.min.js' , [], $theme_ver, true);
	wp_enqueue_script('number', DEODAR_THEMEURL . 'assets/js/number.js' , [], $theme_ver, true);
	wp_enqueue_script('main', DEODAR_THEMEURL . 'assets/js/main.js' , [], $theme_ver, true);
    wp_enqueue_script('deodar-app-js', DEODAR_THEMEURL . 'assets/js/app.js', [], $theme_ver, true);
    wp_localize_script('deodar-app-js', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php'), // URL to handle AJAX requests
    ));
}
add_action('wp_enqueue_scripts', 'Deodar_Theme_enqueue_scripts');
