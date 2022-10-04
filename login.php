<?php
include('./shared/head.php');
?>
<main style="height:100vh; overflow:hidden;" class="">
    <div class="container col-lg-5">
        <div class="card mt-5">
            <div class="card-body">
                <form method="POST" action="/instant/admin-panel/general/check.php" >
                    <div class="form-group">
                        <label for="" class="mt-4">Email</label>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control my-2">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control my-2">
                    </div>
                    <div class="form-group">
                        <input type="radio" name="user" class=" my-3" value="admin"> Admin
                        <input type="radio" name="user" class=" my-3" value="instractor"> Instrector
                    </div>
                    <button type="submit" name="login" class="btn btn-info my-3">Login</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
include('./shared/script.php');
?>