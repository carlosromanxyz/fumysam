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

	<section id="otros-servicios" class="font-raleway pt-5 pb-5 bg-gray-light">
		<div class="container">
			<h2 class="section-title font-weight-bold text-center mb-5 pb-2"><?php _e( 'Otros servicios', 'fumysam' ); ?></h2>
			<div class="row">
				<?php

					/*
					 * The WordPress Query class.
					 *
					 * @link http://codex.wordpress.org/Function_Reference/WP_Query
					 */
					$args = array(

						// Type & Status Parameters
						'post_type'   => 'servicio',

						// Taxonomy Parameters
						'tax_query' => array(
							'relation' => 'AND',
							array(
								'taxonomy'         => 'categoria_servicio',
								'field'            => 'slug',
								'terms'            => array( 'otros-servicios' ),
								'include_children' => true,
								'operator'         => 'IN',
							),
						),
					);
				
				$query = new WP_Query( $args ); ?>
				<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
					<div class="col-md-4">
						<div class="servicio p-2 border border-dark mb-3">
							<?php $image = get_field('imagen_referencial'); ?>
							<img src="<?php echo $image['sizes']['otro-servicio']; ?>" class="img-fluid mb-3" alt="Lorem ipsum dolor sit amet">
							<h5 class="font-weight-bold"><?php the_title(); ?></h5>
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
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
