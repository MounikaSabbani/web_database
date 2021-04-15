
<?php
	
	include 'dbconnection.php';

    $username = $_POST['UserName'];
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $fullname = $_POST['FullName'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];
    $subscribe = $_POST['Subscribe'];
    

	echo $lastname;
    
	$sql = "INSERT INTO SIGNUP (USERNAME, FIRSTNAME, LASTNAME, FULLNAME, PHONE, EMAIL, ADDRESS, SUBSCRIPTION) VALUES ('$username', '$firstname', '$lastname', '$fullname', '$phone', '$email', '$address', '$subscribe')";
	$result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: /~ypenamak/Project/Attempt1/search.html?username='.$username);
?>
