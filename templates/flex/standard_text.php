<?php
$heading = get_sub_field('heading');
$paragraph = get_sub_field('paragraph');
?>

<section class="flex--text-block" id="<?php echo $anchor; ?>">
  <div class="container">
    <h2><?php echo $heading; ?></h2>
    <div class="content">
      <p><?php echo $paragraph; ?></p>
    </div>
      <div class="btn-holder">
        <?php
        $link = get_template_arg('link');
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
  </div>
</section>
