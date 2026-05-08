(function ($) {
  "use strict";
  $(document).ready(function() {
    $('.menu-toggle-button, .l-header a').on('click', function () {
      $('.l-header').toggleClass('nav-visible');
    });
  });
})(jQuery);
