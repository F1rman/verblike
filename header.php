<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<title><?php the_title(); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#404040">
	<meta name="google-site-verification" content="hutkYk27UkfAtXErQuJ6ssF-VR5NclGUaVvJtSfy78Q" />
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/main.css">

	<?php wp_head(); ?>
</head>

<body>
	<div class="site-wrapper">

		  <?php if(!is_single()){ ?>
		  <div class="preloader">
		    <div class="status">&nbsp;</div>
		  </div>
		  <?php } ?>

		  <nav class="pmenu pmenu-vertical pmenu-left" id="pmenu">
		    <h3 id="hideLeftPush">Menu <i class="fa fa-arrow-right"></i></h3>
		    <div class="menu-short-container">
		      <ul id="menu-short" class="latte-push-menu menu">
		        <li class="menu-item"><a href="/">Index</a></li>
		        <li class="menu-item"><a href="/blog">Blog</a></li>
		      </ul>
		    </div>
		  </nav>
		  <a id="showLeftPush" class="fa fa-bars"></a>

	    <main class="page-content" aria-label="Content">
	      <div class="wrapper">
