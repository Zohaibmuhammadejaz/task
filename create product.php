<?php

include "connect.php";

if (isset($_POST['submit'])) {

$Product_Id = $_POST['product_id'];
$Product_Name = $_POST['product_name'];
$Product_Description = $_POST['product_description'];
$Product_Price = $_POST['product_price'];

$sql = "INSERT INTO `Products`(`product_id`, `product_name`, `product_description`, 'product_price') VALUES ('$Product_Id','$Product_Name','$Product_Description, '$Product_Price')";

$result = $connection->query($sql);

if ($result == TRUE) {

echo "New product created successfully.";

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
<h1> Creating table for Product </h1>
<form method="POST"> 
<fieldset>
<legend> Product Table </legend>
Product Id :<br>
<input type="text" name="product_id">
<br>
Product_Name :<br>
<input type="text" name="product_name">
<br>
Product_Description :<br>
<input type="text" name="product_description">
<br>
Product_Price :<br>
<input type="text" name="product_price">
<br>

<input type="submit" name="submit" value="submit">

</fieldset>


</form>

</body>
</html>