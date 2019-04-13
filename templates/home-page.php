<?php
/* Template Name: Home Page */

get_header();

get_template_part('template-parts/page-sections/home', 'hero');
get_template_part('template-parts/page-sections/home', 'membership');
get_template_part('template-parts/page-sections/home', 'image-banner');
get_template_part('template-parts/page-sections/home', 'blockquote');
get_template_part('template-parts/page-sections/home', 'trainer');

get_footer();