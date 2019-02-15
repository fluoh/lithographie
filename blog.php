<?php get_header();
//Template Name: Blog
?>


<main class="col xl9 l9 m8 s12" id="pageblog">
    <h2 id="titreactualite"><?php the_title(); ?></h2>

    <div class="blogone">



<!--
        <div class="articles col xl9 l9 m9 s12">
            <?php
            $recentPosts = new WP_Query();
            $recentPosts->query('showposts=5');
            ?>
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <article class="blogarticles">
                <h2 >
                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2 >
                <?php the_excerpt(); ?> 
                <ul>

                    <li><i class="far fa-calendar-alt"></i> <?php the_time('l, jS F, Y g:i a'); ?> </li>
                    <li><?php the_category(); ?> </li>

                </ul> 
            </article>


            <?php endwhile; ?>

        </div>
-->

      <div class="col xl12 l12 m12 s12">
            <div><?php echo do_shortcode('[custom-facebook-feed]'); ?></div>
        </div>
    </div>

</main>




