<div class="block">
    <div class="categories-list categories-list--layout--columns-4-sidebar">
        <ul class="categories-list__body">
            <?php
            $queried_category = get_queried_object();

            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => 8,
                'cat' => $queried_category->term_id, // Fetch posts from the current category
            );
            
            $blog_posts = new WP_Query($query_args);

            if ($blog_posts->have_posts()) {
                while ($blog_posts->have_posts()) {
                    $blog_posts->the_post();
                    ?>
                    <li class="categories-list__item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image image--type--category">
                                <div class="image__body">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img class="image__tag" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                                    <?php } else { ?>
                                        <img class="image__tag" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-image.jpg'); ?>" alt="Default Image">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="categories-list__item-name"><?php the_title(); ?></div>
                        </a>
                        <div class="categories-list__item-products">
                            <?php 
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                foreach ($categories as $category) {
                                    echo '<span class="post-category">' . esc_html($category->name) . '</span> ';
                                }
                            }
                            ?>
                        </div>
                        <div class="categories-list__item-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></div>
                    </li>
                    <li class="categories-list__divider"></li>
                    <?php
                }
            } else {
                echo '<p>No blog posts found in this category.</p>';
            }

            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
