<div class="product__main">
    <div class="product__excerpt">
        <?php
        // Use the WordPress native excerpt function
        if (has_excerpt()) {
            the_excerpt(); // Output the excerpt for the current product
        } else {
            // Fallback to a trimmed version of the content
            echo wp_trim_words(get_the_content(), 30, '...');
        }
        ?>
    </div>

    <div class="product__features">
        <div class="product__features-title">Key Features:</div>
        <ul>
            <?php
            // Loop through repeatable fields for product specifications
            $product_specs = get_post_meta(get_the_ID(), '_deodar_product_specifications', true);
            if ($product_specs) {
                foreach ($product_specs as $spec) {
                    // Get the specification name and value
                    $spec_name = isset($spec['spec_name']) ? esc_html($spec['spec_name']) : '';
                    $spec_value = isset($spec['spec_value']) ? esc_html($spec['spec_value']) : '';
                    
                    // Display specification name and value
                    if ($spec_name && $spec_value) {
                        echo '<li>' . $spec_name . ': <span>' . $spec_value . '</span></li>';
                    }
                }
            } else {
                echo '<li>No specifications available.</li>';
            }
            ?>
        </ul>
        <!-- <div class="product__features-link">
            <a href="#">See Full Specification</a>
        </div> -->
    </div>
</div>