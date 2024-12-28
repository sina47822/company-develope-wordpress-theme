<?php
defined('ABSPATH') || exit('No Access !!!');

/**
 * ثبت پست تایپ سفارشی مگامنو ها
 */
function create_megamenues_cpt() {
    $labels = array(
        'name' => 'مگامنو ها',
        'singular_name' => 'مگامنو',
        'add_new' => __('ایجاد مگامنو'),
        'add_new_item' => __('ایجاد مگامنو جدید'),
        'edit_item' => __('ویرایش مگامنو'),
        'new_item' => __('مگامنو جدید'),
        'view_item' => __('مشاهده مگامنو'),
        'all_items' => __('همه مگامنو ها'),
        'search_items' => __('جستجوی مگامنو ها'),
        'not_found' => __('مگامنوی یافت نشد'),
        'not_found_in_trash' => __('مگامنوی در سطل زباله یافت نشد'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'megamenues'
        ),
    );
    register_post_type('megamenus', $args);
}
add_action('init', 'create_megamenues_cpt');

?>
