<?php

defined('ABSPATH') || exit('No Access !!!');

add_action('admin_enqueue_scripts', function() {
    // Enqueue media library if we're editing a category
    if (isset($_GET['taxonomy']) && $_GET['taxonomy'] === 'category') {
        wp_enqueue_media(); // This loads the WordPress Media Library
        wp_enqueue_script('category-image-script', get_template_directory_uri() . '/assets/js/app.js', ['media-views'], false, true);
    }
});

add_action('after_setup_theme' , 'deodar_after_setup_theme');
function deodar_after_setup_theme() {
    
    
    add_theme_support('title-tag');

    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'main-menu' => 'منوی اصلی',
            'main-menu-left' => 'منوی اصلی سمت چپ',
            'footer-menu-1' => 'منوی فوتر ۱',
			'footer-menu-2' => 'منوی فوتر ۲',
            'footer-menu-3' => 'منوی فوتر ۳',
            'top-menu' => 'منوی بالای سایت',
            'mobile-menu' => 'منوی موبایل',
        ));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

}
add_action('category_edit_form_fields', function ($term) {
    $image_id = get_term_meta($term->term_id, 'category_image', true);
    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
    ?>
    <tr class="form-field">
        <th scope="row">
            <label for="category_image"><?php _e('Category Image', 'textdomain'); ?></label>
        </th>
        <td>
            <div id="category-image-wrapper">
                <?php if ($image_url): ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="" style="max-width: 150px; max-height: 150px;">
                <?php endif; ?>
            </div>
            <input type="hidden" name="category_image" id="category_image" value="<?php echo esc_attr($image_id); ?>">
            <button type="button" class="button button-secondary" id="upload-category-image"><?php _e('Select Image', 'textdomain'); ?></button>
            <button type="button" class="button button-link-delete" id="remove-category-image"><?php _e('Remove Image', 'textdomain'); ?></button>
            <p class="description"><?php _e('Choose an image for this category. This image will be used as the category thumbnail.', 'textdomain'); ?></p>
        </td>
    </tr>
    <?php
});
add_action('edited_category', 'save_category_image');
add_action('create_category', 'save_category_image');

function save_category_image($term_id) {
    if (isset($_POST['category_image'])) {
        // Sanitize the image ID and save it as a term meta
        $image_id = intval($_POST['category_image']);
        if ($image_id) {
            update_term_meta($term_id, 'category_image', $image_id);
        }
    }
}

function enqueue_slider_scripts() {
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'slider-init', get_template_directory_uri() . '/assets/js/slider-init.js', array( 'owl-carousel' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_slider_scripts' );

// function set_custom_posts_per_page($query) {
//     // Ensure this only affects the main query on non-admin pages
//     if (!is_admin() && $query->is_main_query()) {
//         // Limit posts per page to 5
//         if (is_home() || is_archive()) {
//             $query->set('posts_per_page', 2);
//         }
//     }
// }
// add_action('pre_get_posts', 'set_custom_posts_per_page');

function custom_post_type_pagination() {
    if (is_post_type_archive('products') || is_tax('product_category')) {
        global $wp_rewrite;
        $wp_rewrite->add_rewrite_rule(
            'products/page/([0-9]{1,})/?$',
            'index.php?post_type=products&paged=$matches[1]',
            'top'
        );
    }
}
add_action('init', 'custom_post_type_pagination');