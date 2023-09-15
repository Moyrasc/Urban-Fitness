<?php
/*
* Template Name: Listado de Clases
*/
get_header()
?>

<main class="contenedor seccion contenido-centrado">
    <?php
    get_template_part('template-parts/pagina')
    ?>
    <?php urbanfitness_lista_clases(); ?>
</main>

<?php
get_footer()
?>