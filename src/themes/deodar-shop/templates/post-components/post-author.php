<div class="post__author">
    <div class="post__author-avatar">
    <?php
        // Check if the author has a custom avatar
        $author_avatar = get_avatar( get_the_author_meta( 'ID' ), 70 );
        
        if ( $author_avatar ) {
            echo $author_avatar; // Display custom avatar
        } else {
            // Display default avatar if no custom avatar exists
            echo '<img src="' . get_template_directory_uri() . '/assets/images/avatars/avatar-4-70x70.jpg" alt="Default Avatar">';
        }
        ?>
    </div>
    <div class="post__author-info">
        <div class="post__author-name">
            <?php echo get_the_author(); ?>
        </div>
        <div class="post__author-about">
            <?php
            // Display author bio
            echo wp_kses_post( get_the_author_meta( 'description' ) );
            ?>
        </div>
    </div>
</div>
