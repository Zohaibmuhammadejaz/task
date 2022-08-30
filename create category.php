<?php

include "connect.php";

if (isset($_POST['submit'])) {

$Category_Id = $_POST['category_id'];
$Category_Name = $_POST['category_name'];
$Category_Description = $_POST['category_description'];

$sql = "INSERT INTO `Categories`(`category_id`, `category_name`, `category_description`) VALUES ('$Category_Id','$Category_Name','$Category_Description')";

$result = $connection->query($sql);

if ($result == TRUE) {

echo "New record created successfully.";

}
else{

echo "Error:". $sql . "<br>". $connection->error;
} 

$connection->close(); 

  }

?>


<!DOCTYPE html>
<html>
<head> </head>
<body>
<h1> Creating table for Category </h1>
<form method="POST"> 
<fieldset>
<legend> Categories Table </legend>
Category Id :<br>
<input type="text" name="Category_id">
<br>
Category_Name :<br>
<input type="text" name="Category_Name">
<br>
Category_Description :<br>
<input type="text" name="Category_Description">
<br>

<input type="submit" name="submit" value="submit">

</fieldset>


</form>

</body>
</html>