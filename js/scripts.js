jQuery(document).ready(function($) {
  $('.button-collapse').sideNav();
  $('.current_page_item').css({
    'background-color': '#5ac1b9'
  });
  $('.parallax').parallax();
  $('img').removeAttr('width').removeAttr('height');
  $('.wp-caption').removeAttr('style');
})
