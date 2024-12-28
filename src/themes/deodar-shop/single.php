<?php 
get_header();
?>
        <!-- site__body -->
        <div class="site__body">
            <div class="block post-view">
                <?php get_template_part('templates/post-components/post-header'); ?>
                <div class="container">
                    <div class="post-view__body">
                        <div class="post-view__item post-view__item-post">
                            <div class="post-view__card post">
                                <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                                    <?php if (function_exists('deodar_breadcrumbs')) deodar_breadcrumbs(); ?>
                                </nav>
                                <div class="post__body typography">
                                    <?php the_content(); ?>
                                </div>
                                <?php get_template_part('templates/post-components/post-footer'); ?>
                                <?php get_template_part('templates/post-components/post-author'); ?>

                            </div>
                            <?php get_template_part('templates/post-components/post-navigations'); ?>
                            
                            <h2 class="post-view__card-title">
                                <?php comments_number( 'بدون نظر', 'یک نظر', '% نظر داده شده' ); ?>

                            </h2>
                            <div class="post-view__card-body comments-view">
                            <?php comments_template() ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
        <!-- site__body / end -->
        <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "BlogPosting",
            "headline": "<?php the_title(); ?>",
            "datePublished": "<?php the_time('c'); ?>",
            "author": {
                "@type": "Person",
                "name": "<?php the_author(); ?>"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Your Site Name"
            }
            }
        </script>         
<?php get_footer(); ?>
