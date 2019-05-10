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

	<section id="mision-y-vision" class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header bg-dark text-white font-weight-bold">
							<?php _e( 'Misión', 'fumysam' ); ?>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-2">
									<?php $image = get_field('imagen_de_la_mision'); ?>
									<img src="<?php echo $image['sizes']['thumbnail']; ?>" class="mb-2">
								</div>
								<div class="col-md-10">
									<p><?php the_field('texto_de_la_mision'); ?></p>
								</div>
							</div>
						</div>
					</div>				
				</div>
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header bg-dark text-white font-weight-bold">
							<?php _e( 'Visión', 'fumysam' ); ?>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-2">
									<?php $image = get_field('imagen_de_la_vision'); ?>
									<img src="<?php echo $image['sizes']['thumbnail']; ?>" class="mb-2">
								</div>
								<div class="col-md-10">
									<p><?php the_field('texto_de_la_vision'); ?></p>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>			
		</div>
	</section>

	<section id="politica-de-calidad" class="pt-5 pb-5 bg-dark">
		<div class="container">
			<h2 class="section-title font-weight-bold text-center mb-5 pb-2 text-white"><?php _e( 'Política de Calidad', 'fumysam' ); ?></h2>
			<p class="text-center mb-4 font-weight-bold text-white"><?php the_field('texto_antes_de_la_politica_de_calidad'); ?></p>
			<div class="row">
				<?php if(have_rows('politicas')) : while(have_rows('politicas')) : the_row(); ?>
					<div class="col-md-4">
						<div class="politica text-center p-3 bg-white mb-4">
							<?php $image = get_sub_field('icono_de_la_politica'); ?>
							<img src="<?php echo $image['sizes']['thumbnail']; ?>" class="mb-3">
							<p><?php the_sub_field('texto_de_la_politica'); ?></p>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<p class="text-center mb-4 text-white"><?php the_field('texto_despues_de_la_politica_de_calidad'); ?></p>
		</div>
	</section>

	<section id="hablemos" class="font-raleway pt-5 pb-5">
		<div class="container">
			<h2 class="section-title font-weight-bold text-center text-white mb-5 pb-2"><?php _e( 'Hablemos', 'fumysam' ); ?></h2>
			<div class="row">
				<div class="col-md-6">
					<!-- Este mapa se incrusta mediante ACF -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3457.2224567258218!2d-71.24597468394948!3d-29.94427928191879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691cba96506249b%3A0x65aa0dbe7db2edb5!2sAv+Cuatro+Esquinas+1529%2C+La+Serena%2C+Regi%C3%B3n+de+Coquimbo!5e0!3m2!1ses-419!2scl!4v1557345038815!5m2!1ses-419!2scl" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
					<div class="shadow-lg bg-white p-3 p-md-5">
						<!-- Esto se envía a Contact Form 7 -->
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" class="form-control" placeholder="Su nombre">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" name="correo" class="form-control" placeholder="Su correo electrónico">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="telefono" class="form-control" placeholder="Su teléfono">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" name="mensaje" placeholder="Su mensaje"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="text-right">
										<input type="submit" name="" value="Enviar mensaje" class="btn btn-dark">
									</div>
								</div>
							</div>
						</form>
					</div>
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
