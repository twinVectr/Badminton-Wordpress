<?php
/**
 * WM Badminton Theme functions
 * @since 1.0
 */

/**
 * Theme constants
 */
define('THEME_ROOT', get_template_directory());
define('THEME_ROOT_URL', get_template_directory_uri());

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
  require get_template_directory() . '/inc/back-compat.php';
  return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function WM_setup()
{
  /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
  add_theme_support('title-tag');

  /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
  add_theme_support('post-thumbnails');

  add_image_size('WM-featured-image', 2000, 1200, true);

  add_image_size('WM-thumbnail-avatar', 100, 100, true);

  // Set the default content width.
  $GLOBALS['content_width'] = 525;

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus(array(
    'main_menu' => __('Main Menu', 'WM'),
    'social' => __('Social Links Menu', 'WM'),
  ));

  /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
  add_theme_support('html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));

  /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
  add_theme_support('post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
  ));

  // Add theme support for Custom Logo.
  add_theme_support('custom-logo', array(
    'width' => 250,
    'height' => 250,
    'flex-width' => true,
  ));

  /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, and column width.
     */
  add_editor_style(array('assets/css/editor-style.css', WM_fonts_url()));
}

add_action('after_setup_theme', 'WM_setup');

/**
 * Register custom fonts.
 */
function WM_fonts_url()
{
  $fonts_url = '';
  $font_families = array();

  $font_families[] = 'Heebo:100,300,400,500,700,800,900';

  $query_args = array(
    'family' => urlencode(implode('|', $font_families)),
    'subset' => urlencode('latin,latin-ext'),
  );

  $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');

  return esc_url_raw($fonts_url);
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function WM_resource_hints($urls, $relation_type)
{
  if (wp_style_is('WM-fonts', 'queue') && 'preconnect' === $relation_type) {
    $urls[] = array(
      'href' => 'https://fonts.gstatic.com',
      'crossorigin',
    );
  }

  return $urls;
}
add_filter('wp_resource_hints', 'WM_resource_hints', 10, 2);

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Seventeen 1.0
 */
function WM_javascript_detection()
{
  echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action('wp_head', 'WM_javascript_detection', 0);

/**
 * Enqueue scripts and styles.
 */
function WM_badminton_scripts()
{
  if (has_nav_menu('main_menu')) {
    wp_enqueue_script('WM-navigation', get_theme_file_uri('/assets/js/navigation.js'), array('jquery'), '1.0', true);
  }

  wp_enqueue_script('WM-trainer-readmore', get_theme_file_uri('/assets/js/trainers-readmore.js'), array('jquery'), '1.0', true);

  // Add custom fonts, used in the main stylesheet.
  wp_enqueue_style('WM-fonts', WM_fonts_url(), array(), null);

  // Theme stylesheet.
  wp_enqueue_style('WM-style', get_stylesheet_uri());

  wp_enqueue_style('bootstrap-grid', THEME_ROOT_URL . '/assets/css/vendor/grid.min.css');

  wp_enqueue_style('WM-component-style', THEME_ROOT_URL . '/dist/styles/minified/base.min.css');
}
add_action('wp_enqueue_scripts', 'WM_badminton_scripts');

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function WM_front_page_template($template)
{
  return is_home() ? '' : $template;
}
add_filter('frontpage_template', 'WM_front_page_template');

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path('/inc/custom-header.php');

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path('/inc/template-tags.php');

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path('/inc/template-functions.php');

/**
 * Customizer additions.
 */
require get_parent_theme_file_path('/inc/customizer.php');

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path('/inc/icon-functions.php');

/**
 * WM Custom Post types
 */
require get_parent_theme_file_path('/inc/custom-post-types.php');

/**
 * WM Badminton Overrides
 */
require THEME_ROOT . '/vendor/mustache/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();
global $mustache;
$mustache = new Mustache_Engine(
  array(
    'loader' => new Mustache_Loader_FilesystemLoader(THEME_ROOT_URL . '/views/'),
  )
);

// custom settings
add_action('init', 'my_remove_editor_from_post_type');
function my_remove_editor_from_post_type()
{
  remove_post_type_support('page', 'editor');
}

// Add ACF settings
require_once THEME_ROOT . '/ACFSettings.php';

add_filter('carousel_slider_load_scripts', 'carousel_slider_load_scripts');
function carousel_slider_load_scripts($load_scripts)
{
  return true;
}
