<?php
// Exit if accessed directly or if comments are not allowed
if (post_password_required() || !comments_open()) {
    return;
}
?>

<div id="blog-comment">

    <!-- Comments Section Title -->
    <h4>نظرات (<?php echo get_comments_number(); ?>)</h4>
    <div class="spacer-half"></div>

    <?php if (have_comments()) : ?>
        <ol class="comments-list comments-list--level--0 comments-view__list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
                'callback'    => 'custom_comment_callback', // Custom callback for styling
            ));
            ?>
        </ol>

        <?php
        // Comments Pagination
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
            ?>
            <nav class="comment-navigation" role="navigation">
                <div class="nav-previous"><?php previous_comments_link('نظرات قدیمی‌تر'); ?></div>
                <div class="nav-next"><?php next_comments_link('نظرات جدیدتر'); ?></div>
            </nav>
        <?php endif; ?>
    <?php else : ?>
        <p>هنوز نظری ارسال نشده است. شما اولین نفر باشید!</p>
    <?php endif; ?>

    <div class="spacer-single"></div>

    <!-- Comment Form -->
    <div id="comment-form-wrapper">
        <h4>ارسال نظر</h4>
        <div class="comment_form_holder">
            <?php
            comment_form(array(
                'class_form'           => 'comment-form', // Add custom class for form
                'title_reply'          => '',
                'title_reply_to'       => 'پاسخ به %s',
                'cancel_reply_link'    => '[لغو پاسخ]',
                'label_submit'         => 'ارسال',
                'comment_field'        => '
                    <label>پیام <span class="req">*</span></label>
                    <textarea id="comment" name="comment" cols="45" rows="8" class="form-control no-border" required></textarea>',
                'fields'               => array(
                    'author' => '
                        <label>نام</label>
                        <input id="author" name="author" type="text" class="form-control no-border" required>',
                    'email'  => '
                        <label>ایمیل <span class="req">*</span></label>
                        <input id="email" name="email" type="email" class="form-control no-border" required>',
                    'url'    => '',
                ),
                'submit_field'         => '<p id="btnsubmit">%1$s %2$s</p>',
                'submit_button'        => '<input type="submit" id="send" value="%4$s" class="btn-line w-100px">',
            ));
            ?>
        </div>
    </div>

</div>
