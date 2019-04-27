<?php
get_header();
$current_post = get_post();
?>

<div class="container">
  <div class="vSpace"></div>
  <div class="container trainer-details" style="height: auto; line-height: 1.5em">
    <img src="<?=get_the_post_thumbnail_url($current_post)?>" class="floatLeft marginRight20 marginBottom20 paddingTop5"
      width="300" />
    <p>
      <?=$current_post->post_content?>
    </p>
  </div>
  <div class="vSpace"></div>
</div>


<?php
get_footer();
?>