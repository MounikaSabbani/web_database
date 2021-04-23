<?php

  include 'dbconnection.php';
		
  $sql = "SELECT * FROM STORIES WHERE story_id = 104";
  $result = mysqli_query($conn, $sql);
 
  if (mysqli_num_rows($result) > 0) {
  	while($row = mysqli_fetch_assoc($result)) {
  		?>
  			<tr>
  				<center><h2><b><td><?php echo $row['story_name']; ?></td></b></h2></center><br>
  				<center><h3><b><td><?php echo $row['author_name']; ?></td></b></h3></center>
  				<center><td><?php echo '<img src="data:image/*;base64,'.base64_encode($row['story_image']).'" alt="Image" style="height:300px; width:400px;">'; ?></td></center><br>
  				<center><td><?php echo $row['story_content']; ?></td><br><br></center>
  			</tr>

  		<?php
		}
	}
	else{
	    echo "No results!";
	}

  mysqli_close($conn);
?>
