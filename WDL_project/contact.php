<?php

	session_start();
	//header('location:login.php');
	
$server = 'localhost';
$username = 'root';
$password = ' ';


// Create connection
$conn = mysqli_connect($server, $username, $password);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$select_db = mysqli_select_db($conn, 'userquery');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}
$conn = mysqli_connect('localhost', 'root', ' ','userquery');

$username=$_POST['name1'];
$email=$_POST['email1'];
$message=$_POST['textarea'];


//inserting values
$sql="INSERT INTO queries (name,email,message) VALUES('$username','$email','$message');";

if($conn->query($sql)==true){
    header("Location:home.php");
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }


    ?>
