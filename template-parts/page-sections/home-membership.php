<?php

$sectionContent = get_field('location-hours-classes');

$sectionContentSplit = explode("####", $sectionContent);

$sectionContent = array(
    'leftContent' => $sectionContentSplit[0],
    'rightContent' => $sectionContentSplit[1],
    'sideBySideLeft' => $sectionContentSplit[2],
    'sideBySideRight' => $sectionContentSplit[3],
);

global $mustache;

$children = $mustache->render('membership-content', array('sectionContentSplit' => $sectionContent));

include locate_template('template-parts/components/side-by-side.php', false, false);
