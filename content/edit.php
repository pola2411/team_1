<?php
include('../shared/head.php');
include('../shared/nav.php');
include('../shared/aside.php');
include('../general/connection.php');
include('../general/function.php');


if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $select = "SELECT * FROM `content` WHERE id = $id";
    $result = mysqli_query($con , $select);
    $row = mysqli_fetch_assoc($result);
    if(isset($_POST['update'])){
        $desc=$_POST['content'];
        $update="UPDATE `content` SET `description`='$desc' WHERE id =$id";
        mysqli_query($con , $update);
        go("/content/add.php");
    }
}

?>
<main id="main" class="main">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="mt-2">Track</label>
                        <select disabled name="track" class="form-control my-2">
                            <?php
                            $select = "SELECT * FROM `track`";
                            $result = mysqli_query($con, $select);
                            foreach ($result as $data) {
                            ?>
                                <option value="<?= $data['id'] ?>"><?= $data['title'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="mt-3">Content</label>
                        <input type="text" name="content" value="<?= $row['description'] ?>" class="form-control my-3">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update Content</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include('../shared/footer.php');
include('../shared/script.php');
?>