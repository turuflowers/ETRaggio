<?php 
get_header(); 
?>
<div id="contenido" class="contenedor">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">
                    <?php
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                </footer>
            </article>
        <?php
        endwhile;
    else :
        ?>
        <p><?php esc_html_e('No se encontraron entradas.', 'tu_tema'); ?></p>
    <?php
    endif;
    ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
