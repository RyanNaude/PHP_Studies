<?php

//PHP to check if POST Submission from form. Check on the submit input name
if (isset($_POST['submit'])) {

    $minChar = 3;
    $maxChar = 20;
    $names = ["Ryan", "Peter", "Maria", "Jane", "Tom"];

    //Get form input data by $_POST['field_name']
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . "<br />";
    echo $password . "<br />";

    //PHP form validation

    if (strlen($username) < $minChar) {
        echo "Username needs to be longer than " . $minChar . " <br />";
    } elseif (strlen($username) > $maxChar) {
        echo "Username cannot be longer than " . $maxChar . " <br />";
    } else {

        if (!in_array($username, $names)) {
            echo "Sorry, username not found";
        } else {
            echo "Welcome, " . $username . ". Hope you enjoy your visit";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <!-- Form submit is pointing to this .php page -->
    <form action="form.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <br />
        <br />
        <input type="password" name="password" placeholder=" Enter Password">
        <br />
        <br />
        <input type="submit" name="submit">
    </form>
</body>

</html>