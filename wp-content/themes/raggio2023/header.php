<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" type="text/css"
		href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header>
    <div id="top">
        <a href="https://accounts.google.com/AccountChooser/signinchooser?continue=https%3A%2F%2Fsites.google.com%2Fescuelaraggio.edu.ar%2Fintranet%2Fp%25C3%25A1gina-principal&theme=mn&ddm=0&flowName=GlifWebSignIn&flowEntry=AccountChooser" target="_blank" class="campus">Campus</a>
        <a class="estudiante hide"> Mi condición</a>
    </div>
    <div id="navegacion">
        <a href="/index.html" class="home">
            <div id="logo">
                <div class="escudo">
                    <img src="/wp-content/themes/raggio2023/images/logosRaggio/escudoRaggio.svg"
                        alt="Escudo Escuela Técnica Raggio">
                </div>
                <div>
                    <h1>Escuela Técnica Raggio</h1>
                    <h2>"Año del centenario"</h2>
                </div>
            </div>
        </a>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'container' => false,
                'menu_class' => 'menu-principal',
                'depth' => 2,
            ));
            ?>
        </nav>
    </div>    
</header>

<div id="contenido-principal">
