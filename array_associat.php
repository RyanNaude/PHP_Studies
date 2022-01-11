<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body>
    <?php

    //Normal Array
    $number = ["Maria", "Jose", "Juanita"];

    echo $number[2] . "<br/>";
    // print_r($number);

    //Associative Array
    $names = ["first_name" => "Ryan"];
    echo $names["first_name"] . "<br/>";
    // print_r($names);


    $names = ["first_name" => "Ryan", "last_name" => "Naude"];
    echo $names["first_name"] . " " . $names["last_name"] . "<br/>";
    // print_r($names);

    ?>
</body>

</html>