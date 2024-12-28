<?php
defined('ABSPATH') || exit('No Access !!!');

add_action('cmb2_admin_init', 'deodar_metaboxes');

function deodar_metaboxes() {

    $prefix = '_deodar_';
    // Initiate the metabox
    $cataloge_metabox = new_cmb2_box(array(
        'id'            => 'cataloges_metabox',
        'title'         => 'مشخصات محصول',
        'object_types'  => array('cataloges'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ));
    // Download Catalog
    $cataloge_metabox->add_field(array(
        'name'       => 'دانلود کاتالوگ',
        'id'         => $prefix . 'cataloge_download_link',
        'type'       => 'file',
        'description'=> 'فایل کاتالوگ محصول را آپلود کنید.',
    ));

    // Download Manual
    $cataloge_metabox->add_field(array(
        'name'       => 'دانلود منوال',
        'id'         => $prefix . 'manual_download_link',
        'type'       => 'file',
        'description'=> 'فایل راهنمای محصول را آپلود کنید.',
    ));
    // Initiate the metabox
    $products_box = new_cmb2_box(array(
        'id'            => 'products_metabox',
        'title'         => 'مشخصات محصول',
        'object_types'  => array('products'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ));
    $products_box->add_field( array(
        'name'       => 'موجود بودن در انبار',
        'id'         => $prefix . 'in_stock',
        'type'       => 'checkbox',  // Checkbox for boolean value
        'description'=> 'آیا محصول در انبار موجود است؟',
        'default'    => false,  // Default value is false (Out of Stock)
    ) );
    // SKU Field
    $products_box->add_field( array(
        'name'       => 'SKU',
        'id'         => $prefix . 'sku',
        'type'       => 'text',
        'description'=> 'وارد کردن کد SKU محصول',
    ) );

    // Brand Field
    $products_box->add_field( array(
        'name'       => 'Brand',
        'id'         => $prefix . 'brand',
        'type'       => 'text',
        'description'=> 'وارد کردن نام برند محصول',
    ) );

    // Country Field
    $products_box->add_field( array(
        'name'       => 'Country',
        'id'         => $prefix . 'country',
        'type'       => 'text',
        'description'=> 'وارد کردن کشور سازنده محصول',
    ) );

    // Vendor Code Field
    $products_box->add_field( array(
        'name'       => 'Vendor Code',
        'id'         => $prefix . 'vendor_code',
        'type'       => 'text',
        'description'=> 'وارد کردن کد فروشنده محصول',
    ) );

    // Price Availability Option (checkbox or select field)
    $products_box->add_field( array(
        'name'       => 'آیا قیمت محصول موجود است؟',
        'id'         => $prefix . 'price_available',
        'type'       => 'select',
        'options'    => array(
            'yes' => 'بله',
            'no'  => 'خیر',
        ),
        'default'    => 'no',  // Default value is 'no'
        'description'=> 'آیا قیمت محصول موجود است؟',
    ) );

    // Price Field (only shown if "yes" is selected)
    $products_box->add_field( array(
        'name'       => 'قیمت محصول',
        'id'         => $prefix . 'price',
        'type'       => 'text',
        'before_field' => 'تومان ', // Display currency before the input
        'description'=> 'قیمت محصول را وارد کنید.',
        'sanitize'   => 'intval', // Ensure that the price is stored as a integer value
    ) );

    // Call for Price message (only shown if "no" is selected)
    $products_box->add_field( array(
        'name'       => 'پیام در صورت عدم موجود بودن قیمت',
        'id'         => $prefix . 'call_for_price',
        'type'       => 'text',
        'default'    => 'استعلام قیمت',
        'description'=> 'پیامی که به جای قیمت نمایش داده می‌شود.',
        'sanitize'   => 'intval', // Ensure the offer price is stored as a integer value
    ) );

    // Offer Price Field
    $products_box->add_field(array(
        'name'       => 'قیمت پیشنهادی',
        'id'         => $prefix . 'offer_price',
        'type'       => 'text',
        'before_field' => 'تومان ', // Display currency before the input
        'description'=> 'قیمت تخفیفی یا پیشنهادی محصول را وارد کنید.',
        'sanitize'   => 'sanitize_integer', // Custom sanitize function to ensure integer value
    ));

    // Other Images (Gallery - multiple image upload)
    $products_box->add_field( array(
        'name'       => 'تصاویر دیگر محصول',
        'id'         => $prefix . 'other_images',
        'type'       => 'file_list',
        'description'=> 'تصاویر مرتبط با محصول را آپلود کنید.',
        'query_args' => array(
            'type' => 'image' // Only allow image files
        ),
    ) );

    // Download Catalog
    $products_box->add_field(array(
        'name'       => 'دانلود کاتالوگ',
        'id'         => $prefix . 'download_catalog',
        'type'       => 'file',
        'description'=> 'فایل کاتالوگ محصول را آپلود کنید.',
    ));

    // Download Manual
    $products_box->add_field(array(
        'name'       => 'دانلود منوال',
        'id'         => $prefix . 'download_manual',
        'type'       => 'file',
        'description'=> 'فایل راهنمای محصول را آپلود کنید.',
    ));
    // Download Manual
    $products_box->add_field(array(
        'name'       => 'متن زیر مشخصات محصول',
        'id'         => $prefix . 'product_text_specification',
        'type'       => 'text',
        'description'=> 'متن زیر مشخصات محصول را میتوانید از اینجا تغییر دهید',
    ));
    // Repeatable Specifications Fields
    $products_box->add_field( array(
        'name'       => 'مشخصات محصول',
        'id'         => $prefix . 'product_specifications',
        'type'       => 'group',  // Group field for repeated specification
        'description'=> 'می‌توانید چندین مشخصات برای محصول وارد کنید.',
        'repeatable' => true, // Allow repeatable fields
        
        'fields'     => array(
            // Specification Name (e.g., "Weight")
            array(
                'name'    => 'نام مشخصه',
                'id'      => 'spec_name',
                'type'    => 'text',
                'description' => 'نام مشخصه را وارد کنید (مانند وزن, رنگ, ابعاد)',
            ),
            // Specification Value (e.g., "2kg")
            array(
                'name'    => 'مقدار مشخصه',
                'id'      => 'spec_value',
                'type'    => 'text',
                'description' => 'مقدار مشخصه را وارد کنید (مانند ۲ کیلوگرم, قرمز)',
            ),
        ),
    ) );
}
?>
