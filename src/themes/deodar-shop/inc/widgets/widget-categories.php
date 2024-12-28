<?php

defined('ABSPATH') || exit('No Access !!!');

function widget_categories() { ?>
    <div class="card widget widget-categories">
        <div class="widget__header">
            <h4>Categories</h4>
        </div>
        <ul class="widget-categories__list widget-categories__list--root">
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<li class="widget-categories__item"><a href="' . esc_url(get_category_link($category->term_id)) . '" class="widget-categories__link">' . esc_html($category->name) . '</a></li>';
            }
            ?>
        </ul>
    </div>
<?php }
add_shortcode('widget_categories', 'widget_categories');
