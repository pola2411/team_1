


<?php
include('../shared/head.php');
include('../shared/nav.php');
include('../shared/aside.php');
include('../general/connection.php');
include('../general/function.php');



if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $select = "SELECT * FROM `adminrole` WHERE adID = $id";
    
    $s = mysqli_query($con, $select);
    $row = mysqli_fetch_assoc($s);
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $s="SELECT `image` from `admin`WHERE id=$id ";
    $q_s_s=mysqli_query($con,$s);
    $row=mysqli_fetch_assoc($q_s_s);
   $d="DELETE FROM `admin` WHERE id=$id";
   $qd=mysqli_query($con,$d);
   unlink("./upload/$row[image]");
   go("/admin/list.php");
  
  }



?>


<div class="container col-md-4 mt-5   ">
    <h1 class="text-center text-dark "><?= $row['adname'] ?></h1>

    <div class="card bg-dark">
        <div class="card-body">
            <img src="./upload/<?= $row['adimage'] ?>" alt="" class="img-tob w-100">
            <h4 class="card-title text-info mt-2">NAME <?= $row['adname'] ?> </h4>
            <h4 class="card-title text-info mt-2">emali <?= $row['ademail'] ?> </h4>
            <h4 class="card-title text-info mt-2">role <?= $row['roldec'] ?> </h4>

            <a href="/instant/admin-panel/admin/update.php?edit=<?= $row['adID'] ?>"  style="width:60px ;" class='btn btn-warning '><i class='bx bx-edit-alt'></i></a>
            <a href="/instant/admin-panel/admin/show.php?delete=<?= $row['adID'] ?>"   style="width:60px ;" class='btn btn-danger '><i class='bx bx-message-alt-x'></i></a>
            <a href="/instant/admin-panel/admin/list.php" class="btn btn-info" style="width:60px ;"><i class='bx bx-arrow-back'></i></a>

        </div>
    </div>
</div>


<?php

include('../shared/footer.php');
include('../shared/script.php');


?>
