<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>f6</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<!--Via form, radio buttons, and textbox allow user to submit info for new booking-->
<form action="f6a.php" method="post">

<h2>First select the Bus Trip:</h2> 
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
</ul>


<h2>Now select the Passenger:</h2>
<ul>
<?php
   $query = 'SELECT * FROM passenger;';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
    }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="passengerID" value="';
        echo $row["passengerID"];
        echo '">' .$row["passengerID"]." | ".$row["firstname"]." | ".$row["lastname"]."<br>";
     }
     mysqli_free_result($result);
?>
</ul>

<h2>Now enter the trip price:</h2>
<ul>
<input type="number" name="price"><br>
</ul>

<h2>Press Submit to create a new booking:</h2>
<ul>
<input type="submit" value="Submit">
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
