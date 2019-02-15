<!DOCTYPE html>
<html>
    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php the_title(); ?></title>
        <meta name="google-site-verification" content="jQ1CWaG3TKbC_hDPfz2CUYwaDiPjNUMAkHvrbiiIK50" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bienvenue sur le site d'Alain Ménégon ici vous trouverez les dernières actualités de l'artiste lithographe ainsi que ses derniers travaux" />

        <?php wp_head(); ?>
    </head>

    <body>
        <div class="bdp-container">
            <div class="bdp" id="barre"></div>
        </div>
        <div class="row">
            <header class="col xl3 l3 m12 s12">

                <div class="tog-menu">
                    <a href="" class="toggle-menu"><span></span></a>
                </div>
                <svg>
                    <g fill="none">
                        <path d="M0,40 L500,40" />
                    </g>
                </svg>


                <h1 id="titre" class="text-focus-in">alain ménégon 
                    <br>Lithographe</h1>
                <nav class="headernav">


                    <?php 
                    wp_nav_menu(array(
                        'menu' => 'Menu principal',
                        'container' => false,
                        'menu_class' => 'header-nav-main'
                    ));

                    ?>
                </nav>

            </header>

