(function ($) {
  var trainerShortReadmore = $('.trainer-shortReadMore');

  trainerShortReadmore.on('click', function (e) {
    e.preventDefault();
    var toggleWithParentIndex = $(this).parent().data('index');
    $(this).parent().toggle();

    var longToggleClass = 'trainer-long' + toggleWithParentIndex;
    $("." + longToggleClass).toggle();

  });
})(jQuery);
