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
       $file_name = $_GET['filename'];
       //$file_name="STORY_1.pdf";

	   $html = "<html><h1>Scroll to view story</h1><p><a href=\"javascript:history.go(-1)\">GO BACK to Admin Home Page</a></p><iframe src=".$file_name." onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+\"px\";}(this));' style=\"height:100px;width:100%;border:2px solid black;overflow:hidden;\" </iframe>";
	   //$html = $html."<a href=\"javascript:history.go(-1)\">GO BACK to Admin Home Page</a></p>";
	   
       echo $html;
       
		?>
        
	</body>
</html>