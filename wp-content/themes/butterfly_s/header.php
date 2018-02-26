<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Damion" rel="stylesheet">
	
	<?php wp_head(); 
	global $redux_demo;
	?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="header" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="site-branding">
						<?php if ($redux_demo['site-logo']['url']) { ?>
							<div class="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $redux_demo['site-logo']['url']; ?>" class="img-responsive"></a>
							</div>
						<?php } else { ?>
							 <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php } ?>
						<?php
						/*the_custom_logo();
						if ( is_front_page() && is_home() ) : ?>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description;*/ /* WPCS: xss ok. */ ?><!-- </p> -->
						<?php
						/*endif;*/ ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-sm-7">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'depth'				=> 3, // 1 = with dropdowns, 0 = no dropdowns.
								'container'			=> 'div',
								'container_class'	=> 'collapse navbar-collapse',
								'container_id'		=> 'bs-example-navbar-collapse-1',
								'menu_class'		=> 'navbar-nav mr-auto',
							    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
							    'walker'			=> new WP_Bootstrap_Navwalker()
							) );
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-sm-2">
					<div class="search-social">
						<?php //echo do_shortcode('[wpbsearch]'); ?>
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
						    <label>
						        <span class="screen-reader-text">Search for:</span>
						        <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
						    </label>
						    <input type="submit" class="search-submit" value="Search" />
						</form>		
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
