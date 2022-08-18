<?php include "db.php";?>
<?php include "functions.php";?>
<?php UpdateTable();?>

<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Update</h1>
        <form action="login_update.php" method="post">
                <div class="form-roup">
                    <label for="username" class="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-roup">
                    <label for="password" class="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-roup">
                    <select name="id" id="">
                        <!--  -->
                        <?php
                            showAllData();
                        ?>
                    </select>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" name="submit" value="UPDATE">
            </form>
        </div>
        <?php include "includes/footer.php";?>