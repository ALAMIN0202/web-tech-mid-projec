<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="champ";
$conn= new mysqli($servername,$username,$password,$dbname);

if(isset($_GET['del']))
{
	$a=$_GET['del'];
	$sql2= "Delete from molla where ID='$a'";
	mysqli_query($conn,$sql2);
}
if(isset($_GET['add']))
{
	$id=$_GET['id'];
	$name=$_GET['name'];
	$email=$_GET['email'];
	$pass=$_GET['pass'];
	if(empty($id))
	{
		echo " ID is empty";
	}
	else{
		$sql3= "Insert into ab(ID,Name,Email,Pass) Values('$id','$name','$email','$pass')";
	mysqli_query($conn,$sql3);
	}
	
}
$sql= "select * from molla";
$res=mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get">
      
      ID: <input type="number" name="id"><br>
       Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
         Pass: <input type="text" name="pass"><br>
     <button type="Submit" name="add" >Add</button>

     <table border="1">
     	<tr>
     		<th>Id</th>
     		<th>Name</th>
     		<th>Email</th>
     		<th>Option</th>
     	</tr>
     <?php while($r=mysqli_fetch_assoc($res)){ ?>
     	<tr>
     		<td><?php echo $r["ID"] ; ?></td>
     		<td><?php echo $r["Name"] ; ?></td>
     		<td><?php echo $r["Email"] ; ?></td>
     		<td><button type="Submit" name="edit" value="<?php echo $r["ID"] ; ?>"> Edit </button></td>
     		<td><button type="Submit" name="del" value="<?php echo $r["ID"] ; ?>"> Delete </button></td>
     	</tr>
     <?php } ?>
     </table>
    </form>
</body>
</html>