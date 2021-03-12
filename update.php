<?php
session_start();
include "connection.php";
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE admin SET username='$username', password='$password' WHERE id='$id' ";
echo $sql;
if ($conn->query($sql) === TRUE) {
	$_session['admin'] = $username;
	header("Location:showtable.php");
}
else
{
	echo "error" . $conn->error;
}

?>