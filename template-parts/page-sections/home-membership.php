<?php

$leftSideContent = 'Membership';
$rightSideDescription = get_field('location-hours-classes');

$descriptionSplit = explode("####", $rightSideDescription);

include locate_template('template-parts/components/side-by-side.php', false, false);
