<?php

function urbanfitness_lista_clases($cantidad = -1)
{
?>
    <ul class="listado-grid">
        <?php
        $args = array(
            'post_type' => 'urbanfitness_clases',
            'posts_per_page' => $cantidad
        );
        $clases = new WP_Query($args);
        while ($clases->have_posts()) {
            $clases->the_post();
        ?>
            <li class="card">
                <?php the_post_thumbnail(); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php
                    $hora_inicio = get_field('hora_inicio');
                    $hora_fin = get_field('hora_fin');
                    ?>
                    <p><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p>
                </div>

            </li>
        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
<?php
}

function urbanfitness_instructores()
{
?>
    <ul class="listado-grid instructores">
        <?php
        $args = array(
            'post_type' => 'instructores',
        );
        $instructores = new WP_Query($args);
        while ($instructores->have_posts()) {
            $instructores->the_post();
        ?>
            <li class="instructor">
                <?php the_post_thumbnail('large'); ?>
                <div class="contenido text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <div class="especialidad">
                        <?php
                        $especialidad = get_field('especialidad');
                        foreach ($especialidad as $esp) { ?>
                            <span class="etiqueta">
                                <?php echo esc_html($esp); ?>
                            </span>
                        <?php }


                        ?>
                    </div>
                </div>
            </li>
        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
<?php
}
function urbanfitness_reseñas()
{
?>
    <ul class="listado-reseñas swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'reseñas',
        );
        $reseñas = new WP_Query($args);
        while ($reseñas->have_posts()) {
            $reseñas->the_post();
        ?>
            <li class="reseña text-center swiper-slide">
                <blockquote>
                    <?php the_content(); ?>
                </blockquote>
                <footer class="reseña-footer">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <p> <?php the_title(); ?></p>
                </footer>
            </li>
        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
<?php

}
