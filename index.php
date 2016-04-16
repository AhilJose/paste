<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to my pastie</title>
</head>
<style>
input[type=text] {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}

input[type=text]:focus {
    border: 3px solid #F904DB;
}

input[type=submit] {
    background-color: rgba(110, 76, 175, 0.88);
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

input[type=submit]:focus {
    background-color: rgb(87, 18, 220);
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: rgba(100, 49, 197, 0.88);
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body>
<?php
	if(isset($_POST['mypaste'])){

			$nam = rand();
			
		$myfile = fopen("uploads/$nam.txt", "x+") or die("Unable to open file");
		$text = $_POST['paste'];
		fwrite($myfile, $text);

		fclose($myfile);
		$_SESSION['filename'] = $nam;
		echo $_SESSION['filename'];
	}
?>
	<form method=POST action="<?php if($_POST){ header("Location: http://localhost/paste/uploads/$nam.txt");} ?>">
		<h1>PASTE IT</h1><input type="text" name="paste" placeholder="Paste here...">
		<input type="submit" name="mypaste" value="PASTE">
	</form>

</body>
