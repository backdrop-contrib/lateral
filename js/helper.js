(function ($) {
  "use strict";
  $(document).ready(function() {
    $('.menu-toggle-button, .l-header a').click(function () {
      $('.l-header').toggleClass('nav-visible');
    });
  });
})(jQuery);
