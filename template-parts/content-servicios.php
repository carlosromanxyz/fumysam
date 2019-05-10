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

	<section id="servicios" class="font-raleway pt-5 pb-5 position-relative">
		<div class="container">
			<h2 class="section-title font-weight-bold text-center mb-5 pb-2"><?php _e( 'Nuestros servicios', 'fumysam' ); ?></h2>
			<ul class="list-unstyled p-0 m-0">
				<?php

				/*
				 * The WordPress Query class.
				 *
				 * @link http://codex.wordpress.org/Function_Reference/WP_Query
				 */
				$args = array(
					
					// Type & Status Parameters
					'post_type'   => 'servicio',

					// Pagination
					'posts_per_page' => -1,

					'tax_query' => array(
						'relation' => 'AND',
						array(
							'taxonomy'         => 'categoria_servicio',
							'field'            => 'slug',
							'terms'            => array( 'otros-servicios' ),
							'include_children' => false,
							'operator'         => 'NOT IN',
						)
					)

				);
			
				$query = new WP_Query( $args ); ?>
				<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
					<li class="text-center">
						<a href="<?php the_permalink(); ?>" class="text-dark">
							<img src="<?php the_post_thumbnail_url( 'thumbnails' ); ?>" class="mb-4">
							<h5 class="font-weight-bold"><?php the_title(); ?></h5>
							<?php the_excerpt(); ?>
						</a>
						<a href="<?php the_permalink(); ?>" class="btn btn-dark btn-md text-white text-uppercase"><?php _e( 'Cotizar', 'fumysam' ); ?></a>
					</li>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</ul>
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

	<section id="contactenos" class="font-raleway pt-5 pb-5 text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4 class="section-title text-center font-weight-bold mb-3"><?php _e( 'Contáctenos', 'fumysam' ); ?></h4>
				</div>
				<div class="col-md-6">
					<h5 class="font-weight-bold text-center">
						<span class="mr-2 mb-5"><i class="fa fa-envelope background-orange text-white p-2 rounded-circle mr-1"></i><?php the_field('correo_electronico', 'option'); ?></span>
						<span><i class="fa fa-phone background-orange text-white p-2 rounded-circle mr-1"></i><?php the_field('telefono', 'option'); ?></span>
					</h5>
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
