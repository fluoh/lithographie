<?php get_header(); ?>


<main class="col xl9 l9 m8 s12" id="pagesingle">
    <div class="single col xl9 l9 m12 s12">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="post container">
            <h2 class="post-title col xl12 l12 m12 s12"><?php the_title(); ?></h2>
            <p class="post-info"><i class="far fa-calendar-alt"></i>
                Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
            </p>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <div class="post-comments">
                <?php comments_template(); ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
