<?php
// Contrôler si ACF est actif
if ( !function_exists('get_field') ) return;
?>

<?php get_header(); 
//Template Name: Formations

?>

<div class="row">
    <main class="col xl9 l9 m12 s12" id="pageformations">
        <div class="row">
             <h2 id="titreformations"><?php the_title(); ?></h2>
            </div>
       

        <!--    fin filtres-->
        <div id="isotope-list">
            <!--    boucle-->
            <?php $i = 0;?>
            <?php $the_query =  new WP_Query( array( 'post_type' => 'formation', 'posts_per_page' => -1) ); ?> 
            <?php if ( $the_query->have_posts() ) : ?>


            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 

            ?> 
            <div class="<?php echo $termsString; ?> item col xl4 l6 m6 s12">
                  <div class="itemlitho">
                    <img class="imagelitho" src=<?php 

                         $image3 = get_field('imageformation');
                         $size = 'mini'; // (thumbnail, medium, large, full or custom size)
                         $alt_text = get_post_meta($image3 , '_wp_attachment_image_alt', true);

                         if( $image3 ) {

                             echo wp_get_attachment_image( $image3, $size );

                         }

                         ?> 

                         <div class="box-info" data-toggle="modal"  href="#" data-target="#myModal-<?php echo $i; ?>"><i class="fas fa-info"></i></div>
            </div> <!-- end item -->



        </div>





        <div id="myModal-<?php echo $i; ?>" class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content col s12">
                    <div class="modal-body col xl7 l12 m12 s12" id="gauche">
                        <img class="image" src=<?php 

                             $image3 = get_field('imageformation');
                             $size = 'medium_large'; // (thumbnail, medium, large, full or custom size)

                             if( $image3 ) {

                                 echo wp_get_attachment_image( $image3, $size );

                             }

                             ?>

                             </div>
                        <div class="modal-body col xl5 l12 m12 s12" id="droite">
                            <ul>
                                <li><h3><?php the_title(); ?></h3></li>
                                <li>Formation: <p><?php the_field('formation'); ?></p></li>
                                <li><i class="fas fa-euro-sign"></i> Tarif Public:<p><?php the_field('tarif1'); ?></p> </li>
                                <li><i class="fas fa-euro-sign"></i> Tarif Adhérent:<p><?php the_field('tarif2'); ?></p> </li>
                                <li><i class="fas fa-clock pictos"></i> Durée:<p><?php the_field('duree'); ?></p> </li>
                                <li><i class="fas fa-map-marker-alt"></i> Lieu<p><?php the_field('lieu'); ?></p> </li>
                                <li><i class="fas fa-download"></i><p><?php 

                                    $file = get_field('fichier');

                                    if( $file ) {

                                        $url = wp_get_attachment_url( $file );

                                    ?><a href="<?php echo $url; ?>" target="_blank">Télécharger la plaquette</a><?php

                                    }

                                    ?>

                                    </p></li>
                            </ul>

                        </div>
                        <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Fermer</button>

                        </div>
                    </div>
                </div>
            </div>
            <?php $i++;?>

            <?php endwhile;  ?>
            <?php endif; ?>

        </div> <!-- end isotope-list -->




    </main>
    <div id="top"><a href="#" class="go-top">Top</a></div>
</div>






