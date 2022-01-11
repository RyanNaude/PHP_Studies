

<?php

//PHP to check if POST Submission from form. Check on the submit input name
if (isset($_POST['submit'])) {

    $minChar = 3;
    $maxChar = 20;
    $names = ["Ryan", "Peter", "Maria", "Jane", "Tom"];

    //Get form input data by $_POST['field_name']
    $username = $_POST['username'];
    $password = $_POST['password'];

    //PHP form validation

    if (strlen($username) < $minChar) {
        echo "Username needs to be longer than " . $minChar . " <br />";
    } elseif (strlen($username) > $maxChar) {
        echo "Username cannot be longer than " . $maxChar . " <br />";
    } else {

        if (!in_array($username, $names)) {
            echo "Sorry, " . $username . " username not found";
        } else {
            echo "Welcome, " . $username . ". Hope you enjoy your visit";
        }
    }
}

?>