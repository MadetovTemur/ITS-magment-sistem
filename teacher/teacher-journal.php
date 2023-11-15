
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2/css/bootstrap.css">
    <link rel="icon" href="../assets/img/logo.png">

    <title><?php echo $title  ?? 'Админ панель | ITS' ?></title>
  </head>
  <body style="background-color: #c8c2a2;">







<table class="table table-bordered table-striped table-hover">

      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Email</th>
          <th scope="col">Full name</th>
          <th scope="col">Message</th>
          <th scope="col">Date of joined</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        
        <tr>
          <th scope="row">32</th>
          <td>8</td>
          <td><a href="./message-view.php?teacher_id=">Sherxon@gm.com</a></td>
          <td>Jumaboyev</td>
          <td>dt web</td>
          <td>28.12.2023 13:48</td>
          <td>
            <a href="teacher-delete.php?teacher_id=" class="btn btn-danger">Delete</a>
          </td>
        </tr>

        <tr>
          <th scope="row">32</th>
          <td>8</td>
          <td><a href="./teacher-view.php?teacher_id=">Sherxon@gm.com</a></td>
          <td>Jumaboyev</td>
          <td>dt web</td>
          <td>28.12.2023 13:48</td>
          <td>
            <a href="teacher-delete.php?teacher_id=" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        
      </tbody>

</table>







    <script src="../assets/ajax/jquery-3.7.1.js"></script>  

    <script>
        $(document).ready(function(){
            $("#navLinks li:nth-child(<?php echo $page ?? '0'?>) a").addClass('active');
        });
    </script>
    <script type="text/javascript" src="../assets/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
  </body>
</html>