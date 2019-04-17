
(function ($) {
  var toggle = $('.nav-toggle');

  toggle.on('click', function (e) {
    $(this).toggleClass('opened');

    $(".main-navigation-mobile").find('.nav-list-container').toggle();

  });

  // logic for sticky nav

  var mainNav = document.getElementsByClassName('main-nav')[0];


  var mainNavOffset = mainNav.offsetTop;

  $(document).ready(function () {
    window.onscroll = function () {
      onScrollSticky();
    }
  });

  function onScrollSticky() {
    if (window.pageYOffset >= 120) {
      mainNav.classList.add("sticky")
    } else {
      mainNav.classList.remove("sticky");
    }
  }

})(jQuery);
