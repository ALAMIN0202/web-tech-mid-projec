<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="hero";
$conn= new mysqli($servername,$username,$password,$dbname);
$sql= "select * from tabil1";
$res=mysqli_query($conn,$sql);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $user_name = $_POST['user_name'];
	 $name = $_POST['name'];
	 $gender = $_POST['gender'];
	 $email = $_POST['email'];
	 
	  $password = $_POST['password'];

	 $sql_query = "INSERT INTO tabil1 (user_name,name,gender,email,password)
	 VALUES ('$user_name','$name','$gender','$email','$password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Your registration is  successfully done !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>