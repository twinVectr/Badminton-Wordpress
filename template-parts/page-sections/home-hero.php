<?php
global $mustache;

$backgroundImage = get_field('hero_background_image');
$heroText = get_field('hero_text');
$heroSubText = get_field('hero_sub_text');
$heroJoinNowLink = get_field('hero_join_now_link');

$children = $mustache->render('hero-image-content', array('heroText' => $heroText, 'heroJoinNowLink' => $heroJoinNowLink, 'heroSubText' => $heroSubText));

include locate_template('template-parts/components/image-context.php', false, false);
