<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Hi, Admin!</title>
		  <h1>Story Details</h1>
	</head>
	<body>
		
		<?php
		include 'dbconnection.php';

		$html = "<html><table style='width:50%' border='3px solid green'><tr>
			<th>Story ID</th>
    		<th>Author Name</th>
    		<th>Story Name</th>
			<th>Genre</th>
			<th>Age_group</th>
    		<th>Status</th></tr>";

		// get id
		$sql1 = "SELECT STORY_ID, STORY_NAME, AUTHOR_NAME, AGE_GROUP, STORY_GENRE, STORY_STATUS 	 FROM STORIES 
				 WHERE STORY_STATUS = 'Accepted'";

		$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
	    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
	    	
				$html = $html."<tr><td>".$row['STORY_ID']."</td><td>".$row['AUTHOR_NAME']."</td><td>".$row['STORY_NAME']."</td><td>".$row['STORY_GENRE']."</td><td>".$row['AGE_GROUP']."</td><td>".$row['STORY_STATUS']."</td></tr>";
	    	}
		} else {
		    echo "No results";
		}
	
		$html=$html."</table></html>";
		echo $html;
        echo "<a href=\"javascript:history.go(-1)\">GO BACK to Admin Home Page</a>";
		mysqli_close($conn);

		?>
        
	</body>
</html>