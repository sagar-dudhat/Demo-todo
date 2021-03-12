<?php
	session_start();
	if (isset($_SESSION['admin'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>TABLE</title>
</head>
<body>
	<table>
		<th>Id</th>
		<th>Username</th>
		<th>Password</th> 
		<th>Delete</th>
		<th>Edit</th>
		<?php
			include "connection.php";
			$sql = "SELECT * FROM admin";
			$rs = $conn->query($sql);

			while ($rd = $rs->fetch_assoc()) {
		?>
			<tr>
				<td><?php echo $rd['id']; ?></td>
				<td><?php echo $rd['username']; ?></td>
				<td><?php echo $rd['password']; ?></td>
				<td><a href="delete.php?id=<?php echo $rd['id']; ?>">Delete</a></td>
				<td><a href="edit.php?id=<?php echo $rd['id']; ?>">Edit</a></td>
			</tr>
		<?php
		}
		?>
	</table>
<form>
	<button><a href="login.php">LOGIN</a></button>
	<button><a href="logout.php">LOGOUT</a></button>
</form>
</body>
</html>
<?php
}
else{
	header("Location:login.php");
}
?>