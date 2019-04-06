<?php

$sectionContent = get_field('open_hours');

$sectionContentSplit = explode("####", $sectionContent);

include locate_template('template-parts/components/open-hours.php', false, false);