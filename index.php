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
	
	<!-- Hero Unit
	============================================= -->
	
	<section id="slider" class="slider swiper_wrapper clearfix">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<!-- Slide 1 -->
					<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/ss1.jpg'); background-size:cover;">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-right">
								
								<h2 data-caption-animate="fadeInUp" style="margin-bottom: 10px; font-size:2.1em;">
									Pet care redefined.
									<span style = "display: block; font-size: .4em;">
									Hannah covers your Pet from nose to tail for one low monthly fee.
									</span>
								</h2>
								<a href="form.php" data-lightbox="ajax">
									<button class="button fright" data-class-lg="button-small" data-caption-animate="fadeInUp" data-caption-delay="200">
									Get a Quote > 
									</button>		
								</a>
								<a href="#learn" data-scrollto="#learn">
									<button class="button fright" data-class-lg="button-small" data-caption-animate="fadeInUp" data-caption-delay="200">Learn More ></button>	
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	
		

	<!-- Content
	============================================= -->
	<section id="content">
		<div class="content-wrap nobottommargin">		
			<div class="container clearfix">
		
				<!-- Hannah Logo and Making Quality Pet Ownership
				================================================ -->	
				<div class="heading-block center fancy-title nobottomborder bottommargin-lg">
<!-- 					<h1 style="margin-bottom:15px;"><img src="/images/logo.jpg" alt="Hannah The Pet Society" width="300px"></h1> -->
					<h2>A unique <span>Pet healthcare</span> concept that provides comprehensive veterinary and behavioral care for one low monthly fee.</h2>
					
				</div>
				
				
				
				<!-- Hannah Is ...
				================================================ -->
				<div class="topmargin-sm">
					<div class="container clearfix bottommargin">
	
	
	
						<div class="col_three_fifth nobottommargin" id="learn">
							<div class="heading-block fancy-title nobottomborder topmargin-sm title-bottom-border">
								<h4>
									Welcome to <span>Hannah</span>
								</h4>
							</div>
	
							<p>
								Hannah is a unique Pet healthcare model that provides comprehensive veterinary and behavioral care services. For one predictable, low monthly fee, our members enjoy the peace of mind that comes with having a team of Veterinary Professionals caring for their Pet Families. 
							</p>
							
							<div class="topmargin"><!-- Member benefits -->
								<h5 class="center">Hannah Veterinary Care Plans Include</h5>
							
								<div class="col_one_third">
									<div class="center">
										<img src="images/icons/hp/heartcross.png" alt="Routine and Preventive Care">
										<br>
										<caption>Routine and Preventive Care</caption>
									</div>
									
									<div class="center topmargin-sm">
										<img src="images/icons/hp/dental.png" alt="Dental Care">
										<br>
										<caption>Dental Care</caption>
									</div>
								</div>
								
								<div class="col_one_third">
									<div class="center">
										<img src="images/icons/hp/crossheart.png" alt="Accidental and Emergency Care">
										<br>
										<caption>Accident and Emergency Care</caption>									
									</div>
									
									<div class="center topmargin-sm">
										<img src="images/icons/hp/dogtraining.png" alt="Training">
										<br>
										<caption>Training Classes</caption>
									</div>
								</div>
								
								<div class="col_one_third col_last">
									<div class="center">
										<img src="images/icons/hp/surgeon.png" alt="Surgical Care">
										<br>
										<caption>Surgical Care</caption>
									</div>
																	
									<div class="center topmargin-sm">
										<img src="images/icons/hp/cat.png" alt="Behavior Support">
										<br>
										<caption>Behavior Support</caption>
									</div>
								</div>
							</div><!-- end member benefits -->
							
							<div class="clearfix"></div>
							
							<p class="fleft">
								<a href="#">Learn more about how Hannah works.</a>
								<br>
								<a href="#">Learn why Hannah is a better healthcare alternative for your Pet.</a>
							</p>
						</div>						
						
						<div class="col_two_fifth topmargin-lg col_last center">
							<img src="/images/team/3.jpg" alt="blah">
<!--
							<caption>
								Dr. Baltimore examining Jeb at Hannah East
							</caption>
-->
						</div>					
					</div>
				</div><!-- end What is hannah? -->
			</div>


			<div class="container clearfix topmargin">
				<div class="heading-block fancy-title nobottomborder topmargin-sm center bottommargin">
					<h4>
						<span>Become a Hannah Member</span>
					</h4>
				</div>
				<div class="col_one_third nobottommargin">
					<div class="feature-box media-box">
						<div class="fbox-media">
							<img src="images/icons/hp/tellus.png" alt="Tell us about your pet." class="divcenter">
						</div>
						<div class="fbox-desc">
							<h3 class="center">Tell us about your pet.</h3>
							<p>Provide your Pet's name, age, breed and current health status to receive a quote.</p>							
						</div>
					</div>
				</div>
	
				<div class="col_one_third nobottommargin">
					<div class="feature-box media-box">
						<div class="fbox-media">
							<img src="images/icons/hp/schedule.png" alt="Schedule your free vet exam."  class="divcenter">
						</div>
						<div class="fbox-desc">
							<h3 class="center">Schedule a free vet exam.</h3>
							<p class="divcenter">A Membership Coordinator will contact you within 12 hours to schedule a FREE veterinary exam and behavior evaluation (valued at $400).</p>
						</div>
					</div>
				</div>
	
				<div class="col_one_third nobottommargin col_last">
					<div class="feature-box media-box">
						<div class="fbox-media">
							<img src="images/icons/hp/customize.png" alt="Customize your plan."  class="divcenter">
						</div>
						<div class="fbox-desc">
							<h3 class="center">Customize your plan.</h3>
							<p>Option to add Food Delivery, Parasite Control or Grooming to your plan.</p>
						</div>
					</div>
				</div>

			</div><!-- end container clearfix -->
				
			<div class="center topmargin">
				<a href="form.php" data-lightbox="ajax">
					<button type="button" class="center btn btn-default">
						Get Started
					</button>
				</a>
			</div>
		</div><!-- end container clearfix -->



			<div class="container topmargin clearfix">
				
				
				<!-- Why Choose Hannah
				================================================			
				<div class="col_one_third nobottommargin">
		
					<div class="heading-block fancy-title nobottomborder title-bottom-border" id="learn">
						<h4>Why choose <span>Hannah</span></h4>
					</div>
		
					<p>Hannah The Pet Society is dedicated to removing the financial burden associated with caring for a pet, while maintaining a solid focus on providing the quality service and compassion that Hannah Pet Families have come to expect. Our world class Veterinarians and Veterinary clinics are available 24/7 for one low monthly fee. <br/><a href="#">Learn more</a></p>
					
		
				</div>
		
				<div class="col_two_third nobottommargin col_last">
		
					<div class="heading-block fancy-title nobottomborder title-bottom-border">
						<h4>What we <span>offer</span></h4>
					</div>
					
					<div class="col_half nobottommargin">
						<div>
							<i class="i-plain icon-ambulance col-md-2"></i>
							<p class="col-md-10">
								<strong>24 hours a day &amp; 7 days a week</strong>
								<br>
								Our Veterinarians our available at the first sign of an emergency.</p>
						</div>

						<div>
							<i class="i-plain icon-world col-md-2"></i>
							<p class="col-md-10">
								<strong>World Class Care</strong>
								<br>
								Hannah Physicians are recognized globally for their contributions to Pet health.</p>
						</div>
					</div>

					<div class="col_half nobottommargin col_last">
						<div>
							<i class="i-plain icon-thumbs-up2 col-md-2"></i>
							<p class="col-md-10">
								<strong>Behavior Training</strong>
								<br>
								Our training classes help get your Pet acquainted to your way of life.</p>
						</div>

						<div>
							<i class="i-plain icon-truck col-md-2"></i>
							<p class="col-md-10">
								<strong>Pet Transportation</strong>
								<br>
								The Hannah Pet Limo can pick up and transport your pet to and from their appointment.</p>
						</div>
					</div>
				
				</div>
		
				<div class="clear"></div>
				
			</div><!-- end container clearfix -->
		</div><!-- end content-wrap -->

		<div class="content" style="background-color: #f5f5f5;">		
			<div class="container clearfix">	
				<div class="promo nopadding bottommargin topmargin">
					<i class="i-plain i-xlarge icon-phone"></i>
					<h3>Call us today at <span><a href="tel:360-816-6000">360.816.6000</a></span> or Email us at <span><a href="mailto:MembershipTeam@HannahSociety.com">MembershipTeam@HannahSociety.com</a></span></h3>
					<span>Portland's only comprehensive pet care and vet hospital. Hannah is redefining your neighborhood vet clinic.</span>
<!-- 					<a href="#" class="button button-large button-rounded">Start Now</a> -->
				</div>
			</div>
		</div>
				

				
			<!-- Hannah Is ...
			================================================
			<div class="topmargin-lg">
				<div class="container clearfix">

					<div class="col_two_fifth topmargin-sm">
						<img src="/images/team/8.jpg" alt="blah">
					</div>

					<div class="col_three_fifth nobottommargin col_last">
						<div class="heading-block fancy-title nobottomborder topmargin-sm title-bottom-border text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="1800">
							<h4>
								Hannah is <span class="t-rotate color">Simple|Flexible|Easy|Fresh|Unique</span>
							</h4>
						</div>

						<p>Hannah set out to create a completely different model for Pet care that removes all the barriers, so that more people can experience the joy and happiness of having a Pet in their lives. Hannah Pet Parents have no worries about the cost, convenience, nutrition, or behavior of their pet. Whenever our members need help with their Pet, they know that Hannah The Pet Society is here for them.</p>			
	
						<p class="topmargin-sm">
							<a href="#">Learn more</a> about Hannah's revolutionary business model. 
						</p>				 

						<div class="testimonial noborder noshadow">
							<div class="testi-image">
								<a href="#"><img src="images/testimonials/johanny.jpg" alt="Customer Testimonails"></a>
							</div>
							<div class="testi-content">
								<p>Hannah gives me the peace of mind I need for ensuring I can give my dogs the longest happiest life possible.</p>
								<div class="testi-meta">
									Johanny
									<span>Hannah Member since May 2013</span>
								</div>
							</div>
						</div>
	

					</div>
				</div>
			</div>
-->
		</div>
		
		
		
		<!-- Member Testimonials
		============================================= -->	
		<div class="container clearfix topmargin-lg bottommargin">
			<h3 class="center topmargin">Member Testimonials</h3>
			
			<!-- Testimonial Carousel -->
			<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="20" data-items-xs="1" data-items-sm="2" data-items-lg="3">
				<!-- testimonial #1 -->
				<div class="oc-item">
					<div class="testimonial">
						<div class="testi-image">
							<a href="#"><img src="images/testimonials/johanny.jpg" alt="Customer Testimonails"></a>
						</div>
						<div class="testi-content">
							<p>Hannah gives me the peace of mind I need for ensuring I can give my dogs the longest happiest life possible. Hannah partners with me on the wellness of my dogs and I am always in charge with decision making. I can afford 4 dogs because of Hannah. One of my dogs is 15 years old and Hannah has extended his life several times. I cannot imagine owning my dogs without the innovative Hannah pet care business model.</p>
							<div class="testi-meta">
								Johanny
								<span>Hannah Member since May 2013</span>
							</div>
						</div>
					</div>
				</div>

				<!-- testimonial #2 -->	
				<div class="oc-item">
					<div class="testimonial">
						<div class="testi-image">
							<a href="#"><img src="images/testimonials/dorene.jpg" alt="Customer Testimonails"></a>
						</div>
						<div class="testi-content">
							<p>I have had two Hannah pets for 3 years now and I am so appreciative to have their partnership in caring for my special family members. The staff at Westside is so caring and friendly. I have never for a minute been sorry that I chose to partner with Hannah the Pet Society!</p>
							<div class="testi-meta">
								Dorene
								<span>Hannah Member since May 2013</span>
							</div>
						</div>
					</div>
				</div>

				<!-- testimonial #3 -->	
				<div class="oc-item">
					<div class="testimonial">
						<div class="testi-image">
							<a href="#"><img src="images/testimonials/jeff.jpg" alt="Customer Testimonails"></a>
						</div>
						<div class="testi-content">
							<p>The Hannah Society has been the best, they are super supportive and care for my animals.  I've been with Hannah We have had nothing but good experiences with Hannah.  We have taken our french bulldog there for veterinary care and for the obedience classes.  Yesterday our dog had some stomach discomfort.  we took her in, they took some x-rays (to make sure she hadn't eaten a random Christmas decoration) and concluded it was gastritis.  We were given a prescription medicine and prescription dog food and were back on our way within an hour.</p>
							<div class="testi-meta">
								Jeff
								<span>Hannah Member since January 2015</span>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Testimonial Carousel -->
			<h4 class="fright" style="margin-top: 10px;">
				<a href="#">... See more testimonials</a>
			</h4>
		</div><!-- End Container Clearfix -->
		
		<!-- Counter in Parallax
		============================================= -->	
		<div class="section parallax nobottommargin" style="background: url('images/parallax/3.jpg'); background-size:cover; background-position-y: 300px;" data-stellar-background-ratio="0.3">
			<div class="container clearfix">
		
				<div class="col_one_third nobottommargin center">
					<i class="i-plain i-xlarge divcenter nobottommargin icon-diamond"></i>
					<div class="counter counter-large" style="color: #1abc9c;">
						<span data-from="100" data-to="8465" data-refresh-interval="50" data-speed="2000"></span>
					</div>
					<h5>Current Members</h5>
				</div>
	
				<div class="col_one_third nobottommargin center">
					<i class="i-plain i-xlarge divcenter nobottommargin icon-globe"></i>
					<div class="counter counter-large" style="color: #e74c3c;">
						<span data-from="100" data-to="500684001" data-refresh-interval="50" data-speed="2000000"></span>
					</div>
					<h5>Pet's Lives Changed</h5>
				</div>
	
				<div class="col_one_third nobottommargin center col_last">
					<i class="i-plain i-xlarge divcenter nobottommargin icon-gift"></i>
					<div class="counter counter-large" style="color: #3498db;">
						<span data-from="100" data-to="2154" data-refresh-interval="50" data-speed="3500"></span>
					</div>
					<h5>Savings to Members*</h5>
				</div>
		
			</div>
		</div><!-- end section parallax -->
		
	</section>



	


<?php	
	#***************************************
	#*
	#*	Footer and HTML Closing
	#*
	#***************************************
	
	include('inc_footer.php'); // Contains footer content
	include('inc_foot.php'); // Contains End of Wrapper, Go To Top, and JavaScript Scripts
?>

		
