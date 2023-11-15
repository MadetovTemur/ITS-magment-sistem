<?php $title = 'Группий | ITS'; $page = 5; 


require __DIR__ . '/../connection/connection.php';

require __DIR__ . '/php/function.php';



if(isset($_GET['add'])) { ?>
  
  <?php include './layout/hader-page.php' ?>
    <div class="container-lg mt-3">
        <a href="group.php"
           class="btn btn-dark">Назад</a>
    </div>

    <div class="container-lg mt-3">

     <form accept-charset="utf-8" method="POST">
      
        <div class="mb-3">
          <label  class="form-label">Придмет</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Виберите опсия</option>
            <?php foreach(EchoSubjectsCode($conn) as $subject): ?>
            <option value="<?= $subject['subject_code'] ?>" title="<?php if($subject['discription'] != '0') echo $subject['discription'] ?>"><?= $subject['subject_name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Имя группа</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="group_name" maxlength="30">
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Код группа</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="group_code" maxlength="30">
        </div>
        
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Описания</label>
          <textarea class="form-control" id="formGroupExampleInput" name="group_discription" style="resize: vertical;" maxlength="150"></textarea>
        </div>
        
        <div class="mb-3">
          <label  class="form-label">Виберите учитель</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Виберите учитель</option>
            <?php foreach(GetAllTeacher($conn) as $teacher): ?>
              <option value="<?= $teacher['teacher_id'] ?>" title='<?= $teacher['subjects'] ?>'><?= $teacher['full_name'] ?></option>
              <!-- <optgroup label="dsa">gdfghd</optgroup> -->
            <?php endforeach; ?>
          </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Отправит</button>

     </form>

    </div>
    <?php include './layout/footer-page.php' ?>


<?php } elseif(isset($_GET['edit'])) {?>

edit

<?php } elseif (isset($_GET['view'])) { ?>

<?php } else {?>
  <?php  include './layout/hader-page.php';
      
    
      $page = isset($_GET['page']) ? $_GET['page'] : 0;
      $offset = $limit * $page;
      
      $colum = ['group_id', 'group_subject', 'group_code', 'group_discription', 'count_student', 'date_of_joined', 'group_teacher'];
      
      
      $group = Allgroups($conn, $colum, '0', $limit, $offset);
      $page_count = (CountRows($conn, '0', 'groups') / $limit);
  ?>

    <div class="container-lg mt-3">
        <a href="group.php?add=on"
           class="btn btn-dark">Добавит новой группа</a>
           <hr>
    </div>
    <?php if($group != 0) { ?>
      <table class="table table-striped container-lg mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Имя группа</th>
            <th scope="col">Код группа</th>
            <th scope="col">Описания</th>
            <th scope="col">Ученикиы</th>
            <th scope="col">Дата создание</th>
            <th scope="col">Действие</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i=0; $i < count($group); $i++) { ?> 
            <tr>
              <th scope="row"><?= $i+1 ?></th>
              <td><a href="./teacher-view.php?teacher_id=<?=$group[$i]['group_teacher'] ?>"><?= $group[$i]['group_subject'] ?></a></td>
              <td><?= strtoupper($group[$i]['group_code'])?></td>
              <td><?= empty($group[$i]['group_discription']) ? 'Описания не найден' : $group[$i]['group_discription'] ?></td>
              <td><?= $group[$i]['count_student'] ?></td>
              <td><?= EchoToString($group[$i]['date_of_joined'], 0) ?></td>
              <td>
                <a href="?edit=on&id=<?= $group[$i]['group_id'] ?>" class="btn btn-warning">Edit</a>
                <!-- <a href="" class="btn btn-danger">Delete</a> -->
              </td>
            </tr>
          <?php } ?>
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
    <?php  } ?>
    <?php include './layout/footer-page.php' ?>
<?php }?>