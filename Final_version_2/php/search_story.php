<?php 
	session_start(); 
	$session_username = (isset($_SESSION["username"]))? $_SESSION["username"] : '';
	$session_isAuthor = (isset($_SESSION["isAuthor"]))? $_SESSION["isAuthor"] : 2;
	$session_isAdmin = (isset($_SESSION["isAdmin"]))? $_SESSION["isAdmin"] : 2;
	$session_isUser = (isset($_SESSION["isUser"]))? $_SESSION["isUser"] : 2;
?>

<!DOCTYPE HTML>
<html>
<style>
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
  .center { margin-left: auto;
            margin-right: auto;
  }
  .th,td{ font-size: 24px}
    
  </style>
  <head>

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


	<center><h1>Below stories match your search criteria ...</h1></center>
	<br>

	<?php

	include 'dbconnection.php';

		$story_name = $_POST['STORY_NAME']; 
		$author_name = $_POST['AUTHOR_NAME']; 
		$age_group = $_POST['AGE_GROUP'];
		$pub_year = $_POST['PUB_YEAR'];
		$genre = $_POST['STORY_GENRE'];
     
		
		$html = "<html><table class = 'center' style='width:50%' border='3px solid green'><tr>
    		<th>Author Name</th>
    		<th>Story Name</th>
			<th>Genre</th>
			<th>Age Group</th>
			<th>Published Year</th></tr>";
			
		$var_and_clause='';
		if ($story_name!="")
    	{
    		$var_and_clause=$var_and_clause." and  S.STORY_NAME LIKE '%".$story_name."%' ";
		}
		if ($author_name!="")
    	{
    		$var_and_clause=$var_and_clause." and  S.AUTHOR_NAME LIKE '%".$author_name."%' ";
		}
		if ($age_group!="")
    	{
    		$var_and_clause=$var_and_clause." and  S.AGE_GROUP LIKE '%".$age_group."%' ";
		}
		if ($pub_year!="")
    	{
    		$var_and_clause=$var_and_clause." and  S.PUB_YEAR LIKE '%".$pub_year."%' ";
		}
		if ($genre!="")
    	{
    		$var_and_clause=$var_and_clause." and  S.STORY_GENRE LIKE '%".$genre."%' ";
		}

		$sql1 = "SELECT  S.Story_id,S.Author_name, S.Story_name,S.Story_Genre, S.Age_group, S.Pub_Year 
		FROM STORIES S 
		where S.Story_Status = 'Accepted'".$var_and_clause
		;

    
		//echo $sql1;


		$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
	   
		    while($row = mysqli_fetch_assoc($result)) {
			
				$html = $html."<tr><td>".$row['Author_name']."</td><td><a href='display_story.php?storyid=".$row['Story_id']."'>".$row['Story_name']."</a>.</td><td>".$row['Story_Genre']."</td><td>".$row['Age_group']."</td><td>".$row['Pub_Year']."</td></tr>";
	    	//// call the display_story.php script with story id as parameter from the selected story.
				
	    	}
		} else {
		    echo "No results";
		}
	
		$html=$html."</table></html>";
		echo $html;
        echo "<a href=\"index.php\">GO BACK to Previous page View</a>";
		mysqli_close($conn);

		?>
		
	<script>
		const sessionUserName = '<?php echo $session_username;?>';
		const sessionIsAuthor = Number('<?php echo $session_isAuthor;?>');
		const sessionIsAdmin = Number('<?php echo $session_isAdmin;?>');
		const sessionIsUser = Number('<?php echo $session_isUser;?>');
    //<?php echo "<a href=\"javascript:history.go(-1)\">GO BACK to Previous Page View</a>"; ?>
	</script>
	<script src="../js/sess.js"></script>



	</body>
</html>