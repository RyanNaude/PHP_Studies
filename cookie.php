<?php
//Creating COOKIE on user machine
$cookieName = "firstCookie";
$value = 100;
$expire = time() + (60 * 60 * 24 * 7);

setcookie($cookieName, $value, $expire);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <?php

    // Get cookie set by server
    if (isset($_COOKIE["firstCookie"])) {

        $user = $_COOKIE["firstCookie"];
    } else {
        $user = "";
    }
    echo "User: " . $user;
    ?>
</body>

</html>