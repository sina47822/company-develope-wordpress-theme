<?php
defined('ABSPATH') || exit('No Access !!!');

$phone_number = deodar_settings('contact-phone'); // Retrieve phone number
$email_address = deodar_settings('contact-email'); // Retrieve email address
$address = deodar_settings('contact-address'); // Retrieve physical address
$social_facebook = deodar_settings('social-facebook'); // Retrieve Facebook link
$social_twitter = deodar_settings('social-twitter'); // Retrieve Twitter link
$social_linkedin = deodar_settings('social-linkedin'); // Retrieve LinkedIn link
$social_telegram = deodar_settings('social-telegram'); // Retrieve Telegram link
$social_instagram = deodar_settings('social-instagram'); // Retrieve Instagram link
$social_whatsapp = deodar_settings('social-whatsapp'); // Retrieve WhatsApp link
$work_time        = deodar_settings('work_time');       // Retrieve Work Time
?>
        <!-- site__footer -->
        <footer class="site__footer">
            <div class="site-footer">
                <div class="decor site-footer__decor decor--type--bottom">
                    <div class="decor__body">
                        <div class="decor__start"></div>
                        <div class="decor__end"></div>
                        <div class="decor__center"></div>
                    </div>
                </div>
                <div class="site-footer__widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <?php echo do_shortcode('[widget_contact_us]'); ?>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">بخش های اصلی سایت</h5>
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'footer-menu-1', // Use the footer menu location
                                            'menu_class' => 'footer-links__list',     // Add a class to the <ul>
                                            'depth' => 1,                      // You can limit the depth if needed
                                            'fallback_cb' => false
                                        ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-xl-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">اطلاعات سایت</h5>
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'footer-menu-2', // Use the footer menu location
                                            'menu_class' => 'footer-links__list',     // Add a class to the <ul>
                                            'depth' => 1,                      // You can limit the depth if needed
                                            'fallback_cb' => false
                                        ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4">
                                <?php echo do_shortcode('[widget_newsletter]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="container">
                        <div class="site-footer__bottom-row">
                            <div class="site-footer__copyright">
                                <!-- copyright -->
                                طراحی شده توسط <a href="https://deodar.ir" target="_blank">دئودار</a>
                                <!-- copyright / end -->
                            </div>
                            <div class="site-footer__payments">
                                <a href="/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" height="50px" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- mobile-menu -->
    <div class="mobile-menu">
        <div class="mobile-menu__backdrop"></div>
        <div class="mobile-menu__body">
            <button class="mobile-menu__close" type="button">
                <svg width="12" height="12">
                    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
                        c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
                        C11.2,9.8,11.2,10.4,10.8,10.8z" />
                </svg>
            </button>
            <div class="mobile-menu__panel">
                <div class="mobile-menu__panel-header">
                    <div class="mobile-menu__panel-title">Menu</div>
                </div>
                <div class="mobile-menu__panel-body">
                    <div class="mobile-menu__settings-list">
                        <div class="mobile-menu__setting" data-mobile-menu-item>
                            <button class="mobile-menu__setting-button" title="Language" data-mobile-menu-trigger>
                                <span class="mobile-menu__setting-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/languages/language-5.png" alt="">
                                </span>
                                <span class="mobile-menu__setting-title">Italian</span>
                                <span class="mobile-menu__setting-arrow"><svg width="6px" height="9px">
                                        <path d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="mobile-menu__setting-panel" data-mobile-menu-panel>
                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                    <div class="mobile-menu__panel-header">
                                        <button class="mobile-menu__panel-back" type="button">
                                            <svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                        <div class="mobile-menu__panel-title">Language</div>
                                    </div>
                                    <div class="mobile-menu__panel-body">
                                        <ul class="mobile-menu__links">
                                            <li data-mobile-menu-item>
                                                <button type="button" class="" data-mobile-menu-trigger>
                                                    <div class="mobile-menu__links-image">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/languages/language-1.png" alt="">
                                                    </div>
                                                    English
                                                </button>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <button type="button" class="" data-mobile-menu-trigger>
                                                    <div class="mobile-menu__links-image">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/languages/language-2.png" alt="">
                                                    </div>
                                                    French
                                                </button>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <button type="button" class="" data-mobile-menu-trigger>
                                                    <div class="mobile-menu__links-image">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/languages/language-3.png" alt="">
                                                    </div>
                                                    German
                                                </button>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <button type="button" class="" data-mobile-menu-trigger>
                                                    <div class="mobile-menu__links-image">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/languages/language-4.png" alt="">
                                                    </div>
                                                    Russian
                                                </button>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <button type="button" class="" data-mobile-menu-trigger>
                                                    <div class="mobile-menu__links-image">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/languages/language-5.png" alt="">
                                                    </div>
                                                    Italian
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu__setting" data-mobile-menu-item>
                            <button class="mobile-menu__setting-button" title="Currency" data-mobile-menu-trigger>
                                <span class="mobile-menu__setting-icon mobile-menu__setting-icon--currency">
                                    $
                                </span>
                                <span class="mobile-menu__setting-title">US Dollar</span>
                                <span class="mobile-menu__setting-arrow"><svg width="6px" height="9px">
                                        <path d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="mobile-menu__setting-panel" data-mobile-menu-panel>
                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                    <div class="mobile-menu__panel-header">
                                        <button class="mobile-menu__panel-back" type="button">
                                            <svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                        <div class="mobile-menu__panel-title">Currency</div>
                                    </div>
                                    <div class="mobile-menu__panel-body">
                                        <ul class="mobile-menu__links">
                                            <li data-mobile-menu-item>
                                                <button type="button" class="" data-mobile-menu-trigger>
                                                    € Euro
                                                </button>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <button type="button" class="" data-mobile-menu-trigger>
                                                    £ Pound Sterling
                                                </button>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <button type="button" class="" data-mobile-menu-trigger>
                                                    $ US Dollar
                                                </button>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <button type="button" class="" data-mobile-menu-trigger>
                                                    ₽ Russian Ruble
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu__divider"></div>
                    <div class="mobile-menu__indicators">
                        <a class="mobile-menu__indicator" href="wishlist.html">
                            <span class="mobile-menu__indicator-icon">
                                <svg width="20" height="20">
                                    <path d="M14,3c2.2,0,4,1.8,4,4c0,4-5.2,10-8,10S2,11,2,7c0-2.2,1.8-4,4-4c1,0,1.9,0.4,2.7,1L10,5.2L11.3,4C12.1,3.4,13,3,14,3 M14,1
	                                c-1.5,0-2.9,0.6-4,1.5C8.9,1.6,7.5,1,6,1C2.7,1,0,3.7,0,7c0,5,6,12,10,12s10-7,10-12C20,3.7,17.3,1,14,1L14,1z" />
                                </svg>
                            </span>
                            <span class="mobile-menu__indicator-title">Wishlist</span>
                        </a>
                        <a class="mobile-menu__indicator" href="account-dashboard.html">
                            <span class="mobile-menu__indicator-icon">
                                <svg width="20" height="20">
                                    <path d="M20,20h-2c0-4.4-3.6-8-8-8s-8,3.6-8,8H0c0-4.2,2.6-7.8,6.3-9.3C4.9,9.6,4,7.9,4,6c0-3.3,2.7-6,6-6s6,2.7,6,6
	                                c0,1.9-0.9,3.6-2.3,4.7C17.4,12.2,20,15.8,20,20z M14,6c0-2.2-1.8-4-4-4S6,3.8,6,6s1.8,4,4,4S14,8.2,14,6z" />
                                </svg>
                            </span>
                            <span class="mobile-menu__indicator-title">Account</span>
                        </a>
                        <a class="mobile-menu__indicator" href="cart.html">
                            <span class="mobile-menu__indicator-icon">
                                <svg width="20" height="20">
                                    <circle cx="7" cy="17" r="2" />
                                    <circle cx="15" cy="17" r="2" />
                                    <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
                                    V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
                                    C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                </svg>
                                <span class="mobile-menu__indicator-counter">3</span>
                            </span>
                            <span class="mobile-menu__indicator-title">Cart</span>
                        </a>
                        <a class="mobile-menu__indicator" href="account-garage.html">
                            <span class="mobile-menu__indicator-icon">
                                <svg width="20" height="20">
                                    <path d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1
                                    c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2
                                    C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9
                                    c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0
                                    c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0
                                    C15.5,10.2,14,11.3,14,12z" />
                                </svg>
                            </span>
                            <span class="mobile-menu__indicator-title">Garage</span>
                        </a>
                    </div>
                    <div class="mobile-menu__divider"></div>
                    <ul class="mobile-menu__links">
                        <li data-mobile-menu-item>
                            <a href="index.html" class="" data-mobile-menu-trigger>
                                Home
                                <svg width="7" height="11">
                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                    C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                </svg>
                            </a>
                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                    <div class="mobile-menu__panel-header">
                                        <button class="mobile-menu__panel-back" type="button">
                                            <svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                        <div class="mobile-menu__panel-title">Home</div>
                                    </div>
                                    <div class="mobile-menu__panel-body">
                                        <ul class="mobile-menu__links">
                                            <li data-mobile-menu-item>
                                                <a href="index.html" class="" data-mobile-menu-trigger>
                                                    Home One
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="index2.html" class="" data-mobile-menu-trigger>
                                                    Home Two
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="header-spaceship-variant-one.html" class="" data-mobile-menu-trigger>
                                                    Header Spaceship
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                        C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Header Spaceship</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="header-spaceship-variant-one.html" class="" data-mobile-menu-trigger>
                                                                        Variant One
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="header-spaceship-variant-two.html" class="" data-mobile-menu-trigger>
                                                                        Variant Two
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="header-spaceship-variant-three.html" class="" data-mobile-menu-trigger>
                                                                        Variant Three
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="header-classic-variant-one.html" class="" data-mobile-menu-trigger>
                                                    Header Classic
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                        C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Header Classic</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="header-classic-variant-one.html" class="" data-mobile-menu-trigger>
                                                                        Variant One
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="header-classic-variant-two.html" class="" data-mobile-menu-trigger>
                                                                        Variant Two
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="header-classic-variant-three.html" class="" data-mobile-menu-trigger>
                                                                        Variant Three
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="header-classic-variant-four.html" class="" data-mobile-menu-trigger>
                                                                        Variant Four
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="header-classic-variant-five.html" class="" data-mobile-menu-trigger>
                                                                        Variant Five
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="mobile-header-variant-one.html" class="" data-mobile-menu-trigger>
                                                    Mobile Header
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                        C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Mobile Header</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="mobile-header-variant-one.html" class="" data-mobile-menu-trigger>
                                                                        Variant One
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="mobile-header-variant-two.html" class="" data-mobile-menu-trigger>
                                                                        Variant Two
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-mobile-menu-item>
                            <a href="shop-grid-4-columns-sidebar.html" class="" data-mobile-menu-trigger>
                                Shop
                                <svg width="7" height="11">
                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                        C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                </svg>
                            </a>
                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                    <div class="mobile-menu__panel-header">
                                        <button class="mobile-menu__panel-back" type="button">
                                            <svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                        <div class="mobile-menu__panel-title">Shop</div>
                                    </div>
                                    <div class="mobile-menu__panel-body">
                                        <ul class="mobile-menu__links">
                                            <li data-mobile-menu-item>
                                                <a href="category.html" class="" data-mobile-menu-trigger>
                                                    Category
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                        C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Category</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="category-3-columns-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        3 Columns Sidebar
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="category-4-columns-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        4 Columns Sidebar
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="category-5-columns-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        5 Columns Sidebar
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="category-4-columns-full.html" class="" data-mobile-menu-trigger>
                                                                        4 Columns Full
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="category-5-columns-full.html" class="" data-mobile-menu-trigger>
                                                                        5 Columns Full
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="category-6-columns-full.html" class="" data-mobile-menu-trigger>
                                                                        6 Columns Full
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="category-7-columns-full.html" class="" data-mobile-menu-trigger>
                                                                        7 Columns Full
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="category-right-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Right Sidebar
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="shop-grid-4-columns-sidebar.html" class="" data-mobile-menu-trigger>
                                                    Shop Grid
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                    C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Shop Grid</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="shop-grid-6-columns-full.html" class="" data-mobile-menu-trigger>
                                                                        6 Columns Full
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="shop-grid-5-columns-full.html" class="" data-mobile-menu-trigger>
                                                                        5 Columns Full
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="shop-grid-4-columns-full.html" class="" data-mobile-menu-trigger>
                                                                        4 Columns Full
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="shop-grid-4-columns-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        4 Columns Sidebar
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="shop-grid-3-columns-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        3 Columns Sidebar
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="shop-list.html" class="" data-mobile-menu-trigger>
                                                    Shop List
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="shop-table.html" class="" data-mobile-menu-trigger>
                                                    Shop Table
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="shop-right-sidebar.html" class="" data-mobile-menu-trigger>
                                                    Shop Right Sidebar
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="product-full.html" class="" data-mobile-menu-trigger>
                                                    Product
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                            C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Product</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="product-full.html" class="" data-mobile-menu-trigger>
                                                                        Full Width
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="product-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Left Sidebar
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="cart.html" class="" data-mobile-menu-trigger>
                                                    Cart
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="checkout.html" class="" data-mobile-menu-trigger>
                                                    Checkout
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="order-success.html" class="" data-mobile-menu-trigger>
                                                    Order Success
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="wishlist.html" class="" data-mobile-menu-trigger>
                                                    Wishlist
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="compare.html" class="" data-mobile-menu-trigger>
                                                    Compare
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="track-order.html" class="" data-mobile-menu-trigger>
                                                    Track Order
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-mobile-menu-item>
                            <a href="blog-classic-right-sidebar.html" class="" data-mobile-menu-trigger>
                                Blog
                                <svg width="7" height="11">
                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                        C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                </svg>
                            </a>
                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                    <div class="mobile-menu__panel-header">
                                        <button class="mobile-menu__panel-back" type="button">
                                            <svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                        <div class="mobile-menu__panel-title">Blog</div>
                                    </div>
                                    <div class="mobile-menu__panel-body">
                                        <ul class="mobile-menu__links">
                                            <li data-mobile-menu-item>
                                                <a href="blog-classic-right-sidebar.html" class="" data-mobile-menu-trigger>
                                                    Blog Classic
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                        C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Blog Classic</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="blog-classic-left-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Left Sidebar
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="blog-classic-right-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Right Sidebar
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="blog-list-right-sidebar.html" class="" data-mobile-menu-trigger>
                                                    Blog List
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                            C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Blog List</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="blog-list-left-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Left Sidebar
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="blog-list-right-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Right Sidebar
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="blog-grid-right-sidebar.html" class="" data-mobile-menu-trigger>
                                                    Blog Grid
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                    C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Blog Grid</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="blog-grid-left-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Left Sidebar
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="blog-grid-right-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Right Sidebar
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="post-full-width.html" class="" data-mobile-menu-trigger>
                                                    Post Page
                                                    <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                            C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                    </svg>
                                                </a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header">
                                                            <button class="mobile-menu__panel-back" type="button">
                                                                <svg width="7" height="11">
                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg>
                                                            </button>
                                                            <div class="mobile-menu__panel-title">Post Page</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item>
                                                                    <a href="post-full-width.html" class="" data-mobile-menu-trigger>
                                                                        Full Width
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="post-left-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Left Sidebar
                                                                    </a>
                                                                </li>
                                                                <li data-mobile-menu-item>
                                                                    <a href="post-right-sidebar.html" class="" data-mobile-menu-trigger>
                                                                        Right Sidebar
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="post-without-image.html" class="" data-mobile-menu-trigger>
                                                    Post Without Image
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-mobile-menu-item>
                            <a href="account-login.html" class="" data-mobile-menu-trigger>
                                Account
                                <svg width="7" height="11">
                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                            C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                </svg>
                            </a>
                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                    <div class="mobile-menu__panel-header">
                                        <button class="mobile-menu__panel-back" type="button">
                                            <svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                        <div class="mobile-menu__panel-title">Account</div>
                                    </div>
                                    <div class="mobile-menu__panel-body">
                                        <ul class="mobile-menu__links">
                                            <li data-mobile-menu-item>
                                                <a href="account-login.html" class="" data-mobile-menu-trigger>
                                                    Login & Register
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="account-dashboard.html" class="" data-mobile-menu-trigger>
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="account-garage.html" class="" data-mobile-menu-trigger>
                                                    Garage
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="account-profile.html" class="" data-mobile-menu-trigger>
                                                    Edit Profile
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="account-orders.html" class="" data-mobile-menu-trigger>
                                                    Order History
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="account-order-details.html" class="" data-mobile-menu-trigger>
                                                    Order Details
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="account-addresses.html" class="" data-mobile-menu-trigger>
                                                    Address Book
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="account-edit-address.html" class="" data-mobile-menu-trigger>
                                                    Edit Address
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="account-password.html" class="" data-mobile-menu-trigger>
                                                    Change Password
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-mobile-menu-item>
                            <a href="about-us.html" class="" data-mobile-menu-trigger>
                                Pages
                                <svg width="7" height="11">
                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                                C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                </svg>
                            </a>
                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                    <div class="mobile-menu__panel-header">
                                        <button class="mobile-menu__panel-back" type="button">
                                            <svg width="7" height="11">
                                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                            </svg>
                                        </button>
                                        <div class="mobile-menu__panel-title">Pages</div>
                                    </div>
                                    <div class="mobile-menu__panel-body">
                                        <ul class="mobile-menu__links">
                                            <li data-mobile-menu-item>
                                                <a href="about-us.html" class="" data-mobile-menu-trigger>
                                                    About Us
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="contact-us-v1.html" class="" data-mobile-menu-trigger>
                                                    Contact Us v1
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="contact-us-v2.html" class="" data-mobile-menu-trigger>
                                                    Contact Us v2
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="404.html" class="" data-mobile-menu-trigger>
                                                    404
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="terms.html" class="" data-mobile-menu-trigger>
                                                    Terms And Conditions
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="faq.html" class="" data-mobile-menu-trigger>
                                                    FAQ
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="components.html" class="" data-mobile-menu-trigger>
                                                    Components
                                                </a>
                                            </li>
                                            <li data-mobile-menu-item>
                                                <a href="typography.html" class="" data-mobile-menu-trigger>
                                                    Typography
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-mobile-menu-item>
                            <a href="" class="highlight" target="_blank" data-mobile-menu-trigger>
                                Buy Theme
                            </a>
                        </li>
                    </ul>
                    <div class="mobile-menu__spring"></div>
                    <div class="mobile-menu__divider"></div>
                    <a class="mobile-menu__contacts" href="">
                        <div class="mobile-menu__contacts-subtitle">Free call 24/7</div>
                        <div class="mobile-menu__contacts-title">800 060-0730</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu / end -->
    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>
    <!-- quickview-modal / end -->

    <!-- photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- photoswipe / end -->
    <?php wp_footer(  ); ?>

</body>
</html>