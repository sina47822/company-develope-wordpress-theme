<?php
// Fetch the post ID
$post_id = get_the_ID();

// Get the main product image (thumbnail)
$main_image = get_the_post_thumbnail_url($post_id, 'full'); // Full-size featured image URL

// Get additional images from the meta box
$other_images = get_post_meta($post_id, '_deodar_other_images', true); // Replace '_other_images' with the actual meta key if different
?>

<div class="product-gallery product-gallery--layout--product-full product__gallery" data-layout="product-full">
    <div class="product-gallery__featured">
        <button type="button" class="product-gallery__zoom">
            <svg width="24" height="24">
                <path d="M15,18c-2,0-3.8-0.6-5.2-1.7c-1,1.3-2.1,2.8-3.5,4.6c-2.2,2.8-3.4,1.9-3.4,1.9s-0.6-0.3-1.1-0.7
                c-0.4-0.4-0.7-1-0.7-1s-0.9-1.2,1.9-3.3c1.8-1.4,3.3-2.5,4.6-3.5C6.6,12.8,6,11,6,9c0-5,4-9,9-9s9,4,9,9S20,18,15,18z M15,2
                c-3.9,0-7,3.1-7,7s3.1,7,7,7s7-3.1,7-7S18.9,2,15,2z M16,13h-2v-3h-3V8h3V5h2v3h3v2h-3V13z" />
            </svg>
        </button>
        <div class="owl-carousel">
            <?php if ($main_image): ?>
                <!-- Display the main image -->
                <a class="image image--type--product" href="<?php echo esc_url($main_image); ?>" target="_blank" data-width="700" data-height="700">
                    <div class="image__body">
                        <img class="image__tag" src="<?php echo esc_url($main_image); ?>" alt="Main Product Image">
                    </div>
                </a>
            <?php endif; ?>

            <?php if (!empty($other_images)): ?>
                <!-- Loop through additional images -->
                <?php foreach ($other_images as $image_id => $image_url): ?>
                    <a class="image image--type--product" href="<?php echo esc_url($image_url); ?>" target="_blank" data-width="700" data-height="700">
                        <div class="image__body">
                            <img class="image__tag" src="<?php echo esc_url($image_url); ?>" alt="Additional Product Image">
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Thumbnails -->
    <div class="product-gallery__thumbnails">
        <div class="owl-carousel">
            <?php if ($main_image): ?>
                <!-- Thumbnail for the main image -->
                <div class="product-gallery__thumbnails-item image image--type--product">
                    <div class="image__body">
                        <img class="image__tag" src="<?php echo esc_url($main_image); ?>" alt="Main Thumbnail">
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($other_images)): ?>
                <!-- Loop through additional thumbnails -->
                <?php foreach ($other_images as $image_id => $image_url): ?>
                    <div class="product-gallery__thumbnails-item image image--type--product">
                        <div class="image__body">
                            <img class="image__tag" src="<?php echo esc_url($image_url); ?>" alt="Thumbnail">
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
