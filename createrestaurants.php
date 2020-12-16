<html>
<head>Create Restaurant
<title>Create Restaurant</title>
</head>
<body>
<form action="CreateRestaurants.php" method="post">
	
Name: <font color=red>*</font><input type="text" name="name">
			<br/>
City: <font color=red>*</font><input type="text" name="city">
			<br/>
Cuisine: <font color=red>*</font><input type="text" name="cuisine">
			<br/>
<input type="submit" name="submit" value="Submit">
</form>

<?php
	if(isset($_POST['submit'])){
		if(empty($_POST['name'])){
		echo "Name is required.";
}
		if(empty($_POST['city'])){
		echo "City is required.";
}
		if(empty($_POST['cuisine'])){
		echo "Cuisine is required.";
}

$con = mysqli_connect("localhost", "root", "");

if (!$con){
	die("Cannot connect: " . mysqli_error());
}

mysqli_select_db($con,"restaurant_db");

$sql = "INSERT INTO restaurants (name,city,cuisine) VALUES ('$_POST[name]','$_POST[city]','$_POST[cuisine]')";

mysqli_query($con,$sql);


mysqli_close($con);
}
?>


</body>
</html
