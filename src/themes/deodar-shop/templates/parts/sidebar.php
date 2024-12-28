<div class="block-split__item block-split__item-sidebar col-auto">
                            <!-- category and article and product based on category -->
                            <div class="card widget widget-categories-list">
                                <div class="widget-categories-list__body">
                                    <ul class="widget-categories-list__root">
                                        <?php
                                        $categories = get_categories(array(
                                            'hide_empty' => false,
                                        ));

                                        foreach ($categories as $category) {
                                            ?>
                                            <li class="widget-categories-list__root-item">
                                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="widget-categories-list__root-link">
                                                    <?php echo esc_html($category->name); ?>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- latest artiles -->
                            <div class="card widget widget-articles">
                                <div class="widget__header">
                                    <h4>Latest Articles</h4>
                                </div>
                                <div class="widget-articles__list">
                                    <?php
                                    $recent_posts = new WP_Query(array(
                                        'posts_per_page' => 5, // Adjust the number of articles
                                        'post_type' => 'post',
                                    ));

                                    if ($recent_posts->have_posts()) {
                                        while ($recent_posts->have_posts()) {
                                            $recent_posts->the_post();
                                            ?>
                                            <div class="widget-articles__item">
                                                <div class="widget-articles__image">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail('thumbnail', array('class' => 'widget-articles__thumbnail')); ?>
                                                    </a>
                                                </div>
                                                <div class="widget-articles__info">
                                                    <div class="widget-articles__title">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo '<p>No articles found.</p>';
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>