<div class="block block-products-carousel" data-layout="grid-5">
    <div class="container">
        <div class="section-header">
            <div class="section-header__body">
                <h2 class="section-header__title">Related Products</h2>
                <div class="section-header__spring"></div>
                <div class="section-header__arrows">
                    <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                        <button class="arrow__button" type="button">
                            <svg width="7" height="11">
                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                            </svg>
                        </button>
                    </div>
                    <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                        <button class="arrow__button" type="button">
                            <svg width="7" height="11">
                                <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="section-header__divider"></div>
            </div>
        </div>
        <div class="block-products-carousel__carousel">
            <div class="block-products-carousel__carousel-loader"></div>
            <div class="owl-carousel">
            <?php
                    // Get the current post's categories
                    $categories = get_the_terms(get_the_ID(), 'category'); // Use 'category' or the appropriate taxonomy slug
                    if ($categories && !is_wp_error($categories)) {
                        $category_ids = wp_list_pluck($categories, 'term_id'); // Get only category IDs

                        // Get the number of products available
                        $total_products = new WP_Query(array(
                            'post_type' => 'products', // Your custom post type for products
                            'posts_per_page' => -1,    // Get all products
                            'fields' => 'ids',         // Get only the IDs to count products
                        ));
                        $product_count = $total_products->post_count; // Get the total number of products

                        // WP_Query for displaying products in carousel
                        $args = array(
                            'post_type' => 'products',   // Custom post type for products
                            'posts_per_page' => $product_count, // Fetch all products available
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category', // Use 'category' or the appropriate taxonomy slug
                                    'field'    => 'id',
                                    'terms'    => $category_ids, // Filter by category
                                    'operator' => 'IN',
                                ),
                            ),
                            'post__not_in' => array(get_the_ID()), // Exclude the current post
                        );
                        $related_products = new WP_Query($args);
                        if ($related_products->have_posts()) :
                            while ($related_products->have_posts()) : $related_products->the_post();
                ?>
                    <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card product-card--layout--grid">
                                <div class="product-card__actions-list">
                                    <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                        <svg width="16" height="16">
                                            <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
                                                M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                        </svg>
                                    </button>
                                    <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                        <svg width="16" height="16">
                                            <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
                                                l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                        </svg>
                                    </button>
                                    <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                        <svg width="16" height="16">
                                            <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                            <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                            <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="product-card__image">
                                    <div class="image image--type--product">
                                    <a href="<?php the_permalink(); ?>" class="image__body">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', ['class' => 'image__tag']); ?>
                                        <?php else : ?>
                                            <img class="image__tag" src="default-product-image.jpg" alt="Default image">
                                        <?php endif; ?>
                                    </a>
                                    </div>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> <?php echo get_post_meta(get_the_ID(), 'product_sku', true); ?></div>
                                    <div class="product-card__name">
                                        <div>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card__footer">
                                <div class="product-card__price product-card__price--current">
                                    <?php
                                        // Get price availability and stock status from the custom meta box
                                        $price_available = get_post_meta(get_the_ID(), '_deodar_price_available', true); // 'yes' or 'no'
                                        $in_stock = get_post_meta(get_the_ID(), '_deodar_in_stock', true); // true or false for stock availability

                                        // Check if price is available and product is in stock
                                        if ($price_available === 'yes' && $in_stock) {
                                            // Display "Add to Cart" button if price is available and product is in stock
                                            echo '<button class="btn btn-primary btn-lg btn-block">افزودن به سبد خرید</button>';
                                        } else {
                                            // If price is not available or product is out of stock, show "Call for Price"
                                            $call_for_price = get_post_meta(get_the_ID(), '_deodar_call_for_price', true);
                                            echo '<button class="btn btn-secondary btn-lg btn-block">' . esc_html($call_for_price) . '</button>';
                                        }
                                    ?>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); endif; } ?>
            </div>
        </div>
    </div>
</div>
