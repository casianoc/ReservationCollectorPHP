<html>
<head>
</head>
<body>
<?php
$con = mysql_connect("localhost", "root", "");

if (!$con){
	die("Cannot connect: " . mysql_error());
}

mysql_select_db("restaurant_db",$con);

$sql = "";



mysql_close($con);
?>

</body>
</html>