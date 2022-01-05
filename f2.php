<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>f2</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<form action="f2a.php" method="post">

<!--Select the Bus Trip via radio button-->
<h2>First select the Bus Trip to modify:</h2> 
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

<h2>Now select the field to modify:</h2>
<ul>
<input type="radio" id="a" name="field" value="tripName">
  <label for="a">Change trip name</label>
<input type="radio" id="b" name="field" value="startDate">
  <label for="b">Change start date</label>
<input type="radio" id="c" name="field" value="endDate">
  <label for="a">Change end date</label>
<input type="radio" id="d" name="field" value="url">
  <label for="b">Change image url</label>
</ul>

<h2>Enter the new trip information (if date enter in format: yyyy-mm-dd):</h2>
<ul>
<input type="text" name="info">
<input type="submit" value="Add new info">
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
