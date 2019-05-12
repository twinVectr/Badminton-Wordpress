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

$children = $mustache->render('join-now-content', array('sectionContentSplit' => $sectionContent));

include locate_template('template-parts/components/join-now.php', false, false);