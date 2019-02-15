<?php get_header(); 
//Template Name: Contact
?>

<main class="col xl9 l9 m8 s12" id="pagecontact">
    <h2 id="titrecontact"><?php the_title(); ?></h2>

    <div class="col xl3 l3 m12 s12" id="adresse">

        <?php
        if (have_posts()):
        while (have_posts()) : the_post();
        the_content();
        endwhile;

        endif;
        ?>
    </div>
    <div class="col xl9 l9 m12 s12"><iframe  src="https://snazzymaps.com/embed/120019" width="100%" height="300vh" style="border:none;"></iframe></div>

    <div class="col xl6  offset-xl3 l6  m12  s12"><?php echo do_shortcode( '[contact-form-7 id="214" title="Contact"]' ); ?></div>

    





</main>
