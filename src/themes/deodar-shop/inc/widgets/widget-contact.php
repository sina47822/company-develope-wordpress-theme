<?php

defined('ABSPATH') || exit('No Access !!!');

// Create a Contact Us Widget using a shortcode
function widget_contact_us() { 
        // Get the custom field values
        $phone = deodar_settings('contact-phone');
        $email = deodar_settings('contact-email');
        $address = deodar_settings('contact-address');
        $work_time = deodar_settings('work_time');
        $social_facebook = deodar_settings('social-facebook');
        $social_twitter = deodar_settings('social-twitter');
        $social_linkedin = deodar_settings('social-linkedin');
        $social_telegram = deodar_settings('social-telegram');
        $social_instagram = deodar_settings('social-instagram');
        $social_whatsapp = deodar_settings('social-whatsapp');
        $google_maps_embed = deodar_settings('google-maps-embed');
        
        // Begin output buffering
        ob_start(); ?>
    <div class="site-footer__widget footer-contacts">
        <h5 class="footer-contacts__title">الکتروایمپورت</h5>
        <div class="footer-contacts__text">
        اعتماد مشتریان بزرگترین سرمایه شرکت است. از این رو این شرکت برای بدست آوردن اعتماد مشتریان نکاتی چون دقت؛ گارانتی؛ سرعت و وفاداری را سر لوحه ی کار قرار داده است.
        </div>
        <address class="footer-contacts__contacts">
            <dl>
                <dt>شماره تماس</dt>
                <dd><?php echo esc_html($phone); ?></dd>
            </dl>
            <dl>
                <dt>آدرس ایمیل</dt>
                <dd><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></dd>
            </dl>
            <dl>
                <dt>آدرس</dt>
                <dd><?php echo esc_html($address); ?></dd>
            </dl>
            <dl>
                <dt>ساعت کاری</dt>
                <dd><?php echo esc_html($work_time); ?></dd>
            </dl>
        </address>
    </div>

    <div class="mt-3">
        <!-- Social Media Links -->
        <ul class="social-links__list">
            <?php if($social_facebook): ?>
                <li class="social-links__item social-links__item--facebook">
                    <a href="<?php echo esc_url($social_facebook); ?>" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
            <?php endif; ?>
            
            <?php if($social_twitter): ?>
                <li class="social-links__item social-links__item--twitter">
                    <a href="<?php echo esc_url($social_twitter); ?>" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            <?php endif; ?>
            
            <?php if($social_linkedin): ?>
                <li class="social-links__item social-links__item--linkedin">
                    <a href="<?php echo esc_url($social_linkedin); ?>" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            <?php endif; ?>
            
            <?php if($social_telegram): ?>
                <li class="social-links__item social-links__item--telegram">
                    <a href="<?php echo esc_url($social_telegram); ?>" target="_blank">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                </li>
            <?php endif; ?>
            
            <?php if($social_instagram): ?>
                <li class="social-links__item social-links__item--instagram">
                    <a href="<?php echo esc_url($social_instagram); ?>" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            <?php endif; ?>
            
            <?php if($social_whatsapp): ?>
                <li class="social-links__item social-links__item--whatsapp">
                    <a href="<?php echo esc_url($social_whatsapp); ?>" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
            <?php endif; ?>
        </ul>

    </div>

<?php
    return ob_get_clean();
 }

// Register the shortcode
add_shortcode('widget_contact_us', 'widget_contact_us');
