<?php
	
	include 'dbconnection.php';

    $username = $_POST['UserName'];
    $password = $_POST['Password'];
    $confirm  = $_POST['ConfirmPassword'];
   
if ($author=="")
    	{
    		$author=0;
		}


    
	$sql = "SELECT USERNAME FROM LOGIN";
	$result = mysqli_query($conn, $sql);
    $exists = 0;
	if (mysqli_num_rows($result) > 0) {
        // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
            if ($row['USERNAME'] == $_POST['UserName']) {
                $exists = 1;
            }	    
        }
	} 
    if ($exists != 0) {
        $msg = "This user already exists. Please submit a new one or just login";
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        mysqli_close($conn);
        header('Location: '.$file_location.'../html/register.html');
    }
    if ($exists == 0) {
        $msg = "Thank you for registering!";
        $sql = "INSERT INTO LOGIN (USERNAME, PASSWORD, CONFIRM_PASSWORD, ISAUTHOR, ISADMIN) VALUES ('$username', '$password', '$confirm', '$author', '0')";
        $sql2 = "INSERT INTO SIGNUP (USERNAME) VALUES ('$username', '', '', '', '', '', '', '')";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        mysqli_close($conn);
          header("Location: ../html/demographic.html?username=$username");
    }

?>
