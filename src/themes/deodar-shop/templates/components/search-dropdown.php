<div class="search__dropdown search__dropdown--suggestions suggestions">
    <!-- Blog Posts Section -->
    <div class="suggestions__group">
        <div class="suggestions__group-title">Blog Posts</div>
        <div class="suggestions__group-content">
            <?php
            $recent_posts = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 5, // Adjust the number of posts
            ));

            if ($recent_posts->have_posts()) {
                while ($recent_posts->have_posts()) {
                    $recent_posts->the_post();
                    ?>
                    <a class="suggestions__item suggestions__product" href="<?php the_permalink(); ?>">
                        <div class="suggestions__product-image image image--type--product">
                            <div class="image__body">
                                <?php if (has_post_thumbnail()) { ?>
                                    <img class="image__tag" src="<?php the_post_thumbnail_url([40, 40]); ?>" alt="<?php the_title(); ?>">
                                <?php } else { ?>
                                    <img class="image__tag" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-thumbnail.jpg'); ?>" alt="Default Thumbnail">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="suggestions__product-info">
                            <div class="suggestions__product-name"><?php the_title(); ?></div>
                        </div>
                    </a>
                    <?php
                }
            } else {
                echo '<p>No recent posts found.</p>';
            }

            wp_reset_postdata();
            ?>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="suggestions__group">
        <div class="suggestions__group-title">Categories</div>
        <div class="suggestions__group-content">
            <?php
            $categories = get_categories(array(
                'orderby' => 'name',
                'order'   => 'ASC',
            ));

            foreach ($categories as $category) { ?>
                <a class="suggestions__item suggestions__category" href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                    <?php echo esc_html($category->name); ?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
