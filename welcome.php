<?php
	session_start();
	if (isset($_SESSION['admin'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<h1>*** Welcome To Site ***</h1>
<button><a href="showtable.php">Submit</a></button>
</body>
</html>
<?php
}
else{
	header("Location: login.php");
}
?>