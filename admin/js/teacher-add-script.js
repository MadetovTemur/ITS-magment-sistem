$(document).ready(function () {
    
  $('#addteacher').on('submit', function (event) {
      event.preventDefault();
      
  
      $.post("./route/route-teacher.php", $(this).serialize(), function (data) { 
        $('#msg-alert').css('display','block');
        $('#msg-alert').html(data.msg);
        console.log(data);
      }, 'json');
  
    });
    
    $('#msg-alert').on('click', function () {
      $('#msg-alert').css('display','none');
      $('#msg-alert').html('');
    });
  
  });
  
  console.log('teacher');