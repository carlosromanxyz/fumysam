<?php

// Register Custom Post Type Servicio
function custom_post_type_servicio() {

	$labels = array(
		'name'                  => _x( 'Servicios', 'Post Type General Name', 'fumysam' ),
		'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'fumysam' ),
		'menu_name'             => __( 'Servicios', 'fumysam' ),
		'name_admin_bar'        => __( 'Servicio', 'fumysam' ),
		'archives'              => __( 'Archivos de servicios', 'fumysam' ),
		'attributes'            => __( 'Atributos del servicio', 'fumysam' ),
		'parent_item_colon'     => __( 'Servicio principal', 'fumysam' ),
		'all_items'             => __( 'Todos los servicios', 'fumysam' ),
		'add_new_item'          => __( 'Añadir nuevo servicio', 'fumysam' ),
		'add_new'               => __( 'Añadir nuevo', 'fumysam' ),
		'new_item'              => __( 'Nuevo servicio', 'fumysam' ),
		'edit_item'             => __( 'Editar servicio', 'fumysam' ),
		'update_item'           => __( 'Actualizar servicio', 'fumysam' ),
		'view_item'             => __( 'Ver servicio', 'fumysam' ),
		'view_items'            => __( 'Ver servicios', 'fumysam' ),
		'search_items'          => __( 'Buscar servicios', 'fumysam' ),
		'not_found'             => __( 'Nada encontrado', 'fumysam' ),
		'not_found_in_trash'    => __( 'No hay nada en la Papelera', 'fumysam' ),
		'featured_image'        => __( 'Icono del servicio', 'fumysam' ),
		'set_featured_image'    => __( 'Indicar como ícono del servicio', 'fumysam' ),
		'remove_featured_image' => __( 'Quitar ícono del servicio', 'fumysam' ),
		'use_featured_image'    => __( 'Usar como ícono del servicio', 'fumysam' ),
		'insert_into_item'      => __( 'Insertar en el servicio', 'fumysam' ),
		'uploaded_to_this_item' => __( 'Subida a este servicio', 'fumysam' ),
		'items_list'            => __( 'Lista de servicios', 'fumysam' ),
		'items_list_navigation' => __( 'Items list navigation', 'fumysam' ),
		'filter_items_list'     => __( 'Filter items list', 'fumysam' ),
	);
	$args = array(
		'label'                 => __( 'Servicio', 'fumysam' ),
		'description'           => __( 'Servicios de FUMYSAM', 'fumysam' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'servicio', $args );

}
add_action( 'init', 'custom_post_type_servicio', 0 );

// Register Custom Post Type Certificación
/* function custom_post_type_certificacion() {

	$labels = array(
		'name'                  => _x( 'Certificaciones', 'Post Type General Name', 'fumysam' ),
		'singular_name'         => _x( 'Certificación', 'Post Type Singular Name', 'fumysam' ),
		'menu_name'             => __( 'Certificaciones', 'fumysam' ),
		'name_admin_bar'        => __( 'Certificación', 'fumysam' ),
		'archives'              => __( 'Archivo de certificaciones', 'fumysam' ),
		'attributes'            => __( 'Atributos de la certificación', 'fumysam' ),
		'parent_item_colon'     => __( 'Certificación principal', 'fumysam' ),
		'all_items'             => __( 'Todas las certificaciones', 'fumysam' ),
		'add_new_item'          => __( 'Añadir nueva certificación', 'fumysam' ),
		'add_new'               => __( 'Añadir nueva', 'fumysam' ),
		'new_item'              => __( 'Nueva certificación', 'fumysam' ),
		'edit_item'             => __( 'Editar certificación', 'fumysam' ),
		'update_item'           => __( 'Actualizar certificación', 'fumysam' ),
		'view_item'             => __( 'Ver certificación', 'fumysam' ),
		'view_items'            => __( 'Ver certificaciones', 'fumysam' ),
		'search_items'          => __( 'Buscar certificación', 'fumysam' ),
		'not_found'             => __( 'Nada encontrado', 'fumysam' ),
		'not_found_in_trash'    => __( 'No hay nada en la Papelera', 'fumysam' ),
		'featured_image'        => __( 'Featured Image', 'fumysam' ),
		'set_featured_image'    => __( 'Set featured image', 'fumysam' ),
		'remove_featured_image' => __( 'Remove featured image', 'fumysam' ),
		'use_featured_image'    => __( 'Use as featured image', 'fumysam' ),
		'insert_into_item'      => __( 'Insert into item', 'fumysam' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fumysam' ),
		'items_list'            => __( 'Items list', 'fumysam' ),
		'items_list_navigation' => __( 'Items list navigation', 'fumysam' ),
		'filter_items_list'     => __( 'Filter items list', 'fumysam' ),
	);
	$args = array(
		'label'                 => __( 'Certificación', 'fumysam' ),
		'description'           => __( 'Certificaciones de FUMYSAM', 'fumysam' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'certificacion', $args );

}
add_action( 'init', 'custom_post_type_certificacion', 0 ); */

// Register Custom Post Type
function custom_post_type_programa() {

	$labels = array(
		'name'                  => _x( 'Programas', 'Post Type General Name', 'fumysam' ),
		'singular_name'         => _x( 'Programa', 'Post Type Singular Name', 'fumysam' ),
		'menu_name'             => __( 'Programas', 'fumysam' ),
		'name_admin_bar'        => __( 'Programa', 'fumysam' ),
		'archives'              => __( 'Archivo de programas', 'fumysam' ),
		'attributes'            => __( 'Item Attributes', 'fumysam' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fumysam' ),
		'all_items'             => __( 'Todos los programas', 'fumysam' ),
		'add_new_item'          => __( 'Añadir nuevo programa', 'fumysam' ),
		'add_new'               => __( 'Añadir nuevo', 'fumysam' ),
		'new_item'              => __( 'Nuevo programa', 'fumysam' ),
		'edit_item'             => __( 'Editar programa', 'fumysam' ),
		'update_item'           => __( 'Actualizar programa', 'fumysam' ),
		'view_item'             => __( 'Ver programa', 'fumysam' ),
		'view_items'            => __( 'Ver programas', 'fumysam' ),
		'search_items'          => __( 'Buscar programas', 'fumysam' ),
		'not_found'             => __( 'Nada encontrado', 'fumysam' ),
		'not_found_in_trash'    => __( 'No hay nada en la Papelera', 'fumysam' ),
		'featured_image'        => __( 'Imagen del programa', 'fumysam' ),
		'set_featured_image'    => __( 'Seleccionar imagen del programa', 'fumysam' ),
		'remove_featured_image' => __( 'Quitar imagen del programa', 'fumysam' ),
		'use_featured_image'    => __( 'Usar como imagen para el programa', 'fumysam' ),
		'insert_into_item'      => __( 'Insert into item', 'fumysam' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fumysam' ),
		'items_list'            => __( 'Items list', 'fumysam' ),
		'items_list_navigation' => __( 'Items list navigation', 'fumysam' ),
		'filter_items_list'     => __( 'Filter items list', 'fumysam' ),
	);
	$args = array(
		'label'                 => __( 'Programa', 'fumysam' ),
		'description'           => __( 'Programas de FUMYSAM', 'fumysam' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-view-site',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'programa', $args );

}
add_action( 'init', 'custom_post_type_programa', 0 );

// Register Custom Post Type
function custom_post_type_resolucion() {

	$labels = array(
		'name'                  => _x( 'Resoluciones', 'Post Type General Name', 'fumysam' ),
		'singular_name'         => _x( 'Resolución', 'Post Type Singular Name', 'fumysam' ),
		'menu_name'             => __( 'Resoluciiones', 'fumysam' ),
		'name_admin_bar'        => __( 'Resolución', 'fumysam' ),
		'archives'              => __( 'Item Archives', 'fumysam' ),
		'attributes'            => __( 'Item Attributes', 'fumysam' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fumysam' ),
		'all_items'             => __( 'Todas las resoluciones', 'fumysam' ),
		'add_new_item'          => __( 'Añadir nueva resolución', 'fumysam' ),
		'add_new'               => __( 'Añadir nueva', 'fumysam' ),
		'new_item'              => __( 'Nueva resolución', 'fumysam' ),
		'edit_item'             => __( 'Editar resolución', 'fumysam' ),
		'update_item'           => __( 'Actualizar resolución', 'fumysam' ),
		'view_item'             => __( 'Ver resolución', 'fumysam' ),
		'view_items'            => __( 'Ver resoluciones', 'fumysam' ),
		'search_items'          => __( 'Buscar resoluciones', 'fumysam' ),
		'not_found'             => __( 'Nada encontrado', 'fumysam' ),
		'not_found_in_trash'    => __( 'No hay nada en la Papelera', 'fumysam' ),
		'featured_image'        => __( 'Featured Image', 'fumysam' ),
		'set_featured_image'    => __( 'Set featured image', 'fumysam' ),
		'remove_featured_image' => __( 'Remove featured image', 'fumysam' ),
		'use_featured_image'    => __( 'Use as featured image', 'fumysam' ),
		'insert_into_item'      => __( 'Insert into item', 'fumysam' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fumysam' ),
		'items_list'            => __( 'Items list', 'fumysam' ),
		'items_list_navigation' => __( 'Items list navigation', 'fumysam' ),
		'filter_items_list'     => __( 'Filter items list', 'fumysam' ),
	);
	$args = array(
		'label'                 => __( 'Resolución', 'fumysam' ),
		'description'           => __( 'Resoluciones de FUMYSAM', 'fumysam' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-art',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'resolucion', $args );

}
add_action( 'init', 'custom_post_type_resolucion', 0 );

// Register Custom Post Type
function custom_post_type_certificado() {

	$labels = array(
		'name'                  => _x( 'Certificados', 'Post Type General Name', 'fumysam' ),
		'singular_name'         => _x( 'Certificado', 'Post Type Singular Name', 'fumysam' ),
		'menu_name'             => __( 'Certificados', 'fumysam' ),
		'name_admin_bar'        => __( 'Cetificado', 'fumysam' ),
		'archives'              => __( 'Item Archives', 'fumysam' ),
		'attributes'            => __( 'Item Attributes', 'fumysam' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fumysam' ),
		'all_items'             => __( 'Todos los certificados', 'fumysam' ),
		'add_new_item'          => __( 'Añadir nuevo certificado', 'fumysam' ),
		'add_new'               => __( 'Añadir nuevo', 'fumysam' ),
		'new_item'              => __( 'Nuevo certificado', 'fumysam' ),
		'edit_item'             => __( 'Editar certificado', 'fumysam' ),
		'update_item'           => __( 'Actualizar certificado', 'fumysam' ),
		'view_item'             => __( 'Ver certificado', 'fumysam' ),
		'view_items'            => __( 'Ver certificados', 'fumysam' ),
		'search_items'          => __( 'Buscar certificados', 'fumysam' ),
		'not_found'             => __( 'Nada encontrado', 'fumysam' ),
		'not_found_in_trash'    => __( 'No hay nada en la Papelera', 'fumysam' ),
		'featured_image'        => __( 'Featured Image', 'fumysam' ),
		'set_featured_image'    => __( 'Set featured image', 'fumysam' ),
		'remove_featured_image' => __( 'Remove featured image', 'fumysam' ),
		'use_featured_image'    => __( 'Use as featured image', 'fumysam' ),
		'insert_into_item'      => __( 'Insert into item', 'fumysam' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fumysam' ),
		'items_list'            => __( 'Items list', 'fumysam' ),
		'items_list_navigation' => __( 'Items list navigation', 'fumysam' ),
		'filter_items_list'     => __( 'Filter items list', 'fumysam' ),
	);
	$args = array(
		'label'                 => __( 'Certificado', 'fumysam' ),
		'description'           => __( 'Certificados de FUMYSAM', 'fumysam' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'certificado', $args );

}
add_action( 'init', 'custom_post_type_certificado', 0 );

// Register Custom Post Type
function custom_post_type_contrato() {

	$labels = array(
		'name'                  => _x( 'Contratos', 'Post Type General Name', 'fumysam' ),
		'singular_name'         => _x( 'Contrato', 'Post Type Singular Name', 'fumysam' ),
		'menu_name'             => __( 'Contratos', 'fumysam' ),
		'name_admin_bar'        => __( 'Contrato', 'fumysam' ),
		'archives'              => __( 'Item Archives', 'fumysam' ),
		'attributes'            => __( 'Item Attributes', 'fumysam' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fumysam' ),
		'all_items'             => __( 'Todos los contratos', 'fumysam' ),
		'add_new_item'          => __( 'Añadir nuevo contrato', 'fumysam' ),
		'add_new'               => __( 'Añadir nuevo', 'fumysam' ),
		'new_item'              => __( 'Nuevo contrato', 'fumysam' ),
		'edit_item'             => __( 'Editar contrato', 'fumysam' ),
		'update_item'           => __( 'Actualzar contrato', 'fumysam' ),
		'view_item'             => __( 'Ver contrato', 'fumysam' ),
		'view_items'            => __( 'Ver contratos', 'fumysam' ),
		'search_items'          => __( 'Buscar contratos', 'fumysam' ),
		'not_found'             => __( 'Nada encontrado', 'fumysam' ),
		'not_found_in_trash'    => __( 'No hay nada en la Papelera', 'fumysam' ),
		'featured_image'        => __( 'Featured Image', 'fumysam' ),
		'set_featured_image'    => __( 'Set featured image', 'fumysam' ),
		'remove_featured_image' => __( 'Remove featured image', 'fumysam' ),
		'use_featured_image'    => __( 'Use as featured image', 'fumysam' ),
		'insert_into_item'      => __( 'Insert into item', 'fumysam' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fumysam' ),
		'items_list'            => __( 'Items list', 'fumysam' ),
		'items_list_navigation' => __( 'Items list navigation', 'fumysam' ),
		'filter_items_list'     => __( 'Filter items list', 'fumysam' ),
	);
	$args = array(
		'label'                 => __( 'Contrato', 'fumysam' ),
		'description'           => __( 'Contratos de FUMYSAM', 'fumysam' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-shield-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'contrato', $args );

}
add_action( 'init', 'custom_post_type_contrato', 0 );