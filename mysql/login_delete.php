<?php include "db.php";?>
<?php include "functions.php";?>
<?php DeleteRows(); ?>

<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
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
                <input type="submit" class="btn btn-primary" name="submit" value="Delete">
            </form>
        </div>
        <?php include "includes/footer.php";?>