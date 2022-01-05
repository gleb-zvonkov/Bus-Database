<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>f5a</title>
</head>
<body>
<?php
include 'connectdb.php';
?>


<!--Display all trips with the selected country-->
<?php
   $country= $_POST["country"];
   echo "<h1>Here are all the bus trips in ".$country.":</h1>";
   echo "<ul>";
   $query = 'SELECT * FROM busTrip WHERE country = "'.$country.'";';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    
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
?>
</ul>

<br>
<form action="f5.php" method="post">
<input type="submit" value="Return">
</form>

<?php
   mysqli_close($connection);
?>
</body>
</html>
