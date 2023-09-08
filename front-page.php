<?php get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part('templates/inc/banner-front'); ?>

  <?php get_template_part('templates/flex'); ?>

<?php endwhile; endif;
  get_footer(); ?>
