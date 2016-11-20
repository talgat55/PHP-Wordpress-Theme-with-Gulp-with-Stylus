<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site"> 
 
		<header id="masthead" class="site-header" role="header">
			<div class="container">
				
				<div id="logo"> <!-- logo -->
					<a href="<?php  echo home_url(); ?>">
						
						<img src="<?php   echo get_template_directory_uri() . "/images/logo.png" ?>">

					</a>
				</div> <!-- end logo -->

				<div id="navigation"> <!-- Start navigation-->

					<?php if(has_nav_menu('header_nav')) { ?>
						
						<ul class="sf-menu">	
					   	   <?php wp_nav_menu( ['theme_location' => 'header_nav'] ); ?>
					    </ul>

					<?php } else{


						}	?>


				</div><!-- end navigation -->
				<div id="header-social-bar">
					<ul class="social-bar-list">
						<li class="social-bar-item">

							<a href="#"></a>
							
						</li>
					</ul>
				</div>
				<div id="header-search">
					<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
						<input type="text" class="search-field" placeholder="<?php echo __('Search...', "light"); ?>" value="" name="s" title="<?php echo __('Search for:', "light"); ?>" />
						<input type="submit" class="search-submit" value="<?php echo __('Search', "light"); ?>" />
					</form>
				</div>
			
			</div><!-- .site-container -->
		</header><!-- .site-header -->
 

	<div id="content" class="site-content">
