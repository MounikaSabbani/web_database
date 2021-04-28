<?php 
	session_start(); 
	$session_username = (isset($_SESSION["username"]))? $_SESSION["username"] : '';
	$session_isAuthor = (isset($_SESSION["isAuthor"]))? $_SESSION["isAuthor"] : 2;
	$session_isAdmin = (isset($_SESSION["isAdmin"]))? $_SESSION["isAdmin"] : 2;
	$session_isUser = (isset($_SESSION["isUser"]))? $_SESSION["isUser"] : 2;
?>

<!DOCTYPE html>
<html lang="en">
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
	body {
        background-image: url("../Pics/Background_light.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-opacity: 0.5;
        /*background-color:  #cccccc(0, 128, 0, 0.4);*/
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
	.center { margin-left: auto;
            margin-right: auto;
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
	<head>
		<meta charset="utf-8">
		<title>Approved books </title>
	</head>
	<main>        
  <div class="topnav">
          <a class="home" href="index.php "><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          <a class = "admin" style= "float: right;" href="..admin_view.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Admin Page</a>
          <a class = "author" style= "float: right;" href="author_view.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Author Page</a>
          
          <a class = "login" style= "float: right;" href="../html/login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
          <a class = "signup" style="float: right;" href="../html/register.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>          
	  <a class = "logout hidden" style= "float: right;" href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i> | Logout</a>
	  <span class = "status hidden"></span>

        </div>
    </main>
<body>
		
		<?php
		include 'dbconnection.php';

		$html = "<html><p> </p> <table class = 'center' style='width:50%' border='3px solid green'><tr>
			<th>Story ID</th>
			<th>Author Name</th>
    		<th>Story Name</th>
			<th>Genre</th>
			<th>Age Group</th>
			<th>Story Status</th></tr>";

		// get id
		$sql1 = "SELECT S.Story_id, S.Author_name, S.Story_name,S.Story_Genre, S.Age_group, S.story_status FROM STORIES S 
		where S.story_status = 'Accepted'
		order by S.Age_group desc
		";

		$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
	    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
				//$story_name_var= 'sample.html' ; 
				//$row['Filename'];
				
				
				//$html = $html."<tr><td>".$row['Story_id']."</td><td>".$row['Author_name']."</td><td><a href='display_story.php?filename=".$row['Filename']."'>".$row['Story_name']."</a>.</td><td>".$row['Story_Genre']."</td><td>".$row['Age_group']."</td><td>".$row['story_status']."</td></tr>";
				$html = $html."<tr><td>".$row['Story_id']."</td><td>".$row['Author_name']."</td><td><a href='admin_display_story.php?storyid=".$row['Story_id']."'>".$row['Story_name']."</a>.</td><td>".$row['Story_Genre']."</td><td>".$row['Age_group']."</td><td>".$row['story_status']."</td></tr>";
	    	}
		} else {
		    echo "No results";
		}
	
		$html=$html."</table></html>";
		echo $html;
        echo "<a href=\"admin_view.php\">GO BACK to Admin Home Page</a>";
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