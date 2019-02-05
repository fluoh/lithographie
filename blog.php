<?php get_header();
//Template Name: Blog
?>


<main class="col xl9 l9 m8 s12" id="pageblog">
    <h2 id="titreactualite"><?php the_title(); ?></h2>
    <img id="aviateur" src="https://www.alain-menegon.fr/wp-content/uploads/2019/01/5.jpg"> 

    <div class="blogone">



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

        <div class="col s3 sidebarfacebook"><?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
            <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
                <?php dynamic_sidebar( 'new-widget-area' ); ?>
            </div>
            <?php endif; ?>
            <!-- fin nouvelle widget area --></div>
    </div>

</main>

<?php get_footer();?>


