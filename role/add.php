<?php

include('../shared/head.php');
include('../shared/nav.php');
include('../shared/aside.php');
include('../general/connection.php');
include('../general/function.php');
if (isset($_POST['send'])) {
  $description = $_POST['description'];
  $i = "INSERT INTO `role` VALUES (null,'$description')";
  $q_i = mysqli_query($con, $i);
}
$s = "SELECT * FROM `role`";
$s_q = mysqli_query($con, $s);
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $d = "DELETE FROM `role` WHERE id=$id";
  $q_d = mysqli_query($con, $d);
  go("/role/add.php");
}



?>
<main id="main" class="main">
  <div class="container">
    <div class="card">

      <div class="card-body">
        <form method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="exampleInputEmail1">description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>



          <button type="submit" name="send" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>

  </div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>

          <th scope="col">Id</th>
          <th scope="col">description</th>
          <th scope="col"><i class='bx bxs-message-x'></i></th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($s_q as $data) { ?>
          <tr>

            <td><?= $data['id'] ?></td>
            <td><?= $data['description'] ?></td>
            <td><a href="/instant/admin-panel/role/add.php?delete=<?= $data['id'] ?>"><i class='bx bxs-message-x'></i></a></td>


          </tr>
        <?php } ?>

      </tbody>
    </table>


  </div>
</main>






<?php

include('../shared/footer.php');
include('../shared/script.php');




?>