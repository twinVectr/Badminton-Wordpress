<?php

$backgroundImage = get_field('hero_parallax_one_image');
$heroText = get_field('hero_parallax_one_text');
$subText = get_field('hero_parallax_one_sub_text');
$link = get_field('hero_parallax_one_link');

global $mustache;

$children = $mustache->render('image-banner', array('heroText' => $heroText, 'subText' => $subText, 'link' => $link));

include locate_template('template-parts/components/image-banner.php', false, false);