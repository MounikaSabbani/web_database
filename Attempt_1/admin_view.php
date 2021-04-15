
<?php
	
	include 'dbconnection.php';
    	$sql = "SELECT ID, Pothole_Name, Status, Description, Address, City, State, Pothole_Circumference, Pothole_Depth FROM POTHOLES";
		$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$fin_ech = '<table border="1" cellspacing="0" cellpadding="0" width="500" align="center"><tr><th>PotholeId</th><th>Name</th><th>Status</th><th>Description</th><th>Address</th><th>City</th><th>State</th><th>Circumference</th><th>Depth</th><tr>';
			while($row = mysqli_fetch_assoc($result)) {
				$fin_ech = $fin_ech."<tr><td>".$row['ID']."</td><td>".$row['Pothole_Name']."</td><td>".$row['Status']."</td><td>".$row['Description']."</td><td>".$row['Address']."</td><td>".$row['City']."</td><td>".$row['State']."</td><td>".$row['Pothole_Circumference']."</td><td>".$row['Pothole_Depth']."</td></tr>";
			}
	} 
    else {
		echo "No results";
	}
	echo $fin_ech."</table>";
    echo '<form action="update_form.php" method="POST"> Pothole_ID:<br> <input type="text" name="pothole_id"><br>Status:<br><input type="text" name="status"><br><br><br><input type="submit" name="submit" />';		


?>
