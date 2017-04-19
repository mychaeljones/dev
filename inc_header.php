<?php 
	# name of page
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
?>


<!-- Header
============================================= -->
<header id="header" class="sticky-style-2">

	<div class="container clearfix">

		<!-- Logo
		============================================= -->
		<div id="logo">
			<?php 
				if(check_for_blog() == true) {
					echo '<a href="../../index.php" class="standard-logo" data-dark-logo="images/logo.png"><img src="../../images/logo.png" alt="Hannah The Pet Society Logo"></a>';
					echo '<a href="../../index.php" class="retina-logo" data-dark-logo="images/logo@2x.png"><img src="../../images/logo@2x.png" alt="Hannah The Pet Society Logo"></a>';
				} else {
					echo '<a href="index.php" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="Hannah The Pet Society Logo"></a>';
					echo '<a href="index.php" class="retina-logo" data-dark-logo="images/logo@2x.png"><img src="images/logo@2x.png" alt="Hannah The Pet Society Logo"></a>';
				}
			?>
		</div><!-- #logo end -->

		<ul class="header-extras">
<!--
			<li>
				<i class="i-plain icon-email3 nomargin"></i>
				<div class="he-text">
					Drop an Email
					<span>info@canvas.com</span>
				</div>
			</li>
-->
			
			<li>
			<a href="tel:1-360-816-8000" style="color: black;">
				<i class="i-plain icon-call nomargin"></i>
				<div class="he-text">
					Experiencing a Pet Emergency? 
					Need Help Now?
					<span>Call 360.816.8000 and bring your Pet in immediately. <br>Click here for more details.</span>
				</div>
			</a>
			</li>
		</ul>

	</div>

	<div id="header-wrap">

		<!-- Primary Navigation
		============================================= -->
		<nav id="primary-menu" class="style-2">

			<div class="container clearfix" id="testing">

				<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

				<ul>
					<li <?php if ($basename == "what-is-hannah" OR $basename == "lifetime-membership" OR $basename == "total-lifetime-care" OR $basename == "philosophy-and-oath" OR $basename == "unique-pet-care-model") echo 'class="current"'; ?>><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>what-is-hannah.php"><div>What is Hannah?</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>what-is-hannah.php"><div>What is Hannah?</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>lifetime-membership.php"><div>Lifetime Membership</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>total-lifetime-care.php"><div>Total Lifetime Care</div></a></li>
					
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>philosophy-and-oath.php"><div>Philosophy &amp; Oath</div></a></li>
														
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>hannahs-story.php"><div>Hannah's Story</div></a></li>
								
						</ul>
					</li>
					
					<li><a href="#"><div>Vet Plans</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>dog-plans.php"><div>Dog Plans</div></a></li>
															
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>cat-plans.php"><div>Cat Plans</div></a></li>
								
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>sick-or-injured-pet-plans.php"><div>Sick or Injured Pet Plans</div></a></li>
								
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>additional-services.php"><div>Additional Services</div></a></li>
								
							<li><a href="inquire-online.php"><div>Inquire Online</div></a></li>

							<li><a href="request-appointment.php"><div>Request Appointment</div></a></li>
						</ul>
					</li>
					
					<li><a href="#"><div>Why Hannah?</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>coverage-comparison.php"><div>Compare to Pet Insurance</div></a></li>

							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>wellness-comparison.php"><div>Compare to Wellness Plans</div></a></li>

							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>fee-for-service-comparison.php"><div>Compare to Fee For Service</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>commonly-asked-questions.php"><div>Commonly Asked Questions</div></a></li>
															
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>reviews.php"><div>Reviews</div></a></li>
						</ul>
					</li>

					<li><a href="#"><div>Vet Services</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>wellness-care.php"><div>Wellness Care</div></a></li>
															
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>emergency-care.php"><div>Emergency Care</div></a></li>
								
							<li><a href="#"><div>Dentals</div></a></li>
								
							<li><a href="#"><div>Spay/Neuter</div></a></li>

							<li><a href="#"><div>Radiology/Ultrasound</div></a></li>
							
							<li><a href="#"><div>Surgeries</div></a></li>

							<li><a href="#"><div>Pharmacy</div></a></li>

							<li><a href="#"><div>Behavior Support</div></a></li>

							<li><a href="#"><div>Training</div></a></li>																
						</ul>
					</li>
					
					<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>locations.php"><div>Locations</div></a>
<!--
						<ul>
							<li><a href="veterinary-hospitals.php"><div>Veterinary Hospitals</div></a></li>
															
							<li><a href="#"><div>Portland</div></a></li>
																						
							<li><a href="#"><div>Tigard</div></a></li>
						</ul>
-->
					</li>
					
					<li><a href="#"><div>Contact</div></a>
						<ul>
							<li><a href="contact.php"><div>Contact Form</div></a></li>
															
							<li><a href="feedback.php"><div>Give Us Feedback</div></a></li>
						</ul>
					</li>
					
					<li><a href="#"><div>Community</div></a>
						<ul>
							<li><a href="#"><div>Hannah's Helping Hands</div></a></li>
															
							<li><a href="#"><div>Hannah Friends Group</div></a></li>

							<li><a href="news.php"><div>News and Events</div></a></li>																
						</ul>
					</li>
					
					<li><a href="/blog/index.php"><div>Blog</div></a>
				</ul>

				<!-- Top Search
				============================================= -->
				<div id="top-search">
					<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
					<form action="search.html" method="get">
						<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
					</form>
				</div><!-- #top-search end -->

			</div>

		</nav><!-- #primary-menu end -->

	</div>

</header><!-- #header end -->