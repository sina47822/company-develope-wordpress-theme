<?php
// Hook for AJAX requests
function filter_products_by_category() {
    // Get the category ID from the request
    $category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 'all';

    // Set up the arguments for the WP_Query for the 'products' post type
    $args = array(
        'post_type' => 'products', // Custom post type 'products'
        'posts_per_page' => -1,    // You can limit the number of posts
        'post_status' => 'publish',
    );

    // If a specific category is selected, filter by that category
    if ($category_id !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'product_cat', // Custom taxonomy, replace with your actual taxonomy if needed
                'field' => 'id',
                'terms' => $category_id,
                'operator' => 'IN',
            ),
        );
    }

    // Query the products
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // Get product data
            $product_image = get_the_post_thumbnail_url() ?: get_template_directory_uri() . '/assets/images/products/product-1-245x245.jpg';  // Default image
            $product_sku = get_post_meta(get_the_ID(), 'sku', true);  // Assuming SKU is stored under 'sku' meta field
            $product_link = get_permalink();

            // Price Handling (Assuming price is stored under 'price' custom field)
            $product_price = get_post_meta(get_the_ID(), 'price', true); 

            // If price is not available, fallback to a default price
            $display_price = $product_price ? $product_price : 'Not Available';
            ?>
            <div class="block-products-carousel__column">
                <div class="block-products-carousel__cell">
                    <div class="product-card product-card--layout--grid">
                        <div class="product-card__actions-list">
                            <!-- Add actions like quick view, wishlist, compare -->
                        </div>
                        <div class="product-card__image">
                            <div class="image image--type--product">
                                <a href="<?php echo esc_url($product_link); ?>" class="image__body">
                                    <img class="image__tag" src="<?php echo esc_url($product_image); ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="product-card__info">
                            <div class="product-card__meta"><span class="product-card__meta-title">کد محصول:</span> <?php echo esc_html($product_sku); ?></div>
                            <div class="product-card__name">
                                <a href="<?php echo esc_url($product_link); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="product-card__price">
                                <span class="product-card__price-value"><?php echo number_format($display_price); ?> تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
    else :
        echo '<p>هیچ محصولی برای این دسته‌بندی یافت نشد.</p>';
    endif;

    wp_die(); // This is required to terminate the request properly.
}

add_action('wp_ajax_filter_products_by_category', 'filter_products_by_category');
add_action('wp_ajax_nopriv_filter_products_by_category', 'filter_products_by_category');

