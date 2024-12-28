<?php get_header(); ?>
<!-- site__body -->
<div class="site__body">
    <div class="block-header block-header--has-breadcrumb block-header--has-title">
        <div class="container">
            <div class="block-header__body">
                <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                    <?php if (function_exists('deodar_breadcrumbs')) deodar_breadcrumbs(); ?>
                </nav>
                <h1 class="block-header__title">مقالات</h1>
            </div>
        </div>
    </div>
    <div class="block blog-view blog-view--layout--list">
        <div class="container">
        <?php get_template_part('templates/components/category-list') ?>

            <div class="blog-view__body">
                <!-- Main Posts List -->

                <div class="blog-view__item blog-view__item-posts">
                    <div class="block posts-view">
                        <div class="posts-view__list posts-list posts-list--layout--list">
                            <div class="posts-list__body">
                                <?php
                                if (have_posts()) :
                                    while (have_posts()) : the_post();
                                        get_template_part('templates/post-components/post-list-item');
                                    endwhile;
                                else :
                                    echo '<p>هیچ مقاله‌ای یافت نشد.</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                        <?php
                        // Pagination
                        get_template_part('templates/post-components/post-pagination');
                        ?>
                    </div>
                </div>

                <!-- Sidebar Widgets -->
                <div class="blog-view__item blog-view__item-sidebar">
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
            </div>
        </div>
    </div>

    <div class="block-space block-space--layout--before-footer"></div>
</div>
<!-- site__body / end -->

<?php get_footer(); ?>
