<?php
// Get the total number of pages
global $wp_query;
$total_pages = $wp_query->max_num_pages;

// Only display pagination if there are more than 1 page
if ($total_pages > 1) {
    $current_page = max(1, get_query_var('paged'));

    // Generate pagination links
    $pagination_links = paginate_links(array(
        'base'      => str_replace(99999, '%#%', esc_url(get_pagenum_link(99999))),
        'format'    => '?paged=%#%',
        'current'   => $current_page,
        'total'     => $total_pages,
        'type'      => 'array',
        'prev_text' => '<span class="page-link__arrow page-link__arrow--left" aria-hidden="true"><svg width="7" height="11"><path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z"></path></svg></span>',
        'next_text' => '<span class="page-link__arrow page-link__arrow--right" aria-hidden="true"><svg width="7" height="11"><path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></span>',
        'mid_size'  => 2, // Adjust this to change the number of pages around the current page
        'end_size'  => 1, // Adjust this to change the number of pages at the start/end
    ));

    if (!empty($pagination_links)) {
        echo '<div class="posts-view__pagination">';
        echo '<ul class="pagination">';

        foreach ($pagination_links as $link) {
            // Add 'active' class to current page
            if (strpos($link, 'current') !== false) {
                echo '<li class="page-item active" aria-current="page"><span class="page-link">' . strip_tags($link, '<span>') . '<span class="sr-only">(current)</span></span></li>';
            } elseif (strpos($link, 'prev') !== false) {
                // Add 'disabled' class if previous link is inactive
                echo '<li class="page-item' . (strpos($link, 'disabled') !== false ? ' disabled' : '') . '">' . $link . '</li>';
            } elseif (strpos($link, 'next') !== false) {
                // Add 'disabled' class if next link is inactive
                echo '<li class="page-item' . (strpos($link, 'disabled') !== false ? ' disabled' : '') . '">' . $link . '</li>';
            } else {
                // Normal page links
                echo '<li class="page-item">' . $link . '</li>';
            }
        }

        echo '</ul>';
        echo '</div>';
    }
}
?>
