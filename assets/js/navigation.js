
(function ($) {
  var toggle = $('.nav-toggle');

  toggle.on('click', function (e) {
    $(this).toggleClass('opened');

    $(".main-navigation-mobile").find('.nav-list-container').toggle();

  });

  // logic for sticky nav

  var mainNav = document.getElementsByClassName('main-navigation-front');

  if (mainNav && mainNav.length > 0) {
    window.onscroll = function onScrollSticky() {
      if (window.pageYOffset >= 120) {
        mainNav[0].classList.add("sticky")
      } else {
        mainNav[0].classList.remove("sticky");
      }
    }
  }
})(jQuery);
