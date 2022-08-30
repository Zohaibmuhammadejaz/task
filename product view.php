<?php 

include "connect.php";

$sql = "SELECT * FROM Products";

$result = $connection->query($sql);

?>

<!DOCTYPE html>

<html>

<head> </head>
<body>
<div class = "container"> 
<h2> Category Table Detail </h2>
<table class="table">
<tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Price</th>
    </tr>
<?php

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['product_id']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['product_description']; ?> </td>
<td><?php echo $row['product_price']; ?></td>
</tr>                       

<?php       
}
}
?>                
</table>
</div>
</body>
</html>