<?php
global $mustache;

$sectionContent = get_field('location-hours-classes');

$sectionContentData = explode("@@@@", $sectionContent);

$sectionContentTwoSplit = explode("####", $sectionContentData[2]);

$sectionContentTwo = array(
    'leftContent' => $sectionContentTwoSplit[0],
    'rightSideBySideLeft' => $sectionContentTwoSplit[1],
    'rightSideBySideRight' => $sectionContentTwoSplit[2]);

$children = $mustache->render('about.subcontent', array('sectionContentSplit' => $sectionContentTwo));

include locate_template('template-parts/components/about-equipment.php', false, false);