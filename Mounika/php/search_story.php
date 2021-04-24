<?php
	include 'dbconnection.php';

		$story_name = $_POST['STORY_NAME']; 
		$author_name = $_POST['AUTHOR_NAME']; 
		$age_group = $_POST['AGE_GROUP'];
		$pub_year = $_POST['PUB_YEAR'];
		$genre = $_POST['STORY_GENRE'];

		
		$html = "<html><table style='width:50%' border='3px solid green'><tr>
    		<th>Author Name</th>
    		<th>Story Name</th>
			<th>Genre</th>
			<th>Age Group</th>
			<th>Published Year</th></tr>";

		// get id
		$sql1 = "SELECT STORY_NAME, AUTHOR_NAME, AGE_GROUP, STORY_GENRE, PUB_YEAR 
		FROM STORIES
		WHERE STORY_NAME LIKE '%$story_name%'
		AND AUTHOR_NAME LIKE '%autho_name%'
		AND AGE_GROUP LIKE '%age_group%'
		AND PUB_YEAR LIKE '%pub_year%'
		AND STORY_GENRE LIKE '%genre%'";


		$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
	    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
	    	
				$html = $html."<tr>
								<td>".$row['AUTHOR_NAME']."</td>
								<td><a href='story1.php'>READ THE STORY</a></td>
								<td>".$row['STORY_GENRE']."</td>
								<td>".$row['AGE_GROUP']."</td>
								<td>".$row['STORY_STATUS']."</td>
								</tr>";
	    	}
		} else {
		    echo "No results";
		}
	
		$html=$html."</table></html>";
		echo $html;
        echo "<a href=\"javascript:history.go(-1)\">GO BACK to Author View</a>";
		mysqli_close($conn);

		?>
        
	</body>
</html>