$(document).ready(function() {
  $('#show-hide-passwd').on('click', function(e) {
    e.preventDefault();

    var current = $(this).attr('action');

    if (current == 'hide') {
      $('#pass').attr('type', 'text');
      $(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action', 'show');
    }
    else if (current == 'show') {
      $('#pass').attr('type', 'password');
      $(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action', 'hide');
    }
  });
  $('.login').on('click', function(e) {
    e.preventDefault();

    $(this).window.open("ingresar.html");
  });
});
