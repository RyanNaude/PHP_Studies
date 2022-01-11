<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>

<body>
    <?php

    $variable = "brenda";

    switch ($variable) {
        case 'ryan':
            echo "The name is Ryan!!!";
            break;

        case 'morne':
            echo "The name is Morne!!!";
            break;

        case 'brenda':
            echo "The name is Brenda!!!";
            break;

        default:
            echo "Name not recognized";
            break;
    }

    ?>
</body>

</html>