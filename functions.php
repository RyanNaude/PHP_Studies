<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php

    //Define functions - Receives a name, concat to a question, send question to askQuestion function to display question
    function saySomething($name)
    {
        $dispMessage = "<h4>Are you " . $name . "?</h4>";
        //Call another function within a function
        askQuestion($dispMessage);
    }

    //Define functions - Function to receive question and display in browser
    function askQuestion($message)
    {
        echo $message;
    };

    saySomething("Ryan Naude");
    saySomething("Brenda Naude");
    saySomething("Test User");

    echo "-----------------------------------------------------------------------------------------------------<br/>";

    $num1 = 10;
    $num2 = 20;
    $mathFunc = "/";

    function calc($mathFunc, $num1, $num2)
    {
        //Use switch statement to get math function.
        switch ($mathFunc) {
            case '-':
                $summ = $num2 - $num1;
                break;

            case '+':
                $summ = $num2 + $num1;
                break;

            case '*':
                $summ = $num2 * $num1;
                break;

            case '/':
                $summ = $num2 / $num1;
                break;

            default:
                # code...
                break;
        };
        return $summ;
    };

    $result = calc($mathFunc, $num1, $num2);
    echo "Answer: " . $result;
    ?>
</body>

</html>