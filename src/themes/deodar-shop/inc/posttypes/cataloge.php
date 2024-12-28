<?php
defined('ABSPATH') || exit('No Access !!!');

/**
 * ثبت پست تایپ سفارشی کاتالوگ ها
 */
function create_cataloges_cpt() {
    $labels = array(
        'name' => 'کاتالوگ ها',
        'singular_name' => 'کاتالوگ',
        'add_new' => __('ایجاد کاتالوگ'),
        'add_new_item' => __('ایجاد کاتالوگ جدید'),
        'edit_item' => __('ویرایش کاتالوگ'),
        'new_item' => __('کاتالوگ جدید'),
        'view_item' => __('مشاهده کاتالوگ'),
        'all_items' => __('همه کاتالوگ ها'),
        'search_items' => __('جستجوی کاتالوگ ها'),
        'not_found' => __('کاتالوگی یافت نشد'),
        'not_found_in_trash' => __('کاتالوگی در سطل زباله یافت نشد'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
        'taxonomies' => array('post_tag'), // اصلاح taxonomy
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'cataloges'
        ),
    );
    register_post_type('cataloges', $args);
}
add_action('init', 'create_cataloges_cpt');

/**
 * ثبت taxonomy سفارشی برای پست تایپ کاتالوگ ها
 */
function create_cataloge_taxonomy() {
    register_taxonomy(
        'cataloge_category', // نام taxonomy جدید
        'cataloges', // پست تایپ مرتبط
        array(
            'hierarchical' => true,
            'label' => 'دسته‌بندی کاتالوگ ها',
            'show_ui' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'cataloge-category'),
        )
    );
}
add_action('init', 'create_cataloge_taxonomy');
?>
