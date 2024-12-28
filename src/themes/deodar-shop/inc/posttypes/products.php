<?php
defined('ABSPATH') || exit('No Access !!!');

/**
 * ثبت پست تایپ سفارشی محصولات
 */
function create_products_cpt() {
    $labels = array(
        'name' => 'محصولات',
        'singular_name' => 'محصول',
        'add_new' => __('ایجاد محصول'),
        'add_new_item' => __('ایجاد محصول جدید'),
        'edit_item' => __('ویرایش محصول'),
        'new_item' => __('محصول جدید'),
        'view_item' => __('مشاهده محصول'),
        'all_items' => __('همه محصولات'),
        'search_items' => __('جستجوی محصولات'),
        'not_found' => __('محصولی یافت نشد'),
        'not_found_in_trash' => __('محصولی در سطل زباله یافت نشد'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
        'taxonomies' => array('post_tag'), // اصلاح taxonomy
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'products'
        ),
    );
    register_post_type('products', $args);
}
add_action('init', 'create_products_cpt');

/**
 * ثبت taxonomy سفارشی برای پست تایپ محصولات
 */
function create_product_taxonomy() {
    register_taxonomy(
        'product_category', // نام taxonomy جدید
        'products', // پست تایپ مرتبط
        array(
            'hierarchical' => true,
            'label' => 'دسته‌بندی محصولات',
            'show_ui' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'product-category'),
        )
    );
}
add_action('init', 'create_product_taxonomy');
?>
