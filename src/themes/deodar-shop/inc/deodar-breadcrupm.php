<?php

function deodar_breadcrumbs() {
    // تعیین جداکننده بین آیتم‌ها
    $separator = ' &gt; ';
    
    // دریافت آدرس صفحه اصلی
    $home_url = home_url('/');

    // شروع لیست بردکرامب
    echo '<ol class="breadcrumb__list" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    
    // لینک به صفحه اصلی
    echo '<li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a href="' . $home_url . '" class="breadcrumb__item-link">خانه</a></li>';
    
    // بررسی نوع صفحه
    if (is_single()) {
        $category = get_the_category();
        if (!empty($category)) {
            // لینک به دسته‌بندی اولین دسته
            echo '<li class="breadcrumb__item breadcrumb__item--parent"><a href="' . get_category_link($category[0]->term_id) . '" class="breadcrumb__item-link" itemprop="item"><span itemprop="name">' . $category[0]->name . '</span></a></li>';
            echo '<meta itemprop="position" content="1">';
        }
        // نمایش عنوان پست
        echo '<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">' . get_the_title() . '</span></li>';
    }
    elseif (is_page()) {
        // نمایش عنوان صفحه
        echo '<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">' . get_the_title() . '</span></li>';
        echo '<meta itemprop="position" content="1">';
    }
    elseif (is_category()) {
        // نمایش نام دسته‌بندی
        echo '<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">' . single_cat_title('', false) . '</span></li>';
        echo '<meta itemprop="position" content="1">';
    }
    elseif (is_home()) {
        // نمایش عنوان صفحه بلاگ
        echo '<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">بلاگ</span></li>';
        echo '<meta itemprop="position" content="1">';
    }
    elseif (is_archive()) {
        // نمایش عنوان آرشیو (مثل برچسب، نویسنده و ...)
        echo '<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">آرشیو</span></li>';
        echo '<meta itemprop="position" content="1">';
    }
    elseif (is_search()) {
        // نمایش عنوان نتایج جستجو
        echo '<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">نتایج جستجو</span></li>';
        echo '<meta itemprop="position" content="1">';
    }
    
    // بستن لیست بردکرامب
    echo '</ol>';
}
