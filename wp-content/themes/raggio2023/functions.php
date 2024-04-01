<?php

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
