<?php
get_header(); // فراخوانی هدر سایت
?>
<div class="site__body">
    <div class="block-header block-header--has-breadcrumb block-header--has-title">
        <div class="container">
            <div class="block-header__body">
                <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                    <?php if (function_exists('deodar_breadcrumbs')) deodar_breadcrumbs(); ?>
                </nav>
                <h1 class="block-header__title">محصولات 
                    <?php
                    // نمایش عنوان صفحه
                    if ( is_tax( 'product_category' ) ) {
                        single_term_title();
                    } elseif ( is_post_type_archive( 'products' ) ) {
                        post_type_archive_title();
                    } else {
                        the_archive_title();
                    }
                    ?>
                </h1>
            </div>
        </div>
    </div>
    
    <div class="block block-products-carousel" data-layout="grid-5">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__body d-flex align-items-center">
                        <div class="section-header__spring"></div>
                            <div class="section-header__description">
                                <?php
                                // نمایش توضیحات دسته‌بندی در صورت وجود
                                $term_description = term_description();
                                if ( ! empty( $term_description ) ) {
                                    echo '<p>' . esc_html( $term_description ) . '</p>';
                                }
                                ?>
                            </div>
                    </div>
                </div>

                <div class="owl-carousel">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            ?>
                        <?php get_template_part('templates/components/product-carousel-item') ?>

                            <?php
                        endwhile;
                    else :
                        ?>
                        <p><?php esc_html_e( 'هیچ محصولی یافت نشد.', 'your-text-domain' ); ?></p>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="block-space block-space--layout--divider-nl"></div>
    <?php get_template_part('templates/components/product-category-list') ?>
</div>
<?php
get_footer(); // فراخوانی فوتر سایت
?>
