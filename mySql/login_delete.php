<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
if (isset($_POST['submit'])) {
    deleteUser();
}
?>

<?php include "./includes/header.php"  ?>

<div class="container">
    <div class="col-sm-6">
        <form action="login_delete.php" method="post">
            <div>
                <h2 class="text-center">
                    MySQL - Delete from DB
                </h2>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br />
            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllUsers();
                    ?>
                </select>
            </div>
            <br />
            <input type="submit" name="submit" value="DELETE" class="btn btn-primary">
        </form>
    </div>
</div>

<?php include "./includes/footer.php "  ?>