<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package king
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'king' ); ?></a>

	<!-- header starts -->
	<header id="masthead" class="header">
		<!-- .header-top-area starts -->
		<div class="header-top-area d-none d-lg-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="header-contact-info">
							<ul>
								<li><i class="far fa-clock"></i> 9:30am - 6:30pm Mon - Sun</li>
								<li><a href="tel:+80012345676587"><i class="far fa-phone-alt"></i> +800-123-4567 6587</a></li>
								<li><a href="#"><i class="far fa-map-marker-alt"></i> Beverley, New York 224 US</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="header-social-icons text-right">
							<a href="#"><i class="fab fa-facebook-messenger"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-vimeo"></i></a>
							<a href="#"><i class="fab fa-skype"></i></a>
							<a href="#"><i class="fas fa-rss"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .header-top-area ends -->
		<!-- .header-area starts -->
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-auto d-flex align-items-center">
						<div class="site-logo">
							<a href="<?php site_url('/'); ?>">
								<?php the_custom_logo(); ?>
							</a>
						</div>
					</div>
					<div class="col d-flex align-items-center justify-content-star  justify-content-lg-end">
						<div class="mainmenu d-none d-lg-block">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary-menu',
									'menu_id'        => 'menu',
								)
							);
							?>
						</div>
						<div class="header-search d-flex align-items-center justify-content-start justify-content-lg-center h-100 position-relative">
							<span><i class="far fa-search"></i></span>
							<!-- search-box-wrap starts -->
							<div class="search-box-wrap">
								<div class="close-btn"><i class="fal fa-times"></i></div>
								<div class="search-box">
									<form action="POST">
										<input type="text" placeholder="Seach..." name="search" id="search">
										<button type="submit" value="submit"><i class="fal fa-search"></i></button>
									</form>
								</div>
							</div>
							<!-- search-box-wrap ends -->
						</div>
						<div class="header-cart d-flex align-items-center justify-content-center h-100">
							<span class="header-cart-icon position-relative">
								<span class="number">02</span> <i class="fal fa-shopping-basket"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .header-area ends -->
	</header>
	<!-- header ends -->
