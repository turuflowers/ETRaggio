<?php

// Registrando menús
function registrar_menus() {
    register_nav_menus(
        array(
            'menu_principal' => __('Menú Principal', 'tu_tema'),
            'menu_secundario' => __('Menú Secundario', 'tu_tema'),
        )
    );
}
add_action('init', 'registrar_menus');

// Agregar clases CSS a los elementos de menú
function agregar_clases_a_menu($classes, $item, $args) {
    if ($args->theme_location == 'menu_principal') {
        $classes[] = 'clase-menu-principal'; // Puedes cambiar 'clase-menu-principal' por la clase que desees
    } elseif ($args->theme_location == 'menu_secundario') {
        $classes[] = 'clase-menu-secundario'; // Puedes cambiar 'clase-menu-secundario' por la clase que desees
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'agregar_clases_a_menu', 10, 3);
