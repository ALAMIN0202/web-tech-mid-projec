<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="hero";
$conn= new mysqli($servername,$username,$password,$dbname);
$sql= "select * from tabil01";
$res=mysqli_query($conn,$sql);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 
	  $password = $_POST['password'];
	  $querey =mysqli_query($conn,"select * from tabil01='$name'");
	  $no=mysqli_num_rows($querey);
	  if($no>0)
	  {
	  	$data=mysqli_fetch_assoc($querey);
	  	if($data['password']==$password)
	  	{
	  		echo 'login successfully';
	  	}
	  	else
	  	{
	  		echo 'wrong password';
	  	}

	  	else
	  	{
	  		echo 'wrong name';
	  	}
	  }
	}
?>