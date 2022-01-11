<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
$result = readUser();
?>

<?php include "./includes/header.php"  ?>
<div class="container">
    <div class="col-sm-6">
        <div>
            <h2 class="text-center">
            MySQL - Read from DB
            </h2>
        </div>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <pre>
                <?php
                print_r($row);
                ?>
                </pre>
        <?php
        }
        ?>
    </div>
</div>
<?php include "./includes/footer.php "  ?>