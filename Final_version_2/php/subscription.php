<?php
session_start();
include 'dbconnection.php';

/*$name = $_POST['name'];*/
$email = $_POST['mail'];


$sql_check = "SELECT count(1) as num_count FROM SUBSCRIBED_EMAIL_DETAILS where EMAIL = '".$_POST["mail"]."';";
$result_check = mysqli_query($conn, $sql_check);
$row_check = mysqli_fetch_assoc($result_check);
$exists = $row_check['num_count'] ;

//Validating if the email address already exists!
if ($exists > 0 ){

    echo '<span style="color:RED;text-align:center;">Your email is already added to the subscriber list!<br></span>';
    echo  '<script style="color:RED;"> alert(" Your email is already added to the subscriber list! ") </script>';
    /*echo "Your email is already added to the subscriber list<br>";
    echo "<br> Subscribe with a new email id <br>"; */
    mysqli_close($conn);
    include('subscription.html');
    
    echo "<a href=\"index.php\"> GO BACK to Home Page</a>";
    
 } else {
$sql1 = "SELECT MAX(SUBSCRIBER_ID) AS MAX_ID_CURRENT FROM SUBSCRIBED_EMAIL_DETAILS";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$newid = $row['MAX_ID_CURRENT'] + 1;

//New Subscriptions
$sql2 = "INSERT INTO SUBSCRIBED_EMAIL_DETAILS  (SUBSCRIBER_ID, EMAIL) VALUES ('".$newid."', '".$email."')";

if (mysqli_query($conn, $sql2)) {
    echo "Your subscription has completed successfully!"; 
    
    include('send_email.php');

    echo "<a href=\"index.php\"> <br>GO BACK to Home page<br> </a>";
    
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
 }
mysqli_close($conn);

?>