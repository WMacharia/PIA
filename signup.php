<?php
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $genderId = $_POST['genderId'];
    $roleId = $_POST['roleId'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (fullname, email, username, password, genderId, roleId) VALUES ('$fullname', '$email', '$username', '$hashed_password', '$genderId', '$roleId')";
    
    if ($conn->query($sql) === TRUE) {
            echo "USER REGISTERED SUCCESFULLY!"; 
    }      
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
}

?>