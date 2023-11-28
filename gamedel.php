<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="hero";
$conn= new mysqli($servername,$username,$password,$dbname);
$sql= "select *from gameinfo";
$res=mysqli_query($conn,$sql);
if(isset($_GET['del']))
{
	$a=$_GET['del'];
	$sql2= "Delete from gameinfo where id ='$a'";
	mysqli_query($conn,$sql2);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get">
     <table border="1">
     	<tr>
     		<th>id</th>
     		<th>name</th>
     		<th>type</th>
     		<th>price</th>
     		<th>image</th>
     		
     	</tr>
     <?php while($r=mysqli_fetch_assoc($res)){ ?>
     	<tr>
     		<td><?php echo $r["id"] ; ?></td>
     		<td><?php echo $r["name"] ; ?></td>
     		<td><?php echo $r["type"] ; ?></td>
     		<td><?php echo $r["price"] ; ?></td>
     		<td><?php echo $r["image"] ; ?></td>
     		
     		
     		<td><button type="Submit" name="del" value="<?php echo $r["id"]; ?>"> Delete </button></td>
     	</tr>
     <?php } ?>
     </table>
     <form >
     	<a href="javascript:history.back()">BACK</a>
	</form>
    </form>
</body>
</html>