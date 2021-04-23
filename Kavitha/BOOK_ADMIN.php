<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Hi Admin</title>
		  <h2>Stories Waiting for Approval</h2>
	</head>
	<body>
		<form action="REVIEW_REJCT_ACCPT.php" method="post">
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
			<th>Age_group</th>
    		<th>Status</th></tr>";

		// get id
		$sql1 = "SELECT S.Story_id, SI.Author_name, SI.Storyname,SI.Genre, SI.Age_group, SI.Status FROM STORIES S join story_info SI on S.Story_ID = SI.Story_ID
		and SI.Status not in  ('Accepted' ,'Rejected')
		";

		$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
	    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
	    	
				$html = $html."<tr><td>".$row['Story_id']."</td><td>".$row['Author_name']."</td><td>".$row['Storyname']."</td><td>".$row['Genre']."</td><td>".$row['Age_group']."</td><td>".$row['Status']."</td></tr>";
	    	}
		} else {
			echo "No Stories to Approve";
			
		}
	
		$html=$html."</table></html>";
		echo $html;
		echo "<a href=\"javascript:history.go(-1)\">GO BACK to Admin Home Page</a>";
		
		mysqli_close($conn);

		?>
        
	</body>
</html>