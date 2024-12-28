<div class="block-products-carousel__column">
    <div class="block-products-carousel__cell">
        <div class="product-card product-card--layout--grid">
            <div class="product-card__image">
                <div class="image image--type--product">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>" class="image__body">
                            <img class="image__tag" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="product-card__info">
                <div class="product-card__name mb-2">
                    <div>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>