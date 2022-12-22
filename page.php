<?php get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="page--default">
      <div class="container">
        <h1><?php the_title(); ?></h1>
      </div>
    </section>

    <?php get_template_part('templates/flex');
  endwhile; endif;
get_footer(); ?>
