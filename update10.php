<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="hero";
$conn= new mysqli($servername,$username,$password,$dbname);

if(isset($_POST['del']))
{
	$a=$_POST['del'];
	$sql2= "Delete from gameinfo where id='$a'";
	mysqli_query($conn,$sql2);
}
if(isset($_POST['add']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	if(empty($id))
	{
		echo " ID is empty";
	}
	else{
		 $sql_query = "INSERT INTO gameinfo (id,name,type,price,image)
		 Values('$id','$name','$type','$price','$image')";
	mysqli_query($conn,$ $sql_query);
	}
	
}
$sql= "select * from gameinfo";
$res=mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
      
      ID: <input type="number" name="id"><br>
       Name: <input type="text" name="name"><br>
       Type:><input type="radio" name="type" value="online">Online
			<input type="radio" name="type" value="offline">Off line
        
         Price: <input type="text" name="price"><br>
         image: <input type="text" name="image"><br>
     <button type="Submit" name="add" >Add</button>
 </form>
     <table border="1">
     	<tr>
     		<th>id</th>
     		<th>name</th>
     		<th>type</th>
     		<th>price</th>
     		<th>image</th>
     		<th>Option</th>
     	</tr>
     <?php while($r=mysqli_fetch_assoc($res)){ ?>
     	<tr>
     		<td><?php echo $r["id"] ; ?></td>
     		<td><?php echo $r["name"] ; ?></td>
     		<td><?php echo $r["type"] ; ?></td>
     		<td><?php echo $r["price"] ; ?></td>
     		<td><?php echo $r["image"] ; ?></td>
     		<td><?php echo $r["option"] ; ?></td>
     		<td><button type="Submit" name="del" value="<?php echo $r["id"] ; ?>"> Delete </button></td>
     		<td>
     			//<form method="get" action="edit.php">
     			<button type="Submit" name="edit" value="<?php echo $r["id"] ; ?>"> Edit </button>
     			</form>
     		</td>
     	</tr>
     <?php } ?>
     </table>
   
</body>
</html>