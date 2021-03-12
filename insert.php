<?php
include "connection.php";
if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO admin(username, password) VALUES ('$username', '$password')";

	if ($conn->query($sql) === TRUE) {
		header("Location:showtable.php");
	}
	else
	{
		header("Location:register.php");
	}
}
?>