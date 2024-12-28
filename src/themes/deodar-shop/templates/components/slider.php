<div class="block block-slideshow">
    <div class="container">
        <div class="block-slideshow__carousel">
            <div class="owl-carousel">
                <?php
                $slider_images = deodar_settings( 'slider_images' ); // Assuming `slider_images` holds the data
                if ( ! empty( $slider_images ) ) {
                    foreach ( $slider_images as $slide ) {
                        $image_url = ! empty( $slide["url"] ) ? esc_url( $slide['url'] ) : get_template_directory_uri() . '/assets/images/default-slider.jpg';
                        ?>
                        <a class="block-slideshow__item" href="#">
                            <span class="block-slideshow__item-image block-slideshow__item-image--desktop" style="background-image: url('<?php echo $image_url; ?>')"></span>
                            <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('<?php echo $image_url; ?>')"></span>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>