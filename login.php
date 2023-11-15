<?php session_start(); // echo password_hash('12345', PASSWORD_DEFAULT);?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - ITS</title>
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap-5.0.2/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="icon" href="./assets/img/logo.png">
</head>

<body class="body-login">

  <div class="black-fill"><br /> <br />
    <div class="d-flex justify-content-center align-items-center flex-column">
      <form class="login" method="post" action="./php/singup.php" id="login-form">
          
          <noscript>
           <div class="text-center">
              Вы в настройках отключили JavaScript 
          </div>
          </noscript>

<!--         <div class="text-center">
          <img src="./img/logo.png" width="100">
        </div> -->
        <h3>LOGIN</h3>
        <?php if (isset($_SESSION['msg'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?=$_SESSION['msg']?>
        </div>
        <?php session_destroy(); } ?>
        <div class="mb-3">
          <label class="form-label">Пользователь имя</label>
          <input type="text" class="form-control" name="username" required minlength="5" maxlength="12" >
        </div>

        <div class="mb-3">
          <label class="form-label">Парол</label>
          <input type="password" class="form-control" name="password" minlength="5" maxlength="16" value="12345">
        </div>

        <button type="submit" id="login" class="btn btn-primary" name="submit" value="user">Доступ</button>
        <a href="index.php" style="margin-left: 20px;" class="text-decoration-none btn btn-primary">Главный</a>
      </form>

      <br /><br />
      <div class="text-center text-light">
        Copyright &copy; 2022 Y School. All rights reserved.
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<pre style="background-color: white;">
<?php print_r($_SERVER['HTTP_REFERER']); ?></pre>