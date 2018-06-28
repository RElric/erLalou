jQuery(document).ready(function($) {
  $('.slide').on('click', function() {
    if(!$(this).hasClass('-active')) {
      $('.slide').each(function () {
        $(this).removeClass('-active');
      });
      $(this).addClass('-active');
    }
  })
});
