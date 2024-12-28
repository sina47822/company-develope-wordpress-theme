<?php

defined('ABSPATH') || exit('No Access !!!');

function widget_about_blog() { ?>
    <div class="card widget widget-about-us">
        <div class="widget__header">
            <h4>درباره ما</h4>
        </div>
        <div class="widget-about-us__body">
            <div class="widget-about-us__text">
            اعتماد مشتریان بزرگترین سرمایه شرکت است. از این رو این شرکت برای بدست آوردن اعتماد مشتریان نکاتی چون دقت؛ گارانتی؛ سرعت و وفاداری را سر لوحه ی کار قرار داده است.
            </div>
            <div class="widget-about-us__social-links social-links">
                <ul class="social-links__list">
                    <li class="social-links__item social-links__item--rss"><a href="#"><i class="widget-social__icon fas fa-rss"></i></a></li>
                    <li class="social-links__item social-links__item--youtube"><a href="#"><i class="widget-social__icon fab fa-youtube"></i></a></li>
                    <li class="social-links__item social-links__item--facebook"><a href="#"><i class="widget-social__icon fab fa-facebook-f"></i></a></li>
                    <li class="social-links__item social-links__item--twitter"><a href="#"><i class="widget-social__icon fab fa-twitter"></i></a></li>
                    <li class="social-links__item social-links__item--instagram"><a href="#"><i class="widget-social__icon fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
<?php }
add_shortcode('widget_about_blog', 'widget_about_blog');
