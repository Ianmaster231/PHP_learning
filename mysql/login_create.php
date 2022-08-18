<?php include "functions.php"?>
<?php include "db.php";?>
<?php createRows(); ?>
<?php include "includes/header.php";?>

    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="post">
                <div class="form-roup">
                    <label for="username" class="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-roup">
                    <label for="password" class="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <input type="submit" class="btn btn-primary" name="submit" value="CREATE">
            </form>
        </div>
 <?php include "includes/footer.php"; ?>