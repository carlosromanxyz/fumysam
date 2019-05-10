<?php

// Register Custom Taxonomy
function custom_taxonomy_categoria_servicio() {

	$labels = array(
		'name'                       => _x( 'Categorías', 'Taxonomy General Name', 'fumysam' ),
		'singular_name'              => _x( 'Categoría', 'Taxonomy Singular Name', 'fumysam' ),
		'menu_name'                  => __( 'Categoría', 'fumysam' ),
		'all_items'                  => __( 'Todas las categorías', 'fumysam' ),
		'parent_item'                => __( 'Categoría principal', 'fumysam' ),
		'parent_item_colon'          => __( 'Categoría principal:', 'fumysam' ),
		'new_item_name'              => __( 'Nombre de la nueva categoría', 'fumysam' ),
		'add_new_item'               => __( 'Añadir nueva categoría', 'fumysam' ),
		'edit_item'                  => __( 'Editar categoría', 'fumysam' ),
		'update_item'                => __( 'Actualizar categoría', 'fumysam' ),
		'view_item'                  => __( 'Ver categoría', 'fumysam' ),
		'separate_items_with_commas' => __( 'Separar categorías por coma', 'fumysam' ),
		'add_or_remove_items'        => __( 'Añadir o eliminar categorías', 'fumysam' ),
		'choose_from_most_used'      => __( 'Escoger desde las más usadas', 'fumysam' ),
		'popular_items'              => __( 'Categorías populares', 'fumysam' ),
		'search_items'               => __( 'Buscar categorías', 'fumysam' ),
		'not_found'                  => __( 'Nada encontrado', 'fumysam' ),
		'no_terms'                   => __( 'No hay categorías', 'fumysam' ),
		'items_list'                 => __( 'Lista de categorías', 'fumysam' ),
		'items_list_navigation'      => __( 'Navegación por la lista de categorías', 'fumysam' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'categoria_servicio', array( 'servicio' ), $args );

}
add_action( 'init', 'custom_taxonomy_categoria_servicio', 0 );