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
<form action="f7.php" method="post">
<?php
  $ID = explode(",", $_POST['ID']);
  $tripID = $ID[0];
  $passengerID = $ID[1];
   $query = 'DELETE FROM booking WHERE tripID ='.$tripID.' AND passengerID ='.$passengerID.';';
    if (!mysqli_query($connection, $query)) {
      echo "<h2>Deletion failed</h2>";
    }else{
      echo "<h2>Successfully deleted Booking</h2>";  
    }
    mysqli_close($connection);     
?>
<input type="submit" value="Return">
</form>

</body>
</html>
