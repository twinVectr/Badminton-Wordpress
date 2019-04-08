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
<nav class="main-navigation" role="navigation">
  <div style="float: left"><img src="<?=THEME_ROOT_URL?>/assets/images/WM-logo.png" height="100" width="100" /></div>
  <?php wp_nav_menu(array(
    'theme_location' => 'main_menu',
    'menu_id' => 'main-menu',
));?>
</nav>
<!-- #site-navigation end -->