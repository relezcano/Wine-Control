$(document).ready(function() {
  $('#show-hide-passwd').on('click', function(e) {
    e.preventDefault();

    var current = $(this).attr('action');

    if (current == 'hide') {
      $(this).prev().attr('type', 'text');
      $('#basic-addon2').attr('type', 'text');
      $(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action', 'show');
    }
    else if (current == 'show') {
      $(this).prev().attr('type', 'password');
      $('#basic-addon2').attr('type', 'password');
      $(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action', 'hide');
    }
  })
})
