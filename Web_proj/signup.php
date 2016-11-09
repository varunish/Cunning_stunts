<!doctype html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
	
$table='webproj';
$link=mysqli_connect('localhost','root','') or die('errore connnecting');
mysqli_select_db($link,$table) or die ('error uploadjingl');
$username=$_POST['username'];
$password=$_POST['password'];
$mail=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$query="INSERT INTO data(username,password,mail,address,phone)".
       "VALUES('$username','$password','$mail','$address','$phone')";
$result=mysqli_query($link,$query) or die('error uploading');
header('Location: homepage.html');

?>
</head>

<body>


</body>
</html>