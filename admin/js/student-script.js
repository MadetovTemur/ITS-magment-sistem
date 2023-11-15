
$(document).ready(function () {
    $('#addstudent').on('submit', function (event) {
      event.preventDefault();
      
  
      $.post("./route/route-student.php", $(this).serialize(), function (data) { 
        $('#msg-alert').show(1000).html(data.msg).delay(7000).hide(1000);
      }, 'json');
  
    });

    $('#student-edit').on('submit', function (event) {
        event.preventDefault();
        
    
        $.post("./route/route-student.php", $(this).serialize(), function (data) { 
          $('#msg-alert').show(1000).html(data.msg).delay(7000).hide(1000);
        }, 'json');
    
      });
  });
  
  