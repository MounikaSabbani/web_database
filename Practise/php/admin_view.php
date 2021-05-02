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
        background-image: url("Background_light.jpeg");
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
    
    .center { margin-left: auto;
            margin-right: auto;
        }

    * {box-sizing: border-box}
    

  /* Style tab links */
  .tablinks {
    background-color: #ff9900;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 12px 14px;
    font-size: 15px;
    font-weight: bold;
    width: 20%;
  }

  .tablinks:hover {
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
  .blink_me {
  animation: blinker 1s linear infinite;
    }

  @keyframes blinker {
  50% {
    opacity: 0;
     }
      }

  
  </style>
	<head>
		<meta charset="utf-8">
		<title>Hi Admin</title>
	</head>
	<main>        
  <div class="topnav">
          <a class="home" href="index.php "><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          <a class = "admin" style= "float: right;" href="admin_view.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Admin Page</a>
          <a class = "author" style= "float: right;" href="author_view.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Author Page</a>
          
          <a class = "login" style= "float: right;" href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
          <a class = "signup" style="float: right;" href="register.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>          
	  <a class = "logout hidden" style= "float: right;" href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i> | Logout</a>
	  <span class = "status hidden"></span>

        </div>
    </main>
<body>


<h2>Hi ADMIN</h2>

<div class="blink_me"><b><i>Select a tab to proceed ... </i></b></div>
<p> </p>
<div class="tab">
  <button class="tablinks" onclick="opentab(event, 'View Stories')"><b>View Stories</b></button>
  <button class="tablinks" onclick="opentab(event, 'Approve Stories')"><b>Approve Stories</b></button>
  <button class="tablinks" onclick="opentab(event, 'Rejected Stories')"><b>Rejected Stories</b></button>
  <button class="tablinks" onclick="opentab(event, 'Switch to User view')"><b>Home</b></button>
</div>

<div id="View Stories" class="tabcontent">
  <h3>View all the approved Stories</h3>
  <button class="tablinks" onclick="window.location.href='approved_books.php'">View all Stories</button>
</div>


<div id="Approve Stories" class="tabcontent">
  <h3>List of stories waiting for approval</h3>
<button class="tablinks" onclick="window.location.href='book_admin.php'">Pending Approval</button>
</div>

<div id="Rejected Stories" class="tabcontent">
  <h3>To view the list of stories rejected till date, click below</h3>
<button class="tablinks" onclick="window.location.href='rejected_books.php'">Rejected list</button>
</div>

<div id="Switch to User view" class="tabcontent">
  <h3>Search for books</h3>
    <button class="tablinks" onclick="window.location.href='index.php'">Home</button> 
</div>


<script>
function opentab(evt, tabname) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabname).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</script>
<script>
		const sessionUserName = '<?php echo $session_username;?>';
		const sessionIsAuthor = Number('<?php echo $session_isAuthor;?>');
		const sessionIsAdmin = Number('<?php echo $session_isAdmin;?>');
		const sessionIsUser = Number('<?php echo $session_isUser;?>');
	</script>
	<script src="sess.js"></script>
</body>
</html>