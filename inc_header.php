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
			<li>
				<a href="tel:1-360-816-8000" style="color: black;">
					<i class="i-plain icon-call nomargin"></i>
					<div class="he-text">
						Experiencing a Pet Emergency? 
						Need Help Now?
						<span>Call 360.816.8000 and bring your Pet in immediately.</span>
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
					<li <?php if ($basename == "what-is-hannah" OR $basename == "lifetime-membership" OR $basename == "total-lifetime-care" OR $basename == "philosophy-and-oath" OR $basename == "unique-pet-care-model") echo 'class="current"'; ?>><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>what-is-hannah.php"><div>About Hannah</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>what-is-hannah.php"><div>What is Hannah?</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>total-lifetime-care.php"><div>Total Lifetime Care</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>lifetime-membership.php"><div>Lifetime Membership</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>our-promise.php"><div>Our Promise</div></a></li>					
					
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>philosophy-and-oath.php"><div>Philosophy &amp; Oath</div></a></li>
														
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>hannahs-story.php"><div>Hannah's Story</div></a></li>
								
						</ul>
					</li>
					
					<li <?php if ($basename == "vet-care" OR $basename == "sick-or-injured-pet-plans") echo 'class="current"'; ?>><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-care.php"><div>Vet Care Plans</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-care.php"><div>Dog and Cat Plans</div></a></li>															
								
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>sick-or-injured-pet-plans.php"><div>Sick or Injured Pet Plans</div></a></li>

							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>guinea-pigs-and-bunnies.php"><div>Guinea Pigs and Bunnies</div></a></li>								
						</ul>
					</li>
					
					<li <?php if ($basename == "why-hannah" OR $basename == "reviews") echo 'class="current"'; ?>><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>why-hannah.php"><div>Why Hannah?</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>why-hannah.php"><div>Why Hannah?</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>how-are-we-able.php"><div>How Are We Able To Do It?</div></a></li>
															
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>reviews.php"><div>Reviews</div></a></li>
						</ul>
					</li>

					<li <?php if ($basename == "vet-services-wellness-care" OR $basename == "vet-services-emergency-care" OR $basename == "vet-services-dentals" OR $basename == "vet-services-spay-and-neuter" OR $basename == "vet-services-diagnostic-and-imaging" OR $basename == "vet-services-surgeries" OR $basename == "vet-services-pharmacy" OR $basename == "vet-services-behavior-support" OR $basename == "vet-services-training") echo 'class="current"'; ?>><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-wellness-care.php"><div>Vet Services</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-wellness-care.php"><div>Wellness Care</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-surgeries.php"><div>Surgeries</div></a></li>							
															
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-emergency-care.php"><div>Emergency Care</div></a></li>
							
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-diagnostic-and-imaging.php"><div>Diagnostic &amp; Imaging</div></a></li>								
								
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-dentals.php"><div>Dentals</div></a></li>
								
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-spay-and-neuter.php"><div>Spay &amp; Neuter</div></a></li>			

							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-pharmacy.php"><div>Pharmacy</div></a></li>

							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-behavior-support.php"><div>Behavior Support</div></a></li>

							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>vet-services-training.php"><div>Training</div></a></li>																
						</ul>
					</li>
					
					<li <?php if ($basename == "pet-match-counseling") echo 'class="current"'; ?>><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>pet-matching-services.php"><div>Pet Matching</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>pet-matching-services.php"><div>Pet Matching Services</div></a></li>
											
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>pets-looking-for-a-home.php"><div>Pets Looking for a Home</div></a></li>				
											
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>non-members-looking-to-rehome-pets.php"><div>Non-Members Looking to Rehome Pets</div></a></li>
						</ul>				
					
					</li>
					
					<li <?php if ($basename == "locations") echo 'class="current"'; ?>><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>locations.php"><div>Locations</div></a></li>
					
					<li><a href="#"><div>Community</div></a>
						<ul>
							<li><a href="<?php echo (check_for_blog()) ? '../../' : ''; ?>hannahs-helping-hands.php"><div>Hannah's Helping Hands</div></a></li>
															
							<li><a href="http://hannahpetfriends.org" target="_blank"><div>Hannah Friends Group</div></a></li>

							<li><a href="/blog/index.php" alt="News and Events Blog"><div>News and Events Blog</div></a></li>							
						</ul>
					</li>
					
					
				</ul>

				<!-- Top Search
				=============================================
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

<div class="clear"></div><!-- fix glitch -->