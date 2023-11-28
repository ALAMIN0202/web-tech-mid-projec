
<?php
session_start();
if(!isset($_SESSION['email'])) 
{
    header('location:project01.php');
} 
else
 {
    if (isset($_GET['logout']))
     {
        session_destroy();
        setcookie('email', '', time() - 200);
        setcookie('password', '', time() - 200);
        echo "you Successful logout";
    }
}
?>

 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<h1 align="center">
		UPLODE GAME AND POST NEWS
	</h1>
	<h2 align="center">
		Provided by inde game store 
	</h2>
</head>
<body>
	<form action="gameinfo.php">
		<p align="center">
		
			<input type="submit" name="save" value="UPLODE GAME" style="font-size:20px">
			</p>
			</form>
			
				<form action="news.php">
					<p align="center">

			<input type="submit" name="save" value="UPEDATE NEWS" style="font-size:20px">
			</p>
</form>
		</p>
	</form>
	<form method="get">
		<button name="logout">Logout</button>
		
	</form>

</body>
</html>