<?php 
get_header();
?>
        <!-- site__body -->
        <div class="site__body">
            <div class="block-header block-header--has-breadcrumb">
                <div class="container">
                    <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                        <?php if (function_exists('deodar_breadcrumbs')) deodar_breadcrumbs(); ?>
                    </nav>
                </div>
            </div>
            <div class="block-split">
                <div class="container">
                    <div class="block-split__row row no-gutters">
                        <div class="block-split__item block-split__item-content col-auto">
                            <div class="product product--layout--full">
                                <div class="product__body">
                                    <div class="product__card product__card--one"></div>
                                    <div class="product__card product__card--two"></div>
                                    <?php get_template_part('templates/product/product-gallery'); ?>
                                    <?php get_template_part('templates/product/product-info-header'); ?>
                                    <?php get_template_part('templates/product/product-main'); ?>
                                    <?php get_template_part('templates/product/product-info'); ?>
                                    <?php get_template_part('templates/product/product-tabs'); ?>

                                </div>
                            </div>
                            <div class="block-space block-space--layout--divider-nl"></div>
                            <?php get_template_part('templates/product/related-products'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
        <!-- site__body / end -->
         
        
        <?php get_footer(); ?>
