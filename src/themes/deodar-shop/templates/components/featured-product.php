
<div class="block block-products-carousel" data-layout="grid-5">
    <div class="container">
        <div class="section-header">
            <div class="section-header__body d-flex align-items-center">
                <h2 class="section-header__title">محصولات ویژه</h2>
                <div class="section-header__spring"></div>
                <ul class="section-header__groups list-unstyled mb-0 d-flex flex-wrap">
                    <li class="section-header__groups-item me-2">
                        <a href="<?php echo get_post_type_archive_link('products'); ?>" class="section-header__groups-button section-header__groups-button--active">همه</a>
                    </li>
                    <?php
                    // دریافت دسته‌بندی‌های taxonomy 'product_category'
                    $categories = get_terms( array(
                        'taxonomy'   => 'product_category',
                        'orderby'    => 'name',
                        'order'      => 'ASC',
                        'hide_empty' => true,
                    ) );

                    if ( $categories && ! is_wp_error( $categories ) ) {
                        foreach ( $categories as $category ) {
                            ?>
                            <li class="section-header__groups-item me-2">
                                <a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="section-header__groups-button">
                                    <?php echo esc_html( $category->name ); ?>
                                </a>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="owl-carousel">
            <?php
                // Query for 'products' post type
                $args = array(
                    'post_type'      => 'products',
                    'posts_per_page' => -1, // Show all posts
                    'post_status'    => 'publish',
                );
                $products_query = new WP_Query( $args );

                if ( $products_query->have_posts() ) {
                    while ( $products_query->have_posts() ) {
                        $products_query->the_post();
            ?>
                <?php get_template_part('templates/components/product-carousel-item') ?>
            <?php
                    }
                    wp_reset_postdata();
                }
            ?>
        </div>
    </div>
</div>

