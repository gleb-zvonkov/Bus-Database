<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>f3</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<!--Use radio buttons to select the trip to delete-->
<form action="f3a.php" method="post">
<h2>Select the Bus Trip to delete:</h2> 
<ul>
<?php
   $query = 'SELECT * FROM busTrip' ;
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
    }
    while ($row=mysqli_fetch_assoc($result)) {
	echo '<input type="radio" name="tripID" value="';
        echo $row["tripID"];
        echo '">' .$row["tripID"]." | ".$row["tripName"]." | ".$row["startDate"];
        echo " | ".$row["endDate"]." | ".$row["country"]." | " ;
        echo '<img src="' . $row["url"] . '" height="60" width="60">'."<br>" ;         
     }
     mysqli_free_result($result);
?>
<br>
<input type="submit" value="Delete">
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
