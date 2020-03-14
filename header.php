<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AMG_Global
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aml-global' ); ?></a> -->
	<div id='mini-head'>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php dynamic_sidebar( 'sidebar-mini-head' ); ?>
				</div>
			</div>
		</div>
	</div>
	
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12 col-smg-12">

					<nav class="navbar navbar-expand-md navbar-light">
						<div class="site-branding navbar-brand">
						<?php
							the_custom_logo();
							?>
						</div><!-- .site-branding -->
						<!-- <a class="navbar-brand" href="#">
							<?php bloginfo('name'); ?>
						</a> -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<?php
							wp_nav_menu([
								'menu'            => 'primary',
								'theme_location'  => 'menu-1',
								'container'       => 'div',
								'container_id'    => 'navbarCollapse',
								'container_class' => 'collapse navbar-collapse',
								'menu_id'        => 'primary-menu',
								'menu_class'      => 'navbar-nav ml-auto',
								'depth'           => 0,
								'fallback_cb'     => 'bs4navwalker::fallback',
								'walker'          => new bs4navwalker()
							]);
						?>
					</nav>
				</div>
			</div>
		</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
