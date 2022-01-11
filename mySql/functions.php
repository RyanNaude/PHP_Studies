<?php include "db.php"; ?>
<?php

//CREATE - Function to create user details on db
function createUser()
{
    //Any variable that gets used from a seperate file must be declared as global
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username && $password) {

        // *** SECURITY FEATURE ***
        // mysqli_real_escape_string('') - removes invalid characters from a string. Takes two parameters. ($connection, $string)
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        //Setting up hashing and salting for password security
        $hashFormat = "$2y$10$";
        $salt = "ThisIsTheRandomStringForEncryption!!";
        $hash_And_Salt = $hashFormat . $salt;

        //Encrypting password using $hash_And_Salt from above
        $password = crypt($password, $hash_And_Salt);

        //Build SQL query
        $query = "INSERT INTO users(username,password) ";
        $query .= "value('$username','$password')";
        //Build $connection and $query and then use the variable in the command that executes below [mysqli_query()]
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query Failed:" . mysqli_error($connection));
        } else {
            echo "<h2>User created successfully</h2>";
        }
    } else {
        echo "<h2>Username or password cant be blank</h2>";
    }
}

//READ - Function to read user details from db
function readUser()
{
    //Any variable that gets used from a seperate file must be declared as global
    global $connection;

    $query = "SELECT * FROM  users";
    //Build $connection and $query and then use the variable in the command that executes below [mysqli_query()]
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed:" . mysqli_error($connection));
    } else {
        // echo "<h2>Data read successfully</h2>";
    }

    return $result;
}



//UPDATE - Function to update a user details on DB
function updateUser()
{
    global $connection;

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //Update query
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($connection));
    } else {
        // echo "<h5>User details updated successfully</h5>";
    }
}

//Function to delete user details from DB
function deleteUser()
{
    global $connection;
    $id = $_POST['id'];
    //Delete query
    $query = "DELETE FROM  users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($connection));
    } else {
        // echo "<h5>User details deleted successfully</h5>";
    }
}

//Function to get all users from db
function showAllUsers()
{
    //Any variable that gets used from a seperate file must be declared as global
    global $connection;
    //Read query
    $query = "SELECT * FROM  users";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed");
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
