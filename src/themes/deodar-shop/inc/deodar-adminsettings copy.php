<?php
defined('ABSPATH') || exit('No Access !!!');

// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'deodar_settings';

// Create a header section
  CSF::createSection( $prefix, array(
    'title'  => 'هدر',
    'fields' => array(

      array(
        'id'      => 'select-logo',
        'type'    => 'media',
        'title'   => 'انتخاب لوگو',
        'library' => 'image',
      ),
      array(
        'id'    => 'logo-width-size',
        'type'  => 'text',
        'title' => 'سایز لوگو',
        'default' => '100',
      ),
      array(
        'id'    => 'top-header-text',
        'type'  => 'text',
        'title' => 'متن تاپ هدر',
        'default' => 'Electro Import',
      ),      
    )
  ) ); 
  CSF::createSection( $prefix, array(
    'title'  => 'اسلایدر',
    'fields' => array(
      array(
        'id'          => 'slider_images',
        'type'        => 'repeater',
        'title'       => 'اسلایدها',
        'fields'      => array(
          array(
            'id'      => 'slider_image',
            'type'    => 'media',
            'title'   => 'عکس اسلاید',
            'library' => 'image',
          ),
        ),
      ),
    ),
  ));
  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Deodar_settings',
    'menu_slug'  => 'Deodar_settings',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'انتخاب رنگ',
    'fields' => array(

      //
      // A color field
      array(
        'id'    => 'bg-dark-1',
        'type'  => 'color',
        'title' => 'رنگ اول قالب',
        'default' => '#000000',

      ),
      // A color field
      array(
      'id'    => 'bg-dark-2',
      'type'  => 'color',
      'title' => 'رنگ دوم قالب',
      'default' => '#232323',

      ),
      
      // A color field
      array(
      'id'    => 'bg-dark-3',
      'type'  => 'color',
      'title' => 'رنگ سوم قالب',
      'default' => '#303030',
      ),
      // A color field
      array(
          'id'    => 'title-font-color',
          'type'  => 'color',
          'title' => 'رنگ هدر فونت قالب',
          'default' => '#E8E8E8',

      ),
      // A color field
      array(
          'id'    => 'body-font-color',
          'type'  => 'color',
          'title' => 'رنگ بدنه فونت قالب',
          'default' => '#F4F4F4',

      ),
      // A color field
      array(
          'id'    => 'dark-body-font-color',
          'type'  => 'color',
          'title' => 'رنگ بدنه تیره فونت قالب',
          'default' => '#707070',

      ),
    )
  ) );

  CSF::createSection( $prefix, array(
    'title'  => 'انتخاب فونت',
    'fields' => array(

      array(
          'id'          => 'font-select',
          'type'        => 'select',
          'title'       => 'انتخاب نوع فونت',
          'chosen'      => true,
          'placeholder' => 'یک فونت انتخاب کنید...',
          'options'     => array(
            'iransans'  => 'ایران سنس',
            'iranyekan'  => 'ایران یکان',
          ),
          'default'     => 'iransans'
      ),

    )
  ) );

  // Create the third section for 'Contact Us' and 'Social Media'
  CSF::createSection( $prefix, array(
      'title'  => 'تماس با ما', // "Contact Us"
      'fields' => array(
          // Phone Number
          array(
              'id'      => 'contact-phone',
              'type'    => 'text',
              'title'   => 'شماره تلفن', // "Phone Number"
              'default' => '+1 (234) 567-890',
          ),
          // Email Address
          array(
              'id'      => 'contact-email',
              'type'    => 'text',
              'title'   => 'آدرس ایمیل', // "Email Address"
              'default' => 'info@electroimport.com',
          ),
          // Address
          array(
              'id'      => 'contact-address',
              'type'    => 'text',
              'title'   => 'آدرس', // "Address"
              'default' => 'خیابان الکترو ایمپورت شماره 1234، شهر، کشور',
          ),
          // Work Time
          array(
            'id'      => 'work_time', // Changed to underscore
            'type'    => 'text',
            'title'   => 'ساعت کاری', // "Work Time"
            'default' => 'همه روزه ۸:۰۰ تا ۵:۰۰ بجز روزهای تعطیل',
          ),
          // Social Media Links
          array(
              'id'      => 'social-facebook',
              'type'    => 'text',
              'title'   => 'لینک فیسبوک', // "Facebook Link"
              'default' => '#',
          ),
          array(
              'id'      => 'social-twitter',
              'type'    => 'text',
              'title'   => 'لینک توییتر', // "Twitter Link"
              'default' => '#',
          ),
          array(
              'id'      => 'social-linkedin',
              'type'    => 'text',
              'title'   => 'لینک لینکدین', // "LinkedIn Link"
              'default' => '#',
          ),
          array(
              'id'      => 'social-telegram',
              'type'    => 'text',
              'title'   => 'لینک تلگرام', // "Telegram Link"
              'default' => '#',
          ),
          array(
              'id'      => 'social-instagram',
              'type'    => 'text',
              'title'   => 'لینک اینستاگرام', // "Instagram Link"
              'default' => '#',
          ),
          array(
              'id'      => 'social-whatsapp',
              'type'    => 'text',
              'title'   => 'لینک واتساپ', // "WhatsApp Link"
              'default' => '#',
          ),
          // Google Maps Embed URL
          array(
              'id'      => 'google-maps-embed',
              'type'    => 'text',
              'title'   => 'لینک نقشه گوگل', // "Google Maps Embed Link"
              'default' => 'https://www.google.com/maps/embed?pb=...',
          ),
      )
  ) );
}
function deodar_settings($key = ''){
  $options = get_option('deodar_settings');

  return isset($options[$key]) ? $options[$key] : null;
}

