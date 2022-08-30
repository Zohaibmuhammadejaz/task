<?php 

include "connect.php"; 

if (isset($_GET['id'])) {

$category_id = $_GET['id'];

$sql = "DELETE FROM `Categories` WHERE `id`='$category_id'";
$result = $connection->query($sql);
if ($result == TRUE) {

echo "Category deleted successfully.";
}
else{

echo "Error:" . $sql . "<br>" . $connection->error;

    }

} 

?>