<?php 
	### for member testimonials
	include('inc_member-reviews.php');
	
	### random review
	$review_number = rand(0,5);
	
	$url = $_SERVER['REQUEST_URI'];
	$current_page = str_replace('/', '', $url); 
// 	echo $current_page; 	
	if ($current_page == "index.php" OR $current_page == "" OR $current_page == "behavior-education-support-and-training.php") {
		} else {
			if ($current_page == "vet-services-training.php" OR $current_page == "total-lifetime-nutrition.php" OR $current_page == "sick-or-injured-pet-plans.php" OR $current_page == "reviews.php" OR $current_page == "404.php") {
			} else {
?>	

	<!-- Member Testimonial -->
	<div class="container topmargin">
		<h4 class="center">What Hannah Members Say</h4>
		<div class="yellowBox bgYellowLight bottommargin-sm">
			
			<div class="fslider testimonial-full bottommargin" data-animation="fade" data-arrows="false">
				<div class="flexslider" style="height: 176px;">
					<div class="slider-wrap">
						<div class="slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
							<div class="testi-content">
								<p><?php echo $review[$review_number]["quote"]; ?></p>
								<div class="testi-meta">
									<?php echo $review[$review_number]["member"]; ?>
									<span><?php echo $review[$review_number]["date"]; ?></span>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php }; ?>
	
	<!-- Call to action before footer -->
	<div class="footer-stick notopmargin bgYellow" style="padding-bottom:45px;">		
		<div class="container clearfix">	
			<div class="promo nopadding bottommargin topmargin">
				<i class="i-plain i-xlarge icon-phone"></i>
				<h3>Call us today at <span><a href="tel:360-816-8000">360.816.8000</a></span> or send us an <span><a href="mailto:MembershipTeam@HannahSociety.com">Email</a></span> to get started!</h3>
				<span class="font-weight:400;">Portland's only comprehensive Pet care and vet hospital. Hannah is redefining your neighborhood vet clinic.</span>
				<a href="form.php" data-lightbox="ajax" class="button button-large button-rounded">Schedule a Free Exam</a>
			</div>
		</div>
	</div>
<?php } ?>

<!-- Footer
============================================= -->
<footer id="footer" class="dark">

	<div class="container">

		<!-- Footer Widgets
		============================================= -->
		<div class="footer-widgets-wrap clearfix">

			<div class="col_two_third">

				<div class="col_two_third">

					<div class="widget clearfix" id="footer-logo">

						<img src="/images/logo_white.png" alt="" class="footer-logo" width="233px" style="margin: 0 auto;">
													
						<div class="topmargin-sm center"  style="background-color:white; padding-top:10px; padding-bottom:10px;">
							<address class="col_half">
								<strong>Hannah East</strong><br>
								10526 SE Washington St A-103<br>
								Portland, Or 97216<br>
							</address>
							<address class="col_half col_last">
								<strong>Hannah West</strong><br>
								10164 SW Washington Square Rd<br>
								Portland, Or 97223<br>
							</address>
							
							<div class="clear"></div>

							<div class="full notopmargin">
								<strong>Phone</strong>
								<br>
								<a href="tel:(360)816-8000">(360) 816-8000</a>
								&nbsp; • &nbsp;
								<a href="tel:(503)905-4696">(503) 905-4696</a>
								<br>
								<strong>Email</strong>
								<br>
								<a href="mailto:MembershipTeam@HannahSociety.com">MembershipTeam@HannahSociety.com</a>
							</div>

						</div>

					</div>

				</div>


				<div class="col_one_third col_last">

					<div class="widget clearfix">
						<h4>Recent Posts</h4>
						<div id="post-list-footer">
							<?php
						
							// Get the last 3 posts
							// Returns posts as arrays instead of get_posts' objects
							$recent_posts = wp_get_recent_posts(array(
								'numberposts' => 3,
								'post_status' => 'publish'
							));
								
							// Do something with them
							echo '<ul>';
							foreach($recent_posts as $post) { 
							?>
							
								<div class="spost clearfix">
								<div class="entry-c">
									<div class="entry-title">
										<h4>
											<?php echo '<a href="', get_permalink($post['ID']), '">', $post['post_title'], '</a>'; ?>
										</h4>
									</div>
									<ul class="entry-meta">
										<li><?php echo date('F j, Y', strtotime($post['post_date'])); ?></li>
									</ul>
									</div>
								</div>		
							<?php
							}
							echo '</ul>';
							
							?>
						</div>
								
					</div>

				</div>

			</div>

			<div class="col_one_third col_last">

				<div class="widget clearfix" style="margin-bottom: -20px;">

					<div class="row">

						<div class="col-md-6 bottommargin-sm">
							<div class="counter counter-small">
								<h5 class="nobottommargin">Over</h5>
								<span data-from="50" data-to="6000" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
							<h5 class="nobottommargin">Portland Area Hannah Pets</h5>
						</div>

						<div class="col-md-6 bottommargin-sm">
							<h5 class="nobottommargin">More than</h5>
							
							<div class="counter counter-small"><span data-from="100" data-to="75000" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
							<h5 class="nobottommargin">Portland Vet Hospital Visits</h5>
						</div>

					</div>

				</div>

				<div class="widget clearfix">
					<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
					<form action="email.php" method="post" class="nobottommargin">
						<div class="input-group divcenter">
							<span class="input-group-addon"><i class="icon-email2"></i></span>
							<input type="email" class="form-control required email" placeholder="Enter your Email">
							<span class="input-group-btn">
								<button class="btn btn-success" type="submit">Subscribe</button>
							</span>
						</div>
					</form>
				</div>

				<div class="widget clearfix" style="margin-bottom: -20px;">

					<div class="row">

						<div class="col-md-6 clearfix bottommargin-sm">
							<a href="<?php social("facebook"); ?>" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="<?php social("facebook"); ?>"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
						</div>
						<div class="col-md-6 clearfix">
							<a href="<?php social("rss"); ?>" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
								<i class="icon-rss"></i>
								<i class="icon-rss"></i>
							</a>
							<a href="<?php social("rss"); ?>"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
						</div>

					</div>

				</div>

			</div>

		</div><!-- .footer-widgets-wrap end -->

	</div>

	<!-- Copyrights
	============================================= -->
	<div id="copyrights">

		<div class="container clearfix">

			<div class="col_half tBlue">
				Copyrights &copy; <?php echo date("Y"); ?> All Rights Reserved by Hannah Pet Society.<br>
<!-- 				<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->
			</div>

			<div class="col_half col_last tright">
				<div class="fright clearfix">
					<a href="<?php social("facebook"); ?>" class="social-icon si-small si-borderless si-facebook"  target="_blank">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="<?php social("twitter"); ?>" class="social-icon si-small si-borderless si-twitter" target="_blank">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="<?php social("google"); ?>" class="social-icon si-small si-borderless si-gplus" target="_blank">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>

					<a href="<?php social("pinterest"); ?>" class="social-icon si-small si-borderless si-pinterest" target="_blank">
						<i class="icon-pinterest"></i>
						<i class="icon-pinterest"></i>
					</a>

				</div>

				<div class="clear"></div>

				<a href="mailto:<?php social("email"); ?>"><i class="icon-envelope2"></i> <?php social("email"); ?></a> <span class="middot">&middot;</span> <a href="tel:<?php social("telephone"); ?>"><i class="icon-phone"></i> (360)816-8000</a>
			</div>

		</div>

	</div><!-- #copyrights end -->

</footer><!-- #footer end -->
