<?php require_once('../functions.php'); ?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Hannah Pet Society" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!-- Stylesheets
	============================================= -->
	<?php require_once('../inc_styles.php'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		
		<?php
			// Navigation 
			include('../inc_topbar.php');
			include('../inc_header.php'); 
		?>