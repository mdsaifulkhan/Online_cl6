<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stock
 */

?>


	<footer id="colophon" class="site-footer">
        <div class="container">
            <?php if(is_active_sidebar('Stock_footer')) : ?>
            <div class="row">
                <?php dynamic_sidebar('stock_footer'); ?>
            </div>
            <?php endif; ?>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="stock-footer-bottom">
                        <div class="row">
                            <div class="col-md-4">
                                <?php esc_html_e('Copyright © 2017 FairDealLab - All Rights Reserved', 'stock-crazycafe'); ?>
                            </div>
                            <div class="col-md-4">
                                <?php wp_nav_menu( array('theme_location' => 'footer-menu') ); ?>
                            </div>
                            <div class="col-md-4">
                                <div class="social-icons">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
