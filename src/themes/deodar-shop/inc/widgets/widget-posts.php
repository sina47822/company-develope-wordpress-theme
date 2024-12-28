<?php

defined('ABSPATH') || exit('No Access !!!');

function widget_latest_posts() { ?>
    <div class="card widget widget-posts">
        <div class="widget__header">
            <h4>Latest Posts</h4>
        </div>
        <ul class="widget-posts__list">
            <?php
            $recent_posts = wp_get_recent_posts(array('numberposts' => 3, 'post_status' => 'publish'));
            foreach ($recent_posts as $post) {
                $post_id = $post['ID'];
                echo '<li class="widget-posts__item">';
                echo '<div class="widget-posts__image">';
                echo '<a href="' . esc_url(get_permalink($post_id)) . '">';
                echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'widget-products__image'));
                echo '</a>';
                echo '</div>';
                echo '<div class="widget-posts__info">';
                echo '<div class="widget-posts__name"><a href="' . esc_url(get_permalink($post_id)) . '">' . esc_html($post['post_title']) . '</a></div>';
                echo '<div class="widget-posts__date">' . esc_html(get_the_date('', $post_id)) . '</div>';
                echo '</div>';
                echo '</li>';
            }
            ?>
        </ul>
    </div>
<?php }
add_shortcode('widget_latest_posts', 'widget_latest_posts');
