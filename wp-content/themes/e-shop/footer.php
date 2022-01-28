

<footer>
    <section class="footer-widgets">
    <div class="container">
        <div class="row">
            <?php
            if (is_active_sidebar('e-shop-footer-widget-left')) :?>
            <div class="col-md-4 col-12">
                <?php dynamic_sidebar('e-shop-footer-widget-left'); ?>
            </div>
            <?php endif; ?>
            <?php
            if (is_active_sidebar('e-shop-footer-widget-center')) :?>
                <div class="col-md-4 col-12">
                    <?php dynamic_sidebar('e-shop-footer-widget-center'); ?>
                </div>
            <?php endif; ?>
            <?php
            if (is_active_sidebar('e-shop-footer-widget-right')) :?>
                <div class="col-md-4 col-12">
                    <?php dynamic_sidebar('e-shop-footer-widget-right'); ?>
                </div>
            <?php endif; ?>


        </div>
    </div>
    </section>
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="copyright-text col-12 col-md-6">
                    <p><?php echo esc_html(get_theme_mod('copyright_settings',__('copyright all rights reserved','e-shop')));?></p>
                </div>
                <nav class="footer-menu col-12 col-md-6 text-left text-md-right">

                    <?php
                    wp_nav_menu
                    (
                            array
                            (
                                    'theme_location' => 'footer'
                            )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </section>
</footer>
</div>
<?php
wp_footer();
?>
</body>
</html>
