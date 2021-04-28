<?php
	
	include 'dbconnection.php';
	$username = $_POST['USERNAME'];
	$password = $_POST['PASSWORD'];
	/*echo '$username';
	session_start();
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
    
	echo "Hi ".$_SESSION["username"];*/

	$sql = "SELECT USERNAME, PASSWORD, ISADMIN, ISAUTHOR FROM LOGIN WHERE USERNAME='$username' and PASSWORD='$password'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		session_start();
		$_SESSION["username"] = $username;
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
			if ($isadmin == 1 ) {
				$_SESSION["isAdmin"] = 1;
				$_SESSION["isAuthor"] = 0;
				$_SESSION["isUser"] = 0;
				header('Location: '.$file_location.'../html/admin_user.html');
			} elseif ($isauthor == 1) {
				$_SESSION["isAdmin"] = 0;
				$_SESSION["isAuthor"] = 1;
				$_SESSION["isUser"] = 0;
				header('Location: '.$file_location.'../html/author_user.html');
			} else {
				$_SESSION["isAdmin"] = 0;
				$_SESSION["isAuthor"] = 0;
				$_SESSION["isUser"] = 1;
				header("Location: ../php/index.php?username=".$username);
				//?username=".$username
			}
		}
		else {
			
			echo '<script type="text/javascript">'; 
			echo 'alert("It looks like we don not have any demographic information about you. Please submit it.");';		
			echo 'window.location.href = "'.$file_location.'../html/demographic.html?username='.$username.'"';
			echo '</script>';
			mysqli_close($conn);					
			
		}
				
	}
	else {
		echo '<script type="text/javascript">'; 
		//echo 'alert("Wrong username and/or password -- or perhaps you need to register! Try again");';		
		echo 'window.location.href = "'.$file_location.'../html/login.html"';
		echo '</script>';
		mysqli_close($conn);
	}

?>