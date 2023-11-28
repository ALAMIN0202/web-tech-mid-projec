<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="hero";
$conn= new mysqli($servername,$username,$password,$dbname);
session_start()
if(isset($_GET['Login']))
{
	$email = $_GET['email'];
	$password = $_GET['password'];
	 $sql="select * from tabil1 where email='$email,and password='$password'"; 
	
?>
<!DOCTYPE html>
<html>
<head>
	<
	<title></title>
</head>
<body>
	<form method="get">
		Email <input type="email" name="email"><br>
		Password<input type="password" name="password"><br>
		<button name="login">Login</button>
		
	</form>

</body>
</html>
<!$sql= "select * from tabil1";
$res=mysqli_query($conn,$sql);>
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}