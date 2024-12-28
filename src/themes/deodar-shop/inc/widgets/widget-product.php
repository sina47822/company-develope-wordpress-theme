<?php

defined('ABSPATH') || exit('No Access !!!');

function widget_latest_products() { ?>
    <div class="card widget widget-products">
        <div class="widget__header">
            <h4>Latest Products</h4>
        </div>
        <ul class="widget-products__list">
            <?php
            // Query the latest 5 published 'product' posts
            $recent_products = new WP_Query(array(
                'post_type'      => 'products',
                'posts_per_page' => 5,
                'post_status'    => 'publish',
            ));

            if ($recent_products->have_posts()) {
                while ($recent_products->have_posts()) {
                    $recent_products->the_post();
                    $post_id = get_the_ID();
                    echo '<li class="widget-products__item">';
                    echo '<div class="widget-products__image">';
                    echo '<a href="' . esc_url(get_permalink($post_id)) . '">';
                    echo get_the_post_thumbnail($post_id, 'thumbnail', array('class' => 'widget-products__image'));
                    echo '</a>';
                    echo '</div>';
                    echo '<div class="widget-products__info">';
                    echo '<div class="widget-products__name"><a href="' . esc_url(get_permalink($post_id)) . '">' . esc_html(get_the_title()) . '</a></div>';
                    echo '<div class="widget-products__date">' . esc_html(get_the_date()) . '</div>';
                    echo '</div>';
                    echo '</li>';
                }
                wp_reset_postdata();
            } else {
                echo '<p>No products found.</p>';
            }
            ?>
        </ul>
    </div>
<?php }
add_shortcode('widget_latest_products', 'widget_latest_products');
