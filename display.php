<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to PASTE</title>
</head>
<body>
<?php	
		$name = $_SESSION['filename'];
		//echo $name;

		 $myfile1 = fopen("uploads/$name.txt", "r") or die("Unable to open file!");
		 echo fread($myfile1,filesize("uploads/$name.txt"));
		 fclose($myfile1);
?>
	
</body>