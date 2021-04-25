<?php
session_start();
include 'dbconnection.php';



$sql = "SELECT login_name FROM LOGIN_DETAILS where login_name = '".$_POST["uname"]."' and login_password ='".$_POST["pwd"]."';";

$result = mysqli_query($conn, $sql);
$num_row = mysqli_num_rows($result);
$newid = $row['ID'] + 1;

if($num_row > 0 ) {
    echo "Login Successful";
    include "admin_page.php";
} else {
    echo "Error : Incorrect login credentials"."<br>";
    include('Admin_login.html');
}
mysqli_close($conn);


?>