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
					<br>
					Need Help Now?
					<span>360.816.8000</span>
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
					<li class="current"><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>what-is-hannah.php"><div>What is Hannah?</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>lifetime-membership.php"><div><i class="icon-stack"></i>Lifetime Membership</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>total-lifetime-care.php"><div><i class="icon-stack"></i>Total Lifetime Care</div></a></li>
					
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>philosophy-and-oath.php"><div><i class="icon-umbrella"></i>Philosophy &amp; Oath</div></a></li>
														
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>pet-care-model.php"><div><i class="icon-gift"></i>Hannah's Unique Pet Care Model</div></a></li>
								
						</ul>
					</li>
					
					<li><a href="#"><div>Vet Plans</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>dog-plans.php"><div><i class="icon-stack"></i>Dog Plans</div></a></li>
															
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>cat-plans.php"><div><i class="icon-gift"></i>Cat Plans</div></a></li>
								
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>sick-or-injured-pet-plans.php"><div><i class="icon-umbrella"></i>Sick or Injured Pet Plans</div></a></li>
								
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>additional-services.php"><div><i class="icon-line-layout"></i>Additional Services</div></a></li>
								
							<li><a href="#"><div><i class="icon-line-columns"></i>Inquire Online</div></a></li>

							<li><a href="#"><div><i class="icon-align-justify2"></i>Request Appointment</div></a></li>
						</ul>
					</li>
					
					<li><a href="#"><div>Why Hannah?</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>coverage-comparison.php"><div><i class="icon-stack"></i>Compare to Pet Insurance</div></a></li>

							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>coverage-comparison.php"><div><i class="icon-stack"></i>Compare to Wellness Plans</div></a></li>
							
							<li><a href="#"><div><i class="icon-stack"></i>Commonly Asked Questions</div></a></li>
															
							<li><a href="#"><div><i class="icon-line-layout"></i>Reviews</div></a></li>
						</ul>
					</li>

					<li><a href="#"><div>Vet Services</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>wellness-care.php"><div><i class="icon-stack"></i>Wellness Care</div></a></li>
															
							<li><a href="#"><div><i class="icon-gift"></i>Emergency Care</div></a></li>
								
							<li><a href="#"><div><i class="icon-umbrella"></i>Dentals</div></a></li>
								
							<li><a href="#"><div><i class="icon-line-layout"></i>Spay/Neuter</div></a></li>

							<li><a href="#"><div><i class="icon-line-layout"></i>Radiology/Ultrasound</div></a></li>
							
							<li><a href="#"><div><i class="icon-line-layout"></i>Surgeries</div></a></li>

							<li><a href="#"><div><i class="icon-line-layout"></i>Pharmacy</div></a></li>

							<li><a href="#"><div><i class="icon-line-layout"></i>Behavior Support</div></a></li>

							<li><a href="#"><div><i class="icon-line-layout"></i>Training</div></a></li>																
						</ul>
					</li>
					
					<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>locations.php"><div>Locations</div></a>
<!--
						<ul>
							<li><a href="veterinary-hospitals.php"><div><i class="icon-stack"></i>Veterinary Hospitals</div></a></li>
															
							<li><a href="#"><div><i class="icon-gift"></i>Portland</div></a></li>
																						
							<li><a href="#"><div><i class="icon-gift"></i>Tigard</div></a></li>
						</ul>
-->
					</li>
					
					<li><a href="#"><div>Contact</div></a>
						<ul>
							<li><a href="#"><div><i class="icon-stack"></i>Contact Form</div></a></li>
															
							<li><a href="#"><div><i class="icon-gift"></i>News and Events</div></a></li>
																						
							<li><a href="#"><div><i class="icon-gift"></i>Give Us Feedback</div></a></li>
						</ul>
					</li>
					
					<li><a href="#"><div>Community</div></a>
						<ul>
							<li><a href="#"><div><i class="icon-stack"></i>Hannah's Helping Hands</div></a></li>
															
							<li><a href="#"><div><i class="icon-gift"></i>Hannah Friends Group</div></a></li>
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