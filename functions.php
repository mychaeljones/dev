<?php
		
	#***************************************
	#*
	#*	Variables
	#*
	#***************************************
	
	$url = $_SERVER['REQUEST_URI'];

		
	
	#***************************************
	#*
	#*	Inclusions
	#*
	#***************************************
	
	include('blog/wp-load.php');	# Load WordPress Library
	
	
	
	#***************************************
	#*
	#*	Call to Actions
	#*
	#***************************************
	
	function call_to_action($type) {
		if ($type == "banner") {
			include('inc_callToAction.php');
		}
		
		if ($type == "quote") {
			include('inc_requestQuote.php');
		}
	}
	
	
	
	#***************************************
	#*
	#*	See if page is index
	#*
	#***************************************
	
	function check_for_index() {	
		$path = "index";																			
		
		# url to check
		$url = $_SERVER['REQUEST_URI'];
		
		# separate $url by slashes and put into array
		$check_url = (explode("/", $url));
		
		# see if $path is in the url
		if (in_array($path, $check_url)) {
			return true;
		}
	}
	
	
	
	#***************************************
	#*
	#*	See if a blog is in the URL
	#*
	#***************************************
	
	function check_for_blog() {	
		$path = "blog";																			
		
		# url to check
		$url = $_SERVER['REQUEST_URI'];
		
		# separate $url by slashes and put into array
		$check_url = (explode("/", $url));
		
		# see if $path is in the url
		if (in_array($path, $check_url)) {
			return true;
		}
	}
	
	
	
	#***************************************
	#*
	#*	Social Media & RSS Feed Links - (v2)
	#*
	#***************************************
	
	function social($platform) {
		$social_media_links = array(
			"rss"		=> "/blog/?feed=rss2",
			"facebook" 	=> "https://www.facebook.com/TheHannahSociety/",
			"twitter" 	=> "https://twitter.com/HannahSociety",
			"instagram" => "https://instagram.com/hannahthepetsociety/",
			"pinterest" => "https://www.pinterest.com/hannah_society/",
			"email"		=> "MembershipTeam@HannahSociety.com",
			"telephone" => "+13608168000"
		);
		
		if(array_key_exists($platform, $social_media_links)) {
			echo $social_media_links[$platform]; 
		}
	}
	
	
	
	#***************************************
	#*
	#*	Development Options
	#*
	#***************************************
	
	# Show URL at top of page
	# echo $url;
	
	
?>