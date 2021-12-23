<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package king
 */

?>

	<!-- .footer-area starts -->
	<footer class="footer-area" style="background-image: url(./assets/img/map-bg-2.png);">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-footer-widget-item">
						<h4>About Company</h4>
						<p>Assertively develop team driven niche marketis and revolutionary servicesre Synergistically parallel task tactical systems without future-proof innovation am Credibly communicate low-risk high-yield processes rather thaneri process-centric outsourcing eficiently actualize premium benefits thati market positioning Intrinsicly reintermediate credibly.</p>
						<a href="about-1.html" class="inline-btn">Read More</a>
					</div><!-- ends -->
				</div>
				<div class="col-lg-4">
					<div class="single-footer-widget-item">
						<h4>Recent Blog Posts</h4>
						<div class="single-recent-blog">
							<a href="single-blog.html">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/recent-blog-1.jpg" alt="Recent blog">
								<h4>Remo Suppor Center What For Semiconductor Provider</h4>
								<p>April 08,2020</p>
							</a>
						</div>
						<div class="single-recent-blog">
							<a href="single-blog.html">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/recent-blog-2.jpg" alt="Recent blog">
								<h4>Remo Suppor Center What For Semiconductor Provider</h4>
								<p>April 09,2020</p>
							</a>
						</div>
					</div><!-- ends -->
				</div>
				<div class="col-lg-4">
					<div class="single-footer-widget-item pl-3">
						<h4>Newsletter Subscription</h4>
						<p>Enter your email and get latest updates and offers subscribe us</p>
						<div class="subscription-form">
							<form action="POST">
								<input type="email" placeholder="Enter your email">
								<button type="submit" value="submit" class="boxed-btn"><i class="fas fa-paper-plane"></i> Subscribe Now!</button>
							</form>
						</div>
					</div><!-- ends -->
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="copyright-text text-center">
						<p>&copy; 2021 All Rights Reserved. Designed by Themes-World</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- .footer-area ends -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
