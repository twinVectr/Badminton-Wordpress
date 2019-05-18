<?php
global $mustache;

$commonBackgroundImage = get_field('hero_banner_backgroundimage');
$commonHeroText = get_field('hero_banner_text');
$commonHeroSubText = get_field('hero_banner_subtext');

$children = $mustache->render('common-hero-content', array('commonHeroText' => $commonHeroText, 'commonHeroSubText' => $commonHeroSubText));

include locate_template('template-parts/components/common-hero-context.php', false, false);
