<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Hi Admin</title>
		  <h1>Story details</h1>
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
		$sql1 = "SELECT S.Story_id, S.Author_name, S.Story_name,S.Story_Genre, S.Age_group, S.story_status, S.Filename FROM STORIES S 
		where S.Story_Status = 'Accepted'
		order by S.Age_group desc
		";

		$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
	    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
				//$story_name_var= 'sample.html' ; 
				//$row['Filename'];
				
				
				$html = $html."<tr><td>".$row['Story_id']."</td><td>".$row['Author_name']."</td><td><a href='display_story.php?filename=".$row['Filename']."'>".$row['Story_name']."</a>.</td><td>".$row['Story_Genre']."</td><td>".$row['Age_group']."</td><td>".$row['story_status']."</td></tr>";
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