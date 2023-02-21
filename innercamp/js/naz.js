// document.addEventListener('DOMContentLoaded', function () {
//   jQuery(document).ready(function ($) {

//   });
// });

document.addEventListener('DOMContentLoaded', function () {
  jQuery(document).ready(function ($) {
    $('.post__back-to-top').click(function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  });
});
