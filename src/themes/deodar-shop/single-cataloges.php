<?php 
get_header();
?>

<div class="site__body">
    <div class="block-header block-header--has-breadcrumb block-header--has-title">
        <div class="container">
            <div class="block-header__body">
                <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                    <?php if (function_exists('deodar_breadcrumbs')) deodar_breadcrumbs(); ?>
                </nav>
                <h1 class="block-header__title">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="block-content">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    // دریافت لینک دانلود از فیلد سفارشی
                    $prefix = '_deodar_';
                    $catalog_download_link = get_post_meta(get_the_ID(), $prefix . 'cataloge_download_link', true);
                    $manual_download_link  = get_post_meta(get_the_ID(), $prefix . 'manual_download_link', true);
                    ?>
                    <div class="card bg-light text-dark mb-4">
                        <div class="card-body">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-text"><?php the_content(); ?></p>
                            <p class="card-text">
                                <small class="text-muted jalali-date" data-gregorian="<?php echo get_the_date('Y-m-d'); ?>">
                                    <?php echo get_the_date(); ?>
                                </small>
                            </p>
                            <div class="mt-3">
                                <?php if ( $catalog_download_link ) : ?>
                                    <a href="<?php echo esc_url($catalog_download_link); ?>" class="btn btn-primary me-2" target="_blank">دانلود کاتالوگ</a>
                                <?php else : ?>
                                    <span>لینک دانلود کاتالوگ موجود نیست</span>
                                <?php endif; ?>

                                <?php if ( $manual_download_link ) : ?>
                                    <a href="<?php echo esc_url($manual_download_link); ?>" class="btn btn-secondary" target="_blank">دانلود منوال</a>
                                <?php else : ?>
                                    <span>لینک دانلود منوال موجود نیست</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
