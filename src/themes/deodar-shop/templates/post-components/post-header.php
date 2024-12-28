<div class="post-view__header post-header post-header--has-image">
    <!-- Post Header Image -->
    <div class="post-header__image" style="background-image: url('<?php echo has_post_thumbnail() ? esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ) : get_template_directory_uri() . '/assets/images/posts/post-1-1903x500.jpg'; ?>');"></div>    
    <div class="post-header__body">
        <!-- Post Categories -->
        <div class="post-header__categories">
            <ul class="post-header__categories-list">
                <?php
                // Get categories of the current post
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    foreach ( $categories as $category ) {
                        echo '<li class="post-header__categories-item">
                                  <a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="post-header__categories-link">' . esc_html( $category->name ) . '</a>
                              </li>';
                    }
                }
                ?>
            </ul>
        </div>
        
        <!-- Post Title -->
        <h1 class="post-header__title"><?php the_title(); ?></h1>
        
        <div class="post-header__meta">
            <ul class="post-header__meta-list">
                <!-- Post Author -->
                <li class="post-header__meta-item">By <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="post-header__meta-link"><?php the_author(); ?></a></li>
                
                <!-- Post Date -->
                <li class="post-header__meta-item"><?php echo get_the_date(); ?></li>
                
                <!-- Post Comments -->
                <li class="post-header__meta-item">
                    <a href="<?php comments_link(); ?>" class="post-header__meta-link">
                        <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>