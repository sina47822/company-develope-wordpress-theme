<?php
defined('ABSPATH') || exit('No Access !!!');

// ابتدا بررسی کنید که پلاگین ACF نصب و فعال است.
if ( function_exists('acf_add_options_page') ) {

  // اضافه کردن صفحه تنظیمات به منوی مدیریت
  acf_add_options_page(array(
      'page_title'    => 'Deodar Settings',
      'menu_title'    => 'Deodar Settings',
      'menu_slug'     => 'deodar-settings',
      'capability'    => 'manage_options',
      'redirect'      => false,
  ));

  // اضافه کردن بخش‌های تنظیمات
  acf_add_options_sub_page(array(
      'page_title'    => 'header',
      'menu_title'    => 'header',
      'parent_slug'   => 'deodar-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'slider',
      'menu_title'    => 'slider',
      'parent_slug'   => 'deodar-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'choose-color',
      'menu_title'    => 'choose-color',
      'parent_slug'   => 'deodar-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'choose-font',
      'menu_title'    => 'choose-font',
      'parent_slug'   => 'deodar-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'call-us',
      'menu_title'    => 'call-us',
      'parent_slug'   => 'deodar-settings',
  ));

}

// سپس فیلدهای مختلف را تعریف می‌کنیم:
function deodar_acf_fields() {
  // هدر
  if ( function_exists('acf_add_local_field_group') ) {
      acf_add_local_field_group(array(
          'key' => 'group_deodar_header',
          'title' => 'header',
          'fields' => array(
              array(
                  'key' => 'field_logo',
                  'label' => 'انتخاب لوگو',
                  'name' => 'select_logo',
                  'type' => 'image',
                  'return_format' => 'url',
                  'preview_size' => 'medium',
              ),
              array(
                  'key' => 'field_logo_width',
                  'label' => 'سایز لوگو',
                  'name' => 'logo_width_size',
                  'type' => 'text',
                  'default_value' => '100',
              ),
              array(
                  'key' => 'field_top_header_text',
                  'label' => 'متن تاپ هدر',
                  'name' => 'top_header_text',
                  'type' => 'text',
                  'default_value' => 'Electro Import',
              ),
          ),
          'location' => array(
              array(
                  array(
                      'param' => 'options_page',
                      'operator' => '==',
                      'value' => 'deodar-settings',
                  ),
              ),
          ),
      ));
  }

  // اسلایدر
  if ( function_exists('acf_add_local_field_group') ) {
      acf_add_local_field_group(array(
          'key' => 'group_deodar_slider',
          'title' => 'اسلایدر',
          'fields' => array(
              array(
                  'key' => 'field_slider_images',
                  'label' => 'اسلایدها',
                  'name' => 'slider_images',
                  'type' => 'repeater',
                  'sub_fields' => array(
                      array(
                          'key' => 'field_slider_image',
                          'label' => 'عکس اسلاید',
                          'name' => 'slider_image',
                          'type' => 'image',
                          'return_format' => 'url',
                          'preview_size' => 'medium',
                      ),
                  ),
                  'button_label' => 'افزودن اسلاید',
              ),
          ),
          'location' => array(
              array(
                  array(
                      'param' => 'options_page',
                      'operator' => '==',
                      'value' => 'deodar-settings',
                  ),
              ),
          ),
      ));
  }

  // انتخاب رنگ
  if ( function_exists('acf_add_local_field_group') ) {
      acf_add_local_field_group(array(
          'key' => 'group_deodar_colors',
          'title' => 'انتخاب رنگ',
          'fields' => array(
              array(
                  'key' => 'field_bg_dark_1',
                  'label' => 'رنگ اول قالب',
                  'name' => 'bg_dark_1',
                  'type' => 'color_picker',
                  'default_value' => '#000000',
              ),
              array(
                  'key' => 'field_bg_dark_2',
                  'label' => 'رنگ دوم قالب',
                  'name' => 'bg_dark_2',
                  'type' => 'color_picker',
                  'default_value' => '#232323',
              ),
              array(
                  'key' => 'field_title_font_color',
                  'label' => 'رنگ هدر فونت قالب',
                  'name' => 'title_font_color',
                  'type' => 'color_picker',
                  'default_value' => '#E8E8E8',
              ),
          ),
          'location' => array(
              array(
                  array(
                      'param' => 'options_page',
                      'operator' => '==',
                      'value' => 'deodar-settings',
                  ),
              ),
          ),
      ));
  }

  // انتخاب فونت
  if ( function_exists('acf_add_local_field_group') ) {
      acf_add_local_field_group(array(
          'key' => 'group_deodar_fonts',
          'title' => 'انتخاب فونت',
          'fields' => array(
              array(
                  'key' => 'field_font_select',
                  'label' => 'انتخاب نوع فونت',
                  'name' => 'font_select',
                  'type' => 'select',
                  'choices' => array(
                      'iransans' => 'ایران سنس',
                      'iranyekan' => 'ایران یکان',
                  ),
                  'default_value' => 'iransans',
              ),
          ),
          'location' => array(
              array(
                  array(
                      'param' => 'options_page',
                      'operator' => '==',
                      'value' => 'deodar-settings',
                  ),
              ),
          ),
      ));
  }

  // تماس با ما
  if ( function_exists('acf_add_local_field_group') ) {
      acf_add_local_field_group(array(
          'key' => 'group_deodar_contact',
          'title' => 'تماس با ما',
          'fields' => array(
              array(
                  'key' => 'field_contact_phone',
                  'label' => 'شماره تلفن',
                  'name' => 'contact_phone',
                  'type' => 'text',
                  'default_value' => '+1 (234) 567-890',
              ),
              array(
                  'key' => 'field_contact_email',
                  'label' => 'آدرس ایمیل',
                  'name' => 'contact_email',
                  'type' => 'text',
                  'default_value' => 'info@electroimport.com',
              ),
              array(
                  'key' => 'field_contact_address',
                  'label' => 'آدرس',
                  'name' => 'contact_address',
                  'type' => 'text',
                  'default_value' => 'خیابان الکترو ایمپورت شماره 1234، شهر، کشور',
              ),
              array(
                  'key' => 'field_work_time',
                  'label' => 'ساعت کاری',
                  'name' => 'work_time',
                  'type' => 'text',
                  'default_value' => 'همه روزه ۸:۰۰ تا ۵:۰۰ بجز روزهای تعطیل',
              ),
              array(
                  'key' => 'field_google_maps_embed',
                  'label' => 'لینک نقشه گوگل',
                  'name' => 'google_maps_embed',
                  'type' => 'text',
                  'default_value' => 'https://www.google.com/maps/embed?pb=...',
              ),
          ),
          'location' => array(
              array(
                  array(
                      'param' => 'options_page',
                      'operator' => '==',
                      'value' => 'deodar-settings',
                  ),
              ),
          ),
      ));
  }
}

// تابع برای گرفتن تنظیمات عمومی
function deodar_settings($key = '') {
  return get_field($key, 'option'); // استفاده از ACF برای گرفتن داده‌ها از تنظیمات عمومی
}


function my_admin_only_render_field_settings( $field ) {
    acf_render_field_setting( $field, array(
        'label'        => __( 'Admin Only?', 'my-textdomain' ),
        'instructions' => '',
        'name'         => 'admin_only',
        'type'         => 'true_false',
        'ui'           => 1,
    ), true ); // If adding a setting globally, you MUST pass true as the third parameter!
}
add_action( 'acf/render_field_settings', 'my_admin_only_render_field_settings' );

?>
