
<?php
	
	include 'dbconnection.php';
    
	$username = $_POST['UserName'];
	$password = $_POST['Password'];

	$sql = "SELECT USERNAME, PASSWORD, ISADMIN, ISAUTHOR FROM LOGIN WHERE USERNAME='$username' and PASSWORD='$password'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		$isadmin = 0;
		$isauthor = 0;
		while($row = mysqli_fetch_assoc($result)) {
			$isadmin = $row['ISADMIN'];
			$isauthor = $row['ISAUTHOR'];     
		}
		$sql2 = "SELECT USERNAME FROM SIGNUP WHERE USERNAME='$username'";
		$info = mysqli_query($conn, $sql2);
		echo mysqli_num_rows($info);
		
		if (mysqli_num_rows($info) > 0) {
			mysqli_close($conn);
				header('Location: /~msabbani/web_project/admin_user.html');
			}
			else if ($isauthor == 1) {
				header('Location: /~msabbani/web_project/author_user.html');
			}
			else{
				header("Location: /~msabbani/web_project/index.html?username=".$username);
			}
		}
		else {
			
			echo '<script type="text/javascript">'; 
			echo 'alert("It looks like we don not have any demographic information about you. Please submit it.");';		
			echo 'window.location.href = "/~msabbani/web_project/demographic.html?username='.$username.'"';
			echo '</script>';
			mysqli_close($conn);					
			
		}
				
	}
	else {
		echo '<script type="text/javascript">'; 
		echo 'alert("Wrong username and/or password -- or perhaps you need to register! Try again");';		
		echo 'window.location.href = "/~msabbani/web_project/login.html"';
		echo '</script>';
		mysqli_close($conn);
	}

	
	



?>
