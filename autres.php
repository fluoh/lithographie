<?php
// Contrôler si ACF est actif
if ( !function_exists('get_field') ) return;
?>

<?php get_header(); 
//Template Name: Autres

?>

<div class="row">
    <main class="col xl9 l9 m8 s12" id="pageautres">
        <div class="row">
            <div class="tilis" class="col s12">
                <h2 id="titreautres"><?php the_title(); ?></h2>

                <!--    filtres-->
                <ul id="filters">
                    <li><a href="#" data-filter="*" class="selected">Tout</a></li>
                    <?php 
                    $terms = get_terms("categorie2"); // va chercher le nom de la catégorie
                    $count = count($terms); //How many are they?
                    if ( $count > 0 ){  //If there are more than 0 terms
                        foreach ( $terms as $term ) {  // pour chaque catégorie on applique ces paramètres
                            echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
                            //crée la liste en cherchant le nom de chaque catégorie
                        }
                    } 
                    ?>
                </ul>
            </div>
        </div>

        <!--    fin filtres-->

        <!--    boucle-->
        <?php $i = 0;?>
        <?php $the_query =  new WP_Query( array( 'post_type' => 'autre', 'posts_per_page' => -1) ); ?> 
        <?php if ( $the_query->have_posts() ) : ?>

        <div id="isotope-list">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
            $termsArray = get_the_terms( $post->ID, "categorie2" );  //Get the terms for this particular item
            $termsString = ""; //initialize the string that will contain the terms
            foreach ( $termsArray as $term ) { // for each term 
                $termsString .= $term->slug.' '; //create a string that has all the slugs 
            }

            ?> 
            <div class="<?php echo $termsString; ?> item col xl3 l4 m12 s12"> 
                <div class="itemlitho">
                                            <img class="imagelitho" src=<?php 

                                            $image2 = get_field('image2');
                                            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                            $alt_text = get_post_meta($image2 , '_wp_attachment_image_alt', true);

                                            if( $image2 ) {

                                                echo wp_get_attachment_image( $image2, $size );


                                            }

                                            ?> 
                                    
                                              <div class="box-info" data-toggle="modal"  href="#" data-target="#myModal-<?php echo $i; ?>"><i class="fas fa-info"></i></div>
                                            </div> <!-- end item -->


                  
                    </div>

               



                <div id="myModal-<?php echo $i; ?>" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content col s12">

                            <div class="modal-body col xl7 l12 m12 s12" id="gauche">
                                <div class="modal-header">
                                   
                                </div>
                                <img class="imagelitho" src=<?php 

                                     $image = get_field('image2');
                                     $size = 'medium_large'; // (thumbnail, medium, large, full or custom size)

                                     if( $image ) {

                                         echo wp_get_attachment_image( $image, $size );

                                     }

                                     ?>

                                     </div>
                                <div class="modal-body col xl5 l5 m12 s12" id="droite">
                                    <ul>
                                        <li>Taille: <p><?php the_field('taille2'); ?></p></li>
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






