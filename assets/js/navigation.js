/* global twentyseventeenScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function ($) {
  var toggle = $('.nav-toggle');

  toggle.on('click', function (e) {
    $(this).toggleClass('opened');

    $(".main-navigation-mobile").find('.nav-list-container').toggle();

  });
})(jQuery);
