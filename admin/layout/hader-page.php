<?php  session_start();
require_once __DIR__ .'/../php/function.php';

if (!(isset($_SESSION['is_login'])) or !(isset($_SESSION['role']))) {
  header("Location: ../login.php");
  exit;
} elseif (isset($_SESSION['is_login']) and $_SESSION['is_login'] != true or isset($_SESSION['role']) and $_SESSION['role'] != 'admin') {
  header("Location: ../login.php");
  exit;
}

?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?php echo assets('/assets/bootstrap-5.0.2/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= assets('/assets/bootstrap-5.0.2/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= assets('/assets/css/style.css') ?>">
    <script src="<?= assets('/assets/ajax/jquery-3.7.1.js') ?>"></script>  
    <link rel="icon" href="<?= assets('/assets/img/logo.png') ?>">

    <title><?php echo $title  ?? 'Админ панель | ITS' ?></title>
  </head>
  <body style="background-color: #c8c2a2;">
    
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #0067cd75; color: black;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <!-- <img src="<?php echo $img_path ?? '../assets/img/logo.png' ?>" width="40"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style=" transition: all ease 1s;">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navLinks">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./index.php">Панель</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./teacher.php" >Учитель</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./students.php">Ученикий</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./subject.php">Придметий</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./group.php">Группий</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./message.php">Сообщение</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Настройки</a>
            </li>
          </ul>

          <ul class="navbar-nav me-right mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link date" id="date"><?= date("H:i d-m-Y "); ?></a>
            </li>
          </ul>
          
          <ul class="navbar-nav me-right mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./profile.php"><?= $_SESSION['full_name'] ?></a>
            </li>
          </ul>
          <ul class="navbar-nav me-right mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">Выход</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

