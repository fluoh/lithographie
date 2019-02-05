<?php get_header(); 
//Template Name: page
?>

<main class="col xl9 l9 m8 s12">
     <h2 class="titrepage"><?php the_title(); ?></h2>
    
            <?php
            if (have_posts()):
            while (have_posts()) : the_post();
            the_content();
            endwhile;

            endif;
            ?>




        </main>
    <?php get_footer(); ?>