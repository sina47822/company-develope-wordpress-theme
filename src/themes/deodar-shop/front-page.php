<?php 
get_header();
?>
        <!-- site__body -->
        <div class="site__body">
            <div class="block-space block-space--layout--divider-xs"></div>
            <?php get_template_part('templates/components/slider'); ?>
            <div class="block-space block-space--layout--divider-nl"></div>
            <?php get_template_part('templates/components/category-list') ?>
            <div class="block-space block-space--layout--divider-nl"></div>
                <?php get_template_part('templates/components/featured-product') ?>
            <div class="block-space block-space--layout--divider-nl"></div>
                <?php get_template_part('templates/components/advertise-picture') ?>
            <div class="block-space block-space--layout--divider-nl"></div>
                <?php get_template_part('templates/components/blog-latest') ?>
            <div class="block-space block-space--layout--divider-nl"></div>
                <?php get_template_part('templates/components/layout-strip') ?>
        </div>
        <!-- site__body / end -->
<?php get_footer(); ?>
