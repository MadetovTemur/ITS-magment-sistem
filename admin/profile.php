<?php include './layout/hader-page.php';



include_once __DIR__ . '/../connection/connection.php';
include_once __DIR__ . '/php/function.php';

// if(isset($_POST)) {
//   dd($_POST);
// }


$sql = "SELECT * FROM `rt_jurnale`";
$query = $conn2->prepare($sql);
$query->execute();
$jurnal = $query->fetchAll(PDO::FETCH_ASSOC);


$array_key = array_keys($jurnal[0]);

?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавит день</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" accept-charset="utf-8" method="post">
        <div class="modal-body">

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">День</label>
          <input type="date" class="form-control" id="formGroupExampleInput" name="group_code" min="<?= date('Y-m-d') ?>">
        </div>
        
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Тема</label>
          <textarea class="form-control" id="formGroupExampleInput" name="group_discription" maxlength="150"></textarea>
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрит</button>
          <button type="button" class="btn btn-primary">Сохранит</button>
        </div>
      </form>
    </div>
  </div>
</div>









<form action="" method="POST" accept-charset="utf-8">
<button class="btn btn-danger">submit</button>
<table class="table table-bordered table-striped table-hover">

      <thead>
        <tr>
          <th scope="col" width="15px">#</th>
          <th scope="col" width="300px">Oquvchilar</th>
          
          <?php for($i=1; $i <count($array_key); $i++) {  ?>
          <th scope="col" width="10px"><?php echo $array_key[$i];?></th>
          <?php }?>
          
          <th scope="col" id="">
           <img src="../assets/svg/calendar.svg" width="18px" height="18px"  alt="icon calendar"   data-bs-toggle="modal" data-bs-target="#exampleModal">
          </th>
        </tr>
      </thead>
      <tbody>

        <?php for ($f=0; $f < count($jurnal); $f++) { ?>
        <tr height="30px">
          <th scope="row" ><?= $f+1; ?></th>
          <td><a href=""><?= $jurnal[$f]['sundetn_id']?></a></td>
          <?php $del = DeliteArrayRow($jurnal[$f], 'sundetn_id') ?>
          
          <?php foreach($del as $key => $value) { ?> 
          <td style="max-width: 40px;">
            <input type="hidden" name="day" value="<?= $key ?>">
            <div class="input-group mb-3">
                <input class="form-check-input " type="checkbox" name="<?= $key ?>:<?= $jurnal[$f]['sundetn_id']?>" value="1" aria-label="Checkbox for following text input">
            </div>
          </td>
          <?php }?>
        
        </tr>
        <?php  }?>
       
        
      </tbody>

</table>
 </form>
<?php include './layout/footer-page.php' ?>