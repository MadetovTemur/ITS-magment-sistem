<?php $title = 'Ученикий | ITS'; $page = 3;

require __DIR__ . '/../connection/connection.php';
require __DIR__ . '/php/function.php';

if(isset($_GET['edit'])) { ?>

<?php } elseif (isset($_GET['view'])) {?>

<?php } elseif (isset($_GET['add']) ) { ?>

    <?php include './layout/hader-page.php';

    $groups = EchoGroupStudents($conn); 
     ?>

    <div class="container-lg mt-3">
        <a href="students.php"
           class="btn btn-dark">Назад</a>
           <hr>
    </div>
    <div class="container-lg mt-3" >

    <form action="" accept-charset="utf-8" method="POST" id="addstudent">

      <div class="mb-2">
          <label for="formGroupExampleInput" class="form-label">Ф.И.О *</label>
          <input type="text" class="form-control"  id="formGroupExampleInput" autocomplete="off" required name="full_name">
      </div>
      <div class="mb-2">
          <label for="formGroupphoneInput" class="form-label">Телефон номер *</label>
          <input type="text" class="form-control" id="formGroupphoneInput" autocomplete="off" required name="telephone">
      </div>

      <div class="mb-2">
          <label for="formGrouppasportInput2" class="form-label">Серия паспорт </label>
          <input type="text" class="form-control" id="formGrouppasportInput2" autocomplete="off"  name="pasport_code">
      </div>


      <div class="mb-2">
          <label for="formGroupADresInput2" class="form-label">Адрес *</label>
          <input type="text" class="form-control" id="formGroupADresInput2" required name="address">
      </div>

      <div class="mb-2">
          <label for="formGroupusernameInput2" class="form-label">Имя пользователя *</label>
          <input type="text" class="form-control" id="formGroupusernameInput2" minlength="5" maxlength="12"  required name="username">
      </div>


      <div class="mb-2">
          <label for="formGrouppasswordInput2" class="form-label">Парол *</label>
          <input type="password" class="form-control" id="formGrouppasswordInput2" minlength="5" maxlength="16" autocomplete="off" value="12345" required name="password">
      </div>

      
      <div class="mb-2">
          <label for="formGroupdayInput2" class="form-label">День рождения *</label>
          <input type="date" class="form-control" id="formGroupdayInput2" name="date_of_birth" autocomplete="off" required min='1970-02-05' max='2018-01-01'>
      </div> 

      <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="erkak" checked>
          <label class="form-check-label" for="gridRadios1">
            Мужчина
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="ayol">
          <label class="form-check-label" for="gridRadios2">
            Женшина
          </label>
      </div>
      
      <?php if($groups != 0) {?>
      <div class="mb-3">
        <label class="form-label">Групий</label>
        <div class="row row-cols-5">
        <?php foreach($groups as $group): ?>
          <div class="col">
            <input type="checkbox" name="groups[]"
              value="<?= $group['group_code'] ?>,">
              <a href="./group.php?view=on&group_id=<?= $group['group_id'] ?>" target="_blank" rel="noopener noreferrer"><?= $group['group_subject'] ?></a>
          </div>
        <?php endforeach; ?> 
        </div>
      </div>
      <?php } ?>
      
             
      
      <button type="submit" class="btn btn-primary mt-3">Отправит</button>
      <button type="reset" class="btn btn-danger mt-3">Сброс</button>
    </form>

    </div>

    <script src="./js/student-script.js"></script>
    <?php include './layout/footer-page.php' ?>

<?php } else {?>

    <?php include './layout/hader-page.php'  ?>
    <div class="container-lg mt-3">
        <a href="students.php?add=on"
           class="btn btn-dark">Добавить нового ученик</a>
           <hr>
    </div>
    <table class="table table-striped container-lg mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Ф.И.О</th>
          <th scope="col">Группа</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <th scope="row">32</th>
          <td>8</td>
          <td><a href="./teacher-view.php?teacher_id=">Sherxon</a></td>
          <td>dt web</td>
          <td>
            <a href="" class="btn btn-warning">Изменит</a>
            <a href="" class="btn btn-danger">Удалит</a>
          </td>
        </tr>

        
      </tbody>
    </table>
    <?php include './layout/footer-page.php' ?>

<?php }?>