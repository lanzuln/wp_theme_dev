<footer>
        <div class="footer__area" data-bg-color="footer-bg">
            <?php if(is_active_sidebar( 'footer-widget-01' ) or is_active_sidebar( 'footer-widget-02' ) or is_active_sidebar( 'footer-widget-03' ) or is_active_sidebar( 'footer-widget-04' )) : ?>
            <div class="footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <?php dynamic_sidebar('footer-widget-01'); ?>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <?php dynamic_sidebar('footer-widget-02'); ?>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <?php dynamic_sidebar('footer-widget-03'); ?>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <?php dynamic_sidebar('footer-widget-04'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>


            <div class="footer__bottom">
                <div class="container">
                    <div class="footer__bottom-inner">
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="footer__copyright">
                                <?php footer_copyright(); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer__link text-sm-end">
                            <?php harry_footer_menu(); ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>