<div class="WM-section section-hero vertical-center">
  <?php if (wp_is_mobile()) {?>
  <div class="WM-background-image-container" style="background-image: url('<?=$backgroundImage?>')"></div>

  <?php } else {?>

  <div data-jarallax data-speed="0.2" class="jarallax WM-background-image-container"
    style="background-image: url('<?=$backgroundImage?>')"></div>

  <?php }?>
  <div class="container">
    <div class="row">
      <?=$children?>
    </div>
  </div>
</div>