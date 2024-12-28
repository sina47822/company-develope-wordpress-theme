<?php

defined('ABSPATH') || exit('No Access !!!');

function widget_newsletter() { ?>
    <div class="widget widget-newsletter">
        <div class="widget-newsletter__title">
            <h4>خبرنامه</h4>
        </div>
        <div class="widget-newsletter__form">
            <form action="">
                <div class="widget-newsletter__text">
                    ایمیل خود را برای عضویت در خبرنامه وارد کنید تا اولین نفری باشید که از انتشا جدیدترین مقالات باخبر می شوید
                </div>
                <input type="email" class="widget-newsletter__email" placeholder="آدرس ایمیل شما..." required>
                <button type="submit" class="widget-newsletter__button">عضویت در خبرنامه</button>
            </form>
        </div>
    </div>
<?php }
add_shortcode('widget_newsletter', 'widget_newsletter');
