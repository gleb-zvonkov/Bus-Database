<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>f8</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<!--Print all the passenger info as specified in header-->
<h1>All the passengers including passport information in order by last name:</h1>
<ul>
<?php
   $query = 'SELECT * FROM passenger, passport WHERE passenger.passengerID = passport.passengerID ORDER BY lastname;' ;
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    
    echo "<table style='width:70%'>";
    echo "<tr>";
    echo "<th>passengerID</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Passport Number</th>";
    echo "<th>Citizenship</th>";
    echo "<th>Expiry Date</th>";
    echo "<th>Birth Date</th>";
    echo " </tr>";  

    while ($row=mysqli_fetch_assoc($result)) {
       echo "<tr>". "<td>" .$row["passengerID"]. "</td>"."<td>".$row["firstname"]."</td>";
       echo "<td>".$row["lastname"]."</td>"."<td>".$row["passportNumber"]."</td>";
       echo "<td>".$row["citizenship"]."</td>"."<td>".$row["expiryDate"]."</td>";        
       echo "<td>".$row["birthDate"]."</td>" ."</tr>";
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
