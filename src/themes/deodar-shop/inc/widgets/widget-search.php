<?php

defined('ABSPATH') || exit('No Access !!!');

function widget_search() { ?>
    <div class="card widget widget-search">
        <form action="<?php echo esc_url(home_url('/')); ?>" class="widget-search__form" method="get">
            <input class="widget-search__input" type="search" name="s" placeholder="جستجو...">
            <button class="widget-search__button" type="submit">
                <svg width="20" height="20">
                    <path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z" />
                </svg>
            </button>
        </form>
    </div>
<?php }
add_shortcode('widget_search', 'widget_search');
