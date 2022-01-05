<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>f4</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<!--Use a form and table to submit all data in order to insert new trip-->
<form action="f4a.php" method="post">

<table style='width:100%'>
<tr>
<th>ID</th>
<th>Trip Name</th>
<th>Start Date (yyyy-mm-dd)</th>
<th>End Date (yyyy-mm-dd)</th>
<th>Country</th>
<th>License Plate</th>
<th>Image</th>
</tr>

<tr>
<td> 
<input type="number" name="tripID">    
</td>
<td>
<input type="text" name="tripName">
</td>
<td>
<input type="text" name="startDate">
</td>
<td>
<input type="text" name="endDate">
</td>
<td>
<input type="text" name="country">
</td>
<td> 	 
</td>
<td>
<input type="text" name="url" value="NULL">
</td>
</tr>

<?php
   $query = 'SELECT * FROM bus';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     } 
    while ($row=mysqli_fetch_assoc($result)) {
       echo "<tr> <td>  </td>";
       echo "<td> </td>";
       echo "<td> </td>";
       echo "<td> </td>";
       echo "<td> </td>";
       echo "<td>";   
       echo '<input type="radio" name="licensePlateNumber" value="';
       echo $row["licensePlateNumber"];
       echo '">'.$row["licensePlateNumber"]."</td>" ;        
       echo "<td></td>" ."</tr>";
     }
     mysqli_free_result($result);
?>
</table>

<P ALIGN=Center><input type="submit" value="Insert new Bus Trip">
</form>

<form action="main.php" method="post">
<input type="submit" value="Return">
</form>

<?php
   mysqli_close($connection);
?>
</body>
</html>
