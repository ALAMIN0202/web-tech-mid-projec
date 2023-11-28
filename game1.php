
<?php

$servername="localhost";
$username= "root";
$password="";
$dbname="hero";
$conn= new mysqli($servername,$username,$password,$dbname);
$sql = "select * from gameinfo";

$res=mysqli_query($conn,$sql);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save_stud_image']))
{	
	 $id= $_POST['id'];
	 $name = $_POST['name'];
	 $type = $_POST['type'];
	 $price= $_POST['price'];
	 $image = $_POST['image'];
	 
	  

	 $sql_query = "INSERT INTO gameinfo (id,name,type,price,image)
	 VALUES ('$id','$name','$type','$price','$image')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
	 echo "New Details Entry inserted successfully !";	
	  header("location: gamedel.php");
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
