<?php

$sectionContent = get_field('location-hours-classes');

$sectionContentData = explode("@@@@", $sectionContent);

?>
<div class="WM-section section-about-slider vertical-center">
  <div class="container">
    <div class="row">
      <?=do_shortcode($sectionContentData[1]);?>
    </div>
  </div>
</div>