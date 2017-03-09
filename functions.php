<?php
	#***************************************
	#*
	#*	See if a blog is in the URL
	#*
	#***************************************
	
	function check_for_blog() {	
		$path = "blog";																			
		
		# url to check
		$url = $_SERVER['REQUEST_URI']; //
		
		# separate $url by slashes and put into array
		$check_url = (explode("/", $url));
		
		# see if $path is in the url
		if (in_array($path, $check_url)) {
			return true;
		}
	}
	
	
	
	#***************************************
	#*
	#*	Load WordPress Library
	#*
	#***************************************
	
	include('blog/wp-load.php');
	
	
	
	#***************************************
	#*
	#*	Social Media Links
	#*
	#***************************************
		
	function social($platform) {
	
		$facebook = "https://www.facebook.com/TheHannahSociety/";
		$twitter = "https://twitter.com/HannahSociety";
		$instagram = "https://www.instagram.com/hannahthepetsociety/";
	
		switch ($platform) {
			case "facebook":
				echo $facebook;
				break;
				
			case "twitter":
				echo $twitter;
				break;
				
			case "instagram":
				echo $instagram;
				break;
		}		
	}
	
	
?>