<?php 
	
	#***************************************
	#*
	#*	HTML Headers, Logo and Navigation
	#*
	#***************************************
	
	include('inc_head.php'); // Contains DOCTYPE, HEAD, BODY, and Beginning of Wrapper
	include('inc_topbar.php'); // Contains "top-bar": Top Left Navigation & Social Media Links
	include('inc_header.php'); // Contains "header": Logo & Navigation	



	#***************************************
	#*
	#*	Page Content
	#*
	#***************************************
?>

	<!-- Content
	============================================= -->
	<section id="content">
		<div class="content-wrap">
			<div class="container clearfix">

				<div class="fancy-title title-center paws-bg">
					<h2>
						Additional Services:<br>
						<span style="font-size:.6em">You can customize your Pet's Plan with additional service options to meet your Pet's needs.</span>
					</h2>
				</div>
				
				<div class="section parallax nobottommargin noborder dark" style="height: 450px; padding: 120px 0;">

					<div class="vertical-middle center" style="z-index: 2; position: absolute; top: 50%; width: 100%; padding-top: 0px; padding-bottom: 0px; margin-top: -112.5px;">
						<div class="container clearfix fadeInUp animated" data-animate="fadeInUp">
							<!--
							<div class="heading-block nobottomborder nobottommargin">
								<h2 style="font-size: 42px;">Beautiful HTML5 Videos</h2>
								<span class="hidden-sm hidden-xs">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</span>
							</div>
							<a href="#" class="button button-border button-rounded button-white button-light button-large noleftmargin nobottommargin" style="margin-top: 40px;">Show More</a>
							-->
						</div>
					</div>

					<div class="video-wrap" style="z-index: 1;">
						<video poster="images/videos/explore.jpg" preload="auto" loop="" autoplay="" muted="" style="width: 1698px; height: 955px; top: -252.5px;">
							<source src="images/videos/explore.mp4" type="video/mp4">
							<source src="images/videos/explore.webm" type="video/webm">
						</video>
						<div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
					</div>

				</div>
				
				<div class="col_full bottommargin-lg common-height">

					<div class="col-md-3 dark col-padding ohidden bgColorLight" style="height: 336px;">
						<div>
							<center>
								<img src="images/hannahfood.png" style="height:100px;">
							</center>
							<h3 class="uppercase tBlack" style="font-weight: 600;">Food Delivery</h3>
							<p class= "tBlack" style="line-height: 1.8;">Receive premium Pet food, such as Hannah's proprietary Total Lifetime Nutrition (TLN) food, delivered at your doorstep with no delivery costs.</p>
							<a href="#" class="button button-border button-rounded button-reveal tright nomargin tBlue"><i class="icon-angle-right"></i><span>Read More</span></a>
						</div>
					</div>

					<div class="col-md-3 dark col-padding ohidden bgYellow" style="height: 336px;">
						<div>
							<center><img src="images/petlimo.png" style="height:100px"></center>
							<h3 class="uppercase tBlack" style="font-weight: 600;">Pet Limo</h3>
							<p class="tBlack" style="line-height: 1.8;">Hannah's Pet limo service provides round trip service from our hospitals and your home.</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>

						</div>
					</div>

					<div class="col-md-3 dark col-padding ohidden bgBlue" style="height: 336px;">
						<div>
							<center><img src="images/dog_bath.png" style="height:100px"></center>
							<h3 class="uppercase tBlack" style="font-weight: 600;">Grooming</h3>
							<p class="tBlack" style="line-height: 1.8;">Hannah offers an array of bath, brush, and grooming services at a discount. </p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
						</div>
					</div>

					<div class="col-md-3 dark col-padding ohidden bgRed" style="height: 336px;">
						<div>
							<center><img src="images/parasites.png" style="height:100px"></center>
							<h3 class="uppercase tBlack" style="font-weight: 600;">Parasite Control</h3>
							<p class="tBlack" style="line-height: 1.8;">Flea, tick, and heartworm medication provided at a discount.</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>

						</div>
					</div>

					<div class="clear"></div>

				</div>
			</div>
			
			<!-- Call us for Membership -->
			<div class="content bgcolor-2">		
				<div class="container clearfix topmargin">	
					<div class="promo nopadding bottommargin topmargin">
						<i class="i-plain i-xlarge icon-phone"></i>
						<h3 class="tWhite">Call us today at <span><a href="tel:360-816-6000">360.816.6000</a></span> or Email us at <span><a href="mailto:MembershipTeam@HannahSociety.com">MembershipTeam@HannahSociety.com</a></span></h3>
						<span class="tWhite">Portland's only comprehensive pet care and vet hospital. Hannah is redefining your neighborhood vet clinic.</span>
	<!-- 					<a href="#" class="button button-large button-rounded">Start Now</a> -->
					</div>
				</div>
			</div>
		</div>	
	</section><!-- #content end -->

<?php	
	
	#***************************************
	#*
	#*	Footer and HTML Closing
	#*
	#***************************************
	
	include('inc_footer.php'); // Contains footer content
	include('inc_foot.php'); // Contains End of Wrapper, Go To Top, and JavaScript Scripts
	
?>

		
