<?php  

$DB_Server = "localhost";
$DB_Username = "root";
$DB_Password= "";
$DB_Name = "DB";

$connection = mysqli_connect($DB_Server, $DB_Username, $DB_Password, $DB_Name);

//check-connection


if ($connection->connect_error)

{

echo "Failed to connect to mysql:" .
mysqli_connect_error();
}

?>