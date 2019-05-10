<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FUMYSAM
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer font-raleway text-white bg-black">
		<div class="bg-orange pt-5 pb-5 border border-top-0 border-left-0 border-right-0 border-white text-center">
			<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo[0]; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
		</div>
		<div class="pt-5 pb-5 text-center">
			<?php

			wp_nav_menu( array(
				'theme_location'  => 'menu-principal',
				'menu'            => '',
				'container'       => '',
				'container_class' => 'menu-{menu-slug}-container',
				'container_id'    => '',
				'menu_class'      => 'menu text-left text-md-center list-unstyled',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			) );

			?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center">
					<i class="fa fa-envelope border border-white p-4 rounded-circle mb-3"></i>
					<p class="mb-5"><a href="mailto:<?php the_field('correo_electronico', 'option'); ?>" class="text-white"><?php the_field('correo_electronico', 'option'); ?></a></p>
				</div>
				<div class="col-md-4 text-center">
					<i class="fa fa-phone border border-white p-4 rounded-circle mb-3"></i>
					<p class="mb-5"><a href="tel:<?php the_field('correo_electronico', 'option'); ?>" class="text-white"><?php the_field('telefono', 'option'); ?></a></p>
				</div>
				<div class="col-md-4 text-center">
					<i class="fa fa-map-marker border border-white p-4 rounded-circle mb-3"></i>
					<p class="mb-5"><?php the_field('direccion', 'option'); ?></p>
				</div>
			</div>
		</div>
		<div class="bg-gray border border-bottom-0 border-left-0 border-right-0 border-white pt-4 pb-4">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="mb-0 text-center text-md-left text-white">
							&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - <?php _e( 'Algunos derechos reservados', 'fumysam' ); ?> -
							<a href="<?php the_field('facebook', 'option'); ?>" class="text-white"><i class="fab fa-facebook-square"></i></a>
							<a href="<?php the_field('instagram', 'option'); ?>" class="text-white"><i class="fab fa-instagram"></i></a>
						</p>
					</div>
					<div class="col-md-6">
						<p class="text-center text-md-right mb-0"><a href="https://carlosroman.xyz" class="text-white"><?php _e( 'Desarrollado por', 'fumysam' ); ?> Carlos Rom&aacute;n</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
