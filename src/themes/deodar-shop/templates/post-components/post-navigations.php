<div class="post-view__card post-navigation">
    <div class="post-navigation__body">
        <?php
            // Get next post
            $next_post = get_next_post();
            if ( $next_post ) : // Check if the next post exists
        ?>
            <a class="post-navigation__item post-navigation__item--next" href="<?php echo get_permalink( $next_post->ID ); ?>">
                <div class="post-navigation__item-info">
                    <div class="post-navigation__direction">
                        <div class="post-navigation__direction-arrow">
                            <svg width="7" height="11">
                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                            </svg>
                        </div>
                        <div class="post-navigation__direction-title">
                            پست بعدی
                        </div>
                    </div>
                    <div class="post-navigation__item-title">
                        <?php echo get_the_title( $next_post->ID ); ?>
                    </div>
                </div>
                <div class="post-navigation__item-image">
                    <?php
                    // Check if the next post has a featured image
                    $next_post_image = get_the_post_thumbnail_url( $next_post->ID, 'thumbnail' );
                    if ( $next_post_image ) {
                        echo '<img src="' . $next_post_image . '" alt="Next Post Image">';
                    } else {
                        // Fallback image if no next post image exists
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/posts/post-3-80x80.jpg" alt="Default Next Post Image">';
                    }
                    ?>
                </div>
            </a>
        <?php else : ?>
            <!-- Leave this section empty if no next post -->
            <div class="post-navigation__item post-navigation__item--next"></div>
        <?php endif; ?>
        <?php
            // Get previous post
            $prev_post = get_previous_post();
            if ( $prev_post ) : // Check if the previous post exists
        ?>
            <a class="post-navigation__item post-navigation__item--prev" href="<?php echo get_permalink( $prev_post->ID ); ?>">
                <div class="post-navigation__item-image">
                    <?php
                    // Check if the previous post has a featured image
                    $prev_post_image = get_the_post_thumbnail_url( $prev_post->ID, 'thumbnail' );
                    if ( $prev_post_image ) {
                        echo '<img src="' . $prev_post_image . '" alt="Previous Post Image">';
                    } else {
                        // Fallback image if no previous post image exists
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/posts/post-2-80x80.jpg" alt="Default Previous Post Image">';
                    }
                    ?>
                </div>
                <div class="post-navigation__item-info">
                    <div class="post-navigation__direction">
                        <div class="post-navigation__direction-title">
                            پست قبلی
                        </div>
                        <div class="post-navigation__direction-arrow">
                            <svg width="7" height="11">
                                <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="post-navigation__item-title">
                        <?php echo get_the_title( $prev_post->ID ); ?>
                    </div>
                </div>
            </a>
        <?php else : ?>
            <!-- Leave this section empty if no previous post -->
            <div class="post-navigation__item post-navigation__item--prev"></div>
        <?php endif; ?>
    </div>
</div>
