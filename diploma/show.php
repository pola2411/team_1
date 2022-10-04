<?php
include('../shared/head.php');
include('../shared/nav.php');
include('../shared/aside.php');
include('../general/connection.php');
include('../general/function.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT diplomas.id id , diplomas.content_id content , diplomas.price price , diplomas.start_time 'date' ,diplomas.period 'period' , diplomas.dip_image 'image' , track.title title FROM `diplomas` INNER JOIN track on diplomas.track_id = track.id and diplomas.id = $id";
    $result = mysqli_query($con, $select);
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $content = $row['content'];
    $price = $row['price'];
    $date = $row['date'];
    $period = $row['period'];
    $image = $row['image'];
} else {
    go('diploma/list.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $select="SELECT * from diplomas where id = $id";
    $result= mysqli_query($con , $select);
    $row= mysqli_fetch_assoc($result);
    $image= $row['dip_image'];
    var_dump($image);
    unlink($image);
    $delete = "DELETE FROM `diplomas` WHERE id=$id";
    mysqli_query($con, $delete);
    go("diploma/list.php");
}
?>
<main id="main" class="main">
    <div class="container col-6">
        <div class="card">
            <img src="../images/<?= $image ?>" class="card-img-top container" alt="..." style="width:300px ;">
            <div class="card-body">
                <h5 class="card-title"><?= $title ?></h5>
                <h6 class="card-text">Content : <?= $content ?></h6>
                <h6 class="card-text">Price : <?= $price ?></h6>
                <h6 class="card-text">Start At : <?= $date ?></h6>
                <h6 class="card-text">Period : <?= $period ?></h6>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/instant/admin-panel/diploma/edit.php?edit=<?= $id ?>">Edit</a>
                    <a class="btn btn-danger" href="/instant/admin-panel/diploma/show.php?delete=<?= $id ?>">Delete</a>
                </div>
                <a href="/instant/admin-panel/diploma/list.php" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</main>

<?php
include('../shared/footer.php');
include('../shared/script.php');
?>