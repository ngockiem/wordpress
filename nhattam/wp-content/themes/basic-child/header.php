<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php
/** Themify Default Variables
 *  @var object */
global $themify; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<!-- wp_header -->
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap&subset=vietnamese" rel="stylesheet">
<script src="https://kit.fontawesome.com/2dc192e8d3.js"></script>
</head>

<body <?php body_class(); ?>>
<?php themify_body_start(); // hook ?>
<!-- LOADING AREA START =====-->
<div class="loading-area">
<div class="loading-box">
</div>
<div class="loading-pic">
<div class="loader">
<span class="block-1"></span>
<span class="block-2"></span>
<span class="block-3"></span>
<span class="block-4"></span>
<span class="block-5"></span>
<span class="block-6"></span>
<span class="block-7"></span>
<span class="block-8"></span>
<span class="block-9"></span>
<span class="block-10"></span>
<span class="block-11"></span>
<span class="block-12"></span>
<span class="block-13"></span>
<span class="block-14"></span>
<span class="block-15"></span>
<span class="block-16"></span>
</div>
</div>
</div>
<!-- LOADING AREA  END ======-->
<div id="pagewrap" class="hfeed site">

	<div id="headerwrap">

		<?php themify_header_before(); // hook ?>
		<header id="header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
        <?php themify_header_start(); // hook ?>
			<hgroup>
				<div class="lb">
					<?php echo themify_logo_image('site_logo'); ?>
				</div>
				<div class="rb">
					<nav itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                        <div id="menu-icon" class="mobile-button"></div>
                        <?php
                        if ( function_exists( 'themify_custom_menu_nav' ) ) {
                            themify_custom_menu_nav();
                        } else {
                            wp_nav_menu( array(
                                'theme_location' => 'main-nav',
                                'fallback_cb'    => 'themify_default_main_nav',
                                'container'      => '',
                                'menu_id'        => 'main-nav',
                                'menu_class'     => 'main-nav'
                            ));
                        }
                        ?>
                        <!-- /#main-nav -->
                    </nav>
					<!-- <?php if(!themify_check('setting-exclude_search_form')): ?>
                        <?php get_search_form(); ?>
                    <?php endif ?> -->
				</div>
				<!-- <?php if ( $site_desc = get_bloginfo( 'description' ) ) : ?>
					<?php global $themify_customizer; ?>
					<div id="site-description" class="site-description"><?php echo class_exists( 'Themify_Customizer' ) ? $themify_customizer->site_description( $site_desc ) : $site_desc; ?></div>
				<?php endif; ?> -->
			</hgroup>					

			<div class="social-widget">
				<?php dynamic_sidebar('social-widget'); ?>

				<?php if(!themify_check('setting-exclude_rss')): ?>
					<div class="rss"><a href="<?php if(themify_get('setting-custom_feed_url') != ""){ echo themify_get('setting-custom_feed_url'); } else { echo bloginfo('rss2_url'); } ?>">RSS</a></div>
				<?php endif ?>
			</div>
			<!-- /.social-widget -->
		<?php themify_header_end(); // hook ?>
		</header>
		<!-- /#header -->
        <?php themify_header_after(); // hook ?>

	</div>
	<!-- /#headerwrap -->

<?php if(is_single() || is_archive() ): ?>
<?php echo do_shortcode('[themify_layout_part id="320"]'); ?>
<?php endif; ?>

	<div id="body" class="clearfix">
    <?php themify_layout_before(); //hook ?>
