<?php
/**
 * Template for displaying archive pages for Products.
 */

defined( 'ABSPATH' ) || exit;

// فراخوانی هدر قالب
get_header();

// Set default values for pagination
$current_page = get_query_var('paged') ? get_query_var('paged') : 1;
$posts_per_page =  15; // Get the number of posts per page (or set to 10)

// Query for the products
$args = array(
    'post_type' => 'products',
    'posts_per_page' => $posts_per_page,
    'paged' => $current_page,
);

$query = new WP_Query( $args );

$total_products = wp_count_posts( 'products' )->publish;

?>
<!-- site__body -->
<div class="site__body">
    <div class="block-header block-header--has-breadcrumb block-header--has-title">

        <div class="container">
            <div class="block-header__body">
                <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                    <?php if (function_exists('deodar_breadcrumbs')) deodar_breadcrumbs(); ?>
                </nav>
                <h1 class="block-header__title">
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
    <div class="container">
        <?php get_template_part('templates/components/product-category-list') ?>
        <div class="block-space block-space--layout--divider-nl"></div>

        <div class="block-split__row row no-gutters">
            <div class="block-split__item block-split__item-content w-100">
                <div class="block">
                    <?php if (  $query->have_posts() ) : ?>

                    <div class="products-view">
                        <div class="products-view__options view-options view-options--offcanvas--always">
                            <div class="view-options__body">
                                <div class="view-options__layout layout-switcher">
                                    <div class="layout-switcher__list">
                                        <button type="button" class="layout-switcher__button layout-switcher__button--active" data-layout="grid" data-with-features="false">
                                            <svg width="16" height="16">
                                                <path d="M15.2,16H9.8C9.4,16,9,15.6,9,15.2V9.8C9,9.4,9.4,9,9.8,9h5.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
                                                H9.8C9.4,7,9,6.6,9,6.2V0.8C9,0.4,9.4,0,9.8,0h5.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z M6.2,16H0.8
                                                C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h5.4C6.6,9,7,9.4,7,9.8v5.4C7,15.6,6.6,16,6.2,16z M6.2,7H0.8C0.4,7,0,6.6,0,6.2V0.8
                                                C0,0.4,0.4,0,0.8,0h5.4C6.6,0,7,0.4,7,0.8v5.4C7,6.6,6.6,7,6.2,7z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="layout-switcher__button" data-layout="grid" data-with-features="true">
                                            <svg width="16" height="16">
                                                <path d="M16,0.8v14.4c0,0.4-0.4,0.8-0.8,0.8H9.8C9.4,16,9,15.6,9,15.2V0.8C9,0.4,9.4,0,9.8,0l5.4,0C15.6,0,16,0.4,16,0.8z M7,0.8
                                                    v14.4C7,15.6,6.6,16,6.2,16H0.8C0.4,16,0,15.6,0,15.2L0,0.8C0,0.4,0.4,0,0.8,0l5.4,0C6.6,0,7,0.4,7,0.8z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="view-options__legend">
                                    نمایش <?php echo $posts_per_page ?> محصول از <?php echo $total_products ?> محصول
                                </div>

                            </div>
                        </div>

                        <div class="products-view__list products-list products-list--grid--5" data-layout="grid" data-with-features="false">
                            <div class="products-list__content">
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="products-list__item ">
                                    <div class="product-card">
                                        <div class="product-card__image">
                                            <div class="image image--type--product">
                                                <a href="<?php the_permalink(); ?>" class="image__body">
                                                    <?php if ( has_post_thumbnail() ) : ?>
                                                        <?php the_post_thumbnail( 'product-thumb', array( 'class' => 'image__tag' ) ); ?>
                                                    <?php else : ?>
                                                        <img class="image__tag" src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-1-245x245.jpg" alt="<?php the_title(); ?>">
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__meta"><span class="product-card__meta-title">کد کالا:</span> <?php echo get_post_meta(get_the_ID(), '_deodar_sku', true); ?></div>
                                            <div class="product-card__name">
                                                <div>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php
                                                            // Get the product title dynamically
                                                            echo get_the_title();
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-card__features">
                                                <ul>
                                                    <li>برند: <?php echo get_post_meta(get_the_ID(), '_deodar_brand', true) ?: 'نامشخص'; ?></li>
                                                    <li>کشور سازنده: <?php echo get_post_meta(get_the_ID(), '_deodar_country', true) ?: 'نامشخص'; ?></li>
                                                    <li>کد فروشنده: <?php echo get_post_meta(get_the_ID(), '_deodar_vendor_code', true) ?: 'نامشخص'; ?></li>
                                                    <li>دسته بندی: 
                                                        <?php 
                                                            $terms = get_the_terms(get_the_ID(), 'product_category');
                                                            if ($terms && !is_wp_error($terms)) :
                                                                $categories = [];
                                                                foreach ($terms as $term) {
                                                                    $categories[] = $term->name;
                                                                }
                                                                echo implode(', ', $categories);
                                                            else :
                                                                echo 'دسته بندی نشده';
                                                            endif;
                                                        ?>
                                                    </li>
                                                    <li>تگ: 
                                                        <?php 
                                                            $tags = get_the_terms(get_the_ID(), 'post_tag');
                                                            if ($tags && !is_wp_error($tags)) :
                                                                $tag_names = [];
                                                                foreach ($tags as $tag) {
                                                                    $tag_names[] = $tag->name;
                                                                }
                                                                echo implode(', ', $tag_names);
                                                            else :
                                                                echo 'تگی ثبت نشده';
                                                            endif;
                                                        ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="products-view__pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <?php
                                    // Generate pagination links
                                    echo paginate_links( array(
                                        'total' => $query->max_num_pages,
                                        'current' => $current_page,
                                        'mid_size' => 1,
                                        'prev_text' => '<span class="page-link__arrow page-link__arrow--left" aria-hidden="true"><svg width="7" height="11"><path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" /></svg></span>',
                                        'next_text' => '<span class="page-link__arrow page-link__arrow--right" aria-hidden="true"><svg width="7" height="11"><path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></span>',
                                    ) );
                                    ?>
                                </ul>
                            </nav>

                            <div class="products-view__pagination-legend">
                                <p> تعداد کل محصولات <?php echo $total_products; ?> </p>
                            </div>
                        </div>
                        <?php else : ?>
                            <p><?php esc_html_e( 'No products found.', 'electroimport' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
</div>


<?php
// فراخوانی فوتر قالب
get_footer();
?>
