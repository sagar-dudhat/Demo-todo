<?php
	session_start();
	if (isset($_SESSION['admin'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<form action="update.php" method="POST">
		<?php
			include "connection.php";
			$id = $_GET['id'];

			$sql = "SELECT * FROM admin WHERE id='$id' ";
			$rs = $conn->query($sql);
			
			$rd = $rs->fetch_assoc();
		?>
			<input type="hidden" name="id" value="<?php echo $rd['id']?>">
			Username : <input type="text" name="username" value="<?php echo $rd['username']?>">
			password : <input type="text" name="password" value="<?php echo $rd['password']?>">
			<button>update</button>

	</form>
</body>
</html>
<?php
}
else{
	header("Location: login.php");
}
?>