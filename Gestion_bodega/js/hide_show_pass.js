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

  $('#show-hide-passwd-con').on('click', function(e) {
    e.preventDefault();

    var currentCon = $(this).attr('actionCon');

    if (currentCon == 'hideCon') {
      $('#passCon').attr('type', 'text');
      $(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('actionCon', 'showCon');
    }
    else if (currentCon == 'showCon') {
      $('#passCon').attr('type', 'password');
      $(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('actionCon', 'hideCon');
    }
  });
});
