<?php
$pic="uu.jpg";
if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
{
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    echo "<script>
    document.getElementById('email').value = '$email';
    document.getElementById('password').value = '$password';
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	
	<h1 align="center">
		WELCOME DEVELOPERS
	</h1>
	<h2 align="center"> 
		Login Form
	</h2>
</head>
<body>
	
	
	<form action="molla.php" method="get">
		
		<table border="1" align="center">
			<tr>
			<td>
			Enter Email</td>
			<td><input type="email" id="Email" name="email" required=""></td>
		</tr>
		
		<tr>
			<td>
	password</td>
	<td><input type="number" id="password" name="password" required=""></td>
</tr>
 <!--<tr>
	<td colspan="2" align="center"><input type="checkbox" name="remember"value="1">	Remember Me
		
	</td>
</tr>-->
<tr>
	<form action="project2.php">
			<td colspan="2" align="center" ><input type="submit" name="login" value="Login" style="font-size:15px"></td>
		</tr>
		
		
		</form>
		<tr>
		<form action="project1.php">
			<td colspan="2" align="center" ><input type="submit" name= "sss" value="Registration"style="font-size:15px">
			<td></tr>

		</form>
		
</body>
</html>