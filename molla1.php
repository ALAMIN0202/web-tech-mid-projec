<?php
session_start();

//echo"Welcome".$_SESSION['email'];


?>
<?php
if(issset($_COOKIE['email'])and issset($_COOKIE['password']))
{
$email=$_COOKIE['email'];
$password=$_COOKIE['password'];
echo "<script>
document.getElementById('email').value='$email' ;
document.getElementById('password').value='$password' ;
</script>";
}
?>

<?php
session_start();
if(!isset($_SESSION['email']))
{
	header('location:project01.php');
}
 else{
 	if (isset($_GET['logout']))
 {
 	session_destroy();
 	
 } 
setcookie('email',$email,time()-2);
setcookie('password',$password,time()-2);
echo "you Successful logout .";
 }
 

?>
