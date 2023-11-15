<?php $title = 'Придметий | ITS'; $page = 4;

require __DIR__ . '/../connection/connection.php';
require __DIR__ . '/php/function.php';

if (isset($_GET['delite']) and isset($_GET['subject_id'])) {
  DelateSubject($conn, $_GET['subject_id']);
  header("Location: ./subject.php");
}

if(isset($_GET['add'])) { ?>


    <?php include './layout/hader-page.php' ?>

    <div class="container-lg mt-3">
        <a href="subject.php"
           class="btn btn-dark">Назад</a>
           <hr>
    </div>
    <div class="container-lg mt-3" >

    <form action="" method="POST" id="subject-add">
        <div class="alert alert-danger container" role="alert" style="display: none;" id="msg-alert"></div>
        <div class="form-group">
            <label for="exampleInputEmail1">Придметь *</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="off" placeholder="Python" name="subject_name" maxlength="40" minlength="2">
            <!-- <small id="emailHelp" class="form-text text-muted"> else.</small> -->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Придметь код *</label>
            <input type="text" class="form-control" id="exampleInputPassword1" required autocomplete="off" placeholder="Py-uz"
            name="subject_code" maxlength="30" minlength="2">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описания </label>
            <textarea class="form-control" id="exampleFormControlTextarea1"  autocomplete="off" rows="3"
            name="discription" maxlength="150"></textarea>
        </div>
        <input type="hidden" name="add" value="668">
        <div class="mt-3">
          <button type="submit" class="btn btn-primary" name="add" value="on">Отправить</button>
          <button type="reset" class="btn btn-danger">Сбросит</button>
        </div>
        
    </form>

    </div>

    
    <?php $script = '<script type="text/javascript" src="./js/subject-script.js"></script>';
    include './layout/footer-page.php' ?>


<?php } elseif (isset($_GET['view'])) {  ?>


  <?php include './layout/hader-page.php';
  $subject_one = GetSubjectId($conn, $_GET['view']);
  ?>


    <div class="container-lg mt-3 ">
        <a href="subject.php"
           class="btn btn-dark">Назад</a>
           <hr>
    </div>

    <div class="container-lg mt-3">
      <?php if($subject_one != 0) { ?>
          <ul class="list-group  list-group-flush">
            <li class="list-group-item list-group-item-success">ID:: <?= $subject_one['subject_id'] ?></li>
            <li class="list-group-item list-group-item-success">Предмет:: <?= $subject_one['subject_name'] ?></li>
            <li class="list-group-item list-group-item-success">Предмет код:: <?= $subject_one['subject_code'] ?></li>
            <li class="list-group-item list-group-item-success">Описания:: <?= $subject_one['discription'] ?></li>
            <li class="list-group-item list-group-item-success">Дата добавления:: <?= $subject_one['date_of_joined'] ?></li>
            <li class="list-group-item list-group-item-success">Дата изменения <?= $subject_one['data_of_edit'] ?></li>
            <li class="list-group-item list-group-item-success">Видна ::  <?= EchoStatus($subject_one['status'], ['on'=>'On', 'off'=>'Off'])  ?></li>
          </ul>
      <?php } else {?>
       <div class="alert alert-info w-450 m-5" role="alert">
          Пустой! Добавте новоый предмет
        </div>
      <?php } ?>    
    </div>

  <?php include './layout/footer-page.php' ?>


<?php } elseif (isset($_GET['edit']) and isset($_GET['subject_id'])) {?>


    <?php include './layout/hader-page.php';
    $subject_one = GetSubjectId($conn, $_GET['subject_id']);
    // var_dump($subject_one);
     ?>

    <div class="container-lg mt-3">
        <a href="subject.php"
           class="btn btn-dark">Назад</a>
           <hr> 
    </div>
    <div class="container-lg mt-3" >
    <?php if($subject_one != 0) {?>
    <form action="" method="POST" id="subject-edit">
        <div class="alert alert-danger container" role="alert" style="display: none;" id="msg-alert"></div>
        <div class="form-group">
            <label for="exampleInputEmail1">Придметь *</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autocomplete="off" placeholder="Python" name="subject_namer" maxlength="40" minlength="2" value="<?= $subject_one['subject_name'] ?>">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Придметь код *</label>
            <input type="text" class="form-control" id="exampleInputPassword1" required autocomplete="off" placeholder="Py-uz"
            maxlength="30" minlength="2" disabled value="<?= $subject_one['subject_code'] ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описания </label>
            <textarea class="form-control" id="exampleFormControlTextarea1"  autocomplete="off" rows="3"
            name="discriptionr" maxlength="150" ><?php if($subject_one['discription'] != '0') echo $subject_one['discription'] ?></textarea>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="satus" id="gridRadios1" required value="0" 
            <?php if($subject_one['status'] == '0') echo 'checked'?> >
          <label class="form-check-label" for="gridRadios1"  >
            Паказат
          </label>
        </div>
        <div class="form-check ">
          <input class="form-check-input" type="radio" name="satus" id="gridRadios2" required value="1"
            <?php if($subject_one['status'] == '1') echo 'checked'?>>
          <label class="form-check-label" for="gridRadios2">
            Убрат
          </label>
        </div>

        <input type="hidden" name="edit" value="<?= $subject_one['subject_id'] ?>">
        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Отправить</button>
          <button type="reset" class="btn btn-danger">Сбросит</button>
        </div>
        
    </form>
    <?php } else {?>
      <div class="alert alert-info w-450 m-5" role="alert">
        Пустой!
      </div>
    <?php } ?>
    </div>

    
    <?php $script = '<script type="text/javascript" src="./js/subject-edit-script.js"></script>';
    include './layout/footer-page.php' ?>

<?php } else { ?>

 
  <?php include './layout/hader-page.php';
     
    
    
    $page = isset($_GET['page']) ? $_GET['page'] : 0;
    $offset = $limit * ($page);
    
    if(isset($_GET['offsets'])) {
      $subjects = AllSubjects($conn, '1', $limit, $offset)  ;
      $page_count = (CountRows($conn, '1') / $limit);
    }
    else{
      $subjects = AllSubjects($conn, '0', $limit, $offset)  ;
      $page_count = (CountRows($conn, '0') / $limit);
    }
    // echo $page_count;
   ?>
  
      <div class="container-lg mt-3">
          <a href="?add=on"class="btn btn-dark">Добавить новый придметь</a>
          
          <?php if(isset($_GET['offsets'])) { ?>
            <a href="./subject.php"class="btn btn-dark">Викличёние</a>
          <?php } else { ?>
            <a href="?offsets=on"class="btn btn-dark">Откличоний</a>
          <?php } ?>
          <hr>
      </div>
      <?php if ($subjects != 0) { ?>
        <table class="table table-striped container-lg mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Предмет</th>
              <th scope="col">Предмет код</th>
              <th scope="col">Описания</th>
              <th scope="col">Действие</th>
            </tr>
          </thead>
          <tbody>
            <?php for($i=0; $i < count($subjects); $i++) { ?> 
              <?php if(isset($subjects[$i])) : ?>
                <tr>
                  <th scope="row"><?= $i + 1 ?></th>
                  <td><a href="subject.php?view=<?= $subjects[$i]['subject_id'] ?>"><?= $subjects[$i]['subject_name'] ?></a></td>
                  <td><?= $subjects[$i]['subject_code'] ?></td>
                  <td><?= EchoDiscription($subjects[$i]['discription'],  ['on'=>$subjects[$i]['discription'], 'off'=>'Нет описания']) ?> </td>
                  <td>
                    <a href="subject.php?subject_id=<?= $subjects[$i]['subject_id'] ?>&edit=312" class="btn btn-warning">Изменит</a>     
                    <!-- <a href="subject.php?subject_id=<?= $subjects[$i]['subject_id'] ?>&delite=21" class="btn btn-danger">Удалит</a> -->
                  </td>
                </tr>
              <?php endif; ?>
            <?php }  ?>
          </tbody>
        </table>

        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <?php if($page_count > 1) {?>
            <?php for($f= 0; $f < $page_count; $f++){ ?>
              <li class="page-item"><a  style="border-radius: 9px;" class="page-link" href="?page=<?= $f?>"><?= $f+1 ?></a></li>
            <?php } }?>
          </ul>
        </nav>
    <?php } else { ?>
      <div class="alert alert-info w-450 m-5" role="alert">
        Пустой! Добавте новоый предмет
      </div>
    <?php } ?>
    <?php include './layout/footer-page.php' ?>



<?php }?>