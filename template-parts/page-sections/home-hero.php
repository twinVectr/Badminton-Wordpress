<?php

$backgroundImage = THEME_ROOT_URL . '/assets/images/coffee.jpg';
$heroText = "Height Fitness & <br> Strength Training Studio";
global $mustache;

$children = $mustache->render('hero-image-content', array('heroText' => $heroText));

include locate_template('template-parts/components/image-context.php', false, false);
