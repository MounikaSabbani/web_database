<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<style>
		iframe{
			}
		</style>

	</head>
	<body>
		
		<?php

       include  'dbconnection.php';

       
	   $story_id = $_GET['storyid'];
       
       $sql2 = "SELECT  S.Story_id,S.Story_name,S.Story_image 
		FROM STORIES S 
		where S.Story_id = ".$story_id
		;
	   
		$result_story = mysqli_fetch_assoc(mysqli_query($conn, $sql2));
	     // read the image file as blob from stories table and convert into base64 encoding.
		$html = "<html><h1>".$result_story['Story_name']."</h1><img src = data:image/jpeg;base64,".base64_encode($result_story['Story_image'])." class=\"center\"> <p><a href=\"javascript:history.go(-1)\">GO BACK to Previous Page view</a></p>";
		
	   echo $html;
       
		?>
        
	</body>
</html>

