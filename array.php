<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php

    $numberList = [1, 2, 3, "555", "Ryan Naude", "<h4>This is an array</h4>"];

    echo $numberList[0] . "<br/>";
    echo $numberList[1] . "<br/>";
    echo $numberList[2] . "<br/>";
    echo $numberList[3] . "<br/>";
    echo $numberList[4] . "<br/>";
    echo $numberList[5] . "<br/>";
    //print_r - Built-in funtion to print out value of an array
    print_r($numberList);
    echo "<br/>";
    ?>
</body>

</html>