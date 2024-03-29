<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - ITS</title>
  <link rel="stylesheet" type="text/css" href="<?php echo $view->assets('bootstrap-5.0.2/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $view->assets('bootstrap-5.0.2/css/bootstrap.css') ?>">
  <link rel="stylesheet" href="<?php echo $view->assets('css/style.css') ?>">
  <link rel="icon" href="./assets/img/logo.png">
</head>

<body class="body-login">
  <div class="black-fill"> <br/> <br/>
    <div class="d-flex justify-content-center align-items-center flex-column">
      <form class="login" method="post" action="/singup" id="login-form">   
        <noscript>
          <div class="text-center">
              Вы в настройках отключили JavaScript 
          </div>
        </noscript>


        <h3>LOGIN</h3>
        <?php if($session->has('username')) { ?>
          <?php foreach($session->getFlash('username') as  $value) { ?>
              <?php echo $value;?>
          <?php } ?>
        <?php } ?>

        <div class="mb-3">
          <label class="form-label">Пользователь имя</label>
          <input type="text" class="form-control" name="username"  maxlength="12" >
        </div>

        <?php if($session->has('password') ) { ?>
          <?php foreach($session->getFlash('password') as $value) { ?>
              <?php echo $value;?>
          <?php } ?>
        <?php } ?>

        <div class="mb-3">
          <label class="form-label">Парол</label>
          <input type="password" class="form-control" name="password" minlength="5" maxlength="16" value="12345">
        </div>

        <button type="submit" class="btn btn-primary" >Войти</button>
        <a href="/" style="margin-left: 20px;" class="text-decoration-none btn btn-primary">Главный</a>
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