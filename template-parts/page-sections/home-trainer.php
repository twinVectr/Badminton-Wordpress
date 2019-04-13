<?php

$backgroundImage = THEME_ROOT_URL . '/assets/images/coffee.jpg';
$heroText = "World-class Trainers";
$subText = "MEET THE TRAINERS";
global $mustache;

$children = $mustache->render('image-banner', array('heroText' => $heroText, 'subText' => $subText));

include locate_template('template-parts/components/image-banner.php', false, false);
