<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FUMYSAM
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header pt-5 pb-5 mb-5 bg-dark">
		<?php the_title( '<h2 class="entry-title text-center text-orange text-uppercase font-weight-bold"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark"><span class="bg-gray-light pt-1 pb-1 pl-5 pr-5">', '</span></a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content container">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fumysam' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

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

	<section id="contactenos" class="font-raleway pt-5 pb-5 text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4 class="section-title text-center font-weight-bold mb-3"><?php _e( 'Contáctenos', 'fumysam' ); ?></h4>
				</div>
				<div class="col-md-6">
					<h5 class="font-weight-bold text-center">
						<span class="mr-2 mb-5"><i class="fa fa-envelope bg-orange text-white p-2 rounded-circle mr-1"></i><?php the_field('correo_electronico', 'option'); ?></span>
						<span><i class="fa fa-phone bg-orange text-white p-2 rounded-circle mr-1"></i><?php the_field('telefono', 'option'); ?></span>
					</h5>
				</div>
			</div>
		</div>
	</section>

	<footer class="entry-footer">
		<?php fumysam_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
