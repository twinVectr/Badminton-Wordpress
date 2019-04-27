<?php

global $wpdb;
$headCoachQuery = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}posts AS PO LEFT JOIN {$wpdb->prefix}postmeta AS PM ON PO.ID = PM.post_id where PM.meta_key='head_coach' AND PM.meta_value='HC'")[0];
$headCoachProfileImage = get_the_post_thumbnail_url($headCoachQuery->ID) ?? '';

$args = array(
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'trainers',
    'post_status' => 'publish',
    'suppress_filters' => true,
    'post__not_in' => array($headCoachQuery->ID),
);

$trainers = get_posts($args);

?>
<div class="section-trainers container">
  <div class="vSpace"></div>
  <div class="grid">
    <div class="headCoachProfileImage"
      style="height: 400px; width: auto; background-image: url(<?=$headCoachProfileImage?>); background-size: cover;  background-position: center">
    </div>
    <div>
      <p><?=substr($headCoachQuery->post_content, 0, 400)?>...</p>
      <div class="marginTop20 marginBottom30">
        <p class="marginBottom10"><b>Specification:</b></p>
        <p>Strengthing</p>
        <p>Footwork</p>
        <p>Foundations</p>
      </div>
      <a href="<?=get_permalink($headCoachQuery)?>"><button class="WM-button ">Read More</button></a>
    </div>
  </div>

  <div class="vSpace"></div>

  <div class="displayFlex">
    <?php foreach ($trainers as $trainer) {
    $trainerProfileImage = get_the_post_thumbnail_url($trainer->ID) ?? '';
    ?>
    <div class="trainers-card">
      <div class="trainer-profile-img marginBottom20" style="background-image: url(<?=$trainerProfileImage?>)">
      </div>
      <p class="trainer-name paddingBottom10"> <?=$trainer->post_title?> </p>
      <p class="bold">Specifications</p>
      <p>Sports Conditioning</p>
      <p>Weight Management</p>
      <p>Strength Traning</p>
      <p class="paddingTop10">
        <?=$trainer->post_content?>
      </p>
    </div>

    <?php
}?>

  </div>
  <div class="vSpace"></div>
</div>