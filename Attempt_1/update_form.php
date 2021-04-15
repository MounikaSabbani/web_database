<?php
include 'dbconnection.php';
$id = $_POST['pothole_id'];
$status = $_POST['status'];

echo $id;
echo $status;

$sql = "UPDATE POTHOLES SET Status = '$status' WHERE ID =$id";

mysqli_query($conn, $sql);

echo "Pothole status updated successfully";
mysqli_close($conn);
?>