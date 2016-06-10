<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to my pastie</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
h1 {
    font-size: 63px !important;
    font-family: cursive;
    color: deepskyblue !important;
}
.navbar-fixed-bottom {
    background-color: #607D8B;
}
footer {
    color: #BBB8B8;
}
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
<div class="container-fluid">
  <div class="jumbotron">
	<form method=POST action="<?php if($_POST){ header("Location: http://localhost/paste/uploads/$nam.txt");} ?>">
		<h1>PASTE IT</h1><textarea class="form-control" rows="10" name="paste" placeholder="Paste here..."></textarea>
		<input type="submit" name="mypaste" value="PASTE">
	</form>
  </div>
</div>
</body>

<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
  <div class="container">
    <footer class="container-fluid bg-4 text-center">
    Copyright &copy; 2015 AKHIL JOSE &hearts; made by AKHIL JOSE.<br>
                                <span style="font-size:0.6em;">HTML | CSS | JavaScript | Front-End Development</span><br>
                                <span style="font-size:0.6em;">PHP | Back-End Development</span> 
    </footer>
  </div>
</div>

</html>

