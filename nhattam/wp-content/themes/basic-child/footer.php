<?php
/** Themify Default Variables
 @var object */
	global $themify; ?>

	<?php themify_layout_after(); //hook ?>
    </div>
	<!-- /body -->
		
	<?php echo do_shortcode('[themify_layout_part id="180"]'); ?>

	<div id="footerwrap">
    
    	<?php themify_footer_before(); // hook ?>
		<footer id="footer" class="pagewidth clearfix" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
			<?php themify_footer_start(); // hook ?>	

			<?php get_template_part( 'includes/footer-widgets'); ?>
	
			<div class="back-top"><a href="#header"><i class="fas fa-chevron-up"></i></a></div>

			<div class="footer-content">
				<div class="ft-col4-1 first">
					<div class="ft-title">GIỚI THIỆU CÔNG TY</div>
					<div class="ft-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo content_url(); ?>/uploads/ft-logo.svg"></a></div>
					<div class="ft-text">Chúng tôi một trong những công ty hàng đầu về cung cấp các loại đá xây dựng, cát nghiền chất lượng cao, đảm trách việc vận chuyển đến công trình, sản xuất bê tông và các sản phẩm từ xi măng và thạch cao. Chúng tôi tự hào vì đã hợp tác với nhiều khách hàng</div>
				</div>
				<div class="ft-col4-1">
					<div class="ft-title">LIÊN KẾT TRANG</div>
					<?php if (function_exists('wp_nav_menu')) {
                        wp_nav_menu(array('theme_location' => 'footer-nav' , 'fallback_cb' => '' , 'container'  => '' , 'menu_id' => 'footer-nav' , 'menu_class' => 'footer-nav')); 
                    } ?>
				</div>
				<div class="ft-col4-1">
					<div class="ft-title">NHẬN TIN MỚI</div>
					<div class="newsletter"><?php echo do_shortcode('[email-subscribers-form id="1"]'); ?></div>
				</div>
				<div class="ft-col4-1 last">
					<div class="ft-title">LIÊN KẾT MẠNG XÃ HỘI</div>
					<ul class="social-list">
						<li><a href="https://www.facebook.com/modatancang6" target="_blank"><i class="fab fa-facebook-square"></i></a></li>	
					</ul>
				</div>
			</div>
			
	
			<!-- <div class="footer-text clearfix">
				<?php themify_the_footer_text(); ?>
				<?php themify_the_footer_text('right'); ?>
			</div> -->
			<!-- /footer-text --> 
			<?php themify_footer_end(); // hook ?>
		</footer>
		<!-- /#footer --> 
        <?php themify_footer_after(); // hook ?>
	</div>
	<!-- /#footerwrap -->
	<div class="copy"><span>© 2017 Nhat Tam Concrete. All Rights Reserved.</span></div>
</div>
<!-- /#pagewrap -->

<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

<?php themify_body_end(); // hook ?>
<!-- wp_footer -->
<?php wp_footer(); ?>

</body>
</html>