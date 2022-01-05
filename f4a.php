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

<!--Attempt inserting, and respond to user on success or failure.-->
<form action="f4.php" method="post">
<?php
   $tripID= $_POST["tripID"];
   $tripName= $_POST["tripName"];
   $startDate = $_POST["startDate"];
   $endDate = $_POST["endDate"];
   $country = $_POST["country"];
   $licensePlateNumber = $_POST["licensePlateNumber"];
   $url = $_POST["url"];
   $query = 'INSERT INTO busTrip VALUES (' .$tripID. ', "' .$tripName. '","' .$startDate. '", "' .$endDate. '", "' .$country. '", "'.$licensePlateNumber.'" , "'.$url.'");';   
    if (!mysqli_query($connection, $query)) {
      echo "<h2>Insertion unsuccessful: Either trip ID already exists or you did not input some of the information.</h2>";
    }else{
     echo "<h2>Successfully added. Here are all the Bus Trips:</h2>";
     $query = 'SELECT * FROM busTrip';
     $result=mysqli_query($connection,$query);   
    echo "<table style='width:70%'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Trip Name</th>";
    echo "<th>Start Date</th>";
    echo "<th>End Date</th>";
    echo "<th>Country</th>";
    echo "<th>License Plate</th>";
    echo "<th>Image</th>";
    echo " </tr>";  

    while ($row=mysqli_fetch_assoc($result)) {
       echo "<tr>". "<td>" .$row["tripID"]. "</td>"."<td>".$row["tripName"]."</td>";
       echo "<td>".$row["startDate"]."</td>"."<td>".$row["endDate"]."</td>";
       echo "<td>".$row["country"]."</td>"."<td>".$row["licensePlateNumber"]."</td>";        
       echo "<td>".'<img src="' . $row["url"] . '" height="60" width="60">'."</td>" ."</tr>";
     }
     mysqli_free_result($result);
    echo " </table>";       
    }
    mysqli_close($connection);     
?>
<input type="submit" value="Return">
</form>

</body>
</html>


