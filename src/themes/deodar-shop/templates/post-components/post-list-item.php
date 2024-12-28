<?php
// Get the post ID
$post_id = get_the_ID(); // You can replace this with a specific post ID if needed

// Get the post thumbnail (featured image)
$post_thumbnail = get_the_post_thumbnail_url($post_id, 'full');

// Define a default image URL
$default_image = get_template_directory_uri() . '/assets/images/posts/post-1-730x485.jpg';

// Get post category
$categories = get_the_category($post_id);
$category_name = !empty($categories) ? esc_html($categories[0]->name) : 'دسته‌بندی نشده'; // Default to "Uncategorized"

// Get post title
$post_title = get_the_title($post_id);

// Get post excerpt or custom content
$post_excerpt = get_the_excerpt($post_id);

// Get post URL
$post_url = get_permalink($post_id);

// Get post author and date
$post_author = get_the_author_meta('display_name', get_post_field('post_author', $post_id));
$post_date = get_the_date('j F Y', $post_id); // Format as "19 October 2019" in Persian
?>

<div class="posts-list__item">
    <div class="post-card post-card--layout--list">
        <div class="post-card__image">
            <a href="<?php echo esc_url($post_url); ?>">
                <img src="<?php echo $post_thumbnail ? esc_url($post_thumbnail) : esc_url($default_image); ?>" alt="<?php echo esc_attr($post_title); ?>">
            </a>
        </div>
        <div class="post-card__content">
            <div class="post-card__category">
                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>"><?php echo $category_name; ?></a>
            </div>
            <div class="post-card__title">
                <h2><a href="<?php echo esc_url($post_url); ?>"><?php echo $post_title; ?></a></h2>
            </div>
            <div class="post-card__date">
                توسط <a href="<?php echo esc_url(get_author_posts_url(get_post_field('post_author', $post_id))); ?>"><?php echo $post_author; ?></a> در <?php echo $post_date; ?>
            </div>
            <div class="post-card__excerpt">
                <div class="typography">
                    <?php echo $post_excerpt; ?>
                </div>
            </div>
            <div class="post-card__more">
                <a href="<?php echo esc_url($post_url); ?>" class="btn btn-secondary btn-sm">ادامه مطلب</a>
            </div>
        </div>
    </div>
</div>
