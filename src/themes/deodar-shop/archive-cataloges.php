<?php
/**
 * قالب آرشیو برای پست تایپ سفارشی کاتالوگ‌ها
 */

get_header(); ?>

<div class="site__body">
    <div class="block-header block-header--has-breadcrumb block-header--has-title">
        <div class="container">
            <div class="block-header__body">
                <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                    <?php if (function_exists('deodar_breadcrumbs')) deodar_breadcrumbs(); ?>
                </nav>
                <h1 class="block-header__title">
                    آرشیو کاتالوگ‌ها
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="block-content">
            <?php
            if ( have_posts() ) :
                ?>
                <div class="table-responsive">
                    <table class="table table-dark table-hover cataloges-table">
                        <thead class="thead-light">
                            <tr>
                                <th>عنوان</th>
                                <th>تاریخ انتشار</th>
                                <th>دانلود کاتالوگ</th>
                                <th>دانلود منوال</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ( have_posts() ) : the_post();
                                // دریافت لینک دانلود از فیلد سفارشی
                                $cataloge_download_link = get_post_meta(get_the_ID(), '_deodar_cataloge_download_link', true); // اگر از ACF استفاده می‌کنید
                                $manual_download_link = get_post_meta(get_the_ID(), '_deodar_manual_download_link', true); // اگر از ACF استفاده می‌کنید

                                ?>
                                <tr>
                                    <td><?php the_title(); ?></td>
                                    <td class="jalali-date" data-gregorian="<?php echo get_the_date('Y-m-d'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </td>
                                    <td>
                                        <?php if ( $cataloge_download_link ) : ?>
                                            <a href="<?php echo esc_url($cataloge_download_link); ?>" class="btn btn-primary" target="_blank">دانلود</a>
                                        <?php else : ?>
                                            <span>لینک دانلود موجود نیست</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ( $manual_download_link ) : ?>
                                            <a href="<?php echo esc_url($manual_download_link); ?>" class="btn btn-primary" target="_blank">دانلود</a>
                                        <?php else : ?>
                                            <span>لینک دانلود موجود نیست</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
                // نمایش صفحه‌بندی
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('« قبلی'),
                    'next_text' => __('بعدی »'),
                ));
            else :
                echo '<p>هیچ کاتالوگی یافت نشد.</p>';
            endif;
            ?>
        </div>
    </div>
</div>

</div>
<script>
    jQuery(document).ready(function($) {
        // فعال‌سازی پشتیبانی از جلالی در moment.js
        moment.loadPersian({usePersianDigits: true});

        // تبدیل تاریخ‌های گرگوری به جلالی
        $('.jalali-date').each(function() {
            var gregorianDate = $(this).data('gregorian'); // گرفتن تاریخ گرگوری از data attribute
            var jalaliDate = moment(gregorianDate, 'YYYY-MM-DD').format('jYYYY/jMM/jDD'); // تبدیل به جلالی
            $(this).text(jalaliDate); // جایگزینی متن سلول با تاریخ جلالی
        });
    });
</script>
<?php get_footer(); ?>
