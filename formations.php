<?php
// Contrôler si ACF est actif
if ( !function_exists('get_field') ) return;
?>

<?php get_header(); 
//Template Name: Formations

?>

<main class="col xl9 l9 m8 s12" id="pageformations">
    <h2 id="titreformations"><?php the_title(); ?></h2>
    <?php $loop = new WP_Query( array( 'post_type' => 'formation') ); ?>
    <?php while($loop->have_posts()):
    $loop->the_post();
    ?>


    <!--
<div class="col s12 inform">
<h4><?php the_title(); ?></h4>

</div>
-->


    <div class="card col xl4 l4 m4 s12">
        <div class="card-image">
            <img class="activator" src="<?php the_field('imageformation'); ?>" />
        </div>
        <div class="card-content">
            <span class="card-title activator"><i class="fas fa-info right"></i></span>
        </div>
        <div class="card-reveal">

            <span class="card-title"><i class="material-icons right" >close</i></span>
            <ul>
                <li><h3><?php the_title(); ?></h3></li>
                <li>Formation: <p><?php the_field('formation'); ?></p></li>
                <li><i class="fas fa-users pictos"></i> Public: <p><?php the_field('public'); ?></p></li>
                <li><i class="fas fa-thermometer-three-quarters pictos"></i> Niveau:<p><?php the_field('niveau'); ?></p> </li>
                <li><i class="fas fa-clock pictos"></i> Durée:<p><?php the_field('durée'); ?></p> </li>
                <li><i class="fas fa-calendar-alt pictos"></i> Date:<p><?php the_field('date'); ?></p> </li>

            </ul>
        </div>
    </div>

    <?php endwhile ; ?>

</main>


<?php get_footer(); ?>



