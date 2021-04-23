<!DOCTYPE HTML>
<html>
	<body>
	<center><h1>Best Seller Books</h1></center>
	<br>

	<?php
		
		include 'dbconnection.php';
		
		$name = $_POST["BOOK_NAME"];
    	$author = $_POST["BOOK_AUTHOR"];
    	$ratings = $_POST["BOOK_RATINGS"];
    	$start_year = $_POST["start_year"];
    	$end_year = $_POST["end_year"];
    	$genre = $_POST["BOOK_GENRE"];
    	$price = $_POST["BOOK_PRICE"]; 

    	if (($start_year=="") && ($end_year==""))
    	{
    		$end_year=2019;
    		$start_year=2009;
    	}
    	else if (($start_year=="") && ($end_year != ""))
    	{
    		$start_year=$end_year;
    	}
    	else if (($start_year != "") && ($end_year == ""))
    	{
    		$end_year=$start_year;
    	}

		if ($price == "-1") {
        	$price = "150";
    	}

		if ($genre == "Both" or $genre == ""){
        	$genre = "%%"; 
    	}
       
		$query = "SELECT * FROM BESTSELLERS 
				  WHERE BOOK_NAME LIKE '%$name%' 
				  		AND BOOK_AUTHOR LIKE '%$author%' 
				  		AND BOOK_RATINGS >= '$ratings' 
				  		AND BOOK_PUB_YEAR BETWEEN '$start_year' AND '$end_year'
				  		AND BOOK_GENRE LIKE '$genre' 
				  		AND BOOK_PRICE <= '$price'";


		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result)>0){
		?>

		<table border="1" align="center" cellpadding="5" cellspacing="5">

			<tr>
				<th> BOOK NAME </th>
				<th> AUTHOR </th>
				<th> USER RATINGS </th>
				<th> TOTAL REVIEWS </th>
				<th> PRICE </th>
				<th> PUBLISHED YEAR </th>
				<th> GENRE </th>
			</tr>

			<?php while($row = mysqli_fetch_assoc($result))
			{
			?>
			<tr>
				<td><?php echo $row['BOOK_NAME'];?> </td>
				<td><?php echo $row['BOOK_AUTHOR'];?> </td>
				<td><?php echo $row['BOOK_RATINGS'];?> </td>
				<td><?php echo $row['BOOK_REVIEWS'];?> </td>
				<td><?php echo $row['BOOK_PRICE'];?> </td>
				<td><?php echo $row['BOOK_PUB_YEAR'];?> </td>
				<td><?php echo $row['BOOK_GENRE'];?> </td>
			</tr>
			<?php
			}
		
		echo "<center><a href=\"javascript:history.go(-1)\">Continue Searching</a></center>";
		
		
		}
		else{
			echo "<center><b>Sorry! This book is not available!</b></center>";
			
			echo "<center><a href=\"javascript:history.go(-1)\">Continue Searching</a></center>";
		}
		?>
		</table>
	</body>	
</html>
