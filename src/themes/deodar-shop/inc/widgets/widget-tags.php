<?php

defined('ABSPATH') || exit('No Access !!!');

function widget_tags() { ?>
    <div class="card widget-tags widget">
        <div class="widget__header">
            <h4>Tags Cloud</h4>
        </div>
        <div class="widget-tags__body tags">
            <div class="tags__list">
                <?php
                $tags = get_tags();
                foreach ($tags as $tag) {
                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a>';
                }
                ?>
            </div>
        </div>
    </div>
<?php }
add_shortcode('widget_tags', 'widget_tags');
