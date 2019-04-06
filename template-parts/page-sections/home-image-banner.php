<?php

$backgroundImage = THEME_ROOT_URL . '/assets/images/coffee.jpg';
$heroText = "Group & Private Classes";
global $mustache;

$children = $mustache->render('image-banner', array('heroText' => $heroText));

include locate_template('template-parts/components/image-banner.php', false, false);