<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$table='webproj';
$link=mysqli_connect('localhost','root','') or die('errore connnecting');
mysqli_select_db($link,$table) or die ('error uploadjingl');
$username=$_POST["username"];
$password=$_POST["password"];
$query = "SELECT * from data where username == '$username'";
$result = mysqli_query($link, $query);
if ($result)
	echo 'user exists';
//echo $username;
//echo $password;
else
	echo 'user does not exist';
?>
</body>
</html>