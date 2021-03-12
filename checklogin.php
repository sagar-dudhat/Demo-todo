<?php
include "connection.php";
 session_start();
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 $sql = "SELECT * FROM admin WHERE firstname='$username' AND password='$password' ";
 $rs = $conn->query($sql);

 if ($rd = $rs->fetch_assoc()) {
 	$_SESSION['admin'] = $username;
 	header("Location:welcome.php");
 }
 else{
 	echo "error: " . $conn->error;
 }

?>