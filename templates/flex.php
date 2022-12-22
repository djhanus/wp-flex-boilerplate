<?php
if (function_exists('have_rows') && have_rows('flex_sections')) {
  while (have_rows('flex_sections')) {
    the_row();
    get_template_part('templates/flex/' . get_row_layout(), null, $args);
  }
}
?>
