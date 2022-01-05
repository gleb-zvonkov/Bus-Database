<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>f1</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are all the bus trips:</h1>

<ul>
<?php
   $orderBy= $_POST["orderBy"];
   $ascOrdesc= $_POST["ascOrdesc"];
   $query = 'SELECT * FROM busTrip ORDER BY '.$orderBy.' '.$ascOrdesc.' ' ;
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Error: order not chosen, return and press radio buttons.");
     }
    
    //A table for all the data,first the headers, then the info in the loop
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
<form action="main.php" method="post">
<input type="submit" value="Return">
</form>

<?php
   mysqli_close($connection);
?>

</body>
</html>
