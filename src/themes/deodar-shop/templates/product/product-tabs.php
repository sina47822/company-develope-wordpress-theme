<div class="product__tabs product-tabs product-tabs--layout--full">
    <ul class="product-tabs__list">
        <li class="product-tabs__item product-tabs__item--active"><a href="#product-tab-description">Description</a></li>
        <li class="product-tabs__item"><a href="#product-tab-specification">Specification</a></li>
        <li class="product-tabs__item">
            <a href="#product-tab-reviews">
                Reviews
                <span class="product-tabs__item-counter">3</span>
            </a>
        </li>
    </ul>
    <div class="product-tabs__content">
        <div class="product-tabs__pane product-tabs__pane--active" id="product-tab-description">
            <div class="typography">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="product-tabs__pane" id="product-tab-specification">
            <div class="spec">
                <?php 
                // Fetch the product specifications (assuming this is within the loop)
                $product_specifications = get_post_meta( get_the_ID(), '_deodar_product_specifications', true );

                // Check if there are specifications
                if ( !empty( $product_specifications ) ) : ?>
                    <div class="spec__section">
                        <h4 class="spec__section-title">مشخصات محصول</h4>
                        <?php foreach ( $product_specifications as $specification ) : ?>
                            <div class="spec__row">
                                <div class="spec__name"><?php echo esc_html( $specification['spec_name'] ); ?></div>
                                <div class="spec__value"><?php echo esc_html( $specification['spec_value'] ); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="spec__disclaimer">
                <?php 
                // Fetch the product specifications (assuming this is within the loop)
                $product_text_specifications = get_post_meta( get_the_ID(), '_deodar_product_text_specification', true );

                // Check if there are specifications
                if ( !empty( $product_text_specifications ) ) : ?>
                    <?php echo esc_html( $product_text_specifications ); ?>
                <?php else: ?>
                    متنی وجود ندارد
                <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="product-tabs__pane" id="product-tab-reviews">
            <div class="reviews-view">
                <div class="reviews-view__list">
                    <div class="reviews-list">
                        <?php comments_template(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>