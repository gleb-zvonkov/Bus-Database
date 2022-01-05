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

<!--Prompt the user if he is sure he wants to delete-->

<?php
   $tripID= $_POST["tripID"];
   if (empty($tripID)){
    echo "<h2>You did not select a Bus Trip to delete, return and press one of the radio buttons.</h2>";
    echo "<form action='f3.php' method='post'>";
    echo "<input type='submit' value='Return'>";
    echo "</form>";
   }
   else{
   echo "<h2>Are you sure you would like to delete?<h2>";
   echo "<ul>";
   echo "<form action='f3b.php' method='post'>";
   echo " <input type='hidden' name='tripID' value=$tripID /> ";
   echo "<input type='submit' value='Yes'>";
   echo "</form>";
   echo "<form action='f3.php' method='post'>";
   echo "<input type='submit' value='No'>";
   echo "</form>";
   echo "</ul>";
   }
?> 


</body>
</html>
