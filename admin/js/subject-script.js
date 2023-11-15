$(document).ready(function () {
  $('#subject-add').on('submit', function (event) {
    event.preventDefault();
    

    $.post("./route/route-subject.php", $(this).serialize(), function (data) { 
      $('#msg-alert').show(1000);
      $('#msg-alert').html(data.msg).delay(6000).hide(1000);
    }, 'json');

  });

  
  $('#subject-edit').on('submit', function (event) {
    event.preventDefault();
    

    $.post("./route/route-subject.php", $(this).serialize(), function (data) { 
      $('#msg-alert').show(1000).html(data.msg).delay(6000).hide(1000);
    }, 'json');

  });


});
