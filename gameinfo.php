
<!DOCTYPE html>
<html>
<head>
	<h1 align="center">
		Upload Games
	</h1>
	
	<title></title>

</head>

<body>
	<form action="game1.php" method="post" enctype="multipart/from-data">
	<table border="1" align="center">
		<tr>
			<td>
				Enter Game Id</td>
			<td><input type="number" name="id" required></td>
		</tr>
			</td>
		</tr>
		<tr>
			<td>
			Enter Game Name</td>
			<td><input type="text" name="name"required></td>
		</tr>
		<tr>
			<td>
			Type</td>
			<td><input type="radio" name="type" value="online">Online
			<input type="radio" name="type" value="offline">Off line</td>
		</tr>
		<tr>
			<td>
			Enter price </td>
			<td><input type="number" name="price" required></td>
		</tr>
		
		<tr>
			<td>
			Upload Game </td>
			<td><input type="file" name="image" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center" ><input type="submit" name="save_stud_image" value="Submit" style="font-size:20px"></td>
		</tr>
	</table>
</form>
</form>

		
		<form action="index.php">
			
			<td colspan="2" align="center" ><input type="submit" name= "sss" value="upload pic"style="font-size:15px">
			<td></tr>
				<p><tr>
				</form><br>
				<tr>
		<form action="gamedel1.php">
			
			<td colspan="2" align="center" ><input type="submit" name= "sss" value="Edit"style="font-size:15px">
			<td></tr>
				<p><tr>
				</form><br>
				<tr>
					<form>
						<a href="javascript:history.back()">BACK</a>
					</form>

		
</body>
</html>