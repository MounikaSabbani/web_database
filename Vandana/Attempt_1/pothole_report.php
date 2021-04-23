<?php
	
	include 'dbconnection.php';

    $Pothole_Name = $_POST['Pothole_Name'];
    $Status = $_POST['Status'];
    $username = $_POST['UserName'];
    $Description = $_POST['Description'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Zip_Code = $_POST['Zip_Code'];
    $Pothole_Circumference = $_POST['Pothole_Circumference'];
    $Pothole_Depth = $_POST['Pothole_Depth'];
    $Create_Date = getdate();
    //echo($Create_Date);

    //$password = $_POST['Password'];
    //echo($Pothole_Name);
	$sql = "SELECT Pothole_Name FROM POTHOLES";
	$result = mysqli_query($conn, $sql);
    $exists = 0;
    // echo('error0')
	if (mysqli_num_rows($result) > 0) {
        // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
            if ($row['Pothole_Name'] == $_POST['Pothole_Name']) {
                $exists = 1;
            }	    
        }
	} 
    //echo('error1');
    if ($exists != 0) {
        $msg = "This pothole already exists. Please submit a new one";
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        mysqli_close($conn);
        header('Location: /pothole_report.html');
    }
    else {
        $msg = "Thank you for submitting!";
        //echo('error3');
        $sql = "INSERT INTO POTHOLES (Pothole_Name, Status, USER_ID, Description, Address, City, State, Zip_Code, Pothole_Circumference, Pothole_Depth, Create_Date, Update_Date) 
                        VALUES ('$Pothole_Name', '$Status', '$username', '$Description', '$Address', '$City', '$State', $Zip_Code, $Pothole_Circumference, $Pothole_Depth, sysdate(), NULL)";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
       
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        mysqli_close($conn);
        //header("Location: /login.php?username=".$username);
    }

?>
