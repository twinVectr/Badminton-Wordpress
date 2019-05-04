<?php
/* Template Name: Gallery */

get_header();

$gallery = get_field('gallery_albums');
?>

<div class="section-gallery container">
  <?=$gallery?>
</div>
<?php

get_footer();