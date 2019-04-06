<?php

$sectionContent = get_field('location-hours-classes');

$sectionContentSplit = explode("####", $sectionContent);

include locate_template('template-parts/components/side-by-side.php', false, false);