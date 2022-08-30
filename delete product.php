<?php 

include "connect.php"; 

if (isset($_GET['id'])) {

$product_id = $_GET['id'];

$sql = "DELETE FROM `Products` WHERE `id`='$product_id'";
$result = $connection->query($sql);
if ($result == TRUE) {

echo "Category deleted successfully.";
}
else{

echo "Error:" . $sql . "<br>" . $connection->error;

    }

} 

?>