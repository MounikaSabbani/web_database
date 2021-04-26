
<?php
	
	include 'dbconnection.php';

    $username = $_POST['UserName'];
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $fullname = $_POST['FullName'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];
    



	#echo $lastname;
    
    
	$sql = "INSERT INTO SIGNUP (USERNAME, FIRSTNAME, LASTNAME, FULLNAME, PHONE, EMAIL, ADDRESS) VALUES ('$username', '$firstname', '$lastname', '$fullname', '$phone', '$email', '$address')";
	$result = mysqli_query($conn, $sql);

    //include "subscription.php";

    mysqli_close($conn);

    echo '<script type="text/javascript">'; 
	echo 'alert("Successfully signed up!");';		
	echo 'window.location.href = "/~msabbani/web_project/login.html"';
	echo '</script>';
		

    
?>
