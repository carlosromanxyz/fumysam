<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FUMYSAM
 */

?>

<section id="laminas" class="font-raleway">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
			<?php $lamina = 0; ?>
			<?php if(have_rows('laminas')) : while(have_rows('laminas')) : the_row(); $lamina++; ?>
				<div class="carousel-item <?php if($lamina == 1) : echo 'active'; endif; ?>">
					<a href="<?php the_sub_field('enlace'); ?>">
						<?php $image = get_sub_field('imagen'); ?>
						<img src="<?php echo $image['sizes']['lamina']; ?>" class="d-block w-100" alt="<?php the_sub_field('titulo'); ?>t">
					</a>
					<div class="carousel-caption d-none d-md-block">
						<h3 class="mb-3 text-right"><span class="bg-black text-orange font-weight-bold text-uppercase p-2"><?php the_sub_field('titulo'); ?></span></h3>
						<p class="text-right"><span class="bg-black text-white p-2 mb-0"><?php the_sub_field('descripcion'); ?></span></p>
					</div>
					<div class="carousel-overlay position-absolute"></div>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>

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
			<div class="col-md-12 col-lg-6">
				<h4 class="section-title text-center font-weight-bold mb-3"><?php _e( 'Contáctenos', 'fumysam' ); ?></h4>
			</div>
			<div class="col-md-12 col-lg-6">
				<h5 class="font-weight-bold text-center">
					<span class="mr-2 mb-5"><i class="fa fa-envelope bg-orange text-white p-2 rounded-circle mr-1"></i><?php the_field('correo_electronico', 'option'); ?></span>
					<span><i class="fa fa-phone bg-orange text-white p-2 rounded-circle mr-1"></i><?php the_field('telefono', 'option'); ?></span>
				</h5>
			</div>
		</div>
	</div>
</section>

<section id="cobertura" class="font-raleway pt-5 pb-5">
	<div class="container">
		<h2 class="section-title font-weight-bold text-center mb-5 pb-2"><?php _e( 'Cobertura', 'fumysam' ); ?></h2>
		<p class="text-center mb-4 font-weight-bold"><?php the_field('texto_descriptivo'); ?></p>
		<div class="row">
			<?php if(have_rows('zonas')) : while(have_rows('zonas')) : the_row(); ?>
				<div class="col-md-4">
					<div class="cobertura position-relative mb-3">
						<?php $image = get_sub_field('imagen_de_la_zona'); ?>
						<img src="<?php echo $image['sizes']['zona']; ?>">
						<div class="position-absolute datos text-center text-white">
							<h5 class="text-uppercase font-weight-bold mb-5"><?php the_sub_field('nombre_de_la_zona'); ?></h5>
							<p class="font-weight-bold"><?php the_sub_field('nombre_del_representante'); ?></p>
							<p><a href="mailto:<?php the_sub_field('correo_electronico_del_representante'); ?>" class="text-white"><?php the_sub_field('correo_electronico_del_representante'); ?></a></p>
							<p><a href="tel:<?php the_sub_field('telefono_del_representante'); ?>" class="text-white"><?php the_sub_field('telefono_del_representante'); ?></a></p>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<section id="nuestra-empresa" class="font-raleway pt-5 pb-5">
	<div class="container">
		<h2 class="section-title font-weight-bold text-center mb-5 pb-2"><?php _e( 'Nuestra Empresa', 'fumysam' ); ?></h2>
		<div class="row">
			<div class="col-md-8">
				<?php the_field('contenido_de_nuestra_empresa'); ?>
			</div>
			<div class="col-md-4">
				<?php $image = get_field('imagen_de_nuestra_empresa'); ?>
				<img src="<?php echo $image['sizes']['cuadrado']; ?>" class="img-fluid rounded-circle" alt="Lorem ipsum dolor sit">
			</div>
		</div>
	</div>
</section>

<section id="destrezas" class="font-raleway pt-5 pb-5">
	<div class="container">
		<div class="row">
			<?php if(have_rows('destrezas')) : while(have_rows('destrezas')) : the_row(); ?>
				<div class="col-md-3">
					<div class="destreza text-center mb-3">
						<?php $image = get_sub_field('icono_de_la_destreza'); ?>
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('titulo_de_la_destreza'); ?>" class="mb-3">
						<h5 class="font-weight-bold"><?php the_sub_field('titulo_de_la_destreza'); ?></h5>
						<p><?php the_sub_field('descripcion_de_la_destreza'); ?></p>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<section id="calidad" class="font-raleway pt-5 pb-5 bg-gray-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-4">
				<div class="text-center pt-5 pb-5">
					<?php the_field('texto_de_la_seccion_calidad'); ?>
				</div>
			</div>
			<div class="col-md-12 col-lg-8">
				<div class="galeria text-center">
					<?php $images = get_field('galeria_de_la_seccion_calidad'); ?>
					<?php foreach ($images as $image) : ?>
						<img src="<?php echo $image['sizes']['calidad']; ?>" class="ml-2 mr-2 mb-2 d-inline-block rounded-circle" width="250px">
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="hablemos" class="font-raleway pt-5 pb-5">
	<div class="container">
		<h2 class="section-title font-weight-bold text-center text-white mb-5 pb-2"><?php _e( 'Hablemos', 'fumysam' ); ?></h2>
		<div class="row">
			<div class="col-md-12 col-lg-6">
				<!-- Este mapa se incrusta mediante ACF -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3457.2224567258218!2d-71.24597468394948!3d-29.94427928191879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691cba96506249b%3A0x65aa0dbe7db2edb5!2sAv+Cuatro+Esquinas+1529%2C+La+Serena%2C+Regi%C3%B3n+de+Coquimbo!5e0!3m2!1ses-419!2scl!4v1557345038815!5m2!1ses-419!2scl" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-12 col-lg-6">
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