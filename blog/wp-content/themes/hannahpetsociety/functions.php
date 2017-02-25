<?php
	/* Theme Support
	========================================= */	
	function hps_theme_setup() {
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme', 'hps_theme_setup');
	
	
	
	/* Excerpt Length Control
	========================================= */
	function set_excerpt_length(){
		return 35;
	}
	
	add_filter('excerpt_length', 'set_excerpt_length');
	

	