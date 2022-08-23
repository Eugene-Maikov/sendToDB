<?php

$name = strip_tags(trim($_POST['name']));
$lastname = strip_tags(trim($_POST['lastname']));
$email = strip_tags(trim($_POST['email']));
$phone = strip_tags(trim($_POST['phone']));

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "database-entry";

if(empty($name)){
    echo "error";
} else {
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users ( name, lastname, email, phone) VALUES ('$name', '$lastname', '$email', '$phone')";

    if($conn->query($sql) === TRUE){
        echo 'Данные отправлены, спасибо!';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
