<?php 

include "connect.php";

$sql = "SELECT * FROM Categories";

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
        <th>Category Name</th>
        <th>Category Description</th>
    </tr>
<?php

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['category_id']; ?></td>
<td><?php echo $row['category_name']; ?></td>
<td><?php echo $row['category_description']; ?>
</td>
</tr>                       

<?php       
}
}
?>                
</table>
</div>
</body>
</html>