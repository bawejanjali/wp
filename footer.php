<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	   <!-- footer -->
	   <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-bottom-section">
                <div class="footer-content-outer">
                    <div class="row">
                        <div class="col-6">
                            <div class="footer-logo-section">
								<?php dynamic_sidebar('footer-1');?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="footer-navigation-menus" id="footer-accordion">
                                <div class="footer-navigation-list">
									<?php dynamic_sidebar('footer-2');?>
                                </div>
                                <div class="footer-navigation-list">
									<?php dynamic_sidebar('footer-3');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright" id="footer-copyright">
                  <div class="row">
                      <div class="col-7">
					 	 <?php dynamic_sidebar('footer-4');?>
                      </div>
                      <div class="col-5">
                          <div class="footer-social-link">
						 	 <?php dynamic_sidebar('footer-social-icon');?> 
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </footer>
    </main>

    <!-- JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js//popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousal.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
<?php wp_footer(); ?>

</body>
</html>
