<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Empty</title>
</head>
<?php
include 'connectdb.php';
?>

<!--Use radio buttons to let user select one of the bookings to delete-->
<h2>Select the booking then press Delete</h2>
<ul>
<p>Trip ID - Passenger ID -  Price </p>
<form action="f7a.php" method="post">
<?php
    $query = 'SELECT * FROM booking;';
    $result=mysqli_query($connection,$query);
    while ($row=mysqli_fetch_assoc($result)) {
	echo '<input type="radio" name="ID" value= " '.$row["tripID"].', '.$row["passengerID"].' " >';
        echo $row["tripID"]." ---------- ".$row["passengerID"]." ----------  ".$row["price"];
        echo "<br>";         
    }
    mysqli_free_result($result);           
    mysqli_close($connection);
?>
<br>
<input type="submit" value="Delete">
</ul>
</form>

<br>
<form action="main.php" method="post">
<input type="submit" value="Return">
</form>






</body>
</html>
