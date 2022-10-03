<?php

include('../shared/head.php');
include('../shared/nav.php');
include('../shared/aside.php');
include('../general/connection.php');
$s="SELECT * FROM `track`";
$s_q=mysqli_query($con,$s);


?>
<main id="main" class="main">
    <div class="container">
<div class="card" ">
  
  <div class="card-body">
  <form method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">track</label>

    <select class="form-control" name="track_id">
        <?php foreach($s_q as $data){ ?>
    <option value="<?= $data['id'] ?>"><?= $data['title'] ?></option>
    <?php }?>


    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
  </div>
</div>

</div>
  </main>






  <?php 

include('../shared/footer.php');
include('../shared/script.php');




?>