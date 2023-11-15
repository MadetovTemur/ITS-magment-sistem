<?php $title = 'Учител | ITS'; $page = 2;


require __DIR__ . '/../connection/connection.php';
require __DIR__ . '/php/function.php';





if(isset($_GET['add'])  and $_GET['add'] == 'on') { ?>


  <?php include './layout/hader-page.php'; 
 

  ?>


  <div class="container-lg mt-3">
    <a href="./teacher.php" class="btn btn-dark">Назад</a>
    <hr>
  </div>
    <div class="container-lg mt-3" >
      <div class="alert alert-danger container" role="alert" style="display: none;" id="msg-alert"></div>
        <form action='' method='POST' id='addteacher'>
          <input type='hidden' name='add' value='412'>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Ф.И * </label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                 autocomplete="off" required name="full_name" maxlength="90" value="Nurullaev Temur">
             </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Паспорт серия</label>
                <input type="text" class="form-control" id="formGroupExampleInput pasport" 
                  autocomplete="off" name="pasport_code" maxlength='17'>
            </div>
             
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Телефонный контакт *</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                   autocomplete="off"  required name='telephone' maxlength="15" value="+998902365847">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Имя пользователя *</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                 autocomplete="off"  required name="username"  minlength="4" maxlength='13' value="temur">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Парол *</label>
                <input type="password" class="form-control" id="formGroupExampleInput"
                 autocomplete="off"  required name="password" minlength="5" maxlength='16' value="12345">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Адрес *</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                 autocomplete="off"  required name="address" maxlength='119' value="Beruniy tumani">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">День рождения *</label>
                <input type="date" class="form-control" id="formGroupExampleInput"
                 required min='1970-02-05' max='2007-01-01' name="data_of_birth" value='2006-02-17'>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="jender" id="gridRadios1" required value="erkak" >
                <label class="form-check-label" for="gridRadios1">
                 Мужчина
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="jender" id="gridRadios2" required value="ayol">
                <label class="form-check-label" for="gridRadios2">
                Женшина
                </label>
            </div>

            <div class="mb-4 mt-2">
              <label class="form-label">Придметь</label>
              <div class="row row-cols-5">
                <?php foreach(EchoSubjectsCode($conn) as $subject): ?>
                <div class="col">
                  <input type="checkbox"
                         name="subjects[]"
                         value="<?= $subject['subject_code'].',' ?>">
                         <?= $subject['subject_name'] ?>
                </div>
                <?php endforeach; ?>
              </div>
            </div>


            <div class="mt-3 mb-4">
              <button type="submit" class="btn btn-primary ">Сохранить</button>
              <button type="reset" class="btn btn-danger me-md-3">Сбросит</button>
            </div>

        </form>
    </div>
  <?php  $script = '<script type="text/javascript" src="./js/teacher-add-script.js"></script>'; include './layout/footer-page.php' ?>


<?php } elseif (isset($_GET['view']) and $_GET['view'] == 'on' ) { ?>


  <?php include './layout/hader-page.php' ?>


    <div class="container-lg mt-3 ">
        <a href="teacher.php"
           class="btn btn-dark">Назад</a>
           <hr>
    </div>

    <div class="container-lg mt-3">

          <ul class="list-group  list-group-flush">
            <li class="list-group-item list-group-item-success"><img src="../assets/img/teacher-Erkak.png" width="170px" height="180px" class="img-thumbnail rounded-circle " alt="img"></li>
            <li class="list-group-item list-group-item-success text-primary">Adress : </li>
            <li class="list-group-item list-group-item-success">A third item</li>
          </ul>
    </div>

  <?php include './layout/footer-page.php' ?>


<?php } elseif (isset($_GET['edit']) and $_GET['edit'] == 'on' and isset($_GET['teacher'])) { ?>


 <?php include './layout/hader-page.php' ;
  $teacher =  GetByIdTeacher($conn, $_GET['teacher']);
  ?>


  <div class="container-lg mt-3">
    <a href="./teacher.php" class="btn btn-dark">Назад</a>
    <hr>
  </div>
    <div class="container-lg mt-3" >
      <?php if($teacher != 0): ?>
        <form action="" method="POST" id='editteacher'>
          <input type="hidden" name="edit" value="454">
          <div class="alert alert-danger container" role="alert" style="display: none;" id="msg-alert"></div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Ф.И * </label>
                <input type="text" class="form-control" id="formGroupExampleInput" name='full_name' autocomplete="off" required value="<?= $teacher['full_name'] ?>">
             </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Паспорт серия</label>
                <input type="text" class="form-control" name='pasport_code' id="formGroupExampleInput" autocomplete="off" value="<?= $teacher['pasport_code'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Телефонный контакт *</label>
                <input type="text" class="form-control" name='telephone' id="formGroupExampleInput" autocomplete="off"  required value="<?= $teacher['phone_number'] ?>">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Имя пользователя *</label>
                <input type="text" class="form-control" id="username" autocomplete="off"  required value="<?= $teacher['username'] ?>">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Адрес *</label>
                <input type="text" class="form-control" name='address' id="formGroupExampleInput" autocomplete="off"  required value="<?= $teacher['address'] ?>">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">День рождения *</label>
                <input type="date" class="form-control" name='date_of_birth' id="formGroupExampleInput" required min='1970-02-05' max='2007-01-01' value="<?= $teacher['date_of_birth'] ?>">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="jender" id="gridRadios1" required value="erkak" <?php if($teacher['jender'] == 'erkak') echo "checked";?>>
                <label class="form-check-label" for="gridRadios1">
                 Мужчина
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="jender" id="gridRadios2" required value="ayol" <?php if($teacher['jender'] == 'ayol') echo "checked";?>>
                <label class="form-check-label" for="gridRadios2">
                Женшина
                </label>
            </div>

            <div class="mb-4 mt-2">
              <label class="form-label">Придметь</label>
              <div class="row row-cols-5">
                <?php foreach(EchoSubjectsCode($conn) as $subject): ?>
                <div class="col">
                  <input type="checkbox"
                         name="subjects[]"
                         <?= ChekSubjectTeacher($subject['subject_code'], $teacher['subjects'])?>
                         value="<?= $subject['subject_code'].',' ?>">
                         <?= $subject['subject_name'] ?>
                </div>
                <?php endforeach; ?>      
              </div>
            </div>


            <div class="mt-3 mb-4">
              <input type="hidden" name="teacher" value="<?= $teacher['teacher_id'] ?>">
              <button type="submit" class="btn btn-primary ">Сохранить</button>
            </div>

        </form>
      <?php else: ?>
        <div class="alert alert-info w-450 m-5" role="alert">
          Пустой! 
        </div>
      <?php endif; ?>
    </div>


    <script type="text/javascript">
      var username = document.getElementById("username");
      let username_d = username.value;
      username.addEventListener('input', (event) => {
         if( username.value == username_d || username.value.length == 0){
            username.name = '';
         }else {
            username.name = 'username';
         }
         console.log(username.value.length);
        
      });
    </script>
  <?php $script = '<script type="text/javascript" src="./js/teacher-edit-script.js"></script>';  include './layout/footer-page.php' ?>


<?php } else { ?>

  <?php include './layout/hader-page.php';
    
     
    
    $page = isset($_GET['page']) ? $_GET['page'] : 0;
    $offset = $limit * ($page);
    
    
    $teachers = AllTeacher($conn, '0', $limit, $offset)  ;
    $page_count = (CountRows($conn, '0', 'teachers') / $limit);



    
   ?>

    <div class="container-lg mt-3">
        <a href="?add=on"
           class="btn btn-dark">Добавить нового учитель</a>
           <hr>
    </div>
    <?php if($teachers != 0) { ?>
    <table class="table table-striped container mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Ф.И.О</th>
          <th scope="col">Придмети</th>
          <th scope="col">Група</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody> 
      <?php $i=1; foreach ($teachers as $teacher) { ?>     
        <tr>
          
          <th scope="row"><?= $i ?></th>
          <td><?= $teacher['teacher_id'] ?></td>
          <td><a href="./teacher.php?view=on&teacher=<?= $teacher['teacher_id'] ?>"><?= $teacher['full_name'] ?></a></td>
          <td><?= $teacher['subjects'] ?></td>
          <td><?= EchoTeacherGroups($conn, $teacher['teacher_id']) ?></td>
          <td>
            <a href="./teacher.php?edit=on&teacher=<?= $teacher['teacher_id'] ?>" class="btn btn-warning">Изменит</a>
            <!-- <a href="./teacher.php?delite=on&teacher=<?= $teacher['teacher_id'] ?>" class="btn btn-danger">Удалит</a> -->
          </td>
        </tr>
        <?php $i++; }?>
      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <?php if($page_count > 1) {?>
        <?php for($f= 0; $f < $page_count; $f++){ ?>
          <li class="page-item"><a class="page-link" href="?page=<?= $f?>"><?= $f+1 ?></a></li>
        <?php } }?>
      </ul>
    </nav>
    <?php } else {?>
      <div class="alert alert-info w-450 m-5" role="alert">
        Пустой! Добавте новоый Учител
      </div>
    <?php }?>
  <?php include './layout/footer-page.php' ?>

<?php } ?>