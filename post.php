<?php
if (isset($_POST['submit'])) {
    echo $_POST['name'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <form action="post.php" method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>