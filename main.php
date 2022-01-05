<!--Programmer Name: 55-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to The Bus Tour Company</h1>
<p>Tip: Use the Return button where available instead of pressing back.</p>

<ul>
<!-- F1: List all the Bus Trip Data ordered by ... -->
<form action="f1.php" method="post">
<input type="submit" value="F1: List all the Bus Trip Data"><br>
<input type="radio" id="a" name="orderBy" value="tripName" checked="checked">
  <label for="a">Order by Trip Name</label><br>
<input type="radio" id="b" name="orderBy" value="country">
  <label for="b">Order by Country</label><br>
<input type="radio" id="c" name="ascOrdesc" value="ASC">
  <label for="c">In Ascending Order</label><br>
<input type="radio" id="d" name="ascOrdesc" value="DESC">
  <label for="d">In Descending Order</label><br>
</form>
<br>

<!-- F2: Select bus trip to modify and add image -->
<form action="f2.php" method="post">
<input type="submit" value="F2: Select bus trip to modify and add image">
</form>
<br>

<!-- F3: Delet a Bus Trip -->
<form action="f3.php" method="post">
<input type="submit" value="F3: Deleting a Bus Trip">
</form> 
<br>

<!-- F4: Creating a new Bus Trip -->
<form action="f4.php" method="post">
<input type="submit" value="F4: Create a new Bus Trip">
</form>
<br>

<!-- F5: Pick a Country and see all trips -->
<form action="f5.php" method="post">
<input type="submit" value="F5: Pick a Country and see all trips">
</form>
<br>

<!-- F6: Create a booking -->
<form action="f6.php" method="post">
<input type="submit" value="F6: Create a booking">
</form>
<br>

<!-- F7: Select and delete a booking -->
<form action="f7.php" method="post">
<input type="submit" value="F7: Select and delete a booking">
</form>
<br>

<!-- F8: List passenger info -->
<form action="f8.php" method="post">
<input type="submit" value="F8: List passenger info">
</form>
<br>

<!-- F9: List trips with no bookings -->
<form action="f9.php" method="post">
<input type="submit" value="F9: List trips with no bookings">
</form>
<br>
</ul>

<?php
mysqli_close($connection);
?>

</body>
</html>
