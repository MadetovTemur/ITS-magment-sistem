
$(document).ready(function () {
  $('#subject-edit').on('submit', function (event) {
    event.preventDefault();
    

    $.post("./route/route-subject.php", $(this).serialize(), function (data) { 
      $('#msg-alert').show(1000).html(data.msg).delay(7000).hide(1000);
    }, 'json');

  });
});

