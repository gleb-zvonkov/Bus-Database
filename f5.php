<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<!--Use radio buttons for user to select on of countires in database-->
<form action="f5a.php" method="post">
<h2>Select the Country:</h2> 
<ul>
<?php
   $query = 'SELECT DISTINCT country FROM busTrip';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
    }
    while ($row=mysqli_fetch_assoc($result)) {
	echo '<input type="radio" name="country" value="';
        echo $row["country"];
        echo '" checked="checked">'.$row["country"]." ";         
     }
     mysqli_free_result($result);
?>

<br>
<br>
<input type="submit" value="Select">
</ul>
</form>

<br>
<form action="main.php" method="post">
<input type="submit" value="Return">
</form>

<?php
   mysqli_close($connection);
?>
</body>
</html>
