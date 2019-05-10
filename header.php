<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FUMYSAM
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fumysam' ); ?></a>

	<header id="masthead" class="site-header font-raleway bg-black text-white">
		<nav class="navbar navbar-expand-lg navbar-dark p-0">
			<div class="container">
				<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
				<a class="navbar-brand bg-orange p-3" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo[0]; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<?php 

					wp_nav_menu( array(
						'theme_location'  => 'menu-principal',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'navbar-nav mr-auto',
						'menu_id'         => '',
						'echo'            => true,
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 0,
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) ); ?>

					<div class="my-2 my-lg-0">
						<ul class="list-unstyled p-0 m-0 text-right">
							<li class="d-inline-block"><a href="#" class="text-white"><i class="fa fa-envelope border-white rounded-circle border p-1 mr-2"></i><span><?php the_field('correo_electronico', 'option'); ?></span></a></li>
							<li class="d-inline-block"><a href="#" class="text-white"><i class="fa fa-phone border-white rounded-circle border p-1 mr-2"></i><span><?php the_field('telefono', 'option'); ?></span></a></li>
						</ul>
					</div>
				</div>				
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
