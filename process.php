<?php
$servername="localhost";
$username="root";
$password="";
$dbname="attendance_db";

$conn= new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$sql = "INSERT INTO members (first_name	, last_name) VALUES ('$fname','$lname')";

if ($conn->query($sql) === TRUE){
    echo "Success";
} else {
    echo "Failed " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>