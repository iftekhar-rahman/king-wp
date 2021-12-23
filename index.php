<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package king
 */

get_header();
?>

	<!-- .hero-area starts -->
	<section class="hero-area" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hero-banner.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 my-auto">
					<?php
					$args = array(
						'post_type' => 'hero-section',
						'post_per-page' => 1
					);
					$query = new WP_Query($args);
						while($query->have_posts()){
							$query->the_post();
					?>
						<div data-aos="fade-up" class="hero-content">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<a href="services.html" class="boxed-btn">Learn More</a>
						</div>
					<?php
						}
						wp_reset_postdata(); 
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- .hero-area ends -->

	<!-- .features-area starts -->
	<section class="features-area">
		<div class="container">
			<div class="row">
				<div data-aos="fade-up" class="col-lg-4">
					<div class="single-feature-item single-box">
						<span class="box-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/feature-icon-1.png" alt="Feature icon">
						</span>
						<h3>Digital Services</h3>
						<p>Hunky dory barney fanny around up the duff not bigge look cups info of tea joly good ruddy say arse.!</p>
						<a href="single-service.html" class="inline-btn">Read More</a>
					</div><!-- ends -->
				</div>
				<div data-aos="fade-up" class="col-lg-4">
					<div class="single-feature-item single-box">
						<span class="box-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/feature-icon-2.png" alt="Feature icon">
						</span>
						<h3>Product Engineering</h3>
						<p>Hunky dory barney fanny around up the duff not bigge look cups info of tea joly good ruddy say arse.!</p>
						<a href="single-service.html" class="inline-btn">Read More</a>
					</div><!-- ends -->
				</div>
				<div data-aos="fade-up" class="col-lg-4">
					<div class="single-feature-item single-box">
						<span class="box-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/feature-icon-3.png" alt="Feature icon">
						</span>
						<h3>IT Consultancy</h3>
						<p>Hunky dory barney fanny around up the duff not bigge look cups info of tea joly good ruddy say arse.!</p>
						<a href="single-service.html" class="inline-btn">Read More</a>
					</div><!-- ends -->
				</div>
			</div>
		</div>
	</section>
	<!-- .features-area ends -->

	<!-- .about-area starts -->
	<section class="about-area overflow-hidden">
		<div class="container">
			<div class="row">
				<div data-aos="fade-right" class="col-lg-6 d-block d-lg-flex align-items-center">
					<div class="about-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-image-1.png" alt="About image">
					</div>
				</div>
				<div data-aos="fade-left" class="col-lg-6">
					<div class="about-content">
						<div class="section-title">
							<h4>what we do</h4>
							<h2>Product Development For<br/> Better Business</h2>
						</div><!-- ends -->
						<p>Since 2007 we have been and visionary and reliable softwarIe engineerng partner foring worldclass brands We are boutique digital consultancy and awesome software company PSD Template.</p>
						<div class="single-about-item position-relative">
							<i class="far fa-check"></i>
							<h4>Automated Software</h4>
							<p>Have Parts Have Theme Maured sembe Creative Auto Metal Parts wasin Andn semble</p>
						</div><!-- ends -->
						<div class="single-about-item position-relative">
							<i class="far fa-check"></i>
							<h4>DevOps Development</h4>
							<p>Have Parts Have Theme Maured sembe Creative Auto Metal Parts wasin Andn semble</p>
						</div><!-- ends -->
						<div class="single-about-item position-relative">
							<i class="far fa-check"></i>
							<h4>Automated Software</h4>
							<p>Have Parts Have Theme Maured sembe Creative Auto Metal Parts wasin Andn semble</p>
						</div><!-- ends -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- .about-area ends -->

	<!-- .services-area starts -->
	<section class="services-area home-1 section-padding-115-100">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section-title text-center">
						<h4>OUR best SERVICES</h4>
						<h2>What We Amazing Offer For You</h2>
					</div>
				</div>
			</div>
			<div class="row less-padding-content">
				<div data-aos="fade-up" class="col-lg-6">
					<div class="single-service-item single-box wide-box">
						<span class="box-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services-icon-1.png" alt="Services icon">
						</span>
						<h3>Product Engineering</h3>
						<p>Since 2006 have been visionary areliable software engineerng partner worldclass brands are bouque digital transformation consultancy.</p>
					</div><!-- ends -->
				</div>
				<div data-aos="fade-up" class="col-lg-6">
					<div class="single-service-item single-box wide-box">
						<span class="box-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services-icon-2.png" alt="Services icon">
						</span>
						<h3>UI/UX Design Strategy</h3>
						<p>Since 2006 have been visionary areliable software engineerng partner worldclass brands are bouque digital transformation consultancy.</p>
					</div><!-- ends -->
				</div>
				<div data-aos="fade-up" class="col-lg-6">
					<div class="single-service-item single-box wide-box">
						<span class="box-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services-icon-3.png" alt="Services icon">
						</span>
						<h3>Big Data And Analytics</h3>
						<p>Since 2006 have been visionary areliable software engineerng partner worldclass brands are bouque digital transformation consultancy.</p>
					</div><!-- ends -->
				</div>
				<div data-aos="fade-up" class="col-lg-6">
					<div class="single-service-item single-box wide-box">
						<span class="box-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services-icon-4.png" alt="Services icon">
						</span>
						<h3>Dedicated IT Solution</h3>
						<p>Since 2006 have been visionary areliable software engineerng partner worldclass brands are bouque digital transformation consultancy.</p>
					</div><!-- ends -->
				</div>
				<div data-aos="fade-up" class="col-lg-6">
					<div class="single-service-item single-box wide-box">
						<span class="box-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services-icon-5.png" alt="Services icon">
						</span>
						<h3>Infrastructure Plan</h3>
						<p>Since 2006 have been visionary areliable software engineerng partner worldclass brands are bouque digital transformation consultancy.</p>
					</div><!-- ends -->
				</div>
				<div data-aos="fade-up" class="col-lg-6">
					<div class="single-service-item single-box wide-box">
						<span class="box-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services-icon-6.png" alt="Services icon">
						</span>
						<h3>Firewall Advancement</h3>
						<p>Since 2006 have been visionary areliable software engineerng partner worldclass brands are bouque digital transformation consultancy.</p>
					</div>
				</div><!-- ends -->
			</div>
		</div>
	</section>
	<!-- .services-area ends -->

	<!-- .portfolio-area starts -->
	<section class="portfolio-area section-padding-115-100">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section-title text-center">
						<h4>Recent projects</h4>
						<h2>Our Latest Case Studies</h2>
					</div>
					<div class="filters">
						<div class="portfolio-filter text-center button-group">
							<button class="button is-checked" data-filter="*">Show All <span class="filter-count"></span></button>
							<button class="button" data-filter=".financial">Financial <span class="filter-count"></span></button>
							<button class="button" data-filter=".resources">Resources <span class="filter-count"></span></button>
							<button class="button" data-filter=".solicitory">Solicitory <span class="filter-count"></span></button>
							<button class="button" data-filter=".startups">Start Ups <span class="filter-count"></span></button>
						</div>
					</div>
					<div data-aos="fade-up" id="portfolio" class="portfolio-gallery grid">
						<div class="single-portfolio-item all resources startups">
							<div class="portfolio-inner">
								<div class="image-wrap position-relative">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-1.jpg" alt="Financial Human">
									<div class="portfolio-hover">
										<a href="portfolio-1.html"><i class="fal fa-link"></i></a>
										<a class="popup-link1" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-1.jpg"><i class="fal fa-search"></i></a>
									</div>
								</div>
								<div class="portfolio-content text-center">
									<h3><a href="portfolio-1.html">Edge Catalysts For Change</a></h3>
									<p>Financial | Human</p>
								</div>
							</div>
						</div><!--  ends -->
						<div class="single-portfolio-item all startups resources">
							<div class="portfolio-inner">
								<div class="image-wrap position-relative">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-2.jpg" alt="Resources Strategy">
									<div class="portfolio-hover">
										<a href="portfolio-1.html"><i class="fal fa-link"></i></a>
										<a class="popup-link1" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-2.jpg"><i class="fal fa-search"></i></a>
									</div>
								</div>
								<div class="portfolio-content text-center">
									<h3><a href="portfolio-1.html">Plagiarze Reable Bandwdth</a></h3>
									<p>Resources | Strategy</p>
								</div>
							</div>
						</div><!-- ends -->
						<div class="single-portfolio-item all solicitory financial">
							<div class="portfolio-inner">
								<div class="image-wrap position-relative">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-3.jpg" alt="Start Ups Resources">
									<div class="portfolio-hover">
										<a href="portfolio-1.html"><i class="fal fa-link"></i></a>
										<a class="popup-link1" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-3.jpg"><i class="fal fa-search"></i></a>
									</div>
								</div>
								<div class="portfolio-content text-center">
									<h3><a href="portfolio-1.html">Cuting Edge Mindshare Visa</a></h3>
									<p>Start Ups | Resources</p>
								</div>
							</div>
						</div><!-- ends -->
						<div class="single-portfolio-item all startups solicitory financial">
							<div class="portfolio-inner">
								<div class="image-wrap position-relative">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-4.jpg" alt="Financial Human">
									<div class="portfolio-hover">
										<a href="portfolio-1.html"><i class="fal fa-link"></i></a>
										<a class="popup-link1" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-4.jpg"><i class="fal fa-search"></i></a>
									</div>
								</div>
								<div class="portfolio-content text-center">
									<h3><a href="portfolio-1.html">Edge Catalysts For Change</a></h3>
									<p>Financial | Human</p>
								</div>
							</div>
						</div><!-- ends -->
						<div class="single-portfolio-item all resources startups solicitory">
							<div class="portfolio-inner">
								<div class="image-wrap position-relative">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-5.jpg" alt="Resources Strategy">
									<div class="portfolio-hover">
										<a href="portfolio-1.html"><i class="fal fa-link"></i></a>
										<a class="popup-link1" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-5.jpg"><i class="fal fa-search"></i></a>
									</div>
								</div>
								<div class="portfolio-content text-center">
									<h3><a href="portfolio-1.html">Plagiarze Reable Bandwdth</a></h3>
									<p>Resources | Strategy</p>
								</div>
							</div>
						</div><!-- ends -->
						<div class="single-portfolio-item all solicitory financial">
							<div class="portfolio-inner">
								<div class="image-wrap position-relative">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-6.jpg" alt="Start Ups Resources">
									<div class="portfolio-hover">
										<a href="portfolio-1.html"><i class="fal fa-link"></i></a>
										<a class="popup-link1" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-6.jpg"><i class="fal fa-search"></i></a>
									</div>
								</div>
								<div class="portfolio-content text-center">
									<h3><a href="portfolio-1.html">Cuting Edge Mindshare Visa</a></h3>
									<p>Start Ups | Resources</p>
								</div>
							</div>
						</div><!-- ends -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- .portfolio-area ends -->

	<!-- .contact-area starts -->
	<section class="contact-area section-padding-115-100" style="background-image: url(./<?php echo get_template_directory_uri(); ?>/assets/img/contact-banner.jpg);">
		<div class="container">
			<div class="row">
				<div data-aos="fade-left" class="col-lg-7 offset-lg-5">
					<div class="form-wrap">
						<div class="section-title">
							<h4>Have a Questions? </h4>
							<h2>Chat With Request a Call Back</h2>
						</div>
						<div class="contact-form">
							<form action="POST">
								<div class="form-group">
									<select name="businessplan" id="businessplan">
										<option value="Plan 1">Business Planning</option>
										<option value="Plan 1">Plan 2</option>
										<option value="Plan 1">Plan 3</option>
										<option value="Plan 1">Plan 4</option>
										<option value="Plan 1">Plan 5</option>
									</select>
								</div>
								<div class="form-row">
									<div class="col">
										<div class="form-group pr-1">
											<input type="text" placeholder="*Your Name" id="name">
										</div>
									</div>
									<div class="col">
										<div class="from-group pl-1">
											<input type="email" placeholder="*Your Email" id="email">
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea name="message" id="message" cols="30" rows="10" placeholder="Message:"></textarea>
								</div>
								<button type="submit" value="submit" class="boxed-btn">Summit Message</button>
							</form>
						</div><!-- ends -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- .contact-area ends -->

	<!-- .testimonial-area starts -->
	<section class="testimonial-area" style="background-image: url(./<?php echo get_template_directory_uri(); ?>/assets/img/map-bg-1.png);">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section-title text-center">
						<h4>What our customers say</h4>
						<h2>Client’s Feedback Latest Reviews From My Clients</h2>
					</div>
				</div>
			</div>
			<div class="row testimonials-row">
				<div class="col-lg-6">
					<div data-aos="fade-up" class="single-testimonial-item">
						<div class="testimonial-header d-flex justify-content-between">
							<div class="left position-relative">
								<div class="reviewer-photo">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviewer-photo-1.png" alt="Reviewer">
								</div>
								<h3>Angel Witicker</h3>
								<h4>UX Designer</h4>
							</div>
							<div class="right">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviewer-logo-1.png" alt="Reviewer Logo">
							</div>
						</div>
						<div class="testimonial-content">
							<p>Rapidiously buildcollaboration anden deas sharing viaing bleeding and edge nterfaces Energstcally plagiarize team anbuilding and paradgmis whereas goingi forward process mproveents and monetze fully tested ergstcally plariarize team whereas goingi forward process an services whereas going forward process</p>
							<div class="stars">
								<span><i class="far fa-star"></i></span>
								<span><i class="far fa-star"></i></span>
								<span><i class="far fa-star"></i></span>
								<span><i class="far fa-star"></i></span>
								<span><i class="far fa-star"></i></span>
							</div>
						</div>
					</div><!-- ends -->
				</div>
				<div class="col-lg-6">
					<div data-aos="fade-up" class="single-testimonial-item">
						<div class="testimonial-header d-flex justify-content-between">
							<div class="left position-relative">
								<div class="reviewer-photo">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviewer-photo-2.png" alt="Reviewer">
								</div>
								<h3>Witicker Alax</h3>
								<h4>Founder & CEO</h4>
							</div>
							<div class="right">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviewer-logo-2.png" alt="Reviewer Logo">
							</div>
						</div>
						<div class="testimonial-content">
							<p>Rapidiously buildcollaboration anden deas sharing viaing bleeding and edge nterfaces Energstcally plagiarize team anbuilding and paradgmis whereas goingi forward process mproveents and monetze fully tested ergstcally plariarize team whereas goingi forward process an services whereas going forward process</p>
							<div class="stars">
								<span><i class="far fa-star"></i></span>
								<span><i class="far fa-star"></i></span>
								<span><i class="far fa-star"></i></span>
								<span><i class="far fa-star"></i></span>
								<span><i class="far fa-star"></i></span>
							</div>
						</div>
					</div><!-- ends -->
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="clients-logo d-flex flex-wrap flex-md-nowrap justify-content-center justify-content-md-between align-items-center">
						<div class="single-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-logo-1.png" alt="Brand Logo">
						</div>
						<div class="single-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-logo-2.png" alt="Brand Logo">
						</div>
						<div class="single-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-logo-3.png" alt="Brand Logo">
						</div>
						<div class="single-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-logo-4.png" alt="Brand Logo">
						</div>
						<div class="single-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients-logo-5.png" alt="Brand Logo">
						</div>
					</div><!-- ends -->
				</div>
			</div>
		</div>
	</section>
	<!-- .testimonial-area ends -->

	<!-- .blog-area starts -->
	<section class="blog-area section-padding-115-100">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section-title text-center">
						<h4>FORM OUR BLOG posts</h4>
						<h2>More Articles From Resource Library</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center justify-content-lg-start">
				<div data-aos="fade-up" class="col-md-6 col-lg-4">
					<article class="single-blog-item">
						<div class="blog-thumb overflow-hidden">
							<a href="single-blog.html">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-image-1.jpg" alt="blog image">
							</a>
						</div>
						<div class="blog-content">
							<h3>Business Ueportin Rouncil Them Could Plan...</h3>
							<div class="blog-meta">
								<a href="#"><i class="far fa-calendar-alt"></i> Dece 04, 2020</a>
								<a href="#"><i class="fas fa-user"></i> Robot Smith</a>
							</div>
							<p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas vis parallel customer service.</p>
						</div>
						<div class="blog-footer d-flex justify-content-between">
							<a href="single-blog.html" class="inline-btn">Read More</a>
							<span class="blog-comments position-relative">
								<span class="comments-number">2</span>
								<i class="fal fa-comment-alt-lines"></i>
							</span>
						</div>
					</article><!-- ends -->
				</div>
				<div data-aos="fade-up" class="col-md-6 col-lg-4">
					<article class="single-blog-item">
						<div class="blog-thumb overflow-hidden">
							<a href="single-blog.html">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-image-2.jpg" alt="blog image">
							</a>
						</div>
						<div class="blog-content">
							<h3>Financial Reportin Qouncil What Could More...</h3>
							<div class="blog-meta">
								<a href="#"><i class="far fa-calendar-alt"></i> Dece 04, 2020</a>
								<a href="#"><i class="fas fa-user"></i> Robot Smith</a>
							</div>
							<p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas vis parallel customer service.</p>
						</div>
						<div class="blog-footer d-flex justify-content-between">
							<a href="single-blog.html" class="inline-btn">Read More</a>
							<span class="blog-comments position-relative">
								<span class="comments-number">2</span>
								<i class="fal fa-comment-alt-lines"></i>
							</span>
						</div>
					</article><!-- ends -->
				</div>
				<div data-aos="fade-up" class="col-md-6 col-lg-4">
					<article class="single-blog-item">
						<div class="blog-thumb overflow-hidden">
							<a href="single-blog.html">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-image-3.jpg" alt="blog image">
							</a>
						</div>
						<div class="blog-content">
							<h3>Consultin Reportin Qounc Arei Could More...</h3>
							<div class="blog-meta">
								<a href="#"><i class="far fa-calendar-alt"></i> Dece 04, 2020</a>
								<a href="#"><i class="fas fa-user"></i> Robot Smith</a>
							</div>
							<p>Enthusiastically morph magnetic scenarios Uniquelly synthesize strategic theme areas vis parallel customer service.</p>
						</div>
						<div class="blog-footer d-flex justify-content-between">
							<a href="single-blog.html" class="inline-btn">Read More</a>
							<span class="blog-comments position-relative">
								<span class="comments-number">2</span>
								<i class="fal fa-comment-alt-lines"></i>
							</span>
						</div>
					</article><!-- ends -->
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="blog-view-btn text-center">
						<a href="blog.html" class="boxed-btn">view all blogs</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- .blog-area ends -->

<?php
get_sidebar();
get_footer();
