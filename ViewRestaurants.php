<html>
<head>
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con){
	die("Cannot connect: " . mysqli_error());
}

mysqli_select_db($con,"restaurant_db");

if(isset($_POST['update'])){
$UpdateQuery = "UPDATE restaurants SET name='$_POST[name]', city='$_POST[city]', cuisine='$_POST[cuisine]' WHERE id='$_POST[hidden]'";
mysqli_query($con, $UpdateQuery);
};

if(isset($_POST['delete'])){
$DeleteQuery = "DELETE FROM restaurants WHERE id='$_POST[hidden]'";
mysqli_query($con, $DeleteQuery);
};


$sql = "SELECT * FROM restaurants";
$myData = mysqli_query($con,$sql);
echo "<table border=1>
<tr>
<th>Name</th>
<th>City</th>
<th>Cuisine</th>
</tr>";

while($record = mysqli_fetch_array($myData)){
echo "<form action=ViewRestaurants.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=text name=name value=". $record['name'] . " </td>"; 
echo "<td>" . "<input type=text name=city value=". $record['city'] . " </td>";
echo "<td>" . "<input type=text name=cuisine value=". $record['cuisine'] . " </td>";
echo "<td>" . "<input type=hidden name=hidden value=". $record['id'] . " </td>";
echo "<td>" . "<input type=submit name=update value=update" . " </td>";
echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
echo "</tr>";
echo "</form>";
}
echo "</table>";

mysqli_close($con);
?>


</body>
</html>
