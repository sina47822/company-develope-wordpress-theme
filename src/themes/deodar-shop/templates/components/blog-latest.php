<div class="block block-posts-carousel block-posts-carousel--layout--list" data-layout="list">
    <div class="container">
        <div class="section-header">
            <div class="section-header__body">
                <h2 class="section-header__title">آخرین اخبار</h2>
                <div class="section-header__spring"></div>
                <!-- <ul class="section-header__links">
                    <li class="section-header__links-item">
                        <a href="" class="section-header__links-link">پیشنهادات ویژه</a>
                    </li>
                    <li class="section-header__links-item">
                        <a href="" class="section-header__links-link">محصولات جدید</a>
                    </li>
                    <li class="section-header__links-item">
                        <a href="" class="section-header__links-link">نظرات</a>
                    </li>
                </ul> -->
                <div class="section-header__arrows">
                    <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                        <button class="arrow__button" type="button">
                            <svg width="7" height="11">
                                <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                            </svg>
                        </button>
                    </div>
                    <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                        <button class="arrow__button" type="button">
                            <svg width="7" height="11">
                                <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="section-header__divider"></div>
            </div>
        </div>
        <div class="block-posts-carousel__carousel">
            <div class="owl-carousel">
                <?php
                // Query for latest posts
                $args = array(
                    'posts_per_page' => 6,
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="block-posts-carousel__item">
                    <div class="post-card">
                        <div class="post-card__image">
                            <a href="<?php the_permalink(); ?>">
                                <?php 
                                // Check if the post has a featured image, if not use the default image
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('full');
                                else :
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/posts/post-1-730x485.jpg" alt="default image">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="post-card__content">
                            <div class="post-card__category">
                                <?php
                                // Assuming categories are translated
                                $category = get_the_category();
                                echo esc_html($category[0]->name);
                                ?>
                            </div>
                            <div class="post-card__title">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="post-card__date">
                                توسط <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> در <?php the_time('F j, Y'); ?>
                            </div>
                            <div class="post-card__excerpt">
                                <div class="typography">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                            <div class="post-card__more">
                                <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm">بیشتر بخوانید</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
