<?php

// Shortcode for services
function services_shortcode() {
    ob_start();
    $services_query = new WP_Query(array('post_type' => 'services', 'posts_per_page' => -1));
    if ($services_query->have_posts()) {
        echo '<div class="services-list">';
        while ($services_query->have_posts()) : $services_query->the_post();
            echo '<div class="service-item">';
            echo '<h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
            echo '</div>';
        endwhile;
        echo '</div>';
    }
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('services', 'services_shortcode');

// Shortcode for portfolios
function portfolios_shortcode() {
    ob_start();
    $portfolios_query = new WP_Query(array('post_type' => 'portfolios', 'posts_per_page' => -1));
    if ($portfolios_query->have_posts()) {
        echo '<div class="portfolios-list">';
        while ($portfolios_query->have_posts()) : $portfolios_query->the_post();
            echo '<div class="portfolio-item">';
            echo '<h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
            echo '</div>';
        endwhile;
        echo '</div>';
    }
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('portfolios', 'portfolios_shortcode');

function services_archive_shortcode() {
    ob_start();

    // Query for Services
    $services_query = new WP_Query(array(
        'post_type' => 'services',
        'posts_per_page' => -1 // Adjust to limit the number of services
    ));

    if ($services_query->have_posts()) {
        echo '<section class="no-top">';
        echo '<div class="container">';
        echo '<div class="row g-4 wow fadeInUp" data-wow-delay=".3s">';

        while ($services_query->have_posts()) : $services_query->the_post();
            echo '<div class="col-lg-4">';
            echo '<div class="hover relative overflow-hidden text-light">';
            echo '<a href="' . get_the_permalink() . '" class="overflow-hidden d-block relative">';
            echo '<h2 class="fs-40 abs-centered z-index-1 hover-op-0">' . get_the_title() . '</h2>';

            // Display thumbnail or placeholder image
            if (has_post_thumbnail()) {
                echo '<img src="' . get_the_post_thumbnail_url(get_the_ID(), 'medium') . '" class="img-fluid hover-scale-1-2" alt="' . get_the_title() . '">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/placeholder.jpg" class="img-fluid hover-scale-1-2" alt="Placeholder">';
            }

            echo '<div class="absolute bottom-0 w-100 p-4 d-flex text-white justify-content-between">';
            echo '<div class="d-tag-s2">' . get_the_excerpt() . '</div>';
            echo '<div class="fw-bold">' . get_the_date('Y') . '</div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
        endwhile;

        echo '</div>';
        echo '</div>';
        echo '</section>';
    } else {
        echo '<p>No services found.</p>';
    }

    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('services_archive', 'services_archive_shortcode');

function portfolios_archive_shortcode() {
    ob_start();

    // Query for Portfolios
    $portfolios_query = new WP_Query(array(
        'post_type' => 'portfolios',
        'posts_per_page' => -1 // Adjust to limit the number of portfolios
    ));

    if ($portfolios_query->have_posts()) {
        echo '<section class="no-top">';
        echo '<div class="container">';
        echo '<div class="row g-4 wow fadeInUp" data-wow-delay=".3s">';

        while ($portfolios_query->have_posts()) : $portfolios_query->the_post();
            echo '<div class="col-lg-4">';
            echo '<div class="hover relative overflow-hidden text-light">';
            echo '<a href="' . get_the_permalink() . '" class="overflow-hidden d-block relative">';
            echo '<h2 class="fs-40 abs-centered z-index-1 hover-op-0">' . get_the_title() . '</h2>';

            // Display thumbnail or placeholder image
            if (has_post_thumbnail()) {
                echo '<img src="' . get_the_post_thumbnail_url(get_the_ID(), 'medium') . '" class="img-fluid hover-scale-1-2" alt="' . get_the_title() . '">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/placeholder.jpg" class="img-fluid hover-scale-1-2" alt="Placeholder">';
            }

            echo '<div class="absolute bottom-0 w-100 p-4 d-flex text-white justify-content-between">';
            echo '<div class="d-tag-s2">' . get_the_excerpt() . '</div>';
            echo '<div class="fw-bold">' . get_the_date('Y') . '</div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
        endwhile;

        echo '</div>';
        echo '</div>';
        echo '</section>';
    } else {
        echo '<p>No portfolios found.</p>';
    }

    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('portfolios_archive', 'portfolios_archive_shortcode');
