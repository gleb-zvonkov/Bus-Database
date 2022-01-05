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

<!--Notify if deletion was successful or not-->
<form action="f3.php" method="post">
<?php
   $tripID= $_POST["tripID"];
   $query = 'DELETE FROM busTrip WHERE tripID ="' . $tripID . '" ';

    if (!mysqli_query($connection, $query)) {
      echo "<h2>Deletion failed: selected bus trip cannot be deleted since there are still passengers.</h2>";
    }else{
      echo "<h2>Successfully deleted trip ".$tripID.".</h2>";  
    }
    mysqli_close($connection);     
?>
<input type="submit" value="Return">
</form>

</body>
</html>
