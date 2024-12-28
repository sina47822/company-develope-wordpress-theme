<?php 

/*
Template Name: Contact Us
*/

get_header();
?>
<?php 

/*
Template Name: Contact Us
*/

get_header();
?>

        <!-- site__body -->
        <div class="site__body">
            <div class="block-header block-header--has-breadcrumb block-header--has-title">
                <div class="container">
                    <div class="block-header__body">
                        <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                            <?php if (function_exists('deodar_breadcrumbs')) deodar_breadcrumbs(); ?>
                        </nav>
                        <h1 class="block-header__title">ارتباط با ما</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container container--max--lg">
                    <div class="card contacts">
                        <div class="contacts__map">
                            <iframe src="<?php echo deodar_settings('google-maps-embed') ? deodar_settings('google-maps-embed') : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25920.28660394833!2d51.314688!3d35.700736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e00a78cbaf693%3A0xf09cf42f73b1107f!2sMetro%20Moeen!5e0!3m2!1sen!2s!4v1735052706989!5m2!1sen!2s'; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>                        </div>
                        <div class="card-body card-body--padding--2">
                            <div class="row">
                                <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                    <div class="mr-1">
                                        <h4 class="contact-us__header card-title">آدرس ما</h4>
                                        <div class="contact-us__address">
                                            <p>
                                                <?php echo deodar_settings('contact-address'); ?><br>
                                                <strong>آدرس ایمیل:</strong><br>
                                                <?php echo deodar_settings('contact-email'); ?> <br>
                                                 <strong>شماره تماس:</strong><br>
                                                <?php echo deodar_settings('contact-phone'); ?>
                                            </p>
                                            <p>
                                                <strong>ساعت کاری</strong><br>
                                                <?php echo deodar_settings('work_time'); ?><br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="ml-1">
                                        <h4 class="contact-us__header card-title">اگر پرسش یا نظری دارید بفرمایید...</h4>
                                        <?php echo do_shortcode('[contact-form-7 id="79ee58a" title="فرم تماس 1"]'); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
        <!-- site__body / end -->
<?php get_footer(); ?>
