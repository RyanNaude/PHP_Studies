<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Normal variable definition
    $normVar = "Normal Variable";
    echo $normVar . "<br/>";
    echo "<br/>";

    //Old const definition
    define("NEWNAME", "Old Constant Definition");
    echo NEWNAME . "<br/>";
    echo "<br/>";

    //New const definition
    const NAME = "New Constant Definition";
    echo NAME . "<br/>";
    echo "<br/>";

    //Define const array old
    define("NEWNAMEARRAY", array("Old Name 1", "Old Name 2", "Old Name 3", "Old Name 4"));
    echo NEWNAMEARRAY[0] . "<br/>";
    echo NEWNAMEARRAY[1] . "<br/>";
    echo NEWNAMEARRAY[2] . "<br/>";
    echo NEWNAMEARRAY[3] . "<br/>";
    echo "<br/>";

    //Define const array new
    const NAMEARRAY = array("New Name 1", "New Name 2", "New Name 3", "New Name 4");
    echo NAMEARRAY[0] . "<br/>";
    echo NAMEARRAY[1] . "<br/>";
    echo NAMEARRAY[2] . "<br/>";
    echo NAMEARRAY[3] . "<br/>";
    echo "<br/>";
    ?>
</body>

</html>