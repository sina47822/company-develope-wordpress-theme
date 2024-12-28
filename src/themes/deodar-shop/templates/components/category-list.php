<div class="block block-brands block-brands--layout--columns-7-sidebar">
    <div class="container">
    <ul class="block-brands__list">
        <?php
        $categories = get_categories(array(
            'hide_empty' => false,
        ));

        if (!empty($categories)) {
            foreach ($categories as $category) {
                // Use $category->term_id to get the image associated with this category
                $image_id = get_term_meta($category->term_id, 'category_image', true);
                
                // If an image ID exists for the category, get the URL of the image
                if ($image_id) {
                    $image_url = wp_get_attachment_url($image_id);
                } else {
                    // Fallback to a default image if no image is set
                    $image_url = get_template_directory_uri() . '/assets/images/logo.png';
                }
                ?>
                <li class="block-brands__item">
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="block-brands__item-link">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>">
                        <span class="block-brands__item-name">
                            <?php echo esc_html($category->name); ?>
                        </span>
                    </a>
                </li>
                <li class="block-brands__divider" role="presentation"></li>
                <?php
            }
        } else {
            echo '<p>No categories available. Please add some categories.</p>';
        }
        ?>

    </ul>
    </div>
</div>