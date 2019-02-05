<?php get_header();

?>


<main class="col xl9 l9 m8 s12">
      <h2 class="titrepage"><?php the_title(); ?></h2>
 <div>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="post">
   <h1 class="post-title"><?php the_title(); ?></h1>
   <div class="post-content">
    <?php the_content(); ?>
   </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>

 </div>
</main>

<?php get_footer();?>


