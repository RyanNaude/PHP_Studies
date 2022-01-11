<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefined Functions</title>
</head>

<body>
    <?php

    echo "<h2>Math Functions</h2>";

    //Exponential expression
    echo "<b>Exponential expression</b>" . "<br/>";
    echo pow(2, 7) . "<br/>";
    echo "<br/>";

    //Generate random number - if parameters in place generate between numbers
    echo "<b>Generate random number - if parameters in place generate between numbers</b>" . "<br/>";
    echo rand(-10, 10) . "<br/>";
    echo "<br/>";

    //Square root of a number
    echo "<b>Square root of a number</b>" . "<br/>";
    echo sqrt(100) . "<br/>";
    echo "<br/>";

    //Ceiling - Round up
    echo "<b>Ceiling - Round up</b>" . "<br/>";
    echo ceil(4.6) . "<br/>";
    echo "<br/>";

    //Floor - Round down
    echo "<b>Floor - Round down</b>" . "<br/>";
    echo floor(4.6) . "<br/>";
    echo "<br/>";

    //Round - Rounds to the closest number
    echo "<b>Round - Rounds to the closest number</b>" . "<br/>";
    echo round(4.6) . "<br/>";
    echo round(4.4) . "<br/>";
    // echo "<br/>";

    echo "<h2>String Functions</h2>";

    $string = "Random string to work with!!!";

    $stringCount =  count_chars($string);

    //Strlen - Lenght of string
    echo "<b>strlen - Lenght of string</b>" . "<br/>";
    echo strlen($string) . "<br/>";
    echo "<br/>";

    //strtoupper - Changes string to upper case
    echo "<b>strtoupper - Changes string to upper case</b>" . "<br/>";
    echo strtoupper($string) . "<br/>";
    echo "<br/>";

    //strtolower - Changes string to lower case
    echo "<b>strtolower - Changes string to lower case</b>" . "<br/>";
    echo strtolower($string) . "<br/>";
    // echo "<br/>";

    echo "<h2>Array Functions</h2>";

    $array = [1, 3, 5, 7, 9, 8, 6, 4, 2];

    //max - Highest number in array
    echo "<b>max - Highest number in array</b>" . "<br/>";
    echo max($array) . "<br/>";
    echo "<br/>";

    //min - Lowest number in array
    echo "<b>min - Lowest number in array</b>" . "<br/>";
    echo min($array) . "<br/>";
    echo "<br/>";

    //sort - Sort an array in ascending order
    echo "<b>sort - Sort an array in ascending order</b>" . "<br/>";
    sort($array) . "<br/>";
    echo "<br/>";

    //print_r - Display the entire array
    echo "<b>print_r - Display the entire array</b>" . "<br/>";
    echo print_r($array) . "<br/>";
    echo "<br/>";






    ?>
</body>

</html>