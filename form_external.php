<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <!-- Form submit is pointing to this .php page -->
    <!-- form_process.php is an external php that validates form submission -->
    <!-- Echos from form_process.php will display in the same browser window and URL updates to that of validation page -->
    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <br />
        <br />
        <input type="password" name="password" placeholder=" Enter Password">
        <br />
        <br />
        <input type="submit" name="submit">
    </form>
</body>

</html>