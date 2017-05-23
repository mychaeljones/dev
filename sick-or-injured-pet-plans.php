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

		<div class="content-wrap topmargin-sm notoppadding">

			<div class="section notopmargin nobgcolor">

				<div class="container clearfix">

					<div class="heading-block center notopmargin">
						<h2>Sick or Injured Pet Plans</h2>
						<span>
							Sick or injured Pet? 
							No worries! <br> 
							Hannah usually can help at a much lower cost for you.
						</span>
					</div>

					<div class="col_full center">
						<img class="aligncenter" src="images/sick_and_injured.jpg" alt="Hannah's Sick and Injured Pet Plans">
					</div>

					<h3 class="center">Three easy steps:</h3>

					<div class="col_one_third nobottommargin">

						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="i-alt">1.</i></a>
							</div>
							<h3>Receive a Free Pet Health Exam.</h3>
							<p>Bring your Pet into one of our veterinary hospitals for a free health exam.</p>
						</div>

					</div>

					<div class="col_one_third nobottommargin">

						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="i-alt">2.</i></a>
							</div>
							<h3>Receive a Free Quote.</h3>
							<p>Receive a free quote of the cost to take care of your immediate Pet healthcare needs and a full explanation of our Hannah plans.</p>
						</div>

					</div>

					<div class="col_one_third nobottommargin col_last">

						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="i-alt">3.</i></a>
							</div>
							<h3>Become a Member.</h3>
							<p>Become a Hannah Member by signing a Membership Agreement. There is a one time Membership Fee of $199, which covers unlimited Pets.</p>
						</div>

					</div>

					<div class="clear clearfix"></div>

					<div class="center topmargin-sm">
						<a href="form.php" data-lightbox="ajax">
							<button type="button" class="center btn btn-default btn-success">
								Get Started
							</button>
						</a>
					</div>

				</div>

			</div>

			<div class="container clearfix">

				<div class="col_two_fifth topmargin nobottommargin center" style="opacity: 1;">
					<img src="/images/sick_and_injured2.jpg" alt="Hannah Pet Exam">
				</div>

				<div class="col_three_fifth nobottommargin col_last">

					<div class="heading-block">
						<h3>At your Pet's initial exam:</h3>
					</div>

					<p>
						<ul class="paws">
								
							<li>Hannah will provide a quote of the cost to address your Pet's immediate healthcare needs, which normally is significantly less than you would be charged elsewhere.</li>
	
							<li>50% of the quoted cost will be deferred - Members only have to pay this amount if and when they leave our program. </li>
	
							<li>Upon enrollment, Members can elect to pay the other 50% in 12 equal monthly installments or at the time of enrollment.*</li>
	
							<li>Receive treatment for your Pet and relax!</li>
							
							<li>If your Pet has a chronic condition that will require long term care or medication, we will provide a quote of the incremental monthly cost to you.</li>
						</ul>
					</p>
				</div>
				
				<div class="clear clearfix"></div>

				<div class="divider divider-right topmargin-sm"><i class="icon-heart"></i></div>

				<div class="col_full nobottommargin nobottompadding">
					<p style="font-size: .8em;"><strong>*</strong> Members that elect to pay 50% of the total cost to treat must remain in good standing for the 12 month period.  Additionally, if Hannah needs to refer a procedure to an external Specialist, the Member may have to pay any cost that we pay to the third party at the time of enrollment (but this amount normally will be substantially lower than it would cost a Member to seek treatment on their own).</p>
					
					<p style="font-size: .8em;"><strong>*</strong> Hannah accepts Pets with most pre-existing conditions, but reserves the right not to. Hannah does not accept aggressive Pets or Pets with certain back injuries, cancers, brain tumors or Parvo.</p>


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

		
