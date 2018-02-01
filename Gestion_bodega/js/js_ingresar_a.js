$(document).ready(function() {
  $('#show-hide-passwd').on('click', function(e) {
    e.preventDefault();

    var current = $(this).attr('action');

    if (current == 'hide') {
      $(this).prev().attr('type', 'text');
      $(this).next.removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
      $(this).attr('action', 'show');
    }
    else if (current == 'show') {
      $(this).prev().attr('type', 'password');
      $(this).next.removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
      $(this).attr('action', 'hide');
    }
  })
})
