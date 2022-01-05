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

<!--Insert booking info and respond on success or failure-->
<form action="f6.php" method="post">
<?php
   $tripID= $_POST["tripID"];
   $passengerID= $_POST["passengerID"];
   $price = $_POST["price"];
   $query = 'INSERT INTO booking VALUES ('.$tripID.', '.$passengerID.', '.$price.')';   
    if (!mysqli_query($connection, $query)) {
      echo "<h2>Insertion unsuccessful: either this booking already exists or you did not input all the booking info.</h2>";
      echo "<h2>These are all the bookings: </h2>";
    }else{
     echo "<h2>Successfully added Booking. These are all the bookings:</h2>";
     }

    $query = 'SELECT * FROM booking;';
    $result=mysqli_query($connection,$query);
    echo "<ul>";   
    echo "<table style='width:30%'>";
    echo "<tr>";
    echo "<th>Trip ID</th>";
    echo "<th>Pasenger ID</th>";
    echo "<th>Price</th>";
    echo " </tr>";  

    while ($row=mysqli_fetch_assoc($result)) {
       echo "<tr>". "<td>" .$row["tripID"]. "</td>"."<td>".$row["passengerID"]."</td>";
       echo "<td>".$row["price"]."</td>"."</tr>";
     }
    mysqli_free_result($result);
    echo " </table>";
    echo "</ul>";           
    mysqli_close($connection);     
?>
<input type="submit" value="Return">
</form>

</body>
</html>

