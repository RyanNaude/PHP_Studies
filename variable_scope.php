<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
</head>

<body>
    <?php

    $x = "outside";

    function convert()
    {
        //Global keyword makes variable available outside scope
        global $x;
        $x = "inside";
        echo $x . "<br/>";
    }

    echo $x . "<br/>";
    convert();
    echo $x . "<br/>";

    ?>
</body>

</html>