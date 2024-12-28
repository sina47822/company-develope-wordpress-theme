<div class="product__header">
    <h1 class="product__title">
        <?php
            // Get the product title dynamically
            echo get_the_title();
        ?>
    </h1>
    <div class="product__subtitle">
        <div class="product__rating">
            <div class="product__rating-stars">
                <div class="rating">
                    <div class="rating__body">
                        <div class="rating__star rating__star--active"></div>
                        <div class="rating__star rating__star--active"></div>
                        <div class="rating__star rating__star--active"></div>
                        <div class="rating__star rating__star--active"></div>
                        <div class="rating__star rating__star--active"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="status-badge status-badge--style--success product__fit status-badge--has-icon status-badge--has-text">
            <div class="status-badge__body">
                <div class="status-badge__icon"><svg width="13" height="13">
                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                    </svg>
                </div>
                <div class="status-badge__text">                    
                    <?php
                    $categories = get_the_category();

                    if ($categories) {
                        foreach ($categories as $category) {
                            // Display the category name
                            echo esc_html($category->name) . ' ';
                        }
                    } else {
                        echo 'No categories assigned';
                    }
                    ?>
                </div>
                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
            </div>
        </div>
    </div>
</div>