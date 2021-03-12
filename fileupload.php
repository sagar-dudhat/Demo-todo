<!DOCTYPE html>
<html>
<head>
	<title>CHOOSEFILE</title>
<script>
	function loadfile(event){
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	}
</script>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file" onchange="loadfile(event)">
		<img id="output" width="100" height="100">  
		<input type="submit" name="submit">
	</form>
</body>
</html>