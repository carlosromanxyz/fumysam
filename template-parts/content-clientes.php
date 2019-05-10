<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FUMYSAM
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mb-5" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
		<?php the_title( '<h1 class="entry-title text-center text-orange text-uppercase font-weight-bold"><span class="bg-gray-light pt-1 pb-1 pl-5 pr-5">', '</span></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content container">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fumysam' ),
			'after'  => '</div>',
		) );
		?>

		
	</div><!-- .entry-content -->

	<section id="area-clientes" class="pt-5 pb-5 bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="data bg-orange p-2 p-md-5">
						<?php the_field('texto_area_clientes'); ?>
					</div>
				</div>
				<div class="col-md-6">
					<!-- Este formulario se adapta al nativo de WordPress -->
					<form class="loginform text-white p-2 p-md-5">
						<div class="form-group">
							<label for="username"><?php _e( 'Nombre de usuario', 'fumysam' ); ?></label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label for="password"><?php _e( 'Contraseña', 'fumysam' ); ?></label>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="form-group text-right">
							<input type="submit" name="login" value="Iniciar sesión" class="btn btn-dark">
						</div>
					</form>
				</div>				
			</div>
		</div>
	</section>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'fumysam' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
