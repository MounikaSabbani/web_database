
<?php
	
	include 'dbconnection.php';
    
	$username = $_POST['UserName'];
	$password = $_POST['Password'];

	$sql = "SELECT USERNAME, PASSWORD, ISADMIN FROM LOGIN WHERE USERNAME='$username' and PASSWORD='$password'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$isadmin = 0;
		while($row = mysqli_fetch_assoc($result)) {
			$isadmin = $row['ISADMIN'];    
		}
		$sql2 = "SELECT USERNAME FROM SIGNUP WHERE USERNAME='$username'";
		$info = mysqli_query($conn, $sql2);
		echo mysqli_num_rows($info);
		
		if (mysqli_num_rows($info) > 0) {
			mysqli_close($conn);
			if ($isadmin != 0) {
				header('Location: /~ypenamak/Project/Attempt1/admin_user.html');
			}
			else{
				header("Location: /~ypenamak/Project/Attempt1/pothole_report.html?username=".$username);
			}
		}
		else {
			$msg = "It looks like we don't have any demographic information about you. Please submit it.";
			echo '<script type="text/javascript">alert("' . $msg . '")</script>';
			mysqli_close($conn);
			header("Location: /~ypenamak/Project/Attempt1/demographic.html?username=".$username);
			
			echo '<script type="text/javascript">'; 
			echo 'alert("review")';
			echo 'window.location.href = "/~ypenamak/Project/Attempt1/demographic.html?username=".$username"';
			echo '</script>';
		}
	}
	else {
		$msg = "Wrong username and/or password -- or perhaps you need to register! Try again";
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		mysqli_close($conn);
		header('Location: /~ypenamak/Project/Attempt1/index.html');
	}



?>
