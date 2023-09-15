<?php
/*
    Plugin Name: Urban Fitness - Post Types
    Plugin URI: https://github.com/Moyrasc
    Description: Añade Post Types al sitio Urban Fitness
    Version: 1.0.0
    Author: Noe Sola
    Author URI: https://github.com/Moyrasc
    Text Domain: urbanfitness
*/



if (!defined('ABSPATH')) die();

// Registrar Custom Post Type
function urbanfitness_clases_post_type()
{

    $labels = array(
        'name'                  => _x('Clases', 'Post Type General Name', 'urbanfitness'),
        'singular_name'         => _x('Clase', 'Post Type Singular Name', 'urbanfitness'),
        'menu_name'             => __('Clases', 'urbanfitness'),
        'name_admin_bar'        => __('Clase', 'urbanfitness'),
        'archives'              => __('Archivo', 'urbanfitness'),
        'attributes'            => __('Atributos', 'urbanfitness'),
        'parent_item_colon'     => __('Clase Padre', 'urbanfitness'),
        'all_items'             => __('Todas Las Clases', 'urbanfitness'),
        'add_new_item'          => __('Agregar Clase', 'urbanfitness'),
        'add_new'               => __('Agregar Clase', 'urbanfitness'),
        'new_item'              => __('Nueva Clase', 'urbanfitness'),
        'edit_item'             => __('Editar Clase', 'urbanfitness'),
        'update_item'           => __('Actualizar Clase', 'urbanfitness'),
        'view_item'             => __('Ver Clase', 'urbanfitness'),
        'view_items'            => __('Ver Clases', 'urbanfitness'),
        'search_items'          => __('Buscar Clase', 'urbanfitness'),
        'not_found'             => __('No Encontrado', 'urbanfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'urbanfitness'),
        'featured_image'        => __('Imagen Destacada', 'urbanfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'urbanfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'urbanfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'urbanfitness'),
        'insert_into_item'      => __('Insertar en Clase', 'urbanfitness'),
        'uploaded_to_this_item' => __('Agregado en Clase', 'urbanfitness'),
        'items_list'            => __('Lista de Clases', 'urbanfitness'),
        'items_list_navigation' => __('Navegación de Clases', 'urbanfitness'),
        'filter_items_list'     => __('Filtrar Clases', 'urbanfitness'),
    );
    $args = array(
        'label'                 => __('Clase', 'urbanfitness'),
        'description'           => __('Clases para el Sitio Web', 'urbanfitness'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => true, // true = posts , false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('urbanfitness_clases', $args);
}
add_action('init', 'urbanfitness_clases_post_type', 0);


//Instructores Custom Post

function urbanfitness_instructores_post_type()
{

    $labels = array(
        'name'                  => _x('Instructores', 'Post Type General Name', 'urbanfitness'),
        'singular_name'         => _x('Instructor', 'Post Type Singular Name', 'urbanfitness'),
        'menu_name'             => __('Instructores', 'urbanfitness'),
        'name_admin_bar'        => __('Instructor', 'urbanfitness'),
        'archives'              => __('Archivo', 'urbanfitness'),
        'attributes'            => __('Atributos', 'urbanfitness'),
        'parent_item_colon'     => __('Instructor Padre', 'urbanfitness'),
        'all_items'             => __('Todas Las Instructores', 'urbanfitness'),
        'add_new_item'          => __('Agregar Instructor', 'urbanfitness'),
        'add_new'               => __('Agregar Instructor', 'urbanfitness'),
        'new_item'              => __('Nueva Instructor', 'urbanfitness'),
        'edit_item'             => __('Editar Instructor', 'urbanfitness'),
        'update_item'           => __('Actualizar Instructor', 'urbanfitness'),
        'view_item'             => __('Ver Instructor', 'urbanfitness'),
        'view_items'            => __('Ver Instructores', 'urbanfitness'),
        'search_items'          => __('Buscar Instructor', 'urbanfitness'),
        'not_found'             => __('No Encontrado', 'urbanfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'urbanfitness'),
        'featured_image'        => __('Imagen Destacada', 'urbanfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'urbanfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'urbanfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'urbanfitness'),
        'insert_into_item'      => __('Insertar en Instructor', 'urbanfitness'),
        'uploaded_to_this_item' => __('Agregado en Instructor', 'urbanfitness'),
        'items_list'            => __('Lista de Instructores', 'urbanfitness'),
        'items_list_navigation' => __('Navegación de Instructores', 'urbanfitness'),
        'filter_items_list'     => __('Filtrar Instructores', 'urbanfitness'),
    );
    $args = array(
        'label'                 => __('Instructores', 'urbanfitness'),
        'description'           => __('Instructores para el Sitio Web', 'urbanfitness'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('instructores', $args);
}
add_action('init', 'urbanfitness_instructores_post_type', 0);

//Reseñas

function urbanfitness_reseñas_post_type()
{
    $labels = array(
        'name'                  => _x('Reseñas', 'Post Type General Name', 'urbanfitness'),
        'singular_name'         => _x('Testimonial', 'Post Type Singular Name', 'urbanfitness'),
        'menu_name'             => __('Reseñas', 'urbanfitness'),
        'name_admin_bar'        => __('Testimonial', 'urbanfitness'),
        'archives'              => __('Archivo', 'urbanfitness'),
        'attributes'            => __('Atributos', 'urbanfitness'),
        'parent_item_colon'     => __('Testimonial Padre', 'urbanfitness'),
        'all_items'             => __('Todas Las Reseñas', 'urbanfitness'),
        'add_new_item'          => __('Agregar Testimonial', 'urbanfitness'),
        'add_new'               => __('Agregar Testimonial', 'urbanfitness'),
        'new_item'              => __('Nueva Testimonial', 'urbanfitness'),
        'edit_item'             => __('Editar Testimonial', 'urbanfitness'),
        'update_item'           => __('Actualizar Testimonial', 'urbanfitness'),
        'view_item'             => __('Ver Testimonial', 'urbanfitness'),
        'view_items'            => __('Ver Reseñas', 'urbanfitness'),
        'search_items'          => __('Buscar Testimonial', 'urbanfitness'),
        'not_found'             => __('No Encontrado', 'urbanfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'urbanfitness'),
        'featured_image'        => __('Imagen Destacada', 'urbanfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'urbanfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'urbanfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'urbanfitness'),
        'insert_into_item'      => __('Insertar en Testimonial', 'urbanfitness'),
        'uploaded_to_this_item' => __('Agregado en Testimonial', 'urbanfitness'),
        'items_list'            => __('Lista de Reseñas', 'urbanfitness'),
        'items_list_navigation' => __('Navegación de Reseñas', 'urbanfitness'),
        'filter_items_list'     => __('Filtrar Reseñas', 'urbanfitness'),
    );
    $args = array(
        'label'                 => __('Reseñas', 'urbanfitness'),
        'description'           => __('Reseñas para el Sitio Web', 'urbanfitness'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('reseñas', $args);
}
add_action('init', 'urbanfitness_reseñas_post_type', 0);
