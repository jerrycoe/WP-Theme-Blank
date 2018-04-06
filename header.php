<?php 
/**
 * WP Blank Theme Header.
 *
 * This file is output when a call to get_header() is executed
 * Displays the opening of the HTML document and head section as well as opening body tag
 *
 * @package WP-Theme-Blank
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if lt IE 9]>
  		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<base href="/">
<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="row">

			<div class="site-header-inner">
				<div class="site-branding">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>	
						</a>
					</h1>
				</div>
			</div>

		</div><!-- .row -->
	</div><!-- .container -->
</header><!-- #masthead -->

<div class="main-content">
	<div class="container">
		<div class="row">

			<div id="content" class="main-content-inner">