<?php
	$path = "images/".$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $path);
	echo $path;

?>