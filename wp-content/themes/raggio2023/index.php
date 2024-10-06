<?php 
get_header(); 
?>
<div id="contenido" class="contenedor">
<?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Incluye el archivo content.php
            get_template_part('partials/content');
        endwhile;
    else :
        // Si no hay entradas
        get_template_part('partials/content', 'none');
    endif;
    ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
