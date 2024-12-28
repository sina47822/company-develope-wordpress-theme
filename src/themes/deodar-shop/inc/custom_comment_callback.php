<?php

// Define custom comment callback
function custom_comment_callback($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li class="comments-list__item">
        <div class="comment">
            <div class="comment__body">
                <div class="comment__avatar">
                    <?php echo get_avatar($comment, 38); // Avatar size ?>
                </div>
                <div class="comment__meta">
                    <div class="comment__author">
                        <?php comment_author(); ?>
                    </div>
                    <div class="comment__date">
                        <?php comment_date(); ?>
                    </div>
                </div>
                <div class="comment__reply">
                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                </div>
                <div class="comment__content typography">
                    <?php comment_text(); ?>
                </div>
            </div>
        </div>
    </li>
    <?php
}
