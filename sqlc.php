<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="champ";
$conn= new mysqli($servername,$username,$password,$dbname);
$sql= "select * from molla";
$res=mysqli_query($conn,$sql);
//print_r($res); 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     <table border="1">
     	<tr>
     		<th>Id</th>
     		<th>Name</th>
     		<th>Email</th>
     	</tr>
     <?php while($r=mysqli_fetch_assoc($res)){ ?>
     	<tr>
     		<td><?php echo $r["ID"] ; ?></td>
     		<td><?php echo $r["Name"] ; ?></td>
     		<td><?php echo $r["Email"] ; ?></td>
     	</tr>
     <?php } ?>
     </table>
</body>
</html>