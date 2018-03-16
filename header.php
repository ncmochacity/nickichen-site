<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio_nc
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--Bootstrap-->
    <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons-->
    <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.1/hamburgers.min.css" />

    <title>Bootstrap theme</title>
    <!-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio-nc' ); ?></a>

	<header class="site-header" role="banner">
      <!--NAVBAR-->
      <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
							<!--hamburger icon
	              <button type="button" class="menu-btn">
									<span class="icon"></span>
								</button>
								end of hamburger-->
	              <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-logo.png" width="90px" height="90px" alt="logo"></a>
							<!-- ending menu overlay-->
						</div><!--Navbar-header-->
						<div class="menu-overlay">
							<a class="close-btn"></a>
							<div class="overlay-content">
							<?php
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => 'nav',
									'container_class' => 'navbar-collapse collapse',
									'menu_class' => 'nav navbar-nav'
								));
							;?>
							</div>
							<!--overlay content-->
						</div>
						<!--ending overlay-->
          </div><!--ending Container-->
        </div><!--ending Navbar-->
      </div>
			<!--ending navbar-wrapper-->
    </header>
	<div id="content" class="site-content">
