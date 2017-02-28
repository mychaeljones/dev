<?php
	/* Theme Support
	========================================= */	
	function hps_theme_setup() {
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme', 'hps_theme_setup');
	
	
	
	/* Excerpt Control
	========================================= */
	// Show 75 words for post excerpt
	function set_excerpt_length(){
		return 25;
	}
	add_filter('excerpt_length', 'set_excerpt_length');
	
	// Remove Read More "..."
	function remove_excerpt_more($more) {
		return null;
	}
	add_filter('excerpt_more', 'remove_excerpt_more');
	

	