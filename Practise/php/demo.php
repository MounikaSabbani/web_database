
<?php
	
	include 'dbconnection.php';

    $username = $_POST['UserName'];
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $MiddleName = $_POST['MiddleName'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];
    



	#echo $lastname;
    
    
	$sql = "INSERT INTO SIGNUP (USERNAME, FIRSTNAME, LASTNAME, MIDDLENAME, PHONE, EMAIL, ADDRESS) VALUES ('$username', '$firstname', '$lastname', '$MiddleName', '$phone', '$email', '$address')";
	$result = mysqli_query($conn, $sql);

    //include "subscription.php";

    mysqli_close($conn);

    echo '<script type="text/javascript">'; 
    echo 'alert("Successfully signed up!");';
    //echo "<a href=\"login.php\"></a>";
    echo 'window.location.href = "'.$file_location.'login.php"';
	echo '</script>';
		

    
?>
