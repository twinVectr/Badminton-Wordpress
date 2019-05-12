<div class="WM-section section-banner-1 vertical-center">
  <?php if (wp_is_mobile()) {?>
  <div class="WM-background-image-container" style="background-image: url('<?=$backgroundImage?>')"></div>

  <?php } else {?>

  <div data-jarallax data-speed="0.2" class="jarallax WM-background-image-container"
    style="background-image: url('<?=$backgroundImage?>')"></div>

  <?php }?>

  <div class="container">
    <div class="row vSpace"></div>
    <div class="row">
      <?=$children?>
    </div>
    <div class="row vSpace"></div>
  </div>
</div>