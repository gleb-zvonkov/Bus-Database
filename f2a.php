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

<!--Notify if Bus Trip successfully modified-->
<form action="f2.php" method="post">
<?php
   $field= $_POST["field"];
   $tripID= $_POST["tripID"];
   $info = $_POST["info"];
   $query = 'UPDATE busTrip SET '.$field.' = "'.$info.'" WHERE tripID='.$tripID.' ';
    if (!mysqli_query($connection, $query)) {
        echo "<h2>Insert failed: either you did not select one of the radio buttons or the info was in the wrong format</h2>";
    }else{
     echo "<h2>Successfully added ". $field." ".$info. " to trip ".$tripID.".</h2>";  
    }
    mysqli_close($connection);     
?>
<input type="submit" value="Return">
</form>

</body>
</html>



