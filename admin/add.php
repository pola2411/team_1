<?php

include('../shared/head.php');
include('../shared/nav.php');
include('../shared/aside.php');
include('../general/connection.php');
include('../general/function.php');
$s = "SELECT * FROM `role`";
$s_q = mysqli_query($con, $s);
$errors = [];
if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $phone = strip_tags($_POST['phone']);
  $email = strip_tags($_POST['email']);
  $password = strip_tags($_POST['password']);
  $role_id = $_POST['role_id'];
  $image_name = time() . $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $type = $_FILES['image']['type'];
  $size = $_FILES['image']['size'];


  if (trim($name) == "") {
    $errors[] = "please enter name";
  }
  if (trim($email) == "") {
    $errors[] = "please enter email";
  }
  if (trim($password) == "") {
    $errors[] = "please enter password";
  }
  if (($size / 1024) / 1024 > 1) {
    $errors[]= "you must enter img less than 1:M";
  }

  if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/jpg")) {
  } else {
    $errors[] = "you must enter img type png jpg jpeg ";
  }






  if (empty($errors)) {
    $location = "./upload/$image_name";
    move_uploaded_file($tmp_name, $location);
    $i = "INSERT INTO `admin`(`id`, `name`, `email`, `password`, `image`, `role_id`) VALUES (null,'$name','$email','$password','$image_name',$role_id)";
    $q_i = mysqli_query($con, $i);
    go("/admin/list.php"); 

  }
}


?>
<main id="main" class="main">
  <div class="container">
    <div class="card">
      <?php if (empty($errors)) {
      } else { ?>
        <div class="alert alert-danger" role="alert">
          <ul>
            <?php foreach ($errors as $errors_view) { ?>
              <li><?= $errors_view ?></li>
            <?php } ?>

          </ul>
        </div>
      <?php } ?>

      <div class="card-body">
        <form method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="exampleInputEmail1" class="m-3">Full Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="m-3">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="m-3">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="m-3">image</label>
            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="m-2">role</label>

            <select class="form-control" name="role_id">
              <?php foreach ($s_q as $data) { ?>
                <option value="<?= $data['id'] ?>"><?= $data['description'] ?></option>
              <?php } ?>


            </select>
          </div>

          <button type="submit" name="send" class="btn btn-primary mt-3">Submit</button>
        </form>

      </div>
    </div>

  </div>
</main>






<?php

include('../shared/footer.php');
include('../shared/script.php');




?>