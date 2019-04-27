<?php

$isFrontPage = is_front_page();
$navClasses = $isFrontPage ? 'main-navigation-front' : 'main-navigation-other';

?>

<!-- #site-navigation start -->
<nav class="main-navigation-mobile">
  <button class="nav-toggle">
    <span class="bar-top"></span>
    <span class="bar-mid"></span>
    <span class="bar-bot"></span>
  </button>
  <div class="nav-list-container">
    <?php wp_nav_menu(array(
    'theme_location' => 'main_menu',
    'menu_id' => 'main-menu',
));?>
  </div>
</nav>
<nav class="<?=$navClasses?>" role="navigation">
  <a href="<?=get_home_url()?>" class="WM-nav-logo"><img src="<?=THEME_ROOT_URL?>/assets/images/WM-logo.png"
      height="110" /></a>
  <?php wp_nav_menu(array(
    'theme_location' => 'main_menu',
    'menu_id' => 'main-menu',
));?>
</nav>
<!-- #site-navigation end -->