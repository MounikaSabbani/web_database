<?php 
	session_start(); 
	$session_username = (isset($_SESSION["username"]))? $_SESSION["username"] : '';
	$session_isAuthor = (isset($_SESSION["isAuthor"]))? $_SESSION["isAuthor"] : 2;
	$session_isAdmin = (isset($_SESSION["isAdmin"]))? $_SESSION["isAdmin"] : 2;
	$session_isUser = (isset($_SESSION["isUser"]))? $_SESSION["isUser"] : 2;
?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
<head>

  <title>Author Uploads Stories</title>
  <style>
    .heading {
      text-align: left;
    }

    .instructions{
      text-align: left;
    }

    .upload {
      text-align: left;
    }

    * {box-sizing: border-box}
    body {
        background-image: url("../Pics/author.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-opacity: 0.5;
        /*background-color:  #cccccc(0, 128, 0, 0.4);*/
    } 


    .tabbutton {
      background-color: skyblue;
      font-family: 'Alice';
      font-weight: bold;
      color: black;
      font-size: 16px;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 10px;
    }

    /* Change background color of buttons on hover */
   .tabbutton:hover {
      background-color: darkgray;
      opacity: 0.6;
    }

    /* Create an active/current tablink class */
    .tabbutton.active {
       background-color: #ccc;
    }

    html, body{       
        height: 100%;
        margin: 0;        
      }   
    
    .heading {        
        text-align: center;       
        
    }
    .instructions {
      text-align: center;
    }
    
    .search {
      text-align: center;
    }
    
    .button {
    border: none;
    color: white;
    padding: 4px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    margin: 2px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    }    
    .search1 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
    
    }
    .search1:hover {
    background-color: #008CBA;
    color: white;
    }
    .subscribe{
      background-color: darkred;
      color: white;
      width: 10%;
      font-size: 14px;
      
    }
    .subscribe:hover{
      background-color: #008CBA;
      color: brown;
      opacity: 2;
      animation: reverse;
      
    }

    /* Add a black background color to the top navigation */
    .topnav {
      background-color: #333;
      overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 10px 16px;
      text-decoration: none;
      font-size: 15px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.home {
      background-color: #008CBA;
      color: white;
    }
    table {
      width:100%;
      
    }
    table, th, td {
      border: 2px solid #008CBA;
      border-collapse: collapse;
      background-color: #ffc34d;
    }
    
    * {box-sizing: border-box}
    

  /* Style tab links */
  .tablink {
    background-color: #ff6666;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    font-weight: bold;
    width: 50%;
  }

  .tablink:hover {
    background-color: #777;
  }

  /* Style the tab content (and add height:100% for full page content) */
  .tabcontent {
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
  }

  .hidden {
      display: none;
  }

  .status {
      background-color: transparent;
      color: white; 
      float: right;
      text-align: center;
      padding: 10px 16px;
      font-weight: bold;
  }
  </style>

  
</head>

<body> 
<main>        
  <div class="topnav">
          <a class="home" href="index.php "><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          <a class = "admin" style= "float: right;" href="admin_view.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Admin Page</a>
          <a class = "author" style= "float: right;" href="author_view.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Author Page</a>
          
          <a class = "login" style= "float: right;" href="../html/login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
          <a class = "signup" style="float: right;" href="../html/register.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>          
	  <a class = "logout hidden" style= "float: right;" href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i> | Logout</a>
	  <span class = "status hidden"></span>

        </div>
    </main>

<?php

include 'dbconnection.php';

  $sname = $_POST['STORY_NAME'];
	$aname = $_POST['AUTHOR_NAME'];
	$age = $_POST['AGE_GROUP'];
	$content = $_POST['STORY_CONTENT'];
	$genre = $_POST['STORY_GENRE'];
	$pubyear = $_POST['PUB_YEAR'];
	$ratings = $_POST['STORY_RATINGS'];

	$image = addslashes(file_get_contents($_FILES['STORY_IMAGE']['tmp_name']));


	// get id
	$sql = "SELECT MAX(RECORD_ID) AS RECORD_ID, MAX(STORY_ID) AS STORY_ID FROM STORIES";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$newid = $row['RECORD_ID'] + 1;
	$sid = $row['STORY_ID'] + 1;
 
 

	// insert records into the database in phpmyadmin
	$sql1 = "INSERT INTO STORIES (RECORD_ID, STORY_ID, STORY_NAME, AUTHOR_NAME, AGE_GROUP, STORY_CONTENT, STORY_IMAGE, STORY_GENRE, PUB_YEAR, STORY_RATINGS, STORY_REVIEWS, STORY_STATUS,USERNAME) 
	VALUES ('".$newid."', '".$sid."','".$sname."', '".$aname."', '".$age."', '".$content."', '".$image."', '".$genre."','".$pubyear."', '".$ratings."', '".$reviews."', 'New', '".$session_username."')" ;


	if (mysqli_query($conn, $sql1)) {
    	echo "You have successfully uploaded your story! <br>";
    	echo "Please wait for the admin to review your story..! <br>";
		echo "<a href=\"javascript:history.go(-1)\">Upload more stories</a>";
		echo "<p> </p>";
		echo "<a href=\"javascript:history.go(-1)\">GO BACK to Previous page View</a>";
		
	} else {
    	echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}


	mysqli_close($conn);


?>


</script>
<script>
		const sessionUserName = '<?php echo $session_username;?>';
		const sessionIsAuthor = Number('<?php echo $session_isAuthor;?>');
		const sessionIsAdmin = Number('<?php echo $session_isAdmin;?>');
		const sessionIsUser = Number('<?php echo $session_isUser;?>');
	</script>
	<script src="../js/sess.js"></script>
</body>
</html>
