<section class="homepage--hero" style="background-image: url('<?php echo get_field('hero_background_image'); ?>');">
  <div class="container">
    <div class="text-container">
      <p class="subheading"><?php echo get_field('hero_subheading'); ?></p>
      <h2><?php echo get_field('hero_heading'); ?></h2>
      <p><?php echo get_field('hero_paragraph'); ?></p>
      <blockquote><?php echo get_field('hero_testimonial'); ?></blockquote>
      <div class="btn-holder">
        <?php
        $hero_link = get_template_arg('hero_button');
        if( $hero_link ):
            $link_url = $hero_link['url'];
            $link_title = $hero_link['title'];
            $link_target = $hero_link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
    </div>
    <div class="empty-container"></div>
  </div>
</section>
