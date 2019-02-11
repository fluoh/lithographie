<?php


register_nav_menus( array(
    'menu' => 'Navigation principale',
));


//supprimer barre admin
function wpc_show_admin_bar() {
    return false;
}
add_filter('show_admin_bar' , 'wpc_show_admin_bar');


//	ajout style et script
function ajout_scripts() {

    wp_register_style('stylecss', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('stylecss');
    wp_enqueue_style( 'raleway', "https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900", array(), null );
    wp_enqueue_style( 'slabo', "https://fonts.googleapis.com/css?family=Slabo+27px", array(), null );
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), null );

    if( !is_admin()){
        wp_deregister_script('jquery');    wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '');
        wp_enqueue_script('jquery');
    } 

    wp_enqueue_script( 'materializejs','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(), null );


    // chargement de script sur home uniquement
    function slider_home() {
        if (is_home( ) )	{ // permet de charger les scripts slider ci-dessous UNIQUEMENT sur la HOME page
            wp_enqueue_script('slider', '/js/slider.js');
        }
    }



    wp_enqueue_script('isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js');
    wp_enqueue_script('mon-script', get_template_directory_uri().'/js/mon-script.js', array('jquery'),'',false);
    wp_enqueue_script('progressbar', get_template_directory_uri().'/js/progressbar.js');
    wp_enqueue_script('modal', get_template_directory_uri().'/js/modal.min.js');

    function cards_formations() {
        if (is_formations( ) )	{ // permet de charger les scripts cards ci-dessous UNIQUEMENT sur la page formations
            wp_enqueue_script('cards', '/js/cards.js');
        }
    }



    wp_enqueue_script('responsiveslider', get_template_directory_uri().'/js/responsiveslides.min.js');


}
add_action('wp_enqueue_scripts','ajout_scripts','slider_home', 'cards_formations');




//Nombres de mots a afficher dans l'aperçu des articles page blog
function new_excerpt_length($length) {
    return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
    global $post;
    return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_image_size ( 'pochette', 400, 160, false );

//personnaliser le back office
function admin_css() {

    $admin_handle = 'admin_css';
    $admin_stylesheet = get_template_directory_uri() . '/css/admin.css';

    wp_enqueue_style( $admin_handle, $admin_stylesheet );
}
add_action('admin_print_styles', 'admin_css', 11 );


//ajouter sidebar
function header_widgets_init() {

    register_sidebar( array(

        'name' => 'Ma nouvelle zone de widget',
        'id' => 'new-widget-area',
        'before_widget' => '<div class="nwa-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="nwa-title">',
        'after_title' => '</h2>',
    ) );
}

add_action( 'widgets_init', 'header_widgets_init' );





add_image_size( 'medium', 600, 0, true);
add_image_size( 'medium_large', 768, 0, true);
