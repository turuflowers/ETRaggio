<?php
// Llamado al CSS del tema
function cargar_estilos() {
    // Registrar estilos
    wp_register_style('estilos-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

    // Agregar estilos
    wp_enqueue_style('estilos-css');
}
add_action('wp_enqueue_scripts', 'cargar_estilos');

// Llamado a los archivos de scripts
function cargar_scripts() {
    // Registrar script jQuery
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
    wp_register_script('slick', '//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js', array(), '3.5.1', true);

    
    wp_register_script('scripts-personalizados-1', get_template_directory_uri() . '/scripts/navmenu.js', array('jquery'), '1.0', true);

    wp_register_script('scripts-personalizados-2', get_template_directory_uri() . '/scripts/rotador.js', array('jquery'), '1.0', true);
    wp_register_script('scripts-personalizados-3', get_template_directory_uri() . '/scripts/modal.js', array('jquery'), '1.0', true);

    // Agregar scripts al frontend
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick');
    wp_enqueue_script('scripts-personalizados-1');
    wp_enqueue_script('scripts-personalizados-2');
    wp_enqueue_script('scripts-personalizados-3');
}
add_action('wp_enqueue_scripts', 'cargar_scripts');


// Registrando menús
function registrar_menus() {
    register_nav_menus(
        array(
            'menu_principal' => __('Menú Header', 'etraggio'),
            'menu_pie' => __('Menú Footer', 'etraggio'),
        )
    );
}
add_action('init', 'registrar_menus');

// Agregar clases CSS a los elementos de menú
function agregar_clases_a_menu($classes, $item, $args) {
    if ($args->theme_location == 'menu_principal') {
        $classes[] = 'clase-menu-principal'; // Puedes cambiar 'clase-menu-principal' por la clase que desees
    } elseif ($args->theme_location == 'menu_pie') {
        $classes[] = 'clase-menu-pie'; // Puedes cambiar 'clase-menu-pie' por la clase que desees
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'agregar_clases_a_menu', 10, 3);

function edit_menu_item($item_output, $item) {
    if ( get_field( 'dropdown_item', $item) == true ) { 
        return '<button>'.$item->title.'</button>';
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el','edit_menu_item', 10, 2);

// ACF
function my_post_title_updater( $post_id ) {

    $my_post = array();
    $my_post['ID'] = $post_id;

    switch(get_post_type()){
        case "horario":
            $page_slug = "";

            if(get_field('especialidad') && get_field('especialidad') != ""){
                $page_slug = get_field('especialidad') . " | ";
            }

            $page_slug .= get_field('nombre_del_curso');

            $my_post['post_title'] = $page_slug;
        break;
        case "descarga-relacionada":
            $pages = get_field('descargas_relacionadas_pagina');

            $page_slug = "";
            foreach($pages as $page){
                $page_slug .= " | " . $page->post_title;
            }
            
            $my_post['post_title'] = get_field('titulo_de_grupo_de_descargas') . $page_slug;
        break;
    }

    // Update the post into the database
    wp_update_post( $my_post );

  }
   
  // run after ACF saves the $_POST['fields'] data
  add_action('acf/save_post', 'my_post_title_updater', 20);