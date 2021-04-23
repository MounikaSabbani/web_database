
<?php
	
	include 'dbconnection.php';

    $username = $_POST['UserName'];
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $fullname = $_POST['FullName'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];
    
    if(isset($_POST['Subscription']) && 
    $_POST['Subscription'] == '1') 
    {
        $subscribe = "1";
    }
    else
    {
        $subscribe = "0";
    }

	#echo $lastname;
    
    
	$sql = "INSERT INTO SIGNUP (USERNAME, FIRSTNAME, LASTNAME, FULLNAME, PHONE, EMAIL, ADDRESS, SUBSCRIPTION) VALUES ('$username', '$firstname', '$lastname', '$fullname', '$phone', '$email', '$address', '$subscribe')";
	$result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    echo '<script type="text/javascript">'; 
	echo 'alert("Successfully signed up!");';		
	echo 'window.location.href = "/~ypenamak/Project/Attempt1/search.html"';
	echo '</script>';
		

    
?>
