<!DOCTYPE HTML>
<html>
	<body>
	<center><h1>Below stories match your search criteria ...</h1></center>
	<br>

	<?php

	include 'dbconnection.php';

		$story_name = $_POST['story_name']; 
		$author_name = $_POST['author_name']; 
		$age_group = $_POST['age_group'];
		$pub_year = $_POST['pub_year'];
		$genre = $_POST['story_genre'];

		
		$html = "<html><table style='width:50%' border='3px solid green'><tr>
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

		$sql1 = "SELECT  S.Author_name, S.Story_name,S.Story_Genre, S.Age_group, S.Pub_Year, S.Filename 
		FROM STORIES S 
		where S.Story_Status = 'Accepted'".$var_and_clause
		;

	

		//echo $sql1;


		$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
	   
		    while($row = mysqli_fetch_assoc($result)) {
			
				$html = $html."<tr><td>".$row['Author_name']."</td><td><a href='display_story.php?filename=".$row['Filename']."'>".$row['Story_name']."</a>.</td><td>".$row['Story_Genre']."</td><td>".$row['Age_group']."</td><td>".$row['Pub_Year']."</td></tr>";
	    	
				
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