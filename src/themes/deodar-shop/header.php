<?php
    defined('ABSPATH') || exit('No Access !!!');

    $bg_dark_1 = deodar_settings('bg_dark_1');
    $bg_dark_2 = deodar_settings('bg_dark_2');
    $bg_dark_3 = deodar_settings('bg_dark_3');
    $title_font_color = deodar_settings('title_font_color');
    $body_font_color = deodar_settings('body_font_color');
    $dark_body_font_color = deodar_settings('dark_body_font_color');
    
    $logo_website = deodar_settings('select_logo');
    $logo_width_size = deodar_settings('logo_width_size');
    $top_header_text = deodar_settings('top_header_text');

    $phone_number = deodar_settings('contact-phone'); // Retrieve phone number
    $email_address = deodar_settings('contact-email'); // Retrieve email address
    $address = deodar_settings('contact-address'); // Retrieve physical address
    $social_facebook = deodar_settings('social-facebook'); // Retrieve Facebook link
    $social_twitter = deodar_settings('social-twitter'); // Retrieve Twitter link
    $social_linkedin = deodar_settings('social-linkedin'); // Retrieve LinkedIn link
    $social_telegram = deodar_settings('social-telegram'); // Retrieve Telegram link
    $social_instagram = deodar_settings('social-instagram'); // Retrieve Instagram link
    $social_whatsapp = deodar_settings('social-whatsapp'); // Retrieve WhatsApp link
?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Shooka — Company Portfolio Website" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >

    </style>
    
    <?php wp_head(); ?>


</head>
<body class="" <?php body_class(); ?>>

    <!-- site -->
    <div class="site">
        <!-- site__mobile-header -->
        <header class="site__mobile-header">
            <div class="mobile-header">
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button" type="button">
                            <svg width="18px" height="14px">
                                <path d="M-0,8L-0,6L18,6L18,8L-0,8ZM-0,-0L18,-0L18,2L-0,2L-0,-0ZM14,14L-0,14L-0,12L14,12L14,14Z" />
                            </svg>
                        </button>
                        <a class="mobile-header__logo" href="">
                            <!-- mobile-logo -->
                            <svg width="130" height="20">
                                
                            </svg>
                            <!-- mobile-logo / end -->
                        </a>
                        <div class="mobile-header__search mobile-search">

                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- site__mobile-header / end -->
        <!-- site__header -->
        <header class="site__header">
            <div class="header">
                <div class="header__megamenu-area megamenu-area"></div>
                <div class="header__topbar-start-bg"></div>
                <div class="header__topbar-start">
                    <div class="topbar topbar--spaceship-start">
                        <div class="topbar__item-text d-none d-xxl-flex">تلفن تماس : <?php echo esc_attr($phone_number); ?></div>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'top-menu', // Use the top menu location
                                'container' => 'div',
                                'container_class' => 'topbar topbar--spaceship-start',
                                'menu_class' => 'topbar__item-text',
                                'depth' => 1,
                                'fallback_cb' => false
                            ));
                        ?>
                    </div>
                </div>
                <div class="header__topbar-end-bg"></div>

                <div class="header__navbar">

                    <div class="header__navbar-menu">
                        <nav class="deodar-navigation">
                            <ul class="navbar-nav">
                            <?php wp_nav_menu(
                                [
                                    'theme-location' => 'main-menu',
                                    'walker' =>new deodar_mega_menu_walker(),
                                ]
                            ) ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header__logo">
                    <a href="index.html" class="logo">
                        <div class="logo__slogan">
                            <?php echo esc_attr( $top_header_text ) ?>
                        </div>
                        <div class="logo__image">
                            <!-- logo -->
                            <img style="width : <?php echo esc_attr( $logo_width_size ) ?>px ; height : auto" src="<?php echo esc_url( $logo_website['url'] )?>" alt="<?php echo esc_attr( get_bloginfo( 'name') )?>">
                            <!-- logo / end -->
                        </div>
                    </a>
                </div>
                <div class="header__search">
                    <div class="search">
                        <form action="" class="search__body">
                            <div class="search__shadow"></div>
                            <input class="search__input" type="text" placeholder="دنبال چه می گردید؟">
                            <button class="search__button search__button--end" type="submit">
                                <span class="search__button-icon">
                                    <svg width="20" height="20">
                                        <path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
                                        c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
                                        c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="search__box"></div>
                            <div class="search__decor">
                                <div class="search__decor-start"></div>
                                <div class="search__decor-end"></div>
                            </div>
                            <div class="search__dropdown search__dropdown--suggestions suggestions">
                                <?php get_template_part('templates/components/search-dropdown') ?>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header__indicators">
                    <nav class="deodar-navigation">
                        <ul class="navbar-nav">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'main-menu-left', // Use the top menu location
                                    'depth' => 1,
                                    'fallback_cb' => false
                                ));
                            ?>
                        </ul>
                    </nav>
                </div>

            </div>
        </header>
        <!-- site__header / end -->