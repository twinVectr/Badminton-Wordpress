
<?php
global $mustache;

$sectionContent = get_field('location-hours-classes');

$sectionContentData = explode("@@@@", $sectionContent);

$sectionContentOneSplit = explode("####", $sectionContentData[0]);
$sectionContentTwoSplit = explode("####", $sectionContentData[1]);

$sectionContentOne = array(
    'leftContent' => $sectionContentOneSplit[0],
    'rightContent' => $sectionContentOneSplit[1],
    'sideBySideLeft' => $sectionContentOneSplit[2],
    'sideBySideRight' => $sectionContentOneSplit[3]);

$sectionContentTwo = array(
    'leftContent' => $sectionContentTwoSplit[0],
    'rightSideBySideLeft' => $sectionContentTwoSplit[1],
    'rightSideBySideRight' => $sectionContentTwoSplit[2]);

$children = $mustache->render('about', array('sectionContentSplit' => $sectionContentOne));

$childrenTwo = $mustache->render('about.subcontent', array('sectionContentSplit' => $sectionContentTwo));

include locate_template('template-parts/components/about-page.php', false, false);