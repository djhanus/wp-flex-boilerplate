<?php get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="single-post">
      <div class="container">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

  <?php endwhile; endif; get_footer(); ?>
