<?php include "db.php"; ?>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username && $password) {
        echo "<h2>Yeah!!</h2>";
        echo "<h2>" . $username . "</h2>";
        echo "<h2>" . $password . "</h2>";
    } else {
        echo "<h2>No data received</h2>";
    }
}
?>
<?php include "./includes/header.php" ?>
<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div>
                <h2 class="text-center">
                MySQL - Connection to DB
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
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php include "./includes/footer.php" ?>