<div class="post__footer">
    <div class="post__tags tags tags--sm">
        <div class="tags__list">
            <?php
            // Display the tags of the post
            $tags = get_the_tags();
            if ( $tags ) {
                foreach ( $tags as $tag ) {
                    echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a>';
                }
            }
            ?>
        </div>
    </div>
    <div class="post__share-links share-links">
        <ul class="share-links__list">
            <li class="share-links__item share-links__item--type--counter">
                <a href="#comments"><?php echo get_comments_number(); ?> کامنت</a>
            </li>
        </ul>
    </div>
</div>

