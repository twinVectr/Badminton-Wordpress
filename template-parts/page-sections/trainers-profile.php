<?php

global $wpdb;
$headCoachQuery = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}posts AS PO LEFT JOIN {$wpdb->prefix}postmeta AS PM ON PO.ID = PM.post_id where PM.meta_key='head_coach' AND PM.meta_value='HC'")[0];
$headCoachProfileImage = get_the_post_thumbnail_url($headCoachQuery->ID) ?? '';
$headCoach_specification = get_field('trainer_specification', $headCoachQuery->ID);

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
    <div class="headCoachProfileImage" style="height: 400px; width: auto; background-image: url(<?= $headCoachProfileImage ?>); background-size: cover;  background-position: center">
    </div>
    <div>
      <h2 class="noPadding marginTop5"><?= $headCoachQuery->post_title ?></h2>
      <p class="paddingTop20"><?= substr(strip_tags($headCoachQuery->post_content), 0, 400) ?>...</p>
      <div class="marginTop20 marginBottom30">
        <p class="marginBottom10"><b>Specification:</b></p>
        <?= $headCoach_specification ?>
      </div>
      <a href="<?= get_permalink($headCoachQuery) ?>"><button class="WM-button ">Read More</button></a>
    </div>
  </div>

  <div class="vSpace"></div>

  <div class="displayFlex">
    <?php foreach ($trainers as $trainer) {
      $index = 0;
      $trainerProfileImage = get_the_post_thumbnail_url($trainer->ID) ?? '';
      $trainerSpecs = get_field('trainer_specification', $trainer->ID);
      $trainerShortIndexClass = 'trainer-short' . $index;
      $trainerLongIndexClass = 'trainer-long' . $index;
      ?>
      <div class="trainers-card">
        <div class="trainer-profile-img" style="background-image: url(<?= $trainerProfileImage ?>)">
        </div>
        <h3 class="trainer-name"> <?= $trainer->post_title ?> </h3>
        <p class="bold">Specifications</p>
        <?= $trainerSpecs ?>
        <div class="<?= $trainerShortIndexClass ?> paddingTop10" data-index=<?= $index ?>>
          <?= substr(strip_tags($trainer->post_content), 0, 100) ?><a href="" class="trainer-shortReadMore"><span class="marginLeft5">Read more...<span></a>
        </div>
        <div class="<?= $trainerLongIndexClass ?> paddingTop10 displayNone">
          <?= $trainer->post_content ?>
        </div>
      </div>

      <?php
      $index++;
    } ?>

  </div>
  <div class="vSpace"></div>
</div>