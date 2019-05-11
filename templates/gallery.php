<?php
/* Template Name: Gallery */

get_header();

$gallery = get_field('gallery_albums');
?>

<div class="section-gallery container">
  <h1 class="bold center">Gallery</h1>
  <?= $gallery ?>
</div>
<?php

get_footer();
