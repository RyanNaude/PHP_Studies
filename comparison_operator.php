<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>

<body>

    <h2>Comparison Operators</h2>
    <pre>
        equal ==
        identical ===
        comparison  >  <  <=  >= <>
        not equal !=
        not identical !==
    </pre>

    <h2>Logical Operators</h2>
    <pre>
    and  &&
    or   ||
    not  !
    </pre>


    <?php

    if (4 == "4") {
        echo "Its is true";
    }

    if (4 === 4) {
        echo "Its is true";
    }

    if (4 < 6) {
        echo "Its is true";
    }

    if (4 !== 4) {
        echo "Its is true";
    }

    if (4 === 4 && 5 < 10) {
        echo "Its is true";
    }




    ?>
</body>

</html>