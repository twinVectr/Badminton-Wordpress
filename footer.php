<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="wrap">
    <?php
get_template_part('template-parts/page-sections/home', 'join-today');

?>
  </div><!-- .wrap -->
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer();?>

</body>

</html>