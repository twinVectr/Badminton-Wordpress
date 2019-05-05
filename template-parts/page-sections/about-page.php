
<?php
global $mustache;

$sectionContent = get_field('location-hours-classes');

$sectionContentData = explode("@@@@", $sectionContent);

$sectionContentOneSplit = explode("####", $sectionContentData[0]);

$sectionContentOne = array(
  'leftContent' => $sectionContentOneSplit[0],
  'rightContent' => $sectionContentOneSplit[1],
  'sideBySideLeft' => $sectionContentOneSplit[2],
  'sideBySideRight' => $sectionContentOneSplit[3]
);

$children = $mustache->render('about', array('sectionContentSplit' => $sectionContentOne));

include locate_template('template-parts/components/about-page.php', false, false);
