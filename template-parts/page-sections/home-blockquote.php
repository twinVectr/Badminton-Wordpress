<?php

// $sectionContent = get_field('location-hours-classes');
global $mustache;

$sectionContent = array(
    'quote' => 'There is nothing impossible to him who will try.',
    'auther' => 'Alexander the Great',
);

$children = $mustache->render('blockquote', array('sectionContent' => $sectionContent));

include locate_template('template-parts/components/side-by-side.php', false, false);
