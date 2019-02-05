<?php get_header(); 
//Template Name:Mentions Légales
?>

<main class="col xl9 l9 m8 s12" id="pagementions">
    <h2 id="titrementions"><?php the_title(); ?></h2>
    <div>
        <div>
            <?php
            if (have_posts()):
            while (have_posts()) : the_post();
            the_content();
            endwhile;

            endif;
            ?>
        </div>


    </div>
</main>
<?php get_footer(); ?>