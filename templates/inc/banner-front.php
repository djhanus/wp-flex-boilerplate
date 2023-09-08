<?php
$bgImage = get_field('hero_background_image');
$heading = get_field('hero_heading');
$paragraph = get_field('hero_paragraph');
?>

<section class="flex--hero-banner" style="background-image: url('<?php echo $bgImage; ?>');">

  <div class="container">

    <div class="text-container">
      <h1 style="hero"><?php echo $heading; ?></h1>
      <p><?php echo $paragraph; ?></p>
      <div class="btn-holder">
      <?php
      $link = get_field('hero_cta_button');
      if( $link ):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
      </div>
    </div>

  </div>

</section>
