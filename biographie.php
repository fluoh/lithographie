<?php get_header(); 
//Template Name: biographie
?>


<main class="col xl9 l9 m12 s12" id="biographie">
    <h2 id="titrebiographie"><?php the_title(); ?></h2>

    <img id="elephant" src="https://www.alain-menegon.fr/wp-content/uploads/2019/02/elephant-min.jpg">

    <div id="cadre" class="container">
        <!--    boucle-->
        <?php $i = 0;?>
        <?php $the_query =  new WP_Query( array( 'post_type' => 'Biographie', 'posts_per_page' => -1) ); ?> 
        <?php if ( $the_query->have_posts() ) : ?>


        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 

        ?> 
        <div class="col xl5 l5 m5 s12">
            <img class="biopic" src=<?php 

                 $image4 = get_field('biopic');
                 $size = 'medium_large'; // (thumbnail, medium, large, full or custom size)

                 if( $image4 ) {

                     echo wp_get_attachment_image( $image4, $size );

                 }

                 ?>
                 </div>

            <article class="col xl7 l7 m7 s12">
                <p><?php the_field('bio'); ?></p>
                <i class="fas fa-download"></i><p><?php 

                $filebio = get_field('biofile');

                if( $filebio ) {

                    $url = wp_get_attachment_url( $filebio );

                ?><a href="<?php echo $url; ?>" target="_blank">Télécharger la plaquette</a><?php

                }

                ?>

                </p>

            </article>

        </div>
        
        <?php endwhile;  ?>
        <?php endif; ?>

        </main>

