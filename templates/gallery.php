<?php
/* Template Name: Gallery */

get_header();

$gallery = get_field('gallery_albums');

get_template_part('template-parts/page-sections/common', 'hero-banner');

?>


<div class="section-gallery container">
  <h1 class="bold center">Gallery</h1>
  <?= $gallery ?>
</div>
<?php

get_footer();
