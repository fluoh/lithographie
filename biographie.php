<?php get_header(); 
//Template Name: biographie
?>


<main class="col xl9 l9 m8 s12" id="biographie">
    <h2 id="titrebiographie"><?php the_title(); ?></h2>

                    <img id="elephant" src="https://www.alain-menegon.fr/wp-content/uploads/2019/02/2-min.jpg">
        
        <div id="cadre" class="container">
            <?php
            if (have_posts()):
            while (have_posts()) : the_post();
            the_content();
            endwhile;

            endif;
            ?>

        </div>


        </main>

   