<?php
session_start();
$_SESSION['name']="ABD";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cookie Example</title>
</head>
<body>

<form method="post">
<input type="submit" name="btn1" value="Button 1">
<input type="submit" name="btn2" value="Button 2">
<input type="submit" name="btn3" value="Button 3">
</form> 
<?php 
if(isset($_POST['btn1']))
{
  print_r($_SESSION['name']);
}   
else if(isset($_POST['btn2']))
{
   session_unset();
   print_r($_SESSION['name']);
}
else if(isset($_POST['btn3']))
{
   print_r($_SESSION['name']);
}

?>

</body>
</html>
