<?php

defined('ABSPATH') || exit('No Access !!!');

function widget_latest_comments() { ?>
    <div class="card widget widget-comments">
        <div class="widget__header">
            <h4>Latest Comments</h4>
        </div>
        <div class="widget-comments__body">
            <ul class="widget-comments__list">
                <?php
                // Fetch the latest comments
                $comments = get_comments(array(
                    'number'      => 5, // Adjust the number of comments to display
                    'status'      => 'approve', // Only approved comments
                    'post_status' => 'publish', // Only comments from published posts
                ));
                
                // Loop through each comment
                foreach ($comments as $comment) {
                    $post_title = get_the_title($comment->comment_post_ID);
                    $post_url = get_permalink($comment->comment_post_ID);
                    $comment_excerpt = wp_trim_words($comment->comment_content, 20, '...');
                    ?>
                    <li class="widget-comments__item">
                        <div class="widget-comments__author">
                            <a href="<?php echo esc_url(get_comment_link($comment)); ?>">
                                <?php echo esc_html($comment->comment_author); ?>
                            </a>
                        </div>
                        <div class="widget-comments__content">
                            <?php echo esc_html($comment_excerpt); ?>
                        </div>
                        <div class="widget-comments__meta">
                            <div class="widget-comments__date">
                                <?php echo esc_html(human_time_diff(strtotime($comment->comment_date), current_time('timestamp'))) . ' ago'; ?>
                            </div>
                            <div class="widget-comments__name">
                                On <a href="<?php echo esc_url($post_url); ?>" title="<?php echo esc_attr($post_title); ?>">
                                    <?php echo esc_html($post_title); ?>
                                </a>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
<?php }
add_shortcode('widget_latest_comments', 'widget_latest_comments');
