<?php
$args = array(
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'trainers',
    'post_status' => 'publish',
    'suppress_filters' => true,
);

$trainers = get_posts($args);

foreach ($trainers as $trainer) {
    $trainerProfileImage = get_the_post_thumbnail_url($trainer->ID) ?? '';
    ?>

<div class="section-trainers">
  <div class="container">
    <div class="row vSpace"></div>
    <div class="row">
      <div class="col-xs-12 trainers-card">
        <div class="trainer-profile-img marginBottom20" style="background-image: url(<?=$trainerProfileImage?>)"></div>
        <p class="trainer-name paddingBottom10"> <?=$trainer->post_title?> </p>
        <p class="bold">Specifications</p>
        <p>Sports Conditioning</p>
        <p>Weight Management</p>
        <p>Strength Traning</p>
        <p class="paddingTop10">
          <?=$trainer->post_content?>
        </p>
      </div>

    </div>

    <div class="row vSpace"></div>
  </div>
</div>

<?php

}