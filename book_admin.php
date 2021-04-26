<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Hi Admin</title>
		  <h2>Stories Waiting for Approval</h2>
	</head>
	<body>
		<form action="review_reject_accept.php" method="post">
		  Enter Story ID : <input type="text" name="StoryID">
    		<select id="status" name="status">
        		<option selected="selected">Update Status</option>
 				<option value="Review">Review</option>
         		<option value="Accepted">Approve</option>
          		<option value="Rejected">Reject</option>
    		</select>
    		<input type="submit" value="Submit"><br><br>
		</form>
		<?php
		include 'dbconnection.php';

		$html = "<html><table style='width:50%' border='3px solid green'><tr>
			<th>Story ID</th>
    		<th>Author Name</th>
    		<th>Story Name</th>
			<th>Genre</th>
			<th>Age Group</th>
    		<th>Story Status</th></tr>";
			

		// get id
		$sql1 = "SELECT S.story_id, S.author_name, S.story_name,S.story_genre, S.age_group, S.story_status FROM STORIES S 
			where S.story_status not in  ('Accepted' ,'Rejected')
			order by S.age_group desc
		";

		$result = mysqli_query($conn, $sql1);
        
		if (mysqli_num_rows($result) > 0) {
	    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
				$html = $html."<tr><td>".$row['story_id']."</td><td>".$row['author_name']."</td><td><a href='display_story.php?storyid=".$row['story_id']."'>".$row['story_name']."</a>.</td><td>".$row['story_genre']."</td><td>".$row['age_group']."</td><td>".$row['story_status']."</td></tr>";
				//$html = $html."<tr><td>".$row['story_id']."</td><td>".$row['author_name']."</td><td><a href='display_story.php?filename=".$row['filename']."'>".$row['story_name']."</a>.</td><td>".$row['story_genre']."</td><td>".$row['age_group']."</td><td>".$row['story_status']."</td></tr>";
	    	}
		} else {
			echo "No Stories to Approve";
			
		}
	
		$html=$html."</table></html>";
		echo $html;
		echo "<a href=\"admin_view.html\">GO BACK to Admin Home Page</a>";
		
		
		mysqli_close($conn);

		?>
        
	</body>
</html>