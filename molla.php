<?php
session_start();
$servername="localhost";
$username= "root";
$password="";
$dbname="hero";
$conn= new mysqli($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}


if (isset($_GET['login'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];
    

    $sql = "SELECT * FROM tabil1 WHERE Email='$email' AND password='$password'";

    $res = mysqli_query($conn, $sql);
    //$rem = $_GET['remember'];
    if(isset($_GET['remember']))
    {
    setcookie('email',$email,time()+60*60*7 );
   setcookie('password',$password,time()+60*60*7 );
    }
    //  $_SESSION['email'] = $email;
    //header("location:molla1.php");

    if (mysqli_num_rows($res) > 0) 
    {
    	$_SESSION['email'] = $email;

        header("location: project2.php");
    } else 
    {
        //echo "Invalid user";
    	header("location: project01.php");

    }
} 







	 
	


	

?>
