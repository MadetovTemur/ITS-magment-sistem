<?php $title = 'Сообшения | ITS'; $page = 6;
if (isset($_GET['view'])) { ?>

  <?php include './layout/hader-page.php'  ?>



    <div class="container-lg mt-3">
        <a href="message-add.php"
           class="btn btn-dark">Gto</a>
           <hr>
    </div>
    <div class="container-lg mt-3" >

            <ul class="list-group list-group-flush">
        <li class="list-group-item">ID : 78</li>
        <li class="list-group-item">Email</li>
        <li class="list-group-item">Full name</li>
        <li class="list-group-item">Message</li>
        <li class="list-group-item">Date of joined</li>
        <li class="list-group-item">Action</li>
        </ul>

    </div>

  <?php include './layout/footer-page.php' ?>

<?php } else { ?>

  <?php 
   include './layout/hader-page.php'  ?>
    <hr>
    <h1>Shiferdi yazish karak</h1>
    <table class="table table-striped container-lg mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Электронное адрес</th>
          <th scope="col">Ф.И.О</th>
          <th scope="col">Сообшения</th>
          <th scope="col">Дата получения</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <th scope="row">1</th>
          <td>8</td>
          <td><a href="">Sherxon@gm.com</a></td>
          <td>Jumaboyev</td>
          <td>dt web</td>
          <td>28.12.2023 13:48</td>
          <td>
            <a href="" class="btn btn-danger">Удалит</a>
          </td>
        </tr>
        
      </tbody>
    </table>

  <?php 
    include './layout/footer-page.php' ?>

<?php  } ?>