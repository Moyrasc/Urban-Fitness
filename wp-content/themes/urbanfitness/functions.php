<?php
//Includes
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

function urbanfitness_setup()
{
    //Imágenes Destacadas
    add_theme_support('post-thumbnails');
    //Titulos SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'urbanfitness_setup');

function urbanfitness_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menú principal', 'urbanfitness')
    ));
}
//add_actions() este sirve para agregar código
//add_filters() modifica información

//hook -> te permite ejecutar tus propias funciones en un lugar específico dentro de la línea de tiempo de ejecución de WordPress
add_action('init', 'urbanfitness_menus');


function urbanfitness_scripts_styles()
{
    //agrega hoja de estilos (le pasamos nombre unico, ubicacion,dependencias y versión)
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    if (is_page('galeria')) {
        wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.4');
    }
    if (is_front_page()) {
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.2.0');
    }
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');


    //archivos JS
    if (is_page('galeria')) {
        wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.4', true);
    }
    if (is_front_page()) {
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '10.2.0', true);
        wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2', true);
    }

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'urbanfitness_scripts_styles');

//Widgets

function urbanfitness_widgets()
{
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'urbanfitness_widgets');

//Shortcode

function urbanfitness_ubicacion_shortcode()
{
?>
    <div class="mapa">
        <?php
        if (is_page('contacto')) {
            the_field('ubicacion');
        }
        ?>
    </div>
    <h2 class="text-center text-primary">Formulario de Contacto</h2>
<?php
    echo do_shortcode('[contact-form-7 id="52e1284" title="Formulario de contacto 1"]');
}

add_shortcode('urbanfitness_ubicacion', 'urbanfitness_ubicacion_shortcode');

//Imagen dinamica (BG)

function urbanfitness_hero_imagen()
{
    //Obtener id de la página de Inicio
    $front_id = get_option('page_on_front');
    //Obtener la imagen
    $id_imagen = get_field('hero_imagen', $front_id);
    //Obtener ruta img
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
    //Css
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada_css = "body.home .header {
        background-image: linear-gradient( rgb(0 0 0 /.65),rgb(0 0 0 /.65)), url($imagen);
    }";
    //Inyectar código CSS
    wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'urbanfitness_hero_imagen');
