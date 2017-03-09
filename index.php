<?php 
	//OPTIMIZE: Insert WordPress into this file instead of relying on WordPress theme files pointing to our files.
	
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

	//	Each page needs to have it's own version of this page. 
	//  Doing so will allow for quick and painless global changes,
	//	while maintaining the proper URL references - hannandev:com/index.php or hannandev:com/services.php
	include('inc_content.php'); // Contains all content below header and above footer
	
	
	
	#***************************************
	#*
	#*	Footer and HTML Closing
	#*
	#***************************************
	
	include('inc_footer.php'); // Contains footer content
	include('inc_foot.php'); // Contains End of Wrapper, Go To Top, and JavaScript Scripts
?>

		
