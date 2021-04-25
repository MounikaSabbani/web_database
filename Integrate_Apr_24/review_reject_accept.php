<?php
include 'dbconnection.php';
$status = $_POST['status']; 
$ReporterID = $_POST['StoryID']; 



$sql1 = "UPDATE STORIES SET story_status = '".$status."' WHERE Story_ID =".$ReporterID;
    

if (mysqli_query($conn, $sql1)) {
    echo "The status has been successfully updated for story - ";
    echo $StoryID;
    echo "<a href=\"book_admin.php\">GO BACK to Admin Review page</a>";
   
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
