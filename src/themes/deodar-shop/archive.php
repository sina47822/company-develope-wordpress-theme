<?php 
get_header();
?>
        <!-- site__body -->
        <div class="site__body">
            <div class="block-header block-header--has-breadcrumb block-header--has-title">
                <div class="container">
                    <div class="block-header__body">
                        <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                            <?php if (function_exists('deodar_breadcrumbs')) deodar_breadcrumbs(); ?>
                        </nav>
                        <h1 class="block-header__title">
                                <?php
                                // Get the current category object
                                $current_category = get_queried_object();

                                // Check if the current object is a category
                                if (is_category() && isset($current_category->name)) {
                                    // Get the category name
                                    $category_name = $current_category->name;
                                    echo esc_html($category_name);
                                } else {
                                    echo 'No category selected.';
                                }
                                ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="block block-split block-split--has-sidebar">
                <div class="container">
                    <div class="block-split__row row ">
                        <!-- main content -->
                        <div class="block-split__item block-split__item-content col-9">
                            <?php get_template_part('templates/components/category-list'); ?>
                            <div class="block-space block-space--layout--divider-nl"></div>
                            <?php get_template_part('templates/parts/blog-posts-grid-8'); ?>
                            <!-- category list item -->
                        </div>
                        <!-- end main content -->
                        <!-- Sidebar Widgets -->
                        <div class="blog-view__item blog-view__item-sidebar col-auto">
                            <?php
                            echo do_shortcode('[widget_search]');
                            echo do_shortcode('[widget_about_blog]');
                            echo do_shortcode('[widget_categories]');
                            echo do_shortcode('[widget_latest_posts]');
                            echo do_shortcode('[widget_tags]');
                            echo do_shortcode('[widget_latest_products]');
                            echo do_shortcode('[widget_newsletter]');
                            echo do_shortcode('[widget_latest_comments]');
                            ?>
                        </div>
                        <!-- end sidebar -->
                    </div>
                    <div class="block-space block-space--layout--before-footer"></div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
<?php get_footer(); ?>
