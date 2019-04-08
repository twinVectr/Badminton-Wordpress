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
  <?php wp_nav_menu(array(
    'theme_location' => 'main_menu',
    'menu_id' => 'main-menu',
));?>
</nav>
<!-- #site-navigation end -->